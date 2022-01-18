<main>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>İletişim</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">İletişim Bilgileriniz</a></li>
                            <li class="breadcrumb-item active">İletişim</li>
                        </ul>
                    </div>

                </div>
            </div>



            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">



                        <div class="col-lg-3 cool-md-6 col-sm-12">
                            <div class="card">
                                <form wire:submit.prevent="updateContact">
                                    @csrf
                                <ul class="pricing body">
                                    <li>
                                        <div class="form-group">
                                            <input class="form-control" type="text"  name="title" wire:model="title"/>
                                        </div>
                                    </li>
                                    <li>
                                        <textarea rows="4" class="form-control no-resize"  wire:model="body"
                                      ></textarea>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <input class="form-control" type="text" wire:model="phone" />
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <input class="form-control" type="text"  wire:model="email"/>
                                        </div>
                                    </li>
                                    <li>
                                        <textarea rows="4" class="form-control no-resize" wire:model="adress"
                                      ></textarea>
                                    </li>
                                    

                                    <li><button class="btn btn-primary btn-round btn-simple">Kaydet</button></li>
                                </form>
                                    @if (Session::has('message'))

                                    <strong> {{Session::get('message')}} </strong>
                                    <strong> <a href="{{route('admin.contact')}}" style="color: green" >  İletişim Sayfasını Görüntüle! </a>
                                        
                                    @endif
                                   
                                </ul>
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
