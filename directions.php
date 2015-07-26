<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>American Chronic Pain Association - Boston Chapter</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAkgILOEVwkjfFsx7QeRUnchTQpbje7hmvjDlXSnqlNWxYRcLx_xR_D5R10WRSSUhMsB3lyn2SYy24eQ" type="text/javascript"></script>
<script type="text/javascript">

    //<![CDATA[
// http://stevemorse.org/jcal/latlon.php - tool to get Lat and Long codes
var centerMap = new GLatLng(42.417196,-71.168398);

//Robins Library Variables
var robbinsLibrary = new GLatLng(42.416169, -71.155983);
// Create our custom marker icon
var robbinsIcon = new GIcon(G_DEFAULT_ICON);
robbinsIcon.image = "image/markerBlueR.png";
markerOptions = { icon:robbinsIcon };
var robbinsMarker = new GMarker(robbinsLibrary,markerOptions);
var robbinsMessage = "<a href=\"http://www.robbinslibrary.org\" target=\"_blank\">Robbins Library</a><br />700 Mass Ave<br />Arlington, MA 02476";

//Fox Library Variables
var foxLibrary = new GLatLng(42.405519,-71.141689);
// Create our custom marker icon
var foxIcon = new GIcon(G_DEFAULT_ICON);
foxIcon.image = "image/markerBlueF.png";
markerOptions = { icon:foxIcon };
var foxMarker = new GMarker(foxLibrary,markerOptions);
var foxMessage = "<a href=\"http://www.robbinslibrary.org/about/fox-branch\" target=\"_blank\">Fox Library</a><br />175 Mass Ave<br />East Arlington, MA 02474";

//Jefferson House Variables
var jeffersonHouse = new GLatLng(42.4154392,-71.1525275);
// Create our custom marker icon
var jeffersonIcon = new GIcon(G_DEFAULT_ICON);
jeffersonIcon.image = "image/markerBlueJ.png";
markerOptions = { icon:jeffersonIcon };
var jeffersonMarker = new GMarker(jeffersonHouse,markerOptions);
var jeffersonMessage = "<a href=\"http://www.town.arlington.ma.us/public_documents/ArlingtonMA_Rental/JeffersonCutterHouse/index\" target=\"_blank\">Jefferson Cutter House</a><br />Corner of Mystic St. and Mass Ave<br />Arlington, MA 02476";

//Sunrise Assisted Living
var salHouse = new GLatLng(42.424595,-71.184024);
// Create our custom marker icon
var salIcon = new GIcon(G_DEFAULT_ICON);
salIcon.image = "image/markerBlueS.png";
markerOptions = { icon:salIcon };
var salMarker = new GMarker(salHouse,markerOptions);
var salMessage = "<a href=\"http://www.sunriseseniorliving.com\" target=\"_blank\">Sunrise Assisted Living</a><br />1395 Mass Ave<br />Arlington, MA 02476";

// Arlington Senior Center
var asCenter = new GLatLng(42.415132, -71.156809);	
// Create our custom marker icon
var acIcon = new GIcon(G_DEFAULT_ICON);
acIcon.image = "image/markerBlueA.png";
markerOptions = { icon:acIcon };
var acMarker = new GMarker(asCenter,markerOptions);
var acMessage = "<a href=\"http://arlingtonseniorsassociation.org\" target=\"_blank\">Arlington Senior Center</a><br />27 Maple Street<br />Arlington, MA 02476";

function load() {
	if (GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("map"));
    	//zoom controls
		map.addControl(new GLargeMapControl());
    	//center the map halfway between the two libraries	
		map.setCenter(centerMap, 14);
		
		createMarkers(map);
	}
}

function createMarkers(map) {
	GEvent.addListener(robbinsMarker, "click", function() {
    	map.openInfoWindowHtml(robbinsLibrary, robbinsMessage);
  	});
	//GEvent.addListener(foxMarker, "click", function() {
    //	map.openInfoWindowHtml(foxLibrary, foxMessage);
  	//});
	GEvent.addListener(jeffersonMarker, "click", function() {
    	map.openInfoWindowHtml(jeffersonHouse, jeffersonMessage);
  	});
	GEvent.addListener(salMarker, "click", function() {
    	map.openInfoWindowHtml(salHouse, salMessage);
  	});
  GEvent.addListener(acMarker, "click", function() {
      map.openInfoWindowHtml(asCenter, acMessage);
    });
	map.addOverlay(robbinsMarker);
	//map.addOverlay(foxMarker);
	//map.addOverlay(jeffersonMarker);
	map.addOverlay(salMarker);
  map.addOverlay(acMarker);	
  //show the Robbins libary Info Window by default
   //map.openInfoWindowHtml(robbinsLibrary, robbinsMessage);
}

    //]]>
</script>

<link rel="shortcut icon" href="favicon.ico" >
<link href="include/acpa.css" rel="stylesheet" type="text/css">
<style type="text/css">
#map {
	width: 725px; 
	height: 650px;
	clear: both;
}
.address {
	float:left;
	width:32%;
	height:75px;
}
</style>

</head>
<body onload="load()" onunload="GUnload()">
<div id="background">
	<div id="mainText">
		
<div id="subtitle">Meeting Locations</div>
		
    <div id="content"> Our Meetings are usually held at the Robbins Library in 
      Arlington, Ma. with the occasional meeting at the Arlington Senior Center or Sunrise Assisted Living.<br />
      <br />
      <div class="address"><a href="http://www.robbinslibrary.org" target="_blank">Robbins 
        Library</a><br />
        700 Mass Ave<br />
        Arlington, MA 02476</div>
      <!-- div class="address"><a href="http://www.robbinslibrary.org/about/fox-branch" target="_blank">
      	Fox Library</a><br />
        175 Mass Ave<br />
        Arlington, MA 02474</div -->
      <div class="address"><a href="http://arlingtonseniorsassociation.org" target="_blank">
      	Arlington Senior Center</a><br />
        27 Maple Street<br />
		Arlington, MA 02476</div>
      <div class="address">
        <a href="http://www.sunriseseniorliving.com" target="_blank">Sunrise Assisted Living</a><br />
      	1395 Mass Ave<br />
      	Arlington, MA 02476
      </div>

<!-- the map layer is dynamically loaded with a google map - leave blank -->
			<div id="map"></div>
		</div>
	</div>
</div>
<?php include ('include/acpa.php'); ?>

</body>
</html>
