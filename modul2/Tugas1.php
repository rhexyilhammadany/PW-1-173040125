<?php

for ($i = 1 ; $i <= 20 ; $i++){
$angka = 0;

   for ($j = 1 ; $j <= $i ; $j++){
   	if ($i % $j == 0){
   		$angka++;
   	}
   }
   if($angka == 2 && $j % 2 == 0){
   	echo "Angka $i adalah Bilangan Ganjil sekaligus Bilangan Prima </br>";
   }elseif($angka == 2 && $j % 2 == 1) {
   	 	echo "Angka $i adalah Bilangan Genap sekaligus Bilangan Prima </br>"; 
    }elseif($j % 2 == 0) {
   	 	echo "Angka $i adalah Bilangan Ganjil </br>"; 
    }elseif($j % 2 == 1) {
   	 	echo "Angka $i adalah Bilangan Genap </br>"; 
   	 }
   
}
?>
</br>
<button>
  <a href="../"> Back To Index </a>
</button>