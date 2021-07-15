<div class="container">
    <table class="table">
        <thead>
        <tr>
           
            <th scope="col">img</th>
            <th scope="col">name</th>
            <th scope="col">sex</th>
            <th scope="col">size</th>
            <th scope="col">category</th>
            <th scope="col">brand</th>
            <th scope="col">color</th>
            <th scope="col">material</th>
            <th scope="col">price</th>
            <th scope="col">status</th>

            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)) {
            foreach ($products as $product) :?>
                <tr>
                    <td><img width="150px" src="<?php echo $product->getImg() ?>" alt="" ></td>
                    <td><?php echo $product->getName() ?></td>
                    <td><?php echo $product->getSex() ?></td>
                    <td><?php echo $product->getSize() ?></td>
                    <td><?php echo $product->getCategory() ?></td>
                    <td><?php echo $product->getBrand() ?></td>
                    <td><?php echo $product->getColor() ?></td>
                    <td><?php echo $product->getMaterial() ?></td>
                    <td><?php echo $product->getPrice() ?></td>
                    <td><?php echo $product->getStatus() ?></td>
                    <td><a href="index.php" class="btn btn-warning btn-lg">Buy</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>
<?php include_once '../layouts/footer.php' ?>