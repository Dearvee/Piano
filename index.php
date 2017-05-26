<?php
/**
 * Created by PhpStorm.
 * User: Dearvee
 * Date: 2017/5/26
 * Time: 14:23
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Piano</title>
    <style>
        ul li{
            display: inline-block;
            background: #eee;
            width: 50px;
            height: 100px;
            text-align: center;
            line-height: 100px;
        }
    </style>
    <script>
        function playMp3() {
            let events = event.srcElement.innerText;
            let mp3 = document.getElementById(events);
            if(!mp3.paused) {
                mp3.currentTime=0;
            }
            else{
                mp3.play();
            }
        }
    </script>
</head>
<body>
<ul onmouseover="playMp3();">
    <li>1<audio id="1" src="1.mp3"></audio></li>
    <li>2<audio id="2" src="2.mp3"></audio></li>
    <li>3<audio id="3" src="3.mp3"></audio></li>
    <li>4<audio id="4" src="4.mp3"></audio></li>
    <li>5<audio id="5" src="5.mp3"></audio></li>
    <li>6<audio id="6" src="6.mp3"></audio></li>
    <li>7<audio id="7" src="7.mp3"></audio></li>
    <li>8<audio id="8" src="8.mp3"></audio></li>
    <li>9<audio id="9" src="9.mp3"></audio></li>
</ul>
</body>
</html>
