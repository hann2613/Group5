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

      include 'header.php';
      require('model/database.php');
      require('model/course_db.php');

      $courses = get_courses();
      ?>

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