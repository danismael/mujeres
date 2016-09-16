<?php 
error_reporting(0);
for ($i=1; $i<9; $i++):
switch($i){
	
	case 1: 
		$color='#32b4c0';
		$color_rgba_1='rgba(50, 180, 192, 0.9)';
		$color_rgba_2='rgba(50, 180, 192, 0.8)';
		$color_name='torquze';
	break;
	
	case 2: 
		$color='#ffcc00';
		$color_rgba_1='rgba(255, 204, 0, 0.90)';
		$color_rgba_2='rgba(255, 204, 0, 0.80)';
		$color_name='sun';
	break;
	
	case 3: 
		$color='#d80000';
		$color_rgba_1='rgba(216, 0, 0, 0.90)';
		$color_rgba_2='rgba(216, 0, 0, 0.80)';
		$color_name='red';
	break;
	
	case 4: 
		$color='#E22467';
		$color_rgba_1='rgba(226, 36, 103, 0.90)';
		$color_rgba_2='rgba(226, 36, 103, 0.80)';
		$color_name='pink';
	break;
	
	case 5: 
		$color='#9dc032';
		$color_rgba_1='rgba(157, 192, 50, 0.90)';
		$color_rgba_2='rgba(157, 192, 50, 0.80)';
		$color_name='greentea';
	break;
	
	case 6: 
		$color='#1DA879';
		$color_rgba_1='rgba(29, 168, 121, 0.90)';
		$color_rgba_2='rgba(29, 168, 121, 0.80)';
		$color_name='green';
	break;
	
	case 7: 
		$color='#3ea7d7';
		$color_rgba_1='rgba(62, 167, 215, 0.90)';
		$color_rgba_2='rgba(62, 167, 215, 0.80)';
		$color_name='blue';
	break;
	
	case 8: 
		$color='#E5493A';
		$color_rgba_1='rgba(229, 73, 58, 0.90)';
		$color_rgba_2='rgba(229, 73, 58, 0.80)';
		$color_name='orange';
	break;
}
$newFileName = 'css/skins/'.$color_name.".css";
$newFileContent = '/* '.$color_name.' Skin */
/* ------------------------------------------------------------------------ */
/* Color
/* ------------------------------------------------------------------------ */
ul.default li:before , a , .searchbox-icon , .searchbox-submit , .jx-top-menu .jx-right-infobar li.search-box:hover i , .menu li.has-child >  a:after , .jx-blog-1 .title a:hover,.jx-blog-2 .title a:hover , .jx-contact-info .icon , .jx-breadcrumb , .jx-page-title , #scrollUp .scroll-icon ,
.jx-footer h3 , .jx-footer-social li:hover i , .jx-footer-recent-post .description a:hover , .inventory-filter-options-list .item a:hover ,  .jx-list-faq ul li a:hover , .jx-list-faq ul li.active a , .jx-contact-info i , .jx-section-title-3 .jx-title , .jx-footer-recent-post .date , .jx-servicelist-1 .category , .jx-inventory-listing.jx-inventory-grid .jx-inventroy-item .jx-title:hover a , .jx-call-action-box .box-content , .jx-servicelist-1 .icon i , .jx-team-member-1 .name , .jx-team-member-2 .name , .jx-blockquote .quote-b:before , .jx-list-group li span,.menu li.has-child >  a:after,.jx-testimonials-1 .testimonial-position,.jx-tetimonials-1 .description::before,.jx-tetimonials-1 .jx-testimonial-details .name , .menu > li > a:hover , .mPS2id-highlight
{
	color:'.$color.' ;
}
/* ------------------------------------------------------------------------ */
/* Background
/* ------------------------------------------------------------------------ */
::selection 
{
	background:'.$color.' !important;
}
::-moz-selection   
{
	background:'.$color.' !important;
}
body,.jx-top-menu .jx-right-infobar li:hover i , .searchbox-icon:hover i , .jx-pagination li a:hover , .jx-pagination li.selected a ,
.contact-submit .jx-submit ,  .jx-black-title-top-arrow-default:after , .scroll , .jx-switch li:hover i , .jx-sidebar-search  .jx-form-wrapper button ,
.jx-sidebar-tags li , .filter-btn .btn , .single-vehicle-details .jx-inventory-view .figure span , .jx-container.jx-default-bg .jx-container-slope ,
.jx-container-slope.jx-default-bg , .jx-footer-social li i , .jx-team-member-1 .team-social li i , .jx-team-member-2 .team-social li i , .jx-service-2 .content-box , .jx-sale-tag  , .jx-image-wrapper:hover .jx-scale-portfolio , .jx-image-wrapper .jx-scale-portfolio:hover , .jx-btn-default , .jx-btn-default:hover , .jx-list-group.circle-light span , .jx-list-group.square-light span , .owl-nav i:hover , .single-vehicle-details .jx-inventory-view .figure span , .alt-a .time , 
.alt-a .event-title , .jx-accordion-3 .circle .open .title, .jx-accordion-3 .circle .title:hover , .jx-counting-down li , .jx-price-1 , .jx-price-1 .jx-button .price-btn , .jx-price-2 .title , .jx-price-2 .jx-button .price-btn:hover
{
	background-color:'.$color.' !important;
}
	
/* ------------------------------------------------------------------------ */
/* Background Color
/* ------------------------------------------------------------------------ */
table th .jx-section-title-4 .jx-seperator-hr , .single-vehicle-details .badge-premium-listing , .jx-default-bg , .jx-list-faq .jx-title span , .jx-call-action-box .box-content .button , .dropcap.dark , .single-vehicle-details .badge-premium-listing , .shortcode_tab_e.jx-white-tab.jx-arrow-tab li.resp-tab-active  , 
.jx-accordion .circle .open .title , .jx-accordion .circle .title:hover{
	background-color:'.$color.' !important;
}
/* ------------------------------------------------------------------------ */
/* Background RGBA Color
/* ------------------------------------------------------------------------ */
.jx-tint:before {
	background: '.$color_rgba_1.' !important;
}
.jx-team-member-6,.jx-sidebar-recentposts .jx-img-hover .jx-hover-top {
	background: '.$color_rgba_2.' !important;	
}
/* ------------------------------------------------------------------------ */
/* Border Color
/* ------------------------------------------------------------------------ */
.jx-single-post-tag li:hover , .jx-btn-default:hover , .jx-register-btn a:hover {
	border-color:'.$color.' !important;
}
.shortcode_tab_e.jx-white-tab.jx-arrow-tab ul li.resp-tab-active:after {
	border-color: '.$color.' transparent !important;
	}
.jx-sidebar-search .jx-form-wrapper button:before {
    border-color: transparent '.$color.'  transparent !important;
}
/* ------------------------------------------------------------------------ */
/* Border Left Color
/* ------------------------------------------------------------------------ */
blockquote  , .jx-blockquote .quote-a.quote-border  {
	border-left-color:'.$color.' !important;
}
/* ------------------------------------------------------------------------ */
/* Border Right Color
/* ------------------------------------------------------------------------ */
.single-vehicle-details .badge-premium-listing::before , .single-vehicle-details .badge-premium-listing::before {
	border-right-color:'.$color.' !important;
}
/* ------------------------------------------------------------------------ */
/* Border Top Color
/* ------------------------------------------------------------------------ */
.mPS2id-highlight , .jx-black-title-top-arrow-default , .jx-team-member-1 .team-selected , .menu > li > a:hover {
	border-top-color:'.$color.' !important;
}
/* ------------------------------------------------------------------------ */
/* Border Bottom Color
/* ------------------------------------------------------------------------ */
.jx-footer-title .jx-right-pattern , .jx-inventory-listing.jx-inventory-grid .jx-inventroy-item .details {
	border-bottom-color:'.$color.' !important;
}
/* ------------------------------------------------------------------------ */
/* Variant Background Color
/* ------------------------------------------------------------------------ */
.jx-bg-defualt-1{background-color:#c63f32 !important}
.jx-bg-defualt-2{background-color:#ad3b30 !important}
.jx-bg-defualt-3{background-color:#852f27 !important}
.jx-bg-defualt-4{background-color:#5b1a13 !important}';
if(file_put_contents($newFileName,$newFileContent)!=false){
    echo "File created (".basename($newFileName).")<br>";
}else{
    echo "Cannot create file (".basename($newFileName).")";
}
endfor;
?>