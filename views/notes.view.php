<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-600 hover:underline">
                        <?= $note['body'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/notes/create" class="inline-block px-3 py-1.5 bg-blue-600 text-white rounded-md border-2 border-transparent transition ease-in-out duration-500 hover:bg-transparent hover:border-blue-600 hover:text-blue-600">Create Note</a>
        </p>
    </div>
</main>
</div>

<?php require('partials/foot.php') ?>