<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
    <title>Gallery</title>
</head>
<body>
<div class="container">
    <p></p>
    <p>
        <?php if (null !== $userName) {
            ?>Welcome back, <strong><?php echo $userName; ?></strong><?php
        } else {
            ?><a href="/02_gallery/login.php">Sign in</a> <?php
        } ?>
    </p>
    <div class="row">
        <?php
        foreach ($images as $id => $imageName) {
            ?>
            <?php echo PHP_EOL; ?>
            <div class="col"><?php echo PHP_EOL;
                $imagePath = $pathToImagesFolder . $imageName;
                $imageURL = $urlToImagesFolder . $imageName;
                ?>
                <img src="<?php echo $imageURL; ?>" <?php echo getimagesize($imagePath)[3]; ?>>
                <?php echo PHP_EOL; ?>
            </div>
            <?php
        }
        ?>
    </div>
    <br>
    <br>
    <?php if (null !== $userName) {
        ?>
        <div class="row">
            <form action="/02_gallery/saveImage.php" method="post" enctype="multipart/form-data">
                <label>Новая картинка:</label><input type="file" name="image">
                <br>
                <button type="submit">Send</button>
            </form>
        </div><?php
    } ?>
</div>
</body>
</html>