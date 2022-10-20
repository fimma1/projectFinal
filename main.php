<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal UCC</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <form action="login.php" method="POST">
            <div class="header">
                <img src="images/ucc-logo.jpg" alt="ucc-logo" id="logo">
                <label for="">University of Cape Coast</label>
            </div>
            
            <h3>Announcement & Notifications!</h3>

                <div class="container">
                    <h4>Financial Aid (Student Loan Trust Fund)</h4>

                    <small>The Students Loan Trust Fund (SLTF) was established in December
                        2005 under the Trustee Incorporatin Act 1962 Act 820.  
                    </small>

                    <p>The objectives of the Trust Fund are to provide financial resources for 
                        the sound management of the Trust for the benefit of students and to help 
                        promote and facilitate the national ideals enshrined in Article 28 and 
                        38 of the 1992 Constitution. 
                    </p>

                    <p>Students who want to apply for financial aid should visit the following 
                       links to know more about the Trust Fundand its application process</p>

                       <ul>
                           <li><a href="#">Student Loan Trust Fund</a></li>
                           <li><a href="#">Financial Aid</a></li>
                           <li><a href="#">Financial Aid Application Requirements</a></li>
                       </ul>
                </div>

                <div class="inputs">
                    <input name="reg_num" type="text" placeholder="Registration Number" >
                    <input name="password" type="password" placeholder="Password" >
                    <!-- <input name="submit" type="submit" value="Login" id="btn"> -->
                </div>

                    
                    <button name="submit" id="btn">Login</button>
                    <a href="signup.html" id="reset">Forgot Password? Reset here!</a>
               

                <div id="line"></div>

                <h5>Helplines (Working hours 08:00 -18:00)</h5>

                <ul class="footer-list">
                    <li>Main UCC Accounts office:0508118646</li>
                    <li>Free enquiries <label>(Code Students Only)</label> call: <b>033-2092-044/0332092-050</b></li>
                    <li>System support call MIS office on:<b>054-5802-062 or 0545801203</b></li>
                    <li>System support <label>Whatsapp Only</label> MIS office on:<b>0244080587</b></li>
                </ul>

                <div class="color-1"></div>
                <div class="color-2"></div>
                <div class="color-3"></div>
                <div class="color-4"></div>
        </form>
    </div>
</body>
</html>