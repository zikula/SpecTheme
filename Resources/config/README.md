Filename: `theme.yml`

Status: Required

Must: define a 'master' realm

Description: define various 'realms' within a theme. Within a realm, a pattern is defined that is used by regex
to match the (1) path, (2) route id, or (3) the module name. The realms are matched from top to bottom returning the
first match (case-insensitive). Therefore, more specific definitions must be higher than general definitions.

Defining an 'admin' realm will be used when @Admin annotation is detected in the method (even w/o pattern)

When defining a 'home' pattern, `^/$` is the required pattern (`$` indicates end of path)

Any block positions in the template must be defined here.

Do not duplicate realm names or later entries will override previous entries