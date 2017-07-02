<?php

# Copyright (c) 2010 John Reese
# Copyright (c) 2017 Damien Regad
# Licensed under the MIT license

access_ensure_global_level(config_get("manage_plugin_threshold"));

layout_page_header( plugin_lang_get( 'plugin_title' ) );
layout_page_begin();
print_manage_menu();
?>

<div class="col-md-12 col-xs-12">
<div class="space-10"></div>

<div class="form-container width60">
<form action="<?php echo plugin_page("config") ?>" method="post">
	<fieldset>
		<div class="widget-box widget-color-blue2">
		<div class="widget-header widget-header-small">
			<h4 class="widget-title lighter">
				<i class="ace-icon fa fa-file-o"></i>
				<?php echo plugin_lang_get( 'config_title' ) ?>
			</h4>
		</div>

		<?php echo form_security_field("plugin_Announce_config") ?>

		<div class="widget-body">
		<div class="widget-main no-padding">
		<div class="table-responsive">
		<table class="table table-bordered table-condensed table-striped">

			<tr>
				<td class="category">
					<?php echo plugin_lang_get( 'config_manage_threshold' ) ?>
				</td>
				<td>
					<select name="manage_threshold">
						<?php print_enum_string_option_list( 'access_levels', plugin_config_get( 'manage_threshold' ) ) ?>
					</select>
				</td>
			</tr>
		</table>

		</div>
		</div>

		<div class="widget-toolbox padding-8 clearfix">
			<input type="submit" class="btn btn-primary btn-white btn-round" value="<?php echo plugin_lang_get('action_update') ?>"/>
		</div>
		</div>
		</div>

	</fieldset>
</form>
</div>

</div>

<?php
layout_page_end();
