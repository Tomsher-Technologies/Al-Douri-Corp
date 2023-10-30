@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'Create Banner'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Create Banner</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.banner.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Heading</label>
                                <input type="text" name="heading" class="form-control" value="{{ old('heading') }}"
                                    required>
                                <x-input-error name='heading' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Heading</label>
                                <input type="text" name="ar_heading" class="form-control" value="{{ old('ar_heading') }}"
                                    required dir="rtl">
                                <x-input-error name='ar_heading' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Web View Image <span class="text-info">(Please upload an image with size less than 500 KB and dimensions 1920x1080 pixels)</span></label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="imgage" id="img" type="file" class="custom-file-input"
                                            id="inputGroupFile02" accept="image/*">
                                        <label class="custom-file-label" id="imgname" for="inputGroupFile02">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='imgage' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Mobile View Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="mob_image" id="mob_img" type="file" class="custom-file-input"
                                            id="inputGroupFile023" accept="image/*">
                                        <label class="custom-file-label" id="mob_imgname" for="inputGroupFile023">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='mob_image' />
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Content</label>
                                <textarea class="form-control" name="content" rows="2" required>{{ old('content') }}</textarea>
                                <x-input-error name='content' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Content</label>
                                <textarea class="form-control" dir="rtl" name="ar_content" rows="2" required>{{ old('ar_content') }}</textarea>
                                <x-input-error name='ar_content' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Button Text</label>
                                <input type="text" name="btn_text" class="form-control" value="{{ old('btn_text') }}"
                                    required>
                                <x-input-error name='btn_text' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Button Text</label>
                                <input type="text" name="ar_btn_text" class="form-control"
                                    value="{{ old('ar_btn_text') }}" required dir="rtl">
                                <x-input-error name='ar_btn_text' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Button Link</label>
                                <input type="text" name="btn_link" class="form-control" value="{{ old('btn_link') }}"
                                    required>
                                <x-input-error name='btn_link' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Sort Order</label>
                                <input type="number" name="sort_order" class="form-control"
                                    value="{{ old('sort_order',0) }}">
                                <x-input-error name='sort_order' />
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
                            <a  class="btn btn-info mb-0" href="{{ route('admin.banner.index') }}">Cancel</a>
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
        $('#img').on('change', function() {
            if (this.files[0]) {
                $('#imgname').text(this.files[0].name)
            } else {
                $('#imgname').text('Choose file')
            }
        });

        $('#mob_img').on('change', function() {
            if (this.files[0]) {
                $('#mob_imgname').text(this.files[0].name)
            } else {
                $('#mob_imgname').text('Choose file')
            }
        });
    </script>
@endpush
