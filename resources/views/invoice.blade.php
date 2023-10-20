<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">

	<title></title>
</head>
<body>
<h1 class="text-center">Invoice</h1>
<center>
	<h4 class="title mt-5">{{Settings()->portal_name}}</h4>
	<img width="100" height="100" src="{{url('public/img/settings/'.Settings()->portal_logo)}}">
</center>
<div class="card">
	<div class="card-header">
		<h4>{{$data['title']}}</h4>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table">
			@if($data['type']=='recharge')
                      <thead>
                        <tr>
                          <th>SL/N</th>
                          <th>Date</th>
                          <th>Recharge Amount</th>
                          <th>Phone No</th>
                          <th>Remarks</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>{{$data['data']->date}}</td>
                          <td>{{$data['data']->recharge_amount}}</td>
                          <td>{{$data['data']->phone_no}}</td>
                          <td>{{$data['data']->remarks}}</td>
                        </tr>
                      </tbody>


            @elseif($data['type']=='sendmoney')

                      <thead>
                          <tr>
                            <th>SL/N</th>
                            <th>Transaction ID</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Phone No</th>
                            <th>Bikash No</th>
                            <th>Amount</th>
                            <th>Bounce</th>
                            <th>Charges</th>
                            <th>Net Payable</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>{{$data['data']->transaction_id}}</td>
                          <td>{{$data['data']->date}}</td>
                          <td>{{$data['data']->name}}</td>
                          <td>{{$data['data']->phone_no}}</td>
                          <td>{{$data['data']->bikash_no}}</td>
                          <td>{{$data['data']->amount}}</td>
                          <td>{{$data['data']->bounce}}</td>
                          <td>{{$data['data']->charges}}</td>
                          <td>{{$data['data']->net_payable}}</td>
                        </tr>
                      </tbody>
            @else

                      <thead>
                          <tr>
                            <th>SL/N</th>
                            <th>Transaction</th>
                            <th>Transaction ID</th>
                            <th>Name</th>
                            <th>Phone No</th>
                            <th>Bikash No</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>{{$data['data']->transaction}}</td>
                          <td>{{$data['data']->transaction_id}}</td>
                          <td>{{$data['data']->name}}</td>
                          <td>{{$data['data']->phone_no}}</td>
                          <td>{{$data['data']->bikash_no}}</td>
                        </tr>
                      </tbody>

			@endif
			</table>
		</div>
	</div>
</div>
</body>
</html>