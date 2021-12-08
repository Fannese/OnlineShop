<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="#">
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

<title>Happy-Shop</title>
<link rel="canonical" href="#" />
<meta property="og:locale" content="en" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Home - Office Furniture Store" />
<meta property="og:description" content="Home Office Furniture Stay productive and get more work done! Shop Collection Wooden Desk Chairs Laptop Stands Tables Chairs Laptop stands Monitor stands Cabinets Mouse pads Study lamps Desk plants New Arrivals Boost your productivity View all products Free Shipping Lorem ipsum amet consectetur Support 24/7 Lorem ipsum amet consectetur Money return Lorem ipsum amet &hellip; Home Read More &raquo;" />
<meta property="og:url" content="#" />
<meta property="og:site_name" content="Office Furniture Store" />
<meta property="article:modified_time" content="2021-09-06T07:08:58+00:00" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:label1" content="Est. reading time" />
<meta name="twitter:data1" content="3 minutes" />
@include('layouts.astracss')

<a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">
Skip to content</a>
<div class="hfeed site" id="page">
<header class="site-header header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline" id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">
<div id="ast-desktop-header" data-toggle-type="dropdown">
<div class="ast-main-header-wrap main-header-bar-wrap ">
<div class="ast-primary-header-bar ast-primary-header main-header-bar site-header-focus-item" data-section="section-primary-header-builder">
<div class="site-primary-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container" data-section="section-primary-header-builder">
<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-grid-center-col-layout">
<div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
<div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
<span class="site-logo-img"><a href="{{ route('Geschirr-index') }}" class="custom-logo-link transparent-custom-logo" rel="home" itemprop="url"><img width="220" height="36" src="{{ asset('/assets/images/happy-shop.webp') }}" class="astra-logo-svg" alt="" loading="lazy" /></a></span> </div>

</div>
<div class="site-header-primary-section-left-center site-header-section ast-flex ast-grid-left-center-section">
</div>
</div>
<div class="site-header-primary-section-center site-header-section ast-flex ast-grid-section-center">
<div class="ast-builder-menu-1 ast-builder-menu ast-flex ast-builder-menu-1-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-1">
<div class="ast-main-header-bar-alignment"><div class="main-header-bar-navigation"><nav class="site-navigation ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="primary-site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope"><div class="main-navigation ast-inline-flex"><ul id="ast-hf-menu-1" class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex  submenu-with-border stack-on-mobile">

<li id="menu-item-398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398"><a href="{{ route('Geschirr-index') }}" class="menu-link">Shop</a></li>
<li id="menu-item-557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-557"><a href="{{ route('about') }}" class="menu-link">About</a></li>
<li id="menu-item-623" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-623"><a href="{{ route('contact') }}" class="menu-link">Contact</a></li>
<li id="menu-item-398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398">
    <a class="menu-link" href="{{ route('waren') }}" role="button">
        <i class="fas fa-shopping-cart"></i>
      </a></li>
      @guest
      @if (Route::has('login'))
          <li id="menu-item-398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398">
              <a class="menu-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
      @endif

      @if (Route::has('register'))
          <li id="menu-item-398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398">
              <a class="menu-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif
      @else
      <li id="menu-item-398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </li>
      @endguest
</ul></div></nav></div></div> </div>
</div>

<div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
<div class="site-header-primary-section-right-center site-header-section ast-flex ast-grid-right-center-section">
</div>
<div class="ast-builder-layout-element ast-flex site-header-focus-item ast-header-search" data-section="section-header-search">
<div class="ast-search-menu-icon slide-search" id="ast-search-form" tabindex="-1">
<div class="ast-search-icon">
<a class="slide-search astra-search-icon" aria-label="Search icon link" href="#">
<span class="screen-reader-text">Search</span>
<span class="ast-icon icon-search"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="ast-search-icon-svg" x="0px" y="0px" viewBox="-888 480 142 142" enable-background="new -888 480 142 142" xml:space="preserve">
<title />
				<desc />
				<path id="Shape" d="M-787.4,568.7h-6.3l-2.4-2.4c7.9-8.7,12.6-20.5,12.6-33.1c0-28.4-22.9-51.3-51.3-51.3  c-28.4,0-51.3,22.9-51.3,51.3c0,28.4,22.9,51.3,51.3,51.3c12.6,0,24.4-4.7,33.1-12.6l2.4,2.4v6.3l39.4,39.4l11.8-11.8L-787.4,568.7  L-787.4,568.7z M-834.7,568.7c-19.7,0-35.5-15.8-35.5-35.5c0-19.7,15.8-35.5,35.5-35.5c19.7,0,35.5,15.8,35.5,35.5  C-799.3,553-815,568.7-834.7,568.7L-834.7,568.7z" />
				</svg></span>				</a>
			</div>
			<form role="search" method="get" class="search-form" action="#">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" tabindex="-1">
					<button class="search-submit ast-search-submit" aria-label="Search Submit">
				<span hidden>Search</span>
				<i><span class="ast-icon icon-search"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="ast-search-icon-svg" x="0px" y="0px" viewBox="-888 480 142 142" enable-background="new -888 480 142 142" xml:space="preserve">
				<title />
				<desc />
				<path id="Shape" d="M-787.4,568.7h-6.3l-2.4-2.4c7.9-8.7,12.6-20.5,12.6-33.1c0-28.4-22.9-51.3-51.3-51.3  c-28.4,0-51.3,22.9-51.3,51.3c0,28.4,22.9,51.3,51.3,51.3c12.6,0,24.4-4.7,33.1-12.6l2.4,2.4v6.3l39.4,39.4l11.8-11.8L-787.4,568.7  L-787.4,568.7z M-834.7,568.7c-19.7,0-35.5-15.8-35.5-35.5c0-19.7,15.8-35.5,35.5-35.5c19.7,0,35.5,15.8,35.5,35.5  C-799.3,553-815,568.7-834.7,568.7L-834.7,568.7z" />
				</svg></span></i>
			</button>
			</label>
	</form>
		</div>
				</div>

					<div class="ast-builder-layout-element site-header-focus-item ast-header-account" data-section="section-header-account">

			<div class="ast-header-account-wrap">




			</div>

					</div>
									</div>
												</div>
					</div>
								</div>
			</div>
		<div class="ast-desktop-header-content content-align-flex-start ">
			</div>
</div>
<div id="ast-mobile-header" class="ast-mobile-header-wrap " data-type="dropdown">
		<div class="ast-main-header-wrap main-header-bar-wrap">
		<div class="ast-primary-header-bar ast-primary-header main-header-bar site-primary-header-wrap site-header-focus-item ast-builder-grid-row-layout-default ast-builder-grid-row-tablet-layout-default ast-builder-grid-row-mobile-layout-default" data-section="section-primary-header-builder">
									<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">
													<div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">
										<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">
											<div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
					<span class="site-logo-img"><a href="https://websitedemos.net/office-furniture-store-04/" class="custom-logo-link transparent-custom-logo" rel="home" itemprop="url"><img width="220" height="36" src="https://websitedemos.net/office-furniture-store-04/wp-content/uploads/sites/913/2021/07/site-logo-light.svg" class="astra-logo-svg" alt="" loading="lazy" /></a></span>				</div>

					</div>
									</div>
																									<div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">
										<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="section-header-mobile-trigger">
						<div class="ast-button-wrap">
				<button type="button" class="menu-toggle main-header-menu-toggle ast-mobile-menu-trigger-minimal" aria-expanded="false">
					<span class="screen-reader-text">Main Menu</span>
					<span class="mobile-menu-toggle-icon">
						<span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class='ast-mobile-svg ast-menu-svg' fill='currentColor' version='1.1' xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z'></path></svg></span><span class="ahfb-svg-iconset ast-inline-flex svg-baseline"><svg class='ast-mobile-svg ast-close-svg' fill='currentColor' version='1.1' xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z'></path></svg></span>					</span>
									</button>
			</div>
					</div>
									</div>
											</div>
						</div>
	</div>

</div>
		</header>
			<div id="content" class="site-content">
		<div class="ast-container">


	<div id="primary" class="content-area primary">


					<main id="main" class="site-main">
				<article class="post-27 page type-page status-publish ast-article-single" id="post-27" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">
		<header class="entry-header ast-header-without-markup">
