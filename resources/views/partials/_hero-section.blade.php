<!--hero section-->
<section class="hero-section py-sm-7 px-sm-7 px-sm-5 py-md-5 py-lg-6">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-md-center align-items-lg-end">
                <div class="hero-section-writings d-flex flex-column justify-content-md-center">
                    <span class="display-4 text-danger">New Release</span>
                    <h1 class="display-1 text-secondary">{{ $new->title  }}</h1>
                    <p class="text-secondary mb-sm-5">{{ $new->description }}</p>
                    <div class="hero-section-price d-flex justify-content-sm-center gap-4">
                        <button class="btn btn-outline-danger btn-lg fs-2 py-lg-2"><a class="text-decoration-none" href="">EGP 100</a></button>
                        <button class="btn btn-danger btn-lg fs-2 py-lg-2"><a class="text-decoration-none">Read More..</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="new-release-book-cover-wrapper d-flex justify-content-md-center">
                    <!--{{ \Illuminate\Support\Facades\Vite::asset("/resources/images/Silince.png") }}-->
                    <img class="new-release-book-cover img-fluid" src="{{ $new->cover_image }}" alt="new Relase">
                </div>
            </div>
        </div>
    </div>
</section>
