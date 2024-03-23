<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>iForum</title>
  </head>
  <body>
    <?php include 'header.php' ?>

    <?php include 'dbconnect.php'?>






<?php
$error=0;
if($error==1){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>


    
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
  <img src="https://source.unsplash.com/2400x700/?apple,code" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
  <img src="https://source.unsplash.com/2400x700/?programmers,water" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
  <img src="https://source.unsplash.com/2400x700/?coding,apple" class="d-block w-100" alt="...">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<div class="container my-3">
    <h4 class="text-center">iForum-browse categories</h4>
<div class="row">
<?php
 
 $sql="SELECT * FROM `categories`";
 $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($result)) {

        $nm1=$row['nm'];
        $id1=$row['srno'];
        $desc1=$row['des'];
                      echo 
          
           '<div class="col-md-4 my-2">
              <div class="card " style="width: 18rem;">
            <img src="https://source.unsplash.com/500x400/?'.$nm1.',coding" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="threadlist.php?catid='.$id1.'">'.$nm1.'</a></h5>
              <p class="card-text">'.substr($desc1,0,50).'..</p>
              <a href="threadlist.php?catid='.$id1.'" class="btn btn-primary">View threads</a>
            </div>
            </div>
              </div>';
 }
?>

</div>
</div>
  
<?php include 'footer.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>