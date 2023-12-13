<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Інформація про виробників</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-4">
    <table class="border-collapse border w-full">
        <tr>
            <th class="border p-2">Код</th>
            <td class="border p-2">{{ $product->id }}</td>
        </tr>
        <tr>
            <th class="border p-2">Бренд</th>
            <td class="border p-2">{{ $product->name }}</td>
        </tr>
        <tr>
            <th class="border p-2">Країна</th>
            <td class="border p-2">{{ $product->munifactorer }}</td>
        </tr>
        <tr>
            <th class="border p-2">Контактний номер</th>
            <td class="border p-2">{{ $product->price }}</td>
        </tr>
        <tr>
            <th class="border p-2">Пошта</th>
            <td class="border p-2">{{ $product->manufactoring_date }}</td>
        </tr>
    </table>
</div>

</body>
</html>
