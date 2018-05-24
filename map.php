<?php
SESSION_START();
$rest_id=$_REQUEST['rest_id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6S9Zli4v_L0pYZbOpDuk1k6fFX0JMqTA&callback=initMap""></script>

<script type="text/javascript">
    function initialize() {
       <?php

       	//$pro_id=$_REQUEST["pro_id"];
           $con=mysql_connect('lazeezo.db.9462939.hostedresource.com','lazeezo','Sky@9898');
          mysql_select_db('lazeezo',$con);
          
          
          $res=mysql_query("select * from restaurant_tbl where rest_id='$rest_id' ",$con);
          
            while ($row=mysql_fetch_assoc($res)) {
              $lat1=$row["latitude"];
              $long1=$row["longitude"];
              $address=$row["rest_add"];

              echo 'var latlng = new google.maps.LatLng('.$row["latitude"].','.$row["longitude"].');';
            }

  ?>
       //var latlng = new google.maps.LatLng(28.535516,77.391026);
        var map = new google.maps.Map(document.getElementById('map'), {
          center: latlng,
          zoom: 17
        });
        var marker = new google.maps.Marker({
          map: map,
          position: latlng,
          draggable: false,
          anchorPoint: new google.maps.Point(0, -29)
       });
        var infowindow = new google.maps.InfoWindow();   
        google.maps.event.addListener(marker, 'click', function() {
          var iwContent = '<div id="iw_container">' +
          '<div class="iw_title"><b>Location</b> : <?php echo $address; ?></div></div>';
          // including content to the infowindow
          infowindow.setContent(iwContent);
          // opening the infowindow in the current map and at the current marker location
          infowindow.open(map, marker);
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<?php
		include('header.php');
	?>
	<div class="row">
	<div class="col-md-offset-2">
	
	
	<div id='map' style='width: 900px; height: 450px;'></div>
	
	</div>
	</div>
	<br>
	<br>
	
	
	<?php
		include('footer.php');
	?>
	