<?
include('config.php');
if (!$user->signed) {
    header('Location: login.php');
} else {
    function renderForm($content_id, $content_name, $content_text, $error)
    {
        ?>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
        <html>
        <head><? include("head.php") ?></head>
        <body>
        <?php
        // if there are any errors, display them
        if ($error != '') {
            echo '<div style="padding:4px; border:1px solid red; color:red;">' . $error . '</div>';
        }
        ?>
        <div class="container">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $content_id; ?>"/>
				<table class="table table-striped">
				<tr>
                    <td>
					<strong>Content id:</strong>
					</td>
					<td><?php echo $content_id; ?>
					</td>
				</tr>
                <tr>
				    <td>
					<strong>Content name:</strong>
					</td>
					<td>
					<?php echo $content_name; ?>
					</td>
				</tr>	
				<tr>
                    <td>
					<strong>Content text: *</strong>
				    </td>
					<td>
					<textarea name="content_text"><?php echo $content_text; ?></textarea>
					</td>
				</tr>
				</table>
				<p>* Required</p>
               <input type="submit" name="submit" value="Submit" class="btn btn-large btn-success">
            </form>
        </div>
        </body>
        <? include("../include/bootstrap.php") ?>
        </html>
    <?php
    }

// check if the form has been submitted. If it has, process the form and save it to the database
    if (isset($_POST['submit'])) {
        // confirm that the 'id' value is a valid integer before getting the form data
        if (is_numeric($_POST['id'])) {
            // get form data, making sure it is valid
            $id = $_POST['id'];
            $content_name = mysql_real_escape_string(htmlspecialchars($_POST['content_name']));
            $content_text = mysql_real_escape_string(htmlspecialchars($_POST['content_text']));

            // check that firstname/lastname fields are both filled in
            if ($content_text == '') {
                // generate error message
                $error = 'ERROR: Please fill in all required fields!';

                //error, display form
                renderForm($id, $content_name, $content_text, $error);
            } else {
                // save the data to the database
                mysql_query("UPDATE content SET content_text='$content_text' WHERE content_id='$id'")
                or die(mysql_error());

                // once saved, redirect back to the view page
                header("Location: admin.php");
            }
        } else {
            // if the 'id' isn't valid, display an error
            echo 'Error!';
        }
    } else // if the form hasn't been submitted, get the data from the db and display the form
    {

        // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
        if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
            // query db
            $id = $_GET['id'];
            $result = mysql_query("SELECT * FROM content WHERE content_id=$id")
            or die(mysql_error());
            $row = mysql_fetch_array($result);

            // check that the 'id' matches up with a row in the databse
            if ($row) {

                // get data from db
                $content_name = $row['content_name'];
                $content_text = $row['content_text'];

                // show form
                renderForm($id, $content_name, $content_text, '');
            } else // if no match, display result
            {
                echo "No results!";
            }
        } else // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
        {
            echo 'Error!';
        }
    }
}?>