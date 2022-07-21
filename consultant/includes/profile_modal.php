<!-- Add -->
<link href="css/switcher.css" rel="stylesheet" type="text/css">
<script
		  src="jquery-3.2.1.js">
		  </script>
		<script src="jquery.colorwheel.js"></script>
		  <script>
			jQuery(document).ready(function($) {
				$("#widget1").colorwheel();
						});
			
function my() {

  document.getElementById("employeed").selectedIndex = "0";

}
function my1() {

  document.getElementById("employeex").selectedIndex = "0";

}

			
			
			
		</script>
		<link rel="stylesheet" type="text/css" href="jquery.colorwheel.css">
	


<style>

#lon1x {
  width: 40px;
				   height:40px;
				   background: #f447ff; 
				       }
       
			#widget1 {
				display: block;
				width: 100px;
				height: 100px;	
     
			}
			
			
#lon1x1 {
   width: 40px;
				   height: 40px;
				               
				   
				   background:   <?php echo $user['lon1'];?> ; 
				   			}
#lon1x2 {
  width: 40px;
				   height: 40px;
				    background:   <?php echo $user['lon2'];?> ; 
				   }
				   #lon1x3 {
   width: 40px;
				   height: 40px;
				    background:   <?php echo $user['lon3'];?> ; 
				   			}
#lon1x4 {
  width: 40px;
				   height: 40px;
				    background:   <?php echo $user['lon4'];?> ; 

				   }
				   
				   #lon1x5 {
  width: 40px;
				   height: 40px;
				    background:   <?php echo $user['lon5'];?> ; 

				   }

#lon1x6 {
  width: 40px;
				   height: 40px;
				    background:   <?php echo $user['lon6'];?> ; 

				   }
				   #lon1x7 {
  width: 40px;
				   height: 40px;
				    background:   <?php echo $user['lon7'];?> ; 

				   }

#lon1x8 {
  width: 40px;
				   height: 40px;
				    background:   <?php echo $user['lon8'];?> ; 

				   }

#lon1x9 {
  width: 40px;
				   height: 40px;
				    background:   <?php echo $user['lon9'];?> ; 

				   }




			
	



			#widgetx {
				display: block;
				width: 250px;
				height: 250px;	
        margin:0 auto;
			}
			


		</style>


<style>
#myDIV {
  
  text-align: center;
 display: none;
 
}
</style>
<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>الملف الشخصي</b></h4>
          	</div>
          	<div class="modal-body">
          	  <hr>
        
	






                  	
  
   	
         <hr>   	
          	
            	<form class="form-horizontal" method="POST" action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
          		 
          		  
                <div class="form-group">

                    <div class="col-sm-9"> 
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['pass']; ?>">
                    </div>
                                        <label for="password" class="col-sm-3 control-label">الرقم السري الجديد</label>

                </div>
              
                
                <div class="form-group">

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['namemdir']; ?>">
                  	</div>
                  	                  	<label for="firstname" class="col-sm-3 control-label">اسم المتجر</label>

                </div>
                
                <div class="form-group">
                
                
          		  
          		  <div class="col-sm-9">

        
        
        
          <div id="map_canvas" style="width: 300px; height: 200px"></div>


        
          </div>
</div>

<div class="form-group">
                
                
          		  
          		  <div class="col-sm-9">
                    	<input type="number" class="form-control"  step="100" id="tol1" onchange="gg();" name="tol2" >
                  	</div>
                  	<label for="lat" class="col-sm-3 control-label">دائرة التغطية</label>

                  	
                </div>

         
<div class="form-group">
                
                
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="latd"  name="lat1" >
                  	</div>
                  	<label for="lat" class="col-sm-3 control-label">الموقع [lat]</label>

                  	
                </div>
                  <div class="form-group">
          		  
          		  <div class="col-sm-9">
                    	<input type="text" class="form-control" id="lng" name="lan1" >
                  	</div>
                  	<label for="lon" class="col-sm-3 control-label">الموقع [lon]</label>                 	
                </div>
       
                
                
                
                
                <div class="form-group">

                    <div class="col-sm-9">
                     
                  
                    <img src="<?php echo  '../images/'.$user['photo']; ?>" width="20%" />
                      <input type="file" id="photo" name="photo">
                    </div>
                                        <label for="photo" class="col-sm-3 control-label">الصورة الشخصية</label>

                </div>
                <hr>
                <div class="form-group">

                    <div class="col-sm-9">
              <img src="<?php echo  '../images/'.$user['photo1']; ?>" width="20%" />

                      <input type="file" id="photo1" name="photo1">
                    </div>
                                        <label for="photo1" class="col-sm-3 control-label">الواجهة</label>

                </div>
                 <div class="form-group">
          		  
          		  <div class="col-sm-9">
          		  <div id="widget1"></div>
          <table style="width: 100%">
          <tr>
		
		<td>  
	اطار الصورة	<input class="form-check-input" type="radio" id="lo" value="1" name="dh"/>
</td>
		<td>هوفر خليه		<input class="form-check-input" type="radio" id="lo" value="2" name="dh"/>
</td>
		
	</tr>

	<tr>
	
		<td><div id="lon1x1"></div> </td>
		<td><div id="lon1x2"></div> </td>
		
	</tr>
	<tr>
		
		<td><input type="text"  id="lon1" name="lon1" value="<?php echo $user['lon1'];?>"></td>
				<td><input type="text"  id="lon2" name="lon2" value="<?php echo $user['lon2'];?>"></td>
	</tr>
	
</table>
		  
		   <table style="width: 100%">
          <tr>
				<td>خلفية الجدول  
		<input class="form-check-input" type="radio" id="lo" value="3" name="dh"/>
</td>
		<td>	زر اطلب	<input class="form-check-input" type="radio" id="lo" value="4" name="dh"/>
</td>
		
	</tr>

	<tr>
		
		<td><div id="lon1x3"></div> </td>
		<td><div id="lon1x4"></div> </td>
		
	</tr>
	<tr>
		
		<td><input type="text"  id="lon3" name="lon3" value="<?php echo $user['lon3'];?>"></td>
				<td><input type="text"  id="lon4" name="lon4" value="<?php echo $user['lon4'];?>"></td>
	</tr>

</table>


   <table style="width: 100%">
          <tr>
		
		<td>  
	خلية الجدول	<input class="form-check-input" type="radio" id="lo" value="5" name="dh"/>
</td>
		<td>اسفل الجدول		<input class="form-check-input" type="radio" id="lo" value="6" name="dh"/>
</td>
		
	</tr>

	<tr>
	
		<td><div id="lon1x5"></div> </td>
		<td><div id="lon1x6"></div> </td>
		
	</tr>
	<tr>
		
		<td><input type="text"  id="lon5" name="lon5" value="<?php echo $user['lon5'];?>"></td>
				<td><input type="text"  id="lon6" name="lon6" value="<?php echo $user['lon6'];?>"></td>
	</tr>
	
</table>



 <table style="width: 100%">
          <tr>
		
		<td>  
	تم	<input class="form-check-input" type="radio" id="lo" value="7" name="dh"/>
</td>
		<td>خلفية اللوحة		<input class="form-check-input" type="radio" id="lo" value="8" name="dh"/>
</td>
		
	</tr>

	<tr>
	
		<td><div id="lon1x7"></div> </td>
		<td><div id="lon1x8"></div> </td>
		
	</tr>
	<tr>
		
		<td><input type="text"  id="lon7" name="lon7" value="<?php echo $user['lon7'];?>"></td>
				<td><input type="text"  id="lon8" name="lon8" value="<?php echo $user['lon8'];?>"></td>
	</tr>
	
</table>

	
	
	 <table style="width: 100%">
          <tr>
		
		<td>  
	الدخول	<input class="form-check-input" type="radio" id="lo" value="9" name="dh"/>
</td>
		<td>		<input class="form-check-input" type="radio" id="lo" value="10" name="dh"/>
</td>
		
	</tr>

	<tr>
	
		<td><div id="lon1x9"></div> </td>
		<td><div id="lon1x10"></div> </td>
		
	</tr>
	<tr>
		
		<td><input type="text"  id="lon9" name="lon9" value="<?php echo $user['lon9'];?>"></td>
				<td><input type="text"  id="lon10" name="lon10" value="<?php echo $user['lon10'];?>"></td>
	</tr>
	
</table>

    		  
                
                </div>
                </div>
              

                <hr>
                <div class="form-group">

                  	<div class="col-sm-9">
                  		<input type="text"  name="ins"  class="form-control" id="ins"  value="<?php echo $user['ins']; ?>"  >

	</div>
                  	                  	<label for="firstname" class="col-sm-3 control-label">انستقرام</label>

                </div>
                <div class="form-group">

                  	<div class="col-sm-9">
                  		<input type="text"  name="sfa"  class="form-control" id="sfa" value="<?php echo $user['sfa']; ?>"  >


	</div>
                  	                  	<label for="firstname" class="col-sm-3 control-label">فيسبوك</label>

                </div>

<div class="form-group">

                  	<div class="col-sm-9">
                  		<input type="text"  name="sna"  class="form-control" id="sna" value="<?php echo $user['sna']; ?>"  >


	</div>
                  	                  	<label for="firstname" class="col-sm-3 control-label">سناب</label>

                </div>

<div class="form-group">

                  	<div class="col-sm-9">
                  		<input type="text"  name="tut"  class="form-control" id="tut" value="<?php echo $user['tut']; ?>" >  


	</div>
                  	                  	<label for="firstname" class="col-sm-3 control-label">تويتر</label>

                </div>


                
                
              
                <hr>
 
                
                
                
                <div class="form-group">


                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="map" name="map" value="<?php echo $user['map']; ?>">
                  	</div>
                  	                  	<label for="map" class="col-sm-3 control-label">فديو العرض</label>

                </div>
                  <hr>
               

                
                <div class="form-group">
                
                                 	<div class="col-sm-9">
                                 	
            
                     	
                                 	
                                 	
                                 	
  <?php if($user['hgz']==1) 
  {
  ?>               
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="dhwr">
</div>
    <?php
}   
 else
 {
  ?>
 <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="dhwr" checked>
</div> 

<?php
}                  	
  ?>                 	
                  	</div>
                  	               

   	<label for="dhwr" class="col-sm-3 control-label">ظهور التواصل</label>

                </div>
              





 <hr>
 <div class="form-group">

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="إدخال كلمة المرور الحالية لحفظ التغييرات" required>
                    </div>
                                        <label for="curr_password" class="col-sm-3 control-label">كلمة السر الحالية</label>

                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> الغاء</button>
            	<button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i> حغظ</button>
            	</form>
          	</div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/jquery.switcher.js"></script>
<script>
  $.switcher();
  </script>
  
      	<script type="text/javascript"  src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyDhI6dJkMMbvUSMCgHm9wyH3LG1AXj1UqQ"></script>

     <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display == "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}



function initialize() {
    var mapOptions = {
     center: new google.maps.LatLng(-34.397, 150.644),
      zoom: 8,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvash"), mapOptions);
 }
var lat;
var lng;
var told;
 function getLocation() {


  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  
  } else { 
  lat=26.402677;
 lng=43.929549;


  }
}

function showPosition(position) {
lat=position.coords.latitude;
lng=position.coords.longitude;
var tol1=<?php echo $user['tol2'];?>;
 mm(tol1);

}

<?php if( $user['lat1']>0 and $user['lan1']>0)
{
?>;
lat=<?php echo $user['lat1'];?>;
lng=<?php echo $user['lan1'];?>;
var tol1=<?php echo $user['tol2'];?>;

 mm(tol1);
<?php 
}
else
{
?>;

getLocation();
<?php 
}
?>;
 var map;
 
 function mm(tol1) {
	var zoom=12;
		 
	document.getElementById('latd').value=lat;
	document.getElementById('lng').value=lng;

	var homeLatlng = new google.maps.LatLng(lat, lng); //set default coordinates
	
	var myOptions = {
	/// center: new google.maps.LatLng(-34.397, 150.644),
	center: new google.maps.LatLng(lat, lng), //set map center
	zoom: zoom, //set zoom level to 17
	mapTypeId: google.maps.MapTypeId.ROADMAP //set map type to road map
	};
	
	
	
	map = new google.maps.Map(document.getElementById("map_canvas"),
	myOptions); //initialize the map

	
	var homeMarker = new google.maps.Marker({ //set marker
	position: homeLatlng, //set marker position equal to the default coordinates
	map: map, //set map to be used by the marker
	draggable: true //make the marker draggable
	});
		google.maps.event.addListener(homeMarker, 'position_changed', function(){
	lat = homeMarker.getPosition().lat(); //set lat current latitude where the marker is plotted
	lng = homeMarker.getPosition().lng(); //set lat current longitude where the marker is plotted
	
	////document.getElementById('coords').value=lat+","+lng;
	document.getElementById('latd').value=lat;
	document.getElementById('lng').value=lng;
	
                   

	});

	
	//if the center of the map has changed
	google.maps.event.addListener(map, 'center_changed', function(){
	document.getElementById('latd').value=lat;
	document.getElementById('lng').value=lng;
	
	
	});
	
	told=tol1;
document.getElementById('tol1').value=tol1;


	
	
		
	var	rrx=Math.floor(tol1)+1;
	var rrx1=rrx+100;
var istanbul = new google.maps.LatLng(lat, lng);////1
	 var flightPath = new google.maps.Circle({
    center: istanbul, 
    radius: rrx, 
    strokeColor: "#22a43c", 
    strokeOpacity: 0.8, //شفافية الخط بين 0.0 و 1.0.
    strokeWeight: 2, 
    fillColor: "#22a43c", 
    fillOpacity: 0.1 
    ////Editable 
}); 


  var flightPath1 = new google.maps.Circle({
    center: istanbul, 
    radius: rrx1, 
    strokeColor: "#e8d615", 
    strokeOpacity: 0.8, //شفافية الخط بين 0.0 و 1.0.
    strokeWeight: 2, 
    fillColor: "#e8d615", 
    fillOpacity: 0.01 
    ////Editable 
}); 

 

if (tol1>0)
{
flightPath1.setMap(map);
flightPath.setMap(map);
}
	

	
	}
	
	
	
		
		
	function gg() {
   
  	
	  var tol1=document.getElementById('tol1').value;
	if(  told==tol1)exit;
		mm(tol1);
	
	

  

  
             
    }
	
		
		
		
		
		
	
		function ggx() {
   
   var zoom=12;
var myOptions = {
	/// center: new google.maps.LatLng(-34.397, 150.644),
	center: new google.maps.LatLng(lat, lng), //set map center
	zoom: zoom, //set zoom level to 17
	mapTypeId: google.maps.MapTypeId.ROADMAP //set map type to road map
	};
	
	
	
map = new google.maps.Map(document.getElementById("map_canvas"),
	myOptions); //initialize the map
        
     
  var tol1=document.getElementById('tol1').value;
	var	rrx=Math.floor(tol1)+1;
	var rrx1=rrx+100;
	
	
	var istanbuln = new google.maps.LatLng(lat, lng);////1
	 var flightPathn = new google.maps.Circle({
    center: istanbuln, 
    radius: rrx, 
    strokeColor: "#22a43c", 
    strokeOpacity: 0.8, //شفافية الخط بين 0.0 و 1.0.
    strokeWeight: 2, 
    fillColor: "#22a43c", 
    fillOpacity: 0.1 
    ////Editable 
}); 


  var flightPath1n = new google.maps.Circle({
    center: istanbuln, 
    radius: rrx1, 
    strokeColor: "#e8d615", 
    strokeOpacity: 0.8, //شفافية الخط بين 0.0 و 1.0.
    strokeWeight: 2, 
    fillColor: "#e8d615", 
    fillOpacity: 0.01 
    ////Editable 
}); 


     alert(tol1);   
        flightPath1n.setMap(map);
flightPathn.setMap(map);
  alert(3);
       
    }

 

</script>  

