<?php include 'header.php'; ?>

    <div class="container">
        <div class="column">
            <div class="postpage-card" id="profile-card">
                <div id="profile">
                    <a href="/profile.html">
                        <img src="img/profile1.jpg" alt="Profile" id="profile-img">
                    </a>
                    <h2>Emma Rivera</h2>
                    <h3>Web Developer</h3>
                    <p>Web Development | UI/UX Design | E-commerce | Education Technology | Healthcare Technology</p>
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
                        <li><img src="img/nav1.svg" alt=""><a href="/event.html"> Events</a></li>
                        <li><img src="img/nav2.svg"  alt=""><a href="/learning.html"> Learning</a></li>
                        <li><img src="img/nav3.svg"  alt=""><a href="/network.html"> My Network</a></li>
                        <li><img src="img/nav4.svg" alt=""><a href="/globalConnections.html"> Global Connections</a></li>
                        <li><img src="img/nav2.svg"  alt=""><a href="/resource.html"> Investor</a></li>
                    </ul>
                </div>
            </div>

            <div class="postpage-card" id="trending-card" >
                <div id="title">
                    <img src="img/trending.svg" alt="">
                    <a>Trending</a>
                </div>
                <hr>
                <div id="nav" v-for="trending in trendings.slice(0, 9)" :key="trending.id">
                    <ul>
                        <li><a href=""># {{trending.name}}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="postpage-card" id="search-card">           
                    <img src="img/Search.svg" alt=""> 
                    <a href="">#Global Connections </a>

                    
            </div>

            <div class="postpage-card"  id="write-post">
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

            <div class="postpage-card"  id="post-card">
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
         
                    <div class="teammate-profile" v-for="user in users.slice(0, 2)" :key="user.id">
                        <img :src="user.image" alt="">
                        <div class="profile-info">
                            <a style="color:black; font-size: 14px;">{{ user.name }}</a><br>
                            <a>{{ user.description }}</a>
                        </div>
                        <button>+ Connect</button>
                    </div>
                                      
            
            </div>


            <div class="postpage-card"  id="live-card">
                <div class="disc-container">
                  <h3 style="font-size: 18px;padding-left: 5px;">Upcoming Live Session</h3>
                  <hr>
                  <p style="text-align: left;padding-left: 5px;">Effective Marketing Strategies</p>
                  <img src="img/event-competition.jpeg" alt="">
                  <p style="font-size: 14px;padding-left: 10px;padding-right: 10px;">Gain insights into the most effective marketing strategies for your business</p>
                  <p style="font-size: 14px;padding-left: 10px;padding-right: 10px;">July 15, 2024, 5:00 PM</p>
                </div>
                <div class="btn-contianer">   
                  <button>Remind Me</button><br>
                  <button id="btn-join">Join Now</button>      
                </div>
            </div>
            <div class="postpage-card"  id="course-card">
              <div class="disc-container">
                <h3 style="font-size: 18px;padding-left: 5px;">Featured Courses</h3>
                <hr>
                <p style="text-align: left;padding-left: 5px;">Marketing for Startups</p>
                <p style="font-size: 14px;padding-left: 10px;padding-right: 10px;">Learn effective marketing strategies to promote your startup and attract customers.</p>
                <p style="text-align: left;padding-left: 5px;" >Rating: 4.9/5</p>
                <img src="img/event-competition.jpeg" alt="">
                <p style="text-align: left;padding-left: 5px;">Duration: 5 Weeks</p>
              </div>
              <div class="btn-contianer2">   
                <button>Watch for Free (Members)</button><br>
                <button id="btn-buy">Buy Now for £19</button>  
              </div>
          </div>
            
            <div class="postpage-card"  id="ad-card"> 
                <div>ad</div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script>
      new Vue({
        el: "#app",
        data: {
          users: [
            {
              id: 1,
              name: "Jacob Jones",
              image: "img/mentor1.png",
              description: "Research Science",
            },
            {
              id: 2,
              name: "Emily Davis",
              image: "img/mentor2.jpg",
              description: "Java Developer",
            },
            {
              id: 3,
              name: "Michael Brown",
              image: "img/mentor3.png",
              description: "Innovation Consultant",
            },
          ],
          trendings: [
            {
              id: 1,
              name: "StartupTips",
            },
            {
              id: 2,
              name: "Funding",
            },
            {
              id: 3,
              name: "Networking",
            },
            {
              id: 4,
              name: "BusinessGrowth",
            },
            {
              id: 5,
              name: "Entrepreneurship",
            },
            {
              id: 6,
              name: "Mentorship",
            },
            {
              id: 7,
              name: "ProductDevelopment",
            },
            {
              id: 8,
              name: "MarketTrends",
            },
            {
              id: 9,
              name: "TechInnovation",
            },
          ],
      }});
    </script>
 -->
