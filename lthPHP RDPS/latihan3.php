<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3</title>
</head>
<body>
    <h2> latihan 3 </h2>
    <?php
    $pembelian=75000;
    $diskon=0;

    if ($pembelian>=100000)
    {
        $diskon=$pembelian*(25/100);
    }
    elseif($pembelian>=75000)
    { 
        $diskon=$pembelian*(20/100);
    }
    elseif($pembelian>=50000)
    {
        $diskon=$pembelian*(15/100);
    }
    elseif($pembelian>=25000)
    {
        $diskon=$pembelian*(10/100);
    }
    elseif($pembelian>=10000)
    {
        $diskon=$pembelian*(5/100);
    }
    $pembayaran=$pembelian-$diskon;
    echo("<pre>");
    echo("total pembelian  = Rp.".$pembelian."<br>");
    echo("Diskon           = Rp.".$diskon."<br>");
    echo("total pembelian  = Rp.".$pembelian."<br>");
    echo("total pembayaran = Rp.".$pembayaran);
    echo("</pre>")
    ?>  
</body>
</html>