<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    border: 1px solid #d3d3d3;
    /* Màu xám nhạt */
    padding: 8px;
    text-align: left;
}
</style>

<body>
    <h1>8 lon</h1>
    <ul>
        @foreach($datnhat as $book)
        <li>{{ $book->title }} - {{ $book->price }}</li>
        @endforeach
    </ul>

    <h1>8 nho</h1>
    <ul>
        @foreach($renhat as $book)
        <li>{{ $book->title }} - {{ $book->price }}</li>
        @endforeach
    </ul>
   <a href="{{route('books.create')}}"><button>them moi</button></a>

    <table class="table" style="border: 1;">
        <thead>
            <tr>
                <th scope="col">id sach</th>

                <th scope="col">tieu de</th>
                <th scope="col">anh sp</th>
                <th scope="col">nha xuat ban</th>
                <th scope="col">ngay xuat ban</th>
                <th scope="col">gia ban</th>
                <th scope="col">so luong</th>
                <th scope="col">ma loai</th>
                <th> tuong tac</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allboock as $alla)
            <tr>

                <td>{{$alla -> id}}</td>
                <td>{{$alla -> title}} </td>
                <td><img src=" {{$alla->thumbnail}}" width="60px" alt=""></td>
                <td>{{$alla -> publisher}}</td>
                <td>{{$alla -> publication}}</td>
                <td>{{$alla -> price}}</td>
                <td>{{$alla -> quantity}}</td>
                <td>{{$alla -> name}}</td>
                <td>
                    <button>chi tiet</button> |<button>sua</button> |
                    <form action="{{ route('books.delete', $alla->id) }}" method="POST"
                        onsubmit="return confirm('xoa?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Xóa</button>
                    </form>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>