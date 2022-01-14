<main>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Slider Yönetimi</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="zmdi zmdi-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Slider Yönetimi</a>
                            </li>
                            <li class="breadcrumb-item active">Slider Düzenle</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control" placeholder="Search..." />
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Slider  </strong> Düzenle</h2>

                        </div>
                        <div class="body">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('message') }}</strong> <a style="color: white"
                                        href="{{ route('admin.home.sliders') }}">Sliderı Görüntüle!</a>
                                </div>
                            @endif
                            <form id="form_validation" method="POST" wire:submit.prevent="updateSlider">
                                @csrf
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="1. Başlık" name="title"
                                        wire:model="title"  required />
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="2. Başlık " name="subtitle"
                                        wire:model="subtitle" required />
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Link " name="link"
                                        wire:model="link" required />
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Fiyat " name="price"
                                        wire:model="price" required />
                                </div>
                                <div class="form-group form-float">
                                    <select class="form-control show-tick" required wire:model="status" >
                                        
                                            <option value="Açık">Açık</option>
                                            <option value="Kapalı"> Kapalı</option>

                                   </select>
                                </div>
                              
                                
                                <div class="body">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleInputFile"
                                            aria-describedby="fileHelp" wire:model ="newimage">
                                        <small id="fileHelp" class="form-text text-muted">.wbm .jpg .png boyutu düşük
                                            Dosya Seçin</small>
    
                                            @if ($newimage)
                                                <img src="{{$newimage->temporaryUrl()}}" width="120">

                                   
                                                    
                                                @else

                                                <img src="{{asset('storage/sliders')}}/{{$image}}" width="120">

                                     
                                            @endif
                                            
                                    </div>
                                </div>

                                    <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">
                                    Sliderı Düzenle
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
