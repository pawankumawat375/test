@extends('layout.app')
@section('mainsection')
    <div class="pagetitle">
        <div class="row">
            <div class="col-md-8">
                <h1>Admin Users</h1>
                @if (Session::has('seccess'))
                    <p style=";color: rgb(0, 255, 85);font-weight: 700;">
                        {{ Session::get('seccess') }}</p>
                @endif
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ url('/') }}/admin/admin/add" class="btn btn-primary">Add New Admin</a>
            </div>
        </div>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admin User list</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                          
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Start Date</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($admin_user as $user)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>2016-05-25</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
