@extends('template.base')

@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content " style="display: flex;">
            <div>
                <div class="card" style="margin-right: 30px ">
                    <img class="card-img-top" src="{{url('public')}}/man/kemeja.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

            {{-- 2 --}}
             <div>
                <div class="card" style="margin-right: 30px ">
                    <img class="card-img-top" src="{{url('public')}}/man/celana-panjang.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

             {{-- 3 --}}
             <div>
                <div class="card" style="margin-right: 30px ">
                    <img class="card-img-top" src="{{url('public')}}/man/baju-distro.png" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
    </div>
    </div>
</div>
    
@endsection