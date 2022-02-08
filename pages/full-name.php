<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="POST">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" id=""></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>ID</th>
                <td><input type="number" name="id" id=""></td>
            </tr>
            <tr>
                <th>Department</th>
                <td><input type="text" name="department" id=""></td>
            </tr>
            <tr>
                <td></td>
                <th>
                    <input type="submit" name="btn" value="submit">
                </th>
            </tr>
            <tr>
                <th>Full Details</th>
                <td><input type="text" name="full-details" id="" value="<?php echo isset($result) ? $result : ' '?>"></td>
            </tr>
        </tbody>
    </table>
</form>
</body>
</html>