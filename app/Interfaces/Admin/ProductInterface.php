<?php


namespace App\Interfaces\Admin;


interface ProductInterface
{
   public function all();

   public function getByTitle($title);

   public function getByCode($code);

   public function getById($id);

   public function store($data);

   public function update($data);

   public function delete($id);
}
