<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorEj123 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('landpage');
	}

	public function Ej5_1(){
		
		for ($i = 1 ; $i <= 10 ; $i++){
			${"num$i"} = rand(1,100);
			echo ${"num$i"} ."<br>" ;
		}
		
		if($num1 >= $num2 && $num1 >= $num3 && $num1 >= $num4 && $num1>=$num5 && $num1 >= $num6	&& $num1 >= $num7 && $num1 >= $num8 && $num1 >= $num9 && $num1 >= $num10){
			echo "<br> $num1 es el mayor";
		}
		else if($num2 >= $num1 && $num2 >= $num3 && $num2 >= $num4 && $num2>= $num5 && $num2 >= $num6	&& $num2 >= $num7 && $num2 >= $num8 && $num2 >= $num9 && $num2 >= $num10){
			echo "<br> $num2  es el mayor";
		}

		else if($num3 >= $num1 && $num3 >= $num2 && $num3 >= $num4 && $num3>=$num5 && $num3 >= $num6	&& $num3 >= $num7 && $num3 >= $num8 && $num3 >= $num9 && $num3 >= $num10){
			echo "<br> $num3  es el mayor";
		}
		else if($num4 >= $num1 && $num4 >= $num2 && $num4 >= $num3 && $num4>=$num5 && $num4 >= $num6	&& $num4 >= $num7 && $num4 >= $num8 && $num4 >= $num9 && $num4 >= $num10){
			echo "<br> $num4  es el mayor";
		}
		else if($num5 >= $num1 && $num5 >= $num2 && $num5 >= $num3 && $num5>=$num4 && 
			$num5 >= $num6	&& $num5 >= $num7 && $num5 >= $num8 && $num5 >= $num9 && $num5 >= $num10){
			echo "<br> $num5  es el mayor";
		}
		else if($num6 >= $num1 && $num6 >= $num2 && $num6 >= $num3 && $num6>=$num4 && $num6 >= $num5 && $num6 >= $num7 && $num6 >= $num8 && $num6 >= $num9 && $num6 >= $num10){
			echo "<br> $num6  es el mayor";
		}
		else if($num7 >= $num1 && $num7 >= $num2 && $num7 >= $num3 && $num7>=$num4 && $num7 >= $num5 && $num7 >= $num6 && $num7 >= $num8 && $num7 >= $num9 && $num7 >= $num10){
			echo "<br> $num7  es el mayor";
		}
		else if($num8 >= $num1 && $num8 >= $num2 && $num8 >= $num3 && $num8>=$num4 && $num8 >= $num5 && $num8 >= $num6 && $num8 >= $num7 && $num8 >= $num9 && $num8 >= $num10){
			echo "<br> $num8  es el mayor";
		}
		else if($num9 >= $num1 && $num9 >= $num2 && $num9 >= $num3 && $num9>=$num4 && $num9 >= $num5 && $num9 >= $num6 && $num9 >= $num7 && $num9 >= $num8 && $num9 >= $num10){
			echo "<br> $num9  es el mayor";
		}
		else if($num10 >= $num1 && $num10 >= $num2 && $num10 >= $num3 && $num10>=$num4 && $num10 >= $num5 && $num10 >= $num6 && $num10 >= $num7 && $num10 >= $num8 && $num10 >= $num9){
			echo "<br> $num10  es el mayor";
		}

			//

		if($num1 <= $num2 && $num1 <= $num3 && $num1 <= $num4 && $num1<=$num5 && $num1 <= $num6	&& $num1 <= $num7 && $num1 <= $num8 && $num1 <= $num9 && $num1 <= $num10){
			echo "<br> $num1 es el menor";
		}
		else if($num2 <= $num1 && $num2 <= $num3 && $num2 <= $num4 && $num2<=$num5 && $num2 <= $num6	&& $num2 <= $num7 && $num2 <= $num8 && $num2 <= $num9 && $num2 <= $num10){
			echo "<br> $num2  es el menor";
		}

		else if($num3 <= $num1 && $num3 <= $num2 && $num3 <= $num4 && $num3<=$num5 && $num3 <= $num6	&& $num3 <= $num7 && $num3 <= $num8 && $num3 <= $num9 && $num3 <= $num10){
			echo "<br> $num3  es el menor";
		}
		else if($num4 <= $num1 && $num4 <= $num2 && $num4 <= $num3 && $num4<=$num5 && $num4 <= $num6	&& $num4 <= $num7 && $num4 <= $num8 && $num4 <= $num9 && $num4 <= $num10){
			echo "<br> $num4  es el menor";
		}
		else if($num5 <= $num1 && $num5 <= $num2 && $num5 <= $num3 && $num5<=$num4 && $num5 <= $num6	&& $num5 <= $num7 && $num5 <= $num8 && $num5 <= $num9 && $num5 <= $num10){
			echo "<br> $num5  es el menor";
		}
		else if($num6 <= $num1 && $num6 <= $num2 && $num6 <= $num3 && $num6<=$num4 && $num6 <= $num5 && $num6 <= $num7 && $num6 <= $num8 && $num6 <= $num9 && $num6 <= $num10){
			echo "<br> $num6  es el menor";
		}
		else if($num7 <= $num1 && $num7 <= $num2 && $num7 <= $num3 && $num7<=$num4 && $num7 <= $num5 && $num7 <= $num6 && $num7 <= $num8 && $num7 <= $num9 && $num7 <= $num10){
			echo "<br> $num7  es el menor";
		}
		else if($num8 <= $num1 && $num8 <= $num2 && $num8 <= $num3 && $num8<=$num4 && $num8 <= $num5 && $num8 <= $num6 && $num8 <= $num7 && $num8 <= $num9 && $num8 <= $num10){
			echo "<br> $num8  es el menor";
		}
		else if($num9 <= $num1 && $num9 <= $num2 && $num9 <= $num3 && $num9<=$num4 && $num9 <= $num5 && $num9 <= $num6 && $num9 <= $num7 && $num9 <= $num8 && $num9 <= $num10){
			echo "<br> $num9  es el menor";
		}
		else if($num10 <= $num1 && $num10 <= $num2 && $num10 <= $num3 && $num10<=$num4 && $num10 <= $num5 && $num10 <= $num6 && $num10 <= $num7 && $num10 <= $num8 && $num10 <= $num9){
			echo "<br> $num10  es el menor";
		}


		// alternativa 

		// for ($i=1; $i <11 ; $i++) { 
		// 	$num[$i] = rand(1,100);
		// }	
		
		// foreach ($num as $n) {
		// 	echo $n ."<br>";
		// }
		// echo "<br> el numero mayor es ".max($num);
		// echo "<br> el numero menor es ".min($num);
	}
	

	public function Ej5_2(){
		
		
		$dia = $this->input->post('dia_mes');
		echo "numero del dia ingresado: ".$dia ."<br>";
		echo "dia del mes que corresponde para septiembre 2018: <br>";
		switch($dia){
			case 1: 
			echo "sabado";
			break;
			case 2: 
			echo "domingo";
			break;
			case 3: 
			echo "lunes";
			break;
			case 4: 
			echo "martes";
			break;
			case 5: 
			echo "miercoles";
			break;
			case 6: 
			echo "jueves";
			break;
			case 7: 
			echo "viernes";
			break;
			case 8: 
			echo "sabado";
			break;
			case 9: 
			echo "domingo";
			break;
			case 10: 
			echo "lunes";
			break;
			case 11: 
			echo "martes";
			break;
			case 12: 
			echo "miercoles";
			break;
			case 13: 
			echo "jueves";
			break;
			case 14: 
			echo "viernes";
			break;
			case 15: 
			echo "sabado";
			break;
			case 16: 
			echo "domingo";
			break;
			case 17: 
			echo "lunes";
			break;
			case 18: 
			echo "martes";
			break;
			case 19: 
			echo "miercoles";
			break;
			case 20: 
			echo "jueves";
			break;
			case 21: 
			echo "viernes";
			break;
			case 22: 
			echo "sabado";
			break;
			case 23: 
			echo "domingo";
			break;
			case 24: 
			echo "lunes";
			break;
			case 25: 
			echo "martes";
			break;
			case 26: 
			echo "miercoles";
			break;
			case 27: 
			echo "jueves";
			break;
			case 28: 
			echo "viernes";
			break;
			case 29: 
			echo "sabado";
			break;
			case 30: 
			echo "domingo";
			break;
			
			default:
			echo "el numero ingresado no se encuentra";
		}
	}

	public function Ej5_3(){

		function checknumber($n){
			
			if($n > 50)
				echo " es mayor a 50";
			else if($n < 20 and $n >= 0)
				echo " es menor a 20";
			else if($n < 0){
				echo " es un numero negativo";
			}
			else {
				echo " no se encuentra dentro de los parametros buscados";
			}
		}

		for ($j = 1; $j<=3; $j++){
			${"numero$j"} = rand(-100,100);
			echo ${"numero$j"};	
			echo checknumber(${"numero$j"});
			echo "<br>";


		}

		
		

		
	}


}
