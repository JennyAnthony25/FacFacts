<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="css/refreshform.css" rel="stylesheet">
<script >
$(document).ready(function(){
$("#search").click(function(){
var name = $("#q").val();
var email = $("#n").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name + '&email1='+ email;
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit7.php",
data: dataString,
cache: false,
success: function(response){
$( '#display_info' ).html(response);
}
});
return false;
});
});
</script>
<style>
body,html
{
height:auto;
}
* {
    box-sizing: border-box;
}
body
{
background-image:
  url("https://www.erudio.si/blog/wp-content/uploads/2017/09/a-book-a-week-image.jpg");
    background-size:cover;
   background-repeat:no-repeat;
   width:100%;
 
}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    resize: vertical;
    height:50px;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 20px 150px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
   
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}


/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
body
{
background-image:
  url("https://www.erudio.si/blog/wp-content/uploads/2017/09/a-book-a-week-image.jpg");
 background-size:100% 100%;
}
}
</style>
</head>
<body>

<h1 align="center">VIT UNIVERSITY</h1>
<div class="container">
  <form>
    <div class="row">
      <div class="col-25">
        <h2>NAME</h2>
      </div>
      <div>
        <input type="text" id="q" placeholder="Faculty name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <h2>COLLEGE NAME</h2>
      </div>
      <div>
        <input type="text" id="m" placeholder="College name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <h2>DEPARTMENT NAME</h2>
      </div>
      <div>
         <input type="text" id="n" placeholder="Department name..">
      </div>
      </div>
     <br>
    <br>
    <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" id="search" value="Search">
    </div>
  </form>
</div>
<div id="display_info" >
</div>
</body>
</html>
