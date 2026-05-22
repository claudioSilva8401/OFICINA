  <!--Script google map-->
  <script>
      function myMap() {
          var mapProp = {
              center: new google.maps.LatLng(51.508742, -0.120850),
              zoom: 5,
          };
          var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
      }
  </script>
   <!-- ajax do google para limitação de text -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- fim ajax do google para limitação de text -->
  <!-- Script google map-->
  <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBz3M1cowiUTN2OTklTGsSIQV0tZF1LOwg&callback=myMap"></script>
  <!-- fim Script google map-->
  <!-- Script para mascara do input-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <!-- fim Script para mascara do input-->
  <!-- Script bootstrap-->
  <script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
  <script type="text/javascript">
      //<![CDATA[
      (window.jQuery) || document.write('<script type="text/javascript" src="bootstrap/js/jquery.min.js"><\/script>'); //]]>
  </script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <!-- fim Script bootstrap-->
 