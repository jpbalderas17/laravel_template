<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        @include('template.css')
        <title>Page - {{ Config::get('app.name') }}</title>
    </head>
    <body class='hold-transition skin-brand-light fixed '>
        @include('template.header')
        @include('template.sidebar')
        <div class='content-wrapper'>
            @yield('content')
        </div>
        @include('template.js')
    </body>
</html>
