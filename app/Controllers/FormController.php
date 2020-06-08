<?php

namespace App\Controllers;

use App\Database\Database as DB;
use App\Models\User;
use App\Services\ApplicationService;

class FormController
{
    public function index()
    {
        return require_once __DIR__ . "/../Views/index.view.php";
    }

    public function create()
    {
        return require_once __DIR__ . "/../Views/form.view.php";
    }

    public function store()
    {
        $email = $_REQUEST['email'];
        $amount = $_REQUEST['amount'];

        $user = new User($email, $amount, 0);
        if ($user->getAmount() > 0) {

            DB::connect()->insert('applications', [
                'email' => $user->getEmail(),
                'amount' => $user->getAmount()
            ]);


            ApplicationService::apply($user);
        }

        header('Location: http://localhost:8888/');
    }
}