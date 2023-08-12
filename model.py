from sqlalchemy.schema import Column
from sqlalchemy.types import String, Integer, Date, BLOB, BigInteger, DATETIME, ARRAY,JSON
from database import base,db_engine

class Query(base):
    __tablename__ = "query"
    
    id = Column(Integer, primary_key=True,index=True)
    area = Column(String(100))
    wardnum = Column(Integer)
    query = Column(String(300))
    aff_image = Column(String(200))
    view=Column(Integer)
    latitude=Column(String(200))
    longitude=Column(String(200))
    status = Column(String(100))
    created_at=Column(DATETIME)
    updated_at=Column(DATETIME)
    
class Event(base):
    __tablename__="event"
    
    id=Column(Integer, primary_key=True,index=True)
    event_name = Column(String(100))
    event_dis=Column(String(200))
    event_link = Column(String(200))
    event_date = Column(DATETIME)
    status=Column(String(100))
    created_at=Column(DATETIME)
    updated_at=Column(DATETIME)   
    
class News(base):
    __tablename__="news"
    
    id=Column(Integer, primary_key=True,index=True)
    news_image=Column(String(300))
    news_title=Column(String(100))
    news_dis=Column(String(200))
    news_link=Column(String(200))
    status=Column(String(100))
    created_at=Column(DATETIME)
    updated_at=Column(DATETIME) 
    
class Contact(base):
    __tablename__="contact"
    
    id=Column(Integer, primary_key=True,index=True)
    logo=Column(String(200))
    name=Column(String(200))
    phone_num=Column(String(200))
    email=Column(String(200))
    status=Column(String(100))
    created_at=Column(DATETIME)
    updated_at=Column(DATETIME)
    
