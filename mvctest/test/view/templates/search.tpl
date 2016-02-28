{include file='header.tpl'}

<form action="/mvctest/search" method="post">
    <select>
        <option value="name" selected>顧客の名前</option>
        <option value="address">顧客の住所</option>
        <option value="tel">顧客の電話番号</option>
        <option value="point">メモ</option>
        <option value="id">最終買物日</option>
    </select>
    <input type="search" name="example" size="30" />
    <input type="submit" value="ご意見を送信" />
</form>





{include file='footer.tpl'}

