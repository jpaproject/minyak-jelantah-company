@extends('app')

@section('container')
<style>
    html,body{
        overflow-x: hidden;
        max-width: 100%;
    }
    .bulat1{ 
        z-index: 0;
        width: 693px; 
        height: 693px; 
        position: relative;
        left: 863px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .bulat2{ 
        z-index: 2;
        width: 122px; 
        height: 122px; 
        bottom: 1224px;
        left: 825px;
        position: relative;
        background: #029B4B; 
        border-radius: 50%;
    }
    .donut{ 
        z-index: 3;
        width: 108px; 
        height: 108px;
        left: 1099px; 
        bottom: 832px;
        position: relative;
        border: 1vw solid #FFFFFF;
        border-radius: 50%;
    }
    
    .bulat3{ 
        z-index: 0;
        width: 183px; 
        height: 183px; 
        bottom: 1406px;
        right: 248px;
        position: relative;
        background: #029B4B; 
        border-radius: 50%;
    }
    .profil{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-profil{
        background:  #3EB65F;
        width: 250px;
        height: 10px
    }
    .video {
    position: relative;
    border-radius: 10px;
    }

    .video img {
        border-radius: 10px;
        -webkit-box-shadow: 0 0 10px -5px #c2c2c2;
        box-shadow: 0 0 10px -5px #c2c2c2;
        position: relative;
        margin-top: 50px;
        width: 100%
    }
    .video .video-play {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
    }

    .video .video-play a {
        width: 100px;
        height: 100px;
        font-size: 30px;
        border-radius: 50%;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: white;
        background-color: #029B4B;
        -webkit-box-shadow: 0 0 0 5px #029b4b;
        box-shadow: 0 0 0 5px #3EB65F;
    }

    .galeri{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-galeri{
        background: #3EB65F;
        width: 288px;
        height: 10px
    }
    .btn-more{
        background: #029B4B;
        color:white;
        padding: 15px 30px 15px 30px;
        border-radius:10px;
        margin-bottom: 100px;
    }

    .artikel{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-artikel{
        background: #3EB65F;
        width: 344px;
        height: 10px
    }
    .statistik{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-statistik{
        background: #3EB65F;
        width: 202px;
        height: 10px
    }
    .card{
        border-radius:12px !important; 
        box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
        transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
        cursor: pointer;
    }
    .card .isi-artikel {
        font-size: 24px;
        color: #434343;
        font-weight: 500;
        margin-bottom: 18px;
        position: relative;
        transition: 0.3s;
    }

    .recent-blog-posts .card:hover .isi-artikel{
        color: #029B4B;
    }
    .card:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }

    .post-box:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
    .card .post-date {
        font-size: 14px;
        font-weight: 500;
        color: #828282;
        display: block;
    }


    .contact-card {
    text-align: center;
    padding: 30px 25px;
    border-radius: 5px;
    margin-top: 30px;
    background: white;
    -webkit-box-shadow: 0 0 15px -2px #ddd;
    box-shadow: 0 0 15px -2px #ddd
    }

    .contact-card i {
        width: 80px;
        height: 60px;
        margin-bottom: 15px;
        border-radius: 5px;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-size: 30px;
        color: var(--whiteColor);
        background-color: var(--mainColor)
    }

    .kata{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-kata{
        background: #3EB65F;
        width: 283px;
        height: 10px
    }

    .img-tommy {
        border-radius: 100%;
        object-fit: cover;
        width: 100px;
        height: 100px;
    }
    .artikel-kami {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 40px;
        /* identical to box height, or 100% */

        text-align: left;


        color: #000000;
    }
    .profilkami {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 40px;
        /* identical to box height, or 100% */

        text-align: left;


        /* Color Pallete/Green 1 */

        color: #029B4B;
    }
    .tommy-desc {
        font-family: Poppins;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 22px;

        text-align: left;

        color: #595959;
    }

    .partner{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-partner{
        background: #3EB65F;
        width: 297px;
        height: 10px
    }
    .jelantah-tanya{
        font-size: 20px;
        color: #029B4B;
    }

    .qa{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-qa{
        background: #3EB65F;
        width: 426px;
        height: 10px
    }

    .jelantah-card{
    text-align: center;
    padding: 30px 25px;
    border-radius: 12px;
    margin-top: 30px;
    background-color: white;
    box-shadow: 0 0 15px -2px #ddd;
    }

    .judul{
        font-family: 'Poppins', sans-serif;
        color: #029B4B;
        font-style: bold;
        font-weight: 700;
        font-size: 40px;
        line-height: 40px; 
        margin-top:-50px;
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

    .bulat4{ 
        z-index: 0;
        width: 797px; 
        height: 797px; 
        position: relative;
        bottom: 12px;
        right: 407px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .content3{
        height:808px;
        margin-top: 200px;
    }
    .bulat5{ 
        z-index: 0;
        width: 634px; 
        height: 634px; 
        position: relative;
        top: 1059px;
        left: 1007px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    
    .komunitas{
        position: relative; bottom: 633px; width: 1200px
    }
    .full-komunitas{
        margin-top: 60px; height: 663px;
    }
    .gmb-komunitas{
        width: 475px; height:530px; border-radius:50px 0px 50px 0px; float: right;
    }
    .isi-komunitas{
        margin-top: 100px;
        width: 657px;
    }
    .konten-galeri{
        height: 800px
    }
    .gmb-galeri{
        width: 100%;
        height: 167px;
        border-radius: 10px
    }
    .galeri-kami{
        position: relative; bottom: 734px
    }
    .konten-artikel{
        position: relative; bottom: 810px;
    }
    .delpie{
        height: 436px;
    }
    .tita{
        height: 308px
    }
    .partner-kami{
        margin-top: 180px
    }
    .merk-terang{
        width:213px; height: 163px;
    }
    .merk-bumn{
        padding-top: 40px; width:400px; height: 110px;
    }
    .merk-waste{
        padding-top:36px; padding-left: 0px; padding-right: 0px; width:270px; height: 130px;
    }
    .merk-iluni{
        padding: 10px 0px 0px 20px; width: 200px; height: 200px
    }
    .merk-pertamina{
        padding-top:30px; width: 370px; height: 194px;
    }
    .merk-carbon{
        width: 211px; height: 182px;
    }
    .question{
        margin-top:150px
    }
    .card-qa{
        width: 100%;background:#FFFFFF;padding:10px; height: 90px
    }
    .title{
        margin-bottom: 48px;
    }
    .gmb-artikel{
        width: 780px; height: 400px; border-radius: 12px 0px 0px 12px ;
    }
    .container-artikel{
        padding-top: 101px; padding-right: 0px;
    }
    .date{
        font-size: 14px; text-align:left
    }
    
    @media only screen and (min-width:1024px) and (max-width: 1199px)
    {
        #header{
            padding: 20px;
        }
        .komunitas{
            width:980px
        }
        .delpie{
            height: 542px
        }
        .tita{
            height: 352px;
        }
        .bulat2{
            left: 540px
        }
        .donut{
            left: 876px
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        .recent-blog-posts .post-box .post-img{
            width: 696px;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1466px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 447px;
            bottom: 1158px;
            width: 100px; height: 100px;
            border: 4vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 30px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px;
            padding-left: 105px
        }
        .komunitas{
            width: 540px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px;
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 8px; 
        }
        .galeri{
            font-size: 35px;
        }
        .garis-galeri{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 35px;
        }
        .garis-partner{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 35px;
        }
        .garis-statistik{
            width: 170px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 35px;
        }
        .garis-kata{
            width: 245px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 35px;
        }
        .garis-qa{
            width: 368px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 280px;
        }
        .konten-galeri{
            height: 1260px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 350px;
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 0px 114px
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            padding: 0px 114px
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
            padding: 0px 114px
        }
        .merk-pertamina{
            width: 100%; height: 315px;
            padding: 0px 114px
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 350px;
            padding: 0px 114px

        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 350px;
            padding: 0px 114px
        }
        .accordion{
            margin-bottom: 20px
        }
        .judul{
            font-size: 26px
        }
        .garis7{
            width: 380px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:540px) and (max-width:767px)
    {
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1466px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 447px;
            bottom: 1158px;
            width: 100px; height: 100px;
            border: 4vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 30px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 540px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 8px; 
        }
        .galeri{
            font-size: 35px;
        }
        .garis-galeri{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 35px;
        }
        .garis-partner{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 35px;
        }
        .garis-statistik{
            width: 170px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 35px;
        }
        .garis-kata{
            width: 245px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 35px;
        }
        .garis-qa{
            width: 368px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 280px;
        }
        .konten-galeri{
            height: 1260px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 350px;
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 0px 50px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            padding: 0px 50px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
            padding: 0px 50px;
        }
        .merk-pertamina{
            width: 100%; height: 315px;padding: 0px 50px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 350px;
            padding: 0px 50px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 350px;
            padding: 0px 50px;
        }
        .accordion{
            margin-bottom: 20px
        }
        .judul{
            font-size: 26px
        }
        .garis7{
            width: 380px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
        .recent-blog-posts .post-box .post-img{
            width: 516px;
        }
    }
    @media only screen and (min-width:411px) and (max-width:539px)
    {
        .question{
            margin-top: 60px
        }
        .partner-kami{
            margin-top: 60px
        }
        .tmbl-lihat{
            position: relative;
            bottom: 172px
        }
        .hide-gmb{
            display: none;
        }
        .bulat4{
            display: none;
        }
        .galeri-kami{
            bottom: 0px;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1540px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 312px;
            bottom: 1223px;
            width: 100px; height: 100px;
            border: 4vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 30px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 411px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 8px; 
        }
        .galeri{
            font-size: 35px;
        }
        .garis-galeri{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 35px;
        }
        .garis-partner{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 35px;
        }
        .garis-statistik{
            width: 170px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 35px;
        }
        .garis-kata{
            width: 245px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 35px;
        }
        .garis-qa{
            width: 368px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 215px;
        }
        .konten-galeri{
            height: 1007px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 260px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 300px;
            padding: 0px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 310px;
        }
        .accordion{
            margin-bottom: 20px
        }
        .judul{
            font-size: 26px
        }
        .garis7{
            width: 380px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:375px) and (max-width:410px)
    {
        .question{
            margin-top: 60px
        }
        .partner-kami{
            margin-top: 60px
        }
        .tmbl-lihat{
            position: relative;
            bottom: 172px
        }
        .hide-gmb{
            display: none;
        }
        .bulat4{
            display: none;
        }
        .img-tommy{
            width: 90px; height: 90px
        }
        .tita{
            height: auto
        }
        .delpie{
            height: auto;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1540px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 260px;
            bottom: 1223px;
            width: 100px; height: 100px;
            border: 4vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 30px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 360px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 8px; 
        }
        .galeri{
            font-size: 35px;
        }
        .garis-galeri{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 35px;
        }
        .garis-kata{
            width: 247px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 35px;
        }
        .garis-statistik{
            width: 170px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 35px;
        }
        .garis-partner{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 35px;
        }
        .garis-qa{
            width: 150px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 215px;
        }
        .konten-galeri{
            height: 1007px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 260px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 300px;
            padding: 0px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 310px;
        }
        .accordion{
            margin-bottom: 20px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 325px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:360px) and (max-width:374px)
    {  
        .question{
            margin-top: 60px
        }
        .partner-kami{
            margin-top: 60px
        }
        .tmbl-lihat{
            position: relative;
            bottom: 172px
        }
        .hide-gmb{
            display: none;
        }
        .bulat4{
            display: none;
        }
        .img-tommy{
            width: 90px; height: 90px
        }
        .tita{
            height: auto
        }
        .delpie{
            height: auto;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1540px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 260px;
            bottom: 1223px;
            width: 100px; height: 100px;
            border: 4vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 30px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 360px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .galeri-kami{
            bottom : 0px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 8px; 
        }
        .galeri{
            font-size: 35px;
        }
        .garis-galeri{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 35px;
        }
        .garis-kata{
            width: 247px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 35px;
        }
        .garis-statistik{
            width: 170px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 35px;
        }
        .garis-partner{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 35px;
        }
        .garis-qa{
            width: 150px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 215px;
        }
        .konten-galeri{
            height: 1007px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 260px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 300px;
            padding: 0px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 310px;
        }
        .accordion{
            margin-bottom: 20px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 325px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:300px) and (max-width:320px)
    {
        .tita{
            height: auto;
        }
        .delpie{
            height: auto;
        }
        .img-tommy{
            width: 80px; height: 80px
        }
        .contact-card{
            padding: 30px 15px;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1510px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 225px;
            bottom: 1200px;
            width: 100px; height: 100px;
            border: 6vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 25px;
        }
        .hero h6{
            font-size: 18px;
        }
        .hero p{
            font-size: 14px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 320px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 8px; 
        }
        .galeri{
            font-size: 30px;
        }
        .garis-galeri{
            width: 210px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 30px;
        }
        .garis-statistik{
            width: 150px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 30px;
        }
        .garis-kata{
            width: 210px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 30px;
        }
        .garis-artikel{
            width: 255px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 30px;
        }
        .garis-partner{
            width: 220px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 30px;
        }
        .garis-qa{
            width: 130px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 215px;
        }
        .konten-galeri{
            height: 995px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 260px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 300px;
            padding: 0px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 310px;
        }
        .accordion{
            margin-bottom: 20px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 220px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:280px) and (max-width:299px)
    {
        .tita{
            height: auto;
        }
        .delpie{
            height: auto;
        }
        .img-tommy{
            width: 80px; height: 80px
        }
        .contact-card{
            padding: 30px 15px;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1550px;
            left: 39px;
            width: 80px; height: 80px;
        }
        .donut{
            left: 197px;
            bottom: 1213px;
            width: 80px;
            height: 80px;
            border: 6vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 25px;
        }
        .hero h6{
            font-size: 18px;
        }
        .hero p{
            font-size: 14px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 280px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 8px; 
        }
        .galeri{
            font-size: 30px;
        }
        .garis-galeri{
            width: 210px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 30px;
        }
        .garis-statistik{
            width: 150px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 30px;
        }
        .garis-kata{
            width: 210px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 30px;
        }
        .garis-artikel{
            width: 130px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 30px;
        }
        .garis-partner{
            width: 220px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 30px;
        }
        .garis-qa{
            width: 130px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 215px;
        }
        .konten-galeri{
            height: 995px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 260px;
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 20px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 20px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
            padding: 20px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 300px;
            padding: 0px;
            padding: 20px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 310px;
            padding: 20px;
        }
        .accordion{
            margin-bottom: 20px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 220px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
}
</style>
<div class="full-konten">
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center mb-lg-4">
    <div class="container full-komunitas">
        <div data-aos="fade-up" class="bulat1"></div>
        <div class="row komunitas">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <img src="{{ asset('assets/images/home/home1.jfif') }}" data-aos="zoom-in" class="img-fluid gmb-komunitas" alt="">
        <div class="isi-komunitas">
            <h1 data-aos="fade-up">KOMUNITAS JELANTAH4CHANGE</h1>
            <h6 data-aos="fade-up"> MANUSIA YANG SEHAT DAN SEJAHTERA DI BUMI YANG HIJAU</h6>
            <p data-aos="fade-up">
            Merupakan Komunitas Yang Melakukan Gerakan Sosial Berbasis Minyak
            Goreng bekas (jelantah) dengan
            melakukan edukasi publik,pengelolaan limbah dan pemberdayaan masyarakat
            </p>

            <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">
                    <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Mulai Sekarang</span>
                    <i class="bi bi-play-circle-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div data-aos="fade-up" class="bulat2"></div>
    <div data-aos="fade-up" class="donut"></div>
    <div data-aos="fade-up" class="bulat3"></div>
</div>
</section>
<!-- End Hero -->

{{-- Profil Kami --}}
<section class="hero d-flex align-items-center mb-lg-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <span class="profil">Profil Kami</span>
            <center><div class="garis-profil"></div></center>
        </div>
        <div class="row">
            <div class="video">
                <img src="{{ asset('assets/images/banner/banner-foto.png') }}" alt="image">
                <div class="video-play">
                    <a class="video-popup" href="https://www.youtube.com/watch?v=ymfecwa9fvc">
                        <i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Profil Kami --}}

{{-- Galeri Kami --}}
<section class="hero d-flex align-items-center mb-lg-4">
    <div class="container konten-galeri" data-aos="fade-up">
        <div class="bulat4"></div>
        
        <div class="col-lg-12 col-md-12 col-sm-12 galeri-kami">
        <div class="row">
            <span class="galeri">Gallery Kami</span>
            <center><div class="garis-galeri"></div></center>
        </div>

        <div class="row mt-lg-4">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3 mr-2">
                <img class="img-fluid gmb-galeri" src="{{asset('assets/images/home/home2.png')}}" alt="image">
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri" src="{{asset('assets/images/home/home3.jfif')}}" alt="image">
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri" src="{{asset('assets/images/home/home4.jfif')}}" alt="image">
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri" src="{{asset('assets/images/home/home5.jfif')}}" alt="image">
            </div>

            
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri hide-gmb" src="{{asset('assets/images/home/home6.jfif')}}" alt="image">
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri hide-gmb" src="{{asset('assets/images/home/home7.jfif')}}" alt="image">
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri hide-gmb" src="{{asset('assets/images/home/home8.jfif')}}" alt="image">
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri hide-gmb" src="{{asset('assets/images/home/home9.jfif')}}" alt="image">
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri hide-gmb" src="{{asset('assets/images/home/home10.jfif')}}" alt="image">
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri hide-gmb" src="{{asset('assets/images/home/home11.jfif')}}" alt="image">
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri hide-gmb" src="{{asset('assets/images/home/home12.jfif')}}" alt="image">
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                <img class="img-fluid gmb-galeri hide-gmb" src="{{asset('assets/images/home/home13.jfif')}}" alt="image">
            </div>

            <div class="d-flex justify-content-center tmbl-lihat">
                <a class="btn-more mt-5" href="{{ route('galeri') }}"><i class="fas fa-chevron-circle-right"></i>  Lihat Semua Foto</a>
            </div>
        </div>
        </div>
    </div>
</section>
{{-- End Galeri Kami --}}

{{-- Artikel --}}
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="content3" data-aos="fade-up">
    <div class="container konten-artikel">
        <div class="bulat5"></div>
    <div class="row">
        <span class="artikel">Artikel bacaan</span>
        <center><div class="garis-artikel"></div></center>
    </div>

    <div class="row mt-4 mb-4">
        <div class="col-12">
            <a href="{{ route('blog-read') }}">
            <div class="card">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <img src="{{ asset('assets/images/minyakjelantah.png') }}" class="img-fluid gmb-artikel" alt="image">
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-10 col-sm-12">
                        <div class="container container-artikel">
                        <span class="post-date">2021</span><br>
                        <span class="isi-artikel">Minyak Jelantah Bersifat Karsinogenik, Kok Bisa?</span>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-4 col-md-12 col-sm-12 card-kecil">
        <a href="{{ route('blog-read1') }}">
        <div class="post-box">
            <div class="post-img"><img src="{{asset('assets/images/testimonial/b-20.jpg')}}" class="img-fluid" alt=""></div>
            <span class="post-date">2021</span>
            <h3 class="post-title">Intip Potensi Jelantah sebagai Bahan Baku Biodiesel</h3>
        </div>
        </a>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 card-kecil">
        <a href="{{ route('blog-read2') }}">
        <div class="post-box">
            <div class="post-img"><img src="{{asset('assets/images/gorengan.jpg')}}" class="img-fluid" alt=""></div>
            <span class="post-date">2021</span>
            <h3 class="post-title">Kolestrol Menghantui Gorengan, Ih Serem!</h3>
        </div>
        </a>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 card-kecil">
        <a href="{{ route('blog-read3') }}">
        <div class="post-box">
            <div class="post-img"><img src="{{asset('assets/images/testimonial/b-20.jpg')}}" class="img-fluid" alt=""></div>
            <span class="post-date">2021</span>
            <h3 class="post-title">Intip Potensi Jelantah sebagai Bahan Baku Biodiesel</h3>
        </div>
        </a>
        </div>

    </div>

    </div>
    </div>

</section><!-- End Recent Blog Posts Section -->

{{-- End Artikel --}}

{{-- Statistic --}}
<div class="container">
    <div class="row">
        <span class="statistik">Statistik</span>
        <center><div class="garis-statistik"></div></center>
    </div>
</div>
<section id="counts" class="counts mt-lg-4" data-aos="fade-up">
    <div class="container" data-aos="fade-up">

        <div class="row">

            
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="statistik2">Sosialisasi/Pelatihan</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="far fa-user"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="statistik2">Partisipasi Peserta</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
            <i class="fas fa-user-plus"></i>
            <span data-purecounter-start="0" data-purecounter-end="70" data-purecounter-duration="1" class="purecounter"></span>
            <p class="statistik2">Total Relawan</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                <i class="fas fa-clone"></i>
                <span data-purecounter-start="0" data-purecounter-end="10000" data-purecounter-duration="1" class="purecounter"></span>
                <p  class="statistik2">Jelantah terkumpul <br>
                    (Liter Jelantah)</p>
                </div>
            </div>
        </div>

    </div>
    </section><!-- End Counts Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts mb-lg-4" data-aos="fade-up">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="fas fa-user"></i>
                    <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="statistik2">Jelantah Heroes</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="fas fa-industry-alt"></i>
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="statistik2">Kemitraan Pabrik</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                    <p class="statistik2">Aksi Sosial</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                <i class="fas fa-city"></i>
                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
                <p class="statistik2">Pesebaran Kota</p>
                </div>
            </div>

        </div>

    </div>
    </section><!-- End Counts Section -->
{{-- End Statistic --}}

{{-- Kata Mereka --}}
    <div class="container mt-4 mb-4" data-aos="fade-up">
            <center><span class="kata">Kata Mereka</span></center>
            <center><div class="garis-kata"></div></center>
    <div class="kata-mereka">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="contact-card bg-card">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{('assets/images/testimonial/guntur.png')}}" class="img-tommy" alt="image">
                                </div>
                                <div class="col-8">
                                    <p class="artikel-kami"> <span class="profilkami"> Guntur D. Wijaya </span> -
                                        Environmental Engineer, Public Speaker </p>
                                    <p class="tommy-desc">“Jelantah adalah masalah bagi kesehatan dan lingkungan. Orang
                                        yang sadar tentang masalah ini pun bingung mau dikemanakan jelantah milik saya”
                                        <br><br>
                                        “Gerakan Jelantah4Change memberi solusi. Mereka melakukan edukasi, menerima
                                        pengumpulan jelantah secara sukarela, serta menyalurkannya ke Pengelola/
                                        Pemanfaat yang bertanggung jawab. Ini merupakan gerakan nyata yang patut kita
                                        hargai dan dukung untuk kebaikan bersama.”</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-card bg-card delpie">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{('assets/images/testimonial/delpie.png')}}" class="img-tommy"
                                        alt="image">
                                </div>
                                <div class="col-8">
                                    <p class="artikel-kami"> <span class="profilkami">Delpie & Fransiscus </span> <span
                                            class="balik-papan"> - Balikpapan </span></p>
                                    <p class="tommy-desc">“Jelantah…limbah rumah tangga yang jika dibuang ke Wastafel
                                        dan Selokan akan menimbulkan masalah lain. Ini solusinya… Gerakan
                                        #Jelantah4Change. Menerima Jelantah dengan sukarela, mengelolanya dengan benar
                                        dan melakukan aksi-aksi sosial.”
                                        <br><br>
                                        “Terima kasih #Jelantah4Change”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="contact-card bg-card">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{('assets/images/testimonial/yenyen.jpg')}}" class="img-tommy"
                                        alt="image">
                                </div>
                                <div class="col-8">
                                    <p class="artikel-kami"> <span class="profilkami">Yenyen </span> <span
                                            class="balik-papan"> - Balikpapan </span></p>
                                    <p class="tommy-desc">“Selama ini pengumpulan minyak jelantah selalu lancar dan di
                                        bantu oleh salah satu relawan mba oline dan terkadang di kasih jirigen jika
                                        kebetulan saya tidak punya. Serta adanya penyetoran minyak jelantah ini membantu
                                        mengurangi limbah minyak jelantah, dari pada saya buang gak ada gunanya yang
                                        nambahin limbah kan”</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-card bg-card tita">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan38.jfif')}}" class="img-tommy"
                                        alt="image">
                                </div>
                                <div class="col-8">
                                    <p class="artikel-kami"> <span class="profilkami">Tita </span> <span
                                            class="balik-papan"> - Kutai Barat </span></p>
                                    <p class="tommy-desc">“Senang ikut membantu mengurangi pencemaran air dan
                                        lingkungan, jadi tidak merasa bersalah lagi buang minyak ke pembuangan (dalam
                                        jumlah banyak). Kerena telah terbantu dengan menyetorkan minyak jelantah ke
                                        Jelantah4Change”</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8 mx-auto">
                        <div class="contact-card bg-card">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{('assets/images/testimonial/bernadet.png')}}" class="img-tommy"
                                        alt="image">
                                </div>
                                <div class="col-8">
                                    <p class="artikel-kami"> <span class="profilkami">Bernadet </span> <span
                                            class="balik-papan"> - Guru, Balikpapan </span></p>
                                    <p class="tommy-desc">“Selama ini pengumpulan minyak jelantah selalu lancar dan di
                                        bantu oleh salah satu relawan mba oline dan terkadang di kasih jirigen jika
                                        kebetulan saya tidak punya. Serta adanya penyetoran minyak jelantah ini membantu
                                        mengurangi limbah minyak jelantah, dari pada saya buang gak ada gunanya yang
                                        nambahin limbah kan”</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
{{-- End Kata Mereka --}}

{{-- Partner Kami --}}
    <div class="container partner-kami ">
        <div class="row mb-4" data-aos="fade-up">
        <center><span class="partner">Partner Kami</span></center>
        <center><div class="garis-partner"></div></center>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <img class="merk-terang img-fluid" src="{{asset('assets/images/partner kami/terang-nusantara.png')}}" alt="image">
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12">
                <img class="merk-bumn img-fluid mb-lg-5" src="{{asset('assets/images/partner kami/bumn.png')}}" alt="image">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12">
                <img class="merk-waste img-fluid" src="{{asset('assets/images/partner kami/waste.png')}}" alt="image">
            </div>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <img class="merk-iluni img-fluid" src="{{asset('assets/images/partner kami/iluni.png')}}" alt="image">
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12">
                <img class="merk-pertamina img-fluid" src="{{asset('assets/images/partner kami/pertamina.png')}}" alt="image">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12">
                <img class="merk-carbon img-fluid" src="{{asset('assets/images/partner kami/carbon.png')}}" alt="image">
            </div>
        </div>
    </div>
{{-- End Partner Kami --}}

{{-- Question Answer --}}
    <div class="container question mb-lg-4">
        <div class="row mb-lg-4" data-aos="fade-up">
            <span class="qa">question & answer</span>
            <center><div class="garis-qa"></div></center>
        </div>
        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        </h2>
                        
                            <button style="float: right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false"
                            aria-controls="collapseTwo1">
                            <span class="jelantah-tanya"> <i class="far fa-question-circle text-success" style="font-size: 24px"> </i> Apa beda Heroes dan Relawan?</span>
                            </button>
                            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                                <div class="accordion-body">
                                    Heroes = Dia yang mengumpulkan dan memberikan jelantah ke Jelantah4Change
                                    <br>
                                    Relawan = Dia yang terlibat dalam edukasi, menjemput / menampung (drop point) jelantah dan melakukan aksi sosial
                                </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        </h2>
    
                            <button style="float:right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false"
                            aria-controls="collapseTwo2">
                            <span style="float:left" class="jelantah-tanya"> <i class="far fa-question-circle text-success" style="font-size: 24px"></i> Bagaimana cara bergabung menjadi relawan Jelantah4Change </span>
                            </button>
                            <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                                <div class="accordion-body">
                                    Dengan cara mengikuti Open Recruitment Jelantah4Change ya?
                                </div>  
                            </div>
                        </div>
                    
                </div>
            </div>

        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                            <button style="float: right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo3" aria-expanded="false"
                            aria-controls="collapseTwo3">
                            <span style="float:left" class="jelantah-tanya"><i class="far fa-question-circle text-success" style="font-size: 24px"></i> Kapan Open Recruitment Jelantah4Change </span>
                            </button>
                            <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                            <div class="accordion-body">
                                Pantengin media sosial Jelantah4Change agar kamu gak ketinggalan informasi kita ya?
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        {{-- <h2 class="accordion-header" id="headingTwo">
                            </h2> --}}
                            <button style="float: right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo4" aria-expanded="false"
                            aria-controls="collapseTwo4">
                            <span style="float:left" class="jelantah-tanya"><i class="far fa-question-circle text-success" style="font-size: 24px"></i>  Bagaimana cara memberikan jelantah ke Jelantah4Change?</span>
                            </button>
                        <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                            <div class="accordion-body">
                                Hubungi relawan kami di kota kamu di link <u><a href="bit.ly/SapaRelawanJelantah4Change">bit.ly/SapaRelawanJelantah4Change</a></u>
                                <br>
                                Atau scan barcode dibawah ini
                                <br>
                                    <img src="{{ asset('assets/images/home/scan.png') }}" width="100px" height="124px;"  alt="image">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        {{-- <h2 class="accordion-header" id="headingTwo">
                            </h2> --}}
                            <button style="float: right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo5" aria-expanded="false"
                            aria-controls="collapseTwo5">
                            <span style="float:left" class="jelantah-tanya"><i class="far fa-question-circle text-success" style="font-size: 24px"></i> Adakah relawan di kota saya?</span>
                            </button>
                        <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                            <div class="accordion-body">
                                Silahkan cek di link <u><a href=" bit.ly/SapaRelawanJelantah4Change"> bit.ly/SapaRelawanJelantah4Change</a></u>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        {{-- <h2 class="accordion-header" id="headingTwo">
                            </h2> --}}
                            <button style="float: right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo6" aria-expanded="false"
                            aria-controls="collapseTwo6">
                            <span style="float:left" class="jelantah-tanya"><i class="far fa-question-circle text-success" style="font-size: 24px"></i> Apa Jelantah4Chnage membeli jelantah?</span>
                            </button>
                        <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                            <div class="accordion-body">
                                Tidak, Jelantah4Change tidak membeli jelantah.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        {{-- <h2 class="accordion-header" id="headingTwo">
                            </h2> --}}
                            <button style="float: right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo7" aria-expanded="false"
                            aria-controls="collapseTwo7">
                            <span style="float:left" class="jelantah-tanya"><i class="far fa-question-circle text-success" style="font-size: 24px"></i> Berkolaborasi dengan Jelantah4Change?</span>
                            </button>
                        <div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                            <div class="accordion-body">
                                Jelantah4Change terbuka untuk kegiatan kolaborasi sebagai narasumber dan berpartisipasi di kegiatan lainnya.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        {{-- <h2 class="accordion-header" id="headingTwo">
                            </h2> --}}
                            <button style="float : right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo8" aria-expanded="false"
                            aria-controls="collapseTwo8">
                            <span style="float:left" class="jelantah-tanya"><i class="far fa-question-circle text-success" style="font-size: 24px"></i> Jelantahnya untuk apa?</span>
                            </button>
                        <div id="collapseTwo8" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                            <div class="accordion-body">
                                Jelantah yang dikumpulkan dikonversi menjadi produk homemade seperti lilin, sabun, biodiesel, lampu LED berbahan bakar jelantah dan dana yang digunakan untuk kegiatan sosial dan aksi peduli lingkungan. 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        {{-- <h2 class="accordion-header" id="headingTwo">
                            </h2> --}}
                            <button style="float: right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo9" aria-expanded="false"
                            aria-controls="collapseTwo9">
                            <span style="float:left" class="jelantah-tanya"><i class="far fa-question-circle text-success" style="font-size: 24px"></i> Kak, saya tertarik untuk mengadakan pelatihan sabun atau lilin di tempat saya, bagaimana cara saya menginisiasi?</span>
                            </button>
                        <div id="collapseTwo9" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                            <div class="accordion-body">
                                Halo Kak. Cara membuat lilin dan sabun dari Jelantah banyak ditemui di youtube. Sejak 2020, J4C berencana untuk lebih mengorganisir pelatihan publik karena mempertimbangkan faktor mobilisasi peralatan dan sumber daya untuk pelatihan. Proposal pelatihan di kelompok/ komunitas akan dipertimbangkan sesuai persiapan dan kesanggupan Relawan di tiap daerah.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        {{-- <h2 class="accordion-header" id="headingTwo">
                            </h2> --}}
                            <button style="float: right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo10" aria-expanded="false"
                            aria-controls="collapseTwo10">
                            <span style="float:left" class="jelantah-tanya"><i class="far fa-question-circle text-success" style="font-size: 24px"></i> Kak, saya punya komunitas, apakah kita bisa melakukan kerjasama antar komunitas? Syaratnya seperti apa?</span>
                            </button>
                        <div id="collapseTwo10" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                            <div class="accordion-body">
                                Halo Kak. Sesuai dengan nilai dalam Gerakan kami yaitu komunal dan kolektif, kami percaya bergerak secara bersama-sama/ gotong-royong akan memberi dampak yang lebih luas. Untuk itu, kami terbuka untuk proposal kerjasama yang manfaatnya dapat dirasakan secara kolektif/ bersama-sama (bukan manfaat individual). Silahkan disampaikan proposal/ skema yang ingin diajukan atau kami bisa juga memberikan contoh-contoh yang telah berjalan.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        {{-- <h2 class="accordion-header" id="headingTwo">
                            </h2> --}}
                            <button style="float: right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo11" aria-expanded="false"
                            aria-controls="collapseTwo11">
                            <span style="float:left" class="jelantah-tanya"><i class="far fa-question-circle text-success" style="font-size: 24px">  </i> Kak, bagaimana nantinya saya menyalurkan jelantah saya ke pabrik terdekat?</span>
                            </button>
                        </div>
                        <div id="collapseTwo11" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                            <div class="accordion-body">
                                Halo Kak. Penyaluran ke pabrik akan lebih efektif dalam volume besar. Untuk itu, dengan pengumpulan kolektif melalui J4C akan lebih mudah untuk pengiriman ke pabrik. J4C juga telah melakukan seleksi untuk kerjasama pabrik guna memastikan jelantah diolah secara benar dan tidak dijernihkan untuk diedarkan Kembali ke masyarakat.
                            </div>
                        </div>

                </div>
            </div>
        </div>

        <div class="row mb-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        {{-- <h2 class="accordion-header" id="headingTwo">
                            </h2> --}}
                            <button style="float: right" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo12" aria-expanded="false"
                            aria-controls="collapseTwo12">
                            <span style="float:left" class="jelantah-tanya"><i class="far fa-question-circle text-success" style="font-size: 24px"></i> This is an example question without expand arrow down?</span>
                            </button>
                        <div id="collapseTwo12" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <center><hr width="96%"></center>
                            <div class="accordion-body">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas minus ut quos molestias dolor. Corrupti itaque accusamus quia non quos reprehenderit consectetur consequatur, beatae deserunt!
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
{{-- End Question Answer --}}

{{-- Dukung Jelantah --}}
    <div class="row">
        <div class="content7">
            <div class="title" data-aos="fade-up">
            <span class="judul"><center>DUKUNG JELANTAH4CHANGE</center></span>
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
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JOIN MITRA</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End Dukung Jelantah --}}
</div>
@endsection