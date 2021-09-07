<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\SettingsInterface;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
   private $settingRepo;

   public function __construct(SettingsInterface $repo)
   {
       $this->settingRepo = $repo;
   }

   public function edit(){
    $setting = $this->settingRepo->getSettings();
    return view('dashboard.settings.edit' , compact('setting'));
   }

   public function update(Request $request){
       $this->settingRepo->update($request);
       return redirect()->back()->with('success' , 'settings updated successfully!!');
   }
}
