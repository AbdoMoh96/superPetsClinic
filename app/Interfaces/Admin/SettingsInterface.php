<?php


namespace App\Interfaces\Admin;


interface SettingsInterface
{
   public function getSettings();

   public function update($data);
}
