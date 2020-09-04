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

  <title>Hello, world!</title>
</head>

<body><?php
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
echo '<div class="container"><br><div class="row"><br>';
  if (isset($_POST['standard'])) {


      $standard = $_POST['standard'];
      $sno = (isset($_GET['id']) ? $_GET['id'] : '1');
    for ($i=1; $i <7 ; $i++) { 
      # code...
   
      $sql = "SELECT * FROM marks where srno= '$sno' and examstd='$standard' and examtype=$i ";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
          
              echo '<div class="col"><div class="card border-dark mb-3" style="max-width: 25rem;" >
            <div class="card-header  border-dark text-center" style="background-color:#292b2c;color:#F39C12">  TEST  '.$i.'  </div>
            <div class="cards border-dark" style="width: 25rem;">
            <ul class="border-right border-left border-dark list-group list-group-flush " >
            <div class="row ">
            <div class="col text-center">
              <li class="list-group-item"  style="border:none;padding:.5rem .2rem;">ENGLISH - ' . $row["English"] . '   </li>
            </div>
              <div class="col text-center">      <li class="list-group-item" style="border:none;padding:.5rem .2rem">Hindi - ' . $row["Hindi"] . ' </li>
              </div>
              </div>
              <div class="row">
              <div class="col text-center">
                <li class="list-group-item"  style="border:none;padding:.5rem .2rem">Marathi - ' . $row["Marathi"] . '   </li>
              </div>
                <div class="col text-center">      <li class="list-group-item" style="border:none;padding:.5rem .2rem">Science - ' . $row["Science"] . ' </li>
                </div>
                </div>
                <div class="row">
                <div class="col text-center">
                  <li class="list-group-item"  style="border:none;padding:.5rem .2rem">Socialstudies - ' . $row["Socialstudies"] . '   </li>
                </div>
                  <div class="col text-center">      <li class="list-group-item" style="border:none;padding:.5rem .2rem">Maths - ' . $row["Maths"] . ' </li>
                  </div>
                  </div>
            </ul>
            </div>
            <div class="card-footer bg-transparent border-dark"><div class="row">
            <div class="col text-center">
              Total Marks - ' . $row["totalmarks"] . '  
            </div>
              <div class="col text-center">      Percentage - ' . $row["percentage"] . '
              </div>
              </div></div>
              </div>  </div>';
          
      }
    }   
 echo'  </div></div>';
// echo' <div class="row">';
}  ?>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
</body>

</html>