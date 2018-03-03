@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3><a href="{{route('site.index')}}">Manage Sites</a></h3>
                    <h3><a href="{{route('warehouseInventory')}}">Warehouse Inventory</a></h3>
                    <h3><a href="{{route('warehouseStock')}}">Warehouse Stock</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
