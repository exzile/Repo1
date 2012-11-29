<?php
//adapted from http://detectmobilebrowsers.com/
//background from http://bgpatterns.com/
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
   if(isset($_GET['full'])==false){
        header( 'Location: homepage.php' ) ;
   }
}
$full=true;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Project</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="themes/themer.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile.structure-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		
		<link rel="stylesheet" href="CSS/css1_full.css" />
	
	
		
</head>

<body onload = "showPosition(41.413091,-82.072549);" data-theme="a" data-role="page">

<div id="header" data-role="header">
	<h1>Lorain County Community College Map</h1>

</div>

<div id="mapholder"></div>

 <div id="sidenav" >
	
	<ul data-role="listview" class="list" >
	<input type="button" data-inline="true"  data-role="button" onclick="moveMarker(41.413091,-82.072549);"value="Court Yard"/>
	<input type="button"data-inline="true" data-role="button" onclick="moveMarker(41.414604,-82.072055);"value="FH/EC Building"/>
	<input type="button"data-inline="true" data-role="button"  onclick="moveMarker(41.413489,-82.072463);"value="BU Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.415223,-82.072495);"value="PE Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.414193,-82.073922);" value="LC Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.413469,-82.073482);" value="CC Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.413453,-82.071658);" value="LR Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.413252,-82.070854);" value="UC Building"/>
	<input type="button" data-inline="true" data-role="button"onclick="moveMarker(41.414185,-82.069631);" value="PP Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.413928,-82.070253);" value="MS Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.412174,-82.071605);" value="HS Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.411627,-82.071733);" value="SC Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.411779,-82.073557);" value="PC Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.412125,-82.073407);"value="AT Building"/>
	<input type="button" data-inline="true" data-role="button" onclick="moveMarker(41.410943,-82.07095);" value="SP Building"/>
	<input type="button" data-inline="true" data-role="button"onclick="moveMarker(41.409196,-82.07109);" value="EIC Building"/>
	
	
	</ul>
 </div>



<div id="info">
	
	<div id="textBody">
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>

var marker;
var map;
var lat;
var lon;
var currentLocMarker;
var initialLocation;
var clat;
var clong;

function getLocation()
  {
  if (navigator.geolocation)
    {
	
     navigator.geolocation.getCurrentPosition(getCoords);
	 
    }
  else{}
  }

  function getCoords(position){
  clat = position.coords.latitude;
  clong = position.coords.longitude;
    marker=new google.maps.Marker({position:latlon, map:map});
  
  
  }
function moveMarker(Lat, Long)
  {
  lat=Lat;
  lon=Long;
  
  latlon=new google.maps.LatLng(lat, lon)
 
  marker.setPosition(latlon);
  }

function showPosition(Lat, Long)
  {
  lat=Lat;
  lon=Long;
  latlon=new google.maps.LatLng(lat, lon)
  mapholder=document.getElementById('mapholder')
  

  var myOptions={
	  center:latlon,zoom:16,
	  mapTypeId:google.maps.MapTypeId.SATELLITE,
	  mapTypeControl:false,
	  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
	  };
   map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
   marker=new google.maps.Marker({position:latlon, map:map});
   getLocation();
    
  }

function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML="The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="An unknown error occurred."
      break;
    }
  }
  function changeMapSize(){
  
  }
</script>


	
	</div>
	
	
</div>

	 

</body>
</html>
