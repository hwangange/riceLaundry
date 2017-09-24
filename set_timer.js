var selected="none"
var timers=[
	["Washer 1",45*60,false],
	["Washer 2",45*60,false],
	["Washer 3",45*60,false]
]

function set_machine(t){
	selected=t
}
function timer(){

	index=selected.substr(selected.length - 1)-1
	timers[index][2]= true

	timer_object()

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
  var timeinterval = setInterval(updateClock, 1500);
}
