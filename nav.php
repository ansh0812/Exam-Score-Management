
<?php

  // linear-gradient(123deg, #FAD961 0%, #F76B1C 100%)  ;
  //     text-fill-color:transparent;background-clip: text;
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style=" 
color:#F39C12;"> <image style="margin-bottom:4px;" src="icon.png" height=30;>Exam Score Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto mb-2 mr-3 mb-lg-0">
      <li class="nav-item dropdown">
          <a style=" 
          color:#F39C12;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Student
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./addstudent.php">Add Student</a></li>
            <li><a class="dropdown-item" href="./modifystudent.php">Modify Student</a></li>
            <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li> 
        <li class="nav-item dropdown">
        <a style=" 
        color:#F39C12;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Marks
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a  class="dropdown-item" href="./viewmarks.php">View Marks</a></li>
        
        </ul>
        
      </li>

      <li class="nav-item">
      <a class="nav-link" style=" 
      color:#F39C12;" href="./ranking.php">Ranking</a>
    </li>
     
      </ul>
      
    </div>
  </div>
</nav>';?>