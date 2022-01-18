<main>
    <div class="page-head">
        <div class="container">
            <div class="d-flex flex-column flex-md-row">
                <ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html">Anasayfa</a>
                    </li>
                    <li class="breadcrumb-item active">İletişim</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="page-wrapper">

        <section class="section" id="contact-info">
            <div class="container">
              @foreach ($contact as $c)
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="pt-0">
                            Neden Söylemiyorsun ;) <span class="autotype">Hello</span><span
                                class="typed-cursor">?</span>
                        </h3>
                     


                      <strong>       {{ $c->title }} </strong>
                            <p class="description">
                                {{ $c->body }}

                            </p>
                            <div>
                                <p><strong>Telefon:</strong> +90 {{ $c->phone }}</p>
                                <p>
                                    <strong>Email:</strong>
                                    {{ $c->email }}
                                </p>
                                <p>
                                    <strong>Adres:</strong> {{ $c->adress }}
                                </p>
                    
                    </div>
                </div>
                @endforeach
                <div class="col-lg-8">
                    <form action="#!" method="POST" class="inputs-border">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Adınız" name="name" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Email Adresiniz" name="email" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Mesajınız"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-primary">
                                Mesaj Gönder
                            </button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </section>
    </div>
</main>
