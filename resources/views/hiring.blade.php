@extends('layouts.app')

@section('content')

<div class="container">

    <div id="hiring_banner" class="row bg-image">
        <div id="title" class="col-md-6">
            <h1>
                Đưa sự nghiệp<br>
                của bạn lên<br>
                tầm cao mới</h1>
        </div>

    </div>

    
    <hr>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <p id="hiring_intro" class="h5">
                Chúng tôi luôn tìm kiếm ứng viên tài năng, muốn đồng hành lâu dài và cùng nhau phát triển, vượt qua thử thách trong quá trình theo đuổi mục tiêu chung. <br>            
            </p>
    </div>        
    </div>


    <hr>
    <div id="hiring_jobs" class="row" style="--i:#F4F7FE">
        <div id="jobs-description" class="col-md-6">
            <p id="jobs-title" class="h3">
                1. Bán hàng và tiếp thị
            </p>

            <div id="jobs-Requirement">
                <div id="header">
                    <p>
                    Job Description:
                    </p>
                </div>
                
                <div id="task">
                    <p>
                    Ability to establish and develop the market segments and generating new businesses through new channel/customers.
                    <br>Ability to lead a sales team by providing guidance, training and mentorship, creating sales plans, analyzing data, assigning sales territories and building the team.
                    <br>Must have experience in customer relationship management and able to establish effective communication and interactive with customer and product manufacturers.
                    <br>Must have clear and professional communication in both written and oral skills.
                    <br>Ability to think and work independently to meet designated goals and achieve sales quota
                    </p>
                </div>

                <div id="header">
                    <p>
                    Job Requirements: 
                    </p>
                </div>
                
                <div id="task">
                    <p>
                    Minimum 5 Years’ experience in the related Commercial Audio Visual Industries.
                    <br>
                    Proficient with Microsoft office ( words, Powerpoint, Excel, Outlook).
                    </p>
                </div>
                
            </div>
            
        </div>
        
        <div id="cover-image" class="col-md-6 d-sm-none d-md-block">
            <img 
                src="{{ asset('img/hiring/Sale and Marketing.png') }}"
                style="width:100%"
                alt="Sale and Marketing.png">
        </div>
    </div>

    <div id="hiring_jobs" class="row" style="--i:#F6F5F1">
        <div id="jobs-description" class="col-md-6">
            <p id="jobs-title" class="h3">
            2. TECHNICIAN (SERVICE & MAINTENANCE)
            </p>
        
            <div id="jobs-Requirement">
                <div id="header">
                    <p>
                    Job Description:
                    </p>
                </div>
                
                <div id="task">
                    <p>
                    Troubleshooting and maintenance of AV and VC equipment
                    Standby duties
                    Other ad-hoc duties as assigned
                    </p>
                </div>

                <div id="header">
                    <p>
                    Job Requirements: 
                    </p>
                </div>
                
                <div id="task">
                    <p>
                    Good interpersonal and communication skills.
                    Non-experienced candidates are welcome to apply.
                </div>
                
            </div>
            
        </div>
        
        <div id="cover-image" class="col-md-6 d-sm-none d-md-block">
            <img 
                src="{{ asset('img/hiring/R&D.png') }}"
                style="width:100%"
                alt="Sale and Marketing.png">
        </div>
    </div>

    <div id="hiring_jobs" class="row" style="--i:#F4F7FE">
        <div id="jobs-description" class="col-md-6">
            <p id="jobs-title" class="h3">
                3. ADMINISTRATIVE ASSISTANT
            </p>

            <div id="jobs-Requirement">
                <div id="header">
                    <p>
                    Job Description:
                    </p>
                </div>
                
                <div id="task">
                    <p>
                    Procure and manage office supplies and inventories

                    In-charge of office facilities management including operation related maintenance and contracts matters

                    Assist in company safety matters (safe management measures)

                    Any other ad-hoc duties assigned by the management.

                    Experience in ISO preferred
                    </p>
                </div>

                <div id="header">
                    <p>
                    Job Requirements: 
                    </p>
                </div>
                
                <div id="task">
                Minimum GCE ‘O’ Level and above

                3-5 years of working experience

                Good command in written and spoken English

                Proficient with all MS Office Applications

                Possess positive work attitude and good time management skill

                Able to start immediate or within short notice period
                </div>
                
            </div>
            
        </div>
        
        <div id="cover-image" class="col-md-6 d-sm-none d-md-block">
            <img 
                src="{{ asset('img/hiring/Management.png') }}"
                style="width:100%"
                alt="Sale and Marketing.png">
        </div>
    </div>

    <div id="hiring_jobs" class="row" style="--i:#F6F5F1">
        <div id="jobs-description" class="col-md-6">
            <p id="jobs-title" class="h3">
            4. SYSTEMS ENGINEER
            </p>

            <div id="jobs-Requirement">
                <div id="header">
                    <p>
                    Job Description:
                    </p>
                </div>
                
                <div id="task">
                    <p>
                    System configuration, Testing & Commissioning of Integrated Audio Visual and Video conferencing solutions

                    Study the schematic to understand the technical & functional requirement to implement each solution

                    Conduct end user training to end user on how to use the Solution implemented

                    Troubleshoot and debug AV systems

                    Updating of firmware

                    Assist in before and after sales services

                    Perform other duties / tasks as assigned
                    </p>
                </div>

                <div id="header">
                    <p>
                    Job Requirements: 
                    </p>
                </div>
                
                <div id="task">
                    <p>
                    Diploma or Degree in Audio-Visual, Information Technology, Electronics, or equivalent

                    Minimum 1-2 years of experience in the AV industry

                    Experience in some of the product like Videowall, LED & LCD Display, Digital Sound Processor (DSP), Amplifier, Speaker, video conferencing, Audio Visual Switches

                    Experience in similar renowned AV brand like Samsung, Crestron, Extron, BOSE, Ev, Poly, Cisco, Logitech, etc

                    Proficient in programming languages

                    Proficient in control system design

                    Ability to work independently as well as in a team

                    Good interpersonal and communication skills
                </div>
                
            </div>
            
        </div>
        
        <div id="cover-image" class="col-md-6 d-sm-none d-md-block">
            <img 
                src="{{ asset('img/hiring/Designer.png') }}"
                style="width:100%"
                alt="Sale and Marketing.png">
        </div>
    </div>
   

    <hr>

    <!--    Form gửi CV & Note các công việc cần chú ý khi nộp CV   -->


</div>

@endsection