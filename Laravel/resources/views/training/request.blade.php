<html>
    <head>
        <style>
            th {background-color: #999; color:#fff; padding:5px 10px; }
            td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
        </style>
    </head>
    <body>
        <h1>見積依頼</h1>
        <table>
            <tr><th>見積依頼番号</th></tr><tr><th>見積依頼日</th></tr><tr><th>見積依頼者</th></tr><tr><th>取引先番号</th></tr><tr><th>取引先名</th></tr><tr><th>取引先担当者</th></tr><tr><th>希望回答日</th></tr>
            @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->estimation_request_date}}</td>
                <td>{{$item->estimation_request_maker_name}}</td>
                <td>{{$item->partner_id}}</td>
                <td>{{$item->partner_name}}</td>
                <td>{{$item->partner_incharge_name}}</td>
                <td>{{$item->desirable_answer_date}}</td>
	    </tr>
	@endforeach
        </table>
    </body>
</html>
