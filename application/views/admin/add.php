<div class="content">
    <div class="py-4 px-3 px-md-4">

        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Add Product</div>
        </div>


        <div class="card">
            <div class="card-body">

                <form class="forms-sample" method="post" action="<?= base_url(); ?>c_admin/add_action">
                    <div class="form-group">
                        <label for="code">Code Product</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Code Product">
                    </div>
                    <div class="form-group">
                        <label for="name">Name Product</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name Product">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text-area" class="form-control" id="description" name="description" placeholder="Description">
                    </div>

                    <button type="submit" class="btn button mr-2">Submit</button>
                </form><br>
                <a href="<?= base_url(); ?>c_admin/product"><button type="submit" class="btn cancel">Cancel</button></a>
            </div>
        </div>
    </div>