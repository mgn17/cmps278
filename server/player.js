window.onload = function() {
    recommendedvids(7);
    comments(3);
}

function recommendedvids(num) {
    for (i = 0; i < num; i++) {
        var item = document.createElement("li");
        item.class = "rvideo";
        var image = document.createElement("img");
        image.id = "rv" + i.toString();
        var newdiv = document.createElement("div");
        newdiv.class = "rvinfo";
        var newtitle = document.createElement("h3");
        newtitle.class = "rvtitle";
        newtitle.id = "rv" + i.toString() + "title";
        var newlabel1 = document.createElement("label");
        newlabel1.class = "rvuser";
        newlabel1.id= "rv" + i.toString() + "user";
        var newlabel2 = document.createElement("label");
        newlabel2.class = "rvlabel";
        newlabel2.id= "rv" + i.toString() + "label";
        var newspan1 = document.createElement("span");
        newspan1.id = "rv" + i.toString() + "views";
        var newspan2 = document.createElement("span");
        newspan2.id = "rv" + i.toString() + "update";

        newspan1.innerHTML = "11";
        newspan2.innerHTML = "date";
        image.src = "http://i3.ytimg.com/vi/XsBXA3SK0Zo/hqdefault.jpg";
        newtitle.innerHTML = "recommendedvideo";
        newlabel1.innerHTML = "mememem"

        newlabel2.appendChild(newspan1);
        newlabel2.innerHTML += " views - "
        newlabel2.appendChild(newspan2);

        newdiv.appendChild(newtitle);
        newdiv.appendChild(newlabel1);
        newdiv.appendChild(newlabel2);

        newdiv.style.display = "flex";
        newdiv.style.flexDirection = "column";

        item.appendChild(image);
        item.innerHTML += "&nbsp";
        item.appendChild(newdiv);

        item.style.display = "flex";
        item.style.paddingBottom = "25px";

        document.getElementById("recommended").appendChild(item);
    }
}

function comments(nocomments) {
    for (i = 0; i < nocomments; i++) {
        var item = document.createElement("li");
        var image = document.createElement("img");
        image.id = "profpic" + i.toString();
        var newdiv = document.createElement("div");
        var newuser = document.createElement("h3");
        newuser.id = "userc" + i.toString();
        var newdate = document.createElement("label");
        newdate.id = "datec" + i.toString();
        var newcomment = document.createElement("p");
        newcomment.id = "comment" + i.toString();
        var newupvote = document.createElement("button");
        newupvote.id = "upvote" + i.toString();
        var upvotecount = document.createElement("label");
        upvotecount.id = "upcount" + i.toString();
        var newdownvote = document.createElement("button");
        newdownvote.id = "downvote" + i.toString();
        var downvotecount = document.createElement("label");
        downvotecount.id = "downcount" + i.toString();
        var newreply = document.createElement("button");
        newreply.id = "reply" + i.toString();

        var up = document.createElement("i");
        var down = document.createElement("i");
        up.class = "fa-thumbs-up";
        down.class = "fa-thumbs-down";
        up.innerHTML += "upvote";
        down.innerHTML += "downvote";
        up.style.fontSize = "10px";
        down.style.fontSize = "10px";
        up.style.color = "grey";
        down.style.color = "grey";

        var rep = document.createElement("i");
        rep.style.fontSize = "10px";
        rep.innerHTML += "reply";

        newupvote.appendChild(up);
        newdownvote.appendChild(down);
        newreply.appendChild(rep)

        newupvote.style.backgroundColor = "transparent";
        newupvote.style.backgroundRepeat = "no-repeat";
        newupvote.style.border = "none";
        newupvote.style.cursor = "pointer";
        newupvote.style.overflow = "hidden";
        newupvote.style.outline = "none";

        newdownvote.style.backgroundColor = "transparent";
        newdownvote.style.backgroundRepeat = "no-repeat";
        newdownvote.style.border = "none";
        newdownvote.style.cursor = "pointer";
        newdownvote.style.overflow = "hidden";
        newdownvote.style.outline = "none";

        newreply.style.backgroundColor = "transparent";
        newreply.style.backgroundRepeat = "no-repeat";
        newreply.style.border = "none";
        newreply.style.cursor = "pointer";
        newreply.style.overflow = "hidden";
        newreply.style.outline = "none";

        image.src = "http://i3.ytimg.com/vi/XsBXA3SK0Zo/hqdefault.jpg";
        newuser.innerHTML="yoqwueoq";

        image.style.width = "50px";
        image.style.height = "50px";
        image.style.borderRadius = "50%";

        newcomment.innerHTML += "comment comment";

        newdiv.appendChild(newuser);
        newdiv.appendChild(newdate);
        newdiv.appendChild(newcomment);
        newdiv.appendChild(newupvote);
        newdiv.appendChild(upvotecount);
        newdiv.appendChild(newdownvote);
        newdiv.appendChild(downvotecount);
        newdiv.appendChild(newreply);

        item.appendChild(image);
        item.innerHTML += "&nbsp";
        item.appendChild(newdiv);

        item.style.display = "flex";
        item.style.alignItems = "center";

        document.getElementById("comments").appendChild(item);
    }
}
