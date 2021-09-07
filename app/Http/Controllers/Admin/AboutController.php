<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\AboutInterface;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private  $aboutRepo;

    public function __construct(AboutInterface $repo)
    {
        $this->aboutRepo = $repo;
    }

    public function edit(){
      $about =  $this->aboutRepo->getAbout();
      return view('dashboard.about.edit' , compact('about'));
    }

    public function update(Request $request)
    {
        $this->aboutRepo->update($request);
        return redirect()->back()->with('success' , 'About Website Updated Successfully!');
    }
}
