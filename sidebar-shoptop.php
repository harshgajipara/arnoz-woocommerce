<div class="col-lg-12">
<div class="product_top_bar d-flex justify-content-between align-items-center">
    <div class="single_product_menu">
        <!-- <p><span>10000 </span> Prodict Found</p> -->
        <p><span><?php woocommerce_result_count(); ?></span></p>
    </div>
    <div class="single_product_menu d-flex">
        <h5>short by : </h5>
        <!--<select>
            <option data-display="Select">name</option>
            <option value="1">price</option>
            <option value="2">product</option>
        </select> -->
        <?php woocommerce_catalog_ordering(); ?>
    </div>
    <div class="single_product_menu d-flex">
        <h5>show :</h5>
        <div class="top_pageniation">
            <!-- <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul> -->
            <?php woocommerce_pagination(); ?>
        </div>
        
    </div>
    <div class="single_product_menu d-flex">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="search"
                aria-describedby="inputGroupPrepend">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i
                        class="ti-search"></i></span>
            </div>
        </div>
    </div>
</div>
</div>