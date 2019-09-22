<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Latihan 2 C</title>
<link rel="stylesheet" href="../assets/css/Latihan2c.css">
</head>
<body>


</br>
<button>
   <a href="../"> Back To Index </a>
</button>

	  <?php
	

	
         for ( $i = 1  ; $i <= 5 ; $i ++) {
         echo "<div class=\"clear\"></div>" ;
      	 for( $j =1 ; $j <= $i ; $j ++) {
      	 if ($i % 2 == 1) {
      	 echo "<div class=\"kotak ganjil\"> $j</div>" ;


      	 } else {
      	 	 echo "<div class=\"kotak genap\"> $j</div>" ;

    
      	 }	
      
      	
      }
           	
}
	   

	   
	   ?>
	  
</body>
</html>