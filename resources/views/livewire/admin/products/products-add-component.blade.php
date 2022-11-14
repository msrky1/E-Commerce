<main>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Ürünler</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="zmdi zmdi-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Ürünler</a>
                            </li>
                            <li class="breadcrumb-item active">Ürün Ekle</li>
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
                            <h2><strong>Ürün </strong> Ekle</h2>

                        </div>
                        <div class="body">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('message') }}</strong> <a style="color: white"
                                        href="{{ route('admin.products') }}"> Ürüneri Görüntüle!</a>
                                </div>
                            @endif
                            <form id="form_validation" method="POST" wire:submit.prevent="addProduct">
                                @csrf
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Ürün Adı" name="name"
                                        wire:model="name" wire:keyup="generateSlug" required />
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Ürün Url " name="slug"
                                        wire:model="slug" required />
                                </div>
                                <div class="form-group form-float">
                                    <select class="form-control show-tick" required wire:model="stock_status">

                                        <option value="instock"> Stok Var</option>
                                        <option value="outofstock"> Stok Yok</option>



                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <select class="form-control show-tick" wire:model="category_id" required>
                                        <option value="">-- ürüne Kategori Seç --</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach


                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <select class="form-control show-tick" wire:model="sale">
                                        <option value="">-- İndirim Seç --</option>
                                        @foreach ($sales as $s)
                                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                                        @endforeach


                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <textarea name="short_description" cols="30" rows="5" placeholder="Ürünün Kısa Açıklaması"
                                        class="form-control no-resize" required
                                        wire:model="short_description"></textarea>
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Ürün Detaylı Açıklama "
                                        name="description" required wire:model="description" />
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Normal Fiyat"
                                        name="regular_price" required wire:model="regular_price" />
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Satış Fiyatı"
                                        name="sale_price" required wire:model="sale_price" />
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Özellikleri" name="featured"
                                        required wire:model="featured" />
                                </div>

                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Miktarı" name="quantity"
                                        required wire:model="quantity" />
                                </div>

                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Stok Kodu" name="SKU"
                                        required wire:model="SKU" />
                                </div>



                                <div class="body">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleInputFile"
                                            aria-describedby="fileHelp" wire:model="image"><br>
                                        <small id="fileHelp" class="form-text text-muted">.wbm .jpg .png boyutu düşük
                                            Dosya Seçin</small>


                                    </div>
                                    <div class="coll md-md-3">
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120">
                                        @endif
                                    </div>

                                </div>


                                <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">
                                    Ürünü Ekle
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
