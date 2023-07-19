@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row bg-image d-flex align-content-center" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); height: 120px">
        <div class="col d-flex justify-content-center">
            <p class="h1 text-uppercase"><i class="bi bi-people"></i> Đối tác</p>
        </div>
    </div>
    
    <hr>

    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <p class="h4">Drive flexibility, productivity, collaboration and innovation through best-in-breed communication and collaboration technologies</p>
    </div>        
    </div>

    <hr>
    
    
    <!-- AUDIO AUDIO AUDIO -->


    <div class="row mb-5" > <!-- margin bottom: $spacer*3 -->
        <!-- Caret banner Seperation -->
        <div class="row text-uppercase d-flex justify-content-center"> 
            <div class="col-2">
                <hr style="border-top: 6px dotted;">
            </div>
            <div class="col-1 d-flex justify-content-center align-content-center"><i class="bi bi-caret-left" style="font-size:28px";></i></div>
            <div class="col-4 d-flex" style="background-color:#E6E6E6;text-align:center; align-content:center; justify-content:center;z-index:1">
                <p style="margin-bottom:0px; font-size:24px;">
                    <b>Audio</b>
                </p>
            </div>
            <div class="col-1 d-flex justify-content-center align-content-center"><i class="bi bi-caret-right" style="font-size:28px";></i></div>
            <div class="col-2">
                <hr style="border-top: 6px dotted;">
            </div>
        </div>
        <!-- END of Caret banner Seperation -->

        <!-- Audio Partner Logos -->
        <div class="row gy-3">
            <div class="col d-flex justify-content-center">
                <div id="partner-logos-card" class="card">
                <img src="https://www.soundandcommunications.com/wp-content/uploads/2020/04/extron-logo.png" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Extron</h5>
                            <a href="https://www.extron.com/" target="_blank">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>
                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Extron products are purpose-built to work together, creating complete integrated technology solutions that work seamlessly with your IT infrastructure. </p>
                    </div>                    
                </div>
                </div>                  
            </div>

            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="data:image/png;base64,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" alt="Logo">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Biamp</h5>
                            <a href="biamp.com">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="https://www.baionline.com/wp-content/uploads/2017/02/BAI-Online-Manufacturers-_0125_Atlas.jpg" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Atlat IED</h5>
                            <a href="https://www.atlasied.com/">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="https://cdn.shopify.com/s/files/1/0083/2412/0631/files/one-systems.png?v=1581076247" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">One System</h5>
                            <a href="https://www.onesystems.com/">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="data:image/png;base64,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" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Electro Voice</h5>
                            <a href="https://electrovoice.com/">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="https://clockaudio.com/Portals/0/Images/Clockaudio_ProfessionalMicrophoneSystems_ClearlyDifferent_003.png?ver=2018-07-23-191727-620" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Clock Audio</h5>
                            <a href="https://clockaudio.com/">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="https://cdn.tatmart.com/images/feature_variant/47/Bosch.jpg" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Bosch</h5>
                            <a href="https://www.bosch.com.vn/">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
        </div>
        <!-- END of Audio Partner Logos -->
    </div>
    
    
    <!-- VIDEO VIDEO VIDEO -->


    <div class="row mb-5"> <!-- margin bottom: $spacer*3 -->
        <!-- Caret banner Seperation -->
        <div class="row text-uppercase d-flex justify-content-center"> 
            <div class="col-2">
                <hr style="border-top: 6px dotted;">
            </div>
            <div class="col-1 d-flex justify-content-center align-content-center"><i class="bi bi-caret-left" style="font-size:28px";></i></div>
            <div class="col-4 d-flex" style="background-color:#E6E6E6;text-align:center; align-content:center; justify-content:center;z-index:1">
                <p style="margin-bottom:0px; font-size:24px;">
                    <b>Video</b>
                </p>
            </div>
            <div class="col-1 d-flex justify-content-center align-content-center"><i class="bi bi-caret-right" style="font-size:28px";></i></div>
            <div class="col-2">
                <hr style="border-top: 6px dotted;">
            </div>
        </div>
        <!-- END of Caret banner Seperation -->

        <!-- Video Partner Logos -->
        <div class="row gy-3">
            <div class="col d-flex justify-content-center">
                <div id="partner-logos-card" class="card">
                <img src="https://www.soundandcommunications.com/wp-content/uploads/2020/04/extron-logo.png" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Extron</h5>
                            <a href="https://www.extron.com/" target="_blank">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>
                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Extron products are purpose-built to work together, creating complete integrated technology solutions that work seamlessly with your IT infrastructure. </p>
                    </div>                    
                </div>
                </div>                  
            </div>

            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/76.jpg" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Extron</h5>
                            <a href="extron.com">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/76.jpg" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Extron</h5>
                            <a href="extron.com">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/76.jpg" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Extron</h5>
                            <a href="extron.com">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
        </div>
        <!-- END of Video Partner Logos -->
    </div>


        <!-- ELV ELV ELV -->


        <div class="row mb-5"> <!-- margin bottom: $spacer*3 -->
        <!-- Caret banner Seperation -->
        <div class="row text-uppercase d-flex justify-content-center"> 
            <div class="col-2">
                <hr style="border-top: 6px dotted;">
            </div>
            <div class="col-1 d-flex justify-content-center align-content-center"><i class="bi bi-caret-left" style="font-size:28px";></i></div>
            <div class="col-4 d-flex" style="background-color:#E6E6E6;text-align:center; align-content:center; justify-content:center;z-index:1">
                <p style="margin-bottom:0px; font-size:24px;">
                    <b>extra low voltage</b>
                </p>
            </div>
            <div class="col-1 d-flex justify-content-center align-content-center"><i class="bi bi-caret-right" style="font-size:28px";></i></div>
            <div class="col-2">
                <hr style="border-top: 6px dotted;">
            </div>
        </div>
        <!-- END of Caret banner Seperation -->

        <!-- ELV Partner Logos -->
        <div class="row gy-3">
            <div class="col d-flex justify-content-center">
                <div id="partner-logos-card" class="card">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/76.jpg" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Extron</h5>
                            <a href="extron.com">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>
                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Extron products are purpose-built to work together, creating complete integrated technology solutions that work seamlessly with your IT infrastructure. </p>
                    </div>                    
                </div>
                </div>                  
            </div>

            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/76.jpg" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Extron</h5>
                            <a href="extron.com">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/76.jpg" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Extron</h5>
                            <a href="extron.com">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
            <div class="col d-flex justify-content-center">
            <div id="partner-logos-card" class="card">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/76.jpg" alt="...">              
                <div id="partner-logos-card-body" class="card-body">
                    <div id="short-intro" class="row border-bottom mb-1">
                        <div class="col-8"> <!-- Partner Name, Website-->
                            <h5 class="text-uppercase">Extron</h5>
                            <a href="extron.com">Visit Website</a>
                        </div>
                        <div id="partner-flag" class="col-4"> <!-- Partner Flag-->
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png" alt="FLAG">
                        </div>
                    </div>

                    <div id="short-info" class="row"> <!-- Partner Info Desc -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>                    
                </div>
                </div>    
            </div>
        </div>
        <!-- END of ELV Partner Logos -->
    </div>

</div>

@endsection