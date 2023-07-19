@extends('Sol_Template')

@section('content')

<div class="container">

    <div class="row bg-image d-flex align-content-center" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); min-height: 120px">
        <div class="col gy-3 d-flex justify-content-center">
            <p class="h1 text-uppercase"><i class="bi bi-columns-gap"></i> Hospitality</p>
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
                <a class="h2" href="#">
                    1. Màn hình Crystal UHD Signage  
                </a>
            </div>

            <div id="paragraph">
                <p class="h5">
                    <b>Chất lượng hình ảnh và thiết kế đầy lôi cuốn</b>
                </p>
                <ul>
                    <li>Màn hình độ phân giải cao lên đến UHD mang đến hình ảnh đáng kinh ngạc với màu sắc sống động, chân thật và đáng kinh ngạc. Với thiết kế đơn giản, màn hình sẽ mang đến cho kahsn giả thưởng thức từng chi tiết sắc nét mà không bị phân tâm.</li>
                </ul>

                <p class="h5">
                    <b>Dễ dàng cài đặt và bảo trì</b>
                </p>
                <ul>
                    <li>Quản lý đơn giản, tập trung và dễ dàng thiết lập và duy trì hoạt động ngay cả sau khi lắp đặt.</li>
                </ul>
                
                <p class="h5">
                    <b>Chức năng cho môi trường chuyên nghiệp</b>
                </p>
                <ul>
                    <li>Có tích hợp các tính năng nâng cao cho môi trường làm việc chuyên nghiệp, liền mạch với giải pháp nhúng và một số chế độ chuyên gia.</li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <div id="Number1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#Number1" data-slide-to="0" class="active"></li>
                    <li data-target="#Number1" data-slide-to="1"></li>
                    <li data-target="#Number1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://snt.com.vn/uploads/shops/2021_10/4.jpg" alt="First slide">

                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://images.samsung.com/is/image/samsung/p6pim/ch/feature/others/ch-feature-smart-signage-oh75a-531044688?$FB_TYPE_A_MO_JPG$" alt="Second slide">

                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.videoconferencingaustralia.com.au/wp-content/uploads/2023/03/LG-UR640S-UHD-Signage-TV-lifestyle-1.png" alt="Third slide">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#Number1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#Number1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    
    <hr>

    <div id="Sol_Contents" class="row">
        <div class="col-lg-6">
            <div id="Number2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
                <ol class="carousel-indicators">
                    <li data-target="#Number2" data-slide-to="0" class="active"></li>
                    <li data-target="#Number2" data-slide-to="1"></li>
                    <li data-target="#Number2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://ledso1.com/files/assets/manhinhsamsungquangcaongoaitroi1.jpg" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.telemart.vn/uploads/source/san-pham/aaa.jpg" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.videoconferencingaustralia.com.au/wp-content/uploads/2023/03/LG-UR640S-UHD-Signage-TV-lifestyle-1.png" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#Number2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#Number2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-lg-6">
            <div id="title">
                <a class="h2" href="#">
                    2. Màn hình ngoài trời
                </a>
            </div>

            <div id="paragraph">
                <p class="h5">
                    <b>Sắc nét và sống động mọi lúc mọi nơi</b>
                </p>
                <ul>
                    <li>Cung cấp độ sáng lên đến 3500nits. Hiệu năng hoạt động 24/7 và có tích hợp cảm biến ánh sáng tự động, tích hợp mang lại nội dung sắc nét và sống động</li>
                </ul>
                
                <p class="h5">
                    <b>Thiết kế mạnh mẽ để hoạt động ngoài trời</b>
                </p>
                <ul>
                    <li>Đã được tích hợp các công nghệ bảo vệ cho điều kiện haotj động thời tiết khắc nghiệt, đảm bảo màn hình chịu được tác động vật lý cũng như bụi và các yếu có khác có thể ảnh hưởng đến hoạt động của màn hình.</li>
                </ul>
            </div>
        </div>       
    </div>

    <hr>

    <div id="Sol_Contents" class="row">
        <div class="col-lg-6">
            <div id="title">
                <a class="h2" href="#">
                    3. Màn hình bán ngoài trời
                </a>
            </div>

            <div id="paragraph">
                <p class="h5">
                    <b>Thế nào là màn hình bán ngoài trời?</b>
                </p>
                <ul>
                    <li>Được thiết kế để lắp đặt tại cửa hàng, khả năng truyền tải hình ảnh rõ ràng, tươi sáng giúp màn hình bán ngoài trời thu hút và tương tác với khách hàng, tăng khả năng ghé thăm cửa hàng. Có thể hiển thị 2 mặt (tùy dòng sản phẩm).</li>
                </ul>
                <p class="h5">
                    <b>Chất lượng hình ảnh tuyệt vời</b>
                </p>
                <ul>
                    <li>Được thiết kế để tối ưu hóa các chương trình khuyến mãi của bạn với chất lượng hình ảnh rực rỡ, tối ưu cho nội dung cho ưu đãi đang hiển thị. Thêm nữa với độ sáng cao và hỗ trợ kính chống chói phân cực giúp loại bỏ mọi khả năng gây lóa sáng cho trải nghiệm xem thoải mái, tối ưu.</li>
                </ul>
                
                <p class="h5">
                    <b>Hiệu năng bền bỉ</b>
                </p>
                <ul>
                    <li>Với khả năng chống bụi đã được kiếm chứng và chức năng độc quyền từ đó giảm thiểu tình trạng quá nhiệt, màn hình bán ngoài trời liên tục cung cấp độ bền mạnh mẽ.</li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <img 
                id="Solution_contentImgs"
                src="https://images.samsung.com/is/image/samsung/p6pim/vn/feature/164035882/vn-feature-enhance-promotions-with-premium-picture-quality-532161088?$FB_TYPE_A_MO_JPG$" 
                alt="..." >
        </div>
    </div>
    
    <hr>

    <div id="Sol_Contents" class="row">
        <div class="col-lg-6">
            <img 
                id="Solution_contentImgs"
                src="https://adavi.vn/upload/images/video-wall-display-wall%20(1).jpg" 
                alt="..." >
        </div>

        <div class="col-lg-6">
            <div id="title">
                <a class="h2" href="#">
                    4. Màn hình ghép
                </a>
            </div>

            <div id="paragraph">
                <p class="h5">
                    <b>Trải nghiệm hình ảnh không gián đoạn</b>
                </p>
                <ul>
                    <li>Viền mỏng đến dưới 1mm để người xem có thể tận huognwr nội dung trọn vẹn hơn. Cùng với góc nhìn rộng và tấm nền chống chói mang đến kahr năng hiển thị tốt hơn bất kể ánh sáng xung quanh và hoạt động liên tục 24/7.</li>
                </ul>
                <p class="h5">
                    <b>Dễ dàng hiệu chuẩn và thuận tiện</b>
                </p>
                <ul>
                    <li>Hiệu chuẩn tự động nhiều bước điều chỉnh màn hình ghép về dộ sáng và màu sắc đồng nhất trên nhiều màn hình.</li>
                </ul>
            </div>
        </div>       
    </div>

    <hr>

    <div id="Sol_Contents" class="row">
        <div class="col-lg-6">
            <div id="title">
                <a class="h2" href="#">
                    5. Màn hình tương tác
                </a>
            </div>

            <div id="paragraph">
                <p class="h5">
                    <b>Viết & vẽ trực quan</b>
                </p>
                <ul>
                    <li>Biến ý tưởng thành hiện thực ngay lập tức với giao diện người dùng trực quan. Có hỗ trợ chế độ bút vẽ và cọ và nhiều công cụ tích hợp khác mang đến trải nghiệm chân thực.</li>
                </ul>
                <p class="h5">
                    <b>Kết nối từ bất kỳ nguồn nào</b>
                </p>
                <ul>
                    <li>Cho phép kết nối nhiều tùy chọn như HDMI, USB, Display Port, ... cùng chế độ chia sẻ không dây để luôn luốn sẵn sàng kết nối thiết bị của bạn.</li>
                </ul>
            </div>
        </div>

        <div class="col-lg-6">
            <img 
                id="Solution_contentImgs"
                src="https://www.telemart.vn/uploads/source/san-pham/untitled-2.jpg" 
                alt="..." >
        </div>
    </div>
    
    <hr>

    <div id="Sol_Contents" class="row">
        <div class="col-lg-6">
            <img 
                id="Solution_contentImgs"
                src="https://m.vietnamese.interactivetouchscreenkiosk.com/photo/pl23740567-m_n_h_nh_lcd_k_o_d_i_s_ng_cao_m_n_h_nh_qu_ng_c_o_k_thu_t_s_trong_nh.jpg" 
                alt="..." >
        </div>

        <div class="col-lg-6">
            <div id="title">
                <a class="h2" href="#">
                    6. Màn hình dài
                </a>
            </div>

            <div id="paragraph">
                <p class="h5">
                    <b>Màn hình dài?</b>
                </p>
                <ul>
                    <li>Màn hình dài cung cấp giải pháp bảng hiệu linh hoạt để đáp ứng mọi nhu cầu, đồng thời cung cấp nội dụng hiệu quả và tối đa hóa không gian, độ sâu mỏng & gờ hẹp dễ dàng lắp đặt.</li>
                </ul>
                <p class="h5">
                    <b>Hình ảnh sắc nét</b>
                </p>
                <ul>
                    <li>Với độ sáng cao và tích hợp bảng điều khiển chống chói, mang đến hình ảnh rõ nét, phong phú, bất kể điều kiện ánh sáng và hoạt động liên tục 24/7</li>
                </ul>
                <p class="h5">
                    <b>Màn hình tỉ lệ rộng 16:4.5</b>
                </p>
                <ul>
                    <li>Với tỉ lệ 16:4.5, mang đến hiệu quả hiển thị cho những khong gian nhỏ hẹp như kệ cửa hàng, trần nhà và hành lang</li>
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