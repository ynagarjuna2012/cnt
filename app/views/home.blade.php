<!doctype html>
<html lang="en">

	<head>
	<meta charset="UTF-8">
	<title>clickntoor-Students hub to plan and enjoy trips</title>
	<meta class="description"> </meta>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	{{ stylesheet_link_tag() }}
    {{ javascript_include_tag() }}

    </head>

<body>
<div class="content">

	<hr id="top">
	<div class="page1">

	<div class="col-xs-1"></div>
	<a href="#"  id="logo_anchor" ">{{HTML::image('assets/logobot.png','logo', array('id'=>'logo'))}}</a>
  	<ul class="list-inline" id="nav-top">
    <li><a href="#">LOGIN</a></li>
    <li><a href="#">SIGN UP</a></li>
    <li><a href="#">JOIN OUR TEAM</a></li>
  	</ul>  

	<div class="col-xs-12"><h2>Discover great places to hangout with your friends around your college </h2></div>

	<form class="form-inline">
       
        <a href="#"><div class="input-group">
          <input type="text" class="form-control input-lg" placeholder="Search...">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-search"></span>
          </div>
        </div></a>
       
	</form>
</div>	
</div>
<div id="about-container">
		
  <p id="signup">Sign up to get more out of clickntoor</p>
  <div id="about">
    <div class="about-box" id="img1">{{ HTML::image('assets/aboutus/aboutuspicsall-01.png','Follow friends for trusted reviews')}}<span class="img-caption">Follow friends for
trusted reviews</span></div>
    <div class="about-box" id="img2">{{HTML::image('assets/aboutus/aboutuspicsall-02.png','Comment,Review and share your travel Expereiences')}}<span class="img-caption">See comments,Reviews
and share your travel experiences with your friends</span></div>
    <div class="about-box" id="img3" >{{HTML::image('assets/aboutus/aboutuspicsall-03.png','Invite your friends of other college to trips')}}<span class="img-caption">Invite  your friends
of other colleges for trips</span></div>
</div>
</div>
{{-- This is a multi-line comment in blade template 


!!!!!!!!!!!!!!!!!!Extend this page by just placing the html content with fresh starting div here and writing corresponding css in home.css 
	Image linking

	{{HTML::image('assets/folder_name/Image_name.png','alt_eqvialent_in_html',array('class_or_id'=>'id_or_class_ name'))
	background images can linked as 
	background:('image.png')             ------------->when image is situated in app/assets/images
	background:('/folder_name/image.png')------------->when image is situtated in app/assets/folder_name/image.png
	
	!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--}}

@include('navigation')
	
</body>
</html>