<html>

<head>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <div class="container-tm">
        <?php
        require_once "./config/dbconnectivity.php";
        require_once "./tm_queries.php";

        if ($conn->connect_error) die($conn->connect_error);

        else {
            session_start();
            $id = $_POST['id'];
            $alias = $_POST['alias'];
            $pin = $_POST['pin'];
            date_default_timezone_set("Asia/Kolkata");
            $time = date("h:i:s d-m-Y");
            $_SESSION['time'] = $time;
            $login = $_SESSION['time'];
            $result = new insert($id, $alias, $pin, $login);
            if ($result) echo "<h1 id='user'>Welcome <span>$alias</span></h1>";
            else echo "<script>alert('Something went wrong')</script>";
        }
        ?>
    </div>
    <div class="box">
        <div class="cnt-box">
            <input type="button" value="logout" class="tm_items" id="button" onclick=location.href='./index.html'>
            <input type="text" name="title" class="tm_items" id="title" placeholder="Title" required>
            <input type="text" name="description" class="tm_items" id="description" placeholder="description">
            <textarea name="value" id="value" cols="30" rows="10" class="tm_items content" placeholder="something..." required></textarea>
            <input type="button" value="Save" id="button">
        </div>
    </div>
</body>

</html>