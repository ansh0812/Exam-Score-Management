<?php
require('./connection.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>ADD MARKS</title>
</head>

<body style="background-color:#292b2c">

    <?php
    require('./nav.php');
    ?>
    <div class="container" >
 
     
        <form action="./addmarks.php?id=<?php echo $_GET['id'] ?> " method="POST">
            <div class="row">
                <br>
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <select class="form-select" aria-label="Default select example" name="test">
                        <option selected disabled>Select your type of exam</option>
                        <option value=1>First Unit Test </option>
                        <option value=2>Second Unit Test</option>
                        <option value=3>Third Unit Test</option>

                        <option value=4>Fourth Unit Test</option>
                        <option value=5>First Semester Exam </option>
                        <option value=6>Second Semester Test</option>



                    </select>
                </div>
                <div class="col">
                    <br>
                    <select class="form-select" aria-label="Default select example" name="standard">
                        <option selected disabled>Select your standard</option>
            <option value=1>First</option>
            <option value=2>Second</option>
            <option value=3>Third</option>

            <option value=4>Fourth</option>
            <option value=5>Fifth</option>
            <option value=6>Sixth</option>

            <option value=7>Seventh</option>
            <option value=8>Eighth</option>
            <option value=9>Nineth</option>

            <option value=10>Tenth</option>

                    </select>
                </div>
            </div>
            <div class="row">
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"> ENGLISH</span>
                        <input type="text" id="phonenumber" class="form-control" name="English" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">MARATHI</span>
                        <input type="text" id="rollno" class="form-control" name="Marathi" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">HINDI</span>
                        <input type="text" id="rollno" class="form-control" name="Hindi" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class=" col">
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">MATHS</span>
                        <input type="text" id="rollno" class="form-control" name="Maths" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">SCIENCE</span>
                        <input type="text" id="rollno" class="form-control" name="Science" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class=" col">
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">SOCIAL STUDIES</span>
                        <input type="text" id="rollno" class="form-control" name="Socialstudies" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <button type="submit" class="btn " style="background-color:#F39C12;color:#292b2c">Submit</button>
            <?php 
            if(isset($_GET['id'])){
            $id=$_GET['id'];

       echo'     <input type="hidden" value='.$id.' name="x">';}
       else{
echo 'PLEASE SELECT THE STUDENT FIRST BY GOING IN TO MODIFY STUDENT PAGE';

       }?>
        </form>
    </div>
    <?php
 
        if (isset($_POST['test'])) {
            $English = $_POST['English'];
            $Marathi = $_POST['Marathi'];
            $Hindi = $_POST['Hindi'];
            $id = $_POST['x'];
          
            $Maths = $_POST['Maths'];
            $Science = $_POST['Science'];
            $Socialstudies = $_POST['Socialstudies'];

            $standard = $_POST['standard'];
            $test = $_POST['test'];
            $total=$English+$Marathi+$Hindi+$Maths+$Science+$Socialstudies;
            if ($test==5 or $test==6) {
                $percentage= ($total/600)*100;
            } else {
                $percentage= ($total/120)*100;
            }
            // echo $percentage;
            //   if(isset($_GET['id'])){
            if ($test==1 or $test==2 or $test==3 or $test==4  ) {
                if ($English >20 or $Marathi > 20 or $Maths>20 or $Science >20 or $Socialstudies >20) {
                    echo '<h1 class="text-center" style="color:white"> Sorry Marks cant be greater than 20   </h1>';
                } else {
                    $sql = "INSERT INTO marks(srno,English,Marathi,Hindi,Maths,Science,Socialstudies,examstd,examtype,totalmarks,percentage) VALUES('$id','$English','$Marathi','$Hindi','$Maths','$Science','$Socialstudies','$standard','$test',' $total','$percentage')";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        echo "INSERTED";
                    } else {
                        echo "NOT INSERTED";
                    }
                }
            }else{
                if ($English >100 or $Marathi > 100 or $Maths>100 or $Science >100 or $Socialstudies >100) {
                    echo '<h1 class="text-center" style="color:white"> Sorry Marks cant be greater than 100   </h1>';
                } else {
                    $sql = "INSERT INTO marks(srno,English,Marathi,Hindi,Maths,Science,Socialstudies,examstd,examtype,totalmarks,percentage) VALUES('$id','$English','$Marathi','$Hindi','$Maths','$Science','$Socialstudies','$standard','$test',' $total','$percentage')";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        echo "INSERTED";
                    } else {
                        echo "NOT INSERTED";
                    }
                }


            }
        }   ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>