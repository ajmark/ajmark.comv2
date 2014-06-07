<!DOCTYPE html>
<html>
    <?php include('includes/head.php'); ?>
    <body>
        <div class="nav-wrapper">
            <nav>
                <div class="small-2 medium-3 large-3 column shadow" id="left-banner">
                </div>
                <div class="small-3 medium-2 large-1 column" id="mid-banner">
                    <a href="index.php">   
                        <img id="logo"src="public/assets/logo.png">
                    </a>
                </div>
                <div class="small-7 medium-7 large-8 column shadow" id="right-banner">
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
                                    <a href="#" class="view-link-small" value="work-experience">Work Experience</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" class="view-link-small" value="projects">Projects</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" class="view-link-small" value="resume">Resume</a>
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
                        <a id="projects-link" class="view-link" href="#" value='projects'>Projects</a>
                    </li>
                    <li>
                        <p>|</p>
                    </li>
                    <li>
                        <a id="work-experience-link" class="view-link active" href="#" value='work-experience'>Work Experience</a>
                    </li>
                    <li>
                        <p>|</p>
                    </li>
                    <li>
                        <a id="resume-link" class="view-link" href="#" value='resume'>Resume</a>
                    </li>
                </ul>
            </div>

            <div class="content-box-middle visible" id="work-experience">
                <div class="small-12 medium-10 medium-centered content-body columns">
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

                <div class="small-12 medium-10 medium-centered content-body columns">
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
                <h2 class="hide-for-medium-up">Resume</h2>
                <p> Resume. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="content-box-left" id="projects">
                <h2 class="hide-for-medium-up">Projects</h2>
                <p> Projects. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </body>
</html>