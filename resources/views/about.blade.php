@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row bg-image d-flex align-content-center" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); min-height: 120px">
        <div class="col gy-3 d-flex justify-content-center">
            <p class="h1 text-uppercase"><i class="bi bi-columns-gap"></i> Về chúng tôi</p>
        </div>
    </div>
    
    <hr>

    <div class="row d-flex justify-content-center">
    
    </div>

    <!-- 

    1. Giới thiệu cty
        -- 50% - Giới thiệu chung
        -- 50% - Hình ảnh

    2. Mục tiêu & tầm nhìn -- paragraph
    
    3. Hoạt động chính của cty
    
    4. Chính sách công ty -- hypher link reference only
        -- Các hoạt động chính
        -- Điều khoản bảo mật
        -- Điều  khoản sử dụng
        -- Giao hàng đổi trả
        -- Các câu hỏi thường gặp
    
    5. Slide các tin tức mới
    
    6. Thông tin liên hệ & form liên lạc
    
    7. Social media 

    -->



    <!--    Giới thiệu cty    --> 
    <div class="row">    
        <div class="col-md-6"> 
        <div id="title">
                <p class="para-title h2" href="#">
                    1. Giới thiệu công ty Duy Hòa Phát
                </p>
            </div>

            <div id="paragraph">
                <p class="h5">
                    <b>Chúng tôi là ai?</b>
                </p>
                <ul>
                    <li>Công ty cổ phần Duy Hòa Phát được thành lập năm 2009 bới những thành viên có nhiều năm kinh nghiệm trong việc thiết kế, cung cấp và lắp đặt hệ thống điện nhẹ Extra Low Voltage (ELV), hệ thống trình chiếu âm thanh, hình ảnh trình chiếu biểu diễn Audio Visual (AV)</li>
                </ul>
                <p class="h5">
                    <b>Đội ngũ nhân sự</b>
                </p>
                <ul>
                    <li>Để đáp ứng nhu cầu ngày càng cao, sự chú trọng vào phát triển nguồn nhân lực và năng lực của đội ngũ nhân sự sẽ là một trong các yêu tố cốt lõi để chúng tôi 
                        có thể mang lại những giá trị tốt nhất cho khách hàng cũng như thể hiện phong cách làm việc chuyên nghiệp.
                    </li>
                    <li>Chúng tôi luôn đầu tư vòa năng lực nhân viên, kết hợp với đối tác để luôn duy trì và cập nhật kiến thức, học hỏi kỹ năng làm việc lẫn nhau. Được đào tạo chính quy 
                        bởi các thương hiệu có uy tín lớn trên thế giới và có được các chứng chỉ chứng nhận chuyên môn trong lĩnh vực.
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6" style="display:grid; align-content:center; justify-content:center">
            <img 
                id="Solution_contentImgs"
                style="width:100%; height:auto"
                src="https://duyhoaphat.vn/images/gioi-thie-DHP.jpg" 
                alt="..." >
        </div>
    </div>


    <hr>
    <!--    2. Mục tiêu, tầm nhìn & sứ mệnh     -->
    <div class="row">
        <div class="row h2 para-title">2. Mục tiêu, tầm nhìn & sứ mệnh</div>
        <div></div>
    </div>


    <hr>
    <!--    3. Hoạt động chính của cty     -->
    <div class="row">
        <div class="row h2 para-title">3. Các hoạt động chính</div>
        <div></div>
    </div>


    <hr>
    <!--    4. Chính sách công ty    -->
    <div id="policies" class="row">
        <div class="row h2 para-title">4. Chính sách & quy định</div>
        <div class="row g-3">
            <a id="item" class="col-lg-6">
                <img 
                    src="https://img.freepik.com/free-vector/cyber-security-concept_23-2148532223.jpg?w=2000" 
                    alt="">
                Bảo mật thông tin
            </a>
            <a id="item" class="col-lg-6">
                <img 
                    src="https://pashop.vn/wp-content/uploads/2019/11/%C4%90i%E1%BB%81u-Kho%E1%BA%A3n-S%E1%BB%AD-D%E1%BB%A5ng.jpg" 
                    alt="">           
                Điều khoản sử dụng
            </a>
            <a id="item" class="col-lg-6">
                <img 
                    src="https://blog.2checkout.com/wp-content/uploads/2020/07/online-payment-gateway.png" 
                    alt="">   
                Chính sách <br> 
                thanh toán & hoàn tiền
            </a>
            <a id="item" class="col-lg-6">
                <img 
                    src=" https://nemthuanviet.com/wp-content/uploads/2019/06/chinh-sach-giao-hang.jpg" 
                    alt="">   
                Chính sách <br> 
                giao hàng & đổi trả
            </a>
            <a id="item" class="col-lg-6">                <img 
                    src="https://marketingai.vn/wp-content/uploads/2022/12/Y-nghia-cua-FAQ.jpg" 
                    alt="">                   
                    Các câu hỏi thường gặp
            </a>
        </div>
    </div>


    <hr>
    <!--    6. Thông tin liên hệ & form liên lạc    --> 
    @include('./layouts/contactForm')

</div>

@endsection