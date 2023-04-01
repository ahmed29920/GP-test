<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="amount">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="price">
                        <button type="submit" class="btn btn-success">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
