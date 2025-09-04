<?php
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/header.php";
?>


<div class="main-content-wrapper">
    <div class="container">
        <div class="main-content p-t-40">

			<?php require_once __DIR__ . "/template/nav.php"; ?>

            <main class="main">
                <div class="filterable-wrapper">

                    <!-- 1. Introduction -->
                    <div class="section-wrapper">

                        <section id="section-1">
                            <h3 class="mt-0">1. Introduction</h3>
                            <h4 class="title">Listpress WordPress Theme Documentation</h4>
                            <div class="top-support">For support, please feel free to contact us at <a
                                        href="mailto:support@radiustheme.com">support@radiustheme.com</a>. We provide up to 15 hours of real-time assistance for our customers.
                            </div>
                            <p>Thank you for choosing the <strong>Listpress</strong> WordPress theme.</p>
                        </section>

                        <section id="section-1-1">
                            <h4>1.1. Requirements</h4>
                            <p>This theme requires WordPress version 5.4.2 or higher. For the best performance and security, we strongly recommend using the latest stable release of WordPress to ensure all known issues and vulnerabilities are addressed. Additional requirements include:</p>
                            <ul>
                                <li>PHP version 5.6 or higher. For optimal performance, we recommend using PHP version 7.4 or above.</li>
                                <li>MySQL version 5.6 or higher, or MariaDB version 10.0 or higher.</li>
                                <li>A WordPress memory limit of at least 128 MB.</li>
                            </ul>
                            <p><b>Server Requirements</b>:
                                <a target="_blank" href="https://make.wordpress.org/hosting/handbook/handbook/server-environment">
                                    https://make.wordpress.org/hosting/handbook/handbook/server-environment
                                </a>
                            </p>
                        </section>

                        <section id="section-1-2">
                            <h4>1.2. What's Included</h4>
                            <p>After downloading the Listpress theme, you will receive a complete package that includes the following files:</p>
                            <ul>
                                <li><strong>Listpress Theme:</strong> An installable WordPress theme ZIP file.</li>
                                <li><strong>Listpress Child Theme:</strong> A child theme ZIP file along with a readme.txt containing details about the child theme.</li>
                                <li><strong>Documentation:</strong> A link to this user guide.</li>
                            </ul>
                        </section>
                    </div>

                    <!-- WordPress Installation -->
                    <div class="section-wrapper">
                        <section id="section-2">
                            <h3>2. WordPress Installation</h3>
                            <p>Please follow the video instructions below to learn how to install WordPress on your hosting environment:</p>
                            <ol>
                                <li>For local host: <a
                                            href="https://www.youtube.com/watch?v=snFzbPm_RUE" target="_blank">https://www.youtube.com/watch?v=snFzbPm_RUE</a>
                                </li>
                                <li>For cPanel: <a
                                            href="https://www.youtube.com/watch?v=t-YBqV2ReR0" target="_blank">https://www.youtube.com/watch?v=t-YBqV2ReR0</a>
                                </li>
                            </ol>
                        </section>
                    </div>

                    <!-- Upload and Activate Theme -->
                    <div class="section-wrapper">

                        <section id="section-3">
                            <h3>3. Upload and Activate Theme</h3>
                            <p>Before installing the theme, you need to upload the theme files and then activate the theme. There are two ways to upload the theme files:</p>
                            <ul>
                                <li><a class="nav-link" href="#section-3-1"><strong>Using Theme Uploader</strong></a></li>
                                <li><a class="nav-link" href="#section-3-2"><strong>Using FTP Clients</strong></a></li>
                            </ul>
                        </section>

                        <section id="section-3-1">
                            <h4>3.1. Using Theme Uploader</h4>
                            <p>Next, install and activate the following pre-packaged plugins:</p>
                            <ol class="plugins">
                                <li><strong>Classified Listing Free:</strong> <span>Required. This plugin must be installed.</span></li>
                                <li><strong>Classified Listing Pro:</strong> <span>Required. This plugin must be installed.</span></li>
                                <li><strong>Classified Listing Store:</strong> <span>Optional. Install only if you need store functionality.</span></li>
                                <li><strong>Classified Listing Toolkits:</strong> <span>Required. Install only if you need store functionality.</span></li>
                                <li><strong>Listpress Core:</strong> <span>Required. This plugin must be installed.</span></li>
                                <li><strong>Elementor Website Builder:</strong> <span>Required. This is the page builder plugin.</span></li>
                                <li><strong>One Click Demo Import:</strong> <span>Required if you wish to import demo content. You may deactivate it after the import is complete.</span></li>
                                <li><strong>WP Fluent Forms:</strong> <span>Optional. Install if you want to use contact forms.</span></li>
                            </ol>
                            <p><b>Note:</b> All required plugins must be installed and activated for your site to match the demo exactly.</p>
                            <p>Follow the steps as illustrated in the images below:</p>
							<?php
							listpress_image_print( '3', '3.1.1' );
							listpress_image_print( '3', '3.1.2' );
							listpress_image_print( '3', '3.1.3' );
							listpress_image_print( '3', '3.1.4' );
							listpress_image_print( '3', '3.1.5' );
							?>
                        </section>
                        <!-- End of #section-3-1 -->

                        <section id="section-3-2">
                            <h4>3.2. Using FTP Clients</h4>
                            <p>Follow these steps to upload your theme using an FTP client:</p>
                            <ol>
                                <li>Open an FTP client (e.g., FileZilla) and connect to your WordPress installation directory.</li>
                                <li>Navigate to the <code>/wp-content/themes/</code> folder and upload the theme folder.</li>
                                <li>Log in to your WordPress Admin Dashboard and go to the <strong>Appearance &gt; Themes</strong> section.</li>
                                <li>The <strong>Listpress</strong> theme will appear in the list of available themes. Click <em>Activate</em> to enable it.</li>
                            </ol>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section id="ImportingDemoContents">
                            <h3>4. Importing Demo Contents</h3>

                            <h4>One Click Demo Import:</h4>

                            <p>We use the <b>One Click Demo Import</b> plugin to import demo content. Please follow the steps below to complete the import process:</p>
                            <ol>
                                <li>Install and activate the <b>One Click Demo Import</b> plugin. This plugin is already recommended within the theme package. If you haven’t installed it yet, you can download it here:
                                    <a target="_blank" href="https://wordpress.org/plugins/one-click-demo-import/">https://wordpress.org/plugins/one-click-demo-import/</a>
                                </li>
                                <li>Go to <strong>Appearance &gt; Import Demo Data</strong>. You will see all the available demos on this page. Hover over your preferred demo and click the <em>Import Demo</em> button.</li>
                                <li>Next, click the <b>Continue &amp; Import</b> button. The import process will then begin, so please do not close the window until it has been fully completed.</li>
                            </ol>
                            <p>Here are a screenshots for further reference:</p>
							<?php listpress_image_print( '4', '4.1' ); ?>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section id="setHomeBlogPage">
                            <h3>5. Set Home and Blog Page</h3>
                            <p class="notice"><strong>Note:</strong> If you have already imported the demo content, you can skip this section because the homepage and blog page are pre-selected in the demo. However, if you wish to change them, please follow the steps below.</p>
                            <p>To set the default Home and Blog pages, log in to your WordPress Admin Dashboard and navigate to
                                <strong>Dashboard &gt; Settings &gt; Reading</strong>.
                            </p>
                            <ol>
                                <li>Under the <b>Your homepage displays</b> option, select <b>A static page</b>.</li>
                                <li>From the <b>Homepage</b> dropdown, choose the page you want to set as your Home page.</li>
                                <li>From the <b>Posts page</b> dropdown, choose the page you want to display your Blog posts.</li>
                                <li>Click <b>Save Changes</b> to apply the settings.</li>
                            </ol>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section id="directory-listing-setup">
                            <h3>6. Directory / Listing Setup</h3>
                            <p>We use the <strong>Classified Listing Pro</strong> plugin to manage directory and listing functionalities, and the <strong>Classified Listing Store</strong> plugin to handle membership features. For detailed guidance, please refer to the official plugin documentation and tutorials.</p>

                            <b>Documentation link:</b>
                            <a target="_blank" href="https://www.radiustheme.com/docs/classified-listing/">https://www.radiustheme.com/docs/classified-listing/</a>

                            <p><b>Video tutorial:</b></p>
                            <p>
                                <iframe
                                        width="100%"
                                        height="460"
                                        src="https://www.youtube.com/embed/videoseries?list=PLSR3AlpVWfs6JQ34hPfIyyPkqyaHPPZwf&index=1"
                                        title="YouTube playlist"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                </iframe>
                            </p>
                            <a target="_blank" href="https://www.youtube.com/playlist?list=PLSR3AlpVWfs6JQ34hPfIyyPkqyaHPPZwf">Watch the Full Playlist on YouTube</a>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section id="customizeMenu">
                            <h3>7. Customize Menu</h3>
                            <p>To customize the menu, navigate to <strong>Appearance &gt; Menus</strong> and follow these steps:</p>
                            <ol>
                                <li>Create two menus: a <strong>Primary Menu</strong> and a <strong>Topbar Menu</strong>.</li>
                                <li>Add your desired menu items to each menu.</li>
                                <li>Scroll down to the <strong>Menu Settings</strong> section and assign the menus accordingly:
                                    <ul>
                                        <li>Select the <strong>Primary Menu</strong> as the <strong>Primary</strong> menu.</li>
                                        <li>Select the <strong>Topbar Menu</strong> as the <strong>Topbar</strong> menu.</li>
                                    </ul>
                                </li>
                            </ol>
                        </section>

                        <section id="section-7-1">
                            <h4>7.1 Mega Menu / Multi-Column Menu</h4>

                            <ol>
                                <li>Collapse a parent menu item and select the <b>Mega Menu</b> option from the <b>Make as Mega Menu</b> dropdown.</li>
                                <li>Create several child menu items under the parent menu, depending on the number of columns you want. For example, to create 4 columns, add 4 child menu items under the parent menu.</li>
                                <li>Add additional menu items under each second-level (child) menu item as needed.</li>
                            </ol>

                            <p>The Mega Menu structure will appear as follows:</p>
                            <ul>
                                <li>
                                    Mega Menu
                                    <ul>
                                        <li>1. Column 1
                                            <ul>
                                                <li>1. Menu item</li>
                                                <li>2. Menu item</li>
                                                <li>3. Menu item</li>
                                            </ul>
                                        </li>
                                        <li>2. Column 2
                                            <ul>
                                                <li>1. Menu item</li>
                                                <li>2. Menu item</li>
                                                <li>3. Menu item</li>
                                            </ul>
                                        </li>
                                        <li>3. Column 3
                                            <ul>
                                                <li>1. Menu item</li>
                                                <li>2. Menu item</li>
                                                <li>3. Menu item</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <p>Here are a screenshots for further reference:</p>
							<?php listpress_image_print( '7', '7.1' ); ?>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section id="cngSiteTitleFavicon">
                            <h3>8. Change Site Title and Favicon</h3>
                            <p>To update your site title and favicon, navigate to
                                <strong>Dashboard &gt; Appearance &gt; Customize &gt; Site Identity</strong>. Then, follow these steps:</p>
                            <ol>
                                <li>In the <b>Site Title</b> field, enter your desired site name.</li>
                                <li>In the <b>Tagline</b> field, enter a short description or slogan for your site (optional).</li>
                                <li>To change the favicon (site icon), click <b>Select site icon</b> and upload your preferred image. The recommended size is 512x512 pixels.</li>
                                <li>Click <b>Publish</b> to save your changes.</li>
                            </ol>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section id="chgGlobalColor">
                            <h3>9. Site Colors Settings</h3>
                            <p>To update the global colors of your site, navigate to <strong>Dashboard &gt; Appearance &gt; Customize &gt; Colors</strong>. You will find several color groups, such as <b>Site Color</b>, <b>Top Bar Color</b>, <b>Header Colors</b>, and more. Select your desired colors from these options to customize the appearance of your website.</p>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section id="logoSettings">
                            <h3>10. Logo Settings</h3>
                            <p>To update the site logo, navigate to <strong>Dashboard &gt; Appearance &gt; Customize &gt; Site Identity</strong>. We have added additional fields for logo customization:</p>
                            <ol>
                                <li>Upload the <b>Main Logo</b>, which should be the darker version of your logo.</li>
                                <li>Optionally, upload a <b>Light Logo</b> and a <b>Mobile Logo</b> for specific use cases.</li>
                                <li>If you prefer to use the same logo across the site, you only need to upload the Main Logo.</li>
                                <li>You can also adjust the logo size manually using the <b>Main Logo Dimension</b> textbox.</li>
                            </ol>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section id="typographySettings">
                            <h3>11. Typography Settings</h3>
                            <p>To customize the typography of your site, navigate to <strong>Dashboard &gt; Appearance &gt; Customize &gt; Typography</strong>. You will find typography settings grouped by <b>Body</b>, <b>Headings</b>, and <b>Menu</b> for easier management.</p>
                        </section>
                    </div>

					<?php require_once __DIR__ . '/template/customize.php'; ?>

                    <div class="section-wrapper">
                        <section class="image-no-100" id="elementorWidgets">
                            <h3>13. Elementor Widgets</h3>
                            <p>
                            <p>
                                Elementor Page Builder comes with many built-in widgets by default.
                                For added convenience, we have created several custom Elementor Widgets to extend your website's functionality.
                                You can find them under the <strong><i>RadiusTheme Elements</i></strong> section in Elementor edit mode.
                            </p>
                            <p>
                                Additionally, we have integrated the <strong>Classified Listing Toolkits</strong> to provide Elementor widgets specifically for listing and directory functionality.
                            </p>
							<?php listpress_image_print( '13', '13' ); ?>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section class="image-no-100" id="contactForm">
                            <h3>14. Contact Form</h3>
                            <p>We are using plugin <b>WP Fluent Forms</b> for contact functionality. You can see their <a
                                        href="https://wpmanageninja.com/docs/fluent-form/" title="Fluent Form Documentation"
                                        target="_blank">documentation</a> for better understanding.</p>
                            <p>If you don't want to go through all the troubles to check their documentation and just want
                                to use the default contact form we provided with this theme, <b>please at least set up the
                                    default emails in contact form settings.</b> To do that, please follow the steps below:
                            </p>
                            <p class="mt30"><b><u>Step 1:</u></b> Navigate to <b>Fluent Forms</b> Menu, then click on any
                                contact form settings and go to <b>Email Notification</b> tab. Then click on <strong>Add
                                    Notification</strong> button.</p>
                            <img src="assets/images/doc/e12.jpg" alt="Notification Image">
                            <img src="assets/images/doc/e12.1.jpg" alt="Notification Image">
                            <p class="mt30"><b><u>Step 2:</u></b> Here you should set your own email address where you want
                                to get notification user submitted forms. You can also check this <a
                                        href="https://wpmanageninja.com/docs/fluent-form/how-to-use-wp-fluent-form/email-notification/"
                                        target="_blank">link</a></p>
                            <img src="assets/images/doc/e12.2.jpg" alt="Notification Image">
                            <p class="mt30"><b><u>Step 3:</u></b> Please submit some dummy forms from Contact page to make
                                sure that it's working properly.</p>
                        </section>

                    </div>

                    <div class="section-wrapper">
                        <section class="image-no-100" id="builtinCSSClasses">
                            <h3>15. Built-in CSS Classes (Advanced)</h3>
                            <p>You can use the following built-in CSS classes as needed:</p>
                            <ul class="special-list">
                                <li><strong>.primary-color</strong>: Apply the primary color.</li>
                                <li><strong>.secondery-color</strong>: Apply the secondary color.</li>
                                <li><strong>.bg-primary</strong>: Set the background to the primary color.</li>
                                <li><strong>.bg-secondery</strong>: Set the background to the secondary color.</li>
                                <li><strong>.site-radius</strong>: Applies a site-wide 12px border radius.</li>
                                <li><strong>.btn-radius</strong>: Applies a 5px border radius to buttons.</li>
                                <li><strong>.pointer-events-none</strong>: Disables pointer events for the element.</li>
                                <li><strong>.height-100</strong>: Sets the height to 100% (useful for images in Elementor).</li>
                                <li><strong>.center-center</strong>: Centers the item within its Elementor container.</li>
                                <li><strong>.mobile-hide</strong>: Hides the element on mobile devices.</li>
                                <li><strong>.listpress-negative-150</strong>: Applies a negative margin of 150px left and right (values like 200, 300px also work; effective only on screens wider than 1400px).</li>
                            </ul>
                        </section>
                    </div>
                    <div class="section-wrapper">

                        <section id="translatingTheme">
                            <h3>16. Translating Theme</h3>
                            <p>
                                You can translate this theme into another language easily. To ensure your website functions properly, translate the following components:
                            </p>
                            <ul style="font-weight:bold;">
                                <li>Theme: Listpress</li>
                                <li>Plugin: Listpress Core</li>
                                <li>Plugin: Classified Listing Pro</li>
                                <li>Plugin: Classified Listing Store</li>
                            </ul>
                            <p>
                                There are many tools available for translation, but the easiest way is to use the <strong>Loco Translate</strong> plugin.
                                This plugin allows you to translate any WordPress theme or plugin that supports translation.
                            </p>
                            <p>Here's a quick video tutorial on how to use <strong>Loco Translate</strong>:</p>
                            <p>
                                <iframe width="100%" height="460" src="https://www.youtube.com/embed/3Fohy96uSzY" allowfullscreen></iframe>
                            </p>

                            Plugin Link: <a href="https://wordpress.org/plugins/loco-translate/">https://wordpress.org/plugins/loco-translate/</a>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section id="updateTheme">
                            <h3>17. Updating Theme</h3>
                            <p>Occationally we provide updates which includes new features and bugfixes. Updating WordPress
                                theme is standard WordPress functionality.</p>
                            <p class="mt30" style="color:red;"><b><u>Before Updating Theme</u></b>:</p>
                            <div style="color:red;"><i><b>** Before updating please make sure to keep a backup of your
                                        installed theme and plugins (eg. Listpress Core) to be on safe side.</b></i></div>
                            <p>You can use this plugin to keep the backup: <a target="_blank" href="https://wordpress.org/plugins/download-plugins-dashboard/">https://wordpress.org/plugins/wp-theme-plugin-download/</a>
                            </p>
                            <p class="mt30">There are few ways to update WordPress theme. You can follow any of the methods
                                described below:</p>
                            <p><b><u>Method 1: Automatic Update by Using Envato Market Plugin</u></b></p>
                            <ol>
                                <li>Install and activate the "Envato Market" plugin manually. Here's the plugin zip file:
                                    <a target="_blank"
                                       href="https://www.envato.com/lp/market-plugin/">https://www.envato.com/lp/market-plugin/</a>
                                </li>
                                <li>From WordPress Admin Panel, navigate to <b>"Envato Market"</b> menu.</li>
                                <li>In this page, you'll find a field for insering Envato Token. Insert your Envato Token
                                    Code from there. You can generate this code from this link: <a target="_blank"
                                                                                                   href="https://build.envato.com/create-token/?purchase:download=t&purchase:verify=t&purchase:list=t">https://build.envato.com/create-token/?purchase:download=t&purchase:verify=t&purchase:list=t</a>.<br><i>Remember,
                                        while generating the token, you have to login using the same envato id which you
                                        used to purchase theme.</i></li>
                                <li>After completed the above steps successfully, Navigate to <b>Appearance -> Themes</b>.
                                    Here you'll see an "Update now" link beside your theme. Click on that link and your
                                    theme will be updated automatically.
                                </li>
                            </ol>
                            <p>Here's a quick video tutorial explaining this method:</p>
                            <p>
                                <iframe width="100%" height="460" src="https://www.youtube.com/embed/fhRFhXnuP1I" allowfullscreen></iframe>
                            </p>
                            <p class="mt30"><strong><u>Method 2: By Uploading ZIP File</u></strong></p>
                            <ol>
                                <li>From the WordPress Admin Panel, navigate to <strong>Appearance &gt; Themes</strong>.</li>
                                <li>Click the <strong>Add Theme</strong> button at the top of the page, then select <strong>Upload Theme</strong>.</li>
                                <li>Upload the Listpress update ZIP file and install it.</li>
                                <li>
                                    Once the installation is complete, you may see the message
                                    <em>"Destination folder already exists"</em>.
                                    Click <strong>"Replace installed with uploaded"</strong> to update the current theme with the new version.
                                </li>
                            </ol>

                            <p><b><u>Method 3: By FTP</u></b></p>
                            <ol>
                                <li>Using your FTP client, navigate to "/wp-content/themes/" folder on your server and
                                    delete the "listpress" folder from there.
                                </li>
                                <li>Now upload the latest non-zipped theme folder into that "/wp-content/themes/" folder .
                                </li>
                            </ol>
                            <p class="mt30" style="color:red;"><b><u>After Updating Theme</u></b>:</p>
                            <p style="color:red;"><i><b>** After updating the theme please update all plugins which come
                                        with the theme.</b></i></p>
                            <p><img src="assets/images/doc/section-15.jpg" alt="update plugin"></p>
                        </section>

                    </div>
                    <div class="section-wrapper">
                        <section id="demoContentInstall">
                            <h3>18. Demo Content installation failed</h3>
                            <p>This is a hosting issue. In most hostings demo installation will work fine. But some hostings
                                block certain permissions which may cause this issue. If this happens to you, you can
                                contact your hosting provider or alternatively send a support request to
                                support@radiustheme.com and we will help you to fix this.</p>
                        </section>
                    </div>

                    <div class="section-wrapper">
                        <section id="error404">
                            <h3>19. 404 Error in all pages</h3>
                            <p>If you face this type of issue, please update your permalink. To update permalink, navigate
                                to <b>Settings -> Permalink</b> and then click on <b>Save Settings</b> button.</p>
                            <img src="assets/images/doc/19.1.jpg" alt="set permalink">
                        </section>

                    </div>
                    <div class="section-wrapper">
                        <section id="contactUs">
                            <h3>20. Contact</h3>
                            <p style="color:red;font-weight:bold;">If you face any issue please contact us at
                                <a href="mailto:support@radiustheme.com">support@radiustheme.com</a>. We provide 15 hours
                                real-time support for our customers.</p>
                            <p>Thank you for purchasing our theme.</p>
                            <p class="mt50"></p>
                        </section>

                    </div>

                    <div class="section-wrapper">

                        <section id="purchaseCode">
                            <h3>21 Where is My Purchase Code?</h3>
                            <p>To learn about how to find your purchase code. When you buy a product from envato you get a
                                purchase code. visit the following link:</p>
                            <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Can-I-Find-my-Purchase-Code"
                               target="_blank">https://help.market.envato.com/hc/en-us/articles/202822600-Where-Can-I-Find-my-Purchase-Code</a>
                        </section>
                    </div>
                </div>
                <!-- End of .filterable-wrapper -->
            </main>
        </div>
        <!-- End of .main-content -->
    </div>
    <!-- End of .container -->
</div>
<!-- End of .main-content -->

<?php require_once __DIR__ . "/footer.php"; ?>
