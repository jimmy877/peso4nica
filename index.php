<?php

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
</head>
<body>
<!--<script async src="https://ga.jspm.io/npm:es-module-shims@1.5.6/dist/es-module-shims.js"></script> -->
<script type="importmap">
    {
        "imports":{
         "js1":"./js/moduleOne.js",
         "js2":"./js/moduleTwo.js"
        }
    }
</script>

<script type="module">
    import{sayName} from "/js/moduleOne.js";
    import User from "/js/moduleTwo.js";
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