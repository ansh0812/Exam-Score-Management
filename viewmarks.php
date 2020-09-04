<?php
require('./connection.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Marks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>

<body style="background-color:#292b2c">
    <?php
    require('./nav.php');
    ?>
<?php  if(isset($_GET['del'])){
  $sno=$_GET['del'];
  // echo $sno;
  // "DELETE FROM `student` WHERE `student`.`srno` = 4"
  $sql="DELETE  FROM marks WHERE marksid='$sno'";
  $result=mysqli_query($con,$sql);
if($result){
  echo "DELETED";
}else{
  echo " not DELETED";
}
}?>
    <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header"  style="background-color:#292b2c;color:#F39C12">
                    <h5 class="modal-title"  id="EditModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body" style="background-color:#292b2c">
                    <form action="./viewmarks.php" method="POST">
                        <div class="row">
                            <br>
                            <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"> ENGLISH</span>
                                    <input type="text" id="English" class="form-control" name="English" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col">
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">MARATHI</span>
                                    <input type="text" id="Marathi" class="form-control" name="Marathi" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">HINDI</span>
                                    <input type="text" id="Hindi" class="form-control" name="Hindi" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">MATHS</span>
                                    <input type="text" id="Maths" class="form-control" name="Maths" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">SCIENCE</span>
                                    <input type="text" id="Science" class="form-control" name="Science" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col">
                                <br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">SOCIAL STUDIES</span>
                                    <input type="text" id="Socialstudies" class="form-control" name="Socialstudies" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <input type="hidden" name="hide" id="hide">
                        <button type="submit" class="btn btn-dark">Update</button>
                    </form>
                    <?php
                 

                 if (isset($_POST['English'])) { $hide = $_POST['hide'];
                   // echo $hide;
                     $English = $_POST['English'];
                     $Marathi = $_POST['Marathi'];
                     $Hindi = $_POST['Hindi'];
         echo $hide;         echo $English;

                     $Maths = $_POST['Maths'];
                     $Science = $_POST['Science'];
                     $Socialstudies = $_POST['Socialstudies'];
                     $sqls = "SELECT * FROM marks where marksid='$hide' ";
                     $results = mysqli_query($con, $sqls);   
                     $rows = mysqli_fetch_assoc($results);
                     $test = $rows['examtype'];            $total=$English+$Marathi+$Hindi+$Maths+$Science+$Socialstudies;
                     if($test==5 or $test==6){
                        $percentage= ($total/600)*100;
                     }else{
                         $percentage= ($total/120)*100;
                     
                     }
                     $sql="UPDATE marks SET English='$English' , Marathi='$Marathi',Hindi='$Hindi' , Maths='$Maths',Science='$Science' , Socialstudies='$Socialstudies',totalmarks='$total',percentage='$percentage' WHERE marksid='$hide'";
                                          $result = mysqli_query($con, $sql);
                 }
                 ?>    
                </div>
            </div>
        </div></div>
        <form action="viewmarks.php" method="POST">
            <div class="container">
                <div class="row" style="margin-left:10%;margin-right:10%;">
                    <br>
                    <div class=" col-sm-12 col-md-4 col-lg-4 col-xl-4">
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
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
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

                    <div class="col-sm-12  col-md-2 col-lg-2 col-xl-2 ">
                        <br>

                        <select class="form-select" aria-label="Default select example" name="sort">
                            <option selected disabled>Sort by</option>
                            <option value="English">English Marks </option>
                            <option value="Hindi ">Hindi Marks</option>
                            <option value="Marathi ">Marathi </option>

                            <option value="Science ">Science</option>
                            <option value="Socialstudies">Socialstudies </option>
                            <option value="Maths">Maths</option>
                            <option value="totalmarks ">Total Marks</option>
                            <option value="percentage ">Percentage</option>


                        </select>
                    </div>
                    <div class="col-sm-12  col-md-1 col-lg-1 col-xl-1 ">
                        <br>

                        <button type="submit" class="btn " style="color:back;background-color:#F39C12">Submit</button></div>
                </div>
            </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <?php




        if (isset($_POST['test'])) {
            $test = $_POST['test'];
            $standard = $_POST['standard'];
            if (isset($_POST['sort'])) {
                $sort = $_POST['sort'];
            }else{
                $sort="totalmarks";
            }
            $srno = 0;
            $sql = "SELECT * FROM marks where examtype='$test' and examstd='$standard' ORDER BY $sort  ";
            $result = mysqli_query($con, $sql);
            echo '<br><br><div class="container  text-center p-0"><table class="table table-responsive" style="color:whitesmoke;">
    <thead >
      <tr>
        <th scope="col" class="table-dark" style="color:#F39C12">Sr No</th>
        <th scope="col" class="table-dark" style="color:#F39C12">Name</th>
        <th scope="col" class="table-dark" style="color:#F39C12">English</th>
        <th scope="col" class="table-dark" style="color:#F39C12">Hindi</th>
        <th scope="col" class="table-dark" style="color:#F39C12">Marathi</th>
        <th scope="col" class="table-dark" style="color:#F39C12">Science</th>
        <th scope="col" class="table-dark" style="color:#F39C12">Socialstudies</th>
        <th scope="col" class="table-dark" style="color:#F39C12">Maths</th>
        <th scope="col" class="table-dark" style="color:#F39C12">Total</th>
        <th scope="col" class="table-dark" style="color:#F39C12">Percentage</th>
        <th scope="col" class="table-dark" style="color:#F39C12">Action</th>
      </tr>
    </thead>';

            while ($row = mysqli_fetch_assoc($result)) {
                $srno = $srno + 1;
                // echo ''.$row["srno"].'';
                $sqls = "SELECT *  FROM student where srno=" . $row["srno"] . " ";
                $results = mysqli_query($con, $sqls);
                $rows = mysqli_fetch_assoc($results);
                $name = $rows['name'];


                echo '<tbody>
<tr>
<th scope="row">' .     $srno . '</th>
<td>' . $name . '</td>
  <td >' . $row["English"] . '</td>
  <td>' . $row["Hindi"] . '</td>
  <td>' . $row["Marathi"] . '</td>
  <td>' . $row["Science"] . '</td>
  <td>' . $row["Socialstudies"] . '</td>
  <td>' . $row["Maths"] . '</td>
  <td>' . $row["totalmarks"] . '</td>
  <td>' . $row["percentage"] . '</td>

  <td>   <button style="color:back;background-color:#F39C12"  class="btn btn edit " id=' . $row["marksid"] . '>Edit
  
</button>   <button style="color:back;background-color:#F39C12" id=' . $row["marksid"] . ' class="btn  del">Delete</button></td>
</tr>';
            }   
            echo '     </tbody>
</table></div>';
        } else {
            echo '<div class="container text-center mt-5">
      <h1 style="color:white">  No tables to show <br></h1>
        ';
        }



        ?>
        <script>
            edits = document.getElementsByClassName('edit');
            Array.from(edits).forEach((elements) => {
                elements.addEventListener('click', (e) => {
                    newtag = e.target.parentNode.parentNode;
                    var Englishs = newtag.getElementsByTagName('td')[1].innerText;
                    var Hindis = newtag.getElementsByTagName('td')[2].innerText;
                    var Marathis = newtag.getElementsByTagName('td')[3].innerText;
                    var Sciences = newtag.getElementsByTagName('td')[4].innerText;
                    var Socialstudiess = newtag.getElementsByTagName('td')[5].innerText;
                    var Mathss = newtag.getElementsByTagName('td')[6].innerText;
                    // var sr=newtag.getElementsByTagName('td')[7].innerText;
                    // console.log(English);
                    English.value = Englishs;
                    Hindi.value = Hindis;
                    Marathi.value = Marathis;
                    Science.value = Sciences;
                    Socialstudies.value = Socialstudiess;
                    Maths.value = Mathss;
                    var del=e.target.id;
                    console.log(del);
                    hide.value = del;

                    // hide.value = sr;
                    $('#EditModal').modal('toggle');;
                })
            })
        </script>
        <script>
deletes=document.getElementsByClassName('del');
console.log(deletes);
Array.from(deletes).forEach((elements)=>{
 elements.addEventListener('click',(e)=>{
var dele=e.target.id;
     if(confirm('Are you sure you want to delete')){

     window.location=`./viewmarks.php?del=${dele}`;
    }else{

}
 })})

</script>
</body>

</html>