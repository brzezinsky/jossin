<?
include('config.php');
if (!$user->signed) {
    header('Location: login.php');
} else {
    ?>

    <html>
    <head>
        <?include ("head.php")?>
    </head>
    <body>

    <?php

    // get results from database
    $result = mysql_query("SELECT * FROM content")
    or die(mysql_error());
    echo "<div class='container'>";
    echo "<table class='table table-striped'>";
    echo "<tr> <th>Content id</th> <th>Content name</th> <th>Content text</th> <th></th></tr>";

    // loop through results of database query, displaying them in the table
    while ($row = mysql_fetch_array($result)) {

        echo "<tr>";
        echo '<td class=\'col-sm-1\'>' . $row['content_id'] . '</td>';
        echo '<td>' . $row['content_name'] . '</td>';
        echo '<td>' . $row['content_text'] . '</td>';
        echo '<td><a class="btn btn-primary" href="edit.php?id=' . $row['content_id'] . '">Edit</a></td>';
        echo "</tr>";
    }

    // close table>
    echo "</table>";
     echo "</div>";
    ?>

    </body>
    </html>
<? } ?>