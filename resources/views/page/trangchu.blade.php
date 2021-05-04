	@extends('master')
    @section('content')
    <div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>


									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/SeamafSlide/111.jpg" data-src="source/image/SeamafSlide/111.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/SeamafSlide/111.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>

						        </li>
                               								<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/SeamafSlide/2222.jpg" data-src="source/image/SeamafSlide/2222.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/SeamafSlide/2222.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
												</div>
											</div>

						        </li>

								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>LATEST PRODUCTS</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{ count($new_product) }} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
                            @foreach ($new_product as $new )
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="chitietSp/{{ $new->id }}"><img src="source/image/aaaa/{{ $new -> descriptionn }}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $new->name }}</p>
											<p class="single-item-price">
												<span>${{ $new->price }} đồng</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="add-to-cart/{{  $new->id }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="chitietSp/{{ $new->id }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
                             <div class="row">   {{ $new_product->links() }} </div>

						    </div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>BROWSE TOP SELLING PRODUCTS</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{ count( $all_product) }} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
                            <div class="row">
                                @foreach ( $all_product as $all_sp )


								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="chitietSp/{{ $all_sp->id }}"><img src="source/image/aaaa/{{ $all_sp -> descriptionn }}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $all_sp->name }}</p>
											<p class="single-item-price">
												<span>${{ $all_sp->price }} đồng</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="add-to-cart/{{  $all_sp->id }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="chitietSp/{{ $all_sp->id }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>

                                    </div>
                              @endforeach
                            </div>
                         <div class="row">   {{ $all_product->links() }} </div>
						</div> <!-- .beta-products-list -->

					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
