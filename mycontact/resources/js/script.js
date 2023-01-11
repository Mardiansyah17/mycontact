const filter = document.getElementById("filter");
filter.addEventListener("change", (e) => {
    if (e.target.value == "1") {
        location.href = "/favorit";
    } else if (e.target.value == "semua") {
        location.href = "/";
    } else {
        location.href = "/blokir";
    }
});
