<div id="header" class="clearfix">
        <div id="header_left" class="clearfix">
            <p id="siteLogo"><a href="/index.php">ジョブチェンジ</a></p>
            <ul class="gNavi_left">
                <li class="gN_search"><a href="/search/index.php">求人を探す</a></li>
<!--
                <li class="gN_new"><a href="#">新着求人</a></li>
                <li class="gN_history"><a href="#">閲覧履歴</a></li>
-->
            </ul>
        </div>
        <div id="header_right" class="clearfix">
            <ul class="gNavi_right">
<!--
                <li class="gN_recruiting"><a href="#">企業の採用担当者様へ</a></li>
-->                
                <? if(empty ($_SESSION["id"])) {?>
                <li class="gN_entry"><a href="/member/mem_registration1.php">会員登録</a></li>
                <li class="gN_login"><a href="/member/mem_login.php">ログイン</a></li>
                <? } else { ?>
                <li class="gN_mypage">
                    <span><? echo $_SESSION["name"]; ?>さん</span>
                    <form accept-charset="UTF-8" action="index.php" class="" id="" method="post">
                    <ul class="gNavi_loginNavi">
                        <li class="btn_mypage"><a href="/member/mem_mypage.php">マイページ</a></li>
                        <li class="btn_logout"><input type="submit" value="ログアウト"></li>
                    </ul>
                    </form>
                </li>
                <script src="/jquery/jquery.location.js"></script>
                <? } ?>
            </ul>
        </div>
    </div><!--header end  -->
<script src="/jquery/jquery.login.menu.js"></script>