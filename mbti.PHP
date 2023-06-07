<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title>MBTI</title>
</head>
<body dir=rtl>
    <div id="test">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="question">
    <p>1)</p>
        <input type="radio" name="question1" id="answer1" value="I" />
        <label for="answer1">معمولاً احساسات و عواطف خود را در خويش نگه می دارم.</label><br><br>
        <input type="radio" name="question1" id="answer2" value="E" />
        <label for="answer2">معمولاً احساسات و عواطف خودرا با ديگران و به راحتی درميان مي گذارم.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>2)</p>
        <input type="radio" name="question2" id="answer3" value="N" />
        <label for="answer3">براي من امور قطعی، عينی و مشخص مهم هستند.</label><br><br>
        <input type="radio" name="question2" id="answer4" value="S" />
        <label for="answer4">براي من ايده ها، استنباط ها و الهامات مهم هستند.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>3)</p>
        <input type="radio" name="question3" id="answer5" value="T" />
        <label for="answer5">هنگام تصميم گيری به آنچه که منطق و خرد بر آن حکم می کند، عمل می کنم.</label><br><br>
        <input type="radio" name="question3" id="answers6" value="F" />
        <label for="answer6">هنگام تصميم گيری به آنچه که احساسات و دلم گواه می دهد، عمل می کنم.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>4)</p>
        <input type="radio" name="question4" id="answer7" value="P" />
        <label for="answer7">دوست دارم در شرايط انعطاف پذير و متغيری زندگی کنم.</label><br><br>
        <input type="radio" name="question4" id="answer8" value="J" />
        <label for="answer8">دوست دارم همه چيز منظم و برنامه ريزی شده باشد.</label><br><br>
        <hr>
    </div>
    <div>
    <p>5)</p>
        <input type="radio" name="question5" id="answer9" value="I" />
        <label for="answer9">دوست دارم در زمينه های محدودی اطلاعات داشته باشم ولي در هر زمينه عميق و کامل.</label><br><br>
        <input type="radio" name="question5" id="answer10" value="E" />
        <label for="answer10">دوست دارم در زمينه های زيادی اطلاعات داشته باشم ولی در هر زمينه تا حد کم و سطحی.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>6)</p>
        <input type="radio" name="question6" id="answer11" value="N">
        <label for="answer11">بيشتر اوقات به واقعيات عينی (آنچه که وجود دارد ) توجه می کنم.</label><br><br>
        <input type="radio" name="question6" id="answer12" value="S">
        <label for="answer12">بيشتر اوقات حقايق ( آنچه که بايد وجود داشته باشد ) را در ذهن و تخيل خود مجسم مي کنم.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>7)</p>
        <input type="radio" name="question7" id="answer13" value="T">
        <label for="answer13">از نظر من يک قاضی و داور عادل براي جامعه مفيدتر است.</label><br><br>
        <input type="radio" name="question7" id="answer14" value="F">
        <label for="answer14">از نظر من يک معلم و مربی مهربان برای جامعه مفيدتر است.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>8)</p>
        <input type="radio" name="question8" id="answer15" value="P">
        <label for="answer15">ترجيحاً ملاقاتها و ديدارهای خود را بدون برنامه قبلی و آزادانه انجام می دهم.</label><br><br>
        <input type="radio" name="question8" id="answer16" value="J">
        <label for="answer16">ترجيحاً ديدار با افراد و وعده ملاقات خود را از پيش تعيين می کنم.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>9)</p>    
        <input type="radio" name="question9" id="answer17" value="I">
        <label for="answer17">کم حرف و محتاط هستم و علاقه ای به جلب توجه ديگران به خود ندارم.</label><br><br>
        <input type="radio" name="question9" id="answer18" value="E">
        <label for="answer18">توجه ديگران را به خود جلب می کنم.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>10)</p>    
        <input type="radio" name="question10" id="answer19" value="N">
        <label for="answer19">اگر معلم بودم ترجيح می دادم دروسي را تدريس کنم که واقعيات و امور قطعی وعينی را شامل شوند.</label><br><br>
        <input type="radio" name="question10" id="answer20" value="S">
        <label for="answer20">اگر معلم بودم، ترجيحاً دروسی را تدريس می کردم که حقايق و نظريه ها و تئوری ها را شامل شوند (مانند فلسفه).</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>11)</p>    
        <input type="radio" name="question11" id="answer21" value="T">
        <label for="answer21">قاطع، محکم و استوار هستم.</label><br><br>
        <input type="radio" name="question11" id="answer22" value="F">
        <label for="answer22">انعطاف پذير ، ملايم و لطيف هستم.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>12)</p>    
        <input type="radio" name="question12" id="answer23" value="P">
        <label for="answer23">غالباً انجام کارهای پيش پا افتاده و جزئی را فراموش می کنم.</label><br><br>
        <input type="radio" name="question12" id="answer24" value="J">
        <label for="answer24">به منظور جلوگيری از فراموش شدن انجام کارها، آن ها را يادداشت می کنم.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>13)</p>    
        <input type="radio" name="question13" id="answer25" value="I">
        <label for="answer25">در مهمانی ها، جلسات وگردهمايی ها منتظر مي مانم تا ديگران به سوی من بيايند.</label><br><br>
        <input type="radio" name="question13" id="answer26" value="E">
        <label for="answer26">در مهماني ها، جلسات وگردهمايی ها من سر صحبت را با ديگران باز می کنم.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>14)</p>    
        <input type="radio" name="question14" id="answer27" value="N">
        <label for="answer27">به جزئيات امور توجه زيادی دارم.</label><br><br>
        <input type="radio" name="question14" id="answer28" value="S">
        <label for="answer28">بيشتر کليت هر موضوعی برايم مهم است و به جزئيات آن توجه زيادی نمی کنم.</label><br><br>
        <hr>
    </div>    
    <div class="question">
    <p>15)</p>    
        <input type="radio" name="question15" id="answer29" value="T">
        <label for="answer29">به آينده اهميت زيادی داده و برای آن برنامه ريزی می کنم.</label><br><br>
        <input type="radio" name="question15" id="answer30" value="F">
        <label for="answer30">خيلی به آينده فکر نمی کنم.</label><br><br>
        <hr>
    </div>
    <div class="question">
    <p>16)</p>    
        <input type="radio" name="question16" id="answer31" value="P">
        <label for="answer31">معمولاً کارها را شروع می کنم و حين اجرا به رفع اشکالات اجرايی وتدارک مورد نياز می پردازم.</label><br><br>
        <input type="radio" name="question16" id="answer32" value="J">
        <label for="answer32">قبل از اجرای طرح ها وکارها برنامه ريزی انجام می دهم.</label><br><br>
        <hr>
    </div>   
    <p>17)</p>    
        <input type="radio" name="question17" id="answer33" value="I">
        <label for="answer33">مايل هستم دوستان کم همراه با ارتباط زياد و صميمانه داشته باشم.</label><br><br>
        <input type="radio" name="question117" id="answer34" value="E">
        <label for="answer34">مايل هستم دوستان زياد همراه با ارتباط محدود داشته باشم.</label><br><br>
        <hr>
    </div>    
    <p>18)</p>    
        <input type="radio" name="question18" id="answer35" value="N">
        <label for="answer35">به استفاده از امکانات و توانايی های موجود تاکيد دارم.</label><br><br>
        <input type="radio" name="question18" id="answer36" value="S">
        <label for="answer36">نوآوری و خلاقيت داشتن در کارها برايم اولويت دارد.</label><br><br>
        <hr>
    </div>    
    <p>19)</p>    
        <input type="radio" name="question19" id="answer37" value="T">
        <label for="answer37">بيشتر پيرو منطق و دليل هستم.</label><br><br>
        <input type="radio" name="question19" id="answer38" value="F">
        <label for="answer38">بيشتر پيرو احساس و عاطفه هستم.</label><br><br>
        <hr>
    </div>    
    <p>20)</p>    
        <input type="radio" name="question20" id="answer39" value="P">
        <label for="answer39">در انجام کارهايی که از قبل پيش بينی نشده و يا فعاليت هايی که به سرعت و عکس العمل فوری نياز دارد، موفق هستم.</label><br><br>
        <input type="radio" name="question20" id="answer40" value="J">
        <label for="answer40">در انجام کارهايی که بر اساس طرح و برنامه قبلی مي باشد موفق هستم.</label><br><br>
        <hr>
    </div>     
    <div id="submit">
    <input name="submit" type="submit" value="ارسال">
    </div>
    <div id="result">  
    <?php
function Percent($part,$whole){
    $Percent = ($part/$whole)*100;
    return $Percent."%";
}
$Extroverteds=array();
$Introverteds=array();
$Intuitves=array();
$Sensings=array();
$Thinkings=array();
$Fellings=array();
$Perceivings=array();
$Judgings=array();
if (isset($_POST["submit"])) {
    if (isset($_POST["question1"])) {
        $answer1=$_POST["question1"];
        if ($answer1=="I") {
            $Introverteds[]=$answer1;
           
        }
        else {
            $Extroverteds[]=$answer1;
           
        }
    }
    else {
        $answer1 = ""; 
    }
    if (isset($_POST["question2"])) {
        $answer2=$_POST["question2"];
        if ($answer2=="N") {
            $Intuitves[]=$answer2;
            
        }
        else {
            $Sensings[]=$answer2;
            
        }
        
    }
    else {
        $answer2 = ""; 
    }
    if (isset($_POST["question3"])) {
        $answer3=$_POST["question3"];
        if ($answer3 == "T") {
            $Thinkings[]=$answer3;
            
        }
        else {
            $Fellings[]=$answer3;
            
            
        }    
    }
    else{
        $answer3 = "";
        
    }
    if (isset($_POST["question4"])) {
        $answer4=$_POST["question4"];
        if ($answer4 == "P") {
            $Perceivings[]=$answer4;
        }
        else {
            $Judgings[]=$answer4; 
        }    
    }
    else{
        $answer4 = "";
    }
    if (isset($_POST["question5"])) {
        $answer5=$_POST["question5"];
        if ($answer5 == "I") {
            $Introverteds[]=$answer5;
            
        }
        else {
            $Extroverteds[]=$answer5;
            
            
        }    
    }
    else{
        $answer5 = "";
    }
    if (isset($_POST["question6"])) {
        $answer6=$_POST["question6"];
        if ($answer6 == "N") {
            $Intuitves[]=$answer6;
           
        }
        else {
            $Sensings[]=$answer6;
            
            
        }    
    }
    else{
        $answer6 = "";
    }
    if (isset($_POST["question7"])) {
        $answer7=$_POST["question7"];
        if ($answer7 == "T") {
            $Thinkings[]=$answer7;
            
        }
        else {
            $Fellings[]=$answer7;
            
            
        }    
    }
    else{
        $answer7 = "";
        
    }
    if (isset($_POST["question8"])) {
        $answer8=$_POST["question8"];
        if ($answer8 == "P") {
            $Perceivings[]=$answer8;
            
        }
        else {
            $Judgings[]=$answer8;
            
            
        }    
    }
    else{
        $answer8 = "";
        
    }
    if (isset($_POST["question9"])) {
        $answer9=$_POST["question9"];
        if ($answer9 == "I") {
            $Introverteds[]=$answer9;
           
        }
        else {
            $Extroverteds[]=$answer9;
            
            
        }    
    }
    else{
        $answer9 = "";
        
    }
    if (isset($_POST["question10"])) {
        $answer10=$_POST["question10"];
        if ($answer10 == "N") {
            $Intuitves[]=$answer10;
           
        }
        else {
            $Sensings[]=$answer10;
            
            
        }    
    }
    else{
        $answer10 = "";
        
    }
    if (isset($_POST["question11"])) {
        $answer11=$_POST["question11"];
        if ($answer11 == "T") {
            $Thinkings[]=$answer11;
            
        }
        else {
            $Fellings[]=$answer11;
            
            
        }    
    }
    else{
        $answer11 = "";
        
    }
    if (isset($_POST["question12"])) {
        $answer12=$_POST["question12"];
        if ($answer12 == "P") {
            $Perceivings[]=$answer12;
        }
        else {
            $Judgings[]=$answer12;
            
        }    
    }
    else{
        $answer12 = "";
        
    }
    if (isset($_POST["question13"])) {
        $answer13=$_POST["question13"];
        if ($answer13 == "I") {
            $Introverteds[]=$answer13;
            
        }
        else {
            $Extroverteds[]=$answer13;
           
            
        }    
    }
    else{
        $answer13 = "";
        
    }
    if (isset($_POST["question14"])) {
        $answer14=$_POST["question14"];
        if ($answer14 == "N") {
            $Intuitves[]=$answer14;
            
        }
        else {
            $Sensings[]=$answer14;
            
            
        }    
    }
    else{
        $answer14 = "";
       
    }
    if (isset($_POST["question15"])) {
        $answer15=$_POST["question15"];
        if ($answer15 == "T") {
            $Thinkings[]=$answer15;
            
        }
        else {
            $Fellings[]=$answer15;
            
            
        }    
    }
    else{
        $answer15 = "";
        
    }
    if (isset($_POST["question16"])) {
        $answer16=$_POST["question16"];
        if ($answer16 == "P") {
            $Perceivings[]=$answer16;
            
        }
        else {
            $Judgings[]=$answer16;
            
            
        }    
    }
    else{
        $answer16 = "";
        
    }
    if (isset($_POST["question17"])) {
        $answer17=$_POST["question17"];
        if ($answer17=="I") {
            $Introverteds[]=$answer17;
           
        }
        else {
            $Extroverteds[]=$answer17;
           
        }
    }
    else {
        $answer17 = " "; 
    }
    if (isset($_POST["question18"])) {
        $answer18=$_POST["question18"];
        if ($answer18=="N") {
            $Intuitves[]=$answer18;
            
        }
        else {
            $Sensings[]=$answer18;
            
        }
        
    }
    else {
        $answer18= ""; 
    }
    if (isset($_POST["question19"])) {
        $answer19=$_POST["question3"];
        if ($answer19 == "T") {
            $Thinkings[]=$answer19;
            
        }
        else {
            $Fellings[]=$answer19;
            
            
        }    
    }
    else{
        $answer19 = "";
        
    }
    if (isset($_POST["question20"])) {
        $answer20=$_POST["question20"];
        if ($answer20 == "P") {
            $Perceivings[]=$answer20;
        }
        else {
            $Judgings[]=$answer20; 
        }    
    }
    else{
        $answer20= "";
      
    }
    if ($answer1== ""or $answer2 == ""or $answer3 == ""or $answer4 == ""or $answer5== ""or $answer6== ""or $answer7== ""or $answer8== ""or $answer9== ""or $answer10== ""or $answer11== ""or $answer12 == ""or $answer13 == "" or $answer14 == "" or $answer15 == "" or $answer16 == "" or $answer17 == "" or $answer18 == "" or $answer19 == "" or $answer20 == "") {
        echo "کاملش نکردی عزیز";
    }
    else {
        if (count($Extroverteds)>count($Introverteds)) {
            $I_or_E = "E";
        }
        elseif (count($Extroverteds)<count($Introverteds)) {
            $I_or_E = "I";
        }
        else {
            $I_or_E = "X";
            
        }
        if (count($Intuitves)>count($Sensings)) {
            $N_or_S = "N";
        }
        elseif (count($Intuitves)<count($Sensings)) {
            $N_or_S = "S";
        }
        else {
            $N_or_S = "X";    
        }
        if (count($Thinkings)>count($Fellings)) {
            $T_or_F = "T";
        }
        elseif (count($Thinkings)<count($Fellings)) {
            $T_or_F = "F";
        }
        else {
            $T_or_F = "X";    
        }
        if (count($Perceivings)>count($Judgings)) {
            $P_or_J = "P";
        }
        elseif (count($Perceivings)<count($Judgings)) {
            $P_or_J = "J";
        }
        else {
            $P_or_J = "X";    
        }
        $Introverting_percent = Percent(count($Introverteds),5); 
        $Extroverting_percent = Percent(count($Extroverteds),5);
        $Intuitving_percent = Percent(count($Intuitves),5);
        $Sensing_percent = Percent(count($Sensings),5);
        $Thinking_percent = Percent(count($Thinkings),5);
        $Felling_percent = Percent(count($Fellings),5);
        $Perceiving_percent = Percent(count($Perceivings),5);
        $Judgings_percent = Percent(count($Judgings),5);
        echo "تو یک $I_or_E$N_or_S$T_or_F$P_or_J هستی";
        echo"<br>";
        echo "I:$Introverting_percent";
        echo"<br>";
        echo "E:$Extroverting_percent";
        echo"<br>";
        echo "N:$Intuitving_percent";
        echo"<br>";
        echo "S:$Sensing_percent";
        echo"<br>";
        echo "T:$Thinking_percent";
        echo"<br>";
        echo "F:$Felling_percent";
        echo"<br>";
        echo "P:$Perceiving_percent";
        echo"<br>";
        echo "J:$Judgings_percent";  
    }

}
 
?>   
    </div>
</form>
    </div>

 

 

    
</body>
</html>