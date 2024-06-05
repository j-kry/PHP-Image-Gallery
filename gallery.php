<?php include './inc/images.inc.php'; ?>
<?php include './views/header.php'; ?>

<div class="deck">
    <?php foreach ($imageTitles as $fileName => $title) : ?>
    <div class="card">
        <a href="image.php?<?php echo http_build_query(['image' => $fileName]) ?>">
            <div class="cardTitle">
                <h4><?php echo $title ?></h4>
            </div>
            <div class="cardBody">
                <img src="./images/<?php echo $fileName ?>" alt="">
            </div>
    </div>
    </a>
    <?php endforeach; ?>
</div>

<?php include './views/footer.php'; ?>