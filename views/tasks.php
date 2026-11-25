<link rel="stylesheet" href="/MVC/style.css">
<?php require __DIR__ . '/menu.php'; ?>
<h1>Liste des tâches</h1>
<ul>
    <?php foreach ($tasks as $t): ?>
        <li>
            <a href="/MVC/tasks/<?= $t['id'] ?>">
                <?= htmlspecialchars($t['title']) ?>
            </a>
            (<?= $t['status'] ?>)
        </li>
    <?php endforeach; ?>
</ul>