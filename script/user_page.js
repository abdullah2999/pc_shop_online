function tp() {
    window.location.href = "/main_page.html";
}
function show_menu() {
    document.getElementsByClassName("side_menu")[0].style.display = "block";
    document.getElementsByTagName("button")[2].style.display = "none";
}
function unshow_menu() {
    document.getElementsByClassName("side_menu")[0].style.display = "none";
    document.getElementsByTagName("button")[2].style.display = "block";
}