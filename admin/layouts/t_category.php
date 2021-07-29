<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Categories | <a class="badge badge-success" href="/admin/create.php?name=category">add Category</a></h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-2">
            <thead>
              <tr>
                <th class="text-start">
                  #
                </th>
                <th>Name</th>


                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <? foreach ($category as $item) { ?>
                <tr>
                  <td>
                    <?= $item->id ?>
                  </td>
                  <td><?= $item->name ?></td>



                  <td>
                    <div class="badge  <?= ($item->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($item->status == 1) ? 'Active' : 'deactive' ?></div>
                  </td>
                  <td style="width: 220px !important;">

                    <form action="./edit_news.php">

                    </form>
                    <form action="./edit.php" method="POST" style="display: inline;">
                      <input hidden type="text" name="id" value="<?= $item->id?>">
                      <button class="btn btn-success" type="submit" name="category_edit">Edit</button>
                    </form>
                    <form action="./layouts/Action/delete.php" method="POST" style="display: inline;">
                      <input hidden type="text" name="id" value="<?= $item->id?>">
                      <button class="btn btn-danger" type="submit" name="category_delete">Delete</button>
                    </form>
                 
                  </td>
                </tr>
              <? } ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>