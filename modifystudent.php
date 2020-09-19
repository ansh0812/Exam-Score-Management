<?php
require('./connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="logo.png" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<style>
@media all and (max-width: 968px){
  .addmarks{
    width:100%;
    margin-top:10%;
   
  }
  .del{
    width:100%;
    margin-top:10%;
   
  }
}

.dropdown-toggle::after{
  display: none!important;
}

</style>
    <title>Modify Student</title>
  </head>

  <body style="background-color:#292b2c">
 
    <?php  if(isset($_GET['del'])){
  $sno=$_GET['del'];
  // echo $sno;
  // "DELETE FROM `student` WHERE `student`.`srno` = 4"
  $sql="DELETE  FROM student WHERE srno='$sno'";
  $result=mysqli_query($con,$sql);
  $sql="DELETE  FROM marks WHERE srno='$sno'";
  $result=mysqli_query($con,$sql);


// if($result){
//   echo "DELETED";
// }else{
//   echo " not DELETED";
// }
}?>

<?php
require('./nav.php');
?>



<br>




<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade"  id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#292b2c;">
        <h5 class="modal-title" style="color:whitesmoke" id="EditModalLabel">EDIT STUDENT DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:#F39C12">&times;</span>
        </button>
      </div>


      <div class="modal-body" style="background-color:#292b2c;">
      <form action="./modifystudent.php" method="POST">
            <div class="row">
                <br>
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"> Full Name</span>
                        <input type="text" class="form-control" name="name"id="names" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col">
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email id</span>
                        <input type="text" class="form-control" id="emails" name="email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"> PhoneNumber</span>
                        <input type="phonenumber" id="phonenumbers" class="form-control" name="phonenumber" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"> Roll Number</span>
                        <input type="text" class="form-control" id="rollnos" name="rollno" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <br>
                    <select class="form-select" aria-label="Default select example" name="gender" id="genders">
                        <option selected>Select your Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class=" col">
                    <br>
                    <select class="form-select" aria-label="Default select example" id="standards" name="standard">
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
           <input type="hidden" name="hide" id="hide">
            <button type="submit" style="color:back;background-color:#F39C12" class="btn ">Submit</button>
        </form>
      </div>

      <?php
                 

        if ($_SERVER['REQUEST_METHOD'] == 'POST') { $hide = $_POST['hide'];
          // echo $hide;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];

            $rollno = $_POST['rollno'];
            $gender = $_POST['gender'];
            $standard = $_POST['standard'];
            $sql="UPDATE student SET rollno='$rollno' , name='$name',email='$email' , phonenumber='$phonenumber',gender='$gender' , standard='$standard' WHERE srno='$hide'";


            // $sql = "INSERT INTO student(rollno,name,email,phonenumber,gender,standard) VALUES('$rollno','$name','$email','$phonenumber','$gender','$standard')";
            $result = mysqli_query($con, $sql);
        
        }
        ?>


      <div class="modal-footer" style="background-color:#292b2c;">
        <button type="button" style="color:back;background-color:#F39C12" class="btn " data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>









    <div class="container-lg ">

    <h2 class="" style="color:whitesmoke"> View &  Modify  Student Details</h2>
        <hr>

  <div class="table-responsive">  <table class="table  table-responsive text-center ">
  <thead>
    <tr>
      <th scope="col" class="table-dark" style="color:#F39C12" >Sr No</th>
      <th scope="col" class="table-dark" style="color:#F39C12" >Name</th>
      <th scope="col" class="table-dark" style="color:#F39C12" >Roll No</th>
      <th scope="col" class="table-dark" style="color:#F39C12" >Email id</th>
      <th scope="col" class="table-dark" style="color:#F39C12" >Phonenumber</th>
      <th scope="col" class="table-dark" style="color:#F39C12" >Gender</th>
      <!-- <th scope= class="table-dark" style="color:#F39C12" "col">First</th> -->
      <th scope="col" class="table-dark" style="color:#F39C12" >Standard</th>
      <th scope="col" class="table-dark" style="color:#F39C12;" >Action</th>
    </tr>
  </thead>
<?php 
 $srno=0;
 $sql='SELECT * FROM student';
 $result =mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($result)) {
    $srno=$srno+1;
    echo '<tbody style="color:whitesmoke;">
<tr>
<th scope="row">'. $srno.'</th>




  <td ><a href="./studentmarks.php?id='.$row["srno"].'">'.$row["name"].'</td></a> 
  <td>'.$row["rollno"].'</td>
  <td>'.$row["email"].'</td>
  <td>'.$row["phonenumber"].'</td>
 
  <td>'.$row["gender"].'</td>

  <td>'.$row["standard"].'</td>
  <td colspan="2">
      <button class="btn  edit" style="color:back;background-color:#F39C12"  >EDIT</button>
  <button style="color:back;background-color:#F39C12" class="btn del" id='.$row["srno"].'>DELETE</button>
  <a href="./addmarks.php?id='.$row["srno"].'"> <button class="btn addmarks"style="color:back;background-color:#F39C12" >ADD MARKS</button></a>

  </td>
<td style="display:none;">'.$row["srno"].'</td>
</tr>
';
}
echo '</tbody>
</table></div>';
?>
    </div>
  <!-- [button1,button2,button3,button 10...........] -->
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
<script>  
edits=document.getElementsByClassName('edit');
Array.from(edits).forEach((elements)=>{
 elements.addEventListener('click',(e)=>{
console.log(e.target.parentNode.parentNode);

newtag=e.target.parentNode.parentNode;
var name=newtag.getElementsByTagName('td')[0].innerText;
var rollno =newtag.getElementsByTagName('td')[1].innerText;
var email=newtag.getElementsByTagName('td')[2].innerText;
var phonenumber=newtag.getElementsByTagName('td')[3].innerText;
var gender=newtag.getElementsByTagName('td')[4].innerText;
var standard=newtag.getElementsByTagName('td')[5].innerText;

var sr=newtag.getElementsByTagName('td')[7].innerText;
names.value=name;
rollnos.value=rollno;
emails.value=email;
phonenumbers.value=phonenumber;
genders.value=gender;
standards.value=standard;

hide.value = sr;
     $('#EditModal').modal('toggle');

 })
});
 </script> 
<script>
deletes=document.getElementsByClassName('del');
// console.log(deletes);
Array.from(deletes).forEach((elements)=>{
 elements.addEventListener('click',(e)=>{
var dele=e.target.id;
     if(confirm('Are you sure you want to delete')){

     window.location=`./modifystudent.php?del=${dele}`;
    }else{

}
 })})

</script>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>