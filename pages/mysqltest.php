<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Username</title>
    <script src="/js/script.js"></script>
    <script src="/js/test.js"></script>
    <script src="https://kit.fontawesome.com/8585a5a25f.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
        
        $link = mysqli_connect("localhost", "root", "", "manga");
        mysqli_set_charset($link, 'utf8');
        $cmd = mysqli_query($link, "SELECT manga_name FROM manga WHERE ID = 1 ");
        $row = mysqli_fetch_assoc($cmd);
        echo "<h1>" . $row["manga_name"] . "</h1>" ;

        $cmd = mysqli_query($link, "SELECT Description FROM manga WHERE ID = 1 ");
        $row = mysqli_fetch_assoc($cmd);
        echo "<h1>" . $row["Description"] . "</h1>" ;
     ?>


</body>

</html>