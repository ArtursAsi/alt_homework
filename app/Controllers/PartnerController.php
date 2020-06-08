<?php


namespace App\Controllers;

use App\Database\Database as DB;
use App\Models\Partner;
use App\Services\ApplicationService;

class PartnerController
{
    public function index()

    {
        $users = DB::connect()->select('applications', ['[>]deals' => ['id' => 'application_id']],
            '*');


        return require_once __DIR__ . "/../Views/partner.view.php";

    }

    public function update($id)
    {

        DB::connect()->update('deals', [
            'status' => 'offer'
        ], ['application_id' => $id]);

        header('Refresh:1; url=' . $_SERVER['HTTP_REFERER']);

        echo ApplicationService::sendEmail($id);





    }
}