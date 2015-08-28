The `/Resources` directory contains all the resources to be used by the theme.

Terminology: A resource is a template, css, js or image file that is used in the rendering of content.

A specific directory structure is required. See the [full package readme](../README.md) for complete details.

**Theme resource overrides** are placed here under the target FQ Module name.

```
    Resources/
        config/
        public/
        views/
        ZikulaSpecModule/
            public/
                css/
                    style.css
            views/
                Foo/
                    index.html.twig
```
