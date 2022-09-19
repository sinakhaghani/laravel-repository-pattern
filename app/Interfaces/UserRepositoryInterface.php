<?php


namespace App\Interfaces;


interface UserRepositoryInterface
{

    public function loginDoctor($request);

    public function loginPatient($request);

    public function registerDoctor($request);

    public function registerPatient($request);

    public function avatar($avatarFile);

    public function updateAvatar();

    public function getAllDoctor();

    public function updateDoctor($request);

    public function updatePatient($request);

}


