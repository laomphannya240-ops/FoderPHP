

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container shadow rounded-3 p-4 m-auto mt-3 text-center">

        <!-- Button trigger modal -->
        <button id="add" type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal ">
            Add Student
        </button>

        <table class="table text-center">
            <thead>
                <th>
                    ID
                </th>
                <th>Employee</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Profile</th>
                <th>Action</th>
            </thead>
            <tbody id="tbody">
                <?php 
require 'connect.php';
global $connect;

$select = mysqli_query($connect,"SELECT * FROM tbl_employee");

while($row = mysqli_fetch_assoc($select)){

 echo '
 <tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['employee'].'</td>
    <td>'.$row['position'].'</td>
    <td>'. $row['salary'].'</td>
    <td>
        <img src="'.$row['image'].'" width="50" height="50">
    </td>
    <td>
                    <button id="delete" type="submit" class="btn btn-danger">Delelte</button>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal " id="edit" type="submit" class="btn btn-primary">Edit</button>
                </td>
</tr>
';
}
?>
                <!-- <tr>
                <td>01</td>
                <td>DAra</td>
                <td>It junoir</td>
                <td>1200</td>
                <td>
                    <img width="50px" height="50px" src="https://i.pinimg.com/736x/41/67/e9/4167e99030267e03f2d6fb67b66588ce.jpg" alt="">
                </td>
                <td>
                    <button type="submit" class="btn btn-secondary">Delelte</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </td>
</tr> -->
            </tbody>

        </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="form" method="POST" enctype="multipart/form-data" action="">
                           <input hidden type="text" id="id" name="id">
                            <div class="mt-2">
                                <label class="form-label float-start" for="">Employee</label>
                                <input id="name" name="name" class="form-control" type="text" placeholder="Eneter Employee">
                            </div>
                            <div class="mt-2">
                                <label class="form-label float-start" for="">Position</label>
                                <!-- <input class="form-control" type="text" placeholder="Eneter name"> -->
                                <select class="form-select" name="position" id="position">
                                    <option  hidden>Choice Position</option>
                                    <option value="Web Frontend">Web Frontend</option>
                                    <option value="Web Backend">Web Backend</option>
                                    <option value="Mobile App">Mobile App</option>
                                    <option value="Devops">Devops</option>
                                    <option value="Network">Network</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                <label class="form-label float-start" for="">Salary</label>
                                <input name="salary" id="salary" class="form-control" type="text" placeholder="Eneter name">
                            </div>
                            <div class="mt-2">
                                <label class="form-label float-start" for="">Profile</label>
                                <input name="file" id="file" class="form-control" type="file" placeholder="Eneter name">
                                <img class="rounded-circle" width="100px" height="100px" id="image" src="https://i.pinimg.com/736x/41/67/e9/4167e99030267e03f2d6fb67b66588ce.jpg" alt="">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="save" type="button" class="btn btn-primary" data-bs-dismiss="modal">Save </button>
                        <button id="update" type="button" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

</body>

</html>
<script>
    // $(document).ready(function(){
    //     $('#file').hide()
    //     $('#image').click(function(){
    //        $('#file').click()
    //     });
    //     $('#file').change(function(){
    //         const file=this.file[0]
    //         if(file){
    //             const image=URL.createObjectURL(file)
    //             $('#image').attr('src',image)
    //         }
    //     })
    // })
    $(document).ready(function() {
        $('#file').hide();
        $('#image').click(function() {
            $('#file').click();
        });
        $('#file').change(function() {
            const file = this.files[0];
            if (file) {
                const image = URL.createObjectURL(file);
                $('#image').attr('src', image);
            }

        });
        $('#save').click(function(){
            const name=$('#name').val()
            const position=$('#position').val()
            const salary=$('#salary').val()
            const file=$('#file')[0].files[0]
             const image = URL.createObjectURL(file);
             console.log(image);
             

            let formData=new FormData()
            formData.append('name',name);
            formData.append('position',position);
            formData.append('salary',salary);
            formData.append('file',file);

            $.ajax({
                url:'insert.php',
                method:'POST',
                data:formData,
                contentType:false,
                processData:false,
                
                success:function(id){
                    $('#tbody').append(`
                    <tr>
                <td>${id}</td>
                <td>${name}</td>
                <td>${position}</td>
                <td>${salary}</td>
                <td>
                    <img width="50px" height="50px" src="${image}" alt="">
                </td>
                <td>
                    <button id="delete" type="submit" class="btn btn-danger">Delelte</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </td>
</tr>
                    `)
                    $('#form').trigger('reset')
                    $('#image').attr('src','https://i.pinimg.com/736x/41/67/e9/4167e99030267e03f2d6fb67b66588ce.jpg')
                }
    

            })
 
            
        })
        $(document).on('click','#delete',function(){
        if(!confirm("Are you sure")) return
        const row=$(this).closest('tr')
        const id=row.find('td:eq(0)').text().trim()
        $.ajax({
            url:'delete.php',
            method:'POST',
            data:{
                id
            },
            success:function(txt){
                if(txt=='success'){
                    row.remove();
                }
            }
        })
        })

        $('#add').click(function(){

        $('#exampleModalLabel').text("Add Employee")
        $('#save').show()
        $('#update').hide()
        $('#form').trigger('reset')
        $('#image').attr('src','https://i.pinimg.com/736x/41/67/e9/4167e99030267e03f2d6fb67b66588ce.jpg')
        })

        $(document).on('click','#edit',function(){
            $('#exampleModalLabel').text("Update Employee")
        $('#save').hide()
        $('#update').show()

        const row=$(this).closest('tr')
        const id=row.find('td:eq(0)').text().trim()
        const name=row.find('td:eq(1)').text().trim()
        const position=row.find('td:eq(2)').text().trim()
        const salary=row.find('td:eq(3)').text().trim()
        const image=row.find('td:eq(4) img').attr('src')

         $('#id').val(id)
        $('#name').val(name)
        $('#position').val(position)
        $('#salary').val(salary)
        $('#image').attr('src',image)
        $('#update').click(function(){
            const id=$('#id').val()
             const name=$('#name').val()
            const position=$('#position').val()
            const salary=$('#salary').val()
            const file=$('#file')[0].files[0]
             const image = URL.createObjectURL(file);
             console.log(image);

             let formData=new FormData()
              formData.append('id',id);
            formData.append('name',name);
            formData.append('position',position);
            formData.append('salary',salary);
            formData.append('file',file);

              $.ajax({
            url:'update.php',
            method:'POST',
            data:formData,
            contentType:false,
            processData:false,
            success:function(tex){
                if(tex=='success'){
                   
                    row.find('td:eq(1)').text(name)
                    row.find('td:eq(2)').text(position)
                    row.find('td:eq(3)').text(salary)
                    row.find('td:eq(4) img').attr('src',image)
                }
            }
        })   
        })

       

        
            
        })
    });
</script>