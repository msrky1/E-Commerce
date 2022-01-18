<main>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Hakkımızd</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Hakkımızda Sayfası</a></li>
                            <li class="breadcrumb-item active">Tüm Ürümler</li>
                        </ul>
                    </div>

                </div>
            </div>



            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Hakkımızda </strong> Sayfası  </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{route('admin.home.add')}}">Slider Ekle</a></li>
                                       
                                    </ul>
                                </li>
                            </ul>
                        </div>

                     
                        <div class="body table-responsive">
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="card">
                                       
                                        <div class="body">
                                            <h2 class="card-inside-title"> <strong>Hakkımızda</strong></h2>
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                        <div class="cart">
                                                            @foreach ($about as $a)
                                                                
                                                           {{$a->title}} <br> <br>
                                                            {{$a->body}} <br><br>
                                                            {{$a->line1}} <br> <br>
                                                            {{$a->line2}} <br>

                                                            <a href="{{route('admin.about.edit', ['id' => $a->id])}}"  >   <br><button class="btn btn-primary btn-round">Düzenle</button></a>

                                                    
                                        
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                        
                                        </div>
                                    </div>
                                </div>
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
