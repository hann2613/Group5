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
      <?php include 'header.php';
      require('model/database.php');
      require('model/user_db.php');
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
          <div class="course-card" v-for="course in courses" :key="course.id">
            <img :src="course.image" alt="Course Image" />
            <h3>{{ course.title }}</h3>
            <p>{{ course.description }}</p>
            <p>Rate: {{ course.rate }}</p>
          </div>
        </div>
      </section>

      <!--mentor section-->
      <section class="mentors">
        <h2>Meet Our Entrepreneurial Mentors</h2>
        <div class="mentor-list">
          <div class="mentor-card" v-for="mentor in mentors" :key="mentor.id">
            <img :src="mentor.image" alt="Mentor Image" />
            <h3>{{ mentor.name }}</h3>
            <p>{{ mentor.expertise }}</p>
          </div>
        </div>
      </section>

      <!--article section-->
      <section class="articles">
        <h2>Featured Articles</h2>
        <div class="article-list">
          <div class="article-card">
            <h3>wwwwwwwww</h3>
            <p>xxxxxxxxxxxx</p>
          </div>
        </div>
      </section>

      <!--premium part--><!--记得改成静态删除vue的部分！！！！-->
      <section class="pricing">
        <h2>Get More with Premium</h2>
        <div class="pricing-tables">
          <div class="pricing-table" v-for="plan in plans" :key="plan.id">
            <h3>{{ plan.name }}</h3>
            <p>{{ plan.price }} /mo</p>
            <ul>
              <li v-for="feature in plan.features" :key="feature">
                {{ feature }}
              </li>
            </ul>
            <button>Subscribe</button>
          </div>
        </div>
      </section>

    <footer>
      <p>&copy; 2024 StudentPreneur. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script>
    new Vue({
      el: "#app",
      data: {
        courses: [
          {
            id: 1,
            image: "img/learning-course1.jpg",
            title: "Innovating for the Future",
            description: "111111111111",
            rate: '4',
          },
          {
            id: 2,
            image: "img/learning-course2.jpg",
            title: "Crowdfunding",
            description: "222222222222222",
            rate: '4.2',
          },
          {
            id: 3,
            image: "img/learning-course3.jpg",
            title: "Crowdfunding",
            description: "33333333333333333333",
            rate: '4.2',
          },
        ],
        mentors: [
          {
            id: 1,
            image: "img/mentor1.png",
            name: "Jacob Jones",
            expertise: "Marketing Expert & Serial Entrepreneur",
          },
          {
            id: 2,
            image: "img/learning-mentor2.png",
            name: "Emily Davis",
            expertise: "Funding Specialist & Startup Advisor",
          },
          {
            id: 3,
            image: "img/learning-mentor3.jpg",
            name: "Emily Davis",
            expertise: "Funding Specialist & Startup Advisor",
          },
        ],
        plans: [
          {
            id: 1,
            name: "Basic Plan",
            price: "€39",
            features: ["111111", "2222222222"],
          },
          {
            id: 2,
            name: "Pro Plan",
            price: "€49",
            features: ["333333333333", "444444444444"],
          },
        ],
      },
    });
  </script>
</body>
</html>