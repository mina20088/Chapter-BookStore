<div class="">
    <div class="rating-stars">
        @for($i = 1; $i < $maxRating; $i++)
            <a wire:click="setRating({{ $i }})" class="text-decoration-none">
                @if($i <= $rating)
                    <i class="fa-solid fa-star"></i>
                @else
                    <i class="fa-regular fa-star"></i>
                @endif
            </a>

        @endfor
    </div>
    <div class="current-rating">
     {{--   <strong>Rating: {{ $rating }}</strong>--}}
    </div>
</div>
