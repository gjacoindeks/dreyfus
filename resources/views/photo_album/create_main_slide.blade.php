@extends('photo_album.master')

@section('contenido')


	<div class="canvas contact-page">
      <div class="contact-bg col-md-8 col-sm-12">
        <img src="img/dolon.jpg" alt="" width="100%">
      </div>
      <div class="col-md-4 col-sm-12 contact-bar">
        <img class="map-img" src="img/map.jpg" alt="" width="100%">
        <h3 class="interest-text text-center"> Thanks for your Interest </h3>
        <br>
        <div class="col-md-6 add-text">
        44, Akhaliya Rd. Akhaliya
        CA 94019. USA CO.
        (561) 456-4567
        </div>
        <div class="col-md-6 add-text">
        Summer Office Ours
        (March-October)
        Mon-Fri (am-6am PST)
        </div>
        <br>
        <div class="col-sm-12 col-md-12">
            <form method="POST" action="{{route('imagenes.store')}}" enctype="multipart/form-data">
            	{{ csrf_field() }}
                <div class="controls controls-row">
                   <div class="">
                    <div class="">
					<input type="file" id="input" name="imagen" multiple="true" onchange="handleFiles(this.files)">  </div>
                     
                </div>
             
                <div class="controls btn-full">
                    <button id="contact-submit" name="submit" value="Submit" type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
      </div>
    </div>

	

@stop