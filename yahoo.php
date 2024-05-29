<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>yahoo abema news</h2>
    <?php
    $infomation = simplexml_load_file("https://news.yahoo.co.jp/rss/media/abema/all.xml");
    foreach($infomation -> channel -> item as $item){
        print("<p><a href=\"{$item->link}\"><{$item -> title}</a></p>");
        print("<p><img src=\"{$item -> image}\" alt=\"ニュースの画像\"></p>");
        print("<p>{$item -> description}</p>");
    }
    ?>
</body>
</html>