def admiempleados():
	nommbre=raw_input('	NOMBRE:	')
	apellidos=raw_input('	APELLIDOS:	')
	cargo=raw_input('	CARGO:	')
	email=raw_input('	MAIL:	')
	genero=raw_input('	GENERO (F)o(M):	')
	telefono=raw_input('	TELEFONO:	')
	direc=raw_input('	DIRECCION:	')
	
	sqlin='INSERT INTO empleados VALUES(4,"',nombre,'","'apellidos'","',cargo,'","',email,'","',genero,'","',telefono,'","',direc,'");'
	cursor.execute(sqlin)
	reg=raw_input('¡¡¡¡ registrar !!!! Y/N')
	if (reg=='y' or reg=='Y'):
		cursor.execute("commit;")
