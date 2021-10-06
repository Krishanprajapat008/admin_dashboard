@extends('Layout.layout')

@section('content')

<section style="margin: 30px">
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4>Add Machines</h4>
                </div>
                <div class="card-body">
                    <form action="/add_machine" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Machine Name</label>
                            <input type="text" class="form-control" name="machine_name" required>
                        </div>
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="text" class="form-control" name="weight" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" required>
                        </div>
                        <div class="form-group">
                            <label>Company_Name</label>
                            <input type="text" class="form-control" name="company_name" required>
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