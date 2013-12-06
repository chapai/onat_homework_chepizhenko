<?php
/**
 *
 * @version 1.0
 * @package default
 * @author chapai <chepizhenko.alex@gmail.com>
 * @date 05-12-2013
 */

$edit = false;
if($action == 'edit')
    $edit = 'true';
?>
<div class = "row">
    <div class = "large-12 medium-10 small-10 large-centered small-centered columns">

        <?if($edit):?>
            <h1 class = "right">Edit Article</h1>
        <?else:?>
            <h1 class = "right">New Article</h1>
        <?endif?>



        <?if($edit):?>
            <form action="/admin/article/edit/<?=$article->id?>?action=save" method="post">
        <?else:?>
            <form action="/admin/article/new/?action=create" method="post">
        <?endif;?>
            <div class="row">
                <div class="large-12 columns">
                    <input type="text" placeholder="Title" name="article_data[title] "value="<?if($edit) echo $article->title?>" />
                </div>
            </div>

            <div class="row">
                <div class="large-6 columns">
                    <input type="text" placeholder="Alias(uniq)." name="article_data[alias]" value="<?if($edit) echo $article->alias?>"/>
                </div>
                <div class="large-6 columns">

                    <select name="article_data[category_id]">
                        <option disabled>Choose article category</option>

                        <?foreach($categories as $category):?>
                            <option <?=@$current_category[$category->id]?> value="<?=$category->id?>"><?=$category->title?></option>
                        <?endforeach;?>

                    </select>
                </div>

            </div>


            <div class="row">
                <div class="large-12 columns">
                    <label>Article intro text.</label>
                    <textarea id="intro-editor" name="article_data[short_content] placeholder="Article intro."><?if($edit) echo $article->short?></textarea>
                    <br/>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns">
                    <label>Main artile text.</label>
                    <textarea id="content-editor" name="article_data[content] placeholder="Article content."><?if($edit) echo $article->content?></textarea>
                    <br/>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns" style="margin-top:10px;">
                    <button class="button" type="submit">
                        <?if($edit):?>
                            Save
                        <?else:?>
                            Create
                        <?endif;?>
                    </button>
                </div>
            </div>
        </form>

     </div>
</div>

<script src="/js/nicEdit.js"></script>
<script>
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>


