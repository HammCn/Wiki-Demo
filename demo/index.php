<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="vue.css">
    </head>
    
    <body>
        <nav>
            <a href="//hamm.cn" target="_blank">首页</a>
        </nav>
        <div id="app"></div>
        <script>
        window.$docsify = {
            homepage: "./index.md",
            subMaxLevel: 1,
            onlyCover: true,
            name: "某项目API文档库",
            auto2top: true,
            coverpage: true,
            executeScript: true,
            loadSidebar: true,
            loadNavbar: true,
            mergeNavbar: true,
            maxLevel: 4,
            formatUpdated: '{MM}/{DD} {HH}:{mm}',
        }
        </script>
        <script src="docsify.min.js"></script>
    </body>
</html>