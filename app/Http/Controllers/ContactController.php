<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function indexcontact(){
        return view('Contacts.contactlist');
    }

    public function indexlist(){
        return view('Contacts.list');
    }


    public function udpateliste(){
        return view('Contacts.updatelist');
    }


    public function index(){
        $contacts = Contact::all();
        return view ('contacts.list',[
            'contacts' => $contacts
        ]);

   }

   public function edit($id){
        $contact = Contact::find($id);
        return view('contacts.updatelist',[
            'contact' => $contact
        ]);
   }

   public function update($id,Request $request){

        $contact = Contact::find($id);
        $contact->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'telephone' => $request->telephone
          ]);

          if($request->hasFile('avatar')){
            $contact->avatar = $request->file('avatar')->store('avatars');
            $contact->save();
          }
          return redirect()->route('contact.index');
   }
   public function create(){
    return view('contacts.add-contact');
   }

   public function store(CreateRequest $request){
      Contact::create([
        'name' => $request->name,
        'prenom' => $request->prenom,
        'age' => $request->age,
        'telephone' => $request->telephone,
        'avatar' => $request->file('avatar')->store('avatars')
      ]);

      //return redirect('/contact');
      return redirect()->route('contact.index');
   }

   public function destroy($id){
    $contact = Contact::find($id);
    $contact->delete();

    return redirect()->route('contact.index');
}
}
