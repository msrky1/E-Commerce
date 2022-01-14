<main>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Ürünler</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Ürünleri Listesi</a></li>
                            <li class="breadcrumb-item active">Tüm Ürümler</li>
                        </ul>
                    </div>

                </div>
            </div>



            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Ürünler </strong> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="{{ route('admin.products.add') }}">Ürün Ekle</a></li>

                                        <li><a href="{{ route('admin.category.add') }}">Kategori Ekle</a></li>


                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            @if (Session::has('message'))
                            <div class="alert alert-success">
                                <strong>{{ Session::get('message') }}</strong> 
                            </div>
                        @endif
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>id</th>
                                            <th>Ürün Adı</th>

                                            <th>Ürün Url</th>
                                            <th>Aksiyon</th>

                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $p)

                                            <tr>
                                                <td>{{ $p->id }}</td>
                                                <td>{{ $p->name }}</td>
                                                <td>{{ $p->slug }}</td>
                                                <td><a href="#"
                                                        wire:click.prevent="deleteProduct({{ $p->id }})"> <br><i
                                                            class="zmdi zmdi-delete text-danger"></i>
                                                    </a> <a
                                                        href="{{ route('admin.products.edit', ['product_slug' => $p->slug]) }}">
                                                        <i class="material-icons">edit</i> </a></td>


                                            </tr>

                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <tr>
                                            <th>id</th>
                                            <th>Ürün Adı</th>
                                            <th>Ürün Url</th>
                                            <th>Aksiyon</th>

                                        </tr>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Ürünler</strong> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="{{ route('admin.products.add') }}">Ürün Ekle</a></li>
                                        <li><a href="{{ route('admin.category.add') }}">Kategori Ekle</a></li>


                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                               
                                <table
                                    class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Ürün Adı</th>
                                            <th>Ürün Url</th>
                                            <th> Ürün Resmi</th>
                                            <th> Ürün Kategorisi</th>
                                            <th> Ürün İndirimi</th>
                                            <th>Kısa Açıklama</th>
                                            <th>Normal Fiyat</th>
                                            <th>Satış Fiyatı</th>
                                            <th>SKU</th>
                                            <th>Stok Durumu</th>
                                            <th>Özellikler</th>
                                            <th>Miktar</th>


                                            <th>Aksiyon</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $p)

                                            <tr>
                                                <td>{{ $p->id }}</td>
                                                <td>{{ $p->name }}</td>
                                                <td>{{ $p->slug }}</td>
                                                <a href="{{ route('product.details', $p->slug) }}">
                                                    <td><img src="{{ asset('storage')}}/products/{{ $p->image }}"
                                                            width="150"></td>
                                                </a>
                                                <td>{{ $p->category->name }}</td>

                                                @if (!$p->sale == "")
                                                <td>{{ $p->getSale->name }}</td>
                                          
                                                    
                                                @else
                                                    
                                                <td>Henüz İndirimi Yok</td>
                                                @endif
                                              
                                                <td>{{ Str::limit($p->short_description, 25) }}</td>
                                                <td>{{ $p->regular_price }}</td>
                                                <td>{{ $p->sale_price }}</td>
                                                <td>{{ $p->SKU }}</td>
                                                <td>{{ $p->stock_status }}</td>
                                                <td>{{ $p->featured }}</td>
                                                <td>{{ $p->quantity }}</td>
                                                <td><a href="#"
                                                        wire:click.prevent="deleteProduct({{ $p->id }})">
                                                        <br><i class="zmdi zmdi-delete text-danger"></i>
                                                    </a> <a
                                                    href="{{ route('admin.products.edit', ['product_slug' => $p->slug ]) }}">
                                                    <i class="material-icons">edit</i> </a></td>


                                            </tr>

                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Ürün Adı</th>
                                            <th>Ürün Url</th>
                                            <th> Ürün Resmi</th>
                                            <th> Ürün Kategorisi</th>
                                            <th> Ürün İndirimi</th>
                                            <th>Kısa Açıklama</th>
                                            <th>Normal Fiyat</th>
                                            <th>Satış Fiyatı</th>
                                            <th>SKU</th>
                                            <th>Stok Durumu</th>
                                            <th>Özellikler</th>
                                            <th>Miktar</th>


                                            <th>Aksiyon</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->

            <!-- #END# Exportable Table -->
        </div>
    </section>
</main>
