

<x-guest-layout>

<div class="page-head">
        <div class="container">
            <div class="d-flex flex-column flex-md-row">
                <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                    <li class="breadcrumb-item">
                        <a href="/">Anasayfa</a>
                    </li>
                    <li class="breadcrumb-item active">Hesabım</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <section class="section" id="page-login">
            <div class="container">
                <div class="row">
                   
                    <div class="col-sm-6">
                        <div class="box">
                            <h2 class="mb-4">Register</h2>
                            <form action="{{route('register')}}" method="POST" class="register-form inputs-border inputs-bg">
                                @csrf
                            
                            <div class="form-group">
                                    <div class="required">
                                        <input type="text" name="name" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="required">
                                        <input type="email" name="email" class="form-control" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="required">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="required">
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Şifreyi Tekrar Giriniz">
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button  class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
