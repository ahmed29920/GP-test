<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('products.update' , $product[0]->id) }}" method="POST">
                    @csrf
                    @if (isset($product))
                        @method('PUT')
                    @endif
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $product[0]->name }}" name="name">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" value="{{ $product[0]->amount }}" name="amount">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" value="{{ $product[0]->price }}" name="price">
                        <button type="submit" class="btn btn-success">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
