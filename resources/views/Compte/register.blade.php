@extends('layouts.index')

@section('contenu')

<div class="container mt-5 col-4">
    <h3 class="text-center"> SUSCRIBE </h3>
    <form method="POST" action=" {{ route('enregister')}} ">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input type="texte" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <div class="mb-3">
            <br>

          <label for="" class="form-label">Prénom</label>
          <input type="text" name="prenom"  class="form-control" id="exampleInputEmail1">


        </div>

           <div class="mb-3">

             <label for="" class="form-label">Numéro de téléphone</label>
             <input type="number"  name="numero" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp">


          </div>

          <div class="mb-3">
            <br>
            <label for="exampleInputPassword1" class="form-label"> Email address</label>
            <input type="email"  name="email" class="form-control" id="exampleInputPassword1">
            @error('email')
            <div class="alert alert-danger">  {{ $message}} </div>
           @enderror
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password"  class="form-control" id="exampleInputPassword1">

            @error('password')
               <div class="alert alert-danger">  {{ $message}} </div>
              @enderror
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation"  class="form-control" id="exampleInputPassword1">
          </div>

        <button type="submit" class="btn btn-primary">Register</button>

      </form>


   </div>

@endsection
