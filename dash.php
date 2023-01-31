<!DOCTYPE html>
<html lang="es">
<style type="text/css">
body {
   margin: 0;
   padding: 0;
   background-color:black
}
.jw-button-color {
    color: rgb(255 1 1 / 80%)!important;
}
.jw-knob {
    background-color: #ff0101!important;
    }
.jw-progress {
    background-color: #ff0101!important;
}
.jw-text-live::before {
    background-color: red!important;
    }
.jw-reset-text{
    color: #ff0101!important;
}
</style>
<head>
<title>REPRODUCTOR</title>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow">
<meta name="referrer" content="no-referrer">


<script src='assets/player/v/8.26.0/jwplayer-1.js'></script>
<script> jwplayer.key='XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>
</head>
<body style="margin:0; padding:0;">
<div id="player" style="background-color:#ff0101; color:#FFF;">Cargando Recursos...</div>
<script type="text/javascript">
function getData(e){e=e.replace(/[\[]/,"[").replace(/[\]]/,"]");var a=new RegExp("[?&]"+e+"=([^&#]*)").exec(location.search);return null===a?"":decodeURIComponent(a[1].replace(/\+/g," "))}

jwplayer("player").setup({
    "abouttext": "",
            "aboutlink": "",
            "logo": {
                "file":
                "",
                "link": ""
                    },
playlist: [{
"title": "PLAYER OFICIAL",
          "description": "",
		  "image": "",
"sources": [{
"default": true,
"label": "0",
"type": "dash",
"file": atob(getData("url")),
"drm": {"clearkey": {"keyId": atob(getData("k1")), "key": atob(getData("k2"))}}
}]
}],
autostart: getData("aut"),
width: "100%", height: "100%", aspectratio: "16:9", stretching : "exactfit", cast: {}, sharing: false
//en app
//width: "100vw", height: "100vh", autostart: true, cast: {}, sharing: false
});
//jwplayer("player").on("play", function(e){jwplayer("player").setCurrentAudioTrack(getData("lang"))});
</script>



</body>
</html>
