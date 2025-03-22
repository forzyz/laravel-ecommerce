<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Add a New Product</h2>

        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" required
                       class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" required
                          class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" step="0.01" name="price" required
                       class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- <div>
                <label class="block text-sm font-medium text-gray-700">Stock</label>
                <input type="number" name="stock" required
                       class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div> -->

            <!-- <div>
                <label class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category_id" required
                        class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Product Image</label>
                <input type="file" name="image"
                       class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div> -->

            <div>
                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                    Add Product
                </button>
            </div>
        </form>
    </div>

</body>
</html>
