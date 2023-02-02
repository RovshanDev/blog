<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Settings Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="index.php?route=settings/store" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="key">some</label>
                            <input type="text" name="some" class="form-control"  placeholder="Enter some">
                        </div>
                        <div class="form-group">
                            <label for="value">any</label>
                            <input type="text" name="any" class="form-control"  placeholder="Enter any">
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