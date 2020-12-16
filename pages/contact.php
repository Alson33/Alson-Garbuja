<?php

    if(isset($_GET['error']) || isset($_GET['mssg'])){
        if(isset($_GET['error'])){
            $error = $_GET['error'];

            if($error == "Senderror"){
                $i = "fas fa-bug";
                $m = "Email has not been sent, please try again";
            }else{
                $i = "fas fa-exclamation-triangle";
                $m = "Please respect the work put into creating things.";
            }

        }else{
            $i = "far fa-check-circle";
            $m = "Email has been sent, thank you for contacting";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="../styles/main-style.css">
    <link rel="stylesheet" href="../styles/contact.css">

    <style>

        <?php
            if(isset($_GET['error'])){
                echo 
                "
                .error-div {
                    display: flex;
                    background-color: red;
                }
                ";
            }

            if(isset($_GET['mssg'])){
                echo
                "
                .error-div {
                    display: flex;
                    background-color: lightgreen;
                ";
            }
        ?>

    </style>
</head>
<body>

    <div class="error-div">
        <div><i class='<?= $i ?>'></i></div>
        <div><p><?= $m ?></p></div>
        <div class="error-div-close"><span>&times;</span></div>
    </div>
    
    <header>
        <span class="logo">
            <img src="../assets/images/logo.jpg" alt="profile-logo"/>
        </span>
        <nav>
            <ul>
                <li><a href="../index.html"><i class="fas fa-home"></i><span>Home</span></a></li>
                <li><a href="./works.html"><i class="fas fa-project-diagram"></i><span>Projects</span></a></li>
                <li><a href="./about.html"><i class="fas fa-address-card"></i><span>About</span></a></li>
                <li><a href="#" class="active-link"><i class="fas fa-paper-plane"></i><span>Contact</span></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="form-wrapper">
            <h2>EMAIL ME</h2>
            <form action="../php/sendMail.php" method="post">
                <table>
                    <tr>
                        <td><input type="email" name="email" placeholder="Email"/></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="name" placeholder="Name"/></td>
                    </tr>
                    <tr>
                        <td><textarea name="mssg" cols="30" rows="5" placeholder="Message.."></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Send Email" name="sendMail"/></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="social-platforms-wrapper">
            <h3>Find me on</h3>
            <div class="findme-links-wrapper">
                <a href="https://www.fiverr.com/s2/ead4a3003d" target="_blank" class="fiverr-link">
                    <div>
                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                            <g>
                             <title>background</title>
                             <rect fill="none" id="canvas_background" height="22" width="22" y="-1" x="-1"/>
                            </g>
                            <g>
                             <title>Layer 1</title>
                             <path stroke="null" id="svg_2" fill-rule="evenodd" fill="#e2e2e2" d="m1.009673,0l18.10651,0c0.546499,0 0.997927,0.450389 0.997927,1.007498l0,18.063078c0,0.545155 -0.451428,0.995505 -0.997888,0.995505l-18.106549,0c-0.558206,0 -1.009673,-0.45035 -1.009673,-0.995505l0,-18.063078c0,-0.557108 0.451467,-1.007498 1.009673,-1.007498l0,0zm11.061071,4.705457c0,0.829646 0.677162,1.50523 1.520815,1.50523c0.831475,0 1.508637,-0.675584 1.508637,-1.50523c0,-0.841639 -0.677162,-1.517184 -1.508637,-1.517184c-0.843653,0 -1.520815,0.675584 -1.520815,1.517184l0,0zm-3.599876,-1.268278c-1.960497,0 -3.231654,1.161599 -3.48092,2.358627c-0.023925,0.142344 -0.047496,0.284531 -0.047496,0.426679l0,1.114216l-1.319046,0l0,2.21644l1.319046,0l0,5.037174l-1.319046,0l0,2.287494c1.913001,0 3.82557,0 5.738571,0l0,-2.287494l-1.330792,0l0,-5.037213l4.015986,0l0,5.037174l-1.295082,0l0,2.287494c1.912962,0 3.837356,0 5.750357,0l0,-2.287494l-1.366542,0l0,-7.253614l-7.10472,0l0,-0.663827c0,-0.545155 0.534674,-0.877029 0.986141,-0.877029l1.104665,0l0,-2.358627l-1.651125,0z" clip-rule="evenodd"/>
                            </g>
                        </svg>
                        <br/>
                        FIVERR
                    </div>
                </a>
                <a href="https://www.linkedin.com/in/alsongarbuja" target="_blank" class="linkedin-link">
                    <div>
                        <i class="fab fa-linkedin"></i><br/>
                        LINKEDIN
                    </div>
                </a>
                <a href="https://github.com/Alson33" target="_blank" class="github-link">
                    <div>
                        <i class="fab fa-github"></i><br/>
                        GITHUB
                    </div>
                </a>
            </div>
        </div>
    </main>

    <script>
        var errorDiv = document.getElementsByClassName('error-div')[0];

        document.getElementsByClassName('error-div-close')[0].addEventListener('click', (){
            errorDiv.style.display = "none";
        });

        if(errorDiv.style.display == "flex"){
            setTimeout(() => {
                errorDiv.style.display = "none";
            }, 2000);
        }
    </script>
</body>
</html>