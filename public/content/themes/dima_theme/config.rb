require 'compass/import-once/activate'
# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "scss"
images_dir = "assets/img"
javascripts_dir = "js"
fonts_dir = "fonts"

output_style = :nested

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false
color_output = false

preferred_syntax = :scss

add_import_path 'bower_components/foundation/scss/'
add_import_path 'bower_components/animate.css/'
add_import_path 'bower_components/susy/sass/'
add_import_path 'bower_components/font-awesome/scss/'
add_import_path 'bower_components/foundation/scss/'
add_import_path 'bower_components/foundation/scss/'