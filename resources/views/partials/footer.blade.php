@php
  $menuItems = [
    [
      "title" => "Digital Comics",
      "sub" => [
        "title" => "Character",
        "title" => "Comics",
        "title" => "Movies",
        "title" => "TV",
        "title" => "Games",
        "title" => "News"
      ],
    ],
    [
      "title" => "Shop",
      "sub" => [
        "title" => "Shop DC",
        "title" => "Shop DC Collectibles"
      ],
    ],
    [
      "title" => "Digital Comics",
      "sub" => [
        "title" => "Terms Of Use",
        "title" => "Privacy policy (New)",
        "title" => "Ad Choices",
        "title" => "Advertising",
        "title" => "Jobs",
        "title" => "Subscriptions",
        "title" => "Talent Workshops",
        "title" => "Talent Workshops",
        "title" => "CPSC Certificates",
        "title" => "Ratings",
        "title" => "Shop Help",
        "title" => "Contact Us"
      ],
    ],
    [
      "title" => "Sites",
      "sub" => [
        "title" => "DC",
        "title" => "MAD Magazine",
        "title" => "DC Kids",
        "title" => "DC Universe",
        "title" => "DC Power Visa"
      ],
    ]
];
@endphp

<footer>
  <div class="top-footer overflow-hidden">
    <div class="container h-100 py-5">
      <div class="row">
        <div class="col-6">
          <div class="row">
            @foreach ($menuItems as $menuTitle)
              <div class="col-3">
                <div class="title-box">
                  <h4 class="title fw-bold text-white text-uppercase">{{ $menuTitle['title'] }}</h4>
                </div>
                <ul class="list-unstyled">
                  @foreach ($menuTitle['sub'] as $singleSubTitle)
                    <li class="sub-title">{{ $singleSubTitle }}</li>
                  @endforeach
                </ul>
              </div>
            @endforeach
          </div>
        </div>
        <div class="col-6 position-relative">
          <img src="../../img/dc-logo-bg.png" alt="" class="footer-bg-logo position-absolute">
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-footer"></div>
</footer>