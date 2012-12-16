<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>American Chronic Pain Association - Boston Chapter</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAkgILOEVwkjfFsx7QeRUnchTQpbje7hmvjDlXSnqlNWxYRcLx_xR_D5R10WRSSUhMsB3lyn2SYy24eQ" type="text/javascript"></script>
<script type="text/javascript">

    //<![CDATA[

var centerMap = new GLatLng(42.3946680,-71.1460530);

var CIDC_Office = new GLatLng(42.3946680,-71.1460530);
// Create our custom marker icon
var CIDC_Icon = new GIcon(G_DEFAULT_ICON);
CIDC_Icon.image = "image/CIDC_marker.gif";
markerOptions = { icon:CIDC_Icon };
var CIDC_Marker = new GMarker(CIDC_Office,markerOptions);

function load() {
	if (GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("map"));
    	//zoom controls
		map.addControl(new GSmallMapControl());
    	//center the map halfway between the two libraries	
		map.setCenter(centerMap, 14);
		
		map.addOverlay(CIDC_Marker);
	}
}
    //]]>
</script>

<link rel="shortcut icon" href="favicon.ico" >
<link href="include/acpa.css" rel="stylesheet" type="text/css">
<style type="text/css">
#map {
	width: 240px; 
	height: 240px;
	clear: both;
}
.address {
	float:left;
	width:50%;
	height:70px;
}
</style>

</head>
<body onload="load()" onunload="GUnload()">
<div id="background">
	<div id="mainText">
		
<div id="subtitle">Meeting Locations</div>
		
    <div id="content"> Our Meetings are usually held at the Robbins Library in 
      Arlington, Ma. with the occasional meeting at the Fox Library.<br />
      <br />
      <div class="address"><a href="http://www.robbinslibrary.org" target="_blank">Robbins 
        Library</a><br />
        700 Massachusetts Avenue<br />
        Arlington, MA 02476</div>
      <div class="address"><a href="http://www.robbinslibrary.org/about/fox-branch" target="_blank">Fox 
        Library</a><br />
        175 Massachusetts Avenue<br />
        Arlington, MA 02474</div>

<!-- the map layer is dynamically loaded with a google map - leave blank -->
			<div id="map"></div>
		</div>
	</div>
</div>
<?php include ('include/acpa.php'); ?>

</body>
</html>
