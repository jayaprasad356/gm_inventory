@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <h4 class="header-title">{{ _lang('View Product') }}</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <td>{{ _lang('Item ID') }}</td>
                        <td>{{ $item->id }}</td>
                    </tr>
                    <tr>
                        <td>{{ _lang('Product Name') }}</td>
                        <td>{{ $item->item_name }}</td>
                    </tr>
                    <tr>
                        <td>{{ _lang('Supplier') }}</td>
                        <td>{{ $item->product->supplier->supplier_name }}</td>
                    </tr>
                    <tr>
                        <td>{{ _lang('Product Cost') }}</td>
                        <td>{{ currency()." ".$item->product->product_cost }}</td>
                    </tr>
                    <tr>
                        <td>{{ _lang('Product Price') }}</td>
                        <td>{{ currency()." ".$item->product->product_price }}</td>
                    </tr>
                    <tr>
                        <td>{{ _lang('Product Unit') }}</td>
                        <td>{{ $item->product->product_unit }}</td>
                    </tr>
                    <tr>
                        <td>{{ _lang('Available Quantity') }}</td>
                        <td>{{ $item->product_stock->quantity.' '.$item->product->product_unit }}</td>
                    </tr>
                    <tr>
                        <td>{{ _lang('Description') }}</td>
                        <td>{{ $item->product->description }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection