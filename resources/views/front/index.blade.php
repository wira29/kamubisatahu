@extends("template.layout")

@section("content")
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1476242906366-d8eb64c2f661?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1008&q=80" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1585241936939-be4099591252?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="">News</h3>
                    <p class="text-secondary mb-4">Last updated 26 July 2021</p>

                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <img class="blog-image" src="https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="col-lg-12">
                                                <h5>Belajar CRUD dengan PHP</h5>
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates minima perspiciatis quod aut nihil autem dolorem excepturi molestias sequi alias provident corrupti, vero qui eum assumenda debitis aperiam aliquam magni?...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <img class="blog-image" src="https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="col-lg-12">
                                                <h5>Belajar CRUD dengan PHP</h5>
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates minima perspiciatis quod aut nihil autem dolorem excepturi molestias sequi alias provident corrupti, vero qui eum assumenda debitis aperiam aliquam magni?...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <img class="blog-image" src="https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="col-lg-12">
                                                <h5>Belajar CRUD dengan PHP</h5>
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates minima perspiciatis quod aut nihil autem dolorem excepturi molestias sequi alias provident corrupti, vero qui eum assumenda debitis aperiam aliquam magni?...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3 class="mb-5 mt-1">Categories</h3>

                    <div class="card">
                        <div class="card-body">
                            <a href="">Tecnologhy</a>
                            <hr>
                            <a href="">Tecnologhy</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
