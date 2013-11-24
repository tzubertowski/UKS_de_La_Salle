<!DOCTYPE html>
 <head>
   <title>Zalogowano - md5 works</title>
   <style>
   body { background-color: grey;}
   #center { background-color: white; width:500px; height:400px; margin: 0 auto;}

   </style>
 </head>
 <body>
 	<div id=center>
	   <h2>Witaj <?php echo $username; ?>!</h2>
	   <a href="controler_logged/logout">Logout</a>
	</div>
 </body>
</html>