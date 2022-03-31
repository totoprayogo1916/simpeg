

<section id="data-keluarga">
  <div class="well">
  	<?= session()->getFlashdata('pass'); ?>
    <?php if (validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">�</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?= validation_errors(); ?>
	</div>
	<?php } ?>
	<div class="tabbable tabs-left">
	<?php
        if (session('tab_a') === '' && session('tab_b') === '') {
            $set['tab_a'] = 'active';
            $this->session->set_userdata($set);
        }
        $a = session('tab_a');
        $b = session('tab_b');
    ?>
	  <ul class="nav nav-tabs">
		<li class="<?= $a; ?>"><a href="#lA" data-toggle="tab">Pengaturan Password</a></li>
		<li class="<?= $b; ?>"><a href="#lB" data-toggle="tab">Pengaturan Nama Pengguna</a></li>
		<li><a href="<?= base_url(); ?>app/logout">Log Out</a></li>
	  </ul>
	  <div class="tab-content">
		<div class="tab-pane <?= $a; ?>" id="lA">
		  <h4>Pengaturan Password</h4>
			<?= form_open('app/save_pass'); ?>
				<div class="control-group">
					<label class="control-label" for="pass_lama">Username</label>
					<div class="controls">
					  <input type="text" value="<?= session('username'); ?>"
					  class="span4" name="username" id="username" placeholder="Username" readonly="true">
					</div>
					<label class="control-label" for="pass_lama">Password Lama</label>
					<div class="controls">
					  <input type="password" class="span4" name="pass_lama" id="pass_lama" placeholder="Password Lama">
					</div>
					<label class="control-label" for="pass_lama">Password Baru</label>
					<div class="controls">
					  <input type="password" class="span4" name="pass_baru" id="pass_baru" placeholder="Password Baru">
					</div>
					<label class="control-label" for="pass_lama">Ulangi Password Baru</label>
					<div class="controls">
					  <input type="password" class="span4" name="ulangi_pass_baru" id="ulangi_pass_baru" placeholder="Ulangi Password Baru">
					</div>
			  	</div>
				<div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn">Hapus Data</button>
			</div>
		  </div>
			<?= form_close(); ?>
		</div>
		<div class="tab-pane <?= $b; ?>" id="lB">
		  <h4>Pengaturan Nama Pengguna</h4>
			  <?= form_open('app/save_name'); ?>
					<div class="control-group">
						<label class="control-label" for="pass_lama">Nama Pengguna</label>
						<div class="controls">
						  <input type="text" value="<?= session('nama'); ?>"
						  class="span4" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Pengguna">
						</div>
					</div>
					<div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn btn-primary">Simpan Data</button>
				  <button type="reset" class="btn">Hapus Data</button>
				</div>
			  </div>
			<?= form_close(); ?>
		</div>
	  </div>
	</div> <!-- /tabbable -->
  </div>
</section>


      <footer class="well">
        <p><?= $credit; ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
