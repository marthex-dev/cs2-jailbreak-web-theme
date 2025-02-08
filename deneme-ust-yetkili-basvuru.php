

<!--==================header - marthex================== -->
<?php include("menu/header.php");
  $sayfa="D. Üst Yetkili";
  ?>
<?php include("DiscordWebhook.php"); ?>
<!--==================header - marthex================== -->
<head>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="css/basvuru.css?themeRevisionID=5f30e2a790832f3e96009402"/>
<link type="text/css" rel="stylesheet" href="css/payment_stylesd7b6.css?3.3.27348" />
<link type="text/css" rel="stylesheet" href="css/payment_featured7b6.css?3.3.27348" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }
    /* Injected CSS Code */
</style>


<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

   JotForm.setConditions([{"action":{"field":"10","visibility":"Show"},"link":"Any","terms":[{"field":"1","operator":"equals","value":"Other"}],"type":"field"}]);
	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_14').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_15').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_16').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_17').hint('17');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_20').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_20').hint('13.00 - 18.00');
       }, 20);
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,null,{"name":"gonder","qid":"2","text":"Gonder","type":"control_button"},null,null,null,null,null,{"name":"istediginizYetki","qid":"8","text":"Istediginiz Yetki","type":"control_radio"},null,null,null,{"name":"yetkiBasvuru","qid":"12","text":"Yetki Basvuru","type":"control_head"},null,{"description":"","name":"isminiz","qid":"14","subLabel":"","text":"Isminiz","type":"control_textbox"},{"description":"","name":"kullaniciAdiniz","qid":"15","subLabel":"","text":"Kullanici Adiniz","type":"control_textbox"},{"description":"","name":"steamLink","qid":"16","subLabel":"","text":"Steam Link","type":"control_textbox"},{"description":"","name":"yasiniz17","qid":"17","subLabel":"","text":"Yasiniz?","type":"control_number"},null,{"description":"","name":"sunucuSaatinizin","qid":"19","subLabel":"","text":"Sunucu saatinizin ekran goruntusu","type":"control_fileupload"},{"description":"","name":"gununHangi20","qid":"20","subLabel":"","text":"Gunun hangi saatlerinde aktif olabilirsiniz?","type":"control_textbox"},{"description":"","name":"kurallariOkudunuz","qid":"21","text":"Kurallari okudunuz mu?","type":"control_radio"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,{"name":"gonder","qid":"2","text":"Gonder","type":"control_button"},null,null,null,null,null,{"name":"istediginizYetki","qid":"8","text":"Istediginiz Yetki","type":"control_radio"},null,null,null,{"name":"yetkiBasvuru","qid":"12","text":"Yetki Basvuru","type":"control_head"},null,{"description":"","name":"isminiz","qid":"14","subLabel":"","text":"Isminiz","type":"control_textbox"},{"description":"","name":"kullaniciAdiniz","qid":"15","subLabel":"","text":"Kullanici Adiniz","type":"control_textbox"},{"description":"","name":"steamLink","qid":"16","subLabel":"","text":"Steam Link","type":"control_textbox"},{"description":"","name":"yasiniz17","qid":"17","subLabel":"","text":"Yasiniz?","type":"control_number"},null,{"description":"","name":"sunucuSaatinizin","qid":"19","subLabel":"","text":"Sunucu saatinizin ekran goruntusu","type":"control_fileupload"},{"description":"","name":"gununHangi20","qid":"20","subLabel":"","text":"Gunun hangi saatlerinde aktif olabilirsiniz?","type":"control_textbox"},{"description":"","name":"kurallariOkudunuz","qid":"21","text":"Kurallari okudunuz mu?","type":"control_radio"}]);}, 20); 
</script>
</head>

 <?php
                        if (isset($_POST['discordsend'])) {
   
    $isim=$_POST["isim"];
	$nick=$_POST["nick"];
    $steam=$_POST["steam"];
	$urun=$_POST["urun"];
	$yas=$_POST["yas"];
	$ss=$_POST["ss"];
	$saat=$_POST["saat"];
    $q5_odemeYontemi=$_POST["q31_odemeYontemi"];

    $dw = new DiscordWebhook();
                $dw->setWebhook('https://discord.com/api/webhooks/891683821584543795/fWSAdrC00OURKg4w76IrGreD_m4odgmaX119Z1_6OxbDFVTkCbicnEFlwIn0EzHJo157');

            $dw->newMessage()
                ->setDescription(' **🌊 Okyanus Jailbreak Yetki Başvuru 🌊** ')
                ->addField("İsim:", $isim,false)
				->addField("Discord Adı:", $nick,false)
				->addField("Steam URL:", $steam,false)
				->addField("Başvurduğu Yetki:", $urun,false)
				->addField("Sunucudaki Saati:", $ss,false)
				->addField("Yaşı:", $yas,false)
				->addField("Günlük Aktifliği:", $saat,false)
				->addField("Kuralları okudu mu?", $q5_odemeYontemi,false)
                ->send();				
}
               ?>
  
<body>
<form class="jotform-form" style="height:150px" method="post" enctype="multipart/form-data" name="form" id="form" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="212383536881966" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <section class="released-games-area white-bg pt-115 pb-70">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title title-style-three text-center mb-20">
                                <h2><span>Deneme Yetkili </span>Başvuru</h2>
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
            </section>
	 
			   
      <li class="form-line jf-required" data-type="control_textbox" id="id_14">
        <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14">
          İsminiz
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_14" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="isim" name="isim" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_14" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15">
          Discord sunucumuza kayıtlı adınız nedir?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_15" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="nick" name="nick" placeholder="Marthex#9703" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_15" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_16">
        <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16">
          Steam Link
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_16" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="steam" name="steam" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_16" required="" />
        </div>
      </li>
    <li class="form-line jf-required" data-type="control_dropdown" id="id_1">
        <label class="form-label form-label-left form-label-auto" id="label_1" for="input_1">
          Başvurmak istediğiniz pozisyon nedir?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_1" class="form-input jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="urun" name="urun" style="width:310px" data-component="dropdown" required="">
            <option value=""> Yetkiyi seçiniz. </option>
            <option value="Deneme Asistan"> Deneme Asistan </option>
          </select>
        </div>
      </li>
	  
	  <li class="form-line jf-required" data-type="control_number" id="id_17">
        <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17">
          Sunucuda kaç saatiniz var?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_17" class="form-input-wide jf-required" data-layout="half">
          <input type="number" id="ss" name="ss" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:310px" size="310" value="" placeholder="125 saat" data-component="number" aria-labelledby="label_17" required="" step="any" />
        </div>
      </li>
	  
      <li class="form-line jf-required" data-type="control_number" id="id_17">
        <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17">
          Yaşınız?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_17" class="form-input-wide jf-required" data-layout="half">
          <input type="number" id="yas" name="yas" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:310px" size="310" value="" placeholder="17" data-component="number" aria-labelledby="label_17" required="" step="any" />
        </div>
      </li>
    
       
      <li class="form-line jf-required" data-type="control_textbox" id="id_20">
        <label class="form-label form-label-top" id="label_20" for="input_20">
          Günlük Aktifliğiniz
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_1" class="form-input jf-required" data-layout="half">
        <select class="form-dropdown validate[required]" id="saat" name="saat" style="width:310px" data-component="dropdown" required="">
          <option value=""> Saat Seçiniz. </option>
          <option value="1 Saat"> 1 Saat </option>
          <option value="1-3 Saat"> 1-3 Saat </option>
          <option value="3-5 Saat"> 3-5 Saat </option>
          <option value="5 Saatten Fazla"> 5 Saatten Fazla </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_21">
        <label class="form-label form-label-top form-label-auto" id="label_21" for="input_21">
          Kuralları okudunuz mu?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_31" class="form-input jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_8" data-component="radio">
             <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_8" class="form-radio validate[required]" id="input_8_2" name="q31_odemeYontemi" value="Evet, okudum." required="" />
              <label id="label_input_8_2" for="input_8_2"> Evet, okudum. </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_8" class="form-radio validate[required]" id="input_8_3" name="q31_odemeYontemi" value="Hayır, okumadım." required="" />
              <label id="label_input_8_3" for="input_8_3"> Hayır, okumadım. </label>
            </span>
          </div>
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
  
</form></body>

<!-- Kod -->
</html>
<script src="../cdn.jotfor.ms/js/vendor/smoothscroll.mined52.js?v=3.3.27348"></script>
<script src="../cdn.jotfor.ms/js/errorNavigationed52.js?v=3.3.27348"></script>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include("menu/footer.php"); ?>
<!--==================footer - Okyanus================== -->
