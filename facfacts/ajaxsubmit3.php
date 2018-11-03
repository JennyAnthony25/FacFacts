<?php
$connection = mysqli_connect("127.0.0.1", "root", "","login"); // Establishing Connection with Server.. // Selecting Database
$name2=$_POST['name1'];
$email2=$_POST['email1'];
//Insert query
$query = mysqli_query($connection,"Select * from vjti where name LIKE '%$name2%'");
while($row = mysqli_fetch_array($query))
{

 
                                                               echo '<br><h2 align="center"><p><b>Name:  </b></b>'.$row['Name'].'</h2></p>';
                                                               echo '<br><h2 align="center"><p><b>College Name:  </b></b>'.$row['Collegename'].'</h2></p>';
                                                               echo '<br><h2 align="center"><p><b>Department Name:  </b></b></b>'.$row['Departmentname'].'</p></h2>';
                                                               echo '<br><h2 align="center"><p><b>Qualification:  </b></b></b>'.$row['Qualification'].'</p></h2>';
                                                               echo '<br><h2 align="center"><p><b>Area of interest:  </b></b></b>'.$row['AreaofInterest'].'</p></h2>';
                                                               echo '<br><h2 align="center"><p><b>Designation:  </b></b></b>'.$row['Designation'].'</p></h2>';
 
}
mysqli_close($connection); // Connection Closed
?>