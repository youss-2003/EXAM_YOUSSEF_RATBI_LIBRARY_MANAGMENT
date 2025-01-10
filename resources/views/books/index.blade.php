<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env("APP_NAME")}}</title>
        <script src="https://cdn.tailwindcss.com"></script>

        
    </head>
    <body class="antialiased">
        @include('partials.header')

        <body class="bg-gray-100 flex items-center justify-center min-h-screen">

            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
                    <h1 class="text-2xl font-bold text-center mb-6">BOOKS</h1>
        
                    <table class="min-w-full border-collapse border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2 text-left">#ID</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">title</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">author</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">publication_year</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">available_copies</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                            <tr class="hover:bg-gray-50">
                                <td class="border border-gray-300 px-4 py-2">{{ $book->id }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $book->title }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $book->author }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $book->publication_year }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $book->available_copies }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        
                    
                </div>
            </div>
        
        </body>
    </body>
</html>
