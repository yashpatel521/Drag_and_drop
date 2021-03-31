<!DOCTYPE html>
<html>

<head>
  <title>PHP Dropzone File Upload on Button Click Example</title>
  <!-- <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script> -->
  <!-- <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>PHP Dropzone File Upload on Button Click Example</h2>
        <form action="upload.php" style="border: 1px solid red;" enctype="multipart/form-data" class="dropzone" id="image-upload">
          <div>
            <h3>Upload Multiple Image By Click On Box</h3>
          </div>
        </form>
        <button id="uploadFile">Upload Files</button>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone(".dropzone", {
      autoProcessQueue: false,
      maxFilesize: 1,
      acceptedFiles: ".jpeg,.jpg,.png,.gif"
    });

    $('#uploadFile').click(function() {
      myDropzone.processQueue();
    });
  </script>

</body>

</html>