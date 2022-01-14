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
                                href="{{ route('sale.price') }}"> İndrimleri Görüntüle </a>
                        </div>
                    @endif

                    <div class="body">
                        <form action="{{ route('admin.category.add') }}" enctype="multipart/form-data"
                            wire:submit.prevent="addSalePrice">
                            @csrf
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="İndirim Adı"
                                    name="name" required wire:model="name" />
                            </div>
                            <div class="form-group form-float">
                                <select class="form-control show-tick" wire:model="sale" required>
                                    <option value="">-- İndirim --</option>

                                    <option value="Açık">Açık</option>
                                    <option value="Kapalı">Kapalı</option>
                                </select>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                       
                                        <div class="body">
                                            <div class="row clearfix">                           
                                                <div class="col-sm-6">
                                                    <div class="input-group mb-0">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control timepicker" name="start_time" placeholder="İndirim Başlama Tarihi" wire:model = "start_time">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group mb-0">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control datetimepicker" name="stop_time" placeholder="İndirim Bitiş Tarihi" wire:model = "stop_time">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">
                                    İndirim Ekle
                                </button>
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


