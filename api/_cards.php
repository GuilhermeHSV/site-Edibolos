<?php do { ?>
  <section>
    <div class="container-fluid mt-5">
      <h2 class="fonte-zero text-center mb-4">Galeria de bolos</h2>
      <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
        <?php do { ?>
          <div class="col mb-4">
            <div class="card shadow-lg bg-white rounded card-custom">
              <a href="euquero.php?id_Produts=<?php echo($row_rs_edi["id_Produts"]) ?>" title="<?php echo($row_rs_edi["titulo"]) ?>" data-title="<?php echo($row_rs_edi["titulo"]) ?> " >    
              <img class="card-img-top img-fluid img-custom" src="imgs/upload/<?php echo $row_rs_edi["img"]; ?>" alt="<?php echo $row_rs_edi["titulo"]; ?>" title="<?php echo $row_rs_edi["titulo"]; ?> " width="468" height="585" >
              </a>
              <div class="card-body">
                <?php 
                  $titulo = $row_rs_edi["titulo"];
                  if (strlen($titulo) > 20) {
                    echo '<p class="card-title font-ti-bolo" style="font-size: 17px;">' . $titulo . '</p>';
                  } else {
                    echo '<h2 class="card-title font-ti-bolo">' . $titulo . '</h2>';
                  }
                ?>
                <div class="d-flex justify-content-center align-items-center">
                  <a href="euquero.php?id_Produts=<?php echo($row_rs_edi["id_Produts"]) ?>" class="btn btn-success" style="background-color: #216741; font-weight: 400;font-family: sans-serif;; border:1px solid rgb(69, 133, 99) ;">Eu Quero</a>
                </div>
              </div>
            </div>
          </div>
        <?php } while ($row_rs_edi = mysqli_fetch_assoc($rs_edi)); ?>
      </div>
    </div>
  </section>
<?php } while ($row_rs_edi = mysqli_fetch_assoc($rs_edi)); ?>
