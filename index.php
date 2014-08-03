<!DOCTYPE html>
<html>
    <?php include('includes/head.php'); ?>
    <body>
        <div class="nav-wrapper">
            <nav>
                <div class="small-2 medium-3 large-3 column" id="left-banner">
                </div>
                <div class="small-3 medium-2 large-1 column" id="mid-banner">
                    <a href="index.php">   
                        <img id="logo"src="public/assets/logo.png">
                    </a>
                </div>
                <div class="small-7 medium-7 large-8 column" id="right-banner">
                    <nav class="top-bar" data-topbar>
                        <ul class="title-area">
                            <li class="toggle-topbar menu-icon">
                                <a href="#">Menu</a>
                            </li>
                        </ul>
                        <section class="top-bar-section show-for-small">
                            <ul class="right">
                                <li class="divider"></li>
                                <li>
                                    <a class="view-link-small" value="work-experience">Work Experience</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a class="view-link-small" value="projects">Projects</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a class="view-link-small" value="resume">Resume</a>
                                </li>
                            </ul>
                        </section>
                    </nav>
                </div>
            </nav>
        </div>
        <div id="content">
            <div class="row view-control show-for-medium-up">
                <ul class="inline-list text-center view-control-list">
                    <li>
                        <a id="projects-link" class="view-link" value='work-experience'>About</a>
                    </li>
                    <li>
                        <p>|</p>
                    </li>
                    <li>
                        <a id="work-experience-link" class="view-link active" value='projects'>Projects</a>
                    </li>
                    <li>
                        <p>|</p>
                    </li>
                    <li>
                        <a id="resume-link" class="view-link" value='resume'>Resume</a>
                    </li>
                </ul>
            </div>

            <div class="content-box-left" id="work-experience">
                <div class="small-12 medium-centered content-body">
                    <div class="row">
                        <h2 class="hide-for-medium-up columns">About Me</h2>
                        <div class="medium-7 columns">
                            <h3>Alex Mark</h3>
                            <h4>ajmark@andrew.cmu.edu</h4>
                            <p>I am a Carnegie Mellon student, studying Information Systems and Human Computer Interaction.
                            I aspire to work in the UX field through my background as a web application developer and my 
                            affinity for design and interfaces. I am graduating in May 2015 and will be looking for full 
                            time opportunties in UX engineering and interaction design. </p>
                        
                            <ul class="inline-list">
                                <li>
                                    <a target="_blank" href="https://github.com/ajmark">Github</a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/profile/view?id=203253413">LinkedIn</a>
                                </li>
                            </ul>
                        </div>
                        <div class="medium-5 columns">
                            <img src="public/assets/profile.jpg" class="profile">
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-box-right" id="resume">
                <div class="small-12 content-body">
                    <div class="row">
                        <div class="small-12 medium-4 columns">
                            <h2 class="hide-for-medium-up">Resume</h2>

                            <a href="files/resume.pdf" class="button tiny">Open PDF Resume</a>
                            <div class="span-12 show-for-medium-up resume-wrapper">
                                <h1>Skills</h1>
                                <ul>
                                    <li>Ajax</li>
                                    <li>CSS</li>
                                    <li>Dojo</li>
                                    <li>Git</li>
                                    <li>HTML</li>
                                    <li>Java</li>
                                    <li>JavaScript</li>
                                    <li>JQuery</li>
                                    <li>MongoDB</li>
                                    <li>Node.js</li>
                                    <li>Python</li>
                                    <li>RESTful Web Development</li>
                                    <li>Responsive Web Practices</li>
                                    <li>Ruby on Rails</li>
                                    <li>SQL</li>
                                </ul>
                                <ul>
                                    <li>Iterative Wireframing + Prototyping</li>
                                    <li>Human Computer Interaction Methods</li>
                                </ul>
                                <ul>
                                    <li>Adobe Illustrator</li>
                                    <li>Adobe InDesign</li>
                                    <li>Adobe Photoshop</li>
                                </ul>
                            </div>
                        </div>
                        <div class="medium-8 columns small-12">
                            <div class='resume-wrapper'>
                              <h1>Education</h1>
                              <div class="rbox">
                                <h4>Carneige Mellon University</h4>
                                <h5>Class of 2015 | GPA: 3.46 | Dean's List 2014</h5>
                                <p>B.S. Information Systems<br>
                                Human Computer Interaction Minor</p>
                              </div>
                            </div>
                            <div class='resume-wrapper'>
                              <h1>Professional Experience</h1>
                              <div class='rbox'>
                                <h4>Intuit QuickBooks Online &nbsp; - &nbsp; Product Development Intern</h4>
                                <h5>Mountain View, CA | Summer 2014</h5>
                                <p>Implemented a scalable solution to reindex 1.5 trillion documents for QuickBooks Online Search<br>
                                  Fixed bugs and wrote unit tests for QuickBooks Online Search</p>
                              </div>
                              <div class='rbox'> 
                                <h4>BNY Mellon &nbsp; - &nbsp; User Experience Co-op</h4>
                                <h5>Pittsburgh, PA | September 2013 - December 2013</h5>
                                <p>Built an informational tool that maps BNY Mellon’s front-facing applications and the lines of businesses served<br>
                                  Restructured Sharepoint site to improve information design
                                </p>
                              </div>
                              <div class='rbox'> 
                                <h4>BNY Mellon &nbsp; - &nbsp; Web Application Development Intern</h4>
                                <h5>Pittsburgh, PA | Summer 2013</h5>
                                <p>Developed portal components for the upgraded version of BNY's Web STP software<br>
                                  Wrote CRUD functionality for application through server side Java programming
                                </p>
                              </div>
                            </div>

                            <div class='resume-wrapper'>
                              <h1>Leadership</h1>
                              <div class='rbox'> 
                                <h4>Carnegie Mellon Greek Sing 2015</h4>
                                <h5>Overall Chair | Pittsburgh, PA | Current</h5>
                                <p>Heading the largest annual charity event with goal to raise over $100,000<br>
                                  Proceeds go to Gilda’s Club Cancer Support Community of Pittsburgh</p>
                              </div>
                              <div class='rbox'> 
                                <h4>Information Systems Student Advisory Committee</h4>
                                <h5>Senior Representative | Pittsburgh, PA | August 2012- Current</h5>
                                <p>Arranged events and seminars with faculty members and outside speakers<br>
                                  Provided a forum for student input on proposed curriculum changes, new programs, and other matters of concern to Information Systems majors</p>
                              </div>
                              <div class='rbox'> 
                                <h4>Carnegie Mellon Freshmen Orientation</h4>
                                <h5>Orientation Leader | Pittsburgh, PA | August 2012 - August 2013</h5>
                                <p>Managed the Orientation Counselor interview and selection process<br>
                                  Trained 100+ Orientation Counselors to guide freshmen through orientation events<br>
                                </p>
                              </div>
                            </div>
                            <div class="resume-wrapper show-for-small">
                                <h1>Skills</h1>
                                <ul>
                                    <li>CSS</li>
                                    <li>Dojo</li>
                                    <li>Git</li>
                                    <li>HTML</li>
                                    <li>Java</li>
                                    <li>JavaScript</li>
                                    <li>JQuery</li>
                                    <li>MongoDB</li>
                                    <li>Node.js</li>
                                    <li>Python</li>
                                    <li>RESTful Web Development</li>
                                    <li>Responsive Web Practices</li>
                                    <li>Ruby on Rails</li>
                                    <li>SQL</li>
                                </ul>
                                <ul>
                                    <li>Iterative Wireframing + Prototyping</li>
                                    <li>Human Computer Interaction Methods</li>
                                </ul>
                                <ul>
                                    <li>Adobe Illustrator</li>
                                    <li>Adobe InDesign</li>
                                    <li>Adobe Photoshop</li>
                                </ul>
                            </div>                             
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-box-middle visible" id="projects">
                <div class="small-12 content-body">
                    <div class="row">
                        <div class="small-12">
                            <h2 class="hide-for-medium-up">Projects</h2>
                            <ul>
                                <li class="project-box-container">
                                    <a id="tartantickets-project" href="projects/tartan_tickets.php">
                                    <img id="tartantickets-thumb" class="thumbnail" src="public/assets/thumbnails/tartantickets_thumb.png">
                                    <div class="project-box blue-box">
                                        <h3>Tartan Tickets</h3><br /><br />
                                        <p>Ruby on Rails</p>
                                    </div>
                                    </a>
                                </li>
                                
                                <li class="project-box-container">
                                    <a id="dinewithdinex-project" href="projects/dinewithdinex.php">
                                    <img id="dinewithdinex-thumb" class="thumbnail-visible" src="public/assets/thumbnails/dinewithdinex_thumb.png">
                                    <div class="project-box red-box">
                                        <h3>Dine With DineX</h3><br /><br />
                                        <p>Node.js</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="amks-project" href="projects/karateschool.php">
                                    <img id="amks-thumb" class="thumbnail" src="public/assets/thumbnails/amks_thumb.png">
                                    <div class="project-box light-blue-box">
                                        <h3>A&amp;M Karate School</h3><br />
                                        <p>Ruby on Rails</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="fanapp-project" href="projects/nbafanapp.php">
                                    <img id="fanapp-thumb" class="thumbnail-visible" src="public/assets/thumbnails/fanapp_thumb.png">
                                    <div class="project-box orange-box">
                                        <h3>NBA Fan App</h3><br /><br />
                                        <p>Node.js</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="arl-project" href="projects/rescueleague.php">
                                    <img id="arl-thumb" class="thumbnail" src="public/assets/thumbnails/arl_thumb.png">
                                    <div class="project-box green-box">
                                        <h3>Animal Rescue League</h3><br />
                                        <p>Website Redesign</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="wim-project" href="projects/women_in_medicine.php">
                                    <img id="wim-thumb" class="thumbnail" src="public/assets/thumbnails/wim.png">
                                    <div class="project-box purple-box">
                                        <h3>Women in Medicine</h3><br />
                                        <p>Web Design Prototype</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="relationpic-project" href="projects/relationpic.php">
                                    <img id="relationpic-thumb" class="thumbnail-visible" src="public/assets/thumbnails/relationpic_thumb.png">
                                    <div class="project-box blue-box">
                                        <h3>Relationpic</h3><br /><br />
                                        <p>Mobile App Proof of Concept</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="visual-concepts" href="projects/concepts.php">
                                    <img id="visual-concepts-thumb" class="thumbnail" src="public/assets/thumbnails/visual_concepts_thumb.png">
                                    <div class="project-box gray-box">
                                        <h3>Design <br />Concepts</h3><br />
                                        <p>Design Concepts &amp; Graphics</p>
                                    </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>