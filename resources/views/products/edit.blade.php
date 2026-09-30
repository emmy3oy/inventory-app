@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')

```
<div class="page-header">

    <h1>Edit Product</h1>

    <a
        href="{{ route('products.index') }}"
        class="btn btn-secondary"
    >
        Back to Products
    </a>

</div>


<div class="form-card">

    <form
        action="{{ route('products.update', $product) }}"
        method="POST"
    >

        @csrf
        @method('PUT')


        <div class="form-group">

            <label for="name">
                Product Name
            </label>

            <input
                type="text"
                id="name"
                name="name"
                class="form-control"
                value="{{ old('name', $product->name) }}"
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
                value="{{ old('price', $product->price) }}"
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
                value="{{ old('quantity', $product->quantity) }}"
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
            >{{ old('description', $product->description) }}</textarea>

        </div>


        <button
            type="submit"
            class="btn btn-primary"
        >
            Update Product
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
