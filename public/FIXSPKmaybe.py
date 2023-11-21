import numpy as np
from pyDecision.algorithm import edas_method
import mysql.connector
import pandas as pd

# Connect to the MySQL database
db_config = {
    'host': 'localhost',
    'user': 'root',
    'password': '',
    'database': 'siswamapres'
}

conn = mysql.connector.connect(**db_config)

# Query data from MySQL database
query = 'SELECT * FROM api_datas'
df = pd.read_sql_query(query, conn)


# Extract the relevant columns from the DataFrame
columns_of_interest = ['ipk', 'alpha', 'sertifikat']
dataset = df[columns_of_interest].values

# Weights
weights = [0.25, 0.40, 0.20]

# Load Criterion Type: 'min' or 'max'
criterion_type = ['max', 'min', 'max']

# EDAS Method Call
rank = edas_method(dataset, criterion_type, weights)

hasil = []
hasil.append(rank)


update_query = 'UPDATE api_datas SET spk = %s WHERE id = %s'

for i, r in df.iterrows():
    cursor = conn.cursor()
    cursor.execute(update_query, (rank[i],r['id']))
    conn.commit()
    
cursor.close()
conn.close()
