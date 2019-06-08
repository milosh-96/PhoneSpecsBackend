@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-md-6 whitebox phone">
        <div class="image">
            <img src="https://images-na.ssl-images-amazon.com/images/I/61RyyOfknBL._SX569_.jpg" width="100%">
        </div>
        <div class="caption px-4 py-3">
            <div class="phone-title">{{sprintf("%s %s",$device->brand->name,$device->name)}}</div>
            <div class="phone-description">
                <p>Operativni sistem: {!!sprintf('<span title="%1$s" alt="%1$s">%2$s <i class="lni-empty-file"></i></span>',($device->platform_note) ? $device->platform_note : $device->platform->name,$device->platform->name)!!}</p>
                <p>Opseg cene: {{sprintf("%d€ (%d-%d€)",$device->price,$device->min_price,$device->max_price)}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-10 offset-md-1 whitebox">
                <div class="row">
                    <div class="col-md-6 whitebox phone thumb">
                        <div class="image">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/61RyyOfknBL._SX569_.jpg" width="100%">
                        </div>
                        <div class="caption px-4 py-1">
                            <div class="phone-title">Nokia Lumia 920</div>
                            <div class="phone-description">
                                <p>Opseg cene: 40-100€</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 whitebox phone thumb">
                        <div class="image">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/61RyyOfknBL._SX569_.jpg" width="100%">
                        </div>
                        <div class="caption px-4 py-1">
                            <div class="phone-title">Nokia Lumia 920</div>
                            <div class="phone-description">
                                <p>Opseg cene: 40-100€</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 whitebox phone thumb">
                        <div class="image">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/61RyyOfknBL._SX569_.jpg" width="100%">
                        </div>
                        <div class="caption px-4 py-1">
                            <div class="phone-title">Nokia Lumia 920</div>
                            <div class="phone-description">
                                <p>Opseg cene: 40-100€</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 whitebox phone thumb">
                        <div class="image">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/61RyyOfknBL._SX569_.jpg" width="100%">
                        </div>
                        <div class="caption px-4 py-1">
                            <div class="phone-title">Nokia Lumia 920</div>
                            <div class="phone-description">
                                <p>Opseg cene: 40-100€</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  
   </div>
</div>
@endsection
