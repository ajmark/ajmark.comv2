<!DOCTYPE html>
<html>
    <?php include('../includes/project-head.php'); ?>
    <body>
        <?php include('../includes/nav.php'); ?>
        <div class="project-page-content">
            <div class="main-content medium-8 small-12 columns">
                <?php include('../includes/project-nav.php'); ?>
                <div class="row">
                    <h2>Dine With DineX</h2>
                    <p>Dine With DineX is a mobile web application that allows Carnegie Mellon Students
                    who are on the school's meal plan to sell their "meal blocks" and "DineX". 
                    First-year students required to use campus meal plans usually face excesses of meal blocks and DineX. 
                    Blocks are sold as units worth $6.50 to $8.50 each, and DineX functions as a gift or debit card for campus dining. 
                    If students don't use all of their meal blocks (which expire once every two weeks), or DineX (which expires once per semester),
                    they lose those credits and are not reimbursed for the lost expenses. Dine with DineX gives students the opportunity to prevent losing
                    money by facilitating the sale of meal blocks and DineX.</p>
                </div>
                <div class="row">
                    <figure class="dinewithdinex-splash">
                            <img class="screenshot-main" src="../public/assets/projectImages/dineWithDineX/splash.png">
                            <figcaption>Fig. A - Splashscreen</figcaption>
                    </figure>
                </div>
                <h2>Process</h2>
                <p>We determined that the most important feature of our web application should be that it is a responsive web application.
                After conducting research on the potential for this kind of application, the majority of students agreed that it should be easily
                accesible from both mobile and desktop views. Since this was only a semester project, developing a web application was our best approach
                to creating something fast and effective.</p>
                <figure id="dinewithdinex-storyboard">
                    <img class="screenshot-main" src="../public/assets/projectImages/dineWithDineX/storyboard.jpg">
                    <figcaption>Fig. C - Initial Storyboard</figcaption>
                </figure>

                <p>We began our design process following a Mobile First strategy, beginning our designs for mobile only
                so we could determine the most important features and keep the application as simple as possible.</p>
                <div class="small-12 dinewithdinex-iteration">
                    <figure class="dinewithdinex-splash">
                        <img class="screenshot-main" src="../public/assets/projectImages/dineWithDineX/newsfeed_iteration.png">
                        <figcaption>Fig. D - Newsfeed Wireframe</figcaption>
                    </figure>                
                    <figure class="dinewithdinex-newsfeed-mobile">
                        <img class="screenshot-main" src="../public/assets/projectImages/dineWithDineX/newsfeed_mobile.png">
                        <figcaption>Fig. B - Mobile Newsfeed View</figcaption>
                    </figure> 
                    <figure class="dinewithdinex-newsfeed-desktop">           
                        <img class="screenshot-main" src="../public/assets/projectImages/dineWithDineX/newsfeed_desktop.png">
                        <figcaption>Fig. C - Desktop Newsfeed View</figcaption>
                    </figure>
                </div>

                <h3>Result</h3>
                <p>This project taught me the importance of settings goals for a project and ideation. We had a rough start 
                to this project because our project scope was too broad. After we took the time to draw out our ideas and make a plan, 
                our project started to take off and become successful.</p>
            </div>
            <div class="medium-4 small-12 columns project-details">
                <h5>Project Details</h5>
                <h6>Course</h6>
                    <ul>
                        <li>Designing Human Centered Software (Spring 2014)</li>
                    </ul>
                <h6>Methods Used</h6>
                    <ul>
                        <li>Node.js</li>
                        <li>HTML, CSS, JavaScript, Foundation, Jade</li>
                        <li>Facebook Graph API, Venmo API</li>
                        <li>noSQL</li>
                    </ul>
                <a class="button tiny" target="_blank" href="http://dinewithdinex.herokuapp.com">View Live Project</a>
                <br>
                <a class="github-link" target="_blank" href="https://github.com/ajmark/dinewithdinex.git">View source on github</a>
                    

            </div>
        </div>  
        <?php include('../includes/footer.php'); ?>
    </body>
    
</html>