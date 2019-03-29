	<script>	
		@if(Session::has('success'))
		toastr.success("{{ Session::get('success')}}");
		@endif

		@if (count($errors) > 0)
		@foreach ($errors->all() as $error)
		toastr.error("{{ $error }}");
		@endforeach 
		@endif
	</script>