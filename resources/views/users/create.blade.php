@extends('layouts.app')


@section('content')
    @if ($message = Session::get('success'))
       <p> {{ $message }}</p>
    @endif
    <h1 class="text-center">Show Use Roles</h1>
    <br>


    <div class="container">
        <form method="POST" action="/users/create/{{$user->id}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Profile</label>
                <textarea class="form-control" name="profile" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Roles</label>
                <select multiple class="form-control" name="roles[]">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>

                </select>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
