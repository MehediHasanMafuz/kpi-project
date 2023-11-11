<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <!-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->

   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="st.css">

   <link rel="icon" href="images1/" type="image/x-i">
    <link rel="stylesheet" href="cssmain/stylemain.css">
    <link rel="stylesheet" href="footer.css">

</head>
<body>



   



<!---TOP-HEADER STARTS TOP-HEADER STARTS--->

<nav class="navbar">
      <img src="kpi.png" class="navbar-logo" alt="logo" />
      <ul class="navbar-list">
        <li><a href="#">Home</a></li>
        <li><a href="#">Videos</a></li>
        <li><a href="#">Playlists</a></li>
        <li><a href="#">Community</a></li>
        <li><a href="#">About</a></li>
      </ul>

      <div class="profile-dropdown">
        <div onclick="toggle()" class="profile-dropdown-btn">
          <div class="profile-img">
            <i class="fa-solid fa-circle"></i>
          </div>

          <span
            ><?php echo $_SESSION['user_name'] ?>
            <i class="fa-solid fa-angle-down"></i>
          </span>
        </div>

        <ul class="profile-dropdown-list">
          <li class="profile-dropdown-list-item">
            <a href="login_form.php" class="btn">
              <i class="fa-regular fa-user"></i>
              Login
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="register_form.php" class="btn">
              
              <i class="fa fa-address-card" aria-hidden="true"></i>

              Register
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-solid fa-chart-line"></i>
              Analytics
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-solid fa-sliders"></i>
              Settings
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-regular fa-circle-question"></i>
              Help & Support
            </a>
          </li>
          <hr />

          <li class="profile-dropdown-list-item">
            <a  href="logout.php" class="btn" class="fa-solid fa-arrow-right-from-bracket">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Log out
              
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <script src="script.js"></script>
    <script src="main.js"></script>





    <!-- main page ////////......... -->

   <!---TOP-HEADER STARTS TOP-HEADER STARTS--->
<div class="mar"><marquee> My college: How To Lorem Ipsum
    is simply dummy text of the printing and typesetting industry. </marquee></div>
    
    <style>
      .mar{
         
	background-color: green;
	padding: 10px;
    border: 2px solid;
    color: white;}
	
    

      
      .img1{
        height: 390px;
    width: 1123px;
    padding: 52px;
    margin-top: -46px;
    padding-bottom: 0px;
    margin-left: 2px;
}
      

    </style>
    <img class="img1" src="about1.jpg" alt="" > 







    <div class="main-section" style="background:#f0f3fa">
    <div class="container">
      <!----CAMPUS NEWS SECTION----->
      <div class="event">
        <h2 class="heading">নোটিশ বোর্ড</h2>
        <div>
          <ul>
            <li>
              <b>01-April-2023 :</b> ২০২৩-২০২৪ শিক্ষাবর্ষে ভতি সংক্রান্ত বিজ্ঞপ্তি ও ভর্তি ফি বিবরণী ।
            </li>
            <li>
              <b>01-April-2023 :</b> 2022-23 শিক্ষাবর্ষের ভর্তি সংক্রান্ত ।
            </li>
            <li>
              <b>01-April-2023 :</b> 	২০২২-২৩ শিক্ষাবর্ষে ভর্তি বিজ্ঞপ্তি (সরকারি ও বেসরকারি শিক্ষা প্রতিষ্ঠানের জন্য) 
            </li>
            <li>
              <b>01-April-2023 :</b> সেমিস্টার বেতন ও অন্যান্য ফিস সংক্রান্ত বিজ্ঞপ্তি 
            </li>
            <li>
              <b>01-April-2023 :</b> মেক-আপ কোর্সের ভর্তি বিজ্ঞপ্তি । 
            </li>
            <div class="button">
              <button type="button" onclick="location.href='notice.html'" >সকল নোটিশ</button>
            </div>
          </ul>
        </div>
      </div>

      <!-----College Department SECTION----->
      <div class="event">
        <h2 class="heading">বিভাগ</h2>
        <div>
          <ul>
            <li>
              <b>Computer</b>
            </li>
            <li>
              <b>Civil</b>
            </li>
            <li>
              <b>Electronical</b>
            </li>
            <li>
              <b>Mechanical</b>
            </li>
            <li>
              <b>Power</b>
            </li>

            <!--
            <li>
              <b>Electronics</b>
            </li>
            <li>
              <b>ENVT</b>
            </li>
            <li>
              <b>IPCT</b>
            </li>
            <li>
              <b>RAC</b>
            </li>
            <li>
              <b>RS</b>
            </li>
            -->
          
            <div class="button">
              <button type="button" onclick="location.href='notice.html'" >সকল বিভাগ</button>
            </div>
          </ul>
        </div>
      </div>

      <!-----College INFO SECTION----->
      <div class="event">
        <h2 class="heading">Our Head Teacher</h2>
          <div class="head-teacher">
            <ul>
              <li>
                <span class="campus-img">
                  <img src="images/Animes-Paul-1.5By1.5.png">
                </span>
                <h2>ইঞ্জিনিয়ার অনিমেশ পাল</h2>
                <h4>অধ্যক্ষ, খুলনা পলিটেকনিক ইনস্টিটিউট ।</h4>
                <h5>2010-2023</h5>
              </li>
              <li>
                <span class="campus-img">
                  <img src="images/Samsi-Sir.png">
                </span>
                <h2>গাজী নূরুল ঈমান সামছি</h2>
                <h4>উপাধ্যক্ষ, খুলনা পলিটেকনিক ইন্সটিটিউট ।</h4>
                <h5>2020-2023</h5>
              </li>
            </ul>
          </div>
    </div>
  </div>

    

    









      <!-----TESTIMONIAL SECTION------>
<div class="main-section ">
  <div class="container1">
    <h1 class="subhead">Testimonial</h1>
    <h2 class="heading1">What Parents Say About Our College</h2>
    <div class="testimonial">
      <div class="testimonial-text">
        <p>
          <img src="images/quote.png">
        </p> Contrary to popular belief, Lorem Ipsum is not simply. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard, a Latin professor at Hampden-Sydney College.
      </div>
      <div class="testimonial-detail">
        <div class="testimonial-img">
          <img src="images/testimonial-1.png">
        </div>
        <div class="testimonial-name">
          <h5>Kiya</h5>
          <p>
            <img src="images/rating.png">
          </p>
        </div>
      </div>
    </div>
    <div class="testimonial">
      <div class="testimonial-text">
        <p>
          <img src="images/quote.png">
        </p> Contrary to popular belief, Lorem Ipsum is not simply. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard, a Latin professor at Hampden-Sydney College.
      </div>
      <div class="testimonial-detail">
        <div class="testimonial-img">
          <img src="images/testimonial-2.png">
        </div>
        <div class="testimonial-name">
          <h5>Divya</h5>
          <p>
            <img src="images/rating.png">
          </p>
        </div>
      </div>
    </div>
    <div class="testimonial">
      <div class="testimonial-text">
        <p>
          <img src="images/quote.png">
        </p> Contrary to popular belief, Lorem Ipsum is not simply. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard, a Latin professor at Hampden-Sydney College.
      </div>
      <div class="testimonial-detail">
        <div class="testimonial-img">
          <img src="images/testimonial-3.png">
        </div>
        <div class="testimonial-name">
          <h5>Richa</h5>
          <p>
            <img src="images/rating.png">
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .subhead{
    text-align: center;
  }
  .heading1{
    text-align: center;
    padding: 16px;
  }
</style>



<!------GALLERY SECTION ------>
<div class="main-section gallery" style="background:#f0f3fa">
  <div class="container1 ">
    <h1 class="subhead">My Gallery</h1>
    <h2 class="heading1">Our College Gallery</h2>
    <img src="about.jpg">
    <img src="sports9.jpg">
    <img src="sports1.jpg">
    <img src="sports2.png">
    <img src="sports3.jpg">
    <img src="sports5.gif">
    <img src="sports6.jpg">
    <img src="sports7.jpg">
  </div>
</div>
<!-------PLACEMENT SECTION ------->
<div class="main-section">
  <div class="container1">
    <h1 class="subhead">Top Placement</h1>
    <h2 class="heading1">Our Partner Company</h2>
    <marquee class="placement" direction="left" scrollamount="10">
      <img src="kpi.png">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure maxime beatae inventore fugiat quod, expedita voluptatem laboriosam? Sed voluptas, quas facilis explicabo aperiam repellat est officiis amet. Facilis, nihil atque.
    </marquee>
  </div>
</div>


      <style>
         /****************EVENT SECTION*************/
/****************EVENT SECTION*************/
.main-section {
	width: 100%;
	float: left;
	/* padding: 100px 0px 100px 0px; */
  padding: 9px;
}

.event {
	width: 32%;
	margin-right: 1%;
	float: left;
	background-color: #fff;
}

.event b {
	color: red;
	font-size: 14px;
}

.event div {
	padding: 10px;
}

.event .heading {
	padding: 10px;
	color: #fff;
	background: #0055a4;
	text-align: center;
	font-size: 22px;
	font-weight: 400;
	margin-bottom: 10px;
}

.event ul li {
	margin-bottom: 20px;
	width: 100%;
	float: left;
	list-style: none;
}

.event-date {
	background: red;
	float: left;
	text-align: center;
	font-size: 14px;
	color: #fff;
	padding: 8px 12px;
	margin-right: 10px;
}



.button {
	display: flex;
	justify-content: flex-end;
	background-color: none;
	background-color: none;
	height: auto;
	align-items: center;
}

/*******CAMPUS NEWS SECTION***********/
.campus-news span {
	width: 80px;
	float: left;
}

.campus-news h2 {
	font-weight: 600;
	font-size: 16px;
}

.campus-news h6 {
	font-weight: 500;
	font-size: 13px;
	color: red;
}

.campus-news p {
	font-size: 14px;
}



/****************TESTIMONIAL SECTION****************/
.testimonial {
	width: 30.5%;
	float: left;
	margin-right: 2.5%;
}

.testimonial-text {
	background: #0055a40f;
	padding: 20px;
	line-height: 35px;
	border-radius: 10px;
	font-size: 18px;
	text-align: center;
	border: 1px solid #0055a4;
}

.testimonial-detail {
	float: left;
	margin-top: 10px;
}

.testimonial-img {
	float: left;
}

.testimonial-name {
	margin-left: 10px;
	float: left;
}

.testimonial-name h5 {
	font-size: 18px;
	margin-top: 8px;
}




/****************GALLERY SECTION****************/
.gallery img {
	width: 23.2%;
	margin-right: 1.5%;
	margin-bottom: 20px;
}
      </style>





<!-- foooter ////////////// -->




  

  <style>
    /****************FOOTER SECTION****************/
.footer {
	background-color: #f0f3fa;
	padding: 40px 0px;
	width: 100%;
	float: left;
}

.footer-logo {
	height: 70px;
	width: auto;
}

.footer-sect {
	width: 100%;
	float: left;
	text-align: center;
	margin-top: 20px;
	font-size: 16px;
}

.footer-sect a {
	color: #202020;
	margin-left: 10px;
	text-decoration: none;
}








  </style>


<!---FOOTER SECTION--->

<div class="footer">
  <div class="container1">
    <div class="footer-sect">
      <img class="footer-logo" src="images/logo.png">
    </div>
    <div class="footer-sect">
      <address> 186, 3rd floor, Business Building Ring Road, Near Google Mall, <br> Zone-II, Highway street, Bhopal, MP, 462011 </address>
    </div>
    <div class="footer-sect">
      <img src="images/icon-tel.png"> +91 - 9926 661 418
    </div>
    <div class="footer-sect">
      <img src="images/icon-mail.png"> info@dezven.com
    </div>
    <div class="footer-sect">
      <img src="images/icon-fb.png">
      <img src="images/icon-tw.png">
      <img src="images/icon-in.png">
      <img src="images/icon-li.png">
    </div>
    <div class="footer-sect">
      <a href="#"> Home</a>
      <a href="#"> About us</a>
      <a href="#"> Tutorial</a>
      <a href="#"> Event</a>
      <a href="#"> Gallery</a>
      <a href="#"> Press Release</a>
      <a href="#"> Courses</a>
      <a href="#"> Contact Us</a>
      <p>Copyright &copy;2023; Designed by <span class="designer">Mehedi and Mohibul</span></p>
    </div>
  </div>
  
</div>
 


  





   

    











    
 



    





    


</body>
</html>



