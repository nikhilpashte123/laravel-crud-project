<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Product management</title>
</head>
<body class="bg-gray-100 font-sans">
    <h1 class="text-3xl font-semibold mb-8 ">Product</h1>
    <div class="bg-green-200 text-green-800 p-4 mb-4">
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    <div>
        <div class="mb-8">
            <a href="{{route('product.create')}}" class="bg-blue-500 text-white py-2 px-4 rounded transition duration-300 hover:bg-blue-600">Create a product</a>
        </div>
        <table class="w-full table-auto">
             <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Name</th>
                <th class="border border-gray-300 px-4 py-2">Qty</th>
                <th class="border border-gray-300 px-4 py-2">Price</th>
                <th class="border border-gray-300 px-4 py-2">Description</th>
                <th class="border border-gray-300 px-4 py-2">Edit</th>
                <th class="border border-gray-300 px-4 py-2">Delete</th>
             </tr>
             @foreach ($products as $product)
                 <tr class="border border-gray-300">
                    <td class="border border-gray-300 px-4 py-2">{{$product->id}}</td>
                    <td class="border border-gray-300 px-4 py-2">{{$product->name}}</td>
                    <td class="border border-gray-300 px-4 py-2">{{$product->qty}}</td>
                    <td class="border border-gray-300 px-4 py-2">{{$product->price}}</td>
                    <td class="border border-gray-300 px-4 py-2">{{$product->description}}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{route('product.edit', ['product' => $product])}}" class="text-blue-500 hover:underline mr-2">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('product.destroy', ['product' => $product])}}" method="post" class="inline-block">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="text-red-500 hover:underline">
                        </form>
                    </td>
                 </tr>
             @endforeach
        </table>
    </div>
</body>
</html>