
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Users</div>
                    <div class="panel-body">
                        @if (session('user_deleted'))
                            <div class="alert alert-success">
                                {{ session('user_deleted') }}
                            </div>
                        @endif            
                        <form action="/user/bulk-delete" method="POST" id="bulk-delete-form">
                            {{ csrf_field() }}
                            <table class="table table-striped">
                               <tr>
                                   <th style="color:#bf5329;">Deleted</th>
                                   <th style="color:#bf5329;">Delete</th>
                                   <th>First Name</th>
                                   <th>Last Name</th>
                                   <th>Username</th>
                                   <th>Email</th>
                                   <th>&nbsp;</th>
                               </tr>
                              @foreach($users as $user)
                               
                               <?php $is_deleted = ! is_null($user->deleted_at); ?>

                               <tr {{ $is_deleted ? 'class=row-line-through' : ''  }}>
                                    @if($is_deleted)
                                        <td>Yes</td>
                                    @else
                                        <td>No</td>
                                    @endif
                                    <td><input type="checkbox" name="user_ids[{{ $user->id }}]"></td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($is_deleted)
                                           edit
                                        @else
                                            <a href="/user/{{ $user->id }}/edit">
                                                <i class="fa fa-name-shape-o-direction"></i> edit
                                            </a>
                                        @endif
                                    </td>
                               </tr>
                              @endforeach
                            </table>

                            <input type="submit" name="submit" >
                        </form>
                        {{ $users->links() }}
                        <script type="text/javascript">
                            var delete_form = document.getElementById("bulk-delete-form");
                            delete_form.addEventListener("submit", function(e) {
                                if (confirm('Sure you want to delete selected items?')) { return; }
                                else { e.preventDefault(); }
                            });
                        </script>  
                    </div>
                </div>              
        </div>
    </div>
</div>
@endsection