import serial
import requests

"""
recibe la cadena del puerto y regresa un directorio con los valores
"""


def valores(line):
    num1 = ''
    num2 = ''
    cont = 0
    for caracter in line:
        if caracter == '#' or caracter == "$":
            cont = cont + 1
            continue
        if cont == 1:
            num1 = num1 + caracter
        elif (cont == 3):
            num2 = num2 + caracter
    directorio = {'velocidad': num1, 'dist_tot': num2, 'bici': '1'}
    return directorio


puerto = serial.Serial('COM5', baudrate=9600, timeout=1)
with puerto:
    while True:
        line = puerto.readline()
        if not line:
            continue
        # .decode('ascci') quita el b'' al principio de cada linea
        parametros = valores(line.decode('ascii'))
        req = requests.post('http://148.202.89.11/bici/guardar.php', data=parametros)
