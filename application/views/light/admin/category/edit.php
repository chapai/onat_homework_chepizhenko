<?php
/**
 *
 * @version 1.0
 * @package default
 * @author chapai <chepizhenko.alex@gmail.com>
 * @date 06-12-2013
 */
?>

<div class = "row">
    <div class = "large-12 medium-10 small-10 large-centered small-centered columns">
            <h1 class = "right">Edit Category</h1>
    </div>
</div>

<div class = "row">
    <div class = "large-12 medium-10 small-10 large-centered small-centered columns" style = "margin-top:10px;">

        <form action="/admin/category/edit/<?=$category->id?>?action=save" method="post">
            <div class="row">

                <div class="large-5 columns">
                    <input type="text" placeholder="Title" name="category_data[title] "value="<?=$category->title?>" />
                </div>

                <div class="large-5 columns">
                    <input type="text" placeholder="Alias(uniq)." name="category_data[alias]" value="<?=$category->alias?>"/>
                </div>


                <div class="large-2 columns">
                    <button class="tiny button" type="submit">Save</button>
                </div>

            </div>
        </form>

    </div>
</div>