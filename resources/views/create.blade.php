<!DOCTYPE html>
<html>

<head>
    <title>Thêm Sách</title>
</head>

<body>
    <h1>Thêm Sách Mới</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="thumbnail">Ảnh bìa (URL):</label>
        <input type="text" name="thumbnail" id="thumbnail" required><br>

        <label for="author">Tác giả:</label>
        <input type="text" name="author" id="author" required><br>

        <label for="publisher">Nhà xuất bản:</label>
        <input type="text" name="publisher" id="publisher" required><br>

        <label for="publication">Ngày xuất bản:</label>
        <input type="date" name="publication" id="publication" required><br>

        <label for="price">Giá bán:</label>
        <input type="number" name="price" id="price" required><br>

        <label for="quantity">Số lượng:</label>
        <input type="number" name="quantity" id="quantity" required><br>

        <label for="category_id">Loại sách:</label>
        <select name="category_id" id="category_id" required>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br>

        <button type="submit">Thêm Sách</button>
    </form>
</body>

</html>