@extends('survey_admin.admin_layout.admin_layout')

@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="right_col" role="main">
    <div class="container">
        <h3 class="text-center mb-4">General Settings </h3>

        <form action="{{route('admin_general_setting_store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8 col-lg-7 mx-auto">
                    <div class="form-group">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" value="{{$setting->company_name}}" class="form-control" id="company_name" name="company_name" placeholder="enter company name">
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 mx-auto">
                    <div class="form-group">
                        <label for="logo" class="form-label">logo</label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>
                    <div class="" style="height: 100px; width : 100px">
                        <img id="showImg" class="img-fluid" src="{{url('upload/admin_images/'.$setting->logo)}}" alt="logo">
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 mx-auto">
                    <div class="">
                        <label for="about_company" class="form-label">About Company</label>
                        <textarea class="form-control" id="about_company" name="about_company" placeholder="about company">
                        {{$setting->about_company}}
                        </textarea>
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 mx-auto">
                    <div class="form-group">
                        <label for="facebook_url" class="form-label">Facebook Link</label>
                        <input type="text" value="{{$setting->facebook_url}}" class="form-control" id="facebook_url" name="facebook_url" placeholder="enter facebook profile link ">
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 mx-auto">
                    <div class="form-group">
                        <label for="youtube_url" class="form-label">Youtube Link</label>
                        <input type="text" value="{{$setting->youtube_url}}" class="form-control" id="youtube_url" name="youtube_url" placeholder="enter youtube profile link ">
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 mx-auto">
                    <div class="form-group">
                        <label for="twitter_url" class="form-label">Twitter Link</label>
                        <input type="text" value="{{$setting->twitter_url}}" class="form-control" id="twitter_url" name="twitter_url" placeholder="enter twitter profile link ">
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 mx-auto">
                    <div class="form-group">
                        <label for="instagram_url" class="form-label">Instagram Link</label>
                        <input type="text" value="{{$setting->instagram_url}}" class="form-control" id="instagram_url" name="instagram_url" placeholder="enter instagram profile link ">
                    </div>
                </div>
                <div class="col-md-8 col-lg-7 mx-auto">
                    <div class="form-group">
                        <label for="active_phone_number" class="form-label">Active Phone Number</label>
                        <input type="text" value="{{$setting->active_phone_number}}" class="form-control" id="active_phone_number" name="active_phone_number" placeholder="enter active phone number ">
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

<script class="text/javascript">


    $(document).ready(function(){
        $('#logo').change(function(e){

          
            var reader = new FileReader()
            reader.onload = function(e){
                // console.log(e.target.result);
                $('#showImg').attr('src' , e.target.result) ; 
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });

</script>


@endsection