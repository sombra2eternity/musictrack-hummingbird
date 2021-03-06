<form method="post">
	<input type="hidden" name="subcommand" value="band.save">
	<input type="hidden" name="_id" value="{{bandOB__id}}">
	<ul class="tabs widget-tabs">
		<li class="tab">
			<div class="label">
				<span class="ellipsis"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</span>
			</div>
			<div class="content">
				<h4><i class="fa fa-pencil" aria-hidden="true"></i> Edit</h4>
				<p>Edit band basic params</p>
				<ul class="table radio">
					<li><div>Name</div><div><input type="text" name="bandName" placeholder="Band name" value="{{bandOB_bandName}}"></div></li>
					<li><div>Description</div><div><textarea name="bandDescription" placeholder="Band description" style="min-height:200px;">{{bandOB_bandDescription}}</textarea></div></li>
				</ul>
			</div>
		</li>
		<li class="tab">
			<div class="label">
				<span class="ellipsis"><i class="fa fa-tags" aria-hidden="true"></i> Tags</span>
			</div>
			<div class="content">
				<h4><i class="fa fa-tags" aria-hidden="true"></i> Tags</h4>
				<p>Edit band tags</p>
				<ul class="table">
					<li><div>Tags</div><div><textarea name="bandTags" placeholder="Band tags" style="min-height:200px;">{{bandOB_bandTags}}</textarea></div></li>
				</ul>
			</div>
		</li>
	</ul>
	<div class="btn-group right">
		<div class="btn btn-close"><i class="fa fa-close"></i> Close</div>
		<button class="btn main"><i class="fa fa-save"></i> Save</button>
	</div>
</form>
