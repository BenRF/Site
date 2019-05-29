//Aren't you a nosy one?

function sTo(target) {
	document.body.scrollTop = window.innerHeight * target;
	console.log(window.innerHeight*target);
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

window.addEventListener('wheel',snap);
function snap(e) {
	if (e.deltaY < 0) {
		console.log("up");
		window.scrollBy(0,-(window.innerHeight));
	} else {
		console.log("down");
		window.scrollBy(0,window.innerHeight);
	}
	e.preventDefault();
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
	$.get( "projects/"+ p +"/"+ p +".php", function( data ) {
		$("#projectDisplay").html( data );
	});
	//document.getElementById("projectDisplay").innerHTML = 
}


var message;
var typing;
var position = 0;
var target = "";
function pause() {
	console.log("pause");
	clearInterval(message);
}

function resume() {
	console.log("resume");
	start();
}

function start() {
	message = setInterval(update, 500);
	var flush;
	var count = 0;
	
	function update() {
		clearInterval(message);
		var script = [["Hey",3],["Hey, welcome to my site.",5],["This site is all about Ben.",5],["He programs stuff.",5],["Because of this he's learnt a few languages.",5],["Such as Python,",2.5],["Such as PHP,",1.5],["Such as CSS,",1.5],["Such as C++,",1.5],["Such as MySql,",1.5],["Such as Java,",1.5],["Such as JavaScript,",1.5],["Such as jQuery,",1.5],["Such as JSP,",1.5],["Such as React.",1.5],["And more to come.",8]];
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
	
	function fade() {
		clearInterval(flush);
		var items = ["typing","typing1","typing2","typing3"];
		for (var i = 0; i < items.length; i++) {
			document.getElementById(items[i]).className = "type hide";
		}
		flush = setInterval(reappear,500);
	}
	
	function reappear() {
		clearInterval(flush);
		var items = ["typing","typing1","typing2","typing3"];
		for (var i = 0; i < items.length; i++) {
			document.getElementById(items[i]).innerHTML = "";
			document.getElementById(items[i]).className = "type";
		}
	}
	
}

function change(target) {
	var current = document.getElementById("typing");
	if (difference(target,current.innerHTML) === target || difference(target,current.innerHTML) === current.innerHTML) {
		store();
	} else {
		typing = setInterval(remove, 50);
	}
	
	function pause() {
		clearInterval(typing);
		typing = setInterval(remove, 50);
	}
	
	function store() {
		document.getElementById("typing").id = "typing1";
		document.getElementById("typing1").id = "typing2";
		document.getElementById("typing2").id = "typing3";
		var four = document.getElementById("typing3");
		four.parentNode.removeChild(four);
		var first = document.createElement("p");
		first.setAttribute("id","typing");
		first.setAttribute("class","type");
		document.getElementById("b").appendChild(first);
		current = document.getElementById("typing");
		typing = setInterval(pause, 600);
	}
	
	function remove() {
		if (trim(current.innerHTML,target).length === current.innerHTML.length) {
			clearInterval(typing);
			typing = setInterval(add, 75);
		} else {
			current.innerHTML = (current.innerHTML).substring(0,current.innerHTML.length-1);
		}
	}
	
	function add() {
		if (difference(current.innerHTML,target).length < 1) {
			clearInterval(typing);
		} else {
			current.innerHTML = current.innerHTML + difference(current.innerHTML,target).substring(0,1);
		}
	}

	function trim(s1,s2) {
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