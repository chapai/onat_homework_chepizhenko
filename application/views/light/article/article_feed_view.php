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

        <?foreach($articles as $article):?>
            <article class = 'article-wrapper'>
                <h1>
                    <?=$article->title?>
                </h1>
                 <h3>
                     <?=$article->category?>
                 </h3>
                <p>
                    <?=$article->short?>
                </p>

                <p>
                    <a class='readmore-link' href="/article/<?=$article->alias?>">
                        Читать далее ...
                    </a>
                </p>
            </article>

            <hr />
        <?endforeach;?>
    </div>
</div>
