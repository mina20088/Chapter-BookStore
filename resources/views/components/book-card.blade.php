@props(['image','title','rating','category','read-more',
'price']))

<div class="card">
    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/Silince.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <div class="d-flex flex-column text-start">
            <a href class="card-title fw-bold">Silence</a>
            <div class="d-flex justify-content-sm-between align-items-sm-center">
                
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                </div>
                <div class="mt-sm-1">
                    <a href="#">Horror</a>
                </div>

            </div>

            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card-footer d-flex border-0 bg-white justify-content-sm-between">
        <a href="#" class="btn btn-warning">Read More...</a>
        <p>Price: 2000 EGP </p>
    </div>
</div>
