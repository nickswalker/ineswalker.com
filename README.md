# ineswalker.com

Ines Walker's ceramics portfolio website. Built with [Jekyll](https://jekyllrb.com).

## Adding images

* Create a new text file in `_pieces` and name it after the name of the piece.

* Fill out the title and process text. Note that the `---` at the top and bottom are required. Leave `published` as true. Change to `false` if you would like to hide a piece from the site.

````
---
title:  "Beer Mug"
process: "High fired with iron oxide and glaze lining"
published: true
---
````

* Upload a compressed, JPEG thumbnail image into `assets/images/pieces/thumbnails/`. The image should have the same name as the piece title, but with all spaces replaced with dashes, and all uppercase characters transformed to lowercase. `Beer Mug` would become `beer-mug.jpg`. The image should have dimensions 500x500. Target a file size of ~100KB. This image is displayed immediately on page load.

* Upload a compressed, JPEG image into `assets/images/pieces/`. The file name should be the same as the full image. This image can have any resolution, though in general it should be no more than 2000 pixels long in either dimension. Target a file size of less than 500KB.  This image will be displayed when the user taps on a thumbnail.

## Development

Make sure you have Ruby and Jekyll installed. Clone down the repo and run

    bundle exec jekyll serve

to begin testing the site locally.