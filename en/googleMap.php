
 <?php include("header.php") ?>
    
    <title>Google Map</title>
    <style>
<?php 

/*$glat =array(-1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$glong =array(-1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$gzoom =array(-1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);*/
if( isset($_GET["q"]))
 {
 $districtId=$_GET["q"];
 
// exit();
 }
?>
      #map {
    min-height: 500px;
    width: 100%;
    height:100%
}

      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 90%;
        margin: 0;
        padding: 0;
		margin-top:auto;
		margin-bottom:auto;
      }
    </style>
  </head>

  <body>
   
      <div class="container">
              
    <div class="row">
        <div class="col-sm-7">
            <div id="map"></div> 
   </div>
        <div class="col-sm-5">
            	<div class="heading-title text-left heading-line-single ">
					<h3><i class="fas fa-list-ul" aria-hidden="true"></i> Schemes Per Category </h3>
				</div> 
					<div class="row" >
						<?php 
							 require_once('../assets/datalink/dbconfig.php');
							 $schm_ctgr = $db_con->prepare(" SELECT * from  category");
                             $schm_ctgr->execute();
                             $i=0;
							 while($row = $schm_ctgr->fetch(PDO::FETCH_ASSOC))
							 {  if($i%2==0) { echo '<div class="row">';}?> 
							 
							 
					 <div class="col-sm-6"><h4> <a href="#" class="category-home" style="padding-bottom:20px"> <i class="fas fa-angle-right margin-right-6">	</i> <?php echo $row['categoryName'];  $i++; echo '</a></h4> </div>';if($i%2==0) { echo "</div>";}} ?> 
					 
					 </div>
					</div>
            </div>
    
    </div>
    </div>

    <script>
      var customLabel = {
        District: {
          label: 'D'
        },
        Block: {
          label: 'B'
        },
        NGO: {
          label: 'N'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(22.4013324,71.0526041),
          zoom: 7
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          <?php     echo    'downloadUrl("second.php?q='.$districtId.'", function(data) {'; ?>
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ9zPaIATT5gxO25tvIJncPawDHOkQqrI&callback=initMap">
    </script>
    <?php include("footer.php"); ?>
  </body>
</html>