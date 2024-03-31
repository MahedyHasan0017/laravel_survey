@extends('survey_admin.admin_layout.admin_layout')

@section('content')

<div class="right_col" role="main">
        <div class="container">
                <h3 class="text-center mb-4">General Settings </h3>
                <form action="{{route('admin_mission_and_vision_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                                <div class="col-md-8 col-lg-7 mx-auto">
                                        <div class="form-group">
                                                <label for="mission_desc" class="form-label">Mission Description</label>
                                                <textarea class="form-control" id="mission_desc" name="mission_desc" placeholder="mission description">
                                                        {{$mission_vission->mission_desc}}
                                                </textarea>
                                        </div>
                                </div>
                                <div class="col-md-8 col-lg-7 mx-auto">
                                        <div class="form-group">
                                                <label for="vission_desc" class="form-label">Vission Description</label>
                                                <textarea class="form-control"  id="vission_desc" name="vission_desc" placeholder="vission description">
                                                        {{$mission_vission->vission_desc}}
                                                </textarea>
                                        </div>
                                </div>
                                <div class="col-md-8 col-lg-7 mx-auto">

                                        <div class="form-group">
                                                <button type="submit" class="btn btn-primary w-100">
                                                        Save
                                                </button>
                                        </div>
                                </div>

                        </div>
                </form>
        </div>
</div>

@endsection