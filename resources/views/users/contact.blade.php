@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1 class="head">Contact</h1>

        <div class="row">
            <div class="col">
                <div>
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                    <h4>Location</h4>
                    <p>Kageshwori Manohara</p>
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <h4>Email</h4>
                    <p>bibek7@gmail.com</p>
                </div>
                <div>
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                    <h4>Call</h4>
                    <p>9860466307</p>
                </div>
            </div>
            <div class="col">
                <form >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Your Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Subject</label>
                        <input type="Subject" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


    </div>
@endsection
