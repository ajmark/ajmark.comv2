<!DOCTYPE html>
<html>
    <?php include('../includes/project-head.php'); ?>
    <body>
        <?php include('../includes/nav.php'); ?>
        <div class="project-page-content">
            <div class="main-content medium-8 small-12 columns">
                <?php include('../includes/project-nav.php'); ?>
                <h2>Tartan Tickets</h2>
                <p>Tartan Tickets is an event reservation system for student organizations at Carnegie Mellon University. 
                Through Tartan Tickets, leaders of student organizations can create events and manage the reservation processes in a single web application. 
                Event organizers can view all of the students who have registered for their event and they can update registration info, such as if a registrant has made a payment or signed a waiver. 
                Tartan Tickets also allows organizers to easily communicate with their registrants with tools such as mass email updates. 
                This web application simplifies the event registration for students by incorporating the same authentication system for class registration so that students do not need to make a separate log in account to sign up for an event.</p>
                <figure>
                    <img id="bikefest" class="screenshot-main" src="../public/assets/projectImages/tartanTickets/event_registration.png">
                    <figcaption>Fig. A - View Event Page</figcaption>
                </figure>
                <h3>Process</h3>
                <p>My team was tasked to develop a system for Carnegie Mellon Student Government that could simplify the process of hosting events for student organizations. 
                One of the major pain points was that there was no universal event registration system that was used by all of the organizations. It was confusing for students to get information on how and where to sign up for events by different organizations. 
                We took an agile approach, meeting in weekly sprints with leaders of Student Government to discuss each sprint’s project requirements and to get their feedback on iterations of the web application. </p>
                <figure class="erd">
                    <img src="../public/assets/projectImages/tartanTickets/erd_v1.png">
                    <figcaption>Fig. B - Entity relationship diagram iteration</figcaption>
                </figure>

                <p>A large part of our project consisted of planning the features and look of our application. We went through several iterations of database designs, page layouts and feature sets
                so that we could properly meet the needs of our clients. Documentation of our process was important so that we could ensure our application was maintainable by our clients and future work
                could easily be picked up by any new team.</p>

                <figure>
                    <img class="wireframe" src="../public/assets/projectImages/tartanTickets/wireframe_notes.jpg">
                    <figcaption>Fig. C - Wireframe sketches with notes
                </figure>

                <figure>
                    <img class="wireframe" src="../public/assets/projectImages/tartanTickets/view_all.png">
                    <figcaption>Fig. D - Early iteration of page layout</figcaption>
                </figure>

                <h3>Result</h3>
                <p>This project taught me several important lessons about working on a project for a client. My team quickly learned that communication is a key factor in maintaining a good client relationship.
                I had to learn how to play the role as both a designer and a developer, as we had to carefully plan the development of our application to satisfy the customer's needs.</p>
            </div>
            <div class="medium-4 small-12 columns project-details">
                <h5>Project Details</h5>
                <h6>Course</h6>
                    <ul>
                        <li>Software Development Project (Spring 2014)</li>
                    </ul>
                <h6>Methods Used</h6>
                    <ul>
                        <li>Ruby on Rails</li>
                        <li>Iterative Wireframing + Prototyping</li>
                        <li>HTML, CSS, Javascript, Foundation, HAML</li>
                        <li>ElasticSearch Service</li>
                    </ul>

            </div>
        </div>  
        <?php include('../includes/footer.php'); ?>
    </body>
    
</html>