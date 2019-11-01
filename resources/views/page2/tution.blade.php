@extends('../layouts.app')
 
@section('content')
<div class="container x-1">
      <h4>Tuition </h4>
<br>
<div class="col ">
        <ul class="nav nav-tabs nav-justified md-tabs indigo" id="myTabJust" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just"
              aria-selected="true"> <h4>BOOTCAMP</h4></a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" id="contact-tab-just" data-toggle="tab" href="#contact-just" role="tab" aria-controls="contact-just"
              aria-selected="false"><h4>ADVISORY</h4></a>
          </li>
        </ul>
        <div class="tab-content card pt-5" id="myTabContentJust">
            <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
              <p class="justify m-2">you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro
                synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                retro keffiyeh dreamcatcher synth.  synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. 
                Reprehenderit butcher Comme indiqué précédemment la question de la stratégie de communication revient 2 fois dans ce top 5, 
                indicateur d’un intérêt certain pour la question, avec des recherches précises (« les caractéristiques de la communication digitale », 
                « caractéristiques d’une stratégie digitale », « la stratégie des mots clés associés en communication digitale », « caractéristique de 
                la communication digitale »).
              </p>
            </div>
          
            <div class="tab-pane fade" id="contact-just" role="tabpanel" aria-labelledby="contact-tab-just">
              <p class="justify m-2">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro
                fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
                skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings
                williamsburg carles vegan helvetica. Reprehenderit butcher.
                Penser aux questions que se posent les internautes quand on rédige un titre d’article de blog est une bonne
                manière d’optimiser son référencement, tout en apportant un contenu qui apporte une réponse à une préoccupation concrète de son audience cible.
              </p>
            </div> 
        </div>
      </div>
      </div>
@endsection