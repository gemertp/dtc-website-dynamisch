<?php
    echo "<!DOCTYPE html>";

    echo "<html>";
    
    echo "<head>";
    echo "  <title>Serverstatus</title>";
    echo "  <link type=\"stylesheet\" href=\"/serverstatus.css\">";
    echo "</head>";

    echo "<body>";

    echo "<h1>Server status</h1>";
    echo "Git versie";
    echo "<hr>";

    echo "<h2>Servertijd</h2>";
    echo "<p>";
    $servertijd = shell_exec('date');
    echo "$servertijd";
    echo "</p>";
    
    echo "<h2>Uptime</h2>";
    echo "<p>";
    $uptime = shell_exec('/usr/bin/uptime');
    echo "$uptime";
    echo "</p>";
    
    echo "<h2>Running processes</h2>";
    echo "<p>";
    $runproc = shell_exec('/usr/bin/ps -ef | /usr/bin/wc -l');
    echo "$runproc";
    echo "</p>";
?>
