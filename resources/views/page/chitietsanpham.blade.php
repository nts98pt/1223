@extends('master')
@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{ $sanpham->name }}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{ 'index'}}">Home</a> / <span>Thông tin sản phẩm</span>
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
							<img src="source/image/aaaa/{{ $sanpham->descriptionn }}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h1>{{ $sanpham->name }}</h1></p>
                                <div></div>
								<p class="single-item-price">
									<span>${{ $sanpham->price }} đồng</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{ $sanpham->Comment }}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>Size</option>
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>

								<select class="wc-select" name="color">
									<option>Số lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description"></a>


						</ul>

						<div class="panel" id="tab-description">

						</div>

					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h2>RELATED PRODUCTS</h2>

						<div class="row">
                        @foreach ($sanphamtuongtu as $sptt)
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.html"><img src="source/image/aaaa/{{ $sptt->descriptionn }}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{ $sanpham->name }}</p>
										<p class="single-item-price">
											<span>${{ $sptt->price }} đồng</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						 @endforeach
						</div>
                        <div class="row">{{ $sanphamtuongtu->links() }}</div>
					</div> <!-- .beta-products-list -->
				</div>

			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
