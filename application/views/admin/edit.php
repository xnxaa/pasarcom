<div class="content">
    <div class="py-4 px-3 px-md-4">

        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Edit Data</div>
        </div>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="post" action="<?= base_url(); ?>c_admin/update">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $edit['id']; ?>">
                        <label for="code">Code Product</label>
                        <input type="text" class="form-control" id="code" name="code" value="<?php echo $edit['code']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Name Product</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $edit['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $edit['stock']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $edit['price']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text-area" class="form-control" id="description" name="description" value="<?php echo $edit['description']; ?>">
                    </div>

                    <button type="submit" class="btn button mr-2">Submit</button>
                    <button type="submit" class="btn cancel">Cancel</button>
                </form>
            </div>
        </div>
    </div>