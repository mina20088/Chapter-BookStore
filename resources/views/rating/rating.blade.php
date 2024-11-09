<div class="rating-stars">
    @for($i = 1;  $i<= $maxRating; $i++)
        <a wire:click="setRating({{ $i }})">
            @if($i <= $rating)
                &#9733;
            @else
                &#9734;
            @endif
        </a>
    @endfor
</div>
