<?php
            $link = mysqli_connect("localhost", "root", "", "manga");
            mysqli_set_charset($link, 'utf8');
            $cmd =  mysqli_query($link, "SELECT newsID, ID, Name, Subtitle, Author, Text, Published, img, video FROM news ORDER BY Published DESC");
            
            while ($row = mysqli_fetch_assoc($cmd)){
                echo "
                    <div class=\"news-list\">
                        <a href=\"/pages/readnews.php?id=".$row["newsID"]."\" class=\"news-container\">

                            <div class=\"news-img\" style=\"background-image: url(/assets/imgs/". $row["img"] . ");\">

                            </div>
                            <div class=\"news-info\">
                                <h1>".$row["Name"]."</h1>
                                <h3>By: ".$row["Author"]."</h3>
                                <h3>".$row["Published"]."</h3>
                                <h4>".$row["Subtitle"]."</h4>

                            </div>

                        </a>

                    </div>
                ";
            }
?>
