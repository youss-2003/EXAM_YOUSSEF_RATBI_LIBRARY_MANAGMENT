<!-- resources/views/category/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME","Add Book")}}</title>

    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="max-w-lg mx-auto mt-8 p-6 border rounded-lg shadow-md bg-white">
        <h2 class="text-2xl font-semibold mb-4 text-center">Add New BOOk</h2>

        <!-- Success message -->
        @if (session('success'))
            <div class="mb-4 text-green-500">{{ session('success') }}</div>
        @endif

        <form action="{{ route('books.store') }}" method="POST">
            @csrf <!-- CSRF protection -->

         
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Title</label>
                <input type="text" id="name" name="name" value="{{ old('title') }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Author</label>
                <input type="text" id="name" name="name" value="{{ old('author') }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                @error('author')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Publication Year</label>
                <input type="text" id="name" name="name" value="{{ old('publication_year') }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                @error('publication_year')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Available Copies</label>
                <input type="text" id="name" name="name" value="{{ old('available_copies') }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                @error('available_copies')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            
            <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Add Book
            </button>
        </form>
    </div>

</body>
</html>
