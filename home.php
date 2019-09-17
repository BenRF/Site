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
		<a href="javascript:void(0)" onclick="toggleBox()">
			<div class="BenMToggle">
				<svg class="open" version="1.0" xmlns="http://www.w3.org/2000/svg"
				 width="192.000000pt" height="192.000000pt" viewBox="0 0 192.000000 192.000000"
				 preserveAspectRatio="xMidYMid meet" id="BenM (client)I">
				  <g transform="translate(0.000000,192.000000) scale(0.100000,-0.100000)"
				  fill="#f3f3f1" stroke="none">
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
		</a>
		<a href="javascript:void(0)" onclick="toggleBox()">
			<div id="clickArea" class="clickArea"></div>
		</a>
		<div id="box" class="msgBox hiddenBox">
			<a href="javascript:void(0)" onclick="toggleBox()">
				<div class="close">
					<svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="#000000">
						<path d="M 2.5 2 C 1.675781 2 1 2.675781 1 3.5 L 1 11.5 C 1 12.324219 1.675781 13 2.5 13 L 13.5 13 C 14.324219 13 15 12.324219 15 11.5 L 15 3.5 C 15 2.675781 14.324219 2 13.5 2 Z M 2.5 3 L 11 3 L 11 12 L 2.5 12 C 2.21875 12 2 11.78125 2 11.5 L 2 3.5 C 2 3.21875 2.21875 3 2.5 3 Z M 12 3 L 13.5 3 C 13.78125 3 14 3.21875 14 3.5 L 14 11.5 C 14 11.78125 13.78125 12 13.5 12 L 12 12 Z M 7 5 L 7 7 L 4 7 L 4 8 L 7 8 L 7 10 L 9.5 7.5 Z"/>
					</svg>
				</div>
			</a>
			<div class="register">
				<div class="icon" style="margin-left: 15px;">
		      <?php
		        echo file_get_contents("./projects/BenM/icon.svg");
		      ?>
		    </div>
				<p class="registerTitle">Who are you?</p>
				<input type="text" class="msgRegister" placeholder="Name"/>
				<div class="projectLink" style="margin-left: 35%; margin-top: 30px;">
	        <p class="projectButtonTag">Register</p>
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
			<?php
				include("./projects/BenM/benm.php")
				// include("./projects/Screeps/screeps.php");
			?>
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
							<p class="infoU">BenRF</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="copy('benramsayfoster@gmail.com')">
						<div class="detail">
							<svg class="detail" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail icon</title><path d="M24 4.5v15c0 .85-.65 1.5-1.5 1.5H21V7.387l-9 6.463-9-6.463V21H1.5C.649 21 0 20.35 0 19.5v-15c0-.425.162-.8.431-1.068C.7 3.16 1.076 3 1.5 3H2l10 7.25L22 3h.5c.425 0 .8.162 1.069.432.27.268.431.643.431 1.068z"/></svg>
							<p class="infoU">benramsayfoster@gmail.com</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="copy('B3athunter#9950')">
						<div class="detail">
							<svg class="detail" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord icon</title><path d="M20.222 0c1.406 0 2.54 1.137 2.607 2.475V24l-2.677-2.273-1.47-1.338-1.604-1.398.67 2.205H3.71c-1.402 0-2.54-1.065-2.54-2.476V2.48C1.17 1.142 2.31.003 3.715.003h16.5L20.222 0zm-6.118 5.683h-.03l-.202.2c2.073.6 3.076 1.537 3.076 1.537-1.336-.668-2.54-1.002-3.744-1.137-.87-.135-1.74-.064-2.475 0h-.2c-.47 0-1.47.2-2.81.735-.467.203-.735.336-.735.336s1.002-1.002 3.21-1.537l-.135-.135s-1.672-.064-3.477 1.27c0 0-1.805 3.144-1.805 7.02 0 0 1 1.74 3.743 1.806 0 0 .4-.533.805-1.002-1.54-.468-2.14-1.404-2.14-1.404s.134.066.335.2h.06c.03 0 .044.015.06.03v.006c.016.016.03.03.06.03.33.136.66.27.93.4.466.202 1.065.403 1.8.536.93.135 1.996.2 3.21 0 .6-.135 1.2-.267 1.8-.535.39-.2.87-.4 1.397-.737 0 0-.6.936-2.205 1.404.33.466.795 1 .795 1 2.744-.06 3.81-1.8 3.87-1.726 0-3.87-1.815-7.02-1.815-7.02-1.635-1.214-3.165-1.26-3.435-1.26l.056-.02zm.168 4.413c.703 0 1.27.6 		1.27 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334.002-.74.573-1.338 1.27-1.338zm-4.543 0c.7 0 1.266.6 1.266 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334 0-.74.57-1.338 1.27-1.338z"/></svg>
							<p class="infoU">B3athunter#9950</p>
							<input class="outOfTheWay" id="discord" type="text" value="B3athunter#9950"/>
						</div>
					</a>
				</div>
				<!-- <div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="copy('B3athunter#9950')">
						<div class="detail">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Microsoft Word icon</title><path d="M23.999 3.733V20.28c0 .141-.05.255-.149.346-.101.094-.221.138-.36.138h-8.559v-2.295h6.982v-1.045h-6.988v-1.279h6.982v-1.044H14.93v-1.29h6.98v-1.032h-6.98v-1.293h6.98v-1.044h-6.98V9.163h6.98V8.12h-6.98V6.815h6.98v-.994h-6.98V3.228h8.562c.149 0 .27.048.358.149.105.099.15.22.149.356zM13.65.641v22.722L0 21.001V3.067L13.65.637v.004zm-2.06 6.708l-1.709.105-1.096 6.785H8.76c-.054-.321-.255-1.445-.615-3.367l-.639-3.263-1.604.08-.642 3.183c-.375 1.854-.584 2.933-.639 3.236h-.015l-.975-6.25-1.47.078 1.575 7.883 1.634.105.615-3.068c.36-1.8.57-2.846.615-3.132h.045c.061.305.256 1.374.615 3.21l.615 3.158 1.77.105 1.98-8.85h-.035z"/></svg>
							<p class="infoU">CV</p>
						</div>
					</a>
				</div> -->
			</div>
		</div>
	</body>
</html>
