<?php
require('./connection.php');

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student's</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<style>


</style>
<body style="background-color:#292b2c;">

<?php
require('./nav.php');
?>
    <div class="container  mt-5">
        <h2 class="" style="color:whitesmoke;"> Add Student Details</h2>
        <hr style="color:#F39C12;">
        <br>
        <form action="./addstudent.php" method="POST">
            <div class="row">
                <br>
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <div class="input-group mb-3">
                        <span  class="input-group-text" id="basic-addon1"> Full Name</span>
                        <input type="text" required class="form-control" id="name" name="name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col">
                    <br>
                    <div class="input-group mb-3">
                        <span  class="input-group-text" id="basic-addon1">Email id</span>
                        <input type="text" required class="form-control" id="email" name="email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <div class="input-group mb-3">
                        <span   class="input-group-text" id="basic-addon1"> PhoneNumber</span>
                        <input type="phonenumber"   required id="phonenumber" class="form-control" name="phonenumber" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <div class="input-group mb-3">
                        <span  class="input-group-text" id="basic-addon1"> Roll Number</span>
                        <input type="text" required id="rollno" class="form-control" name="rollno" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <select class="form-select" required aria-label="Default select example" name="gender" id="gender">
                        <option selected>Select your Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class=" col">
                    <br>
                    <select class="form-select" required aria-label="Default select example" name="standard">
                        <option selected>Select your standard</option>
                        <option value="First">First</option>
                        <option value="Second">Second</option>
                        <option value="Third">Third</option>

                        <option value="Fourth">Fourth</option>
                        <option value="Fifth">Fifth</option>
                        <option value="Sixth">Sixth</option>

                        <option value="Seventh">Seventh</option>
                        <option value="Eighth">Eighth</option>
                        <option value="Nineth">Nineth</option>

                        <option value="Tenth">Tenth</option>

                    </select>
                </div>
            </div>
            <br>
            <br>
            <button type="submit" style="color:back;background-color:#F39C12" class="btn ">Add Student</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];

            $rollno = $_POST['rollno'];
            $gender = $_POST['gender'];
            $standard = $_POST['standard'];

            $mysql="Select * from student where standard='$standard'and rollno='$rollno' ";
            $results = mysqli_query($con, $mysql);
            if(mysqli_num_rows($results)<=0){
                $sql = "INSERT INTO student(rollno,name,email,phonenumber,gender,standard) VALUES('$rollno','$name','$email','$phonenumber','$gender','$standard')";
                $result = mysqli_query($con, $sql);
                echo '<h2 style="text-align:center;color:white">INSERTED SUCCESSFULLY !</h2>';
            }else{
                echo '<h2 style="text-align:center;color:white">Student with  Roll no = '.$rollno.' already exist !</h2>';
            }  

             
                // echo "<script>window.open('modifystudent.php','_self')</script>";
            }
        // }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>