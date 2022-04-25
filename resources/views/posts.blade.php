<!DOCTYPE html>


<title>My blog</title>
<link rel="stylesheet" type="text/css" href="/app.css">


<body>

    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>    
        </article>
    <?php endforeach; ?>

    
</body>