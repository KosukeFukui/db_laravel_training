<html>
    <head>
	<style>
	    th {background-color: #999; color:#fff; padding:5px 10px; }
            td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
        </style>
    </head>
    <body>
        <h1>見積依頼詳細　新規登録</h1>
	<p>見積依頼{{ $id }}</p>
 <table>
            <tr><th>見積依頼日</th><th>見積依頼者</th><th>取引先番号</th><th>取引先名</th><th>取引先担当者</th><th>希望回答日</th></tr>
            @foreach ($items as $item)
            <tr>
                <td>{{$item->estimation_request_date}}</td>
                <td>{{$item->estimation_request_maker_name}}</td>
                <td>{{$item->partner_id}}</td>
                <td>{{$item->partner_name}}</td>
                <td>{{$item->partner_incharge_name}}</td>
                <td>{{$item->desirable_answer_date}}</td>
            </tr>
        @endforeach
	</table>

	@if (count($errors) > 0)
	<p>入力に問題があります。再入力してください。</p>
	@endif

<table>
<form method="POST" action="/training/request/{{ $id }}/new">
{{ csrf_field() }}
<!--@if ($errors->has('product_id.unique'))
<tr><th>ERROR</th><td>{{$errors->first('product_id')}}</td></tr>
@endif--!>
@if ($errors->has('catalog_id'))
<tr><th>ERROR</th><td>{{$errors->first('catalog_id')}}</td></tr>
@endif
<tr><th>カタログ番号：</th><td><input type="text" name="catalog_id" value="{{old('catalog_id')}}"></td></tr>
@if ($errors->has('catalog_name'))
<tr><th>ERROR</th><td>{{$errors->first('catalog_name')}}</td></tr>
@endif
<tr><th>カタログ名：</th><td><input type="text" name="catalog_name" value="{{old('catalog_name')}}"></td></tr>
@if ($errors->has('product_id'))
<tr><th>ERROR</th><td>{{$errors->first('product_id')}}</td></tr>
@endif
<tr><th>商品番号：</th><td><input type="text" name="product_id" value="{{old('product_id')}}"></td></tr>
@if ($errors->has('product_name'))
<tr><th>ERROR</th><td>{{$errors->first('product_name')}}</td></tr>
@endif
<tr><th>商品名：</th><td><input type="text" name="product_name" value="{{old('product_name')}}"></td></tr>
@if ($errors->has('product_quantity'))
<tr><th>ERROR</th><td>{{$errors->first('product_quantity')}}</td></tr>
@endif
<tr><th>見積数量：</th><td><input type="text" name="product_quantity" value="{{old('product_quantity')}}"></td></tr>
<tr><th></th><td><input type="submit" value="登録"></td></tr>
</form>
</table>
    </body>
</html>

