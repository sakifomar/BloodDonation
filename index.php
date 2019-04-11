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
        <a class="nav-link" href="members.php">MEMBER'S</a>
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
    <!--slider--->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/home_1_slider_1.jpg" alt="First slide">
      <div class="carousel-caption text-left">
				<h3>Donate Blood, Save Life!</h3>
				<h2>Your Blood Can Bring Smile In Other Person Face</h2>
				<button type="button" class="btn btn-danger">Donate Now</button>
                <button type="button" class="btn btn-dark">Call Us : 01772431981</button>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/home_1_slider_2.jpg" alt="Second slide">
         <div class="carousel-caption text-left">
				<h3>Donate Blood, Save Life!</h3>
				<h2>Your Blood Can Bring Smile In Other Person Face</h2>
				<button type="button" class="btn btn-danger">Donate Now</button>
                <button type="button" class="btn btn-dark">Call Us : 01772431981</button>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!--end of slider--->
    <!--about us--->
        <div class="about-us" id="about">
        
            <div class="row">
                <div class="col-md-6">
                    <div class="box1">
                        <p class="who">WHO WE ARE?</p>
                        <p class="public">Blood Buddies is for public donation center with blood donation members in the changing health care system.</p>
                        <div class="list">
                        <ul><li>Specialist blood donors and clinical supervision.</li></ul>
                        <ul><li>Increasing communication with our members.</li></ul>
                        <ul><li>High quality assessment, diagnosis and treatment.</li></ul>
                        <ul><li>Examine critically to ensure alignment.</li></ul>
                        <ul><li>The extra care of a multi-disciplinary team.</li></ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box2">
                      <img src="img/a.jpg" alt="img" />
                    </div>
                </div>
            </div>
            
        </div>
    
    <!--end of about us--->
    <!--Donation Process--->
        <div class="donation">
            <h2 class="text-center ">DONATION PROCESS</h2>
            <p class="text-center">The donation process from the time you arrive center until the time you leave</p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    
                        <img src="img/process_1.jpg" alt="" />
                        <div class="regis">
                        <h3>REGISTRATION</h3>
                        <p>You need to complete a very simple registration form. Which contains all required contact information to enter in the donation process.</p>
                       </div>
                    </div>
                     <div class="col-md-4">
                        <img src="img/process_2-300x229.jpg" alt="" />
                        <div class="regis">
                        <h3>SCREENING</h3>
                        <p>A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <img src="img/process_3-300x229.jpg" alt="" />
                        <div class="regis">
                        <h3>DONATION</h3>
                        <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!--End OF Donation Process--->
    <!--Join us--->
    <div class="join-us">
    <div class="container">
    <div class="title">
        <p class="text-center">Awesome Words From Members</p>
        <h3 class="text-center">JOIN WITH US AND SAVE LIFE</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="box3">
                    <div class="opinion">
                        <h3 class="opi">DONOR OPINION</h3>
                        <p class="proud">I proudly donate blood on a regular basis because it gives others something</br> they</<br> desperately need to survive. just knowing i can make a difference in someone </br>else's life makes me feel great!</p>
                        <img src="img/user_4.jpg" alt="" />
                        <p class="sunny">SUNNYBROOK CHURCH</p>
                        <span class="ceo">CEO,HW TECH,BULGARIA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box4">
                        <img src="img/testimony_feat_img-363x430.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!--End OF join us-->
    <!--CAMPAIGN-->
        <div class="campaign">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box5">
                        <h3>DONATION CAMPAIGNS</h3>
                        <p>All over the world we have arranged total sixty thousands donation campaign and visit thousands of other venues on various occasions.</p>
                        <button type="button" class="btn btn-danger">LOAD ALL CAMPAIGN</button>
                        </div>
                     </div> 
                     <div class="col-md-3">
                        <div class="box6">
                         <img src="img/event_1-1-768x994.jpg" alt="" />
                        </div>
                    </div> 
                     <div class="col-md-5">
                        <div class="box7">
                            <i class="fas fa-calendar-week"></i> MARCH 28 2019
                            <h2 class="world">World Blood Donors Day</h2>
                            <p>Every Year on june 14,countries around the world celebrate World Blood Donor Day.The event serves to thank voluntary.Nam liber temper cum soluta nobis eleifend option congue nihil imperdiet doming</p>
                            <i class="fas fa-clock"></i>1:00PM-3:00PM
                            <i class="fas fa-map-marker-alt"></i>Almond Street  
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    <!--End OF CAMPAIGN-->
    <!--part of us-->
        <div class="part-area" id="join">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="box8">
                    <h3 class="text-center">Become A Part Of Great Work Today</h3>
                    <p class="text-center">You can give blood at any of our blood donation venues all over the world.We have total sixty thousands donor centers and visit thousands of other venues on various occasions.</p>
                    <button type="button" class="btn btn-danger">JOIN WITH US</button>
                </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    
    <!--End OF part of us-->
    <!--appointment-->
    <div class="appointment">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="box10">
                        <h4 class="good">GOOD TO KNOW</h4>
                        <p class="for">Blood Buddies is for public donation center with blood donation members in the changing health care system.</p>
                        <ul class="iron">
                        	<li>Maintain a healthy iron level by eating iron rich foods. Lorem ipsum dolor sit consectetur adipiscing elit.</li>
                        	<li>Maintain a healthy iron level by eating iron rich foods. Lorem ipsum dolor sit consectetur adipiscing elit.</li>
                        	<li>Maintain a healthy iron level by eating iron rich foods. Lorem ipsum dolor sit consectetur adipiscing elit.</li>
                        	<li>Maintain a healthy iron level by eating iron rich foods. Lorem ipsum dolor sit consectetur adipiscing elit.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box11">
                        <div class="topbox">
                            <h3 class="text-center">REQUEST APPOINTMENT</h3>
                        </div>
                        <form class="form">
                      <div class="form-row">
                        <div class="col name">
                          <input type="text" class="form-control" placeholder="Name">
                        </div>
                       <div class="col name">
                          <input type="Email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-row">
                     <div class="col name">
                          <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col name">
                        
                        <select id="inputState" class="form-control">
                                <option selected>Donation Center</option>
                                <option>Red Cresent</option>
                                <option>Red Cresent</option>
                                <option>Red Cresent</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-row">
                     <div class="col name">
                          <input type="Date" class="form-control" placeholder="Date">
                        </div>
                        <div class="col name">
                          <input type="Time" class="form-control" placeholder="Time">
                        </div>
                      </div>
                      <div class="form-group">
                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="YOUR MESSAGE"></textarea>
                    </div>
                    <button type="button" class="btn btn-danger">GET APPOINTMENT</button>              
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of appointment-->
    <!-- counter up-->
        <div class="counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box12 text-center">
                        <div class="area">
                            <i class="fas fa-heartbeat"></i>
                            <h3 class="number">2578</h3>
                            <p>Success Smile</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                          <div class="box12 text-center">
                        <div class="area">
                            <i class="fas fa-stethoscope"></i>
                            <h3 class="number">3235</h3>
                            <p>Happy Donors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                         <div class="box12 text-center">
                        <div class="area">
                            <i class="fas fa-users"></i>
                            <h3 class="number">3568</h3>
                            <p>Happy Recipient</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                          <div class="box12 text-center">
                        <div class="area">
                            <i class="fas fa-building"></i>
                            <h3 class="number">1364</h3>
                            <p>Total Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    
    <!-- end of counter up-->
    <!-- our volunteers-->
        <div class="vounteers">
            <div class="text-area">
            <p class="text-center">OUR VOLUNTEERS</p>
            <h3 class="text-center">The Volunteers Who Give Their Time And Talents Help To Fulfill Our Mission.</h3>
            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box13">
                                <img src="img/team_6-271x300.jpg" alt="" />
                                <p>MELIISSA MUNOZ</p>
                                <p>CO-FOUNDER</p>
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter-square"></i>
                                <i class="fab fa-google-plus-square"></i>
                                <i class="fab fa-linkedin"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box14">
                                  <img src="img/team_7-271x300.jpg" alt="" />
                                    <p>STEFINA RODRIGUZ</p>
                                    <p>MANAGER</p>
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-twitter-square"></i>
                                    <i class="fab fa-google-plus-square"></i>
                                    <i class="fab fa-linkedin"></i>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box15">
                                <img src="img/team_9.jpg" alt="" />
                                <p>ALEXDENDER GRAY</p>
                                <p>PRESIDENT</p>
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter-square"></i>
                                <i class="fab fa-google-plus-square"></i>
                                <i class="fab fa-linkedin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    
    <!--end of our volunteers-->
    <!--gallery-->
        <div class="gallery" id="campaign">
            <h2 class="text-center">CAMPAIGN GALLERY</h2>
            <p class="text-center">Our prestigious voluntary work on campaigns by the team</p>
            <div class="container">
            <div class="gallery-top">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/gallery_1-300x222.jpg" alt="" />
                    </div>
                    <div class="col-md-4">
                        <img src="img/gallery_2-300x222.jpg" alt="" />
                    </div>
                    <div class="col-md-4">
                        <img src="img/gallery_3-300x222.jpg" alt="" />
                    </div>
                </div>
                </div>
            </div>
            <div class="container">
            <div class="gallery-bottom">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/gallery_4.jpg" alt="" />
                </div>
                <div class="col-md-4">
                    <img src="img/gallery_5.jpg" alt="" />
                </div>
                <div class="col-md-4">
                    <img src="img/gallery_6.jpg" alt="" />
                </div>
                </div>
                </div>
            </div>
        </div>
    
    <!--end of gallery-->
    <!---Sponsors-->
        <div class="sponsors">
            <div class="container">
                <div class="row">
                <div class="col-md-3">
                <h2>CAMPAIGN SPONSORS</h2>
                <p>We appritiate our honorable sponors. The sponsors who give their valuable amount to fulfill our mission.</p>
                </div>
                <div class="col-md-3">
                    <img src="img/logo_1-300x195.jpg" alt="" />
                </div>
                <div class="col-md-3">
                    <img src="img/logo_4-300x195.jpg" alt="" />
                </div>
                <div class="col-md-3">
                    <img src="img/logo_8.jpg" alt="" />
                </div>
            </div>
        </div>
    
    <!---End of Sponsors-->
    <!---Recent  Blog-->
        <div class="blog-area">
            <h2 class="text-center">RECENT BLOG</h2>
            <p class="text-center">Latest news and statements regarding giving blood, blood processing and supply.</p>
        
         <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <div class="box16">
                    <img src="img/blog_1-1.jpg" alt="" />
                    <p>BLOOD CONNECTS US ALL IN A SOUL</p>
                         <i class="fas fa-clock"></i>15, November 2014
             <i class="fas fa-comments"></i>0 Comments
             <p>Blood is the most precious gift that anyone can give to another person.Donating blood not only saves the life also donors.</p>
        
                  </div>
                </div>
                 <div class="col-md-4">
                    <div class="box17">
                     <img src="img/blog_2-1-645x430.jpg" alt="" />
                     <p>WHY SHOULD I DONATE BLOOD ?</p>
                          <i class="fas fa-clock"></i>15, November 2014
                        <i class="fas fa-comments"></i>0 Comments
                    <p>Blood is the most precious gift that anyone can give to another person.Donating blood not only saves the life also donors.</p>
                    </div>
                </div>
                  <div class="col-md-4">
                    <div class="box18">
                        <img src="img/blog_3-300x200.jpg" alt="" />
                        <p>GIVE BLOOD AND SAVE THREE LIVES</p>
                             <i class="fas fa-clock"></i>15, November 2014
             <i class="fas fa-comments"></i>0 Comments
                    <p>Blood is the most precious gift that anyone can give to another person.Donating blood not only saves the life also donors.</p>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-danger">LOAD ALL BLOG</button>
         </div>
          </div>
    
    <!---End of Recent  Blog-->
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