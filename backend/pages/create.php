<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Pages Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="index.php?route=pages/store" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" class="form-control"  placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" name="description" class="form-control"  placeholder="Enter description">
                        </div>
                        <div class="form-group">
                            <label for="content">content</label>
                            <input type="text" name="content" class="form-control"  placeholder="Enter content">
                        </div>
                        <div class="form-group">
                            <label for="is_menu">is_menu</label>
                            <input type="number" max="1" min="0" name="is_menu" class="form-control" placeholder="Enter is_menu">
                        </div>
                        <div class="form-group">
                            <label for="status">status</label>
                            <input type="number" max="1" min="0" name="status" class="form-control" placeholder="Enter status">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>