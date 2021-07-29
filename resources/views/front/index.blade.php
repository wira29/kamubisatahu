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
                <div class="description text-white">
                    <div class="container p-5 d-flex justify-content-center">
                        <div class="col-lg-9">
                            <h1 class="mb-4">Temukan berita menarik setiap hari</h1>
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reprehenderit earum dignissimos! Vel ullam nostrum debitis unde assumenda officiis similique in minima illo laboriosam, voluptates, aspernatur rerum! Suscipit, veniam dicta.</p>
                            <a href="" class="btn btn-light">See more</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1476242906366-d8eb64c2f661?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1008&q=80" class="d-block w-100" alt="...">
                <div class="description text-white">
                    <div class="container p-5 d-flex justify-content-center">
                        <div class="col-lg-9">
                            <h1 class="mb-4">Temukan berita menarik setiap hari</h1>
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reprehenderit earum dignissimos! Vel ullam nostrum debitis unde assumenda officiis similique in minima illo laboriosam, voluptates, aspernatur rerum! Suscipit, veniam dicta.</p>
                            <a href="" class="btn btn-light">See more</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1585241936939-be4099591252?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
                <div class="description text-white">
                    <div class="container p-5 d-flex justify-content-center">
                       <div class="col-lg-9">
                            <h1 class="mb-4">Temukan berita menarik setiap hari</h1>
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reprehenderit earum dignissimos! Vel ullam nostrum debitis unde assumenda officiis similique in minima illo laboriosam, voluptates, aspernatur rerum! Suscipit, veniam dicta.</p>
                            <a href="" class="btn btn-light">See more</a>
                        </div>
                    </div>
                </div>
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
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="">Berita</h3>
                    <p class="text-secondary mb-4">Terakhir diupdate 26 Juli 2021</p>

                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-lg-12 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <img class="blog-image" src="{{ $blog->image }}" alt="">
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="col-lg-12">
                                                    <h5>{{ $blog->title }}</h5>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="text-secondary"><?= substr(
                                                        $blog->description,
                                                        0,
                                                        150
                                                    ) ?>......</p>
                                                </div>
                                                <div class="col-lg-12 d-flex justify-content-end">
                                                    <a href="<?= getenv(
                                                        'APP_URL'
                                                    ) ?>home/<?= $blog->slug ?>" class="btn btn-dark">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <nav aria-label="...">
                            <ul class="pagination">
                                <?= isset($_GET['page'])
                                    ? ($_GET['page'] != 1
                                        ? '<li class="page-item ">
                                <a class="page-link" href="' .
                                            $blogs->previousPageUrl() .
                                            '" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>'
                                        : '')
                                    : '' ?>

                            <?php for (
                                $i = 1;
                                $i <= ceil($blogs->total() / $blogs->perPage());
                                $i++
                            ): ?>
                                <li class="page-item <?= $i ==
                                $blogs->currentPage()
                                    ? 'active'
                                    : '' ?>"><a class="page-link" href="{{ $blogs->path() }}?page={{ $i }}">{{ $i }}</a></li>
                            <?php endfor; ?>

                            <?= $blogs->currentPage() >= 1 &&
                            $blogs->currentPage() < $blogs->lastPage()
                                ? '<li>
                            <a class="page-link" href="' .
                                    $blogs->nextPageUrl() .
                                    '">Next</a>
                                </li>'
                                : '' ?>
                            </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3 class="mb-5 mt-1">Kategori</h3>

                    <div class="card">
                        <div class="card-body">

                            @foreach($kategori as $kt)
                                <a href="">{{ $kt->category_name }}</a>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
