<?php
class Jugador
{
	// PROPIEDADES
    // Declaración de una propiedad
    private $nombre = 'Jugador 1'; //le damos un valor predeterminado
    public $puntos =0;
    
    //CREAMOS EL CONSTRUCTOR
    function __construct() {
        $this->mensajeBr("El jugador se llama: ".$this->nombre);
    }

    //METODOS
    // Declaración de un método
    public function getNombre() {
        return $this->nombre;
    }

    //Funcion para cambiar el nombre de una propiedad
    public function setNombre($nombre){
    	$this->nombre=$nombre;
    }
    
    //Creamos una funcion imprimir html
    private function mensajeBr($mensaje){
        echo $mensaje."<br>";
    }
}
?>