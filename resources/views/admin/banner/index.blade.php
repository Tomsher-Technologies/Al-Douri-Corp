@extends('layouts.admin.app', ['body_class' => '', 'title' => 'Banners'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Banners</h1>
                <div class="text-zero top-right-button-container">
                    <a href="{{ route('admin.banner.create') }}" class="btn btn-primary btn-lg top-right-button mr-1 text-uppercase">ADD NEW
                        Banner</a>
                </div>
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="rpw">
            <div class="col-12">
                <x-status />
                <x-errors />
            </div>
        </div>

        <div class="row">
            @if ($banners)
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No:</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banners as $banner)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $banner->heading }}</td>
                                            <td>{{ $banner->status == 1 ? 'Enabled' : 'Disabled' }}</td>
                                            <td>
                                                <a href="{{ route('admin.banner.edit', $banner) }}"
                                                    class="btn btn-secondary mb-1">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('header')
@endpush
