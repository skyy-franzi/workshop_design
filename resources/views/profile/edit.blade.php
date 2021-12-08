@extends('layouts.main')


@section('title', 'Profile')

@section('content')



     <div class="container">
         <h1 class="headline-1"><b>Your Profile</b></h1>

         <div class="row">
             <div class="col-md-6">
                 <form method="POST" action="{{ route('profile.edit') }}">

                     <div class="form-group">
                         <label for="email" class="control-label"><b>User:</b></label>
                         <div>

                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text" id="basic-addon1">@</span>
                                 </div>
                                 <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{ $user->username }}">
                             </div>

                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroup-sizing-default">Firstname</span>
                                 </div>
                                 <input type="text" class="form-control" aria-label="Default" value="{{ $user->firstname }}" aria-describedby="inputGroup-sizing-default">
                             </div>

                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroup-sizing-default">Lastname</span>
                                 </div>
                                 <input type="text" class="form-control" aria-label="Default" value="{{ $user->lastname }}" aria-describedby="inputGroup-sizing-default">
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="email" class="control-label"><b>Email:</b></label>
                         <input type="text" name="email" class="form-control" value="{{ $user->email }}"/>
                     </div>
                     <div class="form-group">
                         <input class="btn btn-info" type="submit" name="submit" value="Ändern"/>

                     </div>
                 </form>
             </div>
         </div>
     </div>

@endsection
