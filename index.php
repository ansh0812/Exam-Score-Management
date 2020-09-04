<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Exam Score Management</title>
    <style>
        /* button{
            background-image: linear-gradient(123deg, #FAD961 0%, #F76B1C 100%);

        } */


    </style>
  </head>
  <body style="background-color:#292b2c;">
  
<?php
require('./nav.php');
?>
  <div class="containers">
		<br><br>	
		<div class="d-flex justify-content-between  align-items-center" >
			<div style="margin-left:3%;margin-right:5%;color:whitesmoke">
				<h1><b>Welcome to Exam Score Management</b></h1>
				<br><br><br>
				<a href="./modifystudent.php"><button type="button" class="btn btn-lg  border-dark"  style="color:back; background-color:#F39C12
;"><b>Student</b></button></a>
			<a href="./viewmarks.php">	<button type="button" class="btn btn-lg  border-dark" style="color:back;background-color:#F39C12"><b>Marks</b></button></a>
            <a href="./ranking.php">	<button type="button"  style="color:back;background-color:#F39C12" class="btn btn-lg  border-dark" ><b>Rankers</b></button></a>

        
        </div>

			<div style="margin-right:5%">
				<img class="shadow-lg p-3 mb-5  rounded" style="background-color:whitesmoke;" src="exam.jpg" >
			</div>
		
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>