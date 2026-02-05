
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>shopping - Project Tree</title>
<style>
body { font-family: Poppins; background: #f7f8fb; color: #0e1b3d; padding: 20px; }
h1 { color: #0e1b3d; }
ul.tree { list-style: none; padding-left: 20px; }
ul.tree li { margin: 2px 0; position: relative; }
ul.tree li::before { content: ""; position: absolute; top: 12px; left: -12px; border-left: 1px solid #555; height: 100%; }
ul.tree li::after { content: ""; position: absolute; top: 12px; left: -12px; border-top: 1px solid #555; width: 12px; }
ul.tree li:last-child::before { height: 12px; }
.folder, .file { display: inline-block; padding: 2px 6px; border-radius: 4px; }
.folder { color: #f88325; font-weight: 600; cursor: pointer; }
a.file { color: #4169e1; text-decoration: none; }
.file { color: #b5b5b5; }
.nested { display: none; margin-left: 20px; }
.active { display: block; }
.icon { margin-right: 5px; }
a.file:hover { text-decoration: none; }
</style>
</head>
<body>
<h1>shopping - Project Folder Tree</h1>
<ul class="tree" id="tree-root"></ul>

<script>
const treeData = {
  "name": "root",
  "type": "dir",
  "path": ".",
  "children": [
    {
      "name": "README.md",
      "type": "file",
      "path": "README.md"
    },
    {
      "name": "cart.php",
      "type": "file",
      "path": "cart.php"
    },
    {
      "name": "checkout.php",
      "type": "file",
      "path": "checkout.php"
    },
    {
      "name": "detail.php",
      "type": "file",
      "path": "detail.php"
    },
    {
      "name": "dist",
      "type": "dir",
      "path": "dist",
      "children": [
        {
          "name": "css",
          "type": "dir",
          "path": "dist/css",
          "children": [
            {
              "name": "theme.min.css",
              "type": "file",
              "path": "dist/css/theme.min.css"
            },
            {
              "name": "thirdparty",
              "type": "dir",
              "path": "dist/css/thirdparty",
              "children": [
                {
                  "name": "aos-2.3.1",
                  "type": "dir",
                  "path": "dist/css/thirdparty/aos-2.3.1",
                  "children": [
                    {
                      "name": "aos.min.css",
                      "type": "file",
                      "path": "dist/css/thirdparty/aos-2.3.1/aos.min.css"
                    }
                  ]
                },
                {
                  "name": "bootstrap-5.3.8",
                  "type": "dir",
                  "path": "dist/css/thirdparty/bootstrap-5.3.8",
                  "children": [
                    {
                      "name": "bootstrap.min.css",
                      "type": "file",
                      "path": "dist/css/thirdparty/bootstrap-5.3.8/bootstrap.min.css"
                    }
                  ]
                },
                {
                  "name": "bootstrap-icons-1.13.1",
                  "type": "dir",
                  "path": "dist/css/thirdparty/bootstrap-icons-1.13.1",
                  "children": [
                    {
                      "name": "bootstrap-icons.min.css",
                      "type": "file",
                      "path": "dist/css/thirdparty/bootstrap-icons-1.13.1/bootstrap-icons.min.css"
                    },
                    {
                      "name": "fonts",
                      "type": "dir",
                      "path": "dist/css/thirdparty/bootstrap-icons-1.13.1/fonts",
                      "children": [
                        {
                          "name": "bootstrap-icons.woff",
                          "type": "file",
                          "path": "dist/css/thirdparty/bootstrap-icons-1.13.1/fonts/bootstrap-icons.woff"
                        },
                        {
                          "name": "bootstrap-icons.woff2",
                          "type": "file",
                          "path": "dist/css/thirdparty/bootstrap-icons-1.13.1/fonts/bootstrap-icons.woff2"
                        }
                      ]
                    }
                  ]
                },
                {
                  "name": "fancybox-6.1.7",
                  "type": "dir",
                  "path": "dist/css/thirdparty/fancybox-6.1.7",
                  "children": [
                    {
                      "name": "fancybox.min.css",
                      "type": "file",
                      "path": "dist/css/thirdparty/fancybox-6.1.7/fancybox.min.css"
                    }
                  ]
                },
                {
                  "name": "swiper-11.2.10",
                  "type": "dir",
                  "path": "dist/css/thirdparty/swiper-11.2.10",
                  "children": [
                    {
                      "name": "swiper-bundle.min.css",
                      "type": "file",
                      "path": "dist/css/thirdparty/swiper-11.2.10/swiper-bundle.min.css"
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name": "img",
          "type": "dir",
          "path": "dist/img",
          "children": [
            {
              "name": "1.jpg",
              "type": "file",
              "path": "dist/img/1.jpg"
            },
            {
              "name": "2.jpg",
              "type": "file",
              "path": "dist/img/2.jpg"
            },
            {
              "name": "3.jpg",
              "type": "file",
              "path": "dist/img/3.jpg"
            },
            {
              "name": "4.jpg",
              "type": "file",
              "path": "dist/img/4.jpg"
            },
            {
              "name": "4223469.jpg",
              "type": "file",
              "path": "dist/img/4223469.jpg"
            },
            {
              "name": "4685339.jpg",
              "type": "file",
              "path": "dist/img/4685339.jpg"
            },
            {
              "name": "5.jpg",
              "type": "file",
              "path": "dist/img/5.jpg"
            },
            {
              "name": "9550424.jpg",
              "type": "file",
              "path": "dist/img/9550424.jpg"
            },
            {
              "name": "icons",
              "type": "dir",
              "path": "dist/img/icons",
              "children": [
                {
                  "name": "icon-up.svg",
                  "type": "file",
                  "path": "dist/img/icons/icon-up.svg"
                }
              ]
            },
            {
              "name": "logo.png",
              "type": "file",
              "path": "dist/img/logo.png"
            },
            {
              "name": "p1.avif",
              "type": "file",
              "path": "dist/img/p1.avif"
            },
            {
              "name": "p2.jpg",
              "type": "file",
              "path": "dist/img/p2.jpg"
            },
            {
              "name": "p3.avif",
              "type": "file",
              "path": "dist/img/p3.avif"
            },
            {
              "name": "p4.jpg",
              "type": "file",
              "path": "dist/img/p4.jpg"
            },
            {
              "name": "p5.jpg",
              "type": "file",
              "path": "dist/img/p5.jpg"
            },
            {
              "name": "p6.jpg",
              "type": "file",
              "path": "dist/img/p6.jpg"
            },
            {
              "name": "p7.jpg",
              "type": "file",
              "path": "dist/img/p7.jpg"
            },
            {
              "name": "qr-code.jpg",
              "type": "file",
              "path": "dist/img/qr-code.jpg"
            },
            {
              "name": "site-icon",
              "type": "dir",
              "path": "dist/img/site-icon",
              "children": [
                {
                  "name": "apple-touch-icon.png",
                  "type": "file",
                  "path": "dist/img/site-icon/apple-touch-icon.png"
                },
                {
                  "name": "favicon-96x96.png",
                  "type": "file",
                  "path": "dist/img/site-icon/favicon-96x96.png"
                },
                {
                  "name": "favicon.ico",
                  "type": "file",
                  "path": "dist/img/site-icon/favicon.ico"
                },
                {
                  "name": "favicon.svg",
                  "type": "file",
                  "path": "dist/img/site-icon/favicon.svg"
                },
                {
                  "name": "site.webmanifest",
                  "type": "file",
                  "path": "dist/img/site-icon/site.webmanifest"
                },
                {
                  "name": "web-app-manifest-192x192.png",
                  "type": "file",
                  "path": "dist/img/site-icon/web-app-manifest-192x192.png"
                },
                {
                  "name": "web-app-manifest-512x512.png",
                  "type": "file",
                  "path": "dist/img/site-icon/web-app-manifest-512x512.png"
                }
              ]
            }
          ]
        },
        {
          "name": "js",
          "type": "dir",
          "path": "dist/js",
          "children": [
            {
              "name": "ScrollSmoother.min.js",
              "type": "file",
              "path": "dist/js/ScrollSmoother.min.js"
            },
            {
              "name": "ScrollTrigger.min.js",
              "type": "file",
              "path": "dist/js/ScrollTrigger.min.js"
            },
            {
              "name": "aos.min.js",
              "type": "file",
              "path": "dist/js/aos.min.js"
            },
            {
              "name": "bootstrap.bundle.min.js",
              "type": "file",
              "path": "dist/js/bootstrap.bundle.min.js"
            },
            {
              "name": "custom.js",
              "type": "file",
              "path": "dist/js/custom.js"
            },
            {
              "name": "fancybox.min.js",
              "type": "file",
              "path": "dist/js/fancybox.min.js"
            },
            {
              "name": "gsap.min.js",
              "type": "file",
              "path": "dist/js/gsap.min.js"
            },
            {
              "name": "jquery.matchHeight-min.js",
              "type": "file",
              "path": "dist/js/jquery.matchHeight-min.js"
            },
            {
              "name": "jquery.min.js",
              "type": "file",
              "path": "dist/js/jquery.min.js"
            },
            {
              "name": "scrollreveal.min.js",
              "type": "file",
              "path": "dist/js/scrollreveal.min.js"
            },
            {
              "name": "swiper-bundle.min.js",
              "type": "file",
              "path": "dist/js/swiper-bundle.min.js"
            }
          ]
        }
      ]
    },
    {
      "name": "forgot-password.php",
      "type": "file",
      "path": "forgot-password.php"
    },
    {
      "name": "generate_tree_php.py",
      "type": "file",
      "path": "generate_tree_php.py"
    },
    {
      "name": "inc",
      "type": "dir",
      "path": "inc",
      "children": [
        {
          "name": "footer.php",
          "type": "file",
          "path": "inc/footer.php"
        },
        {
          "name": "header.php",
          "type": "file",
          "path": "inc/header.php"
        }
      ]
    },
    {
      "name": "index.php",
      "type": "file",
      "path": "index.php"
    },
    {
      "name": "list.php",
      "type": "file",
      "path": "list.php"
    },
    {
      "name": "login.php",
      "type": "file",
      "path": "login.php"
    },
    {
      "name": "package-lock.json",
      "type": "file",
      "path": "package-lock.json"
    },
    {
      "name": "package.json",
      "type": "file",
      "path": "package.json"
    },
    {
      "name": "registration.php",
      "type": "file",
      "path": "registration.php"
    },
    {
      "name": "src",
      "type": "dir",
      "path": "src",
      "children": [
        {
          "name": "img",
          "type": "dir",
          "path": "src/img",
          "children": [
            {
              "name": "1.jpg",
              "type": "file",
              "path": "src/img/1.jpg"
            },
            {
              "name": "2.jpg",
              "type": "file",
              "path": "src/img/2.jpg"
            },
            {
              "name": "3.jpg",
              "type": "file",
              "path": "src/img/3.jpg"
            },
            {
              "name": "4.jpg",
              "type": "file",
              "path": "src/img/4.jpg"
            },
            {
              "name": "4223469.jpg",
              "type": "file",
              "path": "src/img/4223469.jpg"
            },
            {
              "name": "4685339.jpg",
              "type": "file",
              "path": "src/img/4685339.jpg"
            },
            {
              "name": "5.jpg",
              "type": "file",
              "path": "src/img/5.jpg"
            },
            {
              "name": "9550424.jpg",
              "type": "file",
              "path": "src/img/9550424.jpg"
            },
            {
              "name": "icons",
              "type": "dir",
              "path": "src/img/icons",
              "children": [
                {
                  "name": "icon-up.svg",
                  "type": "file",
                  "path": "src/img/icons/icon-up.svg"
                }
              ]
            },
            {
              "name": "logo.png",
              "type": "file",
              "path": "src/img/logo.png"
            },
            {
              "name": "p1.avif",
              "type": "file",
              "path": "src/img/p1.avif"
            },
            {
              "name": "p2.jpg",
              "type": "file",
              "path": "src/img/p2.jpg"
            },
            {
              "name": "p3.avif",
              "type": "file",
              "path": "src/img/p3.avif"
            },
            {
              "name": "p4.jpg",
              "type": "file",
              "path": "src/img/p4.jpg"
            },
            {
              "name": "p5.jpg",
              "type": "file",
              "path": "src/img/p5.jpg"
            },
            {
              "name": "p6.jpg",
              "type": "file",
              "path": "src/img/p6.jpg"
            },
            {
              "name": "p7.jpg",
              "type": "file",
              "path": "src/img/p7.jpg"
            },
            {
              "name": "qr-code.jpg",
              "type": "file",
              "path": "src/img/qr-code.jpg"
            },
            {
              "name": "site-icon",
              "type": "dir",
              "path": "src/img/site-icon",
              "children": [
                {
                  "name": "apple-touch-icon.png",
                  "type": "file",
                  "path": "src/img/site-icon/apple-touch-icon.png"
                },
                {
                  "name": "favicon-96x96.png",
                  "type": "file",
                  "path": "src/img/site-icon/favicon-96x96.png"
                },
                {
                  "name": "favicon.ico",
                  "type": "file",
                  "path": "src/img/site-icon/favicon.ico"
                },
                {
                  "name": "favicon.svg",
                  "type": "file",
                  "path": "src/img/site-icon/favicon.svg"
                },
                {
                  "name": "site.webmanifest",
                  "type": "file",
                  "path": "src/img/site-icon/site.webmanifest"
                },
                {
                  "name": "web-app-manifest-192x192.png",
                  "type": "file",
                  "path": "src/img/site-icon/web-app-manifest-192x192.png"
                },
                {
                  "name": "web-app-manifest-512x512.png",
                  "type": "file",
                  "path": "src/img/site-icon/web-app-manifest-512x512.png"
                }
              ]
            }
          ]
        },
        {
          "name": "js",
          "type": "dir",
          "path": "src/js",
          "children": [
            {
              "name": "ScrollSmoother.min.js",
              "type": "file",
              "path": "src/js/ScrollSmoother.min.js"
            },
            {
              "name": "ScrollTrigger.min.js",
              "type": "file",
              "path": "src/js/ScrollTrigger.min.js"
            },
            {
              "name": "aos.min.js",
              "type": "file",
              "path": "src/js/aos.min.js"
            },
            {
              "name": "bootstrap.bundle.min.js",
              "type": "file",
              "path": "src/js/bootstrap.bundle.min.js"
            },
            {
              "name": "custom.js",
              "type": "file",
              "path": "src/js/custom.js"
            },
            {
              "name": "fancybox.min.js",
              "type": "file",
              "path": "src/js/fancybox.min.js"
            },
            {
              "name": "gsap.min.js",
              "type": "file",
              "path": "src/js/gsap.min.js"
            },
            {
              "name": "jquery.matchHeight-min.js",
              "type": "file",
              "path": "src/js/jquery.matchHeight-min.js"
            },
            {
              "name": "jquery.min.js",
              "type": "file",
              "path": "src/js/jquery.min.js"
            },
            {
              "name": "scrollreveal.min.js",
              "type": "file",
              "path": "src/js/scrollreveal.min.js"
            },
            {
              "name": "swiper-bundle.min.js",
              "type": "file",
              "path": "src/js/swiper-bundle.min.js"
            }
          ]
        },
        {
          "name": "scss",
          "type": "dir",
          "path": "src/scss",
          "children": [
            {
              "name": "theme.scss",
              "type": "file",
              "path": "src/scss/theme.scss"
            },
            {
              "name": "themes",
              "type": "dir",
              "path": "src/scss/themes",
              "children": [
                {
                  "name": "_cart.scss",
                  "type": "file",
                  "path": "src/scss/themes/_cart.scss"
                },
                {
                  "name": "_checkout.scss",
                  "type": "file",
                  "path": "src/scss/themes/_checkout.scss"
                },
                {
                  "name": "_detail.scss",
                  "type": "file",
                  "path": "src/scss/themes/_detail.scss"
                },
                {
                  "name": "_footer.scss",
                  "type": "file",
                  "path": "src/scss/themes/_footer.scss"
                },
                {
                  "name": "_header.scss",
                  "type": "file",
                  "path": "src/scss/themes/_header.scss"
                },
                {
                  "name": "_list.scss",
                  "type": "file",
                  "path": "src/scss/themes/_list.scss"
                },
                {
                  "name": "_login.scss",
                  "type": "file",
                  "path": "src/scss/themes/_login.scss"
                },
                {
                  "name": "_mixins.scss",
                  "type": "file",
                  "path": "src/scss/themes/_mixins.scss"
                },
                {
                  "name": "_resets.scss",
                  "type": "file",
                  "path": "src/scss/themes/_resets.scss"
                },
                {
                  "name": "_styles.scss",
                  "type": "file",
                  "path": "src/scss/themes/_styles.scss"
                },
                {
                  "name": "_top.scss",
                  "type": "file",
                  "path": "src/scss/themes/_top.scss"
                },
                {
                  "name": "_vars.scss",
                  "type": "file",
                  "path": "src/scss/themes/_vars.scss"
                }
              ]
            }
          ]
        },
        {
          "name": "thirdparty",
          "type": "dir",
          "path": "src/thirdparty",
          "children": [
            {
              "name": "aos-2.3.1",
              "type": "dir",
              "path": "src/thirdparty/aos-2.3.1",
              "children": [
                {
                  "name": "aos.min.css",
                  "type": "file",
                  "path": "src/thirdparty/aos-2.3.1/aos.min.css"
                }
              ]
            },
            {
              "name": "bootstrap-5.3.8",
              "type": "dir",
              "path": "src/thirdparty/bootstrap-5.3.8",
              "children": [
                {
                  "name": "bootstrap.min.css",
                  "type": "file",
                  "path": "src/thirdparty/bootstrap-5.3.8/bootstrap.min.css"
                }
              ]
            },
            {
              "name": "bootstrap-icons-1.13.1",
              "type": "dir",
              "path": "src/thirdparty/bootstrap-icons-1.13.1",
              "children": [
                {
                  "name": "bootstrap-icons.min.css",
                  "type": "file",
                  "path": "src/thirdparty/bootstrap-icons-1.13.1/bootstrap-icons.min.css"
                },
                {
                  "name": "fonts",
                  "type": "dir",
                  "path": "src/thirdparty/bootstrap-icons-1.13.1/fonts",
                  "children": [
                    {
                      "name": "bootstrap-icons.woff",
                      "type": "file",
                      "path": "src/thirdparty/bootstrap-icons-1.13.1/fonts/bootstrap-icons.woff"
                    },
                    {
                      "name": "bootstrap-icons.woff2",
                      "type": "file",
                      "path": "src/thirdparty/bootstrap-icons-1.13.1/fonts/bootstrap-icons.woff2"
                    }
                  ]
                }
              ]
            },
            {
              "name": "fancybox-6.1.7",
              "type": "dir",
              "path": "src/thirdparty/fancybox-6.1.7",
              "children": [
                {
                  "name": "fancybox.min.css",
                  "type": "file",
                  "path": "src/thirdparty/fancybox-6.1.7/fancybox.min.css"
                }
              ]
            },
            {
              "name": "swiper-11.2.10",
              "type": "dir",
              "path": "src/thirdparty/swiper-11.2.10",
              "children": [
                {
                  "name": "swiper-bundle.min.css",
                  "type": "file",
                  "path": "src/thirdparty/swiper-11.2.10/swiper-bundle.min.css"
                }
              ]
            }
          ]
        }
      ]
    },
    {
      "name": "tree.bat",
      "type": "file",
      "path": "tree.bat"
    },
    {
      "name": "vite.config.js",
      "type": "file",
      "path": "vite.config.js"
    }
  ]
};

function createNode(node, level=0) {
    const li = document.createElement('li');

    if(node.type === 'dir') {
        const span = document.createElement('span');
        span.className = 'folder';
        span.innerHTML = '<span class="icon">📁</span>' + node.name;
        li.appendChild(span);

        const ul = document.createElement('ul');
        ul.className = 'nested';

        if(node.children) {
            node.children.forEach(child => ul.appendChild(createNode(child, level + 1)));
        }

        // Expand first level by default
        if(level < 1) {
            ul.classList.add('active');
        }

        li.appendChild(ul);

        span.addEventListener('click', () => {
            ul.classList.toggle('active');
        });
    } else {
        const isPage = /\.(php|html|htm)$/i.test(node.name);

        if (isPage) {
            const link = document.createElement('a');
            link.className = 'file';
            link.href = node.path;
            link.innerHTML = '<span class="icon">📄</span>' + node.name;
            link.target = '_blank'; // Remove if you want same tab
            // Highlight current page
            if (window.location.pathname.endsWith(node.path)) {
                link.style.fontWeight = '700';
                link.style.color = '#f88325';
            }
            li.appendChild(link);
        } else {
            const span = document.createElement('span');
            span.className = 'file';
            span.innerHTML = '<span class="icon">📄</span>' + node.name;
            li.appendChild(span);
        }
    }

    return li;
}

const treeRoot = document.getElementById('tree-root');
treeRoot.appendChild(createNode(treeData));
</script>
</body>
</html>
