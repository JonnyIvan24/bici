import serial
import serial.serialutil
import requests
import time
import sys

"""
recibe la cadena del puerto y regresa un directorio con los valores
"""


def valores(line):
    num1 = ''
    num2 = ''
    num3 = ''
    cont = 0
    for caracter in line:
        if caracter == '#' or caracter == "$" or caracter == "{" or caracter == "}":
            cont = cont + 1
            continue
        if cont == 1:
            num1 = num1 + caracter
        elif (cont == 3):
            num2 = num2 + caracter
        elif (cont == 5):
            num3 = num3 + caracter
    directorio = {'velocidad': num2, 'dist_tot': num1, 'bici': num3}
    return directorio

"""
recibe un puerto a leer y enviar los datos por post a un servidor
"""


def leerPuerto(puerto):
    with puerto:
        while True:
            line = puerto.readline()
            if not line:
                continue
            # .decode('ascci') quita el b'' al principio de cada linea
            parametros = valores(line.decode('ascii'))
            print(parametros)
            req = requests.post('http://localhost/bici/guardar.php', data=parametros)
            print(req.status_code)


'''
    com4 = bici 4
    com5 = 2
    com6 = 3
    com7 = 5 
    com8 = 1
'''

if len(sys.argv) > 1:
    num = int(sys.argv[1])
else:
    print("No hay argumentos")
    print("Este script necesita 1 argumento desde terminal, ejemplo: leer.py 1")
    exit()

# num = int(input("Numero de bici: "))
serial_com = ""

if num == 1:
    serial_com = "COM8"
elif num == 2:
    serial_com = "COM5"
elif num == 3:
    serial_com = "COM6"
elif num == 4:
    serial_com = "COM4"
elif num == 5:
    serial_com = "COM7"
else:
    print("Numero inválido")
    exit()

while True:
    try:
        puerto = serial.Serial(serial_com, baudrate=9600, timeout=1)
        leerPuerto(puerto)
    except serial.serialutil.SerialException as e:
        print("Error: " + str(e))
    finally:
        time.sleep(1)
