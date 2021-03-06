<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body,html
{
height:100%;
}
body {
font-family: Arial, Helvetica, sans-serif;
background-image:
  url("https://png.pngtree.com/thumb_back/fw800/back_pic/02/65/63/65578876d4f20e9.jpg");
    background-size:100% 100%;
    background-repeat:no-repeat;
   width:100%;
}

input[type=text], input[type=password] {
    width: auto;
    padding: 20px 40px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 30px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width:auto;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 24px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}
label {
    width:400px;
    color:white;
  
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 600px) {
    span.psw {
       display: block;
       float: none;
    }
   body
{
background-image:
    url("https://png.pngtree.com/thumb_back/fw800/back_pic/02/65/63/65578876d4f20e9.jpg");
}
button{
display:inline-block;
width:33.33%;
}
    .cancelbtn {
       width: auto;
       padding: 10px 24px;
    }
}
</style>
</head>
<body>
<form action="action_page.php" method="post">
   <div class="container" align="right">
     <h1 style="color:white">Admin Form</h1>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    </br>
    </br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
     </br> 
     </br>
    <button type="submit" class="button">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="button">Cancel</button>
    </br>
    </br>
    <h1 >
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </h1>
    <?php
      session_start();
      echo '<h2>'.$_SESSION['errmsg'].'<h2>';
      ?>
  </div>
</form>
</body>
</html>