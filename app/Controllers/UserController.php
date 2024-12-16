<?php

/**
 * © 2024 Kamel Abbassi. Tous droits réservés.
 * Créé par Kamel Abbassi - www.linkedin.com/in/kamelabbassi
 */

namespace App\Controllers;

use App\Models\User;

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $users = $this->userModel->getAll();
        require __DIR__ . '/../Views/users/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->userModel->create($_POST['name'], $_POST['email']);
            header('Location: /');
            exit;
        }
        require __DIR__ . '/../Views/users/create.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->userModel->update($id, $_POST['name'], $_POST['email']);
            header('Location: /');
            exit;
        }
        $user = $this->userModel->getById($id);
        require __DIR__ . '/../Views/users/edit.php';
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        header('Location: /');
        exit;
    }
}
