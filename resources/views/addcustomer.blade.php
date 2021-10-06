@extends('Layout.layout')

@section('content')

<section style="margin: 30px">
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h6>Add Customer</h6>
                </div>
                <div class="card-body">
                    <form action="/add_customer" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group-sm">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" required>
                        </div>
                        <div class="form-group-sm">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                        <div class="form-group-sm">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" name="mobile" required>
                        </div>
                        <div class="form-group-sm">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                                <div class="form-check">
                                    <label>Male : </label>
                                    <input type="radio" name="gender" value="Male">
                                    <label>Female : </label>
                                    <input type="radio" name="gender" value="Female">
                                </div>
                        </div>
                        <div class="form-group">
                            <label>Profile_Picture</label>
                            <input type="file" class="form-control" name="file" required>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


@endsection