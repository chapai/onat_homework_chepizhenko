<?php
/**
 *
 * @version 1.0
 * @package default
 * @author chapai <chepizhenko.alex@gmail.com>
 * @date 05-12-2013
 */
?>

<div class = "row">
    <div class = "large-12 medium-10 small-10 large-centered small-centered columns">

        <a href="/admin/article/new" class="button" style ="margin-top:10px;">+ Article</a>
        <h1 class = "right"> Articles </h1>

        <table style = "width:100%" class = "admin-article-list">
            <thead>
                <th>Id</th>
                <th>Alias</th>
                <th>Title</th>
                <th>Category</th>

                <th>Action</th>
            </thead>

            <tbody>
                <?foreach($articles as $article):?>
                    <tr>
                        <td><?=$article->id?></td>
                        <td><?=$article->alias?></td>
                        <td><?=$article->title?></td>
                        <td><?=$article->category?></td>

                        <td>
                            <ul class="button-group" style = "display: table-cell;">
                                <li><a href="/article/<?=@$article->alias?>" target="_blank" class="tiny secondary button">Read</a></li>
                                <li><a href="/admin/article/edit/<?=@$article->id?>" class="tiny button">Edit</a></li>
                                <li><a href="#" class="tiny alert button">Delete</a></li>
                            </ul>
                        </td>
                    </tr>
                <?endforeach;?>
            </tbody>
        </table>
    </div>
</div>
