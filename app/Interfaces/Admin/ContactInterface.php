<?php


namespace App\Interfaces\Admin;


interface ContactInterface
{
    public function getContact();

    public function update($data);
}
