<div class="section-wrapper">

    <h3 id="customizerOptions">12. Customizer Options</h3>

    <section id="section-12-1">
        <h4>12.1 Site Identity</h4>
        <p>
            To update the site logo, navigate to
            <strong>Dashboard &gt; Appearance &gt; Customize &gt; Site Identity</strong>.
            Additional fields are available for logo customization:
        </p>

        <strong>Available Options:</strong>
        <ul>
            <li>Main Logo</li>
            <li>Light Logo</li>
            <li>Mobile Logo</li>
            <li>Logo Dimensions</li>
            <li>Favicon</li>
        </ul>
    </section>

    <section id="section-12-2">
        <h4>12.2 General Settings</h4>
        <p>
            To modify General Settings, navigate to
            <strong>Appearance &gt; Customize &gt; General</strong>.
        </p>

        <strong>Available Options:</strong>
        <ul>
            <li>Container Width</li>
            <li>Enable SVG Upload</li>
            <li>Back to Top</li>
            <li>Remove Admin Bar</li>
            <li>Disable Image Srcset</li>
            <li>Preloader</li>
            <li>Full Site Image Blend</li>
            <li>Site Radius</li>
            <li>Button Radius</li>
        </ul>
    </section>


    <section id="section-12-3">
        <h4>12.3 Header Settings</h4>
        <p>
            To customize the header options, navigate to
            <strong>Appearance &gt; Customize &gt; Header</strong>.
        </p>

        <strong>Available Options:</strong>
        <ul>
            <li>Main Menu Section</li>
            <li>Topbar Section</li>
            <li>Nav Drawer Section</li>
        </ul>
    </section>


    <section id="section-breadcrumb">
        <h4>12.4 Banner - Breadcrumb</h4>
        <p>
            To customize the breadcrumb settings, navigate to
            <strong>Appearance &gt; Customize &gt; Breadcrumb</strong>.
        </p>

        <strong>Available Options:</strong>
        <ul>
            <li>Banner Image</li>
            <li>Banner Height</li>
            <li>Title</li>
            <li>Breadcrumb</li>
        </ul>
    </section>

    <section id="section-typography">

        <h4>12.5 Typography Settings</h4>
        <p>
            To customize the typography of your site, navigate to
            <strong>Dashboard &gt; Appearance &gt; Customize &gt; Typography</strong>.
        </p>

        <strong>Available Typography:</strong>
        <ul>
            <li>Body</li>
            <li>Headings</li>
            <li>Menu</li>
        </ul>
    </section>

    <section id="section-contact-social">
        <h4>12.6 Contact & Social</h4>
        <p>
            To update your contact and social details, navigate to
            <strong>Dashboard &gt; Appearance &gt; Customize &gt; Contact & Social</strong>.
        </p>

        <strong>Contact Information:</strong>
        <ul>
            <li>Phone</li>
            <li>Email</li>
            <li>Website</li>
            <li>Address</li>
            <li>About Us content</li>
        </ul>

        <strong>Social Information:</strong>
        <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>LinkedIn</li>
            <li>YouTube</li>
            <li>Pinterest</li>
            <li>Instagram</li>
            <li>Skype</li>
            <li>TikTok</li>
        </ul>
    </section>

    <section id="section-color-customizer">
        <h4>12.7 Site Colors Settings</h4>
        <p>
            To update the global colors of your site, navigate to
            <strong>Dashboard &gt; Appearance &gt; Customize &gt; Colors</strong>.
        </p>

        <strong>Available Options:</strong>
        <ul>
            <li>Site Color</li>
            <li>Top Bar Color</li>
            <li>Header Colors</li>
            <li>Banner Color</li>
            <li>Footer Color</li>
        </ul>
    </section>


    <section id="section-blog-archive">
        <h4>12.8 Blog Settings</h4>
        <p>
            To configure blog archive settings, navigate to
            <strong>Appearance &gt; Customize &gt; Blog Settings</strong>.
        </p>

        <strong>Available Options:</strong>
        <ul>
            <li>Meta Settings</li>
            <li>Title Above Meta</li>
            <li>Read More</li>
            <li>Multiple Category Colors</li>
            <li>Blog Style</li>
            <li>Grid Columns</li>
            <li>Content Limit</li>
            <li>Pagination</li>
            <li>Masonry</li>
            <li>Choose Meta</li>
        </ul>
    </section>

    <section id="section-blog-details">
        <h4>12.9 Blog Details Settings</h4>
        <p>
            To customize the blog post details page, navigate to
            <strong>Appearance &gt; Customize &gt; Post Details Settings</strong>.
        </p>

        <strong>Available Options:</strong>
        <ul>
            <li>Meta Style</li>
            <li>Banner Title</li>
            <li>Meta, Tags, Share Icon, Author Profile, Caption, Post Navigation Visibility</li>
            <li>Related Posts</li>
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


    <section id="section-listing-archive">
        <h4>12.10 Listing Settings</h4>
        <p>
            To customize the listing archive page, navigate to
            <strong>Appearance &gt; Customize &gt; Listing Archive</strong>.
        </p>
        <strong>Available Options:</strong>
        <ul>
            <li>Listing Style</li>
            <li>Make Italic</li>
            <li>Enable collapsable sidebar</li>
            <li>Archive container width</li>
            <li>Price Display Format: Price Shorthand. Eg. K, M, B, T, Lac, Cr etc</li>
        </ul>

    </section>

    <section id="section-listing-details">
        <h4>12.11 Listing Details Settings</h4>
        <p>
            To customize the listing details page, navigate to
            <strong>Appearance &gt; Customize &gt; Listing Details</strong>.
        </p>
        <strong>Available Options:</strong>
        <ul>
            <li>Layout</li>
            <li>Listing Gallery Style</li>
            <li>Separate Gallery Video</li>
            <li>Gallery Height</li>
            <li>Enable thumbs gallery</li>
            <li>Slider Columns</li>
        </ul>

    </section>

    <section id="section-layout-section">
        <h4>12.12 Layout Settings</h4>
        <p>
            To configure page layouts, navigate to
            <strong>Appearance &gt; Customize &gt; Layout Settings</strong>.
        </p>

        <strong>Available Options:</strong>
        <ul>
            <li>Page Layout</li>
            <li>Blog Layout</li>
            <li>Single Post Layout</li>
            <li>Error Layout</li>
            <li>Listing Archive Layout</li>
            <li>Listing Single Layout</li>
        </ul>
    </section>


    <section id="section-footer-customize">
        <h4>12.13 Footer Settings</h4>
        <p>
            To configure the footer settings, navigate to
            <strong>Appearance &gt; Customize &gt; Footer</strong>.
        </p>

        <strong>Available Options:</strong>
        <ol>
            <li>Footer Layout</li>
            <li>Footer Width</li>
            <li>Sticky Footer</li>
            <li>Copyright Settings</li>
        </ol>
    </section>

    <section id="section-error-customize">
        <h4>12.14 Error Page</h4>
        <p>
            To customize the Error Page settings, navigate to
            <strong>Dashboard &gt; Appearance &gt; Customize &gt; Error Page</strong>.
        </p>

        <strong>Available Options:</strong>
        <ol>
            <li>Error Image</li>
            <li>Error Text</li>
            <li>Error Button Text</li>
        </ol>
    </section>

</div>