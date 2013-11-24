<!DOCTYPE html>
<html>
 <head>
   <title>Logowanie tzubertowski</title>
   <style>
   body { background-color: grey;}
   #center { background-color: white; width:500px; height:400px; margin: 0 auto;}

   </style>
 </head>
 <body>
   <div id=center>
   <h1>Zaloguj do panelu</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('controler_verifylogin'); 
   echo form_label("E-mail: ");
   echo form_input("email");
   echo br();
   echo form_label("Haslo: ");
   echo form_password("password");
   echo br();
   echo form_submit("","Zaloguj");
   echo form_close();
   ?>
</div>
 </body>
</html>