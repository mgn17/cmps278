<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Player</title>
    <link rel="stylesheet" href="./style/player.css?v=<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="player.js"></script>
</head>

<body class="bg-dark">



    <div id="structure">
        <div id="leftside">
        <div id="player">
            <iframe id="video" frameborder="0" allowfullscreen src=""></iframe>
        </div>
        <br>
        <div class="vidinfo">
            <div>
                <h1 id="videotitle">Video Title</h1>
                <label><span id="views">69</span> views - <span id="uploaddate">12 December 2020</span></label>
            </div>
            <div class="specvidinfo">
                <button class="uvdv" id="upvote" name="upvote"><i class="fa fa-thumbs-up" style="font-size: 25px"></i></button>
                <label id="upvotes">420</label>
                &nbsp;
                <button class="uvdv" id="downvote" name="downvote"><i class="fa fa-thumbs-down" style="font-size: 25px"></i></button>
                <label id="downvotes">69</label>
                &nbsp;
                <button id="flag" name="flag"><i class="fa fa-flag"></i> Flag</button>
                &nbsp;
                <button id="addwatchlater" name="addwatchlater"><i class="fa fa-plus"></i> Watch Later</button>
            </div>
        </div>
        <hr>
        <div class="uploader">
            <div class="prof">
                <img id="profilepic" src="http://i3.ytimg.com/vi/XsBXA3SK0Zo/hqdefault.jpg">
                <div class="profinfo">
                    <h3 id="username" name="username">User Name</h3>
                </div>
            </div>
            <div class="subs">
                <button id="subscribe" name="subscribe">Subscribe</button>
                <br>
                <label><span id="subcribers">1230239</span> subscribers</label>
            </div>
        </div>
        <br>
        <div id="descdiv" class="bg-dark">
            <textarea id="description" name="description" readonly>Random description</textarea>
        </div>
        <hr>
        <br>
        <div id="comments">
            
        </div>
    </div>
    <div id="rightside" style="margin-top: 10%">
        <h2>Recommended</h2>
        <div id="recommended">

        </div>
    </div>

        <script>
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const title = urlParams.get('title');
            document.getElementById("video").src="./videos/"+title+".mp4"
        </script>
</body>
</html>