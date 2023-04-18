<!-- Header Starts -->
<div class="header">
    <div class="header__left">
      <i id="menu" class="material-icons">menu</i>
      <x-application-logo/>
    </div>

    <div class="header__search">
      <form action="">
        <input type="text" placeholder="Search" />
        <button type="submit"><i class="material-icons">search</i></button>
      </form>
    </div>

    @auth
    <div class="header__icons">
        {{-- <i class="material-icons display-this">search</i> --}}
        <i class="material-icons">videocam</i>
        {{-- <i class="material-icons">apps</i> --}}
        {{-- <i class="material-icons">notifications</i> --}}
        <button style="all: unset" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons display-this">account_circle</i>

          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="/profile">Account Settings</a></li>
            <li><a class="dropdown-item" href="/my-channels">My Channels</a></li>
            <li><a class="dropdown-item" href="/logout">Log Out</a></li>
          </ul>
      </div>
      @else
      <div class="header__icons">
        <a href="/login" class="btn btn-outline-secondary text-light px-4 me-3" style="border: 0; border-radius:20px;">
            Login
        </a>
        <a href="/register">
            <button class="btn text-light px-4" style="border: 0; border-radius:20px;background:#2E2CED;">Sign Up</button>
        </a>
      </div>
    @endauth
  </div>
  <!-- Header Ends -->
