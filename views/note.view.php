<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-between">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $heading ?></h1>
        <a href="/notes" class="p-2 border-2 border-blue-600  rounded-md transition ease-in-out duration-500 bg-blue-600 text-white hover:bg-transparent hover:text-blue-600">Go Back...</a>
    </div>
</header>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-blue-600 text-2xl">
            <?= $note['body']; ?>
        </h1>
    </div>
</main>
</div>

<?php require('partials/foot.php') ?>