<div class="alert alert-{{ $type }} alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>  
	@if ($type=="success")
	<h4 style='display: inline'><i class="icon fa fa-check"></i> Success</h4>
	@elseif ($type=="warning")
	<h4 style='display: inline'><i class="icon fa fa-warning"></i> Warning</h4>
	@elseif ($type=="danger")
	<h4 style='display: inline'><i class="icon fa fa-ban"></i> Error</h4>
	@elseif ($type=="info")
	<h4 style='display: inline'><i class="icon fa fa-info"></i> Info</h4>
	@endif
	<br/>
	{{ $content }}
</div>