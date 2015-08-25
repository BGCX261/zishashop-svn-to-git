<div class="box">
 <div class="box_2">
  <div class="top10Tit"></div>
  <div class="top10List">
   <ul>
    <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['top_goods']['iteration']++;
?>
    <li><img src="themes/default/images/top_<?php echo $this->_foreach['top_goods']['iteration']; ?>.gif" /> <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   </ul>
  </div>
 </div>
</div>
<div class="blank5"></div>
