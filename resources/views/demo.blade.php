@extends('backend.layouts.master')

@section('css')

@endsection

@section('content')

<div class="col-12">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="preview-block" data-select2-id="15"><span class="preview-title-lg overline-title">Outlined
                    Preview</span>
                <div class="row gy-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <div class="form-control-wrap">

                                <input type="text"
                                    class="form-control form-control-xl form-control-outlined"
                                    id="outlined-normal">

                                <label class="form-label-outlined" for="outlined-normal">Input
                                    text outlined
                                </label>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right"><em class="icon ni ni-user"></em></div><input
                                    type="text" class="form-control form-control-xl form-control-outlined"
                                    id="outlined-right-icon"><label class="form-label-outlined"
                                    for="outlined-right-icon">Input with icon</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right"><em class="icon ni ni-calendar-alt"></em></div>
                                <input type="text"
                                    class="form-control form-control-xl form-control-outlined date-picker"
                                    id="outlined-date-picker"><label class="form-label-outlined"
                                    for="outlined-date-picker">Date Picker</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <div class="form-control-wrap has-timepicker">
                                <div class="form-icon form-icon-right"><em class="icon ni ni-clock"></em></div><input
                                    type="text" class="form-control form-control-xl form-control-outlined time-picker"
                                    id="outlined-time-picker"><label class="form-label-outlined"
                                    for="outlined-time-picker">Time Picker</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="preview-hr"><span class="preview-title-lg overline-title">Outlined Sizes</span>
                <div class="row gy-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <div class="form-control-wrap"><input type="text"
                                    class="form-control form-control-xl form-control-outlined" id="outlined-xl"><label
                                    class="form-label-outlined" for="outlined-xl">Input text xl</label></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <div class="form-control-wrap"><input type="text"
                                    class="form-control form-control-lg form-control-outlined" id="outlined-lg"><label
                                    class="form-label-outlined" for="outlined-lg">Input text lg</label></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <div class="form-control-wrap"><input type="text" class="form-control form-control-outlined"
                                    id="outlined-default"><label class="form-label-outlined"
                                    for="outlined-default">Input text</label></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="text-soft">Use <code>.form-control-outlined</code> with <code>.form-control</code> for
                            outlined form element and replace <code>.form-label</code> with
                            <code>.form-label-outlined</code>, also place label after input/select element.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">Col 12</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">Full Card</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-6 col-6">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">COL 6</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">Full Card</h5>
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
                <h3 class="title">COL 6</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">Full Card</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-4">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">COL 4</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">Full Card</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-4">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">COL 4</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">Full Card</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-4">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">COL 4</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">Full Card</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-3">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">COL 3</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">Full Card</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-3">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">COL 3</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">Full Card</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-3">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">COL 3</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">Full Card</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-3">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="card-title mb-4">
                <h3 class="title">COL 3</h3>
            </div>
            <div class="row g-gs">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="fake-class">
                        <h5 class="title">Full Card</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection
