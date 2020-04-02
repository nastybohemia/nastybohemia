<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>COVID-19 Cases Live Map</title>
    <meta name="description" content="">
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta name = "keywords" content = "Nasty Bohemia, nastybohemia.com, los angeles artist, los angeles video editor, los angeles post-production, los angeles web developer, HTML, Meta Tags, Metadata" />
    <meta name = "author" content = "Nasty Bohemia" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mylead-verification" content="ff89b1b9530c12e46c7b2ff6c924c016">
    <!-- ************************* JQuery *************************-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,700&display=swap" rel="stylesheet">
    <style>
body {
  width: 100vw;
  height: 100vh;
  display: inline-block;
  place-items: center;
  --white: #fff;
  --yellow: #ffd464;
  --darkblue: #005693;
  --navyblue: #170e2b;
  --blue: #009cab;
  --red: #e64626;
  --tan: #bbc69b;
  --orange: #f28801;
  background: var(--darkblue);
  -webkit-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}
body.loaded {
  background: var(--yellow);
}
body.loaded #map svg path {
  opacity: 1;
}
body.loaded h1 {
  top: 0;
  color: var(--white);
}
body.loaded h1:last-of-type {
  top: calc(100% - 12vmin);
}
body.loaded #map {
  opacity: 1;
  pointer-events: all;
}
body h1 {
  position: absolute;
  font-family: "Oswald";
  font-weight: 800;
  width: 100vw;
  text-align: center;
  z-index: 0;
  text-transform: uppercase;
  color: var(--tan);
  font-size: 10vmin;
  margin: 0;
  line-height: 1.15;
  -webkit-text-stroke: 3px var(--navyblue);
  top: calc(50% - 10vmin);
  -webkit-transition: 0.7s ease-in-out;
  transition: 0.7s ease-in-out;
}
body h1:nth-of-type(2) {
  top: 50%;
}
body #map {
  width: 100%;
  max-width: 3000px;
  height: 700px;
  -webkit-transition: 0.2s ease-in-out;
  transition: 0.2s ease-in-out;
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
  opacity: 0;
  pointer-events: none;
  cursor: move;
  z-index: 9;
  overflow: hidden;
  position: absolute;
  background: radial-gradient(circle at center, var(--navyblue) 1.5px, transparent 1px, transparent 10px), var(--blue);
  background-size: 10px 10px;
  box-shadow: 0 -3px 0 0 var(--navyblue), 0 3px 0 0 var(--navyblue);
}
body #map:before {
  content: "API/data via Javier Aviles: github.com/javieraviles/covidAPI";
  position: absolute;
  z-index: 999;
  pointer-events: none;
  font-family: "Oswald";
  color: var(--navyblue);
  background: #fff;
  bottom: 0;
  left: 0;
  padding: 0px;
  font-weight: 300;
  font-size: 13px;
}
body #map svg {
    margin-top:0px;
  width: 1400px;
  max-width: 3000px;
  height: 700px;
  position: absolute;
  left: 0;
  top: 0;
  cursor: move;
}
@media (max-width: 1000px) {
  body #map svg {
      width: 400px;
    margin-top: -20vh;
  }
}
@media (min-width: 2500px) {
  body #map svg {
    margin-left: 750px;
    top: 0vh;
  }
}
body #map svg path {
  fill: var(--yellow);
  stroke: var(--orange);
  stroke-width: 2px;
  -webkit-transition: fill 0.3s ease-in-out, opacity 0.1s ease-in-out;
  transition: fill 0.3s ease-in-out, opacity 0.1s ease-in-out;
  z-index: 0;
  position: relative;
  cursor: move;
  opacity: 0;
}
body #map svg path:nth-of-type(1) {
  -webkit-transition-delay: 0s, 0.7533333333s;
          transition-delay: 0s, 0.7533333333s;
}
body #map svg path:nth-of-type(2) {
  -webkit-transition-delay: 0s, 0.7566666667s;
          transition-delay: 0s, 0.7566666667s;
}
body #map svg path:nth-of-type(3) {
  -webkit-transition-delay: 0s, 0.76s;
          transition-delay: 0s, 0.76s;
}
body #map svg path:nth-of-type(4) {
  -webkit-transition-delay: 0s, 0.7633333333s;
          transition-delay: 0s, 0.7633333333s;
}
body #map svg path:nth-of-type(5) {
  -webkit-transition-delay: 0s, 0.7666666667s;
          transition-delay: 0s, 0.7666666667s;
}
body #map svg path:nth-of-type(6) {
  -webkit-transition-delay: 0s, 0.77s;
          transition-delay: 0s, 0.77s;
}
body #map svg path:nth-of-type(7) {
  -webkit-transition-delay: 0s, 0.7733333333s;
          transition-delay: 0s, 0.7733333333s;
}
body #map svg path:nth-of-type(8) {
  -webkit-transition-delay: 0s, 0.7766666667s;
          transition-delay: 0s, 0.7766666667s;
}
body #map svg path:nth-of-type(9) {
  -webkit-transition-delay: 0s, 0.78s;
          transition-delay: 0s, 0.78s;
}
body #map svg path:nth-of-type(10) {
  -webkit-transition-delay: 0s, 0.7833333333s;
          transition-delay: 0s, 0.7833333333s;
}
body #map svg path:nth-of-type(11) {
  -webkit-transition-delay: 0s, 0.7866666667s;
          transition-delay: 0s, 0.7866666667s;
}
body #map svg path:nth-of-type(12) {
  -webkit-transition-delay: 0s, 0.79s;
          transition-delay: 0s, 0.79s;
}
body #map svg path:nth-of-type(13) {
  -webkit-transition-delay: 0s, 0.7933333333s;
          transition-delay: 0s, 0.7933333333s;
}
body #map svg path:nth-of-type(14) {
  -webkit-transition-delay: 0s, 0.7966666667s;
          transition-delay: 0s, 0.7966666667s;
}
body #map svg path:nth-of-type(15) {
  -webkit-transition-delay: 0s, 0.8s;
          transition-delay: 0s, 0.8s;
}
body #map svg path:nth-of-type(16) {
  -webkit-transition-delay: 0s, 0.8033333333s;
          transition-delay: 0s, 0.8033333333s;
}
body #map svg path:nth-of-type(17) {
  -webkit-transition-delay: 0s, 0.8066666667s;
          transition-delay: 0s, 0.8066666667s;
}
body #map svg path:nth-of-type(18) {
  -webkit-transition-delay: 0s, 0.81s;
          transition-delay: 0s, 0.81s;
}
body #map svg path:nth-of-type(19) {
  -webkit-transition-delay: 0s, 0.8133333333s;
          transition-delay: 0s, 0.8133333333s;
}
body #map svg path:nth-of-type(20) {
  -webkit-transition-delay: 0s, 0.8166666667s;
          transition-delay: 0s, 0.8166666667s;
}
body #map svg path:nth-of-type(21) {
  -webkit-transition-delay: 0s, 0.82s;
          transition-delay: 0s, 0.82s;
}
body #map svg path:nth-of-type(22) {
  -webkit-transition-delay: 0s, 0.8233333333s;
          transition-delay: 0s, 0.8233333333s;
}
body #map svg path:nth-of-type(23) {
  -webkit-transition-delay: 0s, 0.8266666667s;
          transition-delay: 0s, 0.8266666667s;
}
body #map svg path:nth-of-type(24) {
  -webkit-transition-delay: 0s, 0.83s;
          transition-delay: 0s, 0.83s;
}
body #map svg path:nth-of-type(25) {
  -webkit-transition-delay: 0s, 0.8333333333s;
          transition-delay: 0s, 0.8333333333s;
}
body #map svg path:nth-of-type(26) {
  -webkit-transition-delay: 0s, 0.8366666667s;
          transition-delay: 0s, 0.8366666667s;
}
body #map svg path:nth-of-type(27) {
  -webkit-transition-delay: 0s, 0.84s;
          transition-delay: 0s, 0.84s;
}
body #map svg path:nth-of-type(28) {
  -webkit-transition-delay: 0s, 0.8433333333s;
          transition-delay: 0s, 0.8433333333s;
}
body #map svg path:nth-of-type(29) {
  -webkit-transition-delay: 0s, 0.8466666667s;
          transition-delay: 0s, 0.8466666667s;
}
body #map svg path:nth-of-type(30) {
  -webkit-transition-delay: 0s, 0.85s;
          transition-delay: 0s, 0.85s;
}
body #map svg path:nth-of-type(31) {
  -webkit-transition-delay: 0s, 0.8533333333s;
          transition-delay: 0s, 0.8533333333s;
}
body #map svg path:nth-of-type(32) {
  -webkit-transition-delay: 0s, 0.8566666667s;
          transition-delay: 0s, 0.8566666667s;
}
body #map svg path:nth-of-type(33) {
  -webkit-transition-delay: 0s, 0.86s;
          transition-delay: 0s, 0.86s;
}
body #map svg path:nth-of-type(34) {
  -webkit-transition-delay: 0s, 0.8633333333s;
          transition-delay: 0s, 0.8633333333s;
}
body #map svg path:nth-of-type(35) {
  -webkit-transition-delay: 0s, 0.8666666667s;
          transition-delay: 0s, 0.8666666667s;
}
body #map svg path:nth-of-type(36) {
  -webkit-transition-delay: 0s, 0.87s;
          transition-delay: 0s, 0.87s;
}
body #map svg path:nth-of-type(37) {
  -webkit-transition-delay: 0s, 0.8733333333s;
          transition-delay: 0s, 0.8733333333s;
}
body #map svg path:nth-of-type(38) {
  -webkit-transition-delay: 0s, 0.8766666667s;
          transition-delay: 0s, 0.8766666667s;
}
body #map svg path:nth-of-type(39) {
  -webkit-transition-delay: 0s, 0.88s;
          transition-delay: 0s, 0.88s;
}
body #map svg path:nth-of-type(40) {
  -webkit-transition-delay: 0s, 0.8833333333s;
          transition-delay: 0s, 0.8833333333s;
}
body #map svg path:nth-of-type(41) {
  -webkit-transition-delay: 0s, 0.8866666667s;
          transition-delay: 0s, 0.8866666667s;
}
body #map svg path:nth-of-type(42) {
  -webkit-transition-delay: 0s, 0.89s;
          transition-delay: 0s, 0.89s;
}
body #map svg path:nth-of-type(43) {
  -webkit-transition-delay: 0s, 0.8933333333s;
          transition-delay: 0s, 0.8933333333s;
}
body #map svg path:nth-of-type(44) {
  -webkit-transition-delay: 0s, 0.8966666667s;
          transition-delay: 0s, 0.8966666667s;
}
body #map svg path:nth-of-type(45) {
  -webkit-transition-delay: 0s, 0.9s;
          transition-delay: 0s, 0.9s;
}
body #map svg path:nth-of-type(46) {
  -webkit-transition-delay: 0s, 0.9033333333s;
          transition-delay: 0s, 0.9033333333s;
}
body #map svg path:nth-of-type(47) {
  -webkit-transition-delay: 0s, 0.9066666667s;
          transition-delay: 0s, 0.9066666667s;
}
body #map svg path:nth-of-type(48) {
  -webkit-transition-delay: 0s, 0.91s;
          transition-delay: 0s, 0.91s;
}
body #map svg path:nth-of-type(49) {
  -webkit-transition-delay: 0s, 0.9133333333s;
          transition-delay: 0s, 0.9133333333s;
}
body #map svg path:nth-of-type(50) {
  -webkit-transition-delay: 0s, 0.9166666667s;
          transition-delay: 0s, 0.9166666667s;
}
body #map svg path:nth-of-type(51) {
  -webkit-transition-delay: 0s, 0.92s;
          transition-delay: 0s, 0.92s;
}
body #map svg path:nth-of-type(52) {
  -webkit-transition-delay: 0s, 0.9233333333s;
          transition-delay: 0s, 0.9233333333s;
}
body #map svg path:nth-of-type(53) {
  -webkit-transition-delay: 0s, 0.9266666667s;
          transition-delay: 0s, 0.9266666667s;
}
body #map svg path:nth-of-type(54) {
  -webkit-transition-delay: 0s, 0.93s;
          transition-delay: 0s, 0.93s;
}
body #map svg path:nth-of-type(55) {
  -webkit-transition-delay: 0s, 0.9333333333s;
          transition-delay: 0s, 0.9333333333s;
}
body #map svg path:nth-of-type(56) {
  -webkit-transition-delay: 0s, 0.9366666667s;
          transition-delay: 0s, 0.9366666667s;
}
body #map svg path:nth-of-type(57) {
  -webkit-transition-delay: 0s, 0.94s;
          transition-delay: 0s, 0.94s;
}
body #map svg path:nth-of-type(58) {
  -webkit-transition-delay: 0s, 0.9433333333s;
          transition-delay: 0s, 0.9433333333s;
}
body #map svg path:nth-of-type(59) {
  -webkit-transition-delay: 0s, 0.9466666667s;
          transition-delay: 0s, 0.9466666667s;
}
body #map svg path:nth-of-type(60) {
  -webkit-transition-delay: 0s, 0.95s;
          transition-delay: 0s, 0.95s;
}
body #map svg path:nth-of-type(61) {
  -webkit-transition-delay: 0s, 0.9533333333s;
          transition-delay: 0s, 0.9533333333s;
}
body #map svg path:nth-of-type(62) {
  -webkit-transition-delay: 0s, 0.9566666667s;
          transition-delay: 0s, 0.9566666667s;
}
body #map svg path:nth-of-type(63) {
  -webkit-transition-delay: 0s, 0.96s;
          transition-delay: 0s, 0.96s;
}
body #map svg path:nth-of-type(64) {
  -webkit-transition-delay: 0s, 0.9633333333s;
          transition-delay: 0s, 0.9633333333s;
}
body #map svg path:nth-of-type(65) {
  -webkit-transition-delay: 0s, 0.9666666667s;
          transition-delay: 0s, 0.9666666667s;
}
body #map svg path:nth-of-type(66) {
  -webkit-transition-delay: 0s, 0.97s;
          transition-delay: 0s, 0.97s;
}
body #map svg path:nth-of-type(67) {
  -webkit-transition-delay: 0s, 0.9733333333s;
          transition-delay: 0s, 0.9733333333s;
}
body #map svg path:nth-of-type(68) {
  -webkit-transition-delay: 0s, 0.9766666667s;
          transition-delay: 0s, 0.9766666667s;
}
body #map svg path:nth-of-type(69) {
  -webkit-transition-delay: 0s, 0.98s;
          transition-delay: 0s, 0.98s;
}
body #map svg path:nth-of-type(70) {
  -webkit-transition-delay: 0s, 0.9833333333s;
          transition-delay: 0s, 0.9833333333s;
}
body #map svg path:nth-of-type(71) {
  -webkit-transition-delay: 0s, 0.9866666667s;
          transition-delay: 0s, 0.9866666667s;
}
body #map svg path:nth-of-type(72) {
  -webkit-transition-delay: 0s, 0.99s;
          transition-delay: 0s, 0.99s;
}
body #map svg path:nth-of-type(73) {
  -webkit-transition-delay: 0s, 0.9933333333s;
          transition-delay: 0s, 0.9933333333s;
}
body #map svg path:nth-of-type(74) {
  -webkit-transition-delay: 0s, 0.9966666667s;
          transition-delay: 0s, 0.9966666667s;
}
body #map svg path:nth-of-type(75) {
  -webkit-transition-delay: 0s, 1s;
          transition-delay: 0s, 1s;
}
body #map svg path:nth-of-type(76) {
  -webkit-transition-delay: 0s, 1.0033333333s;
          transition-delay: 0s, 1.0033333333s;
}
body #map svg path:nth-of-type(77) {
  -webkit-transition-delay: 0s, 1.0066666667s;
          transition-delay: 0s, 1.0066666667s;
}
body #map svg path:nth-of-type(78) {
  -webkit-transition-delay: 0s, 1.01s;
          transition-delay: 0s, 1.01s;
}
body #map svg path:nth-of-type(79) {
  -webkit-transition-delay: 0s, 1.0133333333s;
          transition-delay: 0s, 1.0133333333s;
}
body #map svg path:nth-of-type(80) {
  -webkit-transition-delay: 0s, 1.0166666667s;
          transition-delay: 0s, 1.0166666667s;
}
body #map svg path:nth-of-type(81) {
  -webkit-transition-delay: 0s, 1.02s;
          transition-delay: 0s, 1.02s;
}
body #map svg path:nth-of-type(82) {
  -webkit-transition-delay: 0s, 1.0233333333s;
          transition-delay: 0s, 1.0233333333s;
}
body #map svg path:nth-of-type(83) {
  -webkit-transition-delay: 0s, 1.0266666667s;
          transition-delay: 0s, 1.0266666667s;
}
body #map svg path:nth-of-type(84) {
  -webkit-transition-delay: 0s, 1.03s;
          transition-delay: 0s, 1.03s;
}
body #map svg path:nth-of-type(85) {
  -webkit-transition-delay: 0s, 1.0333333333s;
          transition-delay: 0s, 1.0333333333s;
}
body #map svg path:nth-of-type(86) {
  -webkit-transition-delay: 0s, 1.0366666667s;
          transition-delay: 0s, 1.0366666667s;
}
body #map svg path:nth-of-type(87) {
  -webkit-transition-delay: 0s, 1.04s;
          transition-delay: 0s, 1.04s;
}
body #map svg path:nth-of-type(88) {
  -webkit-transition-delay: 0s, 1.0433333333s;
          transition-delay: 0s, 1.0433333333s;
}
body #map svg path:nth-of-type(89) {
  -webkit-transition-delay: 0s, 1.0466666667s;
          transition-delay: 0s, 1.0466666667s;
}
body #map svg path:nth-of-type(90) {
  -webkit-transition-delay: 0s, 1.05s;
          transition-delay: 0s, 1.05s;
}
body #map svg path:nth-of-type(91) {
  -webkit-transition-delay: 0s, 1.0533333333s;
          transition-delay: 0s, 1.0533333333s;
}
body #map svg path:nth-of-type(92) {
  -webkit-transition-delay: 0s, 1.0566666667s;
          transition-delay: 0s, 1.0566666667s;
}
body #map svg path:nth-of-type(93) {
  -webkit-transition-delay: 0s, 1.06s;
          transition-delay: 0s, 1.06s;
}
body #map svg path:nth-of-type(94) {
  -webkit-transition-delay: 0s, 1.0633333333s;
          transition-delay: 0s, 1.0633333333s;
}
body #map svg path:nth-of-type(95) {
  -webkit-transition-delay: 0s, 1.0666666667s;
          transition-delay: 0s, 1.0666666667s;
}
body #map svg path:nth-of-type(96) {
  -webkit-transition-delay: 0s, 1.07s;
          transition-delay: 0s, 1.07s;
}
body #map svg path:nth-of-type(97) {
  -webkit-transition-delay: 0s, 1.0733333333s;
          transition-delay: 0s, 1.0733333333s;
}
body #map svg path:nth-of-type(98) {
  -webkit-transition-delay: 0s, 1.0766666667s;
          transition-delay: 0s, 1.0766666667s;
}
body #map svg path:nth-of-type(99) {
  -webkit-transition-delay: 0s, 1.08s;
          transition-delay: 0s, 1.08s;
}
body #map svg path:nth-of-type(100) {
  -webkit-transition-delay: 0s, 1.0833333333s;
          transition-delay: 0s, 1.0833333333s;
}
body #map svg path:nth-of-type(101) {
  -webkit-transition-delay: 0s, 1.0866666667s;
          transition-delay: 0s, 1.0866666667s;
}
body #map svg path:nth-of-type(102) {
  -webkit-transition-delay: 0s, 1.09s;
          transition-delay: 0s, 1.09s;
}
body #map svg path:nth-of-type(103) {
  -webkit-transition-delay: 0s, 1.0933333333s;
          transition-delay: 0s, 1.0933333333s;
}
body #map svg path:nth-of-type(104) {
  -webkit-transition-delay: 0s, 1.0966666667s;
          transition-delay: 0s, 1.0966666667s;
}
body #map svg path:nth-of-type(105) {
  -webkit-transition-delay: 0s, 1.1s;
          transition-delay: 0s, 1.1s;
}
body #map svg path:nth-of-type(106) {
  -webkit-transition-delay: 0s, 1.1033333333s;
          transition-delay: 0s, 1.1033333333s;
}
body #map svg path:nth-of-type(107) {
  -webkit-transition-delay: 0s, 1.1066666667s;
          transition-delay: 0s, 1.1066666667s;
}
body #map svg path:nth-of-type(108) {
  -webkit-transition-delay: 0s, 1.11s;
          transition-delay: 0s, 1.11s;
}
body #map svg path:nth-of-type(109) {
  -webkit-transition-delay: 0s, 1.1133333333s;
          transition-delay: 0s, 1.1133333333s;
}
body #map svg path:nth-of-type(110) {
  -webkit-transition-delay: 0s, 1.1166666667s;
          transition-delay: 0s, 1.1166666667s;
}
body #map svg path:nth-of-type(111) {
  -webkit-transition-delay: 0s, 1.12s;
          transition-delay: 0s, 1.12s;
}
body #map svg path:nth-of-type(112) {
  -webkit-transition-delay: 0s, 1.1233333333s;
          transition-delay: 0s, 1.1233333333s;
}
body #map svg path:nth-of-type(113) {
  -webkit-transition-delay: 0s, 1.1266666667s;
          transition-delay: 0s, 1.1266666667s;
}
body #map svg path:nth-of-type(114) {
  -webkit-transition-delay: 0s, 1.13s;
          transition-delay: 0s, 1.13s;
}
body #map svg path:nth-of-type(115) {
  -webkit-transition-delay: 0s, 1.1333333333s;
          transition-delay: 0s, 1.1333333333s;
}
body #map svg path:nth-of-type(116) {
  -webkit-transition-delay: 0s, 1.1366666667s;
          transition-delay: 0s, 1.1366666667s;
}
body #map svg path:nth-of-type(117) {
  -webkit-transition-delay: 0s, 1.14s;
          transition-delay: 0s, 1.14s;
}
body #map svg path:nth-of-type(118) {
  -webkit-transition-delay: 0s, 1.1433333333s;
          transition-delay: 0s, 1.1433333333s;
}
body #map svg path:nth-of-type(119) {
  -webkit-transition-delay: 0s, 1.1466666667s;
          transition-delay: 0s, 1.1466666667s;
}
body #map svg path:nth-of-type(120) {
  -webkit-transition-delay: 0s, 1.15s;
          transition-delay: 0s, 1.15s;
}
body #map svg path:nth-of-type(121) {
  -webkit-transition-delay: 0s, 1.1533333333s;
          transition-delay: 0s, 1.1533333333s;
}
body #map svg path:nth-of-type(122) {
  -webkit-transition-delay: 0s, 1.1566666667s;
          transition-delay: 0s, 1.1566666667s;
}
body #map svg path:nth-of-type(123) {
  -webkit-transition-delay: 0s, 1.16s;
          transition-delay: 0s, 1.16s;
}
body #map svg path:nth-of-type(124) {
  -webkit-transition-delay: 0s, 1.1633333333s;
          transition-delay: 0s, 1.1633333333s;
}
body #map svg path:nth-of-type(125) {
  -webkit-transition-delay: 0s, 1.1666666667s;
          transition-delay: 0s, 1.1666666667s;
}
body #map svg path:nth-of-type(126) {
  -webkit-transition-delay: 0s, 1.17s;
          transition-delay: 0s, 1.17s;
}
body #map svg path:nth-of-type(127) {
  -webkit-transition-delay: 0s, 1.1733333333s;
          transition-delay: 0s, 1.1733333333s;
}
body #map svg path:nth-of-type(128) {
  -webkit-transition-delay: 0s, 1.1766666667s;
          transition-delay: 0s, 1.1766666667s;
}
body #map svg path:nth-of-type(129) {
  -webkit-transition-delay: 0s, 1.18s;
          transition-delay: 0s, 1.18s;
}
body #map svg path:nth-of-type(130) {
  -webkit-transition-delay: 0s, 1.1833333333s;
          transition-delay: 0s, 1.1833333333s;
}
body #map svg path:nth-of-type(131) {
  -webkit-transition-delay: 0s, 1.1866666667s;
          transition-delay: 0s, 1.1866666667s;
}
body #map svg path:nth-of-type(132) {
  -webkit-transition-delay: 0s, 1.19s;
          transition-delay: 0s, 1.19s;
}
body #map svg path:nth-of-type(133) {
  -webkit-transition-delay: 0s, 1.1933333333s;
          transition-delay: 0s, 1.1933333333s;
}
body #map svg path:nth-of-type(134) {
  -webkit-transition-delay: 0s, 1.1966666667s;
          transition-delay: 0s, 1.1966666667s;
}
body #map svg path:nth-of-type(135) {
  -webkit-transition-delay: 0s, 1.2s;
          transition-delay: 0s, 1.2s;
}
body #map svg path:nth-of-type(136) {
  -webkit-transition-delay: 0s, 1.2033333333s;
          transition-delay: 0s, 1.2033333333s;
}
body #map svg path:nth-of-type(137) {
  -webkit-transition-delay: 0s, 1.2066666667s;
          transition-delay: 0s, 1.2066666667s;
}
body #map svg path:nth-of-type(138) {
  -webkit-transition-delay: 0s, 1.21s;
          transition-delay: 0s, 1.21s;
}
body #map svg path:nth-of-type(139) {
  -webkit-transition-delay: 0s, 1.2133333333s;
          transition-delay: 0s, 1.2133333333s;
}
body #map svg path:nth-of-type(140) {
  -webkit-transition-delay: 0s, 1.2166666667s;
          transition-delay: 0s, 1.2166666667s;
}
body #map svg path:nth-of-type(141) {
  -webkit-transition-delay: 0s, 1.22s;
          transition-delay: 0s, 1.22s;
}
body #map svg path:nth-of-type(142) {
  -webkit-transition-delay: 0s, 1.2233333333s;
          transition-delay: 0s, 1.2233333333s;
}
body #map svg path:nth-of-type(143) {
  -webkit-transition-delay: 0s, 1.2266666667s;
          transition-delay: 0s, 1.2266666667s;
}
body #map svg path:nth-of-type(144) {
  -webkit-transition-delay: 0s, 1.23s;
          transition-delay: 0s, 1.23s;
}
body #map svg path:nth-of-type(145) {
  -webkit-transition-delay: 0s, 1.2333333333s;
          transition-delay: 0s, 1.2333333333s;
}
body #map svg path:nth-of-type(146) {
  -webkit-transition-delay: 0s, 1.2366666667s;
          transition-delay: 0s, 1.2366666667s;
}
body #map svg path:nth-of-type(147) {
  -webkit-transition-delay: 0s, 1.24s;
          transition-delay: 0s, 1.24s;
}
body #map svg path:nth-of-type(148) {
  -webkit-transition-delay: 0s, 1.2433333333s;
          transition-delay: 0s, 1.2433333333s;
}
body #map svg path:nth-of-type(149) {
  -webkit-transition-delay: 0s, 1.2466666667s;
          transition-delay: 0s, 1.2466666667s;
}
body #map svg path:nth-of-type(150) {
  -webkit-transition-delay: 0s, 1.25s;
          transition-delay: 0s, 1.25s;
}
body #map svg path:nth-of-type(151) {
  -webkit-transition-delay: 0s, 1.2533333333s;
          transition-delay: 0s, 1.2533333333s;
}
body #map svg path:nth-of-type(152) {
  -webkit-transition-delay: 0s, 1.2566666667s;
          transition-delay: 0s, 1.2566666667s;
}
body #map svg path:nth-of-type(153) {
  -webkit-transition-delay: 0s, 1.26s;
          transition-delay: 0s, 1.26s;
}
body #map svg path:nth-of-type(154) {
  -webkit-transition-delay: 0s, 1.2633333333s;
          transition-delay: 0s, 1.2633333333s;
}
body #map svg path:nth-of-type(155) {
  -webkit-transition-delay: 0s, 1.2666666667s;
          transition-delay: 0s, 1.2666666667s;
}
body #map svg path:nth-of-type(156) {
  -webkit-transition-delay: 0s, 1.27s;
          transition-delay: 0s, 1.27s;
}
body #map svg path:nth-of-type(157) {
  -webkit-transition-delay: 0s, 1.2733333333s;
          transition-delay: 0s, 1.2733333333s;
}
body #map svg path:nth-of-type(158) {
  -webkit-transition-delay: 0s, 1.2766666667s;
          transition-delay: 0s, 1.2766666667s;
}
body #map svg path:nth-of-type(159) {
  -webkit-transition-delay: 0s, 1.28s;
          transition-delay: 0s, 1.28s;
}
body #map svg path:nth-of-type(160) {
  -webkit-transition-delay: 0s, 1.2833333333s;
          transition-delay: 0s, 1.2833333333s;
}
body #map svg path:nth-of-type(161) {
  -webkit-transition-delay: 0s, 1.2866666667s;
          transition-delay: 0s, 1.2866666667s;
}
body #map svg path:nth-of-type(162) {
  -webkit-transition-delay: 0s, 1.29s;
          transition-delay: 0s, 1.29s;
}
body #map svg path:nth-of-type(163) {
  -webkit-transition-delay: 0s, 1.2933333333s;
          transition-delay: 0s, 1.2933333333s;
}
body #map svg path:nth-of-type(164) {
  -webkit-transition-delay: 0s, 1.2966666667s;
          transition-delay: 0s, 1.2966666667s;
}
body #map svg path:nth-of-type(165) {
  -webkit-transition-delay: 0s, 1.3s;
          transition-delay: 0s, 1.3s;
}
body #map svg path:nth-of-type(166) {
  -webkit-transition-delay: 0s, 1.3033333333s;
          transition-delay: 0s, 1.3033333333s;
}
body #map svg path:nth-of-type(167) {
  -webkit-transition-delay: 0s, 1.3066666667s;
          transition-delay: 0s, 1.3066666667s;
}
body #map svg path:nth-of-type(168) {
  -webkit-transition-delay: 0s, 1.31s;
          transition-delay: 0s, 1.31s;
}
body #map svg path:nth-of-type(169) {
  -webkit-transition-delay: 0s, 1.3133333333s;
          transition-delay: 0s, 1.3133333333s;
}
body #map svg path:nth-of-type(170) {
  -webkit-transition-delay: 0s, 1.3166666667s;
          transition-delay: 0s, 1.3166666667s;
}
body #map svg path:nth-of-type(171) {
  -webkit-transition-delay: 0s, 1.32s;
          transition-delay: 0s, 1.32s;
}
body #map svg path:nth-of-type(172) {
  -webkit-transition-delay: 0s, 1.3233333333s;
          transition-delay: 0s, 1.3233333333s;
}
body #map svg path:nth-of-type(173) {
  -webkit-transition-delay: 0s, 1.3266666667s;
          transition-delay: 0s, 1.3266666667s;
}
body #map svg path:nth-of-type(174) {
  -webkit-transition-delay: 0s, 1.33s;
          transition-delay: 0s, 1.33s;
}
body #map svg path:nth-of-type(175) {
  -webkit-transition-delay: 0s, 1.3333333333s;
          transition-delay: 0s, 1.3333333333s;
}
body #map svg path:nth-of-type(176) {
  -webkit-transition-delay: 0s, 1.3366666667s;
          transition-delay: 0s, 1.3366666667s;
}
body #map svg path:nth-of-type(177) {
  -webkit-transition-delay: 0s, 1.34s;
          transition-delay: 0s, 1.34s;
}
body #map svg path:nth-of-type(178) {
  -webkit-transition-delay: 0s, 1.3433333333s;
          transition-delay: 0s, 1.3433333333s;
}
body #map svg path:nth-of-type(179) {
  -webkit-transition-delay: 0s, 1.3466666667s;
          transition-delay: 0s, 1.3466666667s;
}
body #map svg path:nth-of-type(180) {
  -webkit-transition-delay: 0s, 1.35s;
          transition-delay: 0s, 1.35s;
}
body #map svg path:nth-of-type(181) {
  -webkit-transition-delay: 0s, 1.3533333333s;
          transition-delay: 0s, 1.3533333333s;
}
body #map svg path:nth-of-type(182) {
  -webkit-transition-delay: 0s, 1.3566666667s;
          transition-delay: 0s, 1.3566666667s;
}
body #map svg path:nth-of-type(183) {
  -webkit-transition-delay: 0s, 1.36s;
          transition-delay: 0s, 1.36s;
}
body #map svg path:nth-of-type(184) {
  -webkit-transition-delay: 0s, 1.3633333333s;
          transition-delay: 0s, 1.3633333333s;
}
body #map svg path:nth-of-type(185) {
  -webkit-transition-delay: 0s, 1.3666666667s;
          transition-delay: 0s, 1.3666666667s;
}
body #map svg path:nth-of-type(186) {
  -webkit-transition-delay: 0s, 1.37s;
          transition-delay: 0s, 1.37s;
}
body #map svg path:nth-of-type(187) {
  -webkit-transition-delay: 0s, 1.3733333333s;
          transition-delay: 0s, 1.3733333333s;
}
body #map svg path:nth-of-type(188) {
  -webkit-transition-delay: 0s, 1.3766666667s;
          transition-delay: 0s, 1.3766666667s;
}
body #map svg path:nth-of-type(189) {
  -webkit-transition-delay: 0s, 1.38s;
          transition-delay: 0s, 1.38s;
}
body #map svg path:nth-of-type(190) {
  -webkit-transition-delay: 0s, 1.3833333333s;
          transition-delay: 0s, 1.3833333333s;
}
body #map svg path:nth-of-type(191) {
  -webkit-transition-delay: 0s, 1.3866666667s;
          transition-delay: 0s, 1.3866666667s;
}
body #map svg path:nth-of-type(192) {
  -webkit-transition-delay: 0s, 1.39s;
          transition-delay: 0s, 1.39s;
}
body #map svg path:nth-of-type(193) {
  -webkit-transition-delay: 0s, 1.3933333333s;
          transition-delay: 0s, 1.3933333333s;
}
body #map svg path:nth-of-type(194) {
  -webkit-transition-delay: 0s, 1.3966666667s;
          transition-delay: 0s, 1.3966666667s;
}
body #map svg path:nth-of-type(195) {
  -webkit-transition-delay: 0s, 1.4s;
          transition-delay: 0s, 1.4s;
}
body #map svg path:nth-of-type(196) {
  -webkit-transition-delay: 0s, 1.4033333333s;
          transition-delay: 0s, 1.4033333333s;
}
body #map svg path:nth-of-type(197) {
  -webkit-transition-delay: 0s, 1.4066666667s;
          transition-delay: 0s, 1.4066666667s;
}
body #map svg path:nth-of-type(198) {
  -webkit-transition-delay: 0s, 1.41s;
          transition-delay: 0s, 1.41s;
}
body #map svg path:nth-of-type(199) {
  -webkit-transition-delay: 0s, 1.4133333333s;
          transition-delay: 0s, 1.4133333333s;
}
body #map svg path:nth-of-type(200) {
  -webkit-transition-delay: 0s, 1.4166666667s;
          transition-delay: 0s, 1.4166666667s;
}
body #map svg path:nth-of-type(201) {
  -webkit-transition-delay: 0s, 1.42s;
          transition-delay: 0s, 1.42s;
}
body #map svg path:nth-of-type(202) {
  -webkit-transition-delay: 0s, 1.4233333333s;
          transition-delay: 0s, 1.4233333333s;
}
body #map svg path:nth-of-type(203) {
  -webkit-transition-delay: 0s, 1.4266666667s;
          transition-delay: 0s, 1.4266666667s;
}
body #map svg path:nth-of-type(204) {
  -webkit-transition-delay: 0s, 1.43s;
          transition-delay: 0s, 1.43s;
}
body #map svg path:nth-of-type(205) {
  -webkit-transition-delay: 0s, 1.4333333333s;
          transition-delay: 0s, 1.4333333333s;
}
body #map svg path:nth-of-type(206) {
  -webkit-transition-delay: 0s, 1.4366666667s;
          transition-delay: 0s, 1.4366666667s;
}
body #map svg path:nth-of-type(207) {
  -webkit-transition-delay: 0s, 1.44s;
          transition-delay: 0s, 1.44s;
}
body #map svg path:nth-of-type(208) {
  -webkit-transition-delay: 0s, 1.4433333333s;
          transition-delay: 0s, 1.4433333333s;
}
body #map svg path:nth-of-type(209) {
  -webkit-transition-delay: 0s, 1.4466666667s;
          transition-delay: 0s, 1.4466666667s;
}
body #map svg path:nth-of-type(210) {
  -webkit-transition-delay: 0s, 1.45s;
          transition-delay: 0s, 1.45s;
}
body #map svg path:nth-of-type(211) {
  -webkit-transition-delay: 0s, 1.4533333333s;
          transition-delay: 0s, 1.4533333333s;
}
body #map svg path:nth-of-type(212) {
  -webkit-transition-delay: 0s, 1.4566666667s;
          transition-delay: 0s, 1.4566666667s;
}
body #map svg path:nth-of-type(213) {
  -webkit-transition-delay: 0s, 1.46s;
          transition-delay: 0s, 1.46s;
}
body #map svg path:nth-of-type(214) {
  -webkit-transition-delay: 0s, 1.4633333333s;
          transition-delay: 0s, 1.4633333333s;
}
body #map svg path:nth-of-type(215) {
  -webkit-transition-delay: 0s, 1.4666666667s;
          transition-delay: 0s, 1.4666666667s;
}
body #map svg path:nth-of-type(216) {
  -webkit-transition-delay: 0s, 1.47s;
          transition-delay: 0s, 1.47s;
}
body #map svg path:nth-of-type(217) {
  -webkit-transition-delay: 0s, 1.4733333333s;
          transition-delay: 0s, 1.4733333333s;
}
body #map svg path:nth-of-type(218) {
  -webkit-transition-delay: 0s, 1.4766666667s;
          transition-delay: 0s, 1.4766666667s;
}
body #map svg path:nth-of-type(219) {
  -webkit-transition-delay: 0s, 1.48s;
          transition-delay: 0s, 1.48s;
}
body #map svg path:nth-of-type(220) {
  -webkit-transition-delay: 0s, 1.4833333333s;
          transition-delay: 0s, 1.4833333333s;
}
body #map svg path:nth-of-type(221) {
  -webkit-transition-delay: 0s, 1.4866666667s;
          transition-delay: 0s, 1.4866666667s;
}
body #map svg path:nth-of-type(222) {
  -webkit-transition-delay: 0s, 1.49s;
          transition-delay: 0s, 1.49s;
}
body #map svg path:nth-of-type(223) {
  -webkit-transition-delay: 0s, 1.4933333333s;
          transition-delay: 0s, 1.4933333333s;
}
body #map svg path:nth-of-type(224) {
  -webkit-transition-delay: 0s, 1.4966666667s;
          transition-delay: 0s, 1.4966666667s;
}
body #map svg path:nth-of-type(225) {
  -webkit-transition-delay: 0s, 1.5s;
          transition-delay: 0s, 1.5s;
}
body #map svg path:nth-of-type(226) {
  -webkit-transition-delay: 0s, 1.5033333333s;
          transition-delay: 0s, 1.5033333333s;
}
body #map svg path:nth-of-type(227) {
  -webkit-transition-delay: 0s, 1.5066666667s;
          transition-delay: 0s, 1.5066666667s;
}
body #map svg path:nth-of-type(228) {
  -webkit-transition-delay: 0s, 1.51s;
          transition-delay: 0s, 1.51s;
}
body #map svg path:nth-of-type(229) {
  -webkit-transition-delay: 0s, 1.5133333333s;
          transition-delay: 0s, 1.5133333333s;
}
body #map svg path:nth-of-type(230) {
  -webkit-transition-delay: 0s, 1.5166666667s;
          transition-delay: 0s, 1.5166666667s;
}
body #map svg path:nth-of-type(231) {
  -webkit-transition-delay: 0s, 1.52s;
          transition-delay: 0s, 1.52s;
}
body #map svg path:nth-of-type(232) {
  -webkit-transition-delay: 0s, 1.5233333333s;
          transition-delay: 0s, 1.5233333333s;
}
body #map svg path:nth-of-type(233) {
  -webkit-transition-delay: 0s, 1.5266666667s;
          transition-delay: 0s, 1.5266666667s;
}
body #map svg path:nth-of-type(234) {
  -webkit-transition-delay: 0s, 1.53s;
          transition-delay: 0s, 1.53s;
}
body #map svg path:nth-of-type(235) {
  -webkit-transition-delay: 0s, 1.5333333333s;
          transition-delay: 0s, 1.5333333333s;
}
body #map svg path:nth-of-type(236) {
  -webkit-transition-delay: 0s, 1.5366666667s;
          transition-delay: 0s, 1.5366666667s;
}
body #map svg path:nth-of-type(237) {
  -webkit-transition-delay: 0s, 1.54s;
          transition-delay: 0s, 1.54s;
}
body #map svg path:nth-of-type(238) {
  -webkit-transition-delay: 0s, 1.5433333333s;
          transition-delay: 0s, 1.5433333333s;
}
body #map svg path:nth-of-type(239) {
  -webkit-transition-delay: 0s, 1.5466666667s;
          transition-delay: 0s, 1.5466666667s;
}
body #map svg path:nth-of-type(240) {
  -webkit-transition-delay: 0s, 1.55s;
          transition-delay: 0s, 1.55s;
}
body #map svg path:nth-of-type(241) {
  -webkit-transition-delay: 0s, 1.5533333333s;
          transition-delay: 0s, 1.5533333333s;
}
body #map svg path:nth-of-type(242) {
  -webkit-transition-delay: 0s, 1.5566666667s;
          transition-delay: 0s, 1.5566666667s;
}
body #map svg path:nth-of-type(243) {
  -webkit-transition-delay: 0s, 1.56s;
          transition-delay: 0s, 1.56s;
}
body #map svg path:nth-of-type(244) {
  -webkit-transition-delay: 0s, 1.5633333333s;
          transition-delay: 0s, 1.5633333333s;
}
body #map svg path:nth-of-type(245) {
  -webkit-transition-delay: 0s, 1.5666666667s;
          transition-delay: 0s, 1.5666666667s;
}
body #map svg path:nth-of-type(246) {
  -webkit-transition-delay: 0s, 1.57s;
          transition-delay: 0s, 1.57s;
}
body #map svg path:nth-of-type(247) {
  -webkit-transition-delay: 0s, 1.5733333333s;
          transition-delay: 0s, 1.5733333333s;
}
body #map svg path:nth-of-type(248) {
  -webkit-transition-delay: 0s, 1.5766666667s;
          transition-delay: 0s, 1.5766666667s;
}
body #map svg path:nth-of-type(249) {
  -webkit-transition-delay: 0s, 1.58s;
          transition-delay: 0s, 1.58s;
}
body #map svg path:nth-of-type(250) {
  -webkit-transition-delay: 0s, 1.5833333333s;
          transition-delay: 0s, 1.5833333333s;
}
body #map svg path.active {
  z-index: 5;
  fill: var(--orange);
}
body #tooltip {
  width: 250px;
  height: 150px;
  display: -webkit-box;
  display: flex;
  flex-wrap: wrap;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
  padding: 10px 20px;
  box-sizing: border-box;
  position: absolute;
  background: var(--white);
  bottom: 0;
  left: 0;
  z-index: 999;
  opacity: 1;
  pointer-events: none;
  color: var(--navyblue);
  opacity: 0;
  -webkit-transition: opacity 0.2s ease-in-out;
  transition: opacity 0.2s ease-in-out;
  -webkit-transition-delay: 0.2s;
          transition-delay: 0.2s;
  border-radius: 3px;
  box-shadow: 0 0 0 3px var(--navyblue);
}
body #tooltip:after, body #tooltip:before {
  content: "";
  position: absolute;
  bottom: -10px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 10px 10px 0 10px;
  border-color: #fff transparent transparent transparent;
}
body #tooltip:before {
  border-width: 13px 13px 0 13px;
  border-color: var(--navyblue) transparent transparent transparent;
  bottom: -13px;
}
body #tooltip.active {
  opacity: 1;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}
body #tooltip .data {
  display: none;
  pointer-events: none;
  padding: 2.25rem 0 0;
}
body #tooltip .data h3 {
  color: var(--red);
  margin: 0px;
  width: 100%;
  font-family: "Oswald";
  font-weight: 900;
  font-size: 1.5rem;
  text-transform: uppercase;
  color: #fff;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  text-align: center;
  padding: 0.5rem 0;
  background: var(--darkblue);
  border-radius: 3px 3px 0 0;
}
body #tooltip .data h4 {
  color: var(--navyblue);
  margin: 0px;
  width: 100%;
  font-family: "Oswald";
  font-weight: 300;
  font-size: 1.25rem;
  line-height: 1.45;
}
body #tooltip .data h4 span {
  font-weight: 700;
  color: var(--orange);
}
body #tooltip .data h4:nth-of-type(2) span {
  color: var(--red);
}
body #tooltip .data h4:last-of-type span {
  color: var(--blue);
}
body #tooltip .data.active {
  display: block;
}
</style>
<script>
    var countryData = "";
var activeCountry = "";
var timestamp = 0;
var mY = 0;

function getData() {
  $.ajax({
    url: "https://coronavirus-19-api.herokuapp.com/countries",
    type: "GET",
    success: function (response) {
      countryData = $(response);
      appendData();
    }
  });
}

getData();

function appendData() {
  for (var i = 0; i < countryData.length; i++) {
    $("#tooltip").append(
      "<div data-name='" +
        countryData[i].country +
        "' class='data'><h3>" +
        countryData[i].country +
        "</h3><h4>Total Cases:<span> " +
        countryData[i].cases +
        "</span></h4><h4>Total Deaths:<span> " +
        countryData[i].deaths +
        "</span></h4><h4>Total Recoveries:<span> " +
        countryData[i].recovered +
        "</span></h4></div>"
    );
  }
  $("#lower path").hover(function () {
    $("#tooltip").toggleClass("active");
    activeCountry = $(this).attr("data-name");
    $(this).toggleClass("active");
    $(".data").removeClass("active");
    $('.data[data-name="' + activeCountry + '"]').addClass("active");
  });
  setTimeout(function () {
    $("body").addClass("loaded");
  }, 2000);
}

var $self = $("#map"),
  $cursor = $("#tooltip"),
  $country = $("svg path"),
  $map = $("#map #lower");

$country.mouseover(function () {
  gsap.to(this, {
    duration: 0.2,
    scale: 1.05,
    transformOrigin: "50% 50%",
    overwrite: true
  });
});
$country.mouseout(function () {
  gsap.to(this, {
    duration: 0.2,
    scale: 1,
    overwrite: true
  });
});
$self.mousemove(function (e) {
  gsap.to($map, {
    left: e.pageX * -1,
    top: e.pageY * -1 + 150,
    duration: 0.2,
    scale: 1,
    overwrite: true
  });
  gsap.to($cursor, {
    left: e.pageX - 125,
    top: e.pageY - 175,
    duration: 0.2,
    overwrite: true
  });
});
$self.mouseout(function () {
  gsap.to($map, {
    duration: 1,
    left: "-50vw",
    top: "-25vh",
    overwrite: true
  });
});
</script>
<?php
require "header.php";
?>
</head>
<body>
<div id="map">
  <svg class="worldmap" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" enable_background="new 0 0 2000 1001" height="1001px" pretty_print="False" style="stroke-linejoin: round; stroke:#000; fill: none;" version="1.1" viewBox="0 0 2000 1001" width="2000px" id="lower" inkscape:version="0.48.4 r9939" sodipodi:docname="world.svg">
    <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1920" inkscape:window-height="1137" id="namedview231" showgrid="false" inkscape:zoom="1.144" inkscape:cx="593.00732" inkscape:cy="460.46398" inkscape:window-x="1192" inkscape:window-y="118" inkscape:window-maximized="1" inkscape:current-layer="svg2" />
    <defs id="defs4">
      <style type="text/css" id="style6">
        path {
          fill-rule: evenodd;
        }
      </style>
    </defs>
    <metadata id="metadata8">
      <views id="views10">
        <view h="1001" padding="0" w="2000" id="view12">
          <proj flip="auto" id="robinson" lon0="100.0" />
          <bbox h="2233.1" w="5271.17" x="-2635.59" y="-1308.06" id="bbox15" />
        </view>
      </views>
      <rdf:RDF>
        <cc:Work rdf:about="">
          <dc:format>image/svg+xml</dc:format>
          <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
          <dc:title />
        </cc:Work>
      </rdf:RDF>
    </metadata>
    <path inkscape:connector-curvature="0" id="AF" data-name="Afghanistan" data-id="AF" d="m 1369.9,333.8 -5.4,0 -3.8,-0.5 -2.5,2.9 -2.1,0.7 -1.5,1.3 -2.6,-2.1 -1,-5.4 -1.6,-0.3 0,-2 -3.2,-1.5 -1.7,2.3 0.2,2.6 -0.6,0.9 -3.2,-0.1 -0.9,3 -2.1,-1.3 -3.3,2.1 -1.8,-0.8 -4.3,-1.4 -2.9,0 -1.6,-0.2 -2.9,-1.7 -0.3,2.3 -4.1,1.2 0.1,5.2 -2.5,2 -4,0.9 -0.4,3 -3.9,0.8 -5.9,-2.4 -0.5,8 -0.5,4.7 2.5,0.9 -1.6,3.5 2.7,5.1 1.1,4 4.3,1.1 1.1,4 -3.9,5.8 9.6,3.2 5.3,-0.9 3.3,0.8 0.9,-1.4 3.8,0.5 6.6,-2.6 -0.8,-5.4 2.3,-3.6 4,0 0.2,-1.7 4,-0.9 2.1,0.6 1.7,-1.8 -1.1,-3.8 1.5,-3.8 3,-1.6 -3,-4.2 5.1,0.2 0.9,-2.3 -0.8,-2.5 2,-2.7 -1.4,-3.2 -1.9,-2.8 2.4,-2.8 5.3,-1.3 5.8,-0.8 2.4,-1.2 2.8,-0.7 -1.4,-1.9 z" />
    <path inkscape:connector-curvature="0" id="AO" data-name="Angola" data-id="AO" d="m 1068.3,609.6 -16.6,-0.1 -1.9,0.7 -1.7,-0.1 -2.3,0.9 -0.5,1.2 2.8,4 1.1,4.3 1.6,6.1 -1.7,2.6 -0.3,1.3 1.3,3.8 1.5,3.9 1.6,2.2 0.3,3.6 -0.7,4.8 -1.8,2.8 -3.3,4.2 -1.3,2.6 -1.9,5.7 -0.3,2.7 -2,5.9 -0.9,5.5 0.5,4 2.7,-1.2 3.3,-1 3.6,0.1 3.2,2.9 0.9,-0.4 22.5,-0.3 3.7,3 13.4,0.9 10.3,-2.5 -3.5,-4 -3.6,-5.2 0.8,-20.3 11.6,0.1 -0.5,-2.2 0.9,-2.4 -0.9,-3 0.7,-3 -0.5,-2 -2.6,-0.4 -3.5,1 -2.4,-0.2 -1.4,0.6 0.5,-7.6 -1.9,-2.3 -0.3,-4 0.9,-3.8 -1.2,-2.4 0,-4 -6.8,0 0.5,-2.3 -2.9,0 -0.3,1.1 -3.4,0.3 -1.5,3.7 -0.9,1.6 -3,-0.9 -1.9,0.9 -3.7,0.5 -2.1,-3.3 -1.3,-2.1 -1.6,-3.8 -1.3,-4.7 z m -21.8,-1.3 0.2,-2.7 0.9,-1.7 2,-1.3 -2,-2.2 -1.8,1.1 -2.2,2.7 1.4,4.8 1.5,-0.7 z" />
    <path inkscape:connector-curvature="0" id="AL" data-name="Albania" data-id="AL" d="m 1077.5,300.5 -2,3.1 0.5,1.9 0,0 1,1 -0.5,1.9 -0.1,4.3 0.7,3 3,2.1 0.2,1.4 1,0.4 2.1,-3 0.1,-2.1 1.6,-0.9 0,-1.6 -2.3,-1.6 -0.9,-2.6 0.4,-2.1 0,0 -0.5,-2.3 -1.3,-0.6 -1.3,-1.6 -1.3,0.5 -0.4,-1.2 z" />
    <path inkscape:connector-curvature="0" id="AE" data-name="UAE" data-id="AE" d="m 1283.9,408.6 -1.3,-2.2 -3,3.9 -3.7,4.1 -3.3,4.3 -3.3,-0.2 -4.6,-0.2 -4.2,1 -0.3,-1.7 -1,0.3 0.4,1.5 2.6,6.4 16.8,3.2 1,-1.3 -0.1,-2.6 1.4,-2.6 -0.3,-2.6 2.4,-1.3 -1.1,-0.8 0.1,-4.2 2.8,0 -1.3,-5 z" />
    <path inkscape:connector-curvature="0" id="AR" data-name="Argentina" data-id="AR" d="m 669.8,920.7 0.9,-3 -7.3,-1.5 -7.7,-3.6 -4.3,-4.6 -3,-2.8 5.9,13.5 5,0 2.9,0.2 3.3,2.1 4.3,-0.3 z m -50.4,-208.1 -7.4,-1.5 -4,5.7 0.9,1.6 -1.1,6.6 -5.6,3.2 1.6,10.6 -0.9,2 2,2.5 -3.2,4 -2.6,5.9 -0.9,5.8 1.7,6.2 -2.1,6.5 4.9,10.9 1.6,1.2 1.3,5.9 -1.6,6.2 1.4,5.4 -2.9,4.3 1.5,5.9 3.3,6.3 -2.5,2.4 0.3,5.7 0.7,6.4 3.3,7.6 -1.6,1.2 3.6,7.1 3.1,2.3 -0.8,2.6 2.8,1.3 1.3,2.3 -1.8,1.1 1.8,3.7 1.1,8.2 -0.7,5.3 1.8,3.2 -0.1,3.9 -2.7,2.7 3.1,6.6 2.6,2.2 3.1,-0.4 1.8,4.6 3.5,3.6 12,0.8 4.8,0.9 2.2,0.4 -4.7,-3.6 -4.1,-6.3 0.9,-2.9 3.5,-2.5 0.5,-7.2 4.7,-3.5 -0.2,-5.6 -5.2,-1.3 -6.4,-4.5 -0.1,-4.7 2.9,-3.1 4.7,-0.1 0.2,-3.3 -1.2,-6.1 2.9,-3.9 4.1,-1.9 -2.5,-3.2 -2.2,2 -4,-1.9 -2.5,-6.2 1.5,-1.6 5.6,2.3 5,-0.9 2.5,-2.2 -1.8,-3.1 -0.1,-4.8 -2,-3.8 5.8,0.6 10.2,-1.3 6.9,-3.4 3.3,-8.3 -0.3,-3.2 -3.9,-2.8 -0.1,-4.5 -7.8,-5.5 -0.3,-3.3 -0.4,-4.2 0.9,-1.4 -1.1,-6.3 0.3,-6.5 0.5,-5.1 5.9,-8.6 5.3,-6.2 3.3,-2.6 4.2,-3.5 -0.5,-5.1 -3.1,-3.7 -2.6,1.2 -0.3,5.7 -4.3,4.8 -4.2,1.1 -6.2,-1 -5.7,-1.8 4.2,-9.6 -1.1,-2.8 -5.9,-2.5 -7.2,-4.7 -4.6,-1 -11.2,-10.4 -1,-1.3 -6.3,-0.3 -1.6,5.1 -3.7,-4.6 z" />
    <path inkscape:connector-curvature="0" id="AM" data-name="Armenia" data-id="AM" d="m 1219,325.1 -0.9,-4.4 -2.5,-1.1 -2.5,-1.7 1,-2 -3.1,-2.2 0.7,-1.5 -2.2,-1.1 -1.4,-1.7 -6.9,1 1.3,2.2 0,3.1 4.2,1.5 2.4,1.9 1,-0.2 1.8,1.7 2.3,0 0.2,1 2.8,3.7 1.8,-0.2 z" />
    <path inkscape:connector-curvature="0" id="AU" data-name="Australia" data-id="AU" d="m 1726.7,832 -3,-0.5 -1.9,2.9 -0.6,5.4 -2.1,4 -0.5,5.3 3,0.2 0.8,0.3 6.6,-4.3 0.6,1.7 4,-4.9 3.2,-2.2 4.5,-7.3 -2.8,-0.5 -4.8,1.2 -3.4,0.9 -3.6,-2.2 z m 50.1,-172.3 0.5,-2.3 0.1,-3.6 -1.6,-3.2 0.1,-2.7 -1.3,-0.8 0.1,-3.9 -1.2,-3.2 -2.3,2.4 -0.4,1.8 -1.5,3.5 -1.8,3.4 0.6,2.1 -1.2,1.3 -1.5,4.8 0.1,3.7 -0.7,1.8 0.3,3.1 -2.6,5 -1.3,3.5 -1.7,2.9 -1.7,3.4 -4.1,2.1 -4.9,-2.1 -0.5,-2 -2.5,-1.6 -1.6,0 -3.3,-3.8 -2.5,-2.2 -3.9,-2 -3.9,-3.5 -0.1,-1.8 2.5,-3.1 2.1,-3.2 -0.3,-2.6 1.9,-0.2 2.5,-2.5 2,-3.4 -2.2,-3.2 -1.5,1.2 -2,-0.5 -3.5,1.8 -3.2,-2 -1.7,0.7 -4.5,-1.6 -2.7,-2.7 -3.5,-1.5 -3.1,0.9 3.9,2.1 -0.3,3.2 -4.8,1.2 -2.8,-0.7 -3.6,2.2 -2.9,3.7 0.6,1.5 -2.7,1.7 -3.4,5.1 0.6,3.5 -3.4,-0.6 -3.5,0 -2.5,-3.8 -3.7,-2.9 -2.8,0.8 -2.6,0.9 -0.3,1.6 -2.4,-0.7 -0.3,1.8 -3,1.1 -1.7,2.5 -3.5,3.1 -1.4,4.8 -2.3,-1.3 -2.2,3.1 1.5,3 -2.6,1.2 -1.4,-5.5 -4.8,5.4 -0.8,3.5 -0.7,2.5 -3.8,3.3 -2,3.4 -3.5,2.8 -6.1,1.9 -3.1,-0.2 -1.5,0.6 -1.1,1.4 -3.5,0.7 -4.7,2.4 -1.4,-0.8 -2.6,0.5 -4.6,2.3 -3.2,2.7 -4.8,2.1 -3.1,4.4 0.4,-4.8 -3.1,4.6 -0.1,3.7 -1.3,3.2 -1.5,1.5 -1.3,3.7 0.9,1.9 0.1,2 1.6,5 -0.7,3.3 -1,-2.5 -2.3,-1.8 0.4,5.9 -1.7,-2.8 0.1,2.8 1.8,5 -0.6,5 1.7,2.5 -0.4,1.9 0.9,4.1 -1.3,3.6 -0.3,3.6 0.7,6.5 -0.7,3.7 -2.2,4.4 -0.6,2.3 -1.5,1.5 -2.9,0.8 -1.5,3.7 2.4,1.2 4,4.1 3.6,0 3.8,0.3 3.3,-2.1 3.4,-1.8 1.4,0.3 4.5,-3.4 3.8,-0.3 4.1,-0.7 4.2,1.2 3.6,-0.6 4.6,-0.2 3,-2.6 2.3,-3.3 5.2,-1.5 6.9,-3.2 5,0.4 6.9,-2.1 7.8,-2.3 9.8,-0.6 4,3.1 3.7,0.2 5.3,3.8 -1.6,1.5 1.8,2.4 1.3,4.6 -1.6,3.4 2.9,2.6 4.3,-5.1 4.3,-2.1 6.7,-5.5 -1.6,4.7 -3.4,3.2 -2.5,3.7 -4.4,3.5 5.2,-1.2 4.7,-4.4 -0.9,4.8 -3.2,3.1 4.7,0.8 1.3,2.6 -0.4,3.3 -1.5,4.9 1.4,4 4,1.9 2.8,0.4 2.4,1 3.5,1.8 7.2,-4.7 3.5,-1.2 -2.7,3.4 2.6,1.1 2.7,2.8 4.7,-2.7 3.8,-2.5 6.3,-2.7 6,-0.2 4.2,-2.3 0.9,-2 3,-4.5 3.9,-4.8 3.6,-3.2 4.4,-5.6 3.3,-3.1 4.4,-5 5.4,-3.1 5,-5.8 3.1,-4.5 1.4,-3.6 3.8,-5.7 2.1,-2.9 2.5,-5.7 -0.7,-5.4 1.7,-3.9 1.1,-3.7 0,-5.1 -2.8,-5.1 -1.9,-2.5 -2.9,-3.9 0.7,-6.7 -1.5,1 -1.6,-2.8 -2.5,1.4 -0.6,-6.9 -2.2,-4 1,-1.5 -3.1,-2.8 -3.2,-3 -5.3,-3.3 -0.9,-4.3 1.3,-3.3 -0.4,-5.5 -1.3,-0.7 -0.2,-3.2 -0.2,-5.5 1.1,-2.8 -2.3,-2.5 -1.4,-2.7 -3.9,2.4 -1.2,-5 z" />
    <path inkscape:connector-curvature="0" id="AT" data-name="Austria" data-id="AT" d="m 1060.2,264 -2.3,-1.2 -2.3,0.3 -4,-1.9 -1.7,0.5 -2.6,2.5 -3.8,-2 -1.5,2.9 -1.7,0.8 1,4 -0.4,1.1 -1.7,-1.3 -2.4,-0.2 -3.4,1.2 -4.4,-0.3 -0.6,1.6 -2.6,-1.7 -1.5,0.3 0.2,1.1 -0.7,1.6 2.3,1.1 2.6,0.2 3.1,0.9 0.5,-1.2 4.8,-1.1 1.3,2.2 7.2,1.6 4.2,0.4 2.4,-1.4 4.3,-0.1 0.9,-1.1 1.3,-4 -1.1,-1.3 2.8,0 0.2,-2.6 -0.7,-2.1 0.3,-0.8 z" />
    <path inkscape:connector-curvature="0" id="AZ" data-name="Azerbaijan" data-id="AZ" d="m 1210.1,318.9 -1,0.2 1.2,2.4 3.2,2.9 3.7,0.9 -2.8,-3.7 -0.2,-1 -2.3,0 -1.8,-1.7 z m 10.4,-9.3 -4.3,-3.8 -1.5,-0.2 -1.1,0.9 3.2,3.4 -0.6,0.7 -2.8,-0.4 -4.2,-1.8 -1.1,1 1.4,1.7 2.2,1.1 -0.7,1.5 3.1,2.2 -1,2 2.5,1.7 2.5,1.1 0.9,4.4 5.3,-4.7 1.9,-0.5 1.9,1.9 -1.2,3.1 3.8,3.4 1.3,-0.3 -0.8,-3.2 1.7,-1.5 0.4,-2.2 -0.1,-5 4.2,-0.5 -2,-1.7 -2.5,-0.2 -3.5,-4.5 -3.4,-3.2 0,0 -2.6,2.5 -0.5,1.5 -2.4,-0.4 z" />
    <path inkscape:connector-curvature="0" id="BI" data-name="Burundi" data-id="BI" d="m 1148.2,590 -0.3,-2.5 0,0 -3,-0.4 -1.7,3.6 -3.5,-0.5 1.4,2.9 0.1,1.1 2,6.1 -0.1,0.3 0.6,-0.1 2.1,-2.3 2.2,-3.3 1.4,-1.4 0,-2 -1.2,-1.5 z" />
    <path inkscape:connector-curvature="0" id="BE" data-name="Belgium" data-id="BE" d="m 1000.7,246.2 -4.4,1.3 -3.6,-0.5 0,0 -3.8,1.2 0.7,2.2 2.2,0.1 2.4,2.4 3.4,2.9 2.5,-0.4 4.4,2.8 0.4,-3.5 1.3,-0.2 0.4,-4.2 -2.8,-1.4 -3.1,-2.7 z" />
    <path inkscape:connector-curvature="0" id="BJ" data-name="Benin" data-id="BJ" d="m 996.9,498 -4.3,-3.7 -2,0 -1.9,1.9 -1.2,1.9 -2.7,0.6 -1.2,2.8 -1.9,0.7 -0.7,3.3 1.7,1.9 2,2.3 0.2,3.1 1.1,1.3 -0.2,14.6 1.4,4.4 4.6,-0.8 0.3,-10.2 -0.1,-4.1 1,-4 1.7,-1.9 2.7,-4 -0.6,-1.7 1.1,-2.5 -1.2,-3.8 0.2,-2.1 z" />
    <path inkscape:connector-curvature="0" id="BF" data-name="Burkina Faso" data-id="BF" d="m 978.8,477.2 -3.6,0 -1.4,-1.2 -3,0.9 -5.2,2.6 -1.1,2 -4.3,2.9 -0.8,1.6 -2.3,1.3 -2.7,-0.9 -1.6,1.6 -0.8,4.4 -4.5,5.2 0.2,2.2 -1.6,2.7 0.4,3.7 2.5,1.4 1,2.1 2.5,1.3 1.9,-1.6 2.7,-0.2 3.8,1.6 -0.8,-4.8 0.2,-3.6 9.7,-0.3 2.4,0.5 1.8,-1 2.6,0.5 4.9,0.1 1.9,-0.7 1.2,-2.8 2.7,-0.6 1.2,-1.9 0.1,-4.4 -6.4,-1.4 -0.2,-3.1 -3.1,-4.1 -0.8,-2.9 0.5,-3.1 z" />
    <path inkscape:connector-curvature="0" id="BD" data-name="Bangladesh" data-id="BD" d="m 1486.5,431.9 -4.5,-10.1 -1.5,0.1 -0.2,4 -3.5,-3.3 1.1,-3.6 2.4,-0.4 1.6,-5.3 -3.4,-1.1 -5,0.1 -5.4,-0.9 -1.2,-4.4 -2.7,-0.4 -4.8,-2.7 -1.2,4.3 4.6,3.4 -3.1,2.4 -0.8,2.3 3.7,1.7 -0.4,3.8 2.6,4.8 1.6,5.2 2.2,0.6 1.7,0.7 0.6,-1.2 2.5,1.3 1.3,-3.5 -0.9,-2.6 5.1,0.2 2.8,3.7 1.5,3.1 0.8,3.2 2,3.3 -1.1,-5.1 2.1,1 -0.5,-4.6 z" />
    <path inkscape:connector-curvature="0" id="BG" data-name="Bulgaria" data-id="BG" d="m 1121.6,294.3 -3,-0.7 -4,-2.2 -5.8,1.4 -2.3,1.6 -7.5,-0.3 -4,-1 -1.9,0.5 -1.8,-2.6 -1.1,1.4 0.7,2.3 2.8,2.6 -1.7,1.9 -0.7,2 0.6,0.7 -0.7,0.9 2.8,2 0.8,4.1 3.8,0.2 3.9,-1.7 3.9,2.1 4.6,-0.6 -0.3,-3 5,-2 4.5,0.8 -2.1,-3.5 1.3,-4.4 2.2,-2.5 z" />
    <path inkscape:connector-curvature="0" id="BA" data-name="Bosnia and Herz." data-id="BA" d="m 1062.2,284.9 -2.3,0.1 -1,1.3 -1.9,-1.4 -0.9,2.5 2.7,2.9 1.3,1.9 2.5,2.3 2,1.4 2.2,2.5 4.7,2.4 0.4,-3.4 1.5,-1.4 0.9,-0.6 1.2,-0.3 0.5,-2.9 -2.7,-2.3 1,-2.7 -1.8,0 0,0 -2.4,-1.4 -3.5,0.1 -4.4,-1 z" />
    <path inkscape:connector-curvature="0" id="BY" data-name="Belarus" data-id="BY" d="m 1112.8,219.4 -5.2,-1.5 -4.6,2.3 -2.6,1 0.9,2.6 -3.5,2 -0.5,3.4 -4.8,2.2 -4.6,0 0.6,2.7 1.7,2.3 0.3,2.4 -2.7,1.2 1.9,2.9 0.5,2.7 2.2,-0.3 2.4,-1.6 3.7,-0.2 5,0.5 5.6,1.5 3.8,0.1 2,0.9 1.6,-1.1 1.5,1.5 4.3,-0.3 2,0.6 -0.2,-3.1 1.2,-1.4 4.1,-0.3 0,0 -2,-3.9 -1.5,-2 0.8,-0.6 3.9,0.2 1.6,-1.3 -1.7,-1.6 -3.4,-1.1 0.1,-1.1 -2.2,-1.1 -3.7,-3.9 0.6,-1.6 -1,-2.9 -4.8,-1.4 -2.3,0.7 -1,-1.4 z" />
    <path inkscape:connector-curvature="0" id="BZ" data-name="Belize" data-id="BZ" d="m 482.5,471.1 1.4,-2.2 1,-0.2 1.3,-1.7 1,-3.2 -0.3,-0.6 0.9,-2.3 -0.4,-1 1.3,-2.7 0.3,-1.8 -1.1,0 0.1,-0.9 -1,0 -2.5,3.9 -0.9,-0.8 -0.7,0.3 -0.1,1 -0.7,5 -1.2,7.2 1.6,0 z" />
    <path inkscape:connector-curvature="0" id="BO" data-name="Bolivia" data-id="BO" d="m 655.7,700.5 1.6,-1.3 -0.8,-3.6 1.3,-2.8 0.5,-5 -1.6,-4 -3.2,-1.7 -0.8,-2.6 0.6,-3.6 -10.7,-0.3 -2.7,-7.4 1.6,-0.1 -0.3,-2.8 -1.2,-1.8 -0.5,-3.7 -3.3,-1.9 -3.5,0.1 -2.5,-1.9 -3.8,-1.2 -2.4,-2.4 -6.3,-1 -6.4,-5.7 0.3,-4.3 -0.9,-2.5 0.4,-4.7 -7.3,1.1 -2.8,2.3 -4.8,2.6 -1.1,1.9 -2.9,0.2 -4.2,-0.6 5.5,10.3 -1.1,2.1 0.1,4.5 0.3,5.4 -1.9,3.2 1.2,2.4 -1.1,2.1 2.8,5.3 -2.8,6.9 3.1,4.3 1.2,4.6 3.2,2.7 -1.1,6.2 3.7,7.1 3.1,8.8 3.8,-0.9 4,-5.7 7.4,1.5 3.7,4.6 1.6,-5.1 6.3,0.3 1,1.3 1.5,-7.6 -0.2,-3.4 2.1,-5.6 9.5,-1.9 5.1,0.1 5.4,3.3 0.3,1.9 z" />
    <path inkscape:connector-curvature="0" id="BR" data-name="Brazil" data-id="BR" d="m 659,560.1 -1.4,0.2 -3.1,-0.5 -1.8,1.7 -2.6,1.1 -1.7,0.2 -0.7,1.3 -2.7,-0.3 -3.5,-3 -0.3,-2.9 -1.4,-3.3 1,-5.4 1.6,-2.2 -1.2,-3 -1.9,-0.9 0.8,-2.8 -1.3,-1.5 -2.9,0.3 0.7,1.8 -2.1,2.4 -6.4,2.4 -4,1 -1.7,1.5 -4.4,-1.6 -4.2,-0.8 -1,0.6 2.4,1.6 -0.3,4.3 0.7,4 4.8,0.5 0.3,1.4 -4.1,1.8 -0.7,2.7 -2.3,1 -4.2,1.5 -1.1,1.9 -4.4,0.5 -3,-3.4 -1.1,0.8 -1,-3.8 -1.6,-2 -1.9,2.2 -10.9,-0.1 0,3.9 3.3,0.7 -0.2,2.4 -1.1,-0.6 -3.2,1 0,4.6 2.5,2.4 0.9,3.6 -0.1,2.8 -2.2,17.4 -5.1,-0.3 -0.7,1 -4.6,1.2 -6.2,4.3 -0.4,3 -1.3,2.2 0.7,3.4 -3.3,1.9 0.1,2.7 -1.5,1.1 2.6,5.8 3.3,3.8 -1,2.8 3.7,0.3 2.3,3.4 4.9,0.2 4.4,-3.8 0.2,9.7 2.6,0.7 3,-1.1 4.2,0.6 2.9,-0.2 1.1,-1.9 4.8,-2.6 2.8,-2.3 7.3,-1.1 -0.4,4.7 0.9,2.5 -0.3,4.3 6.4,5.7 6.3,1 2.4,2.4 3.8,1.2 2.5,1.9 3.5,-0.1 3.3,1.9 0.5,3.7 1.2,1.8 0.3,2.8 -1.6,0.1 2.7,7.4 10.7,0.3 -0.6,3.6 0.8,2.6 3.2,1.7 1.6,4 -0.5,5 -1.3,2.8 0.8,3.6 -1.6,1.3 1.9,3.6 0.4,8.6 6,1.2 2.1,-1.2 3.9,1.7 1.2,1.9 1,5.8 0.9,2.5 2,0.3 2,-1.1 2.1,1.2 0.3,3.5 -0.3,3.8 -0.7,3.6 2.6,-1.2 3.1,3.7 0.5,5.1 -4.2,3.5 -3.3,2.6 -5.3,6.2 -5.9,8.6 3.4,-0.7 6.2,4.9 1.9,-0.2 6.2,4.1 4.8,3.5 3.8,4.3 -1.9,3 2.1,3.7 2.9,-3.7 1.5,-6 3.2,-3 3.9,-5 4.5,-11.2 3.4,-3.5 0.8,-3.1 0.3,-6.4 -1.3,-3.5 0.3,-4.8 4.1,-6.3 6,-5.1 6,-1.8 3.6,-2.9 8.5,-2.4 5.9,0 1.1,-3.8 4.2,-2.8 0.6,-6.5 5.1,-8.3 0.5,-8.5 1.6,-2.6 0.3,-4.1 1.1,-9.9 -1,-11.9 1.4,-4.7 1.4,-0.1 3.9,-5.5 3.3,-7.2 7.7,-8.8 2.7,-4.2 2,-10.5 -1,-3.9 -2,-8.1 -2.1,-2 -4.8,-0.2 -4.3,-1.9 -7.3,-7.1 -8.4,-5.3 -8.4,0.3 -10.9,-3.4 -6.5,2 0.8,-3.5 -2.7,-3.8 -9.4,-3.8 -7.1,-2.3 -4.2,4.1 -0.3,-6.3 -9.9,-1 -1.7,-2 4.2,-5.2 -0.1,-4.4 -3,-1 -3,-11.2 -1.3,-3.5 -1.9,0.3 -3.5,5.8 -1.8,4.7 -2.1,2.4 -2.7,0.5 -0.8,-1.8 -1.2,-0.3 -1.8,1.8 -2.4,-1.3 -3.2,-1.4 -2.7,0.7 -2.3,-0.6 -0.5,1.8 0.9,1.3 -0.5,1.3 -3.1,-0.5 z" />
    <path inkscape:connector-curvature="0" id="BN" data-name="Brunei" data-id="BN" d="m 1617.8,543.4 2.7,3.3 1.1,-2.2 2.7,0.2 0.1,-4.1 0.1,-3.1 -4.6,3.5 -2.1,2.4 z" />
    <path inkscape:connector-curvature="0" id="BT" data-name="Bhutan" data-id="BT" d="m 1474.7,395.5 -2.7,-1.8 -2.9,-0.1 -4.2,-1.5 -2.6,1.6 -2.6,4.8 0.3,1.2 5.5,2.5 3.2,-1 4.7,0.4 4.4,-0.2 -0.4,-3.9 -2.7,-2 z" />
    <path inkscape:connector-curvature="0" id="BW" data-name="Botswana" data-id="BW" d="m 1116.7,685 -1,-0.5 -3.2,1.5 -1.6,0 -3.7,2.5 -2,-2.6 -8.6,2.2 -4.1,0.2 -0.9,22.7 -5.4,0.2 -0.6,18.5 1.4,1 3,6.1 -0.7,3.8 1.1,2.3 4,-0.7 2.8,-2.8 2.7,-1.9 1.5,-3.1 2.7,-1.5 2.3,0.8 2.5,1.8 4.4,0.3 3.6,-1.5 0.6,-2 1.2,-3 3,-0.5 1.7,-2.4 2,-4.3 5.2,-4.7 8,-4.7 -3.4,-2.9 -4.2,-0.9 -1.5,-4.1 0.1,-2.2 -2.3,-0.7 -6,-7 -1.6,-3.7 -1.1,-1.1 -1.9,-5.1 z" />
    <path inkscape:connector-curvature="0" id="CF" data-name="Congo" data-id="CF" d="m 1110.5,517.3 -0.5,-0.3 -2,-1.8 -0.3,-2 0.8,-2.6 0,-2.6 -3.3,-4 -0.7,-2.7 -3.5,1.1 -2.8,2.5 -4,7 -5.2,2.9 -5.4,-0.4 -1.6,0.6 0.6,2.3 -2.9,2.2 -2.3,2.5 -7.1,2.4 -1.4,-1.4 -0.9,-0.2 -1,1.7 -4.7,0.4 -2.7,6.5 -1.4,1.1 -0.4,5 0.6,2.7 -0.4,1.9 2.6,3.3 0.5,2.3 2.1,3.2 2.6,2.1 0.3,2.9 0.6,1.8 2.9,-5.9 3.3,-3.4 3.8,1.1 3.6,0.4 0.5,-4.5 2.2,-3.2 3,-2 4.6,2.1 3.6,2.4 4.1,0.6 4.2,1.2 1.6,-3.8 0.8,-0.5 2.6,0.6 6.2,-3.1 2.2,1.3 1.8,-0.2 0.9,-1.5 2,-0.6 4.3,0.7 3.6,0.1 1.8,-0.6 -0.9,-2.1 -4.2,-2.5 -1.5,-3.8 -2.4,-2.7 -3.8,-3.4 -0.1,-2 -3.1,-2.6 -3.8,-2.5 z" />
    <path inkscape:connector-curvature="0" id="CA" data-name="Canada" data-id="CA" d="m 659,276.7 -0.7,-3 -2.5,1.9 0.5,2.1 5.6,2.6 1.9,-0.4 3.3,-2.5 -4.7,0.1 -3.4,-0.8 z m 14.4,-15.9 0.2,-1.1 -4.1,-2.6 -5.9,-1.6 -1.9,0.6 3.5,2.9 5.7,1.9 2.5,-0.1 z m -305.3,3.7 0.2,-3.4 -3.2,-2.6 -0.4,-2.9 -0.1,-2.1 -4.1,-0.7 -2.4,-0.9 -4.1,-1.4 -1.4,1.5 -0.6,3.3 4.3,1.1 -0.4,1.8 2.9,2.2 0,2.2 6.3,2.8 3,-0.9 z m 336.1,-13.5 3.9,-3.8 1.4,-1.7 -2.1,-0.3 -4.9,2.2 -4.2,3.5 -8.1,9.8 -5.3,3.7 1.6,1.7 -3.8,2.2 0.2,1.9 9.6,0.1 5.4,-0.3 4.4,1.5 -4.4,2.9 2.9,0.2 7.3,-5.4 1.2,0.8 -2.5,5.1 3,1.2 2.3,-0.2 3.5,-5.5 -0.5,-3.9 0.3,-3.3 -3.7,1.1 2.8,-4.6 -4.3,-1.9 -2.7,1.5 -3.9,-1.7 2.4,-2.1 -2.9,-1.3 -3.8,2 4.9,-5.4 z m -356.8,-21.2 -1.9,2 -1.4,2.6 0.9,1.9 -0.6,2.8 0.7,2.8 1.9,0 -0.2,-4.9 7.1,-6.9 -4.9,0.5 -1.6,-0.8 z m 280.9,-47 -0.4,-1.2 -1.7,-0.1 -2.8,1.7 -0.4,0.4 0.1,1.7 1.7,0.5 3.5,-3 z m -9.6,-3.2 0.8,-1.1 -6,-0.1 -4.9,2.7 0,1.5 3,0.2 7.1,-3.2 z m -3.1,-16.6 -2.7,-0.5 -5,5.2 -3.6,4.4 -5.7,2.8 6.3,-0.6 -0.8,3.4 8.2,-3 6.2,-3 0.8,2.6 5.9,1.3 4.9,-1.8 -1.9,-1.8 -3.4,0.4 1.3,-2.7 -3.7,-1.7 -3.4,-1.9 -1.5,-1.5 -2.8,0.9 0.9,-2.5 z m 44.6,-8.2 3.7,-1.7 1,-0.7 1.4,-2.3 -2.3,-1.5 -4.2,0.7 -3.8,3.1 -0.7,2.6 4.9,-0.2 z m -73.8,-10.7 -0.8,-2 -0.3,-1 -1.6,-1 -3,-1.5 -4.9,2.3 -5,1.7 3.5,2.4 3.8,-0.6 4.1,1.6 4.2,-1.9 z m 22.4,-2.1 -6.6,-1 5.7,-2.6 -0.4,-6 -1.9,-2.3 -4.5,-0.8 -8.1,3.8 -5.5,5.8 2.9,2.1 1.6,3.3 -6.3,5.5 -3.2,-0.2 -6.2,4.4 4.2,-5.2 -4.8,-1.8 -4.5,0.9 -2.4,3.4 -5.9,-0.1 -7.2,0.8 -5.1,-2.4 -5,0.4 -1.5,-2.9 -2.1,-1.3 -3.8,0.5 -5.2,0.3 -4.4,1.8 2,2.3 -7,2.8 -1.4,-3.3 -4.4,1 -11.8,0.6 -6.4,-1.2 8.5,-2.6 -2.8,-2.8 -4.4,0.4 -4.7,-1 -7.5,-1.9 -3.8,-2.3 -4.5,-0.3 -3.3,1.6 -5.9,0.9 3.9,-4.1 -9.4,3.6 -1.4,-4.7 -2.1,-0.6 -3.8,2.5 -4.5,1.2 -0.2,-2.2 -8.2,1.4 -8.8,2.3 -5.2,-0.6 -7,1.6 -6.2,2.3 -3.7,-0.5 -3.3,-2.6 -5.9,-1.3 0,0 -24.3,20.2 -35.4,32.4 4.2,0.1 2.7,1.6 0.6,2.6 0.2,3.9 7.6,-3.3 6.4,-1.9 -0.5,3 0.7,2.4 1.7,2.7 -1.1,4.2 -1.5,6.8 4.6,3.8 -3.1,3.7 -5.1,2.9 0,0 -2.5,3.1 2.1,4.4 -3.1,4.9 4.1,2.6 -3.6,3.7 -1.3,5.5 6.9,2.5 1.6,2.7 5.4,6.1 0.7,0 13.9,0 14.6,0 4.8,0 15,0 14.5,0 14.7,0 14.8,0 16.7,0 16.8,0 10.1,0 1.3,-2.4 1.6,0 -0.8,3.4 1,1 3.2,0.4 4.6,1 3.8,1.9 4.4,-0.8 5.3,1.6 0,0 3.2,-2.4 3.2,-1 1.8,-1.5 1.5,-0.8 4,1.2 3.3,0.2 0.8,0.8 0.1,3.5 5.2,1 -1.7,1.7 1.2,1.9 -1.9,2.3 1.8,0.8 -1.9,2.1 0,0 1.2,0.2 1.3,-0.9 0.5,1.4 3.4,0.7 3.8,0.1 3.8,0.6 4,1.2 0.8,2 1.4,4.7 -2.4,2 -3.8,-0.8 -1,-3.8 -0.9,3.9 -3.8,3.4 -0.8,2.9 -1.1,1.7 -4.1,2 0,0 -3.7,3.4 -2,2.2 2.7,0.4 4.5,-2 2.9,-1.7 1.6,-0.3 2.6,0.6 1.7,-0.9 2.8,-0.8 4.7,-0.8 0,0 0,0 0.3,-1.8 -0.3,0.1 -1.7,0.3 -1.8,-0.6 2.3,-2.1 1.9,-0.7 3.9,-0.9 4.6,-0.9 1.8,1.2 1.9,-1.4 1.9,-0.8 0.9,0.4 0.1,0.1 6.7,-4.2 2.7,-1.2 7.7,0 9.3,0 1,-1.6 1.7,-0.3 2.5,-0.9 2.7,-2.8 3.2,-4.9 5.5,-4.7 1.1,1.7 3.7,-1.1 1.5,1.8 -2.8,8.5 2.1,3.5 5.9,-0.8 8.1,-0.2 -10.4,5.1 -1.5,5.2 3.7,0.5 7.1,-4.5 5.8,-2.4 12.2,-3.7 7.5,-4.1 -2.6,-2.2 1,-4.5 -7.1,7 -8.6,0.8 -5.5,-3.1 -0.1,-4.6 0.6,-6.8 6.1,-4.1 -3.3,-3.1 -7.6,0.6 -12.1,5.2 -10.9,8.2 -4.6,1 7.8,-5.7 10.1,-8.3 7.2,-2.7 5.7,-4.4 5.2,-0.5 7.3,0.1 10,1.3 8.6,-1 7.8,-5.1 8.7,-2.2 4.2,-2.1 4.2,-2.3 2,-6.8 -1.1,-2.3 -3.4,-0.8 0,-5.1 -2.3,-1.9 -6.9,-1.6 -2.8,-3.4 -4.8,-3.4 3.4,-3.7 -2,-7.1 -2.6,-7.5 -1,-5.2 -4.3,2.7 -7.4,6.5 -8.1,3.2 -1.6,-3.4 -3.7,-1 2.2,-7.3 2.6,-4.9 -7.7,-0.5 -0.1,-2.2 -3.6,-3.3 -3,-2 -4.5,1.5 -4.2,-0.5 -6.6,-1.6 -3.9,1.3 -3.8,9 -1,5.3 -8.8,6.1 3.1,4.5 0.5,5 -1.7,4 -4.7,4.1 -7.5,4.2 -9,2.8 1.7,3.2 -2.2,9.6 -5.6,6.3 -4.6,1.9 -4.4,-5.8 -0.1,-6.8 1.7,-6 3.6,-5.2 -4.8,-0.6 -7.5,-0.4 -3.6,-2.5 -4.8,-1.6 -1.7,-2.9 -3.3,-2.2 -7,-2.6 -7.1,1.2 0.7,-4.5 1.5,-5.5 -6,-1 4.9,-6.8 4.9,-4.6 9.4,-6.5 8.6,-4.6 5.6,-0.7 2.9,-3.7 5.1,-2.4 6.4,-0.4 7.7,-3.8 2.9,-2.4 7.4,-4.7 3.2,-2.8 3.2,1.7 6.5,-0.9 10.8,-3.8 2.3,-2.7 -0.8,-2.9 5,-2.9 1.7,-2.7 -3.5,-2.6 -5.4,-0.8 -5.5,-0.4 -4.6,5.9 -6.5,4.6 -7.2,4 -1.3,-3.7 4.2,-4 -2.2,-3.5 -8.7,4.2 4.3,-5.5 z m -75.5,-18.9 -2.8,-1 -14.1,3.2 -5.1,2 -7.8,3.9 5.4,1.4 6.2,-0.1 -11.5,2.1 0,1.9 5.6,0.1 9,-0.4 6.5,1.2 -6.2,1 -5.5,-0.3 -7.1,0.9 -3.3,0.6 0.6,4.2 4.2,-0.6 4.1,1.5 -0.3,2.5 7.8,-0.5 11.2,-0.8 9.4,-1.8 5,-0.4 5.7,1.5 6.7,0.8 3.1,-1.9 -0.7,-2.1 7,-0.4 2.6,-2.4 -5,-2.5 -4.2,-2.6 2.4,-3.6 2.7,-5.1 -2.2,-2 -3,-0.9 -4.2,0.8 -2.8,5.3 -4.3,2.1 2.2,-5.1 -1.7,-1.7 -7.3,2.7 -2.6,-2.6 -10.4,1.5 4.7,-2.4 z m 39.1,-1.5 -1.7,-1.1 -5.4,0.2 -2.1,0.7 2.2,3.6 7,-3.4 z m 107.7,1.6 -4.4,-2.8 -8.4,-0.5 -2.1,0.3 -1.7,1.8 2,2.8 0.9,0.3 4.8,-0.7 4.1,0.1 4.1,0.1 0.7,-1.4 z m -39.4,-0.3 5.7,-3.2 -11.2,1.3 -5.8,2.1 -7.1,4.6 -3.3,5.2 5.6,0.1 -6.1,2.3 1.8,1.9 5.9,0.8 7.3,1.5 13.8,1.2 7.9,-0.6 3.2,-1.6 2,1.8 3.3,0.3 2,3.3 -3.5,1.4 7.1,1.8 4.6,2.6 0.5,1.9 -0.4,2.4 -8.6,5.4 -3.2,2.7 0.2,2 -9.2,0.7 -8,0.1 -5.4,4.2 2.4,1.9 13,-0.9 0.9,-1.6 4.7,2.7 4.7,2.9 -2.4,1.6 3.8,2.8 7.6,3.3 10.7,2.3 0.3,-2 -2.8,-3.5 -3.5,-4.9 8.5,4.6 4.7,1.5 3.6,-4.1 0,-5.6 -1,-1.5 -4.4,-2.5 -2.7,-3.3 2.3,-3.2 5.8,-0.7 3.8,5.4 4,2.4 10.7,-6.5 3.3,-3.9 -6.4,-0.3 -3.2,-5.1 -5.9,-1.2 -7.7,-3.5 9,-2.5 -0.8,-5 -2.2,-2.1 -8.3,-2.1 -1.9,-3.3 -8.2,1.2 1.1,-2.3 -3.6,-2.5 -6.8,-2.6 -5.2,2.1 -9,1.5 3.3,-3.4 -2.3,-5.3 -11.6,2.1 -7.1,4.1 -0.3,-3.2 z m -50,-3.4 -7.1,2.4 0.9,3.4 -7.4,-0.7 -1.7,1.7 5.8,3.9 0.9,2 3.4,0.5 8.4,-2 5.1,-4.7 -3.8,-2.2 6,-2.4 0.5,-1.5 -7.5,0.6 -3.5,-1 z m 22.3,5.4 5.6,-1 10,-4.5 -6.1,-1.2 -7.8,-0.2 -5.2,1.4 -4.2,2.1 -2.5,2.6 -1.8,4.5 4.3,0.2 7.7,-3.9 z m -114.7,7.2 2.6,-2.3 9.1,-3.6 13.8,-3.6 6.4,-1.3 -1.6,-2.1 -1.9,-1.5 -9.4,-0.2 -4.1,-1.1 -14,0.8 -0.3,3.1 -7.6,3.3 -7.4,3.8 -4.3,2.2 5.9,2.7 -0.6,2.3 13.4,-2.5 z m 124.1,-18.3 0.3,-1.6 -1.4,-1.7 -6.9,1.3 -4.4,2.2 3.2,1.3 5.1,0.4 4.1,-1.9 z m -8.7,-8.6 -1.1,0.7 -4.8,-0.3 -7.6,1.6 -3.8,-0.1 -4.3,3.8 6.6,-0.4 -3.4,2.9 3.2,0.8 6.8,-0.5 5.8,-3.7 2.8,-2.5 -0.2,-2.3 z m -39.1,2.5 1.8,-2.3 -3.1,-0.5 -5.7,1.7 -0.7,4.7 -6.1,-0.4 -2.8,-2.9 -8.2,-1.6 -5.4,1.4 -11.6,4.8 4.1,0.8 17.8,-0.5 -10.6,2.2 -1.5,1.6 5.9,-0.1 12.2,-2.2 13.8,-0.8 5.1,-2.3 2.3,-2.4 -3.7,-0.2 -4.3,0.8 0.7,-1.8 z m 55.2,-4.3 -7.1,-0.3 -3.8,2 2.6,1.5 7,0.6 1.4,2.1 -2.2,2.4 -1.5,2.8 8.5,1.6 5.5,0.6 8,-0.1 11.6,-0.8 4.3,0.6 6.7,-1 3.5,-1.4 1,-2 -2.3,-1.9 -5.8,-0.3 -8,0.4 -7,1.1 -5.1,-0.4 -4.8,-0.3 -1.2,-1.1 -3.1,-1.1 2.8,-1.9 -1.4,-1.6 -7.3,0.1 -2.3,-1.6 z m -75,-2.6 -6,0.7 -5.5,-0.1 -12.1,3.1 -11.6,3.7 0,0 3.6,1 7,-0.7 9.8,-2.1 3.8,-0.3 5.2,-1.6 5.8,-3.7 z m 80.5,0.6 1,-0.5 -1.5,-0.9 -7.2,-0.1 -0.6,1.3 6.4,0.3 1.9,-0.1 z m -58.4,-0.8 3.2,-1.4 -4.1,-0.8 -5.9,0.5 -5.1,1.5 3.3,1.5 8.6,-1.3 z m 7.8,-4.2 -3.3,-0.9 -1.6,-0.2 -5.7,1.3 -1,0.7 6,0 5.6,-0.9 z m 46.4,2.5 3,-1.7 -2.3,-1.6 -1.7,-0.3 -4.4,-0.1 -2.1,1.8 -0.7,1.8 1.6,1.1 6.6,-1 z m -13.7,-1.2 0.1,-2.2 -7.4,-1.7 -6.1,-0.6 -2.1,1.7 2.8,1.1 -5.3,1.4 7.7,0.2 4,1.5 5.2,0.5 1.1,-1.9 z m 53.7,-6.1 0.6,-2.8 -4.7,-0.8 -4.7,-0.9 -1.6,-2.2 -8.2,0.2 0.3,0.9 -3.9,0.3 -4.1,1.3 -4.9,1.9 -0.3,1.9 2,1.5 6.5,0 -4.3,1.2 -2.1,1.6 1.6,1.9 6.7,0.6 6.8,-0.4 10.5,-3.4 6.4,-1.3 -2.6,-1.5 z m 78.5,-13.8 -7,-0.2 -6.9,-0.3 -10.2,0.6 -1.4,-0.4 -10.3,0.2 -6.4,0.4 -5.1,0.6 -5,2 -2.3,-1 -3.9,-0.2 -6.7,1.4 -7.4,0.6 -4.1,0.1 -6,0.8 -1.1,1.3 2.5,1.2 0.8,1.6 4.4,1.5 12.4,-0.3 7.2,0.5 -7.2,1.5 -2.2,-0.4 -9.3,-0.2 -1.1,2.2 3,1.7 -2.8,1.6 -7.5,1.1 -4.9,1.7 4.8,0.9 1.7,3 -7.5,-2 -2.5,0.3 -2,3.4 -8,1.1 -2,2.3 6.7,0.3 4.9,0.6 11.7,-0.8 8.4,1.4 12.6,-3 1,-1.1 -6.4,0.2 0.5,-1.1 6.5,-1.4 3.6,-1.9 6.8,-1.3 5,-1.6 -0.8,-2.2 3.3,-0.8 -4.3,-0.6 11.1,-0.4 3.2,-0.9 7.9,-0.8 9.3,-3.5 6.8,-1.1 10.3,-2.5 -7.4,0 3.9,-0.9 9,-0.8 9.7,-1.6 1.1,-1.1 -5.2,-1 -6.7,-0.4 -8.5,-0.3 z" />
    <path inkscape:connector-curvature="0" id="CH" data-name="Switzerland" data-id="CH" d="m 1024.3,270.6 -5.4,-1.9 -1,1.4 -4.2,0 -1.3,1 -2.3,-0.6 0.2,1.6 -3.5,3.5 0,2.8 2.4,-0.9 1.8,2.7 2.2,1.3 2.4,-0.3 2.7,-2.1 0.9,1 2.4,-0.2 0.9,-2.5 3.8,0.8 2.1,-1.1 0.3,-2.5 -2.6,-0.2 -2.3,-1.1 0.7,-1.6 -0.2,-1.1 z" />
    <path inkscape:connector-curvature="0" id="CL" data-name="Chile" data-id="CL" d="m 648.4,905.2 -3.7,-0.7 -3.3,2.5 0.2,4.1 -1.2,2.8 -7.2,-2.2 -8.6,-4 -4.5,-1.3 9.7,6.8 6.3,3.2 7.5,3.4 5.3,0.9 4.3,1.8 3,0.5 2.3,0.1 3.2,-1.8 0.5,-2.4 -2.9,-0.2 -5,0 -5.9,-13.5 z m -47.3,-196.3 -3.7,-7.1 1.1,-6.2 -3.2,-2.7 -1.2,-4.6 -3.1,-4.3 -1.2,3.3 -2.7,1.6 2.1,9 1.5,10.4 -0.1,14.2 0,13.2 0.9,12.3 -1.9,7.8 2.1,7.8 -0.5,5.3 3.2,9.5 -0.1,9.5 -1.2,10.2 -0.6,10.5 -2.1,0.2 2.4,7.3 3.3,6.3 -1.1,4.3 1.9,11.6 1.5,8.8 3.5,0.9 -1.1,-7.7 4,1.6 1.8,12.7 -6.4,-2.1 2,10.2 -2.7,5.5 8.2,1.8 -3.4,4.8 0.2,6 5,10.6 4.2,4.1 0.2,3.6 3.3,3.8 7.5,3.5 0,0 7.4,4.2 6.2,2 2,-0.1 -1.8,-5.7 3.4,-2.2 1.7,-1.5 4.2,0 -4.8,-0.9 -12,-0.8 -3.5,-3.6 -1.8,-4.6 -3.1,0.4 -2.6,-2.2 -3.1,-6.6 2.7,-2.7 0.1,-3.9 -1.8,-3.2 0.7,-5.3 -1.1,-8.2 -1.8,-3.7 1.8,-1.1 -1.3,-2.3 -2.8,-1.3 0.8,-2.6 -3.1,-2.3 -3.6,-7.1 1.6,-1.2 -3.3,-7.6 -0.7,-6.4 -0.3,-5.7 2.5,-2.4 -3.3,-6.3 -1.5,-5.9 2.9,-4.3 -1.4,-5.4 1.6,-6.2 -1.3,-5.9 -1.6,-1.2 -4.9,-10.9 2.1,-6.5 -1.7,-6.2 0.9,-5.8 2.6,-5.9 3.2,-4 -2,-2.5 0.9,-2 -1.6,-10.6 5.6,-3.2 1.1,-6.6 -0.9,-1.6 -3.8,0.9 -3.1,-8.8 z" />
    <path inkscape:connector-curvature="0" id="CN" data-name="China" data-id="CN" d="m 1587.2,453.3 0.6,-3.6 2,-2.8 -1.6,-2.5 -3.2,-0.1 -5.8,1.8 -2.2,2.8 1,5.5 4.9,2 4.3,-3.1 z m 13.2,-196.5 -6.1,-6.1 -4.4,-3.7 -3.8,-2.7 -7.7,-6.1 -5.9,-2.3 -8.5,-1.8 -6.2,0.2 -5.1,1.1 -1.7,3 3.7,1.5 2.5,3.3 -1.2,2 0.1,6.5 1.9,2.7 -4.4,3.9 -7.3,-2.3 0.6,4.6 0.3,6.2 2.7,2.6 2.4,-0.8 5.4,1 2.5,-2.3 5.1,2 7.2,4.3 0.7,2.2 -4.3,-0.7 -6.8,0.8 -2.4,1.8 -1.4,4.1 -6.3,2.4 -3.1,3.3 -5.9,-1.3 -3.2,-0.5 -0.4,4 2.9,2.3 1.9,2.1 -2.5,2 -1.9,3.3 -4.9,2.2 -7.5,0.2 -7.2,2.2 -4.4,3.3 -3.2,-2 -6.2,0.1 -9.3,-3.8 -5.5,-0.9 -6.4,0.8 -11.2,-1.3 -5.5,0.1 -4.7,-3.6 -4.9,-5.7 -3.4,-0.7 -7.9,-3.8 -7.2,-0.9 -6.4,-1 -3,-2.7 -1.3,-7.3 -5.8,-5 -8.1,-2.3 -5.7,-3.3 -3.3,-4.4 -1.7,0.5 -1.8,4.2 -3.8,0.6 2.5,6.2 -1.6,2.8 -10.7,-2 1,11.1 -2,1.4 -9,2.4 8.7,10.7 -2.9,1.6 1.7,3.5 -0.2,1.4 -6.8,3.4 -1,2.4 -6.4,0.8 -0.6,4 -5.7,-0.9 -3.2,1.2 -4,3 1.1,1.5 -1,1.5 3,5.9 1.6,-0.6 3.5,1.4 0.6,2.5 1.8,3.7 1.4,1.9 4.7,3 2.9,5 9.4,2.6 7.6,7.5 0.8,5.2 3,3.3 0.6,3.3 -4.1,-0.9 3.2,7 6.2,4 8.5,4.4 1.9,-1.5 4.7,2 6.4,4.1 3.2,0.9 2.5,3.1 4.5,1.2 5,2.8 6.4,1.5 6.5,0.6 3,-1.4 1.5,5.1 2.6,-4.8 2.6,-1.6 4.2,1.5 2.9,0.1 2.7,1.8 4.2,-0.8 3.9,-4.8 5.3,-4 4.9,1.5 3.2,-2.6 3.5,3.9 -1.2,2.7 6.1,0.9 3,-0.4 2.7,3.7 2.7,1.5 1.3,4.9 0.8,5.3 -4.1,5.3 0.7,7.5 5.6,-1 2.3,5.8 3.7,1.3 -0.8,5.2 4.5,2.4 2.5,1.2 3.8,-1.8 0.6,2.6 0.7,1.5 2.9,0.1 -1.9,-7.2 2.7,-1 2.7,-1.5 4.3,0 5.3,-0.7 4.1,-3.4 3,2.4 5.2,1.1 -0.2,3.7 3,2.6 5.9,1.6 2.4,-1 7.7,2 -0.9,2.5 2.2,4.6 3,-0.4 0.8,-6.7 5.6,-0.9 7.2,-3.2 2.5,-3.2 2.3,2.1 2.8,-2.9 6.1,-0.7 6.6,-5.3 6.3,-5.9 3.3,-7.6 2.3,-8.4 2.1,-6.9 2.8,-0.5 -0.1,-5.1 -0.8,-5.1 -3.8,-2 -2.5,-3.4 2.8,-1.7 -1.6,-4.7 -5.4,-4.9 -5.4,-5.8 -4.6,-6.3 -7.1,-3.5 0.9,-4.6 3.8,-3.2 1,-3.5 6.7,-1.8 -2.4,-3.4 -3.4,-0.2 -5.8,-2.5 -3.9,4.6 -4.9,-1.9 -1.5,-2.9 -4.7,-1 -4.7,-4.4 1.2,-3 5,-0.3 1.2,-4.1 3.6,-4.4 3.4,-2.2 4.4,3.3 -1.9,4.2 2.3,2.5 -1.4,3 4.8,-1.8 2.4,-2.9 6.3,-1.9 2.1,-4 3.8,-3.4 1,-4.4 3.6,2 4.6,0.2 -2.7,-3.3 6.3,-2.6 -0.1,-3.5 5.5,3.6 0,0 -1.9,-3.1 2.5,-0.1 -3.8,-7.3 -4.7,-5.3 2.9,-2.2 6.8,1.1 -0.6,-6 -2.8,-6.8 0.4,-2.3 -1.3,-5.6 -6.9,1.8 -2.6,2.5 -7.5,0 -6,-5.8 -8.9,-4.5 -9.9,-1.9 z" />
    <path inkscape:connector-curvature="0" id="CI" data-name="Côte d'Ivoire" data-id="CI" d="m 946.5,506.2 -2.3,0.9 -1.3,0.8 -0.9,-2.7 -1.6,0.7 -1,-0.1 -1,1.9 -4.3,-0.1 -1.6,-1 -0.7,0.6 -1.1,0.5 -0.5,2.2 1.3,2.6 1.3,5.1 -2,0.8 -0.6,0.9 0.4,1.2 -0.3,2.8 -0.9,0 -0.3,1.8 0.6,3.1 -1.2,2.8 1.6,1.8 1.8,0.4 2.3,2.7 0.2,2.5 -0.5,0.8 -0.5,5.2 1.1,0.2 5.6,-2.4 3.9,-1.8 6.6,-1.1 3.6,-0.1 3.9,1.3 2.6,-0.1 0.2,-2.5 -2.4,-5.5 1.5,-7.2 2.3,-5.3 -1.4,-9.1 -3.8,-1.6 -2.7,0.2 -1.9,1.6 -2.5,-1.3 -1,-2.1 -2.5,-1.4 z" />
    <path inkscape:connector-curvature="0" id="CM" data-name="Cameroon" data-id="CM" d="m 1060.1,502.9 0.2,-4.3 -0.5,-4.2 -2.2,-4.1 -1.6,0.4 -0.2,2 2.3,2.6 -0.6,1.1 -0.3,2.1 -4.6,5 -1.5,4 -0.7,3.3 -1.2,1.4 -1.1,4.5 -3,2.6 -0.8,3.2 -1.2,2.6 -0.5,2.6 -3.9,2.2 -3.2,-2.6 -2.1,0.1 -3.3,3.7 -1.6,0.1 -2.7,6.1 -1.4,4.5 0,1.8 1.4,0.9 1.1,2.8 2.6,1.1 2.2,4.2 -0.8,5 9.2,0.2 2.6,-0.4 3.4,0.8 3.4,-0.8 0.7,0.3 7.1,0.3 4.5,1.7 4.5,1.5 0.4,-3.5 -0.6,-1.8 -0.3,-2.9 -2.6,-2.1 -2.1,-3.2 -0.5,-2.3 -2.6,-3.3 0.4,-1.9 -0.6,-2.7 0.4,-5 1.4,-1.1 2.7,-6.5 0.9,-1.7 -1.8,-4.4 -0.8,-2.6 -2.5,-1.1 -3.3,-3.7 1.2,-3 2.5,0.6 1.6,-0.4 3.1,0.1 -3.1,-5.8 z" />
    <path inkscape:connector-curvature="0" id="CD" data-name="Congo" data-id="CD" d="m 1124.9,539.4 -4.3,-0.7 -2,0.6 -0.9,1.5 -1.8,0.2 -2.2,-1.3 -6.2,3.1 -2.6,-0.6 -0.8,0.5 -1.6,3.8 -4.2,-1.2 -4.1,-0.6 -3.6,-2.4 -4.6,-2.1 -3,2 -2.2,3.2 -0.5,4.5 -0.3,3.8 -1.6,3.4 -1.1,4 -0.7,5.6 0.3,3.6 -0.9,2.2 -0.2,2.4 -0.6,2 -3.7,3.1 -2.6,3.2 -2.5,6.2 0.2,5.3 -1.4,2 -3.3,3.1 -3.4,4 -2,-1.1 -0.4,-1.8 -3.1,-0.1 -1.9,2.4 -1.5,-0.6 -2,1.3 -0.9,1.7 -0.2,2.7 -1.5,0.7 0.8,2 2.3,-0.9 1.7,0.1 1.9,-0.7 16.6,0.1 1.3,4.7 1.6,3.8 1.3,2.1 2.1,3.3 3.7,-0.5 1.9,-0.9 3,0.9 0.9,-1.6 1.5,-3.7 3.4,-0.3 0.3,-1.1 2.9,0 -0.5,2.3 6.8,0 0,4 1.2,2.4 -0.9,3.8 0.3,4 1.9,2.3 -0.5,7.6 1.4,-0.6 2.4,0.2 3.5,-1 2.6,0.4 1.9,0.1 0.3,2 2.6,-0.1 3.5,0.6 1.8,2.8 4.5,0.9 3.4,-2 1.2,3.4 4.3,0.8 2,2.8 2.1,3.5 4.3,0 -0.3,-6.9 -1.5,1.2 -3.9,-2.5 -1.4,-1.1 0.8,-6.4 1.2,-7.5 -1.2,-2.8 1.6,-4.1 1.6,-0.7 7.5,-1.1 1,0.3 0.2,-1.1 -1.5,-1.7 -0.7,-3.5 -3.4,-3.5 -1.8,-4.5 1,-2.7 -1.5,-3.6 1.1,-10.2 0.1,0.1 -0.1,-1.1 -1.4,-2.9 0.6,-3.5 0.8,-0.4 0.2,-3.8 1.6,-1.8 0.1,-4.8 1.3,-2.4 0.3,-5.1 1.2,-3 2.1,-3.3 2.2,-1.7 1.8,-2.3 -2.3,-0.8 0.3,-7.5 0,0 -5,-4.2 -1.4,-2.7 -3.1,1.3 -2.6,-0.4 -1.5,1.1 -2.5,-0.8 -3.5,-5.2 -1.8,0.6 -3.6,-0.1 z" />
    <path inkscape:connector-curvature="0" id="CG" data-name="Congo" data-id="CG" d="m 1080.3,549.9 -3.6,-0.4 -3.8,-1.1 -3.3,3.4 -2.9,5.9 -0.4,3.5 -4.5,-1.5 -4.5,-1.7 -7.1,-0.3 -0.4,2.8 1.5,3.3 4.2,-0.5 1.4,1.2 -2.4,7.4 2.7,3.8 0.6,4.9 -0.8,4.3 -1.7,3 -4.9,-0.3 -3,-3 -0.5,2.8 -3.8,0.8 -1.9,1.6 2.1,4.2 -4.3,3.5 4.6,6.7 2.2,-2.7 1.8,-1.1 2,2.2 1.5,0.6 1.9,-2.4 3.1,0.1 0.4,1.8 2,1.1 3.4,-4 3.3,-3.1 1.4,-2 -0.2,-5.3 2.5,-6.2 2.6,-3.2 3.7,-3.1 0.6,-2 0.2,-2.4 0.9,-2.2 -0.3,-3.6 0.7,-5.6 1.1,-4 1.6,-3.4 0.3,-3.8 z" />
    <path inkscape:connector-curvature="0" id="CO" data-name="Colombia" data-id="CO" d="m 578.3,497.2 1.2,-2.1 -1.3,-1.7 -2,-0.4 -2.9,3.1 -2.3,1.4 -4.6,3.2 -4.3,-0.5 -0.5,1.3 -3.6,0.1 -3.3,3 -1.4,5.4 -0.1,2.1 -2.4,0.7 -4.4,4.4 -2.9,-0.2 -0.7,0.9 1.1,3.8 -1.1,1.9 -1.8,-0.5 -0.9,3.1 2.2,3.4 0.6,5.4 -1.2,1.6 1.1,5.9 -1.2,3.7 2,1.5 -2.2,3.3 -2.5,4 -2.8,0.4 -1.4,2.3 0.2,3.2 -2.1,0.5 0.8,2 5.6,3.6 1,-0.1 1.4,2.7 4.7,0.9 1.6,-1 2.8,2.1 2.4,1.5 1.5,-0.6 3.7,3 1.8,3 2.7,1.7 3.4,6.7 4.2,0.8 3,-1.7 2.1,1.1 3.3,-0.6 4.4,3 -3.5,6.5 1.7,0.1 2.9,3.4 2.2,-17.4 0.1,-2.8 -0.9,-3.6 -2.5,-2.4 0,-4.6 3.2,-1 1.1,0.6 0.2,-2.4 -3.3,-0.7 0,-3.9 10.9,0.1 1.9,-2.2 1.6,2 1,3.8 1.1,-0.8 -1.7,-6.4 -1.4,-2.2 -2,-1.4 2.9,-3.1 -0.2,-1.5 -1.5,-1.9 -1,-4.2 0.5,-4.6 1.3,-2.1 1.2,-3.4 -2,-1.1 -3.2,0.7 -4,-0.3 -2.3,0.7 -3.8,-5.5 -3.2,-0.8 -7.2,0.6 -1.3,-2.2 -1.3,-0.6 -0.2,-1.3 0.8,-2.4 -0.4,-2.5 -1.1,-1.4 -0.6,-2.9 -2.9,-0.5 1.8,-3.7 0.9,-4.5 1.8,-2.4 2.2,-1.8 1.6,-3.2 3.7,-1.1 z" />
    <path inkscape:connector-curvature="0" id="CR" data-name="Costa Rica" data-id="CR" d="m 509.1,502.6 -1.4,1.3 -1.7,-0.4 -0.8,-1.3 -1.7,-0.5 -1.4,0.8 -3.5,-1.7 -0.9,0.8 -1.4,1.2 1.5,0.9 -0.9,2 -0.1,2 0.7,1.3 1.7,0.6 1.2,1.8 1.2,-1.6 -0.3,-1.8 1.4,1.1 0.3,1.9 1.9,0.8 2.1,1.3 1.5,1.5 0.1,1.4 -0.7,1.1 1.1,1.3 2.9,1.4 0.4,-1.2 0.5,-1.3 -0.1,-1.2 0.8,-0.7 -1.1,-1 0.1,-2.5 2.2,-0.6 -2.4,-2.7 -2,-2.6 -1.2,-3.4 z" />
    <path inkscape:connector-curvature="0" id="CU" data-name="Cuba" data-id="CU" d="m 539,427.3 -4.9,-2.1 -4.3,-0.1 -4.7,-0.5 -1.4,0.7 -4.2,0.6 -3,1.3 -2.7,1.4 -1.5,2.3 -3.1,2 2.2,0.6 2.9,-0.7 0.9,-1.6 2.3,-0.1 4.4,-3.3 5.4,0.3 -2.3,1.6 1.8,1.3 7,1 1.5,1.3 4.9,1.7 3.2,-0.2 0.8,3.6 1.7,1.8 3.5,0.4 2.1,1.7 -4.1,3.5 7.9,-0.6 3.8,0.5 3.7,-0.3 3.8,-0.8 0.8,-1.5 -3.9,-2.6 -4,-0.3 0.6,-1.7 -3.1,-1.3 -1.9,0 -3,-2.8 -4.2,-4 -1.8,-1.5 -5.2,0.8 -1.9,-2.4 z" />
    <path inkscape:connector-curvature="0" id="CZ" data-name="Czechia" data-id="CZ" d="m 1049.4,248.5 -2.1,0.6 -1.4,-0.7 -1.1,1.2 -3.4,1.2 -1.7,1.5 -3.4,1.3 1,1.9 0.7,2.6 2.6,1.5 2.9,2.6 3.8,2 2.6,-2.5 1.7,-0.5 4,1.9 2.3,-0.3 2.3,1.2 0.6,-1.4 2.2,0.1 1.6,-0.6 0.1,-0.6 0.9,-0.3 0.2,-1.4 1.1,-0.3 0.6,-1.1 1.5,0 -2.6,-3.1 -3.6,-0.3 -0.7,-2 -3.4,-0.6 -0.6,1.5 -2.7,-1.2 0.1,-1.7 -3.7,-0.6 -2.4,-1.9 z" />
    <path inkscape:connector-curvature="0" id="DE" data-name="Germany" data-id="DE" d="m 1043.6,232.3 -2.4,-1.9 -5.5,-2.4 -2.5,1.7 -4.7,1.1 -0.1,-2.1 -4.9,-1.4 -0.2,-2.3 -3,0.9 -3.6,-0.8 0.4,3.4 1.2,2.2 -3,3 -1,-1.3 -3.9,0.3 -0.9,1.3 1,2 -1,5.6 -1.1,2.3 -2.9,0 1.1,6.4 -0.4,4.2 1,1.4 -0.2,2.7 2.4,1.6 7.1,1.2 -2.3,4.2 -0.5,4.5 4.2,0 1,-1.4 5.4,1.9 1.5,-0.3 2.6,1.7 0.6,-1.6 4.4,0.3 3.4,-1.2 2.4,0.2 1.7,1.3 0.4,-1.1 -1,-4 1.7,-0.8 1.5,-2.9 -2.9,-2.6 -2.6,-1.5 -0.7,-2.6 -1,-1.9 3.4,-1.3 1.7,-1.5 3.4,-1.2 1.1,-1.2 1.4,0.7 2.1,-0.6 -2.3,-3.9 0.1,-2.1 -1.4,-3.3 -2,-2.2 1.2,-1.6 -1.4,-3.1 z" />
    <path inkscape:connector-curvature="0" id="DJ" data-name="Djibouti" data-id="DJ" d="m 1217.8,499.2 -2.5,-1.7 3.1,-1.5 0.1,-2.7 -1.4,-1.9 -1.6,1.5 -2.4,-0.5 -1.9,2.8 -1.8,3 0.5,1.7 0.2,2 3.1,0.1 1.3,-0.5 1.3,1.1 2,-3.4 z" />
    <path inkscape:connector-curvature="0" id="DK" data-name="Denmark" data-id="DK" d="m 1035.9,221.2 -1.7,-3 -6.7,2 0.9,2.5 5.1,3.4 2.4,-4.9 z m -8.6,-5.1 -2.6,-0.9 -0.7,-1.6 1.3,-2 -0.1,-3 -3.6,1.6 -1.5,1.7 -4,0.4 -1.2,1.7 -0.7,1.6 0.4,6.1 2.1,3.4 3.6,0.8 3,-0.9 -1.5,-3 3.1,-4.3 1.4,0.7 1,-2.3 z" />
    <path inkscape:connector-curvature="0" id="DO" data-name="Dominican Rep." data-id="DO" d="m 579.6,457.4 0,1.8 1.4,1 2.6,-4.4 2,-0.9 0.6,1.6 2.2,-0.4 1.1,-1.2 1.8,0.3 2.6,-0.2 2.5,1.3 2.3,-2.6 -2.5,-2.3 -2.4,-0.2 0.3,-1.9 -3,0.1 -0.8,-2.2 -1.4,0.1 -3.1,-1.6 -4.4,-0.1 -0.8,1.1 0.2,3.5 -0.7,2.4 -1.5,1.1 1.2,1.9 -0.2,1.8 z" />
    <path inkscape:connector-curvature="0" id="DZ" data-name="Algeria" data-id="DZ" d="m 1021,336.9 -3.6,0.4 -2.2,-1.5 -5.6,0 -4.9,2.6 -2.7,-1 -8.7,0.5 -8.9,1.2 -5,2 -3.4,2.6 -5.7,1.2 -5.1,3.5 2,4.1 0.3,3.9 1.8,6.7 1.4,1.4 -1,2.5 -7,1 -2.5,2.4 -3.1,0.5 -0.3,4.7 -6.3,2.5 -2.1,3.2 -4.4,1.7 -5.4,1 -8.9,4.7 -0.1,7.5 0,0.4 -0.1,1.2 20.3,15.5 18.4,13.9 18.6,13.8 1.3,3 3.4,1.8 2.6,1.1 0.1,4 6.1,-0.6 7.8,-2.8 15.8,-12.5 18.6,-12.2 -2.5,-4 -4.3,-2.9 -2.6,1.2 -2,-3.6 -0.2,-2.7 -3.4,-4.7 2.1,-2.6 -0.5,-4 0.6,-3.5 -0.5,-2.9 0.9,-5.2 -0.4,-3 -1.9,-5.6 -2.6,-11.3 -3.4,-2.6 0,-1.5 -4.5,-3.8 -0.6,-4.8 3.2,-3.6 1.1,-5.3 -1,-6.2 1,-3.3 z" />
    <path inkscape:connector-curvature="0" id="EC" data-name="Ecuador" data-id="EC" d="m 553.1,573.1 -2.4,-1.5 -2.8,-2.1 -1.6,1 -4.7,-0.9 -1.4,-2.7 -1,0.1 -5.6,-3.6 -3.9,2.5 -3.1,1.4 0.4,2.6 -2.2,4.1 -1,3.9 -1.9,1 1,5.8 -1.1,1.8 3.4,2.7 2.1,-2.9 1.3,2.8 -2.9,4.7 0.7,2.7 -1.5,1.5 0.2,2.3 2.3,-0.5 2.3,0.7 2.5,3.2 3.1,-2.6 0.9,-4.3 3.3,-5.5 6.7,-2.5 6,-6.7 1.7,-4.1 -0.8,-4.9 z" />
    <path inkscape:connector-curvature="0" id="EG" data-name="Egypt" data-id="EG" d="m 1129.7,374.8 -5.5,-1.9 -5.3,-1.7 -7.1,0.2 -1.8,3 1.1,2.7 -1.2,3.9 2,5.1 1.3,22.7 1,23.4 22.1,0 21.4,0 21.8,0 -1,-1.3 -6.8,-5.7 -0.4,-4.2 1,-1.1 -5.3,-7 -2,-3.6 -2.3,-3.5 -4.8,-9.9 -3.9,-6.4 -2.8,-6.7 0.5,-0.6 4.6,9.1 2.7,2.9 2,2 1.2,-1.1 1.2,-3.3 0.7,-4.8 1.3,-2.5 -0.7,-1.7 -3.9,-9.2 0,0 -2.5,1.6 -4.2,-0.4 -4.4,-1.5 -1.1,2.1 -1.7,-3.2 -3.9,-0.8 -4.7,0.6 -2.1,1.8 -3.9,2 -2.6,-1 z" />
    <path inkscape:connector-curvature="0" id="ER" data-name="Eritrea" data-id="ER" d="m 1198.1,474 -3.2,-3.1 -1.8,-5.9 -3.7,-7.3 -2.6,3.6 -4,1 -1.6,2 -0.4,4.2 -1.9,9.4 0.7,2.5 6.5,1.3 1.5,-4.7 3.5,2.9 3.2,-1.5 1.4,1.3 3.9,0.1 4.9,2.5 1.6,2.2 2.5,2.1 2.5,3.7 2,2.1 2.4,0.5 1.6,-1.5 -2.8,-1.9 -1.9,-2.2 -3.2,-3.7 -3.2,-3.6 -7.9,-6 z" />
    <path inkscape:connector-curvature="0" id="EE" data-name="Estonia" data-id="EE" d="m 1093.2,197.5 -5.5,0.9 -5.4,1.6 0.9,3.4 3.3,2.1 1.5,-0.8 0.1,3.5 3.7,-1 2.1,0.7 4.4,2.2 3.8,0 1.6,-1.9 -2.5,-5.5 2.6,-3.4 -0.9,-1 0,0 -4.6,0.2 -5.1,-1 z" />
    <path inkscape:connector-curvature="0" id="ET" data-name="Ethiopia" data-id="ET" d="m 1187.6,477 -1.5,4.7 -6.5,-1.3 -0.7,5.5 -2.1,6.2 -3.2,3.2 -2.3,4.8 -0.5,2.6 -2.6,1.8 -1.4,6.7 0,0.7 0.2,5 -0.8,2 -3,0.1 -1.8,3.6 3.4,0.5 2.9,3.1 1,2.5 2.6,1.5 3.5,6.9 2.9,1.1 0,3.6 2,2.1 3.9,0 7.2,5.4 1.8,0 1.3,-0.1 1.2,0.7 3.8,0.5 1.6,-2.7 5.1,-2.6 2.3,2.1 3.8,0 1.5,-2 3.6,-0.1 4.9,-4.5 7.4,-0.3 15.4,-19.1 -4.8,0.1 -18.5,-7.6 -2.2,-2.2 -2.1,-3.1 -2.2,-3.5 1.1,-2.3 -1.3,-1.1 -1.3,0.5 -3.1,-0.1 -0.2,-2 -0.5,-1.7 1.8,-3 1.9,-2.8 -2,-2.1 -2.5,-3.7 -2.5,-2.1 -1.6,-2.2 -4.9,-2.5 -3.9,-0.1 -1.4,-1.3 -3.2,1.5 -3.5,-2.9 z" />
    <path inkscape:connector-curvature="0" id="FI" data-name="Finland" data-id="FI" d="m 1093.4,144.4 0.8,-3.8 -5.7,-2.1 -5.8,1.8 -1.1,3.9 -3.4,2.4 -4.7,-1.3 -5.3,0.3 -5.1,-2.9 -2.1,1.4 5.9,2.7 7.2,3.7 1.7,8.4 1.9,2.2 6.4,2.6 0.9,2.3 -2.6,1.2 -8.7,6.1 -3.3,3.6 -1.5,3.3 2.9,5.2 -0.1,5.7 4.7,1.9 3.1,3.1 7.1,-1.2 7.5,-2.1 8,-0.5 0,0 7.9,-7.4 3.3,-3.3 0.9,-2.9 -7.3,-3.9 0.9,-3.7 -4.9,-4.1 1.7,-4.8 -6.4,-6.3 2.8,-4.1 -7.2,-3.7 -0.4,-3.7 z" />
    <path id="FJ" data-name="Fiji" data-id="FJ" d="m 1976.7,674.4 -3.7,2 -1.9,0.3 -3.1,1.3 0.2,2.4 3.9,-1.3 3.9,-1.6 0.7,-3.1 z m -11,8.1 -1.6,1 -2.3,-0.8 -2.7,2.2 -0.2,2.8 2.9,0.8 3.6,-0.9 1.8,-3.3 -1.5,-1.8 z" inkscape:connector-curvature="0" />
    <path inkscape:connector-curvature="0" id="GA" data-name="Gabon" data-id="GA" d="m 1050.2,557.7 -0.7,-0.3 -3.4,0.8 -3.4,-0.8 -2.6,0.4 0,7.6 -8.2,0 -1.9,0.3 -1.1,4.8 -1.3,4.6 -1.3,2 -0.2,2.1 3.4,6.6 3.7,5.3 5.8,6.4 4.3,-3.5 -2.1,-4.2 1.9,-1.6 3.8,-0.8 0.5,-2.8 3,3 4.9,0.3 1.7,-3 0.8,-4.3 -0.6,-4.9 -2.7,-3.8 2.4,-7.4 -1.4,-1.2 -4.2,0.5 -1.5,-3.3 0.4,-2.8 z" />
    <path inkscape:connector-curvature="0" id="GB" data-name="UK" data-id="GB" d="m 950,227.5 -4.9,-3.7 -3.9,0.3 0.8,3.2 -1.1,3.2 2.9,-0.1 3.5,1.3 2.7,-4.2 z m 13,-24.3 -5.5,0.5 -3.6,-0.4 -3.7,4.8 -1.9,6.1 2.2,3 0.1,5.8 2.6,-2.8 1.4,1.6 -1.7,2.7 1,1.6 5.7,1.1 0.1,0 3.1,3.8 -0.8,3.5 0,0 -7.1,-0.6 -1,4 2.6,3.3 -5.1,1.9 1.3,2.4 7.5,1 0,0 -4.3,1.3 -7.3,6.5 2.5,1.2 3.5,-2.3 4.5,0.7 3.3,-2.9 2.2,1.2 8.3,-1.7 6.5,0.1 4.3,-3.3 -1.9,-3.1 2.4,-1.8 0.5,-3.9 -5.8,-1.2 -1.3,-2.3 -2.9,-6.9 -3.2,-1 -4.1,-7.1 -0.4,-0.6 -4.8,-0.4 4.2,-5.3 1.3,-4.9 -5,0 -4.7,0.8 5,-6.4 z" />
    <path inkscape:connector-curvature="0" id="GE" data-name="Georgia" data-id="GE" d="m 1200,300.2 -7.5,-2.9 -7.7,-1 -4.5,-1.1 -0.5,0.7 2.2,1.9 3,0.7 3.4,2.3 2.1,4.2 -0.3,2.7 5.4,-0.3 5.6,3 6.9,-1 1.1,-1 4.2,1.8 2.8,0.4 0.6,-0.7 -3.2,-3.4 1.1,-0.9 -3.5,-1.4 -2.1,-2.5 -5.1,-1.3 -2.9,1 -1.1,-1.2 z" />
    <path inkscape:connector-curvature="0" id="GH" data-name="Ghana" data-id="GH" d="m 976.8,502.1 -2.6,-0.5 -1.8,1 -2.4,-0.5 -9.7,0.3 -0.2,3.6 0.8,4.8 1.4,9.1 -2.3,5.3 -1.5,7.2 2.4,5.5 -0.2,2.5 5,1.8 5,-1.9 3.2,-2.1 8.7,-3.8 -1.2,-2.2 -1.5,-4 -0.4,-3.2 1.2,-5.7 -1.4,-2.3 -0.6,-5.1 0.1,-4.6 -2.4,-3.3 0.4,-1.9 z" />
    <path inkscape:connector-curvature="0" id="GN" data-name="Guinea" data-id="GN" d="m 912.4,493 -0.8,0.4 -3,-0.5 -0.4,0.7 -1.3,0.1 -4,-1.5 -2.7,-0.1 -0.1,2.1 -0.6,0.7 0.4,2.1 -0.8,0.9 -1.3,0 -1.4,1 -1.7,-0.1 -2.6,3.1 1.6,1.1 0.8,1.4 0.7,2.8 1.3,1.2 1.5,0.9 2.1,2.5 2.4,3.7 3,-2.8 0.7,-1.7 1,-1.4 1.5,-0.2 1.3,-1.2 4.5,0 1.5,2.3 1.2,2.7 -0.2,1.8 0.9,1.7 0,2.3 1.5,-0.3 1.2,-0.2 1.5,-0.7 2.3,3.9 -0.4,2.6 1.1,1.3 1.6,0.1 1.1,-2.6 1.6,0.2 0.9,0 0.3,-2.8 -0.4,-1.2 0.6,-0.9 2,-0.8 -1.3,-5.1 -1.3,-2.6 0.5,-2.2 1.1,-0.5 -1.7,-1.8 0.3,-1.9 -0.7,-0.7 -1.2,0.6 0.2,-2.1 1.2,-1.6 -2.3,-2.7 -0.6,-1.7 -1.3,-1.4 -1.1,-0.2 -1.3,0.9 -1.8,0.8 -1.6,1.4 -2.4,-0.5 -1.5,-1.6 -0.9,-0.2 -1.5,0.8 -0.9,0 -0.3,-2.3 z" />
    <path inkscape:connector-curvature="0" id="GM" data-name="Gambia" data-id="GM" d="m 882.8,488.5 5,0.1 1.4,-0.9 1,0 2.1,-1.5 2.4,1.4 2.4,0.1 2.4,-1.5 -1.1,-1.8 -1.8,1.1 -1.8,-0.1 -2.1,-1.5 -1.8,0.1 -1.3,1.5 -6.1,0.2 -0.7,2.8 z" />
    <path inkscape:connector-curvature="0" id="GW" data-name="Guinea-Bissau" data-id="GW" d="m 900.2,492.1 -10.3,-0.3 -1.5,0.7 -1.8,-0.2 -3,1.1 0.3,1.3 1.7,1.4 0,0.9 1.2,1.8 2.4,0.5 2.9,2.6 2.6,-3.1 1.7,0.1 1.4,-1 1.3,0 0.8,-0.9 -0.4,-2.1 0.6,-0.7 0.1,-2.1 z" />
    <path inkscape:connector-curvature="0" id="GQ" data-name="Eq. Guinea" data-id="GQ" d="m 1040.1,557.8 -9.2,-0.2 -1.9,7.2 1,0.9 1.9,-0.3 8.2,0 0,-7.6 z" />
    <path inkscape:connector-curvature="0" id="GR" data-name="Greece" data-id="GR" d="m 1101.9,344.9 -0.8,2.8 6.6,1.2 0,1.1 7.6,-0.6 0.5,-1.9 -2.8,0.8 0,-1.1 -3.9,-0.5 -4.1,0.4 -3.1,-2.2 z m 11.5,-37.4 -2.7,-1.6 0.3,3 -4.6,0.6 -3.9,-2.1 -3.9,1.7 -3.8,-0.2 -1,0.2 -0.7,1.1 -2.8,-0.1 -1.9,1.3 -3.3,0.6 0,1.6 -1.6,0.9 -0.1,2.1 -2.1,3 0.5,1.9 2.9,3.6 2.3,3 1.3,4.3 2.3,5.1 4.6,2.9 3.4,-0.1 -2.4,-5.7 3.3,-0.7 -1.9,-3.3 5,1.7 -0.4,-3.7 -2.7,-1.8 -3.2,-3 1.8,-1.4 -2.8,-3 -1.6,-3.8 0.9,-1.3 3,3.2 2.9,0 2.5,-1 -3.9,-3.6 6.1,-1.6 2.7,0.6 3.2,0.2 1.1,-0.7 1.2,-3.9 z" />
    <path inkscape:connector-curvature="0" id="GL" data-name="Greenland" data-id="GL" d="m 887.4,76.3 -26,-0.4 -11.8,0.3 -5,1.3 -11.5,-0.1 -12.7,2.1 -1.6,1.7 6.7,2.1 -6.2,-1.3 -4.5,-0.3 -7,-1.4 -10.6,2.1 -2.7,-1.2 -10.4,0 -10.9,0.6 -8.9,1 -0.2,1.8 -5.3,0.5 -14.6,2.9 -4.6,1.7 8.1,1.5 -2.8,1.6 -14.9,2.2 -15.5,2.2 -2.2,1.7 6.4,2 14.5,1.2 -7.5,0.2 -10.9,1.5 3.8,3.1 3,1.5 9.4,-0.3 10.1,-0.2 7.6,0.3 8,2.9 -1.4,2.1 3.6,1.9 1.4,5.3 1,3.6 1.4,1.9 -7,4.8 2.6,1.3 4.4,-0.8 2.6,1.8 5.3,3.4 -7.5,-1.4 -3.8,0 -3,2.8 -1.5,3.6 4.2,1.8 4,-0.8 2.6,-0.8 5.5,-1.9 -2.8,4.2 -2.6,2.3 -7.1,2 -7,6.3 2,2 -3.4,4 3.7,5.2 -1.5,5 0.7,3.7 4.8,7.1 0.8,5.6 3.1,3.2 8.9,0 5,4.7 6.5,-0.3 4.1,-5.7 3.5,-4.8 -0.3,-4.4 8.6,-4.6 3.3,-3.7 1.4,-3.9 4.7,-3.5 6.5,-1.3 6.1,-1.4 3,-0.2 10.2,-3.9 7.4,-5.7 4.8,-2.1 4.6,-0.1 12.5,-1.8 12.1,-4.3 11.9,-4.6 -5.5,-0.3 -10.6,-0.2 5.3,-2.8 -0.5,-3.6 4.2,3 2.7,2.1 7.3,-1 -0.6,-4.3 -4.5,-3.1 -5,-1.3 2.4,-1.4 7.2,2.1 0.5,-2.3 -4.1,-3.4 5.4,0 5.6,-0.8 1.7,-1.8 -4,-2.1 8.6,-0.3 -4,-4.3 4.1,-0.5 0.1,-4.2 -6.2,-2.5 6.4,-1.6 5.8,-0.1 -3.6,-3.2 1.1,-5.1 3.6,-2.9 4.9,-3.2 -8,-0.2 11.3,-0.7 2.2,-1 14.6,-2.9 -1.6,-1.7 -10,-0.8 -16.9,1.5 -9.2,1.5 4.5,-2.3 -2.3,-1.4 -7,1.2 -9.7,-1.4 -12.1,0.5 -1.4,-0.7 18.3,-0.4 12.9,-0.2 6.6,-1.4 -19.7,-2.9 z" />
    <path inkscape:connector-curvature="0" id="GT" data-name="Guatemala" data-id="GT" d="m 482.8,458.9 -5.1,-0.1 -5.2,0 -0.4,3.6 -2.6,0 1.8,2.1 1.9,1.5 0.5,1.4 0.8,0.4 -0.4,2.1 -7.1,0 -3.3,5.2 0.7,1.2 -0.8,1.5 -0.4,1.9 2.7,2.6 2.5,1.3 3.4,0.1 2.8,1.1 0.2,-1 2.1,-1.6 1.1,-0.7 -0.2,-0.7 1.4,-0.4 1.3,-1.6 -0.3,-1.3 0.5,-1.2 2.8,-1.8 2.8,-2.4 -1.5,-0.8 -0.6,0.9 -1.7,-1.1 -1.6,0 1.2,-7.2 0.7,-5 z" />
    <path inkscape:connector-curvature="0" id="GY" data-name="Guyana" data-id="GY" d="m 656.1,534.2 -2.1,-2.3 -2.9,-3.1 -2.1,-0.1 -0.1,-3.3 -3.3,-4.1 -3.6,-2.4 -4.6,3.8 -0.6,2.3 1.9,2.3 -1.5,1.2 -3.4,1.1 0,2.9 -1.6,1.8 3.7,4.8 2.9,-0.3 1.3,1.5 -0.8,2.8 1.9,0.9 1.2,3 -1.6,2.2 -1,5.4 1.4,3.3 0.3,2.9 3.5,3 2.7,0.3 0.7,-1.3 1.7,-0.2 2.6,-1.1 1.8,-1.7 3.1,0.5 1.4,-0.2 -3.3,-5.6 -0.7,-3.5 -1.8,-0.1 -2.4,-4.6 1.1,-3.3 -0.3,-1.5 3.5,-1.6 1,-5.7 z" />
    <path inkscape:connector-curvature="0" id="HN" data-name="Honduras" data-id="HN" d="m 514.1,476.8 -1.3,-1.8 -1.9,-1 -1.5,-1.4 -1.6,-1.2 -0.8,-0.1 -2.5,-0.9 -1.1,0.5 -1.5,0.2 -1.3,-0.4 -1.7,-0.4 -0.8,0.7 -1.8,0.7 -2.6,0.2 -2.5,-0.6 -0.9,0.4 -0.5,-0.6 -1.6,0.1 -1.3,1.1 -0.6,-0.2 -2.8,2.4 -2.8,1.8 -0.5,1.2 0.3,1.3 -1.3,1.6 1.5,0.5 1.1,1.3 1.6,1 0.1,0.9 2.5,-0.8 1.1,0.5 0.7,0.7 -0.6,2.5 1.7,0.6 0.7,2 1.8,-0.3 0.8,-1.5 0.8,0 0.2,-3.1 1.3,-0.2 1.2,0 1.4,-1.7 1.5,1.3 0.6,-0.8 1.1,-0.7 2.1,-1.8 0.3,-1.3 0.5,0.1 0.8,-1.5 0.6,-0.2 0.9,0.9 1.1,0.3 1.3,-0.8 1.4,0 2,-0.8 0.9,-0.9 1.9,0.2 z" />
    <path inkscape:connector-curvature="0" id="HR" data-name="Croatia" data-id="HR" d="m 1065,280.4 -4,-2.6 -1.6,-0.8 -3.9,1.7 -0.3,2.5 -1.7,0.6 0.2,1.7 -2,-0.1 -1.8,-1 -0.8,1 -3.5,-0.2 -0.2,0.1 0,2.2 1.7,2 1.3,-2.6 3.3,1 0.3,2 2.5,2.6 -1,0.5 4.6,4.5 4.8,1.8 3.1,2.2 5,2.3 0,0 0.5,-1 -4.7,-2.4 -2.2,-2.5 -2,-1.4 -2.5,-2.3 -1.3,-1.9 -2.7,-2.9 0.9,-2.5 1.9,1.4 1,-1.3 2.3,-0.1 4.4,1 3.5,-0.1 2.4,1.4 0,0 1.7,-2.3 -1.7,-1.8 -1.5,-2.4 0,0 -1.8,0.9 -4.2,-1.2 z" />
    <path inkscape:connector-curvature="0" id="HT" data-name="Haiti" data-id="HT" d="m 580.6,446.7 -4.6,-1 -3.4,-0.2 -1.4,1.7 3.4,1 -0.3,2.4 2.2,2.8 -2.1,1.4 -4.2,-0.5 -5,-0.9 -0.7,2.1 2.8,1.9 2.7,-1.1 3.3,0.4 2.7,-0.4 3.6,1.1 0.2,-1.8 -1.2,-1.9 1.5,-1.1 0.7,-2.4 -0.2,-3.5 z" />
    <path inkscape:connector-curvature="0" id="HU" data-name="Hungary" data-id="HU" d="m 1079.1,263.8 -1.6,0.4 -1,1.5 -2.2,0.7 -0.6,-0.4 -2.3,1 -1.9,0.2 -0.3,1.2 -4.1,0.8 -1.9,-0.7 -2.6,-1.6 -0.2,2.6 -2.8,0 1.1,1.3 -1.3,4 0.8,0.1 1.2,2.1 1.6,0.8 4,2.6 4.2,1.2 1.8,-0.9 0,0 3.7,-1.6 3.2,0.2 3.8,-1.1 2.6,-4.3 1.9,-4.2 2.9,-1.3 -0.6,-1.6 -2.9,-1.7 -1,0.6 -5.5,-1.9 z" />
    <path inkscape:connector-curvature="0" id="ID" data-name="Indonesia" data-id="ID" d="m 1651.9,637.3 0.5,-1.7 -1.8,-1.9 -2.8,-2 -5.3,1.3 7,4.4 2.4,-0.1 z m 20.9,-0.6 4,-4.8 0.1,-1.9 -0.5,-1.3 -5.7,2.6 -2.8,3.9 -0.7,2.1 0.6,0.8 5,-1.4 z m -35.6,-13 -1.6,2.2 -3.1,0.1 -2.2,3.6 3,0.1 3.9,-0.9 6.6,-1.2 -1.2,-2.8 -3.5,0.6 -1.9,-1.7 z m 28.1,0 -5.2,2.3 -3.8,0.5 -3.4,-1.9 -4.5,1.3 -0.2,2.3 7.4,0.8 8.6,-1.8 1.1,-3.5 z m -79.5,-8.4 -0.7,-2.3 -2.3,-0.5 -4.4,-2.4 -6.8,-0.4 -4.1,6.1 5.1,0.4 0.8,2.8 10,2.6 2.4,-0.8 4.1,0.6 6.3,2.4 5.2,1.2 5.8,0.5 5.1,-0.2 5.9,2.5 6.6,-2.4 -6.6,-3.8 -8.3,-1.1 -1.8,-4.1 -10.3,-3.1 -1.3,2.6 -10.7,-0.6 z m 146.6,-3.6 0.2,-3 -1.2,-1.9 -1.3,2.2 -1.2,2.2 0.3,4.8 3.2,-4.3 z m -41,-17.5 -1.4,-2.1 -5.7,0.3 1,2.7 3.9,1.2 2.2,-2.1 z m 18.1,-2.4 -6.1,-1.8 -6.9,0.3 -1.5,3.5 3.9,0.2 3.2,-0.4 4.6,0.5 4.7,2.6 -1.9,-4.9 z m 21,-12.3 -0.8,-2.4 -9,-2.6 -2.9,2.1 -7.6,1.5 2.3,3.2 5,1.2 2.1,3.7 8.3,0.1 0.4,1.6 -4,-0.1 -6.2,2.3 4.2,3.1 -0.1,2.8 1.2,2.3 2.1,-0.5 1.8,-3.1 8.2,5.9 4.6,0.5 10.6,5.4 2.3,5.3 1,6.9 -3.7,1.8 -2.8,5.2 7.1,-0.2 1.6,-1.8 5.5,1.3 4.6,5.2 1.5,-20.8 1,-20.7 -6,-1.2 -4.1,-2.3 -4.7,-2.2 -5,0 -6.6,3.8 -4.9,6.8 -5.7,-3.8 -1.3,-10.3 z m -50,-16.4 -1,-1.4 -5.5,4.6 -6.5,0.3 -7.1,-0.9 -4.4,-1.9 -4.7,4.8 -1.2,2.6 -2.9,9.6 -0.9,5 -2.4,4.2 1.6,4.3 2.3,0.1 0.6,6.1 -1.9,5.9 2.3,1.9 3.6,-1 0.3,-9.1 -0.2,-7.4 3.8,-1.9 -0.7,6.2 3.9,3.7 -0.8,2.5 1.3,1.7 5.6,-2.4 -3,5.2 2.1,2.2 3.1,-1.9 0.3,-4.1 -4.7,-7.4 1.1,-2.2 -5.1,-8.1 5,-2.5 2.6,-3.7 2.4,0.9 0.5,-2.9 -10.5,2.1 -3.1,2.9 -5,-5.6 0.9,-4.8 4.9,-1 9.3,-0.3 5.4,1.3 4.3,-1.3 4.4,-6.3 z m 19.4,1.9 -0.6,-2.6 -3.3,-0.6 -0.5,-3.5 -1.8,2.3 -1,5.1 1.7,8.2 2.2,4 1.6,-0.8 -2.3,-3.3 0.9,-3.9 2.9,0.6 0.2,-5.5 z m -60.9,-4.5 0.9,-2.9 -4.3,-6 3,-5.8 -5,-1 -6.4,0 -1.7,7.2 -2,2.2 -2.7,8.9 -4.5,1.3 -5.4,-1.8 -2.7,0.6 -3.2,3.2 -3.6,-0.4 -3.6,1.2 -3.9,-3.5 -1,-4.3 -3.3,4.2 -0.6,5.9 0.8,5.6 2.6,5.4 2.8,1.8 0.7,8.5 4.6,0.8 3.6,-0.4 2,3.1 6.7,-2.3 2.8,2 4,0.4 2,3.9 6.5,-2.9 0.8,2.3 2.5,-9.7 0.3,-6.4 5.5,-4.3 -0.2,-5.8 1.8,-4.3 6.7,-0.8 -6.5,-5.9 z m -68.7,48.9 0.7,-9.8 1.7,-8 -2.6,-4 -4.1,-0.5 -1.9,-3.6 -0.9,-4.4 -2,-0.2 -3.2,-2.2 2.3,-5.2 -4.3,-2.9 -3.3,-5.3 -4.8,-4.4 -5.7,-0.1 -5.5,-6.8 -3.2,-2.7 -4.5,-4.3 -5.2,-6.2 -8.8,-1.2 -3.6,-0.3 0.6,3.2 6.1,7 4.4,3.6 3.1,5.5 5.1,4 2.2,4.9 1.7,5.5 4.9,5.3 4.1,8.9 2.7,4.8 4.1,5.2 2.2,3.8 7,5.2 4.5,5.3 6.2,-0.1 z" />
    <path inkscape:connector-curvature="0" id="IN" data-name="India" data-id="IN" d="m 1414.1,380.1 -8.5,-4.4 -6.2,-4 -3.2,-7 4.1,0.9 -0.6,-3.3 -3,-3.3 -0.8,-5.2 -7.6,-7.5 -3.7,5.4 -5.7,1 -8.5,-1.6 -1.9,2.8 3.2,5.6 2.9,4.3 5,3.1 -3.7,3.7 1,4.5 -3.9,6.3 -2.1,6.5 -4.5,6.7 -6.4,-0.5 -4.9,6.6 4,2.9 1.3,4.9 3.5,3.2 1.8,5.5 -12,0 -3.2,4.2 7.1,5.4 1.9,2.5 -2.4,2.3 8,7.7 4,0.8 7.6,-3.8 1.7,5.9 0.8,7.8 2.5,8.1 3.6,12.3 5.8,8.8 1.3,3.9 2,8 3.4,6.1 2.2,3 2.5,6.4 3.1,8.9 5.5,6 2.2,-1.8 1.7,-4.4 5,-1.8 -1.8,-2.1 2.2,-4.8 2.9,-0.3 -0.7,-10.8 1.9,-6.1 -0.7,-5.3 -1.9,-8.2 1.2,-4.9 2.5,-0.3 4.8,-2.3 2.6,-1.6 -0.3,-2.9 5,-4.2 3.7,-4 5.3,-7.5 7.4,-4.2 2.4,-3.8 -0.9,-4.8 6.6,-1.3 3.7,0.1 0.5,-2.4 -1.6,-5.2 -2.6,-4.8 0.4,-3.8 -3.7,-1.7 0.8,-2.3 3.1,-2.4 -4.6,-3.4 1.2,-4.3 4.8,2.7 2.7,0.4 1.2,4.4 5.4,0.9 5,-0.1 3.4,1.1 -1.6,5.3 -2.4,0.4 -1.1,3.6 3.5,3.3 0.2,-4 1.5,-0.1 4.5,10.1 2.4,-1.5 -0.9,-2.7 0.9,-2.1 -0.9,-6.6 4.6,1.4 1.5,-5.2 -0.3,-3.1 2.1,-5.4 -0.9,-3.6 6.1,-4.4 4.1,1.1 -1.3,-3.9 1.6,-1.2 -0.9,-2.4 -6.1,-0.9 1.2,-2.7 -3.5,-3.9 -3.2,2.6 -4.9,-1.5 -5.3,4 -3.9,4.8 -4.2,0.8 2.7,2 0.4,3.9 -4.4,0.2 -4.7,-0.4 -3.2,1 -5.5,-2.5 -0.3,-1.2 -1.5,-5.1 -3,1.4 0.1,2.7 1.5,4.1 -0.1,2.5 -4.6,0.1 -6.8,-1.5 -4.3,-0.6 -3.8,-3.2 -7.6,-0.9 -7.7,-3.5 -5.8,-3.1 -5.7,-2.5 0.9,-5.9 2.8,-2.9 z" />
    <path inkscape:connector-curvature="0" id="IE" data-name="Ireland" data-id="IE" d="m 947.3,231.7 -3.5,-1.3 -2.9,0.1 1.1,-3.2 -0.8,-3.2 -3.7,2.8 -6.7,4.7 2.1,6.1 -4.2,6.4 6.7,0.9 8.7,-3.6 3.9,-5.4 -0.7,-4.3 z" />
    <path inkscape:connector-curvature="0" id="IR" data-name="Iran" data-id="IR" d="m 1213.5,324.4 -3.2,-2.9 -1.2,-2.4 -3.3,1.8 2.9,7.3 -0.7,2 3.7,5.2 0,0 4.7,7.8 3.7,1.9 1,3.8 -2.3,2.2 -0.5,5 4.6,6.1 7,3.4 3.5,4.9 -0.2,4.6 1.7,0 0.5,3.3 3.4,3.4 1.7,-2.5 3.7,2.1 2.8,-1 5.1,8.4 4.3,6.1 5.5,1.8 6.1,4.9 6.9,2.1 5.1,-3.1 4,-1.1 2.8,1.1 3.2,7.8 6.3,0.8 6.1,1.5 10.5,1.9 1.2,-7.4 7.4,-3.3 -0.9,-2.9 -2.7,-1 -1,-5.7 -5.6,-2.7 -2.8,-3.9 -3.2,-3.3 3.9,-5.8 -1.1,-4 -4.3,-1.1 -1.1,-4 -2.7,-5.1 1.6,-3.5 -2.5,-0.9 0.5,-4.7 0.5,-8 -1.6,-5.5 -3.9,-0.2 -7.3,-5.7 -4.3,-0.7 -6.5,-3.3 -3.8,-0.6 -2.1,1.2 -3.5,-0.2 -3,3.7 -4.4,1.2 -0.2,1.6 -7.9,1.7 -7.6,-1.1 -4.3,-3.3 -5.2,-1.3 -2.5,-4.8 -1.3,0.3 -3.8,-3.4 1.2,-3.1 -1.9,-1.9 -1.9,0.5 -5.3,4.7 -1.8,0.2 -3.7,-0.9 z" />
    <path inkscape:connector-curvature="0" id="IQ" data-name="Iraq" data-id="IQ" d="m 1207.3,334.9 -6.2,-0.9 -2.1,1 -2.1,4.1 -2.7,1.6 1.2,4.7 -0.9,7.8 -11,6.7 3.1,7.7 6.7,1.7 8.5,4.5 16.7,12.7 10.2,0.5 3.2,-6.1 3.7,0.5 3.2,0.4 -3.4,-3.4 -0.5,-3.3 -1.7,0 0.2,-4.6 -3.5,-4.9 -7,-3.4 -4.6,-6.1 0.5,-5 2.3,-2.2 -1,-3.8 -3.7,-1.9 -4.7,-7.8 0,0 -2.3,1.1 -2.1,-1.6 z" />
    <path inkscape:connector-curvature="0" id="IS" data-name="Iceland" data-id="IS" d="m 915.7,158.6 -6.9,-0.4 -7.3,2.9 -5.1,-1.5 -6.9,3 -5.9,-3.8 -6.5,0.8 -3.6,3.7 8.7,1.3 -0.1,1.6 -7.8,1.1 8.8,2.7 -4.6,2.5 11.7,1.8 5.6,0.8 3.9,-1 12.9,-3.9 6.1,-4.2 -4.4,-3.8 1.4,-3.6 z" />
    <path inkscape:connector-curvature="0" id="IL" data-name="Israel" data-id="IL" d="m 1167.8,360.5 -1.4,0.1 -0.4,1.1 -1.8,0 -0.1,0.1 -0.6,1.6 -0.6,4.8 -1.1,2.9 0.4,0.4 -1.4,2.1 0,0 3.9,9.2 0.7,1.7 1.7,-10.2 -0.4,-2.4 -2.4,0.8 0.1,-1.7 1.2,-0.8 -1.4,-0.7 0.7,-4.3 2,0.9 0.7,-2 -0.1,0 0.6,-1 -0.3,-2.6 z" />
    <path inkscape:connector-curvature="0" id="IT" data-name="Italy" data-id="IT" d="m 1057.8,328.6 -4,0.5 -5.2,0.7 -6.2,-0.6 -0.6,3.4 7.5,3.3 2.7,0.7 4.2,2.4 0.9,-3.3 -0.9,-2 1.6,-5.1 z m -33.7,-18.9 -2.5,1.9 -2.8,-0.3 1.3,3.6 0.4,7.6 2.1,1.7 2,-2.1 2.4,0.4 0.4,-8.4 -3.3,-4.4 z m 14.3,-34.3 -1.3,-2.2 -4.8,1.1 -0.5,1.2 -3.1,-0.9 -0.3,2.5 -2.1,1.1 -3.8,-0.8 -0.9,2.5 -2.4,0.2 -0.9,-1 -2.7,2.1 -2.4,0.3 -2.2,-1.3 -0.2,1.7 1.6,2.4 -1.7,1.8 1.5,4.8 2.7,0.8 -0.5,2.7 2.1,-0.5 2.8,-2.8 2.3,-0.9 4.2,2.1 2.6,0.7 1.9,6 3.6,3.6 4.9,4 4.2,2.8 3.9,0.4 2.3,2.5 3.4,1.2 1.7,2.7 2.2,0.8 1.8,3.2 2.3,3.7 -1.1,1.3 -0.8,3.5 0.1,2 2.1,-0.5 2.5,-5.6 2.1,-0.4 0.4,-3.3 -3.9,-2.3 1.9,-4.1 4.5,1 3.1,3 0.8,-2.3 -0.6,-1.2 -4.7,-3.2 -3.9,-1.9 -4.8,-2.3 1.4,-1.2 -1.4,-1.4 -4,0.1 -6,-5 -2.9,-5.1 -4.9,-3.1 -1.9,-3.1 0.5,-1.8 -0.4,-3 3.9,-2.2 4.1,0.9 -1.4,-2.7 0.3,-3 -7.2,-1.6 z" />
    <path inkscape:connector-curvature="0" id="JM" data-name="Jamaica" data-id="JM" d="m 550.7,458.5 3.9,-0.1 -0.8,-1.8 -2.7,-1.5 -3.7,-0.6 -1.2,-0.2 -2.4,0.4 -0.8,1.5 2.9,2.3 3,1 1.8,-1 z" />
    <path inkscape:connector-curvature="0" id="JO" data-name="Jordan" data-id="JO" d="m 1186.6,367.6 -3.1,-7.7 -9.6,6.7 -6.3,-2.5 -0.7,2 0.4,3.9 -0.6,1.9 0.4,2.4 -1.7,10.2 0.3,0.9 6.1,1 2.1,-2 1.1,-2.3 4,-0.8 0.7,-2.2 1.7,-1 -6.1,-6.4 10.4,-3.1 0.9,-1 z" />
    <path inkscape:connector-curvature="0" id="JP" data-name="Japan" data-id="JP" d="m 1692.5,354.9 -4.5,-1.3 -1.1,2.7 -3.3,-0.8 -1.3,3.8 1.2,3 4.2,1.8 -0.1,-3.7 2.1,-1.5 3.1,2.1 1.3,-3.9 -1.6,-2.2 z m 24.4,-19.3 -3.6,-6.7 1.3,-6.4 -2.8,-5.2 -8.1,-8.7 -4.8,1.2 0.2,3.9 5.1,7.1 1,7.9 -1.7,2.5 -4.5,6.5 -5,-3.1 0,11.5 -6.3,-1.3 -9.6,1.9 -1.9,4.4 -3.9,3.3 -1.1,4 -4.3,2 4,4.3 4.1,1.9 0.9,5.7 3.5,2.5 2.5,-2.7 -0.8,-10.8 -7.3,-4.7 6.1,-0.1 5,-3 8.6,-1.4 2.4,4.8 4.6,2.4 4.4,-7.3 9.1,-0.4 5.4,-3 0.6,-4.6 -2.5,-3.2 -0.6,-5.2 z m -11.8,-44.2 -5.3,-2.1 -10.4,-6.4 1.9,4.8 4.3,8.5 -5.2,0.4 0.6,4.7 4.6,6.1 5.7,0 -1.6,-6.8 10.8,4.2 0.4,-6.1 6.4,-1.7 -6,-6.9 -1.7,2.6 -4.5,-1.3 z" />
    <path inkscape:connector-curvature="0" id="KZ" data-name="Kazakhstan" data-id="KZ" d="m 1308.8,223.8 -9,-1.3 -3.1,2.5 -10.8,2.2 -1.7,1.5 -16.8,2.1 -1.4,2.1 5,4.1 -3.9,1.6 1.5,1.7 -3.6,2.9 9.4,4.2 -0.2,3 -6.9,-0.3 -0.8,1.8 -7.3,-3.2 -7.6,0.2 -4.3,2.5 -6.6,-2.4 -11.9,-4.3 -7.5,0.2 -8.1,6.6 0.7,4.6 -6,-3.6 -2.1,6.8 1.7,1.2 -1.7,4.7 5.3,4.3 3.6,-0.2 4.2,4.1 0.2,3.2 2.8,1 4.4,-1.3 5,-2.7 4.7,1.5 4.9,-0.3 1.9,3.9 0.6,6 -4.6,-0.9 -4,1 0.9,4.5 -5,-0.6 0.6,2 3.2,1.6 3.7,5.5 6.4,2.1 1.5,2.1 -0.7,2.6 0.7,1.5 1.8,-2 5.5,-1.3 3.8,1.7 4.9,4.9 2.5,-0.3 -6.2,-22.8 11.9,-3.6 1.1,0.5 9.1,4.5 4.8,2.3 6.5,5.5 5.7,-0.9 8.6,-0.5 7.5,4.5 1.5,6.2 2.5,0.1 2.6,5 6.6,0.2 2.3,3 1.9,0 0.9,-4.5 5.4,-4.3 2.5,-1.2 0.3,-2.7 3.1,-0.8 9.1,2.1 -0.5,-3.6 2.5,-1.3 8.1,2.6 1.6,-0.7 8.6,0.2 7.8,0.6 3.3,2.2 3.5,0.9 -1.7,-3.5 2.9,-1.6 -8.7,-10.7 9,-2.4 2,-1.4 -1,-11.1 10.7,2 1.6,-2.8 -2.5,-6.2 3.8,-0.6 1.8,-4.2 -4.3,-3.8 -6,0.9 -3.3,-2.6 -3.9,-1.2 -4.1,-3.6 -3.2,-1.1 -6.2,1.6 -8.3,-3.6 -1.1,3.3 -18.1,-15.5 -8.3,-4.7 0.8,-1.9 -9.1,5.7 -4.4,0.4 -1.2,-3.3 -7,-2.1 -4.3,1.5 -4.3,-6.3 z" />
    <path inkscape:connector-curvature="0" id="KE" data-name="Kenya" data-id="KE" d="m 1211.7,547.2 -3.8,0 -2.3,-2.1 -5.1,2.6 -1.6,2.7 -3.8,-0.5 -1.2,-0.7 -1.3,0.1 -1.8,0 -7.2,-5.4 -3.9,0 -2,-2.1 0,-3.6 -2.9,-1.1 -3.8,4.2 -3.4,3.8 2.7,4.4 0.7,3.2 2.6,7.3 -2.1,4.7 -2.7,4.2 -1.6,2.6 0,0.3 1.4,2.4 -0.4,4.7 20.2,13 0.4,3.7 8,6.3 2.2,-2.1 1.2,-4.2 1.8,-2.6 0.9,-4.5 2.1,-0.4 1.4,-2.7 4,-2.5 -3.3,-5.3 -0.2,-23.2 4.8,-7.2 z" />
    <path inkscape:connector-curvature="0" id="KG" data-name="Kyrgyzstan" data-id="KG" d="m 1387.2,302.6 -3.5,-0.9 -3.3,-2.2 -7.8,-0.6 -8.6,-0.2 -1.6,0.7 -8.1,-2.6 -2.5,1.3 0.5,3.6 -9.1,-2.1 -3.1,0.8 -0.3,2.7 1.8,0.6 -3.1,4.1 4.6,2.3 3.2,-1.6 7.1,3.3 -5.2,4.5 -4.1,-0.6 -1.4,2 -5.9,-1.1 0.6,3.7 5.4,-0.5 7.1,2 9.5,-0.9 1,-1.5 -1.1,-1.5 4,-3 3.2,-1.2 5.7,0.9 0.6,-4 6.4,-0.8 1,-2.4 6.8,-3.4 0.2,-1.4 z" />
    <path inkscape:connector-curvature="0" id="KH" data-name="Cambodia" data-id="KH" d="m 1574.8,481.8 -5.2,-2.3 -2,4.3 -4.9,-2.4 -5.3,-1 -7.1,1.3 -3,5.2 2.1,7.7 3.4,6.6 2.6,3.3 4.7,0.9 4.7,-2.5 5.8,-0.5 -2.8,-3.8 8.9,-4.9 -0.1,-7.7 -1.8,-4.2 z" />
    <path inkscape:connector-curvature="0" id="KR" data-name="S. Korea" data-id="KR" d="m 1637.3,331.7 6.2,5.5 -3.4,1.1 5.2,6.8 1.1,4.8 2.1,3.5 4.5,-0.5 3.2,-2.7 4.2,-1.2 0.5,-3.6 -3.4,-7.5 -3.3,-4.2 -8.2,-7.6 0.1,1.6 -2.1,0.4 -3.5,0.3 -0.7,2.9 -2.4,-0.2 -0.1,0.6 z" />
    <path inkscape:connector-curvature="0" id="KW" data-name="Kuwait" data-id="KW" d="m 1235.6,381.4 -3.7,-0.5 -3.2,6.1 4.9,0.6 1.7,3.1 3.8,-0.2 -2.4,-4.8 0.3,-1.5 -1.4,-2.8 z" />
    <path inkscape:connector-curvature="0" id="LA" data-name="Lao PDR" data-id="LA" d="m 1574.8,481.8 0.2,-6.4 -2,-4.5 -4.8,-4.4 -4.3,-5.6 -5.7,-7.5 -7.3,-3.8 1.3,-2.3 3.3,-1.7 -3,-5.5 -6.8,-0.1 -3.4,-5.7 -4,-5.1 -2.7,1 1.9,7.2 -2.9,-0.1 -0.7,-1.5 -4.1,4.1 -0.8,2.4 2.6,1.9 0.9,3.8 3.8,0.3 -0.4,6.7 1,5.7 5.3,-3.8 1.8,1.2 3.2,-0.2 0.8,-2.2 4.3,0.4 4.9,5.2 1.3,6.3 5.2,5.5 0.5,5.4 -1.5,2.9 4.9,2.4 2,-4.3 5.2,2.3 z" />
    <path inkscape:connector-curvature="0" id="LB" data-name="Lebanon" data-id="LB" d="m 1167.8,360.5 0.9,-3.5 2.6,-2.4 -1.2,-2.5 -2.4,-0.3 -0.1,0.2 -2.1,4.5 -1.3,5.2 1.8,0 0.4,-1.1 1.4,-0.1 z" />
    <path inkscape:connector-curvature="0" id="LR" data-name="Liberia" data-id="LR" d="m 929.4,523.3 -1.6,-0.2 -1.1,2.6 -1.6,-0.1 -1.1,-1.3 0.4,-2.6 -2.3,-3.9 -1.5,0.7 -1.2,0.2 -2.6,3 -2.6,3.4 -0.3,1.9 -1.3,2 3.7,4.1 4.8,3.5 5.1,4.8 5.7,3.1 1.5,-0.1 0.5,-5.2 0.5,-0.8 -0.2,-2.5 -2.3,-2.7 -1.8,-0.4 -1.6,-1.8 1.2,-2.8 -0.6,-3.1 0.3,-1.8 z" />
    <path inkscape:connector-curvature="0" id="LY" data-name="Libya" data-id="LY" d="m 1111.8,371.4 -1.5,-2.1 -5.4,-0.8 -1.8,-1.1 -2,0 -2,-2.8 -7.3,-1.3 -3.6,0.8 -3.7,3 -1.5,3.1 1.5,4.8 -2.4,3 -2.5,1.6 -5.9,-3.1 -7.7,-2.7 -4.9,-1.2 -2.8,-5.7 -7.2,-2.8 -4.5,-1.1 -2.2,0.6 -6.4,-2.2 -0.1,4.9 -2.6,1.8 -1.5,2 -3.7,2.5 0.7,2.6 -0.4,2.7 -2.6,1.4 1.9,5.6 0.4,3 -0.9,5.2 0.5,2.9 -0.6,3.5 0.5,4 -2.1,2.6 3.4,4.7 0.2,2.7 2,3.6 2.6,-1.2 4.3,2.9 2.5,4 8.8,2.8 3.1,3.5 3.9,-2.4 5.4,-3.5 22.3,12.2 22.4,12.2 0,-2.7 6.3,0 -0.5,-12.7 -1,-23.4 -1.3,-22.7 -2,-5.1 1.2,-3.9 -1.1,-2.7 1.8,-3 z" />
    <path inkscape:connector-curvature="0" id="LK" data-name="Sri Lanka" data-id="LK" d="m 1432.2,532.7 2.3,-1.8 0.6,-6.6 -3,-6.6 -2.9,-4.5 -4.1,-3.5 -1.9,10.3 1.4,9.1 2.8,5.1 4.8,-1.5 z" />
    <path inkscape:connector-curvature="0" id="LS" data-name="Lesotho" data-id="LS" d="m 1128.1,766.5 1.1,-2 3.1,-1 1.1,-2.1 1.9,-3.1 -1.7,-1.9 -2.3,-2 -2.6,1.3 -3.1,2.5 -3.2,4 3.7,4.9 2,-0.6 z" />
    <path inkscape:connector-curvature="0" id="LT" data-name="Lithuania" data-id="LT" d="m 1100.4,221.2 -5,-2.9 -2.5,-0.4 -0.9,-1.3 -4.4,0.6 -7.9,-0.4 -5,1.9 1.7,5 5,1.1 2.2,0.9 -0.2,1.7 0.6,1.5 2.5,0.6 1.4,1.9 4.6,0 4.8,-2.2 0.5,-3.4 3.5,-2 -0.9,-2.6 z" />
    <path inkscape:connector-curvature="0" id="LU" data-name="Luxembourg" data-id="LU" d="m 1007,258.6 0.2,-2.7 -1,-1.4 -1.3,0.2 -0.4,3.5 1.1,0.5 1.4,-0.1 z" />
    <path inkscape:connector-curvature="0" id="LV" data-name="Latvia" data-id="LV" d="m 1102.1,210.1 -3.8,0 -4.4,-2.2 -2.1,-0.7 -3.7,1 -0.2,4.6 -3.6,0.1 -4.4,-4.5 -4,2.1 -1.7,3.7 0.5,4.5 5,-1.9 7.9,0.4 4.4,-0.6 0.9,1.3 2.5,0.4 5,2.9 2.6,-1 4.6,-2.3 -2.1,-3.6 -1,-2.8 -2.4,-1.4 z" />
    <path inkscape:connector-curvature="0" id="MA" data-name="Morocco" data-id="MA" d="m 965.2,348.4 -2.3,-0.1 -5.5,-1.4 -5,0.4 -3.1,-2.7 -3.9,0 -1.8,3.9 -3.7,6.7 -4,2.6 -5.4,2.9 -3.5,4.3 -0.9,3.4 -2.1,5.4 1.1,7.9 -4.7,5.3 -2.7,1.7 -4.4,4.4 -5.1,0.7 -2.8,2.4 -0.1,0.1 -3.6,6.5 -3.7,2.3 -2.1,4 -0.2,3.3 -1.6,3.8 -1.9,1 -3.1,4 -2,4.5 0.3,2.2 -1.9,3.3 -2.2,1.7 -0.3,3 0.1,0 12.4,-0.5 0.7,-2.3 2.3,-2.9 2,-8.8 7.8,-6.8 2.8,-8.1 1.7,-0.4 1.9,-5 4.6,-0.7 1.9,0.9 2.5,0 1.8,-1.5 3.4,-0.2 -0.1,-3.4 0,0 0.8,0 0.1,-7.5 8.9,-4.7 5.4,-1 4.4,-1.7 2.1,-3.2 6.3,-2.5 0.3,-4.7 3.1,-0.5 2.5,-2.4 7,-1 1,-2.5 -1.4,-1.4 -1.8,-6.7 -0.3,-3.9 -2,-4.1 z" />
    <path inkscape:connector-curvature="0" id="MD" data-name="Moldova" data-id="MD" d="m 1118.5,283.3 1.2,-0.7 0.5,-2.1 1.1,-2 -0.5,-1.1 1,-0.5 0.6,0.9 3,0.2 1.2,-0.5 -1,-0.6 0.2,-1 -2,-1.5 -1.1,-2.6 -1.9,-1.1 0,-2.1 -2.5,-1.6 -2,-0.3 -3.9,-1.9 -3.2,0.6 -1.1,0.9 1.6,0.6 1.8,1.9 1.9,2.6 3.4,3.7 0.6,2.7 -0.2,2.7 1.3,2.8 z" />
    <path inkscape:connector-curvature="0" id="MG" data-name="Madagascar" data-id="MG" d="m 1255.7,658.4 -1.1,-4.2 -1.4,-2.7 -1.8,-2.7 -2,2.8 -0.3,3.8 -3.3,4.5 -2.3,-0.8 0.6,2.7 -1.8,3.2 -4.8,3.9 -3.4,3.7 -2.4,0 -2.2,1.2 -3.1,1.3 -2.8,0.2 -1,4.1 -2.2,3.5 0.1,5.9 0.8,4 1.1,3 -0.8,4.1 -2.9,4.8 -0.2,2.1 -2.6,1.1 -1.3,4.6 0.2,4.6 1.6,5 -0.1,5.7 1.2,3.3 4.2,2.3 3,1.7 5,-2.7 4.6,-1.5 3.1,-7.4 2.8,-8.9 4.3,-12 3.3,-8.8 2.7,-7.4 0.8,-5.4 1.6,-1.5 0.7,-2.7 -0.8,-4.7 1.2,-1.9 1.6,3.8 1.1,-1.9 0.8,-3.1 -1.3,-2.9 -0.5,-7.7 z" />
    <path inkscape:connector-curvature="0" id="MX" data-name="Mexico" data-id="MX" d="m 444.4,407.8 -3.6,-1.4 -3.9,-2 -0.8,-3 -0.2,-4.5 -2.4,-3.6 -1,-3.7 -1.6,-4.4 -3.1,-2.5 -4.4,0.1 -4.8,5 -4,-1.9 -2.2,-1.9 -0.4,-3.5 -0.8,-3.3 -2.4,-2.8 -2.1,-2 -1.3,-2.2 -9.3,0 -0.8,2.6 -4.3,0 -10.7,0 -10.7,-4.4 -7.1,-3.1 1,-1.3 -7,0.7 -6.3,0.5 0.2,5.7 0.7,5.1 0.7,4.1 0.8,4 2.6,1.8 2.9,4.5 -1,2.9 -2.7,2.3 -2.1,-0.3 -0.6,0.5 2.3,3.7 2.9,1.5 1,1.7 0.9,-0.9 3.1,2.9 2.1,2 0.1,3.4 -1.2,4.7 2.5,1.6 3.3,3.1 2.9,3.6 0.7,3.9 1,0 2.7,-2.3 0.4,-1.2 -1.5,-2.8 -1.6,-2.9 -2.6,-0.2 0.4,-3.4 -0.9,-3 -1,-2.8 -0.5,-5.9 -2.6,-3.2 -0.6,-2.3 -1.2,-1.6 0,-4.1 -1,0.1 -0.1,-2.2 -0.7,-0.5 -0.4,-1.4 -2.7,-4.4 -1.1,-2.6 1,-4.8 0.1,-3 1.8,-2.6 2.4,1.7 1.9,-0.2 3.1,2.5 -0.9,2.4 0.4,4.9 1.5,4.7 -0.4,2 1.7,3.1 2.3,3.4 2.7,0.5 0.3,4.4 2.4,3.1 2.5,1.5 -1.8,4 0.7,1.5 4.1,2.6 1.9,4 4.5,4.9 3.8,6.4 1.3,3.2 0,2.5 1.4,2.9 -0.3,2.2 -1.6,1.6 0.3,1.8 -1.9,0.7 0.8,3.1 2.2,4 5.3,3.6 1.9,2.9 5.4,2 3,0.4 1.2,1.7 4.2,3 5.9,3 4,0.9 4.8,2.9 4,1.2 3.7,1.7 2.9,-0.7 4.8,-2.4 3.1,-0.4 4.4,1.6 2.6,2.1 5.5,6.9 0.4,-1.9 0.8,-1.5 -0.7,-1.2 3.3,-5.2 7.1,0 0.4,-2.1 -0.8,-0.4 -0.5,-1.4 -1.9,-1.5 -1.8,-2.1 2.6,0 0.4,-3.6 5.2,0 5.1,0.1 0.1,-1 0.7,-0.3 0.9,0.8 2.5,-3.9 1,0 1.2,-0.1 1.2,1.6 2,-5 1.2,-2.7 -0.9,-1.1 1.8,-3.9 3.5,-3.8 0.6,-3.1 -1.2,-1.3 -3.4,0.5 -4.8,-0.2 -6,1.5 -4,1.7 -1.2,1.8 -1.2,5.4 -1.8,3.7 -3.9,2.6 -3.6,1.1 -4.3,1.1 -4.3,0.6 -5.1,1.8 -1.9,-2.6 -5.6,-1.7 -1.8,-3.2 -0.7,-3.6 -3,-4.7 -0.4,-5 -1.2,-3.1 -0.5,-3.4 1.1,-3.1 1.8,-8.6 1.8,-4.5 3.1,-5.6 -2.1,0.2 z" />
    <path inkscape:connector-curvature="0" id="MK" data-name="Macedonia" data-id="MK" d="m 1094,304.8 -2.8,-2 -2.4,0.1 -1.7,0.4 -1.1,0.2 -2.9,1 -0.1,1.2 -0.7,0 0,0 -0.4,2.1 0.9,2.6 2.3,1.6 3.3,-0.6 1.9,-1.3 2.8,0.1 0.7,-1.1 1,-0.2 -0.8,-4.1 z" />
    <path inkscape:connector-curvature="0" id="ML" data-name="Mali" data-id="ML" d="m 1000.3,450.3 -6.1,0.6 -0.1,-4 -2.6,-1.1 -3.4,-1.8 -1.3,-3 -18.6,-13.8 -18.4,-13.9 -8.4,0.1 2.4,27.4 2.4,27.5 1,0.8 -1.3,4.4 -22.3,0.1 -0.9,1.4 -2.1,-0.4 -3.2,1.3 -3.8,-1.8 -1.8,0.2 -1,3.7 -1.9,1.2 0.2,3.9 1.1,3.7 2.1,1.8 0.4,2.4 -0.3,2 0.3,2.3 0.9,0 1.5,-0.8 0.9,0.2 1.5,1.6 2.4,0.5 1.6,-1.4 1.8,-0.8 1.3,-0.9 1.1,0.2 1.3,1.4 0.6,1.7 2.3,2.7 -1.2,1.6 -0.2,2.1 1.2,-0.6 0.7,0.7 -0.3,1.9 1.7,1.8 0.7,-0.6 1.6,1 4.3,0.1 1,-1.9 1,0.1 1.6,-0.7 0.9,2.7 1.3,-0.8 2.3,-0.9 -0.4,-3.7 1.6,-2.7 -0.2,-2.2 4.5,-5.2 0.8,-4.4 1.6,-1.6 2.7,0.9 2.3,-1.3 0.8,-1.6 4.3,-2.9 1.1,-2 5.2,-2.6 3,-0.9 1.4,1.2 3.6,0 3.6,-0.3 2,-2.2 7.6,-0.6 4.9,-1 0.5,-3.9 3,-4.3 -0.1,-14.6 z" />
    <path inkscape:connector-curvature="0" id="MM" data-name="Myanmar" data-id="MM" d="m 1533.9,435.8 -0.6,-2.6 -3.8,1.8 -2.5,-1.2 -4.5,-2.4 0.8,-5.2 -3.7,-1.3 -2.3,-5.8 -5.6,1 -0.7,-7.5 4.1,-5.3 -0.8,-5.3 -1.3,-4.9 -2.7,-1.5 -2.7,-3.7 -3,0.4 0.9,2.4 -1.6,1.2 1.3,3.9 -4.1,-1.1 -6.1,4.4 0.9,3.6 -2.1,5.4 0.3,3.1 -1.5,5.2 -4.6,-1.4 0.9,6.6 -0.9,2.1 0.9,2.7 -2.4,1.5 0.5,4.6 -2.1,-1 1.1,5.1 4.6,5.2 3.4,0.9 -0.4,2.2 5.4,7.4 1.9,5.9 -0.9,7.9 3.6,1.5 3.2,0.6 5.8,-4.6 3.2,-3.1 3.1,5.2 2,8.1 2.6,7.6 2.6,3.3 0.2,6.9 2.2,3.8 -1.3,4.8 0.9,4.8 2.2,-6.6 2.6,-5.9 -2.8,-5.8 -0.2,-3 -1,-3.5 -4.2,-5.1 -1.7,-3.2 1.7,-1.1 1.4,-5.6 -2.9,-4.2 -4.1,-4.6 -3.5,-5.6 2.2,-1.1 1.5,-6.9 3.9,-0.3 2.8,-2.8 3,-1.4 0.8,-2.4 4.1,-4.1 z" />
    <path inkscape:connector-curvature="0" id="ME" data-name="Montenegro" data-id="ME" d="m 1080,299.8 0.4,-0.6 -2,-1.2 -1.8,-0.7 -0.8,-0.8 -1.5,-1.1 -0.9,0.6 -1.5,1.4 -0.4,3.4 -0.5,1 0,0 2.3,1.2 1.6,2.1 1.1,0.4 0,0 -0.5,-1.9 2,-3.1 0.4,1.2 1.3,-0.5 0.8,-1.4 z" />
    <path inkscape:connector-curvature="0" id="MN" data-name="Mongolia" data-id="MN" d="m 1473.7,252.1 -3.7,-4.6 -6.6,-1.5 -4.8,-0.8 -6.9,-2.5 -1.3,6.4 4,3.6 -2.4,4.3 -7.9,-1.6 -5,-0.2 -4.7,-2.9 -5.1,-0.1 -5.3,-1.9 -5.9,2.9 -6.6,5.4 -4.7,1 3.3,4.4 5.7,3.3 8.1,2.3 5.8,5 1.3,7.3 3,2.7 6.4,1 7.2,0.9 7.9,3.8 3.4,0.7 4.9,5.7 4.7,3.6 5.5,-0.1 11.2,1.3 6.4,-0.8 5.5,0.9 9.3,3.8 6.2,-0.1 3.2,2 4.4,-3.3 7.2,-2.2 7.5,-0.2 4.9,-2.2 1.9,-3.3 2.5,-2 -1.9,-2.1 -2.9,-2.3 0.4,-4 3.2,0.5 5.9,1.3 3.1,-3.3 6.3,-2.4 1.4,-4.1 2.4,-1.8 6.8,-0.8 4.3,0.7 -0.7,-2.2 -7.2,-4.3 -5.1,-2 -2.5,2.3 -5.4,-1 -2.4,0.8 -2.7,-2.6 -0.3,-6.2 -0.6,-4.6 -5.5,0.5 -3.9,-2.1 -3.3,-0.7 -4.5,4.4 -5.8,1 -3.6,1.6 -6.7,-1 -4.5,0 -4.9,-3.1 -6.5,-3 -5.4,-0.8 -5.7,0.8 -3.9,1.1 -8.4,-2.6 z" />
    <path inkscape:connector-curvature="0" id="MZ" data-name="Mozambique" data-id="MZ" d="m 1203,640.7 -0.8,-2.9 0,0 0,0 -4.6,3.7 -6.2,2.5 -3.3,-0.1 -2.1,1.9 -3.9,0.1 -1.4,0.8 -6.7,-1.8 -2.1,0.3 -1.6,6 0.7,7.3 0.3,0 1.9,2 2.2,4.6 0.1,8.2 -2.5,1.3 -1.9,4.5 -3.4,-4 -0.2,-4.5 1.3,-2.9 -0.3,-2.6 -2.1,-1.6 -1.6,0.6 -3,-3 -17.1,5.2 0.3,4.5 0.3,2.4 4.6,-0.1 2.6,1.3 1.1,1.6 2.6,0.5 2.8,2 -0.3,8.1 -1.3,4.4 -0.5,4.7 0.8,1.9 -0.8,3.7 -0.9,0.6 -1.6,4.6 -6.2,7.2 2.2,9 1.1,4.5 -1.4,7.1 0.4,2.3 0.6,2.9 0.3,2.8 4.1,0 0.7,-3.3 -1.4,-0.5 -0.3,-2.6 2.6,-2.4 6.8,-3.4 4.6,-2.2 2.5,-2.3 0.9,-2.6 -1.2,-1.1 1.1,-3 0.5,-6.2 -1,0.3 0,-1.9 -0.8,-3.7 -2.4,-4.8 0.7,-4.6 2.3,-1.4 4.1,-4.6 2.2,-1.1 6.7,-6.8 6.4,-3.1 5.2,-2.5 3.7,-3.9 2.4,-4.4 1.9,-4.6 -0.9,-3.1 0.2,-9.9 -0.4,-5.6 0.4,-6.3 z" />
    <path inkscape:connector-curvature="0" id="MR" data-name="Mauritania" data-id="MR" d="m 949.8,413.3 -20.3,-15.5 -0.2,9.7 -17.9,-0.3 -0.2,16.3 -5.2,0.5 -1.4,3.3 0.9,9.2 -21.6,-0.1 -1.2,2.2 2.8,2.7 1.4,3 -0.7,3.2 0.6,3.2 0.5,6.3 -0.8,5.9 -1.7,3.2 0.4,3.4 2,-2 2.7,0.5 2.8,-1.4 3.1,0 2.6,1.8 3.7,1.7 3.2,4.7 3.6,4.4 1.9,-1.2 1,-3.7 1.8,-0.2 3.8,1.8 3.2,-1.3 2.1,0.4 0.9,-1.4 22.3,-0.1 1.3,-4.4 -1,-0.8 -2.4,-27.5 -2.4,-27.4 8.4,-0.1 z" />
    <path inkscape:connector-curvature="0" id="MW" data-name="Malawi" data-id="MW" d="m 1169.2,661.5 0.1,-2.3 -1.2,-1.9 0.1,-2.8 -1.5,-4.7 1.7,-3.5 -0.1,-7.7 -1.9,-4.1 0.2,-0.7 0,0 -1.1,-1.7 -5.4,-1.2 2.6,2.8 1.2,5.4 -1,1.8 -1.2,5.1 0.9,5.3 -1.8,2.2 -1.9,5.9 2.9,1.7 3,3 1.6,-0.6 2.1,1.6 0.3,2.6 -1.3,2.9 0.2,4.5 3.4,4 1.9,-4.5 2.5,-1.3 -0.1,-8.2 -2.2,-4.6 -1.9,-2 -0.3,0 0,0.8 1.1,0.3 1,3.4 -0.2,0.8 -1.9,-2.5 -1,1.6 -0.8,-1.4 z" />
    <path inkscape:connector-curvature="0" id="MY" data-name="Malaysia" data-id="MY" d="m 1543.6,532.7 -4.7,-2.8 -0.9,1.1 1.4,2.7 -0.4,4.7 2.1,3.4 1,5.3 3.4,4.3 0.8,3.2 6.7,5 5.4,4.8 4,-0.5 0.1,-2.1 -2.3,-5.6 -2.1,-1.8 -0.5,-3.8 -0.6,-2.1 0.5,-2.9 -0.5,-4.3 -2.6,-4.3 -3.5,-3.8 -1.3,-0.6 -1.7,2.6 -3.7,0.8 -0.6,-3.3 z m 99,11 -1.2,-3.1 3.8,-0.4 0.3,-2.4 -4.8,-2 -3.8,-1.7 -0.4,-2.8 -3.1,-3.2 -2.3,0 -2.5,5 -4.1,4.4 -0.1,3.1 -0.1,4.1 -2.7,-0.2 -1.1,2.2 -2.7,-3.3 -2.6,4 -3.8,5 -6.7,1.4 -2.4,1.2 -0.9,5.4 -4.4,1.2 -4.1,-2.2 1,4.3 3.9,3.5 3.6,-1.2 3.6,0.4 3.2,-3.2 2.7,-0.6 5.4,1.8 4.5,-1.3 2.7,-8.9 2,-2.2 1.7,-7.2 6.4,0 5,1 4,-2.1 z" />
    <path inkscape:connector-curvature="0" id="NA" data-name="Namibia" data-id="NA" d="m 1105.4,683.7 -10.3,2.5 -13.4,-0.9 -3.7,-3 -22.5,0.3 -0.9,0.4 -3.2,-2.9 -3.6,-0.1 -3.3,1 -2.7,1.2 0.2,4.9 4.4,6.2 1.1,4 2.8,7.7 2.7,5.2 2.1,2.6 0.6,3.5 0,7.6 1.6,9.8 1.2,4.6 1,6.2 1.9,4.7 3.9,4.8 2.7,-3.2 2.1,1.8 0.8,2.7 2.4,0.5 3.3,1.2 2.9,-0.5 5,-3.2 1.1,-23.6 0.6,-18.5 5.4,-0.2 0.9,-22.7 4.1,-0.2 8.6,-2.2 2,2.6 3.7,-2.5 1.6,0 3.2,-1.5 0,-0.5 -2.1,-1.4 -3.6,-0.4 -4.6,1.5 z" />
    <path inkscape:connector-curvature="0" id="NE" data-name="Niger" data-id="NE" d="m 1051.3,425.6 -8.8,-2.8 -18.6,12.2 -15.8,12.5 -7.8,2.8 0.1,14.6 -3,4.3 -0.5,3.9 -4.9,1 -7.6,0.6 -2,2.2 -3.6,0.3 -0.5,3.1 0.8,2.9 3.1,4.1 0.2,3.1 6.4,1.4 -0.1,4.4 1.9,-1.9 2,0 4.3,3.7 0.3,-5.7 1.6,-2.6 0.8,-3.6 1.4,-1.4 6,-0.8 5.6,2.4 2.1,2.4 2.9,0.1 2.6,-1.5 6.8,3.3 2.8,-0.2 3.3,-2.7 3.3,0.2 1.6,-0.9 3,0.4 4.3,1.8 4.3,-3.5 1.3,0.2 3.9,7 1,-0.2 0.2,-2 1.6,-0.4 0.5,-2.9 -3.6,-0.2 0,-4.1 -2.4,-2.3 2.3,-8.4 6.9,-6 0.2,-8.3 1.8,-12.9 1.1,-2.7 -2.3,-2.2 -0.2,-2.1 -2,-1.6 -1.6,-9.9 -3.9,2.4 -3.1,-3.5 z" />
    <path inkscape:connector-curvature="0" id="NG" data-name="Nigeria" data-id="NG" d="m 1055.8,492.7 -1,0.2 -3.9,-7 -1.3,-0.2 -4.3,3.5 -4.3,-1.8 -3,-0.4 -1.6,0.9 -3.3,-0.2 -3.3,2.7 -2.8,0.2 -6.8,-3.3 -2.6,1.5 -2.9,-0.1 -2.1,-2.4 -5.6,-2.4 -6,0.8 -1.4,1.4 -0.8,3.6 -1.6,2.6 -0.3,5.7 -0.2,2.1 1.2,3.8 -1.1,2.5 0.6,1.7 -2.7,4 -1.7,1.9 -1,4 0.1,4.1 -0.3,10.2 4.9,0 4.3,0 3.9,4.2 1.9,4.6 3,3.9 4.5,0.2 2.2,-1.4 2.1,0.3 5.8,-2.3 1.4,-4.5 2.7,-6.1 1.6,-0.1 3.3,-3.7 2.1,-0.1 3.2,2.6 3.9,-2.2 0.5,-2.6 1.2,-2.6 0.8,-3.2 3,-2.6 1.1,-4.5 1.2,-1.4 0.7,-3.3 1.5,-4 4.6,-5 0.3,-2.1 0.6,-1.1 -2.3,-2.6 z" />
    <path inkscape:connector-curvature="0" id="NI" data-name="Nicaragua" data-id="NI" d="m 514.1,476.8 -1.9,-0.2 -0.9,0.9 -2,0.8 -1.4,0 -1.3,0.8 -1.1,-0.3 -0.9,-0.9 -0.6,0.2 -0.8,1.5 -0.5,-0.1 -0.3,1.3 -2.1,1.8 -1.1,0.7 -0.6,0.8 -1.5,-1.3 -1.4,1.7 -1.2,0 -1.3,0.2 -0.2,3.1 -0.8,0 -0.8,1.5 -1.8,0.3 -0.4,0.4 -0.9,-1 -0.7,1 2.6,2.9 2.2,2 1,2.1 2.5,2.6 1.8,2 0.9,-0.8 3.5,1.7 1.4,-0.8 1.7,0.5 0.8,1.3 1.7,0.4 1.4,-1.3 -0.8,-1.1 -0.1,-1.7 1.2,-1.6 -0.2,-1.7 0.7,-2.7 0.9,-0.7 0.1,-2.8 -0.2,-1.7 0.4,-2.8 0.9,-2.5 1.4,-2.2 -0.3,-2.3 0.4,-1.4 0.6,-0.6 z" />
    <path inkscape:connector-curvature="0" id="NL" data-name="Netherlands" data-id="NL" d="m 1005.5,243.9 2.9,0 1.1,-2.3 1,-5.6 -1,-2 -3.9,-0.2 -6.5,2.6 -3.9,8.9 -2.5,1.7 0,0 3.6,0.5 4.4,-1.3 3.1,2.7 2.8,1.4 -1.1,-6.4 z" />
    <path inkscape:connector-curvature="0" id="NO" data-name="Norway" data-id="NO" d="m 1088.8,133.1 -6.9,1.1 -7.3,-0.3 -5.1,4.4 -6.7,-0.3 -8.5,2.3 -10.1,6.8 -6.4,4 -8.8,10.7 -7.1,7.8 -8.1,5.8 -11.2,4.8 -3.9,3.6 1.9,13.4 1.9,6.3 6.4,3 6,-1.4 8.5,-6.8 3.3,3.6 1.7,-3.3 3.4,-4 0.9,-6.9 -3.1,-2.9 -1,-7.6 2.3,-5.3 4.3,0.1 1.3,-2.2 -1.8,-1.9 5.7,-7.9 3.4,-6.1 2.2,-3.9 4,0.1 0.6,-3.1 7.9,0.9 0,-3.5 2.5,-0.3 2.1,-1.4 5.1,2.9 5.3,-0.3 4.7,1.3 3.4,-2.4 1.1,-3.9 5.8,-1.8 5.7,2.1 -0.8,3.8 3.2,-0.5 6.4,-2.2 0,0 -5.4,-3.3 4.8,-1.4 -13.6,-3.9 z m -22.6,-33.3 -5.6,-1 -1.9,-1.7 -7.2,0.9 2.6,1.5 -2.2,1.2 6.7,1.1 7.6,-2 z m -25.4,-8.3 -4.8,-1.6 -5.1,0.2 -1,1.5 -5,0 -2.2,-1.5 -9.3,1.6 3.2,3.5 7.6,3.8 5.7,1.4 -3,1.7 8.4,2.9 4.4,-0.2 0.9,-3.9 3,-0.9 1.2,-3.4 8.5,-1.8 -12.5,-3.3 z m 24.2,-3.1 -9.1,-1 -3.2,1.2 -5.3,-1 -10.4,1.2 4.3,2 5.1,0 0.9,1.3 10.6,0.7 10.1,-0.5 4.3,-2.4 -7.3,-1.5 z" />
    <path inkscape:connector-curvature="0" id="NP" data-name="Nepal" data-id="NP" d="m 1455.2,394.8 -6.5,-0.6 -6.4,-1.5 -5,-2.8 -4.5,-1.2 -2.5,-3.1 -3.2,-0.9 -6.4,-4.1 -4.7,-2 -1.9,1.5 -2.8,2.9 -0.9,5.9 5.7,2.5 5.8,3.1 7.7,3.5 7.6,0.9 3.8,3.2 4.3,0.6 6.8,1.5 4.6,-0.1 0.1,-2.5 -1.5,-4.1 -0.1,-2.7 z" />
    <path inkscape:connector-curvature="0" id="NZ" data-name="New Zealand" data-id="NZ" d="m 1868.6,832.8 0.9,-2.6 -5.8,2.9 -3.4,3.4 -3.2,1.6 -5.9,4.6 -5.6,3.2 -7,3.2 -5.5,2.4 -4.3,1.1 -11.3,6.1 -6.4,4.6 -1.1,2.3 5.1,0.4 1.5,2.1 4.5,0.1 4,-1.8 6.3,-2.8 8.1,-6.2 4.7,-4.1 6.2,-2.3 4,-0.1 0.6,-2.9 4.6,-2.5 7,-4.5 4.2,-2.9 2.1,-2.6 0.5,-2.6 -5.6,2.5 0.8,-2.6 z m 28.8,-30.5 1.9,-5.7 -3.1,-1.7 -0.8,-3.6 -2.3,0.5 -0.4,4.6 0.8,5.7 0.9,2.7 -0.9,1.1 -0.6,4.4 -2.4,4.1 -4.2,5 -5.3,2.2 -1.7,2.4 3.7,2.5 -0.8,3.5 -6.9,5.1 1.4,0.9 -0.4,1.6 5.9,-2.5 5.9,-4.2 4.5,-3.4 1.6,-1.2 1.5,-2.7 2.8,-2 3.8,0.2 4.2,-3.8 5.1,-5.7 -2.1,-0.8 -4.6,2.5 -3.2,-0.5 -2.9,-2.1 2.3,-4.9 -1.2,-1.8 -2.9,4.4 0.4,-6.8 z" />
    <path inkscape:connector-curvature="0" id="OM" data-name="Oman" data-id="OM" d="m 1301,437.8 2.1,-2 0.8,-1.8 1.6,-3.8 -0.1,-1.4 -2.1,-0.8 -1.6,-2.1 -2.9,-3.7 -3.3,-1.1 -4.1,-0.9 -3.3,-2.3 -2.9,-4.3 -2.8,0 -0.1,4.2 1.1,0.8 -2.4,1.3 0.3,2.6 -1.4,2.6 0.1,2.6 2.9,4.5 -2.6,12.7 -16.1,6.4 5.2,10.5 2.1,4.4 2.5,-0.3 3.6,-2.2 3.1,0.6 2.5,-1.8 -0.2,-2.5 2.1,-1.6 3.4,0 1.2,-1.3 0.2,-3.1 3.3,-2.4 2.6,0 0.4,-0.8 -1,-4.2 0.6,-3.2 1,-1.5 2.5,0.3 1.7,-4.4 z m -16.6,-30.4 0.2,-2.6 -0.7,-0.6 -1.3,2.2 1.3,2.2 0.5,-1.2 z" />
    <path inkscape:connector-curvature="0" id="PK" data-name="Pakistan" data-id="PK" d="m 1388.3,346.3 -9.4,-2.6 -2.9,-5 -4.7,-3 -2.8,0.7 -2.4,1.2 -5.8,0.8 -5.3,1.3 -2.4,2.8 1.9,2.8 1.4,3.2 -2,2.7 0.8,2.5 -0.9,2.3 -5.1,-0.2 3,4.2 -3,1.6 -1.5,3.8 1.1,3.8 -1.7,1.8 -2.1,-0.6 -4,0.9 -0.2,1.7 -4,0 -2.3,3.6 0.8,5.4 -6.6,2.6 -3.8,-0.5 -0.9,1.4 -3.3,-0.8 -5.3,0.9 -9.6,-3.2 3.2,3.3 2.8,3.9 5.6,2.7 1,5.7 2.7,1 0.9,2.9 -7.4,3.3 -1.2,7.4 7.6,-0.9 8.9,-0.1 9.9,-1.2 4.9,4.8 2.1,4.6 4.2,1.6 3.2,-4.2 12,0 -1.8,-5.5 -3.5,-3.2 -1.3,-4.9 -4,-2.9 4.9,-6.6 6.4,0.5 4.5,-6.7 2.1,-6.5 3.9,-6.3 -1,-4.5 3.7,-3.7 -5,-3.1 -2.9,-4.3 -3.2,-5.6 1.9,-2.8 8.5,1.6 5.7,-1 3.7,-5.4 z" />
    <path inkscape:connector-curvature="0" id="PA" data-name="Panama" data-id="PA" d="m 543.5,517 -2,-1.8 -1.7,-1.9 -2.5,-1.1 -3.1,-0.2 0.3,-0.6 -3.1,-0.4 -2,1.9 -3.5,1.3 -2.5,1.6 -2.7,0.5 -1.5,-1.6 -0.5,0.5 -2.3,-0.3 0.2,-1.3 -1.9,-2.3 -2.2,0.6 -0.1,2.5 1.1,1 -0.8,0.7 0.1,1.2 -0.5,1.3 -0.4,1.2 0.6,1 0.3,-1.4 2.4,0 1.4,0.7 2.3,0.5 1,2.5 1.8,0.4 0.8,-1.1 0.8,3.8 2.6,-0.3 0.9,-0.9 1.5,-0.9 -2.5,-3.4 0.6,-1.3 1.3,-0.3 2.3,-1.6 1.2,-2.2 2.5,-0.4 2.7,1.8 1,2.1 1.4,0.4 -1.5,1.7 1,3.5 1.8,1.8 0.9,-3.1 1.8,0.5 1.1,-1.9 -1.1,-3.8 0.7,-0.9 z" />
    <path inkscape:connector-curvature="0" id="PE" data-name="Peru" data-id="PE" d="m 584.3,599.5 -2.9,-3.4 -1.7,-0.1 3.5,-6.5 -4.4,-3 -3.3,0.6 -2.1,-1.1 -3,1.7 -4.2,-0.8 -3.4,-6.7 -2.7,-1.7 -1.8,-3 -3.7,-3 -1.5,0.6 0.8,4.9 -1.7,4.1 -6,6.7 -6.7,2.5 -3.3,5.5 -0.9,4.3 -3.1,2.6 -2.5,-3.2 -2.3,-0.7 -2.3,0.5 -0.2,-2.3 1.5,-1.5 -0.7,-2.7 -4.4,4 -1.6,4.5 3,6.1 -1.7,2.8 4.1,2.6 4.5,4.1 2,4.7 2.4,2.9 6,12.7 6.2,11.7 5.4,8.4 -0.8,1.8 2.8,5.3 4.6,3.9 10.7,6.9 11.6,6.4 0.7,2.6 5.9,3.7 2.7,-1.6 1.2,-3.3 2.8,-6.9 -2.8,-5.3 1.1,-2.1 -1.2,-2.4 1.9,-3.2 -0.3,-5.4 -0.1,-4.5 1.1,-2.1 -5.5,-10.3 -3,1.1 -2.6,-0.7 -0.2,-9.7 -4.4,3.8 -4.9,-0.2 -2.3,-3.4 -3.7,-0.3 1,-2.8 -3.3,-3.8 -2.6,-5.8 1.5,-1.1 -0.1,-2.7 3.3,-1.9 -0.7,-3.4 1.3,-2.2 0.4,-3 6.2,-4.3 4.6,-1.2 0.7,-1 5.1,0.3 z" />
    <path inkscape:connector-curvature="0" id="PH" data-name="Philippines" data-id="PH" d="m 1684.6,518.6 -0.6,-2.3 -0.8,-3.2 -4.8,-3 0.8,4.9 -3.9,0.2 -0.7,2.8 -4.2,1.7 -2.2,-2.8 -2.8,2.4 -3.4,1.7 -1.9,5.4 1.1,1.9 3.9,-3.6 2.7,0.3 1.5,-2.7 3.8,3 -1.5,3.1 1.9,4.6 6.8,3.7 1.4,-3 -2.1,-4.7 2.4,-3.2 2.5,6.4 1.5,-5.8 -0.6,-3.5 -0.8,-4.3 z m -14.5,-11.8 0,-6.1 -3.6,6.1 0.5,-4.2 -3,0.3 -0.3,4 -1.2,1.8 -1,1.7 3.8,4.4 1.6,-1.9 1.4,-4 1.8,-2.1 z m -30.1,6.1 2.6,-4.4 3.4,-3.5 -1.5,-5.2 -2.4,6.3 -2.9,4.4 -3.8,4 -2.4,4.4 7,-6 z m 17.4,-16.4 1.2,3 -0.1,3.3 0.5,2.9 3.3,-1.9 2.4,-2.7 -0.2,-2.6 -3.6,0 -3.5,-2 z m 20,-1.7 -1.8,-2.4 -5.4,-0.1 4,4.8 0.3,2.4 -3.3,-0.5 1.2,3.9 1.7,0.3 0.7,4.5 2.5,-1.4 -1.7,-4 -0.4,-2.1 4.5,1.7 -2.3,-7.1 z m -22.9,-5.8 -2.2,-2.3 -4.8,-0.2 3.4,4.8 2.8,3.2 0.8,-5.5 z m -6.4,-34.6 -3.3,0 -0.9,5.8 1.1,9.9 -2.6,-2 1.2,6 1.2,2.8 3.3,3.7 0.4,-2.3 1.8,1.4 -1.5,1.7 0.1,2.6 2.9,1.4 5,-0.9 4,3.8 1.1,-2.4 2.5,3.4 4.8,3.1 0.2,-2.9 -2,-1.6 0.1,-3.4 -7.5,-3.6 -2.3,0.8 -3.1,-0.7 -2,-5.1 0.1,-5.1 3,-2.1 0.6,-5.3 -2.7,-4.6 0.4,-2.6 -0.7,-1.6 -1.5,1.6 -3.7,-1.8 z" />
    <path inkscape:connector-curvature="0" id="PG" data-name="Papua New Guinea" data-id="PG" d="m 1850.7,615.6 0.9,-1.8 -2.4,-2.2 -2.5,-4 -1.6,-1.5 -0.5,-1.9 -0.8,0.7 0.9,4.8 2.2,4 2.2,2.5 1.6,-0.6 z m -21.2,-8.6 2.1,-3.9 0.4,-3.5 -1.1,-1 -3.4,0.1 0.4,3.7 -3.3,2.3 -1.7,2.2 -3.2,0.5 -0.4,-3.4 -0.8,0.1 -1,3.1 -3.1,0.5 -5,-0.9 -0.6,1.9 3.1,1.8 4.5,1.9 2.9,0 3,-1.5 3.2,-1.6 1,-1.8 3,-0.5 z m -27.8,12.2 -0.9,-4.3 5.2,-0.7 -1.1,-3.3 -9.1,-4 -0.6,-3.7 -2.9,-3.2 -3.7,-3.3 -10.2,-3.6 -9.6,-4.4 -1,20.7 -1.5,20.8 5.7,0.2 3.1,1.1 4.6,-2.2 -0.3,-4.7 3.6,-2.1 4.9,-1.8 7,2.8 2.4,5.6 2.9,3.5 3.9,4 5.5,1 4.8,0.7 1.1,1.6 3.8,-0.4 0.8,-1.8 -5.6,-2.7 1.8,-1.2 -4.2,-1.1 0.5,-2.8 -3.2,0.2 -3,-6.8 -4.7,-4.1 z m 34.7,-18.4 -0.5,-3.3 -2,-2.1 -2.1,-2.6 -2.3,-1.5 -1.9,-1.4 -2.9,-1.8 -1.6,1.5 3.9,1.9 3.1,2.7 2.4,2.1 1.2,2.4 0.8,3.8 1.9,-1.7 z" />
    <path inkscape:connector-curvature="0" id="PL" data-name="Poland" data-id="PL" d="m 1069.4,228.3 -4.6,-0.1 -0.5,-1.4 -4.8,-1.1 -5.7,2.1 -7.1,2.8 -3.1,1.7 1.4,3.1 -1.2,1.6 2,2.2 1.4,3.3 -0.1,2.1 2.3,3.9 2.4,1.9 3.7,0.6 -0.1,1.7 2.7,1.2 0.6,-1.5 3.4,0.6 0.7,2 3.6,0.3 2.6,3.1 0.3,0.4 1.9,-0.9 2.7,2.2 2.8,-1.3 2.4,0.6 3.4,-0.8 4.9,2.3 1.1,0.4 -1.6,-2.8 3.8,-5.1 2.3,-0.7 0.3,-1.8 -3.1,-5.3 -0.5,-2.7 -1.9,-2.9 2.7,-1.2 -0.3,-2.4 -1.7,-2.3 -0.6,-2.7 -1.4,-1.9 -2.5,-0.6 -8.7,0.1 -5.9,-0.7 z" />
    <path inkscape:connector-curvature="0" id="KP" data-name="N. Korea" data-id="KP" d="m 1644.7,302.3 0,0 -5.5,-3.6 0.1,3.5 -6.3,2.6 2.7,3.3 -4.6,-0.2 -3.6,-2 -1,4.4 -3.8,3.4 -2.1,4 3.3,1.7 3.4,0.7 0.8,1 0.4,3.5 1.1,1.2 -0.9,0.7 -0.1,2.9 1.9,1 1.6,0.6 0.8,1.2 1.3,-0.5 0,-1.3 3.1,1.3 0.1,-0.6 2.4,0.2 0.7,-2.9 3.5,-0.3 2.1,-0.4 -0.1,-1.6 -4.3,-2.8 -2.6,-1 0.2,-0.7 -1.2,-2.8 1.3,-1.7 2.9,-1 1,-1.9 0.3,-1.1 1.9,-1.4 -2.8,-4.5 0.3,-2.1 0.9,-2 2.2,0.3 0,0 0,0 0,0 -1.4,-1.1 z" />
    <path inkscape:connector-curvature="0" id="PT" data-name="Portugal" data-id="PT" d="m 937.6,335.9 -0.4,-2.1 2,-2.5 0.8,-1.7 -1.8,-1.9 1.6,-4.3 -2,-3.8 2.2,-0.5 0.3,-3 0.9,-0.9 0.2,-4.9 2.4,-1.7 -1.3,-3.1 -3,-0.2 -0.9,0.8 -3,0 -1.2,-3.1 -2.1,0.9 -1.9,1.6 0.1,2.1 0.9,2.2 0.1,2.7 -1.3,3.8 -0.4,2.5 -2.2,2.3 -0.6,4.2 1.2,2.4 2.3,0.6 0.4,4 -1,5.1 2.8,-0.7 2.7,0.9 2.2,-1.7 z" />
    <path inkscape:connector-curvature="0" id="PY" data-name="Paraguay" data-id="PY" d="m 655.7,700.5 -0.3,-1.9 -5.4,-3.3 -5.1,-0.1 -9.5,1.9 -2.1,5.6 0.2,3.4 -1.5,7.6 11.2,10.4 4.6,1 7.2,4.7 5.9,2.5 1.1,2.8 -4.2,9.6 5.7,1.8 6.2,1 4.2,-1.1 4.3,-4.8 0.3,-5.7 0.7,-3.6 0.3,-3.8 -0.3,-3.5 -2.1,-1.2 -2,1.1 -2,-0.3 -0.9,-2.5 -1,-5.8 -1.2,-1.9 -3.9,-1.7 -2.1,1.2 -6,-1.2 -0.4,-8.6 -1.9,-3.6 z" />
    <path inkscape:connector-curvature="0" id="PS" data-name="Palestine" data-id="PS" d="m 1166.9,366.1 -2,-0.9 -0.7,4.3 1.4,0.7 -1.2,0.8 -0.1,1.7 2.4,-0.8 0.6,-1.9 -0.4,-3.9 z" />
    <path inkscape:connector-curvature="0" id="QA" data-name="Qatar" data-id="QA" d="m 1258,415.5 0.8,-3.8 -0.5,-3.7 -1.9,-2 -1.4,0.7 -1.1,3.3 0.8,4.7 1.8,1.2 1.5,-0.4 z" />
    <path inkscape:connector-curvature="0" id="RO" data-name="Romania" data-id="RO" d="m 1108.1,266.3 -2.1,0 -1,1.5 -3.6,0.6 -1.6,0.9 -2.4,-1.5 -3.2,0 -3.2,-0.7 -1.9,1.3 -2.9,1.3 -1.9,4.2 -2.6,4.3 -3.8,1.1 2.9,2.5 0.8,1.9 3.2,1.5 0.7,2.5 3.1,1.8 1.4,-1.3 1.4,0.7 -1.1,1.1 1,1 1.8,2.6 1.9,-0.5 4,1 7.5,0.3 2.3,-1.6 5.8,-1.4 4,2.2 3,0.7 0.4,-7.4 1.6,0.5 2.3,-1.3 -0.4,-1.6 -2.4,-1.1 -2.2,1 -2.4,-1.1 -1.3,-2.8 0.2,-2.7 -0.6,-2.7 -3.4,-3.7 -1.9,-2.6 -1.8,-1.9 -1.6,-0.6 z" />
    <path id="RU" data-name="Russia" data-id="RU" d="m 1332.3,95.1 -4.5,-4 -13.6,-4.1 -9.4,-2.1 -6.2,0.9 -5.3,2.9 5.8,0.8 6.6,3.2 8,1.7 11.5,1.3 7.1,-0.6 z m -178.7,-7.3 0.9,-0.6 -5.7,-0.9 -2.8,0.7 -1.3,1 -1.5,-1.2 -5.2,0.1 -6.2,0.8 7.7,0.1 -1.1,1.3 4.4,1 3.6,-0.7 0.1,-0.7 2.9,-0.3 4.2,-0.6 z m 200.5,9.9 -1.5,-1.8 -12.5,-2.6 -3,-0.3 -2.2,0.5 1.2,6 18,-1.8 z m 15.2,6.3 -9.2,-0.7 3.4,-1.2 -8.2,-1.5 -6.1,1.9 -1,2 1.5,2.1 -6.9,-0.1 -5.3,2.6 -4.3,-1.1 -9.3,0.5 0.3,1.3 -9.2,0.7 -4.9,2.4 -4.2,0.2 -1.2,3.3 5.5,2.6 -7.7,0.7 -9.5,-0.3 -5.8,1.1 4.8,5.4 6.9,4.3 -9.6,-3 -7.9,0.3 -5.1,2 4.5,3.8 -4.9,-1 -2.1,-5 -4.2,-2.8 -1.8,0.1 3.6,3.7 -4.6,3.5 8.1,4.2 0.4,5.4 2.9,2.9 4.7,0.5 0.4,3.5 4.4,3.1 -1.9,2.6 0.5,2.7 -3.7,1.4 -0.5,2 -5.3,-0.8 3.5,-7.8 -0.5,-3.6 -6.7,-3.3 -3.8,-7.3 -3.7,-3.7 -3.6,-1.6 0.8,-4.2 -2.9,-2.9 -11.3,-1.4 -2.1,1 0.5,4.7 -4.3,4.7 1.2,1.7 4.7,4.1 0.1,2.6 5.3,0.5 0.8,1.1 5.8,2.9 -1,2.8 -18.5,-6.1 -6.6,-1.7 -12.8,-1.6 -1.2,1.7 5.9,3.1 -2.7,3.6 -6.4,-3.2 -5,2.2 -7.6,0.1 -2.1,1.9 -5.3,-0.6 2.5,-3.3 -3.2,-0.2 -12.3,4.6 -7.6,2.6 0.4,3.5 -6,1.2 -4,-1.9 -1.2,-3 5,-0.7 -3.6,-3 -12.2,-1.8 4.3,3.4 -0.8,3.2 4.7,3.3 -1.1,3.8 -4.6,-1.9 -4,-0.3 -8,5.4 4.2,4.1 -3.2,1.4 -11.4,-3.5 -2.1,2.1 3.3,2.4 0.2,2.7 -3.8,-1.4 -6,-1.7 -1.9,-5.8 -1,-2.6 -8,-4 2.9,-0.7 20.1,4.2 6.4,-1.5 3.7,-2.9 -1.6,-3.6 -4,-2.6 -17.6,-6.1 -11.6,-1.3 -7.6,-3.2 -3.6,1.8 0,0 -6.4,2.2 -3.2,0.5 0.4,3.7 7.2,3.7 -2.8,4.1 6.4,6.3 -1.7,4.8 4.9,4.1 -0.9,3.7 7.3,3.9 -0.9,2.9 -3.3,3.3 -7.9,7.4 0,0 5.3,2.8 -4.5,3.2 0,0 0.9,1 -2.6,3.4 2.5,5.5 -1.6,1.9 2.4,1.4 1,2.8 2.1,3.6 5.2,1.5 1,1.4 2.3,-0.7 4.8,1.4 1,2.9 -0.6,1.6 3.7,3.9 2.2,1.1 -0.1,1.1 3.4,1.1 1.7,1.6 -1.6,1.3 -3.9,-0.2 -0.8,0.6 1.5,2 2,3.9 0,0 1.8,0.2 1,-1.4 1.5,0.3 4.8,-0.5 3.8,3.4 -0.9,1.3 0.7,1.9 4,0.2 2.2,2.7 0.2,1.2 6.6,2.2 3.5,-1 3.6,2.9 2.9,-0.1 7.6,2 0.4,1.9 -1.3,3.2 1.8,3.4 -0.3,2.1 -4.7,0.5 -2.2,1.7 0.4,2.8 4.2,-1 0.4,1.3 -6.8,2.6 3.2,2.4 -3.2,5.2 -3.4,1 5,3.6 6.2,2.4 7.4,5.1 0.5,-0.7 4.5,1.1 7.7,1 7.5,2.9 1.1,1.2 2.9,-1 5.1,1.3 2.1,2.5 3.5,1.4 1.5,0.2 4.3,3.8 2.4,0.4 0.5,-1.5 2.6,-2.5 0,0 -7.3,-7.3 -0.4,-4.1 -5.9,-5.9 3.5,-6.3 4.6,-1.1 1.4,-3.7 -2.8,-1 -0.2,-3.2 -4.2,-4.1 -3.6,0.2 -5.3,-4.3 1.7,-4.7 -1.7,-1.2 2.1,-6.8 6,3.6 -0.7,-4.6 8.1,-6.6 7.5,-0.2 11.9,4.3 6.6,2.4 4.3,-2.5 7.6,-0.2 7.3,3.2 0.8,-1.8 6.9,0.3 0.2,-3 -9.4,-4.2 3.6,-2.9 -1.5,-1.7 3.9,-1.6 -5,-4.1 1.4,-2.1 16.8,-2.1 1.7,-1.5 10.8,-2.2 3.1,-2.5 9,1.3 4.3,6.3 4.3,-1.5 7,2.1 1.2,3.3 4.4,-0.4 9.1,-5.7 -0.8,1.9 8.3,4.7 18.1,15.5 1.1,-3.3 8.3,3.6 6.2,-1.6 3.2,1.1 4.1,3.6 3.9,1.2 3.3,2.6 6,-0.9 4.3,3.8 1.7,-0.5 4.7,-1 6.6,-5.4 5.9,-2.9 5.3,1.9 5.1,0.1 4.7,2.9 5,0.2 7.9,1.6 2.4,-4.3 -4,-3.6 1.3,-6.4 6.9,2.5 4.8,0.8 6.6,1.5 3.7,4.6 8.4,2.6 3.9,-1.1 5.7,-0.8 5.4,0.8 6.5,3 4.9,3.1 4.5,0 6.7,1 3.6,-1.6 5.8,-1 4.5,-4.4 3.3,0.7 3.9,2.1 5.5,-0.5 7.3,2.3 4.4,-3.9 -1.9,-2.7 -0.1,-6.5 1.2,-2 -2.5,-3.3 -3.7,-1.5 1.7,-3 5.1,-1.1 6.2,-0.2 8.5,1.8 5.9,2.3 7.7,6.1 3.8,2.7 4.4,3.7 6.1,6.1 9.9,1.9 8.9,4.5 6,5.8 7.5,0 2.6,-2.5 6.9,-1.8 1.3,5.6 -0.4,2.3 2.8,6.8 0.6,6 -6.8,-1.1 -2.9,2.2 4.7,5.3 3.8,7.3 -2.5,0.1 1.9,3.1 0,0 1.4,1.1 0,0 0,0 0,0 -0.4,-2 4,-4.5 5.1,3 3.2,-0.1 4.4,-3.6 1,-3.7 2.1,-7.1 1.9,-7.2 -1.3,-4.3 1,-9 -5.2,-9.9 -5.5,-7.3 -1.3,-6.2 -4.7,-5.1 -12.7,-6.7 -5.6,-0.4 -0.3,3 -5.8,-1.3 -5.7,-3.8 -8,-0.7 4.9,-14.1 3.5,-11.5 13.1,-1.8 14.9,1 2.5,-2.8 7.9,0.8 4.3,4.3 6.4,-0.6 8.4,-1.6 -7.7,-3.5 0,-9.8 9.1,-1.9 12.1,7.1 3.6,-6.4 -3.2,-4.7 4.7,-0.5 6.5,8.1 -2.4,4.6 -0.8,6 0.3,7.5 -5.7,1.3 2.8,2.7 -0.1,3.6 6.4,8.3 16,13.4 10.5,8.8 5.7,4.3 1.6,-5.7 -4.5,-6.2 5.7,-1.5 -5.4,-6.9 5,-3.1 -4.7,-2.6 -3.4,-5 4.1,-0.2 -9,-8.6 -6.7,-1.4 -2.9,-2.4 -1.1,-5.6 -3.1,-3.9 7,0.8 1.3,-2.5 4.7,2.2 6.1,-4.6 11.4,4 -1.7,-2.6 2,-3.6 1.5,-4 3.1,-0.7 6.5,-4.3 9.8,1.2 -0.9,-1.5 -3.8,-2.3 -4.1,-1.6 -9.1,-4.6 -8.1,-3 6.1,0.4 2,-2.5 0,0 -32.9,-21.9 -9.4,-2.3 -15.7,-2.6 -7.9,0.3 -15.2,-1.4 1.8,2.3 8.5,3.4 -2.5,1.8 -14.2,-4.8 -6.8,0.6 -9.2,-1.1 -7,0.2 -3.9,1.1 -7.2,-1.6 -5.1,-3.8 -6.5,-2.2 -9.2,-0.9 -14.7,1 -16.1,-4 -7.8,-3 -40.1,-3.4 -2.1,2.2 9.3,4.8 -7.5,-0.7 -1,1.5 -9.7,-1.6 -5,1.4 -9.3,-2.4 3,5.5 -8.9,-2.1 -10,-4.1 -0.4,-2.2 -6,-3.3 -9.8,-2.6 -6.1,0 -9.3,-0.9 4.7,3.9 -17.2,-0.8 -3.9,-2.3 -13.3,-0.9 -5.3,0.8 -0.1,1.3 -5.8,-3.2 -2.3,0.9 -7.2,-1.2 -5.6,-0.7 1.1,-1.5 6.6,-2.8 2.3,-1.5 -2.4,-2.5 -5.5,-1.9 -11.5,-2.3 -10.8,-0.1 -1.9,1.2 -4.1,-2.4 z m -162.2,31.6 -9.9,-4.3 -3.1,-4.3 3.3,-4.9 2.8,-5 8.6,-4.7 9.8,-2.4 11.3,-2.4 1.3,-1.5 -4.2,-1.9 -6.6,0.6 -4.9,1.8 -11.7,0.9 -10.1,3.1 -6.8,2.7 2.5,2.2 -6.6,4.4 3.9,0.7 -5.4,4.3 1.6,2.8 -3.4,1.1 1.9,2.8 7.9,1.4 2.2,2.3 13.4,0.7 2.2,-0.4 z m 314,-24.7 -17.9,-2.6 -10.2,-0.2 -3.4,0.9 3.4,3.4 12.4,3.2 4.5,-1.2 14.2,0.2 -3,-3.7 z m 25.2,2.3 -11.7,-1.3 -8.2,-0.7 1.7,1.6 10.3,2 6.8,0.4 1.1,-2 z m -12.5,9.5 -2.5,-1.4 -8.3,-1.9 -4.1,0.5 -0.8,2 1.1,0.2 8.8,0.6 5.8,0 z m 162.6,12.3 -6,-3.6 -1.4,2.2 3.5,1.6 3.9,-0.2 z m -612.4,93.9 -0.6,-1.5 0.2,-1.7 -2.2,-0.9 -5,-1.1 -6.3,2 -0.7,2.6 5.9,0.7 8.7,-0.1 z m 589.7,21.8 -7.2,-6.2 -5.1,-6 -6.8,-5.8 -4.9,-4 -1.3,0.8 4.4,2.8 -1.9,2.8 6.8,8.3 7.8,6 6.4,8.3 2.4,4.6 5.5,6.8 3.8,6 4.6,5.2 -0.1,-4.8 6.5,3.8 -3,-4.4 -9.5,-6.3 -3.7,-9 8.9,2 -13.6,-10.9 z" inkscape:connector-curvature="0" />
    <path inkscape:connector-curvature="0" id="RW" data-name="Rwanda" data-id="RW" d="m 1147.6,579.4 -3.3,1.9 -1.4,-0.6 -1.6,1.8 -0.2,3.8 -0.8,0.4 -0.6,3.5 3.5,0.5 1.7,-3.6 3,0.4 0,0 1.6,-0.8 0.4,-3.7 -2.3,-3.6 z" />
    <path inkscape:connector-curvature="0" id="EH" data-name="W. Sahara" data-id="EH" d="m 929.6,396.2 -0.8,0 0,0 0.1,3.4 -3.4,0.2 -1.8,1.5 -2.5,0 -1.9,-0.9 -4.6,0.7 -1.9,5 -1.7,0.4 -2.8,8.1 -7.8,6.8 -2,8.8 -2.3,2.9 -0.7,2.3 -12.4,0.5 -0.1,0 -0.3,2.7 1.2,-2.2 21.6,0.1 -0.9,-9.2 1.4,-3.3 5.2,-0.5 0.2,-16.3 17.9,0.3 0.2,-9.7 0.1,-1.2 0,-0.4 z" />
    <path inkscape:connector-curvature="0" id="SA" data-name="Saudi Arabia" data-id="SA" d="m 1228.7,387 -10.2,-0.5 -16.7,-12.7 -8.5,-4.5 -6.7,-1.7 -0.9,1 -10.4,3.1 6.1,6.4 -1.7,1 -0.7,2.2 -4,0.8 -1.1,2.3 -2.1,2 -6.1,-1 -0.5,2.5 0,2.2 -0.6,3.5 2.7,0 3.2,4.4 3.7,5.1 2.5,4.7 1.7,1.5 1.7,3.3 -0.2,1.4 2.1,3.7 3,1.3 2.8,2.5 3.6,7 0,3.8 0.9,4.4 4,6.1 2.5,1 4.1,4.4 1.9,5.2 3.2,5.3 3,2.3 0.6,2.5 1.8,1.9 0.9,2.8 2.3,-2.1 -0.7,-2.7 1.2,-3.1 2.4,1.7 1.5,-0.6 6.4,-0.2 1,0.7 5.4,0.6 2.1,-0.3 1.6,2.1 2.5,-1 3.5,-6.7 5,-2.9 15.7,-2.4 16.1,-6.4 2.6,-12.7 -2.9,-4.5 -1,1.3 -16.8,-3.2 -2.6,-6.4 -0.4,-1.5 -1.2,-2.4 -1.5,0.4 -1.8,-1.2 -1,-1.6 -0.9,-2.1 -1.7,-1.8 -1,-2.1 0.4,-2.1 -0.6,-2.7 -4,-2.6 -1.2,-2.3 -2.9,-1.4 -2.7,-5.5 -3.8,0.2 -1.7,-3.1 -4.9,-0.6 z" />
    <path inkscape:connector-curvature="0" id="SD" data-name="Sudan" data-id="SD" d="m 1180.8,468.5 0.4,-4.2 1.6,-2 4,-1 2.6,-3.6 -3.1,-2.4 -2.2,-1.6 -2.5,-7.6 -1.1,-6.5 1.1,-1.2 -2.1,-6.2 -21.8,0 -21.4,0 -22.1,0 0.5,12.7 -6.3,0 0,2.7 1.1,25.2 -4.8,-0.4 -2.4,4.7 -1.4,3.9 1.2,1.5 -1.8,1.9 0.7,2.7 -1.4,2.6 -0.5,2.4 2,-0.4 1.2,2.5 0.1,3.7 2.1,1.8 0,1.6 0.7,2.7 3.3,4 0,2.6 -0.8,2.6 0.3,2 2,1.8 0.5,0.3 1.7,-0.7 1.9,-1.2 1.3,-5.7 1.5,-2.9 4,-0.9 1,1.8 3,3.7 1.5,0.5 2,-1.1 4.1,0.3 0.8,1.3 5.5,0 0.2,-1.3 2.9,-1.2 0.5,-1.9 2.1,-1.3 4.8,3.7 2.8,-0.7 2.7,-4.5 3,-3.5 -0.6,-3.9 -1.4,-1.8 3.4,-0.3 0.3,-1.5 2.6,0.5 -0.5,4.7 0.8,4.6 2.9,2.5 0.7,2.2 0,3.1 0.8,0.1 0,-0.7 1.4,-6.7 2.6,-1.8 0.5,-2.6 2.3,-4.8 3.2,-3.2 2.1,-6.2 0.7,-5.5 -0.7,-2.5 1.9,-9.4 z" />
    <path inkscape:connector-curvature="0" id="SS" data-name="Sudan" data-id="SS" d="m 1166,508.7 -0.7,-2.2 -2.9,-2.5 -0.8,-4.6 0.5,-4.7 -2.6,-0.5 -0.3,1.5 -3.4,0.3 1.4,1.8 0.6,3.9 -3,3.5 -2.7,4.5 -2.8,0.7 -4.8,-3.7 -2.1,1.3 -0.5,1.9 -2.9,1.2 -0.2,1.3 -5.5,0 -0.8,-1.3 -4.1,-0.3 -2,1.1 -1.5,-0.5 -3,-3.7 -1,-1.8 -4,0.9 -1.5,2.9 -1.3,5.7 -1.9,1.2 -1.7,0.7 3.8,2.5 3.1,2.6 0.1,2 3.8,3.4 2.4,2.7 1.5,3.8 4.2,2.5 0.9,2.1 3.5,5.2 2.5,0.8 1.5,-1.1 2.6,0.4 3.1,-1.3 1.4,2.7 5,4.2 0,0 2.3,-1.7 3.5,1.4 4.5,-1.5 4,0.1 3.4,-3 3.4,-3.8 3.8,-4.2 -3.5,-6.9 -2.6,-1.5 -1,-2.5 -2.9,-3.1 -3.4,-0.5 1.8,-3.6 3,-0.1 0.8,-2 -0.2,-5 -0.8,-0.1 0,-3.1 z" />
    <path inkscape:connector-curvature="0" id="SN" data-name="Senegal" data-id="SN" d="m 908.9,479.2 -3.6,-4.4 -3.2,-4.7 -3.7,-1.7 -2.6,-1.8 -3.1,0 -2.8,1.4 -2.7,-0.5 -2,2 -1.3,3.3 -2.8,4.4 -2.5,1.2 2.7,2.3 2.2,5 6.1,-0.2 1.3,-1.5 1.8,-0.1 2.1,1.5 1.8,0.1 1.8,-1.1 1.1,1.8 -2.4,1.5 -2.4,-0.1 -2.4,-1.4 -2.1,1.5 -1,0 -1.4,0.9 -5,-0.1 0.8,4.9 3,-1.1 1.8,0.2 1.5,-0.7 10.3,0.3 2.7,0.1 4,1.5 1.3,-0.1 0.4,-0.7 3,0.5 0.8,-0.4 0.3,-2 -0.4,-2.4 -2.1,-1.8 -1.1,-3.7 -0.2,-3.9 z" />
    <path inkscape:connector-curvature="0" id="SL" data-name="Sierra Leone" data-id="SL" d="m 919.4,518.7 -1.5,0.3 0,-2.3 -0.9,-1.7 0.2,-1.8 -1.2,-2.7 -1.5,-2.3 -4.5,0 -1.3,1.2 -1.5,0.2 -1,1.4 -0.7,1.7 -3,2.8 0.7,4.7 0.9,2.3 2.9,3.5 4.1,2.5 1.5,0.5 1.3,-2 0.3,-1.9 2.6,-3.4 2.6,-3 z" />
    <path inkscape:connector-curvature="0" id="SV" data-name="El Salvador" data-id="SV" d="m 487.2,487 0.6,-2.5 -0.7,-0.7 -1.1,-0.5 -2.5,0.8 -0.1,-0.9 -1.6,-1 -1.1,-1.3 -1.5,-0.5 -1.4,0.4 0.2,0.7 -1.1,0.7 -2.1,1.6 -0.2,1 1.4,1.3 3.1,0.4 2.2,1.3 1.9,0.6 3.3,0.1 0.7,-1.5 z" />
    <path inkscape:connector-curvature="0" id="RS" data-name="Serbia" data-id="RS" d="m 1084.8,285.2 -3.2,-1.5 -0.8,-1.9 -2.9,-2.5 -3.2,-0.2 -3.7,1.6 0,0 1.5,2.4 1.7,1.8 -1.7,2.3 0,0 1.8,0 -1,2.7 2.7,2.3 -0.5,2.9 -1.2,0.3 1.5,1.1 0.8,0.8 1.8,0.7 2,1.2 -0.4,0.6 1.2,-0.5 0.5,-2 0.9,-0.4 0.8,0.9 1,0.4 0.8,1 0.8,0.3 1.1,1.1 0.8,0 -0.5,1.5 -0.5,0.7 0.2,0.5 1.7,-0.4 2.4,-0.1 0.7,-0.9 -0.6,-0.7 0.7,-2 1.7,-1.9 -2.8,-2.6 -0.7,-2.3 1.1,-1.4 -1,-1 1.1,-1.1 -1.4,-0.7 -1.4,1.3 -3.1,-1.8 -0.7,-2.5 z" />
    <path inkscape:connector-curvature="0" id="SR" data-name="Suriname" data-id="SR" d="m 668,533.8 -4.6,0.5 -0.6,1.1 -6.7,-1.2 -1,5.7 -3.5,1.6 0.3,1.5 -1.1,3.3 2.4,4.6 1.8,0.1 0.7,3.5 3.3,5.6 3.1,0.5 0.5,-1.3 -0.9,-1.3 0.5,-1.8 2.3,0.6 2.7,-0.7 3.2,1.4 1.4,-2.7 0.6,-2.9 1,-2.8 -2.1,-3.7 -0.4,-4.4 3.1,-5.5 -6,-1.7 z" />
    <path inkscape:connector-curvature="0" id="SK" data-name="Slovakia" data-id="SK" d="m 1087.4,260.9 -4.9,-2.3 -3.4,0.8 -2.4,-0.6 -2.8,1.3 -2.7,-2.2 -1.9,0.9 -0.3,-0.4 -1.5,0 -0.6,1.1 -1.1,0.3 -0.2,1.4 -0.9,0.3 -0.1,0.6 -1.6,0.6 -2.2,-0.1 -0.6,1.4 -0.3,0.8 0.7,2.1 2.6,1.6 1.9,0.7 4.1,-0.8 0.3,-1.2 1.9,-0.2 2.3,-1 0.6,0.4 2.2,-0.7 1,-1.5 1.6,-0.4 5.5,1.9 1,-0.6 0.7,-2.5 1.1,-1.7 z" />
    <path inkscape:connector-curvature="0" id="SI" data-name="Slovenia" data-id="SI" d="m 1059.4,277 -1.2,-2.1 -0.8,-0.1 -0.9,1.1 -4.3,0.1 -2.4,1.4 -4.2,-0.4 -0.3,3 1.4,2.7 -1.1,0.5 3.5,0.2 0.8,-1 1.8,1 2,0.1 -0.2,-1.7 1.7,-0.6 0.3,-2.5 3.9,-1.7 z" />
    <path inkscape:connector-curvature="0" id="SE" data-name="Sweden" data-id="SE" d="m 1077.7,161.1 -1.9,-2.2 -1.7,-8.4 -7.2,-3.7 -5.9,-2.7 -2.5,0.3 0,3.5 -7.9,-0.9 -0.6,3.1 -4,-0.1 -2.2,3.9 -3.4,6.1 -5.7,7.9 1.8,1.9 -1.3,2.2 -4.3,-0.1 -2.3,5.3 1,7.6 3.1,2.9 -0.9,6.9 -3.4,4 -1.7,3.3 4.2,8.4 4.4,6.7 2,5.7 5.3,-0.3 2.2,-4.7 5.7,0.5 2,-5.5 0.6,-10 4.6,-1.3 3.3,-6.6 -4.8,-3.3 -3.6,-4 2.1,-8.1 7.7,-4.9 6.1,-4.5 -1.2,-3.5 3.4,-3.9 7,-1.5 z" />
    <path inkscape:connector-curvature="0" id="SZ" data-name="Swaziland" data-id="SZ" d="m 1150.5,736.6 -2.7,-1.2 -1.6,0.5 -0.7,1.8 -1.6,2.4 -0.1,2.2 3,3.5 3.3,-0.7 1.3,-2.8 -0.3,-2.8 -0.6,-2.9 z" />
    <path inkscape:connector-curvature="0" id="SY" data-name="Syria" data-id="SY" d="m 1183.5,359.9 11,-6.7 0.9,-7.8 -1.2,-4.7 2.7,-1.6 2.1,-4.1 -5.9,1.1 -2.8,-0.2 -5.7,2.5 -4.3,0 -3,-1.2 -5.5,1.8 -1.9,-1.3 0.1,3.6 -1.2,1.5 -1.2,1.4 -1,2.6 1.1,5 2.4,0.3 1.2,2.5 -2.6,2.4 -0.9,3.5 0.3,2.6 -0.6,1 0.1,0 6.3,2.5 9.6,-6.7 z" />
    <path inkscape:connector-curvature="0" id="TD" data-name="Chad" data-id="TD" d="m 1108.4,447.6 -22.4,-12.2 -22.3,-12.2 -5.4,3.5 1.6,9.9 2,1.6 0.2,2.1 2.3,2.2 -1.1,2.7 -1.8,12.9 -0.2,8.3 -6.9,6 -2.3,8.4 2.4,2.3 0,4.1 3.6,0.2 -0.5,2.9 2.2,4.1 0.5,4.2 -0.2,4.3 3.1,5.8 -3.1,-0.1 -1.6,0.4 -2.5,-0.6 -1.2,3 3.3,3.7 2.5,1.1 0.8,2.6 1.8,4.4 -0.9,1.7 4.7,-0.4 1,-1.7 0.9,0.2 1.4,1.4 7.1,-2.4 2.3,-2.5 2.9,-2.2 -0.6,-2.3 1.6,-0.6 5.4,0.4 5.2,-2.9 4,-7 2.8,-2.5 3.5,-1.1 0,-1.6 -2.1,-1.8 -0.1,-3.7 -1.2,-2.5 -2,0.4 0.5,-2.4 1.4,-2.6 -0.7,-2.7 1.8,-1.9 -1.2,-1.5 1.4,-3.9 2.4,-4.7 4.8,0.4 -1.1,-25.2 z" />
    <path inkscape:connector-curvature="0" id="TG" data-name="Togo" data-id="TG" d="m 981.7,502.2 -4.9,-0.1 -0.4,1.9 2.4,3.3 -0.1,4.6 0.6,5.1 1.4,2.3 -1.2,5.7 0.4,3.2 1.5,4 1.2,2.2 4.6,-1.3 -1.4,-4.4 0.2,-14.6 -1.1,-1.3 -0.2,-3.1 -2,-2.3 -1.7,-1.9 0.7,-3.3 z" />
    <path inkscape:connector-curvature="0" id="TH" data-name="Thailand" data-id="TH" d="m 1562.7,481.4 1.5,-2.9 -0.5,-5.4 -5.2,-5.5 -1.3,-6.3 -4.9,-5.2 -4.3,-0.4 -0.8,2.2 -3.2,0.2 -1.8,-1.2 -5.3,3.8 -1,-5.7 0.4,-6.7 -3.8,-0.3 -0.9,-3.8 -2.6,-1.9 -3,1.4 -2.8,2.8 -3.9,0.3 -1.5,6.9 -2.2,1.1 3.5,5.6 4.1,4.6 2.9,4.2 -1.4,5.6 -1.7,1.1 1.7,3.2 4.2,5.1 1,3.5 0.2,3 2.8,5.8 -2.6,5.9 -2.2,6.6 -1.3,6.1 -0.3,3.9 1.2,3.6 0.7,-3.8 2.9,3.1 3.2,3.5 1.1,3.2 2.4,2.4 0.9,-1.1 4.7,2.8 0.6,3.3 3.7,-0.8 1.7,-2.6 -3.1,-3.3 -3.4,-0.8 -3.3,-3.6 -1.4,-5.5 -2.6,-5.8 -3.7,-0.2 -0.7,-4.6 1.4,-5.6 2.2,-9.3 -0.2,-7 4.9,-0.1 -0.3,5 4.7,-0.1 5.3,2.9 -2.1,-7.7 3,-5.2 7.1,-1.3 5.3,1 z" />
    <path inkscape:connector-curvature="0" id="TJ" data-name="Tajikistan" data-id="TJ" d="m 1344.1,315.7 -2.1,0.2 -1.3,-1.8 0.2,-2.9 -6.4,1.5 -0.5,4 -1.5,3.5 -4.4,-0.3 -0.6,2.8 4.2,1.6 2.4,4.7 -1.3,6.6 1.8,0.8 3.3,-2.1 2.1,1.3 0.9,-3 3.2,0.1 0.6,-0.9 -0.2,-2.6 1.7,-2.3 3.2,1.5 0,2 1.6,0.3 1,5.4 2.6,2.1 1.5,-1.3 2.1,-0.7 2.5,-2.9 3.8,0.5 5.4,0 -1.8,-3.7 -0.6,-2.5 -3.5,-1.4 -1.6,0.6 -3,-5.9 -9.5,0.9 -7.1,-2 -5.4,0.5 -0.6,-3.7 5.9,1.1 1.4,-2 z" />
    <path inkscape:connector-curvature="0" id="TM" data-name="Turkmenistan" data-id="TM" d="m 1325.6,334.2 -0.8,-4 -7.7,-2.7 -6.2,-3.2 -4.2,-3 -7,-4.4 -4.3,-6.4 -2,-1.2 -5.5,0.3 -2.3,-1.3 -1.9,-4.9 -7.8,-3.3 -3.3,3.6 -3.8,2.2 1.6,3.1 -5.8,0.1 -2.5,0.3 -4.9,-4.9 -3.8,-1.7 -5.5,1.3 -1.8,2 2.5,4 -0.5,-4.5 3.7,-1.6 2.4,3.6 4.6,3.7 -4,2 -5.3,-1.5 0.1,5.2 3.5,0.4 -0.4,4.4 4.5,2.1 0.7,6.8 1.8,4.5 4.4,-1.2 3,-3.7 3.5,0.2 2.1,-1.2 3.8,0.6 6.5,3.3 4.3,0.7 7.3,5.7 3.9,0.2 1.6,5.5 5.9,2.4 3.9,-0.8 0.4,-3 4,-0.9 2.5,-2 -0.1,-5.2 4.1,-1.2 0.3,-2.3 2.9,1.7 1.6,0.2 z" />
    <path inkscape:connector-curvature="0" id="TL" data-name="Timor-Leste" data-id="TL" d="m 1676.8,631.9 4.9,-1.8 6,-2.8 2.2,-1.7 -2,-0.8 -1.8,0.8 -4,0.2 -4.9,1.4 -0.8,1.5 0.5,1.3 -0.1,1.9 z" />
    <path inkscape:connector-curvature="0" id="TN" data-name="Tunisia" data-id="TN" d="m 1038,361.4 -2,-1 -1.5,-3 -2.8,-0.1 -1.1,-3.5 3.4,-3.2 0.5,-5.6 -1.9,-1.6 -0.1,-3 2.5,-3.2 -0.4,-1.3 -4.4,2.4 0.1,-3.3 -3.7,-0.7 -5.6,2.6 -1,3.3 1,6.2 -1.1,5.3 -3.2,3.6 0.6,4.8 4.5,3.8 0,1.5 3.4,2.6 2.6,11.3 2.6,-1.4 0.4,-2.7 -0.7,-2.6 3.7,-2.5 1.5,-2 2.6,-1.8 0.1,-4.9 z" />
    <path inkscape:connector-curvature="0" id="TR" data-name="Turkey" data-id="TR" d="m 1166.6,308.9 -9.7,-4.4 -8.5,0.2 -5.7,1.7 -5.6,4 -9.9,-0.8 -1.6,4.8 -7.9,0.2 -5.1,6.1 3.6,3 -2,5 4.2,3.6 3.7,6.4 5.8,-0.1 5.4,3.5 3.6,-0.8 0.9,-2.7 5.7,0.2 4.6,3.5 8,-0.7 3.1,-3.7 4.6,1.5 3.2,-0.6 -1.7,2.4 2.3,3 1.2,-1.4 1.2,-1.5 -0.1,-3.6 1.9,1.3 5.5,-1.8 3,1.2 4.3,0 5.7,-2.5 2.8,0.2 5.9,-1.1 2.1,-1 6.2,0.9 2.1,1.6 2.3,-1.1 0,0 -3.7,-5.2 0.7,-2 -2.9,-7.3 3.3,-1.8 -2.4,-1.9 -4.2,-1.5 0,-3.1 -1.3,-2.2 -5.6,-3 -5.4,0.3 -5.5,3.2 -4.5,-0.6 -5.8,1 -7.8,-2.4 z m -49.6,4 2,-1.9 6.1,-0.4 0.7,-1.5 -4.7,-2 -0.9,-2.4 -4.5,-0.8 -5,2 2.7,1.6 -1.2,3.9 -1.1,0.7 0.1,1.3 1.9,2.9 3.9,-3.4 z" />
    <path inkscape:connector-curvature="0" id="TW" data-name="Taiwan" data-id="TW" d="m 1642.3,427.2 1.2,-10.2 0.1,-3.9 -2.9,-1.9 -3.3,4.8 -1.9,6.3 1.5,4.7 4,5.4 1.3,-5.2 z" />
    <path inkscape:connector-curvature="0" id="TZ" data-name="Tanzania" data-id="TZ" d="m 1149.6,578.6 -2,0.8 2.3,3.6 -0.4,3.7 -1.6,0.8 0,0 0.3,2.5 1.2,1.5 0,2 -1.4,1.4 -2.2,3.3 -2.1,2.3 -0.6,0.1 -0.3,2.7 1.1,0.9 -0.2,2.7 1,2.6 -1.3,2.4 4.5,4.3 0.3,3.9 2.7,6.5 0,0 0.3,0.2 2.2,1.1 3.5,1.1 3.2,1.9 5.4,1.2 1.1,1.7 0,0 0.4,-1.2 2.8,3.4 0.3,6.7 1.8,2.4 0,0.1 2.1,-0.3 6.7,1.8 1.4,-0.8 3.9,-0.1 2.1,-1.9 3.3,0.1 6.2,-2.5 4.6,-3.7 0,0 -2,-1.4 -2.2,-6.3 -1.8,-3.9 0.4,-3.1 -0.3,-1.9 1.7,-3.9 -0.2,-1.6 -3.5,-2.3 -0.3,-3.6 2.8,-7.9 -8,-6.3 -0.4,-3.7 -20.2,-13 0,0 -2.8,2.8 -1.9,2.9 2.2,2.2 -3.2,1.6 -0.7,-0.8 -3.2,0.4 -2.5,1.4 -1.6,-2.4 1.1,-4.5 0.2,-3.8 0,0 0,0 -6.2,-0.1 z" />
    <path inkscape:connector-curvature="0" id="UG" data-name="Uganda" data-id="UG" d="m 1167.6,545.1 -3.4,3 -4,-0.1 -4.5,1.5 -3.5,-1.4 -2.3,1.7 0,0 -0.3,7.5 2.3,0.8 -1.8,2.3 -2.2,1.7 -2.1,3.3 -1.2,3 -0.3,5.1 -1.3,2.4 -0.1,4.8 1.4,0.6 3.3,-1.9 2,-0.8 6.2,0.1 0,0 -0.3,-2.5 2.6,-3.7 3.5,-0.9 2.4,-1.5 2.9,1.2 0.3,0.5 0,-0.3 1.6,-2.6 2.7,-4.2 2.1,-4.7 -2.6,-7.3 -0.7,-3.2 -2.7,-4.4 z" />
    <path inkscape:connector-curvature="0" id="UA" data-name="Ukraine" data-id="UA" d="m 1138.5,241 -4.8,0.5 -1.5,-0.3 -1,1.4 -1.8,-0.2 0,0 -4.1,0.3 -1.2,1.4 0.2,3.1 -2,-0.6 -4.3,0.3 -1.5,-1.5 -1.6,1.1 -2,-0.9 -3.8,-0.1 -5.6,-1.5 -5,-0.5 -3.7,0.2 -2.4,1.6 -2.2,0.3 3.1,5.3 -0.3,1.8 -2.3,0.7 -3.8,5.1 1.6,2.8 -1.1,-0.4 -1.1,1.7 -0.7,2.5 2.9,1.7 0.6,1.6 1.9,-1.3 3.2,0.7 3.2,0 2.4,1.5 1.6,-0.9 3.6,-0.6 1,-1.5 2.1,0 1.1,-0.9 3.2,-0.6 3.9,1.9 2,0.3 2.5,1.6 0,2.1 1.9,1.1 1.1,2.6 2,1.5 -0.2,1 1,0.6 -1.2,0.5 -3,-0.2 -0.6,-0.9 -1,0.5 0.5,1.1 -1.1,2 -0.5,2.1 -1.2,0.7 2.4,1.1 2.2,-1 2.4,1.1 3.3,-4.6 1.3,-3.4 4.5,-0.8 0.7,2.4 8,1.5 1.7,1.4 -4.5,2.1 -0.7,1.2 5.8,1.8 -0.6,2.9 3,1.3 6.3,-3.6 5.3,-1.1 0.6,-2.2 -5.1,0.4 -2.7,-1.5 -1,-3.9 3.9,-2.3 4.6,-0.3 3,-2 3.9,-0.5 -0.4,-2.8 2.2,-1.7 4.7,-0.5 0.3,-2.1 -1.8,-3.4 1.3,-3.2 -0.4,-1.9 -7.6,-2 -2.9,0.1 -3.6,-2.9 -3.5,1 -6.6,-2.2 -0.2,-1.2 -2.2,-2.7 -4,-0.2 -0.7,-1.9 0.9,-1.3 -3.8,-3.4 z" />
    <path inkscape:connector-curvature="0" id="UY" data-name="Uruguay" data-id="UY" d="m 692.5,787 -2.1,-3.7 1.9,-3 -3.8,-4.3 -4.8,-3.5 -6.2,-4.1 -1.9,0.2 -6.2,-4.9 -3.4,0.7 -0.5,5.1 -0.3,6.5 1.1,6.3 -0.9,1.4 0.4,4.2 3.9,3.5 3.6,-0.2 5.4,2.7 2.7,-0.6 4.2,1.2 5.3,-3.5 1.6,-4 z" />
    <path inkscape:connector-curvature="0" id="US" data-name="USA" data-id="US" d="m 116.7,450.7 2,-0.9 2.5,-1.4 0.2,-0.4 -0.9,-2.2 -0.7,-0.8 -0.8,-0.6 -1.9,-1.1 -0.4,-0.1 -0.4,0.6 0,1.3 -1.2,1 -0.4,0.7 0.4,2.3 -0.6,1.8 1.2,0.9 1,-1.1 z m -0.6,-9.9 0.6,-0.7 -1.2,-1 -1.8,-0.6 -0.7,0.5 0,0.4 0.5,0.5 0.6,1.4 2,-0.5 z m -3,-3.4 -2.6,-0.2 -0.6,0.7 2.9,0.2 0.3,-0.7 z m -4.7,-0.9 -1.1,-2.1 -0.3,-0.4 -1.7,0.9 0.1,0.2 0.4,1.5 1.8,0.2 0.4,0.1 0.4,-0.4 z m -8.3,-4.2 0.3,-1.5 -1.3,-0.1 -1,0.6 -0.4,0.5 1.6,1.1 0.8,-0.6 z m 412.1,-173.2 -1.6,0 -1.3,2.4 -10.1,0 -16.8,0 -16.7,0 -14.8,0 -14.7,0 -14.5,0 -15,0 -4.8,0 -14.6,0 -13.9,0 -1.6,5.1 -2.4,5.1 -2.3,1.6 1.1,-5.9 -5.8,-2.1 -1.4,1.2 -0.4,2.9 -1.8,5.4 -4.2,8.3 -4,5.6 -4,5.6 -5.4,5.8 -1.1,4.7 -2.8,5.3 -3.9,5.2 1,3.4 -1.9,5.2 1.5,5.4 1.3,2.2 -0.8,1.5 0.4,9 2.5,6.5 -0.8,3.5 1,1 4.6,0.7 1.3,1.7 2.8,0.3 -0.1,1.9 2.2,0.7 2.1,3.7 -0.3,3.2 6.3,-0.5 7,-0.7 -1,1.3 7.1,3.1 10.7,4.4 10.7,0 4.3,0 0.8,-2.6 9.3,0 1.3,2.2 2.1,2 2.4,2.8 0.8,3.3 0.4,3.5 2.2,1.9 4,1.9 4.8,-5 4.4,-0.1 3.1,2.5 1.6,4.4 1,3.7 2.4,3.6 0.2,4.5 0.8,3 3.9,2 3.6,1.4 2.1,-0.2 -0.6,-2.2 0.4,-3.1 1,-4.4 1.9,-2.8 3.7,-3.1 6,-2.7 6.1,-4.7 4.9,-1.5 3.5,-0.4 3.5,1.4 4.9,-0.8 3.3,3.4 3.8,0.2 2.4,-1.2 1.7,0.9 1.3,-0.8 -0.9,-1.3 0.7,-2.5 -0.5,-1.7 2.4,-1 4.2,-0.4 4.7,0.7 6.2,-0.8 3,1.5 2,3 0.9,0.3 6.1,-2.9 1.9,1 3,5.3 0.8,3.5 -2,4.2 0.4,2.5 1.6,4.9 2,5.5 1.8,1.4 0.4,2.8 2.6,0.8 1.7,-0.8 2,-3.9 0.7,-2.5 0.9,-4.3 -1.2,-7.4 0.5,-2.7 -1.5,-4.5 -0.7,-5.4 0.1,-4.4 1.8,-4.5 3.5,-3.8 3.7,-3 6.9,-4.1 1.3,-2.2 3.3,-2.3 2.8,-0.4 4.4,-3.8 6,-1.9 4.6,-4.8 0.9,-6.5 0.1,-2.2 -1.4,-0.4 1.5,-6.2 -3,-2.1 3.2,1 0,-4.1 1.9,-2.7 -1,5.3 2,2.5 -2.9,4.4 0.4,0.2 4.4,-5.1 2.4,-2.5 0.6,-2.5 -0.9,-1.1 -0.1,-3.5 1.2,1.6 1.1,0.4 -0.1,1.6 5.2,-4.9 2.5,-4.5 -1.4,-0.3 2.1,-1.8 -0.4,0.8 3.3,0 7.8,-1.9 -1.1,-1.2 -7.9,1.2 4.8,-1.8 3.1,-0.3 2.4,-0.3 4.1,-1.1 2.4,0.1 3.8,-1 1,-1.7 -1.1,-1.4 -0.2,2.2 -2.1,-0.1 -0.6,-3.3 1.1,-3.3 1.4,-1.3 3.9,-3.7 5.9,-1.8 6,-2.1 6.3,-3 -0.2,-2 -2.1,-3.5 2.8,-8.5 -1.5,-1.8 -3.7,1.1 -1.1,-1.7 -5.5,4.7 -3.2,4.9 -2.7,2.8 -2.5,0.9 -1.7,0.3 -1,1.6 -9.3,0 -7.7,0 -2.7,1.2 -6.7,4.2 0.2,0.9 -0.6,2.4 -4.6,2 -3.9,-0.5 -4,-0.2 -2.6,0.7 -0.3,1.8 0,0 -0.1,0.6 -5.8,3.7 -4.5,1.8 -2.9,0.8 -3.7,1.7 -4,0.9 -2.5,-0.3 -2.7,-1.3 2.7,-2.4 0,0 2,-2.2 3.7,-3.4 0,0 0,0 0.7,-2.5 0.5,-3.5 -1.6,-0.7 -4.3,2.8 -0.9,-0.1 0.3,-1.5 3.8,-2.5 1.6,-2.8 0.7,-2.8 -2.7,-2.4 -3.7,-1.3 -1.7,2.4 -1.4,0.6 -2.2,3.1 0.4,-2.1 -2.6,1.5 -2.1,2 -2.6,3.1 -1.3,2.6 0.1,3.8 -1.8,4 -3.3,3 -1.4,0.9 -1.6,0.7 -1.8,0 -0.3,-0.4 -0.1,-3.3 0.7,-1.6 0.7,-1.5 0.6,-3 2.5,-3.5 2.9,-4.3 4.6,-4.7 -0.7,0 -5.4,4 -0.4,-0.7 2.9,-2.3 4.7,-4 3.7,-0.5 4.4,-1.3 3.7,0.7 0.1,0 4.7,-0.5 -1.5,-2.5 0,0 -1.2,-0.2 0,0 0,0 -1.4,-0.3 -0.4,-1.7 -5.1,0.5 -5,1.4 -2.5,-2.3 -2.5,-0.8 3.1,-3.3 -5.3,2 -4.9,2.1 -4.6,1.5 -2.1,-2.1 -5.5,1.3 0.4,-0.9 4.6,-2.6 4.7,-2.5 5.9,-2.1 0,0 0,0 -5.3,-1.6 -4.4,0.8 -3.8,-1.9 -4.6,-1 -3.2,-0.4 -1,-1 0.8,-3.4 z m -240.6,-46.9 6.9,-2.8 0,-1.8 -2.6,-0.4 -3.4,0.9 -6.4,2.1 -2.2,2.7 0.7,1.6 7,-2.3 z m -38.7,-16.4 2.3,-2.3 -2.9,-0.5 -5.7,1 0.8,1.6 1.6,1.1 3.9,-0.9 z m 1.2,-22.3 -3.1,2.2 0.4,0.5 4.2,-0.4 0.3,1.1 1.7,1.2 4.9,-1.2 1.2,-0.6 -3.3,-0.8 -1.6,-1.5 -3.4,0.6 -1.3,-1.1 z m 124.9,-40.2 -4.4,-1.1 -10.2,2.8 -3.2,-0.3 -11,2.3 -4.8,0.6 -7.8,2.5 -4.8,2.6 -8.6,2.5 -7.6,0.1 -6.3,2.9 3.2,1.7 0.7,2.3 -0.8,2.7 2.3,2.1 -1.2,3.5 -9.2,0.2 4.3,-2.8 -3.4,0 -13.1,2.7 -9.1,2.3 1,3.3 -1.2,2.2 4.5,1.4 6.9,-0.7 1.8,1.3 2.9,-1.3 6.1,-1.2 2.7,0 -5.9,2.1 1.1,1 -2.5,2.6 -5.5,1.8 -2.5,-0.5 -7,2.7 -1.8,-0.9 -4.1,0.4 -5.3,3 -7.6,3.1 -5.8,3.4 0.3,2.4 -4,3.3 1.4,1.4 0.5,2.7 7.2,-1.1 0.4,2.1 -3.3,2.1 -3.6,3.5 2.8,0 7.2,-2.3 -1.6,2.9 3.6,-2.1 -0.4,3 4.8,-2.2 0.4,1.1 7.2,-1.8 -6.2,3.4 -5.7,4.5 -5.7,2.1 -2.3,1.2 -10.3,3.6 -4.9,2.4 -6.5,0.7 -8.5,3.3 -6.6,1.8 -8.1,2.8 -0.4,1 10,-1.7 6,-2 6.9,-2 6.1,-1.7 2.8,0.5 8.1,-2.6 4.5,-2.8 10.5,-3.1 3.9,-2.6 6.6,-1.8 7.6,-2.5 8.9,-4.2 -0.2,-2.9 11.1,-4.1 7.4,-3.9 9.2,-3.2 -0.4,1.4 -6.7,1.8 -8.3,5.7 -3.2,3.5 6.4,-1.3 6.1,-1.9 6.5,-1.3 2.9,-0.3 3.5,-4.1 6.3,-1.2 2.6,2.5 6,2.7 6.7,-0.5 5.7,2 3.2,1.1 3.3,6.1 3.7,1.7 7.1,0.2 4.1,0.4 -2.7,5.5 1.6,4.9 -3.3,5.2 2.5,1.9 0.6,2.2 0,0 5.1,-2.9 3.1,-3.7 -4.6,-3.8 1.5,-6.8 1.1,-4.2 -1.7,-2.7 -0.7,-2.4 0.5,-3 -6.4,1.9 -7.6,3.3 -0.2,-3.9 -0.6,-2.6 -2.7,-1.6 -4.2,-0.1 35.4,-32.4 24.3,-20.2 0,0 0,0 -3.5,-0.7 -4.1,-1.6 -6.5,0.8 -2.2,-0.7 -7.1,-0.5 -6.2,-1.6 -4.8,0.5 -4.9,-0.9 2,-1.2 -6.3,-0.3 -3.3,1 0.5,-2.4 z" />
    <path inkscape:connector-curvature="0" id="UZ" data-name="Uzbekistan" data-id="UZ" d="m 1339.8,303.1 -2.5,1.2 -5.4,4.3 -0.9,4.5 -1.9,0 -2.3,-3 -6.6,-0.2 -2.6,-5 -2.5,-0.1 -1.5,-6.2 -7.5,-4.5 -8.6,0.5 -5.7,0.9 -6.5,-5.5 -4.8,-2.3 -9.1,-4.5 -1.1,-0.5 -11.9,3.6 6.2,22.8 5.8,-0.1 -1.6,-3.1 3.8,-2.2 3.3,-3.6 7.8,3.3 1.9,4.9 2.3,1.3 5.5,-0.3 2,1.2 4.3,6.4 7,4.4 4.2,3 6.2,3.2 7.7,2.7 0.8,4 2.9,0 4.3,1.4 1.3,-6.6 -2.4,-4.7 -4.2,-1.6 0.6,-2.8 4.4,0.3 1.5,-3.5 0.5,-4 6.4,-1.5 -0.2,2.9 1.3,1.8 2.1,-0.2 4.1,0.6 5.2,-4.5 -7.1,-3.3 -3.2,1.6 -4.6,-2.3 3.1,-4.1 -1.8,-0.6 z" />
    <path inkscape:connector-curvature="0" id="VE" data-name="Venezuela" data-id="VE" d="m 642,518.9 -2.2,-1.5 -2.9,0.2 -0.7,-5.1 -4.1,-3.2 -4.4,-0.4 -1.8,-3 4.8,-1.9 -6.7,0.1 -6.9,0.4 -0.2,1.6 -3.2,1.9 -4.2,-0.7 -3.1,-2.9 -6,0.7 -5,-0.1 -0.1,-2.1 -3.5,-3.5 -3.9,-0.1 -1.7,-4.5 -2.1,2 0.6,3 -7.1,2.6 0,4.8 1.6,2.2 -1.5,4.6 -2.4,0.4 -1.9,-5 2.7,-3.7 0.3,-3.3 -1.7,-2.9 3.3,-0.8 0.3,-1.5 -3.7,1.1 -1.6,3.2 -2.2,1.8 -1.8,2.4 -0.9,4.5 -1.8,3.7 2.9,0.5 0.6,2.9 1.1,1.4 0.4,2.5 -0.8,2.4 0.2,1.3 1.3,0.6 1.3,2.2 7.2,-0.6 3.2,0.8 3.8,5.5 2.3,-0.7 4,0.3 3.2,-0.7 2,1.1 -1.2,3.4 -1.3,2.1 -0.5,4.6 1,4.2 1.5,1.9 0.2,1.5 -2.9,3.1 2,1.4 1.4,2.2 1.7,6.4 3,3.4 4.4,-0.5 1.1,-1.9 4.2,-1.5 2.3,-1 0.7,-2.7 4.1,-1.8 -0.3,-1.4 -4.8,-0.5 -0.7,-4 0.3,-4.3 -2.4,-1.6 1,-0.6 4.2,0.8 4.4,1.6 1.7,-1.5 4,-1 6.4,-2.4 2.1,-2.4 -0.7,-1.8 -3.7,-4.8 1.6,-1.8 0,-2.9 3.4,-1.1 1.5,-1.2 -1.9,-2.3 0.6,-2.3 4.6,-3.8 z" />
    <path inkscape:connector-curvature="0" id="VN" data-name="Vietnam" data-id="VN" d="m 1571.6,435 -5.9,-1.6 -3,-2.6 0.2,-3.7 -5.2,-1.1 -3,-2.4 -4.1,3.4 -5.3,0.7 -4.3,0 -2.7,1.5 4,5.1 3.4,5.7 6.8,0.1 3,5.5 -3.3,1.7 -1.3,2.3 7.3,3.8 5.7,7.5 4.3,5.6 4.8,4.4 2,4.5 -0.2,6.4 1.8,4.2 0.1,7.7 -8.9,4.9 2.8,3.8 -5.8,0.5 -4.7,2.5 4.5,3.7 -1.3,4.3 2.3,4 6.6,-5.9 4.1,-5.3 6.1,-4.1 4.3,-4.2 -0.4,-11.2 -4,-11.7 -4.1,-5.1 -5.6,-4 -6.4,-8.3 -5.3,-6.7 0.5,-4.4 3.7,-6 6.5,-5.5 z" />
    <path inkscape:connector-curvature="0" id="VU" data-name="Vanuatu" data-id="VU" d="m 1908.6,676.9 -2.7,-3.6 -0.6,1.7 1.3,2.8 2,-0.9 z m -2,-9.7 -2.3,-2 -0.9,4.9 0.5,1.8 1.2,-0.4 1.3,0.8 0.2,-5.1 z" />
    <path inkscape:connector-curvature="0" id="YE" data-name="Yemen" data-id="YE" d="m 1271.5,466.2 -2.1,-4.4 -5.2,-10.5 -15.7,2.4 -5,2.9 -3.5,6.7 -2.5,1 -1.6,-2.1 -2.1,0.3 -5.4,-0.6 -1,-0.7 -6.4,0.2 -1.5,0.6 -2.4,-1.7 -1.2,3.1 0.7,2.7 -2.3,2.1 0.4,2.7 -0.6,1.3 0.7,2.9 -1.1,0.3 1.7,2.6 1.3,4.7 1,1.9 0,3.4 1.6,3.8 3.9,0.3 1.8,-0.9 2.7,0.2 0.8,-1.7 1.5,-0.4 1.1,-1.7 1.4,-0.4 4.7,-0.3 3.5,-1.2 3.1,-2.7 1.7,0.4 2.4,-0.3 4.7,-4.5 8.8,-3 5.3,-2.7 0,-2.1 0.9,-2.9 3.9,-1.7 z" />
    <path inkscape:connector-curvature="0" id="ZA" data-name="South Africa" data-id="ZA" d="m 1148.2,713.7 -2.9,-0.6 -1.9,0.8 -2.6,-1.1 -2.2,-0.1 -8,4.7 -5.2,4.7 -2,4.3 -1.7,2.4 -3,0.5 -1.2,3 -0.6,2 -3.6,1.5 -4.4,-0.3 -2.5,-1.8 -2.3,-0.8 -2.7,1.5 -1.5,3.1 -2.7,1.9 -2.8,2.8 -4,0.7 -1.1,-2.3 0.7,-3.8 -3,-6.1 -1.4,-1 -1.1,23.6 -5,3.2 -2.9,0.5 -3.3,-1.2 -2.4,-0.5 -0.8,-2.7 -2.1,-1.8 -2.7,3.2 3.5,8.2 0,0.1 2.5,5.3 3.2,6 -0.2,4.8 -1.7,1.2 1.4,4.2 -0.2,3.8 0.6,1.7 0.3,-0.9 2.1,2.9 1.8,0.1 2.1,2.3 2.4,-0.2 3.5,-2.4 4.6,-1 5.6,-2.5 2.2,0.3 3.3,-0.8 5.7,1.2 2.7,-1.2 3.2,1 0.8,-1.8 2.7,-0.3 5.8,-2.5 4.3,-2.9 4.1,-3.8 6.7,-6.5 3.4,-4.6 1.8,-3.2 2.5,-3.3 1.2,-0.9 3.9,-3.2 1.6,-2.9 1.1,-5.2 1.7,-4.7 -4.1,0 -1.3,2.8 -3.3,0.7 -3,-3.5 0.1,-2.2 1.6,-2.4 0.7,-1.8 1.6,-0.5 2.7,1.2 -0.4,-2.3 1.4,-7.1 -1.1,-4.5 -2.2,-9 z m -20.1,52.8 -2,0.6 -3.7,-4.9 3.2,-4 3.1,-2.5 2.6,-1.3 2.3,2 1.7,1.9 -1.9,3.1 -1.1,2.1 -3.1,1 -1.1,2 z" />
    <path inkscape:connector-curvature="0" id="ZM" data-name="Zambia" data-id="ZM" d="m 1149.2,626.7 -1.9,-0.5 0.4,-1.3 -1,-0.3 -7.5,1.1 -1.6,0.7 -1.6,4.1 1.2,2.8 -1.2,7.5 -0.8,6.4 1.4,1.1 3.9,2.5 1.5,-1.2 0.3,6.9 -4.3,0 -2.1,-3.5 -2,-2.8 -4.3,-0.8 -1.2,-3.4 -3.4,2 -4.5,-0.9 -1.8,-2.8 -3.5,-0.6 -2.6,0.1 -0.3,-2 -1.9,-0.1 0.5,2 -0.7,3 0.9,3 -0.9,2.4 0.5,2.2 -11.6,-0.1 -0.8,20.3 3.6,5.2 3.5,4 4.6,-1.5 3.6,0.4 2.1,1.4 0,0.5 1,0.5 6.2,0.7 1.7,0.7 1.9,-0.1 3.2,-4.1 5.1,-5.3 2,-0.5 0.7,-2.2 3.3,-2.5 4.2,-0.9 -0.3,-4.5 17.1,-5.2 -2.9,-1.7 1.9,-5.9 1.8,-2.2 -0.9,-5.3 1.2,-5.1 1,-1.8 -1.2,-5.4 -2.6,-2.8 -3.2,-1.9 -3.5,-1.1 -2.2,-1.1 -0.3,-0.2 0,0 0.5,1.1 -1,0.4 -1.2,-1.4 z" />
    <path inkscape:connector-curvature="0" id="ZW" data-name="Zimbabwe" data-id="ZW" d="m 1148.2,713.7 6.2,-7.2 1.6,-4.6 0.9,-0.6 0.8,-3.7 -0.8,-1.9 0.5,-4.7 1.3,-4.4 0.3,-8.1 -2.8,-2 -2.6,-0.5 -1.1,-1.6 -2.6,-1.3 -4.6,0.1 -0.3,-2.4 -4.2,0.9 -3.3,2.5 -0.7,2.2 -2,0.5 -5.1,5.3 -3.2,4.1 -1.9,0.1 -1.7,-0.7 -6.2,-0.7 1.9,5.1 1.1,1.1 1.6,3.7 6,7 2.3,0.7 -0.1,2.2 1.5,4.1 4.2,0.9 3.4,2.9 2.2,0.1 2.6,1.1 1.9,-0.8 2.9,0.6 z" />
    <path inkscape:connector-curvature="0" id="SO" data-name="Somalia" data-id="SO" d="m 1223.4,505.7 -2.6,-2.7 -1.2,-2.6 -1.8,-1.2 -2,3.4 -1.1,2.3 2.2,3.5 2.1,3.1 2.2,2.2 18.5,7.6 4.8,-0.1 -15.4,19.1 -7.4,0.3 -4.9,4.5 -3.6,0.1 -1.5,2 -4.8,7.2 0.2,23.2 3.3,5.3 1.3,-1.5 1.3,-3.4 6.1,-7.7 5.3,-4.8 8.3,-6.4 5.6,-5.1 6.4,-8.7 4.7,-7.1 4.6,-9.3 3.2,-8.2 2.5,-7.1 1.3,-6.8 1.1,-2.3 -0.2,-3.4 0.4,-3.7 -0.2,-1.7 -2.1,0 -2.6,2.2 -2.9,0.6 -2.5,0.9 -1.8,0.2 0,0 -3.2,0.2 -1.9,1.1 -2.8,0.5 -4.8,1.9 -6.1,0.8 -5.2,1.6 -2.8,0 z" />
    <path inkscape:connector-curvature="0" id="GF" data-name="French Guiana" data-id="GF" d="m 681.4,556.2 1.8,-4.7 3.5,-5.8 -0.9,-2.6 -5.8,-5.4 -4.1,-1.5 -1.9,-0.7 -3.1,5.5 0.4,4.4 2.1,3.7 -1,2.7 -0.6,2.9 -1.4,2.8 2.4,1.3 1.8,-1.8 1.2,0.3 0.8,1.8 2.7,-0.5 2.1,-2.4 z" />
    <path inkscape:connector-curvature="0" id="FR" data-name="France" data-id="FR" d="m 1025.7,303.8 -1.1,-5.2 -3.2,2.3 -1,2.3 1.4,4.2 2.4,1.2 1.5,-4.8 z m -31.5,-50.9 -2.4,-2.4 -2.2,-0.1 -0.7,-2.2 -4.3,1.2 -1.4,5.1 -11.3,4.8 -4.6,-2.6 1.4,7 -8.2,-1.6 -6.4,1.3 0.4,4.6 7.5,2.4 3.6,3.1 5.1,6.5 -1,12.3 -2.7,3.7 2,2.4 9.4,2.8 1.9,-1.3 5.7,2.8 6,-0.8 0.5,-3.7 7.4,-2 10,1.6 4.5,-3.4 0.5,-2.7 -2.7,-0.8 -1.5,-4.8 1.7,-1.8 -1.6,-2.4 0.2,-1.7 -1.8,-2.7 -2.4,0.9 0,-2.8 3.5,-3.5 -0.2,-1.6 2.3,0.6 1.3,-1 0.5,-4.5 2.3,-4.2 -7.1,-1.2 -2.4,-1.6 -1.4,0.1 -1.1,-0.5 -4.4,-2.8 -2.5,0.4 -3.4,-2.9 z" />
    <path inkscape:connector-curvature="0" id="ES" data-name="Spain" data-id="ES" d="m 985,325.7 0,-0.2 -0.5,0 -0.3,-0.4 -0.1,0.2 -0.1,0.2 0,0.2 0.5,0 0.4,0.1 0.1,-0.1 z m -0.8,-1.6 0.3,0 0.6,-0.7 0,-0.3 -0.3,-0.2 -1.1,0.2 -0.2,0.3 0,0.3 -0.3,0.1 -0.1,0.4 0.1,0.2 0.8,0.1 0.2,-0.4 z M 967,296 l -8.2,-0.2 -4.2,0.3 -5.4,-1 -6.8,0 -6.2,-1.1 -7.4,4.5 2,2.6 -0.4,4.4 1.9,-1.6 2.1,-0.9 1.2,3.1 3,0 0.9,-0.8 3,0.2 1.3,3.1 -2.4,1.7 -0.2,4.9 -0.9,0.9 -0.3,3 -2.2,0.5 2,3.8 -1.6,4.3 1.8,1.9 -0.8,1.7 -2,2.5 0.4,2.1 4.8,1 1.4,3.7 2,2.2 2.5,0.6 2.1,-2.5 3.3,-2.3 5,0.1 6.7,0 3.8,-5 3.9,-1.3 1.2,-4.2 3,-2.9 -2,-3.7 2,-5.1 3.1,-3.5 0.5,-2.1 6.6,-1.3 4.8,-4.2 -0.3,-3.5 -6,0.8 -5.7,-2.8 -1.9,1.3 -9.4,-2.8 -2,-2.4 z m 26,22.6 0.1,-0.3 0.1,-0.2 0.1,-0.1 -0.2,-0.2 0,-0.1 0.2,-0.2 -0.2,-0.1 -1.3,0.4 -0.7,0.4 -2.1,1.5 0,0.3 0.1,0.2 0.4,0 0.2,0.4 0.4,-0.4 0.3,-0.1 0.3,0.1 0.3,0.2 0.1,0.6 0.1,0.2 0.6,0.1 0.9,0.4 0.4,-0.2 0.5,-0.3 0.2,-0.6 0.3,-0.5 0.3,-0.5 0.3,-0.4 -0.1,-0.4 -0.3,-0.1 -0.3,-0.1 -0.5,0.2 -0.5,-0.2 z m 6,-0.3 0.1,-0.4 0,-0.1 -0.5,-0.7 -0.9,-0.3 -1,0.1 -0.1,0.1 0,0.4 0.1,0.1 0.6,0.1 1.6,0.7 0.1,0 z" />
    <path inkscape:connector-curvature="0" id="AW" data-name="Aruba" data-id="AW" d="m 586.6,492.9 -0.1,-0.1 -0.3,-0.6 -0.3,-0.3 -0.1,0.1 -0.1,0.3 0.3,0.3 0.3,0.4 0.3,0.1 0,-0.2 z" />
    <path inkscape:connector-curvature="0" id="AI" data-name="Anguilla" data-id="AI" d="m 627.9,456.2 0.1,-0.2 -0.2,-0.1 -0.8,0.5 0,0.1 0.9,-0.3 z" />
    <path inkscape:connector-curvature="0" id="AD" data-name="Andorra" data-id="AD" d="m 985.4,301.7 0.1,-0.2 0.1,-0.2 0,-0.1 -0.2,-0.1 -0.7,-0.2 -0.3,-0.1 -0.2,0.1 -0.2,0.2 -0.1,0.3 0.1,0.1 0,0.2 0,0.2 0.1,0.2 0.2,0 0.2,0 0.3,-0.1 0.5,-0.3 0.1,0 z" />
    <path inkscape:connector-curvature="0" id="AG" data-name="Antigua and Barb." data-id="AG" d="m 634.3,463.8 0.2,-0.1 0,-0.1 0,-0.2 -0.1,-0.1 -0.1,-0.2 -0.4,-0.2 -0.5,0.5 0,0.2 0.1,0.3 0.6,0.1 0.2,-0.2 z m 0.2,-3.5 0,-0.5 -0.1,-0.2 -0.3,0 -0.1,-0.1 -0.1,0 -0.1,0.1 0.1,0.6 0.5,0.3 0.1,-0.2 z" />
    <path inkscape:connector-curvature="0" id="BS" data-name="Bahamas" data-id="BS" d="m 574.4,437.3 0.2,-0.6 -0.3,-0.1 -0.5,0.7 -0.6,0.3 -0.3,0 -0.7,-0.3 -0.5,0 -0.4,0.5 -0.6,0.1 0.1,0.1 0,0.2 -0.2,0.3 0,0.2 0.1,0.3 1.5,-0.1 1.3,-0.2 0.7,-0.9 0.2,-0.5 z m 0.8,-2 -0.4,-0.3 -0.4,0.3 0.1,0.3 0.7,-0.3 z m 0,-5.8 -0.4,-0.2 -0.3,0.5 0.3,0.1 0.7,-0.1 0.5,0.1 0.5,0.4 0.3,-0.2 -0.1,-0.1 -0.4,-0.3 -0.6,-0.1 -0.2,0 -0.3,-0.1 z m -6.6,1.3 0.7,-0.6 0.7,-0.3 0.9,-1.1 -0.1,-0.9 0.2,-0.4 -0.6,0.1 -0.1,0.3 -0.1,0.3 0.3,0.4 0,0.2 -0.2,0.4 -0.3,0.1 -0.1,0.2 -0.3,0.1 -0.4,0.5 -0.8,0.6 -0.2,0.3 0.4,-0.2 z m 1.2,-3.2 -0.6,-0.2 -0.2,-0.4 -0.4,-0.1 -0.1,0.2 0,0.2 0.1,0.4 0.2,-0.1 0.8,0.4 0.4,-0.3 -0.2,-0.1 z m -4.1,-1.1 0,-0.7 -0.4,-0.5 -0.6,-0.4 -0.1,-1.2 -0.3,-0.7 -0.2,-0.6 -0.4,-0.8 0,0.5 0.1,0.1 0.1,0.6 0.4,0.9 0.1,0.4 -0.1,0.4 -0.4,0.1 -0.1,0.2 0.5,0.3 0.8,0.3 0.5,1.3 0.1,-0.2 z m -4.1,-3.5 -0.5,-0.3 -0.2,-0.3 -0.7,-0.7 -0.3,-0.1 -0.2,0.4 0.4,0.1 0.9,0.7 0.4,0.2 0.2,0 z m 7.3,-4 -0.1,-0.3 -0.1,0 -0.3,0.1 -0.3,0.9 0.3,0 0.5,-0.7 z m -17.6,-1.1 -0.2,-0.3 -0.3,0.2 -0.5,0 -0.2,0.1 -0.4,0 -0.3,0.2 0.4,0.8 0.3,0.3 0.1,1 0.2,0.1 -0.1,0.7 1.1,0.1 0.4,-0.8 0,-0.3 0,-0.1 0,-0.2 0,-0.2 0,-0.9 -0.3,-0.5 -0.4,0.6 -0.4,-0.3 0.6,-0.4 0,-0.1 z m 12.9,0.3 -1,-1.4 0,-0.2 -0.5,-1.5 -0.3,-0.1 -0.1,0.1 -0.1,0.2 0.4,0.4 0,0.4 0.3,0.2 0.4,1.1 0.4,0.4 -0.1,0.3 -0.4,0.3 -0.1,0.2 0.1,0 0.6,-0.1 0.4,0 0,-0.3 z m -10.5,-5.2 0.5,-0.2 0,0 -0.3,-0.2 -0.7,0 -0.4,0.1 -0.2,0.2 0.1,0.1 0.4,0.1 0.6,-0.1 z m -2.4,2 -0.5,-0.6 -0.3,-0.9 -0.2,-0.4 0.1,-0.5 -0.3,-0.4 -0.6,-0.4 -0.3,0.1 0.1,1.1 -0.2,0.6 -0.8,1.1 0.1,0.4 0,0 0.1,0.2 -0.5,0.4 0,-0.3 -0.6,0.1 0.3,0.5 0.6,0.4 0.3,0.1 0.3,-0.2 0,0.5 0.3,0.4 0.1,0.4 0.3,-0.3 0.6,-0.2 0.2,-0.2 0.7,-0.4 0,-0.2 0.1,-0.6 0.1,-0.7 z m 6.7,-5 -0.3,-0.5 -0.1,0.1 -0.1,0.4 -0.3,0.4 0.5,-0.1 0.4,0.1 0.6,0.5 0.7,0.2 0.3,0.6 0.6,0.6 0,0.6 -0.4,0.6 -0.1,0.7 -0.6,0.1 0.1,0.1 0.3,0.3 0.1,0.4 0.2,0.2 0,-0.7 0.3,-0.8 0.4,-1.3 -0.1,-0.3 -0.3,-0.3 -0.7,-0.9 -0.7,-0.3 -0.8,-0.7 z m -8.8,-7.9 -0.5,-0.4 -0.2,0.4 0,0.1 -0.1,0.3 -0.5,0.4 -0.5,0.1 -0.7,-0.6 -0.2,-0.1 0.8,1.1 0.3,0.1 0.4,0 0.9,-0.3 1.6,-0.5 1.7,-0.2 0.1,-0.2 -0.1,-0.3 -0.8,0.2 -1,-0.1 -0.2,0.2 -0.4,0 -0.6,-0.2 z m 6.1,5.2 0.2,-0.3 0.4,-1.8 0.8,-0.6 0.1,-1.2 -0.5,-0.5 -0.4,-0.2 -0.1,-0.2 0.1,-0.2 -0.2,-0.1 -0.3,-0.2 -0.4,-0.6 -0.4,-0.4 -0.7,-0.1 -0.6,-0.1 -0.4,-0.1 -0.5,0.3 0.8,0 1.5,0.3 0.7,1.5 0.5,0.4 0.1,0.4 -0.2,0.4 0,0.4 -0.3,0.5 -0.1,0.8 -0.3,0.4 -0.7,0.5 0.4,0.2 0.3,0.6 0.2,-0.1 z" />
    <path inkscape:connector-curvature="0" id="BM" data-name="Bermuda" data-id="BM" d="m 630.2,366.8 0.4,-0.6 -0.1,0 -0.5,0.5 -0.6,0.2 0.1,0.1 0.1,0 0.6,-0.2 z" />
    <path inkscape:connector-curvature="0" id="BB" data-name="Barbados" data-id="BB" d="m 644.9,488.9 0.4,-0.4 -0.3,-0.3 -0.6,-0.8 -0.3,0.1 0,1 0.1,0.3 0.5,0.3 0.2,-0.2 z" />
    <path inkscape:connector-curvature="0" id="KM" data-name="Comoros" data-id="KM" d="m 1221.1,650.5 -0.4,-0.4 -0.4,0 0,0.2 0.1,0.4 1.1,0.2 -0.4,-0.4 z m 3.9,-1.5 -0.1,0 -0.2,0.1 -0.1,0.2 -0.1,0.3 -0.3,0 -0.2,0 -0.4,0 0.8,0.5 0.5,0.5 0.2,0.2 0.1,-0.2 0.1,-0.7 -0.3,-0.9 z m -5.6,-1.1 0.2,-0.3 -0.2,-0.7 -0.4,-0.8 0.1,-1.4 -0.2,-0.2 -0.3,0 -0.1,0.1 -0.1,0.3 -0.3,2 0.4,0.6 0.3,0.1 0.5,0.4 0.1,-0.1 z" />
    <path inkscape:connector-curvature="0" id="CV" data-name="Cape Verde" data-id="CV" d="m 841.4,477.6 0.1,-0.4 -0.2,-0.6 -0.3,-0.1 -0.6,0.4 -0.1,0.3 0.1,0.3 0.3,0.3 0.3,0.1 0.4,-0.3 z m 6.3,-1.7 0.4,-0.2 0,-0.7 -0.1,-0.3 -0.4,0 -0.2,0.4 0,0.1 0,0.4 0.2,0.3 0.1,0 z m -1.4,0.8 -0.5,-0.9 -0.3,-0.1 -0.6,-0.7 0,-0.3 -0.3,-0.1 0,0.2 0,0.4 -0.2,0.5 0,0.5 0.4,0.8 0.4,0.2 0.7,0.1 0.4,-0.6 z m 3.1,-7.8 0,0.5 -0.3,0.7 0.5,0.3 0.3,0.1 0.6,-0.4 0.2,-0.5 -0.1,-0.3 -0.3,-0.3 -0.3,-0.1 -0.1,0.1 -0.5,-0.1 z m -6.4,-2.5 -1,-0.1 -0.6,-0.2 -0.1,0 0,0.3 0.4,0.8 0.2,-0.5 0.2,-0.1 0.8,0.2 0.4,-0.1 -0.1,-0.1 -0.2,-0.2 z m 6.7,-0.2 -0.1,-0.5 0,-0.7 -0.2,0 -0.3,0.2 0.1,0.7 0.1,0.1 0.2,0.5 0.2,-0.3 z m -11.1,-1 0,-0.2 -0.3,-0.5 -0.3,0.1 -0.4,0.2 -0.1,0.3 0.4,0.2 0.2,0 0.5,-0.1 z m -1.5,-0.9 0.8,-0.6 0.2,-0.3 -0.2,-0.5 -0.5,-0.1 -1.2,0.6 -0.1,0.2 0.1,0.3 0.1,0.5 0.2,0.1 0.6,-0.2 z" />
    <path inkscape:connector-curvature="0" id="KY" data-name="Cayman Is." data-id="KY" d="m 527,449.1 -0.1,-0.3 -0.1,0.1 0,0.6 0.5,0 0.2,0 0.3,-0.2 0.6,0 -0.1,-0.2 -0.8,-0.1 -0.1,0.1 -0.2,0.1 -0.2,-0.1 z m 8,-2.3 0,0 -0.1,-0.1 -0.1,0 -0.3,0.1 -0.1,0 -0.1,0 -0.1,0.1 -0.1,0.1 0.2,0 0.4,-0.2 0.2,0 0.1,0 z m 0.8,-0.1 0.5,-0.2 0,0 -0.1,-0.1 -0.1,0 -0.1,0.1 -0.1,0 -0.5,0.3 0.2,0 0.2,-0.1 z" />
    <path inkscape:connector-curvature="0" id="DM" data-name="Dominica" data-id="DM" d="m 635.8,475.1 0.3,-0.7 -0.1,-1 -0.2,-0.4 -0.8,-0.3 0,0.2 -0.1,0.5 0.3,0.8 0.1,1.1 0.5,-0.2 z" />
    <path inkscape:connector-curvature="0" id="FK" data-name="Falkland Is." data-id="FK" d="m 690.3,902.7 -0.1,-0.3 -0.4,-0.2 -0.2,-0.1 0.1,0.2 0.1,0.3 0.1,0.2 0.2,0.1 0.2,-0.2 z m 5.5,-1.3 -0.1,-0.1 -0.2,0 -0.1,0.2 0.2,0.3 0.4,0.1 -0.2,-0.5 z m -12.9,-1.4 -0.1,0.2 -0.4,0.1 0.2,0.3 0.6,0.4 0.4,0 0.1,-0.3 -0.1,-0.6 -0.3,0 -0.4,-0.1 z m 2.8,-2 -0.9,-0.3 -0.4,-0.3 -0.3,0 0.4,0.4 0.1,0.2 0.1,0.2 0.6,0.3 0.6,0.3 0.4,0.3 -0.1,0.1 -0.8,0.3 -0.3,0 -0.2,0.1 0.4,0.2 0.6,-0.1 0.2,-0.1 0.2,0 0.3,0.1 0,0.2 -0.1,0.2 -0.2,0.2 -0.4,0.3 -0.6,0.4 -0.8,0 -0.7,0.7 0.9,0.5 0.7,0.3 0.9,0 0,-0.1 0.2,-0.1 0.3,0 0.1,-0.1 0.2,-0.4 0,-0.6 0.2,0 0.3,0.1 0.7,-0.1 0.3,-0.1 0.6,-0.9 0.4,-0.8 0.2,-0.4 0.3,-0.2 0.1,-0.2 0.1,-0.3 0.3,-0.2 0,-0.3 -0.4,-0.2 -0.3,-0.2 -0.3,0.3 -0.2,-0.1 -0.9,0.3 -0.4,0 -0.3,-0.2 -0.4,-0.1 -0.4,0.1 -0.5,0.5 -0.8,-0.2 z m 0.7,-0.4 0.1,-0.3 -0.1,-0.2 -0.5,-0.2 -0.5,0 0.2,0.5 0.2,0.2 0.6,0 z m 5.9,-0.7 -0.4,0 0.4,0.5 -0.8,0.8 0.2,0.6 0.3,0.4 0.1,0.2 -0.1,0.1 -0.4,0.1 -0.3,0.1 -0.2,0.3 -0.9,0.9 0.2,0.2 -0.3,0.7 0.2,0.3 0.8,0.7 0.8,0.4 0,-0.7 0.4,-0.1 0.4,0.2 0.4,-0.2 -0.9,-1 0.3,0 2.5,0.5 -0.1,-0.4 -0.1,-0.2 -0.3,-0.4 1.5,-0.4 0.5,-0.3 0.2,-0.3 0.6,-0.1 0.8,-0.3 -0.1,-0.1 0.1,-0.3 -0.4,-0.2 -0.5,-0.1 0.1,-0.3 0.5,-0.1 -0.8,-0.7 -0.3,-0.1 -1,0.1 -0.3,0.1 0,0.2 0.1,0.3 0.3,0.3 0.1,0.2 -0.2,-0.1 -1.1,-0.4 -0.2,-0.1 -0.2,-0.4 0.2,-0.1 0.3,0.1 0.1,-0.3 -0.4,-0.3 -0.4,-0.1 -0.9,0.1 -0.8,-0.3 z" />
    <path inkscape:connector-curvature="0" id="FO" data-name="Faeroe Is." data-id="FO" d="m 947,186.9 0,-0.3 -0.1,-0.3 0,-0.2 -0.1,0 -0.5,-0.1 -0.1,-0.2 -0.1,0 0,0.2 0.1,0.4 0.5,0.4 0.3,0.2 0.1,0 -0.1,-0.1 z m 0.5,-2.1 0,-0.1 -0.2,-0.2 -0.5,-0.2 -0.2,-0.1 -0.2,0.1 0,0.2 0.1,0.1 0.4,0.1 0.4,0.3 0.1,0 0.1,-0.2 z m -2.4,-1.9 -0.2,-0.1 -0.5,0.1 -0.3,0 0.1,0.3 0.6,0.2 0.3,0 0.3,0 0.2,-0.1 -0.1,-0.2 -0.4,-0.2 z m 2.5,-0.5 -0.8,-0.2 -0.6,-0.3 -1,0.1 0.7,1.1 0.8,0.7 0.4,0.2 0,-0.1 0,-0.2 -0.4,-0.5 -0.1,-0.1 0,-0.1 0.1,-0.1 0.2,0 0.3,0.2 0.2,0 0.2,-0.7 z m 1,-0.2 -0.3,-0.2 -0.4,-0.4 0,0.5 0,0.3 0,0.1 0.1,0 0.3,0.1 0.3,-0.4 z" />
    <path inkscape:connector-curvature="0" id="GD" data-name="Grenada" data-id="GD" d="m 632.1,495.7 0.5,-0.2 0.2,-1.1 -0.3,-0.1 -0.3,0.3 -0.3,0.5 0,0.4 -0.2,0.3 0.4,-0.1 z" />
    <path inkscape:connector-curvature="0" id="HK" data-name="Hong Kong" data-id="HK" d="m 1604.9,430.9 0,-0.2 0,-0.2 -0.4,-0.2 -0.3,0 0.1,0.2 0.4,0.5 0.2,-0.1 z m -1.3,0 -0.1,-0.5 0.2,-0.3 -0.9,0.3 -0.1,0.3 0,0.1 0.2,0.1 0.7,0 z m 1.6,-1.2 -0.1,-0.3 -0.2,-0.1 -0.1,-0.3 -0.1,-0.2 0,0 -0.3,-0.1 -0.2,-0.1 -0.4,0 -0.1,0.1 -0.2,0 -0.2,0.2 0,0 0,0.2 -0.5,0.4 0,0.2 0.3,0.2 0.5,-0.1 0.6,0.2 0.8,0.3 0,-0.2 0,-0.3 0.2,-0.1 z" />
    <path inkscape:connector-curvature="0" id="KN" data-name="St. Kitts and Nevis" data-id="KN" d="m 629.9,463.2 0,-0.3 -0.2,-0.2 -0.3,0 0,0.5 0.2,0.2 0.3,-0.2 z m -0.5,-0.7 -0.1,-0.2 -0.1,-0.1 -0.2,-0.4 -0.4,-0.4 -0.2,0.1 -0.1,0.2 0,0.1 0,0 0.3,0.3 0.4,0.1 0.2,0.4 0.2,-0.1 z" />
    <path inkscape:connector-curvature="0" id="LC" data-name="Saint Lucia" data-id="LC" d="m 637.4,484.2 0.1,-1.2 -0.1,-0.5 -0.2,0.1 -0.3,0.4 -0.4,0.6 -0.1,0.3 0,0.6 0.6,0.4 0.4,-0.7 z" />
    <path inkscape:connector-curvature="0" id="LI" data-name="Liechtenstein" data-id="LI" d="m 1024.4,273.6 0,-0.2 0.1,-0.2 -0.1,-0.1 -0.1,-0.2 -0.1,-0.1 0,-0.2 -0.1,-0.1 0,-0.2 -0.1,-0.1 -0.2,0.6 0,0.5 0.1,0.2 0.1,0 0.4,0.1 z" />
    <path inkscape:connector-curvature="0" id="MV" data-name="Maldives" data-id="MV" d="m 1389.1,551.6 0.1,-0.1 0,-0.2 -0.1,-0.1 -0.1,0 -0.1,0.2 0,0.1 0,0.1 0.2,0 z m 0.3,-5.9 0.1,-0.2 0,-0.1 0,-0.1 0,-0.1 0,-0.1 -0.1,0.1 -0.1,0.2 0,0.1 -0.1,0.1 0,0.1 0.1,0 0.1,0 z" />
    <path inkscape:connector-curvature="0" id="MT" data-name="Malta" data-id="MT" d="m 1053.6,344 -0.2,-0.2 -0.5,-0.5 -0.5,-0.1 0.1,0.6 0.4,0.4 0.5,0 0.2,-0.2 z m -1.4,-1.2 0,0 0,-0.2 -0.3,-0.1 -0.4,0.1 0.1,0.1 0.3,0.2 0.3,-0.1 z" />
    <path inkscape:connector-curvature="0" id="MS" data-name="Montserrat" data-id="MS" d="m 631.8,465.7 -0.1,-0.5 -0.1,0 -0.2,0.4 0,0.3 0.3,0.1 0.1,-0.3 z" />
    <path inkscape:connector-curvature="0" id="MU" data-name="Mauritius" data-id="MU" d="m 1294.7,702.5 0.3,-0.3 0.2,-0.4 0.3,-0.3 0.1,-0.7 -0.2,-0.8 -0.4,-0.7 -0.5,0.1 -0.3,0.4 -0.2,0.5 -0.5,0.3 -0.1,0.3 -0.2,0.7 -0.1,0.4 -0.2,0.1 0,0.2 0.3,0.3 0.8,0.1 0.7,-0.2 z" />
    <path inkscape:connector-curvature="0" id="NC" data-name="New Caledonia" data-id="NC" d="m 1897.3,716.1 0,-0.3 -0.4,-0.2 -0.2,0.5 0,0.1 0.2,0.1 0.2,0 0.2,-0.2 z m 4.6,-7.6 -0.1,-0.1 0,-0.3 0.1,-0.2 -0.4,0.2 -0.6,0.2 0.1,0.8 -0.1,0.4 0.3,0.1 0.1,0.3 0.2,0 0.7,-0.2 0.3,-1.1 -0.4,0 -0.2,-0.1 z m -3,-1.7 0.3,-0.5 0.1,-0.2 -0.2,-0.7 -0.3,-0.3 0.3,-1 -0.1,-0.2 -0.4,-0.2 -0.9,0.3 -0.1,0.2 0.5,0.1 0.2,0.2 -0.5,0.7 -0.5,0.1 0.1,0.5 0.2,0.4 0.7,0.2 0.3,0.4 0.3,0 z m -3.9,-2.9 0.3,-0.3 0.3,-0.4 -0.1,-0.1 0,-0.3 0.2,-0.4 0.3,-0.1 -0.2,-0.2 -0.2,-0.1 0,0.3 -0.3,0.7 -0.1,0.3 -0.5,0.6 0.3,0 z m -12.3,-2.9 -0.6,-0.7 -0.1,0.2 -0.1,0.4 0,0.3 0.3,0.2 0.1,0.2 -0.1,0.5 0,0.4 0.6,0.9 0.1,0.7 0.3,0.6 0.5,0.5 0.4,0.5 0.8,1.4 0.2,0.5 0.4,0.3 1,1.2 0.4,0.4 0.4,0.2 0.9,0.7 0.6,0.3 0.3,0.5 0.6,0.3 0.8,0.4 0.1,0.2 0,0.3 0.1,0.3 0.5,0.4 0.6,0.3 0.1,0.2 0.1,0.2 0.3,-0.1 0.3,0.1 0.9,0.7 0.4,-0.1 0.3,0 0.5,-0.2 0.3,-0.4 -0.1,-1.1 -0.5,-0.5 -0.7,-0.4 -0.4,-0.5 -0.4,-0.5 -0.8,-1 -1.1,-1 -0.5,-0.2 -0.3,-0.4 -0.3,-0.1 -0.2,-0.3 -0.5,-0.3 -0.3,-0.6 -0.6,-0.6 -0.1,-0.3 0.1,-0.3 -0.1,-0.3 -0.4,-0.3 -0.2,-0.5 -0.2,-0.3 -0.4,-0.2 -0.7,-0.4 -1.6,-1.9 -0.7,-0.6 -0.7,0.2 -0.6,-0.4 z m -22,-6 0.2,-0.4 0.1,-0.8 -0.2,0.4 -0.2,1 0.1,-0.2 z" />
    <path inkscape:connector-curvature="0" id="NR" data-name="Nauru" data-id="NR" d="m 1915,575.5 0,-0.2 -0.1,0 -0.1,0 -0.1,0.2 0.1,0.1 0.1,0.1 0.1,-0.2 z" />
    <path inkscape:connector-curvature="0" id="PN" data-name="Pitcairn Is." data-id="PN" d="m 274.2,727.4 0,-0.2 -0.1,-0.2 -0.2,-0.1 -0.1,0.1 0.1,0.2 0.2,0.2 0.1,0.1 0,-0.1 z" />
    <path inkscape:connector-curvature="0" id="PR" data-name="Puerto Rico" data-id="PR" d="m 600.8,457.3 0,-0.1 0,0 0.1,0 0,-0.1 0.1,-0.1 0,0 0,-0.1 -0.1,0 0,0 -0.3,0 -0.1,0 0,0.1 0,0.1 0.2,0.1 0,0 0,0.1 0.1,0 0,0 z m 13.6,-0.3 0.7,-0.2 0,-0.1 -0.4,-0.1 -0.6,0 -0.5,0.2 0.1,0.2 0.2,0 0.5,0 z m -3.7,-2.2 -0.1,-0.2 -0.2,0 -3.5,-0.1 -1.3,-0.2 -0.3,0.1 -0.3,0.1 -0.1,0.4 -0.2,0.2 -0.3,0.2 0.1,0.3 0.1,0.2 0.2,0.4 -0.1,0.5 -0.2,1 0.3,0.2 0.7,-0.1 0.3,0.1 0.3,0.1 0.4,-0.1 0.4,-0.2 0.9,0.1 0.5,-0.1 0.6,0.3 0.4,-0.1 0.2,0.1 0.3,0 0.6,0 0.9,-0.2 0.8,-0.5 0.3,-0.5 0.4,-0.3 0.6,-0.4 0,-0.9 -0.7,-0.1 -0.6,-0.3 -1.1,-0.1 -0.1,0 0.1,0.2 -0.1,0 -0.2,-0.1 z" />
    <path inkscape:connector-curvature="0" id="PF" data-name="Fr. Polynesia" data-id="PF" d="m 213.2,704.9 -0.1,-0.3 -0.2,-0.3 -0.1,0.1 0.1,0.1 0.2,0.3 0,0.2 0.1,-0.1 z m 9.3,-14.7 -0.2,-0.2 -0.4,-0.2 -0.2,-0.1 -0.2,-0.1 -0.1,0.1 0.1,0.1 0.1,0 0.3,0.2 0.3,0.1 0.2,0.1 0,0.1 0.1,-0.1 z m -24.5,-1.1 -0.6,-0.3 0.1,0.2 0.4,0.2 0.2,0.1 -0.1,-0.2 z m 20.5,-0.2 -0.4,-0.5 -0.3,0 0.7,0.6 0,-0.1 z m -21.6,-1 -0.4,-0.4 -0.2,-0.3 -0.3,-0.1 0.1,0.1 0.4,0.4 0.3,0.4 0.2,0.1 -0.1,-0.2 z m -0.3,-2.1 -0.1,-0.1 0,0 0,-0.3 0.2,-0.3 0.6,-0.4 0,-0.1 0,0 -0.2,0.1 -0.4,0.2 -0.2,0.2 -0.1,0.2 -0.1,0.3 0.1,0.2 0.1,0.1 0.2,0 -0.1,-0.1 z m -47.4,-1.1 -0.2,-0.6 -0.3,-0.5 -0.8,-0.1 -0.5,0.2 -0.1,0.2 0.1,0.4 0.5,0.7 0.5,0.1 0.8,-0.1 0.4,0.6 0.2,0.1 0.4,0.1 0.1,-0.3 -0.2,-0.5 -0.9,-0.3 z m -2.9,-0.9 0.1,-0.4 -0.2,-0.1 -0.5,0 0,0.2 0.1,0.2 0.1,0.1 0.3,0.2 0.1,-0.2 z m -9.7,-4.3 0.2,0 -0.4,-0.6 -0.3,-0.2 0,0.1 0,0.7 0.3,0.1 0.2,-0.1 z m 43.9,-1.6 -0.2,0 -0.3,0 -0.1,0 0.5,0.1 0.4,0.2 -0.3,-0.3 z m -0.7,0.1 -0.3,-0.1 -0.3,-0.2 -0.3,0 0.7,0.3 0.2,0 z m -43.8,0.1 0.1,-0.2 -0.1,-0.1 -0.4,-0.2 0.1,0.3 0,0.2 0.2,0.1 0.1,-0.1 z m 32.8,-2 -0.3,-0.4 -0.2,-0.3 -0.2,-0.4 -0.4,-0.5 0.1,0.3 0.1,0.2 0.2,0.2 0.2,0.4 0.1,0.2 0.3,0.4 0.1,0 0,-0.1 z m 16.2,-1.5 0.1,-0.5 -0.2,0 0,0.5 0.1,0 z m -14.4,-1.6 -0.6,-0.6 -0.1,0 0.1,0.2 0.5,0.5 0.1,0.2 0,-0.3 z m 30.8,-33.9 0.1,-0.2 0,-0.2 -0.1,-0.1 -0.3,-0.1 0.1,0.7 0.2,-0.1 z m -2.7,-3.7 -0.1,-0.2 -0.2,0 -0.1,0.1 0,0.5 0.4,-0.4 z m 0.1,-1.6 -0.8,0.5 0.2,0.4 0.4,0.1 0.2,-0.2 0.8,-0.1 0.3,-0.4 -0.3,0.1 -0.8,-0.4 z m -6.1,-1.7 0.2,-0.5 -0.2,-0.1 -0.4,0.2 0,0.2 0.3,0.4 0.1,-0.2 z m 2.6,-3.1 0.3,-0.1 0,-0.1 -0.2,-0.2 -0.3,-0.1 -0.1,0.1 -0.1,0.2 0.1,0.3 0.3,-0.1 z m -2.9,-0.1 0.1,-0.3 0,-0.2 -0.1,-0.2 -0.9,-0.2 -0.1,0.1 0,0.4 0.2,0.5 0.3,0 0.5,-0.1 z" />
    <path inkscape:connector-curvature="0" id="SG" data-name="Singapore" data-id="SG" d="m 1561,563.7 0.1,-0.2 -0.2,-0.2 -0.3,-0.1 -0.5,-0.2 -0.6,0.1 -0.3,0.6 0.9,0.4 0.9,-0.4 z" />
    <path inkscape:connector-curvature="0" id="SB" data-name="Solomon Is." data-id="SB" d="m 1909.1,646.4 -0.2,-0.2 -0.1,-0.4 -0.3,0 -0.3,0.1 0.2,0.6 0.2,0 0.5,-0.1 z m -35.6,0.8 -0.1,-0.2 -0.5,-0.4 -1.9,-1.3 -0.4,-0.1 -0.1,0.1 -0.1,0.3 0.1,0.2 0.5,0.1 0,0.1 0.3,0.2 0.7,0.2 0.4,0.3 0.1,0.5 0.3,0.1 0.3,0.1 0.4,-0.2 z m 32,-6.6 0,-0.1 0.2,-0.3 -0.2,-0.1 -0.5,-0.1 -0.7,0.1 -0.3,0.2 -0.2,0.3 -0.2,0 0,0.2 0.1,0.4 0.2,-0.1 0.2,0.1 0.5,-0.5 0.3,0 0.1,0 0.5,-0.1 z m -24.4,-2.3 -0.1,-0.2 -0.2,-0.1 -0.9,-0.7 -0.5,-0.2 -0.5,0 -0.1,0.5 0,0.3 0.6,0 0.4,0.2 0,0.6 0.2,0.2 0,0.5 1.2,0.9 0.7,0.4 0.7,0.1 0.4,0.2 0.5,-0.1 0.5,0.2 0.4,-0.1 -0.4,-0.3 0,-0.4 -0.5,-1.3 -0.3,-0.3 -0.5,0.1 -0.5,-0.2 -0.4,0 -0.7,-0.3 z m -0.4,-4.9 -0.6,-1.6 -0.2,-0.1 0.1,0.6 0.1,0.4 -0.1,0.5 -0.1,0.6 0.2,0.2 0.2,-0.2 0.4,0.5 0,-0.2 0,-0.7 z m -9.8,-2.2 -0.3,-0.1 -0.4,0.3 -0.1,0.3 -0.1,0.7 0,0.4 0.3,0.7 0.3,0.5 0.3,0.3 0.2,0.2 0.9,0.1 1.7,0.1 0.9,0.4 0.9,0.2 0.4,-0.1 0.5,-0.2 0.1,-0.1 -0.1,-0.6 -0.2,-0.3 -0.4,-0.2 -0.2,-0.6 -0.5,-0.4 -0.9,-0.7 -1.6,0 -0.6,0.1 -1.1,-1 z m 2.6,-1.8 -0.5,0.2 0,0.3 0.4,0.1 0.4,0.2 0.1,0.3 0,0 0.2,-0.1 0.4,0.2 0.2,-0.3 -0.4,-0.5 -0.4,-0.3 -0.1,0 -0.3,-0.1 z m -5.6,0.8 0.3,-0.2 0,-0.4 -0.3,0 -0.1,-0.2 -0.2,0 -0.3,0.2 -0.2,0.3 0.1,0.2 0.4,0 0.2,0.1 0.1,0 z m -8.4,-2.3 -0.1,-0.2 -0.3,-0.2 -0.2,0 -0.5,0.1 0.1,0.1 0.6,0.3 0.3,0.1 0.1,-0.2 z m 3.1,0.4 0.3,-0.2 -0.1,-0.2 -0.1,-0.5 -0.4,0.7 0.1,0.2 0.2,0 z m -0.5,-0.9 0,-0.2 0,-0.2 -0.2,-0.1 0.4,-0.3 -0.1,-0.1 -0.6,-0.2 -0.2,0.2 -0.2,0.1 -0.1,0.1 -0.1,0.1 -0.1,0.5 0.2,0.4 0.4,0.2 0.6,-0.5 z m -4,0.2 -0.3,-0.4 0.1,-0.5 0.2,-0.1 0.2,-0.5 -0.1,-0.4 -0.2,0.1 -0.7,0.6 -0.1,0.3 0.6,0.8 0.3,0.2 0,-0.1 z m 13,-1.3 -0.2,-0.4 0,-0.2 -0.3,-0.2 -0.2,0.1 -0.1,0.3 0.1,0.2 0.4,0.3 0.3,-0.1 z m 6,-1.2 -0.2,0 -0.1,0.1 -0.2,0 -0.3,0 -0.1,0.2 0.6,1.1 -0.3,0.5 0.4,2.2 0.4,1.2 0.8,0.8 0,0.2 0.8,0.5 0.6,1.3 0.2,0.1 0.1,-0.2 0,-0.6 -0.5,-1.1 0.1,-0.8 -0.2,-0.3 0,-0.3 -0.2,-0.8 -0.6,-0.7 -0.3,-0.1 -0.2,-0.3 0.2,-0.6 0.2,-0.2 0.1,-0.3 -1.3,-1.9 z m -16.6,-0.5 -0.6,-0.2 -0.2,-0.3 0,-1 -0.6,-0.3 -0.3,0.2 -0.6,0.7 -0.2,0.4 -0.5,0.3 -0.1,0.3 0,0.4 0.4,0.1 0.3,-0.4 0.9,-0.1 0.3,0.1 0,0.4 0.1,0.7 0.3,0.3 0.5,0.2 0.4,0.6 0.1,-0.3 0.2,0 0.2,-0.4 -0.3,-1.2 -0.3,-0.5 z m -6.5,-0.4 0.1,-0.5 -0.1,-0.9 -0.2,0.1 0,0.2 -0.1,0.4 0.2,0.8 0.1,-0.1 z m 3.2,-0.4 0.2,-0.2 0,-0.4 0,-0.5 -0.2,-0.4 -0.2,-0.2 -0.5,0.1 -0.4,0.5 0,0.5 0.4,0.6 0.6,0 0.1,0 z m -2.6,-1.2 0.2,-0.3 0.5,-0.7 0.1,-0.3 -0.5,-0.2 -0.4,-0.5 -0.4,-0.2 -0.3,0.4 0,0.4 0.5,0.6 -0.1,0.4 0.2,0.1 0.1,0.4 0.1,-0.1 z m 17.5,3.9 -0.1,-0.5 -0.3,-0.4 0.4,-0.5 -2.2,-1.9 -0.3,-0.2 -0.4,-0.1 -0.5,-0.4 -0.5,-0.1 -0.5,-0.4 -0.2,-0.3 -0.6,-0.4 -0.6,-0.8 -1.5,-0.3 0.1,0.2 0.4,0.4 0.1,0.7 0.5,0.4 0.5,0.6 0.2,0.1 0.2,0.2 0.4,0.5 0.8,0.4 0.8,0.6 0.3,0.1 0.3,0.3 1.5,0.7 0.5,0.7 0.7,0.5 0,-0.1 z m -21.8,-9.2 0.2,-0.3 -0.7,-0.5 -0.2,0.3 -0.2,0.5 0.4,0.2 0.5,-0.2 z m 9.1,1.5 -0.1,-0.1 -0.3,0 -0.4,-0.2 -0.7,-0.8 -0.2,-0.3 -0.2,-1 -0.4,-0.4 -1.4,-0.8 -0.8,-0.8 -0.7,-0.2 -0.2,0.2 0,0.5 0.2,0.3 1,0.9 1.1,1.7 1,1 0.8,0.1 0.4,0 0,0.1 0.1,0.2 0.5,0.2 0.5,-0.4 -0.2,-0.2 z" />
    <path inkscape:connector-curvature="0" id="ST" data-name="São Tomé and Principe" data-id="ST" d="m 1014.1,571.4 0.5,-0.8 0,-0.5 -0.3,-0.5 -0.4,0 -0.5,0.4 -0.3,0.4 0,0.3 0.1,0.7 0.1,0.3 0.3,0.2 0.5,-0.5 z m 4.3,-9.2 0.2,-0.4 0,-0.2 -0.1,-0.1 -0.1,-0.1 -0.2,0.1 -0.3,0.5 0.1,0.2 0.2,0.2 0.2,-0.2 z" />
    <path inkscape:connector-curvature="0" id="SX" data-name="Sint Maarten" data-id="SX" d="m 627.1,457.2 0,0 0.2,0.2 0.3,0.1 0.1,-0.1 0,-0.2 -0.6,0 z" />
    <path inkscape:connector-curvature="0" id="SC" data-name="Seychelles" data-id="SC" d="m 1288.5,602 -0.5,-0.8 -0.4,0.3 0.2,0.3 0.3,0.2 0.1,0.4 0.3,0.2 0,-0.6 z" />
    <path inkscape:connector-curvature="0" id="TC" data-name="Turks and Caicos Is." data-id="TC" d="m 578.7,433.1 -0.1,0.4 0,0.2 0.2,0.1 0.6,-0.1 0.1,-0.1 0.2,-0.1 0,-0.1 -0.4,0.1 -0.6,-0.4 z m 3.6,0.6 0.2,-0.2 -0.2,-0.2 -0.7,-0.2 -0.2,0.1 0,0.3 0.6,0 0.3,0.3 0,-0.1 z m -1.1,-0.5 -0.1,-0.1 -0.1,-0.6 -0.5,0 0,0.2 0.1,0.2 0.1,0 0.1,0.2 0.3,0.2 0.1,-0.1 z" />
    <path inkscape:connector-curvature="0" id="TO" data-name="Tonga" data-id="TO" d="m 13.3,707.7 0,0 -0.2,0.3 0,0.2 0.4,0.4 -0.2,-0.9 z m -1.6,-0.9 -0.2,0 0.2,-0.1 -0.4,-0.2 -0.4,0 -0.2,-0.1 0,-0.2 -0.2,0.3 0.2,0.3 0.9,0.4 0.3,0.2 0.2,-0.6 0,-0.2 -0.3,0.1 0,0.1 -0.1,0 z m 2.5,-16 0.1,-0.2 0,-0.2 -0.3,-0.1 -0.1,0 -0.3,0.5 0.1,0.1 0.3,0.2 0.1,0 0.1,-0.3 z" />
    <path inkscape:connector-curvature="0" id="TT" data-name="Trinidad and Tobago" data-id="TT" d="m 635.4,507.7 0.1,-0.2 0,-0.6 0.2,-0.4 -0.2,-0.4 -0.1,-0.6 0.1,-0.5 0,-0.7 0.2,-0.3 0.5,-0.8 -0.9,0 -0.6,0.2 -1.1,0.1 -0.5,0.2 -0.7,0.1 -0.4,0.2 0.1,0.1 0.5,0.2 0.2,0.2 0.1,0.2 0.1,0.4 -0.3,1.7 -0.1,0.1 -0.6,0.1 -0.2,0.3 -1.4,0.8 0.8,-0.1 0.9,0.1 2.4,-0.1 0.9,-0.3 z m 1.8,-6.7 1.2,-0.5 0.1,-0.4 -0.2,0 -0.8,0.3 -0.6,0.5 0,0.2 0.3,-0.1 z" />
    <path inkscape:connector-curvature="0" id="VC" data-name="St. Vin. and Gren." data-id="VC" d="m 634.5,491.4 0,0 0,-0.1 0.1,0 0,-0.1 0,0 0,-0.1 -0.1,0 0,0.1 0,0 0,0.1 -0.1,0 0,0.1 0,0 0,0 0.1,0 z m 0.7,-1.9 0.1,-0.2 0.1,-0.1 0,0 0,0 -0.1,-0.1 0,0 0,0.1 -0.2,0.1 0,0 0,0.1 0,0 0,0.1 -0.1,0 -0.1,0 0,0 0.1,0 0,0 0.1,0.1 0,0 0,0 0,0 0.1,-0.1 z m 0.3,-1.1 0.3,-0.2 0.1,-0.6 -0.1,-0.4 -0.2,0 -0.3,0.1 -0.2,0.3 -0.1,0.5 0.4,0.4 0.1,-0.1 z" />
    <path inkscape:connector-curvature="0" id="VG" data-name="British Virgin Is." data-id="VG" d="m 619.2,455.1 0.3,-0.2 -0.2,-0.1 -0.4,0 -0.3,0.2 0.1,0.1 0.5,0 z m 1.1,-0.4 0.4,-0.4 -0.5,0.1 -0.2,0.2 0.1,0.1 0.1,0 0.1,0 z m 0.8,-1.8 -0.2,0 -0.5,0 0,0 0.1,0.1 0.3,0 0.3,0.1 0,0 0,-0.2 z" />
    <path inkscape:connector-curvature="0" id="VI" data-name="U.S. Virgin Is." data-id="VI" d="m 617.9,458.9 -0.7,0.2 -0.1,0.4 1.1,0 0.7,-0.3 -0.6,0 -0.4,-0.3 z m 0.9,-3.5 -0.5,-0.1 -0.2,0.2 0,0 0.3,0.1 0.4,-0.2 z m -1.1,0.1 -0.2,-0.2 -0.3,-0.1 -0.4,0.1 0.5,0.3 0.4,-0.1 z" />
    <path inkscape:connector-curvature="0" id="CY" data-name="Cyprus" data-id="CY" d="m 1149.9,348.4 -0.3,-0.1 -0.5,0.2 -0.4,0.4 -0.4,0.3 -0.5,-0.3 0.2,0.9 0.6,1.1 0.2,0.3 0.3,0.2 1.1,0.3 0.3,0 0.6,0 0.2,0.1 0.2,0.4 0.4,0 0,-0.1 0,-0.3 0.2,-0.2 0.3,-0.2 0.3,0 0.6,-0.1 0.6,-0.2 0.5,-0.4 0.9,-1 0.3,0 0.3,0 0.6,0 0.6,-0.1 -0.2,-0.4 -0.1,-0.1 -0.4,-0.5 -0.2,-0.4 0.1,-0.6 2.5,-1.9 0.5,-0.5 -0.8,0.2 -0.6,0.4 -0.4,0.2 -0.7,0.4 -2.3,0.8 -0.8,0.1 -0.8,0 -1,-0.1 -0.9,-0.2 0,0.7 -0.2,0.6 -0.6,0.2 -0.3,-0.1 z" />
    <path inkscape:connector-curvature="0" id="RE" data-name="Reunion" data-id="RE" d="m 1284,707.9 0.2,-0.4 0.1,-0.8 -0.4,-0.8 -0.4,-0.7 -0.4,-0.2 -0.8,-0.1 -0.7,0.3 -0.4,0.6 -0.2,0.3 0.4,1.1 0.2,0.3 1.1,0.6 0.5,0 0.8,-0.2 z" />
    <path inkscape:connector-curvature="0" id="YT" data-name="Mayotte" data-id="YT" d="m 1228.7,654.7 0,-0.3 0.2,-0.5 0,-0.1 0.1,-0.5 -0.3,-0.3 -0.2,0 -0.2,-0.3 -0.3,0.3 0.3,0.5 -0.1,0.3 -0.1,0.4 0.1,0.4 0.2,0.2 0.3,-0.1 z" />
    <path inkscape:connector-curvature="0" id="MQ" data-name="Martinique" data-id="MQ" d="m 638,479.9 -0.2,-0.7 -0.1,-0.2 -0.2,-0.3 0.1,-0.3 0,-0.1 -0.2,0 -0.3,-0.5 -0.6,-0.3 -0.3,0 -0.2,0.2 0,0.3 0.3,0.9 0.2,0.2 0.5,0.2 -0.4,0.4 0,0.1 0.1,0.3 0.9,0 0.2,0.3 0.1,-0.1 0.1,-0.4 z" />
    <path inkscape:connector-curvature="0" id="GP" data-name="Guadeloupe" data-id="GP" d="m 636.4,471.1 0.2,-0.2 0,-0.3 -0.2,-0.3 -0.2,0.1 -0.2,0.3 0,0.3 0.1,0.1 0.3,0 z m -1.9,-0.8 0.2,-0.2 0,-1.2 0.1,-0.3 -0.2,-0.1 -0.2,-0.2 -0.6,-0.2 -0.1,0.1 -0.2,0.3 0.1,1.5 0.2,0.5 0.2,0.1 0.5,-0.3 z m 1.6,-1.4 0.8,-0.2 -0.9,-0.6 -0.2,-0.4 0,-0.3 -0.4,-0.3 -0.2,0.2 -0.1,0.3 0.1,0.5 -0.3,0.4 0.1,0.4 0.4,0.1 0.7,-0.1 z" />
    <path inkscape:connector-curvature="0" id="CW" data-name="Curaco" data-id="CW" d="m 595.9,494.9 0,-0.6 -0.9,-0.4 0,0.3 0.1,0.2 0.3,0.1 0.1,0.2 -0.1,0.6 0.2,0.3 0.3,-0.7 z" />
    <path inkscape:connector-curvature="0" id="IC" data-name="Canary Islands" data-id="IC" d="m 879.6,395.2 -0.2,-0.2 -0.7,0.5 -0.6,0 0.1,0.2 0.1,0.2 0.7,0.4 0.6,-1.1 z m 13.5,-2.1 0,-0.1 -0.1,0 -0.1,0.1 -1.3,-0.1 -0.2,0.6 -0.5,0.4 0,0.7 0.5,0.7 0.3,0.1 0.5,0.1 0.7,-0.4 0.2,-0.4 0.1,-0.8 -0.1,-0.4 0,-0.5 z m -9.7,0.8 0.5,-0.4 0,-0.2 -0.1,-0.3 -0.5,-0.3 -0.2,0 -0.2,0.2 -0.2,0.4 0.3,0.5 0.2,0.1 0.2,0 z m 4.7,-2.3 1.2,-1 0,-0.3 -1,0.1 -1.1,1 -0.3,0.1 -1,0.1 -0.5,0 -0.4,0.2 0.2,0.3 0.4,1 0.7,0.9 0.6,-0.2 0.3,-0.2 0.4,-0.6 0.5,-1.4 z m 11.6,1.3 1.5,-0.5 0.3,-1 0.3,-1.1 0,-0.7 -0.2,-0.3 -0.1,0 -0.4,0 -0.3,0.2 -0.1,0.6 -0.7,1.3 -0.5,1.2 -0.7,0.6 -0.7,0.2 0.1,0.1 0.7,0.1 0.8,-0.7 z m -19.7,-2 0.5,-0.5 0.1,-0.3 -0.1,-0.5 0.2,-0.2 -0.1,-0.4 -0.3,-0.4 -0.7,0 -0.4,0.6 0.6,1.2 0.1,0.5 0.1,0 z m 22.4,-2.7 0.9,-0.3 0.5,-0.3 0.1,-0.9 0.2,-0.3 -0.2,-0.3 -0.2,0.2 -0.2,0.4 -0.6,0.2 -0.8,0.4 -0.2,0.3 -0.2,0.9 0.4,0.1 0.3,-0.4 z" />
  </svg>
</div>
<div id="tooltip"></div>
</body>

</html>