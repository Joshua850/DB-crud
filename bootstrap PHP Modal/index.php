<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pHP MOFAL</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js">
        // integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" >
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js">
    </script>



    <script>
        $(document).ready(function() {
            displayData();

        })

        function displayData() {
            var displayData = "true";
            $.ajax({
                url: "display.php",
                type: "post",
                data: {
                    displaySend: displayData

                },

                success: function(data, status) {
                    $('#displayDataTable').html(data);

                }

            })
        }

        function addUser() {
            var titleAdd = $('#title').val();
            var nameAdd = $('#first-name').val();
            var emailAdd = $('#email').val();
            var mobileAdd = $('#mobile').val();
            var surNameAdd = $('#sur-name').val();


            $.ajax({
                url: "insert.php",
                type: 'post',
                data: {
                    titleSend: titleAdd,
                    nameSend: nameAdd,
                    emailSend: emailAdd,
                    mobileSend: mobileAdd,
                    surNameSend: surNameAdd


                },
                success: function(data, status) {
                    //funtion to display data
                    console.log(status);
                    displayData()

                }
            });

        }

        function DeletUser(deleteid) {
            // console.log(deleteid);
            $.ajax({
                    url: 'delete.php',
                    type: 'post',
                    data: {
                        deletesend: deleteid
                    },
                    success: function(data, status) {
                        displayData();
                    }
                }

            )
        }

        function updateUser(id) {
            console.log("button pressed")
            $('#updateModal').modal('show');
            $('#hiddenData').val(id);
        }
        // console.log("update button pressed")
        // $('hiddenData').val(id)

        // $.post(
        //     "update.php", {
        //         id: id
        //     },

        //     function(data, status) {
        //         var userId = JSON.parse(data);
        //         $('update-title').val(userId.title)
        //         $('update-first-name').val(userId.firstname)
        //         $('update-sur-name').val(userId.surname)
        //         $('update-mobile').val(userId.mobile)
        //         $('update-email').val(userId.email)

        //     });
        //console.log(id)
    </script>
</head>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-group">

                        <label for="title">title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title">

                    </div>

                    <label for="first-name">Name</label>
                    <input type="text" class="form-control" id="first-name" placeholder="Enter First Name">

                </div>
                <div class="form-group">
                    <label for="sur-name">Sur Name</label>
                    <input type="text" class="form-control" id="sur-name" placeholder="Enter sur name">

                </div>

                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Enter mobile">

                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter email">

                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="addUser()" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
                <!-- <input type=text> -->
            </div>
        </div>
    </div>
</div>

<!-- update modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModal">Update user
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <div class="form-group">
                    <div class="form-group">

                        <label for="update-title">title</label>
                        <input type="text" class="form-control" id="update-title" placeholder="Enter title">

                    </div>

                    <label for="update-first-name">Name</label>
                    <input type="text" class="form-control" id="update-first-name" placeholder="Enter First Name">

                </div>
                <div class="form-group">
                    <label for="update-sur-name">Sur Name</label>
                    <input type="text" class="form-control" id="update-sur-name" placeholder="Enter sur name">

                </div>

                <div class="form-group">
                    <label for="update-mobile">Mobile</label>
                    <input type="text" class="form-control" id="update-mobile" placeholder="Enter mobile">

                </div>

                <div class="form-group">
                    <label for="update-email">Email address</label>
                    <input type="text" class="form-control" id="update-email" placeholder="Enter email">

                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    update
                </button>
                <button type="button" class="btn btn-primary">
                    close
                </button>
                <input type="hidden" id="hiddenData">

            </div>
        </div>
    </div>
</div>

<body>
    <div class=" container">
        <h1>
            cs230 assignemnt </h1>
    </div>
    <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#completeModal">
        Add users
    </button>
    <div id="displayDataTable"></div>





</body>

</html>