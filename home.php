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
			<div class="project" style="background: #4192cc; height: 375px;">
			<div class="desc">
				<div class="icon">
					<?php
						echo file_get_contents("./projects/BenM (client)/icon.svg");
					?>
				</div>
				<p class="projectTitle">BenM</p>
				<p class="projectDescription">
					A web application that allows for a site owner to offer live chat functionality on their website using their mobile phone. Using NodeJS for websockets between the
					Javascript web client and the React Native phone app allowing for easier and more accessible communication with potential customers.
				</p>
				<div class="projectLinks">
					<div class="projectLink">
						<p class="projectButtonTag">Try it out</p>
					</div>
				</div>
			</div>
			<div class="drawing">
				<div class="base"></div>
				<div class="stand"></div>
				<div class="screen">
						<div class="innerScreen">
							<div class="window">
								<div class="windowHeader">
									<div class="headerBar">benrf.co.uk</div>
									<div class="headerButtons">
										<div class="headerBack"><</div>
										<div class="headerForward">></div>
									</div>
									<div class="windowTabs">
										<div class="windowMini"></div>
										<div class="windowClose"></div>
									</div>
								</div>
								<div class="chatC">
									<div class="msgC">
										<div class="sentC">Hey</div>
									</div>
									<div class="msgC">
										<div class="recievedC">Hi there, how can I help?</div>
									</div>
									<div class="msgC">
										<div class="sentC">I just had a question about your previous work experience</div>
									</div>
								</div>
								<div class="msgBarC">
									<div class="msgInput"></div>
								</div>
							</div>
							<div class="taskBar">
								<div class="windowStart"></div>
							</div>
						</div>
				</div>
				<div class="phoneDrawing">
					<div class="phoneScreen">
						<div class="drawnMsgP recievedP">Hey</div>
						<div class="drawnMsgP sentP">Hi there, how can I help?</div>
						<div class="drawnMsgP recievedP">I just had a question about your previous work experience</div>
						<div class="msgBarP">
							<div class="msgInput"></div>
						</div>
					</div>
					<div class="phoneButton"></div>
				</div>
		</div>
			</div>
			<div class="project" style="background: #686e70; height: 375px; box-shadow: inset 0px 0px 8px 0px #545354;">
				<div class="screepsDrawing">
					<div class="rock" style="width: 50px; height: 325px; top: 25px; left: -25px;"></div>
					<div class="rock" style="width: 50px; height: 100px; top: 75px; left: -5px;"></div>
					<div class="rock" style="width: 75px; height: 100px; top: 125px; left: -5px;"></div>
					<div class="rock" style="width: 75px; height: 75px; top: 250px; left: -25px;"></div>

					<div class="rock" style="width: 50px; height: 175px; top: 400px; left: -20px;"></div>
					<div class="rock" style="width: 75px; height: 150px; top: 425px; left: -20px;"></div>
					<div class="rock" style="width: 50px; height: 50px; top: 475px; left: 25px;"></div>

					<div class="rock" style="width: 175px; height: 50px; top: -20px; left: 75px;"></div>
					<div class="rock" style="width: 75px; height: 75px; top: -20px; left: 175px;"></div>
					<div class="rock" style="width: 35px; height: 100px; top: -20px; left: 175px;"></div>

					<div class="rock" style="width: 200px; height: 50px; top: -20px; left: 200px;"></div>

					<div id="screep1" class="screep" style="left: -22.5px; top: 2.5px"></div>
					<div id="screep2" class="screep" style="left: -47.5px; top: 350px"></div>
				</div>
				<div class="stats">
					<div class="innerStat">
						<?php
							$stats = array("Rooms owned","Units","Average unit cost","Average room level");
							foreach ($stats as $s) {
								echo '<div class="stat">';
									echo '<p class="statLabel">'.$s.'</p>';
									echo '<p class="stat">0</p>';
								echo '</div>';
							}
						?>
					</div>
				</div>
				<div class="desc" style="padding-left: 650px;">
					<div class="icon">
						<?php
							echo file_get_contents("./projects/Screeps/icon.svg");
						?>
					</div>
					<p class="projectTitle">Screeps</p>
					<p class="projectDescription" style="max-width: 80%;">
						An online MMO based around programming units using Javascript. Requires solutions to be scalable and robust to deal with both other players
						and AI opponents. A good passtime to keep occupied between projects and to introduce new problems to solve without compromising previous work.
					</p>
				</div>
			</div>
		</div>
		<div id="contact" class="contactLock">
			<p class="contactTitle">Get in touch</p>
			<div id="alert" class="alert hideAlert">
				<p class="alert">Copied to your clipboard</p>
			</div>
			<div class="details">
				<div class="outerDetail">
					<a class="hidden" target="_blank" href="https://github.com/BenRF">
						<div class="detail">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
							<p class="infoU">Github</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" target="_blank" href="mailto:benramsayfoster@gmail.com">
						<div class="detail">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail icon</title><path d="M24 4.5v15c0 .85-.65 1.5-1.5 1.5H21V7.387l-9 6.463-9-6.463V21H1.5C.649 21 0 20.35 0 19.5v-15c0-.425.162-.8.431-1.068C.7 3.16 1.076 3 1.5 3H2l10 7.25L22 3h.5c.425 0 .8.162 1.069.432.27.268.431.643.431 1.068z"/></svg>
							<p class="infoU">benramsayfoster@gmail.com</p>
						</div>
					</a>
				</div>
				<div class="outerDetail">
					<a class="hidden" href="javascript:void(0)" onclick="copy()">
						<div class="detail">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord icon</title><path d="M20.222 0c1.406 0 2.54 1.137 2.607 2.475V24l-2.677-2.273-1.47-1.338-1.604-1.398.67 2.205H3.71c-1.402 0-2.54-1.065-2.54-2.476V2.48C1.17 1.142 2.31.003 3.715.003h16.5L20.222 0zm-6.118 5.683h-.03l-.202.2c2.073.6 3.076 1.537 3.076 1.537-1.336-.668-2.54-1.002-3.744-1.137-.87-.135-1.74-.064-2.475 0h-.2c-.47 0-1.47.2-2.81.735-.467.203-.735.336-.735.336s1.002-1.002 3.21-1.537l-.135-.135s-1.672-.064-3.477 1.27c0 0-1.805 3.144-1.805 7.02 0 0 1 1.74 3.743 1.806 0 0 .4-.533.805-1.002-1.54-.468-2.14-1.404-2.14-1.404s.134.066.335.2h.06c.03 0 .044.015.06.03v.006c.016.016.03.03.06.03.33.136.66.27.93.4.466.202 1.065.403 1.8.536.93.135 1.996.2 3.21 0 .6-.135 1.2-.267 1.8-.535.39-.2.87-.4 1.397-.737 0 0-.6.936-2.205 1.404.33.466.795 1 .795 1 2.744-.06 3.81-1.8 3.87-1.726 0-3.87-1.815-7.02-1.815-7.02-1.635-1.214-3.165-1.26-3.435-1.26l.056-.02zm.168 4.413c.703 0 1.27.6 		1.27 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334.002-.74.573-1.338 1.27-1.338zm-4.543 0c.7 0 1.266.6 1.266 1.335 0 .74-.57 1.34-1.27 1.34-.7 0-1.27-.6-1.27-1.334 0-.74.57-1.338 1.27-1.338z"/></svg>
							<p class="infoU">B3athunter#9950</p>
							<input class="outOfTheWay" id="discord" type="text" value="B3athunter#9950"/>
						</div>
					</a>
				</div>
			</div>
		</div>
	</body>
</html>
