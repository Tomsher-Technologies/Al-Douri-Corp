@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'Our Heritage Page Contents'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Our Heritage Page Contents</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form class="repeater" method="POST"
                            action="{{ route('admin.page.store-heritage', [
                                'page_name' => 'heritage',
                            ]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Banner Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title', $data->getTranslation('title','en') ?? '') }}" >
                                <x-input-error name='title' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Banner Title</label>
                                <input type="text" name="ar_title" dir="rtl" class="form-control"
                                    value="{{ old('ar_title', $data->getTranslation('title', 'ar')) }}" >
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
                                <img class="img-custom form-control" src="{{ $data->getImage1() }}" alt="">
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Content</label>
                                <textarea class="form-control" id="engContent" name="content" rows="2">{{ old('content', $data->getTranslation('content1','en')) }}</textarea>
                                <x-input-error name='content' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Content</label>
                                <textarea class="form-control" id="arContent" dir="rtl" name="ar_content" rows="2">{{ old('ar_content', $data->getTranslation('content1', 'ar')) }}</textarea>
                                <x-input-error name='ar_content' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
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
                                <label for="exampleInputEmail1">Current Image</label>
                                <img class="img-custom form-control" src="{{ $data->getImage2() }}" alt="">
                            </div>

                            <div class="form-group d-none">
                                <label for="exampleInputEmail1">Small Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="image3" class="img" type="file" class="custom-file-input"
                                            id="image3" accept="image/*">
                                        <label class="custom-file-label" for="image3">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='image3' />
                            </div>

                            <div class="form-group d-none">
                                <label for="exampleInputEmail1">Current Small Image</label>
                                <img class="img-custom form-control" src="{{ $data->getImage3() }}" alt="">
                            </div>

                            <div class="form-group">
                                <h4>Points List</h4>
                            </div>

                            <div data-repeater-list="heritage_list">
                                <!-- Start: product body -->
                                <div data-repeater-item class="mt-3 px-sm-40 px-20">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Content</label>
                                        <textarea class="form-control" id="heritage" name="heritage" rows="3" placeholder="Enter point" >{{ old('heritage') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Arabic Content</label>
                                        <textarea class="form-control" id="ar_heritage" dir="rtl" name="ar_heritage" rows="3" placeholder="Enter point" >{{ old('heritage') }}</textarea>
                                    </div>
                                    <div class="text-right">
                                        <input data-repeater-delete class="btn btn-danger" type="button" value="Delete" />
                                    </div>
                                </div>
                                <!-- End: product body -->
                            </div>
                            <div class=" px-sm-40 px-20">
                                <input data-repeater-create class="btn btn-info my-3" type="button" value="Add New Point" />
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
    <script src="{{ adminAsset('js/jquery.repeater.min.js') }}"></script>
    <script>
        $('.img').on('change', function() {
            var text = 'Choose file';

            if (this.files[0]) {
                text = this.files[0].name
            }
            console.log($(this));
            $(this).siblings('label').text(text)
        });

        $(document).ready(function() {
            var $repeater = $('.repeater').repeater({
                                initEmpty: false,
                                show: function() {
                                    $(this).slideDown();
                                },
                                hide: function(deleteElement) {
                                    if (confirm('Are you sure you want to delete this element?')) {
                                        $(this).slideUp(deleteElement);
                                    }
                                },
                                isFirstItemUndeletable: false
                            });
            $data = {!! $lists !!}

            $repeater.setList($data);
        });
    

    </script>

    <script src="{{ adminAsset('js/tinymce/tinymce.min.js') }}"></script>
    <x-tiny-script :editors="[
        ['id' => '#engContent1', 'dir' => 'ltr'],
        ['id' => '#arContent1', 'dir' => 'rtl'],
        ['id' => '#engContent', 'dir' => 'ltr'],
        ['id' => '#arContent', 'dir' => 'rtl'],


    ]" />
@endpush
