<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StudentPreneur</title>
  <link rel="stylesheet" href="style_02.css" />
</head>

<body>
  <div id="app">
    <header>
      <nav>
        <div class="logo">StudentPreneur</div>
        <div class="icons">
          <button class="icons">Sign In</button>
          <button class="icons">Sign Up</button>
        </div>
      </nav>
    </header>
    <div class="homeCover">
      <h1>Turn your ideas into reality</h1>
      <button>Join us now</button>
    </div>

    <!-- Mentors -->
    <section class="mentors">
      <h2>Meet Our Entrepreneurial Mentors</h2>
      <div class="slide-container">
        <button class="prev" @click="prevSlide">&#10094;</button>
        <div class="mentor-slide">
          <div class="mentor-card" v-for="mentor in mentors" :key="mentor.id">
            <img :src="mentor.image" :alt="mentor.name" />
            <h3>{{ mentor.name }}</h3>
            <p>{{ mentor.description }}</p>
            <button class="booksession">Book a Session</button>
          </div>
        </div>
        <button class="next" @click="nextSlide">&#10095;</button>
      </div>
      <div class="dots">
        <span v-for="(dot, index) in dots" :key="index" :class="{'dot': true, 'active': index === currentSlide}" @click="setSlide(index)"></span>
      </div>
    </section>

    <!-- Live Session -->
    <section class="live-session">
      <h2>Start Your Live Session</h2>
      <div class="live-list">
        <div class="session-card" v-for="live in lives" :key="live.id">
          <img :src="live.image" :alt="live.title" />
          <h3>{{ live.title }}</h3>
          <p>{{ live.date }}</p>
          <button @click="remindMe(live.id)">Remind Me</button>
          <button @click="joinSession(live.id)">Join this Session</button>
        </div>
      </div>
    </section>


    <!-- Global Connections -->
    <section class="global-connections">
      <h2>Discover Global Connections</h2>
      <div class="map">
        <img src="img/connection.png" />
      </div>
    </section>

    <footer>
      <p>&copy; 2024 StudentPreneur. All rights reserved.</p>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script>
    new Vue({
      el: "#app",
      data: {
        mentors: [{
            id: 1,
            name: "Jacob Jones",
            image: "img/mentor1.png",
            description: "Marketing Expert & Serial Entrepreneur",
          },
          {
            id: 2,
            name: "Emily Davis",
            image: "img/mentor2.jpg",
            description: "Funding Specialist & Startup Advisor",
          },
          {
            id: 3,
            name: "Michael Brown",
            image: "img/mentor3.png",
            description: "Innovation Consultant & Startup Founder",
          },
          {
            id: 4,
            name: "Timothée Chalamet",
            image: "img/mentor4.png",
            description: "Film & Art",
          },
        ],
        lives: [{
            id: 1,
            title: "Engage Entrepreneurial Minds",
            date: "July 20, 5:00 PM",
            image: "img/live1.jpg",
          },
          {
            id: 2,
            title: "Pitch Perfect: How to Impress Investors",
            date: "July 21, 7:00 PM",
            image: "img/live2.jpg",
          },
          {
            id: 3,
            title: "Skills for Startup Success",
            date: "July 19, 6:00 PM",
            image: "img/live3.jpg",
          },
        ],
        currentSlide: 0,
      },
      computed: {
        dots() {
          return Math.ceil(this.mentors.length / 2);
        },
      },
      methods: {
        signIn() {
          window.location.href = 'login.html';
        },
        signUp() {},
        joinUs() {},
        bookSession(id) {},
        remindMe(id) {},
        joinSession(id) {},
        nextSlide() {
          if (this.currentSlide < this.dots - 1) {
            this.currentSlide++;
          }
=======
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudentPreneur</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="app">
    <?php 
      require('model/database.php');
      require('model/course_db.php');
      require('model/mentor_db.php');
      require('model/live_db.php');

      $courses = get_courses();
      $mentors = get_mentors();
      $lives = get_lives(3);

      ?>
      <header>
        <nav>
          <div class="logo">StudentPreneur</div>
          
        </nav>
      </header>
      <div class="homeCover">
        <h1>Turn your ideas into reality</h1>
        <button @click="signIn">Join us now</button>
      </div>

      <!-- Mentors -->
      <section class="mentors">
        <h2>Meet Our Entrepreneurial Mentors</h2>
        <div class="slide-container">
          <button class="prev" @click="prevSlide">&#10094;</button>
          <div class="mentor-slide">
           <?php foreach ($mentors as $mentor): ?>
            <div class="mentor-card" key="<?php echo $mentor['id']; ?>">
              <img src="<?php echo htmlspecialchars($mentor['avatar']); ?>" alt="mentor" />
              <h3><?php echo htmlspecialchars($mentor['name']); ?></h3>
              <p><?php echo htmlspecialchars($mentor['description']); ?></p>
              <button @click="bookSession()">Book a Session</button>
            </div>
            <?php endforeach; ?>
          </div>
          <button class="next" @click="nextSlide">&#10095;</button>
        </div>
        <div class="dots">
          <span
            v-for="(dot, index) in dots"
            :key="index"
            :class="{'dot': true, 'active': index === currentSlide}"
            @click="setSlide(index)"
          ></span>
        </div>
      </section>

      <!-- Live Session -->
      <section class="live-session">
        <h2>Start Your Live Session</h2>
        <?php foreach ($lives as $live) : ?>
        <div class="live-list">
          <div
            class="session-card"
            key="<?php echo $live['id']; ?>"
          >
            <img src="<?php echo htmlspecialchars($live['image']); ?>" alt="live" />
            <h3><?php echo htmlspecialchars($live['title']); ?></h3>
            <p><?php echo htmlspecialchars($live['date']); ?></p>
            <button @click="remindMe()">Remind Me</button>
            <button @click="joinSession()">Join this Session</button>
          </div>
        </div>
        <?php endforeach; ?>
      </section>

      <!-- Global Connections -->
      <section class="global-connections">
        <h2>Discover Global Connections</h2>
        <div class="map">
          <img src="img/connection.png" />
        </div>
      </section>

      <footer>
        <p>&copy; 2024 StudentPreneur. All rights reserved.</p>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script>
      new Vue({
        el: "#app",
        data: {
         
          currentSlide: 0,
        },
        computed: {
          dots() {
            return Math.ceil(2);
          },
        },
        methods: {
          signIn() {window.location.href = 'login.php';},
          signUp() {},
          joinUs() {},
          bookSession() {window.location.href = 'learning.php';},
          remindMe() {window.location.href = 'event.php';},
          joinSession() {window.location.href = 'event.php';},
          nextSlide() {
            if (this.currentSlide < this.dots - 1) {
              this.currentSlide++;
            }
          },
          prevSlide() {
            if (this.currentSlide > 0) {
              this.currentSlide--;
            }
          },
          setSlide(index) {
            this.currentSlide = index;
          },
>>>>>>> 9a4e65c8d7c6ccd4b31166934cc3328c68df4b2e
        },
        prevSlide() {
          if (this.currentSlide > 0) {
            this.currentSlide--;
          }
        },
        setSlide(index) {
          this.currentSlide = index;
        },
      },
      watch: {
        currentSlide(newVal) {
          const slider = this.$el.querySelector(".mentor-slide");
          slider.style.transform = `translateX(-${newVal * 100}%)`;
        },
      },
    });
  </script>
</body>

</html>