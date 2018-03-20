@extends('masterlayout')
@section('content')
<section class="upload_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@include('partials.error_section')
				<h2 class="heading-primary">UPLOAD</h2>
				<p class="upload_content">Go ahead and upload your design</p>
				<!-- <div class="upload_icon">	<i class="fa fa-cloud-upload"></i></div> -->
				<form enctype="multipart/form-data" method="POST" action="{{route('ajax_submit_video')}}">
					{{csrf_field()}}
					<div class="icon_cloud">
						<span id="fileselector">
							<label class="" for="imageUpload">
								<input type="hidden" name="class_id" value="{{$class_id}}">
								<input type="file" name="video" id="imageUpload" class="hide"/>
								<i class="fa fa-cloud-upload"></i>
								<img src="" id="imagePreview" alt="" width="100px";/>
							</label>
						</span>
					</div>					
					<div class="row">
						<div class="col-md-4  col-md-offset-4 form-group">
							<label class="">Description</label>
							<textarea name="description" class="form-control" rows="5">@if($variable && !empty($variable->description)) {{$variable->description}} @endif</textarea>
							
							@if($variable && !empty($variable->description))
							<br>
							<p style="color: red;"> You Have Already Uploaded Video In This Class, Want To Update !</p>
							<br>
							<strong>Continue To Update Video</strong>
							<input type="hidden" name="video_id" value="{{$variable->id}}">
							@endif
						</div>
						<div class="col-md-4  col-md-offset-4">
							<button type="submit" class="btn btn-login s-btn-width">Upload</button>
						</div>
						<p class="description col-md-4  col-md-offset-4">Integer vel vestibulum turpis. Nulla eros urna, molestie eu est et, laoreet aliquet libero. Cras vitae molestie erat. Donec </p>
					</div>				
					<br>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
