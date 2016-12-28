<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Servcorp Rental Offices</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <script src="js/react.js"></script>
  <script src="js/react-dom.js"></script>
  <script src="https://unpkg.com/babel-core@5.8.38/browser.min.js"></script>

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="img/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <!-- phone-number box -->
      <div class="phone-box visible-md visible-lg">
        <ul>
          <li class="scroll"><a data-scroll href="#contact-us">内覧予約・お問い合わせ<br />月〜金曜 8:30〜17:30</a></li>
          <li><a href="tel:0452285100"><span>045-228-5100</span></a></li>
          <li class="scroll"><a data-scroll href="#contact-us"><span style="font-size: 12px;">インターネットからも受付中</span></a></li>
        </ul>
      </div>
      <!--/ phone-number box -->

      <div class="carousel-inner">
        <div class="item active" style="background-image: url(img/slider/tokyo.jpg)">
          <div class="caption">
            <h1 class="animated">東京都内のレンタルオフィス</h1>
            <p class="animated">サーブコープのレンタルオフィスはすべて都心一等地の有名オフィスビル</p>
            <a data-scroll class="btn btn-start animated" href="#services">詳細はこちら</a>
          </div>
        </div>
        <div class="item" style="background-image: url(img/slider/marunouchi.jpg)">
          <div class="caption">
            <h1 class="animated">丸の内トラストタワー本館</h1>
            <p class="animated">東京駅に隣接するプレミアムオフィスビル</p>
            <a data-scroll class="btn btn-start animated" href="#services">詳細はこちら</a>
          </div>
        </div>
        <div class="item" style="background-image: url(img/slider/aoyama_3.jpg)">
          <div class="caption">
            <h1 class="animated">トライセブンロッポンギ</h1>
            <p class="animated">六本木駅に隣接するプレミアムオフィスビル</p>
            <a data-scroll class="btn btn-start animated" href="#services">詳細はこちら</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="img/logo.png" alt="logo"></h1>
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll active"><a href="<?php echo base_url(); ?>#home">ホーム</a></li>
            <li class="scroll"><a href="<?php echo base_url(); ?>#services">レンタルオフィスの特徴</a></li>
            <li class="scroll"><a href="<?php echo base_url(); ?>location/all">拠点一覧</a></li>
            <li class="scroll"><a href="<?php echo base_url(); ?>#company">会社概要</a></li>
            <li class="scroll"><a href="<?php echo base_url(); ?>#contact-us">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>サーブコープのレンタルオフィスは都内に全15拠点</h2>
            <p>サーブコープは東京都内に多数のレンタルオフィス拠点をご用意しております。丸の内、新宿、品川、六本木といった、都内の主要ビジネス街を網羅し、いずれも最寄りの駅から直結または徒歩数分のアクセスを誇ります。いずれの拠点もそのエリアを代表するオフィスビルであり、企業様にとって理想的なオフィス環境をご提供しています。</p>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-toggle="modal" data-target="#modal-1" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-subway"></i>
            </div>
            <div class="service-info">
              <h3>立地</h3>
              <p>東京でも有数の人気エリア「表参道」に面した最高の立地です。また、千代田線・銀座線・半蔵門線が乗り入れる表参道駅B5出口に直結しています。</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-toggle="modal" data-target="#modal-2" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-building"></i>
            </div>
            <div class="service-info">
              <h3>設備およびワークスペース</h3>
              <p>世界一流の家具・調度品とIT設備を完備したオフィス・スイート。入居後すぐに業務を開始することができます。</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-toggle="modal" data-target="#modal-3" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="service-info">
              <h3>専属秘書・受付</h3>
              <p>専属のバイリンガル受付担当によるお客様への電話の応対。データ入力から受注業務、会議での通訳・翻訳業務まで、ご要望に応じてサポート。</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-toggle="modal" data-target="#modal-4" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-users"></i>
            </div>
            <div class="service-info">
              <h3>ITサポート</h3>
              <p>設立以来ITへの投資を続けており、社内開発による独自オンラインシステムが日々サーブコープのお客様のビジネスを多方面から支えています。</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-toggle="modal" data-target="#modal-5" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-wifi"></i>
            </div>
            <div class="service-info">
              <h3>ITテクノロジー</h3>
              <p>99.98%のシステム稼働率を誇るインターネット回線や高速Wi-Fi、IP電話やオンラインFAXなど使いやすいハイテク・ソリューションをご提供しています。</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-toggle="modal" data-target="#modal-6" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-money"></i>
            </div>
            <div class="service-info">
              <h3>柔軟性</h3>
              <p>サーブコープのレンタルオフィスのご契約は最短1ヶ月から。フレキシブルなマンスリー契約で使えるので費用対効果を最大化することができます。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->


  <!-- React Container -->
  <div id="react-container"></div>
  <!-- /React Container -->

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC4bxmr-LyZOpfxryooXS54rp-9K2rAyjo"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <!-- <script type="text/javascript" src="js/main.js"></script> -->

<script type="text/babel">
// MOCK DATA
var locationsData = JSON.parse('{"tokyo":[{"name":"Marunouchi Yusen Building","namae":"丸の内郵船ビルディング","address":"Level 1 Yusen Building<br />2-3-2 Marunouchi, Chiyoda-ku<br />Tokyo 100-0005 Japan","phoneNumber":"3 5533 8600","faxNumber":"3 5533 8686","area":"marunouchi-otemachi-nihonbashi","voPrices":["46,500","23,000","20,800","15,000"],"voSpecialDeal":["36,500","18,000","15,800","10,000"],"hasVoDeal":false,"manager":"Maya Oguri, Yume Ishijima","email":"","localUrl":"yusen","url":"marunouchi-yusen-building","hasSo":true,"locationCode":"YBM","hasVo":true,"hasCo":true,"hasCoLounge":true,"hasMr":true,"Id":"10548","Longitude":"139.762828","Latitude":"35.681549","ThumbnailUrl":"/media/23129","ThumbnailAlias":"","jaAddress":"〒100-0005<br />東京都千代田区丸の内2-3-2<br />郵船ビルディング 1階","BuildingName":"千代田区 - 丸の内郵船ビルディング","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["17,100","9,600","57,600"],"smallBoardroom":["17,100","9,600","57,600"],"meetingRooms":["15,900","8,400","50,400"],"coworking":["12,000","4,500","25,500"],"dayOffice":["15,900","8,400","50,400"]},"largeImageUrl":"marunouchi-yusen-building.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"東京駅"},{"name":"Marunouchi Trust Tower - Main","namae":"丸の内トラストタワー本館","address":"Level 20 Marunouchi Trust Tower - Main<br />1-8-3 Marunouchi Chiyoda-ku<br />Tokyo 100-0005 Japan","phoneNumber":"3 6269 3000","faxNumber":"3 6269 3030","area":"marunouchi-otemachi-nihonbashi","voPrices":["51,500","25,000","23,000","18,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Maya Oguri","email":"","localUrl":"marunouchi","url":"marunouchi-trust-tower-main","hasSo":true,"locationCode":"MTT","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"1975","Longitude":"139.7693190000","Latitude":"35.6826290000","ThumbnailUrl":"/media/10588","ThumbnailAlias":"","jaAddress":"〒100-0005<br />東京都千代田区丸の内1-8-3<br />丸の内トラストタワー本館 20階","BuildingName":"千代田区 - 丸の内トラストタワー本館","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["22,800","13,800","91,800"],"coworking":["13,500","4,500","27,000"],"meetingRooms":["17,400","8,400","59,400"],"dayOffice":["17,400","8,400","59,400"]},"largeImageUrl":"marunouchi-trust-tower-main.jpg","bestPrice":false,"bestAddress":true,"newLocation":false,"closestStation":"東京駅"},{"name":"Otemachi Sankei Building","namae":"大手町東京サンケイビル","address":"Level 27 Tokyo Sankei Building<br />1-7-2 Otemachi Chiyoda-ku<br />Tokyo 100-0004 Japan","phoneNumber":"3 3242 6333","faxNumber":"3 3242 6336","area":"marunouchi-otemachi-nihonbashi","voPrices":["40,800","21,000","19,000","12,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Hiroki Nasuhara","email":"","localUrl":"otemachi","url":"otemachi-tokyo-sankei-building","hasSo":true,"locationCode":"SAN","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3653","Longitude":"139.7654640000","Latitude":"35.6871230000","ThumbnailUrl":"/media/5593","ThumbnailAlias":"","jaAddress":"〒100-0004<br />東京都千代田区大手町 1-7-2<br />東京サンケイビル 27階","BuildingName":"千代田区 - 大手町東京サンケイビル","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["18,000","12,000","78,000"],"coworking":["9,360","3,360","19,440"],"meetingRooms":["14,400","8,400","56,400"],"dayOffice":["12,000","6,000","42,000"]},"largeImageUrl":"otemachi-tokyo-sankei-building.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"大手町駅"},{"name":"Tri-Seven Roppongi","namae":"トライセブン ロッポンギ","address":"Level 8 Tri-Seven Roppongi<br />7-7-7 Roppongi, Minato-Ku<br />Tokyo 106-0032 Japan","phoneNumber":"3 5789 5700","faxNumber":"","area":"roppongi-aoyama-ebisu","voPrices":["37,200","22,000","20,000","15,000"],"voSpecialDeal":["24,900","14,700","13,400","10,000"],"hasVODeal":false,"manager":"Maya Oguri","email":"","localUrl":"tri-seven","url":"tri-seven-roppongi","hasSo":true,"locationCode":"TSR","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"","Longitude":"139.7267568","Latitude":"35.6650514","ThumbnailUrl":"/media/24431","ThumbnailAlias":"","jaAddress":"〒106-0032<br />東京都港区六本木7-7-7 <br />トライセブン ロッポンギ 8階","BuildingName":"港区 - トライセブン ロッポンギ","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["22,800","13,800","91,800"],"coworking":["13,500","4,500","27,000"],"meetingRooms":["17,400","8,400","59,400"],"dayOffice":["17,400","8,400","59,400"]},"largeImageUrl":"tri-seven-roppongi.jpg","bestPrice":false,"bestAddress":false,"newLocation":true,"closestStation":"六本木駅"},{"name":"Hibiya Central Building","namae":"日比谷セントラルビル","address":"Level 14, Hibiya Central Building <br />1-2-9 Nishi Shimbashi, Minato-ku<br />Tokyo 105-0003","phoneNumber":"3 5532 7700","faxNumber":"3 5532 7373","area":"shinbashi-hibiya-toranomon","voPrices":["32,500","15,000","15,000","15,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Haruko Kurashige","email":"","localUrl":"hibiya","url":"hibiya-central-building","hasSo":true,"locationCode":"HIB","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3085","Longitude":"139.7547290000","Latitude":"35.6695470000","ThumbnailUrl":"/media/5584","ThumbnailAlias":"","jaAddress":"〒105-0003<br />東京都港区西新橋1-2-9<br />日比谷セントラルビル14階","BuildingName":"港区 - 日比谷セントラルビル","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["19,500","12,000","79,500"],"coworking":["10,860","3,360","20,940"],"meetingRooms":["15,900","8,400","57,900"],"dayOffice":["13,500","6,000","43,500"]},"largeImageUrl":"hibiya-central-building.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"新橋駅"},{"name":"Shiodome Shibarikyu Building","namae":"汐留芝離宮ビルディング","address":"Level 21 Shiodome Shibarikyu Building<br />1-2-3 Kaigan Minato-ku<br />Tokyo 105-0022 Japan","phoneNumber":"3 5403 6500","faxNumber":"3 5403 6565","area":"shinagawa-tamachi-hamamatsucho","voPrices":["31,200","21,000","17,000","11,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Rie Hirano, Miyu Toyonaga","email":"","localUrl":"shiodome","url":"shiodome-shibarikyu-building","hasSo":true,"locationCode":"SIO","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3089","Longitude":"139.7586130000","Latitude":"35.6571880000","ThumbnailUrl":"/media/5597","ThumbnailAlias":"","jaAddress":"〒105-0022<br />東京都港区海岸1-2-3<br />汐留芝離宮ビルディング21階","BuildingName":"港区 - 汐留芝離宮ビルディング ","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["17,500","12,000","77,500"],"coworking":["8,860","3,360","18,940"],"meetingRooms":["13,900","8,400","55,900"],"dayOffice":["11,500","6,000","41,500"],"smallBoardroom":["15,100","9,600","63,100"]},"largeImageUrl":"shiodome-shibarikyu-building.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"浜松町駅"},{"name":"Shinagawa Intercity Tower A","namae":"品川インターシティ A棟","address":"Level 28 Shinagawa Intercity Tower A<br />2-15-1 Konan Minato-ku<br />Tokyo 108-6028 Japan","phoneNumber":"3 6717 4500","faxNumber":"3 6717 4545","area":"shinagawa-tamachi-hamamatsucho","voPrices":["37,200","21,000","19,000","11,000"],"voSpecialDeal":["25,000","14,700","13,300","7,700"],"hasVoDeal":false,"manager":"Manami Alberto, Mariko Matsubara","email":"","localUrl":"shinagawa","url":"shinagawa-intercity-tower-a","hasSo":true,"locationCode":"SGW","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3097","Longitude":"139.7420370000","Latitude":"35.6276460000","ThumbnailUrl":"/media/5594","ThumbnailAlias":"","jaAddress":"〒108-6028<br />東京都港区港南2-15-1<br />品川インターシティA棟28階","BuildingName":"港区 - 品川インターシティ A棟","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["19,300","13,800","88,300"],"coworking":["8,860","3,360","18,940"],"meetingRooms":["13,900","8,400","55,900"],"dayOffice":["11,500","6,000","41,500"]},"largeImageUrl":"shinagawa-intercity-tower-a.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"品川駅"},{"name":"Shiroyama Trust Tower","namae":"虎ノ門城山トラストタワー","address":"Level 27 Shiroyama Trust Tower<br />4-3-1 Toranomon, Minato-ku<br />105-6027 Japan","phoneNumber":"3 5404 8100","faxNumber":"3 5404 8181","area":"shinbashi-hibiya-toranomon","voPrices":["35,200","21,000","19,000","11,000"],"voSpecialDeal":["0","0","0","0"],"hasVODeal":false,"manager":"Hisami Ueda","email":"","localUrl":"shiroyama","url":"shiroyama-trust-tower","hasSo":true,"locationCode":"SHI","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3093","Longitude":"139.7433410000","Latitude":"35.6646170000","ThumbnailUrl":"/media/5598","ThumbnailAlias":"","jaAddress":"〒105-6027 <br />東京都港区虎ノ門4-3-1<br />城山トラストタワー 27階","BuildingName":"港区 - 虎ノ門城山トラストタワー","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["17,500","12,000","77,500"],"coworking":["8,860","3,360","18,940"],"meetingRooms":["13,900","8,400","55,900"],"dayOffice":["11,500","6,000","41,500"],"smallBoardroom":["15,100","9,600","63,100"]},"largeImageUrl":"shiroyama-trust-tower.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"神谷町駅"},{"name":"Nihonbashi Wakamatsu Building","namae":"日本橋ワカ末ビル","address":"Level 7 Wakamatsu Building<br />3-3-6 Nihonbashi-Honcho Chuo-Ku<br />Tokyo 103-0023  Japan","phoneNumber":"3 6202 7600","faxNumber":"3 6202 7676","area":"marunouchi-otemachi-nihonbashi","voPrices":["26,700","18,900","12,600","11,000"],"voSpecialDeal":["17,500","13,500","8,800","7,700"],"hasVoDeal":false,"manager":"Miki Kuwana","email":"","localUrl":"nihonbashi","url":"nihonbashi-wakamatsu-building","hasSo":true,"locationCode":"WAK","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3081","Longitude":"139.7742610000","Latitude":"35.6887430000","ThumbnailUrl":"/media/6989","ThumbnailAlias":"","jaAddress":"〒103-0023<br />東京都中央区日本橋本町3-3-6<br />ワカ末ビル7階","BuildingName":"中央区 - 日本橋ワカ末ビル","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["16,600","11,100","72,100"],"coworking":["7,750","2,250","14,500"],"meetingRooms":["13,300","7,800","52,300"],"dayOffice":["9,250","3,750","28,000"]},"largeImageUrl":"nihonbashi-wakamatsu-building.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"新日本橋駅"},{"name":"Aoyama Palacio Tower","namae":"青山パラシオタワー","address":"Level 11 Aoyama Palacio Tower<br />3-6-7 Kita-Aoyama Minato-Ku<br />Tokyo 107-0061 Japan","phoneNumber":"3 5778 7600","faxNumber":"3 5778 7676","area":"roppongi-aoyama-ebisu","voPrices":["37,200","23,000","20,000","15,000"],"voSpecialDeal":["25,000","16,000","14,000","10,000"],"hasVoDeal":false,"manager":"Aya Komori, Marice Hartono","email":"","localUrl":"aoyama","url":"aoyama-palacio-tower","hasSo":true,"locationCode":"PAL","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3101","Longitude":"139.7112000000","Latitude":"35.6653850000","ThumbnailUrl":"/media/5579","ThumbnailAlias":"","jaAddress":"〒107-0061<br />東京都港区北青山3-6-7<br />青山パラシオタワー11階","BuildingName":"港区 - 青山パラシオタワー","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["19,500","12,000","79,500"],"coworking":["10,860","3,360","20,940"],"meetingRooms":["15,900","8,400","57,900"],"dayOffice":["13,500","6,000","43,500"]},"largeImageUrl":"aoyama-palacio-tower.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"表参道駅"},{"name":"Yebisu Garden Place Tower","namae":"恵比寿ガーデンプレイスタワー","address":"Level 18 Yebisu Garden Place Tower<br />4-20-3 Ebisu Shibuya-ku<br />Tokyo 150-6018 Japan","phoneNumber":"3 5789 5700","faxNumber":"3 5789 5757","area":"roppongi-aoyama-ebisu","voPrices":["37,200","22,000","20,000","15,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Manami Alberto, Sayuri Yano, Naka Kobayashi","email":"","localUrl":"yebisu","url":"yebisu-garden-place-tower","hasSo":true,"locationCode":"YEB","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3105","Longitude":"139.7134170000","Latitude":"35.6421860000","ThumbnailUrl":"/media/5602","ThumbnailAlias":"","jaAddress":"〒150-6018<br />東京都渋谷区恵比寿4-20-3<br />恵比寿ガーデンプレイスタワー18階","BuildingName":"渋谷区 - 恵比寿ガーデンプレイスタワー","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["19,500","12,000","79,500"],"coworking":["10,860","3,360","20,940"],"meetingRooms":["15,900","8,400","57,900"],"dayOffice":["13,500","6,000","43,500"]},"largeImageUrl":"yebisu-garden-place-tower.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"恵比寿駅"},{"name":"Shinjuku Nomura Building","namae":"新宿野村ビル","address":"Level 32 Shinjuku Nomura Building<br />1-26-2 Nishi Shinjuku Shinjuku-ku<br />Tokyo 163-0532 Japan","phoneNumber":"3 5322 2900","faxNumber":"3 5322 2929","area":"shinjuku-ikebukuro","voPrices":["37,200","16,000","21,000","11,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Mari Murata","email":"","localUrl":"shinjyuku","url":"shinjuku-nomura-building","hasSo":true,"locationCode":"NOM","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3109","Longitude":"139.6953140000","Latitude":"35.6930180000","ThumbnailUrl":"/media/5595","ThumbnailAlias":"","jaAddress":"〒163-0532<br />東京都新宿区西新宿1-26-2<br />新宿野村ビル32階","BuildingName":"新宿区 - 新宿野村ビル","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["17,500","12,000","77,500"],"coworking":["8,860","3,360","18,940"],"meetingRooms":["13,900","8,400","55,900"],"dayOffice":["11,500","6,000","41,500"]},"largeImageUrl":"shinjuku-nomura-building.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"新宿駅"},{"name":"Shinjuku Oak City","namae":"新宿オークシティ","address":"Level 8 Nittochi Nishi-Shinjuku Building<br />6-10-1 Nishi-Shinjuku Shinjuku-ku<br />Tokyo 160-0023 Japan","phoneNumber":"3 5325 3100","faxNumber":"3 5325 3131","area":"shinjuku-ikebukuro","voPrices":["32,500","16,000","16,000","15,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Sayaka Masaki","email":"","localUrl":"nishishinjyuku","url":"shinjuku-oak-city","hasSo":true,"locationCode":"NNS","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3113","Longitude":"139.6907730000","Latitude":"35.6945730000","ThumbnailUrl":"/media/5591","ThumbnailAlias":"","jaAddress":"〒160-0023<br />東京都新宿区西新宿6-10-1<br />新宿オークシティ　日土地西新宿ビル8階","BuildingName":"新宿区 - 新宿オークシティ","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["17,100","9,600","65,100"],"coworking":["10,860","3,360","20,940"],"meetingRooms":["15,900","8,400","57,900"],"dayOffice":["13,500","6,000","43,500"],"silentZone":["8,500","1,000","13,500"]},"largeImageUrl":"shinjuku-oak-city.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"新宿駅"},{"name":"Ikebukuro Sunshine 60","namae":"池袋サンシャイン60","address":"Level 45 Sunshine 60<br />3-1-1 Higashi Ikebukuro Toshima-ku <br />Tokyo 170-6045 Japan","phoneNumber":"3 5979 2100","faxNumber":"3 5979 2121","area":"shinjuku-ikebukuro","voPrices":["32,500","16,000","16,000","15,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Seung-yeon Lee, Hiroko Takahashi","email":"","localUrl":"ikebukuro","url":"sunshine-city","hasSo":true,"locationCode":"SSC","hasVo":false,"hasCo":true,"hasCoLounge":true,"hasMr":true,"Id":"3117","Longitude":"139.7180240000","Latitude":"35.7294450000","ThumbnailUrl":"/media/5599","ThumbnailAlias":"","jaAddress":"〒170-6045<br />東京都豊島区東池袋3-1-1<br />サンシャイン60 45階","BuildingName":"豊島区 - 池袋サンシャイン60","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["16,600","11,100","72,100"],"coworking":["7,750","2,250","14,500"],"meetingRooms":["13,300","7,800","52,300"],"dayOffice":["9,250","3,750","28,000"]},"largeImageUrl":"sunshine-city.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"池袋駅"},{"name":"Ariake Frontier Building Tower B","namae":"有明フロンティアビルB棟","address":"Level 9 Ariake Frontier Building Tower B<br />3-7-26 Ariake Koto-ku<br />Tokyo 135-0063 Japan","phoneNumber":"3 5530 9100","faxNumber":"3 5530 9191","area":"ariake-bay","voPrices":["21,000","11,000","7,000","7,000"],"voSpecialDeal":["14,700","0","0","0"],"hasVoDeal":true,"manager":"Kumiko Maehara, Yuko Nakajima","email":"","localUrl":"ariake","url":"servcorp-tokyo-big-sight-ariake-frontier-building","hasSo":true,"locationCode":"ARI","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3121","Longitude":"139.7920280000","Latitude":"35.6311380000","ThumbnailUrl":"/media/5580","ThumbnailAlias":"","jaAddress":"〒135-0063<br />東京都江東区有明3-7-26<br />有明フロンティアビルB棟9階","BuildingName":"江東区 - サーブコープ東京ビッグサイト - 有明フロンティアビルB棟","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["14,600","11,100","70,100"],"coworking":["5,750","2,250","12,500"],"meetingRooms":["11,300","7,800","50,300"],"dayOffice":["7,250","3,750","26,000"]},"largeImageUrl":"servcorp-tokyo-big-sight-ariake-frontier-building.jpg","bestPrice":true,"bestAddress":false,"newLocation":false,"closestStation":"国際展示場正門駅"}],"yokohama":[{"name":"TOC Minato Mirai Yokohama","namae":"横浜TOCみなとみらい","address":"Level 10 TOC Minato Mirai<br />1-1-7 Sakuragi-cho Naka-ku<br />Yokohama Kanagawa 231-0062 Japan","phoneNumber":"45 228 5100","faxNumber":"45 228 5151","area":"Yokohama","voPrices":["39,000","22,000","17,000","11,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Risa Togashi","email":"","localUrl":"tocminatomirai","url":"toc-minato-mirai","hasSo":true,"locationCode":"TMY","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3286","Longitude":"139.6304800000","Latitude":"35.4522800000","ThumbnailUrl":"/media/5600","ThumbnailAlias":"","jaAddress":"〒231-0062<br />神奈川県横浜市中区桜木町1-1-7<br />TOCみなとみらい10階","BuildingName":"中区 - TOCみなとみらい ","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["15,100","9,600","63,100"],"coworking":["8,860","3,360","18,940"],"meetingRooms":["13,900","8,400","55,900"],"dayOffice":["11,500","6,000","41,500"]},"largeImageUrl":"toc-minato-mirai.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"桜木町駅"}],"osaka":[{"name":"Umeda Hilton Plaza West Office Tower","namae":"梅田ヒルトンプラザウエスト オフィスタワー","address":"Levels 18 &amp; 19 Hilton Plaza West Office Tower<br />2-2-2 Umeda Kita-ku <br />Osaka 530-0001 Japan","phoneNumber":"6 6133 4550","faxNumber":"6 6133 4646","area":"Osaka","voPrices":["34,500","20,000","16,000","11,001"],"voSpecialDeal":["22,500","12,500","11,800","9,000"],"hasVoDeal":true,"manager":"Yoko Shinobu, Kaori Sameshima","email":"","localUrl":"hiltonpraza","url":"hilton-plaza-west-office-tower","hasSo":true,"locationCode":"YOS","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3291","Longitude":"135.4952540000","Latitude":"34.6999700000","ThumbnailUrl":"/media/5585","ThumbnailAlias":"","jaAddress":"〒530-0001<br />大阪府大阪市北区梅田2-2-2 <br />ヒルトンプラザウエストオフィスタワー18階・19階","BuildingName":"北区 - 梅田ヒルトンプラザウエストオフィスタワー - 18階増床オープン！","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["17,500","12,000","77,500"],"coworking":["8,860","3,360","19,000"],"meetingRooms":["13,900","8,400","55,900"],"dayOffice":["11,500","6,000","41,500"]},"largeImageUrl":"hilton-plaza-west-office-tower.jpg","bestPrice":false,"bestAddress":true,"newLocation":false,"closestStation":"西梅田駅"},{"name":"Shinsaibashi Cartier Building","namae":"カルティエビル - 心斎橋プラザビル新館","address":"Level 4 Shinsaibashi Plaza Building Shinkan<br />3-12-21 Minami-Senba Chuo-ku<br />Osaka 542-0081 Japan","phoneNumber":"6 6258 3700","faxNumber":"6 6258 3755","area":"Shinsaibashi","voPrices":["24,200","16,000","13,000","9,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Sophia Esaka","email":"","localUrl":"shinsaibashi","url":"cartier-building-shinsaibashi-plaza","hasSo":true,"locationCode":"SPB","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":false,"Id":"3295","Longitude":"135.5007340000","Latitude":"34.6757890000","ThumbnailUrl":"/media/5581","ThumbnailAlias":"","jaAddress":"〒542-0081<br />大阪府大阪市中央区南船場3-12-21<br />心斎橋プラザビル新館4階","BuildingName":"中央区 - カルティエビル - 心斎橋プラザビル新館","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["14,100","9,600","62,100"],"coworking":["6,750","2,250","13,500"],"meetingRooms":["12,300","7,800","51,300"],"dayOffice":["9,250","3,750","27,000"]},"largeImageUrl":"cartier-building-shinsaibashi-plaza.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"心斎橋駅"},{"name":"Edobori Center Building","namae":"江戸堀センタービル","address":"Level 9, Edobori Center Building<br />2-1-1 Edobori Nishi-ku<br />Osaka 550-0002 Japan","phoneNumber":"6 6225 1000","faxNumber":"6 6225 1111","area":"Osaka","voPrices":["24,200","11,000","10,000","7,000"],"voSpecialDeal":["15,000","7,700","7,000","5,000"],"hasVoDeal":false,"manager":"Hitomi Yokoyama","email":"","localUrl":"edobori","url":"edobori-center-building","hasSo":true,"locationCode":"EDO","hasVo":true,"hasCo":true,"hasCoLounge":true,"hasMr":true,"Id":"3299","Longitude":"135.4914330000","Latitude":"34.6879220000","ThumbnailUrl":"/media/5582","ThumbnailAlias":"","jaAddress":"〒550-0002<br />大阪府大阪市西区江戸堀2-1-1<br />江戸堀センタービル9階","BuildingName":"西区 - 江戸堀センタービル ","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["14,600","11,100","70,100"],"coworking":["5,750","2,250","12,500"],"meetingRooms":["11,300","7,800","50,300"],"dayOffice":["7,250","3,750","26,000"]},"largeImageUrl":"edobori-center-building.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"肥後橋駅"}],"nagoya":[{"name":"Nagoya Lucent Tower","namae":"名古屋ルーセントタワー","address":"Level 40 Nagoya Lucent Tower<br />6-1 Ushijima-cho Nishi-ku<br />Nagoya 451-6040 Japan","phoneNumber":"52 569 1500","faxNumber":"52 569 1590","area":"Nagoya","voPrices":["34,500","17,900","16,800","13,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Sayuri Tanaka","email":"","localUrl":"lucent","url":"nagoya-lucent-tower","hasSo":true,"locationCode":"LUC","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3308","Longitude":"136.8811310000","Latitude":"35.1749330000","ThumbnailUrl":"/media/5587","ThumbnailAlias":"","jaAddress":"〒451-6040<br />愛知県名古屋市西区牛島町6-1<br />名古屋ルーセントタワー40階","BuildingName":"西区 - 名古屋ルーセントタワー","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["17,600","11,100","73,100"],"coworking":["9,860","3,360","19,940"],"meetingRooms":["14,300","7,800","53,300"],"dayOffice":["12,500","6,000","42,500"]},"largeImageUrl":"nagoya-lucent-tower.jpg","bestPrice":false,"bestAddress":true,"newLocation":false,"closestStation":"名古屋駅"},{"name":"Nagoya Nikko Shoken Building","namae":"名古屋日興證券ビル","address":"Level 4 Nagoya Nikko Shoken Building<br />3-2-3 Sakae Naka-ku<br />Nagoya 460-0008 Japan","phoneNumber":"52 269 8200","faxNumber":"52 269 8498","area":"Sakae","voPrices":["29,500","16,800","13,700","9,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Ayano Akatsuka","email":"","localUrl":"nikko","url":"nagoya-nikko-shoken-building","hasSo":true,"locationCode":"NAG","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":true,"Id":"3312","Longitude":"136.9036650000","Latitude":"35.1683590000","ThumbnailUrl":"/media/5588","ThumbnailAlias":"","jaAddress":"〒460-0008<br />愛知県名古屋市中区栄3-2-3<br />名古屋日興證券ビル4階","BuildingName":"中区 - 名古屋日興證券ビル","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["15,600","11,100","71,100"],"coworking":["6,750","2,250","13,500"],"meetingRooms":["12,300","7,800","51,300"],"dayOffice":["8,250","3,750","27,000"]},"largeImageUrl":"nagoya-nikko-shoken-building.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"栄え駅"}],"fukuoka":[{"name":"NMF Hakata Ekimae Building","namae":"福岡NMF博多駅前ビル","address":"Level 2 NMF Hakata Ekimae Building<br />1-15-20 Hakata Ekimae Hakata-ku<br />Fukuoka 812-0011 Japan","phoneNumber":"92 419 2300","faxNumber":"92 419 2350","area":"Hakata","voPrices":["22,900","10,500","10,500","8,000"],"voSpecialDeal":["0","0","0","0"],"hasVoDeal":false,"manager":"Ayaka Fujishima","email":"","localUrl":"hakata","url":"nmf-hakata-ekimae-building","hasSo":true,"locationCode":"NHE","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":false,"Id":"3322","Longitude":"130.4191090000","Latitude":"33.5918510000","ThumbnailUrl":"/media/5846","ThumbnailAlias":"","jaAddress":"〒812-0011<br />福岡県福岡市博多区博多駅前1-15-20<br />NMF博多駅前ビル2階","BuildingName":"博多区 - NMF博多駅前ビル","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["13,600","9,600","61,600"],"coworking":["6,250","2,250","13,000"],"meetingRooms":["11,800","7,800","50,800"],"dayOffice":["7,750","3,750","26,500"]},"largeImageUrl":"NMF-hakata-ekimae-building.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"博多駅"},{"name":"Fukuoka Tenjin Fukoku Seimei Building","namae":"福岡天神フコク生命ビル","address":"Level 15 Fukuoka Tenjin Fukoku Seimei Building<br />1-9-17 Tenjin Chuo-ku<br />Fukuoka 810-0001 Japan","phoneNumber":"92 717 3400","faxNumber":"92 717 3434","area":"Tenjin","voPrices":["22,900","11,600","11,600","11,000"],"voSpecialDeal":["15,900","8,000","8,000","7,700"],"hasVoDeal":false,"manager":"Haruka Kanaguchi","email":"tenjin@servcorp.co.jp","localUrl":"tenjin","url":"fukuoka-tenjin-fukoku-seimei-building","hasSo":true,"locationCode":"DVT","hasVo":true,"hasCo":false,"hasCoLounge":true,"hasMr":false,"Id":"3326","Longitude":"130.4012710000","Latitude":"33.5915795000","ThumbnailUrl":"/media/5583","ThumbnailAlias":"","jaAddress":"〒810-0001<br />福岡県福岡市中央区天神1-9-17 <br />福岡天神フコク生命ビル 15階","BuildingName":"中央区 - 福岡天神フコク生命ビル","Description":null,"PriceRow":null,"IsReduced":false,"IsReducedServiceOffice":false,"IsRemovePricingMobile":false,"IsShowOnCoworkingPage":false,"Content":null,"ShareOfficeContent":null,"ServiceOfficeContent":null,"MeetingRoomContent":null,"mrPrices":{"boardroom":["16,600","11,100","72,100"],"coworking":["7,750","2,250","14,500"],"meetingRooms":["13,300","7,800","52,300"],"dayOffice":["9,250","3,750","28,000"]},"largeImageUrl":"fukuoka-tenjin-fukoku-seimei-building.jpg","bestPrice":false,"bestAddress":false,"newLocation":false,"closestStation":"天神駅"}]}');
var aboutData = [
  {url:'memorial.jpg', name:'', description:''},
  {url:'pacifico.jpg', name:'横浜国際平和会議場',description:'横浜国際平和会議場（パシフィコ横浜）は世界最大級の国際会議場です'},
  {url:'red.jpg', name:'横浜赤レンガ倉庫',description:'横浜赤レンガ倉庫は広場と公園を備えエリアを代表する観光施設となっています'}
]
var testimonialData = [
  {
    text:"皆様とても対応が早く、日々様々な業務を手伝ってもらっています。ロ－コスト＆ハイリタ－ンです。立地も最高ですので、お客様からもとても好評化を得ています。",
    name:"原口恵太",
    url:"https://www.google.com/maps/contrib/105419924072725280246/reviews"
  },
  {
    text:"さすがレンタルオフィスのリッツカールトンと言われるだけあり、サービスの質、施設の美しさ、ITの強さはいうことありません。こちらのバーチャルオフィスにも入り、フィリピン出張に行った時にはきちんと品川の責任者からマニラの責任者にこちらの要求するものをしっかりと伝えていただき、顧客とのミーティングで本当に役に立ちました。",
    name:"Masafumi Otsuka",
    url:"https://www.google.com/maps/contrib/115265204277050796913/reviews"
  },
  {
    text:"素晴らしいロケーションとスタッフのもと、最高の環境で仕事ができますね。業種柄、お客様をオフィスにお呼びする機会も多いのですが、みなオフィスの素晴らしさに感動されます。そのため、商談等もスムーズに進むケースが多く、そこでも恩恵を受けております。",
    name:"木下和紀",
    url:"https://www.google.com/maps/contrib/115167979572237621121/reviews"
  }
];
// END MOCK DATA

  var TokyoContainer = React.createClass({
    componentDidMount: function() {
      initializeSite();
    },
    divideIntoAreas: function(locationData) {
      return locationData.reduce((cum, next)=>{
          if(!cum[next.area]){cum[next.area] = []}
          cum[next.area].push(next);
          return cum;
        }, {})
    },
    onSelectedLocationChange: function(url) {
      var location = this.props.data.tokyo.filter( function(location) {
        return location.url === url;
      })[0];
      this.setState({
        selectedLocation: location
      });
    },
    getInitialState: function() {
      return { selectedLocation: this.props.data.tokyo[0] }
    },
    render: function() {
      return (
        <div id="tokyo-container">
          {/*
          <Navigation areaData={this.divideIntoAreas(this.props.data.tokyo)} />
          <AreaContainer onUpdate={this.onSelectedLocationChange} areaData={this.divideIntoAreas(this.props.data.tokyo)} />
          <Around data={this.props.data.tokyo} location={this.state.selectedLocation} />
          */}
          <TestimonialBox data={testimonialData} />
          <Contact />
          <Company />
          <Footer />
        </div>
      )
    }
  });


  //ALL THE LOCATIONS
  var Navigation = React.createClass({
    areaDictionary: {
      "marunouchi-otemachi-nihonbashi":"丸の内・大手町・日本橋エリア",
      "shinbashi-hibiya-toranomon":"新橋・日比谷・虎ノ門エリア",
      "roppongi-aoyama-ebisu":"六本木・青山・恵比寿エリア",
      "shinagawa-tamachi-hamamatsucho":"品川・田町・浜松町エリア",
      "shinjuku-ikebukuro":"新宿・池袋エリア",
      "ariake-bay":"有明・ベイエリア"
    },
    makeNavigation: function() {
      return Object.keys(this.props.areaData).map((area) => {
        return <option key={area} value={area}>{this.areaDictionary[area]}</option>
      });
    },
    render: function() {
      return (
          <div className="container">
            <div className="row">
              <div className="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2>東京都内の拠点一覧</h2>
                <p>ひと月単位で利用可能な、一流の調度品とITインフラを完備した世界最高品質のレンタルオフィス</p>
              </div>
              <div className="col-md-12" id="area-container">
                エリアの選択　<select id="area-list">
                  <option value="top">全ての拠点</option>
                  {this.makeNavigation()}
                </select>
              </div>
            </div>
          </div>
      );
    }
  });
  var AreaContainer = React.createClass({
    areaDictionary: {
      "marunouchi-otemachi-nihonbashi":"丸の内・大手町・日本橋エリア",
      "shinbashi-hibiya-toranomon":"新橋・日比谷・虎ノ門エリア",
      "roppongi-aoyama-ebisu":"六本木・青山・恵比寿エリア",
      "shinagawa-tamachi-hamamatsucho":"品川・田町・浜松町エリア",
      "shinjuku-ikebukuro":"新宿・池袋エリア",
      "ariake-bay":"有明・ベイエリア"
    },
    makeAreas: function() {
      return Object.keys(this.props.areaData).map( (area) => {
        return <Area onUpdate={this.props.onUpdate} key={area} name={area} areaData={this.props.areaData[area]} areaDictionary={this.areaDictionary} />
      });
    },
    render: function() {
      return (
        <section id="portfolio">
          <div id="area-container">
            {this.makeAreas()}
          </div>
        </section>
      )
    }
  });
  var Area = React.createClass({
    render: function() {
      return (
        <div className="container-fluid area" id={this.props.name.toLowerCase()}>
          <div className="row">
            <div className="col-xs-12">
              <h3>{this.props.areaDictionary[this.props.name]}</h3>
            </div>
            <LocationList onUpdate={this.props.onUpdate} locationData={this.props.areaData} />
          </div>
        </div>
      );
    }
  });
  var LocationList = React.createClass({
    makeLocations: function() {
      var that = this;
      var makeKu = function(str) {
        return str.split(' - ')[0];
      }
      return this.props.locationData.map(function(location, i){
        return (
          <Location onUpdate={that.props.onUpdate} key={location.namae} url={location.url} name={location.namae} station={location.closestStation} ku={makeKu(location.BuildingName)} />
        );
      });
    },
    render: function() {
      return (
        <div>
          {this.makeLocations()}
        </div>
      )
    }
  });
  var Location = React.createClass({
    update: function() {
      this.props.onUpdate(this.props.url);
    },
    componentDidMount: function() {
      // Close modals when someone clicks a button
      $('.more a').click(function(e) {
        $(e.target).closest('.modal').modal('hide');
      });
    },
    render: function() {
      return (
        <div className="col-sm-3">
          <div className="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div className="folio-image">
              <img className="img-responsive" src={'img/buildings/resized/' + this.props.url + '.jpg'} alt="" />
            </div>
            <div className="overlay">
              <div className="overlay-content">
                <div className="overlay-text">
                  <div className="folio-info">
                    <h3>{this.props.name}</h3>
                    <p>{this.props.ku + ' - ' + this.props.station}</p>
                  </div>
                  <div className="folio-overview">
                    <span onClick={this.update} className="folio-link"><a data-scroll href="#around"><i className="fa fa-link"></i></a></span>
                    <span className="folio-expand"><a href={'img/buildings/' + this.props.url + '.jpg'} data-lightbox="portfolio"><i className="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      );
    }
  });


  var Around = React.createClass({
    render: function() {
      return (
        <section id="around" className="parallax">
          <div className="container">
            <Title>東京周辺情報</Title>
            <AboutThisLocation location={this.props.location} />
            <AboutContainer selectedLocation={this.props.location.url} areaData={this.props.data} />
          </div>
        </section>
      )
    }
  });
  var Title = React.createClass({
    render: function() {
      return (
        <div className="row">
          <div className="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>{this.props.children}</h2>
          </div>
        </div>
      );
    }
  });
  var AboutThisLocation = React.createClass({
    bestAddressEl: function() {
      return (<p><span>東京の一等地住所</span></p>)
    },
    newLocationEl: function() {
      return (<p><span>新規オープン！</span></p>)
    },
    bestPriceEl: function() {
      return (<p><span>東京のベストプライス</span></p>)
    },
    parseAddress: function(text) {
      return text.split(/<br(?:\s\/)?>/).map(function(line){
          return (
            <span key={line}>
              {line}<br />
            </span>
          )
        });
    },
    render: function() {
      return (
        <div className="row" id="about-this-location">
          <div className="col-sm-5">
            <img src={'img/buildings/resized/' + this.props.location.url + '.jpg'} alt={this.props.location.url} />
          </div>
          <div className="col-sm-7">
            <p><strong>住所:</strong> <br/>{this.parseAddress(this.props.location.jaAddress)}</p>
            <p><strong>電話番号:</strong> <br/>0{this.props.location.phoneNumber}</p>
            <span className="superlative">
              {this.props.location.bestAddress ? this.bestAddressEl() : ""}
              {this.props.location.newLocation ? this.newLocationEl() : ""}
              {this.props.location.bestPrice ? this.bestPriceEl() : ""}
            </span>
            <p className="more">
              <a data-scroll="" href="#contact">お問合せ</a>
              <a data-scroll="" target="_new" href={'http://www.servcorp.co.jp/ja/locations/tokyo/' + this.props.location.url + '/'}>もっと読む</a>
            </p>
          </div>
        </div>
      )
    }
  });
  var AboutContainer = React.createClass({
    loadPicturesFromServer: function() {
      var that = this;
      $.getJSON('./assets/around.json', function(data) {
        that.setState({aroundData: data});
      })
    },
    makePlacesOfInterest: function() {
      if(this.state.aroundData[this.props.selectedLocation]){
        return this.state.aroundData[this.props.selectedLocation].map(function(place) {
          return (
            <PlaceOfInterest key={place.url} location={this.props.selectedLocation} url={place.url} name={place.jaTitle} description={place.jaDescription} />
          )
        }.bind(this));
      } else {
        return [];
      }
    },
    getInitialState: function() {
      return { aroundData: [] };
    },
    componentDidMount: function() {
      this.loadPicturesFromServer();
    },
    render: function() {
      return (
        <div className="row">
          {this.makePlacesOfInterest()}
        </div>
      )
    }
  });
  var PlaceOfInterest = React.createClass({
    render: function() {
      return (
        <div className="col-sm-4">
          <div className="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h3>{this.props.name}</h3>
            <img src={'./img/around/' + this.props.location + '/jpg/' + this.props.url } alt="" />
            <p>{this.props.description}</p>
          </div>
        </div>
      )
    }
  });


  //TESTIMONIALS
  var TestimonialBox = React.createClass({
    render: function() {
      return (
        <section id="testimonials" className="parallax">
          <div>
            <a className="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i className="fa fa-angle-left"></i></a>
            <a className="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i className="fa fa-angle-right"></i></a>
            <div className="container">
              <div className="row">
                <div className="col-sm-8 col-sm-offset-2">
                  <div className="twitter-icon text-center">
                    <i className="fa fa-google"></i>
                    <h4>お客様の声</h4>
                  </div>
                  <div id="twitter-carousel" className="carousel slide" data-ride="carousel" data-interval="false">
                    <Testimonial data={this.props.data} />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      )
    }
  });
  var Testimonial = React.createClass({
    makeTestimonials: function(data) {
      return data.map(function(testimonial, i) {
        return (
          <div key={testimonial.url} className={i > 0 ? "item" : "item active" }>
            <p>
              {testimonial.text}
              <br/>
              - <a href={testimonial.url}><span>{testimonial.name}</span> </a>
            </p>
          </div>
        )
      });
    },
    render: function() {
      return (
        <div className="carousel-inner">
          {this.makeTestimonials(this.props.data)}
        </div>
      )
    }
  });

  var Contact = React.createClass({
    render: function() {
      return (
        <section id="contact">
          <div id="google-map" className="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
          <div id="contact-us" className="parallax">
            <div className="container">
              <div className="row">
                <div className="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <h2>お問合せ</h2>
                  <p>サーブコープのサービス付きレンタルオフィス、バーチャルオフィス、貸会議室についてのご質問は、下記フォームより送信ください。担当者より速やかにご連絡いたします。</p>
                </div>
              </div>
              <div id="contact" className="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div className="row">
                  <div className="col-sm-6">
                    <form id="main-contact-form" name="contact-form" method="post" action="#">
                      <div className="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div className="col-sm-6">
                          <div className="form-group">
                            <input type="text" name="name" className="form-control" placeholder="名前" required="required" />
                          </div>
                        </div>
                        <div className="col-sm-6">
                          <div className="form-group">
                            <input type="email" name="email" className="form-control" placeholder="メールアドレス" required="required" />
                          </div>
                        </div>
                      </div>
                      <div className="form-group">
                        <input type="text" name="subject" className="form-control" placeholder="お問合せ項目" required="required" />
                      </div>
                      <div className="form-group">
                        <textarea name="message" id="message" className="form-control" rows="4" placeholder="お問い合わせ内容" required="required"></textarea>
                      </div>
                      <div className="form-group">
                        <button type="submit" className="btn-submit">送信</button>
                      </div>
                    </form>
                  </div>
                  <div className="col-sm-6">
                    <div className="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                      <p>営業時間　平日8:30-17:30</p>
                      <ul className="address">
                        <li><i className="fa fa-map-marker"></i> <span> 住所:</span> <br />〒100-0005<br />東京都千代田区丸の内1-8-3<br />丸の内トラストタワー本館 20階</li>
                        <li><i className="fa fa-phone"></i> <span> 電話番号:</span> <br />0120 8945 66</li>
                        <li><i className="fa fa-globe"></i> <span> ウェブサイト:</span> <br /><a href="http://www.servcorp.co.jp/ja/">公式ウェブサイト</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      )
    }
  })

  var Company = React.createClass({
    render: function() {
      return (
        <section id="company" className="parallax">
          <div className="container">
            <div className="row">
              <div className="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2>会社概要</h2>
              </div>
            </div>
            <div className="row">
              <div className="col-xs-12">
                <p><strong>会社名:</strong> <br />
                  サーブコープジャパン株式会社 <br />1994年9月設立
                </p>
                <p><strong>本社所在地:</strong> <br />
                  東京都新宿区西新宿一丁目26番2号　新宿野村ビル32階
                </p>
                <p><strong>事業概要:</strong> <br />
                  サービス付きレンタルオフィス、バーチャルオフィス、貸し会議室の提供
                </p>
                <p>私たちは、世界最高水準のサービス付きレンタルオフィスおよびバーチャルオフィスのプロバイダーであり続けるという信念を持っています。当社の理念は｢経費をシェア・削減すれば、ビジネスは成功する｣というもの。この理念に従って、ビジネスの成功・発展に必要なサービスやサポートを少ない費用で提供するよう務めています。<br />
      私たちは、世界各国有数の都心・ビジネス一等地において拠点を展開するだけではなく、ビジネスの発展に欠かせない最高の施設、最高のITテクノロジー、最高の人材を提供します。<br />
      私たちのチームは、積極的かつ効率的に仕事をし、いつでもお客様をサポートできる態勢を整えています。チームの関心は、お客様のビジネスの成功・成長のために万全を尽くすことにあります。<br />
      ビジネスを力強くサポートするテクノロジー主導型ソリューションを開発するうえで、私たちはこの業界における革新者であることに誇りを持ち続けてきました。その想いはこれからも変わることがありません。</p>
              </div>
            </div>
            <div className="row count">
              <div className="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="50ms">
                <i className="fa fa-user"></i>
                <h3 className="timer">35000</h3>
                <span>総顧客数</span>
              </div>
              <div className="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <i className="fa fa-globe"></i>
                <h3 className="timer">150</h3>
                <span>全世界の拠点数</span>
              </div>
              <div className="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
                <i className="fa fa-building"></i>
                <h3 className="timer">24</h3>
                <span>日本国内の拠点数</span>
              </div>
              <div className="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
                <i className="fa fa-comment-o"></i>
                <h3>24/7</h3>
                <span>ITサポート</span>
              </div>
            </div>
          </div>
        </section>
      )
    }
  });

  var Footer = React.createClass({
    render: function() {
      return (
        <footer id="footer">
          <div className="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div className="container text-center">
              <div className="footer-logo">
                <a href="index.html"><img className="img-responsive" src="img/logo.png" alt="" /></a>
              </div>
              <div className="social-icons">
                <ul>
                  <li><a className="twitter" href="https://twitter.com/servcorpjapan"><i className="fa fa-twitter"></i></a></li>
                  <li><a className="facebook" href="https://www.facebook.com/ServcorpJapan/"><i className="fa fa-facebook"></i></a></li>
                  <li><a className="instagram" href="https://www.instagram.com/servcorpjapan/"><i className="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div className="footer-bottom">
            <div className="container">
              <div className="row">
                <div className="col-sm-6">
                  <p>&copy; 2016 Servcorp Japan KK.</p>
                </div>
                <div className="col-sm-6">
                  <p className="pull-right">Crafted by <a href="http://designscrazed.org/">Allie</a></p>
                </div>
              </div>
            </div>
          </div>
        </footer>
      )
    }
  });

  ReactDOM.render(<TokyoContainer data={locationsData} />, document.getElementById('react-container'));

  function initializeSite() {
    jQuery(function($) {

    	//Preloader
    	var preloader = $('.preloader');
    	$(window).load(function(){
    		preloader.remove();
    	});

    	//#main-slider
    	var slideHeight = $(window).height();
    	$('#home-slider .item').css('height',slideHeight);

    	$(window).resize(function(){'use strict',
    		$('#home-slider .item').css('height',slideHeight);
    	});

    	//Scroll Menu
    	$(window).on('scroll', function(){
    		if( $(window).scrollTop()>slideHeight ){
    			$('.main-nav').addClass('navbar-fixed-top');
          $('.phone-box').addClass('phone-box-fixed');
    		} else {
    			$('.main-nav').removeClass('navbar-fixed-top');
          $('.phone-box').removeClass('phone-box-fixed');
    		}
    	});

    	// Navigation Scroll
    	$(window).scroll(function(event) {
    		Scroll();
    	});

    	$('.navbar-collapse ul li a').on('click', function() {
    		$('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
    		return false;
    	});

    	// User define function
    	function Scroll() {
    		var contentTop      =   [];
    		var contentBottom   =   [];
    		var winTop      =   $(window).scrollTop();
    		var rangeTop    =   200;
    		var rangeBottom =   500;
    		$('.navbar-collapse').find('.scroll a').each(function(){
    			contentTop.push( $( $(this).attr('href') ).offset().top);
    			contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
    		})
    		$.each( contentTop, function(i){
    			if ( winTop > contentTop[i] - rangeTop ){
    				$('.navbar-collapse li.scroll')
    				.removeClass('active')
    				.eq(i).addClass('active');
    			}
    		})
    	};

    	$('#tohash').on('click', function(){
    		$('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
    		return false;
    	});

    	//Initiat WOW JS
    	new WOW().init();
    	//smoothScroll
    	smoothScroll.init();

    	// Progress Bar
    	$('#about-company').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
    		if (visible) {
    			$.each($('div.progress-bar'),function(){
    				$(this).css('width', $(this).attr('aria-valuetransitiongoal')+'%');
    			});
    			$(this).unbind('inview');
    		}
    	});

    	//Countdown
    	$('#company').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
    		if (visible) {
    			$(this).find('.timer').each(function () {
    				var $this = $(this);
						var originalText = $this.text();
    				$({ Counter: 0 }).animate({ Counter: $this.text() }, {
    					duration: 2000,
    					easing: 'swing',
    					step: function () {
    						$this.text(Math.ceil(this.Counter));
    					},
							complete: function() {
								$this.text(originalText);
							}
    				});
    			});
    			$(this).unbind('inview');
    		}
    	});

    	// Portfolio Single View
    	$('#portfolio').on('click','.folio-read-more',function(event){
    		event.preventDefault();
    		var link = $(this).data('single_url');
    		var full_url = '#portfolio-single-wrap',
    		parts = full_url.split("#"),
    		trgt = parts[1],
    		target_top = $("#"+trgt).offset().top;

    		$('html, body').animate({scrollTop:target_top}, 600);
    		$('#portfolio-single').slideUp(500, function(){
    			$(this).load(link,function(){
    				$(this).slideDown(500);
    			});
    		});
    	});

    	// Close Portfolio Single View
    	$('#portfolio-single-wrap').on('click', '.close-folio-item',function(event) {
    		event.preventDefault();
    		var full_url = '#portfolio',
    		parts = full_url.split("#"),
    		trgt = parts[1],
    		target_offset = $("#"+trgt).offset(),
    		target_top = target_offset.top;
    		$('html, body').animate({scrollTop:target_top}, 600);
    		$("#portfolio-single").slideUp(500);
    	});

    	// Contact form
    	var form = $('#main-contact-form');
    	form.submit(function(event){
    		event.preventDefault();
    		var form_status = $('<div class="form_status"></div>');
    		$.ajax({
    			url: $(this).attr('action'),
    			beforeSend: function(){
    				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
    			}
    		}).done(function(data){
    			form_status.html('<p class="text-success">Thank you for contact us. As early as possible  we will contact you</p>').delay(3000).fadeOut();
    		});
    	});

    	//Google Map
    	function initialize_map () {
            var myOptions = {
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("google-map"), myOptions);
            
            var markers = [];
            var infoWindow = new google.maps.InfoWindow();
            var data = locationsData.tokyo;
						// The following commented out function can be used to select the data from all Japan Locations,
						// not just tokyo.
//						var data = Object.keys(locationsData).reduce(function(all, city){
//							return all.concat(locationsData[city]);
//						}, []);
            
            var closeClickListenerFn = markerCloseClickFunction(i, latLng); 
            google.maps.event.addListener(infoWindow, 'closeclick', closeClickListenerFn);
            
            for (var i = 0; i < data.length; ++i) {
                var latLng = new google.maps.LatLng(data[i].Latitude, data[i].Longitude);
                var marker = new google.maps.Marker({
                    position: latLng,
                    draggable: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    map: map
                });

                var clickListenerFn = markerClickFunction(i, latLng);
                google.maps.event.addListener(marker, 'click', clickListenerFn);

                markers.push(marker);
            }

            function markerClickFunction(i, latlng) {
                return function() {
                    map.panTo(latlng);
                    
                    /* Info Window */
                    var content = "<p class='map-popup'><img src='http://www.servcorp.co.jp/" + data[i].ThumbnailUrl + "' alt='" + data[i].ThumbnailAlias + "' width='70' /><span>" + data[i].address + "<br><a href='http://www.servcorp.co.jp/ja/locations/tokyo/" + data[i].url + "'> " + data[i].namae + " &raquo;</a> </span></p>";
                    
                    infoWindow.setContent(content);                    
                    infoWindow.setPosition(latlng);
                    infoWindow.open(map);
                };
            };

            function markerCloseClickFunction(i, latlng) { 
                return function() {
                };
            };
            
            // Auto Zoom to fit all markers
                
                var latlngbounds = new google.maps.LatLngBounds( );
                for ( var i = 0; i < data.length; i++ ) {
                    latlngbounds.extend(new google.maps.LatLng(data[i].Latitude, data[i].Longitude));
                }
                map.fitBounds(latlngbounds);
                
            
            $(".lnkLocate").click(function() {
                var id = $(this).attr('id');
                $('html, body').animate({scrollTop: $("#google-map").offset().top - 20}, 1000);
                for (var i = 0; i < data.length; ++i) {
                    if(id == data[i].Id){
                        var latLng = new google.maps.LatLng(data[i].Latitude, data[i].Longitude);
                        markerClickFunction(i, latLng)();
                    }
                }
                return false;
            });
        }
				initialize_map();
    });

  }
</script>

</body>
</html>
