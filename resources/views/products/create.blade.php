<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-100 font-sans p-8">
    <h1 class="text-3xl font-semibold mb-6">Create a Product</h1>
    <div>
        @if ($errors->any())
            <ul class="list-disc text-red-500">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('product.store') }}" method="post" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
    @csrf
    @method('post')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500" type="text" name="name" placeholder="Name">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Qty</label>
            <input class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500" type="text" name="qty" placeholder="Qty">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Price</label>
            <input class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500" type="text" name="price" placeholder="Price">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <input class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:border-blue-500" type="text" name="description" placeholder="Description">
        </div>

        <div class="mb-4">
            <input type="submit" value="Save a new Product" class="bg-blue-500 text-white py-2 px-4 rounded transition duration-300 hover:bg-blue-600">
        </div>
    </form>
</body>
</html>