<?php 
require "Classes/lists.class.php";
$lists = new Lists();
$categ = $lists->ListCateg()->fetchAll(PDO::FETCH_ASSOC);
?>
<select class="form-control" name="category">
    <?php $i=0; while(isset($categ[$i])) { ?>
	<option value="<?php echo $categ[$i]['CAT_ID']; ?>"><?php echo $categ[$i]['CAT_TAG']; ?></option>
</select>
<?php } ?>