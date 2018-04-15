<table>
	<tbody>
		<tr>
			<td>
				Product Name:
			</td>
			<td>
				{{$order->product->name}}
			</td>
		</tr>
		<tr>
			<td>
				Customer Name:
			</td>
			<td>
				{{$order->product->customer_name}}				
			</td>
		</tr>
		<tr>
			<td>
				Mobile Name:
			</td>
			<td>
				{{$order->mobile}}				
			</td>
		</tr>
		<tr>
			<td>
				Email Name:
			</td>
			<td>
				{{$order->email}}				
			</td>
		</tr>
		<tr>
			<td>
				Order Date:
			</td>
			<td>
				{{date('d-m-Y h:i a',strtotime($order->created_at))}}				
			</td>
		</tr>
	</tbody>
</table>