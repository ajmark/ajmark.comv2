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
                        <a id="projects-link" class="view-link" value='projects'>Projects</a>
                    </li>
                    <li>
                        <p>|</p>
                    </li>
                    <li>
                        <a id="work-experience-link" class="view-link active" value='work-experience'>Work Experience</a>
                    </li>
                    <li>
                        <p>|</p>
                    </li>
                    <li>
                        <a id="resume-link" class="view-link" value='resume'>Resume</a>
                    </li>
                </ul>
            </div>

            <div class="content-box-middle visible" id="work-experience">
                <div class="small-12 medium-10 medium-centered content-body">
                    <div class="row">
                        <h2 class="hide-for-medium-up columns">Work Experience</h2>
                        <div class="medium-4 columns">
                            <img src="public/assets/intuit_logo.png" class="work-logo">
                        </div>
                        <div class="medium-8 columns">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        </div>
                    </div>
                </div>

                <div class="small-12 medium-10 medium-centered content-body">
                    <div class="row">
                        <div class="medium-4 columns">
                            <img src="public/assets/bnymellon_logo.png" class="work-logo">
                        </div>
                        <div class="medium-8 columns">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-box-right" id="resume">
                <div class="small-12 content-body">
                    <div class="row">
                        <div class="small-12 medium-4 columns">
                            <h2 class="hide-for-medium-up">Resume</h2>
                            <h4>Alex Mark</h4>
                            <h6>ajmark@andrew.cmu.edu</h6>

                            <a href="#" class="button tiny">Open PDF Resume</a>

                            <ul class="inline-list">
                                <li>
                                    <a class='social' href='http://www.linkedin.com/pub/alexander-mark/58/9b/605' target='_blank'>LinkedIn</a>
                                </li>
                                <li>    
                                    <a class='social' href='http://www.github.com/ajmark' target='_blank'>GitHub</a>
                                </li>
                            </ul>
                        </div>
                        <div class="medium-8 columns show-for-medium-up">

                        </div>
                    </div>
                </div>
            </div>

            <div class="content-box-left" id="projects">
                <div class="small-12 content-body">
                    <div class="row">
                        <div class="small-12">
                            <h2 class="hide-for-medium-up">Projects</h2>
                            <ul>
                                <li class="project-box-container">
                                    <a id="tartantickets-project" href="">
                                    <img id="tartantickets-thumb" class="thumbnail" src="public/assets/thumbnails/tartantickets_thumb.png">
                                    <div class="project-box blue-box">
                                        <h3>TartanTickets</h3><br /><br />
                                        <p>Ruby on Rails</p>
                                    </div>
                                    </a>
                                </li>
                                
                                <li class="project-box-container">
                                    <a id="dinewithdinex-project" href="">
                                    <img id="dinewithdinex-thumb" class="thumbnail-visible" src="public/assets/thumbnails/dinewithdinex_thumb.png">
                                    <div class="project-box gray-box">
                                        <h3>Dine With DineX</h3><br /><br />
                                        <p>Node.js</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="amks-project" href="">
                                    <img id="amks-thumb" class="thumbnail" src="public/assets/thumbnails/amks_thumb.png">
                                    <div class="project-box light-blue-box">
                                        <h3>A&M Karate School</h3><br />
                                        <p>Ruby on Rails</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="fanapp-project" href="">
                                    <img id="fanapp-thumb" class="thumbnail-visible" src="public/assets/thumbnails/fanapp_thumb.png">
                                    <div class="project-box orange-box">
                                        <h3>NBA Fan App</h3><br /><br />
                                        <p>Node.js</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="arl-project" href="">
                                    <img id="arl-thumb" class="thumbnail" src="public/assets/thumbnails/arl_thumb.png">
                                    <div class="project-box red-box">
                                        <h3>Animal Rescue League</h3><br />
                                        <p>Website Redesign</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="wim-project" href="">
                                    <img id="wim-thumb" class="thumbnail" src="public/assets/thumbnails/wim.png">
                                    <div class="project-box purple-box">
                                        <h3>Women in Medicine</h3><br />
                                        <p>Web Design Prototype</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="relationpic-project" href="">
                                    <img id="relationpic-thumb" class="thumbnail-visible" src="public/assets/thumbnails/relationpic_thumb.png">
                                    <div class="project-box blue-box">
                                        <h3>Relationpic</h3><br /><br />
                                        <p>Mobile App Proof of Concept</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="ajmark-project" href="">
                                    <img id="ajmark-thumb" class="thumbnail" src="public/assets/thumbnails/ajmark_thumb.png">
                                    <div class="project-box gray-box">
                                        <h3>ajmark.com</h3><br /><br />
                                        <p>Personal Website & Portfolio</p>
                                    </div>
                                    </a>
                                </li>

                                <li class="project-box-container">
                                    <a id="visual-concepts" href="">
                                    <img id="visual-concepts-thumb" class="thumbnail" src="public/assets/thumbnails/visual_concepts_thumb.png">
                                    <div class="project-box green-box">
                                        <h3>Visual <br />Concepts</h3><br />
                                        <p>Design Concepts & Graphics</p>
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