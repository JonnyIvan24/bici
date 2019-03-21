import sys

if len(sys.argv) > 2:
    print("argumento 1: " + sys.argv[0])
    print("argumento 2: " + sys.argv[1])
    print("argumento 3: " + sys.argv[2])
else:
    print("no hay argumentos")
    print("este script necesita argumentos desde terminal, ejemplo: parametros.py 1 2 3")
    exit()

for i in range(3):
    print("hola "+str(i))
