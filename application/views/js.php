<script async="async" src="<?php echo base_url('assets/js/jquery/jquery.min.js') ?>"></script>
<script async="async" src="<?php echo base_url('assets/js/popper/popper.min.js') ?>"></script>
<script async="async" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script async="async" src="<?php echo base_url('assets/js/wow.min.js') ?>"></script>
<script async="async" src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script>
	new WOW().init();
</script><!-- 
<script>
		$(document).ready(function(){
			//Mengirimkan Token Keamanan
			$.ajaxSetup({
				headers : {
					'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
				}
			});
		
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				let nama = $('#nama_pengirim').val();
				let komen = $('#komen').val();
				let email = $('#email').val();
				let id_berita = $('#berita_id').val();
				
				if(nama_pengirim==''){
					alert("Nama Pengirim Harus disii");
				} else if(komen==''){
					alert("Komentar Harus disii");
				} else {
					var form_data = $(this).serialize();
					$.ajax({
						url:"tambah_komentar.php",
						method:"POST",
						data:form_data,
						success:function(data){
							$('#form_komen')[0].reset();
							$('#komentar_id').val('0');
							load_comment();
						}, error: function(data) {
							console.log(data.responseText)
						}
					})
				}
			});
 
			load_comment();
 
			function load_comment(){
				$.ajax({
					url:"ambil_komentar.php",
					method:"POST",
					success:function(data){
						$('#display_comment').html(data);
					}, error: function(data) {
						console.log(data.responseText)
					}
				})
			}
 
			$(document).on('click', '.reply', function(){
				var id_komen = $(this).attr("id");
				$('#komentar_id').val(id_komen);
				$('#nama_pengirim').focus();
			});
		});
	</script> -->