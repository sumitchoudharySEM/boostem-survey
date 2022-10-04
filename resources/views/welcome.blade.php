<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        @stack('title')
        @include('layouts.partials.meta')
        @include('layouts.partials.style')
        @include('layouts.partials.script')
        @stack('child-style')
        
    </head>
    <body>
        
    </body>
</html>
