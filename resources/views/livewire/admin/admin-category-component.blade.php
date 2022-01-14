<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Kategoriler</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Kategoriler</a></li>
                        <li class="breadcrumb-item active">Tüm Kategoriler</li>
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
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Kategoriler</strong> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                    data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                                        class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
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
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Kategori Adı</th>
                                        <th>Kategori Url</th>
                                        <th>Aksiyon</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $cat)

                                        <tr>
                                            <td>{{ $cat->id }}</td>
                                            <td>{{ $cat->name }}</td>
                                            <td>{{ $cat->slug }}</td>
                                            <td><a href="#" wire:click.prevent="deleteCategory({{ $cat->id }})"> <i
                                                        class="zmdi zmdi-delete text-danger"></i>
                                                </a> <a
                                                    href="{{ route('admin.categoryedit', ['category_slug' => $cat->slug]) }}">
                                                    <i class="material-icons">edit</i></a></td>


                                        </tr>

                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Kategori Adı</th>
                                        <th>Kategori Url</th>
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
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Exportable</strong> Examples </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                    data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                                        class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
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
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>id</th>
                                        <th>Kategori Adı</th>
                                        <th>Kategori Url</th>
                                        <th>Aksiyon</th>

                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $cat)

                                        <tr>
                                            <td>{{ $cat->id }}</td>
                                            <td>{{ $cat->name }}</td>
                                            <td>{{ $cat->slug }}</td>
                                            <td><a href="#" wire:click.prevent="deleteCategory({{ $cat->id }})">
                                                    <i class="zmdi zmdi-delete text-danger"></i>
                                                </a> <a
                                                    href="{{ route('admin.categoryedit', ['category_slug' => $cat->slug]) }}">
                                                    <i class="material-icons">edit</i></a></td>

                                        </tr>

                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <tr>
                                        <th>id</th>
                                        <th>Kategori Adı</th>
                                        <th>Kategori Url</th>
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
        <!-- #END# Exportable Table -->
    </div>
</section>
