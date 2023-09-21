@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'Home Page Contents'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Home Page Contents</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('admin.page.store-about', [
                                'page_name' => 'about',
                            ]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Banner Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ $data->getTranslation('title','en') }}" >
                                <x-input-error name='title' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Banner Title</label>
                                <input type="text" name="ar_title" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('title', 'ar') }}" >
                                <x-input-error name='ar_title' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Banner Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="image1" class="img" type="file" class="custom-file-input"
                                            id="image1" accept="image/*">
                                        <label class="custom-file-label" for="image1">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='image1' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Banner Image</label>
                                <img class="img-custom form-control" src="{{ $data->getImage1('image1') }}" alt="">
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Content</label>
                                <textarea class="form-control" id="engDescription" name="description" rows="2">{{ $data->getTranslation('description','en') }}</textarea>
                                <x-input-error name='description' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Content</label>
                                <textarea class="form-control" id="arDescription" dir="rtl" name="ar_description" rows="2">{{ $data->getTranslation('description', 'ar') }}</textarea>
                                <x-input-error name='ar_description' />
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Sub Content</label>
                                <textarea class="form-control" id="engSubDescription" name="sub_content" rows="2">{{ $data->getTranslation('content1','en') }}</textarea>
                                <x-input-error name='sub_content' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Sub Content</label>
                                <textarea class="form-control" id="arSubDescription" dir="rtl" name="ar_sub_content" rows="2">{{ $data->getTranslation('content1', 'ar') }}</textarea>
                                <x-input-error name='ar_sub_content' />
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Middile Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="image2" class="img" type="file" class="custom-file-input"
                                            id="image2" accept="image/*">
                                        <label class="custom-file-label" for="image2">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='image2' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Middile Image</label>
                                <img class="img-custom form-control" src="{{ $data->getImage2('image2') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Heading</label>
                                <input type="text" name="heading" class="form-control"
                                    value="{{ $data->getTranslation('heading1','en') }}" >
                                <x-input-error name='heading' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Heading</label>
                                <input type="text" name="ar_heading" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading1', 'ar') }}" >
                                <x-input-error name='ar_heading' />
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Content</label>
                                <textarea class="form-control" id="engContent" name="content" rows="2">{{ $data->getTranslation('content2','en') }}</textarea>
                                <x-input-error name='content' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Content</label>
                                <textarea class="form-control" id="arContent" dir="rtl" name="ar_content" rows="2">{{ $data->getTranslation('content2', 'ar') }}</textarea>
                                <x-input-error name='ar_content' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Brand Heading</label>
                                <input type="text" name="brand_heading" class="form-control"
                                    value="{{ $data->getTranslation('heading2','en') }}" >
                                <x-input-error name='brand_heading' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Brand Heading</label>
                                <input type="text" name="ar_brand_heading" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading2', 'ar') }}" >
                                <x-input-error name='ar_brand_heading' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Brand Sub Heading</label>
                                <input type="text" name="brand_heading_sub" class="form-control"
                                    value="{{ $data->getTranslation('heading3','en') }}" >
                                <x-input-error name='brand_heading_sub' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Brand Sub Heading</label>
                                <input type="text" name="ar_brand_heading_sub" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading3', 'ar') }}" >
                                <x-input-error name='ar_brand_heading_sub' />
                            </div>

                            @include('admin.common.seo_form')

                            <button type="submit" class="btn btn-primary mb-0">Update</button>
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
    <style>
        .img-custom{
            width: 350px !important;
            height: 200px !important;
        }
    </style>
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
    <x-tiny-script :editors="[
        ['id' => '#engDescription', 'dir' => 'ltr'],
        ['id' => '#arDescription', 'dir' => 'rtl'],
        ['id' => '#engContent', 'dir' => 'ltr'],
        ['id' => '#arContent', 'dir' => 'rtl'],


        ['id' => '#engSubDescription', 'dir' => 'ltr'],
        ['id' => '#arSubDescription', 'dir' => 'rtl'],

    ]" />
@endpush
