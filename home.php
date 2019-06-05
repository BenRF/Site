<html>
	<head>
		<title>Ben R F</title>
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
			<a href="javascript:void(0)" onclick="sTo(0)"> <p class="title">Ben Ramsay Foster</p> </a>
			<a href="javascript:void(0)" onclick="sTo(3)"> <p class="header c">Contact</p> </a>
			<a href="javascript:void(0)" onclick="sTo(2)"> <p class="header p">Projects</p> </a>
			<a href="javascript:void(0)" onclick="sTo(1)"> <p class="header a">About</p> </a>
			<div id="scroll" class="scroll underTitle"></div>
		</div>
		<div id="main" class="typingLock">
			<p id="typing" class="type"></p>
			<p id="typing1" class="type"></p>
			<p id="typing2" class="type"></p>
			<p id="typing3" class="type"></p>
		</div>
		<div id="about" class="aboutLock">
			<div class="about">
				<p class="about">I want to start with a story from the Onion. Because really, shouldn’t every talk start with a story from the Onion? This is from earlier this year.
The headline reads: “Nation Shudders At Large Block Of Uninterrupted Text.”
“Unable to rest their eyes on a colorful photograph or boldface heading that could be easily skimmed and forgotten, Americans collectively recoiled Monday when confronted with a solid block of uninterrupted text.
“Dumbfounded citizens from Maine to California gazed helplessly at the frightening chunk of print, unsure of what to do next.
“Without an illustration, chart, or embedded YouTube video to ease them in, millions were frozen in place, terrified by the sight of one long, unbroken string of English words.
” ‘It demands so much of my time and concentration,’ said Chicago resident Dale Huza, who was confronted by the confusing mound of words early Monday afternoon. ‘This large block of text, it expects me to figure everything out on my own, and I hate it.’ ”
This is a sign of how rough the outlook sometimes seems for our culture of reading and writing.
In fact, every generation fears the death of literacy at the hands of some new media technology. And yet I’m here to share some optimism. After long existence as a confirmed cynic who shared the general belief in our imminent cultural doom, I felt an unfamiliar sensation 15 years ago when the Internet came over the horizon: I found myself becoming excited and hopeful.
When I looked at the Internet I saw a medium that involves a huge amount of reading. Sure, a lot of it is presented in a highly decorated or distracting form. But a lot of it is in large blocks of uninterrupted text, too!
And there’s something even more significant: The Web isn’t just inspiring a lot of reading. it has also opened the opportunity for a stunning amount of new writing.
When I was growing up in the 1960s and 70s, the chief fear on behalf of literary culture was that television was going to destroy it. What if we were becoming a nation of passive, glassy-eyed couch potatoes — mindless consumers of numbing video entertainment?</p>
			</div>
		</div>
		<div id="projects" class="projectLock">
			<div class="projectSelect">
				<a href="javascript:void(0)" onclick="pick('screeps')"><p id="screeps" class="project">Screeps</p></a>
				<a href="javascript:void(0)" onclick="pick('benm')"><p id="benm" class="project">BenM</p></a>
			</div>
			<div id="projectDisplay" class="projectDisplay" onscroll=""></div>
		</div>
		<div id="contact" class="contactLock">
			<div id="benM" class="benM"></div>
			<div class="details">
				<div class="detail">
					<img class="detail" src="icons/phone.png" height="80" width="80">
					<p class="detail">07507764316</p>
				</div>
				<div class="detail">
					<img class="detail" src="icons/mail.png" height="80" width="80">
					<p class="detail" style="color: #e75a4d !important;">benramsayfoster@gmail.com</p>
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
	</body>
</html>
