<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach($notes as $note): ?>
                <li>
                    <a href="http://localhost/LaracastsPhpForBeginers/public/index.php/note?id=<?php echo $note['id']?>" class="text-blue-500 hover:underline">
                        <li><?= htmlspecialchars($note['body'])  ?></li>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="mt-7">
            <a href="/LaracastsPhpForBeginers/public/index.php/notes/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Note</a>
        </p>
    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>

