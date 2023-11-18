@extends('layouts.app')

@section('content')
    <h1 class="text-center">Show Use Roles</h1>
    <table class="table">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Profile</th>
                <th>Role</th>
                <th>Actions</th>
            
            </tr>
        </thead>
        <tbody>

            {{-- @dd($users[0]->roles[0]->name) --}}
            @foreach ($users as $user)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profile }}</td>
                    <td>
                    @foreach($user->roles as $roles)

                       {{$roles->name}}

                    @endforeach
                    {{-- <td>{{ $user->roles->name }}</td> --}}

                    </td>

                    <td class="d-inline"> <a href="/edit/{{$user->id}}" type="submit" class="btn btn-primary">Edit</a>
                      <br>
                      <a href="" type="submit" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
