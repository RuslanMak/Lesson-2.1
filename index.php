<?php
$json = file_get_contents(__DIR__ . '/contacts.json');
$data = json_decode($json, true);

?>

<html>
<head>
    <title>Contacts</title>
    <style>
        table, td {
            padding: 5px 10px;
            border: 1px solid #000000;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>Контакты</h1>

    <table>
        <thead>
            <tr>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Адрес</td>
                <td>Телефон</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?php echo $item['firstName']; ?></td>
                <td><?php echo $item['lastName']; ?></td>
                <td><?php echo $item['address']; ?></td>
                <td><?php echo $item['phoneNumber']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>


