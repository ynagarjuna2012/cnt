<!doctype html>
<html lang="en">
@include('head')
<body>
@include('top')
<div class="contentcontainer">
@yield('content')
</div>

@include('navigation')

</div>  
</body>
 		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</html>


{{--DOn't modify this this is the master layout which wil be replicatred on the aboutus,careers,partners etc.,,
      Include copyright etc.,, in the navigation and facebook and google+ and youtube links icons

      www.facebook.com/clickntoor
      www.google.com/+clickntooroffical
      www.youtube.com                                                       --}}