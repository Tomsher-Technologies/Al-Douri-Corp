@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'Edit category'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Edit category</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('admin.category.update', [
                                'category' => $category,
                            ]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ $category->getTranslation('title') }}" required>
                                <x-input-error name='title' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Title</label>
                                <input type="text" name="ar_title" dir="rtl" class="form-control"
                                    value="{{ $category->getTranslation('title', 'ar') }}" required>
                                <x-input-error name='ar_title' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Parent Category</label>
                                <select name="parent_id" class="form-control select2-single mb-3">
                                    <option value="0">---</option>
                                    @foreach ($categories as $cat)
                                        <option @selected($category->parent_id == $cat->id) value="{{ $cat->id }}">
                                            {{ $cat->title }}</option>
                                    @endforeach
                                </select>
                                <x-input-error name='status' />
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Menu Image (Only for Main Category) <span class="text-info">(Please upload an image with size less than 500 KB and dimensions 660x480 pixels)</span></label>
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
                                <label for="exampleInputEmail1">Current Menu Image</label>
                                @if($category->menu_image != NULL)
                                    <img class="w-100" src="{{ $category->getImage('menu_image') }}" alt="">
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Menu Text (Only for Main Category)</label>
                                <input type="text" name="menu_text" class="form-control"
                                    value="{{ $category->getTranslation('menu_text') }}">
                                <x-input-error name='menu_text' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Menu Text (Only for Main Category)</label>
                                <input type="text" name="ar_menu_text" dir="rtl" class="form-control"
                                    value="{{ $category->getTranslation('menu_text', 'ar') }}">
                                <x-input-error name='ar_menu_text' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Banner Image <span class="text-info">(Please upload an image with size less than 500 KB and dimensions 2049x1000 pixels)</span></label>
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

                            <div class="form-group" >
                                <label for="exampleInputEmail1">Current Banner Image</label>
                                @if($category->banner_image != NULL)
                                    <img class="w-100" src="{{ $category->getImage('banner_image') }}" alt="">
                                @endif
                            </div>

                            <div class="form-group position-relative error-l-50">
                                <label>Content</label>
                                <textarea class="form-control" id="engEditor" name="content" rows="2">{{ $category->getTranslation('description', 'en') }}</textarea>
                                <x-input-error name='content' />
                            </div>
                            <div class="form-group position-relative error-l-50">
                                <label>Arabic Content</label>
                                <textarea class="form-control" id="arEditor" dir="rtl" name="ar_content" rows="2">{{ $category->getTranslation('description', 'ar') }}</textarea>
                                <x-input-error name='ar_content' />
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Image 1 (Only for Sub Category) <span class="text-info">(Please upload an image with size less than 500 KB and dimensions 1920x1440 pixels)</span></label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="image_1" class="img" type="file" class="custom-file-input"
                                            id="inputGroupFile04" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='image_1' />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image 1</label>
                                @if($category->image_1 != NULL)
                                    <img class="w-100" src="{{ $category->getImage('image_1') }}" alt="">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image 2 (Only for Sub Category) <span class="text-info">(Please upload an image with size less than 500 KB and dimensions 1920x1440 pixels)</span></label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="image_2" class="img" type="file" class="custom-file-input"
                                            id="inputGroupFile05" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile05">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='image_1' />
                            </div>
                            
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image 2</label>
                                @if($category->image_2 != NULL)
                                    <img class="w-100" src="{{ $category->getImage('image_2') }}" alt="">
                                @endif
                            </div>

                           
                            <div class="form-group" >
                                <label for="exampleInputEmail1">Home Page Image (Only for Main Category) <span class="text-info">(Please upload an image with size less than 500 KB and dimensions 612x1000 pixels)</span></label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input name="home_image" class="img" type="file"
                                            class="custom-file-input" id="inputGroupFile6" accept="image/*">
                                        <label class="custom-file-label" for="inputGroupFile6">Choose
                                            file</label>
                                    </div>
                                </div>
                                <x-input-error name='home_image' />
                            </div>
                            
                            <div class="form-group" >
                                <label for="exampleInputEmail1">Current Home Page Image</label>
                                @if($category->home_image != NULL)
                                    <img class="w-100" src="{{ $category->getImage('home_image') }}" alt="">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" class="form-control select2-single mb-3">
                                    <option {{ $category->status == '1' ? 'selected' : '' }} value="1">
                                        Enabled
                                    </option>
                                    <option {{ $category->status == '0' ? 'selected' : '' }} value="0">
                                        Disabled
                                    </option>
                                </select>
                                <x-input-error name='status' />
                            </div>

                            @php   
                                $data = $category;
                            @endphp
                            @include('admin.common.seo_form')

                            <button type="submit" class="btn btn-primary mb-0">Update</button>
                            <a  class="btn btn-info mb-0" href="{{ route('admin.category.index') }}">Cancel</a>
                            <button type="button" id="delete" class="btn btn-danger mb-0 float-right">Delete</button>
                        </form>
                    </div>
                </div>

                <form id="deleteForm" method="POST"
                    action="{{ route('admin.category.destroy', [
                        'category' => $category,
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
    <x-tiny-script :editors="[['id' => '#engEditor', 'dir' => 'ltr'], ['id' => '#arEditor', 'dir' => 'rtl']]" />
@endpush
