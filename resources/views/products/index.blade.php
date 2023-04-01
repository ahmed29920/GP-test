<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3 class="text-center">ALL PRODUCTS</h3>
                <a class="btn btn-info" href="{{route('products.create')}}">Add New</a>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Opreation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $products as $product )
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->amount}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('products.edit' , $product->id)}}">Edit</a>
                            <a class="btn btn-warning" href="{{route('deleteProduct' , $product->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>
