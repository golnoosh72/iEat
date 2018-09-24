<div class="container-fluid">
    <div><?php echo $this->notification ?></div>
    <form class="customForm" method="post"
          action="<?php echo PROJECT_DIR ?>?controller=user&action=placeOrder">
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title">Bill</h6>
         <!--   <div class="heading-elements">
                <button type="button" class="btn btn-default btn-xs heading-btn legitRipple"><i
                            class="icon-file-check position-left"></i> Save
                </button>
                <button type="button" class="btn btn-default btn-xs heading-btn legitRipple"><i
                            class="icon-printer position-left"></i> Print
                </button>
            </div>-->
            <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

        <div id="invoice-editable" contenteditable="true" class="cke_contents_ltr"
             tabindex="0" spellcheck="false" role="textbox" aria-describedby="cke_66" style="position: relative;">
            <div class="panel-body no-padding-bottom">
                <div class="row">
                    <div class="col-sm-6 content-group"><img data-cke-saved-src="assets/images/logo_demo.png"
                                                             src="assets/images/logo_demo.png"
                                                             class="content-group mt-10"
                                                             alt="" style="width: 120px;">
                        <ul class="list-condensed list-unstyled"  data-intro='You can see the branch here.' data-step="1">
                           Subway Montreal- Concordia Branch
                        </ul>
                    </div>
                    <div class="col-sm-6 content-group">
                        <div class="invoice-details"><h5 class="text-uppercase text-semibold"></h5>
                            <ul class="list-condensed list-unstyled">
                                <li>Date: <span class="text-semibold"><?php echo date('d-m-y')?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-9 content-group"><span class="text-muted">Invoice To:</span>
                        <ul class="list-condensed list-unstyled">
                        <li  data-intro='You can see your name here.' data-step="2"> <?php echo $this->cartInfo[0]['customer_name']?></li>
                        <li data-intro='You can see your address here.' data-step="3"> <?php echo $this->cartInfo[0]['address']?></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 content-group"><span class="text-muted">Payment Details:</span>
                        <ul class="list-condensed list-unstyled invoice-payment-details">
                            <li  data-intro='You can see the amount without tax here.' data-step="4"><h5>Bill Amount: <span class="text-right text-semibold"></span></h5></li>
                            <?php
                            $sum = 0;
                            foreach ($this->cartInfo as $key=>$value){
                               $sum = $value['amount'] + $sum;
                            }
                            echo $sum;
                            ?>
                        <li data-intro='You can see the tax fee here.' data-step="5"><h5>Tax: <span class="text-right text-semibold"></span></h5></li>
                            <?php $taxFee = ($sum * 15)/100; echo  $taxFee?>
                            <li data-intro='You can see the delivery fee here.' data-step="6"><h5>Delivery fee: <span class="text-right text-semibold"></span></h5></li>
                            <?php
                            if($sum > 15){
                                $deliveryFee = 0;
                            }else{
                                $deliveryFee = 3;
                            }
                            echo $deliveryFee ?>
                            <li data-intro='You can see the total amount here.' data-step="7"><h5>Total: <span class="text-right text-semibold"></span></h5></li>
                            <?php  $totalDue =$sum + $taxFee + $deliveryFee; echo $totalDue?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-lg cke_show_border" data-intro='You can see the detail of your order here.' data-step="8">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th class="col-sm-1">Count</th>
                        <th class="col-sm-1">Comment</th>
                        <th class="col-sm-1">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($this->cartInfo as $key=>$value){?>
                        <tr>
                            <td><?php echo  $value['name']?></td>
                            <td><?php echo  $value['count']?></td>
                            <td><?php echo  $value['comment']?></td>
                            <td><?php echo  $value['amount']?></td>
                        </tr>
                  <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <input type="hidden" name="full_name" value="<?php echo $this->cartInfo[0]['customer_name']?>"/>
        <input type="hidden" name="address" value="<?php echo $this->cartInfo[0]['address']?>"/>
        <input type="hidden" name="phone" value="<?php echo $this->cartInfo[0]['phone']?>"/>
        <input type="hidden" name="total_price" value="<?php echo $totalDue?>"/>
        <input type="hidden" name="order_date_time" value="<?php echo date('Y-m-d H:i:s')?>"/>
        <input type="hidden" name="customerId" value="<?php echo !empty($this->userInformation['id']) ? $this->userInformation['id'] : 0?>"/>
    <button type="submit" class="btn bg-warning-400 btn-labeled legitRipple" data-intro='Click on place order to complete order.' data-step="9"><strong><i
                    class="fa fa-plus"></i></strong> Place Order</button>
    </form>