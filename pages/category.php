<?php
    $category = $db->get_where_first('category', 'name', $cat);
    $cat_id = $category['id'];
    $games = $db->get_where_all('games', 'category_id', $cat_id);
?>

<div class="slide-container">
    <div class="wrap">

        <?php
        foreach ($games as $game) {
            $img = $db->get_where_first('images', 'game_id', $game['id']);
            ?>
            <div class="wrapper">
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo ASSETS. 'imgs/games/'. $img['img']; ?>" alt="<?php echo $img['img']; ?>" />
                    </div>

                    <div class="card-title"> <?php echo $game['name']; ?> </div>

                    <div class="card-bottom clearfix">
                        <div class="one-third">
                            <div class="price">MYR <?php echo $game['price']; ?></div>
                        </div>

                        <div class="add-to-cart no-border">
                            <div class="stat"><a href="#"><i class="fas fa-cart-plus" ></i>Add to cart</a></div>
                        </div>

                    </div>

                </div> <!-- end card -->
            </div> <!-- end wrapper -->
        <?php } ?> <!-- End foreach -->

    </div> <!-- end wrap -->
</div> <!-- end container -->

