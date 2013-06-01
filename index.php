<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>

<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="generator" content="WordPress 3.1.4">

<title>NTU COURSE RATER 安裝與使用教學</title>

<?php 
require_once("browser_doc.php");


?>

<script src="jquery-1.9.1.js"></script>

<style type="text/css">
body{
	background: rgb(39, 39, 39);
	color:white;
}
a{
	color:#aaeeff;
}
h1,h2,h3,h4,h5,h6{
	color:rgb(255,165,0);
}
a:hover, a:visited ,a:active {
	color:#eeaaff
}

.body_center{
	margin-bottom: auto;
	margin-left: auto;
	margin-right: auto;
	overflow: visible;
	position: relative;
	word-wrap: break-word;
	text-align: left;
}
.div1{
	border:1px solid gray;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}
ul.bs_choose{
	top:0px;
	left:0px;
	position:absolute;
}
ul.bs_choose li{
	/*margin-bottom:3px;*/
	display:block;
}
ul.bs_choose li img{
	max-height:18px;
	margin:2px;
}
ul.bs_choose li a{
	left:-25px;
	text-decoration:none;	
	padding-left:10px;
	padding-right:10px;
	background:#aaaaaa;
	border:1px solid black;
	width:140px;
	color:#0055aa;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding:2px;	
	position:relative;
	line-height:180%;
}
ul.bs_choose li a:hover {
	background:#ffffff;
}
ul.bs_choose li a:hover , ul.bs_choose li a:visited,  ul.bs_choose li a:active  {
	color:#5500aa;
}
.bs_step{
	color:black;
	height:auto;
	width:95%;
	margin:1%;
	border:1px solid gray; 
	cursor:pointer;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;

}
.link_pseudo{
  color: #aaeeff; text-decoration: underline;cursor:pointer;
}
.link_pseudo:hover {
  color: #eeaaff; text-decoration: underline;cursor:pointer;
}
</style>
</head>

<body>

<div id="wrapper_outer" class="body_center" style="width:100%;height:100%;min-height:700px;min-width:1000px;">

	<div id="header" class="div1" style="position:absolute;top:0px;left:0px;width:100%;height:12%;">
		<h1 id="header_title" style="margin-left:15%;"></h1>
			<ul id="header_choose" class="bs_choose">
			<?php
				foreach($browser as $b ){
					echo '<li><a href="?type='.$b->id.'"><img src="'.$b->img.'"/>'.'for '.$b->name.'</a></li>';
				}
			?>
			</ul>
		<div id="header_logo" style="position:absolute;right:10px;top:5px;" >
			<a href="http://dvlab.ee.ntu.edu.tw/" target="_blank"><img src="./img/DVLab.png" style="max-height:80px;" ></img></a>
		</div>
	</div>
	<div id="step" class="div1" style="position:absolute;top:13%;left:0px;width:14%;height:82%;overflow:auto;">

	</div>

	<div id="content" class="div1" style="position:absolute;top:13%;right:0px;width:85%;height:82%;overflow:auto;">

	</div>
	<div style="position:absolute; bottom:0px;width:100% text-align:center">
		Copyright© 2013 DVLAB, National Taiwan University All Rights Reserved 
		<span class="link_pseudo" onClick="show_alert();">
		版權及隱私權聲明 
		</span>
		,	
		<a href="mailto:semanticwebdvlab@gmail.com" >聯絡我們</a>
	</div>

</div>

<script type="text/javascript">
var bs_data=<?php echo json_encode($browser) ;?>;
var bs_current=0;
console.log(bs_data);
function browser_detect(){
	var isChrome = !!window.chrome;                          // Chrome 1+
	var isFirefox = typeof InstallTrigger !== 'undefined';   // Firefox 1.0+
	var isOpera = !!window.opera || navigator.userAgent.indexOf('Opera') >= 0;
		// Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
	var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
			// At least Safari 3+: "[object HTMLElementConstructor]"

	var isIE = /*@cc_on!@*/false;                            // At least IE6

	if(isChrome){
		browser_choose(0);
	//	alert("chrome");
	}
	else if(isFirefox){
		browser_choose(1);
	//	alert("firefox");
	}
	else if(isIE){
		browser_choose(2);
	}
	else{
		browser_choose(3);
	//	alert("none");
	}
}

function browser_choose( t){
	var header_word="NTU Course Rater 安裝與使用教學--";
	if(false){

	}
	<?php  
		foreach($browser as $b ){
			echo '
			else if(t=='.$b->id.'){
				$("#header_title").html(header_word+"'.$b->name.'");
				bs_current='.$b->id.'
			}';
		}
	?>
	else{
		bs_current=-1;
		$("#header_title").html("很抱歉，本程式未支援您的瀏覽器種類");
		$("#header_choose").html('<li><a href="https://support.google.com/chrome/answer/95346?hl=zh-Hant" target="_blank" ><img src="./img/c_i.png"/>請下載Chrome</a></li><li><a href="http://moztw.org/firefox/" target="_blank" ><img src="./img/f_i.png"/>請下載Firefox</a></li> ');
		
	}

}
function load_step(){
	if(bs_current==-1){
		return;
	}
	var bsd_step=bs_data[bs_current].step;
//	console.log(bsd_step);

	for(var i=0; i<bsd_step.length;i++){
		console.log(bsd_step[i]);
		$("#step").html(($("#step").html()+
							'<div '+
							'onClick="load_content('+i+')" '+
							'class="bs_step" id="s_'+i+'">'+
							'<div style="margin:5px;">'+
							bsd_step[i].title+
							'</div></div>'
						  ));
	}
}
function load_content(x){
	if(bs_current==-1){
		return;
	}
	var bsd_step=bs_data[bs_current].step;
	var bsd_img="";
	if(bsd_step[x].img!=""){
		bsd_img='<img style="max-width:95%;max-height:75%; border:1px dotted gray;margin:5px;" src="'+bsd_step[x].img+'" />';
	}
	var bsd_prenex=""
	if(x>0){
		bsd_prenex+='<span class="link_pseudo" onClick="load_content('+ (x-1) +');">|上一步|</span> ';

	}
	if(x<bsd_step.length-1){
		bsd_prenex+='<span class="link_pseudo" onClick="load_content('+ (x+1) +');">|下一步|</span> ';
	}
	$("#content").html('<div style="margin:10px">'+
		'<h3>'+bsd_step[x].title+'</h3>'+'<div class="content">'+
		'<p>'+bsd_step[x].content+'</p>'+
		bsd_img+
		'</div>'+bsd_prenex+
		'</div>'
		
	);
	for(var i=0; i<bsd_step.length;i++){
		$("#s_"+i).css("background","#999999");
	}
	$("#s_"+x).css("background","white");
}
browser_detect();
<?php 
if(isset($_GET['type'])){
	if(($_GET['type']<=count($browser)-1)&&($_GET['type']>=0)){
		echo 'browser_choose('.$_GET['type'].');';
	}
	else{
		echo 'browser_choose(-1);';
	}
}
?>
load_step();
load_content(0);
function show_alert(){
alert('版權聲明：\n本程式之開發以及擁有者為國立臺灣大學電子工程學研究所設計驗證實驗室，其中包括程式、文字敘述、圖片...等，均受到中華民國著作權法及國際著作權法律的保障，著作權為原作者所有。\n\n隱私權聲明：\n本程式純粹用於語意網以及語意資料庫(Sementic Web and Semantic Database)的學術研究用途，其目的為希望能透過簡化繁冗的教學意見調查填答過程，收集帶有語意的教學意見調查資料，進而在下學期推出能夠根據這些課程教學風格或是負擔、難易度等等資料為索引之語意搜尋以及課程推薦、討論、選課之網站。同學們輸入的帳號與密碼，將僅用於登入學校的教學意見網站，我們不會記錄同學的帳號及密碼；此外，根據保密原則，我們絕不會洩漏填答學生的身分或個資，也不會將填答結果以任何形式 --- 包含個別或是群體統計的資訊，直接公開於任何網站或是交付給第三者使用。同學幫助我們填答的部分，將只會用於輔助將來的課程語意搜尋系統，提供同學在選課、排課的參考，幫助同學規劃出最適合個人學習需求的課表。為了讓台大的課程能夠有更方便且普及的評價系統，希望各位同學能夠客觀的踴躍填答！請同學以理性之方式對這門課作文字建議或意見表達（包括教師教學效果好或需要改進意見等），切勿使用侮辱、謾罵或人身攻擊等文字，因而觸法。\n\n ');

}
</script>

</body>
</html>
