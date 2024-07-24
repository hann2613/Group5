<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style_02.css" />
  <title>StudentPreneur Profile</title>
</head>

<body>
  <header>
    <nav>
      <div class="logo"><a href="post.php">StudentPreneur</a></div>
      <a href="post.php">Home</a>
      <a href="learning.php">Learning</a>
      <a href="event.php">Events</a>
      <a href="globalConnections.php">Global Connections</a>
      <div class="icons">
        <a href="teamprofile.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path d="M0-240v-63q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z" />
          </svg></a>
        <a href="message.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path d="M240-400h320v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z" />
          </svg></a>
        <a href="profile.php"> <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
          </svg> </a>
        <a href="setup_team.php"><button class="teamup-btn">Team Up</button></a>
        <?php if (isset($_SESSION['user_id'])) : ?>
          <form action="logout.php" method="post" style="display:inline;">
            <button type="submit" id="logout-btn">Logout</button>
          </form>
        <?php endif; ?>
      </div>
    </nav>
  </header>
  <?php
  require('model/database.php');
  require('model/user_db.php');
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header("Location: post.php");
    exit();
  }

  $userId = $_SESSION['user_id'];
  $user = get_user($userId);
  ?>

  <div class="profile-main">
    <div class="profile-sidebar">
      <img src="<?php echo htmlspecialchars($user['avatar']); ?>" alt="profile-img" class="profile-img" />
      <h2><?php echo htmlspecialchars($user['firstName']); ?></h2>
      <p><?php echo htmlspecialchars($user['description']); ?></p>
      <p class="profile-location"><?php echo htmlspecialchars($user['location']); ?></p>
      <p class="profile-university"><?php echo htmlspecialchars($user['university']); ?></p>
      <p class="profile-email"><?php echo htmlspecialchars($user['email']); ?></p>
      <p class="profile-phone"><?php echo htmlspecialchars($user['phone']); ?></p>
      <div class="profile-social">
        <a href="#">Twitter</a>
        <a href="#">GitHub</a>
        <a href="#">LinkedIn</a>
        <a href="#">Instagram</a>
      </div>
      <div class="premium-plan">
        <h3>Basic Premium Plan</h3>
        <p>€39/mo</p>
        <ul>
          <li>Enjoy unlimited access to all courses.</li>
          <li>Create and host your own live broadcasts.</li>
          <li>Get 90% discounts when booking mentor sessions.</li>
        </ul>
        <button class="get-started-btn">Get started</button>
      </div>
    </div>

    <div class="profile-content">
      <div class="tabs">
        <button class="tablink" onclick="openTab(event, 'Profile')" id="defaultOpen">Profile</button>
        <button class="tablink" onclick="openTab(event, 'Network')">Network</button>
        <button class="tablink" onclick="openTab(event, 'Posts')">Posts</button>
      </div>

      <div id="Profile" class="tabcontent">
        <div class="profile-section">
          <h3>Profile</h3>
          <div>
            <p>Hi, I'm Emma Rivera, a web developer and recent graduate passionate about creating dynamic and responsive websites...</p>
          </div>
        </div>
        <div class="profile-section">
          <h3>Fields</h3>
          <ul>
            <li>Web Development</li>
            <li>UI/UX Design</li>
            <li>E-commerce</li>
            <li>Education Technology</li>
            <li>Healthcare Technology</li>
          </ul>
        </div>
        <div class="profile-section">
          <h3>Skills</h3>
          <ul>
            <li>HTML/CSS: Expert in creating clean, semantic, and responsive layouts.</li>
            <li>JavaScript: Proficient in vanilla JavaScript and popular frameworks like React and Angular.</li>
            <li>Version Control: Experienced with Git and GitHub for collaborative projects.</li>
            <li>UI/UX Design: Strong understanding of user experience principles and design tools like Figma and Adobe XD.</li>
            <li>Performance Optimization: Skilled in optimizing websites for speed and performance.</li>
            <li>APIs: Experience with RESTful API integration and AJAX.</li>
          </ul>
        </div>
      </div>

      <div id="Network" class="tabcontent">
        <h3>Network</h3>
        <div class="network-list">
          <div class="network-item">
            <p>No connections yet? Start networking with other entrepreneurs, industry experts, and potential partners today! Expand your professional network and unlock new opportunities. Take action now and seize the chance!</p>
          </div>
        </div>

        <div id="Posts" class="tabcontent">
          <h3>Posts</h3>
          <p>Your posts will appear here...</p>
        </div>
      </div>

      <div class="profile-sidebar-right">
        <div class="profile-courses">
          <h3>My Courses</h3>
          <ul>
            <li>Crowdfunding Success</li>
            <li>Innovating for the Future</li>
            <li>Digital Marketing Mastery</li>
          </ul>
        </div>
        <div class="profile-events">
          <h3>My Events</h3>
          <ul>
            <li>Startup Pitch Competition - July 18, 2024, 3:00 PM</li>
          </ul>
        </div>
        <div class="profile-mentors">
          <h3>Booked Mentors</h3>
          <ul>
            <li>Shaon Alam - July 20, 2024, 3:00 PM</li>
          </ul>
        </div>
        <div class="profile-live-sessions">
          <h3>My Live Sessions</h3>
          <p>You have not initiated any live sessions.</p>
          <button class="get-started-btn">Start My Live Session</button>
        </div>
      </div>
    </div>

    <?php include 'footer.php' ?>

    <script>
      function openTab(evt, tabName) {
        var i, tabcontent, tablinks;


        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      document.getElementById("defaultOpen").click();
    </script>
</body>

</html>