@extends('layouts.index')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="box-title">Product Form</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="post">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="name" class="form-control-label">
                        Name
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name') ?? $product->name }}"
                        class="form-control @error('name') is-invalid @enderror" />
                    @error('name')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-control-label">
                        Type
                    </label>
                    <input type="text" name="type" id="type" value="{{ old('type') ?? $product->type }}"
                        class="form-control @error('type') is-invalid @enderror" />
                    @error('type')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-control-label">
                        Description
                    </label>
                    <textarea name="description" id="description" cols="30" rows="10"
                        class="form-control ck-editor @error('description') is-invalid @enderror">
                        {{ old('description') ?? $product->description }}
                    </textarea>
                    @error('description')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-control-label">
                        Price
                    </label>
                    <input type="number" name="price" id="price" value="{{ old('price') ?? $product->price }}"
                        class="form-control @error('price') is-invalid @enderror" />
                    @error('price')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity" class="form-control-label">
                        Quantity
                    </label>
                    <input type="number" name="quantity" id="quantity" value="{{ old('quantity') ?? $product->quantity }}"
                        class="form-control @error('quantity') is-invalid @enderror" />
                    @error('quantity')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
