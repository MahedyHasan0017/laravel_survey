@extends('survey.main.main')


@section('content')

<section class="container margin__top__50">
        <div class="card fixing__padding bg__dimmedGray ">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="card__heading border__bottom__0">
                            Our Mission and Vision
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="products__main bg__white  margin__bottom__50">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-6 ">
                    <div class="card bg__dimmedGray fixing__height">
                        <div class="card__heading heading__3">
                            our mission
                        </div>
                        <p class="card__body">
                            {{$mission_vission->mission_desc}}
                        </p>
                        <p class="card__body">
                        {{$mission_vission->mission_desc}}
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg__dimmedGray fixing__height">
                        <div class="card__heading heading__3">
                            Vision
                        </div>
                        <p class="card__body">
                        {{$mission_vission->vission_desc}}
                        </p>
                        <p class="card__body">
                        {{$mission_vission->vission_desc}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection 
