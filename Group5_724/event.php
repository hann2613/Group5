<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style5.css" />
  <title>StudentPreneur Events</title>
</head>

<body>

  <header>
    <nav>
      <div class="logo"><a href="post.php">StudentPreneur</a></div>
      <a href="post.php">Home</a>
      <a href="learning.php">Learning</a>
      <STRONG><a href="event.php">Events</a></STRONG>
      <a href="globalConnections.php">Global Connections</a>
      <div class="icons">
        <a href="teamprofile.php">🧑‍🧒 </a>
        <a href="message.php"> 💬 </a>
        <a href="profile.php"> 👤 </a>
        <a href="setup_team.php"><button>Team Up</button></a>
      </div>
    </nav>
  </header>

  <?php
  require('model/database.php');
  require('model/live_db.php');
  require('model/workshop_db.php');


  $lives = get_lives(3);
  $workshops = get_workshops(3);
  ?>

  <main id="app">
    <section class="events-hero">
      <h1>Project Showcase: Sustainable Fashion Startup</h1>
      <p>
        Join our main event next Friday where Team Green Threads will
        <br />showcase their innovative approach to sustainable fashion. Don't
        miss it!
      </p>
      <div class="events-timer">
        <span>2</span><span>10</span><span>41</span>
      </div>
    </section>

    <section class="events-sessions">
      <h2>Upcoming Live Sessions</h2>
      <div class="events-sessions-container">
        <?php foreach ($lives as $live) : ?>
          <div class="events-session-card">
            <img src="<?php echo htmlspecialchars($live['image']); ?>" alt="<?php echo htmlspecialchars($live['title']); ?>" />
            <h3><?php echo htmlspecialchars($live['title']); ?></h3>
            <p><?php echo htmlspecialchars($live['date']); ?></p>
            <button><?php echo htmlspecialchars($live['buttonText']); ?></button>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="events-competition">
      <h2>Showcase Your Innovation, Compete for Glory!</h2>
      <p>
        Join our upcoming startup competitions and test your ideas. Compete
        for exciting prizes, gain valuable feedback, and connect with
        potential investors and collaborators.
      </p>
      <div class="events-competition-details">
        <h3>Startup Pitch Competition</h3>
        <img src="img/event-competition.jpeg" />
        <p>July 18, 2024, 3:00 PM</p>
        <button>Register Now</button>
        <p>Registration Deadline: July 15, 2024</p>
      </div>
    </section>

    <section class="events-workshops">
      <h2>Explore Our Interactive Workshops and Seminars</h2>
      <div class="events-workshops-search">
        <input type="text" placeholder="Search by topic or speaker..." />
        <select>
          <option value="">Type</option>
        </select>
        <select>
          <option value="">Time</option>
        </select>
        <button class="event-search">Search</button>
      </div>
      <div class="events-workshops-container">
        <?php foreach ($workshops as $workshop) : ?>
          <div class="events-workshop-card">
            <img src="<?php echo htmlspecialchars($workshop['image']); ?>" alt="<?php echo htmlspecialchars($workshop['title']); ?>" />
            <h3><?php echo htmlspecialchars($workshop['title']); ?></h3>
            <p><?php echo htmlspecialchars($workshop['date']); ?></p>
            <button><?php echo htmlspecialchars($workshop['buttonText']); ?></button>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>


</body>

</html>