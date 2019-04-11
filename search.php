<?php 
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="img/iconfinder_blood_drop_88322.png" />
    <link rel="stylesheet" type="text/css" href="main.css" media="all" />

    <title>Blood Donation!</title>
  </head>
  <body>
    <!--Header area-->
        <div class="top-header">
            <div class="row">
                <div class="col-md-4">
                <div class="social-icon">
                    <ul>
                    	<a href="https://facebook.com"><i class="fab fa-facebook-square"></i></a>
                    	<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    	<a href="hhtps://google-plus.com"><i class="fab fa-google-plus"></i></a>
                    	<a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                    	<a href="https://youtube.com"><i class="fab fa-youtube"></i></a>
                    </ul>
                    </div>
                </div>
                <div class="col-md-4">
                   
                </div>
                <?php if(!isset($_SESSION['username'])) { ?>
                     <div class="col-md-4">
                    <div class="log-in">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Log In
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="validation.php" method="post">
                               <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="user" class="form-control" required>  
                                </div>
                              <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>  
                               </div>
                              
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                     </div>
               </div>
         </div>
     </div>
 </div>      
<div class="sign-up">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Sign Up
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
 <form action="registration.php" method="post">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first" class="form-control" required>  
            </div>                           
            <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last" class="form-control" required>  
            </div> 
            <div class="form-group">
            <label>Email</label>
            <input type="Email" name="Email" class="form-control" required>  
            </div>
            <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>  
            </div>
            <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>  
            </div>
            <div class="form-group">
            <label>Blood Group</label>
            
            <select name="blood">
                <option >O+</option>
                <option >O-</option>
                <option >A+</option>
                <option >A-</option>
                <option >B+</option>
                <option >B-</option>
                <option >AB+</option>
                <option >AB-</option>
            </select>
            
            </div>
            <div class="form-group">
            <label>Last Donation</label>
            <input type="date" name="donate" class="form-control" placeholder="DD-MM-YY" required>  
            </div>
            <div class="form-group">
            <label>Mobile No.</label>
            <input type="text" name="mobile" class="form-control" required>  
            </div>
            <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" required>  
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
    
      </div>  
   </div> 
 </div>
            
    </div>
    </div>
 </div>
 <?php } else { ?>
   <div class="col-md-4">
   <div class="profile-area">
                   <div class="container">
                       <a class="float-right" href="logout.php"> LOGOUT </a>
                    </div>
               <div class="container">
                <a class="float-right" href="profile.php"> EDIT PROFILE </a>
             </div>
             </div>
         </div>
 <?php } ?>
          </div>
        </div>
    <!--end of Header area-->
    <!--Navigational panel-->
    
        <div class="nav-bar">
        
            <nav class="navbar navbar-expand-lg navbar-light">
            <span class="blood">BLOOD</span>
            <span class="red">BUDDIES</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">MEMBER'S</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#campaign" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         CAMPAIGN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#campaign">Single Event</a>
          <a class="dropdown-item" href="#campaign">Our Campaign</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#join">CONTACT US</a>
      </li>
      
    </ul>
    <div class="search">
  <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
    <select name="search">
                <option >O+</option>
                <option >O-</option>
                <option >A+</option>
                <option >A-</option>
                <option >B+</option>
                <option >B-</option>
                <option >AB+</option>
                <option >AB-</option>
            </select> 
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
 </div>
  </div>
  
</nav>
 </div>


    <!--end of Navigational panel-->
    <!--search area--!>
<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'blooddonation');

$item = $_POST['search'];
$s = " select * from usertable where bloodtype='$item'";
$result = mysqli_query($con, $s);

 
 echo "<table class='table table-dark'>
 <tr>
 <th>First Name</th>
 <th>Last Name</th>
 <th>Blood Type</th>
 <th>Last Donation</th>
 <th>Mobile Number</th>
 <th>Address</th>
 </tr>";
 while($row = mysqli_fetch_array($result))
 
  {
 echo "<tr>";
 echo "<td>" . $row['FirstName'] . "</td>";
 echo "<td>" . $row['LastName'] . "</td>";
 echo "<td>" . $row['bloodtype'] . "</td>";
 echo "<td>" . $row['lastdonation'] . "</td>";
 echo "<td>" . $row['mobile'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";

mysqli_close($con)
?>



    <!--end of search area--!>

    <!---Footer area-->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/logo-footer.png" alt="" />
                        </div>
                        <div class="col-md-8">
                            <p>We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood. We are working all over the world, organizing blood donation campaign to grow awareness among the people to donate blood.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        <div class="us">
                            <h2>CONTACT US</h2>
                        </div>
                        <div class="footericon">
                        <div class="row">
                            <div class="col-md-1"><i class="fas fa-envelope"></i></div>
                            <div class="col-md-4"><p>support@examples.com </br>helpme@examples.com</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"><i class="fas fa-location-arrow"></i></div>
                            <div class="col-md-8"><p>Road-2,3/A East Shibgonj Sylhet-3100, Bangladesh</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"><i class="fas fa-phone"></i></div>
                            <div class="col-md-9"><p>Office: (+880) 0823 560 433 Cell: (+880) 0723 161 343</p></div>
                        </div>
                        </div>
                        </div>
                         <div class="col-md-4">
                         <div class="us">
                            <h2>SUPPPORT LINKS</h2>
                         </div>
                         <div class="row">
                            <div class="col-md-1"><i class="fas fa-angle-right"></i></div>
                            <div class="col-md-9"><p>ABOUT US</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"><i class="fas fa-angle-right"></i></div>
                            <div class="col-md-9"><p>CONTACT US</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"><i class="fas fa-angle-right"></i></div>
                            <div class="col-md-9"><p>MEMBERS</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"><i class="fas fa-angle-right"></i></div>
                            <div class="col-md-9"><p>CAMPAIGN</p></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"><i class="fas fa-angle-right"></i></div>
                            <div class="col-md-9"><p>BLOG</p></div>
                        </div>
                        </div>
                         <div class="col-md-4">
                            <div class="us">
                            <h2>SUBSCRIBE US</h2>
                            <p>Signup for regular newsletter and stay up to date with our latest news.</p>
                            <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email"> </div>
                        <button type="button" class="btn btn-danger">JOIN NEWSLETTER</button>
                         </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <p>Copyright 2019 - Md Omar Sakif. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-2">
                        
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
    
    <!---End of Footer area-->
    
    
    
    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity=
    "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
    
    
  </body>
</html>