@extends('layouts.master')
@section('content')
 @include('partials.product-sidebar') 
         <h4 align="center">Feature Products</h4>
<!--              mobile-->
              <div class="widget">
              
              <div class="row">
              
                
                  
          @foreach($products as $product)        
    

					      <div class="col-md-3">
                  
                     <div class="card" >
            <img class="card-img-top" src="{{asset('public/images/products/'.'1.png')}}" alt="Card image"height="200"width="100">
              <div class="card-body">
                <h4 class="card-title">Samsung</h4>
                <p class="card-text">Price-5,000/-</p>
                <a href="#" class="btn btn-outline-warning">Add to card</a>
              </div>
          </div>
        </div>

	
               @endforeach   
                  
                  
                  
                  
                  </div>
</div>
@endsection