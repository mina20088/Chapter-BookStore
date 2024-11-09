<div class="rating-stars">
    @for($i = 0; $i<$maxRating; $i++)
        <a wire:click="setRating({{ $i }})" style="cursor: pointer; color:orange ">
            @if($i < $rating)
                &#9733;
            @else
                &#9734;
            @endif
        </a>
    @endfor
</div>
