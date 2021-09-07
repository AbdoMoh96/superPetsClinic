<?php


namespace App\Interfaces\Admin;
use App\Models\Slider;

interface SlidersInterface
{
   public function getAll();

   public function SliderBySlug($slug);

   public function slideById($id);

   public function storeSlide($data);

   public function store($data);

   public function update($data);

   public function delete($id);
}
