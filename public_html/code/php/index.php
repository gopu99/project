
<?php
$GLOBALS["page-title"] = "Dr.Lobo Musical Academy";
$GLOBALS["active-nav"] = "home";
?>

<?php include_once('./php/head.php'); ?>
<?php include_once('./php/header-and-nav.php'); ?>

        <!--main section of website-->
        <main>
            <section id="section1">
                <div class="main"> <!-- section for headline, search bar and images-->
                    <div> <!-- headline and search bar section-->
                        <h1>"Empowering Musical Excellence, <br> Note at a Time"</h1>
                        <div class="search"> <!-- search section-->
                            <div id="text">
                                <p>Search</p>
                            </div>
                            <div id="searchicon">
                                <img src="../assests/Search.png" alt="" height="60">
                            </div>
                        </div>
                    </div>
                    <ul class="fourimages"> <!-- images-->
                        <li>
                            <figure>
                                <div class="images"><!-- image container-->
                                    <img src="../assests/violin.png" alt="" height="515">
                                </div>
                                <figcaption>
                                    <div class="figwrap"><!-- wrapping figure caption-->
                                        <p>Violin</p>
                                        <img src="../assests/arrow.png" alt="" height="16">
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <div class="images"><!-- image container-->
                                    <img src="../assests/piano.png" alt="" height="515">
                                </div>
                                <figcaption>
                                    <div class="figwrap"><!-- wrapping figure caption-->
                                        <p>Piano</p>
                                        <img src="../assests/arrow.png" alt="" height="16">
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <div class="images"><!-- image container-->
                                    <img src="../assests/guitar.png" alt="" height="515">
                                </div>
                                <figcaption>
                                    <div class="figwrap"><!-- wrapping figure caption-->
                                        <p>Guitar</p>
                                        <img src="../assests/arrow.png" alt="" height="16">
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <div class="images"><!-- image container-->
                                    <img src="../assests/mic.png" alt="" height="515">
                                </div>
                                <figcaption>
                                    <div class="figwrap"><!-- wrapping figure caption-->
                                        <p>Vocal</p>
                                        <img src="../assests/arrow.png" alt="" height="16">
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div><!-- lines-->
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <div class="button"><!-- view course page button-->
                    <a href="course.php"<?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>
                        <p>View All Courses</p>
                        <img src="../assests/arrow.png" alt="" height="20">
                    </a>
                </div>
            </section>
            <section id="who-are-we">
                <section>
                    <h2>Who are we</h2>
                    <h3>"Empowering Musical Excellence,<br>
                        One Note at a Time"</h3>
                    <p>
                        Dr. L. H. Lobo was the Principal of Christian medical
                        collage, Ludhiyana from 1971 to 1982.Besides being a
                        noted orthopaedic consultant and Professor. He was 
                        very much interested in Western Music. He has got a 
                        tremendous collection of Beethoven, Vivaldi, Mozart 
                        and Operas. His mother was a good pianist and 
                        Brother and sister were interested in instrumental 
                        and western vocal music. He used to enjoy listening 
                        especially to Beethoven Symphony No.9 More over he 
                        was a good listener to  western classics and always a 
                        great encouragement to Musicians like us.
                    </p>
                    <div class="explore">
                        <a href="aboutus"<?php echo $GLOBALS["active-nav"]=="aboutus"? 'class="active"':'';?>>
                            <p>Explore more </p>
                            <img src="../assests/linearrow.png" alt="" height="14">
                        </a>
                    </div>
                </section>
                <img id="bird" src="../assests/bird.png" alt="" height="250">
            </section>
            <section id="we-provide">
                <div id="we">
                    <div>
                        <h2>
                            We add value to<br>
                            our student’s <br>
                            journey
                        </h2>
                        <div class="button">
                            <p>Book a FREE Demo now</p>
                            <img src="../assests/arrowgreen.png" alt="" height="14">
                        </div>
                    </div>
                    <ul><!-- grid-->
                        <li>
                            <img src="../assests/class.png" alt="" height="30">
                            <h3>Online and Inperson Classes</h3>
                            <p>
                                embracing a diverse world of 
                                musical expression. 
                            </p>
                        </li>
                        <li>
                            <img src="../assests/registration.png" alt="" height="30">
                            <h3>Easy Registration</h3>
                            <p>
                                embracing a diverse world of 
                                musical expression. 
                            </p>
                        </li>
                        <li>
                            <img src="../assests/trainer.png" alt="" height="30">
                            <h3>Expert Trainers</h3>
                            <p>
                                embracing a diverse world of 
                                musical expression. 
                            </p>
                        </li>
                        <li>
                            <img src="../assests/learn.png" alt="" height="30">
                            <h3>Easy to learn</h3>
                            <p>
                                embracing a diverse world of 
                                musical expression. 
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="onlinecourses">
                <h2>Online courses</h2>
                <ul>
                    <li>
                        <h3>Violin</h3>
                        <div></div><!-- underline -->
                    </li>
                    <li>
                        <h3>Guitar</h3>
                        <div></div><!-- underline -->
                    </li>
                    <li>
                        <h3>Piano</h3>
                        <div></div><!-- underline -->
                    </li>
                    <li>
                        <h3>Vocal</h3>
                        <div></div><!-- underline -->
                    </li>
                </ul>
                <section>
                    <h4>Western Violin <br>Classes</h4>
                    <div class="violin">
                        <p>
                            Discover the soul-stirring world of music through our 
                            violin classes, where expert instruction meets timeless 
                            melodies, cultivating both technical prowess and 
                            emotional resonance. Join us to nurture your talent 
                            and embark on a harmonious journey of violin mastery.
                        </p>
                        <div class="button"><!-- button -->
                            <p>View Course</p>
                            <img src="../assests/arrow.png" alt="" height="14">
                        </div>
                    </div>
                </section>
            </section>
            <section id="review">
                <h2>Parent’s Review</h2>
                <p>
                    My daughter (Sarada Jayaraman, 
                    Grade 6 Keyboard student) is very 
                    happy with the keyboard lessons! 
                    The teacher is very friendly, very 
                    kind and he does his job very 
                    professionally! I will recommend 
                    them to any of my friends who 
                    want their child to learn from the 
                    best!<br>
                    <span>- Sheeba Jayaraman (mother)</span>
                </p>
                <div class="arrow">
                    <img src="../assests/leftarrow.png" alt="" height="16">
                    <img src="../assests/arrowgreen.png" alt="" height="16">
                </div>
            </section>
            <section id="faq">
                <h2>FAQ’s</h2>
                <ul>
                    <li class="question">
                        <p>What instruments can I learn at your academy?</p>
                        <div></div>
                        <p>At our academy, you can learn violin, guitar, piano, and vocal skills, 
                            embracing a diverse world of musical expression. </p>
                    </li>
                    <li class="question">
                        <p>What instruments can I learn at your academy?</p>
                        <div></div>
                        <p>At our academy, you can learn violin, guitar, piano, and vocal skills, 
                            embracing a diverse world of musical expression. </p>
                    </li>
                    <li class="question">
                        <p>What instruments can I learn at your academy?</p>
                        <div></div>
                        <p>At our academy, you can learn violin, guitar, piano, and vocal skills, 
                            embracing a diverse world of musical expression. </p>
                    </li>
                    <li class="question">
                        <p>What instruments can I learn at your academy?</p>
                        <div></div>
                        <p>At our academy, you can learn violin, guitar, piano, and vocal skills, 
                            embracing a diverse world of musical expression. </p>
                    </li>
                </ul>
                <div id="vm">
                    <a href="faq.php"<?php echo $GLOBALS["active-nav"]=="faq"? 'class="active"':'';?>>
                        <p>View more</p>
                        <img src="../assests/linearrow.png" alt="" height="16">
                    </a>
                </div>
            </section>
        </main>

        <?php include_once('./php/footer.php'); ?>      