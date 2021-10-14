@extends('layouts.front')
@section('title')
Willkommen bei Shop
@endsection
@section('content')
@include('layouts.slider')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="item"><h4>1</h4></div>
                <div class="item"><h4>2</h4></div>
                <div class="item"><h4>3</h4></div>
                <div class="item"><h4>4</h4></div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <script>
    jQuery(document).ready(function($){
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
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

<style>
    .owl-carousel .item {
      height: 10rem;
      background: #4DC7A0;
      padding: 1rem;
    }
    .owl-carousel .item h4 {
      color: #FFF;
      font-weight: 400;
      margin-top: 0rem;
     }
    </style>
@endsection
