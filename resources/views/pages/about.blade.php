@extends('layouts.default', ['title' => 'About'])

@section('content')

<div class="container">
    <h2 class="lara">What is Laracarte ?</h2>
    <p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a>.</p>
    <div class="row">
        <div class="col-md-6">
            <p class="alert alert-warning">
                <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>This map has been built by 
                <a href="https://twitter.com/etsmo">@etsmo</a> for learing purposes.</strong>
            </p>
        </div>
    </div>

    <p>Feel free to help to improve the <a href="https://github.com/RolexxTime/laracarte-tda">source code</a>.</p>

    <hr>

    <h2 class="lara">What is Laramap ?</h2>
    <p>Laramap is the website by which laracaste is made .</p>
    <p>More info <a href="https://laramap.com" target="_blank">here</a>.</p>

    <hr>

    <h2 class="lara">Which tools and services are used in Laracasts ?</h2>
    <p>Basically it is built in Laravel and Bootstrap !</p>
    <ul>
        <li>Laravel</li>
        <li>Bootstrap</li>
        <li>Amazone S3</li>
        <li>Google Maps</li>
    </ul>
    
</div>

@stop