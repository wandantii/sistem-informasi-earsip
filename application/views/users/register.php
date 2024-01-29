<?php echo form_open('users/register'); ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><?= $title; ?></h1>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama" required />
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <input type="text" class="form-control" name="class" id="class" placeholder="Kelas" required />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required />
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
            </div>
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password" required />
                <?php echo validation_errors(); ?>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </div>
    </div>
<?php echo form_close(); ?>
