<div class="section-wrapper">
    <section id="section-12-1">
        <h3>12. Customizer Options</h3>

        <h4>12.1 General Settings</h4>
        <p>To modify General Settings, navigate to <strong>Appearance &gt; Customize &gt; General</strong>.</p>
        <p>The General Settings include the following options:</p>
        <ul>
            <li><b>Container Width:</b> Set the maximum width of your site’s content container.</li>
            <li><b>Enable SVG Upload:</b> Allow uploading of SVG files for logos and images.</li>
            <li><b>Back to Top:</b> Enable a button that allows users to quickly scroll back to the top of the page.</li>
            <li><b>Remove Admin Bar:</b> Hide the WordPress admin bar for logged-in users on the frontend.</li>
            <li><b>Disable Image Srcset:</b> Turn off automatic responsive image resizing by WordPress.</li>
            <li><b>Preloader:</b> Display a loading animation while the site content is loading.</li>
            <li><b>Full Site Image Blend:</b> Apply a blending effect to images across the site for a unified look.</li>
            <li><b>Site Radius:</b> Adjust the global border-radius for containers and sections.</li>
            <li><b>Button Radius:</b> Customize the border-radius of buttons for a rounded or square appearance.</li>
        </ul>
    </section>


    <section id="section-12-2">
        <h4>12.2 Header Settings</h4>
        <p>To customize the header options, navigate to <strong>Appearance &gt; Customize &gt; Header</strong>.</p>
        <p>The Header Settings include the following sections:</p>
        <ul>
            <li><b>Main Menu Section:</b> Configure the primary navigation menu, including layout, menu items, and styling options.</li>
            <li><b>Topbar Section:</b> Manage the topbar area, such as contact info, social icons, and secondary menu items.</li>
            <li><b>Nav Drawer Section:</b> Customize the mobile or off-canvas navigation drawer, including toggle icons, menu items, and appearance.</li>
        </ul>
    </section>


    <section id="section-breadcrumb">
        <h4>12.3 Breadcrumb</h4>
        <p>To customize the header breadcrumb, navigate to <strong>Appearance &gt; Customize &gt; Breadcrumb</strong>.</p>
        <p>In this section, you can configure various breadcrumb settings, including:</p>
        <ul>
            <li><b>Banner Image:</b> Upload or change the header/banner image displayed behind the breadcrumb.</li>
            <li><b>Banner Height:</b> Adjust the height of the banner area for proper visual appearance.</li>
            <li><b>Title:</b> Customize the title text displayed in the breadcrumb area.</li>
            <li><b>Breadcrumb:</b> Enable, disable, or style the breadcrumb navigation.</li>
        </ul>
    </section>

	<section id="section-typography">

        <h4>12.5. Typography Settings</h4>
        <p>To customize the typography of your site, navigate to <strong>Dashboard &gt; Appearance &gt; Customize &gt; Typography</strong>. You will find typography settings grouped by <b>Body</b>, <b>Headings</b>, and <b>Menu</b> for easier management.</p>

    </section>

    <section id="section-blog-archive">
        <h4>12.6 Blog Settings</h4>
        <p>To configure blog archive settings, navigate to <strong>Appearance &gt; Customize &gt; Blog Settings</strong>.</p>
        <p>The Blog Settings include the following options:</p>
        <ul>
            <li><b>Meta Settings:</b> Enable or disable post meta information such as author, date, categories, and comments.</li>
            <li><b>Title Above Meta:</b> Display or hide the post title above the meta information.</li>
            <li><b>Read More:</b> Customize the "Read More" button text or style for blog excerpts.</li>
            <li><b>Multiple Category Colors:</b> Assign different colors to categories for better visual distinction.</li>
            <li><b>Blog Style:</b> Choose the layout style for your blog, such as list, grid, or masonry.</li>
            <li><b>Grid Columns:</b> Set the number of columns for grid-based blog layouts.</li>
            <li><b>Content Limit:</b> Define the maximum number of words or characters displayed in the excerpt.</li>
            <li><b>Pagination:</b> Enable numbered or next/previous navigation for blog pages.</li>
            <li><b>Masonry:</b> Toggle masonry layout for blog grids to create a dynamic, staggered appearance.</li>
            <li><b>Choose Meta:</b> Select which meta elements (author, date, comments, categories) are displayed on each post.</li>
        </ul>
    </section>

	<section id="section-blog-details">
        <h3>12.7 Post Details Settings</h3>
        <p>To customize the blog post details page, navigate to <strong>Appearance &gt; Customize &gt; Post Details Settings</strong>.</p>
        <p>The Post Details Settings include the following options:</p>
        <ul>
            <li><b>Meta Style:</b> Choose the style and layout for post meta information such as date, author, and categories.</li>
            <li><b>Banner Title:</b> Customize the title displayed in the banner area of the post.</li>
            <li><b>Meta, Tags, Share Icon, Author Profile, Caption, Post Navigation Visibility:</b> Enable or disable each element to control what appears on the post page.</li>
            <li><b>Related Posts:</b> Display related posts at the end of each blog post to increase engagement.</li>
        </ul>
        <p>To add a new social icon, insert the following code in your child theme’s <code>functions.php</code> file:</p>
        <pre>
add_filter('listpress_social_sharing_icons', function ($social_icon, $url='', $title=''){
	$social_icon['instagram'] = [
		'url'  => "https://www.instagram.com/?{$url}",
		'icon' => 'fab fa-instagram'
	];
	return $social_icon;
});</pre>

	</section>

	<div class="section-layout-customizer">
        <section id="section-layout-section">
            <h3>12.8 Layout Settings</h3>
            <p>To configure page layouts, navigate to <strong>Appearance &gt; Customize &gt; Layout Settings</strong>. This section includes the following layout options:</p>
            <ul>
                <li><b>Blog Layout:</b> Choose the layout for blog archive pages, such as grid, list, or masonry.</li>
                <li><b>Single Post Layout:</b> Set the layout for individual blog posts, including sidebar position and content width.</li>
                <li><b>Pages Layout:</b> Define the layout for standard pages on your site.</li>
                <li><b>Error Layout:</b> Customize the layout for error pages, like 404 pages.</li>
                <li><b>Listing Archive Layout:</b> Configure the layout for listing archive pages (directory/listing plugin pages).</li>
                <li><b>Listing Single Layout:</b> Set the layout for individual listing/detail pages.</li>
                <li><b>Additional Layouts:</b> Depending on your theme, other layout sections may include shop, portfolio, or custom post type layouts.</li>
            </ul>
        </section>

		<section id="section-customizer-12-8-1">
			<h4>12.8.1 Blog Layout</h4>
			<p>To change Blog Layout navigate to <strong>Appearance > Customize > Layout Settings > Blog Layout.</strong></p>
			<img src="assets/images/doc/11.5.2.png" alt="Blog Layout" class="doc-image">
		</section>

		<section id="section-customizer-12-8-2">
			<h4>12.8.2 Single Post Layout</h4>
			<p>To change Blog Single Layout navigate to <strong>Appearance > Customize > Layout Settings > Single Post Layout.</strong></p>
			<img src="assets/images/doc/11.5.3.png" alt="Single Post Layout" class="doc-image">
		</section>

		<section id="section-customizer-12-8-3">
			<h4>12.8.3 Page Layout</h4>
			<p>To change Page Layout navigate to <strong>Appearance > Customize > Layout Settings > Pages Layout.</strong></p>
			<img src="assets/images/doc/11.5.1.png" alt="Page Layout" class="doc-image">
		</section>

		<section id="section-customizer-12-8-4">
			<h4>12.8.4 Error Layout</h4>
			<p>To change Error Layout navigate to <strong>Appearance > Customize > Layout Settings > Error Layout</strong></p>
			<img src="assets/images/doc/6-error-layout.jpg" alt="Error Layout" class="doc-image">
		</section>

		<section id="section-customizer-12-8-5">
			<h4>12.8.5 Listing Archive Layout</h4>
			<p>To change Listing Archive Layout navigate to <strong>Appearance > Customize > Layout Settings > Listing Archive Layout.</strong></p>
			<img src="assets/images/doc/11.5.4.png" alt="Listing Archive Layout" class="doc-image">
		</section>

		<section id="section-customizer-12-8-6">
			<h4>12.8.6 Listing Single Layout</h4>
			<p>To change Listing Single Layout navigate to <strong>Appearance > Customize > Layout Settings > Listing Single Layout.</strong></p>
			<img src="assets/images/doc/11.5.5.png" alt="Listing Single Layout" class="doc-image">
		</section>

		<section id="section-customizer-12-8-7">
			<h4>12.8.7 Agent Archive Layout</h4>
			<p>To change Agent Archive Layout navigate to <strong>Appearance > Customize > Layout Settings > Agent Archive Layout.</strong></p>
			<img src="assets/images/doc/7-agent-archive-customizer.jpg" alt="Agent Archive Layout" class="doc-image">
		</section>

		<section id="section-customizer-12-8-8">
			<h4>12.8.8 Agent Single Layout</h4>
			<p>To change Agent Single Layout navigate to <strong>Appearance > Customize > Layout Settings > Agent Single Layout.</strong></p>
			<img src="assets/images/doc/8-agent-single-customizer.jpg" alt="Agent Single Layout" class="doc-image">
		</section>

		<section id="section-customizer-12-8-9">
			<h4>12.8.9 Store Archive Layout</h4>
			<p>To change Store Archive Layout navigate to <strong>Appearance > Customize > Layout Settings > Store Archive Layout.</strong></p>
			<img src="assets/images/doc/9-store-archive-customizer.jpg" alt="Store Archive Layout" class="doc-image">
		</section>
	</div>


	<section id="section-color-customizer">
		<h4>12.9 Color</h4>
		<p>To change all color navigate to <strong>Dashboard > Appearance > Customize > Color.</strong>
			There are 4 color section. 1) Site Color, 2) Header Color, 3) Breadcrumb Color, and 4) Footer Color </p>
		<img src="assets/images/doc/12-all-color-sec.jpg" alt="Color Settings" class="doc-image">
	</section>

	<section id="section-listing-global-customizer">
		<h4>12.10 Listing Settings - Global</h4>
		<p>To change all listing settings navigate to <strong>Dashboard > Appearance > Customize > Color.</strong>
			There are a lot of settings here about listing globally<br>
		</p>
		<ol>
			<li id="section-listing-global-customizer-1"><strong>Property Details Layout:</strong> Change the propery layout style.</li>

			<li id="section-listing-price-shorthand"><strong style="color:red;">Listing Price Style (Price Shorthand):</strong>
				If you would like to change the main price to the shorthand price globally then you can do it from here.
				There are two shorthand form for the price here. One is (K, M, B, T) and another is (K, Lac, Cr) etc.
				<br>But if you need, then you can change the price individually from listing meta. Please check screenshots from below for more details.
				<br>
				<br>
				<br>
				<p><strong>First choose Price Style from customizer:</strong></p>
				<img src="assets/images/doc/listing-priice-shorthand1.jpg" alt="isting Price Style">
				<p><strong>Then, if you need you can overwrite the price shorthand from each listing meta:</strong></p>
				<img src="assets/images/doc/listing-priice-shorthand2.jpg" alt="isting Price Style">
				<br>
				<p>If you need to change the shorthand label then you can use the below filters to change. Just copy the code and pest in the functions.php of the child theme. If you have no child theme activated then you can simply use the <a href="//wordpress.org/plugins/code-snippets/">Code Snippet</a> plugin for embed the php code.</p>
				<p><strong>Change K, M, B, T, Qa, Qi label: </strong>If you need a space between price and label then you can use a blank space before label. Ex: ' K', ' M'.</p>
				<pre>
add_filter( 'listpress_shorthand_price_label', function () {
    return [
        'thousand' => 'K',
        'million' => 'M',
        'billion' => 'B',
        'trillion' => 'T',
        'quadrillion' => 'Qa',
        'quintillion' => 'Qi',
    ];
} );
</pre>
				<p><strong>Change K, Lac, Lacs, Cr, Crs label: </strong>If you need a space between price and label then you can use a blank space before label. Ex: ' K', ' Lac', ' Cr'.</p>
				<pre>
add_filter( 'listpress_shorthand_price_label_2', function () {
    return [
        'hundred'   => '',
        'thousand'  => 'K',
        'thousands' => 'K',
        'lac'       => ' Lac',
        'lacs'      => ' Lacs',
        'crore'     => ' Cr',
        'crores'    => ' Crs',
    ];
} );
</pre>
			</li>

			<li><strong>Price precision:</strong> Enter price precision. Default is 3. This field will work if you choose shorthand price from above. This field indicates how many numbers will show after the dot (.) for shorthand price. Ex: 50.125K to 50.1M</li>
			<li><strong>Listing Sidebar Visibility:</strong> You may show or hide sidebar from listing details page</li>
			<li><strong>WalkScore Visibility:</strong> You may show or hide WalkScore Visibility from listing details page</li>
			<li><strong>WalkScore Title:</strong> You may change WalkScore title from here</li>
			<li><strong>WalkScore API Key:</strong> Enter WalkScore API Key here</li>
			<li><strong>Overview Visibility:</strong> You may show or hide this sectioin from listing details page</li>
			<li><strong>Overview text:</strong> Change Overview label text from here.</li>
			<li><strong>Details Visibility:</strong> Hide or Show Property details from listing details page from here</li>
			<li><strong>Details text:</strong> You can change listing details label text from here.</li>
			<li><strong>Features & Amenities Visibility:</strong> You may show/hide this section from here for the listing details page.</li>
			<li><strong>Features & Amenities text:</strong> Change Features & Amenities text from here</li>
			<li><strong>Remove Listing Type Prefix:</strong> If you need to hide the listing prefix (For) then check the button</li>
			<li><strong>Listing type prefix text:</strong> If you need then you can change Listing type prefix (For) from here.</li>
			<li><strong>Show Floating Side Menu:</strong> You may hide floating side menu from listing details page from here.</li>
			<li><strong>Show Button Area:</strong> There are some action button on all listing details page. If you need you can hide these buttons from here.</li>
			<li><strong>Show Related Listing:</strong> There are some related listing on each listing single page. If you need then you can hide this section by checking this button.</li>
			<li><strong>Show Listing Custom Field:</strong> Show or hide listing custom fields from listing archive page from here.
			</li>
			<li><strong>Select Owner/Store info:</strong> There are a contact form on the right sidebar of each listing details page. You may easily change the contact form information to listing owner or store.</li>
			<li><strong>Listing min/max price for search widget:</strong> You can change listing minimum / maximum price from here for the listing search widget price range slider. (</li>
			<li><strong>Listing Excerpt Limit:</strong> If you need you can limit listing excerpt from here.</li>
		</ol>
		<img src="assets/images/doc/12-10-listing-g-settings.jpg" alt="Color Settings" class="doc-image">
	</section>


	<section id="section-12-6-2">
		<h4>12.11 Contact & Social</h4>
		<p>To change contact information navigate to <strong>Dashboard > Appearance > Customize > Contact & Social.</strong></p>
		<img src="assets/images/doc/11.8.2.png" alt="Contact and Social Settings" class="doc-image">
	</section>

	<section id="section-newsletter-section">
		<h4>12.12 Newsletter Section</h4>
		<p>To enable Newsletter Section navigate to <strong>Dashboard > Appearance > Customize > Newsletter Section</strong></p>
	</section>

	<section id="section-error-section">
		<h4>12.13 Error Page</h4>
		<p>To change Error Page settings navigate to <strong>Dashboard > Appearance > Customize > Error Page</strong></p>
		<img src="assets/images/doc/12-13-error-page.jpg" alt="Error Page" class="doc-image">
	</section>



    <section id="section-12-3">
        <h3>12.4 Footer Settings</h3>
        <p>To change Footer Copyright Options navigate to <strong>Appearance > Customize >
                Footer.</strong></p>
    </section>

</div>