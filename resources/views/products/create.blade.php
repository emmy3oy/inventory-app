@extends('layouts.app')

@section('title', 'Add Product')

@section('content')

    <div class="page-header">
        <h1>Add Product</h1>
    </div>


    <div class="form-card">

        <form
            action="{{ route('products.store') }}"
            method="POST"
        >

            @csrf

            <div class="form-group">

                <label for="name">
                    Product Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    value="{{ old('name') }}"
                >

            </div>


            <div class="form-group">

                <label for="price">
                    Price
                </label>

                <input
                    type="number"
                    id="price"
                    name="price"
                    class="form-control"
                    step="0.01"
                    min="0"
                    value="{{ old('price') }}"
                >

            </div>


            <div class="form-group">

                <label for="quantity">
                    Quantity
                </label>

                <input
                    type="number"
                    id="quantity"
                    name="quantity"
                    class="form-control"
                    min="0"
                    value="{{ old('quantity') }}"
                >

            </div>


            <div class="form-group">

                <label for="description">
                    Description
                </label>

                <textarea
                    id="description"
                    name="description"
                    class="form-control"
                    rows="5"
                >{{ old('description') }}</textarea>

            </div>


            <button
                type="submit"
                class="btn btn-primary"
            >
                Add Product
            </button>

            <a
                href="{{ route('products.index') }}"
                class="btn btn-secondary"
            >
                Cancel
            </a>

        </form>

    </div>

@endsection