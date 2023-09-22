@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'Create Product'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Create Product</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                    required>
                                <x-input-error name='title' />
                            </div>
                            {{-- <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Title</label>
                                <input type="text" name="ar_title" dir="rtl" class="form-control"
                                    value="{{ old('ar_title') }}" required>
                                <x-input-error name='ar_title' />
                            </div> --}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <select name="product_category_id" class="form-control select2-single mb-3" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                <x-input-error name='product_category_id' />
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
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" class="form-control select2-single mb-3">
                                    <option {{ old('status') == '1' ? 'selected' : '' }} value="1">
                                        Enabled
                                    </option>
                                    <option {{ old('status') == '0' ? 'selected' : '' }} value="0">
                                        Disabled
                                    </option>
                                </select>
                                <x-input-error name='status' />
                            </div>

                            <button type="submit" class="btn btn-primary mb-0">Submit</button>
                        </form>
                    </div>
                </div>


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
        $('.img').on('change', function() {
            var text = 'Choose file';

            if (this.files[0]) {
                text = this.files[0].name
            }
            console.log($(this));
            $(this).siblings('label').text(text)
        });
    </script>

    <script src="{{ adminAsset('js/tinymce/tinymce.min.js') }}"></script>
    <x-tiny-script :editors="[['id' => '#engEditor', 'dir' => 'ltr'], ['id' => '#arEditor', 'dir' => 'rtl']]" />
@endpush
