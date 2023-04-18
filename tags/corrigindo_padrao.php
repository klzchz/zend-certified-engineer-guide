<?php
$alert = '<script>

alert("Eu sou um alert!");

</script>';
//resolvendo a parte de xss
$alert = filter_var($alert,FILTER_SANITIZE_SPECIAL_CHARS );

echo ($alert);