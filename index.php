<?php

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
</head>
<body>
<script type="importmap">
    {
        "imports":{
         "moduleOne/":"./js/"
        }
    }
</script>

<script type="module">
    import{sayName} from "moduleOne/moduleOne.js";
    import User from "moduleOne/moduleTwo.js";
    sayName();

    let user = new User();
    user.data ={
        name:"retest",
        sirname: user.data.sirname
    };
    user.methodOne();

</script>


</body>
</html>