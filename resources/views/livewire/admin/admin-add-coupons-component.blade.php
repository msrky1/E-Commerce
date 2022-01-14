<main>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Kuponlar</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="zmdi zmdi-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Kuponlar</a>
                            </li>
                            <li class="breadcrumb-item active">Kupon Ekle</li>
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
                            <h2><strong>Kupon  </strong> Ekle</h2>

                        </div>
                        <div class="body">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('message') }}</strong> <a style="color: white"
                                        href="{{ route('admin.coupons') }}"> Kuponları Görüntüle!</a>
                                </div>
                            @endif
                            <form id="form_validation" method="POST" wire:submit.prevent="addCoupon">
                                @csrf
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Kupon Kodu" name="code"
                                        wire:model="code" required />
                                </div>
                              
                                <div class="form-group form-float">
                                    <select class="form-control show-tick" required wire:model="type" >
                                        <option value="">Tür Seçin</option>

                                            <option value="fixed"> Fiyat (₺)</option>
                                            <option value="prevent"> İndirim (%) </option>



                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Değer" name="value"
                                        required wire:model="value" />
                                </div>

                                
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Kart Değeri" name="cart_value"
                                        required wire:model="cart_value" />
                                </div>

                          


                               
                                    <b>Son Kullanma Tarihi</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend" wire:ignore>
                                            <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                        </div>
                                        <input type="text" wire:model = "expiry_date" class="form-control date" placeholder="Örnek: 30/07/2021" >
                                    </div>
                              
                           

                                    <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit">
                                        Kuponu Kaydet
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


       @push('scripts')
           <script>
               $(function(){

                    $('expiry_date').datetimepicker({

                       format: 'Y-MM-DD'
                        
                    })

                    .on('dp-change' , function(ev){

                        var data = $('#expiry-date').val();
                        @this.set('expiry_date', data );
                    });

               });
             
               </script>
       @endpush
    </section>

</main>
