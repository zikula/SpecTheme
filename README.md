ZikulaSpecTheme
============

### Warning

Installing this theme **and** the ZikulaSpecModule creates a conflict in the container due to their similar names.
Themes are always "installed" so you must remove the theme in order for the module to function properly.

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
        SpecThemeExtension.php (required if services are used)
    Listener/
        FooListener.php
    Resources/
        config/
            theme.yml (required)
            services.yml (required if services are used)
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
    Twig/
        SpecThemeExtension.php (required to create filters and functions)
    vendor/
    ZikulaSpecTheme.php (required)
    CHANGELOG.md
    README.md
    composer.json (required)
    phpunit.xml.dist
```

### Resource Overrides
#### Theme Resource Overrides
Zikula allows templates and other resources to be overridden from within the theme Bundle. Please see 
[the Resources directory](Resources/README.md) for more information.

#### System Resource Overrides
Symfony has a system in place to override Resources of any Bundle. See 
[Overriding Resources](http://symfony.com/doc/current/cookbook/bundles/inheritance.html#overriding-resources-templates-routing-etc)
**Note that in Zikula, System Resource overrides take precedence over Theme Resource overrides.**

##### Override references
 - see \Zikula\Bundle\CoreBundle\EventListener\ThemeListener::setUpThemePathOverrides (for @ZikulaFoo/Bar/index.html.twig type notation)
 - see \Zikula\Bundle\CoreBundle\HttpKernel\ZikulaKernel::locateResource (for ZikulaFooBundle:Bar:index.html.twig type notation)
