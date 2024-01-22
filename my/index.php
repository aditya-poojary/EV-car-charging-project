
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css    ">
</head>
<body>
   <main id="container" style="min-height: 100vh;background-color: white;">
    <nav>
        <ul class="sidebar">
            <li ><a href="#"><i class="fas fa-x" onclick="closebar()"></i></a></li>
            <li><a href="#HOME" onclick="scrollToSection('HOME')"  >HOME</a></li>
            <li><a href="#AboutSect" onclick="scrollToSection('AboutSect')" >ABOUT</a></li>
            <li><a href="#contact"  onclick="scrollToSection('contact')" >CONTACT</a></li>
            <li><a href="charging.php">CHARGING</a></li>
            <li><a href="alogin.php">LOGIN</a></li>
        </ul>
        <ul class="nav2" >
            <li class="logo"><a href="index.php">VOLT <div class="second">STATION</div></a>
            </li> 
            <li class="hide"><a href="#HOME" onclick="scrollToSection('HOME')" class="nav-links">HOME</a></li>
            <li class="hide"><a href="#AboutSect" onclick="scrollToSection('AboutSect')" class="nav-links">ABOUT</a></li>
            <li class="hide"><a href="#contact" onclick="scrollToSection('contact')" class="nav-links">CONTACT</a></li>
            <li class="hide"><a href="charging.php" class="nav-links">CHARGING</a></li>
            <li class="hide"><a href="alogin.php" class="nav-links">LOGIN</a></li>
            <li>
                <button onclick= "toggleBackgroundColor()" id="Mode" style="border-radius: 50%;">
                    <i class="fas fa-moon" id="Moon"></i>
                    <i class="fas fa-sun" id="Sun"></i>
                </button>
            </li>
            <li onclick=showbar()>
                <i class="fas fa-bars" id="bars"></i>
            </li>
        </ul>
    
    </nav>
    <section class="about" id="HOME" style="max-width: 100%;">
       
    <div class="describe" style="width:400px;height: 200px;">
     <h1>Charging Dreams, Driving Futures: 
     </h1> <br>
<p>Your Journey Begins Here!!! 
</p> <br>
<button class="Explore">Explore More</button>

    </div>
    <br>
    
    <div class="image" >
      <img src="car-sensor-animation-mobile.gif" alt="">
    </div>
    </section>
    <hr>
    <section class="facilities" id="facility" style="width: 100%;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;">
   <div class="facilityDescribe">   
    <h1>FACILITIES WE OFFER</h1>

   <p> Our Electric Vehicle (EV) charging station involves considering various facilities and services to meet the needs of EV users</p>
   </div>

   <div class="cardWrapper">
   <div class="cards" >
    <h1>Customer Support</h1><br>
    <p> Accessible customer support for assistance and issue resolution. Informational materials and FAQs for users to understand how to use the charging station.</p>
   </div>
   <div class="cards">
    <h1>Aminities And Comfort</h1><br>
    <p>Seating areas and amenities like Wi-Fi for user comfort during charging
</p>
   </div>
   <div class="cards">
    <h1>Rest And Facilities
    </h1>
    <p>Provision of restrooms or nearby access to public facilities. Convenience stores or vending machines for snacks and refreshments.



    </p>
   </div>
   </div>
    </section>
    <br>
    <hr>
    <section class="AboutUs" id="AboutSect" style="display: flex;justify-content: center;align-items: center;">
        <div class="Aboutdiv" style="display: flex;justify-content: center;align-items: center;flex-direction: column;text-align: center;padding: 24px; ;">
            <h1>About Us</h1><br>
            <p>our mission is to accelerate the adoption of electric vehicles by creating a robust and accessible charging infrastructure. We envision a world where clean and efficient energy powers
                the vehicles of today and tomorrow, contributing to a greener and more sustainable planet.</p>
        </div>
    </section>
    <hr>
    <section class="contactUs" id="contact" style="text-align: center;display: flex;flex-direction: column;justify-content: center;align-items: center;">
        <h1>Contact Us</h1>
        <div class="Contactdetails" style="display: flex;padding: 21px;gap: 25px;">
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9494.109788395568!2d72.8727874658794!3d19.206554375710414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0e57647569d%3A0xc0aec329c82d3555!2sThakur%20College%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1705421164672!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="contactform" >
        
       <b> Samta Nagar,Thakur Collage</b>
<p>Kandivali(east),Mumbai,Maharashtra</p><br>

<b>+91 9158020322</b>
<p>All Day,24/7</p>


<b>info@evindia.com</b>
<p>Feel Free To Contact Us On Email-ID</p>



</p>
    </div>
    </div>
    </section>
   </main> 
</body>
</html>
