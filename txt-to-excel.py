import csv
import openpyxl

input_file = 'fodase.txt'
output_file = 'fodase.xlsx'

wb = openpyxl.Workbook()
ws = wb.worksheets[0]

with open(input_file, 'r') as data:
    reader = csv.reader(data, delimiter='\t')
    for row in reader:
        ws.append(row)

wb.save(output_file)
