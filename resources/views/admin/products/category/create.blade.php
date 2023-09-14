@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'Create Category'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Create Category</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                    required>
                                <x-input-error name='title' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Title</label>
                                <input type="text" name="ar_title" dir="rtl" class="form-control"
                                    value="{{ old('ar_title') }}" required>
                                <x-input-error name='ar_title' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Parent Category</label>
                                <select name="parent_id" class="form-control select2-single mb-3">
                                    <option value="0">---</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error name='status' />
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Menu Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="menu_image" class="img" type="file" class="custom-file-input"
                                            id="inputGroupFile02" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='menu_image' />
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Menu Text</label>
                                <input type="text" name="menu_text" class="form-control" value="{{ old('menu_text') }}"
                                    required>
                                <x-input-error name='menu_text' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Menu Text</label>
                                <input type="text" name="ar_menu_text" dir="rtl" class="form-control"
                                    value="{{ old('ar_menu_text') }}" required>
                                <x-input-error name='ar_menu_text' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Banner Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="banner_image" class="img" type="file" class="custom-file-input"
                                            id="inputGroupFile03" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile03">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='banner_image' />
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Content</label>
                                <textarea class="form-control" id="engEditor" name="content_1" rows="2">{{ old('content_1') }}</textarea>
                                <x-input-error name='content_1' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Content</label>
                                <textarea class="form-control" id="arEditor" dir="rtl" name="ar_content_1" rows="2">{{ old('ar_content_1') }}</textarea>
                                <x-input-error name='ar_content_1' />
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Image 1</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="image_1" class="img" type="file" class="custom-file-input"
                                            id="inputGroupFile03" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile03">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='image_1' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image 2</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="image_1" class="img" type="file" class="custom-file-input"
                                            id="inputGroupFile03" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile03">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='image_1' />
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
