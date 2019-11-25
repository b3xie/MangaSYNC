<?php
            $link = mysqli_connect("localhost", "root", "", "manga");
            mysqli_set_charset($link, 'utf8');
            $cmd =  mysqli_query($link, "SELECT ID, manga_name, Description, Author, Chapters, Ranking, Released, link, last FROM manga ORDER BY ranking DESC LIMIT 10");
?>
<div class="topranked">
                <h2 class="headtitle">Top Ranked</h2>
                <ul>
                    <?php
                        $rankingnum = 1;
                        while ($row = mysqli_fetch_assoc($cmd)){
                            
                            echo "                    
                        <a href=\"/pages/manga/manga.php?id=".$row["ID"]."\">
                            <li class=\"mangaRANK\">
                                <div class=\"infoIMG\">
                                    <h2>".$rankingnum."</h2>
                                    <img src=\"/assets/imgs/". $row["link"] . "\" alt=\"\">
                                    <div class=\"infoRANK\">
                                        <h3>" .$row["manga_name"] . "</h3>
                                        <h4>" . $row["Chapters"]. " Chapters</h4>
                                    </div>

                                </div>


                                <div class=\"stars\">
                                <i style=\"color: yellow\"class=\"fas fa-star\"></i>
                                    <h2>" . $row["Ranking"] . "</h2>
                                </div>
                            </li>
                        </a>";
                        $rankingnum++;
                        }
                    ?>


                </ul>
            </div>