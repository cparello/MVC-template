<?php require APPROOT . '/views/includes/header.php'; ?>
<h1><?php echo $data['title'] . 'XXX'; ?></h1>


<?php


foreach ($data['posts'] as $post) {
    echo '<h1>' . $post->title . '</h1><br>';
}
?>


<?php require APPROOT . '/views/includes/footer.php'; ?>
