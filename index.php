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
    <link rel="stylesheet" href="assets/css/main.css">
        <!-- ************************* JQuery *************************-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
<?php
require "header.php";
?>
    <div id="app">
        <button class="reload" type="button" @click="reload()" :class="[bg(), pattern()]" style="display:inline-block"></button>
        <div class="quote">
            <template v-for="(word, index) in words">
                <div class="word" :key="`words_${index}`" :class="word">
                    <div class="letter" v-for="(letter, index) in word" :key="`letter_${index}`" :class="[rotate(), bg(), pattern()]" :data-letter="letter">{{ letter }}</div>
                    <span class="space" v-if="index !== words.length - 1">&nbsp;</span>
                    </div>
                    </template>
                    </div>
                    </div>
    <!-- ************************* JS Files ************************* -->
    <script src="/assets/js/main.js"></script>
</body>
</html>