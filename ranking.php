<?php
require('./connection.php');
$ranker=0;
$achiever=0;
$defaulter=0;
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body style="background-color:#292b2c">

  <?php
  require('./nav.php');
  ?>
        
  <form action="ranking.php" method="POST">
    <div class="container">

       <div class="row" style="margin-left:10%;margin-right:10%;">
        
 
<h2 class="" style="color:whitesmoke"> Rankers</h2>
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

          <button type="submit" style="color:back;background-color:#F39C12" class="btn">Submit</button></div>
      </div>
    </div>
  </form>
  
  <?php

  //and examstd='.$standard.'
  //1 7 9
  $sql = 'SELECT * FROM student';
  $result = mysqli_query($con, $sql);
  echo '<div class="container text-center ">';
  echo '<br><h3 style="color:#F39C12">Top Rankers </h3><table class="table table-success table-caption  table-sm table-bordered " style=width:50%;margin-left:25%;margin-right:25%;>
  
   <thead>
      <tr>
        <th scope="col" style=width:13.33%>Roll No </th>
        <th scope="col" style=width:33.33%>Full Name</th>
        <th scope="col" style=width:33.33%>Percentage</th>
        
      </tr> </thead><tbody>';
  while ($row = mysqli_fetch_assoc($result)) {
    if (isset($_POST['standard'])) {
      $standard = $_POST['standard'];

      $sqls = 'SELECT AVG(percentage) as avg_percent FROM marks where  srno=' . $row["srno"] . ' and examstd= ' . $standard . '';
      $sum = 0;
      $results = mysqli_query($con, $sqls);

      while ($rows = mysqli_fetch_array($results)) {
        $sum = $rows['avg_percent'];
        //  echo $sum;
        if ($sum >80) {
          $ranker++;
          echo ' 
      <tr>
        <th scope="row">' . $row["rollno"] . '</th>
        <td>' . $row["name"] . '</td>
        <td>'. ceil( $sum  ).'</td>
   
      </tr>
 
  ';
        }
      } 
    }
  }echo' </tbody><caption style="color:whitesmoke;">   Total Number of Rankers - '.$ranker.'</caption>
  </table>';
  echo '</div>';

  $sql = 'SELECT * FROM student';
  $result = mysqli_query($con, $sql);


  echo '<div class="container text-center">';
  echo '<br><h3 style="color:#F39C12">Acheivers </h3><table class="table table-warning  table-sm table-bordered " style=width:50%;margin-left:25%;margin-right:25%;>
    <thead>
      <tr>
      <th scope="col" style=width:13.33%>Roll No </th>
      <th scope="col" style=width:33.33%>Full Name</th>
      <th scope="col" style=width:33.33%>Percentage</th>
        
      </tr> </thead><tbody>';
  while ($row = mysqli_fetch_assoc($result)) {
    if (isset($_POST['standard'])) {
      $standard = $_POST['standard'];

      $sqls = 'SELECT AVG(percentage) as avg_percent FROM marks where  srno=' . $row["srno"] . ' and examstd= ' . $standard . '';
      $sum = 0;
      $results = mysqli_query($con, $sqls);

      while ($rows = mysqli_fetch_array($results)) {
        $sum = $rows['avg_percent'];
        //  echo $sum;
        if ($sum <= 80 && $sum>=40) {
          $achiever++;
          echo ' 
      <tr>
        <th scope="row">' . $row["rollno"] . '</th>
        <td>' . $row["name"] . '</td>
        <td>'. ceil( $sum  ).'</td>
   
      </tr>
 
  ';
        }
      } 
    }
  }echo' </tbody><caption style="color:whitesmoke;">   Total Number of Achievers - '.$achiever.'</caption> </tbody>
  </table>';
  echo '</div>';

  $sql = 'SELECT * FROM student';
  $result = mysqli_query($con, $sql);


  echo '<div class="container text-center">';
  echo '<br><h3 style="color:#F39C12">Defaulters </h3><table class="table table-danger  table-sm table-bordered " style=width:50%;margin-left:25%;margin-right:25%;>
    <thead>
      <tr>
      <th scope="col" style=width:13.33%>Roll No </th>
      <th scope="col" style=width:33.33%>Full Name</th>
      <th scope="col" style=width:33.33%>Percentage</th>  
        
      </tr> </thead><tbody>';
  while ($row = mysqli_fetch_assoc($result)) {
    if (isset($_POST['standard'])) {
      $standard = $_POST['standard'];

      $sqls = 'SELECT AVG(percentage) as avg_percent FROM marks where  srno=' . $row["srno"] . ' and examstd= ' . $standard . '';
      $sum = 0;
      $results = mysqli_query($con, $sqls);

      while ($rows = mysqli_fetch_array($results)) {
        $sum = $rows['avg_percent'];
        //  echo $sum;
        if ($sum <40  &&  $sum>0) {
$defaulter++;
          echo ' 
      <tr>
        <th scope="row">' . $row["rollno"] . '</th>
        <td>' . $row["name"] . '</td>
        <td>'. ceil( $sum  ).'</td>
   
      </tr>
 
  ';
        }
      } 
    }
  }echo' </tbody><caption style="color:whitesmoke;"">   Total Number of Defaulters - '.$defaulter.'</caption> </tbody>
  </table>

  
  </div>';
  ?>
  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>

<!-- // '.$ranker.'
  // '.$achiever.'
  // '.$defaulter.' -->