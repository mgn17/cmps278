<!DOCTYPE html>
<html>
    <head>
        <title>Playlist</title>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="playlist.js"></script>
    </head>
    <body class="bg-dark" style="font-family: Arial, Helvetica, sans-serif;">
    <script>
<!--        --><?php
//        $servername = "localhost";
//        $username = "root";
//        $password = "root";
//        $dbname = "Youtube_Simulator";
//        $GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);
//        if ($GLOBALS['conn']->connect_error) {
//            die("Connection failed: " . $GLOBALS['conn']->connect_error);
//        }
//
//        $sql = "SELECT Video_ID FROM History WHERE User_ID=1 ";
//        $result = $GLOBALS['conn']->query($sql);
//        if (mysqli_num_rows($result) > 0) {
//            while($row = mysqli_fetch_assoc($result)) {
//                $video= $result["Video_ID"];
//                $sql = "SELECT * FROM Video WHERE Video_ID=$video";
//                if (mysqli_num_rows($result) > 0) {
//                    while($row = mysqli_fetch_assoc($result)) {
//                    }
//                } else {
//                    echo "0 results";
//                }
//            }
//        } else {
//            echo "0 results";
//        }
//
//
//        ?>
    </script>
        <div class="text-light" style="margin-left: 25px">
            <h1>Playlist</h1>
            <div id="playlist">

            </div>
        </div>
    </body>
</html>