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
    <?php
        include '../header.php';
        $link = mysqli_connect("localhost", "root", "", "manga");
        mysqli_set_charset($link, 'utf8');
        $link2 = mysqli_connect("localhost", "root", "", "manga");
        mysqli_set_charset($link2, 'utf8');
        $id = $_GET["id"];
        $cmd =  mysqli_query($link, "SELECT ID, manga_name, Description, Author, Chapters, Ranking, Released, link, last FROM manga WHERE ID = $id");
        $row = mysqli_fetch_assoc($cmd);
        $cmd2 =  mysqli_query($link2, "SELECT chapterID, ID, manga_name, chapter_name, uploaded_by, upload_date, link, num FROM chapters WHERE ID = $id ORDER BY num");
     ?>
    <div class="main">
        <section class='title'>
            <?php 
            echo "           
             <div class=\"manga-page-info\">
                 <div>
                     <img src=\"/assets/imgs/". $row["link"]."\" alt=\"\">
                     <div class=\"info\">
                         <h1>".$row["manga_name"]."</h1>
                         <div class=\"rating\">
                             <i class=\"fas fa-star fa-2x\"></i>
                             <h2>".$row["Ranking"]."</h2>

                         </div>
                         <h4>".$row["Chapters"]." Chapters</h4>
                         <h4>Author: ".$row["Author"]."</h4>
                         <p class=\"description\">".$row["Description"]."</p>
                     </div>
                 </div>



                 <div class=\"manga-buttons\">
                     <a href=\"\">
                         <h2><i class=\"fas fa-book\"></i>Read First Chapter</h2>
                     </a>
                     <a href=\"\">
                         <h2><i class=\"fas fa-save\"></i>Save</h2>
                     </a>
                     <a href=\"\">
                         <h2><i class=\"fas fa-share-square\"></i></i>Share</h2>
                     </a>
                 </div>
             </div>";
            ?>

        </section>
        <section class='title'>
        <?php
        while ($row2 = mysqli_fetch_assoc($cmd2)){
                echo "
                    <a href=\"".$row2["link"]."\">
                                    <div class=\"chapter\">
                                        <h4>Chapter ".$row2["num"]."</h4>
                                        <h2>".$row2["chapter_name"]."</h2>
                                        <h4>
                                            Uploaded By: ".$row2["uploaded_by"]."
                                        </h4>
                                    </div>      
                    </a>                
          
                "      ;      
        }

        ?> 
        </section>
    </div>



</body>

</html>