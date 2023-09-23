@extends('layouts.admin.app', ['body_class' => 'nav-md', 'title' => 'Create New Main Branch'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Create New Main Branch</h1>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <x-status />

                <div class="card mb-4">
                    <div class="card-body">
                        <form class="repeater" method="POST" action="{{ route('admin.branch.store') }}" >
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name') }}" >
                                <x-input-error name='name' />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Arabic Name</label>
                                <input type="text" name="ar_name" dir="rtl" class="form-control"
                                    value="{{ old('ar_name') }}" >
                                <x-input-error name='ar_name' />
                            </div>

                            <div class="form-group">
                                <h4>Branch Locations</h4>
                            </div>

                            <div data-repeater-list="locations">
                                <!-- Start: product body -->
                                <div data-repeater-item class="mt-3 px-sm-40 px-20 row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" value="{{ old('location') }}" name="location" placeholder="Enter name" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Arabic Name</label>
                                        <input type="text" class="form-control" dir="rtl" value="{{ old('ar_location') }}" name="ar_location" placeholder="Enter arabic name" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" class="form-control" value="{{ old('phone') }}" name="phone" placeholder="Enter phone" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Working Hours</label>
                                        <input type="text" class="form-control" value="{{ old('working_hours') }}" name="working_hours" placeholder="Enter working hours" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Google Map Link</label>
                                        <input type="text" class="form-control" value="{{ old('link') }}" name="link" placeholder="Enter google map link" >
                                    </div>
                                    <div class="text-right col-md-12">
                                        <input data-repeater-delete class="btn btn-danger" type="button" value="Delete" />
                                    </div>
                                </div>
                                <!-- End: product body -->
                            </div>
                            <div class=" px-sm-40 px-20">
                                <input data-repeater-create class="btn btn-info my-3" type="button" value="Add New" />
                            </div>

                            <button type="submit" class="btn btn-success mb-0">Save</button>
                            <a  class="btn btn-danger mb-0" href="{{ route('admin.branch.index') }}">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('header')

    <style>
        .img-custom{
            width: 350px !important;
            height: 200px !important;
        }
    </style>
@endpush
@push('footer')

    <script src="{{ adminAsset('js/jquery.repeater.min.js') }}"></script>
    <script>
      

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
