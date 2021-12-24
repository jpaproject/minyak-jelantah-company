@extends('app')

@section('container')

<style>
 html, body {
        max-width: 100%;
        overflow-x: hidden;
    }
    .mulai {
        text-align: center;
        background: #029B4B;
        box-shadow: 0px 12px 32px rgba(2, 155, 75, 0.5);
        border-radius: 10px;
    }
    .urutkan{
        background-color: transparent; 
        color:#029B4B;
        border :1px solid #029B4B;
        border-radius:5px;
    }
    .live{
        width: 292px;
        height: 8px;
        background-color: #3eb65f;
    }

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
        font-style: normal;
        font-weight: 700;
        font-size: 40px;
        line-height: 40px;
        color: #029B4B;
        margin-bottom:8px;
    } 

    .statistic{
        width: 1060px; 
        margin-top:50px;
        border-radius: 20px;
        box-shadow: 0px 8px 100px 0px #00000014;

    }

    .date{
        border:1px solid #029B4B;
        border-radius: 8px;
        padding: 16px 0px 0px 0px;
        background: white;
        box-shadow: 0px 8px 20px 0px #63ED7A80;
        width: 120px;
        height: 50px;

        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 15px;
        letter-spacing: 0px;
        text-align: center;

    }

    .title{
        font-family: 'Montserrat', sans-serif;
        font-size: 23px;
        font-style: normal;
        font-weight: 600;
        line-height: 24px;
        letter-spacing: 0em;
        text-align: left;

    }

    .arah1{
        margin-right: 100px;
    }
    .arah2{
        margin-left: 100px;
    }
    .seratus{
        font-size: 20px;
        color: #262626;
        font-weight: 500

    }

    @media only screen and (min-width:1366px){
        .mobile-chart{
            display:none;
        }
        #myChart2{
            display:none;
        }
    }

    @media screen and (min-width:280px) and (max-width:319px){
        .judul{
            font-size:24px;
            margin-top:30px;
        }
        .live{
            width: 180px;
            height: 8px;
            margin-bottom: 70px;
        }
        .btn-date{
            width: 20px;
            padding: 10px 15px 10px 15px;
            position: relative;
            top: 25px;
            background: white;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: #029B4B;
        }
        .btn-date:hover{
            margin-top:30px;
            background: #029B4B;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: white;
            
        }
        .arah1{
            margin-right: 50px;
        }
        .arah2{
            margin-left: 50px;
        }
        .title{
            font-size: 20px;
        }
        .dateymw{
            display:none;
        }
        .week{
            display:none;
        }
        .filter{
            margin-bottom:40px;
        }
        #myChart{
            display:none;
        }
        .card-body{
            display:none;
        }
        .judul1{
            font-size: 25px;
        }
        .garis7{
            width: 230px;
        }
        .jelantah-mitra{
            font-size: 18px
        }
    }


    @media screen and (min-width:320px) and (max-width:359px){
        .judul{
            font-size:20px;
            margin-top:30px;
        }
        .live{
            width: 138px;
            height: 8px;
            margin-bottom: 70px;
        }
        .btn-date{
            width: 20px;
            padding: 10px 15px 10px 15px;
            position: relative;
            top: 25px;
            background: white;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: #029B4B;
        }
        .btn-date:hover{
            margin-top:30px;
            background: #029B4B;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: white; 
        }
        .arah1{
            margin-right: 50px;
        }
        .arah2{
            margin-left: 50px;
        }
        .title{
            font-size: 20px;
        }
        .dateymw{
            display:none;
        }
        .week{
            display:none;
        }
        .filter{
            margin-bottom:40px;
        }
        #myChart{
            display:none;
        }
        .card-body{
            display:none;
        }
        .garis7{
            width: 290px;
        }
        .seratus{
            font-size: 20px;
        }
        .judul1{
            font-size:24px;
            margin-top:10px;
        }
        .live{
            width: 180px;
        }
        .jelantah-mitra{
            font-size: 15px;
        }
    }

    @media screen and (min-width:360px) and (max-width:375px){
        .judul{
            font-size:24px;
            margin-top:30px;
        }
        .judul1{
            font-size:25px;
        }
        .live{
            width: 180px;
            height: 8px;
            margin-bottom: 70px;
        }
        .btn-date{
            width: 20px;
            padding: 10px 15px 10px 15px;
            position: relative;
            top: 30px;
            background: white;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: #029B4B;
        }
        .btn-date:hover{
            margin-top:30px;
            background: #029B4B;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: white;
            
        }

        .arah1{
            margin-right: 80px;
        }
        .arah2{
            margin-left: 80px;
        }
        .title{
            font-size: 20px;
        }
        .dateymw{
            display:none;
        }
        .week{
            display:none;
        }
        .filter{
            margin-bottom:40px;
        }
        #myChart{
            display:none;
        }
        .card-body{
            display:none;
        }
        .garis7{
            width: 349px;
        }
        .jelantah-mitra{
            font-size: 20px
        }
    }

    @media screen and (min-width:375px) and (max-width:410px){
        .judul{
            font-size:24px;
            margin-top:30px;
        }
        .live{
            width: 180px;
            height: 8px;
            margin-bottom: 70px;
        }
        .btn-date{
            width: 20px;
            padding: 10px 15px 10px 15px;
            margin-top:30px;
            background: white;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: #029B4B;
        }
        .btn-date:hover{
            margin-top:30px;
            background: #029B4B;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: white;
            
        }
        .arah1{
            margin-right: 80px;
        }
        .arah2{
            margin-left: 80px;
        }
        .title{
            font-size: 20px;
        }
        .dateymw{
            display:none;
        }
        .week{
            display:none;
        }
        .filter{
            margin-bottom:40px;
        }
        #myChart{
            display:none;
        }
        .card-body{
            display:none;
        }
         .garis7{
            width: 355px;
        }
        .judul1{
            font-size:25px;
            margin-top:30px;
        }
    }

    @media screen and (min-width:411px) and (max-width:500px){
        .judul{
            font-size:25px;
            margin-top:30px;
        }
        .live{
            width: 180px;
            height: 8px;
            margin-bottom: 70px;
        }
        .btn-date{
            width: 20px;
            padding: 10px 15px 10px 15px;
            position: relative;
            top: 25px;
            background: white;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: #029B4B;
        }
        .btn-date:hover{
            margin-top:30px;
            background: #029B4B;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: white;
            
        }
        .arah1{
            margin-right: 90px;
        }
        .arah2{
            margin-left: 90px;
        }
        .title{
            font-size: 20px;
        }
        .dateymw{
            display:none;
        }
        .week{
            display:none;
        }
        .judul1{
            font-size:25px;
        }
        .dukung{
            width: 300px;
            height: 8px;
        }
        .filter{
            margin-bottom:40px;
        }
        #myChart{
            display:none;
        }
        .card-body{
            display:none;
        }
         .garis7{
            width: 360px;
        }
    }

    @media screen and (min-width:414px) and (max-width:500px){
        .judul{
            font-size:25px;
            margin-top:30px;
        }
        .judul1{
            font-size: 30px;
        }
        .live{
            width: 225px;
            height: 8px;
            margin-bottom: 70px;
        }
        .btn-date{
            width: 20px;
            padding: 10px 15px 10px 15px;
            margin-top:30px;
            background: white;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: #029B4B;
        }
        .btn-date:hover{
            margin-top:30px;
            background: #029B4B;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: white;
            
        }
        .arah1{
            margin-right: 90px;
        }
        .arah2{
            margin-left: 90px;
        }
        .title{
            font-size: 20px;
        }
        .dateymw{
            display:none;
        }
        .week{
            display:none;
        }
        .filter{
            margin-bottom:40px;
        }
        #myChart{
            display:none;
        }
        .card-body{
            display:none;
        }
        .garis7{
            width: 360px;
        }
    }

    @media screen and (min-width:500px) and (max-width:764px){
        .judul{
            font-size:24px;
            margin-top:30px;
        }
        .live{
            width: 180px;
            height: 8px;
            margin-bottom: 70px;
        }
        .btn-date{
            width: 20px;
            padding: 10px 15px 10px 15px;
            margin-top:30px;
            background: white;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: #029B4B;
        }
        .btn-date:hover{
            margin-top:30px;
            background: #029B4B;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: white;
            
        }
        .arah1{
            margin-right: 50px;
        }
        .arah2{
            margin-left: 50px;
        }
        .title{
            font-size: 20px;
        }
        .dateymw{
            display:none;
        }
        .week{
            display:none;
        }
        .filter{
            margin-bottom:40px;
        }
        #myChart{
            display:none;
        }
        .card-body{
            display:none;
        }
         .garis7{
            width: 360px;
        }
        .judul1{
            font-size:25px;
            margin-top:30px;
        }
    }

    @media screen and (min-width:540px) and (max-width:767px){
        .judul{
            font-size:24px;
            margin-top:30px;
        }
        .live{
            width: 180px;
            height: 8px;
            margin-bottom: 70px;
        }
        .btn-date{
            width: 20px;
            padding: 10px 15px 10px 15px;
            position: relative;
            top: 25px;
            background: white;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: #029B4B;
        }
        .btn-date:hover{
            margin-top:30px;
            background: #029B4B;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: white;
            
        }
        .arah1{
            margin-right: 50px;
        }
        .arah2{
            margin-left: 50px;
        }
        .title{
            font-size: 20px;
        }
        .dateymw{
            display:none;
        }
        .week{
            display:none;
        }
        .filter{
            margin-bottom:40px;
        }
        #myChart{
            display:none;
        }
        .card-body{
            display:none;
        }
         .garis7{
            width: 360px;
        }
        .judul1{
            font-size:25px;
            margin-top:30px;
        }
        .jelantah-mitra{
            font-size: 20px
        }
    }


    @media screen and (min-width:768px) and (max-width:1365px){
        .mulai{
            padding: 20px 30px 20px 30px;
            font-size: 20px;
        }   
        
        .judul{
            font-size:24px;
            margin-top:30px;
        }
        .live{
            width: 180px;
            height: 8px;
            margin-bottom: 70px;
        }   
        .btn-date{
            width: 20px;
            padding: 10px 15px 10px 15px;
            position: relative;
            top: 25px;
            background: white;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: #029B4B;
        }
        .btn-date:hover{
            margin-top:30px;
            background: #029B4B;
            border: 2px solid #029B4B;
            border-radius: 8px;
            color: white; 
        }
        .arah1{
            margin-right: 50px;
        }
        .arah2{
            margin-left: 50px;
        }
        .title{
            font-size: 20px;
        }
        .dateymw{
            display:none;
        }
        .week{
            display:none;
        }
        .filter{
            margin-bottom:40px;
        }
        .dukung{
            width: 370px;
            height: 8px;
        }
        #myChart{
            display:none;
        }
        .card-body{
            display:none;
        }
         .garis7{
            width: 360px;
        }
        .judul1{
            font-size:25px;
            margin-top:30px;
        }
    }

    .default-button {
    position: relative;
    overflow: hidden;
    align-items:center;
    border-radius: 0;
    display: inline-block;
    color: white;
    -webkit-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    background-color: #029B4B;
    font-size: 15px;
    font-weight: 500;
    }

    .default-button span {
        position: relative;
        z-index: 9
    }

    .default-button i {
        position: relative;
        top: 2px;
        margin-left: 2px
    }

    .default-button::before {
        content: '';
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        position: absolute;
        border-radius: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        background-color: black
    }

    .default-button:hover {
        color: white
    }

    .default-button:hover::before {
        width: 300%;
        height: 300%
    }
        .default-button2 {
        position: relative;
        overflow: hidden;
        padding: 15px 10px 25px 10px;
        border-radius: 0;
        display: inline-block;
        color: #029B4B;
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        background-color: white;
        font-size: 15px;
        font-weight: 500;
        font-family: 'Monserrat', sans-serif
    }

    .default-button2 span {
        position: relative;
        z-index: 9
    }

    .default-button2 i {
        position: relative;
        top: 2px;
        margin-left: 2px
    }

    .default-button2::before {
        content: '';
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        position: absolute;
        border-radius: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        background-color: #029B4B
    }

    .default-button2:hover {
        color: white
    }

    .default-button2:hover::before {
        width: 300%;
        height: 300%
    }

</style>

<section style="margin-top: 60px">
<div class="service pb-30 pt-70 ">
    <div class="container">
        <h2 class="judul1"><center>LIVE STATISTIK</center></h2>
        <center><div class="live"></div></center>
    </div>
</div>
<center>

    {{-- mobile chart  --}}


<div class="mobile-chart card">
    <div class="row filter">
        <div class="col-12">
            <a class="btn-date btn-date1 mr-3" href="">Week</a>
            <a class="btn-date btn-date1 mr-3" href="">Month</a>
            <a class="btn-date btn-date1" href="">Year</a>
        </div>
    </div>

    <div class="row mt-3 mb-3">
        <div class="col-lg-12">
            <center>
            <a href="">
                <i class="far fa-arrow-alt-circle-left fa-2x arah1"></i>
            </a>
            <span class="title">Week</span>
            <a href="">
                <i class="far fa-arrow-alt-circle-right fa-2x arah2"></i>
            </a>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="myChart2" ></div>
        </div>
    </div>
    <div class="row justify-content-evenly">
        <div class="col-4">
            <p class="" style="font-family: Montserrat; font-style: normal; font-weight: 600; font-size: 20px; line-height: 24px;">3000</p>
        </div>
        <div class="col-4">
            <p style="font-family: Montserrat; font-style: normal; font-weight: 600; font-size: 20px; line-height: 24px;">244</p>
        </div>
    </div>

    <div class="row justify-content-evenly">
        <div class="col-4">
            <p style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 14px; line-height: 17px;">This Year</p>
        </div>
        <div class="col-4">
            <p style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 14px; line-height: 17px;">This Month</p>
        </div>
    </div>
</div>
{{-- end mobile chart --}}


<div class="card statistic">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="row dateymw">
                    <div class="col-lg-2 mt-3">
                        <span class="title">Statistik</span>
                    </div>
                    <div class="col-lg-8">
                        <a href="" class="default-button2 date" style="border-radius: 8px">
                            <span>Week</span>
                        </a>
                        <a href="" class="default-button2 date ml-2" style="border-radius: 8px">
                            <span>Month</span>
                        </a>
                        <a href="" class="default-button2 date ml-2" style="border-radius: 8px">
                            <span>Year</span>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="" class="default-button" style="border-radius: 4px; width: 32px; height: 32px; padding-top: 4px; margin-top: 7px; background-color: #3EB65F">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr style="border: 1px solid black">
        <div class="row week" style="margin-bottom: 20px;">
            <div class="col-lg-12">
                <center>
                <a href="">
                    <i class="far fa-arrow-alt-circle-left fa-2x arah1"></i>
                </a>
                <span class="title">Week</span>
                <a href="">
                    <i class="far fa-arrow-alt-circle-right fa-2x arah2"></i>
                </a>
                </center>
            </div>
        </div>
            <div id="myChart"></div>
    </div>
</div>
</center>
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
                                    <span class="seratus mb-4">JELANTAH HEROES</span>
                                    <div class="d-flex justify-content-center"><a class="default-button join" href=""><span style="position:relative; top:15px; font-size: 20px; font-weight: 500"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <span class="seratus mb-4">JOIN MITRA</span>
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


    <script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    
    Highcharts.chart('myChart', {
    chart: {
        type: 'spline'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['2010', '2011', '2012', '2013', '2014', '2015',
            '2016', '2017', '2018', '2019', '2020', '2021']
    },
    yAxis: {
        title: {
            text: 'Temperature'
        },
        labels: {
            formatter: function () {
                return this.value + '°';
            }
        }
    },
    tooltip: {
        crosshairs: true,
        shared: true
    },
    plotOptions: {
        spline: {
            marker: {
                radius: 4,
                lineColor: '#666666',
                lineWidth: 1
            }
        }
    },
    series: [{
        name: 'Jelantah Heroes',
        marker: {
            symbol: 'square'
        },
        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
            y: 26.5,
            marker: {
                symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
            }
        }, 23.3, 18.3, 13.9, 9.6]

    }, {
        name: 'Aksi Sosial',
        marker: {
            symbol: 'diamond'
        },
        data: [{
            y: 3.9,
            marker: {
                symbol: 'url(https://www.highcharts.com/samples/graphics/snow.png)'
            }
        }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }]
});
</script>

{{-- mobile-chart --}}
<script>
    
    Highcharts.chart('myChart2', {
    chart: {
        type: 'spline'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Temperature'
        },
        labels: {
            formatter: function () {
                return this.value + '°';
            }
        }
    },
    tooltip: {
        crosshairs: true,
        shared: true
    },
    plotOptions: {
        spline: {
            marker: {
                radius: 4,
                lineColor: '#666666',
                lineWidth: 1
            }
        }
    },
    series: [{
        name: 'Tokyo',
        marker: {
            symbol: 'square'
        },
        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
            y: 26.5,
            marker: {
                symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
            }
        }, 23.3, 18.3, 13.9, 9.6]

    }, {
        name: 'London',
        marker: {
            symbol: 'diamond'
        },
        data: [{
            y: 3.9,
            marker: {
                symbol: 'url(https://www.highcharts.com/samples/graphics/snow.png)'
            }
        }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }]
});
</script>
{{-- end mobile chart --}}
@endsection
