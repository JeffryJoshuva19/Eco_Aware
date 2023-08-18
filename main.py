from fastapi import FastAPI,Form, Request, Depends,File,UploadFile
from fastapi.responses import HTMLResponse, JSONResponse
from fastapi.templating import Jinja2Templates
from sqlalchemy.orm import Session
from database import SessionLocal  
from fastapi.staticfiles import StaticFiles
from datetime import datetime
import model as model
from fastapi.responses import RedirectResponse
from fastapi import FastAPI, Depends
from fastapi.encoders import jsonable_encoder
from typing import Dict,List, Union,Optional
import os
import shutil, base64, io, uuid, re
import uuid
import json

current_date_time=datetime.utcnow()
app = FastAPI()

# Templates for the frontend/host directory
templates = Jinja2Templates(directory='frontend/templates')
app.mount("/frontend", StaticFiles(directory="frontend"), name="frontend")

# Templates for the frontend/adminpanel directory



def get_db():
    db = None
    try:
        db = SessionLocal()
        yield db
    finally:
        db.close()

@app.get('/get_home')
def get_home(request: Request, db: Session = Depends(get_db)):
    eventt=db.query(model.Event).filter(model.Event.status=="ACTIVE").all()
    return templates.TemplateResponse("home.php", context={"request": request,"eventt":eventt})



@app.post('/post_query')
def post_query(request: Request, db: Session = Depends(get_db),area:str=Form(...),wnum:int=Form(...),query:str=Form(...),qimage:UploadFile=File(...),qlatitude:str=Form(...),qlongitude:str=Form(...)):
    print("*")
    statuss="ACTIVE"
    view=0
    created_at = current_date_time
    updated_at=current_date_time
    file_type = qimage.content_type
    extention = file_type.split('/')[-1]
    image_file1 = str(uuid.uuid4())+ '.' + str(extention)
    
    file_location = f"frontend/resource/upload_image/{image_file1}"
    with open(file_location, "wb+") as file_object:
      shutil.copyfileobj(qimage.file, file_object)
    body=model.Query(area=area, wardnum=wnum,query=query,aff_image=image_file1,latitude=qlatitude,longitude=qlongitude,status=statuss,created_at=created_at,updated_at=updated_at,view=view)
    db.add(body)
    db.commit()
    return RedirectResponse("/get_home", status_code=303)


@app.get('/get_qdetails')
def get_details(request:Request,db:Session=Depends(get_db)):
    rquerys=db.query(model.Query).filter(model.Query.status=="ACTIVE").all()
    rquerys1=db.query(model.Query).all()
    complete=0
    receved=0
    incomplete=0
    for i in rquerys1:
        receved+=1
    for i in rquerys1:
        if i.status=="INACTIVE":
           complete+=1
    for i in rquerys:
        if i.status=="ACTIVE":
           incomplete+=1
    
    return templates.TemplateResponse("querydetails.php",context={"request":request,"rquerys":rquerys,"complete":complete,"incomplete":incomplete,"receved":receved})

@app.get('/delete_query/{id}')
def delete_query(id:int,request:Request,db:Session=Depends(get_db)):
    db.query(model.Query).filter(model.Query.id==id).update({"status": "INACTIVE"}) 
    db.commit()
    error = "Successfully Updated"
    return JSONResponse(content=error)


@app.get('/get_admin')
def get_admin(request:Request,db:Session=Depends(get_db)):
    queryy=db.query(model.Query).filter(model.Query.status=="ACTIVE").all()
    eventt=db.query(model.Event).filter(model.Event.status=="Active").all()
    newss=db.query(model.News).filter(model.News.status=="Active").all()
    contactt=db.query(model.Contact).filter(model.Contact.status=="Active").all()
    return templates.TemplateResponse("admin.php",context={"request":request,"queryy":queryy,"eventt":eventt,"newss":newss,"contactt":contactt})
    
@app.post('/post_event')
def post_event(request:Request,db:Session=Depends(get_db),eventname:str=Form(...),eventdis:str=Form(...),eventlink:str=Form(...),eventdate:str=Form(...)):
    statuss="ACTIVE"
    created_at=current_date_time
    updated_at=" "
    find=db.query(model.Event).filter(model.Event.event_name==eventname,model.Event.event_date==eventdate,model.Event.event_link==eventlink).first()
    if find is None:
        body=model.Event(event_name=eventname,event_dis=eventdis,event_link=eventlink,event_date=eventdate,status=statuss,created_at=created_at,updated_at=updated_at)
        db.add(body)
        db.commit()
        return RedirectResponse("/get_admin",status_code=303)
    else:
        error=0

@app.get('/delete_event/{id}')
def delete_query(id:int,request:Request,db:Session=Depends(get_db)):
    db.query(model.Event).filter(model.Event.id==id).update({"status": "INACTIVE"}) 
    db.commit()
    error = "Successfully Updated"
    return JSONResponse(content=error)

@app.put('/put_event/{id}')
def put_event(id:int,request:Request,db:Session=Depends(get_db)):
    find=db.query(model.Event).filter(model.Event.id==id,model.Event.status=="ACTIVE").first()
    json_compatible_item_data = jsonable_encoder(find)
    return JSONResponse(content=json_compatible_item_data)

@app.post('/update_event')
def update_event(request:Request,db:Session=Depends(get_db),editid:int=Form(...),edit_eventname:str=Form(...),edit_eventdis:str=Form(...),edit_eventlink:str=Form(...),edit_eventdate:str=Form(...)):
    find = db.query(model.Event).filter(model.Event.id != editid, model.Event.event_name == edit_eventname, model.Event.event_dis == edit_eventdis,model.Event.event_link==edit_eventlink,model.Event.event_date==edit_eventdate,model.Event.status == "ACTIVE").first()
    if find is None:
        updated_at = current_date_time
        db.query(model.Event).filter(model.Event.id==editid).update({"event_name": edit_eventname,"event_dis": edit_eventdis,"event_link": edit_eventlink,"event_date":edit_eventdate,"updated_at": updated_at})    
        db.commit()
        error = "Successfully Inserted"
        json_compatible_item_data = jsonable_encoder(error)
        return JSONResponse(content=error)
    else:
        error = "Already this event Exist"
        json_compatible_item_data = jsonable_encoder(error)
        return JSONResponse(content=error)

@app.post('/post_news')
def post_news(request:Request,db:Session=Depends(get_db),newsimage: UploadFile = File(...),newstitle:str=Form(...),newsdis:str=Form(...),newslink:str=Form(...)):
    statuss="ACTIVE"
    created_at=current_date_time
    updated_at=current_date_time
    file_type = newsimage.content_type
    extention = file_type.split('/')[-1]
    image_file1 = str(uuid.uuid4())+ '.' + str(extention)
    
    file_location = f"frontend/resource/upload_image/{image_file1}"
    with open(file_location, "wb+") as file_object:
      shutil.copyfileobj(newsimage.file, file_object)
    
    body=model.News(news_image=image_file1,news_title=newstitle,news_dis=newsdis,news_link=newslink,status=statuss,created_at=created_at,updated_at=updated_at)
    db.add(body)
    db.commit()
    return RedirectResponse("/get_admin",status_code=303)
    
@app.put('/put_query/{id}')
def fetch_query(id:int,request:Request,db:Session=Depends(get_db)):
    view=1
    db.query(model.Query).filter(model.Query.id==id).update({"view":view})
    db.commit()
    find=db.query(model.Query).filter(model.Query.id==id,model.Query.status=="ACTIVE").first()
    json_compatible_item_data = jsonable_encoder(find)
    return JSONResponse(content=json_compatible_item_data)
    
@app.put('/put_eventdis/{id}')
def fetch_query(id:int,request:Request,db:Session=Depends(get_db)):
    find=db.query(model.Event).filter(model.Event.id==id,model.Event.status=="ACTIVE").first()
    json_compatible_item_data = jsonable_encoder(find)
    return JSONResponse(content=json_compatible_item_data)

@app.put('/put_newsdis/{id}')
def fetch_query(id:int,request:Request,db:Session=Depends(get_db)):
    find=db.query(model.News).filter(model.News.id==id,model.News.status=="ACTIVE").first()
    json_compatible_item_data = jsonable_encoder(find)
    return JSONResponse(content=json_compatible_item_data)

@app.get('/delete_news/{id}')
def delete_query(id:int,request:Request,db:Session=Depends(get_db)):
    db.query(model.News).filter(model.News.id==id).update({"status": "INACTIVE"}) 
    db.commit()
    error = "Successfully Updated"
    return JSONResponse(content=error)

@app.put('/put_news/{id}')
def put_event(id:int,request:Request,db:Session=Depends(get_db)):
    find=db.query(model.News).filter(model.News.id==id,model.News.status=="ACTIVE").first()
    json_compatible_item_data = jsonable_encoder(find)
    return JSONResponse(content=json_compatible_item_data)

@app.post('/update_news')
def update_event(request:Request,db:Session=Depends(get_db),editnewid:int=Form(...),edit_newsimagev:UploadFile = File(...),edit_newstitle:str=Form(...),edit_newsdis:str=Form(...),edit_newslink:str=Form(...)):
    
    file_type = edit_newsimagev.content_type
    extention = file_type.split('/')[-1]
    image_file1 = str(uuid.uuid4())+ '.' + str(extention)
    
    file_location = f"frontend/resource/upload_image/{image_file1}"
    with open(file_location, "wb+") as file_object:
      shutil.copyfileobj(edit_newsimagev.file, file_object)
    updated_at = current_date_time
    db.query(model.News).filter(model.News.id==editnewid).update({"news_image": image_file1,"news_title":edit_newstitle,"news_dis": edit_newsdis,"news_link":edit_newslink,"updated_at": updated_at})    
    db.commit()
    return RedirectResponse("/get_admin",status_code=303)
   
@app.post('/post_contact')
def post_contact(request:Request,db:Session=Depends(get_db),contact_img:UploadFile=File(...),contact_name:str=Form(...),phone_num:str=Form(...),email:str=Form(...)):
    file_type = contact_img.content_type
    extention = file_type.split('/')[-1]
    image_file1 = str(uuid.uuid4())+ '.' + str(extention)
    
    file_location = f"frontend/resource/upload_image/{image_file1}"
    with open(file_location, "wb+") as file_object:
      shutil.copyfileobj(contact_img.file, file_object)
      created_at=current_date_time
      statuss="ACTIVE"
      updated_at=current_date_time
    body=model.Contact(logo=image_file1,name=contact_name,phone_num=phone_num,email=email,status=statuss,created_at=created_at,updated_at=updated_at)
    db.add(body)
    db.commit()
    return RedirectResponse("/get_admin",status_code=303)

@app.get('/delete_contact/{id}')
def delete_query(id:int,request:Request,db:Session=Depends(get_db)):
    db.query(model.Contact).filter(model.Contact.id==id).update({"status": "INACTIVE"}) 
    db.commit()
    error = "Successfully Updated"
    return JSONResponse(content=error)

@app.post('/update_contact')
def update_event(request:Request,db:Session=Depends(get_db),editconid:int=Form(...),edit_contactimg:UploadFile = File(...),edit_contactname:str=Form(...),edit_phonenum:str=Form(...),edit_email:str=Form(...)):
    
    file_type = edit_contactimg.content_type
    extention = file_type.split('/')[-1]
    image_file1 = str(uuid.uuid4())+ '.' + str(extention)
    
    file_location = f"frontend/resource/upload_image/{image_file1}"
    with open(file_location, "wb+") as file_object:
      shutil.copyfileobj(edit_contactimg.file, file_object)
    updated_at = current_date_time
    db.query(model.Contact).filter(model.Contact.id==editconid).update({"logo": image_file1,"name":edit_contactname,"phone_num": edit_phonenum,"email":edit_email,"updated_at": updated_at})    
    db.commit()
    return RedirectResponse("/get_admin",status_code=303)

@app.put('/put_contact/{id}')
def put_event(id:int,request:Request,db:Session=Depends(get_db)):
    find=db.query(model.Contact).filter(model.Contact.id==id,model.Contact.status=="ACTIVE").first()
    json_compatible_item_data = jsonable_encoder(find)
    return JSONResponse(content=json_compatible_item_data)

@app.get('/get_plant')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("plant.php", context={"request": request})

@app.get('/get_water')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("water.php", context={"request": request})

@app.get('/get_waste')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("waste.php", context={"request": request})
    
@app.get('/get_watersteps')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("watersteps.php", context={"request": request})

@app.get('/get_watercontroll')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("watercontroll.php", context={"request": request})

@app.get('/get_vaigai')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("vaigai.php", context={"request": request})

@app.get('/get_contact')
def get_plant(request:Request,db:Session=Depends(get_db)):
    cont=db.query(model.Contact).filter(model.Contact.status=="ACTIVE").all()
    return templates.TemplateResponse("contact.php", context={"request": request,"data":cont})

@app.get('/get_activity')
def get_plant(request:Request,db:Session=Depends(get_db)):
    act=db.query(model.News).filter(model.News.status=="ACTIVE").all()
    return templates.TemplateResponse("activity.php", context={"request": request,"data":act})
@app.get('/get_air')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("air.php", context={"request": request})

@app.get('/get_airsteps')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("airsteps.php", context={"request": request})

@app.get('/get_donate')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("donate.php", context={"request": request})

@app.get('/get_achieve')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("achieve.php", context={"request": request})

@app.get('/get_cashpay')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("cashpay.php", context={"request": request})

@app.get('/get_policies')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("policy.php", context={"request": request})

@app.get('/get_rainwater')
def get_plant(request:Request,db:Session=Depends(get_db)):
    return templates.TemplateResponse("rainwater.php", context={"request": request})