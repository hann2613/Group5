<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudentPreneur Message</title>
    <link rel="stylesheet" href="style9.css" />
  </head>
  <body>
  

    <main id="app">
    <?php include 'header.php'; ?>
      <div class="container">
        <div class="sidebar">
            <input type="text" class="search-bar" placeholder="Search">
            <div class="section">
                <div class="section-title">My Team</div>
                <ul class="team">
                    <li>
                        <div>
                            <div>Innovate Hub</div>
                            <div class="time">Today, 9:02</div>
                        </div>
                        <div>1</div>
                    </li>
                    <li>
                        <div>Workspace</div>
                        <div class="time">8:02</div>
                    </li>
                </ul>
            </div>
            <div class="section">
                <div class="section-title">People</div>
                <ul class="people">
                    <li>
                        <div>
                            <div>Javier</div>
                            <div class="time">Today, 8:52</div>
                        </div>
                        <div>5</div>
                    </li>
                    <li>
                        <div>Damon</div>
                        <div class="time">Today, 7:21</div>
                    </li>
                    <li>
                        <div>Sammy</div>
                        <div class="time">Yesterday, 20:02</div>
                    </li>
                    <li>
                        <div>Dean</div>
                        <div class="time">20 June, 1:13</div>
                    </li>
                    <li>
                        <div>Carl</div>
                        <div class="time">18 June, 8:02</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="chat">
                <div class="chat-header">
                    <h2>Innovate Hub</h2>
                    <div class="status">Online - Last seen, 9:20</div>
                </div>

                <div class="chat-messages">
                  <div class="chat-message">
                      <div class="message">
                          <p><strong>Maya</strong></p>
                          <p>Hey everyone, just a quick update: the prototype for our interface is ready for review. Please check it out and give your feedback by Friday!</p>
                          <div class="time">Today, 8:30</div>
                      </div>
                  </div>
                  <div class="chat-message">
                      <div class="message">
                          <p><strong>Javier</strong></p>
                          <p>Great work, Maya! I’ll look into the backend integration for the user profiles tonight.</p>
                          <div class="time">Today, 8:45</div>
                      </div>
                  </div>
                  <div class="chat-message">
                      <div class="message">
                          <p><strong>Amy</strong></p>
                          <p>I’ve added some initial designs for the chat features on our platform. Please let me know if they align with our usability goals.</p>
                          <div class="time">Today, 8:50</div>
                      </div>
                  </div>
                  <div class="chat-message">
                      <div class="message">
                          <p><strong>Amy</strong></p>
                          <p>Also, I’ve compiled the latest feedback from our survey. It looks like users are really interested in the mentorship matching feature. We should prioritize that in our next sprint.</p>
                          <div class="time">Today, 8:55</div>
                      </div>
                  </div>
                  <div class="chat-message">
                      <div class="message">
                          <p><strong>Maya</strong></p>
                          <p>Thanks, everyone! Let’s make sure we address all the feedback and keep the momentum going. Excited to see where we’re heading!</p>
                          <div class="time">Today, 9:02</div>
                      </div>
                  </div>
              </div>
              <div class="chat-input">
                  <textarea placeholder="Type a message"></textarea>
                  <button>Send</button>
              </div>
          </div>
      </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>

<!-- 
      <section class="chat-container">
        <div class="chat-messages">
          <div
            v-for="(message, index) in messages"
            :key="index"
            class="message"
          >
            <strong>{{ message.user }}:</strong> {{ message.text }}
          </div>
        </div>
        <div class="chat-input">
          <input
            type="text"
            v-model="newMessage"
            @keyup.enter="sendMessage"
            placeholder="Type your message..."
          />
          <button @click="sendMessage">Send</button>
        </div>
      </section>
    </main>

    <footer>
      <p>&copy; 2024 StudentPreneur. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
      new Vue({
        el: "#app",
        data: {
          messages: [],
          newMessage: "",
        },
        methods: {
          sendMessage() {
            if (this.newMessage.trim() === "") return; // Prevent sending empty messages

            axios
              .post("http://localhost:8000/api/send_message.php", {
                user: "User",
                text: this.newMessage,
              })
              .then((response) => {
                console.log("Message sent successfully:", response.data);
                this.newMessage = "";
                this.fetchMessages();
              })
              .catch((error) => {
                console.error("Error sending message:", error);
              });
          },
          fetchMessages() {
            axios
              .get("http://localhost:8000/api/get_messages.php")
              .then((response) => {
                this.messages = response.data;
                // Assuming response.data is an array of message objects
              })
              .catch((error) => {
                console.error("Error fetching messages:", error);
              });
          },
        },
        mounted() {
          this.fetchMessages();
        },
      });
    </script>
  </body>
</html> -->
