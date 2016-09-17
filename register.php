  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hack Sign Up Form</title>
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/register.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


    </head>
    <body>


        <form action="registering.php" method="post" id="user_insert" >
      
        <h1>Sign Up</h1>
        
        <fieldset>
         
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
          
        <!--  <label for="password">Re-type Password:</label>
          <input type="password" id="repassword" name="user_repassword"> -->
          
          
        
        <label for="job">Interest:</label>
        <select id="category" name="user_category">
          
            <option value="web">Web</option>
            <option value="mobile">Mobile</option>
            <option value="security">Security</option>
           
         
        </select>
        
        
        </fieldset>
        <button type="submit" id="submiting" onclick="submiting()">Sign Up</button>
      </form>
      
    </body>
    
    <script>
        
        function submiting(){
   document.getElementById("user_insert").submit();
  
}

        $('#user_insert').submit(function (evt) {
        var name= $("#user_name").val();
        var email=$("#user_email").val();
        var password=$("#user_password").val();
        var category=$("#user_category").val();
   
   if (!name) {
    $("#user_name").focus();
   }
    evt.preventDefault();
   
	
        });
    </script>
</html>