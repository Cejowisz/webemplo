@extends('templates.main')

@section('stylesheets')
    <link rel="stylesheet" href="{{ url('css/tabs.css') }}">
    <link rel="stylesheet" href="{{ url('css/vertical.css') }}">
@endsection

@section('content')

<div class="col-xs-3"> <!-- required for floating -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-left">
        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
        <li><a href="#user" data-toggle="tab">View Users</a></li>
        <li><a href="#messages" data-toggle="tab">Messages</a></li>
        <li><a href="#settings" data-toggle="tab">Settings</a></li>
    </ul>
</div>

<div class="col-xs-9">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="home">Home Tab.</div>
        <div class="tab-pane" id="user">
            <div class="container">
                <table class="table">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Last Name</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date Registered</th>
                        <th>More Details</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><a href="#"></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane" id="messages">Messages Tab.</div>
        <div class="tab-pane" id="settings">Settings Tab.</div>
    </div>
</div>
<div class="clearfix"></div>
@endsection
