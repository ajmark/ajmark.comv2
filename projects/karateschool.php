<!DOCTYPE html>
<html>
    <?php include('../includes/project-head.php'); ?>
    <body>
        <?php include('../includes/nav.php'); ?>
        <div class="project-page-content">
            <div class="main-content medium-8 small-12 columns">
                <?php include('../includes/project-nav.php'); ?>
                <h2>The A&M Karate Tournament System</h2>
                <p>This was a semester long project assigned in my Web Application Design and Development class. 
                Our task was to use Ruby on Rails to create a dynamic web application for a mock karate tournament system. 
                Through this project and this class, I learned how to:<br>
                <br>1. Model data and translate data models into working databases
                <br>2. Be familiar with the Model-View-Controller pattern in software architecture
                <br>3. Understand the importance of test driven development
                <br>4. Use source code control to manage project development through Git
                <br>5. Apply principles of user-centered design to the development of software
                <br>6. Apply all of these skills to build a web-based application </p>
                <figure>    
                    <img class="screenshot-main" src="../public/assets/projectImages/karateschool/amkarateschool.png">
                    <figcaption>Fig. A - View Dojo Page</figcaption>
                </figure>
                <h3>Process</h3>
                <p>The web app was created in five different phases, each having its own focus on aspects of web application development.</p>
                
                <p>In <span>Phase 1</span> of the project, we focused on creating the data model of the application through an entity-relationship diagram, 
                database design in third normal form, a data dictionary, and use cases.<br><span>Phase 2</span> of the project introduced us to unit testing 
                and the creation of tables for the database.<br><span>Phase 3</span> focused primarily on the views of the application, where we implemented 
                user-centered design techniques to create an easy-to-use interface. We also established CRUD functionality in our application during this 
                phase which gave the application functional components.<br>In the following two phases, <span>phase 5</span> &amp; <span>phase 6</span>, we 
                implemented more advanced processes to the application such as authentication, authorization and dashboards. 
                We also revisited aspects of previous phases by adding additional unit tests.</p>
                <figure>
                    <img class="karateschool-erd" src="../public/assets/projectImages/karateschool/erd.jpg">
                    <figcaption>Fig. B - Entity Relationship Diagram</figcaption>
                </figure>
                <h3>Result</h3>
                <p>This class introduced me to many of the fundamental concepts of web application development and it gave me a 
                solid foundation to build upon and grow. It was a complex project that made me appreciate how difficult it is
                to build web applications and it helped me understand the importance of a test-driven development process.</p>
         
            </div>
            <div class="medium-4 small-12 columns project-details">
                <h5>Project Details</h5>
                <h6>Course</h6>
                    <ul>
                        <li>Web Application Design &amp; Development (Spring 2012)</li>
                    </ul>
                <h6>Methods Used</h6>
                    <ul>
                        <li>Ruby on Rails</li>
                        <li>HTML, CSS, Javascript, Erb</li>
                        <li>SQLite3</li>
                    </ul>       
                <a class="button tiny" target="_blank" href="http://amks.herokuapp.com">View Live Project</a>
                <br>
                <a class="github-link" target="_blank" href="https://github.com/ajmark/amks">View source on github</a>    

            </div>
        </div>  
        <?php include('../includes/footer.php'); ?>
    </body>
    
</html>