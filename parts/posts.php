<section class="posts">
<?php
$posts = [];

$dirs = scandir($_SERVER['DOCUMENT_ROOT'].'/posts');
foreach ($dirs as $dir) {
    if (is_dir($_SERVER['DOCUMENT_ROOT'].'/posts/'.$dir) && $dir !== '.' && $dir !== '..')
    {
        $tags = get_meta_tags($_SERVER['DOCUMENT_ROOT'].'/posts/'.$dir.'/index.php');

        $title = $tags['title'];
        $description = $tags['description'];
        $date = strtotime($tags['date']);
        $formatted_date = date('j F Y', $date);
        $url = $_SERVER['SERVER_NAME'].'/posts/'.$dir.'/';
        $post = [
            'title' => $title,
            'description' => $description,
            'date' => $date,
            'formatted_date' => $formatted_date,
            'url' => $url
        ];
        $posts[] = $post;
    }
}

if ($posts != [])
{
    $dates = array_column($posts, 'date');
    array_multisort($dates, SORT_DESC, $posts);
    foreach($posts as $post)
    {
        $title = $post['title'];
        $description = $post['description'];
        $formatted_date = $post['formatted_date'];
        $url = $post['url'];
        echo "<a class='post' href='https://$url'>";
        echo "<p class='title'>$title</p>";
        echo "<time>$formatted_date</time>";
        echo "<p class='description'>$description</p>";
        echo "</a>";
    }
}
else
{
    echo "<p>There's nothing here yet 😔</p>";
}
?>
</section>
