<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
            <title><?= $title ?></title>
    </head>
    <body>
      <h1><?= $title ?></h1>
        <p>User logged in as <?= $username ?> using <?= $password ?></p>
        
        
        
        <!-- working with expressions -->
        <h3>Temperature</h3>
        <p>Fahrenheit: <?= $temp ?> degrees</p>
        <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?></p>
        <p>I like <?= $color ?></p>
        <p><?= $radius * 2 * 3.14 ?> = 2 * 3.14 * <?= $radius ?></p>
        
        <br/>
        <h3>Bookmarks</h3>
        <p>My first bookmark is <?= $bookmarks[0] ?></p>
        <ul>
        <?php foreach (($bookmarks?:[]) as $bookmark): ?>
            <li><a href="<?= trim($bookmark) ?>"><?= $bookmark ?></a></li>
        <?php endforeach; ?>
        </ul>
        <h3>Addresses</h3>
        <p> <?= $addresses['primary'] ?></p>
        <p> <?= $addresses['secondary'] ?></p>
        
        <?php foreach (($addresses?:[]) as $key=>$value): ?>
            <p><?= $key ?> - <?= $value ?></p>
        <?php endforeach; ?>
        
    </body>
</html>