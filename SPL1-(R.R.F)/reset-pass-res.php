<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>

<style>

body{
    background-color: rgb(17, 6, 4);
}

.attribute {
        font-size: 18px;
        font-style: normal;
        position: relative;
        top: 30px;
        }

    .banner{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  height: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: rgb(240, 221, 136);
  position: relative;
  top: 100px;
  border-radius: 5px;
    }

img {
    width: 180px;
    top: 300px;
    left: 100px;
}
label {
    position: relative;
    right: 10px;
}
.banner form input[type="submit"]{
    width: 100px 80px;
    height: 20px;
  	/* padding: 15px;
  	margin-top: 20px;*/
  	background-color:rgb(80, 31, 19); 
 	border: 0;
  	cursor: pointer;
  	color: #ffffff;
  	transition: background-color 0.2s;
    position: relative;
    top: 60px;
    right: 180px;
}
.banner form input[type="email"]{
    width: 220px;
}

    </style>

<body>

<div class = "banner">
          
        <div class="logo">

            <img class="rrflogo" src="cover.png" alt="logo">
    
        </div>
    
    <form method="post" action="reset-pass-code-rest.php">
    <div class = "attribute">
    <label>Create new password</label>
      <input type = "password" name = "password" required>
                    
      <label>Confirm new password</label>
                    <input type = "password" name = "confirm" required>
                    
                    
      
      <input type="submit" name="save" value = "Save changes">
      <input type = "hidden" name = "code" value = "<?php if (isset($_GET['code'])){echo $_GET['code'];} ?>">
                <input type = "hidden" name = "restaurantemail" value = "<?php if (isset($_GET['restaurantemail'])){echo $_GET['restaurantemail'];} ?>">
    </div>
    </form>


</div>
 
</body>
</html>