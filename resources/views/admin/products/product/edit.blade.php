@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'Edit product'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Edit product</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('admin.products.update', [
                                'product' => $product,
                            ]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $product->title }}"
                                    required>
                                <x-input-error name='title' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <select name="product_category_id" id="product_category_id" class="form-control select2-single mb-3" required>
                                    @foreach ($categories as $category)
                                        <option @checked($category->id == $product->product_category_id) value="{{ $category->id }}">
                                            {{ $category->title }}</option>
                                    @endforeach
                                </select>
                                <x-input-error name='product_category_id' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image</label>
                                <img class="w-100" src="{{ $product->getImage('en') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="image" class="img" type="file" class="custom-file-input"
                                            id="inputGroupFile02" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='image' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="ar_image" class="img" type="file" class="custom-file-input"
                                            id="inputGroupFile2" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile2">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='ar_image' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Arabic Image</label>
                                <img class="w-100" src="{{ $product->getImage('ar') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" class="form-control select2-single mb-3">
                                    <option {{ $product->status == '1' ? 'selected' : '' }} value="1">
                                        Enabled
                                    </option>
                                    <option {{ $product->status == '0' ? 'selected' : '' }} value="0">
                                        Disabled
                                    </option>
                                </select>
                                <x-input-error name='status' />
                            </div>



                            <button type="submit" class="btn btn-primary mb-0">Update</button>
                            <button type="button" id="delete" class="btn btn-danger mb-0 float-right">Delete</button>
                        </form>
                    </div>
                </div>

                <form id="deleteForm" method="POST"
                    action="{{ route('admin.products.destroy', [
                        'product' => $product,
                    ]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                </form>

            </div>
        </div>
    </div>
@endsection


@push('header')
    <link rel="stylesheet" href="{{ adminAsset('css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ adminAsset('css/vendor/select2-bootstrap.min.css') }}" />
@endpush
@push('footer')
    <script src="{{ adminAsset('js/vendor/select2.full.js') }}"></script>

    <script>
        $('#product_category_id').val('{{ $product->product_category_id }}').trigger('change');
        $('.img').on('change', function() {
            var text = 'Choose file';

            if (this.files[0]) {
                text = this.files[0].name
            }
            console.log($(this));
            $(this).siblings('label').text(text)
        });

        $('#delete').on('click', function() {
            if (confirm('Are you sure you want to remove this item?')) {
                $('#deleteForm').submit();
            }
        });
    </script>

    <script src="{{ adminAsset('js/tinymce/tinymce.min.js') }}"></script>
    <x-tiny-script :editors="[['id' => '#engEditor', 'dir' => 'ltr'], ['id' => '#arEditor', 'dir' => 'rtl']]" />
@endpush
