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
        $id = $_GET["id"];
        $cmd =  mysqli_query($link, "SELECT newsID, ID, Name, Subtitle, Author, Text, Published, img, video FROM news WHERE ID = $id");
        $row = mysqli_fetch_assoc($cmd);
    ?>
    <div class="main">
        <section>
            

        </section>
    </div>

</body>

</html>