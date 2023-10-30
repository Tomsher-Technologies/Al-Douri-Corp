@extends('layouts.admin.app', ['body_class' => '', 'title' => 'Main Branches'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Main Branches</h1>
                <div class="text-zero top-right-button-container">
                    <a href="{{ route('admin.branch.create') }}"
                        class="btn btn-primary btn-lg top-right-button mr-1 text-uppercase">ADD NEW
                        MAIN BRANCH</a>
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
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl No:</th>
                                        <th scope="col">Name</th>
                                        <th scope="col" class="text-center">Status</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($branches[0]))
                                        @foreach ($branches as $key=>$branch)
                                            <tr>
                                                <td scope="row">{{ $key + 1 + ($branches->currentPage() - 1) * $branches->perPage() }}</td>
                                                <td>{{ $branch->name }}</td>
                                                
                                                <td class="text-center">
                                                    <b>{!! $branch->status == 1 ? '<span class="text-success">Enabled</span>' : '<span class="text-danger">Disabled</span>' !!}</b>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('admin.branch.edit', $branch) }}"
                                                        class="btn btn-secondary mb-1">Edit</a>
                                                   
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">No data found </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="pagination">
                                {{ $branches->appends(request()->input())->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
@endsection

@push('header')
@endpush

@push('footer')
<script type="text/javascript">

   
</script>
@endpush
