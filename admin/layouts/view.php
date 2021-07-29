<div class="card">
                  <div class="card-header">
                    <h4><?= $item->title ?> <small style="display: flex; justify-content: end;"><?= $item->hour ?></small></h4>
                  </div>
                  <div class="card-body">
                    <h4><?= $item->title2 ?></h4>
                    <img src="" alt="">
                    <div class="chocolat-parent">
                      <a href="<?= $item->img ?>" class="chocolat-image" title="Just an example">
                        <div  style="overflow: hidden; position: relative; ">
                          <img alt="image" src="<?= $item->img ?>" class="img-fluid">
                        </div>
                      </a>
                    </div>
                    <p><?= $item->bodytext ?></p>
                  </div>
                  <div class="card-footer">
                  <span><b>Create date:</b> | <?= $item->create_time ?></span>
                  <br>
                  <span><b>Update date:</b> | <?= $item->update_time ?></span>
                  </div>
 </div>