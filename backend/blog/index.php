<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blogs</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=blog/create" class="btn btn-primary float-right">
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
                                    <th>description</th>
                                    <th>image</th>
                                    <th>video</th>
                                    <th>category_id</th>
                                    <th>content</th>
                                    <th>is_monset</th>
                                    <th>status</th>
                                    <th>created_at</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
//                                $query = mysqli_query($db, "SELECT * FROM  blog");
//                                $blogs = mysqli_fetch_all($query, MYSQLI_ASSOC);

                                $database = new Database();
                                $blogs = $database->select('blog','*');
                                foreach ($blogs as $blog) {
                                    ?>
                                    <tr>
                                        <td><?= $blog['title'] ?></td>
                                        <td><?= $blog['description'] ?></td>
                                        <td><?= '<img width="150" height="100" src=uploads/' . $blog['image'] . '>' ?></td>
                                        <td><?= $blog['video'] ?></td>
                                        <td><?= $blog['cat_id'] ?></td>
                                        <td><?= $blog['content'] ?></td>
                                        <td><?= $blog['is_monset'] ?></td>
                                        <td><?= $blog['status'] ?></td>
                                        <td><?= $blog['created_at'] ?></td>
                                        <td style="display:flex;column-gap:5px;">
                                            <a href="index.php?route=blog/edit&id=<?= $blog['id'] ?>" title="Edit"
                                               class="btn btn-sm btn-primary pull-right">
                                                <i class="voyager-paper-plane">Edit</i>
                                            </a>
                                            <a href="index.php?route=blog/delete&id=<?= $blog['id'] ?>"
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
