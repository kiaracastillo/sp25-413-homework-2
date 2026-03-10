<?php
/* footer.php */
?>

<footer class="footer">

<div class="footer-top">

        <div class="f-logo">

            <h3><?php bloginfo('name'); ?></h3>

            <p>Local reporting.</p>

        </div>

        <div class="f-links">
            <ul>
                <li><a href="#">Latest News</a></li>

         <li><a href="#">Metro Politics</a></li>

                <li><a href="#">Business</a></li>
            </ul>
        </div>

        <div class="f-links">
            <ul>
         <li><a href="#">Culture</a></li>
                <li><a href="#">Opinion</a></li>

                <li><a href="#">Editorials</a></li>
            </ul>
        </div>

        <div class="f-links">

            <ul>

                <li><a href="#">About The Metro Report</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Advertise</a></li>
            </ul>
        </div>

        <div class="f-links">
            <ul>

            <li><a href="#">Newsletter</a> </li>
                <li><a href="#">Archives</a></li>

                <li><a href="#">Support Local News</a></li>
            </ul>
        </div>

    </div>

    <hr class="f-line">

    <div class="footer-bottom">

        <div class="social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>

            <a href="#"><i class="fab fa-x-twitter"></i></a>
 <a href="#"><i class="fas fa-rss"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>

        </div>

        <p>
            © <?php echo date('Y'); ?>
            <?php bloginfo('name'); ?>. All rights reserved.
        </p>

    </div>

</footer>

<?php wp_footer(); ?>

    </body>

</html>