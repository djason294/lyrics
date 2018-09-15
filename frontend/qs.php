<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>歌手查詢</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
	$(function() {
		availableTags = ["謀殺有限公司( 187 INC 謀殺有限公司 )","1976樂團","1983","19樂團 ( 陳珊妮&陳建騏 )","廿四味( 24 Herbs )","2R","雙胞胎( 2moro )","3P","4 In Love","4℃合唱團( 流行4C )","5566","五月天( MayDay )","八十八顆芭樂籽( 88 balaz )","929( 929樂團 )","A-Day","A2A","AK( 陳奕&沈建宏 )","ASA樂團","Sos( ASOS )","After10(HK)","Aimini","安妮朵拉( Anniedora )","亞龍大( Anodize )","阿霈樂團( Apay樂團 )","As One(HK)","At17","元衛覺醒( Awaking )","B.A.D.( BAD )","B.Gs","天堂鳥( B.O.P )","B2","芭比( BOB )","BOBO( 井柏然+付辛博 )","BY2( 白瑋芬&白瑋玲 )","Baboo","Baby Face","io樂團( Band IO )","熊寶貝樂團( Bearbabes )","Benji and Lesley","Beyond","Big Four","Bingo","黑撒( Black Head )","Blaster","青鳥飛魚( Blue Bird Flying Fish )","Boxing","Boyz Reborn","佛跳牆( Buddha Jump )","bro-5( BRO5 )","C Allstar","C-12( carbon-12 )","超克7( CHOC 7 )","CHOCO","CIRCUS樂團","高潮樂隊( CLIMAX )","COLOR樂團( COLOR BAND )","糖果酒( Candy Wine )","強辯樂團( Champion )","表兒樂團( Children Sucker )","閃靈樂團( ChthoniC )","Cicada","City Sisters","City魅","Closer","Coffee & Tea","來吧！焙焙！( Come On! Bay Bay! )","Cookies","Cozy Diary( 輕日記 )","Cream","Crispy( 脆樂團 )","東城衞( D.C.W.  )","大嘴巴( DA MOUTH )","DIVA 彩月團","Damnkidz","蒲公英( Dandelion )","清晨樂團( Daybreak EcLipse )","Dear Jane","Dears( Dewi & 小安 )","深白色二人組( Deepwhite )","Dianna( 狄安娜樂團 )","Dream Girls","Dry","大支","dayDream","E-Kids","ECHO( 回聲樂團 )","EO2","EXO","EXO-M","Easy","ElectroO2","大象體操( Elephant Gym  )","伊蕾莎樂團( Elesha )","Energy","Swing( 郭偉亮&陳哲廬 )","逃跑計劃( Escape Plan )","Eternity Girls","Ever樂隊","有感覺( F.E.E.L )","飛兒樂團( F.I.R. )","F4","FAITH","農夫( FAMA )","滅火器樂團( FIRE EX. )","FS( Fuying & Sam )","FUSION樂團","Fabel","飛輪海( Fahrenheit )","Fantaz","冰火組合( Fire & Ice )","聚點翻轉( Focus5 )","雀斑( Freckle )","Free Party( 自由派對 )","Freeze","﻿Fun4","兄弟本色( G.U.T.S )","GINA( 囝仔 )","兄弟聯( GO GO Club )","Gentlemen( 紳士樂團 )","Girl Friends","Go Go Rise( 美好前程樂團 )","JS( Justin+Sophia )","Ground Zero( 放射空間 )","吉佑社( Grow Up )","槍擊潑辣( Guntzepaula )","HERO","HIT-5","刺猬( Hedgehog )","Hello Nico","Hotcha","火曜日樂團( Huoyaodays )","Hush！樂團","hide and six","I Love You Boyz( 艾粒仔 )","ICE MAN","蟑螂合唱團( IPIS )","Idol School","iBand","inLove","J.I","J.O.Y.","JOKER","JPM","Jacuzzi( 賈庫西 )","Joanne Wu","約書亞樂團( Joshua Band )","朱凌凌( Juicy ning )","Juzzy Orange","K ONE","KOLOR( Kolor樂隊 )","Kary & Hardpack","鐵猴子( Keep Da Faith )","腰樂隊( Kidney )","KillerSoap( 殺手鐧 )","KingStar","Kiss","庫克樂團( KoOk )","Krusty","棉花糖( katncandix2 )","洛城三兄弟( LA-BOYZ )","機動現場樂團( LIVE MACHINE )","LMF( 大懶堂 )","小護士樂團","蜜蜂少女隊( LadyBees )","謊言留聲機( Lie Gramophone )","凌琳( Lin )","棒棒堂( Lollipop F )","Lotte Girls( 樂天女孩 )","M-Girls( 四個女生 )","明駿女孩( M.G樂園 )","MIC男團( M.I.C.男團 )","MATZKA( 瑪斯卡樂團 )","南台灣小姑娘( MISS 南台灣 )","MONOEYES","Magic Power( MP魔幻力量 )","慢慢說樂團( MURMURSHOW )","米兒絲( MYRS )","Macbeth( 馬克白 )","麻吉( Machi )","Maffine( 瑪啡因樂團 )","ManhanD","火星人( Martian )","馬蹄幫樂團( Marty Band )","Mary See the Future( 先知瑪莉 )","Me2","Mi2","Mib三重唱","蜜雪薇琪( Michelle Vickie )","Mister Mouth","麋先生( Mixer )","Mojo樂團","潑猴( Monkey Insane )","猴子飛行員( Monkey Pilot )","Mr.樂隊","這位太太( Mrs. This )","My Little Airport( 小機場樂團 )","Myar","牛奶咖啡( milk@coffee )","movin’","NCB","南拳媽媽( Nan Quan Mama )","Nasyy( 南西樂團 )","霓虹木","新青年理髮廳( New Youth Barber Shop )","No Limit 無限甜心","草東沒有派對( No Party For Cao Dong )","Nowhere Boys","Nylas","O2O Goddess","OK繃","Oli杭士琁＋Band","橙草樂團( Orangegrass )","押尾學( Oshio Manabu )","適者生存樂團( Out Of Survive )","OwlMan","P!SCO","P.K.14樂隊","熊貓團","胡椒貓樂團( PepperCats )","PixelToy","Popu Lady","Postm3N","動力火車( Power Station )","Precious","Project Ace","胖虎樂團( Punkhoo )","Raidas","隨性樂團( Random  )","赤世代( Red Generation )","Redholic","Rednoon","輕鬆玩樂團( Relax-One )","關東煮( Roar )","Robynn & Kendy","洛客班","筆醬樂團( Rose Fighting )","RubberBand","咻比嘟嘩( S.B.D.W. )","S.H.E( 女朋友 )","S.P.Y( SPY女團 )","S翼樂團( S.Wing )","SD5( SD5行堂 )","SIGMA","SIS樂印姊妹","Super Junior-M( SJ-M )","SNH48","撒小樂團( SO WHAT )","SS.G( 學前班 )","STAYCOOL","信樂團","Shine( 徐天佑&黃又南 )","閃亮三姐妹( Shining 3Girls )","堯十三( Shisan Yao )","Silent Toads","Silverbus","Sky","蘇打綠","恕樂團( Solemn )","Soler( 太陽系 )","Sparkling Girls","SpeXial","Spresto馳云章樂團( Spresto 馳雲章樂團 )","Square","糖兄妹( Sugar Club )","Sunshine(中)","Super 7( Super-7 )","Super Girls","Supergear","Supper Moment","Sweety","T.P.I( 台灣練習生 )","T.R.Y( TRY )","坦娜普","拾音社( TENMUXIC )","TFBOYS","TF家族","花兒( THE FLOWERS )","記號士( THE SIGN OF HUMAN )","平凡生活( THESAMEDAY )","戲子( TOB  )","太妃堂( TOFFEE )","脫拉庫樂團( TOLAKU )","湯姆與哈克( TOM & HUCK )","TRASH( 垃圾 )","Tat Flip","Tension","插班生( The Freshman )","女孩與機器人( The Girl and The Robots )","飢餓藝術家( The Hunger Artist )","旅行團( The Life Journey )","The Looking Glass","昏鴉( The Murky Crows )","The Pancakes","涼煙樂團( The SlimCigarettes )","沼澤樂隊( The Swamp )","溫拿五虎( 溫拿樂隊 )","The3Think","鐵樹蘭( Tie Shu Lan )","無限融合樂團( Timeless Fusion Party )","Tizzy Bac","ToNick","Tokyo D","至上勵合( Top Combine )","生命樹樂團( Tree Of Life )","Twins Girls( 旗聚女聲 )","Twins( 蔡卓妍&鍾欣桐 )","UNDER LOVER( 地下情人 )","UNI POWER( 環球保衛隊 )","優客李林( Ukulele )","Unfamiliar Friends Party( 不熟的朋友派對 )","Vast & Hazy","Venue","Vrf","W.S.S.( 草莓救星 )","Wewe","What Century( 花世紀樂團 )","野仔( Wildchild )","旺福( Wonfu )","XL特大號樂團","神木與瞳( Y2J )","YIYO","Yukilovey","ZEN樂隊","Zarahn","展翼樂團( Zayin )","ZolarWind","丸子","亂彈","元氣","刺客","功夫","動靜( 動靜樂團 )","原味( 原·味 )","嘿","圈圈","天韻","她她","年少","慈濟","木馬","羽泉","草蜢( 草蜢隊 )","輪迴( 輪迴樂隊 )","野人","流氓樂團( 阿德 )","靈感( 靈感樂隊 )","龍寬( 龍寬九段 )","丘與樂","五條人","光引擎","八三夭( 831 )","音樂鐵人( 劉明峰 )","小松&小柏( 小松小柏 )","打狗亂歌團( 嚴詠能 )","四分衛","四千金","壞碑唇","夢劇院( 劉文娟&李敏 )","夢飛船","大台風","大囍門","大小姐","大聲東","大頭佛","天織堂","夾子道","好豐盛","孫建平( 孫建平&音樂廣場 )","小大人","小旺福","小虎隊","少女隊","巧千金","廢五金","愛樂團","憂樂園","指南針","摩天人","新褲子","星光幫","星盒子","暖樂團","東于哲","林瑪黛","櫻桃幫","歌舞劇","流浪漢","浮世繪","爆女郎","痞克四","神奇膠","禁獵社","福祿壽","簡迷離","粉紅A","糯米糰","紅唇族","紅孩兒","紅蘋果","紅螞蟻","緋緋兔","縱貫線","胃氣團","自然捲( 娃娃&奇哥 )","與非門","螺絲釘","謝芊彤","豹小子","迷路兵","野孩子","阿妹妹","阿里郎","隔壁團","風信子","骨肉皮","麥克瘋( MICappella )","黑鴨子( 黑鴨子合唱組 )","一步樂團","中國娃娃","中堅份子","乩童秩序","二手玫瑰","交工樂隊","人工衛星","余力機構","依錚依靜","便利商店","兩個女生","六翼天使","冷血動物","刺蝟樂隊","化學猴子","北原山貓","南合文斗","南合文鬥","南門音樂","原子邦妮","可米小子","吉祥三寶","哥哥妹妹","唐朝樂隊( 唐朝合唱團 )","四個朋友( 林正&鄭宇伶&劉佳銘&蘭馨 )","四分之三","四大天王","因果兄弟","圖騰樂團","在草地上","城市少女","夕陽武士","大喬小喬","大小百合","天堂樂隊","太極樂隊","夾子樂團( 夾子電動大樂隊 )","好好先生","山風點伙","崇基崇德","左左右右","李克勤&譚詠麟( 左麟右李 )","彝人製造","微胖女神","憂歡派對","我城故事","拾參樂團","教練樂隊","文鳳文鶯","旭日陽剛( 王旭&劉剛 )","明珠姐妹","星光二班( 星光2班 )","東方快車( 搖滾東方樂團 )","果味VC","森美移動","椰子樂團","模功傳奇","櫻花姐妹","水木年華","沙子樂隊","浩角翔起","浪花兄弟","無印良品","無双樂團","生祥樂隊","痛仰樂隊","白目樂團","盤古樂隊","睡帽樂團","砰砰樂隊","神秘人物","筷子兄弟","粉紅派對","糖糖樂團","絲襪小姐","聲音碎片","胖胖樂團","自由發揮","萊特姊弟","西山樂隊( 西山 )","賭鬼樂隊","超載樂團","軟硬天師","達明一派","達達樂隊","鍾氏兄弟","閃亮寶貝","阿佳組合","零點樂隊","青蛙樂隊","非人物種","面孔樂隊","音樂磁場( 孫建平&音樂磁場 )","風采姐妹","鳳凰傳奇","黑豹樂隊","七號青樂團","丘丘合唱團","信森活樂團","凡人二重唱","十月合唱團","南方二重唱","反光鏡樂隊","台灣爽樂團","咖啡因公園","四海小兄弟","團契遊樂園","好妹妹樂隊","宇宙人樂團","宏星特攻隊","小城星電台","小宇宙樂團","小老鷹樂團","巨人三重唱( 洪鐘&溫灼光&麥青 )","巨大的轟鳴","欣韻二重唱","歐開合唱團","濁水溪公社","牛奶罐樂團","猛虎巧克力","甜蜜的孩子","男子漢樂團","發條人樂團","知己二重唱","稻草人兵團","童話演唱團","芝麻與龍眼( 芝麻龍眼 )","董事長樂團","血肉果汁機","超口愛樂團","輕晨電樂團( 輕晨電 )","辦桌二人組","錦繡二重唱","開心少女組","青春美少女","青鳥合唱團","香港小虎隊","麥田守望者","麻花捲怪獸","黑Girl( Hey Girl )","上海交響樂團","唐山+程琇慧","夾子太硬啦!","微酸的偷窺狂","袁成杰&戚薇","撒拉弗敬拜團( 撒拉弗敬拜事奉團隊 )","新寶島康樂隊","星星月亮太陽","木吉他合唱團","法式綺思樂團","蘭色花園樂隊","農村武裝青年","青燕子演唱組","鮑家街43號","黑名單工作室","不寂寞樂團．阿京","俞思遠&BiZ樂團","南瓜妮歌迷俱樂部","合輯(2016年發行)","吳俊宏&唐儷","四分鐘熱度樂團","夢之旅合唱組合","孫建平&Sweet Style","小娟&山谷裡的居民","小豆 & 方果","張崇基&張崇德","張政雄&薛珮潔","方瑞娥&高向鵬","李克勤&容祖兒","李明洋+邱芸子","李逸朗+蔣雅文","林良歡&許志豪","梁奕倫&范振鋒","森美小儀歌劇團","樂世界閃亮之星","牯嶺街少年合唱團","田華&杜磊","翁孝良林雨二重唱","落差草原WWWW","訂座你的情人節","那我懂你意思了","金門王&李炳輝( 金門王與李炳輝 )","錢澄&一綾","鍾一憲&麥貝夷","鍾盛忠,鍾曉玉","阿爆&Brandy","陳中&邱芸子","頑童 MJ116","高向鵬&傅振輝","高向鵬&方怡萍","玖壹壹( 911 )","阿貴( A-KEI )","郭富城( AARON )","炎亞綸( AARON )","阿超( ACHAU )","AC周予天","AJ","黃鴻升( 小鬼 )","陳坤( ALOYS )","楊宗緯","李治廷( Aarif )","方炯鑌( 阿鑌 )","鄭少秋( Adam Cheng )","符致逸","盧學叡( Afalean )","柯有倫( Alan Kuo )","譚詠麟( Alan Tam )","謝中傑","方力申","李韋( Alex Lee )","杜德偉( Alex )","夏天( Alex )","許廷鏗( Alfred Hui )","林依輪( Allen Lin )","蘇醒( Allen )","宇倫( Allen )","鍾瑾樺( Alvin Chong )","阿穆隆( Amguulan )","許志安( Andy Hui )","劉德華( Andy Lau )","邱烈豐( Andy Qiu )","胡彥斌","倪安東( Anthony Neely )","方欣浩( Arnold Fang )","徐靖博( BOBO )","葉文輝( Barry Ip )","吳思賢( 小樂 )","黎駿( Benny Lai )","Bii( 畢書盡 )","鄭元嘉( Billie )","林保怡","崔健( CUIJIAN )","鄭家星( Carlson Cheng )","陳詠謙( Chan Wing Him )","陳浩峰( Chan, Ho Feng )","張峰奇( Chang Daniel )","應昌佑( Charles Ying )","廚房仔( Chef )","陳學冬( Cheney Chen )","張傑( Chieh Chang  )","張智霖( Chilam Cheung )","黃凱芹( Chris Wong )","游鴻明( Chris Yu )","鄭國鋒( Clown )","盧廣仲( Crowd Lu )","陶喆( DAVID ZEE TAO )","DEAL( 莊冬昕 )","DJ Elvis( 丘克俊 )","羅百吉( Jerry Lo )","DJ Tommy","大隸( Da lead )","陳曉東( Daniel Chan )","羅時豐( 大牛 )","陳百強( Danny Chan )","夏韶聲( Danny Summer )","東來東往( 戴凌鵬 )","唐禹哲( Danson Tang )","呂方( David Lui )","黃大煒( Dawei Huang )","吳浩康( Deep Ng )","吳彤( Denis Ng )","何維健( Derrick )","鄭伊健( EKIN )","巫啟賢( ERIC WOO )","陳奕迅( Eason Chan )","Easy Shen","吳國敬( Eddie Ng )","梁漢文( Edmond Leung )","湯駿業( Edmond Tong )","蘇奕銓","周華健( Wakin Chau )","周國賢","孫耀威","曾志偉( Eric Tsang )","周興哲( Eric )","林健輝( EricLim )","蔡旻佑( Evan Yo )","歡子( Fandy )","劉鳳瑤( Finn Liu )","Finn","林文龍( Frankie Lam )","鄭俊弘( Fred Cheng )","張子丰( Fred Cheung )","訐譙龍( Gan Giau Long )","蔣卓嘉( GJ )","曹格( Gary )","Gary麟( 蔡興麟 )","梁基爵( Gaybird )","林子祥( George Lam )","關喆( Grady )","古巨基( Leo Ku )","後弦( 鄧文彬 )","李克勤( Hacken Lee )","鄒宗瀚( 鄒宗翰 )","葡桃( HappyBomb )","庾澄慶( 頂尖拍檔 )","黃湛熙( HeiWong )","哈寶寶( 庾澄慶 )","張敬軒( Hins Cheung )","黃品源( Huang Pin-Yuan )","黃曉明( Huang Xiao Ming )","胡鴻鈞","王友良","王識賢( JASON )","周杰倫( JAY CHOU )","卓杰勝( JIE )","林俊傑( JJ )","JKAI ( 傑凱 )","喬洋( JOE )","鄧廣福( 阿福 )","成龍","袁耀發","張學友( Jacky Cheung )","吳宗憲( Jacky )","蕭敬騰","Jamaster A( 楊振龍 )","林宥嘉( Yoga )","溫昇豪","林海峰( Jan Lamb )","陳柏宇( Jason Chan  )","鍾一憲( Jason Chung )","張杰( Jason )","張信哲( 阿哲 )","黃立成( Jeffery Huang )","言承旭","林志穎","王矜霖( Jinlin Wang )","陳小春( Jordan Chan )","周定緯( Judy )","恭碩良( Jun )","麥浚龍( Juno Mak )","鍾鎮宇( Justin Chung )","側田( Justin Lo )","劉界輝( Juztin Lan )","羅啟聰( K.I.S. )","宇海文( KEVIN )","陳志嘉","關楚耀( Kelvin Kwan )","洪卓立( Ken Hung )","楊宗憲( Ken )","吳克羣( Ken )","KenT( 王健 )","馬國明( Kenneth Ma )","鍾鎮濤","關智斌( Kenny Kwan )","鄭嘉穎( Kevin Cheng  )","林隆璇( Kevin )","方大同( Khalil Fong )","奇樂( Kira )","吳業坤( Kwan Gor )","張藝興( LAY )","王力宏( Leehom Wang )","黎明( Leon )","張國榮( Leslie )","李逸朗( Li Don )","林志炫( Terry Lin )","林育羣( 小胖 )","劉歡( Liu Huan  )","盧冠廷( Lowell Lo )","賈思樂( Louie Castro )","張繼聰( Louis Cheung )","羅雋永( Louis Lo )","林樂偉( Ludwig )","歐陽靖( MC Jin )","李玖哲( Machi小胖子 )","滿人( Manchuker )","馬嘉均( Mason Ma )","MastaMic","Mc HotDog( 熱狗 )","黎曉陽( Michael Lai )","光良( Michael Wong )","黃子佼( Mickey )","葉乃文( 牛奶 )","陳豪( Moses Chan  )","布朗( MrBrown )","黃明志( Namewee )","陳百祥( Natalis Chan )","張棟樑( Nicholas Teo )","謝霆鋒( Nicholas Tse )","宮閣","倪力( Nick Ngai )","周湯豪( Nick )","孫子涵( Niko Sun )","陳零九","No Name( 余荃斌 )","Nora Says","海鳴威( OCEAN )","歐得洋( Ocean )","周柏豪( Pakho Chau )","派偉俊( Patrick Brasca )","鄧健泓( Patrick Tang )","彭坦( Peng Tan )","何潤東( Peter Ho )","潘裕文( Peter )","林奕匡( Phil Lam )","朴樹( 樸樹 )","陳仁丰( Quincy )","林埈永( 綠茶 )","馬天宇( Ray Ma )","林峯( 林逸峯 )","王錚亮","荒山亮( Ric )","石頭( 五月天 )","羅賓","郭晉安( Roger Kwok )","周永恆( Roy Chow )","何衍隆( Royal Ho )","許懷欣( Ryan Hui )","李聖傑( Sam )","森美( Sammy Leung )","許冠傑( Samuel Hui )","邰正宵( Samuel Tai )","劉佳( Sara )","彭永琛","張峽浩( Sean Xiahao Zhang )","李嘉強( Seasons Lee )","永邦( Shaun )","宋岳庭( Shawn )","羅志祥( Show )","高勛( Shown Gao )","汪蘇瀧( Silence.W )","安俊豪( Simon On )","Sketch","蛋堡( SoftLipa )","黃立行( Stanley Huang )","許仁杰( 許仁傑 )","黃家強( Steve Wong )","馬浚偉","舒米恩( Suming )","TANK( 呂建中 )","韓梓亮( TL )","陳偉聯( Tan Wei Lian )","于湉( Tan )","泰迪羅賓( Teddy Robin )","蔡國權( Terence Choi )","阮泰瑞( Terry Luan )","鄒文正","胡清藍( Terry )","鄭淳元( The One )","張雨生( Zhang Yu Sheng )","V.K 克( V.K )","許嵩( Vae )","范逸臣( Van Fan )","吳建豪( Vanness )","品冠( 黃品冠 )","王浩信( Vincent Wong )","徐哲緯( Voter )","曹震豪( Wallis Cho )","王夢麟( Wang Mon Ling )","Waterman","白色海盜","潘瑋柏( Wilber )","劉浩龍( Wilfred Lau )","劉畊宏( Will )","蘇永康( William So )","陳偉霆( William )","韋禮安( William )","羅文裕( Wing Lo )","黃耀明( Wong Anthony )","王祖藍( Wong Cho Lam )","王喜( Wong Hei )","伍佰( 吳俊霖 )","吳大維","謝天笑( Xie Tianxiao )","增山裕紀( YUKI )","周殷廷( Yan Ting )","Yellow!","嚴爵( Yen-j )","黃義達( YiDa )","黃士祐( Yuji )","高皓正( Zac Kao )","Zoho","陳冠希( edison chen  )","小蟲( 陳煥昌 )","王傳一( kingone )","翁立友","保劍鋒","包偉銘","卜學亮( 阿亮 )","布達伊","拜爾","比菲多多","白健恩","白水","邊疆","平安","彭偉華","彭健新","彭柏邑","彭清","彭紀諺","彭遠揚","彭鈞","樸文哲","潘協慶","潘安邦","潘廣益","潘成","潘敬祖","潘文格","潘曉峰( 西域刀郎 )","潘源良","潘玨璋","澎恰恰","蒲巴甲","蒲洋","龐龍","木瑪","梅東生","毛寧","毛鵬懿","民雄","滿文軍","滿江","米志宏","莫少聰","莫智欽","莫鎮賢","馬保羅","馬健濤","馬兆駿","馬國偉","馬天佑","馬尚仁","馬德鐘","馬念先","馬文吉","馬旭成","馬旭東","馬智宇","馬雲龍","馬靚辳","馬頔","馬駿杰","麥偉林","麥克","麻吉弟弟( 周立銘 )","付辛博","傅振輝","房祖名","方志耀","方順吉","樊凡","符家浚","范振鋒","范揚景","費玉清","費翔","馮偉傑","馮允謙","馮德倫","馮翰銘","丁于","丁思忖","丁浩然","丁衣凡","代小波","刀郎","刁寒","單色凌","多亮","大哲","大張偉","大慶","大炳","戴顯揚","杜俊輝","阿杜( 杜成義 )","杜歌","杜汶澤","東南-Don","東山少爺","東與政","段千尋","狄易達","竇唯","竇智孔","迪克牛仔","達坡阿玻","鄧佳坤","鄧傑","鄧子霆","鄧建明","鄧志浩","鄧超","鄧養天","佟大為","佟鐵鑫","唐文龍","唐磊","唐銘良","天浩","屠洪剛","庹宗康","庹宗華","湯小康","湯潮","田一龍","田宇哲","童亞卿","童安格","藤井樹","譚傑希","小賤( 譚冰堯 )","譚耀文","鐵石","陶大偉","騰格爾","倪敏然","寧桓宇","聶禹","鈕大可","鯰魚哥","乱彈阿翔( 陳泰翔 )","劉嘉亮( 亮亮 )","倫永亮","六哲","冷漠","凌加峻","凌峰","劉亮鷺","劉以達","劉仲儀","劉偉仁","劉元","劉其賢","劉劭希","劉可","劉威煌","劉子千","劉家昌","劉心","劉思偉","劉愷威","劉文正","劉明輝","劉曉","劉漢強","劉福助","劉超華","劉錚","劉錫明","劉鍚明","呂浩峰","呂良偉","廖士賢","廖大森","廖文強","李亞明","李代沫","李佳璐","李俊旭","李健","李其燊","李劍青","李加靚","李吉漢","李周杰","李唯楓","李國毅","李國祥","李壽全","李威","李威慶","李威籲","李子恆","李宇林","李安豪","李宗盛","李家仁","李崗霖","李建復","李志","李志洲","李思捷","李恕權","李承炫","李拾壹","李日詹","李明德","李明洋","李明翰","李易峰","李昶俊","李晨","李杰","李榮浩","李正帆","李沛瑋","李泉","李泰祥","李海強","李炆","李為","李煒","李玉剛","李玉璽","李琛","李琦","李祥祥","李祺","李立崴","李維","李茂山","李萌","李行亮","李銘順","李雨寰","李霄云","李霖","李風持","李驥","李魏西","李龍基","林一峰","林久登","林佑威","林俊吉","林俊逸","林利","林劍衡","林國慶","林大晉","林子良","林宇中","林宏龍","林宗興","林家德","林少緯","林師傑","林建亨","林強","林志斌","林敏驄","林昕陽","林木","林東松","林正豪","林沖","林漢洋","林漢陽","林珍範","林瑞陽","林瓊瓏","林生祥","林禹勝","林立洋","林美儀","柳子駿","梁佳玉","梁俊軒","梁博","梁奕藍","梁家輝","梁弘志","梁振宇","梁文福","梁朝偉","梨可辰","樂卓奇","樓宏章","欒克勇","流氓阿德","盧庚戌","盧昌明","羅中旭","羅力威","羅吉鎮","羅嘉良","羅嘉豪","羅大佑","羅孝勇","羅文","羅文聰","羅鈞滿","老爺占","老狼","良一","蓮歌子","藍奕邦","藍雨","賴偉鋒","賴慈泓","路勇","郎軍","陸毅","陸虎","零雨飛","雷諾兒","雷頌德","駱雨喬","鹿晗","黎沸揮","黎耀祥","龍世傑","龍嘯","龍軍","剛澤斌","古卓文","古天樂","古小偉","古晧","古皓","廣智","歌浴森","狗毛","管維嘉","葛本軍","貫家郡","郭健一( 鄔兆邦  )","郭力行","郭品超","郭大誠","郭子","郭小霖","郭峰","郭桂彬","郭獎","郭蘅祈","郭金發","郭頂","關德輝","關正傑","顧峰","高人傑","高凌風","高向鵬","高安","高峰","高明瀚","高明駿","高楓","高登","高藝菲","高進","亢帥克","卡卡","孔令奇","孔朝","康康( 康晉榮 )","柯受良","柯智棠","柯林","鄺祖德","何俊明","何家勁","何建清","何弘軒","何志健","何映達","何晟銘","何欣","何浩文","何炅","何篤霖","何龍雨","侯志堅","侯志斌","侯旭","侯牧人","侯磊","含瑞","呼斯楞","回音哥","恆仔","恆春兮","洪杰( 扈佳榮 )","洪一峰","洪一平","洪敬堯","洪文斌","洪榮宏","洪第七","洪鐘","浩瀚","海俊傑","海哲明","海天一色合唱團","海生","海鑌","畫天","王櫟鑫( 糊糊 )","胡兵","胡利基","胡力","胡夏","胡宇威","胡德夫","胡歌","胡渭康","胡瓜","胡諾言","胡靖杰","華晨宇","賀一航","郝劭文","郝強","霍尊","霍建華","霍正奇","韓信","韓寒","韓庚","韓東","韓沛漛","韓磊","韓賢光","黃一飛","黃三元","黃中原","黃仲崑","黃仲齊","黃俊焰","黃偉文","黃克林","黃勇","黃名偉","黃國倫","黃大城","黃大軍","黃奕儒","黃威爾","黃子華","黃子韜","黃宇農","黃安","黃宗澤","黃宥傑","黃崇旭","黃平洋","黃建為","黃征","黃心懋","黃文昌","黃文星","黃昺翔","黃智筠","黃清元","阿沁( 黃漢青 )","黃玠","黃瑞文","黃磊","黃秋生","黃維德","黃舒駿","黃藍白","黃西田","黃貫中","黃連煜","黃閱","黃霑","黃靖","黃靖倫","黑龍","井柏然","傑克33( 張傳杰 )","夾子小應","姜濤","姜玉陽","姜育恆","姜華","姜道","姜鄠","姜鵬","季忠平","江凱文","江南誠","江宏恩","江志豐","江明學","江智民","江濤","江華","焦慶軍","簡上仁","簡弘亦","紀佳松","紀宏仁","蔣佩華( 阿華 )","蔣志光","蔣榮宗","角聲使團","賈南","金城武","金志文","金貴晟","七郎","丘沁偉","全世煌","區俊濤","區新明","區瑞強","喬任梁","曲佑良","清源","祁哲西","祁隆","秋褲大叔","秦偉","秦楊","秦淮","邱振哲","邱比","邱永傳","邱澤","邱鋒澤","錢韋成","青山","齊晨","齊秦","信( 蘇見信 )","兄弟小文","夏金城","夏鳴","小5","小人","周傳雄( 小剛 )","小宇( 宋念宇 )","小寶( 史嘯吟 )","小普","小曲兒","小肥( 徐智勇 )","徐乃麟","徐偉賢","徐嘉良","徐威","徐子崴","徐小明","徐承邦","徐曉羽","徐洪剛","徐浩","徐澤","徐瑋","徐睿","徐良","徐詣帆","徐譽滕( 徐歆舜 )","徐銘璟","星弟","湘東雨","湘海","炫木","熊天平","犀牛","秀才","笑天","肖飛","蕭全","蕭憶情","蕭承祥","蕭正楠","蕭澤倫","蕭煌奇","蕭福德","蕭閎仁","薛之謙","薛岳","薛忠銘","薛炳進","許亮宇","許冠英","許富凱","許巍","許志豪","許效舜","許晉豪","許書豪","許紹洋","許諾","許魏洲","許鶴繽","謝佳見","謝偉倫","謝和弦","謝天華","謝宇威","謝宗霖","謝有才","謝祖武","謝華","謝軍","謝銘祐","謝雨維","謝雷","謝震廷","辛隆","辛龍","邢天卓","雪村","周云蓬","周享嘉","周佳佑","周俊偉","周偉傑","周厚光","周啟生","周大派","周子揚","周宇軒","周旭風","周治平","周渝民( 仔仔 )","周葆元","周裕先","周覓","周雲蓬","周韋杰","張世彬","張伯宏","張倫輝","張偉文","張克帆","張右城","張啟輝","張善為","張嘉傑","張宇","張家輝","張峰","張帝","張心傑","張志政","張志林","張振宇","張政雄","張文森","張明敏","張智成","張楚","張永智","張津滌","張洪量","張海","張海漢","張燕清","張獻仁","張瑞哲","張真","張睿","張睿銓","張磊","張祖誠","張立基","張羽偉","張致恒","張菲","張萌萌","張衛健","張覺隆","張赫宣","張躍","張鎧麟","張鎬哲","張陽陽","張雷","張震","張震嶽( 阿嶽 )","張露","朱元冰","朱國豪","朱康","朱浩仁","朱立勛","豬頭皮","朱豔強","朱長松","焯皓","祝瑞蓮","章小軍","舟瑜","莊孝緯","莊學忠","莊振凱","詹瑞文","豬哥亮","趙一豪","趙傳","趙又廷","趙擎","趙本水","趙治德","趙真","趙自強","趙船長","趙英俊","趙雷","趙騰恩","趙鵬","鄭世豪","鄭中基","鄭偉康","鄭元暢","鄭君威","鄭宇文","鄭敬基","鄭智化","鄭源","鄭進一","鄭鈞","鍾偉強","鍾尚榮","鍾漢良","鍾盛忠","鐘立風( ﻿鍾立風 )","長春蟲子","常定晨","常石磊","春艷","晨熙","程文政","程科","辰亦儒","陳一郎","陳世川","陳中","陳乃榮","陳以生","陳偉","陳傑洲","陳傑瑞","陳冠宇","陳凱倫","陳勢安","陳卓宏","陳司翰","陳啟泰","陳國峰","陳國華","陳均能","陳大天","陳奐仁","陳奕","陳如山( 阿山 )","陳威全","陳展鵬","陳建年","陳建瑋","陳建誠","陳彥允","陳彼得","陳志朋","陳思成","陳思瑋","陳慶仁","阿牛( 陳慶祥 )","陳日豐","陳旭","陳昇","陳明章","陳星","陳昱熙","陳柏全","陳楚生","陳永淘","陳永龍","陳洲宏","陳浩民","陳玉建","陳瑋儒","陳百潭","陳立強","陳紀匡","陳翔","陳耀川","陳興","陳茂豐","陳藝鵬","陳詠","陳輝陽","陳隨意","陳雅森","陳雨霈","陳雷","上明","勝嶼","史俊鵬","山野","帥霖","施孝榮","施志興","施文彬","施文斌","施易男","沈世愛","沈建豪","沈文程","沈玉琳","沈震軒","沙寶亮","石康鈞","石竣艮","舒雲","舜文齊","詩錯亦染","誓言","邵大倫","任子墨","任賢齊","任雙江","容中爾甲","日京江羽人","阮兆祥","饒天亮","左小祖咒","曾國銘","曾志權","曾春年","曾航生","紫海","臧天朔","叢浩楠","崔恕","阿爆","曹松章","曹永廉","曹磊","曹軒賓","曹雷","曹龍","蒼井空","蔡一傑","蔡佳麟","蔡國慶","蔡小虎","蔡振南","蔡曉","蔡楓華","蔡榮祖","蔡淳","蔡濟文","蔡義德","蔡藍欽","蔡阿嘎","王右令","司文","孫協志","孫博","孫國慶","孫情","孫明","孫楠","孫豆爾","孫銘宇","孫青","宋偉峰","宋冬野","宋孟君","索南扎西","索朗扎西","蘇來","蘇兒真","蘇勒亞其其格","蘇天華","蘇有朋","蘇耀光","一帆","亞崴尤奈( 亞崴 )","伊恩森","嚴波","姚乙","姚俊羽","姚健","姚國禎","宥勝","尹光","尹子維","揚哲","易桀齊( 易齊 )","易欣","楊俊龍","楊光","楊克強","楊剛","楊哲","楊坤","楊培安","楊天寧","楊峻榮","楊慶煌","楊斌","楊晨暉","楊洋","楊炅翰","楊烈","楊瑞代","楊耀東","楊臣剛","殷正洋","殷浩","游兆棋","眼球先生","英倫希","葉世榮","葉佳修","葉俊亨","葉俊岑","葉停雨","葉勝欽","葉啟田","葉宇澄","葉復台( 舞棍阿伯 )","葉振棠","葉明德","葉秉桓","葉良俊","葉諾帆","陽一","陽帆","音頻怪物","顏佑庭","顏冠希","顏志文","顏福偉","顏羽","顏聯武","伍俊華","伍家輝","伍思凱","伍易 51","伍浩哲","伍澤","吳亦凡","吳俊宏","吳勇濱","吳卓羲","吳向飛","吳听徹","吳品醇","吳啟華","吳大衛","吳奇隆","吳彤(輪迴樂隊)","吳志寧","吳昊恩","吳是閎","吳晉淮","吳木","吳歡","吳海文","吳煒","吳爽","吳百倫","吳至青","吾酷","威仔","巫奇","文夏","文奎","文章","武藝","汪中意","汪定中","汪峰","汪東城","溫偉杰","溫兆倫","溫力銘","溫灼光","王一明","王中平","王俊傑","王傑","王冠逸","王凱","王凱駿","王博文","王唯一","王啟文","王嘯坤","王大文","王子鳴","王宏恩","王寶強","王建傑","王建勛","王建復","王強","王日昇","王旭鵬","王晨光","王柏森","王梓蘅","王梓軒","王江發","王瑞瑜","王繹龍","王羽澤","王翰","王起宏","王野","翁元佑","萬曉利","韋雄","魏晨","于冠華","于天龍","于夫","于浩威","于立成","余天","余天龍","余威","余帝","余文樂","余楓","余波","余潤澤","余炳軒","俞灝明","俞隆華","宇桐非","虞洋","袁培華","袁小迪","袁惟仁","袁成杰","袁景","袁野","袁金義","雨天","雨木","阿Ben","阿吉仔","阿寶","阿弟","阿弟仔","阿木","阿樂","阿清","阿爍","阿龍正剛","阿龍正罡","艾成","歐漢聲( 歐弟 )","歐育齊","歐豪","安德烈","安德魯西佛","安東","安濤","安琥","安迪","鞍安","ＭＣ耀宗","23號半","A-Lin( 黃麗玲 )","張惠妹( 阿妹 )","AGA( 江海迦 )","梁佑嘉( Abella )","張芯瑜( 小小瑜 )","鄧福如( 阿福 )","謝沛恩( Aggie )","韓晶( Aimee )","Alan( 阿蘭 )","Alena Wu( 阿勒娜 )","李蕙敏( Amanda Lee )","郭采潔( Amber )","安心亞( Amber )","譚嘉荃( Amy Tam )","陳琪( Angel Chan )","張韶涵( Angela )","安又琪( Angela )","區文詩( Angela )","楊穎( Angelababy )","岑日珈( Angie Shum )","范安婷","梅艷芳( Anita Mui )","白安( Ann )","雷安娜","潘清華","林依晨( Ariel )","貍貓( Aristophanes )","雨僑( 羽翹 )","廖碧兒( Bernice Jan Liu )","趙之璧( BIBI )","Bell 宇田( 宇田 )","鍾玲玲( Betty Chung )","胡琳( Bianca Wu )","王雪娥( 比莉 )","陳佳( Bobo )","彭羚( CASS PHANG )","周蕙( CHOU HUEI  )","方瑞娥( COCO方 )","CRITTY","許雅涵( Candy )","鄭筱蓉( Carol )","天天( Carrie Qian )","謝文雅","梁雨恩( Cathy Leung )","韓雪( Cecilia )","張玉華( Celest Chang )","蔡佳靈( Charis )","陳綺貞( Cheer Chen )","唐素琪( Chelsea Tong )","陳秋霞( Chelxia Chan )","陳好( Chen Hao )","喬樂頤( CherieQ )","黃鎧晴( Cherry )","蔡琴( Chin Tsai )","靖兒","余翠芝( Chita )","李宇春","伍詠薇( Christine Ng )","克麗絲叮( Christine Welch )","袁詠琳","郭靜","李玟( CoCo Lee )","呂莘","陳明恩( Corinna Chamberlain )","趙詠華( Cyndi Chaw )","王心凌( Cyndi )","丁菲飛( DING FEI FEI )","蔡詩蕓( DIZZY DIZZO )","葉德嫻( Deanie Ip )","黃荻鈞( Debbie )","丁噹( Della )","何韻詩( HOCC )","張懸( Deserts Xuan )","童圓喻( Dessy )","王詩安( Diana )","黃承恩( EKEE )","ELLA( 陳嘉樺 )","鍾汶","顧芮寧( Elaine Koo )","陳彥寧( Elaine )","江若琳( Elanne )","莫龍丹","廖雋嘉( Elise Liao )","官恩娜","小雪( Elle Choi )","盧凱彤","陶妍霖( Elleya Tao )","蕭亞軒( Elva )","黃伊汶","方恩沁( Eunice Png )","李卓庭( Eunix )","黃聖依( Eva )","艾怡良( Eve Ai )","范瑋琪( FanFan )","王菲( 王靖雯 )","薛凱琪( Fiona )","梁靜茹( Fish Leong )","陳慧珊( Flora Chan )","葉麗儀( Frances Yip )","Frandé( 法蘭黛樂團 )","鄧紫棋( G.E.M. )","梁詠琪( GIGI )","卓文萱( Genie )","顏慧萍( Geraldine Gan )","林苑( Yuan Lin )","李幸倪( Gin Lee )","歌莉雅( Gloria Tang )","Gloria( Gloria Ling )","龔玥( Gong Yue )","李河璘","田馥甄( Hebe )","游艾迪( 游喧 )","林綾( IRIS LIN )","以莉 高露( Ilid Kaolo )","林冠吟( In )","王菀之( Ivana Wong )","嚴藝丹( Ivy Yan )","雷琛瑜( J.Arie )","賈曉晨( JJ )","蔡淳佳( JOI TSAI )","阿桑( a-sun )","王灝兒 JW( JW )","陳曉琪( Kelly jackie )","關心妍","劉力揚( Miss漾 )","張靚穎( Jane Zhang )","黃美珍( Jane )","衛蘭","謝金燕( Jeannie )","李權哲( Jerry Li )","李佳薇( Jess )","江語晨( Jessie Chiang )","家家( 紀家盈 )","徐潔兒( Jill Hsu )","衛詩( Jill Vidal )","吳若希( Jinny Ng )","王若琳( Joanna Wang )","江蕙( Jody )","容祖兒","蔡依林( Jolin )","朱薰( Josephine )","何超儀( Josie Ho )","鄭欣宜( Joyce Cheng )","李樂詩( Joyce )","翁倩玉( Judy Ongg )","彭佳慧( Julia )","蘇芮( Julie Sue )","Julie( 劉景莊 )","朱婧( June )","糖妹( Kandy Wong )","莫文蔚","吳雨霏( Kary Ng )","謝安琪( Kay Tse )","麥家瑜( Keeva )","陳慧琳( Kelly Chen )","潘嘉麗( Kelly )","章霈迎( Kenix Cheang )","朱紫嬈( Khloe )","Kimberley","紀儀羚( Kirki  )","劉思涵","張含韻( 張涵韻 )","金莎( Kym )","溫嵐( LANDY )","楊青倩( LENA )","李度","曹璐( LU LU )","徐佳瑩( Lala Hsu )","梁心頤( Lara )","竇靖童( Leah Dou )","姜麗文( Lesley )","陳凱彤( Lillian Chan )","黃浩琳( Lillian Wong )","藍沁( Lily )","鍾嘉欣( Linda Chung )","Linda( 廖語晴 )","Lisa","江希文( 江欣慈 )","Lois Cheung","王美蓮( Lotus Wang )","陸瑤","楊韻禾( M-girl )","葛仲珊( MISS KO )","朱安禹( 水蜜桃姊姊 )","林欣彤( Mag Lam )","傅珮嘉( Maggie Fu )","江美琪( 小美 )","蔣雅文( Mandy Chiang )","許秋怡","Maria Cordero( 肥媽 )","范曉萱","孫淑媚( May Suen )","殷悅","曾鈺婷( Mia )","Mida( 療傷小魔女 )","喬毓明( Ming Bridges )","楊千嬅( Miriam Yeung )","蔡孟臻( Mon Mon )","中山美穂( NAKAYAMA MIHO )","薛家燕","曾詠欣( Nicola Tsang )","賴淞鳳( Nicole )","周麗淇( Niki Chow )","閻韋伶( Olivia )","季欣霈( 阿霈 )","吳佩慈( Pace Wu )","陳蕾( Panther Chan )","陳美玲( Pat Chan )","徐小鳳( Paula Tsui )","許哲珮( Peggy )","范萱蔚( Percy )","吳蓓雅( PiA )","陳慧嫻( Priscilla Chan )","劉美君( Prudence Liew )","李紫昕( Purple Lee )","魏如昀( QUEEN )","蔚雨芯( RAINKY )","林心如( RUBY )","田心蕾( Rae Anna )","李彩樺( Rain )","楊丞琳( Rainie Yang )","文恩澄( Rannes Man )","劉軒蓁( Rayray )","同恩( Rebecca )","張惠雅( Regen )","夏宇童( Ren )","劉若英( Rene Liu )","陳嘉唯( Renee Chen )","戴夢夢","李蘊( Renee )","芮恩( RuiEn )","黃寶欣( SARAH )","順子","櫻花","葉蒨文( Sally )","鄭秀文( Sammi )","陳珊妮( Sandee Chan )","林憶蓮","葉子瑄( Sandy )","陳淑樺( Sarah )","張惠春( Saya )","舒延","Selina( 任家萱 )","詹雪琳( Serene )","顏培珊( Shandy Gan )","林逸欣( Shara )","陳敏之( Sharon Chan )","鍾舒漫( Sherman Chung )","連詩雅","茜拉( Shila Amzah )","林曉培( Shino )","元若藍( 元若蘭 )","璽恩( 陳璽恩 )","星星兔( Singsing Rabbit )","陳僖儀","孫燕姿( Yan Zi )","黃湘怡( Stella )","車婉婉( Stephanie Che  )","鄭融( Stephanie Cheng )","何雁詩( Stephanie Ho )","鄧麗欣( Stephy Tang )","蘇霈","鍾舒祺( Sukie Chung )","蕭人鳳( Sunya )","關菊英( Susanna Kwan )","思衛( Sway )","袁婭維( TIA RAY )","戴愛玲( Tai Ailing )","陳詩莉( Tan Desiree )","鄧小巧( Tang Siu Hau )","杜麗莎( Teresa Carpio )","鄧麗君( Teresa Teng )","傅穎( Theresa Fu )","陳蔚琦( Tiffany Chan )","迪子","卓依婷( Timi )","丁悅( Ting Tiffany )","梁靖琪( Toby Leung )","黃鶯鶯( Tracy Huang )","UTIN","彭海桐( Uku Peng )","葉瑋庭( Uni Yeh )","江映蓉( VIVI )","金玟岐( Vanessa )","姚嘉兒","陳思彤( ViVi )","趙薇( Vicki Zhao )","泳兒( Vincy Chan )","徐若瑄( Vivian )","裕美( Wada Hiromi )","曲婉婷( Wanting Qu )","何沛澄( White Dimension )","王愛明( Wong Oi Ming )","Wong Susan","小霞( XiaoXia )","吳日言( Yan Ng )","岑寧兒","宇珩( Yu Heng )","徐懷鈺( Yuki )","鄭希怡( Yumiko Cheng )","張芸京( Yun Jing )","張力尹( Zhang Liyin )","Zya( 希亞 )","aniDa","許飛( blog )","何欣穗( ciacia )","曾翠如( claudiayuyu拖地 )","許慧欣( eVonne )","馮曦妤( fiona fung )","mustc","戴佩妮( penny )","小紅帽","蘇盈之( wincci )","弦子( 張弦子 )","冰淇","包娜娜","包美聖","北出菜奈","巴奈","必愛","本兮","本多RuRu","白一彤","白光","白冰冰","白婧","白虹","白雪","碧娜","周筆暢( 筆筆 )","蓓蕾","陳薇","鮑培莉","鮑正芳","鮑翠薇","彭家麗","彭立","彭莉","彭靖惠","彭麗媛","潘佩莉","潘秀瓊","潘美辰","潘越雲","潘辰","潘迪華","潘麗麗","夢夢","夢潔","夢然","孟庭葦","孟慶而","孟楊","孟楠","慕容曉曉","慕潔溪","梅清麗","毛妮卓瑪","毛阿敏","沐爾","米拉拉","米若安","美美( 郭美美 )","美黛","苗可麗","莫熙兒","莫艷琳","門麗","馬嘉軒","馬小倩","馬玉芬","馬萃如","馬郁","麥潔文","麥瑋婷","麥貝夷","麥韻","付麗","傅天穎","傅薇","方伊琪","方婉真","方季惟( 方季韋 )","方怡萍","方文琳","方晴君","方皓玟( 吳嘉欣 )","方維珍","方逸華","方阡翊","方麗盈","棻蘭","樊桐舟","符瓊音","范世琪","范冰冰","范怡文","范文芳","風中採蓮","風小箏","風采輪","風鈴草","馮凱淇","馮惠雅","馮穎琪","鳳娘","鳳飛飛","丁丁","丁小芹","丁文琪","丁曉雯","丁爽","丁薇","代慧穎","單九希","大芭( 大芭比 )","戴嬈","戴安娜","戴曉君","戴梅君","戴蘊慧","戴辛尉","戴雪兒","杜雯媞","杜雯惠","段玫梅","董燕妮","董育君","董貞","蔡黃汝","鄧妙華","鄧婉玲","鄧小萍","鄧瑞霞","鄧白英","鄧穎芝","鄧芷茵","鄧詠家","唐儷","唐古","堂娜( 唐娜 )","唐曉詩","唐韋琪","唐飛","塗紫凝","天心","天李","婷婷","庭竹","涂佩岑","湯唯","湯寶如","湯旭","湯薇恩","湯蘭花","滕麗名","田希仁","田蕊妮","田路路","田震","童可可","童欣","童童","童麗","譚嘉儀","譚小環","譚晶","譚維維","邰肇玫","陶晶瑩","陶莉萍","陶鈺玉","倪睿思","南宮嘉駿","南虹","那英","凌雲","利得彙","利綺","劉亦菲","劉佩芯","劉佳軒","劉依純","劉嘉玲","劉小慧","劉忻","劉惜君","劉春美","劉晏維","劉欣宜","劉沁","劉淑雯( 華娃 )","劉濤","劉珺兒","劉璇","劉育綾","劉芮伊","劉芳","劉芷妃","劉藍溪","劉虹嬅","劉虹翎","劉行格","劉雅麗","劉韻","劉香慈","厲娜","呂珊","呂秀齡","呂秋霓","呂雯","廖子褕","廖小璇","李之勤","李佳","李冰冰","李凌","李千娜","李妍瑾( Yuni Li )","李娜","李婭莎","李婷宜","李小璐","李岱瑾","李心潔","李愛綺( 李嘉 )","李昊嘉","李明依","李晟","李毓芬","李溪芮","李爍","李玲玉","李珮菁","李瓊","李碧華","李祖寧","李素專","李翊君","李芷苓","李蘋果","李谷一","李雅微","李雅芳","李香蘭( 山口淑子 )","李麗珍","李麗芬","李麗華","林二汶","林佳儀","林佳音( 花兒 )","林依婷","林依霖","林凡","林千豔","林嘉欣","林天愛","林姍","林子娟","林子萱","林宛臻","林家小妹","林寶","林帆","林志美","林思彤","林慧萍","林晏如","林景瀅","林柔均","林楚麒","林榆涵","甲子慧","林淑容","林濃華","林玉英","林珊珊","林純如","林美","林翠萍","林育品( 阿喜 )","林良樂","林良歡","林芯儀","林英美","林葉亭","林蒙","林靈","林靜儀","林黛","柳妍熙","柳岩","柳影虹","阿雅( 柳翰雅 )","梁一貞","梁文音","梁洛施","梁珈瑜","梁立","梁紫丹","梁雁翎","樂瞳","洛天依","盧巧音","盧敏","盧業瑂","盧瑞蓮","羅心潔","羅憶詩","羅敏莊","羅映庭","羅永娟","羅皙","羅美玲","羅震環","藍又時","藍小昔","藍心湄","藍立平","藍麗婷","賴佩霞","賴雅妍","路嘉欣","路綺歐","雷佳","雷光夏","雷婉妍","雷婷","露雲娜","魯佳韻","魯昕兒","麗莎","黎姿","黎子菱","黎明詩","黎瑞恩","龍千玉","龍小菌","龍梅子","龍飄飄","古倩敏","官靈芝","格子兮","格楊","管罄","葛洛力","葛蘭","谷微","谷祖琳","谷行雲","貢維特","貫詩欽","辜靖潔","郭喬伊","郭嘉欣","郭嘉璐","郭婷筠","郭易","郭曉曉","郭書瑤( 瑤瑤 )","郭燕","郭玲","關之琳","關淑怡","關詩敏","顧媚","顧莉雅","高勝美","高慧君","高瑞欣","高蕾雅","有耳非文( 高郁斐 )","龔柯允","龔秋霞","龔芝怡","侃侃","可嵐","可歆","柯以敏","鄺文珣","鄺美雲","何以奇","何嘉文","何嘉茵","何嘉莉","何如惠","何婉盈","何慕男","何方","何春蘭","何曼婷","何沛璇","何潔","何瑤","何真真","何禹萱","何耀珊","何芷晴","何藝紗","何雨雯","何靜","侯湘婷","侯美儀","暉倪( 人兒妹 )","洪暐","洪玲( 洪佩誼 )","洪瑞襄","洪百慧","火雅","紅月","胡杏兒","胡楊林","胡瑋琪","胡瑤","胡美儀","胡美紅","胡艾彤","胡蓓蔚","胡雯","胡靈","花粥","賀世哲","韓寶儀","韓小薰","韓真真","韓紅","黃丹萍","黃乙玲","黃介文","黃千芸","黃嘉千","黃奕","黃妃","黃宇希","黃小楨","黃小琥","黃思婷","黃慧音","黃敏華","黃曉君","黃淑惠","黃淑玲","黃玠瑋","黃立綺","黃紅英","黃英","黃茵琪","黃菱","黃雅泯","黃雅莉","黃雯雯","黃靜賢","黃靜雅","黃韻玲","黃馨","黃鳳儀","黃齡","九九","吉克隽逸","吉克雋逸","亦帆( 吳亦帆 )","吉娜","嘉琳","姜昕","姜聽","婧","季欣渝","景心妍","景甜","江一燕","江念庭","江惠儀","江明娟","江松霖","江欣燕","江淑娜","江玲","江蕾","江青蓉( 江菁蓉 )","江音( 江美麗 )","江音","江鷺","津亭","紀如璟","紀寶如","紀敏佳","紀文惠","紀曉君","紀露霞","蔣雪兒","蔣麗萍","解偉苓","賈立怡","金伊彤","金佩姍","金南玲","金智娟( 娃娃 )","金池","金海心","金玉嵐","金瑞瑤","金素梅","金銘","降央卓瑪","靜婷","丘子靜","伽菲珈而","勸世寶貝喵喵","區小麗","千百惠","喬安舞","喬幼","喬維怡","戚薇","曲言言","琪琪格","瓊雪卓瑪","瞿穎","秦海璐","裘海正","邱心儀","邱芸子","邱蘭芬","錢幽蘭","齊豫","仙杜拉","向蕙玲","夏丹","夏后","夏妙然","夏語遙","奚秀蘭","徐熙娣( 小S )","小昔米","莊鵑瑛( 小球 )","小瑜","周月綺","小辣椒","小龍女","希婕","徐世珍","徐仲薇","徐千雅","徐子珊","徐立","徐紫淇","徐菲琳","徐雯倩","徐顥菲","心然","曉金鳳","熊汝霖","熊美玲","秀蘭","秀蘭瑪雅","萱萱","蕭孋珠","蕭希榆","蕭淑慎","蕭玉芬","蕭蕭","蕭薔","蕭賀碩","薛曉楓","薰妮","西卿","西單女孩( 任月麗 )","許佳慧","許景淳","許美靜","許茹芸","許藝娜","許靖韻","許頌","謝京穎","謝娜","謝宜君","謝容兒","謝欣欣","謝欣芷","謝茜妃","謝莉婷","謝采妘","謝金晶","謝雨欣","謝麗金","辛曉琪","香香( 王瑾玫 )","馨予","周佩英","周信","周子寒","周子琪","周子零","周彥宏( 周艷泓 )","周慧敏","周楚詩","周海媚","周玲寶","周璇","周秀娜","周美茵","周迅","周雅芳","周韋彤","張也","張仲嘉","張伊雯","張俐敏","張冬玲","張可芝","張咪","張婧","張小覺","張小雯","張小鳳","張德蘭","張心柔","張文綺","張明麗","張曼莉","張杏月","張柏芝","張涵雅","張淑美","張淺潛","張清芳","張瀛仁","張煒","張燊悅","張燕","張玉珊","張玉霞","張琪","張瑤","張瓊瑤","張真菲","張碧晨","張秀卿","張紋嘉","張艾嘉","張茵","張萊萊","張萌","張萱妍","張蓉蓉","張薔","張長綾","張雯婷","張靜","張鳳鳳","朱俐靜","朱可昀","朱哲琴","朱妍","朱婧汐","朱海君","朱茵","朱逢博","朱韻詩","甄妮","甄子維","甄楚倩","甄秀儀","真妮","祝蘭蘭","章子怡","竹井詩織里","莊之影","莊心妍","莊雪芳","詹小屏","詹曼鈴","詹采妮","詹雅雯","趙仕瑾","趙奕歡","趙學而","趙曼","趙芬妮","趙鑫","趙頌茹","趙默","鄭凡","鄭可為","鄭吟秋","鄭嘉嘉","鄭宜農","鄭寶雯","鄭怡","鄭瓊之","鄭華娟","鄭陽","鍾欣潼( 阿嬌 )","鍾潔希","鍾童茜","川秋沙","常艾非","成艾霞","成鳳","池秋美","程琳","程璧","程響","超級女聲","車沅沅","陳予新","陳亞蘭","陳亮吟","陳依婷","陳倩倩","陳冠蒨","陳和美","陳品伶","陳夏蓮","陳奕(HK)","陳妃平","陳妍希","陳娟兒","陳寶珠","陳小雲","陳小霞","陳德容","陳思函","陳思安","陳思思","陳怡婷","陳惠婷","陳惠敏","陳慧恬","陳慧敏","陳慧瑩","陳文媛","陳明","陳明真","陳明韶","陳曉娟","陳曼青","陳松伶","陳果","陳法拉","陳淑萍","陳潔儀","陳潔靈","陳潔麗","陳琳","陳瑞","陳盈潔","陳秀雯","陳綺雯","陳美鳳","陳聖芬","陳艾湄","陳艾玲","陳芬蘭","陳苑淇","陳蕊蕊( 蕊蕊 )","陳蘭麗","陳詩慧","陳詩欣","陳譯賢","陳雙","陳韻若","佘詩曼","冼佩瑾","史茵茵","商東茜","尚雯婕","施筱齡","施艾敏","書庭","沈丹","沈丹丹","沈芳如","沈雁","盛曉玫","石安妮","石小群","石欣卉","石詠莉","舒舒","舒雅頌","邵雅茜","邵雨涵","霜華","任潔玲","冉肖玲","蓉兒","阮丹青","左安安","曾寶儀","曾心梅","曾慶瑜","曾沛慈","曾淑勤","曾若華","曾路得","曾軼可","曾靜玟","紫薇","崔子格","崔苔菁","崔萍","曹方","曹穎","曹芙嘉","曹蘭","曹雅雯","曹雪","柴郡貓","蔡佳瑩","蔡健雅( Tanya )","蔡卓妍( 阿sa )","蔡安蕎","蔡幸娟","蔡幸芳","蔡秋鳳","蔡麗津","蔡齡齡","司徒蘭芳","四葉草","孫一華","孫儷","孫悅","孫敬媛","孫潔","孫琳悅","孫盛希","孫羨真","孫藝程","孫露","宋子昀","宋新妮","宋祖英","斯琴格日樂","斯琴高麗","森森","薩頂頂","蘇仨","蘇唯","蘇慧倫","蘇晴","蘇曼","蘇珮卿","蘇路( 蘇又鎔 )","蘇運瑩","蘇雲","一綾","亞男","伊稀","伊能靜","伊雪","伊雪莉","印子月","嚴淑明","姚莉","姚蘇蓉","姚貝娜","姚黛瑋","尤雅","意淋","楊乃文","楊冪","楊小琳","楊小萍","楊思琦","楊昕曦","楊曉蓉","楊曼莉","楊林","楊梓","楊海薇","楊淇","楊燕","楊美蓮","楊芳儀","楊蒨時","楊蔓","楊采妮","楊鈺瑩","楊靜","楊黎蘇","游小鳳","游怡婷","游藝湉","瑛子周墨","葉一茜","葉乃銀","葉佩雯","葉慧婷","葉樹茵","葉歡","葉熙祺","葉玉卿","葉璦菱","葉蓓","葉蔻","葉蘊儀","葉貝文","鄞雅茹","銀霞","閆薇薇","閻奕格","閻荷婷","吳俐璇","吳倩蓮","吳名慧","吳婉芳","吳慧蘭","吳汶芳","吳淑敏","吳潔梅","吳琼","吳瑤","吳申梅","吳秀珠","吳紫涵","吳莫愁","吳靜嫻","吳鶯音","婉曲","戊道子","文佩玲","文筱芮","汪佩蓉","汪妤凌","汪小敏","汪思妍","汪明荃","汪蕊","溫晉禾","烏蘭托婭( 烏蘭圖雅 )","王冰洋","王又萱","王君馨","王媞","王彩樺","王心如","王心心","王思佳","王思思","王恩琦","王新蓮","王明麗","王晶","王汶玲","王海玲","王熹蠻","王珺","王瑞淇","王瑞霞","王祖賢","王秀如","王秀琳","王箏","王紫蓓","王芊樺","王芷蕾","王若琪","王萊","王蓉","王雅文","王雅潔","王韻嬋","王頌恩","王馨平","王麟","王默君","翁虹","萬芳","薇薇","鄔禎琳","韋唯","韋綺姍","魏佳慶","魏如萱","魏新雨","魏綺清","于台煙","于希平","于櫻櫻","于韻非","云菲菲","雲鎂鑫","余劍明","俞靜","宇兒","岳夏","禹黎朔","袁哲","袁姍姍","袁泉","郁可唯","雨揚","雲朵","魚乾","阿悄","阿朵","阿紫","阿輪","阿魯阿卓","愛戴","艾夢萌","艾心","艾敬","艾歌","艾青","歐倩怡","歐陽菲菲","安以軒","安琪",];

	$( "#input" ).autocomplete({
	  source: availableTags
	});
	});
	</script>
	<script>
		function f(e) {
			// keyCode = 13 = enter
			if (e.keyCode == 13) {
				var textInput = document.getElementById("input").value;
				document.getElementById("form").submit();
			}
		}
	</script>
	<link type="text/css" rel="stylesheet" href="jqcloud.css" />
	<link type="text/css" rel="stylesheet" href="bar.css" />
	<link type="text/css" rel="stylesheet" href="input.css" />
	<link type="text/css" rel="stylesheet" href="a.css" />
	<script type="text/javascript" src="jqcloud-0.2.10.js"></script>
	
</head>
<body>
	<!-- 以下Query面板 -->
	<form id="form" name="form" method="get">
		<input id="input" name="input" placeholder="輸入歌手名稱" type="text" onkeypress="f(event)"></input>
	</form>
	<?php
		include_once('db.php');
		include_once('trimBrackets.php');
	?>
	
	<!-- 歷年創作長條圖 -->
	<div style="width: 100%;">
	<?php
		// 歷年創作
		if(!array_key_exists('input',$_GET))
			return;
		$q = $_GET['input'];
		echo '<a class="button" href="https://zh.wikipedia.org/wiki/'.trimBrackets($q).'">維基百科:'.$q.'</a>';
		// 查詢是否有這個歌手
		$sql = 'select songYear from song where song.songSinger = "' . $q . '"';
		// TODO 換掉
		$result = mysqli_query($linkid,$sql);
		$resultarray = mysqli_fetch_array($result);
		$r = array();
		$max = 0;
		// 從1968~2016
		$tempY = 1968;
		$r[0] = 0;
		for(;$tempY<=2016;$tempY++){
			$r[$tempY] = 0;
		}
		while($resultarray!=null){
			$y = intval(substr($resultarray[0],0,4));
			$r[$y] += 1;
			if($max<$r[$y])
				$max=$r[$y];
			$resultarray = mysqli_fetch_array($result);	
		}
		// to new 
		$index=0;
		$tempName = array();
		$tempCount = array();
		foreach ($r as $key => $value)
			if(is_numeric($key)){
				if($key!='0000')
					$tempName[$index] = $key.'('.$value.')';
				else
					$tempName[$index] = '年分不詳'.'('.$value.')';
				$tempCount[$index] = ceil(($value*100)/$max);//ceil($value*100/$max);
				$index++;
			}
		
		//echo $_GET['input'];
		include_once('strip.php');
		stripGraph($q." 歷年創作數量",$tempName,$tempCount);
		// strip graph
	?>
	</div>
	
	<!-- 愛用詞長條圖、雲 -->
	<div style="width: 100%;">
		<!-- 長條圖 -->
		<div style="float:left;width: 49%;">
			<?php
				if(!array_key_exists('input',$_GET))
					return;
				$q = $_GET['input'];
				// 查詢是否有這個歌手
				$sql = 'select Distinct(songTitle) ,seggLyric from song where song.songSinger = "' . $q . '" and reparse is null;';
				//echo $sql;
				//$sql = 'select * from album';
				//echo $sql.'<br>';
				$result = mysqli_query($linkid,$sql);
				$resultarray = mysqli_fetch_array($result);
				$r = array();
				$max = 0;
				


				while($resultarray!=null){
					//echo $resultarray[0];
					$tokens = explode( '%', $resultarray[1] );
					foreach($tokens as $key => $token){
						if(mb_strlen($token)<=1)
							continue;
						if(array_key_exists($token,$r))
							$r[$token] += 1;
						else
							$r[$token] = 1;
						if($max<$r[$token])
							$max=$r[$token];
					}
					$resultarray = mysqli_fetch_array($result);	
				}
				
				// to new 
				$index=0;
				$tempName = array();
				$tempCount = array();
				arsort($r);
				foreach ($r as $key => $value){
						if($key!='0000')
							$tempName[$index] = $key.'('.$value.')';
						else
							$tempName[$index] = '年分不詳'.'('.$value.')';
						$tempCount[$index] = ceil(($value*100)/$max);//ceil($value*100/$max);
						$index++;
				}
				
				//echo $_GET['input'];
				include_once('strip.php');
				stripGraph($q." 愛用詞彙",array_slice($tempName,0,20),array_slice($tempCount,0,20));
				// strip graph
				
			?>
		</div>
		<!-- 雲 -->
		<div style="float:right;width: 49%;">
			<?php
				// 已經有$tempName與$tempCount; (詞彙,出現次數)
				// 利用他們來造雲所需的資料
				
				$w = "";
				$w .= '<script type="text/javascript">';
					$w .= 'var words = [';
					for($i=0;$i<count($tempName)&&$i<count($tempCount);$i++){
						
						$w .= '{text:"';
						$w .= str_replace(array("\n","\r")," ",$tempName[$i]).'", weight:';
						$w .= $tempCount[$i];
						$w .= '},';
					}
					$w .= '];';
				$w .= '
							$(function(){
								// 同時隨機幫每一個標籤加上 r1, r2, r3 的 className
								$("#c").jQCloud(words, {
									delayedMode: true, 
									randomClasses: 3
								});
							});';
				$w .= '</script>';
				
				$w .= '<div id="c" style="width: 100%; height: 500px;"></div>';
				echo $w;
					
			?>
		</div>
	</div>
	
	<!-- 慣用韻腳長條圖 -->
	<div style="width: 100%;">
	<?php
		if(!array_key_exists('input',$_GET))
			return;
		$q = $_GET['input'];
		// 查詢是否有這個歌手
		$sql = 'select yun from song where song.songSinger = "' . $q . '"';
		//$sql = 'select * from album';
		//echo $sql.'<br>';
		$result = mysqli_query($linkid,$sql);
		$resultarray = mysqli_fetch_array($result);
		$r = array();
		$max = 0;
		while($resultarray!=null){
			//echo $resultarray[0];
			$tokens = explode( '%', $resultarray[0] );
			foreach($tokens as $key => $token){
				if($token=='')
					continue;
				if(array_key_exists($token,$r))
					$r[$token] += 1;
				else
					$r[$token] = 1;
				if($max<$r[$token])
					$max=$r[$token];
			}
			$resultarray = mysqli_fetch_array($result);	
		}
		// to new 
		$index=0;
		$tempName = array();
		$tempCount = array();
		arsort($r);
		foreach ($r as $key => $value){
				if($key!='0000')
					$tempName[$index] = $key.'('.$value.')';
				else
					$tempName[$index] = '年分不詳'.'('.$value.')';
				$tempCount[$index] = ceil(($value*100)/$max);//ceil($value*100/$max);
				$index++;
		}
		
		//echo $_GET['input'];
		include_once('strip.php');
		stripGraph($q." 愛用韻腳",$tempName,$tempCount);
		// strip graph
	?>
	</div>
</body>
</html>