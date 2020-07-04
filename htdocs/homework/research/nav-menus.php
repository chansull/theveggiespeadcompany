<?php ob_start(); ?>
<style type="text/css">
#site-header {
  position: relative;
  z-index: 1100; }
  #site-header .inner {
    width: 100%;
    padding: 0 5%; }
  #site-header > .inner {
    padding: 1rem 5%; }
  #site-header .logo-container, #site-header .search-container, #site-header .phone-container, #site-header .icon-container, #site-header .header-section-right {
    display: inline-block;
    vertical-align: middle; }
  #site-header .logo-container {
    text-align: left;
    padding: 0.5rem 0 0.5rem 0; }
    #site-header .logo-container a {
      display: block;
      position: relative; }
  #site-header .site-logo {
    width: 20rem;
    display: block;
    transition: opacity 0.2s 0s ease-in-out; }
    #site-header .site-logo.alt {
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      transition-delay: 0.2s; }
    @media screen and (min-width: 1201px) {
      #site-header .site-logo {
        width: 23rem; } }
  .menu-open #site-header .site-logo {
    opacity: 0;
    transition: opacity 0.2s ease-in-out; }
    .menu-open #site-header .site-logo:not(.alt) {
      transition-delay: 0.2s; }
    .menu-open #site-header .site-logo.alt {
      opacity: 1; }
  #site-header .header-section-right {
    width: calc(100% - 20rem);
    text-align: right;
    position: relative; }
    @media all and (min-width: 1201px) {
      #site-header .header-section-right {
        width: calc(100% - 23rem); } }
    #site-header .header-section-right .search-container {
      display: none; }
      @media screen and (min-width: 1201px) {
        #site-header .header-section-right .search-container {
          display: inline-block; }
          #site-header .header-section-right .search-container .search-heading {
            color: #312b80;
            margin-right: 1rem;
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            font-size: 1.4rem; }
          #site-header .header-section-right .search-container .submit-button, #site-header .header-section-right .search-container input {
            height: 3.5rem;
            border: 0.1rem solid #bcbcbc; }
          #site-header .header-section-right .search-container .submit-button {
            width: 5rem;
            vertical-align: top;
            text-align: center;
            border-right: none;
            border-top-left-radius: 5rem;
            border-bottom-left-radius: 5rem;
            color: #777676;
            transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out, border 0.2s ease-in-out;
            font-size: 1.4rem; }
            #site-header .header-section-right .search-container .submit-button:hover, #site-header .header-section-right .search-container .submit-button:focus {
              border: 1px solid #312b80;
              background-color: #312b80;
              color: #fff; }
          #site-header .header-section-right .search-container input {
            width: 30rem;
            border-top-right-radius: 5rem;
            border-bottom-right-radius: 5rem;
            padding-left: 1rem;
            transition: border 0.2s ease-in-out; }
            #site-header .header-section-right .search-container input:hover, #site-header .header-section-right .search-container input:focus {
              border: 1px solid #312b80; } }
    #site-header .header-section-right .phone-container, #site-header .header-section-right .icon-container {
      display: none; }
      @media screen and (min-width: 1201px) {
        #site-header .header-section-right .phone-container, #site-header .header-section-right .icon-container {
          height: 3.5rem;
          margin-left: 3rem;
          display: inline-block; }
          #site-header .header-section-right .phone-container .phone-label, #site-header .header-section-right .phone-container .phone-number, #site-header .header-section-right .icon-container .phone-label, #site-header .header-section-right .icon-container .phone-number {
            display: inline-block;
            vertical-align: middle; } }
    #site-header .header-section-right .phone-container .phone-label {
      color: #312b80;
      margin-left: 2.5rem;
      line-height: 3.5rem;
      margin-right: 1rem;
      font-size: 1.4rem;
      font-weight: 700; }
    #site-header .header-section-right .phone-container .phone-number {
      font-weight: 300;
      line-height: 3.4rem;
      transition: color 0.2s ease-in-out;
      color: #4d4d4d;
      font-size: 3rem; }
      #site-header .header-section-right .phone-container .phone-number:hover {
        color: #312b80; }
    #site-header .header-section-right .icon-container i {
      line-height: 3.5rem;
      margin-left: 1rem;
      transition: color 0.2s ease-in-out;
      color: #312b80;
      font-size: 1.8rem; }
      #site-header .header-section-right .icon-container i:hover {
        color: #4d4d4d; }
  #site-header .menu-toggle {
    display: inline-block;
    vertical-align: middle;
    position: relative;
    width: 5rem;
    height: 4rem; }
    @media screen and (min-width: 1201px) {
      #site-header .menu-toggle {
        display: none; } }
    #site-header .menu-toggle .lines {
      text-align: left; }
    #site-header .menu-toggle .line {
      width: 5rem;
      height: 0.2rem;
      position: absolute;
      transition: opacity 0.2s ease-in-out, transform 0.25s ease-in-out, background-color 0.2s ease-in-out;
      background-color: #4d4d4d; }
    #site-header .menu-toggle .top {
      top: 0;
      transform-origin: left top; }
    #site-header .menu-toggle .middle {
      top: 50%;
      opacity: 1;
      transform: translateY(-50%); }
    #site-header .menu-toggle .bottom {
      bottom: 0;
      transform-origin: left bottom; }
    .menu-open #site-header .menu-toggle .line {
      background-color: #fff; }
    .menu-open #site-header .menu-toggle .top {
      transform: rotateZ(50deg); }
    .menu-open #site-header .menu-toggle .middle {
      opacity: 0;
      transform: translateY(-50%) rotateZ(45deg) scale(0.5); }
    .menu-open #site-header .menu-toggle .bottom {
      transform: rotateZ(-50deg); }
  #site-header .primary-menu {
    display: none; }
    @media screen and (min-width: 1201px) {
      #site-header .primary-menu {
        min-height: 3rem;
        background-color: #f2f2f2;
        display: block; }
        #site-header .primary-menu .menu-main {
          width: 100%;
          display: flex;
          justify-content: space-around; }
        #site-header .primary-menu .highlight {
          margin-left: 2rem;
          background-color: #312b80; }
          #site-header .primary-menu .highlight a {
            color: #fff;
            text-align: center;
            padding: 0 4.5rem; }
        #site-header .primary-menu .menu-item {
          position: relative;
          display: table-cell;
          text-align: left;
          line-height: 3rem;
          color: #777676;
          cursor: pointer;
          font-size: 1.4rem;
          font-weight: 700; }
          #site-header .primary-menu .menu-item .toggle-drop {
            vertical-align: sub;
            transition: transform 0.2s ease-in-out;
            font-size: 2.2rem; }
          #site-header .primary-menu .menu-item a, #site-header .primary-menu .menu-item span {
            transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out; }
          #site-header .primary-menu .menu-item:hover .toggle-drop {
            transform: rotateX(180deg); }
          #site-header .primary-menu .menu-item:hover .main-menu-link {
            color: #fff;
            background-color: #777676; }
          #site-header .primary-menu .menu-item.menu-open .nav-drop {
            max-height: 500px;
            transition: max-height 0.8s; }
        #site-header .primary-menu .main-menu-link {
          display: block;
          text-align: left;
          line-height: 3rem;
          padding: 0 5.2rem;
          transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out;
          color: #777676;
          font-weight: 700;
          font-size: 1.4rem; }
        #site-header .primary-menu .nav-drop {
          position: absolute;
          top: 3rem;
          left: 0;
          width: 100%;
          background-color: #777676;
          z-index: 1000;
          overflow: hidden;
          max-height: 0px;
          transition: max-height 0.8s -0.5s;
          cursor: pointer; }
          #site-header .primary-menu .nav-drop .menu-item {
            width: 100%;
            display: block; }
          #site-header .primary-menu .nav-drop .nav-drop-link {
            display: block;
            line-height: 3rem;
            transition: color 0.2s ease-in-out;
            padding: 0 2rem;
            color: #fff;
            font-size: 1.4rem;
            font-weight: 400; }
            #site-header .primary-menu .nav-drop .nav-drop-link:hover {
              color: #312b80; } }

.drawer-menu {
  width: 100%;
  height: 100%;
  overflow-x: auto;
  overflow-y: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1004;
  display: none;
  background-color: #312b80; }
  .drawer-menu .menu-container {
    position: absolute;
    top: 12rem;
    width: 90%;
    height: calc(100% - 13rem);
    left: 0;
    right: 0;
    margin: 0 auto;
    overflow-y: auto; }
  .drawer-menu .menu-main {
    text-align: center; }
    .drawer-menu .menu-main .menu-item {
      color: #fff;
      margin-top: 1.22rem;
      font-size: 3rem; }
      .drawer-menu .menu-main .menu-item:first-of-type {
        margin-top: 0; }
    .drawer-menu .menu-main .main-menu-link {
      line-height: 4rem;
      color: #fff;
      cursor: pointer;
      font-size: 3rem; }
      .drawer-menu .menu-main .main-menu-link .fa {
        transition: transform 0.2s ease-in-out; }
      .drawer-menu .menu-main .main-menu-link.menu-open .fa {
        transform: rotateX(180deg); }
    .drawer-menu .menu-main .highlight {
      font-weight: 700; }
    .drawer-menu .menu-main .sub-nav-drop {
      display: none; }
      .drawer-menu .menu-main .sub-nav-drop .menu-item {
        margin-top: 2rem; }
      .drawer-menu .menu-main .sub-nav-drop .nav-drop-link {
        color: #fff;
        transition: color 0.2s ease-in-out;
        font-weight: 200;
        font-size: 2rem; }
        .drawer-menu .menu-main .sub-nav-drop .nav-drop-link:hover {
          color: #777676; }
  .drawer-menu .contact-container {
    text-align: center; }
    .drawer-menu .contact-container .line-1 {
      margin: 3rem 0 1rem 0;
      line-height: 2rem;
      letter-spacing: 0.3rem;
      text-transform: uppercase;
      color: #fff;
      font-weight: 700;
      font-size: 1.5rem; }
    .drawer-menu .contact-container .number {
      font-size: 3rem;
      transition: color 0.2s ease-in-out;
      color: #fff; }
      .drawer-menu .contact-container .number:hover {
        color: #777676; }
  .drawer-menu .search-container {
    margin-top: 3rem;
    height: 100%;
    display: inline-block; }
    .drawer-menu .search-container .search-heading {
      display: none; }
    .drawer-menu .search-container .submit-button, .drawer-menu .search-container input {
      height: 3.5rem;
      border: 0.1rem solid #fff; }
    .drawer-menu .search-container .submit-button {
      width: 5rem;
      vertical-align: top;
      margin-right: -4px;
      text-align: center;
      color: #fff;
      border-right: none;
      border-top-left-radius: 5rem;
      border-bottom-left-radius: 5rem;
      transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
      font-size: 1.4rem; }
      .drawer-menu .search-container .submit-button:hover {
        background-color: #fff;
        color: #312b80; }
    .drawer-menu .search-container input {
      width: 20rem;
      border-top-right-radius: 5rem;
      border-bottom-right-radius: 5rem;
      padding-left: 1rem;
      color: #fff;
      transition: border 0.2s ease-in-out; }
      .drawer-menu .search-container input::-webkit-input-placeholder {
        color: #fff; }
</style>
<header id="site-header">
	<div class="inner">
		<div class="logo-container">
			<a href="/">
				<img class="site-logo" style="max-width: 200px;" src="http://chantelle-training.staginghub.co.uk/wp-content/uploads/images/spreadtwo.jpg" alt="Dummy One" />
				<img class="site-logo alt" style="max-width: 200px;" src="http://chantelle-training.staginghub.co.uk/wp-content/uploads/images/spreadone.jpg" alt="Dummy Two" />
			</a>
		</div><!-- /.logo-container -->

		<div class="header-section-right">
			<button class="menu-toggle">
				<p class="lines">
					<span class="line top"></span>
					<span class="line middle"></span>
					<span class="line bottom"></span>
				</p><!-- /.lines -->
			</button><!-- /.menu-toggle -->
			<div class="phone-container">
				<p class="phone-label">Phone</p>
				<a class="phone-number" href="tel:09876543210">09876543210</a>
				<p class="phone-label">Landline</p>
				<a class="phone-number" href="tel:09876543210">09876543210</a>
			</div><!-- /.contact-container -->
			<div class="icon-container">
				<a class="icon-link" href="mailto:chantelle.sullivan@madisonsolutions.co.uk"><i class="fa fa-envelope" alt="Email"></i></a>
				<!-- Social media icons here -->
			</div><!-- /.icon-container -->
		</div><!-- /.header-section-right -->
	</div><!-- /.inner -->

	<nav class="primary-menu">
		<div class="inner">
			<ul class="menu-main">
				<?php
				$menu_items = [
					[
						'link' => '/',
						'title' => 'Home',
						'children' => [],
					],
					[
						'link' => 'http://chantelle-training.staginghub.co.uk/about/',
						'title' => 'About',
						'children' => [],
					],
					[
						'link' => 'http://chantelle-training.staginghub.co.uk/products/',
						'title' => 'Products',
						'children' => [],
					],
					[
						'link' => 'http://chantelle-training.staginghub.co.uk/contact/',
						'title' => 'Contact',
						'children' => [],
					],
				];

				foreach($menu_items as $item) { ?>
					<li class="menu-item">
						<?php
							if( isset($item['link']) ) { ?>
								<a class="main-menu-link" href="<?= $item['link']; ?>"><?php
							} else { ?>
								<span class="main-menu-link"><?php
							}

							echo $item['title'];

							if( isset($item['children']) ) { ?><i class="fa fa-angle-down toggle-drop"></i><?php }
							if( isset($item['link']) ) { ?>
								</a><?php
							} else { ?>
								</span><?php
							}
						?>
					</li>
				<?php } ?>
			</ul><!-- /.nav-main -->
		</div><!-- /.inner -->
	</nav><!-- /.primary-menu -->
</header><!-- /#site-header -->

<div class="drawer-menu">
	<div class="inner">
		<div class="menu-container">
			<ul class="menu-main">
				<?php foreach($menu_items as $item) { ?>
					<li class="menu-item">
						<?php
							if( isset($item['link']) ) { ?>
								<a class="main-menu-link" href="{{ item.link }}"><?php
							} else { ?>
								<span class="main-menu-link"><?php
							}

							if( isset($item['children']) ) { ?><i class="fa fa-angle-down toggle-drop"></i><?php }
							if( isset($item['link']) ) { ?>
								</a><?php
							} else { ?>
								</span><?php
							}
						?>
					</li>
				<?php } ?>
				<div class="contact-container">
					<p class="line-1">Phone</p>
					<a class="number" href="tel:09876543210">09876543210</a>
				</div><!-- /.contact-container -->
			</ul><!-- /.nav-main -->
		</div><!-- /.menu-container -->
	</div><!-- /.inner -->
</div><!-- /.drawer-menu -->
<?php echo ob_get_clean(); ?>


<div>
	<p>jQuery Code:</p>
	<code>
		if (ua.match(/iPad/i) || ua.match(/iPhone/)) {<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;$body.on('touchstart', '.toggle-drop', function(ev) {<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;toggleItem( $(ev.target).closest('.menu-item').first() );<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ev.stopPropagation();<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;}).on('touchstart', function(ev) {<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( $(ev.target).is('.toggle-drop') ) {<br/>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return true;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$menuItems.removeClass(menuOpen);<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
		} else {<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;$('.menu-item-has-children').on('mouseover', function(ev) {<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openItem( $(this) );<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;}).on('mouseleave', function(ev) {<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;closeItem( $(this) );<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;});<br/>
		}<br/>
		<br/>
		var toggleMobileMenu = function() {<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;$(this).add($body).toggleClass(menuOpen);<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;$('.drawer-menu').stop().slideToggle(300);<br/>
		}<br/>
		<br/>
		// Drawer Menu<br/>
		$('.menu-toggle').on('click', function() {<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;toggleMobileMenu();<br/>
		});<br/>
<br/>
		$('.toggle-sub-drawer').on('click', function() {<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;$(this).parent().toggleClass(menuOpen).siblings('.sub-nav-drop').stop().slideToggle();<br/>
		});<br/>
	</code>
</div>
