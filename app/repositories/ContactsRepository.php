<?php

namespace App\Repositories;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactsRepository {

    

    public function create(array $payload): bool
    {
            
        Contact::create($payload);
        
        return true;
    }

    public function getContacts()
    {
        
       return Contact::paginate(10);
    }

    public function findContact(int $id):Contact
    {
        return Contact::find($id);
    }

    public function edit(int $id, ContactRequest $request):Contact 
    {
        $data = $request->validated();
        $contacts = Contact::find($id);
        $contacts->update($data);
        $contacts->save();

        return $contacts;
    }

    public function delete($id): bool
    {
        $contacts = Contact::find($id);
        $contacts->delete();

        return true;
    }
}