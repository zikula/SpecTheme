ZikulaSpecTheme
============

### Beta (for discussion)

This is a theme depicting the Core-2.0.0 Theme specification.

The theme is functional. The theme is documented throughout and is useful mainly
in solidifying and documenting the specification.

### Theme File Structure
Reference: http://symfony.com/doc/current/cookbook/bundles/best_practices.html

```
SpecTheme/
    Controller/
        FooController.php
    DependencyInjection/
        ZikulaSpecExtension.php (required if services are used)
    Listener/
        FooListener.php
    Resources/
        config/
            theme.yml (required)
        docs/
            index.rst
        meta/
            LICENSE
        public/
            css/
            images/
            js/
        translations/
            messages.en.pot
            zikulaspectheme.pot
        views/
            Block/
                block.html.twig
            Body/
                2col.html.twig
            Include/
                footer.html.twig
                header.html.twig
            admin.html.twig
            home.html.twig
            master.html.twig
    vendor/
    ZikulaSpecTheme.php (required)
    CHANGELOG.md
    README.md
    composer.json (required)
    phpunit.xml.dist
```
