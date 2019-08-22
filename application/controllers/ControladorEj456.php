<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorEj456 extends CI_Controller {



	public function index()
	{
		$this->load->view('landpage');
	}

	function check_par_impar(){

	}

	public function Ej5_4(){
		

		for ($i = 1; $i<=1; $i++){
			${"var$i"} = rand(1,100);
			echo ${"var$i"};

			if(${"var$i"} % 2 == 0){
				echo " es numero  par <br>";
			}
			else {
				echo " es numero impar <br>";
			}
		}


	}

	public function Ej5_5(){

		for ($i = 1 ; $i <= 10 ; $i++){
			${"num$i"} = rand(1,100);
			echo ${"num$i"} 	 ;
			if(${"num$i"} % 2 == 0){
				echo " es numero  par <br>";
			}
			else {
				echo " es numero  impar <br>";
			}	
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



		

		}
		
	

	public function Ej5_6(){
		$num_estudiantes = 25;

		////ciclo while

		// $k = 0;
		// while($k <= $num_estudiantes){
		// 	$arr[$k] = rand(1,5); 
		// 	echo "nota estudiante $k es:" .$arr[$k]."<br>";
		// 	$k++;
		// }

		///ciclo do while

		// $k = 0;
		// do{
		// 	$arr[$k] = rand(1,5); 
		// 	echo "nota estudiante $k es:" .$arr[$k]."<br>";
		// 	$k++;
		// }while($k <= $num_estudiantes);


		for ($k = 0 ; $k <= $num_estudiantes ; $k++){

			$arr[$k] = rand(1,5); 
			echo "nota estudiante $k es:" .$arr[$k]."<br>";

		}
		
		$sumatoria = array_sum($arr);
		$promedio = $sumatoria / $num_estudiantes;
		echo "el promedio del curso es: ".$promedio;

	}

	
}

