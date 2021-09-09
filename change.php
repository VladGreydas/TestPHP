<!DOCTYPE html>
<html>

<head>
    <title>Change worker data</title>
</head>

<body>
    <?php
    $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
    $user = 'root'; //имя пользователя, по умолчанию это root
    $password = 'toor'; //пароль, по умолчанию пустой
    $db_name = 'phpdb'; //имя базы данных
    $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

    //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    mysqli_query($link, "SET NAMES 'utf8'");

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM workers WHERE WorkerID=$id";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        $name = $data[0]['Name'];
        $surname = $data[0]['Surname'];
        $age = $data[0]['Age'];
        $salary = $data[0]['Salary'];
        $result = '<p><strong><em>Change worker data</em></strong></p>';
        $result .= '<form action="test.php" method="POST" autocomplete="off">';
        $result .= '<input type="hidden" name="WorkerID" value="' . $id . '">';
        $result .= '<input type="text" name="name" value="' . $name . '">';
        $result .= '<input type="text" name="surname" value="' . $surname . '">';
        $result .= '<input type="text" name="age" value="' . $age . '">';
        $result .= '<input type="text" name="salary" value="' . $salary . '">';
        $result .= '<input type="submit" value="OK">';
        $result .= '</form>';
        echo $result;
    }
    ?>
</body>

</html>