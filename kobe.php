<?php
    require "header.php";
    ?>
    <head>
<style>
    * {
  color: white;
}

body{
	height:100%;
  background: linear-gradient(90deg, #FDB927 50%, #552583 50%);
}

h1, h2 {
  font-family: 'Raleway', sans-serif;
}

h1 {
  font-weight: extra-bold;
  font-size: 200px;
  text-align: center;
}

h2 {
  font-size: 26px;
}


.container__content {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.kobe__text {
  position: relative;
}

h1:hover{
	color: #000;
}
h2:hover{
	color: #000;
}
.kobe__text-info {
  font-family: 'Roboto', sans-serif;
  position: absolute;
  width: 300px;
  right: -192px;
  top: 65%;
  line-height: 22px;
}

.kobe__image {
  position: absolute;
  cursor: pointer;
  left: 50%;
  margin-left: -170px;
  transform: translateX(-50%);
}

.kobe__image:hover {
  animation: act1 1s infinite;
}

@keyframes act1 {
  0% {
    transform: translateX(-50%);
  }
  50% {
    transform: translateX(-45%);
  }
  100% {
    transform: translateX(-50%);
  }
}

#toggle{
	display:none;
	position: absolute;
  margin: 0 auto;
}

#toggle:target{
	display:block;
}

#toggle:target + .close{
	display:block;
}
.back {
  height: 20px;
  top: 90%;
  cursor: pointer;
}

.back:hover {
  color: yellow;
}
</style>
</head>
<body>
<div>
  <div class="container__content">
    <div class="kobe__text">
      <h1 class="kobe__text-header">BRYANT</h1>
      <div class="kobe__text-info">
        <p><i>August 23, 1978 - January 26, 2020</i></p>
        <p><b><small style="color:#000;">Click image</small></b></p>
        <p><b><i>Forever a legend.</i></b></p>
      </div>
    </div>
    <div class="kobe__image" onclick="document.getElementById('toggle').style.display='block'">
      <img width="275px" src="https://i.ibb.co/Ct6rW92/pngfuel-com.png" alt="pngfuel-com" border="0">
    </div>
    <div id="toggle">
        <span onclick="document.getElementById('toggle').style.display='none'" class="back">&times;</span>
        <iframe src="https://player.vimeo.com/video/391767802?autoplay=1&color=1626bd&title=0&byline=0&portrait=0" width="900" height="506" frameborder="0" allow="autoplay; fullscreen; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>
</body>