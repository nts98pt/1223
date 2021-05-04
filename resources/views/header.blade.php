<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">

						<li><a href="{{ 'index' }}"><i class="fa fa-home"></i> </a></li>
						<li><a href="{{ 'index' }}"><i class="fa fa-phone"></i> </a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
                        <li><a href="#">U.S.Dollar</a>
							<ul class="sub-menu">
								<li><a href="#">RTGS Dollar</a></li>
								<li><a href="#">SA Rand</a></li>
								<li><a href="#">British Pound</a></li>
							</ul>
						</li>
						<li><a href="#"><i class=""></i> &#9825; Wishlist</a> </li>
						<li><a href="{{ route('signin') }}">Đăng kí</a></li>
						<li><a href="login">Đăng nhập</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{ 'index' }}" id="logo"><h1>SeaMaf</h1></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{ 'search' }}">
					        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
                     @if (Session::has('cart'))
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if (Session()->has('cart'))

                            {{ Session('cart')->totalQty }}@else Trống @endif) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
                            @foreach (Session('cart')->items as $product)


								<div class="cart-item">
                                    <a class="cart-item-delete" href="del-cart/{{  $product['item']['id'] }}"><i class="fafa-times"></i></a>
									<div class="media">
										<a class="pull-left" href="#"><img src="source/image/aaaa/{{ $product['item']['descriptionn']  }}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{ $product['item']['name']  }}

											<span class="cart-item-amount">{{ $product['qty'] }}<span>{{ $product['item']['price']  }}</span></span>
										</div>
									</div>
								</div>

                            @endforeach



								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{ Session('cart')->totalPrice }}</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
                    @endif
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{ 'index' }}">Home</a></li>
						<li><a href="{{ 'loaiSp' }}">Our Shop</a>
							<ul class="sub-menu">
                            @foreach ($loai_sp as $loai)

								<li><a href="">{{ $loai->name }}</a></li>

						  @endforeach
                        </ul>
						</li>
						<li><a href="#">Onsale</a></li>
						<li><a href="#">Our Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
