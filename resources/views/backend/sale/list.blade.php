<x-backend>
	<style type="text/css">
		.form {
			margin: 20px auto;
			width: 400px;
			padding: 10px;
			height: auto;
		}
	</style>

	<div class="row" >	
		<div class="col-md-7">
			<div class="block margin-bottom-sm">
				<div class="row" id="searchMenu">     
		 @foreach($data[2] as $allproduct)

           @php
           $id=$allproduct->id;
           $name = $allproduct->name;
           $codeno = $allproduct->codeno;
           $price = $allproduct->price;
           $photo = $allproduct->photo;

           @endphp
 

                <div class="col-md-4 col-sm-6 col-6">
                <div class="card" style="width:10rem; height:21rem;">
              <img src="{{ asset($photo) }}" class="card-img-top img-fluid" alt="..." style="height: 140px;">
              <div class="card-body">
                <h5 class="card-title">{{$name}}</h5>
                <p class="card-text">{{$price}}<p>
                <a href="javascript:void(0)"  class="btn btn-primary cart"
                					data-id="{{$id}}"
                                   data-name="{{$name}}"
                                   data-codeno="{{$codeno}}"
                                   data-price="{{$price}}"
                                  
                                   data-photo="{{$photo}}">Add Bill</a>
                </div>
              </div>
            </div>
            @endforeach
				</div>
			</div>
		</div>

<div class=" col-md-5 alert_action">
<div class="container " >
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-12 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong id="shopname"></strong>
                        <br>
                     
                        <br>
                         <strong id="address"></strong>
                       
                        <br>
                        <abbr title="Phone" id="phone">P:</abbr> (+95)
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em id="date"></em>
                    </p>
                    <br>
                        Receipt: <em id="voucherno"></em>
                    
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Qty</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">SubTotal</th>
                        </tr>
                    </thead>
                    <tbody id="vouchertable">
                        <tr>
                            <td class="col-md-9"><em>${name}</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> ${qty} </td>
                            <td class="col-md-1 text-center">${price}</td>
                            <td class="col-md-1 text-center">${subtotal}</td>
                        </tr>
</tbody>
 </table>
<div>
    <br>

                            
                                <label for=""> Charges : </label>
                                <span id="chargetwo">
                                    
                                </span> <br> <br>

                                <label for="" > Repay : </label>
                                <span id="repaytwo">
                                    
                                </span>
                                <br><br>
                            <strong><label for=""> Grand Total : </label></strong>
                                <span id="grandtotals">
                                    
                                </span><br> <br>

             
                                       </div>         
            <button type="button" class="btn btn-primary btn-lg btn-block printBtn">
                    Print Now  <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>
        </div>
    </div>
</div>
</div>


  <div class="col-md-5" id="alert_hide" >
						<div class="table-responsive"> 
							<table class="table table-striped">
								<thead>
									<tr>
										<th> Product </th>
										<th></th>
										<th> Qty </th>
										<th></th>
										<th> Price </th>
										<th> Subtotal </th>
									</tr>
								</thead>
								<tbody id="list" >

									</tbody>

								</table>
							</div>
                <div class="col-lg-6" >

							
								<label for=""> Grand Total : </label>
								<input type="text" name="" id="shoppingcartTotal" readonly="readonly"> <br> <br>

								<label for=""> Charges : </label>
								<input type="text" name="charge" id="charge"> <br> <br>

								<label for="" > Repay : </label>
								<span id="repay">
									
								</span>
								<br>
					</div>

								<a href="#" class="btn btn-primary checkoutBtn" data-name="<?php echo Auth::user()->shop->name?>"
                                    data-address="<?php echo Auth::user()->shop->address ?>"
                                    data-phone="<?php echo Auth::user()->phone ?>"
                                    >Save</a>

							</div>

					</div>
	

			</x-backend>