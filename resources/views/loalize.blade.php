@extends('master')
<div class="containter">
    {{-- <div class="row"> --}}
    <div class="navbar navbar-expand-lg navbar-dark bg-primary">
        {{-- <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto ml-5">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <button class="btn btn-success">Go</button>
        </div>
        {{-- </div> --}}
    </div>
    <br><br><br>
    {{config('app.locale')}}
    <h3>{{__('messages.welcome') }} Vishal</h3>
    <h3>{{ trans_choice('messages.item',0) }} </h3>