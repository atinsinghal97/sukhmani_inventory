@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<div class="container">
	<div class="row">
        <center><h2>Log Site Stock</h2></center>
		<div class="col-md-10 col-md-offset-1" style="overflow-x:auto;">
			<table class="table">
			    <thead>
			        <tr style="text-align: center!important;">
			            <th style="text-align: center!important;">S No</th>
			            <th style="text-align: center!important;">Sub Category</th>
			            <th style="text-align: center!important;">Site</th>
			            <th style="text-align: center!important;">Rate</th>
			            <th style="text-align: center!important;">Quantity</th>
			            <th style="text-align: center!important;">Amount</th>
			            <th style="text-align: center!important;">Comment</th>
			            <th style="text-align: center!important;">By User</th>
			            <th style="text-align: center!important;">Dated</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<?php $i=1; ?>
			    	@foreach($stocks as $stock)
			    		<tr>
			    			<td>{{$i++}}</td>
			    			<td>{{$stock->subcategory->subcategory}} ({{$stock->subcategory->category->category}})</td>
			    			<td>{{$stock->site->site_name}}</td>
			    			<td>{{$stock->rate}}</td>
			    			<td>{{$stock->qty}}</td>
			    			<td>{{$stock->amount}}</td>
			    			<td>{{$stock->comment}}</td>
			    			<td>{{$stock->user->name}}</td>
			    			<td>{{$stock->date}}</td>
			    		</tr>
			    	@endforeach
			    </tbody>
			</table>
			    	<center>{{$stocks->links()}}</center>
			<br>
            <center><input type="submit" class="form-control btn btn-primary" id="export" style="width: 200px;margin-bottom: 40px;" name="submit" value="Download Report"></center>
		</div>
	</div>
</div>
@endsection
