<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Food category</h6>
                    <h2>Our selection of category with quality taste</h2>
                </div>
               
                <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                    <div class="container-fluid">
                      
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      @foreach ($category as $item)
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/foodinCategory/'.$item->id)}}">{{$item->name}}</a>
                          </li>
                        
                        </ul>
                      </div>
                      @endforeach
                    </div>
                  </nav>
                  
            </div>
        </div>
    </div>
</section>
