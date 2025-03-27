<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
  </head>
  <body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">E-commerce Laravel CRUD</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="<?php echo e(route('products.create')); ?>" class="btn btn-dark">Create</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <?php if(Session::has('success')): ?>
            <div class="col-md-10 mt-4">
                <div class="alert alert-success">
                    <?php echo e(Session::get('success')); ?>

                </div>
            </div>    
            <?php endif; ?>            
            <div class="col-md-12">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Products</h3>
                    </div>
                    <div class="card-body">
                        <table class="table" id="productTable">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Sku</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody> 
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        fetch("/api/products")
            .then(response => response.json())
            .then(data => {
                let tableBody = document.querySelector("#productTable tbody");
                tableBody.innerHTML = "";

                data.forEach(product => {
                    let row = `<tr>
                        <td><img src="/uploads/products/${product.image}" style="width: 40px;"></td>
                        <td>${product.name}</td>
                        <td>${product.description}</td>
                        <td>${product.sku}</td>
                        <td>₹${product.price}</td>
                        <td><a href="/products/${product.id}/edit" class="btn btn-dark">Edit</a>
                            <a href="/products/${product.id}" onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a></td>
                    </tr>`;
                    tableBody.innerHTML += row;
                });
            })
            .catch(error => console.error("Error fetching products:", error));
    });
</script><?php /**PATH E:\xampp\htdocs\interview\laravel11-crud\resources\views/products/list.blade.php ENDPATH**/ ?>