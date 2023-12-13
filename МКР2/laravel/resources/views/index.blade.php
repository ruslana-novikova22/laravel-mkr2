<html>
<head>
    <title>Список виробників</title>
</head>
<body>

<h1>Сторінка товарів</h1>

<a href="{{ route('products.create')}}">Додати</a> <br>

<table border="1">
    <thead>
    <tr>
        <th>Код</th>
        <th>Назва</th>
        <th>Виробник</th>
        <th>Ціна</th>
        <th>Дата виробництва</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->manufacturer }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->manufacturing_date }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{route('manufacturers.index')}}">Повернутися до списку</a>

</body>
</html>
