<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="//cdn.staticfile.org/docsify/4.10.2/themes/vue.css">
        <style>
            @media screen and (min-width: 768px) {
                .markdown-section {
                    max-width: 1280px;
                    padding:30px 30px 40px;
                }
            }
            .app-name-link img {
                width: 45%;
            }
            .sidebar li p>a {
                font-weight: 700;
                margin: 0;
            }
            .sidebar li p.active>a {
                border-right: 2px solid;
                color: var(--theme-color, #42b983);
            }
            embed {
                width: 100%;
            }
            .wiki-resource {
                text-align: center;
            }
            .wiki-resource img {
                height: auto;
                width: 100%;
                border-radius: .25rem;
                max-height: 85px;
            }
            .content {
                padding-top:20px;
            }
        </style>
    </head>
    
    <body>
        <div id="app"></div>
        <script src="../docsify.min.js"></script>
        <script src="//cdn.staticfile.org/prism/1.19.0/components/prism-php.min.js"></script>
        <script src="//cdn.staticfile.org/pangu/4.0.7/pangu.min.js"></script>
        <script>
        window.$docsify = {
            homepage: "./README.md",
            subMaxLevel: 1,
            onlyCover: true,
            themeColor: '#ff4500',
            logo: 'https://svg.hamm.cn/?key=测试&value=文档库',
            name: "某项目API文档库",
            auto2top: true,
            loadSidebar: true,
            mergeNavbar: true,
            maxLevel: 4,
            formatUpdated: '{MM}/{DD} {HH}:{mm}',
            search: {
                depth: 6,
                noData: {
                    '/': '没有找到结果!'
                },
                paths: 'auto',
                placeholder: {
                    '/': '输入关键词搜索'
                }
            },
            plugins: [
                function (hook) {
                    var bottom = '<br><div class="wiki-resource" style="padding: 0px 0px 0px;text-align:left;">\
                        Powered By Hamm.cn\
                        </div>';
    
    
                    hook.afterEach(function (html) {
                        // return  html + bottom
                    })
    
                    hook.doneEach(function () {
                        pangu.spacingElementByClassName('content')
                    })
                }
            ]
        }
        </script>
        <script src="//unpkg.com/docsify-copy-code@2"></script>
        <!--<script src="../search.min.js"></script>-->
        <script src="//unpkg.com/docsify-pagination/dist/docsify-pagination.min.js"></script>

    </body>
</html>