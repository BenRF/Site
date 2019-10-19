<div class="project">
    <div class="icon">
      <?php
        echo file_get_contents("./projects/BenM/icon.svg");
      ?>
    </div>
    <p class="projectTitle" style="color: #4287f5; ">BenM</p>
    <p class="projectDescription">
        A simple web app and phone app messenger bridging from a customers browser
        to the site owners phone allowing for an easier way of keeping in touch
        with potential customers. Using WebSockets in the nodeJS server allowing
        for the javascript client to message the React Native client seamlessly.
    </p>
    <div class="drawing">
        <div class="monitor">
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
        </div>
        <div class="phone">
            <!-- <div class="phoneDrawing">
              <div class="phoneScreen">
                <div class="drawnMsgP recievedP">Hey</div>
                <div class="drawnMsgP sentP">Hi there, how can I help?</div>
                <div class="drawnMsgP recievedP">I just had a question about your previous work experience</div>
                <div class="msgBarP">
                  <div class="msgInput"></div>
                </div>
              </div>
              <div class="phoneButton"></div>
            </div> -->
        </div>
    </div>
</div>
