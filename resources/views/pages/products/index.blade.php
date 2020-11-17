
@extends('layouts.master')
@section('content')
 @include('partials.product-sidebar') 
         <h4 align="center">Feature Products</h4>
<!--              mobile-->
              <div class="widget">
              
              <div class="row">
              
     @foreach($products as $product)

					<div class="col-md-3">
						<div class="card">
							
		@foreach($product->images as $image)
	<img class="card-img-top feacher-img" src="{{ asset('public/images/products/'. $image->image)  }}" alt="samsung galaxy">
	
							<div class="card-body">
                                <h4 class="card-title">{{$product->title}}</h4>
									    <p class="card-text">TK-{{$product->price}}</p>
									    <a href="#" class="btn btn-outline-success">See Profile</a>
							</div>
						</div>
					</div>



	
              @endforeach   
              @endforeach   
                  
                  
                  
                  
                  </div>
</div>
@endsection
