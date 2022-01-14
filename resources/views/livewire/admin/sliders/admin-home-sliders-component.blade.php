<main>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Slider Yönetimi</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Slider Yönetimi</a></li>
                            <li class="breadcrumb-item active">Tüm Ürümler</li>
                        </ul>
                    </div>

                </div>
            </div>



            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Slider </strong> Yönetimi  </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{route('admin.home.add')}}">Slider Ekle</a></li>
                                       
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        @if (Session()->has('message'))

                        
                            
                        @endif
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Başlık</th>
                                        <th>Başlık 2</th>
                                        <th>Fiyat</th>
                                        <th>İmage</th>
                                        <th>Statüsü</th>
                                        <th>Aksiyon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($homeslider as $slider)
                                    <tr class="xl-pink">
                                     
                                        <th scope="row">{{$slider->id}}</th>
                                        <th scope="row">{{$slider->title}}</th>
                                        <th scope="row">{{$slider->subtitle}}</th>
                                        <th scope="row">{{$slider->price}}</th>
                                        <th scope="row"><img src="{{asset('storage/sliders')}}/{{$slider->image}}" width="150"></th>
                                        <th scope="row">{{$slider->status}}</th>
                                        
                                        <th>
                                         <a href="{{route('admin.home.edit', ['slider_link' => $slider->link])}}"  > <button class="btn btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></a></button>
                                         <a href="#" wire:click.prevent = "deleteSlider({{$slider->id}})">  <button class="btn btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                        </th> 
                                   
                                    
                                 
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>





            <!-- Basic Examples -->
            
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->

            <!-- #END# Exportable Table -->
        </div>
    </section>
</main>
