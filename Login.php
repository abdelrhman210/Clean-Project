<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       
      $username = mysqli_real_escape_string($mysqli,$_POST['username']);
      $password = mysqli_real_escape_string($mysqli,$_POST['password']); 
      
      $sql = "SELECT id FROM login WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       
      $count = mysqli_num_rows($result);
      
 		
      if($count == 1) {
          $_SESSION['login_user'] = $username;
         
         header("location: welcome.php");
        
      } 
      else{
         echo '<script type ="text/JavaScript">';  
         echo 'alert("Wrong password or Email ")';  
         echo '</script>'; 
      }
      
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
     <link rel="stylesheet" href="./src/main.css">
      
   </head>
   
   <body>
	
     
				
   <div class="container">
               <form action = "" method = "post">
               <h1 class="form__title">Login</h1>
               <div class="form__input-group">
                  Email  : <br> <input  class="form__input" type = "text" name = "username"  /></div>
                  <div class="form__input-group">
                  <label>Password  :</label><input class="form__input"  type = "password" name = "password"  /></div>
                  <input  class="form__button"  type = "submit" value = " Login "/><br />
               </form>
			

				
         </div>
			
      </div>
 
   </body>
</html>