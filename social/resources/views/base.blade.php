<!DOCTYPE html>
<html lang="en">
@include('partials._stylesheets')

@include('partials._header')
  <body>
    @include('partials._nav')
    @include('partials._messages')
    @yield('content')
    @include('partials._footer')
    @include('partials._javascript')
  </body>
</html>