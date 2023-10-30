@extends('layouts.admin.app', ['body_class' => '', 'title' => 'Careers'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Careers</h1>
                <div class="text-zero top-right-button-container">
                    <a href="{{ route('admin.careers.create') }}"
                        class="btn btn-primary btn-lg top-right-button mr-1 text-uppercase">ADD NEW
                        Job</a>
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
            @if ($careers)
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl No:</th>
                                        <th scope="col">Title</th>
                                        <th scope="col" class="text-center">Job Type</th>
                                        <th scope="col" class="text-center">Last Date</th>
                                        <th scope="col" class="text-center">No Of Applicants</th>
                                        <th scope="col" class="text-center">Status</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($careers[0]))
                                        @foreach ($careers as $key=>$job)
                                            <tr>
                                                <td scope="row">{{ $key + 1 + ($careers->currentPage() - 1) * $careers->perPage() }}</td>
                                                <td>{{ $job->title }}</td>
                                                <td class="text-center">{{ ($job->type == 'full') ? 'Full-Time' : 'Part-Time' }}</td>
                                                <td class="text-center">{{ date('d M, Y',strtotime($job->last_date)) }}</td>
                                                <td class="text-center">{{ $job->career_applications->count() }}</td>
                                                <td class="text-center">{{ $job->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('admin.careers.edit', $job->id) }}"
                                                        class="btn btn-secondary mb-1">Edit</a>
                                                    <a href="{{ route('admin.careers.view', $job->id) }}"
                                                        class="btn btn-warning  mb-1">View Applications</a>
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
                                {{ $careers->appends(request()->input())->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('header')
@endpush

@push('footer')
<script type="text/javascript">

   
</script>
@endpush
