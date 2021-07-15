<div class="container">
    <form method="post" enctype="multipart/form-data">
        <h3>UPDATE PRODUCT</h3>
        <?php if(isset($product)):?>
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text"  class="form-control" id="name" name="nameProduct" value="<?php echo $product->getName()?>">
            </div>
            <div class="mb-3">
                <label for="sex" class="form-label">sex</label>
                <input type="text"  class="form-control" id="sex" name="sex" value="<?php echo $product->getSex()?>">
            </div>
            <div class="mb-3">
                <label for="size" class="form-label">size</label>
                <input type="text"  class="form-control" id="size" name="size" value="<?php echo $product->getSize()?>">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">category</label>
                <input type="text" class="form-control" id="category" name="category" value="<?php echo $product->getCategory()?>">
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">brand</label>
                <input type="text" class="form-control" id="brand" name="brand" value="<?php echo $product->getBrand()?>">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">color</label>
                <input type="text" class="form-control" id="color" name="color" value="<?php echo $product->getColor()?>">
            </div>
            <div class="mb-3">
                <label for="material" class="form-label">material</label>
                <input type="text" class="form-control" id="material" name="material" value="<?php echo $product->getMaterial()?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $product->getPrice()?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">status</label>
                <input type="text" class="form-control" id="status" name="status" value="<?php echo $product->getStatus()?>">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">img</label>
                <input type="file" class="form-control" id="img" name="fileToUpload">
            </div>

            <div class="mb-3">
                <img width="150px" src="<?php echo $product->getImg()?>" alt="<?php echo $product->getImg()?>">
            </div>

        <?php endif ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
