<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=categories/create" class="btn btn-primary float-right">
                                            Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>title</th>
                                    <th>is_menu</th>
                                    <th>status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
//                                $query = mysqli_query($db, "SELECT * FROM  pages");
//                                $pages = mysqli_fetch_all($query, MYSQLI_ASSOC);

                                $database = new Database();
                                $categories = $database->select('categories','*');

                                foreach ($categories as $category) {
                                    ?>
                                    <tr>
                                        <td><?= $category['title'] ?></td>
                                        <td><?= $category['is_menu'] ?></td>
                                        <td><?= $category['status'] ?></td>
                                        <td style="display:flex;column-gap:5px;">
                                            <a href="index.php?route=categories/edit&id=<?= $category['id'] ?>" title="Edit"
                                               class="btn btn-sm btn-primary pull-right">
                                                <i class="voyager-paper-plane">Edit</i>
                                            </a>
                                            <a href="index.php?route=categories/delete&id=<?= $category['id'] ?>"
                                               title="Delete"
                                               class="btn btn-sm btn-danger pull-right">
                                                <i class="voyager-paper-plane">Delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
</div>
