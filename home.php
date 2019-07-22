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
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto&display=swap" rel="stylesheet">
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
			<style>
				div.screen {
					box-shadow: 1px 1px 3px #28303a;
					position: absolute;
					height: 400px;
					width: 650px;
					background: #28303a;
					border-radius: 20px;
					top: 15%;
					left: calc(50% - 350px);
					padding: 0px;
				}
				div.innerScreen {
					box-shadow: inset 0px 0px 6px 0px #28303a;
					padding: 0px;
					background: #333d4a;
					width: 93%;
					height: 88%;
					border-radius: 3px;
					margin-left: 3.5%;
					margin-top: 3.5%;
				}
				div.stand {
					box-shadow: inset 7px 0px 15px -10px #6b7785, inset -7px 0px 15px -10px #6b7785;
					background: #212830;
					width: 75px;
					height: 100px;
					position: absolute;
					left: calc(50% - 60px);
					top: 475px;
					border-radius: 0px;
				}
				div.base {
					filter: drop-shadow(0 1px 5px rgba(0,0,0,.5));
					border-bottom: 75px solid #28303a;
					border-left: 25px solid transparent;
					border-right: 25px solid transparent;
					height: 0;
					width: 150px;
					position: absolute;
					top: 535px;
					left: calc(50% - 120px);
					border-radius: 23px;
				}
				div.desk {
					box-shadow: 0px 0px 5px #212830;
					background: #755b28;
					width: 100%;
					height: 195px;
					position: absolute;
					bottom: 10px;
				}
				div.pcSide {
					clip-path: polygon(0 70%, 0 0, 100% 25%, 100% 100%);
					background: #28303a;
					width: 125px;
					height: 600px;
					position: absolute;
					right: 100px;
					bottom: 20px;
				}
				div.pcFront {
					background: #2e3742;
					width: 100px;
					height: 450px;
					position: absolute;
					right: 0px;
					bottom: 20px;
				}
				div.pcTop {
					clip-path: polygon(33% 100%, 0 0, 50% 0, 85% 100%);
					background: #313b47;
					width: 375px;
					height: 150px;
					position: absolute;
					right: -150px;
					bottom: 469px;
				}
			</style>
			<div class="desk"></div>
			<div class="pcSide"></div>
			<div class="pcFront"></div>
			<div class="pcTop"></div>
			<div class="base"></div>
			<div class="stand"></div>
			<div class="screen">
				<div class="innerScreen"></div>
			</div>
			<p id="cmd2" class="cmd"></p>
		  <p id="cmd1" class="cmd">Site:/> <b id="bl" class="blink"> _</b></p>
		</div>
		<div id="about" class="aboutLock">
			<div class="about">
				<img class="self" src="./self.jpg"/>
				<p class="about">
					I am currently studying Computer science at the University of Essex and am just about to start my third and final year of the course.
				</p>
				<p class="about">
					My main interest in coding comes from the enjoyment of finding solutions regardless of if it's getting a complex feature or creating a
					clear design for a user to interact with.
				</p>
				<p class="about">
					I believe that thanks to this I have been able to create a website that portrays my passion for design and my attention to detail while
					sufficiently
				</p>
				<p class="about">
					While my main focus is to finish my degree, I am always looking for and are more than welcome to opportunities that can help me gain more experience outside of university.
				</p>
			</div>
		</div>
		<div id="projects" class="projectLock">
			<?php
			$p = scandir("./projects");
			$count = 0;
			foreach ($p as $project) {
				if ($count > 1) {
					$col = file_get_contents("./projects/".$project."/col.txt");
					echo '<a href="https://github.com/BenRF/BenM-app-">';
					echo '<div class="card">';
						echo '<div class="title">';
							echo file_get_contents("./projects/".$project."/icon.svg");
							echo '<p class="projectTitle" style="color: '.$col.'">'.$project.'</p>';
						echo '</div>';
						echo '<img src="./projects/'.$project.'/base.jpg" class="card"/>';
						echo '<p class="projectDesc">'. file_get_contents("./projects/".$project."/desc.txt") .'</p>';
					echo '</div>';
					echo '</a>';
				}
				$count = $count + 1;
			}
			?>
		</div>
		<div id="contact" class="contactLock">
			<div id="benMApp" class="benM">
				<div class="msg">
					<input class="msg" type="text"/>
				</div>
			</div>
			<div class="details">
				<div class="detail">
					<img class="detail" src="icons/mail.png" height="80" width="80">
					<a href="mailto:benramsayfoster@gmail.com"><p class="detail link2" style="color: #e75a4d !important;">benramsayfoster@gmail.com</p></a>
				</div>
				<div class="detail">
					<img class="detail" src="icons/git.png" height="80" width="80">
					<a href="https://github.com/BenRF"><p class="detail link">BenRF</p></a>
				</div>
				<div class="detail">
					<img class="detail" src="icons/discord.png" height="80" width="80">
					<p class="detail" style="color: #7289da !important;">B3athunter #9950</p>
				</div>
			</div>
		</div>
	<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
	<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
	<!–– <script src="benM/benM.js"></script> ––>
	</body>
</html>
