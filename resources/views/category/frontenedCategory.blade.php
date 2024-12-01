<section class="section" id="menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="section-heading mb-3">
          <h6>Our Food Category</h6>
          <h2>Our selection of categories with quality taste</h2>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning  rounded">
          <div class="">
            <button 
              class="navbar-toggler" 
              type="button" 
              data-bs-toggle="collapse" 
              data-bs-target="#navbarNav" 
              aria-controls="navbarNav" 
              aria-expanded="false" 
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav flex-row" style="gap: 5px;"> <!-- Stack categories vertically -->
                @foreach ($category as $item)
                <li class="nav-item">
                  <a 
                    class="nav-link text-black" 
                    aria-current="page" 
                    href="{{url('/foodinCategory/'.$item->id)}}" 
                    style="border: 1px solid #000000; border-radius: 5px; text-align: center;">
                    {{$item->name}}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>
