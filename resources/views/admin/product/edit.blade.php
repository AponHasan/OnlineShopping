@extends('layouts.app')
@section('content')
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
<script type="text/javascript">
	$(document).ready(function(){
		// alert("helo");
		$("#msg").hide();

		$("#btn").click(function(){
			 $("#msg").show();
			var pro_name = $("#pro_name").val();
			console.log(pro_name);
			var pro_code = $("#pro_code").val();
			console.log(pro_code);
			var pro_price = $("#pro_price").val();
			console.log(pro_price);
			
            var id = $("#id").val();
            console.log(id);
			var pro_token = $("#token").val();
			console.log(pro_token);
		
			$.ajax({
				url:"{{route('save.product') }}",
                method:'POST',
                data:{
                        'id': $("#id").val(),
                        'pro_name': $("#pro_name").val(),
                        'pro_code': $("#pro_code").val(),
                        'pro_price': $("#pro_price").val(),
                        'pro_img': $("#pro_img").val(),
                        'title': $('#t').val(),                        
                        '_token':"{{csrf_token()}}",
                      },
				success:function(data){

					$("#msg").html("Product has been Updated");
					$("#msg").fadeOut(4000);

				}
				
			});
		});
		var auto_refersh = setInterval(
			function(){
				$('#product').load('<?php echo('/products');?>').fadeIn("slow");
			},100);
	});
</script>
<div class="">
    <div style="margin-top: 1%" class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products</div>
                	<div class="card-body">
              				<h4 class="mb"><i class="fa fa-angle-right"></i> Update Products</h4>
              				<p id="msg" class="alert alert-success"></p>
                            <div class="row">
                               <div class="form-group">
                                    <label class="col-sm-5">Id</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" value="{{$data[0]->id}}" id="id">
                                    </div>
                                </div>
                            </div>
              					<input type="hidden" value="{{csrf_token()}}" id="token">
                                
                				<div class="row">
                					<div class="col-sm-6">
                						<div class="form-group">
                							<label class="col-sm-2">Name</label>
                							<div class="col-sm-10">
                    							<input type="text" class="form-control" value="{{$data[0]->pro_name}}" id="pro_name" placeholder="name">
                  							</div>
                						</div>
                						<div style="margin-top: 65px" class="form-group">
                							<label class="col-sm-2">Price</label>
                							<div class="col-sm-10">
                    							<input type="text" class="form-control " value="{{$data[0]->pro_price}}" id="pro_price" placeholder="price">
                  							</div>
                						</div>
                						<div class="form-group" style="margin-top: 125px">
                							<label class="col-sm-2">Code</label>
                							<div class="col-sm-10">
                    							<input type="text" class="form-control " value="{{$data[0]->pro_code}}" id="pro_code" placeholder="code">
                  							</div>
                						</div>
                						
						          <div class="col-sm-5">
                					</div>
                					<div class="col-sm-6" style="margin-top: 65px">
                                        <input type="submit" class="btn btn-theme03 " id="btn" name="" value="Update">
                						<a href="/addproduct" style="color: #fff" class="btn btn-theme04 " id="btn" name="" value="">Cancle</a>
                					</div>
                					</div>
                					<div class="col-sm-6" id="">
                						data
						                
                					</div>
                					
                				</div>
                </div>
            </div>
        </div>
    </div>
</div>

  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
@endsection