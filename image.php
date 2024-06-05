<?php include './inc/images.inc.php'; ?>
<?php include './views/header.php'; ?>

<?php if (!empty($_GET['image']) && !empty($imageDescriptions[$_GET['image']])) : ?>
<h1><?php echo $imageTitles[$_GET['image']] ?></h1>
<img src="./images/<?php echo $_GET['image'] ?>" alt="">
<p><?php echo $imageDescriptions[$_GET['image']] ?></p>
<?php endif; ?>

<?php include './views/footer.php'; ?>