<?php


namespace App\Http\Repository;


use App\Abstracts\UserRepositoryAbstract;

class UserRepository extends UserRepositoryAbstract
{
    public function loginDoctor($request)
    {
        return Parent::loginDoctor();
    }

    public function loginPatient($request)
    {
        // TODO: Implement loginPatient() method.
    }

    public function registerDoctor($request)
    {
        // TODO: Implement registerDoctor() method.
    }

    public function registerPatient($request)
    {
        // TODO: Implement registerPatient() method.
    }

    public function avatar($avatarFile)
    {
        // TODO: Implement avatar() method.
    }

    public function updateAvatar()
    {
        // TODO: Implement updateAvatar() method.
    }

    public function getAllDoctor()
    {
        // TODO: Implement getAllDoctor() method.
    }

    public function updateDoctor($request)
    {
        // TODO: Implement updateDoctor() method.
    }

    public function updatePatient($request)
    {
        // TODO: Implement updatePatient() method.
    }
}
