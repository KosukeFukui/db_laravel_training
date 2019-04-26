<html>
    <head>
        <style>
            th {background-color: #999; color:#fff; padding:5px 10px; }
            td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
        </style>
    </head>
    <body>
	<h1>見積依頼詳細</h1>
	<p>見積依頼{{ $id }}</p>
	<button onclick="location.href='/training/request/{{ $id }}/new'">新規登録</button>
        <table>
            <tr><th>見積依頼詳細番号</th><th>カタログ番号</th><th>カタログ名</th><th>商品番号</th><th>商品名</th><th>見積数量</th></tr>
            @foreach ( $items as $item )
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->catalog_id }}</td>
                <td>{{ $item->catalog_name }}</td>
                <td>{{ $item->product_id }}</td>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->product_quantity }}</td>
            </tr>
        @endforeach
        </table>
    </body>
</html>

