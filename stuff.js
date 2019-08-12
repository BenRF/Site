//Aren't you a nosy one?

var overProject = false;
function projectHover(status) {
	overProject = status;
}

function sTo(target) {
	document.body.scrollTop = window.innerHeight * target;
	return false;
}

function scrollCheck() {
	var height = window.innerHeight;
	var scrolled = document.body.scrollTop;
	if (scrolled > (height - 50) && scrolled < (height + 350)) {
		document.getElementById("header").className = "header detached";
		document.getElementById("t1").className = "title";
		document.getElementById("t2").className = "header c";
		document.getElementById("t3").className = "header p";
		document.getElementById("t4").className = "header a";
	} else {
		document.getElementById("header").className = "header attached";
		document.getElementById("t1").className = "title attachedT";
		document.getElementById("t2").className = "header c attachedH";
		document.getElementById("t3").className = "header p attachedH";
		document.getElementById("t4").className = "header a attachedH";
	}
	var height = window.innerWidth;
	scrolled = scrolled + (0.08 * window.innerHeight);
	var s = document.getElementById("scroll");
	var step1 = 600;
	var step2 = 1000;
	var step3 = height * 2.95;
	if (scrolled < step1) {
		s.className = "scroll underTitle";
	} else if (scrolled >= step1 && scrolled < step2) {
		s.className = "scroll underAbout";
	} else if (scrolled >= step2 && scrolled < step3) {
		s.className = "scroll underProjects";
	} else if (scrolled >= step3) {
		s.className = "scroll underContact";
	}
}

function jump(target) {
	document.getElementById(target).scrollIntoView();
}

var message;
var typing;
var position = 0;
var target = "";
function pause() {
	clearInterval(message);
	clearInterval(movement);
	movement = null;
}

function resume() {
	start();
}


//  0  1  2
//  7  C  3
//  6  5  4

var screeps = [
	[0,[3,3,5,4,5,5,4,5,5,5,6,5,5,5,6,6,7,1,1,1,1,1,1,1,1,1,1,1,1,1,1]],
	[0,[3,4,3,4,3,3,3,3,4,3,3,2,3,2,2,2,1,2,2,3,3,5,4,4,4,6,7,7,7,7,7,7,7,6,7,7,7,7,7,7,7,0,7,7,7,7,7,7,1]]
];
var movement;
function screep() {
	for (var i = 1; i <= screeps.length; i++) {
		var s = document.getElementById("screep" + i);
		var currentMove = screeps[i-1][0];
		var p = screeps[i-1][1][currentMove];
		if (p == 0) {
			screepUp(s);
			screepLeft(s);
		} else if (p == 1) {
			screepUp(s);
		} else if (p == 2) {
		  screepUp(s);
			screepRight(s);
		} else if (p == 3) {
			screepRight(s);
		} else if (p == 4) {
			screepDown(s);
			screepRight(s);
		} else if (p == 5) {
			screepDown(s);
		} else if (p == 6) {
			screepDown(s);
			screepLeft(s);
		} else if (p == 7) {
			screepLeft(s);
		}
		if (currentMove == screeps[i-1][1].length) {
			screeps[i-1][0] = 0;
		} else {
			screeps[i-1][0] = screeps[i-1][0] + 1;
		}
	}
}

function screepLeft(screep) {
	var currentPos = screep.style.left;
	currentPos = currentPos.substring(0, currentPos.length - 2);
	screep.style.left = parseInt(currentPos,10) - 25;
}

function screepRight(screep) {
	var currentPos = screep.style.left;
	currentPos = currentPos.substring(0, currentPos.length - 2);
	screep.style.left = parseInt(currentPos,10) + 25;
}

function screepUp(screep) {
	var currentPos = screep.style.top;
	currentPos = currentPos.substring(0, currentPos.length - 2);
	screep.style.top = parseInt(currentPos,10) - 25;
}

function screepDown(screep) {
	var currentPos = screep.style.top;
	currentPos = currentPos.substring(0, currentPos.length - 2);
	screep.style.top = parseInt(currentPos,10) + 25;
}

function start() {
  message = setInterval(update, 5000);
	if (movement == null) {
		movement = setInterval(screep, 2000);
	}
	var flush;
	var count = 0;

	function update() {
		clearInterval(message);
		var script = [
			["Hey",2,0,""],
			["Hey, welcome to my site",4,0,""],
			["This is a site about Ben",3.5,0,""],
			["It tells you who he is",4,0,""],
			["It tells you what he's done",3.5,0,""],
			["It tells you what he can do",3.5,0,""],
			["It tells you how to get in touch",4,0,""],
			["So feel free to look around",8,0,""],
		];
		if (script[position][2] === 1) {
			//delete the blinker
			var inner = document.getElementById("cmd1").innerHTML;
			inner = inner.replace("&gt;",">");
			inner = inner.replace("&lt;","<");
			inner = inner.replace('<b id="bl" class="blink"> _</b>',"");
			inner = inner.replace('<b id="bl" class="solid"> _</b>',"");
			document.getElementById("cmd1").innerHTML = inner;
			//remove the last element
			var el = document.getElementById("cmd2");
			el.parentNode.removeChild(el);
			//move all elements up
			document.getElementById("cmd1").id = "cmd2";
			//create new element to go at the start
			var first = document.createElement("p");
			first.setAttribute("id","cmd1");
			first.setAttribute("class","cmd");
			first.innerHTML = script[position][3];
			document.getElementById("main").appendChild(first);
			document.getElementById("cmd1").innerHTML = document.getElementById("cmd1").innerHTML + '<b id="bl" class="blink"> _</b>';
			target = script[position][0];
			d = setInterval(delay,2000);
		} else {
			target = script[position][0];
			change(script[position][0]);
		}
		message = setInterval(update,(script[position][1])*1000);
		if  (position == script.length-1) {
			flush = setInterval(fade,4000);
			position = 0;
		} else {
			position++;
		}
	}

	var d;
	function delay() {
		clearInterval(d);
		change(target);
	}

	var items = ["cmd1","cmd2"];
	function fade() {
		clearInterval(flush);
		for (var i = 0; i < items.length; i++) {
			document.getElementById(items[i]).className = "cmd hide";
		}
		flush = setInterval(reappear,500);
	}

	function reappear() {
		clearInterval(flush);
		for (var i = 0; i < items.length; i++) {
			document.getElementById(items[i]).innerHTML = "";
			document.getElementById(items[i]).className = "cmd";
		}
		document.getElementById("cmd1").innerHTML = '<b id="bl" class="blink"> _</b>';
	}
}

function change(target) {
	var current = document.getElementById("cmd1");
	if ((difference(target,current.innerHTML) === target || difference(target,current.innerHTML) === getGoodCode()) && getGoodCode().length !== 0) {
		store();
	} else {
		typing = setInterval(remove, 50);
	}

	function pause() {
		clearInterval(typing);
		typing = setInterval(remove, 50);
	}

	function store() {
		//delete the blinker
		deleteBlink();
		//move all elements up
		for (var i = 1; i < 7; i++) {
				document.getElementById("cmd" + i).id = "cmd" + (i+1);
		}
		//remove the last element
		destroy("cmd7");
		//create new element to go at the start
		var first = document.createElement("p");
		first.setAttribute("id","cmd1");
		first.setAttribute("class","cmd");
		document.getElementById("main").appendChild(first);
		current = document.getElementById("cmd1");
		createBlink();
		typing = setInterval(pause, 600);
	}

  var el;
	function destroy(id) {
		el = document.getElementById(id);
		el.parentNode.removeChild(el);
	}

	function getGoodCode() {
		var result = current.innerHTML;
		result = result.replace('<b id="bl" class="blink"> _</b>',"");
		result = result.replace('<b id="bl" class="solid"> _</b>',"");
		result = result.replace("&gt;",">");
		result = result.replace("&lt;","<");
		return result;
	}

	function remove() {
		if (trim(current.innerHTML,target).length === getGoodCode().length) {
			clearInterval(typing);
			typing = setInterval(add, 75);
		} else {
			deleteBlink();
			current.innerHTML = getGoodCode().substring(0,getGoodCode().length-1);
			//current.innerHTML = getGoodCode().slice(0,-32) + '<b id="bl" class="solid"> _</b>';
			createSolid();
		}
	}

	function createSolid() {
		current.innerHTML = current.innerHTML + '<b id="bl" class="solid"> _</b>';
	}

	function createBlink() {
		current.innerHTML = current.innerHTML + '<b id="bl" class="blink"> _</b>';
	}

	function deleteBlink() {
		var inner = getGoodCode();
		current.innerHTML = inner.replace('<b id="bl" class="blink"> _</b>',"");
		current.innerHTML = inner.replace('<b id="bl" class="solid"> _</b>',"");
	}

	function add() {
		if (difference(getGoodCode(),target).length < 1) {
			deleteBlink();
			createBlink();
			clearInterval(typing);
		} else {
			deleteBlink();
			current.innerHTML = current.innerHTML + difference(current.innerHTML,target).substring(0,1);
			createSolid();
		}
	}

	function trim(s1,s2) {
		s1 = s1.replace('<b id="bl" class="blink"> _</b>',"");
		s2 = s2.replace('<b id="bl" class="blink"> _</b>',"");
		s1 = s1.replace("&gt;",">");
		s2 = s2.replace("&gt;",">");
		if (s1.length > s2.length) {
			var target = s1.length;
		} else {
			var target = s2.length;
		}
		for (var i = 0; i < target; i++) {
			if (s1.charAt(i) != s2.charAt(i)) {
				break;
			}
		}
		return s1.substring(0,i);
	}

	function difference(s1,s2) {
		s1 = s1.replace('<b id="bl" class="blink"> _</b>',"");
		s2 = s2.replace('<b id="bl" class="blink"> _</b>',"");
		s1 = s1.replace("&gt;",">");
		s2 = s2.replace("&gt;",">");
		if (s1.length > s2.length) {
			var target = s1.length;
		} else {
			var target = s2.length;
		}
		for (var i = 0; i < target; i++) {
			if (s1.charAt(i) !== s2.charAt(i)) {
				break;
			}
		}
		if (s1.length > s2.length) {
			return s1.substring(i,s1.length);
		} else {
			return s2.substring(i,s2.length);
		}
	}
}
