<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT*FROM tb_user");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-9 mt-2">
    <div class="container-fluid py-5 content">

        <div class="card-body">
            <h1 class="display-3 text-center">USER PAGE</h1>
        </div>
    </div>
    <div class="row my-3">
        <div class="col d-flex justify-content-end">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modaltambahuser"> <i
                    class="bi bi-search">
                </i>tambah user </button>
        </div>
    </div>
    <!-- Modal tambah user baru -->
    <div class="modal fade" id="modaltambahuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header bg-light text-dark">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah user</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light text-dark">
                    <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="yourname"
                                        name="nama" required>
                                    <label for="floatingInput">nama</label>
                                    <div class="invalid-feedback">
                                        masukan nama.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" name="username" required>
                                    <label for="floatingInput">username</label>
                                    <div class="invalid-feedback">
                                        masukan username.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <select class="form-select" aria-label="Default select example" name="level"
                                        required>
                                        <option selected hidden value="0">Pilih Level User</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Farmer</option>
                                        <option value="3">Customer</option>
                                    </select>
                                    <label for="floatingInput">Level User</label>
                                    <div class="invalid-feedback">
                                        pilih level user.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx"
                                        name="Telp" required>
                                    <label for="floatingInput">Telp</label>
                                    <div class="invalid-feedback">
                                        masukan no.Telp.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingInput" placeholder=password
                                        disabled value="12345" name="password">
                                    <label for="floatingpassword">password</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="" style="height:100px" name="alamat"></textarea>
                            <label for="floatinginput">Alamat</label>
                        </div>
                        <div class="modal-footer bg-light text-dark">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="input_user_validate" value="12345">Save
                                changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal akhir tambah user baru -->
    <?php
    foreach ($result as $row) {
        ?>
        <!-- Modal view -->
        <div class="modal fade" id="modalview<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header bg-light text-dark">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">data user</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light text-dark">
                        <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input disabled type="text" class="form-control" id="floatingInput" placeholder="yourname"
                                            name="nama" value="<?php echo $row['nama'] ?>">
                                        <label for="floatingInput">nama</label>
                                        <div class="invalid-feedback">
                                            masukan nama.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input disabled type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" name="username" value="<?php echo $row['username'] ?>">
                                        <label for="floatingInput">username</label>
                                        <div class="invalid-feedback">
                                            masukan username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">
                                    <input disabled type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="username" value="
                                    <?php
                                    if($row['level']==1){
                                        echo "Admin";
                                    } elseif($row['level']==2){
                                        echo "peternak";
                                    } elseif($row['level']==3){
                                        echo "customer";
                                    } 
                                     ?>">
                                        <label for="floatingInput">Level User</label>
                                        <div class="invalid-feedback">
                                            pilih level user.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-floating mb-3">
                                        <input disabled type="number" class="form-control" id="floatingInput" placeholder="08xxxxx"
                                            name="Telp"  value="<?php echo $row['telp'] ?>">
                                        <label for="floatingInput">Telp</label>
                                        <div class="invalid-feedback">
                                            masukan no.Telp.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea disabled class="form-control" id="" style="height:100px" name="alamat"><?php echo $row['alamat'] ?></textarea>
                                <label for="floatinginput">Alamat</label>
                            </div>
                            <div class="modal-footer bg-light text-dark">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- akhir Modal view -->
         
       <?php
    } 
    
    if (empty($result)) {
        echo "data user tidak ada";
    } else {

        ?>

        <div class="table-responsive">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">LEVEL</th>
                        <th scope="col">TELP</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($result as $row) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php
                                    if($row['level']==1){
                                        echo "Admin";
                                    } elseif($row['level']==2){
                                        echo "peternak";
                                    } elseif($row['level']==3){
                                        echo "customer";
                                    } 
                                     ?></td>
                            <td><?php echo $row['telp'] ?></td>
                            <td class="d-flex">
                                <button class="btn btn-dark btn-sm me-1" data-bs-toggle="modal" data-bs-target="#modalview<?php echo $row['id']?>">
                                    <i class="bi bi-eye-fill"></i></button>
                                <button class="btn btn-dark btn-sm me-1"data-bs-toggle="modal" data-bs-target="#modaledit<?php echo $row['id']?>"> <i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-dark btn-sm me-1"> <i class="bi bi-trash3-fill"></i></button>
                            </td>

                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
    }
    ?>
</div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>