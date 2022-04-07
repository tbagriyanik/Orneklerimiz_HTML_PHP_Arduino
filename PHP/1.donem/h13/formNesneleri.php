<form action="" method="get">
    <label>
        Adınız 
        <input type="text" name="ad" id="" placeholder="isminiz">
    </label>
    <br>
    <label >
        Adres Giriniz
        <textarea name="adres" id="" cols="30" rows="5">Adres girilecek</textarea>
    </label>
    <br>
    <label>
        Bay 
        <input type="radio" name="cins" id="" value="Bay">
    </label>   
    <br>
    <label>
        Bayan
        <input type="radio" name="cins" id="" value="Bayan">
    </label>
    <br>
    <label>Askerlik Durumu
        <input type="checkbox" name="asker" id="">
    </label>
    <br>
    <label>
        Doğum İliniz 
        <select name="il" id="">
            <option value="Ankara">Ankara</option>
            <option value="İstanbul">İstanbul</option>
            <option value="İzmir">İzmir</option>
            <option value="Zonguldak">Zonguldak</option>
        </select>
    </label>
    <br>
    <label>
        Doğum İl Listesi
        <select name="iller" id="" size=4 multiple>
            <option value="Ankara">Ankara</option>
            <option value="İstanbul">İstanbul</option>
            <option value="İzmir">İzmir</option>
            <option value="Zonguldak">Zonguldak</option>
        </select>
    </label>
    <br>
    <input list="browsers" name="browser" placeholder="tarayıcı">
        <datalist id="browsers">
            <option value="Internet Explorer">
            <option value="Firefox">
            <option value="Chrome">
            <option value="Opera">
            <option value="Safari">
        </datalist>

    <hr>
    <input type="submit" value="Gönder">
    <input type="reset" value="Temizle">
</form>