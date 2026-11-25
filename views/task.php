<link rel="stylesheet" href="/MVC/style.css">
<?php require __DIR__ . '/menu.php'; ?>
<h1><?= htmlspecialchars($task['title']) ?></h1>
<p>Statut : <?= $task['status'] ?></p>
<a href="/MVC/tasks">← Retour à la liste</a>