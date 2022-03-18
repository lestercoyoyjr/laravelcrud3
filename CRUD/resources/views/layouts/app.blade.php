<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    
    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
 
  </head>
  
  <nav class="h-16 flex justify-end py-4 px-16">
    
    <a href="{{route('products.index')}}" class="border border-indigo-500 rounded px-4 pt-1 h-10 bg-white text-indigo-500 font semibold mx-2">Products</a>

    <a href="{{route('products.create')}}" class="text-white rounded px-4 pt-1 h-10 bg-indigo-500 font-semibold mx-2 hover:bg-indigo-600">Create</a>
  </nav>

  <body class="bg-gray-100 text-gray-800">
    <main class="p-16 flex justify-center">
        @yield('content')
    </main>
  </body>
</html>