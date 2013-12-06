<?php
/**
 *
 * @version 1.0
 * @package default
 * @author chapai <chepizhenko.alex@gmail.com>
 * @date 06-12-2013
 */
?>
<div class="row">
    <div class="large-12 large-centered columns">
        <div data-magellan-expedition="fixed">
            <ul class="sub-nav">

                <li><dd <?=@$active_tab['all']?>><a href="/">Все категории</a><dd></li>
                <?foreach($categories as $category):?>
                    <li>
                        <dd <?=@$active_tab[$category->id]?>>
                            <a href="/article/category/<?=$category->alias?>"><?=$category->title?></a>
                        <dd>
                    </li>
                <?endforeach;?>
            </ul>
        </div>
    </div>
</div>