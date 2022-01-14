<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Kullanıcıları Yönet</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Kullanıcılar</a></li>
                        <li class="breadcrumb-item active">Kullanıcı İşlemleri</li>
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
          
           
            <div class="col-sm-6">
                <div class="box">
                <h2 class="mb-4">Kullanıcı Oluştur</h2>
                @if (Session::has('message'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('message') }}</strong> <a style="color: white"
                        href="{{ route('admin.user') }}"> Kullanıcıları Görüntüle</a>
                </div>
            @endif
                    <form action="#" method="POST" class="register-form inputs-border inputs-bg" wire:click.prevent="addUser">
                        @csrf
                    
                    <div class="form-group">
                            <div class="required">
                                <input type="text" name="name" class="form-control" placeholder="Kullanıcı Adı" wire:model="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="required">
                                <input type="email" name="email" class="form-control" placeholder="Mail Adresi" wire:model="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="required">
                                <input type="password" name="password" class="form-control" placeholder="Şifre" wire:model="password">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <select class="form-control show-tick" required wire:model="utype" >
                                
                                    <option > Kullanıcı Seç </option>
                                    <option value="USR"> User</option>
                                    <option value="ADM"> Admin</option>



                            </select>
                        </div>
                       
                       
                       
                     
                    </form>


        </div>


    </div>
</section>

         