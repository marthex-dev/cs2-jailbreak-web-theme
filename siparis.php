
<!--==================header - marthex================== -->
<?php include("menu/header.php");
  $sayfa="Sipariş";
  ?>
<?php include("DiscordWebhook.php"); ?>
<!--==================header - marthex================== -->

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="css/5e6b428acc8c4e222d1beb918a0f.css?themeRevisionID=5f30e2a790832f3e96009402"/>
<link type="text/css" rel="stylesheet" href="css/payment_styles0196.css?3.3.27345" />
<link type="text/css" rel="stylesheet" href="css/payment_feature0196.css?3.3.27345" />
<style type="text/css" id="form-designer-style">
 
</style>

</head>
<body>

<form class="jotform-form" method="post" accept-charset="utf-8">
  <div role="main" class="form-all">
  <div class="row">
        </div>
  
 <?php
                        if (isset($_POST['discordsend'])) {
   
    $q8_odemeYontemi=$_POST["q8_odemeYontemi"];
    $nick=$_POST["nick"];
    $steam=$_POST["steam"];
    $urun=$_POST["urun"];
	$q5_odemeYontemi=$_POST["q31_odemeYontemi"];
	$not=$_POST["not"]; 
	if (isset($not)) {
    $not = "Notu yok.";
}
    $dw = new DiscordWebhook();
                $dw->setWebhook('https://discord.com/api/webhooks/881171615986098216/oDPjpR3GfZCx1YR6oHQ7BF7R2bD6cAHv-L82ETuZq2jv5zo71khq0Y8nF0_gYJnnZfHg');

            $dw->newMessage()
                ->setDescription(' **Okyanus Jailbreak Market** ')
                ->addField("Ödeme Şekli", $q8_odemeYontemi,false)
				->addField("Nick", $nick,false)
				->addField("Steam ID", $steam,false)
				->addField("Ürün", $urun,false)
				->addField("Siparişini verdiğim ürünün süresi?", $q5_odemeYontemi,false)
				->addField("Not", $not,false)
                ->send();
		
                header ("Location:fiyatlar.php");
      
}
               ?>
			   
			   
         <!-- shop-area -->
         <section class="shop-area white-bg pt-115 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-three text-center mb-20">
                            <h2><span>Sipariş </span>Formu</h2>
                            </div>
                        </div>
                    </div>
                </div>
                               
            </section>
            <!-- shop-area-end --> 
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li class="form-line jf-required" data-type="control_radio" id="id_8">
        <label class="form-label form-label-left" id="odeme" name="odeme" for="input_8">
          Ödeme Yöntemi
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_8" class="form-input jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_8" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_8" class="form-radio validate[required]" id="input_8_0" name="q8_odemeYontemi" value="İninal" required="" />
              <label id="label_input_8_0" for="input_8_0"> İninal </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_8" class="form-radio validate[required]" id="input_8_1" name="q8_odemeYontemi" value="Papara" required="" />
              <label id="label_input_8_1" for="input_8_1"> Papara </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_8" class="form-radio validate[required]" id="input_8_2" name="q8_odemeYontemi" value="Havale/EFT" required="" />
              <label id="label_input_8_2" for="input_8_2"> Havale/EFT </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_8" class="form-radio validate[required]" id="input_8_3" name="q8_odemeYontemi" value="Skin - Trade (%25)" required="" />
              <label id="label_input_8_3" for="input_8_3"> Skin - Trade (%25) </label>
            </span>
          </div>
        </div>
      </li>
     <li class="form-line jf-required" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="first_3">
          Kullanıcı Adı
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="nick" name="nick" class="form-textbox validate[required]" size="10" value="" placeholder="Marthex#9703" data-component="first" aria-labelledby="label_3 sublabel_3_first" required="" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Discord Adınız</label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="steam" name="steam" class="form-textbox validate[required]" placeholder="https://steamcommunity.com/id/marthex" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required="" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Steam URL </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_1">
        <label class="form-label form-label-left form-label-auto" id="label_1" for="input_1">
          İstediğiniz Ürün
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_1" class="form-input jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="urun" name="urun" style="width:310px" data-component="dropdown" required="">
            <option value=""> Ürünü seçiniz. </option>
            <option value="Yetki: Sunucu Yardımcısı"> Yetki: Sunucu Yardımcısı </option>
            <option value="Yetki: Kaptan"> Yetki: Kaptan </option>
            <option value="Yetki: Admin"> Yetki: Admin </option>
            <option value="Yetki: Sponsor ( Sınırsız )"> Yetki: Sponsor ( Sınırsız ) </option>
            <option value="Yetki: Premium ( Sınırsız )"> Yetki: Premium ( Sınırsız ) </option>
            <option value="Model: Testere"> Model: Testere </option>
            <option value="Model: Harry Potter"> Model: Harry Potter </option>
            <option value="Model: Among Us"> Model: Among Us </option>
            <option value="Model: Teemo"> Model: Teemo </option>
			<option value="Sınırsız Market"> Sınırsız Market </option>
            <option value="İsyan Takımı"> İsyan Takımı </option>
          </select>
        </div>
      </li>
	  <li class="form-line jf-required" data-type="control_radio" id="id_21">
        <label class="form-label form-label-top form-label-auto" id="label_21" for="input_21">
          Alacağınız ürünün süresini belirleyin.
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_31" class="form-input jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_8" data-component="radio">
             <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_9" class="form-radio validate[required]" id="input_9_1" name="q31_odemeYontemi" value="1 Aylık istiyorum." required="" />
              <label id="label_input_9_1" for="input_9_1"> 1 Aylık </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_9" class="form-radio validate[required]" id="input_9_2" name="q31_odemeYontemi" value="2 Aylık istiyorum." required="" />
              <label id="label_input_9_2" for="input_9_2"> 2 Aylık </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_9" class="form-radio validate[required]" id="input_9_3" name="q31_odemeYontemi" value="Sınırsız istiyorum." required="" />
              <label id="label_input_9_3" for="input_9_3"> Sınırsız </label>
            </span>
          </div>
        </div>
      </li>
       <li class="form-line" data-type="control_textarea" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6"> Mesajınız: </label>
        <div id="cid_6" class="form-input" data-layout="full">
          <textarea id="not" placeholder="Bırakmak istediğiniz not ve ya mesaj varsa yazınız. ( Yoksa yok yazınız. )" class="form-textarea" name="not" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button name="discordsend" type="submit" class="form-submit-button form-submit-button-simple_blue submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Gönder
            </button>
          </div>
        </div>
      </li>

    </ul>
  </div>

</html>
<script src="../cdn.jotfor.ms/js/vendor/smoothscroll.min9745.js?v=3.3.27345"></script>
<script src="../cdn.jotfor.ms/js/errorNavigation9745.js?v=3.3.27345"></script>

<?php include("menu/footer.php"); ?>
<!--==================footer - Okyanus================== -->