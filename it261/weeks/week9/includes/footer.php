<footer>
        <ul>
            <li>Copyright &copy;
                <?php 
                $date_current = date('Y');
                $date_created = 2017;
                if($date_current == $date_created){
                    echo $date_created;
                } else{
                    echo ''.$date_created.' - '.$date_current.'  ';
                }
                ?>
            </li>
            <li>All Rights Reserved</li>
            <li><a href="http://validator.w3.org/check?uri=referer"
                onclick="this.href='http://validator.w3.org/check?uri=' + 
            document.URL"><img
                src="http://www.w3.org/Icons/valid-xhtml10"
                alt="Valid XHTML 1.0!" height="31" width="88" /></a></li>
            <li><a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" title="Validate as CSS3">CSS3</a></li>
        </ul>
</footer>

</body>
</html>