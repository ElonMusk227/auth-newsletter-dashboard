<?php

?>
<body>
    <footer class="bg bg-dark justify-content-center justify-center text-center">
        <?php
            require_once 'functions/compteur.php';
            add_view();
            $vues = nombre_vue();
            if($vues <= 1): $e = "e"; else: $e = "eurs"; endif;       
            echo "Il y a " . $vues . " visit".$e . " sur la page" ;
        ?>
        <div> Copyright (C) <a href="linkedin.com/assogba-isaac">Assogba Isaac</a> 2024. All rights resesrved</div>
    </footer>
</body>
</html>