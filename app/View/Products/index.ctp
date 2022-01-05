<div class="row">
	<?php foreach ($products as $product):?>
	<div class="col-sm-6 col-md-4">
		<div class="">
			<?php echo $this->Html->link($this->Html->image($product['Product']['image']),
					array('action'=>'view',$product['Product']['id']),
					array('escape'=>false,'class'=>'thumbnail'));?>
			<div class="caption">
				<h5>
					<?php echo $product['Product']['name'];?>
				</h5>
				<h5>
					Price: $
					<?php echo $product['Product']['price'];?>
				</h5>
			</div>
		</div>
	</div>
	<?php endforeach;?>
</div>
