<div class="project" style="background: #4192cc; height: 375px;">
  <div class="desc">
    <div class="icon">
      <?php
        echo file_get_contents("./projects/BenM/icon.svg");
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
