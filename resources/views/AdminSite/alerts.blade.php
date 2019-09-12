@if ($message = Session::get('success'))
<script type="text/javascript">
	//var notyf = new Notyf();
	swal({
		title: "Successfully!",
		text:  "{{$message}}",
		icon: "success",
	});
	//notyf.confirm('Your changes have been successfully saved!');
</script>
@endif


@if ($message = Session::get('error'))
<script type="text/javascript">
	swal({
		type: 'error',
		title: 'Oops...',
		text: '{{$message}}',
		footer: '<a href>Why do I have this issue?</a>'
	})
// notyf.confirm('Your changes have been successfully saved!');
</script>
@endif


@if ($message = Session::get('warning'))
<script type="text/javascript">
swal({
  type: 'success',
  title: 'Good Bye!',
  text: '{{$message}}',
  showConfirmButton: false,
  timer: 4000
})
</script>
@endif
