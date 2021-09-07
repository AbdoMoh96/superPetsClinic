<?php


namespace App\Interfaces\Admin;


interface MailInterface
{
    public function all();

    public function getById($id);

    public function delete($id);
}
