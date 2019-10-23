<?php require APPROOT . '/views/inc/header.php'; ?>
HOMEPAGE

<h1><?php echo $data['title'] ?></h1>

<ul>
<?php foreach($data['posts'] as $post): ?>
<li><?php echo $post->title; ?></li>
<?php endforeach; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>