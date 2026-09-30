@extends('layouts.app')

@section('title', $product->name)

@section('content')

```
<div class="page-header">

    <h1>Product Details</h1>

    <a
        href="{{ route('products.index') }}"
        class="btn btn-secondary"
    >
        Back to Products
    </a>

</div>


<div class="product-card">

    <div class="product-detail">
        <strong>ID</strong>
        <span>{{ $product->id }}</span>
    </div>


    <div class="product-detail">
        <strong>Product Name</strong>
        <span>{{ $product->name }}</span>
    </div>


    <div class="product-detail">
        <strong>Price</strong>
        <span>₦{{ number_format($product->price, 2) }}</span>
    </div>


    <div class="product-detail">
        <strong>Quantity</strong>
        <span>{{ $product->quantity }}</span>
    </div>


    <div class="product-detail">
        <strong>Description</strong>

        <span>
            {{ $product->description ?: 'No description' }}
        </span>
    </div>


    <div class="actions">

        <a
            href="{{ route('products.edit', $product) }}"
            class="btn btn-primary"
        >
            Edit Product
        </a>

        <form
            action="{{ route('products.destroy', $product) }}"
            method="POST"
            onsubmit="return confirm('Are you sure you want to delete this product?');"
        >

            @csrf
            @method('DELETE')

            <button
                type="submit"
                class="btn btn-danger"
            >
                Delete Product
            </button>

        </form>

    </div>

</div>
```

@endsection
