<table style="width:100%" class="table table-hover table-striped" >
	<tr>
		<th style="padding: 10px;font-weight: bold;color: black">Product Name</th>
		<th style="padding: 10px;font-weight: bold;color: black">Product Code</th>
		<th style="padding: 10px;font-weight: bold;color: black">Product Price</th>
		<th style="padding: 10px;font-weight: bold;color: black">Action</th>
	</tr>
@foreach($data as $product)
<tr>
	<td style="padding: 10px">{{$product->pro_name}}</td>
	<td style="padding: 10px">{{$product->pro_code}}</td>
	<td style="padding: 10px">{{$product->pro_price}}</td>
    <td><a class="btn btn-sm btn-fill btn-primary" href="{{url('/editProduct')}}/{{$product->id}}">Edit</a></td>
</tr>
@endforeach
</table>

