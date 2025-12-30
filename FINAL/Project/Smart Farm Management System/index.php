<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME PAGE</title>
</head>
<style>
  body{
    background-color: #4cb14cff;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  form {
  width: 350px;
  margin: 100px auto;  
  padding: 20px;
  border: 2px solid green;
  border-radius: 8px;
  background-color: white;
}
  button {
    
    margin: 5px auto;   
    padding: 6px 20px;
    border-radius: 5px;
  }
  #L1 {
    background-color: #4bd64bff;
    width: 150px;          
    height: 40px;         
    margin: 0 ;         
    transition: width 0.3s ease; 
}

#L1:hover {
    width: 140px;          
}
#L2 {
    background-color: #4bd64bff;
    width: 150px;          
    height: 40px;         
    margin: 0 ;         
    transition: width 0.3s ease; 
}

#L2:hover {
    width: 140px;          
}
  </style>
<body>
  <form>
  <h3>WELCOME TO OUR WEBSITE</h3>
  <br><br><br><br><br><br><br><br>
  <button id="L1">ADMIN LOGIN</button><br><br>
  <button id="L2">FARMER LOGIN</button>
  <br>
  <br>
  <p>If you are not a user, please Register !!</p>
  <button>Register</button>
</form>
</body>
</html>