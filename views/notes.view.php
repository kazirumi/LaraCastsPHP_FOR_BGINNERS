<?php require ('partials/head.php')?>
<?php require ('partials/nav.php')?>
<?php require ('partials/banner.php')?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach($notes as $note): ?>
            <a href="http://localhost/LaracastsPhpForBeginers/index.php/note?id=<?php echo $note['id']?>" class="text-blue-500 hover:underline">
                <li><?=  $note['body'] ?></li>
            </a>
        <?php endforeach; ?>
    </div>
</main>
<?php require ('partials/footer.php')?>
