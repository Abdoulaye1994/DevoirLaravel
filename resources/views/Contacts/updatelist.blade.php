
@extends('layouts.index')

@section('contenu')


<div class="container-md col-6 mt-5">
    <form method="POST" enctype="multipart/form-data" action="{{ route('contact.updatelist',['id' => $contact->id])}}" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Avatar</label>
            <input type="file" name="avatar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input type="text" name="nom" value="{{ $contact->nom }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Prénom</label>
          <input type="text" name="prenom" value="{{ $contact->prenom }}" class="form-control" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Téléphone</label>
            <input type="text" name="telephone" value="{{$contact->telephone}}" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
</div>

@endsection

