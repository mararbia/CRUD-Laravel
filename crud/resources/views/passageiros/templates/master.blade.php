@extends('passageiros.templates.partials.header')

<!-- container -->

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @yield('content')
        </div>
    </div>
</div>

@extends('passageiros.templates.partials.footer')