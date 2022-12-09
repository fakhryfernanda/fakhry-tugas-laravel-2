<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Product</h1>
    <form method="post" action="/product/create" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Nama :</label><br>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="description">Deskripsi :</label><br>
            <textarea name="description" id="description" rows="5" cols="50"></textarea>
        </div>

        <div>
            <label for="price">Harga :</label><br>
            <input type="number" name="price" id="price">
        </div>

        <div>
            <label for="image">Harga :</label><br>
            <input type="file" name="image" id="image" accept="image/*">
        </div>

        <button type="Submit">Tambah</button>

    </form>
</body>
</html>