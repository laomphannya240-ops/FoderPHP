<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div class="container shadow rounded-3 mt-4 p-5">

        <!-- Button trigger modal -->
        <button type="button"
        id="add"
            class="btn btn-outline-dark float-end"
            data-bs-toggle="modal"
            data-bs-target="#Modal">
            Add Product
        </button>

        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>QTY</th>
                    <th>Price</th>
                   
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
    <?php 
    require 'connect.php';
    global $connect;
    $select="SELECT * FROM tbl_product ";
    $execute=mysqli_query($connect,$select);
    while($row=mysqli_fetch_assoc($execute)){
        echo "
         <tbody>
                <tr>
                    <td>$row[id]</td>
                    <td>$row[p_name]</td>
                    <td>$row[qty]</td>
                    <td>$row[price]</td>
                    

                    <td>
                        <img
                            src='$row[image]'
                            width='40'
                            height='40'
                            alt=''>
                    </td>

                    <td>
                        <a class='btn btn-outline-danger' href='Delete.php?id={$row['id']}' onclick='return confirm(\"តើអ្នកចង់លុបមែនទេ?\")'>Delete</a>
                        <a id='edit' data-bs-toggle='modal' data-bs-target='#Modal' class='btn btn-outline-warning' href='Edit.php?id={$row['id']}' >Edit</a>
                       
                    </td>
                </tr>
            </tbody>
        ";

    };
    ?>
           

            <!-- Modal -->
            <div class="modal fade"
                id="Modal">

                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Add Product
                            </h1>

                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close">
                            </button>
                        </div>

                        <div class="modal-body">
                            <form id="form" action="insert.php" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="id" id="id">  
                                <div class="mb-2">
                                    <label class="form-label">Product Name</label>
                                    <input type="text"
                                     id="p_name"
                                        name="p_name"
                                        class="form-control"
                                        placeholder="Product...">
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">QTY</label>
                                    <input type="number"
                                        name="qty"
                                        id="qty"
                                        class="form-control"
                                        placeholder="QTY...">
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">Price</label>
                                    <input type="number"
                                        step="0.01"
                                        id="price"
                                        name="price"
                                        class="form-control"
                                        placeholder="Price...">
                            </div>

                                <div class="mb-2">
                                    <label class="form-label">Image</label>
                                    <input type="file"
                                        name="image"
                                        id="image"
                                        class="form-control">
                                </div>

                                <div class="modal-footer">
                                    <button type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal">
                                        Close
                                    </button>

                                    <button name="btnSave" type="submit" id="save"
                                        class="btn btn-primary">
                                        Save
                                    </button>
                                     <button name="btnUpdate" type="submit" id="update"
                                        class="btn btn-warning">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </table>
    </div>
</body>

</html>

<script>
    $(document).ready(function(){
        $('#add').click(function(){
            $('#update').hide()
            $('#save').show()
            $('#exampleModalLabel').text('Add Product')
            $('#form').trigger('reset');
            $('#form').attr('action','insert.php')
        })
        $(document).on('click','#edit',function(){
            $('#update').show()
            $('#save').hide()
            $('#exampleModalLabel').text('Update Product')
            $('#form').attr('action','update.php')
            const row=$(this).closest('tr')
            const id=row.find('td:eq(0)').text().trim()
            const p_name=row.find('td:eq(1)').text().trim()
            const qty=row.find('td:eq(2)').text().trim()
            const price=row.find('td:eq(3)').text().trim()
            const image=row.find('td:eq(5) img').attr('src');
            console.log(image);

            $('#id').val(id)
            $('#p_name').val(p_name)
            $('#qty').val(qty)
            $('#price').val(price)
        })
    })

    // document.getElementById('')
    </script>