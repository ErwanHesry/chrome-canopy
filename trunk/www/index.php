<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>ArborFall</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script src="<?php require('../lib/combi_js.php'); ?>" type="application/javascript"></script>
</head>
<body>
    <div id="my_container" style="display: none;">
        <canvas id="my_canvas"></canvas>
        <div id="control">
            <div>
                <a id="tog_play" class="play" href="#" onclick="return toggle('play');">play</a>
            </div>
            <div>
                <a id="tog_flower" class="toggle" href="#" onclick="return toggle('flower');">bloom</a>
                <a id="tog_mutate" class="toggle" href="#" onclick="return toggle('mutate');">mutate</a>
            </div>
            <div>
                <a id="reset" href="#" onclick="return reset();">new</a>
            </div>
            <div class="left">
                <a id="tog_about" class="toggle" href="#" onclick="return toggle('about');">about</a>
            </div>
        </div>
    </div>
    <div id="about" style="display: none;">
        <div class="badge">
            <a href="http://chromeexperiments.com"><img src="img/badge.png" width="140" height="72" /></a>
        </div>
        <h1>ArborFall</h1>
        <p>
            ..is a fractal zoomer. Press play to start falling. Click to go faster. You'll need a web browser with a fast JavaScript engine like <a href="http://www.google.com/chrome">Google Chrome</a> or <a href="http://nightly.webkit.org/">WebKit Nightly</a>.
        </p>
        <ul>
            <li><span class="key">space / p</span> &mdash; play / pause</li>
            <li><span class="key">n</span> &mdash; make a new tree</li>
            <li><span class="key">m</span> &mdash; toggle mutuation</li>
            <li><span class="key">b</span> &mdash; toggle bloom</li>
            <li><span class="key">a</span> &mdash; show / hide this about box</li>
        </ul>
        <p>
            Designed by <a href="http://flickr.com/photos/onecm">Ryan Alexander</a>
        </p>
    </div>
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try { var pageTracker = _gat._getTracker("UA-575797-1");pageTracker._trackPageview(); } catch(err) {}
    </script>
</body>
</html>