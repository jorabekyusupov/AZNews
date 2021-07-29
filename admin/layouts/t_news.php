<?


?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>News | <a class="badge badge-success" href="/admin/create.php?name=news">add News</a></h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th class="text-start">
                  #
                </th>
                <th style="overflow: hidden; width: 350px;">Title</th>
                <th>Image</th>

                <th>create Date</th>
                <th>update Date</th>
                <th>category</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <? foreach ($items as $item) {
                $cat = $db->query("select  name from categories where id= $item->category_id");
                $cat1 = $cat->fetch_object();
              ?>

                <tr>
                  <td>
                    <?= $item->id - 38 ?>
                  </td>
                  <td><?= $item->title ?></td>
                  <td> <img width="35px" height="35px" src="<?= $item->img ?>" alt=""></td>


                  <td><?= $item->create_time ?></td>
                  <td><?= $item->update_time ?></td>
                  <td>
                    <div class="badge badge-success badge-shadow"><?= $cat1->name ?></div>
                  </td>
                  <td>

                    <div class="badge  <?= ($item->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($item->status == 1) ? 'Active' : 'deactive' ?></div>
                  </td>
                  <td style="width: 220px !important;">
                    <a href="./view.php?id=<?= $item->id ?>" class="btn btn-primary">View</a>
                    <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-success">Edit</a>
                    <a href="./layouts/Action/delete.php?id=<?= $item->id ?>" class="btn btn-danger">Delete</a>
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