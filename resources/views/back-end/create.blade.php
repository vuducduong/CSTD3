@extends('back-end.master')
@section('content')
    <div class="container">
    <form method="post">
        @csrf
        <h1>Add Student</h1>
        <div class="form-group" >
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Date Of Birth</label>
            <input type="date" class="form-control" name="dateOfBirth" placeholder="Enter date of birth">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Gender</label>
            <select class="form-control" id="exampleFormControlSelect1" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Class</label>
            <select class="form-control" id="exampleFormControlSelect1" name="">
                <option value="">Chose Class</option>
                <option value=""></option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" name="address" class="form-control"  placeholder="Enter Address">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
