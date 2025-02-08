
<!--==================header - marthex================== -->
<?php include("menu/header.php");
  $sayfa="İletişim";
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
   
    $nick=$_POST["nick"];
    $steam=$_POST["steam"];
    $urun=$_POST["urun"];
	$not=$_POST["not"]; 
	
    $dw = new DiscordWebhook();
                $dw->setWebhook('https://discord.com/api/webhooks/881854101665755176/t2v-RuEIWwHQfeQ6KEik4obj3TttczotfL7O74gNoToosa10tRjWWS_u_ceanJzfv8P8');

            $dw->newMessage()
                ->setDescription(' **Okyanus Jailbreak Destek** ')
				->addField("Nick:", $nick,false)
				->addField("Steam URL:", $steam,false)
				->addField("Konu:", $urun,false)
				->addField("Mesajı:", $not,false)
                ->send();
		
      
}
               ?>
			   
			   
         <!-- shop-area -->
         <section class="shop-area white-bg pt-115 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                        <div class="section-title title-style-three text-center mb-20">
                            <h2><span>İletişim </span>Formu</h2>
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
  
     <li class="form-line jf-required" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="first_3">
          Kullanıcı Bilgileri:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="nick" placeholder="Marthex#9703" name="nick" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" required="" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false">Discord Nick: </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="steam" placeholder="https://steamcommunity.com/id/marthex" name="steam" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required="" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false">Steam Link:</label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_1">
        <label class="form-label form-label-left form-label-auto" id="label_1" for="input_1">
          Konu Seçiniz:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_1" class="form-input jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="urun" name="urun" style="width:310px" data-component="dropdown" required="">
            <option value="">Konu seçiniz. </option>
            <option value="Susturma">Susturma</option>
            <option value="Yasaklanma">Yasaklanma</option>
			<option value="Öneri/İste">Öneri/İstek</option>
			<option value="Şikayet">Şikayet</option>
          </select>
        </div>
      </li>
	  
       <li class="form-line" data-type="control_textarea" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6"> Mesajınız: 
		 <span class="form-required">
            *
          </span></label>
        <div id="cid_6" class="form-input" data-layout="full">
          <textarea id="not" class="form-textarea" name="not" placeholder="Gönderilen mesajların İP adresleri görünmektedir. Lütfen mesajınızı ona göre yazınız." style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_6"></textarea>
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