@extends('backend.layouts.master')

@section('css')

@endsection

@section('content')

<div class="col-12">
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Your Report</h4>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <table class="datatable-init table">
                    <thead>
                        <tr>
                            <th>Chapter</th>
                            <th>Result</th>
                            <th>WPM</th>
                            <th>Exam Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($reports as $report)
                            <tr>
                                <td>{{ $report->chapter->chapter }}</td>
                                <td>{{ number_format($report->result, 2) }}</td>
                                <td>{{ number_format($report->wpm, 2) }}</td>
                                <td>{{ $report->created_at->format('d M, Y') }}</td>
                                <td>
                                    <a href="{{ route('details', $report->id) }}" class="btn-sm btn-secondary">Details</a>
                                    <a href="{{ route('ranking.chapter.based', $report->paragraph_id) }}" class="btn-sm btn-secondary">Ranking</a>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
    </div> <!-- nk-block -->
</div>

@endsection

@section('js')

@endsection
