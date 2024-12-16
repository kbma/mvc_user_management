<?php

/**
 * © 2024 Kamel Abbassi. Tous droits réservés.
 * Créé par Kamel Abbassi - www.linkedin.com/in/kamelabbassi
 */
ob_start(); ?>
<a href="/create" class="btn btn-primary mb-3">Add User</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <a href="/edit/<?= $user['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/delete/<?= $user['id'] ?> " onclick=' return confirm("Voulez vous supprimer cet Utilisateur ?")' class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/../layout.php'; ?>