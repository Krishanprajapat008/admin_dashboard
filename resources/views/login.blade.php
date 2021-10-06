@extends('Layout.layout')

@section('content')

<section style="margin:100px 0 0 300px">
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4>Login Details</h4>
                </div>
                <div class="card-body">
                    <form action="/adminlogin" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="Username" required />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required />
                        </div>
                        <button class="btn btn-primary" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


@endsection