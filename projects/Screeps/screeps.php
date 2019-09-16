<script>
//  0  1  2
//  7  C  3
//  6  5  4

var screeps = [
  [0,[3,3,5,4,5,5,4,5,5,5,6,5,5,5,6,6,7,1,1,1,1,1,1,1,1,1,1,1,1,1,1]],
  [0,[3,4,3,4,3,3,3,3,4,3,3,2,3,2,2,2,1,2,2,3,3,5,4,4,4,6,7,7,7,7,7,7,7,6,7,7,7,7,7,7,7,0,7,7,7,7,7,7,1]],
  [0,[5,4,4,3,4,4,3,3,2,3,3,3,3,3,2,2,1,1,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7]]
];
var movement;
function screep() {
  for (var i = 1; i <= screeps.length; i++) {
    var s = document.getElementById("screep" + i);
    var currentMove = screeps[i-1][0];
    var p = screeps[i-1][1][currentMove];
    if (p == 0) {
      screepUp(s);
      screepLeft(s);
    } else if (p == 1) {
      screepUp(s);
    } else if (p == 2) {
      screepUp(s);
      screepRight(s);
    } else if (p == 3) {
      screepRight(s);
    } else if (p == 4) {
      screepDown(s);
      screepRight(s);
    } else if (p == 5) {
      screepDown(s);
    } else if (p == 6) {
      screepDown(s);
      screepLeft(s);
    } else if (p == 7) {
      screepLeft(s);
    }
    if (currentMove == screeps[i-1][1].length) {
      screeps[i-1][0] = 0;
    } else {
      screeps[i-1][0] = screeps[i-1][0] + 1;
    }
  }
}

function screepLeft(screep) {
  var currentPos = screep.style.left;
  currentPos = currentPos.substring(0, currentPos.length - 2);
  screep.style.left = parseInt(currentPos,10) - 25;
}

function screepRight(screep) {
  var currentPos = screep.style.left;
  currentPos = currentPos.substring(0, currentPos.length - 2);
  screep.style.left = parseInt(currentPos,10) + 25;
}

function screepUp(screep) {
  var currentPos = screep.style.top;
  currentPos = currentPos.substring(0, currentPos.length - 2);
  screep.style.top = parseInt(currentPos,10) - 25;
}

function screepDown(screep) {
  var currentPos = screep.style.top;
  currentPos = currentPos.substring(0, currentPos.length - 2);
  screep.style.top = parseInt(currentPos,10) + 25;
}
</script>

<div class="project" style="background: #686e70; height: 375px; box-shadow: inset 0px 0px 8px 0px #545354;">
  <div class="screepsDrawing">
    <div class="rock" style="width: 50px; height: 325px; top: 25px; left: -25px;"></div>
    <div class="rock" style="width: 50px; height: 100px; top: 75px; left: -5px;"></div>
    <div class="rock" style="width: 75px; height: 100px; top: 125px; left: -5px;"></div>
    <div class="rock" style="width: 75px; height: 75px; top: 250px; left: -25px;"></div>

    <div class="rock" style="width: 50px; height: 175px; top: 400px; left: -20px;"></div>
    <div class="rock" style="width: 75px; height: 150px; top: 425px; left: -20px;"></div>
    <div class="rock" style="width: 50px; height: 50px; top: 475px; left: 25px;"></div>

    <div class="rock" style="width: 175px; height: 45px; top: -20px; left: 75px;"></div>
    <div class="rock" style="width: 75px; height: 70px; top: -20px; left: 175px;"></div>
    <div class="rock" style="width: 45px; height: 95px; top: -20px; left: 175px;"></div>
    <div class="rock" style="width: 187px; height: 45px; top: -20px; left: 208px;"></div>
    <div class="rock" style="width: 45px; height: 70px; top: -20px; left: 325px;"></div>

    <div id="screep1" class="screep" style="left: -22.5px; top: 2.5px"></div>
    <div id="screep2" class="screep" style="left: -47.5px; top: 350px"></div>
    <div id="screep3" class="screep" style="left: 27.5px; top: -45.5px"></div>
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
