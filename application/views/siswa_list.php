
                <li><?php echo anchor('/siswa/','Home') ?></li>
				<li> <?php echo anchor('/siswa/input','Input Penerima') ?></li>
                <li  class="active"><?php echo anchor('/siswa/cetak_semua','List Penerima') ?></li>
                <li><?php echo anchor('/siswa/About','About') ?></li>
                
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
		 <h2>List Keluarga Penerima Bantuan</h2>
		<p>
			<?php
				echo $table
			?>
		</p>
		</div>
