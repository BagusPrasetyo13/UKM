  <nav class="main-header navbar navbar-expand navbar-light" style="background-color:#cfe6da ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <form action="/logout" method="POST">
              @csrf
              {{-- <button type="submit" class="nav-link bg-indigo border-0"><i class="fas fa-sign-out-alt"></i> Logout </button>  --}}
              <button class="btn btn-get-started btn-get-started-blue text-white px-4 mr-4" style="background-color:#83aa99; border-radius:1.5rem;"><i class="fas fa-sign-out-alt"></i> Logout</button>
          </form>
      </li>
    </ul>
  </nav>