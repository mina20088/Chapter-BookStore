<section class="highly-ranked-books-section bg-dark mt-sm-5 mb-md-10 px-md-0 py-lg-7 py-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center">Highly Rated Reads</h1>
                <div class="swiper .books">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($ranked as $rank)
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="{{ $rank->cover_image }}" class="card-img-top img-fluid" alt="...">
                                    <span id="badge" class="badge text-bg-primary z-1 d-inline">Primary</span>
                                    <div class="card-body">
                                        <h2 class="card-title">{{ $rank->title }}</h2>
                                        <div class="d-flex justify-content-between">
                                            <a href="">{{ $rank->genre->name }}</a>
                                            <livewire:rating.rating/>
                                        </div>
                                        <p class="card-text">{{ $rank->excrept }}</p>
                                        <a href="#" class="btn btn-primary">buy now </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>
        </div>
    </div>
</section>

