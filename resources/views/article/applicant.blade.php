
@extends('../layouts.app')
<style>
   .top-left { 
			top: 0%; 
			left:25%; 
		} 
		
    .top-right { 
        top: 0%; 
        right: 25%; 	
    }
</style>

@section('content')
<div class="container">
<h3><u>Detailled informations</u> </h3>

<ul class="jumbotron">
	
	<h3><u>{{$applicant->firstname}} Informations:</u></h3> &nbsp;&nbsp; 
	<li>Appelation: {{$applicant->appelation}}</li>
	<li>firstname: {{$applicant->firstname}}</li>
	<li>lastname: {{$applicant->lastname}}</li>
	<li>dateApplicationStarted: {{$applicant->dateApplicationStarted}}</li>
	<li>dateApplicationCompleted: {{$applicant->dateApplicationCompleted}}</li>
	<li>email: {{$applicant->email}}</li>
	<li>skypeId: {{$applicant->skypeId}}</li>
	<li>gender: {{$applicant->gender}}</li>
	<li>dob: {{$applicant->dob}}</li>
	<li>grade: {{$applicant->school}}</li>
	<li>identityDocument: {{$applicant->identityDocument}}</li>
	<li>address: {{$applicant->address}}</li>
	<li>cityResidence: {{$applicant->cityResidence}}</li>
	<li>countryResidence: {{$applicant->countryResidence}}</li>
	<li>nationality: {{$applicant->nationality}}</li>
	<li>linkedInURL: {{$applicant->linkedInURL}}</li>
	<li>giHubURL: {{$applicant->giHubURL}}</li>
	<li>professionalStatus: {{$applicant->professionalStatus}}</li>
	<li>maritalStatus: {{$applicant->maritalStatus}}</li>
	<li>preferredCountryPostProgram: {{$applicant->preferredCountryPostProgram}}</li>
	<li>motivationLetter: {{$applicant->motivationLetter}}</li>
	<li>scope1: {{$applicant->scope1}}</li>
	<li>scope2: {{$applicant->scope2}}</li>
	
</ul>
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{$applicant->id}}">
		<div class="position-absolute bottum-right">	
			<input class="btn btn-danger"  type="submit" name="delete" value="Delete">
		</div> 	
	</form>
</div>
@endsection

