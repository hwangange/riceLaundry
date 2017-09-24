var selected="none"
var curr_time=Date().getTime()/1000
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
		var curr_time = Date().getTime()/1000;
		var time_stamp = element.timer;
		var diff = curr_time-time_stamp;
		if(diff>=0){
			machine.innerHTML=id;
		}
		else{
			diff=Math.abs(diff);
			minutes=diff/60;
			seconds=diff%60;
			if(minutes<10)minutes="0"+minutes;
			if(seconds<10)seconds="0"+seconds;
			machine.innerHTML=minutes+":"+seconds;
		}
}
function set_machine(t){
	selected=t
}
function diff(time_stamp){
	curr_time= Date().getTime()/1000
	return curr_time-time_stamp
}
function timer(){
  
}
function retrieve(){


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
var x=setInterval(retrieve(),5000)