<html>
    <body>
        <form method="get">
            <input type="text" name="name"><br>
            <input type="submit">

            <!-- dedicated php code  -->

            <?php
            //check if the `name` premater is existing or not to hide the errors
            if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
            //welcome message
            echo '<pre>Hello ' . $_GET[ 'name' ] . '</pre>';
            }
            ?> 


        </form>
    </body>
</html>