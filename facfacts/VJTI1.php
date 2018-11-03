<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 18px 30px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width:31%;
}

button:hover {
    opacity: 0.8;
}
body
{
background-image:
  url("https://www.erudio.si/blog/wp-content/uploads/2017/09/a-book-a-week-image.jpg");
    background-size:100% 100%;
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

.cancelbtn {
    width: auto;
    padding: 10px 24px;
    background-color: #f44336;
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}
.container {
    border-radius: 5px;
    padding: 20px;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75{
        width: 100%;
        margin-top: 0;
    }
input[type=text], select, textarea {
    display:inline-block;
}
body
{
background-image:
  url("https://www.erudio.si/blog/wp-content/uploads/2017/09/a-book-a-week-image.jpg");
}
button{
display:inline block;
font-size:12px; 
width:81px;
}
 .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<h1 align="center">VJTI UNIVERSITY</h1>
<div class="container">
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       <div class="row">
        <h2>NAME</h2>
      </div>
       <div>
        <input type="text" name="q" placeholder="Faculty name.." >
        <h2>COLLEGE NAME</h2>
     
      <div>
        <input type="text" name="m" placeholder="College name.." >
        <h2>DEPARTMENT NAME</h2>
      </div>
      <div>
         <input type="text" name="n" placeholder="Department name..">
      </div>
      </div>
      <div class="row">
      <div class="col-25">
        <h2>QUALIFICATION</h2>
      </div>
      <div>
         <input type="text" name="h" placeholder="Qualification..">
      </div>
      </div>
      <div class="row">
      <div class="col-25">
        <h2>AREA OF INTEREST</h2>
      </div>
      <div>
         <input type="text" name="i" placeholder="Area of interest..">
      </div>
      </div>
      <div class="row">
        <h2>DESIGNATION</h2>
      </div>
      <div>
         <input type="text" name="j" placeholder="Designation..">
      </div>
      </br>
      </br>
     <button type="submit" class="button" name="add" >ADD</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="button" name="delete">DELETE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="button" name="edit">MODIFY</button>
    </div>
  </form>
</div>
</body>
</html>
<?php
include('session.php');
if(isset($_POST['add'])){
	$q = $_POST['q'];
                  $m= $_POST['m'];
                  $n= $_POST['n'];
                  $h = $_POST['h'];
                  $i= $_POST['i'];
                  $j= $_POST['j'];
	$query = mysqli_query($db,"INSERT INTO vjti values('$q','$m','$n','$h','$i','$j')"); 
                  $queryr= mysqli_query($db,"SELECT * from vjti"); 
                  //Replace table_name with your table name and `thing_to_search` with the column you want to search
	$count = mysqli_num_rows($queryr);
	if($count == "0"){
		$output= '<h2>Data not inserted succesfully</h2>';
                                    echo $output;
	}
                  else
                  {
                                    $output = '<h2>Data inserted succesfully</h2>';
                                    echo $output;
                   }
	}
if(isset($_POST['delete'])){
	$q = $_POST['q'];
                  $m= $_POST['m'];
                  $n= $_POST['n'];
                  $h = $_POST['h'];
                  $i= $_POST['i'];
                  $j= $_POST['j'];
	$query = mysqli_query($db,"DELETE from vjti where Name LIKE '%$q%'"); 
                  $queryr= mysqli_query($db,"SELECT * from vjti"); 
//Replace table_name with your table name and `thing_to_search` with the column you want to search
	$count = mysqli_num_rows($queryr);
	if($count == "0"){
		$output = '<h2>Data not deleted succesfully</h2>';
                                    echo $output;
	}
                  else
                  {
                                    $output = '<h2>Data deleted succesfully</h2>';
                                    echo $output;
                   }
	}
if(isset($_POST['edit'])){
	$q = $_POST['q'];
                  $m= $_POST['m'];
                  $n= $_POST['n'];
                  $h = $_POST['h'];
                  $i= $_POST['i'];
                  $j= $_POST['j'];
	$query = mysqli_query($db,"UPDATE vjti SET Collegename='$m' where Name='$q'"); 
                  $queryr= mysqli_query($db,"SELECT * from vjti"); 
//Replace table_name with your table name and `thing_to_search` with the column you want to search
	$count = mysqli_num_rows($queryr);
	if($count == "0"){
		$output = '<h2>Data not Updated succesfully</h2>';
                                    echo $output;
	}
                  else
                  {
                                    $output = '<h2>Data Updated succesfully</h2>';
                                    echo $output;
                   }
	}
?>