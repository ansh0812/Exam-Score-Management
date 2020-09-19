<?php
require('./connection.php');
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="icon" href="logo.png" >
  <title>Student Marks</title>
  <style>
    .student-marks-table{
width:21rem;
    }
    .table{
      color:white;
    }
    @media all and (max-width: 968px){

.student-marks-table{
  width:80%;
  margin-left:10%;
 margin-right:10%;
}
}
  </style>
</head>

<body style="background-color:#292b2c;color:#ffffff!important;"><?php
      require('./nav.php');
      ?>
  <form action="studentmarks.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <div class="container">
      <div class="row" style="margin-left:10%;margin-right:10%;">
        <br>

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


        <div class="col-sm-12  col-md-2 col-lg-2 col-xl-2 ">
          <br>

          <button type="submit" class="btn btn-primary">Submit</button></div>
      </div>
    </div>
  </form>
  <?php
echo '<div class="container"><br><div class="row">';
// <br>
  if (isset($_POST['standard'])) {


      $standard = $_POST['standard'];
      $sno = (isset($_GET['id']) ? $_GET['id'] : '1');
    for ($i=1; $i <7 ; $i++) { 
      # code...
   
      $sql = "SELECT * FROM marks where srno= '$sno' and examstd='$standard' and examtype=$i ";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col"><table class="table text-center student-marks-table table-sm table-borderless caption-top" style=";border-style:solid;border-color:#F39C12">
          <caption style="color:#F39C12"> TEST  '.$i.' <span > - ' . floor($row["percentage"]) . '%   </span> </caption>
 
          <thead>
            <tr>
         
              <th scope="col">English</th>
              <th scope="col">Marathi</th>
              <th scope="col">Socialstudies</th>
            </tr>
          </thead>
          <tbody>
            <tr>
        
              <td>' . $row["English"] . ' </td>
              <td> ' . $row["Marathi"] . '</td>
              <td>' . $row["Socialstudies"] . ' </td>
            </tr>
            </tbody>
            <tbody>
            <thead>
            <tr>
        
              <th scope="col">Hindi</th>
              <th scope="col">Science</th>
              <th scope="col">Maths</th>
            </tr>
          </thead>
            <tr>
             
              <td>' . $row["Hindi"] . '</td>
              <td>' . $row["Science"] . '</td>
              <td> ' . $row["Maths"] . ' </td>
            </tr>
          </tbody>
        </table></div>';
        
          
      }
    }   
 echo'  </div></div>';

}  ?>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
</body>

</html>