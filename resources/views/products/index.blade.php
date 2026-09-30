@extends('layouts.app')

@section('title', 'Products')

@section('content')

    <div class="page-header">

        <h1>Products</h1>

        <a
            href="{{ route('products.create') }}"
            class="btn btn-primary"
        >
            Add Product
        </a>

    </div>


    @if ($products->count())

        <div class="table-wrapper">

            <table class="product-table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($products as $product)

                        <tr>

                            <td>
                                {{ $product->id }}
                            </td>

                            <td>
                                {{ $product->name }}
                            </td>

                            <td>
                                ₦{{ number_format($product->price, 2) }}
                            </td>

                            <td>
                                {{ $product->quantity }}
                            </td>

                            <td>
                                {{ $product->description ?: 'No description' }}
                            </td>

                            <td>

                                <div class="actions">

                                    <a
                                        href="{{ route('products.show', $product) }}"
                                        class="btn btn-secondary"
                                    >
                                        View
                                    </a>

                                    <a
                                        href="{{ route('products.edit', $product) }}"
                                        class="btn btn-primary"
                                    >
                                        Edit
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
                                            Delete
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    @else

        <div class="alert">
            No products found.
        </div>

    @endif

@endsection