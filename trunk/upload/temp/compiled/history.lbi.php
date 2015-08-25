<div class="box">
 <div class="box_1">
  <h3><span><?php echo $this->_var['lang']['view_history']; ?></span></h3>
  <div class="boxCenterList RelaArticle">
     <ul class="clearfix" id="history">
    <?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </ul>
  </div>
 </div>
</div>
<div class="blank5"></div>