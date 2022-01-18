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
                        @foreach ($contact as $c)
                            
                    
                        <div class="col-lg-3 cool-md-6 col-sm-12">
                            <div class="card">
                                <ul class="pricing body">
                                    <li><big>{{$c->title}}</big></li>
                                    <li>{{$c->body}}/li>
                                    <li>{{$c->phone}}</li>
                                    <li>{{$c->email}}</li>
                                    <li>{{$c->adress}}</li>
                                   
                                    <li><a href="{{route('admin.contact.edit', ['id' => $c->id])}}" > <button class="btn btn-primary btn-round btn-simple">Düzenle</button> </a></li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
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
