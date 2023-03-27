<?php require ('partials/head.php')?>
<?php require ('partials/nav.php')?>
<?php require ('partials/banner.php')?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-7">
            <a class="text-blue-500 hover:underline" href="http://localhost/LaracastsPhpForBeginers/index.php/notes">Go Back To List</a>
        </p>
        <p><?=  $note['body'] ?></p>
    </div>
</main>
<?php require ('partials/footer.php')?>

