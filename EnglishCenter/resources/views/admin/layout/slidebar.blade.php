<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li class="sidebar-search">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <i class="fa fa-search"></i>  
            </button>
          </span>
        </div>
        <!-- /input-group -->
      </li>
      <li>
        <a href="{{route('adminhome')}}"><i class="fa fa-dashboard fa-fw"></i> Home</a>
      </li>
      <li>
        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
          <li>
            <a href="{{route('add-cate')}}">Add Category</a>
          </li>
          <li>
            <a href="{{route('list-cate')}}">List Category</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-cube fa-fw"></i> Course <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
          <li>
            <a href="{{route('add-product')}}">Add Course</a>
          </li>
          <li>
            <a href="{{route('list-product')}}">List Course</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-table"></i> Questionnaire <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
          <li>
            <a href="{{route('add-question')}}">Add Questionnaire</a>
          </li>
          <li>
            <a href="">List Course</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-user fa-fw"></i> User <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
          <li>
            <a href="{{route('add-user')}}">Add User</a>
          </li>
          <li>
            <a href="{{route('list-user')}}">List User</a>
          </li>
        </ul>
      </li>    
      <li><a href="{{route('adminlogin')}}">Login</a></li>
      <li><a href="{{route('/')}}">Go to Page</a></li>
    </ul>
  </div>
</div>