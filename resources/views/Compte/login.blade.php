@extends('layouts.index')

@section('contenu')



<div class="container mt-5 col-4">
    <h3 class="text-center"> LOGIN </h3>
    <form method="POST" action=" {{ route('get_login')}} ">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

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

        <button type="submit" class="btn btn-primary">Submit</button> <br> <br>
        <p>Pas encore un compte?? <a href=" {{route('get_register') }} ">Créé en un!</a></p>
      </form>

   </div>




@endsection
