<?php
include_once 'include/header.php';
include_once 'include/nav.php';

?>
<style type="text/css">
    #footer {
    z-index: 1;
    padding: 0 0 0 20px;
    bottom: -50px;
    font-size: 10px;
    margin-top: 25px;
    margin-bottom: 0px;
}
</style>
<script src="js/index.js" type="text/javascript"/></script>
    <!-- Page Content -->
    <div class="container">
<div style="margin-top:48px;" class="notifications top-right"></div>
        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Publish Proof-of-Existence
                    <span class="headspan">Upload the file &amp; get the PoE link</span>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
        
            <div class="col-md-8">
            <div id="form_container">
                <form id="upload_form" method="POST" enctype="multipart/form-data" action="publish.php">
                  <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email ID" required>
                  </div>
                  <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea class="form-control" rows="3" maxlength="100" id="message" name="message" placeholder="(Optional) I am the original creator of this file & this Blockchain-based PoE is the proof."></textarea>
                  </div>

                  
                  <div class="form-group">
                    <label for="poeFile">File to Generate PoE</label>
                    <div id="filedrag" style="display: none;" class="dropbox">
                          Click here or drag and drop your document in the box.
                          <br /> The file will NOT be uploaded. The cryptographic proof is calculated client-side.
                        </div>
                        <div id="explain"></div>
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped"></div>
                        </div>
                        <fieldset>
                            <input id='file' type="file" name="d" required/>
                           
                          </fieldset>
                                    <!--<input type="file" id="poeFile">-->
                                  </div>

                                <input type="hidden" id="signature" name="signature" value="">
                                <div id="html_element" required></div>
                                  <button type="submit" name="submit" class="btn btn-primary">Generate PoE Now</button>
                </form>
                </div>
                <br/>
                <br/>

                <div class="table-responsive">
                <h3>Recently Generated PoE</h3>
                <table class="table table-striped table-hover" id="recently_published"></table>
                </div>
            
                <br/>
                <br/>

            </div>

            <div class="col-md-4">
            <div id="description_container">
                <?php
                include_once 'include/product_description.php';
            ?> 
            </div>
            </div>

           

        </div>
        <!-- /.row -->


<?php
include_once 'include/footer.php';
?>        