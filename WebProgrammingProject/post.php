<?php
session_start();
$postid = $_GET['postnum'];
$posttitle = $_GET['posttitle'];
$postconetent = $_GET['postcontent'];
$memberid = $_GET['memberid'];

echo $posttitle;
echo '<br/>';
echo $postconetent;
echo '<br/>';

$db = mysqli_connect('localhost', 'root', '') or
die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db, 'memberinfodb') or die(mysqli_error($db));

$query = 'SELECT commentcontent, commentmembername, postid
FROM comment
WHERE postid='.$postid.'
';  

$result=mysqli_query($db,$query) or die(mysqli_error($db));

while ($row = mysqli_fetch_array($result)) {
    extract($row);
    echo $commentcontent . ' - ' .$commentmembername . '<br/>';
    }
?>

<html>
    <head>
        
    </head>
    <body>
        <div style="justify-content: center;">
            <form method="post" action="./database/commentadd.php">
                <p>Enter comment
                <input type="text" name="comment" />
                </p>
                <input type="hidden" name="commentmembername" value="<?php echo $memberid; ?>" />
                <input type="hidden" name="postid" value="<?php echo $postid; ?>" />
                <input type="hidden" name="posttitle" value="<?php echo $posttitle; ?>" />
                <input type="hidden" name="postcontent" value="<?php echo $postconetent; ?>" />
                <input type="hidden" name="memberid" value="<?php echo $memberid; ?>" />
                <button type="submit">submit</button>
            </form>
        </div>
    </body>
</html> 