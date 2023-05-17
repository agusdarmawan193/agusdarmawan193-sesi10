<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
    <form name="latihan1" method="POST" onsubmit="return checkform(this)">
    <div>
        NAMA
        <input type="text" name="txNAMA" id="NAMA">
    </div>
    <div>
        NIM
        <input type="text" name="txNIM" id="NIM">
    </div>
    <div>
        jenis kelamin
        <input type="radio" name="txJKEL" id="JKEL" value="L">laki-laki
        <input type="radio" name="txJKEL" id="JKEL" value="P">perempuan
    </div>
    <div>
        jurusan
        <select name="txJURUSAN" id=JURUSAN>
            <option value="TI-MDI">TI-MDI</option>
            <option value="TI-DKV">TI-DKV</option>
            <option value="TI-SK">TI-SK</option>
            <option value="TI-KAB">TI-KAB</option>
            <option value="TI-DGM">TI-DGM</option>
        </select>
    </div>
    <div>
        hobby
        <input type="checkbox" name="txHOBBYBALAP">BALAP
        <input type="checkbox" name="txHOBBYTIDUR">TIDUR
        <input type="checkbox" name="txHHOBBYNGUDUD">NGUDUD
        <input type="checkbox" name="txHOBBYBUCIN">BUCIN
        <input type="checkbox" name="txHOBBYNOLEP">NOLEP
        <input type="checkbox" name="txHOBBYMAKAN">MAKAN
        <input type="checkbox" name="txHOBBYBERNAPAS">BERNAPAS
    </div>
    <div>
        <button type="submit">kirim data</button>
    </div>
    </form>
    <script>
        function checkform(frm){
            let F = frm.elements;
            let nim = F.namedItem("txNIM").value;
            let jnskel = F.namedItem("txJKEL").value;
            let n = F.namedItem("txNAMA").value;
            let jn =F.namedItem("txJURUSAN").value;
            let hb = [
                F.namedItem("txHOBBYBALAP").checked,
                F.namedItem("txHOBBYTIDUR").checked,
                F.namedItem("txHHOBBYNGUDUD").checked,
                F.namedItem("txHOBBYBUCIN").checked,
                F.namedItem("txHOBBYNOLEP").checked,
                F.namedItem("txHOBBYMAKAN").checked,
                F.namedItem("txHOBBYBERNAPAS").checked
            ]

            console.log("NIM: "+nim);
            console.log("NAMA: "+n);
            console.log("Jenis kelamin: "+jnskel);
            console.log("jurusan: "+jn);
            console.log("HOBBY: "+hb);

            return false;
        }
    </script>
</body>
</html>