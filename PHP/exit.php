<?php
    setcookie('case', $user['full_name'], time() - 3600, "/"  );
    header('Location: /');
?>