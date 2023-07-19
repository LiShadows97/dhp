@extends('Sol_Template')

@section('content')

<div class="container">

    <div class="row bg-image d-flex align-content-center" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); min-height: 120px">
        <div class="col gy-3 d-flex justify-content-center">
            <p class="h1 text-uppercase"><i class="bi bi-columns-gap"></i> LED Display</p>
        </div>
    </div>
    
    <hr>


    <!-- Slider ảnh các loại hệ thống-->
    <div id="splide" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide"><img src="https://displaysolutions.samsung.com/static/images/feature_new/led/indoor/ier_03_03.jpg"></li>
            <li class="splide__slide"><img src="https://nghenhinvietnam.vn/uploads/global/ngochai/230131/nghe_nhin_samsung_smart_signage_q_2023_h1.jpeg"></li>
            <li class="splide__slide"><img src="https://ademax.vn/FileUpload/Images/img_kiosk_case_01.jpeg"></li>
            <li class="splide__slide"><img src="https://3dcomputer.vn/uploads/images/bai-viet-3d/man-hinh-do-hoa-chuyen-dung-2023-1.jpg"></li>
            <li class="splide__slide"><img src="https://i.ytimg.com/vi/bq99SnPCYk4/maxresdefault.jpg"></li>
            <li class="splide__slide"><img src="https://www.tunglandisplay.com/uploads/PRODUCT/mqc-dang-dai/3.jpg"></li>
            <li class="splide__slide"><img src="https://images.squarespace-cdn.com/content/v1/63cd18110cbdf5147b6d31b2/f919cfd0-5417-42b1-a95f-a24bebbb2ba0/digital-led-screens-l-shaped-PVR-high-street.jpg?format=2500w"></li>
        </ul>
    </div>
    </div>

    <hr>

    <!-- Nội dung -->
    <div id="Sol_Contents" class="row">
        <div class="col-lg-6">
            <div id="title">
                <p class="h2">
                    1. Màn hình LED trong nhà
                </p>
            </div>

            <div id="paragraph">
                <p class="h5">
                    <b>Chất lượng hình ảnh tuyệt vời</b>
                </p>
                <ul>
                    <li>Màn hình LED với các công nghệ tân tiến mang đến hình ảnh rực rỡ và sắc nét giúp nâng tầm trải nghiệm với nội dung tối ưu, đồng thời chống chói và đảm bảo hiển thị màu sắc tối ưu và chính xác không yêu cầu đến siêu dữ liệu đặc biệt.</li>
                </ul>

                <p class="h5">
                    <b>Thiết kế linh hoạt cho mọi vị trí</b>
                </p>
                <ul>
                    <li>Thiết kế phù hợp và tân tiến mang lại tính linh hoạt cho bất kì môi trường bán lẻ trong nhà hoặc kinh doanh nào. Với khả năng lắp đặt ngang dọc - thâm chí hình chữ L, lắp đặt trên trần cong. Nhiều sự lựa chọn cho doanh nghiệp có thể tận dụng để lắp đặt màn h ình lý tưởng cho không gian của mình.</li>
                </ul>
                
                <p class="h5">
                    <b>Biện pháp đảm bảo hoạt động</b>
                </p>
                <ul>
                    <li>Có nhiều biện pháp đảm bảo hoạt động nahmwf giảm thiểu sự cố màn hình bao gồm tín hiệu & bộ nguồn kép đảm bảo hoạt động của thiết bị (tùy dòng sản phẩm).</li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <img 
                id="Solution_contentImgs"
                src="https://nbp.com.vn/img_data/images/LH85QMRBBGCXXV523428781578.jpg" 
                alt="..." >
        </div>
    </div>
    
    <hr>

    <div id="Sol_Contents" class="row">
        <div class="col-lg-6">
            <img 
                id="Solution_contentImgs"
                src="https://ledso1.com/files/assets/manhinhsamsungquangcaongoaitroi1.jpg" 
                alt="..." >
        </div>

        <div class="col-lg-6">
            <div id="title">
                <p class="h2">
                    2. Màn hình LED ngoài trời
                </p>
            </div>

            <div id="paragraph">
                <p class="h5">
                    <b>Thiết kế cho mọi môi trường</b>
                </p>
                <ul>
                    <li>Được thiết kế để sử dụng trong các môi trường khắc nghiệt nhờ các hệ thống dự phòng và các tính năng chống chịu thời tiết đã được kiểm tra nghiêm ngặt trước nhiều điều kiện khác nhau. Xếp hạng IP lên đến IP66 (trước/sau).</li>
                </ul>

                <p class="h5">
                    <b>Chất lượng hình ảnh đỉnh cao</b>
                </p>
                <ul>
                    <li>Với độ sáng cao lên tới 8000 nits. Công nghệ hiển thị hình ảnh đỉnh cao cùng góc nhìn rộng, tốc độ làm mới cao giúp nội dung được hiển thị rõ ràng ngay cả trong ánh sáng gay gắt.</li>
                </ul>
                
                <p class="h5">
                    <b>Thiết kế tùy chỉnh toàn phần</b>
                </p>
                <ul>
                    <li>Cho phé hỗ trợ thiết kế tùy chỉnh, màn hình có thể được lắp đặt với mọi hình dạng, kích thước và đường cong chính xác và đáp ứng bất kỳ thông số kỹ thuật nào mà bạn mong muốn. Bạn hoàn toàn có thể lựa chọn lắp đặt màn hình trên mặt tường cong, dáng chữ L hay tùy ý thiết kế.</li>
                </ul>
            </div>
        </div>       
    </div>


    <!-- Các giải pháp khác -->

    

    <hr>
    <!-- Form liên hệ -->
    @include('./layouts/contactForm')

</div>

@endsection