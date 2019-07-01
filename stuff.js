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
	if (document.body.scrollTop > 0) {
		document.getElementById("header").className = "header detached";
	} else {
		document.getElementById("header").className = "header attached";
	}
	var height = window.innerHeight;
	var s = document.getElementById("scroll");
	var scrolled = document.body.scrollTop + (0.5*height);
	var step1 = height * 1;
	var step2 = height * 2;
	var step3 = height * 3;
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

window.onkeydown = function(event) {
	event.preventDefault();
	switch (event.keyCode) {
		case 27:
		console.log("currently at " + document.body.scrollTop);
		case 37:
			//left
			event.preventDefault();
			break;
		case 38:
			event.preventDefault();
			sc(1);
			break;
		case 39:
			//right
			event.preventDefault();
			break;
		case 40:
			event.preventDefault();
			sc(2);
			break;
  }
}

function sc(direction) {
	var height = Math.floor(window.innerHeight);
	var scroll = document.body.scrollTop;
	if (Math.floor(scroll) % height === 0) {
		var height = height + (scroll % height);
		if (direction === 1) {
			//up
			window.scrollBy(0,-(height));
		} else {
			//down
			window.scrollBy(0,height);
		}
	} else {
		if (direction === 1) {
			//up
			window.scrollBy(0,-(scroll%height));
		} else {
			//down
			window.scrollBy(0,height-(scroll%height));
		}
	}
}

window.addEventListener('wheel',snap);
var target = 0;
function snap(e) {
	e.preventDefault();
	if (e.deltaY < 0) {
		sc(1);
	//scroll down site
	} else if (e.deltaY >= 0) {
		sc(2);
	}
}

function jump(target) {
	document.getElementById(target).scrollIntoView();
}

var previous;
function pick(p) {
	if (previous != null) {
		previous.className = "project";
	}
	previous = document.getElementById(p)
	previous.className = "project selected";
	$.get("projects/"+ p +"/"+ p +".php", function(data) {$("#projectDisplay").html(data);});
}

var message;
var typing;
var position = 0;
var target = "";
function pause() {
	clearInterval(message);
}

function resume() {
	start();
}

function start() {
	//change("Scored!!!");
  message = setInterval(update, 3500);
	var flush;
	var count = 0;

	function update() {
		clearInterval(message);
		var script = [
			["Site:/> cd scripts",5,0,""],
			["Site:/scripts> greeting.exe",5,1,"Site:/scripts>"],
			["Hey",3,0,""],
			["Hey, welcome to my site.",5,0,""],
			["Site:/scripts> clear",10,1,"Site:/scripts>"],
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
			var el = document.getElementById("cmd7");
			el.parentNode.removeChild(el);
			//move all elements up
			for (var i = 6; i > 0; i--) {
					document.getElementById("cmd" + i).id = "cmd" + (i+1);
			}
			//create new element to go at the start
			var first = document.createElement("p");
			first.setAttribute("id","cmd1");
			first.setAttribute("class","cmd");
			first.innerHTML = script[position][3];
			document.getElementById("main").appendChild(first);
			document.getElementById("cmd1").innerHTML = document.getElementById("cmd1").innerHTML + '<b id="bl" class="blink"> _</b>';
		}
		target = script[position][0];
		change(script[position][0]);
		message = setInterval(update,(script[position][1])*1000);
		if  (position == script.length-1) {
			flush = setInterval(fade,4000);
			position = 0;
		} else {
			position++;
		}
	}

	var items = ["cmd1","cmd2","cmd3","cmd4","cmd5","cmd6","cmd7"];
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
		document.getElementById("cmd1").innerHTML = 'Site:/> <b id="bl" class="blink"> _</b>';
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
