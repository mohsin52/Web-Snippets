<style>
  .sharelink{

  }
  .sharelink:hover{

  }
  .nav-link{

  }
  .nav-link:hover{

  }
  .navImg{

  }
  .dropdown-menu{

  }
  .dropdown-item{

  }
  .dropdown-item:hover{
    
  }
  .btn-link{

  }
  .btn-link:hover{

  }
</style>
<nav class="navbar sticky-top navbar-expand-sm navbar-dark">
  <a class="navbar-brand" href="#"><img class="navImg" src="..." alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarList" aria-controls="navbarList" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse flex-column" id="navbarList">
    <ul class="navbar-nav ml-auto justify-content-end">
        <li class="nav-item active">
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#shareModal">
              Share
            </button>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto justify-content-end">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="list-group">
          <a href="#" class="sharelink list-group-item list-group-item-action"><i class="<type>"></i>Share on Facebook</a>
          <a href="#" class="sharelink list-group-item list-group-item-action"><i class="<type>"></i>Share on Facebook</a>
          <a href="#" class="sharelink list-group-item list-group-item-action"><i class="<type>"></i>Share on Facebook</a>
        </div>
      </div>
    </div>
  </div>
</div>