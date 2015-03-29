
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.dataTables.js"></script>
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.mousewheel.js"></script>
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.widget.min.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro.min.js"></script>
    
    <script src="<?php  echo base_url(); ?>js/metro/metro-dropdown.js"></script> 


<script>
function checkPassword(status)
	{/*
		 $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                icon: '<span class="icon-warning"></span>',
                title: 'Warning',
                width: 550,
                padding: 10,
                content: '',
                onShow: function(_dialog){
                    var content='<div align="center"><h3>Perubahan Password '+status+'</h3></div><button class="default" style="margin-left:200px;width:100px" onclick="$.Dialog.close()">OK</button>';
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
				});*/
                alert('Perubahan Password '+status);
	}


</script>
<?php 

if (isset($changePassword) && $changePassword!="")
{
    echo "lala".$changePassword;
?>
<script>

checkPassword("<?php echo $changePassword?>")
</script>
<?php 
}
?>

