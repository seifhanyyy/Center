<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
<style>
  body{
    background: -webkit-linear-gradient(left, #a6a6a6, #25c264);
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  background: white;
  border: 3px solid black;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
h2{
  text-align: center;
  color: #ffffff;
  margin-top: 80px;
}
h3{
    color: #ffffff;

  margin-left: 10%;
}
h4{
    color: #ffffff;
    margin-left: 10%;
}
#days{
  color: #4a4a4a;
}
</style>
</head>
<body>
<!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/Admin">Al-Mishkah<span></span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="studentclasses.php">Classes</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
<h2>Edit Classes</h2>
<h3>1st Year</h3>
</script>
<form action="#" method="get">
<select name="days">
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    </select>
<input type="submit" name = "submit" value="Submit">
<?php
$selected_val = '';
if(isset($_GET['submit'])){
$selected_val = $_GET['days'];  // Storing Selected Value In Variable
echo $selected_val;
}
?>
</form>


<br>
<table style="float: center;">
  <tr>
    <th>Day</th>
    <th>Teacher</th>
    <th>Starts</th>
    <th>Ends</th>
    <th>Capacity</th>
    <th>Year</th>
    <th>Students</th>
    
  </tr>
  
  <?php 
  use Illuminate\Support\Facades\Auth;

  $x=Auth::user()->name;
$alpha=Auth::user()->lastName;
$omega=$x." ".$alpha;

  foreach($data as $i)
  {
  
  $s = $i->day;
$beta=$i->teacher;
  if($selected_val == $s &&$i->teacher==$omega) //hna h3ml auth::
  {
    
    //$x = "$i->id";
    echo"<tr>";
    echo"<td>$i->day</td>";
    echo"<td>$i->teacher</td>";
    echo"<td>$i->starts</td>";
    echo"<td>$i->ends</td>";
    echo"<td>$i->capacity</td>";
    echo"<td>$i->year</td>";
    echo"<form action='/view' method='get'>";
    echo"<input type = 'hidden' name = 'classId' value = '$i->id'/>";
    echo"<th><input type='submit' value='View' name='view'/></th>";
    echo"</form>";
    echo"</tr>";
  }
}
  ?>

</table>


</body>
</html>
