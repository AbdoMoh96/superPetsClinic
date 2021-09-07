<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\Lang\ContactLang;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->save();

        $contactLangEn = new ContactLang();
        $contactLangEn['contact_id'] = $contact['id'];
        $contactLangEn['lang'] = 'en';
        $contactLangEn->save();

        $contactLangAr = new ContactLang();
        $contactLangAr['contact_id'] = $contact['id'];
        $contactLangAr['lang'] = 'ar';
        $contactLangAr->save();
    }
}
