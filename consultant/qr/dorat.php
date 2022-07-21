<?php 
include 'includes/session.php';
 $id=$_SESSION['adare'];
 ?>
<?php include 'includes/header.php'; ?>

<head>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css"
  integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
  crossorigin=""/>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
  <?php include 'navbar.php'; ?>
  <?php include 'menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content-header">
      <h1>
       العقارات
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">العقارات</li>
        <button onclick="myFunction()">تحديدالموقع</button>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
             
              <h4>خطاء<i class='icon fa fa-warning'></i></h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
             
               <h4>رائع<i class='icon fa fa-check'></i> </h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
    <div id="latlongmap" style="width:100%;height:300px;display: inline-block;" ></div>

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> جديد</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>العقار</th>
                  <th>السعر</th>
                  <th>صورة</th>
                     <th>فديو</th>            
                  <th>أدوات</th>
                </thead>
                <tbody>
                  <?php
                  $urlx="../tcpdf/examples/co.php?id=".$id; 
                    $sql = "SELECT * FROM aa_shggx WHERE fhrs=$id";
                    $query = $conn->query($sql);
                    if ($query) {
                    while($row = $query->fetch_assoc()){
                    


                      echo "
                        <tr>
                          <td class='hidden'></td>
                           <td>".$row['name']."</td>
                            <td>".$row['pri']."</td>
                           
                            ";
                            $ulr1=$row[img];
                            ?> 
 <td><img  src="<?php echo $ulr1; ?>" width="100" ></td>
  <td><video width="100" controls>
  <source src="<?php echo $row['vde']; ?>" type="video/mp4">                        
       </video></td>
       <?php                     
         echo "                     
                           
                          
                          

                          <td>

                            <button class='btn btn-info btn-sm btn-flat editx' data-id='".$row['id']."'><i class='fa fa-edit'></i> تعديل</button>
                            <button class='btn btn-danger btn-sm btn-flat deletex' data-id='".$row['id']."'><i class='fa fa-trash'></i> حذف</button>

 ";
 
 
   echo "

                          </td>
                        </tr>
                      ";
                    }
                    }
                  ?>
                </tbody>
              </table>
           
       <a href="<?php echo $urlx ; ?>"><button class='btn btn-primary btn-sm btn-flat print' data-id='".$id."'><i class='fa fa-print'></i> طباعة الجميع</button></a>

            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'dusrmo.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
 <script>
function myFunction() {
  var x = document.getElementById("latlongmap");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  
</script>

<script>
  
$(function(){
   $('.editx').click(function(e){

    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
    
  });
 
  $('.deletex').click(function(e){
    e.preventDefault();
    alert("hh");
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'usr_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
   //// alert (response);
 
 
 
$('#id').val(response.id);
      $('#name').val(response.name);
      $('#lat').val(response.lat);
      $('#lon').val(response.lon);
     
      
      $('#pri').val(response.pri);
     $('#gar').val(response.gar);
          $('#bed').val(response.bed);
      $('#bat').val(response.bat);
      $('#are').val(response.are);
      
       $('#malk').val(response.malk);
     $('#noa').val(response.noa);
          $('#tar').val(response.tar);
      $('#ard').val(response.ard);
document.getElementById("imgx").innerHTML ="<img src=\""+ response.img +"\"width=\"20%\"/>";
document.getElementById("imgx2").innerHTML ="<img src=\""+ response.img2 +"\"width=\"20%\"/>";
document.getElementById("imgx3").innerHTML ="<img src=\""+ response.img3 +"\"width=\"20%\"/>";
document.getElementById("imgx4").innerHTML ="<img src=\""+ response.img4 +"\"width=\"20%\"/>";
document.getElementById("imgx5").innerHTML ="<img src=\""+ response.img5 +"\"width=\"20%\"/>";

 

document.getElementById("imgx6").innerHTML ="<video width=\"100\" controls><source src=\""+ response.vde +"\"type=\"video/mp4\">";

      $('#vde').val(response.vde);
      $('#img').val(response.img);
      $('#img2').val(response.img2);
      $('#img3').val(response.img3);
      $('#img4').val(response.img4);
      $('#img5').val(response.img5);
      $('#img6').val(response.vde);
      $('#wsf').val(response.wsf);
      
      

      
      
     
         
          $('#del_name').val(response.name);
         $('#del_id').val(response.id);
    $('#photox').val(response.photo);

 $('#img').val(response.img);
   ////  width=/"20%/"
  





 
      
    }
  });
}

</script>


<script>function setCk(){sck(cnm,"ntf",90),document.getElementById("cookielaw").style.display="none"}function sck(e,n,t){var c=new Date;c.setTime(c.getTime()+24*t*60*60*1e3);var o="expires="+c.toUTCString();document.cookie=e+"="+n+";"+o+";path=/"}function gck(e){for(var n=e+"=",t=decodeURIComponent(document.cookie),c=t.split(";"),o=0;o<c.length;o++){for(var i=c[o];" "===i.charAt(0);)i=i.substring(1);if(0===i.indexOf(n))return i.substring(n.length,i.length)}return""}function eck(e){document.cookie=e+"=; Max-Age=-99999999;"}function cck(){""===gck(cnm)&&(document.getElementById("cookielaw").style.display="block")}var cnm="dvckli";window.onload=cck;</script><script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"
  integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q=="
  crossorigin=""></script>

<script>
 var nn=20.402677;
var rr=43.929549;


var mymap = L.map('latlongmap');
var mmr = L.marker([nn,rr]);
mmr.bindPopup('0,0');
mmr.addTo(mymap);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {foo: 'bar',
attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(mymap);

mymap.on('click', onMapClick);

///sm(0,0,2)
function getLocation() {

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
    alert("ggg");
  } else { 
  alert("nnnn");
  nn=20.402677;
 rr=43.929549;
  }
}
function showPosition(position) {
nn=position.coords.latitude;
rr=position.coords.longitude;
}
getLocation();

sm(nn,rr,16)
function isll(num) {
var val = parseFloat(num);
if (!isNaN(val) && val <= 90 && val >= -90)
    return true;
else
    return false;
}

function onMapClick(e) {
mmr.setLatLng(e.latlng);
setui(e.latlng.lat,e.latlng.lng,mymap.getZoom());
}

function dec2dms(e,t) {
////document.getElementById("dms-lat").innerHTML = getdms(e, !0), document.getElementById("dms-lng").innerHTML = getdms(t, !1)
}
function getdms(e, t) {
var n = 0, m = 0, l = 0, a = "X";
return a = t && 0 > e ? "S" : !t && 0 > e ? "W" : t ? "N" : "E", d = Math.abs(e), n = Math.floor(d), l = 3600 * (d - n), m = Math.floor(l / 60), l = Math.round(1e4 * (l - 60 * m)) / 1e4, n + "&deg; " + m + "' " + l + "'' " + a
}

function sm(lt,ln,zm) {
    setui(lt,ln,zm);
    mmr.setLatLng(L.latLng(lt,ln));
    mymap.setView([lt,ln], zm);
}

function setui(lt,ln,zm) {
    lt = Number(lt).toFixed(6);
    ln = Number(ln).toFixed(6);
mmr.setPopupContent(lt + ',' + ln).openPopup();
document.getElementById("latd").value=lt;
document.getElementById("lng").value=ln;
///document.getElementById("latlngspan").innerHTML ="(" + lt + ", " + ln + ")"; 
//document.getElementById("coordinatesurl").value = "https://www.latlong.net/c/?lat=" + lt + "&long=" + ln;
//document.getElementById("coordinateslink").innerHTML = '&lt;a href="https://www.latlong.net/c/?lat=' + lt + "&amp;long=" + ln + '" target="_blank"&gt;(' + lt + ", " + ln + ")&lt;/a&gt;";
///dec2dms(lt,ln);
////document.getElementById('latlongmape').src='https://www.google.com/maps/embed/v1/view?key=AIzaSyALrSTy6NpqdhIOUs3IQMfvjh71td2suzY&maptype=satellite&'+'center='+lt+','+ ln+'&zoom='+zm;
}
   var x = document.getElementById("latlongmap");
  x.style.display = "none";    
</script>



</body>
</html>



