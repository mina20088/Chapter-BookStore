<div class="rating-stars">
    @for($i = 0; $i<$maxRating; $i++)
        <a wire:click="setRating({{ $i }})" style="cursor: pointer; color:orange ">
            @if($i < $rating)
                <i class="fa-solid fa-star"></i>
                <!--&#9733;-->
            @else
                <!--&#9734;-->
                <i class="fa-regular fa-star"></i>
            @endif
        </a>
    @endfor
</div>
