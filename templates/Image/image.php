<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<html lang="en">

<head>
    <title>CakePHP 4 Crop Image Before Upload Using Croppie.js</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
</head>


<body>
    <div class="row">
        <aside class="column">
            <div class="side-nav">
                <h4 class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('List Image'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>
        <div class="container" style="margin-top:30px;">
            <div class="panel panel-primary">
                <div class="panel-heading">CakePHP 4 Crop Image Before Upload Using Croppie.js</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div id="cropie-demo" style="width:250px"></div>
                        </div>
                        <div class="col-md-4" style="padding-top:30px;">
                            <strong>Select Image:</strong>
                            <input type="file" id="upload">
                            <br />
                            <button class="btn btn-success upload-result">Upload Image</button>
                        </div>


                        <div class="col-md-4">
                            <div id="image-preview" style="background:#e1e1e1;padding:30px;height:300px;"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
    <script src="../../webroot/js/croppie.js"></script>


</body>

</html>