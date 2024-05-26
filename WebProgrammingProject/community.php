    <?php
    session_start();
    $id = isset($_POST['user']) ? $_POST['user'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
    if(empty($id)||empty($pass)) {
        echo 'please enter id and password to access this page';
    }
    else {
    $db = mysqli_connect('localhost', 'root', '') or
    die ('Unable to connect. Check your connection parameters.');
    
    mysqli_select_db($db, 'memberinfodb') or die(mysqli_error($db));
    
    $query = "SELECT 
    memberid, memberpassword
    FROM
    memberinfo
    WHERE
    memberid = '$id' AND memberpassword = '$pass'";
    
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    $ids = urlencode($id);
    if ($row = mysqli_fetch_assoc($result)) {
        echo '<a href="./communitysite.php?id=' . $ids . '">Go to Community site!</a>';
    } else {
        echo 'Invalid credentials.';
    }
}
    ?>
    <!--code for afterloginpage-->