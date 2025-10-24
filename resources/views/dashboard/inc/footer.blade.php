                    <footer class="main-footer fixed-btm">
						Copyright Mannatech Farm Management System 2025.
					</footer>


					<script>
						// ✅ Success message
						@if (session('success'))
							Swal.fire({
								icon: 'success',
								title: 'Success',
								text: '{{ session('success') }}',
								showConfirmButton: false,
								timer: 3500
							});
						@endif

						// ❌ Error messages (validation errors)
						@if ($errors->any())
							let errorMessages = '';
							@foreach ($errors->all() as $error)
								errorMessages += '{{ $error }}\n';
							@endforeach

							Swal.fire({
								icon: 'error',
								title: 'Validation Error',
								text: errorMessages,
								confirmButtonColor: '#d33'
							});
						@endif
					</script>