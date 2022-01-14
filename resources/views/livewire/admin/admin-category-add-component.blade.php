<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Kategori Ekle</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Kategoriler</a></li>
                        <li class="breadcrumb-item active">Kategori Ekle</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group mb-0">
                        <input type="text" class="form-control" placeholder="Search...">
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
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message') }}</strong> <a style="color: white"
                                href="{{ route('admin.categories') }}"> Tüm Kategorileri Görüntüle!</a>
                        </div>
                    @endif

                    <div class="body">
                        <form action="{{ route('admin.category.add') }}" enctype="multipart/form-data"
                            wire:submit.prevent="storeCategory">
                            @csrf
                            Kategori Adı   
                            <div class="form-group form-float">
                  <input type="text" class="form-control" name="name" wire:model="name"
                                    wire:keyup="generateslug"  required/><br> <br>
                            </div>
                            Kategori Uzantısı
                            <div class="form-group form-float">
                          <input type="text" class="form-control" name="slug" wire:model="slug" required /><br>
                            </diV>
                            <br>
                            <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">Kategori
                                Ekle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Validation -->
        <!-- Advanced Validation -->

        <!-- #END# Advanced Validation -->
        <!-- Validation Stats -->

        <!-- #END# Validation Stats -->
    </div>
</section>
