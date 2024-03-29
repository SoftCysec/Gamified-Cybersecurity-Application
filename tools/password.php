<?php
session_start();
$msg = '';
$output = ' ';
$input1 = addslashes($_POST['input1'] ?? 0);
$input2 = addslashes($_POST['input2'] ?? -1);
if (isset($input1) && isset($input2)) {
    if ((intval($input1) > 0) && (intval($input2) >= 0)) {
        $int1 = is_numeric($input1) ? (int)$input1 : 4;
        $int2 = is_numeric($input2) ? (int)$input2 : 2;
        exec("/usr/bin/python3 ../py/diceware.py {$int1} {$int2} 2>&1", $output, $return_var);
        if ($return_var !== 0) {
            $msg = '<span style="color:red">Error executing Python script.</span>';
        }

    }
    elseif (intval($input2) < 0) {
        $msg = '';
    }
    else {
        $msg = '<span style="color:red">INVALID!</span>';
    }
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Password Generation & Validation</title>
        <meta name="description" content="Article about creating secure and easy to remember passwords with tools to test password strength and generate secure memorable passwords.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#4CAF50"/>
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="SqureIT: Cyber Awareness Made Easy!"/>
	    <meta property="og:description" content="SqureIT is a cyber safety and security awareness platform focused on children and their care takes."/>
	    <meta property="og:url" content="https://squre-it.onrender.com"/>
	    <meta property="og:image" content="https://squre-it.onrender.com/img/favicon.png"/>
	    <meta name="twitter:card" content="summary_large_image"/>
	    <meta name="twitter:url" content="https://squre-it.onrender.com"/>
	    <meta name="twitter:title" content="SqureIT: Cyber Awareness Made Easy!"/>
	    <meta name="twitter:description" content="SqureIT is a cyber safety and security awareness platform focused on children and their care takes."/>
	    <meta name="twitter:image" content="https://squre-it.onrender.com/img/favicon.png"/>
        <link rel="icon shorcut" type="image/x-icon" href="/img/favicon.png">
        <link rel="apple-touch-icon" href="/img/favicon.png">
        <link rel="stylesheet" type="text/css" href="/css/main.css" id="styleMode">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        <link rel="manifest" href="/manifest.json">
        <style>
            .zbg {
                background-image: url("/img/password.jpeg");
            }
        </style>
    </head>
    <body>
        <button onclick="topFunction()" id="scrollBtn" title="Go to top">ᐱ</button>
        <div class="theme-container" onclick="lightMode()">
            <img id="theme-icon" src="/img/sun.svg">
        </div>
        <div class="search" onClick="window.open('/search', '_self');">
            <img id="spi" style="width: 20px; height: 20px;" src="/img/search_black_bg.png">
        </div>
        <div class="header">
            <img src="/img/logo.png" alt="SqureIT" id="header-logo" onMouseDown="logoClick(event)"/>
            <div class="header-right">
                <a href="/">Home</a>
                <a href="/children">Children</a>
                <a href="/caretakers">Caretakers</a>
                <a href="/quiz">Quiz</a>
                <a href="/gameroom">Games</a>
                <a href="/toolkit">Tools</a>
            </div>
        </div>
        <div id="mobile_menu" class="mobile_menu">
            <ul class="menu" id="menu">
                <li><a class="menuItem" href="/">Home</a></li>
                <li><a class="menuItem" href="/children">Children</a></li>
                <li><a class="menuItem" href="/caretakers">Caretakers</a></li>
                <li><a class="menuItem" href="/quiz">Quiz</a></li>
                <li><a class="menuItem" href="/gameroom">Games</a></li>
                <li><a class="menuItem" href="/toolkit">Tools</a></li>
                <li><a class="menuItem" href="/feedback">Feedback</a></li>
                <li><a class="menuItem" href="/about">About</a></li>
                <li><a class="menuItem" href="/contact">Contact</a></li>
            </ul>
            <button class="hamburger" id="hamburger">
                <div class="container material-icons" onclick="barShuffle(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
        </div>
        <div class="zbg">
            <div class="zcenter">
                <h1>Password Generation & Validation</h1>
                <p>Create secure passwords that you can actually remember.</p>
            </div>
        </div>
        <div class="zcontent-container zl">
            <div class="zcol-container">
                <div class="zcolumn-one">
                    <h1 class="zxl-font"><b>Passwords</b></h1>
                    <h1 class="zl-font"><b>Passwords are inherintly difficult to create and remember. Reusing the same password on multiple accounts is a bad idea. So the general consensus is to use randomly generated unique passwords for each account. However, humans are incapable of creating passwords that are random enough, and passwords generated by computers are difficult to remember.</b></h1>
                </div>
                <div class="zcolumn-two">
                    <img class="zimg" src="/img/keys.jpg">
                </div>
            </div>
        </div>
        <div class="zcontent-container zd reveal fade-right">
            <div class="zcol-container">
                <div class="zcolumn-two">
                    <img class="zimg" src="/img/qmark.jpg">
                </div>
                <div class="zcolumn-one">
                    <h1 class="zxl-font"><b>What is the solution then?</b></h1>
                    <h1 class="zl-font"><b>The solution is instead of crating passwords that look like this "UnpIboP3" you should create passwords that look like this "SharpenerNutlikeEnsure" where the former is seemingly entirely random and the latter is comprised of three words stuck together.</b></h1>
                </div>
            </div>
        </div>
        <div class="zcontent-container zl reveal fade-left">
            <div class="zcol-container">
                <div class="zcolumn-one">
                    <h1 class="zxl-font"><b>Digits & special characters?</b></h1>
                    <h1 class="zl-font"><b>Yes, it is. You should defently include digits and special characters in your passwords as that will make it considerably stronger and much harder to crack. So this password "SharpenerNutlikeEnsure" can look something similar to this "Sh4rpene7N@tl!keEn$u7e" where it is still memorable yet random and long enough to withstand the test of time.</b></h1>
                </div>
                <div class="zcolumn-two">
                    <img class="zimg" src="/img/matrix.jpg">
                </div>
            </div>
        </div>
        <div class="zcontent-container zd reveal fade-right">
            <div class="zcol-container">
                <div class="zcolumn-two">
                    <img class="zimg" src="/img/how.jpeg">
                </div>
                <div class="zcolumn-one">
                    <h1 class="zxl-font"><b>Create Such Passwords</b></h1>
                    <h1 class="zl-font"><b>As humans are incapable of creating passwords that are random enough, attempting to create a password of this sort will result in the person using the name of their pet or the street where they grew up. Automated tools for generating such passwords are available for free such as Diceware.</b></h1>
                    <button class="zbutton" onclick="window.open('https://diceware.dmuth.org', '_blank');">Try Diceware</button>
                </div>
            </div>
        </div>
        <div class="zcontent-container zl reveal fade-left">
            <div class="zcol-container">
                <div class="zcolumn-one">
                    <h1 class="zxl-font"><b>Our Tools</b></h1>
                    <h1 class="zl-font"><b>Below we provide two tools: the first is used to validate passwords on common industry criteria. The criteria are there as they represent similar ones found all over the web, however, these criteria are bad as this password "Password12345!" will fulfil all the criteria and show up as strong despite the fact that this password is frighteningly bad. The second tool generates passwords using the Diceware framework and is based on the rules mentioned previously.</b></h1>
                </div>
                <div class="zcolumn-two">
                    <img class="zimg" src="/img/wrenches.jpeg">
                </div>
            </div>
        </div>

        <div class="zcontent-container zd reveal fade-right">
            <div class="zcol-container">
                <div class="zcolumn-two">
                <img class="zimg" src="/img/passcode.jpg">
                </div>
                <div class="zcolumn-one">
                    <h1 class="zxl-font"><b>Generate Passwords</b></h1>
                    <h1 class="zl-font"><b>Fill the number of words the password should be made up of in the first field and the number of special characters and digits in the second field. Both fields must be filled and 0 in the second field means that no digits or special characters will be included in the password, 1 means that either a digit or special character will be included in the password, and any numbers starting from 2 will guarantee that at least one digit and one special character are included in the password.</b></h1>
                </div>
            </div>
        </div>

        <div class="center">
            <div class="reveal fade-bottom" style="display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; width: 100%;">
                <p class="warning" style="font-size: 15px;">PLEASE NOTE THAT ALL PASSWORDS CREATED USING THE TOOL BELOW ARE GENERATED ON OUR SERVERS AND SENT TO YOU OVER THE INTERNET. ALTHOUGH THE CONNECTION IS ENCRYPTED, WE DISCOURAGE YOU FROM USING THESE PASSWORDS. PLEASE USE THE TOOLS BELOW FOR LEARNING PURPOSES ONLY.</p>
                <div class="pwcontainer">
                    <div id="pwchild1" class="pwchild">
                        <h3>Validate password strength</h3>
                        <label for="psw" class="pwlabel">Password</label>
                        <br>
                        <input type="text" id="psw1" name="psw" class="pwinput" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\u0021\u0022\u0023\u00a4\u0025\u0026\u002f\u0028\u0029\u003d\u003f\u0060\u0040\u00a3\u0024\u20AC\u007b\u005b\u005d\u007d\u005c\u003c\u003e\u007c\u002c\u003b\u002e\u003a\u002d\u005f\u0027\u002a\u00a8\u005e\u007e\u00a7\u00bd\u002b\u00B4\u0020]).{14,}" title="Must contain at least one digit; one uppercase and lowercase letter; and a special character and be at least 8 or more characters." required>
                        <br>
                        <progress max="100" value="5" id="meter1" class="pwprogress" style="margin-top: 36px;"></progress>
                    </div>
                    <div id="pwchild2" class="pwchild">
                        <h3>Generate memorable password</h3>
                        <label for="psw" class="pwlabel">Number of words as well as digits and special characters</label>
                        <form action="#pwchild2" name="feedback_form" method="post" >
                            <input type="text" class="pw-input" id="pw-input1" name="input1" autocomplete="off" pattern="[0]*[1-9][0-9]*" title="Number of words." required/>
                            <input type="text" class="pw-input" id="pw-input2" name="input2" style="margin-right: 5px;" autocomplete="off" pattern="\d{1,}" title="Number of digits and special characters." required/>
                            <input type="submit" id="submitt_pwgen" class="submit button buttonh" value="Generate" name="submit" style="margin: 0;"/>
                            <div style="margin: 5px;">
                                <?php echo $msg; ?>
                                <p id="psw2" name="psw" style="word-wrap: break-word; width: 75%; margin: auto;"><?php echo $output[0]; ?></p>
                                <p id="demo"></p>
                            </div>
                        </form>
                        <br>
                        <progress max="100" value="5" id="meter2" class="pwprogress"></progress>
                    </div>
                </div>
                <div class="msgcontainer">
                    <div id="message1" class="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter1" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital1" class="invalid">A <b>uppercase</b> letter</p>
                        <p id="number1" class="invalid">A <b>digit</b></p>
                        <p id="special-character1" class="invalid">A <b>special character</b></p>
                        <p id="length1" class="invalid">Minimum <b>14 characters</b></p>
                    </div>
                    <div id="message2" class="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter2" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital2" class="invalid">A <b>uppercase</b> letter</p>
                        <p id="number2" class="invalid">A <b>digit</b></p>
                        <p id="special-character2" class="invalid">A <b>special character</b></p>
                        <p id="length2" class="invalid">Minimum <b>14 characters</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-nav">
            <button onclick="window.location.href='/toolkit'">Previous</button>
            <button onclick="window.location.href='/toolkit'">All Tools</button>
            <button onclick="window.location.href='/tools/keepass'">Next</button>
        </div>
        <div class="footer">
            <div class="row">
                <div class="column">
                    <h2>Links</h2>
                    <a href="/"><p>Home</p></a>
                    <a href="/quiz"><p>Quiz</p></a>
                    <a href="/gameroom"><p>Games</p></a>
                    <a href="/toolkit"><p>Tools</p></a>
                    <a href="/feedback"><p>Feedback</p></a>
                    <a href="/about"><p>About</p></a>
                    <a href="/contact"><p>Contact</p></a>
                </div>
                <div class="column">
                    <h2>Articles</h2>
                    <a href="/children"><p>Articles for children</p></a>
                    <a href="/caretakers"><p>Articles for caretakers</p></a>
                    <a href="https://www.keepitrealonline.govt.nz/" target="_blank"><p>KEEP IT REAL ONLINE</p></a>
                </div>
                <div class="column">
                    <img src="/img/logo.png" style="width: 250px;">
                    <p class="slogan" style="padding-left: 25px; padding-right: 25px;">Cyber awareness made easy!</p>
                </div>
            </div>
            <p id="fcy"></p>
            <p>Available under the <a class="white" href="/LICENSE" target="_blank">GNU GPLv3 <img src="/img/gnu_heckert.png" style="width: 45px; margin-bottom: -15px; margin-top: 0; filter: invert(1);"></a></p>
            <p>Source code can be found on <a class="white" href="https://github.com/SoftCysec/Gamified-Cybersecurity" target="_blank">GitHub <img src="/img/github-mark-white.png" style="width: 35px; margin-bottom: -10px; margin-top: 0;"></a></p>
        </div>
        <script type="text/javascript" src="/js/mobile.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
        <script type="text/javascript" src="/js/pwa-handler.js"></script>
        <script type="text/javascript" src="/js/password.js"></script>
    </body>
</html>
