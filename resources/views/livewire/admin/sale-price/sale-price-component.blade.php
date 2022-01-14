    <main>

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <h2>İdnirimler</h2>
                            <ul class="breadcrumb padding-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">İndirimli Ürünler Listesi</a>
                                </li>
                                <li class="breadcrumb-item active">İndirimli Ürünler</li>
                            </ul>
                        </div>

                    </div>
                </div>







                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Bordered</strong> Table <small>Add <code>.table-bordered</code> for borders
                                        on all sides of the table and cells.</small> </h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                            aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ route('sale.price.add') }}">İndirim Ekle</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ürün Adı</th>

                                            <th>İndirim Durumu</th>
                                            <th>Başlama Tarihi</th>
                                            <th>Bitiş Tarihi</th>
                                            <th>Sil</th>
                                            <th>Düzenle</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($saleprice as $sale)


                                            <tr>
                                                <th scope="row">{{ $sale->id }}</th>
                                                <td>{{ $sale->name }}</td>
                                            
                                                <td>{{ $sale->sale }}</td>
                                                <td>{{ $sale->start_time }}</td>
                                                <td>{{ $sale->stop_time }}</td>
                                                <td><a href="#" wire:click.prevent="deleteSale({{ $sale->id }})">
                                                        <br><i class="zmdi zmdi-delete text-danger"></i>
                                                    </a></td>
                                                <td>Düzenle</td>



                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- #END# Basic Examples -->
                <!-- Exportable Table -->

                <!-- #END# Exportable Table -->

        </section>
    </main>
