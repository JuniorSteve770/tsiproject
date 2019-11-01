@extends('../layouts.app')
  <style>
 .top-right { 
      top: 0%; 
      right: 01%; 	
 }
 
 </style>

@section('content')
<div class="container">
      <div class="position-relative h-90"> 
          
            <h2>Advisory</h2> <hr>
            <div class="position-absolute top-right">           
                  <a id="but" padding=" 32px" href="{{ url('/register') }}" class="btn btn-primary btn-lg active" 
                  role="button" aria-pressed="true">  Apply to the Program </a>    
            </div>
      </div>
      <br>
      {{-- <div class="text-right"> 
                  
      <button type="button" href="#" class="btn btn-primary" style="width:200px; height:60px; " >
      <b>Apply</b> 
      </button>
      </div> <br> --}}
      <div class="row m-2 text-justify">
      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro
                  synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                  retro keffiyeh dreamcatcher synth.  synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
            </p>
            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro
                  synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                  retro keffiyeh dreamcatcher synth.  synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
            </p>
            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro
                  synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                  retro keffiyeh dreamcatcher synth.  synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
            </p>
            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro
                  synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                  retro keffiyeh dreamcatcher synth.  synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
            </p>
      </div>
</div>
@endsection