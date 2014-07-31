<!DOCTYPE html>
<html>
    <?php include('../includes/project-head.php'); ?>
    <body>
        <?php include('../includes/nav.php'); ?>
        <div class="project-page-content">
            <div class="main-content medium-8 small-12 columns">
                <?php include('../includes/project-nav.php'); ?>
                <h2>NBA Fan App</h2>
                <p>The NBA Fan App is every basketball fan's go-to application to stay updated with 
                all of the league's most recent news. It uses the ESPN Headlines API to collect news 
                for every team in the league. It even keeps track of your favorite team and using the
                Fan Map feature, you can find where other fans live and who their favorite teams are from
                all across the county.</p>
                <figure>
                    <img class="screenshot-main" src="../public/assets/projectImages/nbaFanApp/nbafanapp_home.png">
                    <figcaption>Fig. A - League Newsfeed</figcaption>
                </figure>
                <h3>Process</h3>
                <p>In this project, I was tasked with creating an application using Node.js. This was my first
                project using the framework so it was challenging to learn and develop at the same time. Before
                I began the development process, I had map out the work-flow of the application through a storyboard.
                It was also important that this application be responsive, so I designed it's layout to optimize both
                both mobile and desktop views.
                </p>
                <figure id="nba-storyboard">
                    <img class="screenshot-main" src="../public/assets/projectImages/nbaFanApp/storyboard_sketch.jpg">
                    <figcaption>Fig. B - Early Storyboard Sketch </figcaption>
                </figure>
                <figure>
                    <img class="screenshot-main" src="../public/assets/projectImages/nbaFanApp/fan_map.png">
                    <figcaption>Fig. C - Fan Map Page</figcaption>
                </figure>
                <h3>Result</h3>
                <p>This was an important project for me because it forced me to learn how to use public API's
                and the fundamentals of RESTful web practices. I enjoyed learning a new web application framework
                and it helped me understand how important it is to stay updated with new technologies in this field, 
                otherwise it can be easy to fall behind.</p>

            </div>
            <div class="medium-4 small-12 columns project-details">
                <h5>Project Details</h5>
                <h6>Course</h6>
                    <ul>
                        <li>Mobile to Cloud: Distributed Application Development (Fall 2013)</li>
                    </ul>
                <h6>Methods Used</h6>
                    <ul>
                        <li>Node.js</li>
                        <li>HTML, CSS, JavaScript</li>
                        <li>ESPN Headlines API, Google Maps API</li>
                        <li>noSQL</li>
                    </ul>

                <a class="github-link" target="_blank" href="https://github.com/ajmark/nbaFanApp.git">View source on github</a>

            </div>
        </div>  
        <?php include('../includes/footer.php'); ?>
    </body>
    
</html>