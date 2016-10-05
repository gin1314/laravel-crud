@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="panel-heading" style="font-weight: 900">
                    Edit User - <em style="font-size: 14px">{{ $user->email }}</em>
                </div>

                <div class="panel-body">
                    <form action="/user/{{$user->id}}/edit" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Input field" value="{{ old('email', $user->email) }}">
                        </div>

                        <div class="form-group">
                            <label for="">First name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First name" value="{{ old('first_name', $user->first_name) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Last name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last name" value="{{ old('last_name', $user->last_name) }}">
                        </div>
                                        
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="name" placeholder="Username" value="{{ old('name', $user->name) }}">
                        </div>  
                        
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection