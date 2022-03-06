<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scale=no">
    <title>Biodata Nicola</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        .container {
            width: 100%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }
        
        .biodatabox {
            background: linear-gradient(#4B0082, #8B4513);
            margin-top: 50px;
            width: 70%;
            height: 100%;
            padding: 50px;
            position: relative;
            border: 3px solid black;
            border-radius: 1px 90px 1px 1px;
        }
        
        .biodatabox::before {
            width: 100%;
            height: 100%;
            margin: -50px;
            position: absolute;
            border-radius: 1px 90px 1px 1px;
            content: "";
            opacity: .6;
            z-index: -10;
        }
        
        table {
            width: 100%;
            height: auto;
            font-size: 30px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        
        .hed {
            text-align: center;
            font-size: 40px;
            color: white;
            font-weight: 600;
        }
        
        .heds {
            padding-left: 10%;
            font-size: 30px;
            font-weight: 600;
            font-style: oblique;
            color: white;
        }
        
        .hedsa {
            font-size: 30px;
            font-weight: 600;
            font-style: inherit;
            color: white;
            text-align: center;
        }
        
        .field {
            border: 3px solid white;
            border-radius: 20px;
        }
        
        .name {
            color: white;
            font-weight: 550;
        }
        
        .ans {
            font-size: 25px;
            color: white;
        }

        .given{
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="biodatabox">
            <table cellspacing="20px">
                <tr colspan="2">
                    <td colspan="2" class="hed">BIODATA NICOLA<br>_____<br><br></td>
                </tr>
                <tr colspan="2">
                    <td colspan="2" class="heds"> INFORMASI UMUM ---<br><br></td>
                </tr>

                <tr>
                    <td class="given"> NAMA </td>
                    <td class="ans b"> :-&nbsp; <span class="name">Nicola Arieska Fonda </span></td>
                </tr>
                <tr>
                    <td class="given"> TANGGAL LAHIR </td>
                    <td class="ans"> :-&nbsp; 15 April 2002 </td>
                </tr>
                <tr>
                    <td class="given"> JENIS KELAMIN </td>
                    <td class="ans"> :-&nbsp; Laki - Laki </td>
                </tr>
                <tr>
                    <td class="given"> AGAMA </td>
                    <td class="ans"> :-&nbsp; Islam </td>
                </tr>
                <tr>
                    <td class="given"> GOLONGAN DARAH </td>
                    <td class="ans"> :-&nbsp; O </td>
                </tr>
                <tr>
                    <td class="given"> HOBI </td>
                    <td class="ans"> :-&nbsp; Sepak Bola, Menulis, dan Membaca </td>
                </tr>
            </table>
            <fieldset class="field">
                <legend class="hedsa">&nbsp;&nbsp;-- : PENDIDIKAN : --&nbsp;&nbsp;&nbsp;&nbsp;</legend>

                <table cellspacing="20px">
                    <tr colspan="2">
                        <td colspan="2" class="heds">SMP :--</td>
                    </tr>
                    <tr>
                        <td class="given"> SMPN 5 MALANG </td>
                        <td class="ans"> :-&nbsp; 2014-2017 </td>
                    </tr>
                    <tr colspan="2">
                        <td colspan="2" class="heds">SMA :--</td>
                    </tr>
                    <tr>
                        <td class="given"> SMAN 10 MALANG </td>
                        <td class="ans"> :-&nbsp; 2017-2020 </td>
                    </tr>

                    <tr colspan="2">
                        <td colspan="2" class="heds">KULIAH :--</td>

                    </tr>
                    <tr>
                        <td class="given"> POLINEMA </td>
                        <td class="ans"> :-&nbsp; 2020 - Sekarang </td>
                    </tr>
                </table>
            </fieldset>
            <table cellspace="20px">
                <tr>
                    <td colspan="2" class="heds"><br> INFORMASI LANJUTAN –<br></td>
                </tr>
                <tr>
                    <td class="given"><br> ALAMAT </td>
                    <td class="ans"> :-&nbsp; Puri Cempaka Putih 1 </td>
                </tr>
                <tr>
                    <td class="given"><br> NO TELEPON </td>
                    <td class="ans"> :- 0895412308117 &nbsp;&nbsp; </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>