var name = "angie";
var item = "Duncan";

function showCurrentCollege() {
    item = document.getElementById("college").value;
    document.getElementById("currentcol").innerHTML = item;
}


function showCurrentUsr() {
  return name;

}

function showRoom() {
  var str = item + " laundry room";
  return str;
}


document.getElementById("college").addEventListener("change", showCurrentCollege);
document.getElementById("college").addEventListener("change", showRoom);
