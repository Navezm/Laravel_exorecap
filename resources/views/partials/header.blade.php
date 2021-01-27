<header class="bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand text-white" href="#">Coding School</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item">
              @if ($urlRelatif == 'about')
                <a class="nav-link text-white" href="/about">About</a>
              @else
                <a class="nav-link text-white-50" href="/about">About</a>
              @endif
            </li>

            <li class="nav-item">
              @if ($urlRelatif == 'services')
                <a class="nav-link text-white" href="/services">Services</a>
              @else
                <a class="nav-link text-white-50" href="/services">Services</a>
              @endif
            </li>

            <li>
              <a class="nav-link text-white-50" href="/services">Contact</a>
            </li>
          </ul>
        </div>
    </nav>
</header>