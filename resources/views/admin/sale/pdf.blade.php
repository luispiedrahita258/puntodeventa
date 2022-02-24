<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Reporte de venta</title>
    <link rel="stylesheet" href="style.css" media="all" />
</head>

<body>
    <header class="clearfix">
        {{--<div id="logo">
            <img src="logo.png">
        </div>--}}
        <div id="company">
            <h2 class="name">TECHNOLOGY</h2>
            <div>CARRERA 4 #61-A10,CALI,COLOMBIA</div>
            <div>(+57) 318-412-93-33</div>
            <div><a href="mailto:company@example.com">lepiedrahita5@misena.edu.co</a></div>
        </div>
        </div>
    </header>
    <main>
        <div id="details" class="clearfix">
            <div id="client">
                <div class="to">DATOS DEL VENDEDOR:</div>
                <h2 class="name">{{$sale->user->name}}</h2>
                {{--<div class="address">{{$purchase->provider->address}}</div>--}}
                <div class="email"><a href="mailto:john@example.com">{{$sale->user->email}}</a></div>
            </div>
            <div id="invoice">
                <div class="to">NÚMERO DE VENTA;</div>
                <h2 class="name">{{$sale->id}}</h2>
                <div class="date">FECHA DE LA VENTA</div>
                <div class="date">{{$sale->sale_date}}</div>
            </div>
        </div>
       {{--<table border="0" cellspacing="0" cellpadding="0">
            <thead>
              <tr>
                <th>COMPRADOR</th>
                <th>FECHA DE COMPRA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td >
                <p align="center">{{$purchase->user->name}}</p></td>
                <td >
                    <p align="center">{{$purchase->created_at}}</p></td>
              </tr>
            </tbody>
          </table>--}}
        <table border="0" cellspacing="0" cellpadding="0">
            <thead>
                <tr id="fa">
                    <th>CANTIDAD</th>
                    <th>PRODUCTO</th>
                    <th>PRECIO VENTA (PES)</th>
                    <th>DESCUENTO</th>
                    <th>SUBTOTAL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($saleDetails as $saleDetail )
                <tr>
                    <td>
                    <p align="center">{{$saleDetail->quantity}}</td></p>
                    <td><p align="center">{{$saleDetail->product->name}}</td></p>
                    <td><p align="center">{{$saleDetail->price}}</td></p>
                    <td><p align="center">{{$saleDetail->discount}}</td></p>
                    <td><p align="center">s/{{number_format($saleDetail->quantity*$saleDetail->price-$saleDetail->quantity*$saleDetail->price*$saleDetail->discount/100,2)}}</td></p>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <p align="right">SUBTOTAL:</p>
                    </td>
                    <td>
                        <p align="right">s/ {{number_format($subtotal,2)}}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <p align="right">TOTAL IMPUESTO ({{$sale->tax}}%);</p>
                    </td>
                    <td>
                        <p align="right">s/ {{number_format($subtotal*$sale->tax/100,2)}}</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <p align="right">TOTAL PAGAR:</p>
                    </td>
                    <td>
                        <p align="right">s/{{number_format($sale->total,2)}}</p>
                    </td>
                </tr>
            </tfoot>
        </table>
        <div id="thanks"></div>
        <div id="notices">
            <div></div>
            <div class="notice"></div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>
<style>
    <style>@font-face {
        font-family: SourceSansPro;
        src: url(SourceSansPro-Regular.ttf);
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }

    a {
        color: #0087C3;
        text-decoration: none;
    }

    body {
        position: relative;
        width: 18cm;
        height: 29.7cm;
        margin: 0 auto;
        color: #555555;
        background: #FFFFFF;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-family: SourceSansPro;
    }

    header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #AAAAAA;
    }

    #logo {
        float: left;
        margin-top: 8px;
    }

    #logo img {
        height: 70px;
    }

    #company {
        float: right;
        text-align: right;
    }


    #details {
        margin-bottom: 50px;
    }

    #client {
        padding-left: 6px;
        border-left: 6px solid #0087C3;
        float: left;
    }

    #client .to {
        color: #777777;
    }

    h2.name {
        font-size: 1.4em;
        font-weight: normal;
        margin: 0;
    }

    #invoice {
        float: right;
        text-align: right;
    }

    #invoice h1 {
        color: #0087C3;
        font-size: 2.4em;
        line-height: 1em;
        font-weight: normal;
        margin: 0 0 10px 0;
    }

    #invoice .date {
        font-size: 1.1em;
        color: #777777;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
    }

    table th,
    table td {
        padding: 20px;
        background: #EEEEEE;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    table th {
        white-space: nowrap;
        font-weight: normal;
    }

    table td {
        text-align: right;
    }

    table td h3 {
        color: #57B223;
        font-size: 1.2em;
        font-weight: normal;
        margin: 0 0 0.2em 0;
    }

    table .no {
        color: #FFFFFF;
        font-size: 1.6em;
        background: #57B223;
    }

    table .desc {
        text-align: left;
    }

    table .unit {
        background: #DDDDDD;
    }

    table .qty {}

    table .total {
        background: #57B223;
        color: #FFFFFF;
    }

    table td.unit,
    table td.qty,
    table td.total {
        font-size: 1.2em;
    }

    table tbody tr:last-child td {
        border: none;
    }

    table tfoot td {
        padding: 10px 20px;
        background: #FFFFFF;
        border-bottom: none;
        font-size: 1.2em;
        white-space: nowrap;
        border-top: 1px solid #AAAAAA;
    }

    table tfoot tr:first-child td {
        border-top: none;
    }

    table tfoot tr:last-child td {
        color: #57B223;
        font-size: 1.4em;
        border-top: 1px solid #57B223;

    }

    table tfoot tr td:first-child {
        border: none;
    }

    #thanks {
        font-size: 2em;
        margin-bottom: 50px;
    }

    #notices {
        padding-left: 6px;
        border-left: 6px solid #0087C3;
    }

    #notices .notice {
        font-size: 1.2em;
    }

    footer {
        color: #777777;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #AAAAAA;
        padding: 8px 0;
        text-align: center;
    }

</style>
</style>
