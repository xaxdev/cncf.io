<?php
/**
 * Social Links
 *
 * Pulls in from Global and dipslay inline SVGs with outbound links.
 *
 * @package WordPress
 * @subpackage cncf-theme
 * @since 1.0.0
 */

?>

<ul class="social">
	<?php if ( $social_links && in_array( 'youtubel', $social_links ) ) : ?>
	<li class="youtube"><a target="_blank"
			href="<?php the_field( 'youtube', 36 ); ?>"><svg
				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
				viewBox="0 0 24 24">
				<path
					d="M9.279 13.52h-.939v5.027h-.908v-5.027h-.94v-.854h2.788v.854zm5.395 1.721v2.406c0 .537-.2.954-.736.954-.296 0-.541-.108-.767-.388v.333h-.813v-5.88h.813v1.893c.183-.222.429-.405.718-.405.59 0 .785.499.785 1.087zm-.83.049c0-.146-.027-.257-.086-.333-.098-.129-.279-.143-.42-.071l-.167.132v2.703l.19.153c.132.066.324.071.413-.045.046-.061.069-.161.069-.299v-2.24zm-2.347-5.859c.229 0 .354-.183.354-.431v-2.119c0-.255-.111-.434-.371-.434-.237 0-.353.185-.353.434v2.119c.001.24.137.431.37.431zm-.733 8.07c-.099.123-.317.325-.475.325-.172 0-.215-.118-.215-.292v-3.325h-.805v3.626c0 .88.597.885 1.031.636.16-.092.315-.227.464-.403v.479h.807v-4.338h-.807v3.292zm13.236-12.501v14c0 2.761-2.238 5-5 5h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5zm-10.566 4.427c0 .45.137.813.592.813.256 0 .611-.133.979-.569v.503h.847v-4.554h-.847v3.457c-.104.129-.333.341-.498.341-.182 0-.226-.124-.226-.307v-3.491h-.847v3.807zm-3.177-2.621v2.233c0 .803.419 1.22 1.24 1.22.682 0 1.218-.456 1.218-1.22v-2.233c0-.713-.531-1.224-1.218-1.224-.745 0-1.24.493-1.24 1.224zm-3.155-2.806l1.135 3.67v2.504h.953v-2.504l1.11-3.67h-.969l-.611 2.468-.658-2.468h-.96zm11.564 11.667c-.014-2.978-.232-4.116-2.111-4.245-1.734-.118-7.377-.118-9.109 0-1.876.128-2.098 1.262-2.111 4.245.014 2.978.233 4.117 2.111 4.245 1.732.118 7.375.118 9.109 0 1.877-.129 2.097-1.262 2.111-4.245zm-1.011-.292v1.104h-1.542v.818c0 .325.027.607.352.607.34 0 .36-.229.36-.607v-.301h.83v.326c0 .836-.358 1.342-1.208 1.342-.771 0-1.164-.561-1.164-1.342v-1.947c0-.753.497-1.275 1.225-1.275.773-.001 1.147.491 1.147 1.275zm-.83-.008c0-.293-.062-.508-.353-.508-.299 0-.359.21-.359.508v.439h.712v-.439z" />
			</svg></a></li>
	<?php endif; ?>
	<?php if ( $social_links && in_array( 'twitterl', $social_links ) ) : ?>
	<li class="twitter"><a target="_blank"
			href="<?php the_field( 'twitter', 36 ); ?>"><svg version="1.1"
				id="Layer_1" xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 489.6 397.7"
				enable-background="new 0 0 489.6 397.7" xml:space="preserve">
				<g>
					<g>
						<path fill="currentColor" d="M489.6,47.1c-18,8-37.4,13.4-57.7,15.8c20.7-12.4,36.6-32.1,44.1-55.5c-19.5,11.5-40.9,19.9-63.8,24.4
C393.9,12.2,367.9,0,339,0c-55.5,0-100.4,45-100.4,100.4c0,7.9,0.9,15.5,2.6,22.9c-83.5-4.2-157.5-44.2-207-104.9
c-8.7,14.8-13.6,32.1-13.6,50.5c0,34.8,17.7,65.6,44.7,83.6c-16.5-0.5-31.9-5.1-45.5-12.6v1.3c0,48.6,34.6,89.2,80.6,98.5
c-8.4,2.3-17.3,3.5-26.5,3.5c-6.5,0-12.8-0.6-18.9-1.9c12.8,39.9,49.9,69,93.8,69.8C114.3,337.9,71,353.9,24,353.9
c-8.1,0-16.1-0.5-24-1.4c44.5,28.5,97.2,45.2,154,45.2c184.8,0,285.8-153,285.8-285.7l-0.3-13C459.1,84.9,476.2,67.2,489.6,47.1
L489.6,47.1z M489.6,47.1" />
					</g>
				</g>
			</svg>
		</a></li>
	<?php endif; ?>
	<?php if ( $social_links && in_array( 'facebookl', $social_links ) ) : ?>
	<li class="facebook"><a target="_blank"
			href="<?php the_field( 'facebook', 36 ); ?>"><svg version="1.1"
				id="Layer_1" xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 41.6 76.9" enable-background="new 0 0 41.6 76.9"
				xml:space="preserve">
				<g>
					<g>
						<g>
							<path fill="currentColor"
								d="M40,0L30,0C18.8,0,11.6,7.4,11.6,18.9v8.7h-10c-0.9,0-1.6,0.7-1.6,1.6v12.6c0,0.9,0.7,1.6,1.6,1.6h10
v31.9c0,0.9,0.7,1.6,1.6,1.6h13.1c0.9,0,1.6-0.7,1.6-1.6V43.4h11.7c0.9,0,1.6-0.7,1.6-1.6l0-12.6c0-0.4-0.2-0.8-0.5-1.1
c-0.3-0.3-0.7-0.5-1.1-0.5H27.8v-7.4c0-3.6,0.8-5.4,5.5-5.4l6.7,0c0.9,0,1.6-0.7,1.6-1.6V1.6C41.6,0.7,40.9,0,40,0L40,0z M40,0" />
						</g>
					</g>
				</g>
			</svg>
		</a></li>
	<?php endif; ?>
	<?php if ( $social_links && in_array( 'instagraml', $social_links ) ) : ?>
	<li class="instagram"><a target="_blank"
			href="<?php the_field( 'instagram', 36 ); ?>"><svg version="1.1"
				id="Layer_1" xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 409.6 409.6"
				enable-background="new 0 0 409.6 409.6" xml:space="preserve">
				<g>
					<g>
						<path fill="currentColor"
							d="M281.6,0H128C57.3,0,0,57.3,0,128v153.6c0,70.7,57.3,128,128,128h153.6c70.7,0,128-57.3,128-128V128
C409.6,57.3,352.3,0,281.6,0L281.6,0z M371.2,281.6c0,49.4-40.2,89.6-89.6,89.6H128c-49.4,0-89.6-40.2-89.6-89.6V128
c0-49.4,40.2-89.6,89.6-89.6h153.6c49.4,0,89.6,40.2,89.6,89.6V281.6z M371.2,281.6" />
						<path fill="currentColor" d="M204.8,102.4c-56.6,0-102.4,45.9-102.4,102.4s45.9,102.4,102.4,102.4s102.4-45.8,102.4-102.4
S261.4,102.4,204.8,102.4L204.8,102.4z M204.8,268.8c-35.3,0-64-28.7-64-64c0-35.3,28.7-64,64-64c35.3,0,64,28.7,64,64
C268.8,240.1,240.1,268.8,204.8,268.8L204.8,268.8z M204.8,268.8" />
						<path fill="currentColor" d="M328.5,94.7c0,7.5-6.1,13.6-13.6,13.6c-7.5,0-13.6-6.1-13.6-13.6s6.1-13.6,13.6-13.6
C322.4,81.1,328.5,87.2,328.5,94.7L328.5,94.7z M328.5,94.7" />
					</g>
				</g>
			</svg>
		</a></li>
	<?php endif; ?>
	<?php if ( $social_links && in_array( 'googlel', $social_links ) ) : ?>
	<li class="google"><a target="_blank"
			href="<?php the_field( 'google', 36 ); ?>">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="-76 250.273 458.246 293.208"
				style="enable-background:new -76 250.273 458.246 293.208;"
				xml:space="preserve">
				<g>
					<g>
						<path style="fill:currentColor;"
							d="M84.777,427.122h71.594c-12.567,35.53-46.603,61.004-86.45,60.71
c-48.349-0.357-88.327-39.035-90.204-87.349c-2.012-51.789,39.537-94.563,90.887-94.563c23.479,0,44.905,8.946,61.058,23.605
c3.826,3.473,9.65,3.495,13.413-0.047l26.296-24.749c4.112-3.871,4.127-10.408,0.027-14.292
c-25.617-24.269-59.981-39.396-97.876-40.136c-80.826-1.578-148.955,64.691-149.518,145.531
c-0.568,81.447,65.285,147.649,146.6,147.649c78.199,0,142.081-61.229,146.36-138.358c0.114-0.967,0.189-33.648,0.189-33.648
H84.777c-5.426,0-9.824,4.398-9.824,9.824v35.999C74.953,422.724,79.352,427.122,84.777,427.122z" />
						<path style="fill:currentColor;"
							d="M338.464,374.744v-35.173c0-4.755-3.854-8.609-8.609-8.609h-29.604
c-4.755,0-8.609,3.854-8.609,8.609v35.173h-35.173c-4.755,0-8.609,3.854-8.609,8.609v29.604c0,4.755,3.854,8.609,8.609,8.609
h35.173v35.173c0,4.755,3.854,8.609,8.609,8.609h29.604c4.755,0,8.609-3.854,8.609-8.609v-35.173h35.173
c4.755,0,8.609-3.854,8.609-8.609v-29.604c0-4.755-3.854-8.609-8.609-8.609H338.464L338.464,374.744z" />
					</g>
				</g>
			</svg>
		</a></li>
	<?php endif; ?>
	<?php if ( $social_links && in_array( 'pinterestl', $social_links ) ) : ?>
	<li class="pinterest"><a target="_blank"
			href="<?php the_field( 'pinterest', 36 ); ?>"><svg version="1.1"
				id="Layer_1" xmlns="http://www.w3.org/2000/svg"
				xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 379.667 488.004"
				style="enable-background:new 0 0 379.667 488.004;"
				xml:space="preserve">
				<g>
					<g>
						<path style="fill:currentColor;" d="M221.538,353.966c-29.692-2.329-42.17-17.031-65.469-31.198
c-12.819,67.177-28.458,131.586-74.83,165.236c-14.299-101.544,20.997-177.818,37.415-258.742
c-27.941-47.099,3.354-141.849,62.352-118.487c72.579,28.703-62.869,175.026,28.081,193.291
c94.916,19.079,133.67-164.693,74.803-224.48c-85.065-86.3-247.596-1.953-227.588,121.596c4.86,30.2,36.084,39.367,12.451,81.055
C14.334,270.17-1.917,227.239,0.176,170.018C3.555,76.336,84.348,10.736,165.412,1.638
C267.954-9.824,364.166,39.289,377.44,135.711C392.387,244.549,331.164,362.415,221.538,353.966L221.538,353.966z
M221.538,353.966" />
					</g>
				</g>
			</svg>
		</a></li>
	<?php endif; ?>
	<?php if ( $social_links && in_array( 'linkedinl', $social_links ) ) : ?>
	<li class="linkedin"><a target="_blank"
			href="<?php the_field( 'linkedin', 36 ); ?>"><svg
				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
				viewBox="0 0 24 24">
				<path
					d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
			</svg></a></li>
	<?php endif; ?>
</ul>