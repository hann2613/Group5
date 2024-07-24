<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudentPreneur</title>
    <link rel="stylesheet" href="style5.css" />
  </head>
  <body>
  <?php include 'header.php';?>

    <main id="app" class="container">
      <section class="sidebar">
        <input type="text" class="search-bar" placeholder="Search" />
        <div class="my-team">
          <h2>My Team</h2>
          <div class="team-group">
            <div class="team-item active">
              <div class="team-name">Innovate Hub</div>
              <div class="team-last-message">
                <span>Today, 9:02</span>
                <p>Thanks, everyone! Let's make sure...</p>
              </div>
            </div>
            <div class="team-item">
              <div class="team-name">Workspace</div>
              <div class="team-last-message">
                <span>8:02</span>
                <p>Maya uploaded 'Project_Plan_Revision.pd...</p>
              </div>
            </div>
          </div>
        </div>
        <div class="people">
          <h2>People</h2>
          <div class="person">
            <div class="person-name">Javier</div>
            <div class="person-last-message">
              <span>Today, 8:52</span>
              <p>Got the latest updates in. Can you...</p>
            </div>
          </div>
          <div class="person">
            <div class="person-name">Damon</div>
            <div class="person-last-message">
              <span>Today, 7:21</span>
              <p>Just saw the revised marketing pl...</p>
            </div>
          </div>
          <div class="person">
            <div class="person-name">Sammy</div>
            <div class="person-last-message">
              <span>Yesterday, 20:02</span>
              <p>Thank you for today! The insights...</p>
            </div>
          </div>
          <div class="person">
            <div class="person-name">Dean</div>
            <div class="person-last-message">
              <span>20 June, 1:13</span>
              <p>Really excited about the ideas we...</p>
            </div>
          </div>
          <div class="person">
            <div class="person-name">Carl</div>
            <div class="person-last-message">
              <span>18 June, 8:02</span>
              <p>If you check and give feedbacks...</p>
            </div>
          </div>
        </div>
      </section>
      <section class="chat-section">
        <div class="chat-header">
          <div class="chat-title">Innovate Hub</div>
          <div class="chat-status">Online - Last seen, 9:20</div>
          <div class="chat-actions">
            <button class="action-btn">📞</button>
            <button class="action-btn">💬</button>
            <button class="action-btn">⋮</button>
          </div>
        </div>
        <div class="chat-messages" id="chat-messages">
          <div class="message">
            <div class="message-info">
              <strong>Maya</strong> <span>Today, 8:30</span>
            </div>
            <p>
              Hey everyone, just a quick update: the prototype for our interface
              is ready for review. Please check it out and give your feedback by
              Friday!
            </p>
          </div>
          <div class="message">
            <div class="message-info">
              <strong>Javier</strong> <span></span>
            </div>
            <p>
              Great work, Maya! I'll look into the backend integration for the
              user profiles tonight.
            </p>
          </div>
          <div class="message">
            <div class="message-info"><strong>Amy</strong> <span></span></div>
            <p>
              I've added some initial designs for the chat features on our
              platform. Please let me know if they align with our usability
              goals.
            </p>
          </div>
          <div class="message">
            <div class="message-info">
              <strong>Maya</strong> <span>Today, 9:02</span>
            </div>
            <p>
              Thanks, everyone! Let's make sure we address all the feedback and
              keep the momentum going. Excited to see where we're heading!
            </p>
          </div>
        </div>
        <div class="chat-input">
          <input
            type="text"
            id="message-input"
            placeholder="Type your message..."
          />
          <button id="send-button" class="btn-send">Send</button>
          <button>😊</button>
          <button>🎤</button>
          <button>📎</button>
          <button>⋮</button>
        </div>
      </section>
    </main>

    <?php include 'footer.php';?>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const messageInput = document.getElementById("message-input");
        const sendButton = document.getElementById("send-button");
        const chatMessages = document.getElementById("chat-messages");

        const messages = [
          {
            user: "Maya",
            text: "Hey everyone, just a quick update: the prototype for our interface is ready for review. Please check it out and give your feedback by Friday!",
            time: "Today, 8:30",
          },
          {
            user: "Javier",
            text: "Great work, Maya! I'll look into the backend integration for the user profiles tonight.",
            time: "Today, 8:45",
          },
          {
            user: "Amy",
            text: "I've added some initial designs for the chat features on our platform. Please let me know if they align with our usability goals.",
            time: "Today, 8:50",
          },
          {
            user: "Maya",
            text: "Thanks, everyone! Let's make sure we address all the feedback and keep the momentum going. Excited to see where we're heading!",
            time: "Today, 9:02",
          },
        ];

        function renderMessages() {
          chatMessages.innerHTML = "";
          messages.forEach((message) => {
            const messageElement = document.createElement("div");
            messageElement.classList.add("message");
            messageElement.innerHTML = `
            <div class="message-info">
              <strong>${message.user}</strong> <span>${message.time}</span>
            </div>
            <p>${message.text}</p>
          `;
            chatMessages.appendChild(messageElement);
          });
        }

        function sendMessage() {
          const text = messageInput.value.trim();
          if (text === "") return;

          const newMessage = {
            user: "User",
            text: text,
            time: new Date().toLocaleTimeString(),
          };
          messages.push(newMessage);
          renderMessages();
          messageInput.value = "";
          chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        sendButton.addEventListener("click", sendMessage);
        messageInput.addEventListener("keyup", (event) => {
          if (event.key === "Enter") {
            sendMessage();
          }
        });

        renderMessages();
      });
    </script>
  </body>
</html>
