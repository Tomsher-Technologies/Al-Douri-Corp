@extends('layouts.admin.app', ['body_class' => '', 'title' => 'Careers'])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Applications</h1>
                <div class="text-zero top-right-button-container">
                    <a href="{{ route('admin.careers.index') }}"
                        class="btn btn-primary btn-lg top-right-button mr-1 text-uppercase">Back</a>
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Linkedin</th>
                                        <th scope="col">Resume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($careers[0]))
                                        @foreach ($careers as $key=>$job)
                                            <tr>
                                                <td scope="row">{{ $key + 1 + ($careers->currentPage() - 1) * $careers->perPage() }}</td>
                                                <td>{{ $job->first_name.' '.$job->last_name }}</td>
                                                <td>{{ $job->email }}</td>
                                                <td>{{ $job->phone }}</td>
                                                <td>{{ $job->linkedin }}</td>
                                                <td>
                                                    <a href="{{ asset($job->resume) }}" target="_blank"
                                                        class="btn btn-secondary mb-1">View Resume</a>
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
