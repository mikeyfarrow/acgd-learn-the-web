
<!DOCTYPE html>
<html lang="en-ca">
<head>
  
<meta charset="utf-8">
<title><?= $course_name ?> solutions · Learn the Web</title>
<meta name="description" content="Solutions to all the assignments from the <?= $course_name ?> course. They are password protected and only available for teachers and TAs.">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="/fonts/alegreyasans-regular.woff" rel="preload" as="font">
<link href="/fonts/alegreyasans-italic.woff" rel="preload" as="font">
<link href="/fonts/alegreyasans-bold.woff" rel="preload" as="font">
<link href="/fonts/sourcecodepro-regular.woff" rel="preload" as="font">
<link href="/fonts/sourcecodepro-bold.woff" rel="preload" as="font">
<link href="/css/main.min.css?v=92" rel="stylesheet">
<meta name="application-name" content="Learn the Web">
<link rel="apple-touch-icon-precomposed" href="/favicon-152.png">
<meta name="msapplication-TileImage" content="/favicon-144.png">
<meta name="msapplication-TileColor" content="#00deae">
<link rel="profile" href="http://osprotocol.com">
<meta property="os:repo" content="https://github.com/acgd-learn-the-web">
<meta property="os:rcs_type" content="git">
<meta property="os:src" content="git@github.com:acgd-learn-the-web/topics.git">
<meta property="os:issue" content="https://github.com/acgd-learn-the-web/topics/issues">

  
  <link href="/css/main-topics.min.css" rel="stylesheet">

</head>
<body >

  <svg hidden>
  <symbol id="icon-nav" viewBox="0 0 256 256">
    <path d="M8.5 27h239v35.7H8.5V27zm0 83.6h239v35.8H8.5v-35.8zm0 83.6h239V230H8.5v-35.8z"/>
  </symbol>
  <symbol id="icon-activities" viewBox="0 0 256 256">
    <path d="M128 10.3A117.7 117.7 0 1 0 245.7 128 117.7 117.7 0 0 0 128 10.3zm0 210.2a92.5 92.5 0 1 1 92.5-92.5 92.5 92.5 0 0 1-92.5 92.5z"/>
    <path d="M178.3 75a79.6 79.6 0 0 0-11.2 1.2q-7 1.2-10 3.7t-7 6q-4 4.2-13 17.3a290.3 290.3 0 0 0-16.3 26.3Q113 143 108 154a39.5 39.5 0 0 0-10-10q-5.4-4-10-4t-10 4q-5.7 4-5.7 9.5 0 3.7 5 9A135.2 135.2 0 0 1 90 179a69.5 69.5 0 0 0 5.3 7.7 9.6 9.6 0 0 0 2.7 1.6q1.7.8 8 .8 7.7 0 10.3-1a12 12 0 0 0 3.7-3q1.2-2 5.5-12.2a281.7 281.7 0 0 1 24.3-46.6q15.3-24 29.5-37a29.6 29.6 0 0 0 4-4.3 6 6 0 0 0 .8-3.3 5.4 5.4 0 0 0-1-4 5.7 5.7 0 0 0-4-1.6z"/>
  </symbol>
  <symbol id="icon-courses" viewBox="0 0 256 256">
    <circle cx="44.4" cy="40.4" r="33.4"/>
    <path fill="none" stroke-width="32" d="M116.4 40.4H229" stroke-linecap="round" stroke-linejoin="round"/>
    <circle cx="44.4" cy="128" r="33.4"/>
    <path fill="none" stroke-width="32" d="M116.4 128H229" stroke-linecap="round" stroke-linejoin="round"/>
    <circle cx="44.4" cy="215.6" r="33.4"/>
    <path fill="none" stroke-width="32" d="M116.4 215.6H229" stroke-linecap="round" stroke-linejoin="round"/>
  </symbol>
  <symbol id="icon-left" viewBox="0 0 50 100">
    <path fill="none" stroke-width="12" stroke-miterlimit="10" d="M41.7 82.6L8.3 49.3l32-32" stroke-linecap="round" stroke-linejoin="round"/>
  </symbol>
  <symbol id="icon-right" viewBox="0 0 50 100">
    <path fill="none" stroke-width="12" stroke-miterlimit="10" d="M8.3 82.6l33.4-33.3-32-32" stroke-linecap="round" stroke-linejoin="round"/>
  </symbol>
  <symbol id="icon-down" viewBox="0 0 100 50">
    <path fill="none" stroke-width="12" stroke-miterlimit="10" d="M17.4 8.3l33.3 33.4 32-32" stroke-linecap="round" stroke-linejoin="round"/>
  </symbol>
  <symbol id="icon-play" viewBox="0 0 256 190">
    <path d="M249.5 45.4s-2.4-17-10-24.6c-9.3-10-20-10-24.7-10.5C180 7.8 128 7.8 128 7.8s-52.2 0-87 2.5c-4.7.6-15.3.6-24.7 10.5-7.4 7.5-10 24.6-10 24.6S4 65.4 4 85.6v18.8c0 20 2.5 40 2.5 40s2.4 17.2 10 24.7c9.3 10 21.7 9.8 27.2 10.8 19.8 2 84.3 2.5 84.3 2.5s52 0 86.8-2.6c4.8-.6 15.4-.6 24.8-10.5 7.4-7.4 10-24.5 10-24.5s2.4-20 2.4-40v-19c0-20-2.5-40-2.5-40zm-147 81.8V57.5l67 35-67 34.7z"/>
  </symbol>
  <symbol id="icon-download" viewBox="0 0 256 256">
    <path d="M234.3 1H21.7C10.3 1 1 10.3 1 21.7v212.5c0 11.5 9.3 20.7 20.7 20.7h212.5c11.5 0 20.7-9.6 20.7-21V21.7C255 10.3 245.4 1 234 1zM128 220.7L48.4 123H88V48h79v75h40.6L128 220.7z"/>
  </symbol>
  <symbol id="icon-github" viewBox="0 0 256 256">
    <path d="M213.7 117c2-8 2.5-17.2 2.5-27.3 0-16-6-28.7-15.7-38.4 1.7-5.5 4-17.6-2.3-33.2 0 0-11-3-36 14-9.6-2.3-20-3.5-30.4-3.5-11.4 0-23 1.5-33.7 4.4-25-17.5-37-14-37-14-7 18.3-2 32-1 35.3-8.3 9.6-14 21.5-14 36 0 10.5 1 19.8 4 28 0 .6 4.4 10 4.7 10.4l1.8 2.6c9.4 14 26 23 53.8 26-4.2 2.4-8.6 7.3-10.4 16-6 3-24.7 9.4-35.8-9.8 0 0-6.2-11.4-18.2-12.3 0 0-11.4-.3-.6 7 0 0 8.3 4 13.6 17.5 0 0 6 23.4 41 16v24s-1 8.7-9 11.5c0 0-5 3 0 5 0 0 21 2 21-16v-26.5s0-10.5 6-14V219s-.8 10.2-6 14.2c0 0-4 6.5 4 4.7 0 0 14.7-2 15.4-20v-43h3.3l.4 43.2c.5 17.5 15.5 19.4 15.5 19.4 8 1.8 4.5-4.7 4.5-4.7-5.3-4-5.5-14.5-5.5-14.5v-43c6 4 5 13.7 5 13.7V216c0 17.8 21.2 16 21.2 16 5-1.7.3-5 .3-5-8-2.8-8.5-11.3-8.5-11.3V181c0-13.5-6-20.6-11.4-24.4 31-3 46.7-12.8 54-28 .7-.5 4-10.8 4.4-11.6zm-82 33.6c-35.3 0-64-5.3-64-39.4 0-8.2 4-15.8 11-22 11.5-10.6 31-5 53-5s41.4-5.6 53 4.8c7 6.3 11 14 11 22.2 0 38.4-28.7 39.4-64 39.4z"/>
    <path d="M97 94c-7 0-13 8.6-13 19 0 10.7 6 19.3 13.3 19.3s13.4-8.6 13.4-19.2c0-10-6-19-13.3-19zm71.5 0c-7.3 0-13.3 8.6-13.3 19 0 10.7 6 19.3 13.3 19.3 7.3 0 13.3-8.6 13.3-19.2 0-10-6-19-13.3-19z"/>
  </symbol>
  <symbol id="icon-bug" viewBox="0 0 256 256">
    <path d="M47.6 84L31 67.5c-3-3-8-3-11.2 0-3 3.2-3 8.2 0 11.3l19 17.8c1.4 1.5 3.4 1 5.5 1h15.4c-11 14-18.2 30.4-20.8 47H12c-4.4 0-8 3.8-8 8.2 0 4.4 3.6 8.3 8 8.3h25.7c0 14 3.6 28 9.7 39h-5.7c-2 0-4 1-5.6 3l-18 19c-3 3-3 8 0 11.4 1.7 1.5 3.8 2.4 5.8 2.4s4-.8 5.6-2.3L45 216h12.8c15.6 19.4 40 32 64.8 33.3V84h-75zM244 144.6h-27.4c-3.4-16.5-12.2-33-22.5-46.8h18c2 0 4 .4 6-1l19-18.5c3-3 3-7.8 0-11-3-3-8-3-11 0L209 84h-75v165.3c25-1.6 49-16.6 64.4-33h13L228 233c1.4 1 3.5 2 5.5 2s4-1 5.8-2.8c3-3.2 3-8.2 0-11.3l-19-19.6c-1.4-1.5-3.4-2.7-5.5-2.7h-6c6-11 9.6-24.8 9.7-38.5h26c4.3 0 8-4 8-8.4s-3.8-8-8-8zM77 73h102c0-19.3-9.6-33.8-24-42.8l10.4-10c3-3.2 3-8 0-11.2-3-3-8-3-11.2 0l-15 15c-3.6-.7-7.4-1.2-11.3-1.2s-8 .5-12 1.3L101 9c-3-3-8-3-11 0-3 3.7-3 8.7 0 11.8l10.3 10c-13.7 8.4-23 23-23 42.2z"/>
  </symbol>
  <symbol id="icon-steps" viewBox="0 0 256 256">
    <circle cx="41.8" cy="63.2" r="24.7"/>
    <path fill="none" stroke-width="17" stroke-miterlimit="10" d="M87.7 63.2H239" stroke-linecap="round" stroke-linejoin="round"/>
    <circle cx="41.8" cy="128" r="24.7"/>
    <path fill="none" stroke-width="17" stroke-miterlimit="10" d="M87.7 128H239" stroke-linecap="round" stroke-linejoin="round"/>
    <circle cx="41.8" cy="192.8" r="24.7"/>
    <path fill="none" stroke-width="17" stroke-miterlimit="10" d="M87.7 192.8H239" stroke-linecap="round" stroke-linejoin="round"/>
  </symbol>
  <symbol id="icon-victory" viewBox="0 0 256 256">
    <path fill="none" stroke-width="17" d="M95 164.8c6-12.5 13-26 21.2-41s17.5-29.8 28-44.6c10.3-14.8 18-24.6 22.6-29.5 4.8-4.8 8.8-8.7 12-11.5 3.4-2.8 9.2-5 17.6-6.2 8.4-1.3 14.7-2 19-2 3 0 5.3 1 7 2.6 2 1.8 2.8 4 2.8 7 0 2-.5 4-1.6 5.6-1 1.6-3.3 4-6.6 7-16 14.8-32.7 35.8-50 63-17.4 27.4-31.2 53.8-41.4 79.4-4.8 11.7-8 18.6-9.3 20.6-1.4 2-3.5 4-6.4 5.7-3 1.7-8.8 2.5-17.7 2.5-7 0-11.5-.4-13.4-1.3s-3.6-1.8-4.6-2.7c-1-1-4-5.2-9-12.7-5-8-12.6-17.2-22.3-28-5.5-6.2-8.3-11.4-8.3-15.5 0-6 3.2-11.3 9.6-15.8 6.4-4.5 12-6.7 17-6.7 5.3 0 11 2.2 17 6.5 6.3 4.4 11.8 10.2 16.7 17.5z" stroke-linecap="round" stroke-linejoin="round"/>
  </symbol>
  <symbol id="icon-folder" viewBox="0 0 256 256">
    <rect width="232" height="168" x="12" y="56" fill="#00675a" rx="12" ry="12"/>
    <rect width="122" height="35" x="34" y="24" fill="#00675a" rx="24" ry="24"/>
  </symbol>
  <symbol id="icon-file" viewBox="0 0 256 256">
    <path fill="#fff" d="M203.7 222.7h-153V30.3h96l57 47v145.4"/>
    <path fill="#00675a" d="M47.6 240A13.3 13.3 0 0 1 34 226.4V29.6A13.3 13.3 0 0 1 47.6 16h110.8a7.3 7.3 0 0 1 2.8.6l1.4.6h.2l1.5 1 .4.2 1.3 1.2 51.8 51.8a14 14 0 0 1 4.4 10.3 7.2 7.2 0 0 1-.2 1.7v143a13.3 13.3 0 0 1-13.6 13.6zM194 212V96h-37.8A14.4 14.4 0 0 1 142 81.8V44H62v168z"/>
  </symbol>
  <symbol id="icon-help" viewBox="0 0 256 256">
    <path d="M128 4a124 124 0 1 0 124 124A124 124 0 0 0 128 4zm3.6 206q-7.5 7.5-19.5 7.5-9.5 0-14.5-5t-5-14q0-12.8 7.5-20.5t19.7-7.7q9.5 0 14.4 5t5 14.2q0 12.8-7.3 20.4zM180 97.5a36.2 36.2 0 0 1-7 11 82.4 82.4 0 0 1-13.4 12q-8.4 6-21 14l-.7 1.3-.7 16.2-2.4 3.3-28.5 4.7-3.3-2-1.6-31.2 1.2-3.6 23-11q12.7-6.5 12.6-14.8t-9-12Q121 81 104 80l-2.8-4.2 13-28 4.3-2a112.3 112.3 0 0 1 25.7 3.6 74 74 0 0 1 20 8.6 42.8 42.8 0 0 1 13.2 12.5A27.8 27.8 0 0 1 182 86a33.2 33.2 0 0 1-2 11.6z"/>
  </symbol>
  <symbol id="icon-info" viewBox="0 0 256 256">
   <circle cx="128" cy="128" r="124" fill="#333"/>
   <path fill="#fff" d="M99.8 188.6q12-.8 12-12.5V140q0-7.4-2-9.8t-8.1-2.4l-2.7.4-1.9.2 1.7-17.5q9.5-1.1 18.7-2.4l16.6-2.6 16.5-2.7 2.7 4.6q-5.1 9.5-5.1 73.4 0 3.6 1.2 5t4.1 1.4h1.5l1.7-.2 1.7-.2.6 1.1-2.5 17.9-10.6-.4-9.4-.3H128q-4.9 0-10.1.3l-9.9.7-10.6 1.1zm30.8-97.9q-9.7 0-14.8-5.2t-5.1-14.9q0-10.1 5.7-16t15.8-5.9q9.5 0 14.6 5.3t5.1 14.8q0 10.1-5.7 16t-15.6 5.9z"/>
  </symbol>
  <symbol id="icon-info-close" viewBox="0 0 256 256">
   <circle cx="128" cy="128" r="124" fill="#333"/>
   <path fill="#fff" d="M164.9 185.7l-10.4.2-14.1.5-17.9.5-1.2-1.2 2.2-17.1q7.6-.2 7.6-3.7a4.6 4.6 0 0 0-.4-1.8 25.1 25.1 0 0 0-1.6-2.8l-10.8-14.2q-3.4 4.4-6.9 9.2T108 163q0 5.4 7.1 5.4l1 2-2 16.4-12-.5-9.4-.4H78.2l-7.6.4-8.3.5-1-2.4 2.2-16.4q2.9-1.2 7.4-5.9T84 146.6l18.1-22L88 105.8Q82.4 98 76.8 95.2a50 50 0 0 0-12.6-4.3l-.7-1.2 1.7-19.6 8.3.2h37.1l11.6-.4 11.8-.7 1.2 2-1.7 18.1q-7.3 0-7.3 4.6a10.9 10.9 0 0 0 1.2 5.4 34.6 34.6 0 0 0 3.7 5.1l6.4 8.1 7.6-11 2.9-4.8a7.9 7.9 0 0 0 1.2-4 3 3 0 0 0-1.5-2.8q-1.5-.9-5.4-.9l-.5-1 1.5-17.6h34.9l7.7-.2 8.1-.5.7 1.5-1.2 19.1a148.9 148.9 0 0 0-12.5 8.4 41.9 41.9 0 0 0-9.1 9.5l-17.6 25.4L169 152a63 63 0 0 0 11.1 11.2 22.4 22.4 0 0 0 11.9 4.2l.7.7-2.7 18.1-10-.2h-15.1z"/>
  </symbol>
</svg>


  <div class="masthead-wrap pad-t-1-2 pad-b-1-2">
  <header class="masthead grid grid-middle wrapper gutter-1-2 pad-b-1-2" role="banner">
    <div class="unit [ xs-1 m-1-4 ]">
      <a class="logo link-box" href="/"><img class="img-flex" src="/images/logo.svg" alt="Learn the Web"></a>
    </div>
    
  </header>
</div>


<main class="relative" role="main">
  <div class="header">
    <div class="wrapper gutter-1-2 pad-b-1-2">
      <h1 class="push-1-4 yotta" tabindex="0"><?= $course_name ?> solutions</h1>
    </div>
  </div>
  <div class="header header--light">
    <div class="wrapper gutter-1-2 pad-b pad-t">
      <p class="mega push-0 max-length">Solutions to all the assignments from the <?= $course_name ?> course. They are password protected and only available for teachers and TAs.</p>
    </div>
  </div>

  <svg hidden>
  <symbol id="icon-topic-0" viewBox="0 0 256 256">
    <circle cx="128" cy="128" r="123.5" fill="#00675A"/>
    <path fill="#fff" d="M159.5 84c7 10.2 10.3 24.7 10.3 43.6 0 20-3.7 35.3-11.2 46-7.5 11-18.2 16.3-32 16.3-13 0-23-5.4-30-15.5-7-10-10.4-24.7-10.4-43.7 0-20 3.7-35.4 11.2-46 7.5-11 18.3-16.4 32.3-16.4 13 0 23 5 29.8 15.3zm-53 45c0 25 7.2 37.2 21.4 37.2 14 0 21-12 21-35.7 0-24.5-7-36.7-21.5-36.7-14 0-21 11.8-21 35.3z"/>
  </symbol>
  <symbol id="icon-topic-1" viewBox="0 0 256 256">
    <circle cx="128" cy="128" r="123.5" fill="#00675A"/>
    <path fill="#fff" d="M144 146.2l1.2 41.8h-27l1.3-39-.2-49.8-31 5.8-1.7-1.4V82.3l55-13.7 3.8 2.8-1.4 74.8z"/>
  </symbol>
  <symbol id="icon-topic-2" viewBox="0 0 256 256">
    <circle cx="128" cy="128" r="123.5" fill="#00675A"/>
    <path fill="#fff" d="M152 76.2c6.2 5 9.2 11.8 9.2 20.4 0 6-1.8 12.6-5.4 19.8-3.6 7.2-9.5 16-17.7 26.8l-16.2 23 .6.7h29l18.8-1.7 1.5 2.2-3 21.5-25-1h-47l-7.6.3-1.4-1V171l27-33.2c7.6-9.6 12.8-16.8 16-21.6 3-4.7 4.4-9 4.4-13.2 0-3.3-1-6-3.3-8.3-2-2.2-5.2-3.3-9.2-3.3-4.3 0-8.8 1.3-13.7 4-4.8 2.7-9.3 6.3-13.5 10.8h-3l-4.4-21c13.5-11 27.2-16.6 41-16.6 9.3 0 17 2.6 23 7.6z"/>
  </symbol>
  <symbol id="icon-topic-3" viewBox="0 0 256 256">
    <circle cx="128" cy="128" r="123.5" fill="#00675A"/>
    <path fill="#fff" d="M151 76c6.5 5 9.8 11.6 9.8 19.8 0 5.4-1.6 10.6-4.7 15.7-3 5-8 9.4-14.6 13v1c15.4 4.2 23 13 23 26.6 0 7.6-2 14-6.4 19.8-4.5 5.7-10.5 10-18.3 13.3-7.8 3-16.7 4.8-27 4.8-7.4 0-14.8-.7-22.2-2l-1.5-21 1.8-1.6c8 3 15.7 4.3 23 4.3 7.8 0 14-1.5 18.4-4.4 4.4-3 6.6-7 6.6-12.2 0-9-6.5-14-19.5-14.3h-14.5l-1.4-1.6.6-18.6 9-.2c5.5 0 10.3-1.6 14.5-4.7 4-3 6.2-7 6.2-11.8 0-3.7-1.3-6.6-3.8-8.5-2.7-2-6.3-3-10.8-3-7 0-15.3 3.2-24.7 9.5H92L87.8 80c11.5-7.8 24-11.6 37-11.6 10.8 0 19.5 2.4 26 7.5z"/>
  </symbol>
  <symbol id="icon-topic-4" viewBox="0 0 256 256">
    <circle cx="128" cy="128" r="123.5" fill="#00675A"/>
    <path fill="#fff" d="M154 159.6l1.2 26.3-1.4 2-21 1-1.3-1.8.6-28h-29.5l-17 .3-2-2.2v-17L130 70h24l-.6 68.7H169l1.7 2-1.5 18.8-15.5-.2zM132.5 139l-.2-38.6h-1.6L106.2 139h26.3z"/>
  </symbol>
  <symbol id="icon-topic-5" viewBox="0 0 256 256">
    <circle cx="128" cy="128" r="123.5" fill="#00675A"/>
    <path fill="#fff" d="M163.4 91.2l-2 1.8-17.4-2h-26.7l-.8 22.3 13.3 2.6c12 2 21 6 26.7 11 5.8 5 8.6 12 8.6 20s-2 15.4-6 22c-4 6-10 11-19 14.2-8 3.4-17 5-28 5-7 0-15-.7-23-2.3l-1-19 2-2c8 2 16 3 23 3 9 0 16-1.5 21-4.8s7.5-8 7.5-13.7c0-4-1.6-7.8-5-10-3.6-3-9-5-16.6-6l-20-4-2-2 .5-56.4 3-3 12 .7h32l20.2-1 1.5 2-2.7 20z"/>
  </symbol>
  <symbol id="icon-topic-6" viewBox="0 0 256 256">
    <circle cx="128" cy="128" r="123.5" fill="#00675A"/>
    <path fill="#fff" d="M160.5 125.4c5.8 6.6 8.7 15 8.7 25 0 7.2-1.6 14-4.8 20s-8 10.7-14.4 14.3c-6.4 3.5-14 5.3-23 5.3-13 0-23-4-30-12s-10.5-19-10.5-33c0-16.4 5-31.2 15-44.5s24.3-24 42.7-32h1.4L164 80v2.6C149.8 88 139 93.4 131.3 99c-7.7 5.7-13.2 12.4-16.4 20l1.4 2c6-3.7 12.6-5.6 20-5.6 10 0 18.2 3.2 24 9.8zM141 167.6c3-3.3 4.4-8 4.4-14 0-13-5.6-19.5-17-19.5-5.8 0-11.7 2.3-17.8 6.4v4c0 9.5 1.3 16.6 4 21.2 2.7 4.6 7.2 7 13.7 7 5.4 0 9.5-1.6 12.6-5z"/>
  </symbol>
  <symbol id="icon-topic-infinite" viewBox="0 0 256 256">
    <circle cx="128" cy="128" r="123.5" fill="#00675A"/>
    <path fill="#fff" d="M170.8 113.5c4.7 5.6 7 13 7 22.3 0 9.5-2.4 17-7 22-5 5.3-11 8-18.7 8-5 0-9-1.4-13-4-3-2.4-7-6.3-10-11.3-5 10.2-14 15.3-25 15.3-8 0-14-2.7-19-8.2-4-5.5-7-12.8-7-22 0-9.6 3-17 7-22.4 5-5.4 11-8 19-8 5 0 10 1.3 13 3.8 4 2.5 7 6.2 11 11 6-10 14-15 25-15 8 0 14.6 2.8 19.3 8.5zm-75 11.7c-2 2.3-3 5.7-3 10 0 4 1 7.3 3 9.6s5 3.5 8.3 3.5c4 0 7-1.3 10-4s5-6.5 7-11.4c-4-8-9-12-15-12-3.3 0-6.3 1-9 3zm46 1c-2.2 2.8-4.3 6.5-6.3 11.3 2 4 4.4 6.8 6.7 8.8 2.3 2 5.3 3 8.7 3 3 0 6-1.2 8-3.5s3-5.7 3-10c0-4.2-1-7.5-3-10-2-2.3-5-3.5-9-3.5s-7 1.3-9.6 4z"/>
  </symbol>
  <symbol id="icon-topic-star" viewBox="0 0 256 256">
    <circle cx="128" cy="128" r="123.5" fill="#00675A"/>
    <path fill="#fff" transform="scale(.6) translate(86 86)" d="M128 4.5l37 74.7 82.4 12-59.7 58.2 14 82-73.7-38.7-73.8 38.8 14-82L8.7 91l82.5-12"/>
  </symbol>
</svg>


<div class="wrapper gutter-1-2 pad-t pad-b-1-2">
  <?= $list ?>
</div>

</main>






  <div class="footer-wrap pad-t-1-2 pad-b-1-2">
    <footer class="footer grid wrapper gutter-1-2" role="contentinfo">
      <div class="unit [ xs-1 s-1 m-2-5 unit-push-m-3-5 l-2-5 ]">
        <ul class="list-group footer-links micro">
          <li>
            <a class="icon-link link-box link-box-no-mark" href="/get-help/" rel="external">
              <i class="icon i-18"><svg><use xlink:href="#icon-help"/></svg></i>
              <strong class="icon-label">Get help</strong>
            </a>
          </li>
          <li>
            <a class="icon-link link-box link-box-no-mark" href="/solutions/" rel="external">
              <i class="icon i-18"><svg><use xlink:href="#icon-victory"/></svg></i>
              <span class="icon-label">Solutions for teachers</span>
            </a>
          </li>
          <li class="push-1-2">
            <a class="icon-link link-box link-box-no-mark" href="/schedule/" rel="external">
              <i class="icon i-16"><svg><use xlink:href="#icon-courses"/></svg></i>
              <span class="icon-label">Term schedule</span>
            </a>
          </li>
        </ul>
        <ul class="list-group-inline footer-links micro">
          <li class="push-r-1-4">
            <a class="icon-link link-box link-box-no-mark" href="https://github.com/acgd-learn-the-web" rel="external">
              <i class="icon i-18"><svg><use xlink:href="#icon-github"/></svg></i>
              <span class="icon-label">GitHub</span>
            </a>
          </li>
          <li class="push-r-1-4">
            <a class="icon-link link-box link-box-no-mark" href="https://www.youtube.com/user/acinteractivedesign" rel="external">
              <i class="icon i-18"><svg><use xlink:href="#icon-play"/></svg></i>
              <span class="icon-label">YouTube</span>
            </a>
          </li>
          <li>
            <a class="icon-link link-box link-box-no-mark" href="https://github.com/acgd-learn-the-web/topics/issues" rel="external">
              <i class="icon i-18"><svg><use xlink:href="#icon-bug"/></svg></i>
              <span class="icon-label">Feedback</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="unit [ xs-1 s-1 m-3-5 unit-pull-m-2-5 l-3-5 ]">
        <small class="copyright micro">© Algonquin College Graphic Design — <a href="http://algonquindesign.ca/">algonquindesign.ca</a>.</small>
        <small class="copyright micro">All code for this website licensed under the <a href="https://github.com/acgd-learn-the-web/acgd-learn-the-web.github.io/blob/master/LICENSE" rel="license">MIT License</a>.</small>
        <small class="copyright micro">All tutorial code licensed under the <a href="https://github.com/acgd-learn-the-web/topics/blob/master/UNLICENSE" rel="license">Unlicense</a>.</small>
        <small class="copyright micro">All text, imagery, design, tutorials &amp; videos licensed under the <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/" rel="license">CC BY-NC-SA License</a>.</small>
        <small class="copyright micro push-1-4">Unless otherwise noted.</small>
        <p class="copyright micro push-0 italic">Last build — <a href="https://github.com/acgd-learn-the-web/topics/commits/master" rel="external">2017-06-29 18:26 UTC</a>.</p>
      </div>
    </footer>
  </div>

  <script>var slug = 'template.php';</script>
  <script>(function(){'use strict';var f=[];function g(a){f.push(a);1===f.length&&l()}function m(){for(;f.length;)f[0](),f.shift()}if(window.MutationObserver){var n=document.createElement("div");(new MutationObserver(m)).observe(n,{attributes:!0});var l=function(){n.setAttribute("x",0)}}else l=function(){setTimeout(m)};function p(a){this.a=q;this.b=void 0;this.f=[];var b=this;try{a(function(a){r(b,a)},function(a){t(b,a)})}catch(c){t(b,c)}}var q=2;function u(a){return new p(function(b,c){c(a)})}function v(a){return new p(function(b){b(a)})}
function r(a,b){if(a.a===q){if(b===a)throw new TypeError("Promise settled with itself.");var c=!1;try{var d=b&&b.then;if(null!==b&&"object"===typeof b&&"function"===typeof d){d.call(b,function(b){c||r(a,b);c=!0},function(b){c||t(a,b);c=!0});return}}catch(e){c||t(a,e);return}a.a=0;a.b=b;w(a)}}function t(a,b){if(a.a===q){if(b===a)throw new TypeError("Promise settled with itself.");a.a=1;a.b=b;w(a)}}
function w(a){g(function(){if(a.a!==q)for(;a.f.length;){var b=a.f.shift(),c=b[0],d=b[1],e=b[2],b=b[3];try{0===a.a?"function"===typeof c?e(c.call(void 0,a.b)):e(a.b):1===a.a&&("function"===typeof d?e(d.call(void 0,a.b)):b(a.b))}catch(h){b(h)}}})}p.prototype.g=function(a){return this.c(void 0,a)};p.prototype.c=function(a,b){var c=this;return new p(function(d,e){c.f.push([a,b,d,e]);w(c)})};
function x(a){return new p(function(b,c){function d(c){return function(d){h[c]=d;e+=1;e===a.length&&b(h)}}var e=0,h=[];0===a.length&&b(h);for(var k=0;k<a.length;k+=1)v(a[k]).c(d(k),c)})}function y(a){return new p(function(b,c){for(var d=0;d<a.length;d+=1)v(a[d]).c(b,c)})};window.Promise||(window.Promise=p,window.Promise.resolve=v,window.Promise.reject=u,window.Promise.race=y,window.Promise.all=x,window.Promise.prototype.then=p.prototype.c,window.Promise.prototype["catch"]=p.prototype.g);}());

(function(){'use strict';function h(a){document.body?a():document.addEventListener("DOMContentLoaded",a)};function v(a){this.a=document.createElement("div");this.a.setAttribute("aria-hidden","true");this.a.appendChild(document.createTextNode(a));this.b=document.createElement("span");this.c=document.createElement("span");this.h=document.createElement("span");this.g=document.createElement("span");this.f=-1;this.b.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";this.c.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";
this.g.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;";this.h.style.cssText="display:inline-block;width:200%;height:200%;font-size:16px;";this.b.appendChild(this.h);this.c.appendChild(this.g);this.a.appendChild(this.b);this.a.appendChild(this.c)}
function w(a,c,b){a.a.style.cssText="min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;left:-999px;white-space:nowrap;font-size:100px;font-family:"+c+";"+b}function x(a){var c=a.a.offsetWidth,b=c+100;a.g.style.width=b+"px";a.c.scrollLeft=b;a.b.scrollLeft=a.b.scrollWidth+100;return a.f!==c?(a.f=c,!0):!1}
function y(a,c){a.b.addEventListener("scroll",function(){x(a)&&null!==a.a.parentNode&&c(a.f)},!1);a.c.addEventListener("scroll",function(){x(a)&&null!==a.a.parentNode&&c(a.f)},!1);x(a)};function z(a,c){var b=c||{};this.family=a;this.style=b.style||"normal";this.variant=b.variant||"normal";this.weight=b.weight||"normal";this.stretch=b.stretch||"stretch";this.featureSettings=b.featureSettings||"normal"}var B=null;
z.prototype.a=function(a,c){var b=a||"BESbswy",C=c||3E3,k="font-style:"+this.style+";font-variant:"+this.variant+";font-weight:"+this.weight+";font-stretch:"+this.stretch+";font-feature-settings:"+this.featureSettings+";-moz-font-feature-settings:"+this.featureSettings+";-webkit-font-feature-settings:"+this.featureSettings+";",g=document.createElement("div"),l=new v(b),m=new v(b),n=new v(b),d=-1,e=-1,f=-1,q=-1,r=-1,t=-1,p=this;return new Promise(function(a,b){function c(){null!==g.parentNode&&g.parentNode.removeChild(g)}
function u(){if(-1!==d&&-1!==e||-1!==d&&-1!==f||-1!==e&&-1!==f)if(d===e||d===f||e===f){if(null===B){var b=/AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent);B=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))}B?d===q&&e===q&&f===q||d===r&&e===r&&f===r||d===t&&e===t&&f===t||(c(),a(p)):(c(),a(p))}}h(function(){function a(){if(Date.now()-D>=C)c(),b(p);else{var A=document.hidden;if(!0===A||void 0===A)d=l.a.offsetWidth,e=m.a.offsetWidth,f=n.a.offsetWidth,
u();setTimeout(a,50)}}var D=Date.now();w(l,"sans-serif",k);w(m,"serif",k);w(n,"monospace",k);g.appendChild(l.a);g.appendChild(m.a);g.appendChild(n.a);document.body.appendChild(g);q=l.a.offsetWidth;r=m.a.offsetWidth;t=n.a.offsetWidth;a();y(l,function(a){d=a;u()});w(l,'"'+p.family+'",sans-serif',k);y(m,function(a){e=a;u()});w(m,'"'+p.family+'",serif',k);y(n,function(a){f=a;u()});w(n,'"'+p.family+'",monospace',k)})})};window.FontFaceObserver=z;window.FontFaceObserver.prototype.check=z.prototype.a;}());
</script>
  <script>var alegreyaNormal,alegreyaItalic,alegreyaBold;sessionStorage.alegreyaLoaded?document.documentElement.className+=" alegreya-loaded":(alegreyaNormal=new FontFaceObserver("Alegreya Sans",{weight:"normal"}),alegreyaItalic=new FontFaceObserver("Alegreya Sans",{style:"italic"}),alegreyaBold=new FontFaceObserver("Alegreya Sans",{weight:"bold"}),Promise.all([alegreyaNormal.check(),alegreyaItalic.check(),alegreyaBold.check()]).then(function(){document.documentElement.className+=" alegreya-loaded",sessionStorage.alegreyaLoaded=!0}));</script>
  <script src="/js/common.min.js?v=92" async></script>
  
</body>
</html>