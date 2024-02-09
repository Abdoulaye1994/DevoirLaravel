@extends('layouts.index')

@section('contenu')


<table class="table">

    <a href="/form" class="btn btn-danger" style="margin-left: 870px">Ajouter</a>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Avatar</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Numéro</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <th scope="col"></th>
        <td>ISSA BIO</td>
        <td>Yarou</td>
        <td>96265169</td>


         <td>
            <a href=" route {{ route('udpatelist')}} " class="btn btn-primary">Update</a>
            <a href=" {{ route('contact.delete')}} " class="btn btn-danger">Delete</a>
         </td>
      </tr>

  </table>

@endsection
