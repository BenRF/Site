<html>
	<head>
		<?php
			session_start();
			$id = session_id();
			$projects = scandir("projects/");
			//https://realfavicongenerator.net/, for when you have an actual icon
		?>
		<title>Ben R F</title>
		<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
		<link rel="manifest" href="site.webmanifest">
		<link rel="mask-icon" href="safari-pinned-tab.svg" color="#4287f5">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="styles.css">
		<link href="https://fonts.googleapis.com/css?family=Blinker|Fira+Sans|Roboto&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="stuff.js"></script>
		<script src="./benM/benM.js"></script>
		<script>
			window.onscroll = scrollCheck;
			window.onfocus = resume;
			window.onblur = pause;
		</script>
	</head>
	<body id="b" onload="start()">
		<div id="header" class="header attached">
			<a href="javascript:void(0)" onclick="sTo(0)"> <p id="t1" class="title attachedT">Ben Ramsay Foster</p> </a>
			<a href="javascript:void(0)" onclick="sTo(3)"> <p id="t2" class="header c attachedH">Contact</p> </a>
			<a href="javascript:void(0)" onclick="sTo(2)"> <p id="t3" class="header p attachedH">Projects</p> </a>
			<a href="javascript:void(0)" onclick="sTo(1)"> <p id="t4" class="header a attachedH">About</p> </a>
			<div id="scroll" class="scroll underTitle"></div>
		</div>
		<!-- <a href="javascript:void(0)" onclick="toggleBox()">
			<div id="clickArea" class="clickArea"></div>
		</a> -->
		<div id="box" class="msgBox hiddenBox">
			<div id="actions" class="benmActions hiddenActions">
				<a style="float: left;" href="javascript:void(0)" onclick="toggleBox()">
					<div class="close">
						<svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="#000000">
							<path d="M 2.5 2 C 1.675781 2 1 2.675781 1 3.5 L 1 11.5 C 1 12.324219 1.675781 13 2.5 13 L 13.5 13 C 14.324219 13 15 12.324219 15 11.5 L 15 3.5 C 15 2.675781 14.324219 2 13.5 2 Z M 2.5 3 L 11 3 L 11 12 L 2.5 12 C 2.21875 12 2 11.78125 2 11.5 L 2 3.5 C 2 3.21875 2.21875 3 2.5 3 Z M 12 3 L 13.5 3 C 13.78125 3 14 3.21875 14 3.5 L 14 11.5 C 14 11.78125 13.78125 12 13.5 12 L 12 12 Z M 7 5 L 7 7 L 4 7 L 4 8 L 7 8 L 7 10 L 9.5 7.5 Z"/>
						</svg>
					</div>
				</a>
				<div class="close">
					<svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
					    <path style="fill:white;line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M 14.646484 0.64648438 L 13.158203 2.1347656 L 12.839844 1.8164062 C 12.296365 1.2735345 11.580834 1.0019438 10.865234 1.0019531 C 10.149635 1.0019625 9.4336568 1.2753275 8.890625 1.8183594 L 7.7070312 3 L 7.3535156 2.6464844 L 6.6464844 3.3535156 L 8.2929688 5 L 6.6464844 6.6464844 L 7.3535156 7.3535156 L 9 5.7070312 L 10.292969 7 L 8.6464844 8.6464844 L 9.3535156 9.3535156 L 11 7.7070312 L 12.646484 9.3535156 L 13.353516 8.6464844 L 13 8.2929688 L 14.183594 7.109375 C 15.269337 6.0224182 15.269657 4.2462199 14.183594 3.1601562 L 13.865234 2.8417969 L 15.353516 1.3535156 L 14.646484 0.64648438 z M 10.865234 1.9980469 C 11.322901 1.9980069 11.780292 2.1732625 12.132812 2.5253906 L 13.476562 3.8671875 C 14.180499 4.5711238 14.180819 5.6973005 13.476562 6.4023438 L 12.292969 7.5859375 L 8.4140625 3.7070312 L 9.5976562 2.5253906 C 9.9496247 2.1734225 10.407568 1.9980869 10.865234 1.9980469 z M 3.3535156 6.6464844 L 2.6464844 7.3535156 L 3 7.7070312 L 1.8164062 8.890625 C 0.73066262 9.9775818 0.73034267 11.75378 1.8164062 12.839844 L 2.1347656 13.158203 L 0.64648438 14.646484 L 1.3535156 15.353516 L 2.8417969 13.865234 L 3.1601562 14.183594 C 4.2471132 15.269337 6.0233113 15.267751 7.109375 14.181641 L 8.2929688 13 L 8.6464844 13.353516 L 9.3535156 12.646484 L 3.3535156 6.6464844 z M 3.7070312 8.4140625 L 7.5859375 12.292969 L 6.4023438 13.474609 C 5.6984074 14.178546 4.5722307 14.178866 3.8671875 13.474609 L 2.5234375 12.132812 C 1.8195012 11.428877 1.8191812 10.302699 2.5234375 9.5976562 L 3.7070312 8.4140625 z"/>
					</svg>
				</div>
			</div>
			<div id="innerBox" class="innerBox smallBox">
				<div id="register" class="register msgCenter">
					<div class="logo" style="margin-left: 15px;">
						<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
						 width="192.000000pt" height="192.000000pt" viewBox="0 0 192.000000 192.000000"
						 preserveAspectRatio="xMidYMid meet" id="BenM (client)I">
						  <g transform="translate(0.000000,192.000000) scale(0.100000,-0.100000)"
						  fill="#4192cc" stroke="none">
						    <path d="M755 1896 c-163 -46 -318 -145 -406 -260 -22 -28 -44 -57 -51 -65
						    -25 -30 -91 -178 -109 -245 -27 -103 -26 -304 2 -411 60 -232 220 -422 439
						    -523 90 -42 206 -72 278 -72 l52 0 0 -160 c0 -104 4 -160 10 -160 18 0 119 71
						    171 120 9 8 64 58 122 110 58 52 106 100 106 107 1 6 14 22 29 35 15 13 31 31
						    35 41 3 9 10 17 15 17 4 0 30 30 57 68 27 37 52 69 55 72 21 19 144 220 135
						    220 -4 0 -1 10 8 23 8 12 24 59 36 104 40 155 24 380 -35 513 -24 54 -66 132
						    -80 149 -7 9 -33 41 -58 73 -87 107 -252 209 -405 248 -113 29 -296 27 -406
						    -4z m467 -383 c90 -41 123 -91 123 -188 0 -85 -27 -132 -93 -166 l-44 -21 51
						    -18 c28 -9 59 -24 69 -33 10 -10 22 -14 27 -10 4 5 5 3 1 -4 -3 -6 -1 -15 5
						    -19 21 -12 49 -89 49 -133 0 -57 -42 -142 -91 -180 -20 -17 -64 -39 -97 -50
						    -56 -19 -85 -21 -337 -21 l-275 0 0 428 c0 236 3 432 8 436 4 4 131 6 282 4
						    255 -3 278 -5 322 -25z"/>
						    <path d="M850 1281 l0 -81 88 0 c98 0 148 11 168 37 19 26 17 67 -5 94 -18 22
						    -27 24 -135 27 l-116 4 0 -81z"/>
						    <path d="M850 941 l0 -101 103 0 c160 0 207 22 207 98 0 80 -36 99 -192 101
						    l-118 2 0 -100z"/>
						  </g>
						</svg>
			    </div>
					<p class="registerTitle">Who are you?</p>
					<input id="name" type="text" class="msgRegister" placeholder="Name"/>
					<script>
						var f = document.getElementById("name");
						f.addEventListener("keyup", function(event) {
							  if (event.keyCode === 13) {
							    event.preventDefault();
							    setup();
							  }
							});
					</script>
					<a href="javascript:void(0)" onclick="setup()">
						<div class="projectLink" style="margin-left: 35%; margin-top: 20px;">
		        	<p class="projectButtonTag">Register</p>
		      	</div>
					</a>
				</div>
				<div id="waiting" class="waiting msgRight">
					<p class="waitingTitle">Anyone home?</p>
				</div>
				<div id="rejected" class="rejected msgRight">
					<div class="benmicon">
						<svg version="1.1" id="reject" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 294.843 294.843" style="enable-background:new 0 0 294.843 294.843;" xml:space="preserve">
							<g>
								<path d="M147.421,0C66.133,0,0,66.133,0,147.421s66.133,147.421,147.421,147.421c38.287,0,74.567-14.609,102.159-41.136
									c2.389-2.296,2.464-6.095,0.167-8.483c-2.295-2.388-6.093-2.464-8.483-0.167c-25.345,24.367-58.672,37.786-93.842,37.786
									C72.75,282.843,12,222.093,12,147.421S72.75,12,147.421,12s135.421,60.75,135.421,135.421c0,16.842-3.052,33.273-9.071,48.835
									c-1.195,3.091,0.341,6.565,3.432,7.761c3.092,1.193,6.565-0.341,7.761-3.432c6.555-16.949,9.879-34.836,9.879-53.165
									C294.843,66.133,228.71,0,147.421,0z"/>
								<path d="M167.619,160.134c-2.37-2.319-6.168-2.277-8.485,0.09c-2.318,2.368-2.277,6.167,0.09,8.485l47.236,46.236
									c1.168,1.143,2.683,1.712,4.197,1.712c1.557,0,3.113-0.603,4.288-1.803c2.318-2.368,2.277-6.167-0.09-8.485L167.619,160.134z"/>
								<path d="M125.178,133.663c1.171,1.171,2.707,1.757,4.243,1.757s3.071-0.586,4.243-1.757c2.343-2.343,2.343-6.142,0-8.485
									L88.428,79.942c-2.343-2.343-6.143-2.343-8.485,0c-2.343,2.343-2.343,6.142,0,8.485L125.178,133.663z"/>
								<path d="M214.9,79.942c-2.343-2.343-6.143-2.343-8.485,0L79.942,206.415c-2.343,2.343-2.343,6.142,0,8.485
									c1.171,1.171,2.707,1.757,4.243,1.757s3.071-0.586,4.243-1.757L214.9,88.428C217.243,86.084,217.243,82.286,214.9,79.942z"/>
							</g>
						</svg>
					</div>
					<p class="rejectText">Sorry, Ben isn't here right now</p>
				</div>
				<div id = "approved" class="approved msgRight">
					<div id="msgs" class="msgContainer">
					</div>
					<div id="chin" class="msgChin hiddenChin">
						<input id="benMmsg" class="benmmsg"/>
						<script>
							var field = document.getElementById("benMmsg");
							field.addEventListener("keyup", function(event) {
						  if (event.keyCode === 13) {
						    event.preventDefault();
						    sendMsg();
						  }
						});
						</script>
					</div>
				</div>
			</div>
		</div>
		<div id="main" class="typingLock">
			<p id="cmd2" class="cmd"></p>
		  <p id="cmd1" class="cmd"><b id="bl" class="blink"> _</b></p>
		</div>
		<div class="aboutLock">
			<div class="about">
				<p class="about">
					As a computer science student I find myself coding in a variety of languages and context's, from creating a phone app for the elderly to track
					their energy usage to encrypting messages in python. While all aspects of computer science are intresting and all have their own
					appeal and depth that someone can get lost in trying to perfect, I continuosly look to challenge myself in different ways with new challenges that
					will leave me pulling out my hair trying to perfect the efficiency or the functionality. By doing this I not only expand my knowledge of a
					certain programming enviroment but I can discover new ways of solving problems that I may not have thought of beforehand.
				</p>
			</div>
		</div>
		<div id="projects" class="projectLock">
			<div class="projectList">
				<?php
					include("./projects/BenM/benm.php");
					// include("./projects/Screeps/screeps.php");
				?>
			</div>
		</div>
		<div id="contact" class="contactLock">
			<p class="contactTitle">Have a question?</p>
			<p class="contactDesc">Maybe these links will help, or just ask.</p>
			<div id="alert" class="alert hideAlert">
				<p class="alert">Copied to your clipboard</p>
			</div>
			<div class="details">
				<div class="outerDetail">
					<a class="hidden" target="_blank" href="https://github.com/BenRF">
						<div class="detail">
							<svg class="detail" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
							<p class="infoU">Github</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="copy('benramsayfoster@gmail.com')">
						<div class="detail">
							<svg class="detail" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail icon</title><path d="M24 4.5v15c0 .85-.65 1.5-1.5 1.5H21V7.387l-9 6.463-9-6.463V21H1.5C.649 21 0 20.35 0 19.5v-15c0-.425.162-.8.431-1.068C.7 3.16 1.076 3 1.5 3H2l10 7.25L22 3h.5c.425 0 .8.162 1.069.432.27.268.431.643.431 1.068z"/></svg>
							<p class="infoU">Email</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="copy('B3athunter#9950')">
						<div class="detail">
							<svg class="detail" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord icon</title><path d="M20.222 0c1.406 0 2.54 1.137 2.607 2.475V24l-2.677-2.273-1.47-1.338-1.604-1.398.67 2.205H3.71c-1.402 0-2.54-1.065-2.54-2.476V2.48C1.17 1.142 2.31.003 3.715.003h16.5L20.222 0zm-6.118 5.683h-.03l-.202.2c2.073.6 3.076 1.537 3.076 1.537-1.336-.668-2.54-1.002-3.744-1.137-.87-.135-1.74-.064-2.475 0h-.2c-.47 0-1.47.2-2.81.735-.467.203-.735.336-.735.336s1.002-1.002 3.21-1.537l-.135-.135s-1.672-.064-3.477 1.27c0 0-1.805 3.144-1.805 7.02 0 0 1 1.74 3.743 1.806 0 0 .4-.533.805-1.002-1.54-.468-2.14-1.404-2.14-1.404s.134.066.335.2h.06c.03 0 .044.015.06.03v.006c.016.016.03.03.06.03.33.136.66.27.93.4.466.202 1.065.403 1.8.536.93.135 1.996.2 3.21 0 .6-.135 1.2-.267 1.8-.535.39-.2.87-.4 1.397-.737 0 0-.6.936-2.205 1.404.33.466.795 1 .795 1 2.744-.06 3.81-1.8 3.87-1.726 0-3.87-1.815-7.02-1.815-7.02-1.635-1.214-3.165-1.26-3.435-1.26l.056-.02zm.168 4.413c.703 0 1.27.6 		1.27 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334.002-.74.573-1.338 1.27-1.338zm-4.543 0c.7 0 1.266.6 1.266 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334 0-.74.57-1.338 1.27-1.338z"/></svg>
							<p class="infoU">Discord</p>
							<input class="outOfTheWay" id="discord" type="text" value="B3athunter#9950"/>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="toggleBox()">
						<div class="detail">
							<svg class="detail" version="1.0" xmlns="http://www.w3.org/2000/svg"
							 viewBox="0 0 192.000000 192.000000"
							 preserveAspectRatio="xMidYMid meet" id="BenM (client)I">
							  <g transform="translate(0.000000,192.000000) scale(0.100000,-0.100000)"
							  fill="white" stroke="none">
							    <path d="M755 1896 c-163 -46 -318 -145 -406 -260 -22 -28 -44 -57 -51 -65
							    -25 -30 -91 -178 -109 -245 -27 -103 -26 -304 2 -411 60 -232 220 -422 439
							    -523 90 -42 206 -72 278 -72 l52 0 0 -160 c0 -104 4 -160 10 -160 18 0 119 71
							    171 120 9 8 64 58 122 110 58 52 106 100 106 107 1 6 14 22 29 35 15 13 31 31
							    35 41 3 9 10 17 15 17 4 0 30 30 57 68 27 37 52 69 55 72 21 19 144 220 135
							    220 -4 0 -1 10 8 23 8 12 24 59 36 104 40 155 24 380 -35 513 -24 54 -66 132
							    -80 149 -7 9 -33 41 -58 73 -87 107 -252 209 -405 248 -113 29 -296 27 -406
							    -4z m467 -383 c90 -41 123 -91 123 -188 0 -85 -27 -132 -93 -166 l-44 -21 51
							    -18 c28 -9 59 -24 69 -33 10 -10 22 -14 27 -10 4 5 5 3 1 -4 -3 -6 -1 -15 5
							    -19 21 -12 49 -89 49 -133 0 -57 -42 -142 -91 -180 -20 -17 -64 -39 -97 -50
							    -56 -19 -85 -21 -337 -21 l-275 0 0 428 c0 236 3 432 8 436 4 4 131 6 282 4
							    255 -3 278 -5 322 -25z"/>
							    <path d="M850 1281 l0 -81 88 0 c98 0 148 11 168 37 19 26 17 67 -5 94 -18 22
							    -27 24 -135 27 l-116 4 0 -81z"/>
							    <path d="M850 941 l0 -101 103 0 c160 0 207 22 207 98 0 80 -36 99 -192 101
							    l-118 2 0 -100z"/>
							  </g>
							</svg>
							<p class="infoU">Start A BenM chat</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</body>
</html>
