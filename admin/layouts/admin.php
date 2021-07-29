<?


?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Admins</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th class="text-start">
                  ID
                </th>
                <th style="overflow: hidden; width: 350px;">FirstName</th>
                <th>LastName</th>

                <th>UserName</th>
                <th>Register Admin</th>
                <th>Status</th>
          <!--       <th>Action</th> -->
              </tr>
            </thead>
            <tbody>
              <? foreach ($user as $item) {

              ?>

                <tr>
                  <td>
                    <?= $item->id ?>
                  </td>
                  <td><?= $item->firstname ?></td>
                  <td><?= $item->lastname ?></td>
                  <td><?= $item->username ?></td>




                  <td>

                    <div class="badge  <?= ($item->reg_admin == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($item->reg_admin == 1) ? 'Active' : 'deactive' ?></div>
                  </td>
                  <td>

                    <div class="badge  <?= ($item->status == 1) ? 'badge-success' : 'badge-danger' ?> badge-shadow"><?= ($item->status == 1) ? 'Active' : 'deactive' ?></div>
                  </td>
                <!--   <td style="width: 220px !important;">
                    <a href="./view.php?id=<?= $item->id ?>" class="btn btn-primary">View</a>
                    <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-success">Edit</a>
                    <a href="./layouts/Action/delete.php?id=<?= $item->id ?>" class="btn btn-danger">Delete</a>
                  </td> -->
                </tr>

              <? } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>