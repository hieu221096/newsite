@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trangchu')}}">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="layout/image/product/{{$detail->image}}" height="250px" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h4>{{$detail->name}}</h4></p>
											<p class="single-item-price" style="font-size: 15px">Giá:
												@if($detail->promotion_price == 0)
													<span>{{number_format($detail->unit_price)}} VND</span>
												@else
													<span class="flash-del">{{number_format($detail->unit_price)}} VND |</span>
													<span class="flash-sale">{{number_format($detail->promotion_price)}} VND</span>
												@endif
											</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$detail->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Số Lượng:</p>
							<form method="POST" action="{{route('add-many')}}">
								<div class="single-item-options">
									<select class="wc-select" name="quantity">
										<option>Số Lượng</option>
										@for($i=1 ; $i<=5 ; $i++ )
											<option value="{{$i}}"><?php echo $i; ?></option>
										@endfor
									</select>
									<input type="hidden" name="product_id" value="{{$detail->id}}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button class="add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i></button>
							</form>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p> {{$detail->description}} </p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản Phẩm Tương Tự </h4>

						<div class="row">
							@foreach($same_product as $spd)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('detail',$spd->id)}}"><img src="layout/image/product/{{$spd->image}}" height="250px" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$spd->name}}</p>
											<p class="single-item-price" style="font-size: 15px">
												@if($spd->promotion_price == 0)
													<span>{{number_format($spd->unit_price)}} VND</span>
												@else
													<span class="flash-del">{{number_format($spd->unit_price)}} VND |</span>
													<span class="flash-sale">{{number_format($spd->promotion_price)}} VND</span>
												@endif
											</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{route('add-cart',$spd->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('detail',$spd->id)}}">Xem Chi Tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">New Products</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
