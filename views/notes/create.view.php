<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


        <p class="mt-3">

            <form method="post">

                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your notes here..." ><?= $_POST['description'] ? $_POST['description'] :'' ?></textarea>
                <?php if(isset($errors['body'])) : ?>
                <p class="text-red-400 text-s mt-2"><?= $errors['body']?></p>
                <?php endif; ?>
                <p class="mt-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit </button></p>
            </form>
        </p>
    </div>
</main>
<?php require('views/partials/footer.php') ?>

