@extends('layouts.index')

@section('container')
    <table class="table table-bordered mt-3 text-center">
        <thead>
            <tr class="table-light">
                <th scope="col">No.</th>
                <th scope="col">Nama Product</th>
                <th scope="col">Category</th>
                <th scope="col">Stock</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" value="{{ $item->nmproduct }}"
                                aria-label="Nama Product" aria-describedby="addon-wrapping">
                        </div>
                    </td>
                    <td>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" value="{{ $item->category }}" aria-label="Category"
                                aria-describedby="addon-wrapping">
                        </div>
                    </td>
                    <td>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" value="{{ $item->stock }}" aria-label="Stock"
                                aria-describedby="addon-wrapping">
                        </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>

                </tr>
            @endforeach
            <tr>
                <td colspan="5"><button type="button" class="btn btn-primary">Tambah</button></td>
            </tr>

        </tbody>
    </table>
@endsection
