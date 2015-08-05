<form method="post">
	<textarea name="xss"><?php echo htmlspecialchars($xss);?></textarea>
	<input type="submit" />
</form>
<p>XSS:
<hr />
<?php echo $xss; ?>