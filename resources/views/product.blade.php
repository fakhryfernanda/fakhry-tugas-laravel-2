<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="container w-4/5 p-5 mx-auto mt-20 border border-slate-200">
        <button class="px-4 py-2 text-white bg-orange-500 rounded-lg">
            <a href="/product/add">Tambah produk</a>
        </button>
        <div class="mt-5 flex gap-4">
            @foreach ($products as $product)
                <div class="w-[250px] shadow-lg p-5 text-center">
                    <div class="mb-4">
                        <img src="{{ Storage::url($product->file_name) }}" alt="">
                    </div>
                    <h2 class="text-2xl font-bold">{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p class="text-orange-400">Rp{{ $product->price }}</p>
                    <div class="mx-auto mt-4 flex gap-4 w-fit">
                        <button class="py-2 px-4 bg-orange-200 rounded-md">Edit</button>
                        <button class="py-2 px-4 bg-orange-200 rounded-md">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
</body>
</html>