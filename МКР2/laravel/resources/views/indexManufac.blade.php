<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список виробників</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Сторінка виробників</h1>

    <a href="{{ route('products.create')}}" class="bg-blue-500 text-white py-2 px-4 mb-4 inline-block">Додати</a>

    <table class="border-collapse border w-full">
        <thead>
        <tr>
            <th class="border p-2">Код</th>
            <th class="border p-2">Бренд</th>
            <th class="border p-2">Країна</th>
            <th class="border p-2">Контактний номер</th>
            <th class="border p-2">Пошта</th>
            <th class="border p-2">Переглянути товари</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($manufacturers as $manufacturer)
            <tr>
                <td class="border p-2">{{ $manufacturer->id }}</td>
                <td class="border p-2">{{ $manufacturer->brand }}</td>
                <td class="border p-2">{{ $manufacturer->country }}</td>
                <td class="border p-2">{{ $manufacturer->contact_phone }}</td>
                <td class="border p-2">{{ $manufacturer->email }}</td>
                <td class="border p-2">
                    <a href="{{ route('products.index')}}" class="text-blue-500">Переглянути товари</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
