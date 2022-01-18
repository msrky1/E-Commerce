<main>

<div class="page-head">
    <div class="container">
      <div class="d-flex flex-column flex-md-row">
        <ol
          class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0"
        >
          <li class="breadcrumb-item">
            <a href="index.html">Anasayfa</a>
          </li>
          <li class="breadcrumb-item active">Hakkımızda</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    @foreach ($about as $a)
        
 
    <section class="section" id="page-about">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-4">
            <h2 class="title">{{$a->title}}</h2>
            <p class="subtitle description">
              {{$a->body}}
            </p>
    
            </p>
          </div>
          
        </div>
        <div class="row align-items-center mb-5">
          <div class="col-lg-8">
            <div class="image">
              <img src="{{asset('assets/dist/images')}}/about-2.jpg" class="img-fluid" alt="" />
              <div class="caption">
                <span>Ofis</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="title">{{$a->line1}}</h2>
            <p class="subtitle description">
              {{$a->line2}}
            </p>
            <p class="subtitle description">
           
            </p>
          </div>
        </div>
        @endforeach
        
      </div>
    </section>
  </div>
</main>