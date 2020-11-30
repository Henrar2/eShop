function loginform(){
    lg = document.createElement("div");
    lg.setAttribute("id","loginform");
    bd = document.getElementById("main");
    bd.appendChild(lg);
    document.getElementById("loginform").innerHTML = "<p>asdasdasdasdasdasd</p>";
    lg = document.getElementById("loginf").style;
    lg.backgroundColor = "black";
    lg.height = "500px !important";
    lg.width = "500px !important";
    lg.diplay = "block";
    lg.position = "sticky";
    lg.top = "50%";
    lg.margin = "0 0 25% 0";
    lg.transition = "500ms";
}