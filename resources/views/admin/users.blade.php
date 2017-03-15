@extends('templates.admin')


@section('content')
        <!-- Navigation -->


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <table class="table table-responsive">
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
                    <td><a href="{{ route('users.show', [$user->id]) }}" class="btn btn-primary btn-xs">User Profile</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <!-- /.row -->
</div>
<!-- /#wrapper -->

@endsection