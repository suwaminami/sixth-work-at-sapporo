<?php
$_name = $_GEt["name"];
$mail = $_GET["mail"];
echo $name."<br>";
echo $mail."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Infobox:htmlContent</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sample.css">
    <!-- <style>body{padding:0;margin:0;background:#333;}h1{padding:0;margin:0;font-size:50%;color:white;}</style> -->
</head>
<body class="container">
<h1>保育園・習い事ナビ</h1>

<div id="nav">
    <ul>
     <li>HOME</li>
     <li>園種別に探す</li>
     <li>習い事を探す</li>
     <li>地図から探す</li>
     <li>xxx</li>
     <li>xxx</li>
     <li>スマート保育申請</li>
   </ul>
  </div>

<div class="map">
<div class="code">
    <div class="ribbon11-wrapper" id="motoazabu">
        <h3 class="ribbon11" id="pushpinClick">港区役所港区役所</h3>
        <p>
            <li class="li2"><img src="" alt=""></li>
            <li class="li2">〒106-0032 東京都港区六本木</li>
            <li class="li2">口コミ</li>
            <li class="li2"> <button>オンラインツアーを開始する</button> </li>
        </p>
      </div>


      
      <div class="ribbon11-wrapper">
        <h3 class="ribbon11">元麻布保育園</h3>
        <p>
            <li class="li2"><img src="" alt=""></li>
            <li class="li2">〒106-0032 東京都港区元麻布</li>
            <li class="li2">口コミ</li>
            <li class="li2"><button id="tour">オンラインツアーを開始する</button> </li>
        </p>
      </div>
<div class="ribbon11-wrapper">
    <h3 class="ribbon11">元麻布保育園</h3>
    <p>
        <li class="li2"><img src="" alt=""></li>
        <li class="li2">HOME</li>
        <li class="li2">HTML</li>
        <li class="li2"><button>オンラインツアーを開始する</button> </li>
    </p>
  </div>

  
  <!-- <ul class="ul2">
    <li class="li2">HOME</li>
    <li class="li2">HTML</li>
    <li class="li2">CSS</li>
  </ul> -->
</div>


<div class="google" id="myMap" style='position:relative;width:100%;height:450px;'></div>
</div>




<!-- [ infobox Object ] https://msdn.microsoft.com/en-us/library/mt712658.aspx -->
<script src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AqMjB41RPe2MNYldexPjMgDQ4Z0THRpgj4tcOTFch0XpT5zalb2ruK-ICASjqZy8' async defer></script>
<script>
function GetMap() {
    let map = new Microsoft.Maps.Map('#myMap', {
        center: new Microsoft.Maps.Location(35.658, 139.7515),
        zoom: 18
    });
   
    //Get MAP Infomation
    let center = map.getCenter();
    console.log(center);
    //Create a pushpin.
    let pushpin = new Microsoft.Maps.Pushpin(map.getCenter());
    map.entities.push(pushpin); //Add pin to Map

    //Point!!: Add mouse events to the pushpin.
    Microsoft.Maps.Events.addHandler(pushpin, 'click', function () { highlight('pushpinClick'); });

// alert("OK");
function highlight(id="motoazabu") {
    //Highlight the mouse event div to indicate that the event has fired.
    document.getElementById(id="motoazabu").style.background = 'Lightyellow';
    //Remove the highlighting after a second.
    setTimeout(function () { document.getElementById(id="motoazabu").style.background = ''; }, 2000);
}

    //Infobox:html
    let title = 'This is the title';
    let description = '<img src="https://www.bingmapsportal.com/Content/images/poi_custom.png" align="left" style="margin-right:5px;"/>This is a description with custom html. <a href="http://bing.com/maps" target="_blank">Link</a>';
    let infoboxTemplate = '<div class="customInfobox"><div class="title">{title}</div>{description}</div>';
    //Infobox
    let infobox = new Microsoft.Maps.Infobox(center, {
        htmlContent: infoboxTemplate.replace('{title}', title).replace('{description}', description)
    });
    infobox.setMap(map); //Add infobox to Map

    // console.log();


}

document.getElementById("tour").onclick = function() {
  alert("オンラインツアーの予約時間になりました");
};

</script>
<style>
    /* Infobox Style */
    .customInfobox {
        background-color: rgba(0,0,0,0.5);
        color: white;
        max-width: 200px;
        border-radius: 10px;
        padding: 10px;
        font-size:12px;
        pointer-events:auto !important;
    }
    .customInfobox .title {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 5px;
    }
</style>
</body>
</html>