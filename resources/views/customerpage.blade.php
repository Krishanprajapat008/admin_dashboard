@extends('Layout.layout')

@section('content')

<section style="margin:10px">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-header">
                        <h6>Customer's Details page
                        <a href="addcustomer" role="button" class="btn btn-primary">Add customer</a> </h6>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>First Name</th>
                                <th>First Name</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Profile Picture</th>
                            </tr>
                            @foreach($customer_records as $records)
                            <tr>
                                <td>{{$records->First_Name}}</td>
                                <td>{{$records->Last_Name}}</td>
                                <td>{{$records->Mobile_num}}</td>
                                <td>{{$records->Email}}</td>
                                <td>{{$records->Gender}}</td>
                                <td><img src="{{url('Images/'.$records->Profile_Picture)}}" alt="image" width="80px" height="80px"></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection