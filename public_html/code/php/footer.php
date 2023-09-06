<footer><!-- footer -->
            <div>
                <img src="../assests/headerlogo.png" alt="" height="50">
                <div id="social">
                    <p>Follow us</p>
                    <img src="../assests/Facebook.png" alt="" height="14">
                    <img src="../assests/Youtube.png" alt="" height="14">
                </div>
            </div>
            <section>
                <h5>Quick links</h5>
                <ul>
                    <li>
                        <a href="index.php" <?php echo $GLOBALS["active-nav"]=="home"? 'class="active"':'';?>>Home</a>
                    </li>
                    <li>
                        <a href="course.php"<?php echo $GLOBALS["active-nav"]=="course"? 'class="active"':'';?>>Courses</a>
                    </li>
                    <li>
                        <a href="faq.php"<?php echo $GLOBALS["active-nav"]=="faq"? 'class="active"':'';?>>FAQ</a>
                    </li>
                    <li>
                        <a href="aboutus"<?php echo $GLOBALS["active-nav"]=="aboutus"? 'class="active"':'';?>>About Us</a>
                    </li>
                </ul>
            </section>
            <section>
                <h5>Courses</h5>
                <ul>
                    <li>Violin</li>
                    <li>Guitar</li>
                    <li>Piano</li>
                    <li>Vocal</li>
                </ul>
            </section>
            <section>
                <h5>For inquiries</h5>
                <h6>Address</h6>
                <p>
                    Ayisha commercial complex, 
                    Perinthalmanna, Perinthalmanna, 
                    Malappuram - 679322
                </p>
                <h6>Email</h6>
                <p>drloboacademy@gmail.com</p>
            </section>
        </footer>
        <!-- end of footer -->

    </body>
</html>