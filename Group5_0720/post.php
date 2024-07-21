<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentPreneur</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php';
    require('model/database.php');
    require('model/user_db.php');

    session_start();
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $userId = $_SESSION['user_id'];
    $user = get_user($userId);
    ?>
    <div class="container">
        <div class="column">
        <div class="postpage-card" id="profile-card">
                <div id="profile">
                    <a href="profile.php">
                        <img src="<?php echo htmlspecialchars($user['avatar']); ?>" alt="Profile" id="profile-img">
                    </a>
                    <h2><?php echo htmlspecialchars($user['firstName']); ?></h2>
                    <h3><?php echo htmlspecialchars($user['description']); ?></h3>
                    <p>Skills</p>
                </div>
                <div>
                    <button>Get More with Premium</button>
                </div>
                <br>
                <img src="img/social.png" alt="">
            </div>

            <div class="postpage-card" id="explore-card">
                <div id="title">
                    <img src="img/explore.svg" alt="">
                    <a>Explore</a>
                </div>
                <hr>
                <div id="nav">
                    <ul>
                        <li><img src="img/nav1.svg" alt=""><a href="event.html"> Events</a></li>
                        <li><img src="img/nav2.svg" alt=""><a href="learning.php"> Learning</a></li>
                        <li><img src="img/nav3.svg" alt=""><a href="network.html"> My Network</a></li>
                        <li><img src="img/nav4.svg" alt=""><a href="globalConnections.html"> Global Connections</a></li>
                        <li><img src="img/nav2.svg" alt=""><a href="resource.html"> Investor</a></li>
                    </ul>
                </div>
            </div>

            <div class="postpage-card" id="trending-card">
                <div id="title">
                    <img src="img/trending.svg" alt="">
                    <a>Trending</a>
                </div>
                <hr>
                <div id="nav">
                <ul>
                    <li>#StartupTips</li>
                    <li>#Funding</li>
                    <li>#Networking</li>
                    <li>#BusinessGrowth</li>
                    <li>#Entrepreneurship</li>
                    <li>#Mentorship</li>
                    <li>#ProductDevelopment</li>
                    <li>#MarketTrends</li>
                    <li>#TechInnovation</li>
                </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="postpage-card" id="search-card">
                <img src="img/Search.svg" alt="">
                <a href="">#Global Connections </a>


            </div>

            <div class="postpage-card" id="write-post">
                <div id="write">
                    <img style="object-fit:cover;" src="img/profile1.jpg" alt="" id="write-profile">
                    <div id="edit">
                        <a>Writing someting... </a>
                        <img src="img/Edit.svg" alt="">
                    </div>
                </div>
                <div id="post">
                    <img src="img/emoji.png" alt="">
                    <button>Post</button>
                </div>
            </div>

            <div class="postpage-card" id="post-card">
                <img src="img/Post1.png" alt="">
                <img src="img/Post (1).png" alt="">
                <img src="img/Post (2).png" alt="">
            </div>
        </div>

        <div class="column">
            <div class="postpage-card" id="teammate-card">
                <div id="title">
                    <a id="find">Find Your Teammate</a>
                    <a class="see-more">See more</a>
                </div>
                <hr>
                
                    <div class="teammate-profile">
                        <img src="img/user1.svg" alt="">
                        <div class="profile-info">
                            <a style='color:black; font-size: 14px;padding-bottom:4px;'>John Doe</a><br>
                            <a>Research Science</a>
                        </div>
                        <button>+ Connect</button>
                    </div>
                    <div class="teammate-profile">
                        <img src="img/user2.svg" alt="">
                        <div class="profile-info">
                            <a style='color:black; font-size: 14px;padding-bottom:4px;'>Jade Smith</a><br>
                            <a>Java Developer</a>
                        </div>
                        <button>+ Connect</button>
                    </div>


            </div>


            <div class="postpage-card" id="live-card">
                <div class="disc-container">
                    <h3 style="font-size: 18px;padding-left: 5px;">Upcoming Live Session</h3>
                    <hr>
                    <p style="text-align: left;padding-left: 5px;">Effective Marketing Strategies</p>
                    <img src="img/upcoming-live.png" alt="">
                    <p style="font-size: 14px;padding-left: 10px;padding-right: 10px;">Gain insights into the most effective marketing strategies for your business</p>
                    <p style="font-size: 14px;padding-left: 10px;padding-right: 10px;">July 15, 2024, 5:00 PM</p>
                </div>
                <div class="btn-contianer">
                    <button>Remind Me</button><br>
                    <button id="btn-join">Join Now</button>
                </div>
            </div>

            <div class="postpage-card" id="course-card">
                <div class="disc-container">
                    <h3 style="font-size: 18px;padding-left: 5px;">Featured Courses</h3>
                    <hr>
                    <p style="text-align: left;padding-left: 5px;">Marketing for Startups</p>
                    <p style="font-size: 14px;padding-left: 10px;padding-right: 10px;">Learn effective marketing strategies to promote your startup and attract users.</p>
                    <p style="text-align: left;padding-left: 5px;">Rating: 4.9/5</p>
                    <img src="img/featured-course.png" alt="">
                    <p style="text-align: left;padding-left: 5px;">Duration: 5 Weeks</p>
                </div>
                <div class="btn-contianer2">
                    <button>Watch for Free (Members)</button><br>
                    <button id="btn-buy">Buy Now for £19</button>
                </div>
            </div>


            <div class="postpage-card" id="ad-card">
                <div>ad</div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>