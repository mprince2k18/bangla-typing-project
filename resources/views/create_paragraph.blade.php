@extends('backend.layouts.master')

@section('css')

@endsection

@section('content')

<div class="col-12">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="preview-block" data-select2-id="15"><span class="preview-title-lg overline-title">Chapter Title</span>
                
                <form action="{{ route('store.paragraph') }}" method="post">
                    @csrf

                    <div class="row gy-4">
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">

                                    <input type="text" name="chapter"
                                        class="form-control form-control-xl form-control-outlined"
                                        id="outlined-normal">

                                    <label class="form-label-outlined" for="outlined-normal">Chapter Title
                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4 mt-2">
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">

                                    <input type="number" name="time"
                                        class="form-control form-control-xl form-control-outlined"
                                        id="time">
                                        <small>Enter seconds as the exam timer</small>

                                    <label class="form-label-outlined" for="time">Exam Timer
                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="preview-hr"><span class="preview-title-lg overline-title">Chapter Story</span>

                    <div class="row gy-4">
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">

                                    <textarea
                                        class="form-control form-control-xl form-control-outlined"
                                        id="input_area" name="paragraph"></textarea>

                                    <label class="form-label-outlined" for="input_area">Chapter Story
                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Create Chapter</button>

                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('quick.jquery.bangla.js') }}"></script>

<script>
    $('#input_area').bangla();
    $('#input_area').bangla('enable', true); // enable bangla typing
</script>

@endsection
