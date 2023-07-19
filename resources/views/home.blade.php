@extends('layouts.app')

@section('content')

<div class="container">
<!-- 1. Carousel Homepage -->
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="4000" data-touch="true">
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="https://duyhoaphat.vn/images/slides/banner-duyhoaphat-02.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="https://duyhoaphat.vn/images/slides/banner-duyhoaphat-03.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="https://duyhoaphat.vn/images/slides/banner-duyhoaphat-04.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<!-- 1. END of Carousel Homepage -->
    <hr>
<!-- 2. Company Short Introduction -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="{{ asset('/img/home/Intro.png') }}" style="width: -moz-available; max-width:500px; border-radius: 8px;">
        </div>
        <div class="col-md-6">
        <h2><b>CREATES EXPERIENCES FOR YOU IN SIGHT & SOUND</b></h2>
        <p>DUY HOA PHAT CORP (DHP) được thành lập năm 2009 bởi những thành viên có nhiều năm kinh nghiệm trong việc thiết kế, cung cấp và lắp đặt các hệ thống điện nhẹ (ELV) & hệ thống âm thanh hình ảnh trình chiếu (AV).</p>
        <p>Chúng tôi đã cung cấp giải pháp toàn diện của chúng tối đến các khách hàng từ chính phủ, tập đoàn, chuỗi bán lẻ, khu nghỉ dưỡng, nhà hàng và nhiều hơn nữa.</p>
        <p>Đáp ứng nhu cầu quý khách với giải pháp ứng dụng, hệ thống lẫn chất lượng toàn diện với các thương hiệu nổi tiếng trên thế giới: <b>Avigilon, Alcatel-Lucent, Atlas Sound, Absen, Bosch, Biamp, Draper, Electro-Voice, Extron, Elock, Fermax, HID, Hanwha Techwin, Gunnebo, Ksenia, Lapp Kabel, Qubit, Unitron,...</b></p>
        <p>Chúng tôi luôn cố gắng và nỗ lực nâng cao không ngừng kiến thức, năng lực chuyên môn và giải pháp tối ưu cùng giá cả hợp lý đi cùng với dịch vụ chuyên nghiệp và chúng tôi cam kết công nghệ tiên tiến, linh hoạt và luôn đổi mới và mang lại giải pháp nổi bật nhất tới khách hàng.</p>
        </div>
    </div>
<!-- 2. END of Company Short Introduction -->

    <hr>
    
<!-- 3. Carousel Sample Projects -->
    <div id="projectSample" class="carousel slide carousel-fade" data-ride="carousel" data-interval="50000">
        <ol class="carousel-indicators">
            <li data-target="#projectSample" data-slide-to="0" class="active"></li>
            <li data-target="#projectSample" data-slide-to="1"></li>
            <li data-target="#projectSample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_188e0fbebe4%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_188e0fbebe4%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9140625%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="First slide">
            <div class="carousel-caption d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_188e0fbebe6%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_188e0fbebe6%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Second slide">
            <div class="carousel-caption d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_188e0fbebe6%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_188e0fbebe6%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22276.9921875%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Third slide">
            <div class="carousel-caption d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#projectSample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#projectSample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<!-- 3. END of Carousel Sample Projects -->
    <hr>
<!-- 4. Solutions -->
    <div id="solution" class="container">
        <p class="h1 text-uppercase">Innovating end-to-end solutions for our clients</p>
        <p class="h5">End-to-end embodies our holistic approach to deliver complete business solutions with services, support and solutions to our clients. You can be assured of our support every step of the way. A good audio-visual company shouldn’t just focus on the technical. We understand that is about managing and providing a holistic end-to-end solutions for our client’s peace of mind.</p>
        
        <img src="https://static.wixstatic.com/media/bba326_a827453cc45440ce9652a4d2dacb8f29~mv2.png/v1/crop/x_0,y_0,w_15715,h_14238/fill/w_300,h_267,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Customer%20Service.png" class="card-img-top" style="width:300px" alt="...">

        <p class="h4">End-to-end solutions</p>
        <p class="h5">With over 20 years of experience, PAVE is proud of our reputation as a systems supplier able to provide the most appropriate technical solution to our clients. We offer a suite of solutions that is customizable for our every client’s unique needs. We utilize the latest technology for designing and engineering of high-quality solutions to achieve great results and the most in reliability for years to come.</p>
        
        <p class="h4">Continual support by highly skilled engineers to protect your investment</p>
        <p class="h5">After a successful installation and completion of a project, we are able to provide continual support to ensure the same high level of performance is maintained. We have a team of highly experienced engineers carrying out preventative maintenance to minimize the risk of potential problems arising.</p>
        
        <p class="h4">Support whenever you need it</p>
        <p class="h5">In this industry, we are well aware it is not a 8-6 job. We pride ourselves in being able to provide support for unusual working hours. In the event of an urgent need to fix a problem, rest assure to know that we have you covered. Our Help Desk support staff and team of engineers is able to help and resolve any issues to prevent downtime and loss of service.</p>
    </div>
    
    <hr>
    
    <div class="container">
        <div class="row g-3">
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="https://mir-s3-cdn-cf.behance.net/projects/404/f304f577284117.Y3JvcCwyMDQ1LDE2MDAsMTYyLDA.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Audio Visual System</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="https://mir-s3-cdn-cf.behance.net/projects/404/f304f577284117.Y3JvcCwyMDQ1LDE2MDAsMTYyLDA.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Security</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="https://mir-s3-cdn-cf.behance.net/projects/404/f304f577284117.Y3JvcCwyMDQ1LDE2MDAsMTYyLDA.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">UC Solutions</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>   
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="https://mir-s3-cdn-cf.behance.net/projects/404/f304f577284117.Y3JvcCwyMDQ1LDE2MDAsMTYyLDA.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project Control</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>     
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="https://mir-s3-cdn-cf.behance.net/projects/404/f304f577284117.Y3JvcCwyMDQ1LDE2MDAsMTYyLDA.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Structured Cables System</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>  
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="https://mir-s3-cdn-cf.behance.net/projects/404/f304f577284117.Y3JvcCwyMDQ1LDE2MDAsMTYyLDA.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maintenance & Repair</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>  

        </div>
    </div>
<!-- 4. END of Solutions -->
    <hr>
<!-- 5. 24/7 Contact -->
    <div id="contact" class="container">
      
    <div class="row justify-content-center">
    <div class="col-md-10">
        
        <div class="row align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0">

            <h2 class="mb-5">Bạn đang có vấn đề cần phải xử lý?<br> Hãy liên hệ với chúng tôi ngay.</h2>

            <form class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm">
            <div class="row">
                <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="fname" id="fname" placeholder="First name">
                </div>
                <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div> 

            <div class="row">
                <div class="col-md-12 form-group">
                <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                </div>
            </div>

            <div class="md-3 form-group">
                <label for="formFile" class="form-label"></label>
                <input class="form-control" type="file" id="formFile">
            </div>
            
            <div class="row">
                <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                <span class="submitting"></span>
                </div>
            </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
            Your message was sent, thank you!
            </div>

        </div>
        <div class="col-lg-4 ml-auto">
            <h3 class="mb-4">Let's talk about everything.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil deleniti itaque similique magni. Magni, laboriosam perferendis maxime!</p>
            <p><a href="#">Read more</a></p>
        </div>
        </div>
    </div>  
    </div>

    </div>
<!-- 5. 24/7 Contact -->
    
    <hr>


</div>
@endsection
