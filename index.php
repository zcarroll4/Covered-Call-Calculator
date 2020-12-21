<?php 
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   $amount = '';
   $amountTrimmed = null;
   $ticker ='';
   $QYLGSelected = '';
   $XYLGSelected = '';
   $XYLDSelected = '';
   $QYLDSelected = '';
   $Selected100 = '';
   $Selected1000 = '';
   $Selected2000 = '';
   $Selected3000 = '';
   $Selected4000 = '';
   $Selected5000 = '';
   $Selected6000 = '';
   $Selected7000 = '';
   $Selected8000 = '';
   $Selected9000 = '';
   $Selected10000 = '';
   $Selected25000 = '';
   $Selected50000 = '';
   $Selected100000 = '';
   $Selected250000 = '';
   $Selected500000 = '';
   $Selected1000000 = '';
   $QYLGYield = 5.81/100;
   $XYLGYield = 5.77/100;
   $XYLDYield = 7.58/100;
   $QYLDYield = 10.93/100;
   
           if(isset($_POST['amount']) && isset($_POST['ticker'])){   
                           $chars = array(",", "$");
                           $amountTrimmed = str_replace($chars, "", $_POST['amount']);
                           $amount = $amountTrimmed;
                           $ticker = $_POST['ticker'];
                           $QYLGSelected = $ticker == "QYLG" ? "selected" : '';
                           $XYLGSelected = $ticker == "XYLG" ? "selected" : '';;
                           $XYLDSelected = $ticker == "XYLD" ? "selected" : '';;
                           $QYLDSelected = $ticker == "QYLD" ? "selected" : '';;
                           
                           $Selected100 = $amount == 100 ? "selected" : '';
                           $Selected1000 = $amount == 1000 ? "selected" : '';
                           $Selected2000 = $amount == 2000 ? "selected" : '';
                           $Selected3000 = $amount == 3000 ? "selected" : '';
                           $Selected4000 = $amount == 4000 ? "selected" : '';
                           $Selected5000 = $amount == 5000 ? "selected" : '';
                           $Selected6000 = $amount == 6000 ? "selected" : '';
                           $Selected7000 = $amount == 7000 ? "selected" : '';
                           $Selected8000 = $amount == 8000 ? "selected" : '';
                           $Selected9000 = $amount == 9000 ? "selected" : '';
                           $Selected10000 = $amount == 10000 ? "selected" : '';
                           $Selected25000 = $amount == 25000 ? "selected" : '';
                           $Selected50000 = $amount == 50000 ? "selected" : '';
                           $Selected100000 = $amount == 100000 ? "selected" : '';
                           $Selected250000 = $amount == 250000 ? "selected" : '';
                           $Selected500000 = $amount == 500000 ? "selected" : '';
                           $Selected1000000 = $amount == 1000000 ? "selected" : '';
       }    
       function getIncome($ticker, $amount){
           global $QYLGYield;
           global $XYLGYield;
           global $XYLDYield;
           global $QYLDYield;
           if ($ticker == "QYLG") return $amount * $QYLGYield;
           if ($ticker == "XYLG") return $amount * $XYLGYield;
           if ($ticker == "XYLD") return $amount * $XYLDYield;
           if ($ticker == "QYLD") return $amount * $QYLDYield;
       }
       function getYield($ticker){
           global $QYLGYield;
           global $XYLGYield;
           global $XYLDYield;
           global $QYLDYield;
   switch($ticker){
       case "QYLG": 
           return $QYLGYield;
           break;
       case "XYLG": 
           return $XYLGYield;
           break;
       case "XYLD": 
           return $XYLDYield;
           break;
       case "QYLD": 
           return $QYLDYield;
           break;
   }
}
   ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
   <head><meta charset="windows-1252">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>$QYLG | $XYLG | Monthly Covered Call Income Calculator</title>
      <link rel="icon" type="image/png" href="stock-icon.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/flatly/bootstrap.min.css"/>
      <!-- Font Awesome Icon -->
      <link rel="stylesheet" href="../css/font-awesome.min.css">
      
    </head>
   <style>.grow-element{transition:.4s ease;cursor:pointer}wi .grow-element:hover{transform:scale(1.05,1.05)}//grows image size img{width:100%}p{font-size:1.1rem}ul{font-size:1.1rem}#preloader{position:fixed;left:0;top:0;bottom:0;right:0;background-color:#fff;z-index:99999}.preloader{position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.preloader span{display:inline-block;background-color:#6195ff;width:25px;height:25px;-webkit-animation:1s preload ease-in-out infinite;animation:preload 1s ease-in-out infinite;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);border-radius:50%}.preloader span:nth-child(1){-webkit-animation-delay:0s;animation-delay:0s}.preloader span:nth-child(2){-webkit-animation-delay:.1s;animation-delay:.1s}.preloader span:nth-child(3){-webkit-animation-delay:.15s;animation-delay:.15s}.preloader span:nth-child(4){-webkit-animation-delay:.2s;animation-delay:.2s}@-webkit-keyframes preload{0%{-webkit-transform:scale(0);transform:scale(0)}50%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(0);transform:scale(0)}}@keyframes preload{0%{-webkit-transform:scale(0);transform:scale(0)}50%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(0);transform:scale(0)}}#back-to-top{display:none;position:fixed;bottom:20px;right:20px;width:50px;height:50px;line-height:50px;text-align:center;background:#6195ff;border-radius:3px;color:#fff;z-index:9999;-webkit-transition:.2s opacity;transition:.2s opacity;cursor:pointer}#back-to-top:after{content:"\f106";font-family:FontAwesome}#back-to-top:hover{opacity:.8}h1,h2,h3,h4,h5,h6{line-height:1.3}.form-control{font-size:1.5rem}body{font:16px Arial}.autocomplete{position:relative;display:inline-block}input{border:1px solid transparent;background-color:#f1f1f1;padding:10px;font-size:16px}input[type=text]{background-color:#f1f1f1;width:100%}input[type=submit]{background-color:#1e90ff;color:#fff}.autocomplete-items{position:absolute;border:1px solid #d4d4d4;border-bottom:none;border-top:none;z-index:99;top:100%;left:0;right:0}.autocomplete-items div{padding:10px;cursor:pointer;background-color:#fff;border-bottom:1px solid #d4d4d4}.autocomplete-items div:hover{background-color:#e9e9e9}.autocomplete-active{background-color:#1e90ff!important;color:#fff}</style>
   <body style="background:black; ">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h1 class="text-center mt-2" style="font-size:1.8rem; font-weight:bold;"><a href="index.php">Monthly Covered Call ETFs </a></h1>
               <h3 class="text-center text-white" style="font-size:1.6rem;"><em>Income Calculator</em></h3>
            </div>
            <div class="col-lg-6 offset-lg-3">
            
            </div>
            <form action="index.php" style="font-size:1.5rem;" method="POST" class="form offset-lg-3 col-lg-6 col-sm-10 offset-sm-1">
               <div class="form-group col col-sm-12 text-left">
                  <label class="text-left text-white">ETF:</label>
                  <select name="ticker" class="col-sm-12" style="height:40px;" required value="<?=$ticker?>">
                     <option value=""></option>
                     <option value="QYLD" <?=$QYLDSelected?>>$QYLD - 100% Covered Call</option>
                     <option value="QYLG" <?=$QYLGSelected?>>$QYLG - 50% Covered Call / 50% Growth</option>
                     <option value="XYLD" <?=$XYLDSelected?>>$XYLD - 100% Covered Call</option>
                     <option value="XYLG" <?=$XYLGSelected?>>$XYLG - 50% Covered Call / 50% Growth</option>
                  </select>
               </div>
     
               <div class="form-group col col-sm-12 ">
                  <label class="text-white text-left">Amount Invested:</label>
                  <select name="amount" class="col-lg-12" style="height:40px;" required>
                     <option value="$100" <?=$Selected100?>>$100</option>
                     <option value="$1,000" <?=$Selected1000?>>$1,000</option>
                     <option value="$2,000" <?=$Selected2000?>>$2,000</option>
                    <option value="$3,000" <?=$Selected3000?>>$3,000</option>
                    <option value="$4,000" <?=$Selected4000?>>$4,000</option>
                    <option value="$5,000" <?=$Selected5000?>>$5,000</option>
                    <option value="$6,000" <?=$Selected6000?>>$6,000</option>
                    <option value="$7,000" <?=$Selected7000?>>$7,000</option>
                    <option value="$8,000" <?=$Selected8000?>>$8,000</option>
                    <option value="$9,000" <?=$Selected9000?>>$9,000</option>
                     <option value="$10,000" <?=$Selected10000?>>$10,000</option>
                     <option value="$25,000" <?=$Selected25000?>>$25,000</option>
                     <option value="$50,000" <?=$Selected50000?>>$50,000</option>
                     <option value="$100,000" <?=$Selected100000?>>$100,000</option>
                     <option value="$250,000" <?=$Selected250000?>>$250,000</option>
                     <option value="$500,000" <?=$Selected500000?>>$500,000</option>
                     <option value="$1,000,000" <?=$Selected1000000?>>$1,000,000</option>
                  </select>
               </div>
               <div class="form-group col col-sm-12 rounded">
                  <input type="submit" style="0.5rem 1rem; font-size:1.17rem;;"  value="Calculate" class="col bg-success rounded"/>
               </div>
               <div class="form-group  col col-sm-12" id="income">
                  <label class="text-white">Annual Income:</label>
                  <input type="text" id="taxFreeIncome" class="form-control" value="<?="$".number_format(getIncome($ticker,$amount),2,'.',',')?>" readonly>
               </div>
               <div class="form-group col col-sm-12" >
                  <label class="text-white">Monthly Income:</label>
                  <input type="text" id="portfolioValue" class="form-control" value="<?="$".number_format(getIncome($ticker,$amount)/12,2,'.',',')?>" readonly>
               </div>
               <div class="form-group col col-sm-12">
                  <label class="text-white">Index:</label>
                  <input type="text" class="form-control" value="<?=($ticker == "QYLD" || $ticker == "QYLG") ? "NASDAQ 100" : "S&P 500"; ?>" readonly>
               </div>
               <div class="form-group col col-sm-12">
                  <label class="text-white">Dividend Yield:</label>
                  <input type="text" id="portfolioValue" class="form-control" value="<?=getYield($ticker)*100?>%" readonly>
               </div>
               
            </form>
         </div>
         <div class="col-lg-8 offset-lg-2 text-white"    
         <p style="font-size:10px; margin-top:50px; padding:5px;">*<em><u>DISCLAIMER:</u></em> THIS CALCULATOR WAS MADE FOR EDUCATIONAL PURPOSES ONLY. RESULTS MAY VARY DEPENDING ON MANY FACTORS. INCOME DISPLAYED IS BEFORE TAXES & TRADING FEES FROM BROKERAGE.
            THIS IS NOT INVESTING ADVICE. ALWAYS DO YOUR OWN RESEARCH BEFORE INVESTING. PLEASE VISIT <A HREF="https://www.globalxetfs.com/" rel="nofollow">GLOBALXETFS.COM</A> FOR MORE INFORMATION
            FOR THESE SELECTED MONTHLY PAYING COVERED CALL ETFS.
         </p>
      </div>
      </div>
      <!-- Back to top -->
      <div id="back-to-top"></div>
      <!-- /Back to top --> <!-- Preloader --> 
      <div id="preloader">
         <div class="preloader"> <span></span> <span></span> <span></span> <span></span> </div>
      </div>
      <!-- /Preloader -->
      <!-- jQuery Plugins -->
      <script type="text/javascript" src="../js/jquery.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="../js/jquery.magnific-popup.js"></script>
      <script type="text/javascript" src="../js/main.js"></script>
      <script>
         var monthlies = ["100","1000","10000","100,000", "200","2000","20000","200000","250000","500000","750000","1000000"];
         autocomplete(document.getElementById("myInput"), monthlies);
         
         function autocomplete(o,l){var s;function n(e){e&&(function(e){for(var t=0;t<e.length;t++)e[t].classList.remove("autocomplete-active")}(e),s>=e.length&&(s=0),s<0&&(s=e.length-1),e[s].classList.add("autocomplete-active"))}function r(e){for(var t=document.getElementsByClassName("autocomplete-items"),n=0;n<t.length;n++)e!=t[n]&&e!=o&&t[n].parentNode.removeChild(t[n])}o.addEventListener("input",function(e){var t,n,i,a=this.value;if(r(),!a)return!1;for(s=-1,(t=document.createElement("DIV")).setAttribute("id",this.id+"autocomplete-list"),t.setAttribute("class","autocomplete-items"),this.parentNode.appendChild(t),i=0;i<l.length;i++)l[i].substr(0,a.length).toUpperCase()==a.toUpperCase()&&((n=document.createElement("DIV")).innerHTML="<strong>"+l[i].substr(0,a.length)+"</strong>",n.innerHTML+=l[i].substr(a.length),n.innerHTML+="<input type='hidden' value='"+l[i]+"'>",n.addEventListener("click",function(e){o.value=this.getElementsByTagName("input")[0].value,r()}),t.appendChild(n))}),o.addEventListener("keydown",function(e){var t=(t=document.getElementById(this.id+"autocomplete-list"))&&t.getElementsByTagName("div");40==e.keyCode?(s++,n(t)):38==e.keyCode?(s--,n(t)):13==e.keyCode&&(e.preventDefault(),-1<s&&t&&t[s].click())}),document.addEventListener("click",function(e){r(e.target)})}
      </script>
      <script>
          function myFunction() {
               e.preventDefault();
              var x = document.getElementById("myDIV");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }
      </script>
   </body>
</html>
