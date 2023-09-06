<body>

<!--Header with navigation bar-->
<header>
    <img src="../assests/headerlogo.png" alt="" width="100"><!--logo-->
    <nav><!--header navigation bar-->
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
    </nav>
</header>
<!--End of header-->