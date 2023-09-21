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
                            action="{{ route('admin.page.store-home', [
                                'page_name' => 'home',
                            ]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ $data->getTranslation('title','en') }}" >
                                <x-input-error name='title' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Title</label>
                                <input type="text" name="ar_title" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('title', 'ar') }}" >
                                <x-input-error name='ar_title' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Title</label>
                                <input type="text" name="sub_title" class="form-control"
                                    value="{{ $data->getTranslation('sub_title','en') }}" >
                                <x-input-error name='sub_title' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Sub Title</label>
                                <input type="text" name="ar_sub_title" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('sub_title', 'ar') }}" >
                                <x-input-error name='ar_sub_title' />
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Description</label>
                                <textarea class="form-control" id="engDescription" name="description" rows="2">{{ $data->getTranslation('description','en') }}</textarea>
                                <x-input-error name='description' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Description</label>
                                <textarea class="form-control" id="arDescription" dir="rtl" name="ar_description" rows="2">{{ $data->getTranslation('description', 'ar') }}</textarea>
                                <x-input-error name='ar_description' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Button Text</label>
                                <input type="text" name="button_text" class="form-control"
                                    value="{{ $data->getTranslation('button_text_1','en') }}" >
                                <x-input-error name='button_text' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Button Text</label>
                                <input type="text" name="ar_button_text" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('button_text_1', 'ar') }}" >
                                <x-input-error name='ar_button_text' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Button Link</label>
                                <input type="text" name="button_link" class="form-control"
                                    value="{{ $data->button_link_1 }}" >
                                <x-input-error name='button_link' />
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image 1</label>
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
                                <label for="exampleInputEmail1">Current Image 1</label>
                                <img class="img-custom form-control" src="{{ $data->getImage1('image1') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image 2</label>
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
                                <label for="exampleInputEmail1">Current Image 2</label>
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
                                <textarea class="form-control" id="engContent" name="content" rows="2">{{ $data->getTranslation('content1','en') }}</textarea>
                                <x-input-error name='content' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Content</label>
                                <textarea class="form-control" id="arContent" dir="rtl" name="ar_content" rows="2">{{ $data->getTranslation('content1', 'ar') }}</textarea>
                                <x-input-error name='ar_content' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mid Heading 1</label>
                                <input type="text" name="mid_heading1" class="form-control"
                                    value="{{ $data->getTranslation('heading2','en') }}" >
                                <x-input-error name='mid_heading1' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Mid Heading 1</label>
                                <input type="text" name="ar_mid_heading1" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading2', 'ar') }}" >
                                <x-input-error name='ar_mid_heading1' />
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Mid Content 1</label>
                                <textarea class="form-control" id="engContent2" name="mid_content1" rows="2">{{ $data->getTranslation('content2','en') }}</textarea>
                                <x-input-error name='mid_content1' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Mid Content 1</label>
                                <textarea class="form-control" id="arContent2" dir="rtl" name="ar_mid_content1" rows="2">{{ $data->getTranslation('content2', 'ar') }}</textarea>
                                <x-input-error name='ar_mid_content1' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mid Image 1</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="mid_image1" class="img" type="file" class="custom-file-input"
                                            id="image3" accept="image/*">
                                        <label class="custom-file-label" for="image3">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='mid_image1' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Mid Image 1</label>
                                <img class="img-custom form-control" src="{{ $data->getImage3('image3') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mid Heading 2</label>
                                <input type="text" name="mid_heading2" class="form-control"
                                    value="{{ $data->getTranslation('heading3','en') }}" >
                                <x-input-error name='mid_heading2' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Mid Heading 2</label>
                                <input type="text" name="ar_mid_heading2" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading3', 'ar') }}" >
                                <x-input-error name='ar_mid_heading2' />
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Mid Content 2</label>
                                <textarea class="form-control" id="engContent3" name="mid_content2" rows="2">{{ $data->getTranslation('content3','en') }}</textarea>
                                <x-input-error name='mid_content2' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Mid Content 2</label>
                                <textarea class="form-control" id="arContent3" dir="rtl" name="ar_mid_content2" rows="2">{{ $data->getTranslation('content3', 'ar') }}</textarea>
                                <x-input-error name='ar_mid_content2' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mid Image 2</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="mid_image2" class="img" type="file" class="custom-file-input"
                                            id="image4" accept="image/*">
                                        <label class="custom-file-label" for="image4">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='mid_image2' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Mid Image 2</label>
                                <img class="img-custom form-control" src="{{ $data->getImage4('image4') }}" alt="">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Mid Heading 3</label>
                                <input type="text" name="mid_heading3" class="form-control"
                                    value="{{ $data->getTranslation('heading4','en') }}" >
                                <x-input-error name='mid_heading3' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Mid Heading 3</label>
                                <input type="text" name="ar_mid_heading3" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading4', 'ar') }}" >
                                <x-input-error name='ar_mid_heading3' />
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Mid Content 3</label>
                                <textarea class="form-control" id="engContent4" name="mid_content3" rows="2">{{ $data->getTranslation('content4','en') }}</textarea>
                                <x-input-error name='mid_content3' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Mid Content 3</label>
                                <textarea class="form-control" id="arContent4" dir="rtl" name="ar_mid_content3" rows="2">{{ $data->getTranslation('content4', 'ar') }}</textarea>
                                <x-input-error name='ar_mid_content3' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mid Image 3</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="mid_image3" class="img" type="file" class="custom-file-input"
                                            id="image5" accept="image/*">
                                        <label class="custom-file-label" for="image5">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='mid_image3' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Mid Image 3</label>
                                <img class="img-custom form-control" src="{{ $data->getImage5('image5') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Products Heading</label>
                                <input type="text" name="product_heading" class="form-control"
                                    value="{{ $data->getTranslation('heading5','en') }}" >
                                <x-input-error name='product_heading' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Products Heading</label>
                                <input type="text" name="ar_product_heading" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading5', 'ar') }}" >
                                <x-input-error name='ar_product_heading' />
                            </div>

                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Products Sub Heading</label>
                                <input type="text" name="product_heading_sub" class="form-control"
                                    value="{{ $data->getTranslation('heading6','en') }}" >
                                <x-input-error name='product_heading_sub' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Products Sub Heading</label>
                                <input type="text" name="ar_product_heading_sub" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading6', 'ar') }}" >
                                <x-input-error name='ar_product_heading_sub' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Division Heading</label>
                                <input type="text" name="division_heading" class="form-control"
                                    value="{{ $data->getTranslation('content5','en') }}" >
                                <x-input-error name='division_heading' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Division Heading</label>
                                <input type="text" name="ar_division_heading" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('content5', 'ar') }}" >
                                <x-input-error name='ar_division_heading' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Division Sub Heading</label>
                                <input type="text" name="division_heading_sub" class="form-control"
                                    value="{{ $data->getTranslation('content6','en') }}" >
                                <x-input-error name='division_heading_sub' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Division Sub Heading</label>
                                <input type="text" name="ar_division_heading_sub" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('content6', 'ar') }}" >
                                <x-input-error name='ar_division_heading_sub' />
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Video Banner Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="video_image" class="img" type="file" class="custom-file-input"
                                            id="image6" accept="image/*">
                                        <label class="custom-file-label" for="image6">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='video_image' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Video Banner Image</label>
                                <img class="img-custom form-control" src="{{ $data->getImage6('image6') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Video Link</label>
                                <input type="text" name="video_link" class="form-control"
                                    value="{{ $data->video_link }}" >
                                <x-input-error name='video_link' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Brands Heading</label>
                                <input type="text" name="brand_heading" class="form-control"
                                    value="{{ $data->getTranslation('heading7','en') }}" >
                                <x-input-error name='brand_heading' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Brands Heading</label>
                                <input type="text" name="ar_brand_heading" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading7', 'ar') }}" >
                                <x-input-error name='ar_brand_heading' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Brands Sub Heading</label>
                                <input type="text" name="brand_heading_sub" class="form-control"
                                    value="{{ $data->getTranslation('heading8','en') }}" >
                                <x-input-error name='brand_heading_sub' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Brands Sub Heading</label>
                                <input type="text" name="ar_brand_heading_sub" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading8', 'ar') }}" >
                                <x-input-error name='ar_brand_heading_sub' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Blogs Heading</label>
                                <input type="text" name="blog_heading" class="form-control"
                                    value="{{ $data->getTranslation('heading9','en') }}" >
                                <x-input-error name='blog_heading' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Blogs Heading</label>
                                <input type="text" name="ar_blog_heading" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading9', 'ar') }}" >
                                <x-input-error name='ar_blog_heading' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Blogs Sub Heading</label>
                                <input type="text" name="blog_heading_sub" class="form-control"
                                    value="{{ $data->getTranslation('heading10','en') }}" >
                                <x-input-error name='blog_heading_sub' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Blogs Sub Heading</label>
                                <input type="text" name="ar_blog_heading_sub" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading10', 'ar') }}" >
                                <x-input-error name='ar_blog_heading_sub' />
                            </div>

                            <div class="form-group">
                                <h4>APP Download Section </h4>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image 1</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="app_image1" class="img" type="file" class="custom-file-input"
                                            id="image7" accept="image/*">
                                        <label class="custom-file-label" for="image7">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='app_image1' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image 1</label>
                                <img class="img-custom form-control" src="{{ $data->getImage7('image7') }}" alt="">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Image 2</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="app_image2" class="img" type="file" class="custom-file-input"
                                            id="image8" accept="image/*">
                                        <label class="custom-file-label" for="image8">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='app_image2' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image 2</label>
                                <img class="img-custom form-control" src="{{ $data->getImage8('image8') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image 3</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="app_image3" class="img" type="file" class="custom-file-input"
                                            id="image9" accept="image/*">
                                        <label class="custom-file-label" for="image9">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='app_image3' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image 3</label>
                                <img class="img-custom form-control" src="{{ $data->getImage9('image9') }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title 1</label>
                                <input type="text" name="app_title1" class="form-control"
                                    value="{{ $data->getTranslation('heading11','en') }}" >
                                <x-input-error name='app_title1' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Title 1</label>
                                <input type="text" name="ar_app_title1" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading11', 'ar') }}" >
                                <x-input-error name='ar_app_title1' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title 2</label>
                                <input type="text" name="app_title2" class="form-control"
                                    value="{{ $data->getTranslation('heading12','en') }}" >
                                <x-input-error name='app_title2' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Title 2</label>
                                <input type="text" name="ar_app_title2" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('heading12', 'ar') }}" >
                                <x-input-error name='ar_app_title2' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Button Text 1</label>
                                <input type="text" name="app_button_text1" class="form-control"
                                    value="{{ $data->getTranslation('button_text_2','en') }}" >
                                <x-input-error name='app_button_text1' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Button Text 1</label>
                                <input type="text" name="ar_app_button_text1" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('button_text_2', 'ar') }}" >
                                <x-input-error name='ar_app_button_text1' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Button Link 1</label>
                                <input type="text" name="app_button_link1" class="form-control"
                                    value="{{ $data->button_link_2 }}" >
                                <x-input-error name='app_button_link1' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Button Text 2</label>
                                <input type="text" name="app_button_text2" class="form-control"
                                    value="{{ $data->getTranslation('button_text_3','en') }}" >
                                <x-input-error name='app_button_text2' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Button Text 2</label>
                                <input type="text" name="ar_app_button_text2" dir="rtl" class="form-control"
                                    value="{{ $data->getTranslation('button_text_3', 'ar') }}" >
                                <x-input-error name='ar_app_button_text2' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Button Link 2</label>
                                <input type="text" name="app_button_link2" class="form-control"
                                    value="{{ $data->button_link_3 }}" >
                                <x-input-error name='app_button_link2' />
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


        ['id' => '#engContent2', 'dir' => 'ltr'],
        ['id' => '#arContent2', 'dir' => 'rtl'],

        ['id' => '#engContent3', 'dir' => 'ltr'],
        ['id' => '#arContent3', 'dir' => 'rtl'],

        ['id' => '#engContent4', 'dir' => 'ltr'],
        ['id' => '#arContent4', 'dir' => 'rtl'],

    ]" />
@endpush
