<?php
class Jugador
{
	// PROPIEDADES
    // Declaración de una propiedad
    public $nombre = 'Jugador 1'; //le damos un valor predeterminado

    //METODOS
    // Declaración de un método
    public function mostrarNombre() {
        echo $this->nombre;
    }

    //Funcion para cambiar el nombre de una propiedad
    public function setNombre($nombre){
    	$this->nombre=$nombre;
    }
}
?>