var selected="none"
var curr_time=Date.now()/1000
var timers=[]
/*var timers=[
	["Washer 1",curr_time],
	["Washer 2",curr_time],
	["Washer 3",curr_time]
]*/
function init_machines(curr_time){
	for(i=1;i<9;i++){
		timers.push(["washer"+i,curr_time])
	}
}
function update_ui(element){
	var id=element.type;
	var machine = document.getElementById(id);
	var class_list = machine.className;
	var curr_time = Date.now()/1000;
	var time_stamp = element.timer;
	var diff = curr_time-time_stamp;
	if(diff<0){
		
		diff=Math.abs(diff);
		minutes=Math.floor(diff/60);
		seconds=Math.floor(diff%60);
		if(minutes<10)minutes="0"+minutes;
		if(seconds<10)seconds="0"+seconds;
		machine.innerHTML=minutes+":"+seconds;
		if (class_list.contains("available")) {
			class_list.remove("available").add("in-use");
		}
	}
	else{

		machine.innerHTML=id;
		if (class_list.contains("in-use")) {
			class_list.remove("in-use").add("available");
		}

	}
	if(id==selected){
		//alert(time_stamp+" "+curr_time)
	}


}
function set_machine(t){
	selected=t
}
function diff(time_stamp){
	curr_time= Date.now()/1000
	return curr_time-time_stamp
}
function retr(){
	
	$.get("http://ricelaundry.000webhostapp.com/api/machines.php", function(data) {
		$.each(data, function (index, element) {
			update_ui(element);
			
		})
	}, "json");
	
}

function timer_object(){
	
	function updateClock() {
    for(i=0;i<timers.length;i++){
    	if(timers[i][2]){
    		id=timers[i][0]
    		t=timers[i][1]
    		machine=document.getElementById(id)
    		minutes=Math.floor(t/60)
    		seconds=t%60
    		machine.innerHTML = ('0' + minutes).slice(-2)+":"+('0' + seconds).slice(-2);
    		t-=1
    		if(t<0){
    			t=45*60
    			timers[i][2]=false
    		}
    		timers[i][1]=t
    	}
    	
    }
   
  }
  
  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
//init_machines(curr_time)
retr()
var x=setInterval(retr,1000)