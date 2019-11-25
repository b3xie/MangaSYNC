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
        include 'header.php';
    ?>
    <div class="main">
        <section>
            <h1 class="headtitle">News</h1>

        <div class="newsall">
            <div class="news-left">
                <?php
                    include 'content/newslist.php'
                ?>
            </div>
            <div class="news-right">
                <ul>
                    <a href=""><li><h3>2019</h3></li>   </a>               
                </ul>

                
            </div>

        </div>

    </section>
    </div>

</body>

</html>