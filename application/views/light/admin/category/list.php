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

        <div class="row">
            <h1 class = "right"> Categories </h1>
        </div>

        <div class="row">
            <form method ="post" action="/admin/category/new">
                <div class = 'large-5 columns'>
                    <input type="text" placeholder="Title" name="category_data[title]" />
                </div>

                <div class = 'large-5 columns'>
                    <input type="text" placeholder="Alias" name="category_data[alias]"/>
                </div>

                <div class='large-2 columns'>
                    <button class="tiny button" type="submit">+ Category</button>
                </div>
            </form>
        </div>



        <table style = "width:100%" class = "admin-article-list">
            <thead>
            <th>Id</th>
            <th>Alias</th>
            <th>Title</th>
            <th>Action</th>
            </thead>

            <tbody>
            <?foreach($categories as $category):?>
                <tr>
                    <td><?=$category->id?></td>
                    <td><?=$category->alias?></td>
                    <td><?=$category->title?></td>

                    <td>
                        <ul class="button-group" style = "display: table-cell;">
                            <li><a href="/admin/category/edit/<?=@$category->id?>" class="tiny button">Edit</a></li>
                            <li><a href="/admin/category/delete/<?=@$category->id?>" class="tiny alert button">Delete</a></li>
                        </ul>
                    </td>
                </tr>
            <?endforeach;?>
            </tbody>
        </table>
    </div>
</div>
