
    <head>
        <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bryant Memorial</title>
    <meta name="description" content="">
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta name = "keywords" content = "" />
    <meta name = "author" content = "Nasty Bohemia" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    require "header.php";
    ?>
<style>
    * {
  color: white;
}

body{
	height:100%;
  background: linear-gradient(90deg, #FDB927 50%, #552583 50%);
  overflow: hidden;
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

.video{
    margin-left:30%;
    position: absolute;
}
.container__content {
    margin:10%;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.kobe__text {
  position: relative;
  color:darkorange;
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

.gigi__image {
  position: absolute;
  cursor: pointer;
  left: 50%;
  margin-left: 100px;
  transform: translateX(-50%);
}

.gigi__image:hover {
  animation: act1 1s infinite;
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
<script>
    // Full mode is best for mobile.. https://codepen.io/natewiley/full/RNGdzm/

(function(){

  var w = window.innerWidth;
  var h = window.innerHeight;

  var game = new Phaser.Game(w, h, Phaser.CANVAS, '', {preload: preload, create: create, update: update});
  var totalBalls = 8;
  var balls, ballStartX, ballStartY, ballEndX, ballEndY;



  function random(min, max){
    return game.rnd.integerInRange(min,max)
  }

  function preload(){
    game.load.image("basketball", "https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/basketball.png");
  }

  function create(){

    game.physics.startSystem(Phaser.Physics.ARCADE);
    game.scale.scaleMode = Phaser.ScaleManager.RESIZE;

    balls = game.add.group();

    for (var i=0; i<totalBalls; i++){
      setTimeout(function(){
        var ball = balls.create(random(0, game.world.width), -100, "basketball")
        game.physics.arcade.enable(ball);
        ball.scale.setTo(.2,.2);
        ball.body.velocity.x = random(-50, 50);
        ball.body.gravity.y = 1000;
        ball.body.bounce.y = .5;
        ball.body.bounce.x = .5;
        ball.body.collideWorldBounds = true;
        ball.inputEnabled = true;
        ball.input.enableDrag(true);
        ball.input.start(0, true);
        ball.events.onDragStart.add(grab, ball);
        ball.events.onDragStop.add(toss, ball);
      }, 200 * i);
    }
  }
  
  function update(){
    for(var i =0; i<balls.length; i++){
      var thisBall = balls.getAt(i);
      var vX = thisBall.body.velocity.x;
      var vY = thisBall.body.velocity.y;
      // if its touching the bottom, slowly slow its x velocity to 0
      if(thisBall.body.bottom === game.world.bounds.bottom){
        if(thisBall.body.velocity.x > 0){
          thisBall.body.velocity.x = vX - 1;
        } else if(thisBall.body.velocity.x < 0){
          thisBall.body.velocity.x = vX + 1;
        }

      }
    }
  }
  
  // grab the ball
  function grab(){
    ballStartX = this.body.position.x;
    ballStartY = this.body.position.y;
    this.body.moves = false;
    this.body.velocity.setTo(0, 0);
    this.body.allowGravity = false;
  }
  
  // let go of the ball
  function toss(){
    ballEndX = this.body.position.x;
    ballEndY = this.body.position.y;
    this.body.moves = true;
    this.body.allowGravity = true;
    var vX = (ballEndX - ballStartX) * 10;
    var vY = (ballEndY - ballStartY) * 10;
    this.body.velocity.setTo(vX, vY);
  }


})();
</script>
</head>
<body>
    <div class="video">
    <iframe src="https://player.vimeo.com/video/391767802?autoplay=1&color=1626bd&title=0&byline=0&portrait=0" width="600" height="406" frameborder="0" allow="autoplay; fullscreen; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
<div>
  <div class="container__content">
    <div class="kobe__text">
      <h1 class="kobe__text-header">BRYANT</h1>
      <div class="kobe__text-info">
        <p><i></i></p>
        <p><b><small style="color:#000;"></small></b></p>
        <p><b><i></i></b></p>
      </div>
    </div>
    <div class="kobe__image" onclick="document.getElementById('toggle').style.display='block'">
      <img width="275px" src="assets/img/kobe-2.png" alt="pngfuel-com" border="0">
    </div>
    <div class="gigi__image" onclick="document.getElementById('toggle').style.display='block'">
      <img width="275px" src="assets/img/Gigi-1.png" alt="pngfuel-com" border="0">
    </div>
    <div id="toggle">
        <span onclick="document.getElementById('toggle').style.display='none'" class="back">&times;</span>
    </div>
  </div>
</div>
</body>