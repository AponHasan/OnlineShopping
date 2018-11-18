@extends('layouts.app')
@section('content')

<div class="">
    <div style="margin-top: 1%" class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                	<div class="card-body">
                    	<div class="form-panel">
              				<h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
              					<form class="form-horizontal style-form" method="get">
                				<div class="form-group">
                  					<label class="col-sm-2 col-sm-2 control-label">Default</label>
                  						<div class="col-sm-10">
                    						<input type="text" class="form-control">
                  						</div>
                				</div>
                				<div class="form-group">
                  					<label class="col-sm-2 col-sm-2 control-label">Help text</label>
                  						<div class="col-sm-10">
                    						<input type="text" class="form-control">
                  						</div>
                				</div>
              					</form>
            			</div>
                	</div>
            </div>
        </div>
    </div>
</div>
@endsection