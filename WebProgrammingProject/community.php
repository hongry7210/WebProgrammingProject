    <?php
    $id = $_POST['user'];
    $pass = $_POST['pass'];
    echo $id, $pass;

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
    if ($row = mysqli_fetch_assoc($result)) {
        echo 'Login successful!';
    } else {
        echo 'Invalid credentials.';
    }
    ?>

    <!--code for afterloginpage-->