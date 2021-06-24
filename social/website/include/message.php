<?php if ($_SESSION['msg']) {?>
    <div class="alert alert-info alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h6><?php echo $_SESSION['msg']; ?>
        <?php unset($_SESSION['msg']) ?>
        </h6>      
    </div>
<?php } ?>