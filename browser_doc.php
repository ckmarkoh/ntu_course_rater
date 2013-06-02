<?php
class BrowserDoc {
	function __construct($id,$name,$img="") {
		$this->id=$id;
		$this->name=$name;
		$this->step=array();
		$this->i=0;
		$this->img=$img;
	}
	public function add_step($step_obj){
		$this->step=array_merge($this->step, array($this->i++=>$step_obj)  );
	}
}
class BrowserStep{
	function __construct($title,$txt,$img="") {
		$this->title=$title;
		$this->content=$txt;//'<p>'.$txt.'</p>';
		$this->img=$img;
		//if($img!=""){
		//	$this->content.='<img src="'.$img.'" style="max-width:750px;border:1px dotted gray;"/>';
		//}
	}
}
$i=0;
$browser[$i]= new BrowserDoc($i,'Chrome','./img/c_i.png');
$browser[$i]->add_step(
new BrowserStep('step1 下載','
首先 先下載 <a href="http://r444b.ee.ntu.edu.tw/course_rater/NtuCourseRater.crx" target="_blank" onClick="show_alert()">NTU_COURSE _RATER 主程式</a>,這個程式是一個 chrome 瀏覽器的擴充功能,並不會占用您太多的儲存空間與效能請放心安裝
',
''
)
);
$browser[$i]->add_step(
new BrowserStep('step2 下載完成','
下載以後請不要直接點開,因為瀏覽器已經改版的關係,我們必須在右上角輕點一下
',
'./img/c2.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step3 開選單','
選擇選單中的工具-> 擴充功能
',
'./img/c3.png'

)
);
$browser[$i]->add_step(
new BrowserStep('step4 擴充功能','
點開後會出現擴充功能的頁面,如下圖
',
'./img/c4.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step5 拉檔案','
請開啟下載完後的資料夾,將下載好的程式NtuCourseRater.crx拉至"擴充功能"的畫面中
',
'./img/c5.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step6 開始安裝','
他會詢問你是否新增,請點選新增
',
'./img/c6.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step7 安裝完成','
安裝好之後,在頁面上可看到新的擴充功能,如下圖
',
'./img/c7.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step8 登入ePO','
請先登入<a href="https://if163.aca.ntu.edu.tw/eportfolio/student/OpinionEnd.asp" target="_bank">ePo網頁</a>
',
'./img/c8.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step9 進入填答','
點選"期末意見調查"->"開始填答"
',
'./img/c9.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step10 修正亂碼','
若您的頁面會出現亂碼,如下圖,則需進行本步驟,若沒出現亂碼則可跳過本步驟<br/>
<img class="content_img" src="./img/rr1.png"/><br/>
請選擇右上角的<img style="max-height:18px;"src="./img/cmenu.png" />->"工具"->"編碼"->"Big-5",則可以顯示出正常文字,進行下個步驟<br/>
',
'./img/rc1.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step11 選取項目','
選取想填的項目,按下下方的確定
',
'./img/c10.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step12 看聲明','
進入意見填寫的頁面以後,首先,會跳出"版權與隱私權聲明",請先閱讀完後,再按右上角的按鈕關閉
',
'./img/c11.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step13 開啟面板','
本程式會使頁面右上方多出一個"開啟"按鈕,請點選它
',
'./img/c12.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step14 自動填答','
接著會跳出按鈕及選單,按左方的按鈕,可自動幫你填寫教學意見最下方的空白欄位,右方的選單,可幫你快速解決教學意見中的其他選項
',
'./img/c13.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step15 填答完成','
點選送出後就完成啦
',
'./img/c14.png'
)
);
$i++;
$browser[$i]= new BrowserDoc($i,'Firefox','./img/f_i.png');
$browser[$i]->add_step(
new BrowserStep('step1 下載','
首先 先下載 <a href="http://r444b.ee.ntu.edu.tw/course_rater/ntucourserater.xpi" target="_blank" onClick="show_alert()">NTU_COURSE _RATER 主程式</a>,這個程式是一個 firefox 瀏覽器的擴充功能,並不會占用您太多的儲存空間與效能請放心安裝
'));
$browser[$i]->add_step(
new BrowserStep('step2 下載完成','
下載完以後請點選左上角的"檔案"->"開啟檔案"
',
'./img/f2.png'
));
$browser[$i]->add_step(
new BrowserStep('step3 開啟檔案','
請開啟剛才所下載的檔案ntucourserater.xpi'
,'./img/f3.png'
));
$browser[$i]->add_step(
new BrowserStep('step4 開始安裝','
此時會跳出一個"軟體安裝"的視窗,請選擇"安裝"
',
'./img/f4.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step5 安裝完成','
安裝好之後,會在左上角顯示出成功安裝的訊息
',
'./img/f5.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step6 登入ePO','
請先登入<a href="https://if163.aca.ntu.edu.tw/eportfolio/student/OpinionEnd.asp" target="_bank">ePo網頁</a>
',
'./img/c8.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step7 進入填答','
點選"期末意見調查"->"開始填答"
',
'./img/c9.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step8 修正亂碼','
若您的頁面會出現亂碼,如下圖,則需進行本步驟,若沒出現亂碼則可跳過本步驟<br/>
<img class="content_img" src="./img/rr1.png"/><br/>
請選擇"檢視"->"語言及文字編碼"->"Big-5",則可以顯示出正常文字,進行下個步驟
',
'./img/rf1.png'
)
);

$browser[$i]->add_step(
new BrowserStep('step9 選取項目','
選取想填的項目,按下下方的確定
',
'./img/c10.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step10 看聲明','
進入意見填寫的頁面以後,首先,會跳出"版權與隱私權聲明",請先閱讀完後,再按右上角的按鈕關閉
',
'./img/f8.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step11 開啟面板','
本程式會使頁面右上方多出一個"開啟"按鈕,請點選它
',
'./img/f9.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step12 自動填答','
接著會跳出按鈕及選單,按左方的按鈕,可自動幫你填寫教學意見最下方的空白欄位,右方的選單,可幫你快速解決教學意見中的其他選項
',
'./img/f10.png'
)
);
$browser[$i]->add_step(
new BrowserStep('step13 填答完成','
點選送出後就完成啦
',
'./img/f11.png'
)
);

/*
$i++;
$browser[$i]= new BrowserDoc($i,'IE','./img/i_i.png');
*/
?>
