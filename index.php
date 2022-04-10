<?php 
$mobile_browser = '0';
             
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}    
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
    
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows') > 0) {
    $mobile_browser = 0;
}

if ($mobile_browser > 0) {
   $constructionstyle = "font-size:7px;margin-left:45%;";
   $pixeltextstyle = "<br/><br/><div><h1 class=\"pixeltext-mobile\">UNDER CONSTRUCTION</h1></div>";
   $linkstyle = "margin-right:15px; text-align: center;";
   $construction2 ="";
   $showbr = "<br/>";
}
else {
    $constructionstyle = "";
    $pixeltextstyle = "<h1 class=\"pixeltext\">UNDER CONSTRUCTION</h1>";
    $linkstyle = "margin-right:15px";
    $construction2 ="<div class=\"construction\"></div>";
    $showbr = "";
} 
?>  
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/assets/main.css">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="icon" href="favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<title>corehacked.cf</title>
</head>
<body style="x-overflow:hidden;">
<div>
    <div style="<?php echo $constructionstyle; ?>" class="construction"></div>
    <?php echo $pixeltextstyle; ?>
    <?php echo $construction2; ?>
</div>
<div style="margin: auto;width: 50%;padding: 10px;text-align: center;   ">
    <a style="<?php echo $linkstyle; ?>" class="link hover-1" href="https://github.com/core-hacked">GITHUB</a>
    <a style="<?php echo $linkstyle; ?>" class="link hover-1" href="https://youtube.com/c/core-hacked">YOUTUBE</a>
    <a style="<?php echo $linkstyle; ?>" class="link hover-1" href="https://twitter.com/core_hacked">TWITTER</a>
    <?php echo $showbr; ?>
    <a class="link hover-1" href="https://steamcommunity.com/id/core_hacked/">STEAM</a>
</div>
<div class="footer">
    <p>corehacked.cf - info@corehacked.cf</p>
</div>
</body>
</html>