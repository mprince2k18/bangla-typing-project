@extends('backend.layouts.master')

@section('css')

@endsection

@section('content')

<div class="col-12">
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">All Chapter</h4>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <table class="datatable-init table">
                    <thead>
                        <tr>
                            <th>Chapter</th>
                            <th>Paragraph</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($chapters as $chapter)
                            <tr>
                                <td>{{ $chapter->chapter }}</td>
                                <td>
                                    {{ $chapter->paragraph }}
                                </td>
                                <td class="text-center">
                                    <div class="dropdown"> 
                                        <a class="dropdown-toggle" href="javascript:;"
                                                data-bs-toggle="dropdown">
                                            <em class="icon ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu">
                                            <ul class="link-list-opt">
                                                <li><a href="{{ route('exam', $chapter->id) }}"><span>Give Test</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
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
