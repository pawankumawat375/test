@extends('layout.app')
@section('mainsection')
    <section class="section">
        <div class="row">

            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vertical Form</h5>
                        @if (Session::has('seccess'))
                            <p style="text-align: center;color: rgb(0, 255, 85);font-weight: 700;">
                                {{ Session::get('seccess') }}</p>
                        @endif

                        <!-- Vertical Form -->
                        <form class="row g-3" method="post" action="">
                            @csrf
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="name" id="inputNanme4" value="{{old('name')}}">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail4" value="{{old('email')}}">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="inputPassword4">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add New Admin</button>
                                <a href="" class="btn btn-secondary">Reset</a>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
