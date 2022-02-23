<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        I'm Arvind Choudhary!
    </title>
    <!-- Scripts -->
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <style>
        body {
            position: relative;
            top: 60px;
        }

        h3 {
            font-family: monospace;
        }

        .image {
            position: relative;
            left: 30px;
        }

        #toggle {
            position: relative;
            left: 50px;
        }

        #defaultPanel {
            max-width: 80%;
        }

        body,
        [data-theme='default'] {
            color: #000000;
            background-color: #fff;
        }

        body,
        [data-theme='dark'] {
            color: #fff;
            background-color: #131b1e;
        }

        #backToTop {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Fixed/sticky position */
            bottom: 20px;
            /* Place the button at the bottom of the page */
            right: 30px;
            /* Place the button 30px from the right */
            z-index: 99;
            /* Make sure it does not overlap */
            outline: none;
            /* Remove outline */
            padding: 15px;
            /* Some padding */
            border-radius: 10px;
            /* Rounded corners */
            font-size: 18px;
            /* Increase font size */
        }

        #backToTop:hover {
            background-color: #000000;
            /* Add a dark-grey background on hover */
        }
    </style>

    <script type="text/javascript">
        function theme_switcher(toggler) {
            // On toggler clicked
            var container = document.getElementsByTagName('body')[0];
            var switcher = document.getElementsByClassName('switcher')[0];
            console.log('Click performed!')
            console.log(toggler)
            if (container.getAttribute('data-theme') == 'default') {
                container.setAttribute('data-theme', 'dark');
                console.log('switching to dark theme')

            } else {
                container.setAttribute('data-theme', 'default');
                console.log('switching to default theme')
            }

        }

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scroll_Function_Custom()
        };

        function scroll_Function_Custom() {

            //Get the button
            var mybutton = document.getElementById("backToTop");

            if (document.body.scrollTop > 20
                || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function top_scroll_frame_custom() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        window.onload = function () {
            getNoOfYearsOfExperience();
        }

        function getNoOfYearsOfExperience() {
            let today = new Date();
            let olday = new Date("23 July 2018");
            let yrs = today.getFullYear() - olday.getFullYear();
            let months = today.getMonth() - olday.getMonth();
            if (months < 0) {
                yrs--;
            }
            months = months < 0 ? 12 + months : months;
            console.log('yrs', yrs, 'months', months)
            document.getElementById("noOfYearsOfExperience").innerText = yrs + '.' + months;

        }




    </script>
</head>

<body data-theme='default'>
    <!-- Nav-bar -->
    <nav class="navbar fixed-top navbar-header opacity-20 ">

        <img src="favicon.ico" alt="fav-icon" width="40" height="40" class="image top opacity-100">

        <button id="toggler" class="btn rounded-pill border opacity-100 switcher" onclick="theme_switcher(this)">
            <img src="/images/switch-theme.png">
        </button>

        </div>
    </nav>
    <!-- body -->

    <h1 class="opacity-100" align="center">
        <div>Hey!</div> I'm Arvind Choudhary
    </h1>
    <br />
    <br />

    <!--Actual Black BOX-->

    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="btn" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button"
                role="tab" aria-controls="pills-about" aria-selected="false" onmouseover="click(this)">About</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn" id="pills-skills-tab" data-bs-toggle="pill" data-bs-target="#pills-skills" type="button"
                role="tab" aria-controls="pills-skills" aria-selected="false" onmouseover="click(this)">Skills</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience"
                type="button" role="tab" aria-controls="pills-experience" aria-selected="false"
                onmouseover="click(this)">Experience</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn" id="pills-education-tab" data-bs-toggle="pill" data-bs-target="#pills-education"
                type="button" role="tab" aria-controls="pills-education" aria-selected="false"
                onmouseover="click(this)">Education</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-default" role="tabpanel" aria-labelledby="pills-default-tab">
            <!-- Defautl Frame -->
            <div class="position-relative">
                <div class="alert alert-primary position-absolute top-50 start-50 translate-middle-x" id="defaultPanel"
                    role="alert">
                    Try to hovermouse over to any of the button shown above!
                </div>
            </div>>
        </div>

        <!-- about -->
        <div class="tab-pane fade show" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
            <div class="row g-0 d-flex p-2 justify-content-evenly" id="about">
                <nav class="d-flex p-2 justify-content-start border">
                    <span class="mb-0 h3">About</span>
                </nav>
                <div class="col-sm-6 col-md-6 d-flex p-2 justify-content-evenly">
                    <p>
                        <img src="images/about.png" width="200" height="200" class="img-fluid" alt="about">
                    </p>
                </div>
                <div class="col-6 col-md-6">
                    <strong>Automation developer with <span id="noOfYearsOfExperience">{is JS
                            enabled?????}</span> years of experience in
                        creation, maintenance &amp; optimization of scripts. Have also
                        worked on maintenance and enhancement of framework.</strong><br> I'm a
                    young enthusiast who is keen on learning new languages/tools/ways to
                    get things done. <br> During the past few years, I gained lots
                    of experience in this field due to the strong desire of becoming an
                    expert. Today I am a Automation Engineer at one of the leading MNC. <br>
                    <br> <b> Few words to describe my work</b>
                    <ul>
                        <li>Automation Tester(Web/Windows/Api/DB)</li>
                        <li>TDD/BDD based script development</li>
                        <li>Agile Tester</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- skills -->
        <div class="tab-pane fade" id="pills-skills" role="tabpanel" aria-labelledby="pills-skills-tab">
            <div class="row g-0 d-flex p-2 justify-content-evenly" id="skill">
                <nav class="d-flex p-2 justify-content-start border">
                    <span class="mb-0 h3">Skill</span>
                </nav>
                <div class="col-sm-6 col-md-6 d-flex p-2 justify-content-evenly">
                    <p>
                        <img src="images/skill.png" width="200" height="200" class="img-fluid" alt="skill">
                    </p>
                </div>
                <div class="col-6 col-md-6">
                    <br> <b> Soft Skills</b>
                    <ul>
                        <li>Quick learner</li>
                        <li>Problem Solving</li>
                        <li>Time management</li>
                        <li>Team player</li>
                        <li>Leadership</li>
                        <li>Flexible</li>
                    </ul>

                    <br> <b> Hard Skills</b>
                    <ul>
                        <li>Programming Language
                            <ul>
                                <li>Java</li>
                                <li>Python</li>
                            </ul>
                        </li>
                        <li>Testing Framework
                            <ul>
                                <li>TestNG</li>
                                <li>JUnit</li>
                            </ul>
                        </li>
                        <li>Automation
                            <ul>
                                <li> Browser
                                    <ul>
                                        <li>Selenium
                                            <ul>
                                                <li>Web Driver</li>
                                                <li>Grid</li>
                                            </ul>
                                        </li>
                                        <li class="text-muted" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Learning">Cypress</li>
                                    </ul>
                                </li>
                                <li> Window
                                    <ul>
                                        <li>Leanft/UFT Developer</li>
                                    </ul>
                                </li>
                                <li> API
                                    <ul>
                                        <li>RestAssured Java Library</li>
                                        <li>Postman</li>
                                        <li class="text-muted" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Learning">Karate DSL</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Cucumber - BDD</li>
                        <li>Git - version control</li>
                        <li>Jenkins - CICD</li>
                        <li>Apache Maven - software project management</li>
                        <li>Docker - Containerization</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- experience -->
        <div class="tab-pane fade show" id="pills-experience" role="tabpanel" aria-labelledby="pills-experience-tab">
            <div class="row g-0 d-flex p-2 justify-content-evenly" id="experience">
                <nav class="d-flex p-2 justify-content-start border">
                    <span class="mb-0 h3">Experience</span>
                </nav>
                <div class="col-sm-6 col-md-6 d-flex p-2 justify-content-evenly">
                    <p>
                        <img src="images/experience.png" width="200" height="200" class="img-fluid" alt="experience">
                    </p>
                </div>
                <div class="col-6 col-md-6">
                    <br> <b> Career Path</b>
                    <ul>
                        <li><u>J.P. Morgan Chase:</u>
                            <ul>
                                <li>Roles:
                                    <ul>
                                        <li>Software Engineer - 502 [Nov-21 - Present]</li>
                                    </ul>
                                </li>
                                <li>Responsibilities:
                                    <ol>
                                        <li>E2E regression automation</li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                        <li><u>Infosys Limited:</u>
                            <ul>
                                <li>Roles:
                                    <ul>
                                        <li>Test Engineer [Apr-21 - Oct-21]</li>
                                        <li>Testing Executive [Jul-18 - Mar-21]</li>
                                    </ul>
                                </li>
                                <li>Responsibilities:
                                    <ol>
                                        <li>E2E regression automation</li>
                                        <li>Regression code maintenance</li>
                                        <li>Code optimization and enhancement</li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- education -->
        <div class="tab-pane fade show" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">
            <div class="row g-0 d-flex p-2 justify-content-evenly" id="education">
                <nav class="d-flex p-2 justify-content-start border">
                    <span class="mb-0 h3">Education</span>
                </nav>
                <div class="col-sm-6 col-md-6 d-flex p-2 justify-content-evenly">
                    <p>
                        <img src="images/education.png" width="200" height="200" class="img-fluid" alt="experience">
                    </p>
                </div>
                <div class="col-6 col-md-6">
                    <br> <b> Education Path</b>
                    <ul>
                        <li>Thakur college of science &amp; commerce (Degree College)
                            [2015-2018]
                            <ul>
                                <li><strong>Course:</strong>&nbsp;&nbsp;Bsc I.T.</li>
                                <li><strong>Average:</strong>&nbsp;&nbsp;76.06%</li>
                            </ul>
                        </li>
                        <li>Thakur college of science &amp; commerce (Junior College)
                            [2013-2015]
                            <ul>
                                <li><strong>Course:</strong>&nbsp;&nbsp;Commerce I.T.</li>
                                <li><strong>XII<sup>th</sup>:
                                    </strong>&nbsp;&nbsp;85.38%</li>
                            </ul>
                        </li>
                        <li>Samata Vidya Mandir [2003-2013]
                            <ul>
                                <li><strong>X<sup>th</sup>:
                                    </strong>&nbsp;&nbsp;67.09%</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a class="alert" href="https://www.linkedin.com/in/arvind-choudhary-0b0a82171/"
                        target="_blank"><img src="images/linkedin.gif" class="rounded-circle img-fluid" alt="linkedIn"
                            width="30" height="30"></a></li>
                <li class="nav-item"><a class="alert" href="mailto:arvindchoudhary142@yahoo.in"><img
                            src="images/mailbox.gif" class="rounded-circle img-fluid" alt="mailBox" width="30"
                            height="30"> </a></li>
                <li class="nav-item"><a class="alert" href="https://github.com/Arvind142" target="_blank"><img
                            src="images/github.gif" class="rounded-circle img-fluid" alt="github" width="30"
                            height="30"> </a></li>
            </ul>
            <p class="text-center text-muted">- Arvind Choudhary -</p>
        </footer>
    </div>



    <!-- go to TOP button -->
    <button onclick="top_scroll_frame_custom()" class="btn btn-outline-secondary" style="width: 100px;" id="backToTop"
        title="Go to top">Top</button>
</body>

</html>