@extends('master')

{{--  @section('form')  --}}
<div class="container">
    <div class="row">


        <div class="col-lg-offset-4 col-lg-4">

            <br><br><br>
            <center>
                <h3> Form Validation</h3>
            </center>
            @if (count($errors)>0)
            @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
            @endforeach

            @endif
            <form action="" method="post">
                {{csrf_field()}}
                <div class="form-group"><input type="text" placeholder="Name" name="name" class="form-control"></div>
                <div class="form-group"><input type="text" placeholder="Email" name="email" class="form-control"></div>
                <div class="form-group"><input type="submit" name="Submit" class="btn btn-success"></div>
            </form>
        </div>
    </div>
</div>
{{--  @endsection  --}}