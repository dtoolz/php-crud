<h1>Create Products</h1>

<?php if(!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
                  <div> <?php echo $error ?> </div>
             <?php endforeach; ?>
        </div>
    <?php endif; ?>
     
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>Product Image</label> <br>
          <input type="file" name="image">
        </div>
        <div class="form-group">
          <label>Product Title</label>
          <input type="text" name="title" class="form-control" value="<?php echo $product['title'] ?>" >
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea name="description" class="form-control"><?php echo $product['description'] ?></textarea>
        </div>
        <div class="form-group">
          <label>Product Price</label>
          <input type="number" step=".01" name="price" class="form-control" value="<?php echo $product['price'] ?>" >
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
     </form>
    