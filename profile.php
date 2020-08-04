<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nasty Bohemia</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta name = "keywords" content = "Nasty Bohemia, nastybohemia.com, los angeles artist, los angeles video editor, los angeles post-production, los angeles web developer, HTML, Meta Tags, Metadata" />
    <meta name = "author" content = "Nasty Bohemia" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ************************* CSS Files ************************* -->
    <link rel="stylesheet" href="assets/css/profile.css">
        <!-- ************************* JQuery *************************-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- ************************* Semantic *************************-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</head>
<body>
<div class="container" x-data="{ rightSide: false, leftSide: false }">
 <div class="left-side" :class="{'active' : leftSide}">
  <div class="left-side-button" @click="leftSide = !leftSide">
   <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <line x1="3" y1="12" x2="21" y2="12"></line>
    <line x1="3" y1="6" x2="21" y2="6"></line>
    <line x1="3" y1="18" x2="21" y2="18"></line>
   </svg>
   <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
    <path d="M19 12H5M12 19l-7-7 7-7" />
   </svg>
  </div>
  <div class="logo">BOHEMIAN NETWORK</div>
  <div class="side-wrapper">
   <div class="side-title">MENU</div>
   <div class="side-menu">
    <a href="#">
     <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
      <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
      <path d="M9 22V12h6v10" />
     </svg>
     Home
    </a>
    <a href="#">
     <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
      <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
      <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
     </svg>
     Profile
    </a>
    <a href="#">
     <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
      <circle cx="12" cy="10" r="3" /></svg>
     Explore
    </a>
    <a href="#">
     <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
      <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
      <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" />
     </svg>
     Membership
    </a>
    <a href="#">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
      <circle cx="8.5" cy="8.5" r="1.5" />
      <path d="M21 15l-5-5L5 21" />
     </svg>
     Galery
    </a>
    <a href="#">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
      <path d="M16 2v4M8 2v4M3 10h18" />
     </svg>
     Events
    </a>
   </div>
  </div>
  <div class="side-wrapper">
   <div class="side-title">YOUR FAVOURITE</div>
   <div class="side-menu">
    <a href="#"><svg viewBox="0 0 511.4 511.4" width="512" xmlns="http://www.w3.org/2000/svg">
      <path d="M102.8 145c-47.5 0-86 38.6-86 86v29.3h168.6V145z" fill="#0dca71" />
      <path d="M432.9 377.8l-43-70.8-95.1 60.2 84 144.2 25.2-15.3a86.2 86.2 0 0028.9-118.3z" fill="#0cba68" />
      <path d="M121.6 307l-43 70.8a86.2 86.2 0 0028.8 118.3l25.3 15.3 84-144.2z" fill="#0dca71" />
      <path d="M408.6 145H326v115.3h168.7v-29.2c0-47.5-38.6-86.1-86-86.1z" fill="#0cba68" />
      <path d="M345.9 90.2A90.3 90.3 0 00255.7 0L245 85.3l10.7 82.1H346V90.2z" fill="#0cba68" />
      <path d="M255.7 0a90.3 90.3 0 00-90.2 90.2v77.2h90.2z" fill="#0dca71" />
      <g>
       <path d="M420 269.3c0-62.4-31.7-117.1-79.2-147.4l-85 147.4z" fill="#ebb65b" />
       <path d="M255.7 269.3L340.8 122c-24.8-15.8-54-25-85-25L245 160z" fill="#fdd278" />
       <path d="M91.4 269.3h164.3l-85-147.4a174.3 174.3 0 00-79.3 147.4z" fill="#ffc663" />
       <path d="M255.7 97c-31.1 0-60.2 9.1-85 25l85 147.3z" fill="#ffe7ab" />
       <path d="M255.7 269.3L245 384l10.7 57.7c31.1 0 60.3-9.2 85.1-25z" fill="#ebb65b" />
       <path d="M255.7 269.3l85.1 147.4c47.5-30.2 79.2-85 79.2-147.4z" fill="#fdd278" />
       <path d="M170.6 416.7c24.9 15.8 54 25 85.1 25V269.3z" fill="#ffc663" />
       <path d="M255.7 269.3H91.4c0 62.4 31.8 117.2 79.2 147.4z" fill="#ffe7ab" />
       <path d="M337 269.3L296.4 199h-40.7L245 266.7l10.7 73h40.7z" fill="#ffe5a5" />
       <path d="M215 198.9l-40.6 70.4 40.7 70.5h40.6V198.9z" fill="#fffaed" />
      </g>
     </svg>
     Animals
    </a>
    </div></div>
    <a href="https://github.com/nastybohemia" class="follow-me" target="_blank">
   <span class="follow-text">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
     <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
    </svg>
    Follow me on GitHub
   </span>
   <span class="developer">
    <img src="https://pbs.twimg.com/profile_images/1253782473953157124/x56UURmt_400x400.jpg" />
    Sophie — @nastybohemia
   </span>
  </a>
  <a href="https://twitter.com/nastybohemia" class="follow-me" target="_blank">
   <span class="follow-text">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
     <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
    </svg>
    Follow me on Twitter
   </span>
   <span class="developer">
    <img src="https://pbs.twimg.com/profile_images/1253782473953157124/x56UURmt_400x400.jpg" />
    Sofia Boho — @nastybohemia
   </span>
  </a>
  <a href="https://www.reddit.com/user/nastybohemia" class="follow-me" target="_blank">
   <span class="follow-text">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
     <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
    </svg>
    Follow me on Reddit
   </span>
   <span class="developer">
    <img src="https://pbs.twimg.com/profile_images/1253782473953157124/x56UURmt_400x400.jpg" />
    @nastybohemia
   </span>
  </a>
  <a href="https://www.linkedin.com/in/nastybohemia/" class="follow-me" target="_blank">
   <span class="follow-text">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
     <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
    </svg>
    Add me on LinkedIn
   </span>
   <span class="developer">
    <img src="https://pbs.twimg.com/profile_images/1253782473953157124/x56UURmt_400x400.jpg" />
    Nasty Bohemia
   </span>
  </a>
 </div>
 <div class="main">
  <div class="search-bar">
   <input type="text" placeholder="Search" />
   <button class="right-side-button" @click="rightSide = !rightSide">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
     <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
    </svg>
   </button>
  </div>
  <div class="main-container">
   <div class="profile">
    <div class="profile-avatar">
     <img src="https://lh3.googleusercontent.com/_AVM0MVSxvQogFVLs2yPeUAgHaFZrBrr-zWZ69T9D7kv4TL2wQwXeX_1rvsMhEMGbbTtsofNml_7SJVan-evxvo_6CS5vSz3edTk_oaAmQr3TyayLefn8QVpqubS04gYpIXbcSGQGAqK2V92pHn4Z-X9Io55Z0F8y_76kYq-hYXCejGhY1dwBHSY2osmf1DLde6boJmMU2PqVpCDsJulhXj9cPUWBB9SykJzE6fH7bW0-MQB5NYCZ6EGE2Ij8t01mqvB4odjPCcLY6sTcmRxL-dvnWOLQnNp-hrJ1KYAlAnlfInoXYgcigCUQd7KB4Pku2zjOxcYjVRBFpxWXHKlJWbEIf0YcF3AMiuwJvuw_nKQ-vwOmz1u3lVNg-gDMbRQW93b2N8sgfUqedo35g6brdkJAaLxf07wCwl7w_djS0GtuCj-BIAKV3ZMCbshJcHu6D5HDhPAOyumN5mbE080trfKDhG4PJlinBSTwfe_xTbS4r-pYBvRXLWXAKSkjyQi1Z-mG13-vFv45wYA65SeKLCMrCfxUTgSMrf9HWcbNO7RBI31oUES285Cyw9CZsnU8d0NZIkr2CsGAVLJFvjgp0Ai529OE28ZsHmouAPWcYF3U4f2Ol9SVEkHw_Pu23HpR4FGUP8dvS6_5lZMprEGDkouz5wMwevzuJyaq7Y0-jZyHZfyY9cJbIrE3NntUZ0=w1190-h1586-no?authuser=0" alt="" class="profile-img">
     <div class="profile-name">Sofia Boho</div>
    </div>
    <img src="https://lh3.googleusercontent.com/42No46its9dVntHKrvJIfVokZBXXFIWPUVam8dMI99GsCVja7vDz5PoEBTBMz_NRhf-rifZjMoqqnpYITJMNt7psA8i7ZPprVGNgHsDwMuaT9u1NkeZp1eWlLck4GqQTGeubX6f6vZ3_U8dSgFTn1FzUXs-J1LCrGQ9NO0HlRIQIuwT4B0UVlTNYlYR-qXbaHzsUBwTLNQWLjUmTFRkxPI2y5l78DB81tq-96Ib_RRxfX91wJnb8EfWQKwLWyEcIEokDhpsrod0SB8eiFxB017w1Tw6pcYHzieRthfkgwEVESeLWdnMv2yMKGgX47eYSLfJVIGOCcgabUtPbOoKzW0OK3ErQgrjZ8ii6YmkPp0D9ijRgAWD2oIHMhGnzkl9lA5pkHMn2zz0md3sNWVsZZw-c028ST0Z3pUNI6tUryBPZ1ryIsgaUCrQ0nqOF56aLYl-x9Z75myMrvr7sY3D4TfgjeLcXq1W6hQE9t7HE8P4thiGV2vQSMelLQegW1PGeU6DBCqwKy6rbDnQVQC8Z2GL0EfoZd0D5OXUD2ODvqsKYgQxVC40aeDsTOnNkCfOweVJWPee3QsXUIVHj_Gxe1Z5W-QVzVRM_rpLlpPuSxOFjGibkpD6FovEI_Rj4lUCDvkSY1rmY2H0LrSyVPVn3BTq7ujtXatE_5MoQWbtPKUhJm8KwisBOHxfdUrkLXis=w1190-h1586-no?authuser=0" alt="" class="profile-cover">
    <div class="profile-menu">
     <a class="profile-menu-link active">Timeline</a>
     <a class="profile-menu-link">About</a>
     <a class="profile-menu-link">Cases</a>
     <a class="profile-menu-link">Multimedia</a>
     <a class="profile-menu-link">Study</a>
     <a class="profile-menu-link">
     <div class="ui vertical animated button" tabindex="0">
         <div class="hidden content">Send crypto</div>
         <div class="visible content">
             <i class="shop icon"></i>
             </div>
             </div>
             </a>
             </div>
             </div>
   <div class="timeline">
    <div class="timeline-left">
     <div class="intro box">
      <div class="intro-title">
       Introduction
       <button class="intro-menu"></button>
      </div>
      <div class="info">
       <div class="info-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.889 503.889" fill="currentColor">
         <path d="M453.727 114.266H345.151V70.515c0-20.832-16.948-37.779-37.78-37.779H196.517c-20.832 0-37.78 16.947-37.78 37.779v43.751H50.162C22.502 114.266 0 136.769 0 164.428v256.563c0 27.659 22.502 50.161 50.162 50.161h403.565c27.659 0 50.162-22.502 50.162-50.161V164.428c0-27.659-22.503-50.162-50.162-50.162zm-262.99-43.751a5.786 5.786 0 015.78-5.779h110.854a5.786 5.786 0 015.78 5.779v43.751H190.737zM32 164.428c0-10.015 8.147-18.162 18.162-18.162h403.565c10.014 0 18.162 8.147 18.162 18.162v23.681c0 22.212-14.894 42.061-36.22 48.27l-167.345 48.723a58.482 58.482 0 01-32.76 0L68.22 236.378C46.894 230.169 32 210.321 32 188.109zm421.727 274.725H50.162c-10.014 0-18.162-8.147-18.162-18.161V253.258c8.063 6.232 17.254 10.927 27.274 13.845 184.859 53.822 175.358 52.341 192.67 52.341 17.541 0 7.595 1.544 192.67-52.341 10.021-2.918 19.212-7.613 27.274-13.845v167.733c.001 10.014-8.147 18.162-18.161 18.162z" /></svg>
        Post-production artist<a href="#"></a>
       </div>
       <div class="info-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.889 503.889" fill="currentColor">
         <path d="M453.727 114.266H345.151V70.515c0-20.832-16.948-37.779-37.78-37.779H196.517c-20.832 0-37.78 16.947-37.78 37.779v43.751H50.162C22.502 114.266 0 136.769 0 164.428v256.563c0 27.659 22.502 50.161 50.162 50.161h403.565c27.659 0 50.162-22.502 50.162-50.161V164.428c0-27.659-22.503-50.162-50.162-50.162zm-262.99-43.751a5.786 5.786 0 015.78-5.779h110.854a5.786 5.786 0 015.78 5.779v43.751H190.737zM32 164.428c0-10.015 8.147-18.162 18.162-18.162h403.565c10.014 0 18.162 8.147 18.162 18.162v23.681c0 22.212-14.894 42.061-36.22 48.27l-167.345 48.723a58.482 58.482 0 01-32.76 0L68.22 236.378C46.894 230.169 32 210.321 32 188.109zm421.727 274.725H50.162c-10.014 0-18.162-8.147-18.162-18.161V253.258c8.063 6.232 17.254 10.927 27.274 13.845 184.859 53.822 175.358 52.341 192.67 52.341 17.541 0 7.595 1.544 192.67-52.341 10.021-2.918 19.212-7.613 27.274-13.845v167.733c.001 10.014-8.147 18.162-18.161 18.162z" /></svg>
        Web Developer<a href="#"></a>
       </div>
       <div class="info-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.889 503.889" fill="currentColor">
         <path d="M453.727 114.266H345.151V70.515c0-20.832-16.948-37.779-37.78-37.779H196.517c-20.832 0-37.78 16.947-37.78 37.779v43.751H50.162C22.502 114.266 0 136.769 0 164.428v256.563c0 27.659 22.502 50.161 50.162 50.161h403.565c27.659 0 50.162-22.502 50.162-50.161V164.428c0-27.659-22.503-50.162-50.162-50.162zm-262.99-43.751a5.786 5.786 0 015.78-5.779h110.854a5.786 5.786 0 015.78 5.779v43.751H190.737zM32 164.428c0-10.015 8.147-18.162 18.162-18.162h403.565c10.014 0 18.162 8.147 18.162 18.162v23.681c0 22.212-14.894 42.061-36.22 48.27l-167.345 48.723a58.482 58.482 0 01-32.76 0L68.22 236.378C46.894 230.169 32 210.321 32 188.109zm421.727 274.725H50.162c-10.014 0-18.162-8.147-18.162-18.161V253.258c8.063 6.232 17.254 10.927 27.274 13.845 184.859 53.822 175.358 52.341 192.67 52.341 17.541 0 7.595 1.544 192.67-52.341 10.021-2.918 19.212-7.613 27.274-13.845v167.733c.001 10.014-8.147 18.162-18.161 18.162z" /></svg>
        Founder<a href="#">Snaproll Agency</a>
       </div>
       <div class="info-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.889 503.889" fill="currentColor">
         <path d="M453.727 114.266H345.151V70.515c0-20.832-16.948-37.779-37.78-37.779H196.517c-20.832 0-37.78 16.947-37.78 37.779v43.751H50.162C22.502 114.266 0 136.769 0 164.428v256.563c0 27.659 22.502 50.161 50.162 50.161h403.565c27.659 0 50.162-22.502 50.162-50.161V164.428c0-27.659-22.503-50.162-50.162-50.162zm-262.99-43.751a5.786 5.786 0 015.78-5.779h110.854a5.786 5.786 0 015.78 5.779v43.751H190.737zM32 164.428c0-10.015 8.147-18.162 18.162-18.162h403.565c10.014 0 18.162 8.147 18.162 18.162v23.681c0 22.212-14.894 42.061-36.22 48.27l-167.345 48.723a58.482 58.482 0 01-32.76 0L68.22 236.378C46.894 230.169 32 210.321 32 188.109zm421.727 274.725H50.162c-10.014 0-18.162-8.147-18.162-18.161V253.258c8.063 6.232 17.254 10.927 27.274 13.845 184.859 53.822 175.358 52.341 192.67 52.341 17.541 0 7.595 1.544 192.67-52.341 10.021-2.918 19.212-7.613 27.274-13.845v167.733c.001 10.014-8.147 18.162-18.161 18.162z" /></svg>
        Penetration Tester<a href="#"></a>
       </div>
       <div class="info-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 503.889 503.889" fill="currentColor">
         <path d="M453.727 114.266H345.151V70.515c0-20.832-16.948-37.779-37.78-37.779H196.517c-20.832 0-37.78 16.947-37.78 37.779v43.751H50.162C22.502 114.266 0 136.769 0 164.428v256.563c0 27.659 22.502 50.161 50.162 50.161h403.565c27.659 0 50.162-22.502 50.162-50.161V164.428c0-27.659-22.503-50.162-50.162-50.162zm-262.99-43.751a5.786 5.786 0 015.78-5.779h110.854a5.786 5.786 0 015.78 5.779v43.751H190.737zM32 164.428c0-10.015 8.147-18.162 18.162-18.162h403.565c10.014 0 18.162 8.147 18.162 18.162v23.681c0 22.212-14.894 42.061-36.22 48.27l-167.345 48.723a58.482 58.482 0 01-32.76 0L68.22 236.378C46.894 230.169 32 210.321 32 188.109zm421.727 274.725H50.162c-10.014 0-18.162-8.147-18.162-18.161V253.258c8.063 6.232 17.254 10.927 27.274 13.845 184.859 53.822 175.358 52.341 192.67 52.341 17.541 0 7.595 1.544 192.67-52.341 10.021-2.918 19.212-7.613 27.274-13.845v167.733c.001 10.014-8.147 18.162-18.161 18.162z" /></svg>
        Cybersecurity Analyst<a href="#"></a>
       </div>
       <div class="info-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
         <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
         <path d="M9 22V12h6v10" />
        </svg>
        Live in <a href="#">Los Angeles, CA</a>
       </div>
      </div>
     </div>
     <br>
     <div class="intro box">
      <div class="intro-title">
       Evnts I'm attending
       <button class="intro-menu"></button>
      </div>
      <div class="event-wrapper">
       <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="event-img" />
       <div class="event-date">
        <div class="event-month">Jan</div>
        <div class="event-day">01</div>
       </div>
       <div class="event-title">Winter Wonderland</div>
       <div class="event-subtitle">01st Jan, 2019 07:00AM</div>
      </div>
      </div>
      </div>
    <div class="timeline-right">
     <div class="status box">
      <div class="status-menu">
       <a class="status-menu-item active" href="#">Status</a>
       <a class="status-menu-item" href="#">Photos</a>
       <a class="status-menu-item" href="#">Videos</a>
      </div>
      <div class="status-main">
       <img src="https://images.genius.com/2326b69829d58232a2521f09333da1b3.1000x1000x1.jpg" class="status-img">
       <textarea class="status-textarea" placeholder="Write something to Sofia Boho..."></textarea>
      </div>
      <div class="status-actions">
       <a href="#" class="status-action">
        <svg viewBox="-42 0 512 512" xmlns="http://www.w3.org/2000/svg">
         <path d="M333.7 123.3c0 33.9-12.2 63.2-36.2 87.2-24 24-53.3 36.1-87.1 36.1h-.1c-33.9 0-63.2-12.1-87.1-36.1-24-24-36.2-53.3-36.2-87.2 0-33.9 12.2-63.2 36.2-87.2 24-24 53.2-36 87-36.1h.2c33.8 0 63.2 12.2 87.1 36.1 24 24 36.2 53.3 36.2 87.2zm0 0" fill="#ffbb85" />
         <path d="M427.2 424c0 26.7-8.5 48.3-25.3 64.3-16.5 15.7-38.4 23.7-65 23.7H90.2c-26.6 0-48.5-8-65-23.7C8.5 472.3 0 450.7 0 423.9c0-10.2.3-20.4 1-30.2a302.7 302.7 0 0112.1-64.9c3.3-10.3 7.8-20.5 13.4-30.3 5.8-10.2 12.5-19 20.1-26.3a89 89 0 0129-18.2c11.2-4.4 23.7-6.7 37-6.7 5.2 0 10.3 2.2 20 8.5l21 13.5c6.6 4.3 15.7 8.3 27 11.9a107.7 107.7 0 0033 5.3c11 0 22-1.8 33-5.3 11.2-3.6 20.3-7.6 27-12l21-13.4c9.7-6.3 14.7-8.5 20-8.5 13.3 0 25.7 2.3 37 6.7a89 89 0 0128.9 18.2c7.6 7.3 14.4 16.1 20.2 26.3 5.5 9.8 10 20 13.3 30.3a305.5 305.5 0 0112.1 64.9c.7 9.8 1 20 1 30.2zm0 0" fill="#6aa9ff" />
         <path d="M210.4 246.6h-.1V0c34 0 63.3 12.2 87.2 36.1 24 24 36.2 53.3 36.2 87.2 0 33.9-12.2 63.2-36.2 87.2-24 24-53.3 36.1-87.1 36.1zm0 0" fill="#f5a86c" />
         <path d="M427.2 424c0 26.7-8.5 48.3-25.3 64.3-16.5 15.7-38.4 23.7-65 23.7H210.2V286.5h3.3c11 0 22-1.8 33-5.3 11.2-3.6 20.3-7.6 27-12l21-13.4c9.7-6.3 14.7-8.5 20-8.5 13.3 0 25.7 2.3 37 6.7a89 89 0 0128.9 18.2c7.6 7.3 14.4 16.1 20.2 26.3 5.5 9.8 10 20 13.3 30.3a305.5 305.5 0 0112.1 64.9c.7 9.8 1 20 1 30.2zm0 0" fill="#2682ff" />
        </svg>
        People
       </a>
       <a href="#" class="status-action">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
         <path d="M87.084 192c-.456-5.272-.688-10.6-.688-16C86.404 78.8 162.34 0 256.004 0s169.6 78.8 169.6 176c0 5.392-.232 10.728-.688 16h.688c0 96.184-169.6 320-169.6 320s-169.6-223.288-169.6-320h.68zm168.92 32c36.392 1.024 66.744-27.608 67.84-64-1.096-36.392-31.448-65.024-67.84-64-36.392-1.024-66.744 27.608-67.84 64 1.096 36.392 31.448 65.024 67.84 64z" fill="#e21b1b" />
        </svg>
        Check in
       </a>
       <a href="#" class="status-action">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
         <circle cx="256" cy="256" r="256" fill="#ffca28" />
         <g fill="#6d4c41">
          <path d="M399.68 208.32c-8.832 0-16-7.168-16-16 0-17.632-14.336-32-32-32s-32 14.368-32 32c0 8.832-7.168 16-16 16s-16-7.168-16-16c0-35.296 28.704-64 64-64s64 28.704 64 64c0 8.864-7.168 16-16 16zM207.68 208.32c-8.832 0-16-7.168-16-16 0-17.632-14.368-32-32-32s-32 14.368-32 32c0 8.832-7.168 16-16 16s-16-7.168-16-16c0-35.296 28.704-64 64-64s64 28.704 64 64c0 8.864-7.168 16-16 16z" />
         </g>
         <path d="M437.696 294.688c-3.04-4-7.744-6.368-12.736-6.368H86.4c-5.024 0-9.728 2.336-12.736 6.336-3.072 4.032-4.032 9.184-2.688 14.016C94.112 390.88 170.08 448.32 255.648 448.32s161.536-57.44 184.672-139.648c1.376-4.832.416-9.984-2.624-13.984z" fill="#fafafa" />
        </svg>
        Mood
       </a>
       <button class="status-share">Share</button>
      </div>
     </div>
     <div class="album box">
      <div class="status-main">
       <img src="https://images.genius.com/2326b69829d58232a2521f09333da1b3.1000x1000x1.jpg" class="status-img" />
       <div class="album-detail">
        <div class="album-title"><strong>Quan Ha</strong> create new <span>album</span></div>
        <div class="album-date">6 hours ago</div>
       </div>
       <button class="intro-menu"></button>
      </div>
      <div class="album-content">When the bass drops, so do my problems.
       <div class="album-photos">
        <img src="https://images.unsplash.com/photo-1508179719682-dbc62681c355?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2378&q=80" alt="" class="album-photo" />
        <div class="album-right">
         <img src="https://images.unsplash.com/photo-1502872364588-894d7d6ddfab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="" class="album-photo" />
         <img src="https://images.unsplash.com/photo-1566737236500-c8ac43014a67?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="" class="album-photo" />
        </div>
       </div>
      </div>
      <div class="album-actions">
       <a href="#" class="album-action">
        <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
         <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z" />
        </svg>
        87
       </a>
       <a href="#" class="album-action">
        <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1" viewBox="0 0 24 24">
         <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
        </svg>
        20
       </a>
       <a href="#" class="album-action">
        <svg stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1" viewBox="0 0 24 24">
         <path d="M17 1l4 4-4 4" />
         <path d="M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4" />
         <path d="M21 13v2a4 4 0 01-4 4H3" />
        </svg>
        13
       </a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>