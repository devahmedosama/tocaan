<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Sell</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <style type="text/css">
        body{
            background-color: #fff;
        }
        .bill{
            min-height: 200px;
            background-color: #fff;
            margin: 0 auto;
            font-size: 12px;
        }
        .info_ul{
            padding: 0;
        }
        
        
        .products_table {
            width: calc(100% - 20px);
            border: 1px solid #929eaa;
            border-radius: 15px;
            margin: 10px;
        }
        .products_table th{
            width: calc(100% - 20px);
            border: 1px solid #929eaa;
            border-radius: 15px;
            margin: 10px;
            padding: 5px;
        }
        .body_cell_table tr{

        }
        .body_cell_table td {
            padding-bottom: 7px;
            border-bottom: 1px dashed;
            padding-top: 7px;
        }
        .sign_table{
            width: 100%;
        }
        .sign_table td{
            /* border-bottom: 1px dashed; */
        }
        .signature_table tr>td{
            padding: 10px 30px;
            font-size: 16px;
        }
        .items_table{
            width: 100%;
            border-top: 1px solid;
            font-size: 16px;
            padding-bottom: 25px;
        }
        .items_table th{
            padding: 20px 10px;
            border-bottom: 1px solid;
        }
        .items_table td{
            padding: 0 15px;
            padding-top: 15px;
        }
        .table>thead>tr>th {
            color: #2a2a2a;
            border-bottom: 1px solid #ededed;
            font-weight: 500;
        }
        .table th, .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            border-color: #ededed;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="bill"  >
        <table style="width: 100%">
            <tbody>
                <tr>
                    <td style="text-align:center;background: #3f87f5;color: #fff;padding: 10px;font-size: 22px;margin: 0">
                      O FARM
                     
                    </td>
                </tr>
                
            </tbody>
        </table>
       <!--  -->
        <table class="table" style="width:100%;text-align:{{ $text }}"  dir="{{ $dir }}" >
                    <thead>
                        <tr>


                             <th style="font-size:12px;font-weight: bold;padding: 15 0;">{{ trans('home.Client') }}</th>
                            <th style="font-size:12px;font-weight: bold;padding: 15 0;">{{ trans('home.Product') }}</th>
                            <th style="font-size:12px;font-weight: bold;padding: 15 0;">{{ trans('home.Total Weight') }}</th>
                            <th style="font-size:12px;font-weight: bold;padding: 15 0;">{{ trans('home.Support Amount') }}</th>
                            <th style="font-size:12px;font-weight: bold;padding: 15 0;">{{ trans('home.Date') }}</th> 

                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           $weight = 0;
                           $support = 0;
                         ?>
                       @foreach($allData as $data)
                        <tr>
                         <td style="font-size:10px;text-align:center;">
                                @foreach($data->items as $item)
                                {{ ($item->client)?$item->client->name:' ' }} ,
                                @endforeach
                            </td>
                         <td style="font-size:10px;text-align:center;">
                                @foreach($data->items as $item)
                                {{ $item->farm->name }} ,
                                @endforeach
                            </td>
                            <!-- <td>{{ $data->total_price }}</td> -->
                            <td style="font-size:10px;text-align:center;">{{ $data->total_weight }}</td>
                            <td style="font-size:10px;text-align:center;">{{ $data->total_support.' '.trans('home.Dinar') }}</td>
                            <!-- <td>{{ $data->total_weight }}</td> -->
                            <td style="font-size:10px;text-align:center;">{{ $data->date }}</td>
                            <td>
                             <td style="font-size:10px;text-align:center;">{{ $data->name }}</td>
                             <td style="font-size:10px;text-align:center;">{{( $data->area)?$data->area->name:' ' }}</td>
                             <td style="font-size:10px;text-align:center;">{{ $data->seeding_date }}</td>
                        </tr>
                        <?php 
                        $weight +=$data->total_weight;
                        $support +=$data->total_support;
                        ?>
                       @endforeach
                        
                        <tr>
                            <td colspan="2"> 
                                {{ trans('home.Total Weight').' :  '.$weight  }}
                            </td>
                            <td colspan="2">
                                {{ trans('home.Total Support Amount').' :  '.$support }}
                            </td>
                        </tr>
                    </tbody>
                </table>
    </div>
</body>
</html>