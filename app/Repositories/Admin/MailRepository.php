<?php


namespace App\Repositories\Admin;


use App\Interfaces\Admin\MailInterface;
use App\Models\Mail;

class MailRepository implements MailInterface
{

    public function all()
    {
        return Mail::orderBy('created_at' , 'desc')->paginate(10);
    }

    public function getById($id)
    {
        return Mail::find($id);
    }

    public function delete($id)
    {
        $mail = Mail::find($id);
        $mail->delete();
    }
}
