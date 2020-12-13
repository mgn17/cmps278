<!DOCTYPE html>
<html>
<head>
    <title>History</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="history.js"></script>

</head>
<body class="bg-dark" style="font-family: Arial, Helvetica, sans-serif;">

<script>
    function history(num) {
        for (i = 0; i < num; i++) {
            var item = document.createElement("li");
            var image = document.createElement("img");
            image.id = "history" + i.toString();
            var newdiv = document.createElement("div");
            var newtitle = document.createElement("h3");
            newtitle.id = "history" + i.toString() + "title";
            var newlabel1 = document.createElement("label");
            newlabel1.id= "history" + i.toString() + "user";
            var newlabel2 = document.createElement("label");
            newlabel2.id= "history" + i.toString() + "label";
            var newspan1 = document.createElement("span");
            newspan1.id = "history" + i.toString() + "views";
            var newspan2 = document.createElement("span");
            newspan2.id = "history" + i.toString() + "update";

            newspan1.innerHTML = "11";
            newspan2.innerHTML = "date";
            image.src = "http://i3.ytimg.com/vi/XsBXA3SK0Zo/hqdefault.jpg";
            newtitle.innerHTML = "recommendedvideo";
            newtitle.style.fontSize = "15pt";
            newlabel1.innerHTML = "mememem"

            newlabel2.appendChild(newspan1);
            newlabel2.innerHTML += " views - "
            newlabel2.appendChild(newspan2);

            newdiv.appendChild(newtitle);
            newdiv.appendChild(newlabel1);
            newdiv.appendChild(newlabel2);

            newdiv.style.display = "flex";
            newdiv.style.flexDirection = "column";

            image.style.width = "200px";

            item.appendChild(image);
            item.innerHTML += "&nbsp";
            item.appendChild(newdiv);

            item.style.display = "flex";
            item.style.paddingBottom = "25px";

            document.getElementById("history").appendChild(item);
        }
    }
</script>
<div style="margin-left: 25px" class="text-light">
    <h1>History</h1>
    <div id="history">

    </div>
</div>
</body>
</html>