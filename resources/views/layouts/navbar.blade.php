<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://duyhoaphat.vn/images/logo-web-duyhoaphat1.jpg" alt="DHP Logo" style="height:inherit; width:auto">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->

            <li class="nav-item">
                <div class="btn-group">
                    <a href="/about" class="btn" type="button">
                    GIỚI THIỆU
                    </a>
                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="Introduction">
                        <a href="/solutions" style="text-decoration:none">
                        <button class="dropdown-item" type="button">Hành trình phát triển</button>
                        </a>
                        <a href="/solutions" style="text-decoration:none">
                        <button class="dropdown-item" type="button">Giải thưởng & chứng chận</button>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a href="/solutions" style="text-decoration:none">
                        <button class="dropdown-item" type="button">Chính sách & Quy định</button>
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <div class="btn-group">
                <a href="/solutions" class="btn" type="button">
                GIẢI PHÁP
                </a>
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a href="/solutions/audiovisual" style="text-decoration:none">
                        <button class="dropdown-item" type="button">Audio Visual</button>
                    </a>

                    <a href="/solutions/display" style="text-decoration:none">
                    <button class="dropdown-item" type="button">Giải pháp màn hình</button>
                    </a>
                    <a href="/solutions/security" style="text-decoration:none">
                    <button class="dropdown-item" type="button">Giải pháp an ninh</button>
                    </a>
                    
                    <div class="dropdown-divider"></div>

                    <a href="/solutions/othersolutions" style="text-decoration:none">
                    <button class="dropdown-item" type="button">Giải pháp khác</button>
                    </a>
                </div>
                </div>                           
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/projects">                            
                <button class="btn" type="button">
                DỰ ÁN
                </button>
                </a>                            
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/partners">                            
                <button class="btn" type="button">
                ĐỐI TÁC
                </button>
                </a>                            
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/news">                            
                <button class="btn" type="button">
                TIN TỨC
                </button>
                </a>                            
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/hiring">                            
                <button class="btn" type="button">
                TUYỂN DỤNG
                </button>
                </a>                            
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/contact">                            
                <button class="btn" type="button">
                LIÊN HỆ
                </button>
                </a>                            
            </li>

        </ul>
        </div>
    </div>
</nav>