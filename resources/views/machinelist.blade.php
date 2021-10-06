@extends('Layout.layout')

@section('content')

<section style="margin:10px">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-header">
                        <h6>Machine Details
                        <a href="addmachine" role="button" class="btn btn-primary">Add Machines</a> </h6>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Machine Name</th>
                                <th>Weight</th>
                                <th>Price</th>
                                <th>Company_name</th>  
                            </tr>
                            @foreach($machinedetails as $machine)
                            <tr>
                                <td>{{$machine->Machine_Name}}</td>
                                <td>{{$machine->Weight}}</td>
                                <td>{{$machine->Price}}</td>
                                <td>{{$machine->Company_name}}</td>
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