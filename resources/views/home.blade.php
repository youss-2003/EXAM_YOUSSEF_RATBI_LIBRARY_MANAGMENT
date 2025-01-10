<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env("APP_NAME","Show Books")}}</title>
        <script src="https://cdn.tailwindcss.com"></script>

        
    </head>
    <body >
        @include('partials.header')

        <body class="bg-gray-100 flex items-center justify-center min-h-screen">
            <section class="dark:bg-gray-100 dark:text-gray-800">
                <div class="container mx-auto flex flex-col items-center px-4 py-16 text-center md:py-32 md:px-10 lg:px-32 xl:max-w-3xl">
                    <h1 class="text-4xl font-bold leading-none sm:text-5xl">Quisquam necessita vel
                        <span class="dark:text-violet-600">laborum doloribus</span>delectus
                    </h1>
                    <p class="px-8 mt-8 mb-12 text-lg">Cupiditate minima voluptate temporibus quia? Architecto beatae esse ab amet vero eaque explicabo!</p>
                    <div class="flex flex-wrap justify-center">
                        <a href="{{route('books.index')}}" class="px-8 py-3 m-2 text-lg font-semibold rounded dark:bg-violet-600 dark:text-gray-50">See all books</a>
                        <a href="{{route('create')}}" class="px-8 py-3 m-2 text-lg border rounded dark:text-gray-900 dark:border-gray-300">Create a book</a>
                    </div>
                </div>
            </section>
        
        </body>
    </body>
</html>
