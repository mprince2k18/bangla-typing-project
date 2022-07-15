@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <p>
                        {{ $chapter->paragraph }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mt-2">
                <div class="card-body">
                    <form action="{{ route('examResult', $chapter->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Paragraph</label>
                            <textarea id="input_area" name="paragraph" class="form-control" placeholder="Start typing...."></textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
