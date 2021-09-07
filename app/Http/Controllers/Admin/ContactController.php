<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\ContactInterface;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactRepo;

    public function __construct(ContactInterface $repo)
    {
        $this->contactRepo = $repo;
    }

    public function edit(){
        $contact = $this->contactRepo->getContact();
        return view('dashboard.contact.edit' , compact('contact'));
    }

    public function update(Request $request){
        $this->contactRepo->update($request);
        return redirect()->back()->with('success' , 'contact info updated successfully!!');
    }
}
