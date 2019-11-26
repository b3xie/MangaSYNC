<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bersek</title>
    <script src="/js/script.js"></script>
    <script src="/js/test.js"></script>
    <script src="https://kit.fontawesome.com/8585a5a25f.js" crossorigin="anonymous"></script>
</head>

<body>
<?php        include 'header.php'; ?>
<div class="main">
<section>
    <?php
        $link = mysqli_connect("localhost", "root", "", "manga");
        mysqli_set_charset($link, 'utf8');
        $what = $_GET["s"];
        $cmd =  mysqli_query($link, "SELECT ID, manga_name, Author, Chapters, Ranking, Released, link FROM manga WHERE manga_name OR Description LIKE '%$what%'");
        echo "<h1> Your search results for: ".$what."</h1>";

     ?>
<div class="personal">

<div class="personalLIST">

<div class="list">
    <ul style="flex-wrap: wrap;">
        <?php 
            while ($row = mysqli_fetch_assoc($cmd)){
                echo"
                        <li class=\"coverVIEW\">
                            <a href=\"/pages/manga/manga.php?id=".$row["ID"]."\">
                                <img src=\"/assets/imgs/".$row["link"]."\" alt=\"\">
                            </a>
                            <div class=\"infoHIDE\">
                                <h3>".$row["manga_name"]."</h3>
                            </div>        </li>
                                           
                ";
            }        
        ?>
 
    </ul>
</div>





</div></div>
</section>
</div>



</body>

</html>