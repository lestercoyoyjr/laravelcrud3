@extends('layouts.app')

@section('title','Create')

@section('content')

<form action="{{route('products.store')}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Create products</h2>
    @csrf
    
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Title" name="title">
    
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Country" name="country">
    
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Price" name="price">

    <button type="submit" class="my-3 w-full bg-indigo-500 p-2 font-semibold rounded text-white hover:bg-indigo-600">Send</button>
    
</form>

@endsection