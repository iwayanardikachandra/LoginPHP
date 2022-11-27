<?php
    session_start();

    echo "<body>
        <script>
            alert('Logout Success!!!')
            window.location.replace('index.php')
        </script>
    </body>";

    session_destroy();
?>