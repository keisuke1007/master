

<form id="form1" method="post" action="../search/index.php" enctype="multipart/form-data">
  <table width="1000" border="0">
    <tr>
      <th scope="row">勤務地</th>
      <td>都道府県
<select name="prefecture" id="prefecture">
<option value="">==選択==</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="山梨県">山梨県</option>
<option value="新潟県">新潟県</option>
<option value="長野県">長野県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="愛知県">愛知県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="三重県">三重県</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="京都府">京都府</option>
<option value="滋賀県">滋賀県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</select><br></td>
    </tr>
   <th scope="row">職種カテゴリ</th>
      <td>
<select name="job_category" id="job_category">
<option value="">==選択==</option>
<option value="事務・オフィスワーク">事務・オフィスワーク</option>
<option value="総務・経理・人事">総務・経理・人事</option>
<option value="営業・企画・販売">営業・企画・販売</option>
<option value="専門職・技術者">専門職・技術者</option>
<option value="接客・サービス／飲食">接客・サービス／飲食</option>
<option value="接客・サービス／アパレル">接客・サービス／アパレル</option>
<option value="接客・サービス／他">接客・サービス／他</option>
<option value="調理師・コック">調理師・コック</option>
<option value="ドライバー・配達・配送">ドライバー・配達・配送</option>
<option value="編集・制作・クリエイター">編集・制作・クリエイター</option>
<option value="データ入力・オペレーター">データ入力・オペレーター</option>
<option value="管理職・マネージャー">管理職・マネージャー</option>
<option value="医療・介護・福祉">医療・介護・福祉</option>
<option value="美容・理容・エステ">美容・理容・エステ</option>
<option value="マッサージ・ほぐし">マッサージ・ほぐし</option>
<option value="トリマー・動物・ペット">トリマー・動物・ペット</option>
<option value="講師・インストラクター">講師・インストラクター</option>
<option value="保育士・ベビーシッター">保育士・ベビーシッター</option>
<option value="工場内作業">工場内作業</option>
<option value="警備・清掃・軽作業">警備・清掃・軽作業</option>
<option value="建設・土木業">建設・土木業</option>
<option value="農業">農業</option>
<option value="林業">林業</option>
<option value="水産業">水産業</option>
<option value="除染・復興支援">除染・復興支援</option>
<option value="イベントスタッフ">イベントスタッフ</option>
<option value="ホステス・ホスト">ホステス・ホスト</option>
<option value="モデル">モデル</option>
<option value="コンパニオン">コンパニオン</option>
<option value="芸能関係・俳優・女優">芸能関係・俳優・女優</option>
<option value="モニター・市場調査">モニター・市場調査</option>
<option value="在宅・内職">在宅・内職</option>
<option value="その他">その他</option>
</select></td>
    </tr>
    <tr>
      <th scope="row">待遇・条件</th>
      <td>
	  <table width="850" border="0">
        <tr>
          <td><input type="checkbox" name="treatment[]" value="すぐに働ける（急募）">すぐに働ける（急募）</td>
          <td><input type="checkbox" name="treatment[]" value="未経験者歓迎">未経験者歓迎</td>
          <td><input type="checkbox" name="treatment[]" value="経験者優遇">経験者優遇</td>
          <td><input type="checkbox" name="treatment[]" value="中高年歓迎">中高年歓迎</td>
          <td><input type="checkbox" name="treatment[]" value="年齢不問">年齢不問</td>
          <td><input type="checkbox" name="treatment[]" value="障害者支援">障害者支援</td>
		  <td><input type="checkbox" name="treatment[]" value="土日祝のみ可">土日祝のみ可</td>
          <td><input type="checkbox" name="treatment[]" value="週１勤務可">週１勤務可</td>
		  <td><input type="checkbox" name="treatment[]" value="副業可">副業可</td>
          <td><input type="checkbox" name="treatment[]" value="面接随時">面接随時</td>
		  <td><input type="checkbox" name="treatment[]" value="平均年齢20代">平均年齢20代</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="treatment[]" value="日払い・週払い可">日払い・週払い可</td>
          <td><input type="checkbox" name="treatment[]" value="時給1000円以上">時給1000円以上</td>
          <td><input type="checkbox" name="treatment[]" value="オープニングスタッフ">オープニングスタッフ</td>
          <td><input type="checkbox" name="treatment[]" value="幹部候補生">幹部候補生</td>
          <td><input type="checkbox" name="treatment[]" value="資格を活かせる">資格を活かせる</td>
          <td><input type="checkbox" name="treatment[]" value="語学力を活かせる">語学力を活かせる</td>
		  <td><input type="checkbox" name="treatment[]" value="海外勤務有り">海外勤務有り</td>
          <td><input type="checkbox" name="treatment[]" value="転勤なし">転勤なし</td>
          <td><input type="checkbox" name="treatment[]" value="完全週休２日">完全週休２日</td>
          <td><input type="checkbox" name="treatment[]" value="残業なし">残業なし</td>
          <td><input type="checkbox" name="treatment[]" value="ノルマなし">ノルマなし</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="treatment[]" value="シフト勤務">シフト勤務</td>
          <td><input type="checkbox" name="treatment[]" value="フレックス勤務">フレックス勤務</td>
          <td><input type="checkbox" name="treatment[]" value="長期休暇">長期休暇</td>
          <td><input type="checkbox" name="treatment[]" value="出産・育児休暇">出産・育児休暇</td>
          <td><input type="checkbox" name="treatment[]" value="寮・社宅完備">寮・社宅完備</td>
          <td><input type="checkbox" name="treatment[]" value="食事支給">食事支給</td>
		  <td><input type="checkbox" name="treatment[]" value="保養所有り">保養所有り</td>
          <td><input type="checkbox" name="treatment[]" value="服装・髪型自由">服装・髪型自由</td>
          <td><input type="checkbox" name="treatment[]" value="制服貸与">制服貸与</td>
          <td><input type="checkbox" name="treatment[]" value="表彰制度">表彰制度</td>
          <td><input type="checkbox" name="treatment[]" value="外資系">外資系</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="treatment[]" value="社員登用制度">社員登用制度</td>
          <td><input type="checkbox" name="treatment[]" value="マイカー通勤可">マイカー通勤可</td>
          <td><input type="checkbox" name="treatment[]" value="交通費全額">交通費全額</td>
          <td><input type="checkbox" name="treatment[]" value="駅近い">駅近い</td>
          <td><input type="checkbox" name="treatment[]" value="男性中心職場">男性中心職場</td>
          <td><input type="checkbox" name="treatment[]" value="女性中心職場">女性中心職場</td>
		  <td><input type="checkbox" name="treatment[]" value="女性専用トイレ有">女性専用トイレ有</td>
          <td><input type="checkbox" name="treatment[]" value="自社ビル">自社ビル</td>
          <td><input type="checkbox" name="treatment[]" value="禁煙職場">禁煙職場</td>
          <td><input type="checkbox" name="treatment[]" value="静かな職場">静かな職場</td>
          <td><input type="checkbox" name="treatment[]" value="債務ゼロ企業">債務ゼロ企業</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="treatment[]" value="活気のある職場">活気のある職場</td>
          <td><input type="checkbox" name="treatment[]" value="バリアフリー職場">バリアフリー職場</td>
          <td><input type="checkbox" name="treatment[]" value="託児所完備">託児所完備</td>
          <td><input type="checkbox" name="treatment[]" value="社内サークル有り">社内サークル有り</td>
          <td><input type="checkbox" name="treatment[]" value="歩合で稼げる">歩合で稼げる</td>
          <td><input type="checkbox" name="treatment[]" value="社内ベンチャー制度">社内ベンチャー制度</td>
		  <td><input type="checkbox" name="treatment[]" value="独立開業支援">独立開業支援</td>
          <td><input type="checkbox" name="treatment[]" value="株式上場企業">株式上場企業</td>
          <td><input type="checkbox" name="treatment[]" value="小規模（1人～20人）">小規模（1人～20人）</td>
          <td><input type="checkbox" name="treatment[]" value="中規模（21人～100人）">中規模（21人～100人）</td>
          <td><input type="checkbox" name="treatment[]" value="大規模（101人以上）">大規模（101人以上）</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <th scope="row"><span class="style1">※</span>雇用形態</th>
      <td>
	  <input type="checkbox" name="e_status[]" value="正社員">正社員　
	  <input type="checkbox" name="e_status[]" value=">契約社員">契約社員　
	  <input type="checkbox" name="e_status[]" value="アルバイト・パート">アルバイト・パート　
	  <input type="checkbox" name="e_status[]" value="派遣社員">派遣社員　
	  <input type="checkbox" name="e_status[]" value="業務委託">業務委託　
	  <input type="checkbox" name="e_status[]" value="在宅勤務">在宅勤務</td>
    </tr>
	<tr>
	<th colspan="2" scope="row"><input name="Submit1" type="submit" id="Submit1" value="検　索" />
	　
	  </th>
	</tr>
</table>


