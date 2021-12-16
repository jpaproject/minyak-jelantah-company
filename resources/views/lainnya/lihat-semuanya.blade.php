@extends('app')

@section('container')
<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden;
    }
    .doc {
        text-align: left;
        font-size: 14px;
        font-family: 'Poppins',sans-serif;
        font-weight: 400;
        line-height: 22px;
        color: #595959;

    }
    .doctitle {
        text-align: left;
        font-size: 20px;
        font-family: 'Poppins',sans-serif;
        font-weight: 500;
        line-height: 22px;
        color: #262626;

    }

     /* Dukung Jelantah4Change */
     .jelantah-card{
    text-align: center;
    padding: 30px 25px;
    border-radius: 12px;
    margin-top: 30px;
    -webkit-box-shadow: 0 0 15px -2px #ddd;
    box-shadow: 0 0 15px -2px #ddd;
    }

    .judul{
        font-family: 'Poppins', sans-serif;
        color: #029B4B;
        font-style: bold;
        font-weight: 700;
        font-size: 40px;
        line-height: 40px; 
    }

    .jelantah-card h3{
    font-size: 24px;
    margin-bottom: 5px;
    }

    .jelantah-card a{
    font-weight: 600;
    }

    .content7{
        height: auto;
        margin-top: 100px; 
        margin-bottom: 100px;
    }
    .garis7 {
        width: 580px;
        height: 8px;
        background-color: #3eb65f;
    }
    .join {
        width: 164px;
        height: 60px;
        font-size: 20px;
        color: white;
        background: #029B4B;
        box-shadow: 0px 10px 45px rgba(2, 155, 75, 0.5);
        border-radius: 10px !important;
    }
    .jelantah-mitra {
        /* Large heading 30/bold */

        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 38px;
        /* identical to box height, or 127% */

        text-align: center;

        /* Neutral/10 */

        color: #262626;

    }
    .judul1{
        font-size: 38px; 
        font-weight: 500;
        color: #434343;   
    }
    .judul2{
        font-style: normal;
        font-weight: bold;
        font-size: 40px;
        line-height: 40px;
        color: #029B4B;
        margin-bottom:8px;
    }
    .list{
        background: #029B4B;
        color: white;
        padding: 8px;
    }
    @media only screen and (min-width:1366px){
        .mobile-footer{
            display:none;
        }
    }
   
  

</style>
<section style="margin-top: 80px">
<div class="container btn-back" style="margin-bottom: 48px; margin-top: 48px">
    <div class="col-lg-12">
        <div class="row">
        <div class="col-4" style="">
        <a href="{{ route('dokumentasi') }}">
            <i class="far fa-arrow-alt-circle-left fa-2x ">
            <span style="font-family: Poppins;font-size: 24px;font-style: normal;font-weight: 500;
            line-height: 32px;letter-spacing: 0em;text-align: left; margin: 10px 0px 0px 10px;">Kembali</span>
        </i>
        </a>
        </div>
        <div class="col-8"></div>
        </div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-center judul1 mt-3">Festival Peduli Sampah Nasional (FPSN) 2021</div>
            </div>
        </div>
    </div>

<section style="padding-top:50px; width: 100%">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="">
                    <div class="tab-content">
                        <div class="row" style="">
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12" style="padding: 0px 10px 0px 0px"> 
                                <img 
                                    style="width: 589px; height: 443px; border-radius: 10px;"
                                    src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d2.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 img-fluid" style="width:570px;height:443px; padding: 0px 12px 0px 12px">
                                <div class="row">
                                    <div class="col-6" style="margin: 0px 0px 10px 0px; padding:0px 10px 0px 10px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d4.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-6" style="margin: 0px 0px 10px 0px; padding:0px 10px 0px 0px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d3.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6" style="margin: 10px 0px 10px 0px; padding:0px 10px 0px 10px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:211px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d5.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-6" style="margin: 10px 0px 10px 0px; padding:0px 10px 0px 0px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d6.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Mario Jela Pemasaran --}}

<section style="padding-top:50px; width:100%;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="">
                    <div class="tab-content">
                        <div class="row" style="">
                            

                            <div class="col-lg-6 img-fluid" style="width:570px;height:443px; padding: 0px 12px 0px 12px">
                                <div class="row">
                                    <div class="col-6" style="margin: 0px 0px 10px 0px; padding:0px 10px 0px 10px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d4.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-6" style="margin: 0px 0px 10px 0px; padding:0px 10px 0px 0px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d3.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6" style="margin: 10px 0px 10px 0px; padding:0px 10px 0px 10px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:211px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d5.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-6" style="margin: 10px 0px 10px 0px; padding:0px 10px 0px 0px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d6.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12" style="padding: 0px 10px 0px 0px"> 
                                <img 
                                style="width: 589px; height: 443px; border-radius: 10px;"
                                src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d2.png') }}" class="img-fluid" alt="">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--end Mario Jela Pemasaran --}}

{{-- Mario Jela Batch --}}
<section style="padding-top:50px; width: 100%">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="">
                    <div class="tab-content">
                        <div class="row" style="">
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12" style="padding: 0px 10px 0px 0px"> 
                                <img 
                                    style="width: 589px; height: 443px; border-radius: 10px;"
                                    src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d2.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 img-fluid" style="width:570px;height:443px; padding: 0px 12px 0px 12px">
                                <div class="row">
                                    <div class="col-6" style="margin: 0px 0px 10px 0px; padding:0px 10px 0px 10px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d4.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-6" style="margin: 0px 0px 10px 0px; padding:0px 10px 0px 0px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d3.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6" style="margin: 10px 0px 10px 0px; padding:0px 10px 0px 10px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:211px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d5.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-6" style="margin: 10px 0px 10px 0px; padding:0px 10px 0px 0px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d6.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- end Mario Jela Batch --}}


{{-- Pengelolaan --}}

<section style="padding-top:50px; width:100%;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="">
                    <div class="tab-content">
                        <div class="row" style="">
                            

                            <div class="col-lg-6 img-fluid" style="width:570px;height:443px; padding: 0px 12px 0px 12px">
                                <div class="row">
                                    <div class="col-6" style="margin: 0px 0px 10px 0px; padding:0px 10px 0px 10px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d4.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-6" style="margin: 0px 0px 10px 0px; padding:0px 10px 0px 0px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d3.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6" style="margin: 10px 0px 10px 0px; padding:0px 10px 0px 10px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:211px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d5.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-6" style="margin: 10px 0px 10px 0px; padding:0px 10px 0px 0px;">
                                        <img 
                                        style="border-radius: 12px; width:284px; height:212px;"
                                        src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d6.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12" style="padding: 0px 10px 0px 0px"> 
                                <img 
                                style="width: 589px; height: 443px; border-radius: 10px;"
                                src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI/d2.png') }}" class="img-fluid ml-2" alt="">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end Pengelolaan --}}
</section>

{{-- Dukung Jelantah --}}
    <div class="row">
        <div class="content7">
            <div class="title" style="margin-bottom: 48px;" data-aos="fade-up">
            <span style="margin-top:-50px;" class="judul"><center>DUKUNG JELANTAH4CHANGE</center></span>
            <center><div class="garis7"></div></center>
            </div>

                <div class="container" data-aos="fade-up">
                    <P class="jelantah-mitra">Dukung menjadi Jelantah Heroes / Mitra</P>
                </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JELANTAH HEROES</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button join" href=""><span style="position:relative; top:15px; font-size: 20px; font-weight: 500"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JOIN MITRA</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button join" href=""><span style="position:relative; top:15px; font-size: 20px; font-weight: 500">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End Dukung Jelantah --}}
@endsection