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
			<p class="contactDesc">Look through all these links, or just ask.</p>
			<div id="alert" class="alert hideAlert">
				<p class="alert">Copied to your clipboard</p>
			</div>
			<div class="details">
				<div class="outerDetail">
					<a class="hidden" target="_blank" href="https://github.com/BenRF">
						<div class="detail">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
							<p class="infoU">BenRF</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="copy('benramsayfoster@gmail.com')">
						<div class="detail">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail icon</title><path d="M24 4.5v15c0 .85-.65 1.5-1.5 1.5H21V7.387l-9 6.463-9-6.463V21H1.5C.649 21 0 20.35 0 19.5v-15c0-.425.162-.8.431-1.068C.7 3.16 1.076 3 1.5 3H2l10 7.25L22 3h.5c.425 0 .8.162 1.069.432.27.268.431.643.431 1.068z"/></svg>
							<p class="infoU">benramsayfoster@gmail.com</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="copy('B3athunter#9950')">
						<div class="detail">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord icon</title><path d="M20.222 0c1.406 0 2.54 1.137 2.607 2.475V24l-2.677-2.273-1.47-1.338-1.604-1.398.67 2.205H3.71c-1.402 0-2.54-1.065-2.54-2.476V2.48C1.17 1.142 2.31.003 3.715.003h16.5L20.222 0zm-6.118 5.683h-.03l-.202.2c2.073.6 3.076 1.537 3.076 1.537-1.336-.668-2.54-1.002-3.744-1.137-.87-.135-1.74-.064-2.475 0h-.2c-.47 0-1.47.2-2.81.735-.467.203-.735.336-.735.336s1.002-1.002 3.21-1.537l-.135-.135s-1.672-.064-3.477 1.27c0 0-1.805 3.144-1.805 7.02 0 0 1 1.74 3.743 1.806 0 0 .4-.533.805-1.002-1.54-.468-2.14-1.404-2.14-1.404s.134.066.335.2h.06c.03 0 .044.015.06.03v.006c.016.016.03.03.06.03.33.136.66.27.93.4.466.202 1.065.403 1.8.536.93.135 1.996.2 3.21 0 .6-.135 1.2-.267 1.8-.535.39-.2.87-.4 1.397-.737 0 0-.6.936-2.205 1.404.33.466.795 1 .795 1 2.744-.06 3.81-1.8 3.87-1.726 0-3.87-1.815-7.02-1.815-7.02-1.635-1.214-3.165-1.26-3.435-1.26l.056-.02zm.168 4.413c.703 0 1.27.6 		1.27 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334.002-.74.573-1.338 1.27-1.338zm-4.543 0c.7 0 1.266.6 1.266 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334 0-.74.57-1.338 1.27-1.338z"/></svg>
							<p class="infoU">B3athunter#9950</p>
							<input class="outOfTheWay" id="discord" type="text" value="B3athunter#9950"/>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="copy('B3athunter#9950')">
						<div class="detail">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Microsoft Word icon</title><path d="M23.999 3.733V20.28c0 .141-.05.255-.149.346-.101.094-.221.138-.36.138h-8.559v-2.295h6.982v-1.045h-6.988v-1.279h6.982v-1.044H14.93v-1.29h6.98v-1.032h-6.98v-1.293h6.98v-1.044h-6.98V9.163h6.98V8.12h-6.98V6.815h6.98v-.994h-6.98V3.228h8.562c.149 0 .27.048.358.149.105.099.15.22.149.356zM13.65.641v22.722L0 21.001V3.067L13.65.637v.004zm-2.06 6.708l-1.709.105-1.096 6.785H8.76c-.054-.321-.255-1.445-.615-3.367l-.639-3.263-1.604.08-.642 3.183c-.375 1.854-.584 2.933-.639 3.236h-.015l-.975-6.25-1.47.078 1.575 7.883 1.634.105.615-3.068c.36-1.8.57-2.846.615-3.132h.045c.061.305.256 1.374.615 3.21l.615 3.158 1.77.105 1.98-8.85h-.035z"/></svg>
							<p class="infoU">CV</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</body>
</html>
