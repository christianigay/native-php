<!-- Basic Tables start -->
<div class="row" id="basic-table">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
            <h4 class="card-title"><?=$data['meta']['title'] ?? ''?></h4>
            <div class="pull-right">
                <a 
                href="<?=BASE_URL . '/public/users/create.php'?>"
                style="color: #fff;" class="btn btn-success">Add</a>
            </div>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <!-- Table with outer spacing -->
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach($data['users'] as $user): ?>
                              <tr>
                                  <th scope="row"><?=$user['id']?></th>
                                  <td><?=$user['username']?></td>
                                  <td><?=$user['email']??''?></td>
                                  <td>
                                    <button type="button" class="btn btn-icon btn-flat-primary mr-1 mb-1"><i class="feather icon-edit"></i></button>
                                    <button type="button" class="btn btn-icon btn-flat-danger mr-1 mb-1"><i class="feather icon-trash"></i></button>
                                  </td>
                              </tr>
                            <?php endforeach ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>