<?php


namespace App\Interfaces\Admin;


interface OrderInterface
{
   public function all();

   public function findById($id);

   public function update($data);

   public function delete($id);
}
