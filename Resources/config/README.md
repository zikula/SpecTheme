Filename: `theme.yml`

Status: Required

Must: define a 'master' realm

Description: define various 'realms' within a theme. Within a realm, a pattern is defined that is used by regex
to match the (1) path, (2) route id, or (3) the module name. The realms are matched from top to bottom returning the
first match (case-insensitive). Therefore, more specific definitions must be higher than general definitions.

Two additional 'alias' realms may be defined and neither requires a pattern:
  1) Defining an 'admin' realm will be used when @Theme('admin') annotation is detected in the method
  2) Defining a 'home' realm will be used when the path = `/`

Any block positions in the page's template must be defined here.

Do not duplicate realm names or later entries will override previous entries

-----

Filename: `services.yml`

Status: Optional

Description: The DependencyInjection component of Symfony can be quite complex. Several filetypes can be used
(.yml, .xml, etc). Please see the symfony documentation for further information.
http://symfony.com/doc/current/components/dependency_injection/index.html