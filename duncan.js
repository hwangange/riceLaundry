function showSelectedItem() {
    var item = document.getElementById("college").value;
    document.getElementById("current").innerHTML = item;
}

document.getElementById("college").addEventListener("change", showSelectedItem);