<html>
<head>
   <title>Csabi napló</title>
   <link rel="stylesheet" type="text/css" href="csabietelnaplo.css">
</head>
<body>
   <div class="buborekok">
      <div class="gyum">
      </div>
      <div class="zold">
	  </div>
	  <div class="gabona">
      </div>
	  <div class="hus">
      </div>
      <div class="tej">
	  </div>	  
    </div>
	<div class="lekerdezespanel">
	   <form class="datumform">
	      <input type="date" name="datum">
	   </form>
	</div>
	<div class="tablapanel">
	   <table>
	      <tr>
		     <th>Dátum</th>
			 <th>Nap</th>
		     <th>Gyümölcs</th>
			 <th>Zöldség</th>
			 <th>Gabona</th>
			 <th>Hús&Tojás</th>
			 <th>Tejtermék</th>			 
		  <tr>			
		  <?php require 'tablazat.php';?>
	   </table>
	   	  
	</div>
</body>
</html>
