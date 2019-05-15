<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="index.html">Admin English Center</a>
</div>
<ul class="nav navbar-top-links navbar-right">
  <!-- /.dropdown -->
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-user">
      <li><a href="{!!route('edit-user',Auth::user()->id)!!}"><i class="fa fa-user fa-fw"></i>{!!Auth::user()->username!!}</a>
      </li>
      <li><a href="{!!route('edit-user',Auth::user()->id)!!}"><i class="fa fa-gear fa-fw"></i>Setting</a>
      </li>
      <li class="divider"></li>
      <li><a href="{{route('adminlogout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
      </li>
    </ul>
  </li>
</ul>