@extends('survey.main.main')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto mt-5">
            <div>
                <h3>Login</h3>
            </div>
            <div>
                <form action="" method="post">
                    @csrf

                    <div class="form-group mt-2">
                        <label for="email">Email Address</label>
                        <!-- <input class="form-control" type="email" id="email" name="email" required> -->
                        <input class="form-control" id="email" name="email">
                        @error('email')
                        <div style="color : red">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <!-- <input type="password" class="form-control" id="password" name="password" required> -->
                        <input type="password" class="form-control" id="password" name="password">

                        @error('password')
                        <div style="color : red">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-3">Log in</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection