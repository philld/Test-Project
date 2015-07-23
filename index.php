<!DOCTYPE html>
<html>
 <head>
  <title>brew.co.nf - homepage</title>
  <link rel="stylesheet" type="text/css" href="brew.css">
  <META http-equiv="Content-Style-Type" content="text/css">

<!--fb pixel-->
<script type="text/javascript">
var fb_param = {};
fb_param.pixel_id = '6014628721777';
fb_param.value = '0.01';
fb_param.currency = 'GBP';
(function(){
  var fpw = document.createElement('script');
  fpw.async = true;
  fpw.src = '//connect.facebook.net/en_US/fp.js';
  var ref = document.getElementsByTagName('script')[0];
  ref.parentNode.insertBefore(fpw, ref);
})();
</script>
<noscript>
<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6014628721777&value=0.01&currency=GBP" />
</noscript>

</head>

<body>
<!--social beacon
<script type="text/javascript">
(function() {var p = function(x) {var q=[],s=(x!=null)?x.toString():'';if(window.RegExp)
s.replace(new RegExp("(sb_[^?=&]+|__sb_[^?=&]+)(=([^&]*))?", "g"),function($0,$1,$2,$3){ q.push($1+'='+$3); }); 
else q=['sb_err=NoRegExp'];var i=s.indexOf('?');s=(i>0)?s.substr(0,i+1)+q.join('&'):s;return(escape(s));};
var l=[p(window.location),p(document.referrer)];var u=(document.location.protocol)+"//track.social.com/b?p=sx2qzj&l=0"+
"&src="+l[0]+"&sref="+l[1]+"&rnd="+(Math.random()*(1 << 30)).toString(16).replace('.', '');
var px=document.createElement('iframe');px.src=u;px.width=0;px.height=0;px.setAttribute('frameborder',0);
px.setAttribute('marginheight',0);px.setAttribute('marginwidth',0);px.setAttribute('scrolling','no');document.body.appendChild(px);})();
</script>
-->

<div id = "container">

<div id= "hd">
<?php
include 'head.php';
?>
</div>

<div id = "bar1">
</div>

<div id = "content">
<!-- main body content include to go in this div -->
<?php
include 'whitelist.php';

  if ($_GET['page'] == NULL) {
  		include 'about.php';
  }
  elseif (in_array($_GET['page'], $whitelist)) {
        include($_GET['page'].'.php');
  } else {
        include('oops.php');
  }

?>
</div>

</div>

<div id = "ft">
<?php
include 'foot.php';
?>
</div>

</body>

</html>