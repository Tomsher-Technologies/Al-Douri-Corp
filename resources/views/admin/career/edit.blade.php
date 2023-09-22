@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'Update Job'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Update Job</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.careers.update', [
                                'career' => $career->id,
                            ]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $career->title ) }}"
                                    >
                                <x-input-error name='title' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Title</label>
                                <input type="text" name="ar_title" dir="rtl" class="form-control" value="{{ old('ar_title', $career->ar_title ) }}"
                                    >
                                <x-input-error name='ar_title' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Job Type</label>
                                <select name="type" class="form-control select2-single mb-3">
                                    <option {{ old('type', $career->type ) == 'full' ? 'selected' : '' }} value="full">
                                        Full Time
                                    </option>
                                    <option {{ old('type', $career->type) == 'part' ? 'selected' : '' }} value="part">
                                        Part Time
                                    </option>
                                </select>
                                <x-input-error name='type' />
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Description</label>
                                <textarea class="form-control" id="engEditor" name="description" rows="2">{{ old('description', $career->description) }}</textarea>
                                <x-input-error name='description' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Description</label>
                                <textarea class="form-control" id="arEditor" dir="rtl" name="ar_description" rows="2">{{ old('ar_description', $career->ar_description) }}</textarea>
                                <x-input-error name='ar_description' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Application Last Date</label>
                                <input type="text" name="last_date" class="form-control" value="{{ old('last_date', $career->last_date) }}">
                                <x-input-error name='last_date' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" class="form-control select2-single mb-3">
                                    <option {{ old('status',$career->status) == '1' ? 'selected' : '' }} value="1">
                                        Enabled
                                    </option>
                                    <option {{ old('status',$career->status) == '0' ? 'selected' : '' }} value="0">
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
        $('#img').on('change', function() {
            if (this.files[0]) {
                $('#imgname').text(this.files[0].name)
            } else {
                $('#imgname').text('Choose file')
            }
        });
    </script>

    <script src="{{ adminAsset('js/tinymce/tinymce.min.js') }}"></script>
    <x-tiny-script :editors="[['id' => '#engEditor', 'dir' => 'ltr'], ['id' => '#arEditor', 'dir' => 'rtl']]" />
@endpush