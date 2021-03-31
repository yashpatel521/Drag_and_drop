<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <script>
        Dropzone.options.myDropzone = {
            url: 'upload.php',
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 50,
            maxFiles: 50,
            maxFilesize: 1,
            acceptedFiles: 'image/*',
            addRemoveLinks: true,
            success: function(file, response) {

            },
            init: function() {
                dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

                // for Dropzone to process the queue (instead of default form behavior):
                document.getElementById("submit-all").addEventListener("click", function(e) {
                    // Make sure that the form isn't actually being sent.
                    e.preventDefault();
                    e.stopPropagation();
                    dzClosure.processQueue();
                });

                //send all the form data along with the files:
                this.on("sendingmultiple", function(data, xhr, formData) {
                    formData.append("firstname", $("#firstname").val());
                    formData.append("lastname", $("#lastname").val());
                });
            }
        }
    </script>
</head>

<body>
    <form action="upload.php" enctype="multipart/form-data" method="POST">
        <input type="text" id="firstname" name="firstname" required />
        <input type="text" id="lastname" name="lastname" required />

        <div class="dropzone" id="myDropzone" style="border: 1px solid red;">hfdsjhj</div>
        <button type="submit" id="submit-all"> upload </button>
    </form>
</body>

</html>