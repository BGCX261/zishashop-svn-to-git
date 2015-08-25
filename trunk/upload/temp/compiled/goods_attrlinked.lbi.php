<?php $_from = $this->_var['attribute_linked']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked');if (count($_from)):
    foreach ($_from AS $this->_var['linked']):
?>
<?php if ($this->_var['linked']['goods']): ?>
<div class="box">
 <div class="box_1">
  <h3><span title="<?php echo $this->_var['linked']['title']; ?>"><?php echo sub_str($this->_var['linked']['title'],11); ?></span></h3>
  <div class="boxCenterList RelaArticle">
  <?php $_from = $this->_var['linked']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['linked_goods_data']):
?>
  <a href="<?php echo $this->_var['linked_goods_data']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['linked_goods_data']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['linked_goods_data']['short_name']); ?></a><br />
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
 </div>
</div>
<div class="blank5"></div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>