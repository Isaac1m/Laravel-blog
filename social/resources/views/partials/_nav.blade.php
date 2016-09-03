 <nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">OTC</a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/') ? "active" : " "}}"><a href="/">Home</a></li>
        <li class="{{Request::is('blog') ? "active" : " "}}"><a href="/blog">Blog</a></li>
         <li class="{{Request::is('shoutouts') ? "active" : " "}}"><a href="/shoutouts">Shout outs</a></li>
          <li class="{{Request::is('about') ? "active" : " "}}"><a href="/about">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <span><button type="submit" class="btn btn-default"><i class = "fa fa-btn fa-search"></i></button></span>
      </form>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class = "fa fa-btn fa-user"></i>change avatar</a></li>
            <li><a href="#"><i class = "fa fa-btn fa-edit"></i>edit display name</a></li>
            <li><a href="#"><i class = "fa fa-btn fa-gear"></i>profile settings</a></li>
            <li role="separator" class="divider"></li>
            <li> <a href="#"> <i class = "fa fa-btn fa-sign-out"></i>log out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- #.navbar-collapse -->
      </div> <!-- #.container-fluid -->
</nav>

 <!-- Dropdown Structure
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>

      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
        <div class="chip">
    <img src="/assets/img/avatars/ij.jpg" alt="Contact Person">
    IJ
  </div><i class="fa fa-btn fa-caret"></i></a></li>
    </ul>
  </div>
</nav>
@section('scripts')
  <script src="/assets/js/init.js"></script>
@endsection
-->
