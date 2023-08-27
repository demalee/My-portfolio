@extends('layouts.app')
@section('content')
    <div id="content">
        <div class="a-pagepiling full-page">

            <!-- Section 01 -->
            <div class="section pp-scrollable slide slide-about a-slide-typed" data-name="about">
                <div class="slide-container">

                    <div class="auto-container">

                        <div class="banner-section">
                            <div class="icons parallax-scene-1">
                                <span data-depth="0.90" class="icon-one parallax-layer" style="background-image:url(images/icons/icon-1.png)"></span>
                                <span data-depth="1" class="icon-two parallax-layer" style="background-image:url(images/icons/icon-2.png)"></span>
                                <span data-depth="0.80" class="icon-three parallax-layer" style="background-image:url(images/icons/icon-3.png)"></span>
                                <span data-depth="0.70" class="icon-four parallax-layer" style="background-image:url(images/icons/icon-4.png)"></span>
                                <span data-depth="0.0" class="icon-five parallax-layer" style="background-image:url(images/icons/pattern-1.png)"></span>
                            </div>

                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h1><span>Hello, </span> <i class="variable-text"></i></h1>
                                        <ul class="info-list">
                                            <li>Web  Developer</li>
                                            <li>Fullstack Engineer</li>
                                            <li>Lead Developer</li>
                                        </ul>
                                        <div class="bold-text">As a skilled full-stack developer, I specialize in  Laravel,Php,Angularjs and vue.js.
                                            .</div>
                                        <div class="text">I am a self-driven, energetic, and passionate individual with constant strive to pursue knowledge and skills in the web development field. I am very teachable, a fast learner, positive to correction, and always looking forward to expanding and advancing my experience in all ventures I will be part of.</div>
                                    </div>
                                </div>

                                <!-- Images Column -->
                                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="images">
                                            <div class="image mask-skew">
                                                <div class="mask wow slideInLeft" data-wow-offset="250" data-wow-duration="1.2s" data-wow-delay=".3s">
                                                    <div class="inside"></div>
                                                </div>
                                                <img src="{{asset('img/2.png')}}" alt="" />
                                            </div>
{{--                                            <div class="image-two mask-skew">--}}
{{--                                                <div class="mask wow slideInLeft" data-wow-offset="250" data-wow-duration="1.2s" data-wow-delay=".3s">--}}
{{--                                                    <div class="inside"></div>--}}
{{--                                                </div>--}}
{{--                                                <img src="{{asset('images/resource/banner-3.jpg')}}" alt="" />--}}
{{--                                            </div>--}}
                                            <div class="image-three mask-skew">
                                                <div class="mask wow slideInLeft" data-wow-offset="250" data-wow-duration="1.2s" data-wow-delay=".3s">
                                                    <div class="inside"></div>
                                                </div>
                                                <img src="{{asset('img/me.jpg')}}" alt="" />
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Section Title -->
                        <div class="section-title">
                            Home
                        </div>

                        <!-- Section Number -->
                        <div class="section-number">
                            01<sub>/09</sub>
                        </div>

                    </div>

                </div>

            </div>
            <!-- End Section 01 -->

            <!-- Section 02 -->
            <div class="section pp-scrollable slide slide-services slide-dark slide-services a-slide-typed" data-name="services">
                <div class="slide-container">
                    <div class="slide-inner-container">

                        <div class="skills-section">
                            <!-- Pattern Layer -->
                            <div class="pattern-layer" style="background-image:url(images/icons/pattern-1.png)"></div>
                            <div class="auto-container">
                                <!-- Sec Title -->
                                <div class="sec-title centered">
                                    <h2>My featured skills</h2>
                                    <div class="text">I specialize  in the following fields.</div>
                                </div>

                                <div class="inner-container">
                                    <!-- Icon Layer -->
                                    <div class="icon-layer" style="background-image:url(images/icons/icon-5.png)"></div>
                                    <div class="icon-layer-two" style="background-image:url(images/icons/icon-6.png)"></div>
                                    <div class="row clearfix">

                                        <!-- Skill Block -->
                                        <div class="skill-block col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <img src="images/resource/skill-1.jpg" alt="" />
                                                </div>
                                                <div class="designation"> API Developer</div>
                                                <h3>Restful  API</h3>

                                                <!-- Skill Item -->
                                                <div class="skill-item">

                                                    <div class="skill-bar">
                                                        <div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
                                                    </div>
                                                </div>

                                                <div class="text">I implement APIs that connects/communicates with your

                                                    <br>  mobile app or web app to serve your desired functionality.</div>

                                            </div>
                                        </div>

                                        <!-- Skill Block -->
                                        <div class="skill-block col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <img src="images/resource/skill-2.jpg" alt="" />
                                                </div>
                                                <div class="designation">Full Stack Developer</div>
                                                <h3>Web development</h3>
                                                <!-- Skill Item -->
                                                <div class="skill-item">

                                                    <div class="skill-bar">
                                                        <div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
                                                    </div>
                                                </div>
                                                <div class="text">I give you a digital glimpse of

                                                    <br> our awesomeness in the digital world by creating remarkable products for you.</div>
                                            </div>
                                        </div>

                                        <!-- Skill Block -->
                                        <div class="skill-block col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <img src="images/resource/skill-3.jpg" alt="" />
                                                </div>
                                                <div class="designation">Developer</div>
                                                <h3>Front-end Development
                                                </h3>
                                                <!-- Skill Item -->
                                                <div class="skill-item">

                                                    <div class="skill-bar">
                                                        <div class="bar-inner"><div class="bar progress-line" data-width="80"></div></div>
                                                    </div>
                                                </div>
                                                <div class="text">Building the client-facing part of applications using modern front-end technologies such as
                                                    <br> Vue.js,Angularjs and blade to create engaging user interfaces.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Skill Block -->
                                        <div class="skill-block col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <img src="images/resource/skill-4.jpg" alt="" />
                                                </div>
                                                <div class="designation">Developer</div>
                                                <h3>Back-end Developer
                                                </h3>
                                                <!-- Skill Item -->
                                                <div class="skill-item">

                                                    <div class="skill-bar">
                                                        <div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
                                                    </div>
                                                </div>
                                                <div class="text">Developing the server-side functionality of websites or applications using technologies like

                                                    <br> databases, APIs, and server-side programming languages to ensure smooth data management and processing.</div>
                                            </div>
                                        </div>

                                        <!-- Skill Block -->
                                        <div class="skill-block col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <img src="images/resource/skill-5.jpg" alt="" />
                                                </div>
                                                <div class="designation">Deveops</div>
                                                <h3>DevOps and GCP</h3>
                                                <!-- Skill Item -->
                                                <div class="skill-item">

                                                    <div class="skill-bar">
                                                        <div class="bar-inner"><div class="bar progress-line" data-width="85"></div></div>
                                                    </div>
                                                </div>
                                                <div class="text">I integrate and automate software development operations so as to shorten your system lifecycle.

                                                     <br> -Version Control Tool: Git (GitLab, GitHub, Bitbucket)

                                                    -Continuous Integration Tool: Jenkins

                                                    -Container Platforms: Docker

                                                    -AWS

                                                    -Azure Cloud Computing

                                                    -Google Cloud Platform

                                                    -Nginx Server,Linux Commands, Digital Ocean,Cpanel.</div>
                                            </div>
                                        </div>

                                        <!-- Skill Block -->
                                        <div class="skill-block col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <img src="images/resource/skill-6.jpg" alt="" />
                                                </div>
                                                <div class="designation">Payment Intergration</div>
                                                <h3>M-PESA Intergration</h3>
                                                <!-- Skill Item -->
                                                <div class="skill-item">

                                                    <div class="skill-bar">
                                                        <div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
                                                    </div>
                                                </div>
                                                <div class="text">Start processing transactions online on your

                                                    <br> website by adding payment gateway of your choice.</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Section Title -->
                        <div class="section-title">
                            Skills
                        </div>

                        <!-- Section Number -->
                        <div class="section-number">
                            02<sub>/09</sub>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Section 02 -->

            <!-- Section 03 -->
            <div class="section pp-scrollable slide slide-skills a-slide-typed" data-name="skills">
                <div class="slide-container">
                    <div class="slide-inner-container">

                        <div class="apps-section">
                            <!-- Pattern Layer -->
                            <div class="pattern-layer" style="background-image:url(images/icons/pattern-4.png)"></div>
                            <div class="auto-container">
                                <div class="row clearfix">

                                    <!-- Image Column -->
                                    <div class="image-column mask-skew col-lg-6 col-md-12 col-sm-12 mask-skew">
                                        <div class="mask wow slideInLeft" data-wow-offset="250" data-wow-duration="1.2s" data-wow-delay=".3s">
                                            <div class="inside"></div>
                                        </div>
                                        <div class="inner-column">
                                            <div class="mask wow slideInLeft" data-wow-offset="250" data-wow-duration="1.2s" data-wow-delay=".3s">
                                                <div class="inside"></div>
                                            </div>
                                            <div class="image">
                                                <img src="images/resource/app.jpg" alt="" />
                                            </div>
                                            <div class="talk-box">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="3500" data-stop="30">0</span>+
                                                </div>
                                                <a href="blog-detail.html" class="projects">Completed <br> Projects</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-column">
                                            <!-- Sec Title -->
                                            <div class="sec-title">
                                                <div class="title"> </div>
                                                <h2>PROJECT PROCESS
                                                </h2>
                                            </div>
                                            <ul class="list-style-one">
                                                <li><span>Brainstorming
</span>I meet with the client and listen to the problem and brainstorm on the best solutions to the problem. </li>
                                                <li><span>Sketching
</span>Then come up with prototypes and demo samples for the clients and I to work with.</li>
                                                <li><span>Design and Development
</span>
                                                    Once the prototype is approved, implementation of working solution for the prototype begins.</li>
                                                <li><span>Testing
</span>
                                                    Once the development process is complete the client and I go through the project to look for any bugs and fix them.</li>   <li><span>Sketching
</span>Then come up with prototypes and demo samples for the clients and I to work with.</li>   <li><span>Launch
</span>
                                                    After approval by the client, the project is then launched.</li>



                                            </ul>
                                            <!-- Author Box -->

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Section Title -->
                        <div class="section-title">
                            Services
                        </div>

                        <!-- Section Number -->
                        <div class="section-number">
                            03<sub>/09</sub>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Section 03 -->

            <!-- Section 04 -->
            <div class="section pp-scrollable slide slide-resume slide-dark">
                <div class="slide-container">
                    <div class="slide-inner-container">

                        <div class="profile-section">
                            <!-- Pattern Layer -->
                            <div class="pattern-layer" style="background-image:url(images/icons/pattern-1.png)"></div>
                            <div class="auto-container">
                                <!-- Sec Title -->
                                <div class="sec-title centered">
                                    <h2>Explore my profile</h2>
                                </div>

                                <div class="inner-container">

                                    <!-- Profile Column -->
                                    <div class="profile-column">
                                        <div class="inner-column">

                                            <h4>Education</h4>
                                            <div class="blocks-outer">

                                                <!-- Profile Block -->
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-2.jpg" alt="" />
                                                        </div>
                                                        <div class="title">MULTIMEDIA UNIVERSITY OF KENYA</div>
                                                        <h4>BSC. Software Engineering.</h4>
                                                        <div class="description-text">2015 – 2019
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Profile Block -->
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-2.jpg" alt="" />
                                                        </div>
                                                        <div class="title"> KAPSABET BOYS HIGH SCHOOL</div>
                                                        <h4>Grade Score : A-</h4>
                                                        <div class="text"> 2011 – 2014</div>
                                                    </div>
                                                </div>

                                                <!-- Profile Block -->
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-2.jpg" alt="" />
                                                        </div>
                                                        <div class="title">
                                                            OLONINI PRIMARY SCHOOL
                                                           </div>
                                                        <h4>411 A.</h4>
                                                        <div class="text"> 2003 – 2011</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Profile Column -->
                                    <div class="profile-column">
                                        <div class="inner-column">

                                            <h4>Work Experience</h4>
                                            <div class="blocks-outer">

                                                <!-- Profile Block -->
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-3.jpg" alt="" />
                                                        </div>
                                                        <div class="title">2020-present
                                                        </div>
                                                        <h4>Lead Software Developer ,Ecobba LTD
                                                        </h4>
                                                        <ul class="list-style-one">
                                                            <li><span>
                                                            Lead the Development Team in developing applications using Laravel
                                                                </span></li>
                                                            <li><span> Server side responsibilities</span></li>
                                                            <li><span>Code review</span></li>
                                                            <li><span>Incharge of whitelabels</span></li>
                                                          <li><span>Create test cases for both the web application and APIs.</span></li>
                                                          <li><span>Design, Create and Maintain the application’s DB.</span></li>
                                                          <li><span>Support for any other of the lab’s projects where possible.</span></li>
                                                          <li><span>Added features to existing software applications to fit new customer requirements.</span></li>
                                                          <li><span>Tested, maintained and monitored deployed applications.</span></li>
                                                          <li><span>Created and maintained automated CI/CD Pipelines using Azure DevOps.</span></li>
                                                          <li><span>Integration of applications with other applications(new and existing) ● Development and exposing of REST APIS.</span></li>
                                                          <li><span>Manage work assignments of internal staff and schedule and monitor adherence to procedures, protocols, and standards.</span></li>
                                                          <li><span>Acting as an on-site project manager responsible for managing projects from inception to completion.</span></li>
                                                          <li><span>Estimating and plan project timelines and deliverables and adjust to unplanned changes and the impact on project schedules and resources.</span></li>
                                                          <li><span>Monitoring application Performance.</span></li>
                                                                  <li><span>Deliver presentations to team members as it relates to project work</span></li>
                                                                  <li><span>Remain current with relevant development and project methodologies.</span></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Profile Block -->
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-3.jpg" alt="" />
                                                        </div>
                                                        <div class="title">From May 2023 – August 2023-Contract.</div>
                                                        <h4>  Riverbank Solutions LTD </h4>
                                                        <div class="text">Fullstack Software Engineer</div>
                                                        <ul class="list-style-one">


                                                           <div class="text>"> In a world where payment technologies and services have become central
                                                               in shaping the behavior of Industries and Markets, we pride ourselves
                                                               in delivering payments solutions and services that are Creative, flexible
                                                               and dynamic</div>


                                                            <li><span>
                                                      Test, maintain and monitor deployed applications.</span></li>


                                                            <li><span>Create test cases for both the web application and APIs.</span></li>

                                                            <li><span>Added features to existing software applications to fit new customer requirements.</span></li>

                                                            <li><span>Integration of applications with other applications(new and existing) </span></li>
                                                                      <li><span>  Development and exposing of REST APIS.</span></li>
                                                            <li><span>Manage work assignments of internal staff and schedule and monitor adherence to procedures, protocols, and standards.</span></li>
                                                            <li><span>Estimating and plan project timelines and deliverables and adjust to unplanned changes and the impact on project schedules and resources.</span></li>
                                                            <li><span>Monitoring application Performance.</span></li>
                                                            <li><span>Remain current with relevant development and project methodologies.</span></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Profile Block -->
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-3.jpg" alt="" />
                                                        </div>
                                                        <div class="title">      From March 2023 – to-date</div>
                                                        <h4>ACEMED SOLUTIONS



                                                        </h4>
                                                        <div class="text">Fullstack Developer,part time</div>
                                                        <ul class="list-style-one">


                                                            <div class="text>">
                                                                Web design, and development using	PHP-Laravel ,Vuejs, Javascript, HTML, CSS

                                                            </div>


                                                            <li><span>

                                                            <li><span>Design, Create and Maintain the application’s DB.
  <li><span>Support for any other of the Acemed Solutions.</span></li>
  <li><span>Add features to existing software applications to fit new customer requirements.</span></li>
          <li><span>Test, maintain and monitor deployed applications.</span></li>
</span></li>



                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Profile Block -->
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-3.jpg" alt="" />
                                                        </div>
                                                        <div class="title">   From Jan 2019 – to-date</div>
                                                        <h4>Freelance

                                                        </h4>
                                                        <div class="text">Software Engineer</div>
                                                        <ul class="list-style-one">


                                                            <div class="text>">Web design and development using	PHP-Laravel , Javascript, HTML, CSS
                                                                Freelance software development on Upwork
                                                                Integrating websites with Fintech payment systems such as paypal,Mpesa
                                                            </div>






                                                            <li><span> Tenacious Work Ethic</span></li>

                                                            <li><span>Interpersonal Communication
</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-3.jpg" alt="" />
                                                        </div>
                                                        <div class="title">From Jan 2023 – April 2023</div>
                                                        <h4>Home2lab UK

                                                        </h4>
                                                        <div class="text">Fullstack Software Engineer</div>
                                                        <ul class="list-style-one">


                                                            <div class="text>">Home2lab has a hospitalnote clinic Management Software that is built to help clinicians,patients,doctors and enterprises in real-world everyday practices at hospital.Its an Hospital management System thats is cloud-based.
                                                            </div>


                                                            <li><span>

                                                            <li><span>Add new features ,Develop and Maintain the web application.
</span></li>
                                                                    <li><span>Create APIs for the mobile application.
</span></li>
                                                                     <li><span> Search Engine Optimization (SEO)</span></li>
</span></li>
                                                            <li><span>  AngularJs for Frontend</span></li>
                                                            <li><span> TImplement Laravel/Php for Apis
</span></li>
                                                            <li><span> E2E Testing using Karma
</span></li>
                                                            <li><span>Bonobo Version Control


</span></li>
                                                            <li><span>Open AI intergration·</span></li>
                                                            <li><span> Amazon Web Services (AWS) ·
</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-3.jpg" alt="" />
                                                        </div>
                                                        <div class="title"> From October 2021 – 2022</div>
                                                        <h4>Phemaagri LTD

                                                        </h4>
                                                        <div class="text">Technical Lead </div>
                                                        <ul class="list-style-one">


                                                            <div class="text>">Phema-Agri is an agri-tech startup that has a farm management app that helps farmers or farm managers increase farm efficiency, generate reports for investors, access farm support like veterinary services and better record keeping.


                                                            </div>


                                                            <li><span>

                                                            <li><span>Setting the project’s technical direction

</span></li>
                                                                    <li><span>Setting up softwares and frameworks of standards and procedures

</span></li>
                                                                     <li><span> Conducting detailed assessments to make the right decisions
</span></li>
</span></li>
                                                            <li><span>  AngularJs for Frontend</span></li>
                                                            <li><span> TImplement Laravel/Php for Apis
</span></li>
                                                            <li><span> Technical capacity responsibilities

</span></li>
                                                            <li><span>conduct software delivery,code review, CI/CD


</span></li>
                                                            <li><span>Maintained software performance with regular updates.
·</span></li>
                                                            <li><span> Identified complex system and software problems, evaluated troubleshooting

</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-3.jpg" alt="" />
                                                        </div>
                                                        <div class="title"> From October 2021 – 2022</div>
                                                        <h4>Adanian Labs Africa


                                                        </h4>
                                                        <div class="text">Full Stack Developer</div>
                                                        <ul class="list-style-one">


                                                            <div class="text>">                                                            Adanian Labs Africa is a venture building studio with a mission to build tech-powered impact-driven startups across Africa.Offered consultancy services as a Full Stack Software Engineer to other startups under the incubation umbrella of Adanian Labs Africa and technical support during hackathons hosted by the company.


                                                            </div>


                                                            <li><span>

                                                            <li><span>Frontend Development



</span></li>
                                                                    <li><span>Teamwork Collaborations and hackathons

</span></li>

</span></li>
                                                            <li><span> Version Control</span></li>
                                                            <li><span> RESTFUL Apis
</span></li>
                                                            <li><span> Technical capacity responsibilities

</span></li>
                                                            <li><span>Liaise with the DevOps Team to deploy the web application and APIs.



</span></li>
                                                            <li><span>Azure Infrastructure as a Service (IaaS)

·</span></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-3.jpg" alt="" />
                                                        </div>
                                                        <div class="title"> From October 2020 –2021
                                                        </div>
                                                        <h4>Afyarekod Ltd



                                                        </h4>
                                                        <div class="text">Software Developer </div>
                                                        <ul class="list-style-one">



                                                            <li><span>

                                                            <li><span>Design, Develop and Maintain the web application.




</span></li>
                                                                    <li><span>Teamwork Collaborations and hackathons

</span></li>

</span></li>
                                                            <li><span>Create APIs for the mobile application.
</span></li>

                                                            <li><span> Technical capacity responsibilities

</span></li>
                                                            <li><span>Client Relations

·</span></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-3.jpg" alt="" />
                                                        </div>
                                                        <div class="title">        May – August, 2019
                                                        </div>
                                                        <h4> Kodebase Ltd Kenya, Nairobi





                                                        </h4>
                                                        <div class="text">Software developer Intern </div>
                                                        <ul class="list-style-one">



                                                            <li><span>

                                                            <li><span>Trained with the Kodebase Ltd and acquired skills in software and web application development.





</span></li>
                                                                    <li><span>Mobile web developer (HTML, CSS,Bootstrap Java, python, Laravel and
JavaScript).

</span></li>
                                                                     <li><span>
Test automation using selenium IDE


</span></li>
</span></li>


                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Profile Column -->
                                    <div class="profile-column">
                                        <div class="inner-column">

                                            <h4>Skills</h4>
                                            <div class="blocks-outer">

                                                <!-- Profile Block -->
                                                <div class="profile-block">
                                                    <div class="block-inner">
                                                        <div class="image">
                                                            <img src="images/resource/profile-3.jpg" alt="" />
                                                        </div>

                                                        <ul class="list-style-one">



                                                            <li><span>


                                                                     <li><span>
Spring Boot

</span></li>
</span></li>

                                                            <li><span> AngularJs for Frontend

</span></li>

                                                            <li><span>PHP


</span></li>
                                                            <li><span>Laravel
                                                                </span></li>
                                                            <li><span>   Wordpress
                                                                </span></li>
                                                            <li><span>MySQL
                                                              <li><span>Search Engine Optimization (SEO)  </span></li>

                                                              <li><span>SQL  </span></li>

                                                              <li><span>Ajax  </span></li>
                                                             <li><span> RDBMS  </span></li>
                                                                      <li><span>SNginx</span></li>

  <li><span>Vuejs</span></li>
  <li><span>Valet</span></li>
                                                                       <li><span>Javascript
   <li><span>Zend Frameworks</span></li>


   <li><span>Microservices</span></li>
   <li><span>Ajax</span></li>



                                                        </ul>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Section Title -->
                        <div class="section-title">
                            Profile
                        </div>

                        <!-- Section Number -->
                        <div class="section-number">
                            04<sub>/09</sub>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Section 04 -->

            <!-- Section 05 -->
            <div class="section pp-scrollable slide slide-portfolio a-slide-typed" data-name="portfolio">
                <div class="slide-container">
                    <div class="slide-inner-container">

                        <section class="web-section">
                            <!-- Sec Title -->
                            <div class="sec-title centered">
                                <h2>My latest work</h2>
                                <div class="text">
                                    With attention to detail and a commitment to excellence, I strive to create meaningful solutions that meet client's needs and exceed expectations.

                                </div>
                            </div>
                            <!-- Pattern Layer -->
                            <div class="pattern-layer" style="background-image:url(images/icons/pattern-4.png)"></div>
                            <div class="auto-container">
                                <!-- MixitUp Galery -->
                                <div class="mixitup-gallery">

                                    <!--Filter-->
                                    <div class="filters text-center clearfix">
                                        <ul class="filter-tabs filter-btns clearfix">
                                            <li class="active filter" data-role="button" data-filter="all">All Projects</li>
                                            <li class="filter" data-role="button" data-filter=".web-design">Web Design</li>
                                        </ul>
                                    </div>

                                    <div class="filter-list row clearfix">

                                        <!-- Gallery Block -->
                                        <div class="gallery-block all mix mobile-app logo-design col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="img/ecobba.png" alt="">
                                                    <!-- Overlay Box -->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <a href="img/ecobba.png" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="lower-content">
                                                    <div class="designation">Sacco and group management System-Ecobba</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Gallery Block -->
                                        <div class="gallery-block all mix ui-design col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="img/zed.png" alt="">
                                                    <!-- Overlay Box -->
                                                    <div class="overlay-box">

                                                    </div>
                                                </figure>
                                                <div class="lower-content">
                                                    <div class="designation">Payments and transactions made simple-Zed Payments</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Gallery Block -->
                                        <div class="gallery-block all mix mobile-app logo-design col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="img/thecreats.png" alt="">
                                                    <!-- Overlay Box -->
                                                    <div class="overlay-box">

                                                    </div>
                                                </figure>
                                                <div class="lower-content">
                                                    <div class="designation">Farm Management System-Thecreats</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Gallery Block -->
                                        <div class="gallery-block all mix web-design ui-design col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="img/brzzm.png" alt="">
                                                    <!-- Overlay Box -->

                                                </figure>
                                                <div class="lower-content">
                                                    <div class="designation">Car hire and Leasing System-Brizzm Ltd</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Gallery Block -->
                                        <div class="gallery-block all mix logo-design col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="img/riverwalk.png" alt="">
                                                    <!-- Overlay Box -->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <a href="img/riverwalk.png" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="lower-content">
                                                    <div class="designation">Riverwalk Investment Construction website</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Gallery Block -->
                                        <div class="gallery-block all mix mobile-app ui-design web-design col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="img/pos.png" alt="">
                                                    <!-- Overlay Box -->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <a href="img/pos.png" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="lower-content">
                                                    <div class="designation">A simple Point of Sale System</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gallery-block all mix mobile-app ui-design web-design col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="img/africon.png" alt="">
                                                    <!-- Overlay Box -->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <a href="img/africon.png" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="lower-content">
                                                    <div class="designation">Afrcon Engineering Website</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gallery-block all mix mobile-app ui-design web-design col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="img/eac.png" alt="">
                                                    <!-- Overlay Box -->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <a href="img/eac.png" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="lower-content">
                                                    <div class="designation">KEBS Proficiency Testing Web app</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="gallery-block all mix mobile-app logo-design col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="img/customer.png" alt="">
                                                    <!-- Overlay Box -->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <a href="img/customer.png" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="lower-content">
                                                    <div class="designation">A simple customer management System</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </section>

                        <!-- Section Title -->
                        <div class="section-title">
                            Latest Projects
                        </div>

                        <!-- Section Number -->
                        <div class="section-number">
                            05<sub>/09</sub>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Section 05 -->



            <!-- Section 07 -->
{{--            <div class="section pp-scrollable slide slide-testimonials">--}}
{{--                <div class="slide-container">--}}
{{--                    <div class="slide-inner-container">--}}

{{--                        <div class="about-section">--}}
{{--                            <div class="auto-container">--}}

{{--                                <!-- Sec Title -->--}}
{{--                                <div class="sec-title centered">--}}
{{--                                    <h2>What my happy clients are <br> saying about me.</h2>--}}
{{--                                </div>--}}

{{--                                <!-- Carousel Wrapper -->--}}
{{--                                <div id="carousel-thumb" class="carousel slide carousel-thumbnails" data-ride="carousel">--}}
{{--                                    <div class="row clearfix">--}}

{{--                                        <div class="pagers-column col-lg-6 col-md-12 col-sm-12">--}}
{{--                                            <div class="dotted-circle-one">--}}
{{--                                                <span class="dott-one"></span>--}}
{{--                                                <span class="dott-two"></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="dotted-circle-two">--}}
{{--                                                <span class="dott-one"></span>--}}
{{--                                                <span class="dott-two"></span>--}}
{{--                                            </div>--}}
{{--                                            <!-- Controls-->--}}
{{--                                            <ol class="carousel-indicators">--}}
{{--                                                <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <div class="image img-circle"><img src="images/resource/author-1.jpg" alt=""></div></li>--}}
{{--                                                <li data-target="#carousel-thumb" data-slide-to="1"><div class="image img-circle"><img src="images/resource/author-2.jpg" alt=""></div></li>--}}
{{--                                                <li data-target="#carousel-thumb" data-slide-to="2"><div class="image img-circle"><img src="images/resource/author-3.jpg" alt=""></div></li>--}}
{{--                                                <li data-target="#carousel-thumb" data-slide-to="3"><div class="image img-circle"><img src="images/resource/author-4.jpg" alt=""></div></li>--}}
{{--                                                <li data-target="#carousel-thumb" data-slide-to="4"><div class="image img-circle"><img src="images/resource/author-5.jpg" alt=""></div></li>--}}
{{--                                                <li data-target="#carousel-thumb" data-slide-to="5"><div class="image img-circle"><img src="images/resource/author-6.jpg" alt=""></div></li>--}}
{{--                                                <li data-target="#carousel-thumb" data-slide-to="6"><div class="image img-circle"><img src="images/resource/author-7.jpg" alt=""></div></li>--}}
{{--                                            </ol>--}}
{{--                                        </div>--}}

{{--                                        <div class="carousel-column col-lg-6 col-md-12 col-sm-12">--}}
{{--                                            <div class="inner-column">--}}
{{--                                                <!-- Slides -->--}}
{{--                                                <div class="carousel-inner" role="listbox">--}}

{{--                                                    <div class="carousel-item active">--}}
{{--                                                        <div class="testimonial-block">--}}
{{--                                                            <div class="inner-box">--}}
{{--                                                                <div class="quote-icon"><img src="images/icons/quote-icon.png" alt="" /></div>--}}
{{--                                                                <div class="slide-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolor magn aliq erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt labore et dolore magn aliq erat.</div>--}}
{{--                                                                <div class="slide-info">--}}
{{--                                                                    <div class="rating">--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <h4 class="author-title">Emmy Jackson</h4>--}}
{{--                                                                    <div class="designation">Software Development</div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="carousel-item">--}}
{{--                                                        <div class="testimonial-block">--}}
{{--                                                            <div class="inner-box">--}}
{{--                                                                <div class="quote-icon"><img src="images/icons/quote-icon.png" alt="" /></div>--}}
{{--                                                                <div class="slide-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolor magn aliq erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt labore et dolore magn aliq erat.</div>--}}
{{--                                                                <div class="slide-info">--}}
{{--                                                                    <div class="rating">--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <h4 class="author-title">Emmy Jackson</h4>--}}
{{--                                                                    <div class="designation">Software Development</div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="carousel-item">--}}
{{--                                                        <div class="testimonial-block">--}}
{{--                                                            <div class="inner-box">--}}
{{--                                                                <div class="quote-icon"><img src="images/icons/quote-icon.png" alt="" /></div>--}}
{{--                                                                <div class="slide-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolor magn aliq erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt labore et dolore magn aliq erat.</div>--}}
{{--                                                                <div class="slide-info">--}}
{{--                                                                    <div class="rating">--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <h4 class="author-title">Emmy Jackson</h4>--}}
{{--                                                                    <div class="designation">Software Development</div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="carousel-item">--}}
{{--                                                        <div class="testimonial-block">--}}
{{--                                                            <div class="inner-box">--}}
{{--                                                                <div class="quote-icon"><img src="images/icons/quote-icon.png" alt="" /></div>--}}
{{--                                                                <div class="slide-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolor magn aliq erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt labore et dolore magn aliq erat.</div>--}}
{{--                                                                <div class="slide-info">--}}
{{--                                                                    <div class="rating">--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <h4 class="author-title">Emmy Jackson</h4>--}}
{{--                                                                    <div class="designation">Software Development</div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="carousel-item">--}}
{{--                                                        <div class="testimonial-block">--}}
{{--                                                            <div class="inner-box">--}}
{{--                                                                <div class="quote-icon"><img src="images/icons/quote-icon.png" alt="" /></div>--}}
{{--                                                                <div class="slide-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolor magn aliq erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt labore et dolore magn aliq erat.</div>--}}
{{--                                                                <div class="slide-info">--}}
{{--                                                                    <div class="rating">--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <h4 class="author-title">Emmy Jackson</h4>--}}
{{--                                                                    <div class="designation">Software Development</div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="carousel-item">--}}
{{--                                                        <div class="testimonial-block">--}}
{{--                                                            <div class="inner-box">--}}
{{--                                                                <div class="quote-icon"><img src="images/icons/quote-icon.png" alt="" /></div>--}}
{{--                                                                <div class="slide-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolor magn aliq erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt labore et dolore magn aliq erat.</div>--}}
{{--                                                                <div class="slide-info">--}}
{{--                                                                    <div class="rating">--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <h4 class="author-title">Emmy Jackson</h4>--}}
{{--                                                                    <div class="designation">Software Development</div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="carousel-item">--}}
{{--                                                        <div class="testimonial-block">--}}
{{--                                                            <div class="inner-box">--}}
{{--                                                                <div class="quote-icon"><img src="images/icons/quote-icon.png" alt="" /></div>--}}
{{--                                                                <div class="slide-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolor magn aliq erat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt labore et dolore magn aliq erat.</div>--}}
{{--                                                                <div class="slide-info">--}}
{{--                                                                    <div class="rating">--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                        <span class="fa fa-star"></span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <h4 class="author-title">Emmy Jackson</h4>--}}
{{--                                                                    <div class="designation">Software Development</div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                                <!-- Slides -->--}}

{{--                                                <!-- Controls -->--}}
{{--                                                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">--}}
{{--                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                                    <span class="sr-only">Previous</span>--}}
{{--                                                </a>--}}
{{--                                                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">--}}
{{--                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                                    <span class="sr-only">Next</span>--}}
{{--                                                </a>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Section Title -->--}}
{{--                        <div class="section-title">--}}
{{--                            Testimonial--}}
{{--                        </div>--}}

{{--                        <!-- Section Number -->--}}
{{--                        <div class="section-number">--}}
{{--                            07<sub>/09</sub>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- Section 07 -->

            <!-- Section 08 -->
            <div class="section pp-scrollable slide slide-clients gradient-color">
                <div class="slide-container">
                    <div class="slide-inner-container">

                        <div class="news-section">
                            <div class="auto-container">
                                <!-- Sec Title -->
                                <div class="sec-title centered">
                                    <h2>News & Articles</h2>
                                    <div class="text">This is upcoming articles.Come back soon for more</div>
                                </div>
                                <!-- Inner Container -->
                                <div class="inner-container">
                                    <div class="row clearfix">

                                        <!-- News Block -->
                                        <div class="news-block col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box mask-skew">
                                                <div class="mask wow slideInLeft" data-wow-offset="250" data-wow-duration="1.2s" data-wow-delay=".3s">
                                                    <div class="inside"></div>
                                                </div>
                                                <div class="image">
                                                    <a href="#"><img src="img/2.jpg" alt="" /></a>
                                                    <div class="post-date">25 July, 2023</div>
                                                </div>
                                                <div class="lower-content">
                                                    <!-- Upper Box -->
                                                    <div class="upper-box">
                                                        <div class="box-inner">
                                                            <div class="author-image">
                                                                <img src="img/1.jpg" alt="" />
                                                            </div>
                                                            <div class="author-name">Wilson Kibet</div>
                                                            <ul class="post-meta">
                                                                <li><span class="icon flaticon-comment"></span>Comments  03</li>
                                                                <li><span class="icon flaticon-heart"></span>Like 04</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a href="#">Mpesa Intergration Guide.</a></h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- News Block -->
                                        <div class="news-block col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box mask-skew">
                                                <div class="mask wow slideInLeft" data-wow-offset="250" data-wow-duration="1.2s" data-wow-delay=".3s">
                                                    <div class="inside"></div>
                                                </div>
                                                <div class="image">
                                                    <a href="#"><img src="img/3.jpg" alt="" /></a>
                                                    <div class="post-date">15 July, 2023</div>
                                                </div>
                                                <div class="lower-content">
                                                    <!-- Upper Box -->
                                                    <div class="upper-box">
                                                        <div class="box-inner">
                                                            <div class="author-image">
                                                                <img src="img/1.jpg">
                                                            <div class="author-name">Wilson Kibet</div>
                                                            <ul class="post-meta">
                                                                <li><span class="icon flaticon-comment"></span>Comments  03</li>
                                                                <li><span class="icon flaticon-heart"></span>Like 04</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a href="#">Devops Tools.</a></h4>
                                                </div>
                                            </div>
                                            </div></div>

                                        <!-- News Block -->
                                        <div class="news-block col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box mask-skew">
                                                <div class="mask wow slideInLeft" data-wow-offset="250" data-wow-duration="1.2s" data-wow-delay=".3s">
                                                    <div class="inside"></div>
                                                </div>
                                                <div class="image">
                                                    <a href="#"><img src="img/4.jpg" alt="" /></a>
                                                    <div class="post-date">05 August, 2023</div>
                                                </div>
                                                <div class="lower-content">
                                                    <!-- Upper Box -->
                                                    <div class="upper-box">
                                                        <div class="box-inner">
                                                            <div class="author-image">
                                                                <img src="img/1.jpg" alt="" />
                                                            </div>
                                                            <div class="author-name">Wilson Kibet</div>
                                                            <ul class="post-meta">
                                                                <li><span class="icon flaticon-comment"></span>Comments  03</li>
                                                                <li><span class="icon flaticon-heart"></span>Like 04</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a href="#">Hosting in Nginx Server step by step guide</a></h4>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- More Posts -->
                                    <div class="more-posts text-center">
                                        <a href="#" class="theme-btn btn-style-one"><span class="txt">View all posts</span></a>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- Section Title -->
                        <div class="section-title">
                            Blog
                        </div>

                        <!-- Section Number -->
                        <div class="section-number">
                            08<sub>/09</sub>
                        </div>

                    </div>
                </div>
                </div>
            <!-- End Section 08 -->

            <!-- Section 09 -->
            <div class="section pp-scrollable slide slide-contacts a-slide-typed" data-name="contacts">
                <div class="slide-container">
                    <div class="slide-inner-container">

                        <div class="contact-section">
                            <!-- Image Layer -->
                            <div class="image-layer" style="background-image:url(images/background/2.jpg)"></div>
                            <div class="auto-container">

                                <!-- Map Contact Section -->
                                <section class="map-contact-section">
                                    <div class="outer-container">
                                        <!-- Map Boxed -->
                                        <div class="map-boxed">
                                            <!-- Map Outer -->

                                        </div>
                                    </div>
                                </section>
                                <!-- End Map Contact Section -->

                                <div class="inner-container">
                                    <div class="row clearfix">

                                        <!-- Form Column -->
                                        <div class="form-column col-lg-6 col-md-12 col-sm-12">
                                            <div class="inner-column">

                                                <!-- Contact Form -->
                                                <div class="contact-form">
                                                    <form method="post" action="#" id="contact-form">
                                                        <div class="row clearfix">

                                                            <!-- Form Group -->
                                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                <input type="text" name="username" placeholder="Your Name" required>
                                                            </div>

                                                            <!-- Form Group -->
                                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                <input type="email" name="email" placeholder="Email address" required>
                                                            </div>

                                                            <!-- Form Group -->
                                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                <input type="text" name="phone" placeholder="Phone" required>
                                                            </div>

                                                            <!-- Form Group -->
                                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                <input type="text" name="subject" placeholder="Subject" required>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                                <textarea name="message" placeholder="Project details(optional)..."></textarea>
                                                            </div>

                                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                                <button type="submit" class="theme-btn btn-style-one"><span class="txt">send a request</span></button>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- End Contact Form -->

                                            </div>
                                        </div>

                                        <!-- Info Column -->
                                        <div class="info-column col-lg-6 col-md-12 col-sm-12">
                                            <div class="inner-column">
                                                <h2>Get in touch</h2>
                                                <div class="text">Let's build something together! If you have <br> any other questions,  you can leave here.</div>
                                                <div class="location">
                                                    Nairobi, Kenya,
                                                   <br>   Kajiado, Ongata Rongai,</div>
                                                <a href="mailto:  dev.demalee@gmail.com" class="email">
                                                    dev.demalee@gmail.com
                                                 </a>
                                                <a href="tel:+254706244585" class="number">

                                                    +254706244585/
                                                    +254737728662</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Footer Bottom -->
                                <div class="footer-bottom">
                                    <div class="row clearfix">

                                        <!-- Nav Column -->
                                        <div class="nav-column col-lg-6 col-md-12 col-sm-12">
                                            <ul class="footer-nav">
                                                <li><a href="https://www.linkedin.com/in/demalee-kipkoech-kibet-670387157/" target="_blank" title="https://www.linkedin.com/in/demalee-kipkoech-kibet-670387157/">LinkedIn</a></li>
                                                <li><a href="https://github.com/demalee" target="_blank" title="https://github.com/demalee">Github</a></li>
                                            </ul>
                                        </div>

                                        <!-- Copyright Column -->
                                        <div class="copyright-column col-lg-6 col-md-12 col-sm-12">
                                            <div class="copyright">&copy;  Wilson Kibet. <?php echo date('D, d M Y')?> </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Section Title -->
                        <div class="section-title">
                            Contact
                        </div>

                        <!-- Section Number -->
                        <div class="section-number">
                            09<sub>/09</sub>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

