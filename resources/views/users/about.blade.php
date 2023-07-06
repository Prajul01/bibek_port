@extends('layouts.layout')

@section('content')
    <div class="container about">


        <div class="row">
            <div class="col">
                <h1 class="text-center">Some Text Over Here</h1>
            </div>

            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($read as $profile)
                    <tr>
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->email }}</td>
                        <td>{{ $profile->phone }}</td>
                        <td>{{ $profile->address }}</td>
                        <td>{{ $profile->DateOfBirth }}</td>
                        <td>
                            <img src="{{asset('uploads/images/profile/'.$profile->image)}}" class="image2" alt="" style="height: 100px; width: 100px;" >
                        </td>

                        <td>
{{--                            {{route('portfolio.show',$profile->id)}}--}}
                            <a href="" class="btn btn-sm btn-primary ">View</a>
                            <a href="" class="btn btn-sm btn-warning ">Edit</a>
                            <form class="d-inline" action="" method="post">
                                <input type="hidden" name="_method" value="delete"/>
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger ">Delete</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>

    </div>



@endsection
