@extends('backend.layouts.master')

@section('css')

@endsection

@section('content')

<div class="col-12">
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Ranking Stats</h4>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <table class="datatable-init table">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Name</th>
                            <th>Result</th>
                            <th>WPM</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rank as $report)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if ($report->user_id == Auth::id())
                                        <mark>{{ $report->user->name }}</mark>
                                    @else
                                        {{ $report->user->name }}
                                    @endif
                                </td>
                                <td>{{ number_format($report->result, 2) }}</td>
                                <td>{{ number_format($report->wpm, 2) }}</td>
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
