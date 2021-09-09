<!DOCTYPE html>
<html lang="uk">

<head>
    <title>Worker List</title>
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>surname</th>
            <th>age</th>
            <th>salary</th>
            <th>delete</th>
            <th>change</th>
        </tr>
        <?php
        $host = 'localhost';
        $user = 'root';
        $password = 'toor';
        $db_name = 'phpdb';
        $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

        //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
        mysqli_query($link, "SET NAMES 'utf8'");

        // Сохранение нового (до получения!):
        if (!empty($_POST)) {
            if (isset($_POST['WorkerID'])) {
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $age = $_POST['age'];
                $salary = $_POST['salary'];
                $query = "UPDATE workers SET name='$name', surname='$surname', age='$age', salary='$salary' WHERE WorkerID=" . $_POST['WorkerID'];
            } else {
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $age = $_POST['age'];
                $salary = $_POST['salary'];

                $query = "INSERT INTO workers SET name='$name', surname='$surname', age='$age', salary='$salary'";
            }
            mysqli_query($link, $query) or die(mysqli_error($link));
        }

        if (isset($_GET['del'])) {
            $del = $_GET['del'];
            $query = "DELETE FROM workers WHERE WorkerID=$del";
            mysqli_query($link, $query) or die(mysqli_error($link));
        }

        // Получение всех работников:
        $query = "SELECT * FROM workers";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

        $result = '';
        foreach ($data as $elem) {
            $result .= '<tr>';

            $result .= '<td>' . $elem['WorkerID'] . '</td>';
            $result .= '<td>' . $elem['Name'] . '</td>';
            $result .= '<td>' . $elem['Surname'] . '</td>';
            $result .= '<td>' . $elem['Age'] . '</td>';
            $result .= '<td>' . $elem['Salary'] . '</td>';
            $result .= '<td><a href="?del=' . $elem['WorkerID'] . '"><button>Удалить</button></a></td>';
            $result .= '<td><a href="http://localhost/change.php?id=' . $elem['WorkerID'] . '"><button>Изменить</button></a></td>';
            $result .= '</tr>';
        }
        echo $result;
        ?>
    </table>
    <P><a href="http://localhost/add.php"><button>Add new Worker</button></a></P>
</body>

</html>