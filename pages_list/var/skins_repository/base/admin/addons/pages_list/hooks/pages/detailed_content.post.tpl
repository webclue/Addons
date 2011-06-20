{* $Id: detailed_content.post.tpl 9141 2010-03-23 13:22:48Z alexions $ *}

<fieldset>
	{include file="common_templates/subheader.tpl" title=$lang.pages_list}
	<div class="form-field">
		<label>{$lang.icon}:</label>
		<div class="float-left">
			{include file="common_templates/attach_images.tpl" image_name="pages_main" image_object_type="page" image_pair=$page_data.main_pair image_object_id=$page_data.page_id no_detailed=true hide_titles=true}
		</div>
	</div>	
	<div class="form-field">
		<label for="page_sh_descr">{$lang.short_description}:</label>
		<textarea id="page_sh_descr" name="page_data[short_description]" cols="55" rows="8" class="input-textarea-long">{$page_data.short_description}</textarea>
		{include file="common_templates/wysiwyg.tpl" id="page_sh_descr"}
	</div>
</fieldset>