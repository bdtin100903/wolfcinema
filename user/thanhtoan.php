<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

if  ($_POST['abc']){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://bio.ziller.vn/api/qr/add",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 2,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer 13821b34cd70a13d9360616906c57212",
            "Content-Type: application/json",
        ),
        CURLOPT_POSTFIELDS => json_encode(array (
      'type' => 'text',
      'data' => '2|99|'.$_POST['sdt'].'|BUI DUY TIN||0|0|'.$_POST['st'].'|'.$_POST['nd'].'|transfer_myqr',
      'background' => 'rgb(255,255,255)',
      'foreground' => 'rgb(0,0,0)',
      'logo' => 'https://img.ziller.vn/ib/b76W6on84p.png',
    )),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
$huy = json_decode($response);
}
?>
    <form action="#" method="POST">
        <label >Phone send:</label>
        <input type="text" name="sdt" id="">
        </br>
        <label >Số tiền</label>
        <input type="text" name="st" id="">
        </br>
        <label >Nội dung </label>
        <input type="text" name="nd" id="">
        </br>
        <label >Màu QR</label>
        <input type="text" name="cl" id="">
        </br>
        <label >Màu nền</label>
        <input type="text" name="bg" id="">
        </br>
        <label >link logo</label>
        <input type="text" name="logo" id="">
        </br>
        <input type="submit" name="abc" value="Tạo QR">

    </form>


</body>
    <img src="<?=$huy->link;?>" alt="">;
</html>