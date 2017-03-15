@extends('templates.admin')


@section('content')
        <!-- Navigation -->


<div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users Profile</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                {{ $user->first_name }}'s Profile</a>
                        </h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive">
                            <tbody>
                            <tr>
                                <td><b>First Name:</b></td>
                                <td>{{ $user->first_name }}</td>
                            </tr>
                            <tr>
                                <td><b>Last Name:</b></td>
                                <td>{{ $user->last_name }}</td>
                            </tr>
                            <tr>
                                <td><b>Phone:</b></td>
                                <td>{{ $user->phone }}</td>
                            </tr>
                            <tr>
                                <td><b>Email:</b></td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td><b>Date Registered:</b></td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    {{ $user->first_name }}' Downlines</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">

                                    @foreach($downlines as $downline)
                                        <ul class="list-group">
                                            <li class="list-group-item">{{ $downline->downline_email }}</li>
                                        </ul>
                                    @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    Collapsible Group 2</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    Collapsible Group 3</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    <!-- /.row -->
</div>
<!-- /#wrapper -->

@endsection