@extends('layouts.index')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="box-title">Product Gallery</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Product</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Default</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($productImages as $productImage)
                                        <tr>
                                            <td class="text-center">{{ $productImage->id }}</td>
                                            <td>{{ $productImage->product->name }}</td>
                                            <td>
                                                <img src="{{ url($productImage->url) }}"
                                                    alt="{{ $productImage->product->name }}" />
                                            </td>
                                            <td>{{ $productImage->is_default ? 'Yes' : 'No' }}</td>
                                            <td>
                                                <form action="{{ route('product-images.destroy', $productImage->id) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')

                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center p-5">
                                                No data available
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
