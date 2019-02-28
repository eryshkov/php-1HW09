<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

    <title>Personal Site</title>
</head>
<body>
<p></p>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <?php
                    foreach ($menuItems as $item) {
                        if ($item->isCurrent()) {
                            ?>
                            <li class="breadcrumb-item active"
                                aria-current="page"><?php echo $item->getDisplayName(); ?></li><?php
                        } else {
                            ?>
                            <li class="breadcrumb-item"><a
                                    href="/<?php echo $item->getName(); ?>.php"><?php echo $item->getDisplayName(); ?></a>
                            </li><?php
                        }
                    }
                    ?>
                </ol>
            </nav>
        </div>

    </div>
    <?php if (null !== $currentUser) {
        ?>
        <div class="row">
            <div class="col">
                <p>Welcome back </p><?php echo $currentUser->getUserName();?>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="row">
            <div class="col">
                <form action="/admin.php" method="post">
                    <label>Login: </label><input type="text" name="login"><br>
                    <label>Password: </label><input type="password" name="password"><br>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
        <?php
    } ?>
</div>
</body>
</html>