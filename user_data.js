var name = "angie";
var item = document.getElementById("college").value;;
document.getElementById("college").addEventListener("change", showCurrentCollege);
document.getElementById("college").addEventListener("change", showRoom);
document.getElementById("demo").innerHTML = showRoom(item);

function showCurrentCollege() {
    item = document.getElementById("college").value;
    document.getElementById("currentcol").innerHTML = item;
    document.getElementById("laundrystr").innerHTML = item + " laundry room";
}


function showCurrentUsr() {
  return name;
}

function showRoom(item) {
  item = document.getElementById("college").value;
  document.getElementById("roomcode").innerHTML = item + " laundry room";
}
