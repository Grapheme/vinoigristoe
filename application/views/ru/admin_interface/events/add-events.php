<!DOCTYPE html>
<html lang="en">
<?php $this->load->view($language."/admin_interface/includes/head");?>
<body>
	<?php $this->load->view($language."/admin_interface/includes/header");?>
	<div class="container">
		<div class="row">
			<div class="span9">
				<ul class="breadcrumb">
					<li>
						<?=anchor('',"Новости",array('class'=>'none backpath'));?><span class="divider">/</span>
					</li>
					<li class="active">
						Добавление
					</li>
				</ul>
				<?php $this->load->view($language."/alert_messages/alert-error");?>
				<?php $this->load->view($language."/alert_messages/alert-success");?>
				<?php $this->load->view($language."/forms/frmaddevent");?>
			</div>
		<?php $this->load->view($language."/admin_interface/includes/rightbar");?>
		</div>
	</div>
	<?php $this->load->view($language."/admin_interface/includes/scripts");?>
	<script type="text/javascript" src="<?=site_url('ckeditor/ckeditor.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('ckeditor/adapters/jquery.js');?>" ></script>
	<script type="text/javascript" src="<?=site_url('ckfinder/ckfinder.js');?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var config = {
				skin:'office2003',
				resize_enabled: false,
				height: '350px',
				toolbar:[
					['Source','-','Preview','-','Templates'],
					['Cut','Copy','Paste','PasteText'],
					['Undo','Redo','-','SelectAll','RemoveFormat'],'/',
					['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
					['NumberedList','BulletedList','-','Outdent','Indent'],
					['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
					['Link','Unlink'],['Image','HorizontalRule','SpecialChar'],'/',
					['TextColor','Format','FontSize'],
					['Table','HorizontalRule','SpecialChar','-'],
					['Maximize', 'ShowBlocks']
				]
			};
			$("textarea.redactor").ckeditor(config);
			var editor = $("textarea.redactor").ckeditorGet();
			CKFinder.setupCKEditor(editor,"<?=site_url('ckfinder');?>/");
		});
	</script>
</body>
</html>
