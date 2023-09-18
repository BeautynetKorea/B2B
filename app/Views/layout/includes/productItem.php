<?php if ( !empty($products) ) : ?>
<?php foreach($products as $product) : ?>
<div class='d-flex flex-row border border-top-0 justify-content-between py-1 px-2 list-group-item'>
  <div class='d-flex flex-row align-items-start product-item mx-0 my-auto'>
    <div class='position-relative thumbnail-group'>
    <?php if ( strpos(esc($product['img_url']), 'no-image') === false ) : ?>
    <!-- <div class='thumbnail-zoom border border-1 rounded-1 d-none' style="background-image: url('<?//=esc($product['img_url'])?>')"></div> -->
    <div class='thumbnail-zoom border border-1 rounded-1 d-none'></div>
    <?php endif; ?>
    <?=img(esc($product['img_url']), false, ['class'=>'thumbnail me-2']);?>
    </div>
    <div class='d-flex flex-column name-type-group'>
      <div class='name-group'>
        <span class='brand_name'><?=htmlspecialchars(stripslashes($product['brand_name']))?></span>
        <span class='product_name'><?=htmlspecialchars(stripslashes($product['name_en']))?></span>
        <span class=''>
          <?php
            echo trim($product['spec']);
            // ($product['container'] == 1 && $product['spec_detail']  > 0 ? "<span class='font-size-small'>(".$product['spec_detail']."&#215;".$product['spec_pcs']."pcs)</span>" : "").
            if ( $product['box'] == 1 ) {
              if ( $product['container'] == 0 ) {
                if ( empty($product['spec_pcs']) ) echo "/pc";
                // else if ( !empty($product['spec_detail']))
              }
              echo "<span class='parenthesis font-monospace font-size-middle ms-1'>".$product['in_the_box']."ea/Box</span>";
            }

            // echo ($product['box'] == 2 ? "<span class='parenthesis font-monospace font-size-middle ms-1'>".$product['in_the_box']."pcs</span>" : "");
            if ( $product['box'] == 2 ) {
              if ( $product['container'] == 0 ) {
                if ( !empty($product['spec_detail']) ) {
                  $box_component_spec = explode(',', $product['spec_detail']);
                  $box_component_pcs = explode(',', $product['spec_pcs']);
                  $box_component = explode(',', $product['contents_of_box']);
                  // echo 'aaaa '.(!empty($box_component));
                  $temp = '';

                  if ( $product['in_the_box'] == count($box_component_spec) ) {
                    echo "<span class='parenthesis font-monospace font-size-middle ms-1'>";

                    if ( $product['in_the_box'] == count($box_component_pcs) ) {
                      if ( $product['in_the_box'] == count($box_component) ) {
                        for($j = 0; $j < count($box_component); $j++ ) {
                          $temp.=$box_component[$j].' ';
                        }  
                      }
                      for($i = 0; $i < count($box_component_spec); $i++ ) {
                        if ( $i > 0 ) $temp.='/';
                        $temp.=$box_component_spec[$i].'&#215;'.$box_component_pcs[$i].'ea';
                      }
                    } else $temp.= $product['in_the_box']."ea";
                    echo $temp;
                    echo "</span>";
                  } else {
                    if ( !empty($product['type_en']) ) {
                      if ( $product['in_the_box'] == count($box_component_spec) ) {
                        if ( empty($product['spec']) ) {
                          $temp.=$product['type_en'].'&#215;'.$box_component_spec[0];
                        }

                        for($i = 1; $i < count($box_component_spec); $i++) {
                          if ( empty($product['contents_of_box'])) {
                            $temp.=$product['contents_of_box'].'&#215;'.$box_component_spec[$i];
                          }
                        }
                      }
                    }
                  }
                } else {
                  if ( $product['in_the_box'] > 0 ) {
                    echo "<span class='parenthesis font-monospace font-size-middle'>";
                    echo '&#215'.$product['in_the_box'].($product['in_the_box'] > 1 ? 'pcs' : 'pc').'</span>';
                  }
                }
              }
            }

            if ( $product['container'] == 1 ) {
              if ( $product['box'] == 0 ) {
                echo "<span class='parenthesis font-monospace font-size-middle'>";
                echo $product['spec_detail'];
                echo '&#215;'.$product['spec_pcs'].'ea';
                echo '</span>';
              }
            }
          ?>
        </span>
      </div>
      <div class='font-size-middle'>
        <?php
          if ( !empty($product['type_en']) ) {
            echo "<span class='fw-bold type-en text-capitalize'>".lang('Lang.productType')." : #".$product['type_en']."</span>";
          }

          if ( !empty($product['package']) && !empty($product['package_detail'])) {
            echo "<span class='fw-bold text-capitalize'>".lang('Lang.compo')." : ".$product['package_detail']."</span>";
          }
        ?>            
      </div>
      <div class='tag-group d-flex flex-row flex-nowrap'>
        <?php
          echo "<span class='tag-item on-sale'>".lang('Lang.onsale')."</span>";
          if ( !empty($product['taxation']) && $product['taxation'] == 1 ) {
            echo "<span class='tag-item taxation'>zero tax</span>";
          }
          // echo ($product['box'] == 1 ? "<span class='tag-item inTheBox'>".$product['in_the_box']."pcs/Box</span>" : "");
          if ( !empty($product['sample']) ) {
            echo "<span class='tag-item sample'>".lang('Lang.sample')."</span>";
          }
        ?>
      </div>
    </div>        
  </div>
  <div class='d-flex flex-column justify-content-between align-items-end'>
    <div class='font-size-large'>
      <?php 
        echo session()->currency['currencySign'];
        echo number_format($product['product_price'], session()->currency['currencyFloat']);
      ?>
    </div>
    <div class='d-flex flex-column align-items-end'>
      <form method='post'>
        <!-- <?php print_r($product)?> -->
        <input type='hidden' name='brand_id' value='<?=$product['brand_id']?>'>
        <input type='hidden' name='prd_id' value='<?=$product['id']?>'>
        <input type='hidden' name='prd_price' value='<?=$product['product_price']?>'>
        <!-- <input type='hidden' name='order_qty' value='<?//=empty($product['moq']) ? 10 : $product['moq']?>'> -->
        <?php 
        $hasCart = false;
        if ( !empty($carts) ) :           
          foreach( $carts AS $cart ) :
            if ( $cart['id'] == $product['id'] ) : 
              $hasCart = true; 
              $cartId = $cart['cart_idx'];
            endif;
          endforeach;
        endif; ?>
        <?php if ( !$hasCart ) : ?>
        <button class='btn btn-sm order-req' 
              data-prd-id='<?=$product['id']?>'
              data-add-class='bsk-del-btn' 
              data-remove-class='order-req'
              data-btn='<?=lang('Lang.unselectBtn')?>'>
          <?=lang('Lang.selectBtn')?>
        </button>
        <?php else : ?>
        <input type='hidden' class='cart_idx' value='<?=$cartId?>'>
        <button class='btn btn-sm bsk-del-btn' 
              data-prd-id='<?=$product['id']?>' 
              data-add-class='order-req' 
              data-remove-class='bsk-del-btn'
              data-btn='<?=lang('Lang.selectBtn')?>'>
          <?=lang('Lang.unselectBtn')?>
        </button>
        <?php endif; ?>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?php endif; ?>