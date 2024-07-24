<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>StudentPreneur Learning</title>
  </head>

  <body>
    <div id="app">
      <?php 
      require('model/database.php');
      require('model/course_db.php');

      $courses = get_courses();
      ?>
    <header>
        <nav>
          <div class="logo"><a href="post.php">StudentPreneur</a></div>
          <a href="post.php">Home</a>
          <strong class="strong"><a href="learning.php">Learning</a></strong>
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
      <!--Learning page cover-->
      <section class="header-content">
        <div class="overlay"></div>
        <h1>StudentPreneur</h1>
        <p>Learn from the Best in Business</p>
        <button>Join Now</button>
      </section>

      <!--Course section-->
      <section class="courses">
        <h2>Courses You Can't Miss</h2>

        
        <div class="course-list">
          <div class="course-card">
            <img src="img/learning-course1.jpg" alt="Course Image" />
            <h3><?php echo $courses[0]['title']; ?></h3>
            <p><?php echo $courses[0]['description']; ?></p>
            <p>Rate: <?php echo $courses[0]['rate']; ?></p>
          </div>
          <div class="course-card">
            <img src="img/learning-course2.jpg" alt="Course Image" />
            <h3><?php echo $courses[1]['title']; ?></h3>
            <p><?php echo $courses[1]['description']; ?></p>
            <p>Rate: <?php echo $courses[1]['rate']; ?></p>
          </div>
          <div class="course-card">
            <img src="img/learning-course3.jpg" alt="Course Image" />
            <h3><?php echo $courses[2]['title']; ?></h3>
            <p><?php echo $courses[2]['description']; ?></p>
            <p>Rate: <?php echo $courses[2]['rate']; ?></p>
          </div>
        </div>
      </section>

      <!-- Mentor section -->
      <section class="mentors">
            <h2>Meet Our Entrepreneurial Mentors</h2>
            <div class="mentor-list">
                <div class="mentor-card">
                    <img src="img/mentor1.png" alt="Mentor Image" />
                    <h3>Jacob Jones</h3>
                    <p>Marketing Expert & Serial Entrepreneur</p>
                </div>
                <div class="mentor-card">
                    <img src="img/learning-mentor2.png" alt="Mentor Image" />
                    <h3>Emily Davis</h3>
                    <p>Funding Specialist & Startup Advisor</p>
                </div>
                <div class="mentor-card">
                    <img src="img/learning-mentor3.jpg" alt="Mentor Image" />
                    <h3>Emily Davis</h3>
                    <p>Funding Specialist & Startup Advisor</p>
                </div>
            </div>
        </section>

        <!-- Article section -->
        <section class="articles">
            <h2>Featured Articles</h2>
            <div class="article-list">
                <div class="article-card">
                    <h3>wwwwwwwww</h3>
                    <p>xxxxxxxxxxxx</p>
                </div>
            </div>
        </section>

        <!-- Premium part -->
        <section class="pricing">
            <h2>Get More with Premium</h2>
            <div class="pricing-tables">
                <div class="pricing-table">
                    <h3>Basic Plan</h3>
                    <p>€39 /mo</p>
                    <ul>
                        <li>111111</li>
                        <li>2222222222</li>
                    </ul>
                    <button>Subscribe</button>
                </div>
                <div class="pricing-table">
                    <h3>Pro Plan</h3>
                    <p>€49 /mo</p>
                    <ul>
                        <li>333333333333</li>
                        <li>444444444444</li>
                    </ul>
                    <button>Subscribe</button>
                </div>
            </div>
        </section>

    </div>
    <?php include 'footer.php'; ?>
  </body>
  </html>