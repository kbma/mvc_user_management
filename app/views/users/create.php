<?php

/**
 * © 2024 Kamel Abbassi. Tous droits réservés.
 * Créé par Kamel Abbassi - www.linkedin.com/in/kamelabbassi
 */
ob_start(); ?>
<form method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>
<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/../layout.php'; ?>