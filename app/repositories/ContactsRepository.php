<?php

namespace App\Repositories;

use App\Models\Contacts;
use App\Service\ContactsService;
use App\Http\Requests\ContactsRequest;

class ContactsRepository {

    

    public function create(array $payload): bool
    {
        if (!empty($payload)) {    
            Contacts::create($payload);
        }

        
        return true;
    }

    public function getContacts(){
       
       return Contacts::all();
    }

    public function findContact(int $id){
        return Contacts::find($id);
    }

    public function edit(ContactsRequest $request, int $id) {
        
        $data = $request->validated();
        $contacts = Contacts::find($id);
        
        $contacts->name = $data['name'];
        $contacts->contact = $data['contact'];
        $contacts->email = $data['email'];
        $contacts->save();

        return $contacts;
    }

    public function delete($id): bool{
        $contacts = Contacts::find($id);
        $contacts->delete();

        return true;
    }
}