 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <main id="container" style="min-height: 100vh; background-color: white;">
        <nav>
            <ul class="sidebar">
                <li><a href="#"><i class="fas fa-x" onclick="closebar()"></i></a></li>
                <li><a href="index.php" onclick="scrollToSection('HOME')">HOME</a></li>
                <li><a href="#AboutSect" onclick="scrollToSection('AboutSect')">ABOUT</a></li>
                <li><a href="#contact" onclick="scrollToSection('contact')">CONTACT</a></li>
                <li><a href="charging.php">CHARGING</a></li>
                <li><a href="alogin.php">LOGIN</a></li>
            </ul>
            <ul class="nav2">
                <li class="logo"><a href="index.php">VOLT <div class="second">STATION</div></a></li>
                <li class="hide"><a href="index.php" onclick="scrollToSection('HOME')" class="nav-links">HOME</a></li>
                <li class="hide"><a href="#AboutSect" onclick="scrollToSection('AboutSect')" class="nav-links">ABOUT</a></li>
                <li class="hide"><a href="#contact" onclick="scrollToSection('contact')" class="nav-links">CONTACT</a></li>
                <li class="hide"><a href="charging.php" class="nav-links">CHARGING</a></li>
                <li class="hide"><a href="alogin.php" class="nav-links">LOGIN</a></li>
                <li>
                    <button onclick="toggleBackgroundColor()" id="Mode" style="border-radius: 50%;">
                        <i class="fas fa-moon" id="Moon"></i>
                        <i class="fas fa-sun" id="Sun"></i>
                    </button>
                </li>
                <li onclick="showbar()">
                    <i class="fas fa-bars" id="bars"></i>
                </li>
            </ul>
        </nav>

        <div class="options" style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
            <div class="option1" id="options1" onclick="hideoptions('form', 'amt')"  style="background:linear-gradient(90deg,yellow,orange);">
                <div class="img-contain">
                    <img id="fastChargingImage" src="Screenshot 2024-01-18 012718.png" alt="Image Alt Text">
                </div>
                <p><b>NORMAL CHARGING</b></p>
            </div>
            <div class="option1" onclick="hideoptions('form2', 'amt2')" id="options2" style="background:linear-gradient(90deg,blue,violet);">
                <div class="img-contain">
                    <img id="normalChargingImage" src="Screenshot 2024-01-18 012733.png" alt="Image Alt Text" >
                </div>
                <p><b>FAST CHARGING</b></p>
            </div>
        </div>
<div class="formcontainer"  style="width: 100%;display: flex;justify-content: center;align-items: center;padding-top: 150px;flex-direction: column">
        <div class="form" style="display: none;text-align: center;" >
            <form>
                <label>Enter the number of hours: <input type="number" placeholder="Hours" id="hoursinput"></label><br><br>
                <button type="button" id="submitbutton" onclick="displayamt('amt')">Submit</button>
            </form><br><br>
            <div id="amt">
                
            </div><br><br>
            <div id="proceedContainer" style="display: none;">
                <button id="proceedButton" onclick="proceedToPay()">Proceed to pay</button>
            </div>
        </div>
        </div>
        <div class="formcontainer2" style="width: 100%;display: flex;justify-content: center;align-items: center;padding-top: 150px;flex-direction: column">
        <div class="Fastchargeform" style="display: none;text-align: center;position: absolute;">
            <form>
                <label>Enter the number of fast hours: <input type="number" placeholder="Hours" id="fastinput"></label><br><br>
                <button type="button" id="Fastsubmitbutton" onclick="Fastdisplayamt('amt2')">Submit</button>
            </form><br><br>
            <div id="amt2"></div>
            <div id="proceedContainer2" style="display: none;">
                <button id="proceedButton2" onclick="proceedToPay()">Proceed to pay</button>
            </div>
                </div>
        </div>

        <script>
           let opt1 = document.getElementById('options1');
let opt2 = document.getElementById('options2');

let option = document.querySelector('.options');
let form = document.querySelector('.form');
let form2 = document.querySelector('.Fastchargeform');

let proceedContainer = document.getElementById('proceedContainer'); 
let proceedContain = document.getElementById('proceedContainer2'); 

function hideoptions(formId, amtId) {
    option.style.display = 'none';
    opt1.style.display = 'none';
    opt2.style.display = 'none';

    if (formId === 'form') {
        form.style.display = 'block';
        
    } else if (formId === 'form2') {
        form2.style.display = 'block';
       
    }

    // Hide the other form
    form.style.display = formId === 'form' ? 'block' : 'none';
    form2.style.display = formId === 'form2' ? 'block' : 'none';

    // Clear the previous result
    document.getElementById(amtId).innerHTML = '';
    proceedContainer.style.display = 'none'; // Hide the proceed button
}

function displayamt(amtId) {
    
    const amount = parseInt(document.getElementById('hoursinput').value);
    const result = amount * 10;
    const amountDisplay = document.getElementById(amtId);
    amountDisplay.innerHTML ="The amount is:"+ result + "/-";
    proceedContainer.style.display = 'block';
  

}

function Fastdisplayamt(amtId) {
    const amount2 = parseInt(document.getElementById('fastinput').value);
    const result2 = amount2 * 50;
    const amount2Display = document.getElementById(amtId);
    amount2Display.innerHTML = "The amount is:"+result2 + "/-";

    proceedContain.style.display = 'block';

}

        </script>
    </body>

</html>