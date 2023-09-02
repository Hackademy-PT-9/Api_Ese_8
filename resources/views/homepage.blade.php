<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>
    <x-navbar />

    <main class="flex-shrink-0 text-bg-dark p-3">
        <!-- Header-->
        <header class="py-5">
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
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="fw-bolder">Our team</h2>
                    <p class="lead fw-normal text-muted mb-5">Dedicated to quality and your success</p>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">Ibbie Eckart</h5>
                            <div class="fst-italic text-muted">Founder &amp; CEO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">Arden Vasek</h5>
                            <div class="fst-italic text-muted">CFO</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">Toribio Nerthus</h5>
                            <div class="fst-italic text-muted">Operations Manager</div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4"
                                src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">Malvina Cilla</h5>
                            <div class="fst-italic text-muted">CTO</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />


</x-layout>
