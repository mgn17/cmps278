<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Youtube Clone</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

<?php
//
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
$count=0;
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Youtube_Simulator";
$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);
$videos=array();
if ($GLOBALS['conn']->connect_error) {
    die("Connection failed: " . $GLOBALS['conn']->connect_error);
}
$sql = "SELECT * FROM Video";
$result = $GLOBALS['conn']->query($sql);
$productCount = mysqli_num_rows($result);
if ($productCount > 0) {
    while($row = mysqli_fetch_array($result)){
        $thumbnail= $row["Thumbnail"];
        array_push($videos, $thumbnail);
    }
} else {
    $product_list = "No videos present";
}
?>



<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <div class="modal-content">
            <div class="modal-c-tabs">
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
                            Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i>
                            Register</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                        <form  style="height: 10%" action="authenticate.php" method="post" id="authUser">
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm mb-5">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="email" id="UserEmail" name="UserEmail" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="UserPass">Your email</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fa fa-lock prefix"></i>
                                    <input type="password" id="UserPass" name="UserPass" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="UserPass">Your password</label>
                                </div>
                                <input type="submit" value="Login" class="btn btn-info">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                    </div>
                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                        <form action="registration.php" method="post" id="register">
                            <div class="md-form form-sm mb-5" style="margin-left:5%">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="rEmail" name="rEmail" style="width: 90%" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="email">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-5" style="margin-left:5%">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="rPassword" name="rPassword" style="width: 90%"  class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="password">Your password</label>
                            </div>

                            <div class="md-form form-sm mb-4" style="margin-left:5%">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="rPassword2" name="rPassword2" style="width: 90%"  class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="password2">Repeat password</label>
                            </div>
                            <div class="md-form form-sm mb-4" style="margin-left:5%">
                                <i class="fa fa-calendar"></i>
                                <input type="number" id="Age" name="Age" style="width: 90%" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="age">Age</label>
                            </div>
                            <div class="md-form form-sm mb-4" style="margin-left:5%">
                                <input type="text" id="fName" name="fName" style="width: 90%"  class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="fName">First Name</label>
                            </div>
                            <div class="md-form form-sm mb-4" style="margin-left:5%">
                                <input type="text" id="lName" name="lName" style="width: 90%"  class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="lName">Last Name</label>
                            </div>
                            <div class="md-form form-sm mb-4" style="margin-left:5%">
                                <i class="fa fa-home"></i>
                                <input type="text" id="Address"  name="Address" style="width: 90%"  class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="Address">Address (Optional)</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <input type="submit" value="Register" class="btn btn-info" style="margin-bottom: 2%">
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom border-light" style="margin-bottom: 2%">
    <a class="navbar-brand" href="index.php">
        <img src="Images/logo_Dark.png" width="130" height="30" alt="Logo">
    </a>
    <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="history.php">History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="playlist.php">Playlists</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Watch later</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto" style="margin-right: 12%">
            <li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle fa fa-user bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" data-toggle="modal" data-target="#modalLRForm">Login</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div id="videos" class="grid-container" style="overflow: scroll; height: 800px; display: inline-grid; width: 100%;">

</div>




<footer class="page-footer bg-danger" style="height: 5%; margin-top: 1%; padding-top: 1%">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <form class="form-inline">
                    <input class="form-control form-control-sm mr-1 w-75" type="text" placeholder="Search Channels"
                           aria-label="Search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </form>
            </div>
            <div class="col-md-6 mb-4">
                <form class="input-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Sing up for Weekly News Letters"
                           aria-label="Your email">
                    <div class="input-group-append">
                        <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
                    </div>
                </form>

            </div>`
        </div>
        <div class="footer-copyright text-center py-3" >
            <span style="color: aliceblue; text-decoration: underline; margin-right: 1cm"> Project Made by Mark Nourallah </span>
            <img src="Images/logo_Dark.png" width="130" height="30" alt="Logo">
        </div>
    </div>
</footer>




<script>

    function getThumbnails(){
        <?php
        $game= Array();
        $g=Array();
        $sport=Array();
        $s=Array();
        $news=Array();
        $n=Array();
        $music=Array();
        $m=Array();
        $cinema=Array();
        $c=Array();
        $dir = new DirectoryIterator(dirname("videos/gaming/Man Child"));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                array_push($game,$fileinfo->getFilename());
            }
        }
        $dir = new DirectoryIterator(dirname("./videos/music/After Hours"));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                array_push($music,$fileinfo->getFilename());
            }
        }
        $dir = new DirectoryIterator(dirname("./videos/cinema/Sicario"));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                array_push($cinema,$fileinfo->getFilename());
            }
        }
        $dir = new DirectoryIterator(dirname("./videos/news/CNN"));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                array_push($news,$fileinfo->getFilename());
            }
        }
        $dir = new DirectoryIterator(dirname("./videos/sports/NFL"));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                array_push($sport,$fileinfo->getFilename());
            }
        }


        $dir = new DirectoryIterator(dirname("./Images/thumbnails/gaming/Cyber"));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                array_push($g,$fileinfo->getFilename());
            }
        }

        $dir = new DirectoryIterator(dirname("./Images/thumbnails/music/After hours"));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                array_push($m,$fileinfo->getFilename());
            }
        }
        $dir = new DirectoryIterator(dirname("./Images/thumbnails/cinema/theloosers"));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                array_push($c,$fileinfo->getFilename());
            }
        }
        $dir = new DirectoryIterator(dirname("./Images/thumbnails/news/CNN"));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                array_push($n,$fileinfo->getFilename());
            }
        }
        $dir = new DirectoryIterator(dirname("./Images/thumbnails/sports/mma"));
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                array_push($s,$fileinfo->getFilename());
            }
        }


        ?>
        let game= <?php echo(json_encode($game))?>;
        let music = <?php echo(json_encode($music))?>;
        let cinema = <?php echo(json_encode($cinema))?>;
        let news = <?php echo(json_encode($news))?>;
        let sport = <?php echo(json_encode($sport))?>;
        console.log(game, music, cinema, news, sport);
        let g= <?php echo(json_encode($g))?>;
        let cin= <?php echo(json_encode($c))?>;
        let n= <?php echo(json_encode($n))?>;
        let s= <?php echo(json_encode($s))?>;
        let m= <?php echo(json_encode($m))?>;

        let variables= <?php echo(json_encode($videos))?>;
        var count=0;
        let category=["Gaming", "Music","Cinema","News","Sports"];
        var cards=0;
        for (let i=0; i<5; i++){
            let a= document.createElement("div");
            a.id="row"+i;
            a.style.width="100%"
            a.style.margin="auto";
            a.style.marginLeft="4%";
            a.style.marginTop="3%";
            let sp= document.createElement("span")
            sp.innerHTML="Trending today in "+category[i];
            sp.style.color="white";
            sp.style.float="left";
            document.getElementById("videos").appendChild(sp);
            document.getElementById("videos").appendChild(a);
            for (let x=0; x<5; x++){
                let c= document.createElement("div");
                c.id="card"+(cards+x);
                c.className="card";
                c.style.width="14rem";
                c.style.float="left";
                c.style.marginRight="2%";
                c.style.marginBottom="0.9cm";
                document.getElementById("row"+i).appendChild(c);
                let thumbnail= document.createElement("img");
                if (i==0){
                    thumbnail.src="./Images/thumbnails/gaming/"+g[x];
                    thumbnail.title="gaming/"+g[x];
                }
                if (i==1){
                    thumbnail.src="./Images/thumbnails/music/"+m[x];
                    thumbnail.title="music/"+m[x];

                }
                if (i==2){
                    thumbnail.src="./Images/thumbnails/cinema/"+cin[x];
                    thumbnail.title="cinema/"+cin[x];

                }
                if (i==3){
                    thumbnail.src="./Images/thumbnails/news/"+n[x];
                    thumbnail.title="news/"+n[x];

                }
                if (i==4){
                    thumbnail.src="./Images/thumbnails/sports/"+s[x];
                    thumbnail.title="sports/"+s[x];

                }
                thumbnail.className="card-img-top";
                thumbnail.style.width="parent";
                thumbnail.style.height="160px";
                thumbnail.alt="Song Video";
                thumbnail.onclick= function(){
                    openPage(thumbnail.title);
                }


                document.getElementById("card"+(x+cards)).appendChild(thumbnail);
                let info= document.createElement("div");
                info.className="card-body bg-light";
                info.id="info"+(x+cards);
                document.getElementById("card"+(x+cards)).appendChild(info);
                let title= document.createElement("span");
                if (i==0){
                    title.innerHTML=game[x]
                }
                if (i==1){
                    title.innerHTML=music[x]
                }
                if (i==2){
                    title.innerHTML=cinema[x]
                }
                if (i==3){
                    title.innerHTML=news[x]
                }
                if (i==4){
                    title.innerHTML=sport[x]
                }
                count++;
                title.style.fontFamily="sans-serif";
                title.style.fontWeight="bolder";
                title.style.fontSize="14px";
                document.getElementById("info"+(x+cards)).appendChild(title);
                <?php $count++; ?>
            }
            cards+=5
        }


    }

    getThumbnails();

    function  openPage(x){
        var output = x.substr(0, x.lastIndexOf('.')) || x;
        window.open("player.php?title="+output);
    }


</script>



</body>

</html>