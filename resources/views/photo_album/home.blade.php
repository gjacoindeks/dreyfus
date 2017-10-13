@extends('photo_album.master')

@section('contenido')

	<!-- Indicators -->
        <ol class="carousel-indicators xtra-border">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    {{--    @foreach($imagen as $decos)

          {{$decos->imagen}}

       @endforeach --}}

        <!-- Wrapper for Slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('img/bg.jpg');"></div> -->
                <img src="{{asset('assets_photo_album/img/bg.jpg')}}" alt="First slide">
                <div class="carousel-caption">
                  <h2 class="sub-title-home">Nosotros tomamos fotografias</h2>
                  <h1 class="title-home">We Make It</h1>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('img/bg1.jpg');"></div> -->
                <img src="{{asset('assets_photo_album/img/bg1.jpg')}}" alt="Second slide">
                <div class="carousel-caption">
                  <h2 class="sub-title-home">We Don't Take Photograph</h2>
                  <h1 class="title-home">We Make It</h1>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <!-- <div class="fill" style="background-image:url('img/bg3.jpg');"></div> -->
                <img src="{{asset('assets_photo_album/img/bg3.jpg')}}" alt="Third slide">
                <div class="carousel-caption">
                  <h2 class="sub-title-home">We Don't Take Photograph</h2>
                  <h1 class="title-home">We Make It</h1>
                </div>
            </div>
        </div>
    </header>
      <!-- <div class="navbar navbar-default navbar-fixed-top">
        
      </div> -->

      <div class="container page-container">
        <div class="home-page-header">
         
         <!-- <div class="col-md-4 col-md-offset-4"><img src="img/zigzag.png" width="400" height="30"></div> -->
        </div>
        
      </div><!-- /.container -->
    </div>
@stop