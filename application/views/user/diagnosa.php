<?php 
if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
?>
<section id="kontak" class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important;" >
	<div class="container">
	<?php echo form_open()?>
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-6">
				<div class="title text-center">
					<h2 style="margin-bottom: 0px;">Diagnosa</h2><br>
					<!-- <h2>Penyakit Ibu Hamil</h2> -->
					<p>Silahkan pilih gejala yang dirasakan...</p>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-md-6 col-md-offset-2" >
				<?php foreach($listKelompok->result() as $value){?>
				<span style="font-weight: bold;" ><?php echo $value->nama?></span><br>
					<?php
                    $this->load->model(array('Gejala_model'));
                    $listGejala = $this->Gejala_model->get_by_kelompok($value->id);
                    foreach($listGejala->result() as $value2){?>
					<input type="checkbox" name="gejala[]" value="<?php echo $value2->id?>" > <?php echo $value2->kode." - ".$value2->nama_gejala?> <br>
				<br>
				<?php }?>
			<?php } ?>
			</div>
		</div>
		<br>
		<div class="row d-flex justify-content-center">
			<div class="col-md-6" style="float: left; padding: 0;">
				<button type="submit" name="submit" class="btn main-btn" style="background-color: #41C1FF;  border-radius: 0px;">Proses</button>
<<<<<<< HEAD
			</div>
		</div>
	</div>
	<?php echo form_close()?>
</section>
=======
			</div>	
		</div>						
	</div>	
</section>
<?php } else{ redirect('login_user');}?>
>>>>>>> 4cb541ac218ef78e362226573f421ee2e92f6e0a
