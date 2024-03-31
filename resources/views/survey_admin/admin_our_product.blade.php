@extends('survey_admin.admin_layout.admin_layout')

@section('content')

<div class="right_col" role="main">
    <div class="container">
        <h3 class="text-center mb-4">Our Product</h3>
        <div class="row ">
            <div class="col-12 text-center">
                <a href="" class="btn btn-primary">View Valuation</a>
                <a href="" class="btn btn-primary">View Digital Survey</a>
                <a href="" class="btn btn-primary">View Cost Estimating</a>
                <a href="" class="btn btn-primary">View Project Profile</a>
            </div>
        </div>
        <div class="row mt-4">
            <div>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-8 col-lg-7 mx-auto">
                            <h4>Add Valuation</h4>
                        </div>
                        <div class="col-md-8 col-lg-7 mx-auto">
                            <div class="form-group">
                                <label for="bank_name" class="form-label">Bank Name</label>
                                <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="enter bank name">
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-7 mx-auto">
                            <div class="form-group">
                                <label for="cover_page" class="form-label">Cover Page Link</label>
                                <input type="text" class="form-control" id="cover_page" name="cover_page" placeholder="enter cover page link">
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-7 mx-auto">
                            <div class="form-group">
                                <label for="survey_report" class="form-label">Survey Report Link</label>
                                <input type="text" class="form-control" id="survey_report" name="survey_report" placeholder="enter survey report link">
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-7 mx-auto">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-100">
                                    Add Valuation
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection