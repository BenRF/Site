<html>
	<head>
		<?php
			session_start();
			$id = session_id();
			$projects = scandir("projects/");
			//https://realfavicongenerator.net/, for when you have an actual icon
		?>
		<title>Ben RF</title>
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
		<script>
			window.onscroll = scrollCheck;
			window.onfocus = begin;
			window.onblur = pause;
			window.onload = begin;
			window.onunload = pause;
		</script>
	</head>
	<body id="b">
		<div id="header" class="header attached">
			<p id="t1" onclick="sTo(0)" class="title attachedT">Ben Ramsay Foster</p>
			<p id="t2" onclick="sTo(3)" class="header c attachedH">Contact</p>
			<p id="t3" onclick="sTo(2)" class="header p attachedH">Projects</p>
			<p id="t4" onclick="sTo(1)" class="header a attachedH">About</p>
			<div id="scroll" class="scroll underTitle"></div>
		</div>
		<div id="main" class="typingLock">
		  <p id="cmd2" class="cmd"></p>
		  <p id="cmd1" class="cmd"><b id="bl" class="blink"> ▏</b></p>
		</div>
		<div class="aboutLock">
			<div class="about">
				<p class="about">
					I'm Ben, a Computer Science graduate with experience in topics
					such as Computer security, web development and software engineering.<br/>
					My passion is in creating software solutions that help make people's jobs and lives easier whether its
					a simple energy tracking app for the elderly to automating the process of merging excel tables.
					<br/>
					A strong believer in the power of clean, maintainable code that focuses on readability and
					potential expandability just as much as working correctly.
				</p>
				<p class="aboutTitle">Hello world!</p>
			</div>
		</div>
		<div id="projects" class="projectLock">
			<div class="projectList">
				<div class="project">
					<div class="projectLeft">
						<p class="projectTitle">BenM app</p>
						<p class="projectDescription">
							A livechat application allowing for users on a website to speak with the site owner via their phone. Utilizing NodeJS and Websockets to provide bi-directional communication
							along with 2048 bit keys to ensure secure communication.
						</p>
					</div>
					<div class="projectRight">
						<img class="projectImg" src="./projects/BenM/img0.png"/>
					</div>
				</div>
			</div>
		</div>
		<div id="contact" class="contactLock">
			<p class="contactTitle">Have a question?</p>
			<p class="contactDesc">Maybe these links will help, or just ask.</p>
			<div id="alert" class="alert hideAlert">
				<p class="alert">Copied to your clipboard</p>
			</div>
			<input class="outOfTheWay" id="discord" type="text" value="B3athunter#9950"/>
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
					<a class="hidden" href="mailto:benramsayfoster@gmail.com" target="_blank">
						<div class="detail">
							<svg xmlns="http://www.w3.org/2000/svg" class="detail" viewBox="0 0 24 24"><path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z"/></svg>
							<p class="infoU">Email</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="copy('B3athunter#9950')">
						<div class="detail">
							<svg class="detail" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord icon</title><path d="M20.222 0c1.406 0 2.54 1.137 2.607 2.475V24l-2.677-2.273-1.47-1.338-1.604-1.398.67 2.205H3.71c-1.402 0-2.54-1.065-2.54-2.476V2.48C1.17 1.142 2.31.003 3.715.003h16.5L20.222 0zm-6.118 5.683h-.03l-.202.2c2.073.6 3.076 1.537 3.076 1.537-1.336-.668-2.54-1.002-3.744-1.137-.87-.135-1.74-.064-2.475 0h-.2c-.47 0-1.47.2-2.81.735-.467.203-.735.336-.735.336s1.002-1.002 3.21-1.537l-.135-.135s-1.672-.064-3.477 1.27c0 0-1.805 3.144-1.805 7.02 0 0 1 1.74 3.743 1.806 0 0 .4-.533.805-1.002-1.54-.468-2.14-1.404-2.14-1.404s.134.066.335.2h.06c.03 0 .044.015.06.03v.006c.016.016.03.03.06.03.33.136.66.27.93.4.466.202 1.065.403 1.8.536.93.135 1.996.2 3.21 0 .6-.135 1.2-.267 1.8-.535.39-.2.87-.4 1.397-.737 0 0-.6.936-2.205 1.404.33.466.795 1 .795 1 2.744-.06 3.81-1.8 3.87-1.726 0-3.87-1.815-7.02-1.815-7.02-1.635-1.214-3.165-1.26-3.435-1.26l.056-.02zm.168 4.413c.703 0 1.27.6 		1.27 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334.002-.74.573-1.338 1.27-1.338zm-4.543 0c.7 0 1.266.6 1.266 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334 0-.74.57-1.338 1.27-1.338z"/></svg>
							<p class="infoU">Discord</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" target="_blank" href="https://www.linkedin.com/in/ben-ramsay-foster-175052197/">
						<div class="detail">
							<svg xmlns="http://www.w3.org/2000/svg" class="detail" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
							<p class="infoU">LinkedIn</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" target="_blank" href="./CV.docx" download>
						<div class="detail">
							<svg xmlns="http://www.w3.org/2000/svg" class="detail" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm13 14h-10v-.417c-.004-1.112.044-1.747 1.324-2.043 1.403-.324 2.787-.613 2.122-1.841-1.973-3.637-.563-5.699 1.554-5.699 2.077 0 3.521 1.985 1.556 5.699-.647 1.22.688 1.51 2.121 1.841 1.284.297 1.328.936 1.323 2.057v.403zm8 0h-6v-2h6v2zm0-4h-6v-2h6v2zm0-4h-6v-2h6v2z"/></svg>
							<p class="infoU">CV</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="newBenM()">
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
