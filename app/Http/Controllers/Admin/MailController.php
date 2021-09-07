<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\MailInterface;
use Illuminate\Http\Request;

class MailController extends Controller
{
   private $mailRepo;

   public function __construct(MailInterface $repo)
   {
       $this->mailRepo = $repo;
   }

   public function index(){
      $emails = $this->mailRepo->all();
      return view('dashboard.mail.index' , compact('emails'));
   }

   public function show($mail){
      $email = $this->mailRepo->getById($mail);
      return view('dashboard.mail.show' , compact('email'));
   }

   public function destroy($mail){
       $this->mailRepo->delete($mail);
   }
}
