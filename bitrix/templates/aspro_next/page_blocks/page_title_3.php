<div class="top_inner_block_wrapper maxwidth-theme">
	<div class="page-top-wrapper grey v3">
		<section class="page-top maxwidth-theme <?CNext::ShowPageProps('TITLE_CLASS');?>">
			<div class="page-top-main">
				<?=$APPLICATION->ShowViewContent('product_share')?>


                <?php
                $url = $_SERVER['REQUEST_URI'];
                $url=explode("/", $url);
                $tmp=count($url);

                if ($url[1] == 'blog' and $tmp>3)
                {
                    ?>
                    <p id="pagetitle"><?$APPLICATION->ShowTitle(false)?></p>
                    <?php
                } else {
                    ?>
                    <h1 id="pagetitle"><?$APPLICATION->ShowTitle(false)?></h1>
                    <?php
                }
                ?>
			</div>
			<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "next", array(
				"START_FROM" => "0",
				"PATH" => "",
				"SITE_ID" => SITE_ID,
				"SHOW_SUBSECTIONS" => "N"
				),
				false
			);?>
		</section>
	</div>
</div>