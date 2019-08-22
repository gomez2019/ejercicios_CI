<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorEj789 extends CI_Controller {

	
	
	public function index()
	{
		$this->load->view('landingpage');

	}

	public function Ej5_7(){
		$n1 = $this->input->post('num1');
		$n2 = $this->input->post('num2');
		$n3 = $this->input->post('num3');
		$n4 = $this->input->post('num4');
		$n5 = $this->input->post('num5');
		$n6 = $this->input->post('num6');
		$n7 = $this->input->post('num7');
		$n8 = $this->input->post('num8');

		$arrayName = array($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8);
		print_r($arrayName);
		echo "la sumatoria de los numeros es: ". array_sum($arrayName);
	}

	public function Ej5_8(){
		for ($i= 1;$i <= rand(1,20);$i++) {
			
			$arreglo[$i] = rand(1,20);	
		
			//$myarray[] = array('item' => '1 items');
		}
		$suma_pares = 0;
		$contador_pares= 0;
		$contador_impares = 0;
		$suma_impares = 0;
		foreach ($arreglo as $elemento ) {
			echo $elemento."<br>";	
			if($elemento % 2 == 0){
				
				$suma_pares += $elemento; 
				$contador_pares++;

			}
			else{
				
				$suma_impares += $elemento;
				$contador_impares++;
			}
		}
		echo "la suma de numeros pares es :".$suma_pares. "<br>";
		echo "la suma de numeros impares es: ".$suma_impares. "<br>";
		echo "la cantidad de numeros pares es: ".$contador_pares. "<br>";
		echo "la cantidad de numeros impares es: ".$contador_impares;
	}

	public function Ej5_9(){
		$num_cajas_texto = $this->input->post('num_cajas_texto');
		//echo $num_cajas_texto;

		echo "<form action='site_url('ControladorEj789/Ej5_7');  method= 'post' >";
		
		 for ($num_cajas_texto; $num_cajas_texto > 0;$num_cajas_texto--){
			echo "<input type='text' name='num1' placeholder='numero 1'>
			<br>";
		 }
		echo "<input type='submit' >

	</form>";
		

	}
}
