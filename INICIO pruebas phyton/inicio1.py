# para restaurar la BD ejecutar: mysql -u root -p
#luego poner el pass q es por defecto -toor-
#aparece una consola: mysql>
#luego restaurares asi: source /home/alumno/www/coorpyonsy.sql
#para ver las base de datos: show databases;
#usar una BD: use coorpyonsy.sql
#para ver la descripcion de una tabla: describe tabla;
#
#
#
#
#
#




import MySQLdb
import getpass

usuario=str(raw_input('		Usuario (p.e: root) = '))
clave=getpass.getpass('		Clave = ')
elhost=str(raw_input('		host (p.e:127.0.0.1) = '))
bbdd=str(raw_input('		bbdd (p.e: coorpyonsy) = '))

db=MySQLdb.connect(host=elhost,user=usuario,passwd=clave,db=bbdd)
cursor=db.cursor()
print '#'
print '#'*5,' USUARIO: ROOT - ADMINISTRAR ','#'*5
print '#'
print '#'*2,'_Empleados: 2 ','#'*2,'_Area: 3 ','#'*2,'_Tareas: 4 ','#'*2,'_SALIR: 5 '
print '#'

val=raw_input('# SELECIONE: ')

if (val=='2'):
	from Empleados import admiempleados
	


#creacion de registro
	

#creando consulta
#sql='select * from empleados'
#cursor.execute(sql)
#resultado=cursor.fetchall()
#print '|codigo| *Nombre* | Apellidos |  Cargo   |     Email        |genero|Telefono| Direccion'
#for registro in resultado:
#	print registro[0],'|',registro[1],'|',registro[2],'|',registro[3],'|',registro[4],'|',registro[5],'|',registro[6],'|',registro[7]
#cursor.execute("commit;")

