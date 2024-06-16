@extends('layouts.index')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="box-title">Product Image Form</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('product-images.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="productId" class="form-control-label">
                        Product
                    </label>
                    <select name="product_id" id="productId" class="form-control @error('name') is-invalid @enderror">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    @error('product_id')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url" class="form-control-label">
                        Image
                    </label>
                    <input type="file" name="url" id="url" value="{{ old('url') }}"
                        class="form-control @error('url') is-invalid @enderror" required />
                    @error('url')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-control-label">
                        Default Image
                    </label>
                    <div class="input-group col-2 mb-3 @error('is_default') is-invalid @enderror">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="is_default" value='1' />
                            </div>
                        </div>
                        <input type="text" class="form-control @error('is_default') is-invalid @enderror"
                            placeholder="Yes" readonly />
                    </div>
                    <div class="input-group col-2 @error('is_default') is-invalid @enderror">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="is_default" value='0' checked />
                            </div>
                        </div>
                        <input type="text" class="form-control @error('is_default') is-invalid @enderror"
                            placeholder="No" readonly />
                    </div>
                </div>
                @error('is_default')
                    <div class="text-muted">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
