Algoritmo sin_titulo
	Escribir "Login"
	Escribir "Nombre usuario"
	Leer Usuario
	Escribir "Escriba la clave"
	Leer Clave
	Si Usuario = "Luisa" Entonces
		Si Clave = "Danna123" Entonces
			Escribir "Puede ingresar al sistema de información"
		SiNo
			Escribir "Error en la clave"
		Fin Si
	SiNo
		Escribir "Error en usuario y contraseña"
	Fin Si
FinAlgoritmo
