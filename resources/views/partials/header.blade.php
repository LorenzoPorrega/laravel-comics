@php
  $menuSections = [
    ["title" => "Characters"],
    ["title" => "Comics"],
    ["title" => "Movies"],
    ["title" => "Tv"],
    ["title" => "Games"],
    ["title" => "Collectibles"],
    ["title" => "Videos"],
    ["title" => "Fans"],
    ["title" => "News"],
    ["title" => "Shop"]
];
@endphp

<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
  <div class="nav-bar-top-banner position-absolute top-0"></div>
  <div class="container mt-4">
    <a class="navbar-brand" href="/"><img src="img/dc-logo.png" alt="logo" style="width: 80px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end h-100" id="navbarNavAltMarkup">
      <div class="navbar-nav text-uppercase">
        @foreach ($menuSections as $section)
        <a class="nav-link ms-4 fw-bold" href="#">
          {{ $section["title"] }}
          <div class="after-div" tabindex="0"></div>
        </a>
        @endforeach
      </div>
    </div>
  </div>
</nav>