@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'General Settings'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>General Settings</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.store-settings') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <textarea class="form-control" name="address" id="address" cols="30" rows="3" >{{ old('address',$data['address'] ?? '') }}</textarea>
                                <x-input-error name='address' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$data['email'] ?? '' )}}">
                                <x-input-error name='email' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number <span class="text-info">(To add multiple numbers, enter the number with '/' symbol)</span></label>
                                <input class="form-control" type="text" name='phone' value="{{ old('phone',$data['phone'] ?? '') }}">
                                <x-input-error name='phone' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Get In Touch Footer Content</label>
                                <input class="form-control" type="text" name='footer_content' value="{{ old('footer_content',$data['footer_content'] ?? '' )}}">
                                <x-input-error name='footer_content' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Get In Touch Footer Content Arabic</label>
                                <input class="form-control" type="text" name='footer_content_ar' value="{{ old('footer_content_ar',$data['footer_content_ar'] ?? '' )}}"  dir="rtl">
                                <x-input-error name='footer_content_ar' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Google Play Store Link</label>
                                <input class="form-control" type="text" value="{{ old('play_store',$data['play_store'] ?? '') }}" name="play_store" id="play_store">
                                <x-input-error name='play_store' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">App Store Link</label>
                                <input class="form-control" type="text" value="{{ old('app_store',$data['app_store'] ?? '') }}" name="app_store" id="app_store">
                                <x-input-error name='app_store' />
                            </div>


                            <div class="form-group">
                                <h4> Social Links</h4>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook</label>
                                <input class="form-control" type="text" value="{{ old('facebook',$data['facebook'] ?? '') }}" name="facebook" id="facebook">
                                <x-input-error name='facebook' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Instagram</label>
                                <input class="form-control" type="text" value="{{ old('instagram',$data['instagram'] ?? '') }}" name="instagram" id="instagram">
                                <x-input-error name='instagram' />
                            </div>

                            <div class="form-group d-none">
                                <label for="exampleInputEmail1">Twitter</label>
                                <input class="form-control" type="text" value="{{ old('twitter',$data['twitter'] ?? '' )}}" name="twitter" id="twitter">
                                <x-input-error name='twitter' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin</label>
                                <input class="form-control" type="text" value="{{ old('linkedin',$data['linkedin'] ?? '' )}}" name="linkedin" id="linkedin">
                                <x-input-error name='linkedin' />
                            </div>

                            <div class="form-group">
                                <h4> Who We Are Header Section</h4>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Header Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="image" class="img" type="file" class="custom-file-input"
                                            id="image" accept="image/*">
                                        <label class="custom-file-label" for="image">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='image' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Header Image</label>
                                <img class="img-custom form-control" src="{{ URL::to($data['header_image']) }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title',$data['image_title'] ?? '') }}" >
                                <x-input-error name='title' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Image Title</label>
                                <input type="text" name="ar_title" dir="rtl" class="form-control"
                                    value="{{ old('ar_title',$data['image_title_ar'] ?? '')}}" >
                                <x-input-error name='ar_title' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image Sub Title</label>
                                <input type="text" name="sub_title" class="form-control"
                                    value="{{ old('sub_title',$data['image_title_sub'] ?? '') }}" >
                                <x-input-error name='sub_title' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Image Sub Title</label>
                                <input type="text" name="ar_sub_title" dir="rtl" class="form-control"
                                    value="{{ old('ar_sub_title',$data['image_title_sub_ar'] ?? '') }}" >
                                <x-input-error name='ar_sub_title' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image Section Link</label>
                                <input type="text" name="image_link" class="form-control"
                                    value="{{ $data['image_link'] }}" >
                                <x-input-error name='image_link' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Heading</label>
                                <input type="text" name="heading" class="form-control"
                                    value="{{ old('heading',$data['heading'] ?? '') }}" >
                                <x-input-error name='heading' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Heading</label>
                                <input type="text" name="ar_heading" dir="rtl" class="form-control"
                                    value="{{ old('ar_heading',$data['heading_ar'] ?? '') }}" >
                                <x-input-error name='ar_heading' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Sub Heading</label>
                                <input type="text" name="heading_sub" class="form-control"
                                    value="{{ old('heading_sub',$data['heading_sub'] ?? '') }}" >
                                <x-input-error name='heading_sub' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Sub Heading</label>
                                <input type="text" name="heading_sub_ar" dir="rtl" class="form-control"
                                    value="{{ old('heading_sub_ar',$data['heading_sub_ar'] ?? '') }}" >
                                <x-input-error name='heading_sub_ar' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Section Link</label>
                                <input type="text" name="header_link" class="form-control"
                                    value="{{ $data['header_link'] }}" >
                                <x-input-error name='header_link' />
                            </div>

                          
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
