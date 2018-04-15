<?php
/**
 * Created by PhpStorm.
 * User: hirayamatakaaki
 * Date: 2018/04/15
 * Time: 22:06
 */
?>
<html>
<head>
    <title> test </title>
</head>
<body>
    <form action="http://192.168.33.10/post" method="post">
        <?php echo csrf_field(); ?>
        <div>
            title:
            <input type="text" name="title" value="hoge"></input>
        </div>
        <div>
            body:
            <input type="text" name="body" value="fuga"></input>
            <input type="submit"></input>
        </div>
    </form>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
