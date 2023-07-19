@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row bg-image d-flex align-content-center" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); min-height: 120px">
        <div class="col gy-3 d-flex justify-content-center">
            <p class="h1 text-uppercase"><i class="bi bi-columns-gap"></i> giải pháp</p>
        </div>
    </div>
    
    <hr>

    
    <!-- DIGITAL_SIGNAGE DIGITAL_SIGNAGE DIGITAL_SIGNAGE -->


    <div class="row mb-5" > <!--  -->
        <div id="solution-card" class="col-lg-6">
            <div id="solution-card-body" class="col">
                <div id="solution-card-body-title" class="col-sm-8"> <!-- Solution Name -->
                    <p>AUDIO VISUAL SOLUTIONS</p>
                </div>                
            </div>
            <div id="solution-card-body-description" class="col"> <!-- Description -->
                    <p>Hệ thống AV (Audio Visual) là hệ thống tích hợp âm thanh, trình chiếu và chiếu sáng chuyên nghiệp trong các khách sạn, resort, các hội nghị và các buổi thuyết trình.</p>
                </div>
        </div>

        <div class="col-lg-6">
            <div id="solution-child" class="row">

                <a href="/Solutions/Display" target="_blank" id="item" class="col-lg-6">
                    <p class="h2 text-uppercase">Audio</p>
                </a>

                <a href="/Solutions/Display" target="_blank" id="item" class="col-lg-6">
                    <p class="h2 text-uppercase">Video</p>
                </a>
                <a href="/Solutions/Display" target="_blank" id="item" class="col-lg-6">
                    <p class="h2 text-uppercase">Digital Signage</p>
                </a>
                <a href="/Solutions/Display" target="_blank" id="item" class="col-lg-6">
                    <p class="h2 text-uppercase">Stage Lighting</p>
                </a>
                <a href="/Solutions/Display" target="_blank" id="item" class="col-lg-6">
                    <p class="h2 text-uppercase">Control System</p>
                </a>
            </div>
            
        </div>
    </div>


    <!-- DIGITAL_SIGNAGE DIGITAL_SIGNAGE DIGITAL_SIGNAGE -->


    <div class="row mb-5" > <!--  -->
        <div id="solution-card" class="col-lg-6" style="background-image:url('https://www.cinos.net/wp-content/uploads/2021/08/samsung-overview-headline-banner-600x400-1.jpg')">
            <div id="solution-card-body" class="col">
                <div id="solution-card-body-title" class="col-sm-8"> <!-- Solution Name -->
                    <p class="text-uppercase">Giải pháp hiển thị</p>
                </div>                
            </div>
            <div id="solution-card-body-description" class="col"> <!-- Description -->
                <a href="/solutions/display/smartsignage" target="_blank" id="item" class="col-lg-6">
                    <p class="h2 text-uppercase">Smart Signage</p>
                </a>
                <a href="/solutions/display/led" target="_blank" id="item" class="col-lg-6">
                    <p class="h2 text-uppercase">LED Display</p>
                </a>
                <a href="/solutions/display/hospitality" target="_blank" id="item" class="col-lg-6">
                    <p class="h2 text-uppercase">Khách sạn & Nghỉ dưỡng</p>
                </a>
                <a href="/solutions/display/lcd" target="_blank" id="item" class="col-lg-6">
                    <p class="h2 text-uppercase">Màn hình chuyên dụng</p>
                </a>
            </div>
        </div>

        <div class="col-lg-6">
            <div id="solution-child" class="row">
                <div class="col">
                    <h1>Giải pháp màn hình cho mọi ứng dụng</h1>
                    <p class="h4">Hệ thống AV (Audio Visual) là hệ thống tích hợp âm thanh, trình chiếu và chiếu sáng chuyên nghiệp trong các khách sạn, resort, các hội nghị và các buổi thuyết trình.</p>
                </div>                
            </div>
            
        </div>
    </div>


</div>

@endsection