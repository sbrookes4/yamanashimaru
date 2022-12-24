<!DOCTYPE html>
<html lang="en">
<!--
Created by: Shawna Brookes Dec 2022
License: Creative Commons CC BY-NC-SA
includes the following elements:
BY  – Credit must be given to the creator
NC  – Only noncommercial uses of the work are permitted
SA  – Adaptations must be shared under the same terms

!!!!! For educational purposes only !!!!!!
-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ADD SEO-->
    <title>The Yamanashi Maru v2</title>
    <link rel="stylesheet" href="CSS/global.css">
    <script src="JS/slag.js" defer></script>
    <style>
        body{
            background-image: url('ASSETS/IMAGES/space.jpg');
            background-repeat:no-repeat;
            background-size: cover;
        } 
    </style>
</head>
<body>
    <div class="container">
        <div id="field">
            <div id="titleBox">
                <h1>Can you win the Yamanashi Maru?</h1> 
                <span id="lore" class='hvPointer' onclick="lore()"><u><b>Lore</b></u></span>
                <h2>
                    Move: A W S D<br>
                    Laser Key Map:<br>
                     &nbsp o &nbsp <br>
                     &nbsp k  &nbsp ; &nbsp <br>
                     &nbsp l &nbsp <br><br>
                     Laser Key Tap: Burst Laser<br>
                     Laser Key Hold: Sustained Laser<br>
                     Spacebar + Laser = <span id="ob" style="color:purple">'MAGNETAR BOOST'</span><br>
                     Self-destruct: b<br>
                     
                </h2>

                <h1><u>CAUTION: SATURATED SOUND!</u></h1>

                <button class='hvPointer' onclick="foeGenerator(1)">START!</button>
                <br>
                <br>
                <span id="about" class='hvPointer' onclick="about()"><u>About</u></span>
                <span id="survived" class='hvPointer' onclick="survived()"><u>Survived?</u></span>
                <a class='hvPointer' href="mailto:shawnabrookes@gmail.com">Email</a>
                <a class='hvPointer' href="https://www.linkedin.com/in/shawnabrookes" target="_blank">LinkedIn</a>
                

            </div>

            <div id="gameInfo">
                <span>Shields:&nbsp </span><span id="shieldInfo">100%</span><br>
                <span>Health:&nbsp&nbsp&nbsp&nbsp</span><span id="healthBar">____________________________________________________________________________________________________</span><br>
                <span>Magnetar: &nbsp</span><span id="omegaBar">____________________________________________________________________________________________________</span><br>
                <span>Current Enemy:&nbsp </span><span id="currentEnemyInfo"></span><br>
                <span>Enemies Disabled:&nbsp </span><span id="enemiesDestroyed"></span>

            </div>
            
            <div id="saucer" data-saucerState="functional">
                <div id="hb"></div>
                <div class='nacelle' id='portNacelle'></div>
                <div class='nacelleMount' id='portNacelleMount'></div>
                <div class='nacelle' id='starboardNacelle'></div>
                <div class='nacelleMount' id='starboardNacelleMount'></div>
                <div class='nacelle' id="hull"></div>
                <div id="beam"></div>
                <div id="boom"></div>
                <div id="shield"></div>
            </div>

            <div id="replayBox">
                <h1>Retry the Yamanashi Maru!</h1> 
                <h2 id="youLasted"></h2> 
                <h2>You can win!</h2> 
                <h1><u>Never give up!</u></h1> 
                <button onclick="location.reload()">Retry!</button>
            </div>
        </div>
    </div>

<?php require 'COMPONENTS/LOGS/indexCounter.php'; ?>

</body>
</html>