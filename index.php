<?php
/**
 * Created by PhpStorm.
 * User: Dearvee
 * Date: 2017/5/26
 * Time: 14:23
 */
include $scores.'score.php';
$score=implode("*",$scores);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Piano</title>
    <style>
        body{
            background: url("../../index/back.png");
        }
        ul{
            width: 700px;
            margin: 100px auto;
        }
        ul li{
            display: inline-block;
            background: #eee;
            width: 50px;
            height: 100px;
            text-align: center;
            line-height: 100px;
            margin: 5px;
        }
        .animation{
            animation: playMp3 0.8s;
        }
        @keyframes playMp3 {
            0%{height: 100px;}
            50%{height: 0;background: #3366CC;}
            100%{height: 100px;}
        }
    </style>
    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    <script>
        window=onload=function () {
            let scores = "<?=$score?>".split("*");
            let score=[];
            score['粉刷匠'] = scores[0];
            score['123']=scores[2]
            $("#PlayScore").bind("click",function () {
                    scorePlay(score['粉刷匠'],260);
                });
        }
        function scorePlay(score,v) {
            let reg=/ *\d/g;
            let notes = score.match(reg);
            console.log(notes);
            let time=0;
            for (let i=0;i<notes.length;i++) {
                time+=(v*(notes[i].length-1));
                setTimeout("playMp3(" + notes[i] + ")",time);
            }

        }
        function freePlay() {
            let events = event.srcElement.innerText;
            playMp3(events);
        }
        function playMp3(events) {
            let mp3 = document.getElementsByTagName("audio")[events-1];
                mp3.currentTime = 0;
                mp3.play();
            let li = document.getElementsByTagName("li");
            $(li[events-1]).removeClass().addClass("animation");
                    setTimeout(function(){
                        $(li[events-1]).removeClass();
                    },1000)
        }
    </script>
</head>
<body>
<ul onmouseover="freePlay();">
    <li id="btn">1<audio id="1" src="mp3/1.mp3"></audio></li>
    <li>2<audio src="mp3/2.mp3"></audio></li>
    <li>3<audio src="mp3/3.mp3"></audio></li>
    <li>4<audio src="mp3/4.mp3"></audio></li>
    <li>5<audio src="mp3/5.mp3"></audio></li>
    <li>6<audio src="mp3/6.mp3"></audio></li>
    <li>7<audio src="mp3/7.mp3"></audio></li>
    <li>8<audio src="mp3/8.mp3"></audio></li>
    <li>9<audio src="mp3/9.mp3"></audio></li>
    <li><div id="PlayScore">粉刷匠</div></li>
</ul>
</body>
</html>
