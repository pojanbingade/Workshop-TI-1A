<div class="col-lg-3">
  <nav class="navbar navbar-expand-lg rounded border mt-2 bg-custom-grey">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"
        style="width:250px">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
            <li class="nav-item">
              <a class="nav-link <?php ?> link-light ps-2" aria-current="page" href="home"><i
                  class="bi bi-house-heart-fill"> </i>dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-light ps-2" href="tabel"><i class="bi bi-table"> </i>Tabel Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-light ps-2" href="market"><i class="bi bi-newspaper"> </i>Market News</a>
            </li>
            <?php if($hasil['level']==1){ ?>
            <li class="nav-item">
              <a class="nav-link link-light ps-2" href="user"><i class="bi bi-person-circle"> </i>user</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-light ps-2" href="report"><i class="bi bi-newspaper"> </i>report</a>
            </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link link-light ps-2" href="order"><i class="bi bi-cart-check-fill"> </i>Order</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>