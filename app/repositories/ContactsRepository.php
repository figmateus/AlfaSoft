<?php

namespace App\Repositories;

use App\Models\Contact;
use Illuminate\Contracts\Pagination\Paginator;

class ContactsRepository {

    
    public function create(array $payload): bool
    {
        Contact::create($payload);
        return true;
    }

    public function getContacts():Paginator
    {   
       return Contact::paginate(10);
    }

    public function findContact(int $id):Contact
    {
        return Contact::find($id);
    }

    public function edit(int $id,array $payload):Contact 
    {
        $contacts = Contact::find($id);
        $contacts->update($payload);
        $contacts->save();

        return $contacts;
    }

    public function delete($id):bool
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return true;
    }
}