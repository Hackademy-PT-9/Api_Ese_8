<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>
    <x-navbar />

    <main class="flex-shrink-0 text-bg-dark p-3">
        <!-- Header-->
        <div class="text-success">
            <hr>
        </div>
        <header>
            <div class="container px-5">

                <div class="row justify-content-center">


                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3 text-success">Moda a Portata di Click: Scopri il Tuo Stile su
                                {{ env('APP_NAME') }}
                            </h1>
                            <p class="lead fw-normal text-muted mb-4 text-secondary"><em>Benvenuti nel nostro negozio di
                                    abbigliamento online, dove lo stile incontra la convenienza. Qui troverete una vasta
                                    selezione di abbigliamento e accessori di tendenza per ogni occasione. Sfogliate il
                                    nostro catalogo per scoprire le ultime collezioni di moda, dai capi eleganti alle
                                    opzioni casual. Il vostro stile unico vi aspetta.
                                </em></p>
                            <a class="btn btn-outline-success fs-4 text-white" href="{{ Route('index') }}">Visita il
                                nostro
                                catalogo</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section one-->

        <section class="py-5 bg-light" id="scroll-target">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6"><img class="img-fluid rounded img-header" src="\immagini\img-2.jpg"
                            alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder text-success">Our founding</h2>
                        <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero
                            molestiae
                            et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                        <a class="btn btn-outline-success  " href="{{ Route('index') }}">Visita il
                            nostro
                            catalogo</a>

                    </div>

                </div>
            </div>
        </section>
        <!-- About section two-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded img-header"
                            src="\immagini\img-3.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder text-success">Accessori &amp; Makeup</h2>
                        <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero
                            molestiae
                            et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                        <a class="btn btn-outline-success text-white " href="{{ Route('index') }}">Visita il
                            nostro
                            catalogo</a>

                    </div>
                </div>
            </div>
        </section>
        <!-- Team members section-->
        <section class="py-5 bg-light">
            <div class="container  ">
                <div class="row text-center d-flex align-items-center">
                    <h2 class="fw-bolder text-success">Categorie</h2>
                    <p class="lead fw-normal text-muted mb-5">Goditi lo shopping!</p>
                </div>

                <div class="row d-flex justify-content-center align-items-center">

                    <div class="col-12 col-md-5 text-center ">
                        <img class="img-fluid object-fit-cover border rounded  mw-100 "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;"
                            src="\immagini\modadonna (2).jpg" alt="..." />
                        <h5 class="fw-bolder text-success pt-4">Moda donna</h5>
                        <a href="{{ route('index') }}" class="btn btn-outline-success">Vai al catalogo
                        </a>
                    </div>


                    <div class="col-12 col-md-5 text-center ">
                        <img class="img-fluid object-fit-cover border rounded  mw-100 "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;"
                            src="\immagini\modauomo.jpg" alt="..." />
                        <h5 class="fw-bolder text-success pt-4">Moda uomo</h5>
                        <a href="{{ route('index') }}" class="btn btn-outline-success">Vai al catalogo
                        </a>
                    </div>

                </div>

                <div class="row d-flex justify-content-center align-items-center mt-4">

                    <div class="col-12 col-md-5 text-center ">
                        <img class="img-fluid object-fit-cover border rounded  mw-100 "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;"
                            src="\immagini\elettronica.jpg" alt="..." />
                        <h5 class="fw-bolder text-success pt-4">Elettronica</h5>
                        <a href="{{ route('index') }}" class="btn btn-outline-success">Vai al catalogo
                        </a>
                    </div>
                    <div class="col-12 col-md-5 text-center ">
                        <img class="img-fluid object-fit-cover border rounded  mw-100 "
                            style="box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;"
                            src="\immagini\gioielli.jpg" alt="..." />
                        <h5 class="fw-bolder text-success pt-4">Gioielli</h5>
                        <a href="{{ route('index') }}" class="btn btn-outline-success">Vai al catalogo
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <x-footer />


</x-layout>
