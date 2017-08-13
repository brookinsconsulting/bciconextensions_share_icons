<?php /* #?ini charset="utf-8"?

# eZ publish configuration file for icon(s)

[ExtensionSettings]
# A list of extensions which have theme data
# It's common to create a settings/icon.ini.append file
# in your extension and add the extension name to automatically
# get themes from the extension when it's turned on.
IconExtensions[]=bciconextensions_share_icons

[IconSettings]
# The standard theme. It is used as fallback theme
# if the element is not avalible
StandardTheme=crystal

# This is the main theme. It is the first place to look for icons in.
Theme=crystal-admin

# AdditionalThemeList contains an array
# of themes. These themes will be used
# if an icon was not found in the main
# theme. StandardTheme is the fallback theme.
AdditionalThemeList[]=crystal-admin

# Wanted size of icons, the size is not checked and is expected
# to be just a string which should be a directory in the theme
Size=normal

# Here you can override or add new sizes, allthough you must make
# sure all used themes have these sizes defined.
# Each size refers to the name of the subdirectory
# of the icon theme. If the name contains two numbers with an
# x in between it will be considered to be the width and height
# of the icon, if not no size is will be given
#
# If you create a theme this variable must be present
# Allowed syntaxes are:
# Here the subpath will be the width and height setting
# Sizes[<identifier>]=<width>x<height>
# e.g.
# Sizes[normal]=32x32
#
# Here the subpath will be used for fetching the icon
# while width and height are used for size
# Sizes[<identifier>]=<width>x<height>;<subpath>
# e.g.
# Sizes[normal]=32x32;normal-icons

#Sizes[]
Sizes[normal]=32x32
Sizes[small]=16x16_indexed

[ClassIcons]
# Default icon if there is no class match
Default=mimetypes/empty.png
ClassMap[job]=apps/job.png

[FlagIcons]
IconFormat=gif
DefaultIcon=unknown

[ActionIcons]
# The theme for action icons, overrides default
Theme=ezadmin

*/ ?>