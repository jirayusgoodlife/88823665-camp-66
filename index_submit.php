<h1> email: 
    <?php if(isset($_REQUEST['email'])){ echo  $_REQUEST['email'];}?>
</h1>
<h1> detail: 
    <?php echo isset($_REQUEST['email']) ? $_REQUEST['detail'] : "";?>
</h1>