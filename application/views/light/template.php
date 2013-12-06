<?php
/**
 *
 * @version 1.0
 * @package default
 * @author chapai <chepizhenko.alex@gmail.com>
 * @date 29-10-2013
 */

?>


<!DOCTYPE html>
<!--[if IE 9]>
    <html class="lt-ie10" lang="en" >
<![endif]-->

<html class="no-js" lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Homework</title>

        <?=@$head?>

    </head>

    <body>

    <?=@$navigation?>

    <?=@$content?>

    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/foundation.min.js"></script>

    <script>
        $(document).foundation();
    </script>


</body>
</html>