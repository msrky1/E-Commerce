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

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Kullancıları </strong> Görüntüle<small> <code></code></small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                    data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                                        class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('admin.user.add')}}">Kullanıcı Ekle</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table m-b-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kullanıcı Adı</th>
                                    <th scope="col">Kullanıcı Resmi</th>
                                    <th scope="col">Mail Adresi</th>
                                    <th scope="col">Kullanıcı Tipi</th>
                                    <th scope="col">Aksiyon </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    
                        
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        @if ($user->profil_photo_path == null)
                                          
                                        Profil Fotoğrafı Bulunamadı
 
                                        @else
                                       <img src="{{route('storage/user/photo')}}/{{$user->profil_photo_path}}"  width="150"> 
                                        @endif
                                    
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->utype}}</td>
                                    <td>
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
                                        <div class="demo-google-material-icon"> <i class="material-icons">visibility</i> <span class="icon-name">Görüntüle</span> </div>
                                    </div>
                                    @if ($user->utype == "ADM")
                                                
                                        Yöneticiler Silinemezler
                                     
                                  <!--      <a href="#" wire:click.prevent="deleteUser({{$user->id}})">  
                                            <div class="demo-google-material-icon"> <i class="material-icons">delete</i> <span class="icon-name">Sil</span> </div>
    
                                      </a> -->

                                    @endif
                                  
                                   
                                  <a href="{{route('admin.user.edit' , [$user->id])}}"   > <div class="demo-google-material-icon"> <i class="material-icons">mode_edit</i> <span class="icon-name">Düzenle</span> </div>
                                  </a>
                                    </td>

                                </tr>
            
                               
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->links('vendor.pagination.custom-pagination')}}
                    </div>
                </div>
            </div>


        </div>


    </div>
</section>
