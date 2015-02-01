<?php session_start(); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/connection.php") ;?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/break.php") ;?>
<?php include($_SERVER['DOCUMENT_ROOT'] ."/php/login.php") ;?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>完全無料の求人サイト ジョブチェンジ</title>
<meta name="description" content="求職者と企業を結ぶ全てのご利用が無料の求人サイト「ジョブチェンジ」。求人検索も無料。企業の求人情報の掲載無料。採用時の成果報酬も不要。">
<meta name="keywords" content="転職サイト,求人サイト,無料求人,無料掲載,正社員,契約社員,派遣社員,アルバイト,パート,ジョブチェンジ">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/style_index.css">
</head>
<body>

<div id="wrapper">

    <div id="header_title">
        <h1 class="f11">完全無料の求人サイト ジョブチェンジ</h1>
    </div><!--header_title end  -->

    <!-- header -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/header.php"); ?>
    
    <!-- content start -->
    <div id="content" class="clearfix">
    
        <div id="con_right">
            <div class="btn_mr mb-20"><a href="/php/mem/mem_registration1.php">新規会員登録(無料)</a></div>
            <div class="top_login mb-20">
                <h3 class="f15">ログイン</h3>
                <div class="top_login_box">
                <? if(empty ($_SESSION["id"])) {?>

                    <form accept-charset="UTF-8" action="index.php" class="" id="" method="post">
                        <label for="user_mail">メールアドレス</label><input id="user_mail" class="mb-10" name="mail" size="30" type="text" placeholder="メールアドレス">
                        <label for="user_password">パスワード</label><input id="user_password" name="pw" size="30" type="password" placeholder="パスワード">
                        <a href="#" class="forget_password f11">パスワードを忘れた方はこちら</a>
                        <div class="btn_login_box mt-10">
                            <label class="pt5"><input checked="checked" id="user_auto_login_flg" name="" type="checkbox" value="1"><span class="f11">次回から自動でログインする</span></label>
                            <input class="btn-std btn-login mrl-auto mt-5 mb-10 pt-5 pb-5" name="commit" type="submit" value="ログイン">
                        </div>
                    </form>
                    <? } else { ?>
                    <table width="250" border="0" cellspacing="2" cellpadding="4">
  <tr>
    <th width="250" scope="row"><? echo $_SESSION["name"]; ?>様</th>
  </tr>
  <tr>
    <th scope="row"><a href="php/mem_mypage.php">マイページへ</a></th>
  </tr>
  <tr>
    <th scope="row"><form action="index.php" method="post"><input type="hidden" name="out" value="logout"/>
	<input type="submit" value="ログアウト"/>
	</form></th>
  </tr>
</table>

                    <? } ?>
                </div>
            </div>
            <div class="top_history">
                <h3 class="f15">求人閲覧履歴</h3>
                <ul>
                    <li>
                        <a href="#">
                            <img src="images/company/test/img_logo.jpg" width="118" height="88" alt="">
                            <h4>ファーストサーバ株式会社</h4>
                            <p>ここに求人内容が入ります。ここに求人内容が入ります。ここに求人内容が入ります。ここに求人内容が入ります。</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/company/test/img_logo.jpg" width="118" height="88" alt="">
                            <h4>ファーストサーバ株式会社</h4>
                            <p>ここに求人内容が入ります。ここに求人内容が入ります。ここに求人内容が入ります。ここに求人内容が入ります。</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/company/test/img_logo.jpg" width="118" height="88" alt="">
                            <h4>ファーストサーバ株式会社</h4>
                            <p>ここに求人内容が入ります。ここに求人内容が入ります。ここに求人内容が入ります。ここに求人内容が入ります。</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/company/test/img_logo.jpg" width="118" height="88" alt="">
                            <h4>ファーストサーバ株式会社</h4>
                            <p>ここに求人内容が入ります。ここに求人内容が入ります。ここに求人内容が入ります。ここに求人内容が入ります。</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/company/test/img_logo.jpg" width="118" height="88" alt="">
                            <h4>ファーストサーバ株式会社</h4>
                            <p>ここに求人内容が入ります。ここに求人内容が入ります。ここに求人内容が入ります。ここに求人内容が入ります。</p>
                        </a>
                    </li>
                </ul>
                <p class="top_history_list mt-10"><a href="#">求人閲覧履歴一覧を見る</a></p>
            </div>
        </div><!--con_right -->
        
        <div id="con_left">
            
            <? include($_SERVER['DOCUMENT_ROOT'] ."/php/job_seach.php"); ?>
            
            <div id="search_box" class="mb-20">
                <form accept-charset="UTF-8" action="/search_post" class="new_user_search" id="new_user_search" method="post">
                    <select class="topSearch-isStyledForm" id="slct_01" name="">
                        <option value="">職種</option>
                        <option value="190">技術系(システム・ネットワーク)</option>
                        <option value="160">クリエイティブ系(Web)</option>
                        <option value="170">クリエイティブ系(ゲーム・マルチメディア)</option>
                        <option value="180">クリエイティブ系(広告・アパレル・その他)</option>
                        <option value="100">営業系</option>
                        <option value="110">企画・マーケティング系</option>
                        <option value="120">管理系</option>
                        <option value="130">事務・アシスタント系</option>
                        <option value="140">サービス系人材/店舗/医療・福祉、他</option>
                        <option value="150">専門系金融/不動産/コンサル/士業、他</option>
                        <option value="200">技術系(電気・電子・機械・半導体)</option>
                        <option value="210">技術系(医療・化学・食品・化粧品)</option>
                        <option value="220">建築・土木・プラント系</option>
                    </select>
                    <select class="topSearch-isStyledForm" id="slct_02" name="">
                        <option value="">勤務地</option>
                        <option value="13">東京都</option>
                        <option value="14">神奈川県</option>
                        <option value="12">千葉県</option>
                        <option value="11">埼玉県</option>
                        <option value="27">大阪府</option>
                        <option value="28">兵庫県</option>
                        <option value="26">京都府</option>
                        <option value="23">愛知県</option>
                        <option value="-------" disabled="true">-------</option>
                        <option value="1">北海道</option>
                        <option value="2">青森県</option>
                        <option value="3">岩手県</option>
                        <option value="4">宮城県</option>
                        <option value="5">秋田県</option>
                        <option value="6">山形県</option>
                        <option value="7">福島県</option>
                        <option value="8">茨城県</option>
                        <option value="9">栃木県</option>
                        <option value="10">群馬県</option>
                        <option value="15">新潟県</option>
                        <option value="16">富山県</option>
                        <option value="17">石川県</option>
                        <option value="18">福井県</option>
                        <option value="19">山梨県</option>
                        <option value="20">長野県</option>
                        <option value="21">岐阜県</option>
                        <option value="22">静岡県</option>
                        <option value="24">三重県</option>
                        <option value="25">滋賀県</option>
                        <option value="29">奈良県</option>
                        <option value="30">和歌山県</option>
                        <option value="31">鳥取県</option>
                        <option value="32">島根県</option>
                        <option value="33">岡山県</option>
                        <option value="34">広島県</option>
                        <option value="35">山口県</option>
                        <option value="36">徳島県</option>
                        <option value="37">香川県</option>
                        <option value="38">愛媛県</option>
                        <option value="39">高知県</option>
                        <option value="40">福岡県</option>
                        <option value="41">佐賀県</option>
                        <option value="42">長崎県</option>
                        <option value="43">熊本県</option>
                        <option value="44">大分県</option>
                        <option value="45">宮崎県</option>
                        <option value="46">鹿児島県</option>
                        <option value="47">沖縄県</option>
                    </select>
                    <select class="topSearch-isStyledForm" id="slct_03" name="">
                        <option value="">年収下限</option>
                        <option value="300">300万円</option>
                        <option value="350">350万円</option>
                        <option value="400">400万円</option>
                        <option value="450">450万円</option>
                        <option value="500">500万円</option>
                        <option value="550">550万円</option>
                        <option value="600">600万円</option>
                        <option value="650">650万円</option>
                        <option value="700">700万円</option>
                        <option value="750">750万円</option>
                        <option value="800">800万円</option>
                        <option value="850">850万円</option>
                        <option value="900">900万円</option>
                        <option value="950">950万円</option>
                        <option value="1000">1000万円</option>
                    </select>
                    <input class="topSearch-isStyledForm" id="slct_04" name="user_search[keyword]" type="text">
                    <button type="submit" id="slct_05" class="btn-action btn-search top_recommend pt-5 pl-20 pr-20"><span>検索</span></button>
                </form>
            </div>
            
            <div class="recommend_contents">
                <div class="recommend_box">
                    <a href="#">
                        <div class="company_img"><img src="images/company/test/img_index.jpg" width="620" height="300" alt=""></div>
                        <div class="company_info">
                            <h2>【WEBデザイナー（アシスタントマネージャー）】自社サービスのデザイン関連業務の全てに関わる◎</h2>
                            <div class="company_name">損保ジャパン日本興亜ひまわり生命</div>
                            <div class="company_income_location">
                                <p class="income">年収：450万円〜580万円</p>
                                <p class="location">勤務地：東京/大阪/宮城/福岡</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recommend_box">
                    <a href="#">
                        <div class="company_img"><img src="images/company/test/img_index.jpg" width="620" height="300" alt=""></div>
                        <div class="company_info">
                            <h2>【WEBデザイナー（アシスタントマネージャー）】自社サービスのデザイン関連業務の全てに関わる◎</h2>
                            <div class="company_name">損保ジャパン日本興亜ひまわり生命</div>
                            <div class="company_income_location">
                                <p class="income">年収：450万円〜580万円</p>
                                <p class="location">勤務地：東京/大阪/宮城/福岡</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recommend_box">
                    <a href="#">
                        <div class="company_img"><img src="images/company/test/img_index.jpg" width="620" height="300" alt=""></div>
                        <div class="company_info">
                            <h2>【WEBデザイナー（アシスタントマネージャー）】自社サービスのデザイン関連業務の全てに関わる◎</h2>
                            <div class="company_name">損保ジャパン日本興亜ひまわり生命</div>
                            <div class="company_income_location">
                                <p class="income">年収：450万円〜580万円</p>
                                <p class="location">勤務地：東京/大阪/宮城/福岡</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recommend_box">
                    <a href="#">
                        <div class="company_img"><img src="images/company/test/img_index.jpg" width="620" height="300" alt=""></div>
                        <div class="company_info">
                            <h2>【WEBデザイナー（アシスタントマネージャー）】自社サービスのデザイン関連業務の全てに関わる◎</h2>
                            <div class="company_name">損保ジャパン日本興亜ひまわり生命</div>
                            <div class="company_income_location">
                                <p class="income">年収：450万円〜580万円</p>
                                <p class="location">勤務地：東京/大阪/宮城/福岡</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recommend_box">
                    <a href="#">
                        <div class="company_img"><img src="images/company/test/img_index.jpg" width="620" height="300" alt=""></div>
                        <div class="company_info">
                            <h2>【WEBデザイナー（アシスタントマネージャー）】自社サービスのデザイン関連業務の全てに関わる◎</h2>
                            <div class="company_name">損保ジャパン日本興亜ひまわり生命</div>
                            <div class="company_income_location">
                                <p class="income">年収：450万円〜580万円</p>
                                <p class="location">勤務地：東京/大阪/宮城/福岡</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div><!-- /recommend_contents -->
            
            
            <!-- job genre -->
            <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/job_genre.php"); ?>
            
            <div class="about_site">
                <h3>完全無料の求人サイト ジョブチェンジ</h3>
                <p>ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。ここにサイトの説明文が入ります。</p>
            </div>

        </div><!--con_left -->
    </div><!--content end -->

    <!-- footer -->
    <? include($_SERVER['DOCUMENT_ROOT'] ."/parts/footer.php"); ?>

</div><!--wrapper end  -->

</body>
</html>