<?php


namespace App\Interfaces\Admin;


interface AppointmentInterface
{
    public function all();

    public function getById($id);

    public function delete($id);

    public function update($data);
}
