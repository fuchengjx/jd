$("tab-hd a").onmouseenter=function (ev) {
    document.querySelector("tab-bd ul").className="current";
}
$("tab-hd a").onmouseleave=function (ev) {
    document.querySelector("tab-bd ul").className="none";
}
