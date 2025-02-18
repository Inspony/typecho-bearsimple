  <!-- Translate start -->
<div id="google_translate_element2">
<div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage"><select class="goog-te-combo" aria-label="语言翻译微件"><option value="zh-CN">中文（简体）</option><option value="sq">阿尔巴尼亚语</option><option value="ar">阿拉伯语</option><option value="am">阿姆哈拉语</option><option value="az">阿塞拜疆语</option><option value="ga">爱尔兰语</option><option value="et">爱沙尼亚语</option><option value="or">奥利亚语</option><option value="eu">巴斯克语</option><option value="be">白俄罗斯语</option><option value="bg">保加利亚语</option><option value="is">冰岛语</option><option value="pl">波兰语</option><option value="bs">波斯尼亚语</option><option value="fa">波斯语</option><option value="af">布尔语(南非荷兰语)</option><option value="tt">鞑靼语</option><option value="da">丹麦语</option><option value="de">德语</option><option value="ru">俄语</option><option value="fr">法语</option><option value="tl">菲律宾语</option><option value="fi">芬兰语</option><option value="fy">弗里西语</option><option value="km">高棉语</option><option value="ka">格鲁吉亚语</option><option value="gu">古吉拉特语</option><option value="kk">哈萨克语</option><option value="ht">海地克里奥尔语</option><option value="ko">韩语</option><option value="ha">豪萨语</option><option value="nl">荷兰语</option><option value="ky">吉尔吉斯语</option><option value="gl">加利西亚语</option><option value="ca">加泰罗尼亚语</option><option value="cs">捷克语</option><option value="kn">卡纳达语</option><option value="co">科西嘉语</option><option value="hr">克罗地亚语</option><option value="ku">库尔德语</option><option value="la">拉丁语</option><option value="lv">拉脱维亚语</option><option value="lo">老挝语</option><option value="lt">立陶宛语</option><option value="lb">卢森堡语</option><option value="rw">卢旺达语</option><option value="ro">罗马尼亚语</option><option value="mg">马尔加什语</option><option value="mt">马耳他语</option><option value="mr">马拉地语</option><option value="ml">马拉雅拉姆语</option><option value="ms">马来语</option><option value="mk">马其顿语</option><option value="mi">毛利语</option><option value="mn">蒙古语</option><option value="bn">孟加拉语</option><option value="my">缅甸语</option><option value="hmn">苗语</option><option value="xh">南非科萨语</option><option value="zu">南非祖鲁语</option><option value="ne">尼泊尔语</option><option value="no">挪威语</option><option value="pa">旁遮普语</option><option value="pt">葡萄牙语</option><option value="ps">普什图语</option><option value="ny">齐切瓦语</option><option value="ja">日语</option><option value="sv">瑞典语</option><option value="sm">萨摩亚语</option><option value="sr">塞尔维亚语</option><option value="st">塞索托语</option><option value="si">僧伽罗语</option><option value="eo">世界语</option><option value="sk">斯洛伐克语</option><option value="sl">斯洛文尼亚语</option><option value="sw">斯瓦希里语</option><option value="gd">苏格兰盖尔语</option><option value="ceb">宿务语</option><option value="so">索马里语</option><option value="tg">塔吉克语</option><option value="te">泰卢固语</option><option value="ta">泰米尔语</option><option value="th">泰语</option><option value="tr">土耳其语</option><option value="tk">土库曼语</option><option value="cy">威尔士语</option><option value="ug">维吾尔语</option><option value="ur">乌尔都语</option><option value="uk">乌克兰语</option><option value="uz">乌兹别克语</option><option value="es">西班牙语</option><option value="iw">希伯来语</option><option value="el">希腊语</option><option value="haw">夏威夷语</option><option value="sd">信德语</option><option value="hu">匈牙利语</option><option value="sn">修纳语</option><option value="hy">亚美尼亚语</option><option value="ig">伊博语</option><option value="it">意大利语</option><option value="yi">意第绪语</option><option value="hi">印地语</option><option value="su">印尼巽他语</option><option value="id">印尼语</option><option value="jw">印尼爪哇语</option><option value="en">英语</option><option value="yo">约鲁巴语</option><option value="vi">越南语</option><option value="zh-TW">中文（繁体）</option></select></div></div></div>

   <div class="ui floating dropdown labeled icon button notranslate">
  <i class="language icon"></i>
  <span class="text">选择语言</span>
  <div class="menu" style="overflow-y:scroll;height:150px;">
  <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('zh',Bsoptions('WorldLanguage'))):?>
       <div onclick="javascript:closeTranslate();" class="item">简体中文</div>
       <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('zh-TW',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|zh-TW');return false;" class="item">繁体中文</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('af',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|af');return false;" class="item">Afrikaans</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('sq',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|sq');return false;" class="item">Shqip</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ar',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ar');return false;" class="item">العربية</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('hy',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|hy');return false;" class="item"> Հայերեն</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('az',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|az');return false;" class="item">Azərbaycan dili</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('eu',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|eu');return false;" class="item">Euskara</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('be',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|be');return false;" class="item">Беларуская мова</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('bg',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|bg');return false;" class="item">Български</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ca',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ca');return false;" class="item">Català</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('hr',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|hr');return false;" class="item">Hrvatski</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('cs',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|cs');return false;" class="item">Čeština</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('da',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|da');return false;" class="item">Dansk</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('nl',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|nl');return false;" class="item">Nederlands</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('en',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|en');return false;" class="item">English</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('et',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|et');return false;" class="item">Eesti</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('tl',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|tl');return false;" class="item">Filipino</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('fi',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|fi');return false;" class="item">Suomi</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('fr',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|fr');return false;" class="item">Français</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('gl',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|gl');return false;" class="item">Galego</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ka',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ka');return false;" class="item">ქართული</div>
<?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('de',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|de');return false;" class="item">Deutsch</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('el',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|el');return false;" class="item">Ελληνικά</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ht',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ht');return false;" class="item">Kreyol ayisyen</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('iw',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|iw');return false;" class="item">עִבְרִית</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('hi',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|hi');return false;" class="item">हिन्दी</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('hu',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|hu');return false;" class="item">Magyar</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('is',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|is');return false;" class="item">Íslenska</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('id',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|id');return false;" class="item">Bahasa Indonesia</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ga',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ga');return false;" class="item">Gaelige</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('it',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|it');return false;" class="item">taliano</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ja',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ja');return false;" class="item">日本語</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ko',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ko');return false;" class="item">한국어</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('lv',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|lv');return false;" class="item">Latviešu valoda</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('lt',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|lt');return false;" class="item">Lietuvių kalba</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('mk',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|mk');return false;" class="item">Македонски јазик</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ms',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ms');return false;" class="item">Bahasa Melayu</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('mt',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|mt');return false;" class="item">Maltese</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('no',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|no');return false;" class="item">Norsk bokmål</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('fa',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|fa');return false;" class="item">فارسی</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('pl',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|pl');return false;" class="item">Polski</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('pt',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|pt');return false;" class="item">Português</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ro',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ro');return false;" class="item">Română</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ru',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ru');return false;" class="item">Русский</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('sr',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|sr');return false;" class="item">Српски језик</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('sk',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|sk');return false;" class="item">Slovenčina</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('sl',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|sl');return false;" class="item">Slovenščina</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('es',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|es');return false;" class="item">Español</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('sw',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|sw');return false;" class="item">Kiswahili</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('sv',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|sv');return false;" class="item">Svenska</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('th',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|th');return false;" class="item">ไทย</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('tr',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|tr');return false;" class="item">Türkçe</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('uk',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|uk');return false;" class="item">Українська</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ur',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ur');return false;" class="item">اردو</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('vi',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|vi');return false;" class="item">Tiếng Việt</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('cy',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|cy');return false;" class="item">Cymraeg</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('yi',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|yi');return false;" class="item">יידיש</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('bn',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|bn');return false;" class="item">বাংলা</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('bs',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|bs');return false;" class="item">Bosanski</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ceb',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ceb');return false;" class="item">Cebuano</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('eo',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|eo');return false;" class="item">Esperanto</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('gu',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|gu');return false;" class="item">ગુજરાતી</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ha',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ha');return false;" class="item">Harshen Hausa</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('hmn',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|hmn');return false;" class="item">Hmong</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ig',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ig');return false;" class="item">Igbo</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('jw',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|jw');return false;" class="item">Basa Jawa</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('kn',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|kn');return false;" class="item">ಕನ್ನಡ</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('km',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|km');return false;" class="item">ភាសាខ្មែរ</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('lo',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|lo');return false;" class="item">ພາສາລາວ</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('la',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|la');return false;" class="item">Latin</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('mi',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|mi');return false;" class="item">Te Reo Māori</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('mr',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|mr');return false;" class="item">मराठी</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('mn',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|mn');return false;" class="item">Монгол</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ne',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ne');return false;" class="item">नेपाली</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('pa',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|pa');return false;" class="item">ਪੰਜਾਬੀ</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('so',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|so');return false;" class="item">Afsoomaali</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('ta',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|ta');return false;" class="item">தமிழ்</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('te',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|te');return false;" class="item">తెలుగు</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('yo',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|yo');return false;" class="item">Yorùbá</div>
    <?php endif; ?> 
       <?php if(!empty(Bsoptions('WorldLanguage')[0]) && @in_array('zu',Bsoptions('WorldLanguage'))):?>
    <div onclick="close_all_language();doGTranslate('auto|zu');return false;" class="item">Zulu</div>
    <?php endif; ?> 
    <?php if(empty(Bsoptions('WorldLanguage'))):?>
    <div onclick="toastr.warning('暂未找到可以翻译的语言，请稍后再试~~~');return false;" class="item">暂未找到可选语言</div>
    <?php endif; ?> 
  </div>
</div>  
