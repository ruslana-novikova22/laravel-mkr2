<html>
<head>
    <title>Інформація про виробників</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Код</th>
        <td>{{ $manufacturer->id }}</td>
    </tr>
    <tr>
        <th>Бренд</th>
        <td>{{ $manufacturer->brand }}</td>
    </tr>
    <tr>
        <th>Країна</th>
        <td>{{ $manufacturer->country }}</td>
    </tr>
    <tr>
        <th>Контактний номер</th>
        <td>{{ $manufacturer->contact_phone }}</td>
    </tr>
    <tr>
        <th>Пошта</th>
        <td>{{ $manufacturer->email }}</td>
    </tr>
</table>

</body>
</html>
