// // setInterval(function(){alert("Hello")},3000);
//
// let inactivityTime = function () {
//     let t;
//     window.onload = resetTimer;
//     // DOM Events
//     document.onmousemove = resetTimer;
//     document.onkeypress = resetTimer;
//
//     function logout() {
//         alert("You are now logged out.")
//         //location.href = 'logout.php'
//     }
//
//     function resetTimer() {
//         clearTimeout(t);
//         t = setTimeout(logout, 3000)
//         // 1000 milisec = 1 sec
//     }
// };


// $("#search_keyword").keyup(function(event) {
//     if (event.keyCode === 13) {
//         $("#searchButton").click();
//         return false;
//     }
// });

$(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode === 13) {
            event.preventDefault();
            return false;
        }
    });
});

/** De zoekfunctie moet het resultaat van de keyword weergeven in de file getresult.php */

function searchByKeyword(){
    let xhttp;
    let keyword = document.getElementById("search_keyword").value;
    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("home").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getresults.php?q="+keyword, true);
    xhttp.send();


    // let element = document.getElementsByClassName("tab-toggle");
    // element.classList.remove("tab-toggle active");

    return false;
}
