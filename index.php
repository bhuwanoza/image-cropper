<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A simple jQuery image cropping plugin.">
  <meta name="keywords" content="HTML, CSS, JS, JavaScript, jQuery plugin, image cropping, image crop, image move, image zoom, image rotate, image scale, front-end, frontend, web development">
  <meta name="author" content="Fengyuan Chen">
  <title>Cropper</title>
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/cropper.css">
  <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="img-container">
          <img id="image" src="assets/images/picture.jpg" alt="Picture">
        </div>
      </div>
      <div class="col-md-3">
        <div class="docs-preview clearfix">
          <div class="img-preview preview-lg"></div>
          <div class="img-preview preview-md"></div>
          <div class="img-preview preview-sm"></div>
          <div class="img-preview preview-xs"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9 docs-buttons">
        <div class="btn-group">
          <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
            <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Import image with Blob URLs">
              <span class="fa fa-upload"></span>
            </span>
          </label>
        </div>
        <div class="btn-group btn-group-crop">
            <input class="btn btn-primary" type="button" name="Upload" id="uploadbutton" value="Submit">
            <input type="hidden" name="" id="image152">
            <input type="hidden" name="" id="image120">
            <input type="hidden" name="" id="image76">
            <input type="hidden" name="" id="image60">
            <input type="hidden" name="" id="image32">
          <button type="button" style="display: none;" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 152, &quot;height&quot;: 152 }">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 152, height: 152 })">
              152&times;152
            </span>
          </button>
          <button type="button" style="display: none;" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 120, &quot;height&quot;: 120 }">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 120, height: 120 })">
              120x120
            </span>
          </button>
          <button type="button" style="display: none;" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 76, &quot;height&quot;: 76 }">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 76, height: 76 })">
              76x76
            </span>
          </button>
          <button type="button" style="display: none;" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 60, &quot;height&quot;: 60 }">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 60, height: 60 })">
              60x60
            </span>
          </button>
          <button type="button" style="display: none;" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 32, &quot;height&quot;: 32 }">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 32, height: 32 })">
              32x32
            </span>
          </button>
        </div>
        <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"></div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script src="assets/js/cropper.js"></script>
  <script src="assets/js/main.js"></script>
<script type="text/javascript">
jQuery('#uploadbutton').on('click', function(){
$("button[data-method='getCroppedCanvas']").trigger('click');

var image152 = $('#image152').val();
var image120 = $('#image120').val();
var image76 = $('#image76').val();
var image60 = $('#image60').val();
var image32 = $('#image32').val();
jQuery.ajax({
  type: 'POST',
  url: 'test.php',
  /*data: postedData,
  dataType: 'json',*/
  data: {
    image152:image152,
    image120:image120,
    image76:image76,
    image60:image60,
    image32:image32,
  },
  success: function(data){
        alert('uploaded');
       
  }
});
});


</script>
</body>
</html>
