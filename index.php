<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MangaSYNC</title>
    <script src="js/script.js"></script>
    <script src="js/test.js"></script>
    <script src="/js/logincheck.js"></script>
    <script src="https://kit.fontawesome.com/8585a5a25f.js" crossorigin="anonymous"></script>
</head>

<body onload="logincheck();">

    <a href="top"></a>
    <?php
        include 'pages/header.php';
     ?>


    <div class="main">
        <section>
            <h2>Updates</h2>
            <div class="sliderMAIN" id="element">

                <a id="scrollback"> <i class="fas fa-chevron-left fa-3x"></i></a>

                <div class="slider-component" id="slider">
                    <a href="">
                        <div class="mangaBIG">
                            <!--php element-->
                            <div class="img">
                                <img src="assets/imgs/kimetsu.jpg" alt="cover art">
                            </div>


                            <div class="info">
                                <h2>Kimetsu no Yaiba</h2>
                                <div class="tags">
                                    <a href="">
                                        <h3>Ongoing</h3>
                                    </a>
                                    <a href="">
                                        <h3>Action</h3>
                                    </a>
                                    <a href="">
                                        <h3>Demons</h3>
                                    </a>
                                </div>
                                <p>
                                Since ancient times, rumors have abounded of man-eating demons lurking in the woods. Because of this, the local townsfolk never venture outside at night. Legend has it that a demon slayer also roams the night, hunting down these bloodthirsty demons. For young Tanjirou, these rumors will soon to become his harsh reality...
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="mangaBIG">
                            <!--php element-->
                            <div class="img">
                                <img src="assets/imgs/shingeki.jpg" alt="cover art">
                            </div>


                            <div class="info">
                                <h2>Shingeki no Kyojin</h2>
                                <div class="tags">
                                    <a href="">
                                        <h3>Ongoing</h3>
                                    </a>
                                    <a href="">
                                        <h3>Horror</h3>
                                    </a>
                                    <a href="">
                                        <h3>
                                            Action
                                        </h3>
                                    </a>
                                </div>
                                <p>
                                Hundreds of years ago, horrifying creatures which resembled humans appeared. These mindless, towering giants, called "titans," proved to be an existential threat, as they preyed on whatever humans they could find in order to satisfy a seemingly unending appetite. Unable to effectively combat the titans, mankind was forced to barricade themselves within large walls surrounding what may very well be humanity's last safe haven in the world.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="mangaBIG">
                            <!--php element-->
                            <div class="img">
                                <img src="assets/imgs/promised.jpg" alt="cover art">
                            </div>


                            <div class="info">
                                <h2>Yakusoku no Neverland</h2>
                                <div class="tags">
                                    <a href="">
                                        <h3>Ongoing</h3>
                                    </a>
                                    <a href="">
                                        <h3>Mystery</h3>
                                    </a>
                                    <a href="">
                                        <h3>Horror</h3>
                                    </a>
                                </div>
                                <p>
                                At Grace Field House, life couldn't be better for the orphans! Though they have no parents, together with the other kids and a kind "Mama" who cares for them, they form one big, happy family. No child is ever overlooked, especially since they are all adopted by the age of 12. Their daily lives involve rigorous tests, but afterwards, they are allowed to play outside. 
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="mangaBIG">
                            <!--php element-->
                            <div class="img">
                                <img src="assets/imgs/onepiece.jpg" alt="cover art">
                            </div>


                            <div class="info">
                                <h2>One Piece</h2>
                                <div class="tags">
                                    <a href="">
                                        <h3>Ongoing</h3>
                                    </a>
                                    <a href="">
                                        <h3>Action</h3>
                                    </a>
                                    <a href="">
                                        <h3>Adventure</h3>
                                    </a>
                                </div>
                                <p>
                                Gol D. Roger, a man referred to as the "Pirate King," is set to be executed by the World Government. But just before his demise, he confirms the existence of a great treasure, One Piece, located somewhere within the vast ocean known as the Grand Line. Announcing that One Piece can be claimed by anyone worthy enough to reach it, the Pirate King is executed and the Great Age of Pirates begins.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>


                <a id="scroll" onclick="scroll();">
                    <i class="fas fa-chevron-right fa-3x"></i>
                </a>


            </div>
        </section>
        <section class="double">
            <?php
                include 'pages/content/top.php';
            ?>
            <div class="personal">
                <h2>Continue Reading</h2>
                <div class="personalLIST">

                    <div class="list">
                        <ul>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/evangelion.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Neon Genesis Evangelion</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/ykk_capa.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Yokohama Kaidashi Kikou</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/no6.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>No.6</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/gunnm.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Gunnm</h3>
                                </div>
                            </li>
                        </ul>
                    </div>





                </div>
                <h2>Based on your activity</h2>
                <div class="personalLIST">

                    <div class="list">
                        <ul>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                        </ul>
                    </div>





                </div>
                <h2>Editor's pick</h2>
                <div class="personalLIST">

                    <div class="list">
                        <ul>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                            <li class="coverVIEW">
                                <a href=""></a>
                                <img src="assets/imgs/oyasumi punpun.jpg" alt="">
                                </a>
                                <div class="infoHIDE">
                                    <h3>Oyasumi Punpun</h3>
                                </div>
                            </li>
                        </ul>
                    </div>





                </div>
            </div>
        </section>
    </div>


<?php include 'pages/footer.php';?>
</body>

</html>