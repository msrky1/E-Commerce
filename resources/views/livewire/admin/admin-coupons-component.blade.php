<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Kuponlar</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Kuponlar</a></li>
                        <li class="breadcrumb-item active">Tüm Kuponlar</li>
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
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Kuponları </strong> Görüntüle<small> <code></code></small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                    data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                                        class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{ route('admin.coupons.add') }}">Kupon Ekle</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>

                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message') }}</strong> <a style="color: white"
                                href="{{ route('admin.coupons') }}"></a>
                        </div>
                    @endif
                    <div class="body table-responsive">
                        <table class="table m-b-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kod</th>
                                    <th scope="col">Tipi</th>
                                    <th scope="col">Değer</th>
                                    <th scope="col">Kart Değeri</th>
                                    <th scope="col">Son Kullanma Tarihi</th>

                                    <th scope="col">Aksiyon </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)


                                    <tr>
                                        <th scope="row">{{ $coupon->id }}</th>
                                        <td>{{ $coupon->code }}</td>
                                        <td>{{ $coupon->type }}</td>
                                        @if ($coupon->type == 'fixed')
                                            <td>{{ $coupon->value }}₺</td>

                                        @else

                                            <td>{{ $coupon->value }} %</td>

                                        @endif

                                        <td>{{ $coupon->cart_value }}</td>
                                        <td>{{ $coupon->expiry_date }}</td>


                                        <td>
                                            <a href="#" wire:click.prevent="deleteCoupon({{ $coupon->id }})">
                                                <br><i class="zmdi zmdi-delete text-danger"></i>
                                            </a> <a
                                            href="{{ route('admin.coupons.edit', ['coupon_id' => $coupon->id ]) }}">
                                            <i class="material-icons">edit</i></a>
                                        </td>


                                    </tr>
                                    </td>




                                    </tr>


                                @endforeach
                            </tbody>
                        </table>
                        {{ $coupons->links('vendor.pagination.custom-pagination') }}
                    </div>
                </div>
            </div>


        </div>


    </div>
</section>
