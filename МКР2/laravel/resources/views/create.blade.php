<h2>Додати учасника</h2>

<form method="post" action="{{ route('products.store') }}">
    @csrf
    <div>
        <label for="code">Код:</label>
        <input type="text" id="code" name="code" required>
    </div>

    <div>
        <label for="name">Назва:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="gender">Виробник:</label>
        <input type="text" id="manufacturer" name="manufacturer" required>
    </div>

    <div>
        <label for="age">Ціна:</label>
        <input type="number" id="price" name="price" required>
    </div>

    <div>
        <label for="country">Дата виробництва:</label>
        <input type="text" id="manufacturing_date" name="manufacturing_date" required>
    </div>


    <button type="submit">Створити</button>
</form>

<a href="{{route('manufacturers.index')}}">Повернутися до списку</a>
