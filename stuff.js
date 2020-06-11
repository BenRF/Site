//Aren't you a nosy one?

var short = false;

var a;
function copy(text) {
	if (alert === null) {
		clearInterval(a);
	}
	var copyText = document.getElementById("discord");
	copyText.value = text;
  	copyText.select();
  	copyText.setSelectionRange(0, 99999);
  	document.execCommand("copy");
  	document.getElementById("alert").className = "alert showAlert";
	a = setInterval(hideAlert,2000);
}

function hideAlert() {
	clearInterval(a);
	document.getElementById("alert").className = "alert hideAlert";
}

function newBenM() {
	window.open('./benm.php','popUpWindow','height=600,width=400,left=100,top=100,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no');
}

function sTo(target) {
	if (target === 0) {
		document.body.scrollTop = 0;
	} else if (target == 1) {
		document.body.scrollTop = window.innerHeight;
	} else if (target == 2) {
		document.body.scrollTop = window.innerHeight + 400;
	} else {
		document.body.scrollTop = window.innerHeight * 20;
	}
	return false;
}

var on;
function scrollCheck() {
	var height = window.innerHeight;
	var scrolled = document.body.scrollTop;
	if (scrolled > (height - 50)) {
		if (short) {
			document.getElementById("header").className = "header shortHeader detached";
		} else {
			document.getElementById("header").className = "header detached";
		}
		document.getElementById("t1").className = "title";
		document.getElementById("t2").className = "header c";
		document.getElementById("t3").className = "header p";
		document.getElementById("t4").className = "header a";
	} else {
		if (short) {
			document.getElementById("header").className = "header shortHeader attached";
		} else {
			document.getElementById("header").className = "header attached";
		}
		document.getElementById("t1").className = "title attachedT";
		document.getElementById("t2").className = "header c attachedH";
		document.getElementById("t3").className = "header p attachedH";
		document.getElementById("t4").className = "header a attachedH";
	}
	scrolled = scrolled + (0.3 * window.innerHeight);
	var s = document.getElementById("scroll");

	var windowSize     = window.innerHeight;

	var about = windowSize;
	var projects = windowSize + 400;
	var scrollFromTop = document.body.scrollHeight - window.innerHeight - window.scrollY;
	if (scrolled < about && on != "title") {
		s.className = "scroll underTitle";
		on = "title";
	} else if (scrolled >= about && scrolled < projects && on != "about") {
		s.className = "scroll underAbout";
		on = "about";
	} else if (scrolled >= projects && scrollFromTop > 300 && on != "project") {
		s.className = "scroll underProjects";
		on = "project";
	} else if (scrollFromTop <= 300 && on != "contact") {
		s.className = "scroll underContact";
		on = "contact";
	}
}

function jump(target) {
	document.getElementById(target).scrollIntoView();
}

var message;
var typing;
var flush;
var position = 0;
var target = "";
var started = false;
var movement = 0;
function pause() {
	clearInterval(message);
	clearInterval(typing);
	clearInterval(flush);
	movement = null;
	started = false;
}

function begin() {
	console.log("Begun: " + document.hasFocus());
	if (!started && document.hasFocus()) {
		started = true;
		console.log("Started");
		start();
	}
}

function start() {
  message = setInterval(update, 10);

	function update() {
		clearInterval(message);
		var script = [
			["Hey",2,0,""],
			["Hey, welcome to my site",2.5,0,""],
			["This is a site about Ben",4,0,""],
			["It tells you who he is",4.5,0,""],
			["It tells you what he's done",4,0,""],
			["It tells you what he can do",4,0,""],
			["It tells you how to get in touch",4.5,0,""],
			["So feel free to look around",8.5,0,""],
		];
		if (script[position][2] === 1) {
			flush = setInterval(fade,4000);

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

	function pauseType() {
		clearInterval(typing);
		typing = setInterval(remove, 50);
	}

	function store() {
		deleteBlink();
		fade();
		createBlink();
		typing = setInterval(pauseType, 600);
	}

	var flush;
	function fade() {
		clearInterval(flush);
		var items = ["cmd1","cmd2"];
		for (var i = 0; i < items.length; i++) {
			document.getElementById(items[i]).className = "cmd hide";
		}
		flush = setInterval(reappear,500);
	}

	function reappear() {
		clearInterval(flush);
		var items = ["cmd1","cmd2"];
		for (var i = 0; i < items.length; i++) {
			document.getElementById(items[i]).innerHTML = "";
			document.getElementById(items[i]).className = "cmd";
		}
		document.getElementById("cmd1").innerHTML = '<b id="bl" class="blink"> _</b>';
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
    var target;
		if (s1.length > s2.length) {
			target = s1.length;
		} else {
			target = s2.length;
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
    var target;
		if (s1.length > s2.length) {
			target = s1.length;
		} else {
			target = s2.length;
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
