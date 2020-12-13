window.onload = function() {
    history(3);
}

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
        newtitle.innerHTML = "History";
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