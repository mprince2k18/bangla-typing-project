@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">SL.</th>
                            <th scope="col">Chapter</th>
                            <th scope="col">Paragraph</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($chapters as $chapter)
                            
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $chapter->chapter }}</td>
                                <td>{{ $chapter->paragraph }}</td>
                                <td>
                                    <a href="{{ route('exam', $chapter->id) }}" class="btn btn-primary">Give Test</a>
                                </td>
                            </tr>

                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
