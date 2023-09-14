@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'Edit division'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Edit division</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('admin.divisions.update', [
                                'division' => $division,
                            ]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')


                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ $division->getTranslation('title') }}" required>
                                <x-input-error name='title' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Title</label>
                                <input type="text" name="ar_title" dir="rtl" class="form-control"
                                    value="{{ $division->getTranslation('title', 'ar') }}" required>
                                <x-input-error name='ar_title' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image</label>
                                <img class="w-100" src="{{ $division->getImage('menu_image') }}" alt="">
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
                                <input type="text" name="menu_text" class="form-control"
                                    value="{{ $division->getTranslation('menu_text') }}" required>
                                <x-input-error name='menu_text' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Menu Text</label>
                                <input type="text" name="ar_menu_text" dir="rtl" class="form-control"
                                    value="{{ $division->getTranslation('menu_text', 'ar') }}" required>
                                <x-input-error name='ar_menu_text' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image</label>
                                <img class="w-100" src="{{ $division->getImage('banner_image') }}" alt="">
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
                                <textarea class="form-control" id="engEditor" name="content_1" rows="2">{{ $division->getTranslation('content_1') }}</textarea>
                                <x-input-error name='content_1' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Content</label>
                                <textarea class="form-control" id="arEditor" dir="rtl" name="ar_content_1" rows="2">{{ $division->getTranslation('content_1', 'ar') }}</textarea>
                                <x-input-error name='ar_content_1' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image</label>
                                <img class="w-100" src="{{ $division->getImage('center_image') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hero Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="center_image" class="img" type="file"
                                            class="custom-file-input" id="inputGroupFile04" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='center_image' />
                            </div>


                            <div class="form-group position-relative error-l-50">
                                <label>Content 2</label>
                                <textarea class="form-control" id="engEditor2" name="content_2" rows="2">{{ $division->getTranslation('content_2') }}</textarea>
                                <x-input-error name='content_2' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Content 2</label>
                                <textarea class="form-control" id="arEditor2" dir="rtl" name="ar_content_2" rows="2">{{ $division->getTranslation('content_2', 'ar') }}</textarea>
                                <x-input-error name='ar_content_2' />
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image</label>
                                <img class="w-100" src="{{ $division->getImage('gallery_image') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Final Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="gallery_image" class="img" type="file"
                                            class="custom-file-input" id="inputGroupFile06" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile06">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='gallery_image' />
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" class="form-control select2-single mb-3">
                                    <option {{ old('status', $division->status) == '1' ? 'selected' : '' }}
                                        value="1">
                                        Enabled
                                    </option>
                                    <option {{ old('status', $division->status) == '0' ? 'selected' : '' }}
                                        value="0">
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
                    action="{{ route('admin.divisions.destroy', [
                        'division' => $division,
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
    <x-tiny-script :editors="[
        ['id' => '#engEditor', 'dir' => 'ltr'],
        ['id' => '#arEditor', 'dir' => 'rtl'],
        ['id' => '#engEditor2', 'dir' => 'ltr'],
        ['id' => '#arEditor2', 'dir' => 'rtl'],
    ]" />
@endpush
