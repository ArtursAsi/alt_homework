<?php

namespace App\Services;

use App\Database\Database as DB;
use App\Models\User;
use App\Models\Partner;


class ApplicationService
{

    public const AMOUNT = 5000;

    public static function apply(User $user)
    {

        $userId = DB::connect()->select('applications', ['[>]deals' => ['id' => 'application_id']],
            ['applications.id'], );

        foreach ($userId as $id) {
            $user->setId($id['id']);
        }

        ApplicationService::sendToPartner($user);



    }

    public static function sendEmail($id)
    {
        $users = DB::connect()->select('applications', ['[>]deals' => ['id' => 'application_id']],
            '*');

        foreach ($users as $user) {
            if ($user['status'] === 'offer' && $user['id'] === $id['id']) {
                return 'Mail sent to' . $user['email'];

            }
        }

    }

    public static function sendToPartner(User $user)
    {

        if ($user->getAmount() >= self::AMOUNT) {
            $partner = new Partner('A');

            DB::connect()->insert('deals', [
                'application_id' => $user->getId(),
                'partner' => $partner->getName()
            ]);
        } else {
            $partner = new Partner('B');

            DB::connect()->insert('deals', [
                'application_id' => $user->getId(),
                'partner' => $partner->getName()
            ]);
        }
    }
}