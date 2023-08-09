from sqlalchemy import create_engine
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import sessionmaker

# Corrected DATABASE_URL without quotes
DATABASE_URL = 'mysql+pymysql://saran:Saranraj#123@localhost/saran'

db_engine = create_engine(DATABASE_URL)
SessionLocal = sessionmaker(autocommit=False, autoflush=False, bind=db_engine)

base = declarative_base()