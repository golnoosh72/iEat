<div class="background">
    <div class="page-container">
        <!--MAIN CONTENT-->
        <div class="row">
            <div class="col-md-12 bg-color-ddd">
                <input type="hidden" value="<?php echo $this->userInformation['id'] ?>"/>
                <!-- HomePage -->
                <div><?php echo $this->notification ?></div>
                <div class="dashboard-content no-print">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <img class="element-center img-responsive img-fluid"
                                         src="<?php echo PROJECT_DIR ?>uploads/menus/<?php echo $this->menuDetail['id'] ?>/<?php echo $this->menuDetail['img'] ?>"
                                         alt="Card image cap">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <!-- fieldsets -->
                                    <fieldset>
                                        <h2 class="fs-title">Menu Detail</h2>
                                        <h3 class="fs-subtitle"></h3>

                                        <!-- --><?php /*foreach ($this->subMenu as $key => $value) {
                                            echo $value['name'];
                                            echo '<br/>';
                                            echo $value['description'];
                                        } */ ?>
                                        <?php
                                        echo '<br/>'; ?>
                                        <strong>
                                            <?php echo $this->menuDetail['name']; ?>
                                        </strong>
                                        <?php
                                        echo '<br/>';
                                        echo $this->menuDetail['content'];
                                        echo '<br/>';
                                        echo '<br/>'; ?>
                                        <strong> Calories:</strong>
                                        <?php
                                        echo $this->menuDetail['calories'];
                                        echo '<br/>';
                                        echo '<br/>'; ?>
                                        <strong> Amount:</strong>
                                        <?php
                                        echo $this->menuDetail['amount'];
                                        echo '<br/>';
                                        echo '<br/>';
                                        ?>


                                        <button type="button"
                                                class="btn bg-warning-400 btn-labeled legitRipple"
                                                data-toggle="modal"
                                                data-target="#applyModal"><strong><i
                                                        class="icon-circle-right2"></i></strong> Add To Cart
                                        </button>
                                    </fieldset>
                                    <div class="modal" tabindex="-1" role="dialog" id="applyModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <fieldset>
                                                    <form class="customForm" method="post"
                                                          action="<?php echo PROJECT_DIR ?>?controller=user&action=addToCart">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Customization</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="text" name="customerName"
                                                                   placeholder="Customer Name"
                                                                   class="menu_field profileTextArea"
                                                                   value="<?php echo !empty($this->userInformation['username']) ? $this->userInformation['username'] : 'Guest' ?>"/>
                                                            <?php if (empty($this->userInformation['address'])) { ?>
                                                                <textarea name="address" placeholder="Address"
                                                                          class="menu_field profileTextArea"></textarea>
                                                            <?php } else { ?>
                                                                <input type="hidden" name="address"
                                                                       value="<?php echo $this->userInformation['address'] ?>"/>
                                                            <?php } ?>
                                                            <?php if (empty($this->userInformation['phone'])) { ?>
                                                                <input type="text" name="phone" placeholder="Phone"
                                                                       class="menu_field profileTextArea"/>
                                                            <?php } else { ?>
                                                                <input type="hidden" name="phone"
                                                                       value="<?php echo $this->userInformation['phone'] ?>"/>
                                                            <?php } ?>
                                                            <textarea name="comment" placeholder="Comment"
                                                                      class="menu_field profileTextArea"></textarea>

                                                            <input type="hidden" name="name"
                                                                   value="<?php echo $this->menuDetail['name']; ?>"/>
                                                            <input type="hidden" name="content"
                                                                   value="<?php echo $this->menuDetail['content']; ?>"/>
                                                            <input type="hidden" name="calories"
                                                                   value="<?php echo $this->menuDetail['calories']; ?>"/>
                                                            <input type="hidden" name="count"
                                                                   value="<?php echo 1 ?>"/>
                                                            <input type="hidden" name="amount"
                                                                   value="<?php echo $this->menuDetail['amount']; ?>"/>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary margin-top">
                                                                Apply
                                                            </button>
                                                            <button type="button" class="btn btn-secondary margin-top"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                        </div>
                                                    </form>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container fluid -->
</div>
<!-- /HomePage -->