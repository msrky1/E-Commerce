

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
                            <h2 class="mb-4">Login</h2>
                            <x-jet-validation-errors class="mb-4" />

                            <form action="{{ route('login') }}" method="POST" class="login-form inputs-border inputs-bg">
                              
                            
                            @csrf
                            
                            <div class="form-group">
                                    <div class="required">
                                        <input type="email" name="email" class="form-control" placeholder="Email Adresiniz?" :value="old('email')" requrired autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="required">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="current-password">
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div>
                                        <input type="checkbox" id="remember">
                                        <label for="remember" name="remember" class="checkbox">Remember me</label>
                                    </div>
                                    <a href="{{route('password.request')}}" class="effect float-right">Forgot your password?</a>
                                </div>
                                <div class="form-group text-right">
                               <button > Giriş Yap </button>

                            </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
