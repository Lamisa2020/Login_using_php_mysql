
<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
<a href="" class="navbar-brand text-warning font-weight-bold ml-3">Kyo͞ot Shōjo</a>              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                 <span class="navbar-toggler-icon"></span>
                  
              </button>
              
              <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item"> <a href="index.php" class="nav-link text-white mt-2">HOME</a></li>
                      <li class="nav-item"> <a href="" class="nav-link text-white mt-2">PORTFOLIO</a></li>
                      <li class="nav-item"> <a href="" class="nav-link text-white mt-2" >ABOUT</a></li>
                      <li class="nav-item"> <a href="" class="nav-link text-white mt-2">CONTACT</a></li>';

      if(!$loggedin){
      echo '<li class="nav-item"> <a href="login.php" class="nav-link text-white mt-2">LOGIN</a></li>
      <li class="nav-item"> <a href="singup.php" class="nav-link text-white mt-2 btn btn-success">SINGUP</a></li>';
      }
      if($loggedin){
      echo '<li class="nav-item"> <a href="logout.php" class="nav-link text-white"><button class="btn btn-danger rr mt-1">LOGOUT</button></a></li>';
    }
       
      
    echo '</ul>
    </div>
    
    </nav>';  
?>
       
