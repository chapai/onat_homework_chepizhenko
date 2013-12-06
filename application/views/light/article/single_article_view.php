<?php
/**
 *
 * @version 1.0
 * @package default
 * @author chapai <chepizhenko.alex@gmail.com>
 * @date 29-10-2013
 */
?>

<div class = "row">
    <div class = "large-12 medium-10 small-10 large-centered small-centered columns">
            <article class = 'article-wrapper'>
                <h1>
                    <?=$article->title?>
                </h1>
                <h3>
                    <?=$article->category?>
                </h3>
                <p>
                    <?=$article->short?>

                    <?=$article->content?>
                </p>
            </article>
    </div>
</div>