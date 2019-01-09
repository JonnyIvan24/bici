""" documentación en https://code.tutsplus.com/es/tutorials/using-the-requests-module-in-python--cms-28204 """
import requests

"""req = requests.get('https://tutsplus.com/')
print(req.status_code)
print(req.url)"""

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
    directorio = {'velocidad': num1, 'dist_tot': num2}
    return directorio


valorGET = valores('#2.5#$3.6$')
req = requests.get('https://tutsplus.com/', params=valorGET)
print(req.status_code)
print(req.url)

'''url = 'https://tutsplus.com/guardar?velocidad='+valorGET['velocidad']+'&dist_tot='+valorGET['dist_tot']+'&bici=1'
print(url)'''

# peticion POST
# req = requests.post('https://en.wikipedia.org/w/index.php', data = {'search':'Nanotechnology'})

