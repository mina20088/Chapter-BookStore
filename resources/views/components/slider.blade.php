<style>

</style>
<div class="swiper .books">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach($ranked as $rank)
            <div class="swiper-slide">
                   <!--TODO: add the book condition using loop -->
                    <div class="card">
                        <img src="{{ $rank->cover_image }}" class="card-img-top img-fluid" alt="...">
                        <span class="badge text-bg-primary z-1 d-inline w-25">Primary</span>
                        <div class="card-body">
                            <h2 class="card-title">{{ $rank->title }}</h2>
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
