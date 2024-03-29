@extends('backend.layouts.master')

@section('css')

@endsection

@section('content')


<div class="col-6 col-6">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">Total Paragraph Words</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">{{ $total_paragraph_words }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">Different Words</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">{{ $diff_words }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">User Input Words</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">{{ $user_input_words }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">Missing Percentage</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">{{ $missing_percentage }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">Result</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">{{ $result }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">Words Per Minute</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">{{ $wpm }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">Net speed</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">{{ $net_speed }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">Accuracy</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">{{ $accuracy }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection
