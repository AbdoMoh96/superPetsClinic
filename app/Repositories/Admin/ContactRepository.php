<?php


namespace App\Repositories\Admin;


use App\Interfaces\Admin\ContactInterface;
use App\Models\Contact;

class ContactRepository implements ContactInterface
{
    public function getContact()
    {
       $contact = Contact::first();
       $contact->load('contact_en' , 'contact_ar');
       return $contact;
    }

    public function update($data)
    {
        $contact = Contact::first();
        $contact['email'] = $data['email'];
        $contact['email_alt'] = $data['email_alt'];
        $contact['phone'] = $data['phone'];
        $contact['phone_alt'] = $data['phone_alt'];
        $contact['location'] = $data['location'];
        $contact['facebook'] = $data['facebook'];
        $contact['messenger'] = $data['messenger'];
        $contact['twitter'] = $data['twitter'];
        $contact['instagram'] = $data['instagram'];
        $contact['youtube'] = $data['youtube'];
        $contact['linkedin'] = $data['linkedin'];
        $contact['snapchat'] = $data['snapchat'];
        $contact['whatsapp'] = $data['whatsapp'];
        $contact['google_plus'] = $data['google_plus'];
        $contact['pinterest'] = $data['pinterest'];
        $contact['behance'] = $data['behance'];
        $contact->update();

        $contact->contact_en->address = $data['address'];
        $contact->contact_en->address_alt = $data['address_alt'];
        $contact->contact_en->update();

        $contact->contact_ar->address = $data['address_ar'];
        $contact->contact_ar->address_alt = $data['address_alt_ar'];
        $contact->contact_ar->update();
    }
}
