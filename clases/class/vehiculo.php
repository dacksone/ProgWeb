<?php

   class vehiculo {

       	public $marca;
       	public $color;
	   	public $placa;
	   	private $chasis;
		private $motor;
		private $propietario;

		public function __construct($mr,$cl)
		{
			$this->marca =  $mr;
			$this->color =  $cl;
			
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

   }



?>
