<?php
function listpress_image_print( $folder_name, $image_name, $format = 'webp' ) {
	$folder_name = $folder_name ? $folder_name . '/' : null;
	$image_path  = $folder_name . $image_name . '.' . $format;
	?>
    <div class="image-wrapper">
        <a href="assets/images/doc/<?php echo $image_path ?>" class="popup-image">
            <img src="assets/images/doc/<?php echo $image_path ?>" alt="<?php echo $image_name; ?>" class="doc-image">
        </a>
    </div>
	<?php
}