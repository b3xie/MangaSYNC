<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/reader.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MangaSYNC Reader</title>
    <script src="/js/reader.js"></script>
    <script src="/js/test.js"></script>
    <script src="https://kit.fontawesome.com/8585a5a25f.js" crossorigin="anonymous"></script>
</head>

<body onload="screen();">
    <header >
        <div class="left">
            <h1>MangaSYNC Reader</h1>
        </div>
        <div class="center">
            <select name="" id="chapter_select">
                <option value="test">Chapter 1</option>
            </select>
        </div>
        <div class="right">
            <a href="#" onclick="crop();">
            <i class="fas fa-crop-alt fa-2x"></i>
            </a>
            <a href="#" onclick="full();">
                <i class="fas fa-expand fa-2x"></i>
            </a>
            <a href="/index.php">
                
                <i class="fas fa-sign-out-alt fa-2x"></i>                
            </a>

        </div>
    </header>
    <div class="display">
        <div class="leftpage" id="left">
            <a href=""><i class="fas fa-chevron-left fa-4x"></i> </a>
           
        </div>
        <div class="page" id="page">
            <img src="/assets/chapters/test/01/1.jpg" alt="" id="display">
        </div>
        <div class="rightpage" id="right" onclick="move();">
            <a href=""><i class="fas fa-chevron-right fa-4x"></i></a>
             
        </div>
    </div>
    <script src="/js/reader.js"></script>
    <script>

    </script>
</body>


</html>