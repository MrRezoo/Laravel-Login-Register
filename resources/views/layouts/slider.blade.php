<!-- slider-->
<div class="card">
    <div class="card-body">
        <div class="owl-carousel owl-theme" id="owl-carousel-13">

            @foreach($portfolios as $item)
            <div class="item"><img src='{{$item->image}}' alt="">
            </div>
                @endforeach

        </div>
    </div>

</div>
