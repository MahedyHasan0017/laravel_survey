@extends('survey.main.main')


@section('content')

<section class="container">
    <div class="image__slider__section">
        <div class="owl-one owl-carousel owl-theme">
            <div>
                <img src="{{asset('/assets/images/slider-img/slider-img01.jpeg')}}" alt="slider-img">
            </div>
            <div>
                <img src="{{asset('/assets/images/slider-img/slider-img02.jpeg')}}" alt="slider-img">
            </div>
            <div>
                <img src="{{asset('/assets/images/slider-img/slider-img03.jpeg')}}" alt="slider-img">
            </div>
            <div>
                <img src="{{asset('/assets/images/slider-img/slider-img04.jpeg')}}" alt="slider-img">
            </div>
            <div>
                <img src="{{asset('/assets/images/slider-img/slider-img05.jpeg')}}" alt="slider-img">
            </div>
        </div>
    </div>
</section>

<!-- mission  -->
<section class="mission__main">
    <div class="container padding__off">
        <div class="row gy-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card__heading">
                        our mission
                    </div>
                    <p class="card__body">
                        To ensure justice and fairness in all services and economic activities through the Service
                        Fast Quality Mast Slogan, especially to play a role in building a prosperous and improved
                        Bangladesh with honesty and efficiency.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card fixing__height">
                    <div class="card__heading">
                        Our Vision
                    </div>
                    <p class="card__body">
                        Our vision is to always strive for the best in service delivery. Dishari Survey Company Pvt.
                        Ltd. to be considered as a leading organization through reputation and services.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- mission end  -->

<!-- products -->
<section class="products__main">
    <div class="container card fixing__padding bg__dimmedGray">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="">
                    <div class="card__heading">
                        Our Products
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-0 gy-3 owl-two owl-carousel owl-theme">
            <div class="">
                <div class="card border__radious__none">
                    <div class="card__body">
                        <img src="{{asset('/assets/images/thumb/valuation.jpeg')}}" class="img-fluid" alt="digital__product">
                        <div class="about__card__image">
                            valuation
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none border__left__0 border__right__0">
                    <div class="card__body">
                        <img src="{{asset('/assets/images/thumb/cost.jpeg')}}" class="img-fluid" alt="digital__product">
                        <div class="about__card__image">
                            cost estimating
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none">
                    <div class="card__body">
                        <img src="{{asset('/assets/images/thumb/project.jpeg')}}" class="img-fluid" alt="digital__product">
                        <div class="about__card__image">
                            project profile
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none border__left__0 border__right__0">
                    <div class="card__body">
                        <img src="{{asset('/assets/images/thumb/digital.jpeg')}}" class="img-fluid" alt="digital__product">
                        <div class="about__card__image">
                            digital survey
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none ">
                    <div class="card__body">
                        <img src="{{asset('/assets/images/thumb/valuation.jpeg')}}" class="img-fluid" alt="digital__product">
                        <div class="about__card__image">
                            valuation
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none border__left__0 border__right__0">
                    <div class="card__body">
                        <img src="{{asset('/assets/images/thumb/cost.jpeg')}}" class="img-fluid" alt="digital__product">
                        <div class="about__card__image">
                            cost estimating
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none ">
                    <div class="card__body">
                        <img src="{{asset('/assets/images/thumb/project.jpeg')}}" class="img-fluid" alt="digital__product">
                        <div class="about__card__image">
                            project profile
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none border__left__0 border__right__0">
                    <div class="card__body">
                        <img src="{{asset('/assets/images/thumb/digital.jpeg')}}" class="img-fluid" alt="digital__product">
                        <div class="about__card__image">
                            digital survey
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end of products -->

<!-- directors  -->
<section class="products__main">
    <div class="container card bg__dimmedGray">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="">
                    <div class="card__heading">
                        Directors Details
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card fixing__height director__card">
                    <div class="director_image">
                        <img src="{{asset('/assets/images/users/Md._Shahidul_Islam-removebg-preview.png')}}" class="img-fluid" alt="director-image">
                    </div>
                    <div class="director__info text-center">
                        <div class="director__name">
                            Md. Shahidul Islam
                        </div>
                        <div class="director__designation">
                            Managing Director
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card director__card fixing__height">
                    <div class="director_image">
                        <img src="{{asset('/assets/images/users/d1.png')}}" class="img-fluid" alt="director-image">
                    </div>
                    <div class="director__info text-center">
                        <div class="director__name">
                            Engr. Md. Ershadul Haque
                        </div>
                        <div class="director__designation">
                            Director
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card director__card fixing__height">
                    <div class="director_image">
                        <img src="{{asset('/assets/images/users/baten.jpeg')}}" class="img-fluid" alt="director-image">
                    </div>
                    <div class="director__info text-center">
                        <div class="director__name">
                            Engr. Md. Abdul Baten
                        </div>
                        <div class="director__designation">
                            Director
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of directors  -->


<!-- Gallery  -->
<section class="products__main">
    <div class="container card fixing__padding bg__dimmedGray">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="">
                    <div class="card__heading">
                        Gallery
                    </div>
                </div>
            </div>
        </div>
        <div class="row  gy-3 owl-three owl-carousel owl-theme">
            <div class="">
                <div class="card border__radious__none padding__0">
                    <div class="card__body margin__t__0 ">
                        <img src="{{asset('/assets/images/gallery/1.jpeg')}}" class="img-fluid" alt="digital__product">
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none padding__0">
                    <div class="card__body margin__t__0">
                        <img src="{{asset('/assets/images/gallery/2.jpeg')}}" class="img-fluid" alt="digital__product">

                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none padding__0">
                    <div class="card__body margin__t__0">
                        <img src="{{asset('/assets/images/gallery/3.jpeg')}}" class="img-fluid" alt="digital__product">
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none padding__0">
                    <div class="card__body margin__t__0">
                        <img src="{{asset('/assets/images/gallery/4.jpeg')}}" class="img-fluid" alt="digital__product">

                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none padding__0">
                    <div class="card__body margin__t__0">
                        <img src="{{asset('/assets/images/gallery/5.jpeg')}}" class="img-fluid" alt="digital__product">

                    </div>
                </div>
            </div>
            <div class="">
                <div class="card border__radious__none padding__0">
                    <div class="card__body margin__t__0">
                        <img src="{{asset('/assets/images/gallery/6.jpeg')}}" class="img-fluid" alt="digital__product">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of Gallery  -->

<!-- products__and__banks -->
<section class="products__main bg__white margin__top__50 margin__bottom__50">
    <div class="container">
        <div class="row gy-3">
            <div class="col-md-6 ">
                <div class="card bg__dimmedGray fixing__height">
                    <div class="card__heading">
                        our mission
                    </div>
                    <p class="card__body margin__t__0">
                    <ul class="products__and__banks__ul">
                        <li>Valuation</li>
                        <li>Cost Estimating</li>
                        <li>Project Profile</li>
                        <li>Digital Survey</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg__dimmedGray">
                    <div class="card__heading">
                        Enlisted Bank
                    </div>
                    <p class="card__body margin__t__0">
                    <ul class="products__and__banks__ul">
                        <li>Islami Bank Bangladesh Ltd.</li>
                        <li>Al Arafah Islami Bank Ltd.</li>
                        <li>National Bank Ltd.</li>
                        <li>Sonali Bank Ltd.</li>
                        <li>Union Bank Ltd.</li>
                        <li>Mercantile Bank Ltd.</li>
                        <li>Janata Bank Ltd.</li>
                        <li>Rupali Bank Limited</li>
                        <li>Pubali Bank Limited</li>
                        <li>Bangladesh Development Bank Limited (BDBL)</li>

                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of products__and__banks -->
@endsection