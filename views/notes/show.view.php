<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-7">
            <a class="text-blue-500 hover:underline" href="http://localhost/LaracastsPhpForBeginers/public/index.php/notes">Go Back To List</a>
        </p>
        <p><?= htmlspecialchars($note['body'])  ?></p>
    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>

