@extends('layouts.front')

@section('content')
@include('layouts.slider')

<!--slidershow-->

<!--end slider-->
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">

                    @foreach($Sliders as $key=>$sliders)
                    <div class="item {{$key == 0 ? 'active' : ''}}">
                <div class="item my-5">
                    <div class="card">
                    <img src="{{ asset('GeschirrBilder/'. $sliders->bild) }}" width="100px" height="200px"   alt="..." >
                    <div class="card-body text-center">
                        <a href="/Geschirr.show/{{ $sliders->id }}"><h5 class="font-weight-bold text-truncate">{{ $sliders->name }}</h5></a>
                    <h6 class="font-italic mr-2">{{ $sliders->preis }}</h6>
                    <dd>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
</div>

@endsection
@section('scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <script type="text/javascript">
    jQuery(document).ready(function($){
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        nav:true,
        dots:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:3
          },
          1000:{
            items:3
          }
        }
      })
    })
    </script>


@endsection
