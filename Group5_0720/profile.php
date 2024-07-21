<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentPreneur</title>
    <link rel="stylesheet" href="style5.css">
</head>

<body>
    <?php include 'header.php';
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
        <!--分成card！！！！！！！！！！！！-->
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
          <div class="profile-section">
            <h3>Profile</h3>
            <a href="network.html"><h3>Network</h3></a>
            <div>
              <p>
              <?php echo isset($user['description']) ?>
              </p>
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
              <li>
                HTML/CSS: Expert in creating clean, semantic, and responsive
                layouts.
              </li>
              <li>
                JavaScript: Proficient in vanilla JavaScript and popular
                frameworks like React and Angular.
              </li>
              <li>
                Version Control: Experienced with Git and GitHub for
                collaborative projects.
              </li>
              <li>
                UI/UX Design: Strong understanding of user experience principles
                and design tools like Figma and Adobe XD.
              </li>
              <li>
                Performance Optimization: Skilled in optimizing websites for
                speed and performance.
              </li>
              <li>APIs: Experience with RESTful API integration and AJAX.</li>
            </ul>
          </div>
        </div>
<!--分成card！！！！！！-->
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
      <?php include 'footer.php'; ?>
    </div>

  </body>
</html>
