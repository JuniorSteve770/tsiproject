@extends('../layouts.app')
 
@section('content')
<div class="container">
      <h4>Tuition </h4>
<br>
<div class="col m-4">
        <ul class="nav nav-tabs nav-justified md-tabs indigo" id="myTabJust" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
              aria-selected="true"><h4>Most popular Articles</h4></a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just" role="tab" aria-controls="contact-just"
              aria-selected="false"><h4>The Latest Articles</h4></a>
          </li>
        </ul>
        <div class="tab-content card pt-5" id="myTabContentJust">
            <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
              <p>you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro
                synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                retro keffiyeh dreamcatcher synth.  synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
              </p>
            </div>
          
            <div class="tab-pane fade" id="contact-just" role="tabpanel" aria-labelledby="contact-tab-just">
              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro
                fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
                skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings
                williamsburg carles vegan helvetica. Reprehenderit butcher
              </p>
            </div> 
        </div>
      </div>
      </div>
@endsection