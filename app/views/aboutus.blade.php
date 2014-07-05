@extends('master')

@section('title','About Us')
@section('content')
<div class="covercontainer">
<div id="aboutuscover">

</div>
</div>
<div class="aboutcontainer">
<p id="title1">clickntoor is an initiative to organize hastle free trips to places near you</p>
<div id="page1">
<div class="about">{{HTML::image('assets/aboutus/aboutuspicsall-01.png','Follow travellers for trusted reviews',array('class'=>'about-image'))}}
<div class="img-caption">Follow travellers for trusted reviews</div></div>
<div class="about">{{HTML::image('assets/aboutus/aboutuspicsall-02.png','See comments,Reviews
ans share your travel experiences',array('class'=>'about-image'))}}
<div class="img-caption">See comments,Reviews
and share your travel experiences</div></div>
<div class="about">{{HTML::image('assets/aboutus/aboutuspicsall-06.png','Find Exiciting places
around you with a click',array('class'=>'about-image'))}}
<div class="img-caption">Find Exiciting places
around you with a click</div></div>
<div class="about">{{HTML::image('assets/aboutus/aboutuspicsall-03.png','Invite your friends
of other colleges for trips',array('class'=>'about-image'))}}
<div class="img-caption">Invite your friends
of other colleges for trips</div></div>
<div class="about">{{HTML::image('assets/aboutus/aboutuspicsall-04.png','We will take care of your
travel and stay',array('class'=>'about-image'))}}
<div class="img-caption">We will take care of your
travel and stay</div></div>
<div class="about">{{HTML::image('assets/aboutus/aboutuspicsall-05.png','Use our responsive
website with ease',array('class'=>'about-image'))}}
<div class="img-caption">Use our responsive
website with ease</div></div>
</div>
</div>
<div id="page7">
	{{HTML::image('assets/twitter.jpg','twitterpage',array('id'=>"twitter"))}}<span id="tweet">follow us on twitter</span>
	<a href="twitter.com/clickntoor">
</div>	





{{--!!!!!!!!Keep the html content in the @section('content ')division--
	Since we are using the master file without code reptetion there is a problemwith @include
	so for html you want to specify the height of the container sothat browser renders correctly other wise
	the bottom navigation will go up

	I have added (.aboutcontainer--class) for the responsiveness
	modify the media quiries which sets tfor the whole page 

	Use the good font for the "singup to get moreout of clickntoor "
--}}
  
  
@stop

