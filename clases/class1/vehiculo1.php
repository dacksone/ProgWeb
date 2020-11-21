<?php

   class vehiculo {

       	public $marca;
       	public $color;
	   	public $placa;
	   	private $chasis;
		private $motor;
		private $propietario;

		public function __construct($mr,$cl,$cha,$mtr)
		{
			$this->marca =  $mr;
			$this->color =  $cl;
			$this->chasis = $cha;
			$this->motor =  $mtr;
		}

		public function valorVenta($costo,$porcentaje)
		{

		  $ganancia = $costo * $porcentaje /100;
		  $vta =  $costo + $ganancia;
		  return $vta;

		}
		//asignar un dato
		public function setPropietario($pr){

			$this->propietario=$pr;
		}
		//tomar un dato o devolver el dato
		public function getPropietario(){

			return $this->propietario;
		}

		//asignar un dato
		public function setChasis($cha){

			$this->chasis=$cha;
		}
		//tomar un dato o devolver el dato
		public function getChasis(){

			return $this->chasis;
		}

		//asignar un dato
		public function setMotor($mtr){

			$this->motor=$mtr;
		}
		//tomar un dato o devolver el dato
		public function getMotor(){

			return $this->motor;
		}



   };

   class taxi extends vehiculo{

    private $numeroLicencia;
	public function setnumeroLicencia($numlic){

			$this->numeroLicencia=$numlic;
		}
		//tomar un dato o devolver el dato
		public function getnumeroLicencia(){
             $valor = "Los atributos heredados son color "."<b>".$this->color."</b>"." marca "."<b>".$this->marca."</b>"." y el atributo no heredado es...numero de licencia "."<b>".$this->numeroLicencia."</b>";
			return $valor;
		}
   } 
   
   class autobus extends vehiculo{

	private $numeroPasajeros;
	private $precio;

	public function setnumeroPasajeros ($numPas)
	{
		$this->numeroPasajeros=$numeroPasajeros;
	}
	public function getnumeroPasajeros ()
	{
		return $this->numeroPasajeros;
			
	}

	public function setPrecio ($pre)
	{
		$this->precio=$pre;
	}
	public function getPrecio ()
	{
		return $this->precio;
			
	}





?>
