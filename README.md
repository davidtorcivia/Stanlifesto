Stanlifesto
===========

Theme for Anchor CMS. Built off [Stanley](https://github.com/mazzo-/Stanley-Anchor-Theme) (Bootstrap) and [Manifesto](https://github.com/daveis/manifesto-anchor-theme) (Skeleton).

Currently used live [here](https://plebsonsecurity.com).

####Screenshots

Page:
![](/screenshots/page.png)

##Installation
1. Download this theme.
2. Upload the folder to your themes directory (*anchor installation directory*/themes)
3. Go the admin section. Extend>Site Metadata. Scroll to the bottom. Select "Stanlifesto" from the theme selector dropdown.
4. Save! The theme is now installed.

###Additional Setup

This theme utilizes custom site data to implement slick article and page headers (thanks [Manifesto](https://github.com/daveis/manifesto-anchor-theme)). To enable these, you need to create some custom fields.

####Custom Fields
1. Go to the admin section of your site.
2. Navigate to Extend>Custom Fields

#####Featured Image (Post)
1. Click "Create a new field" and enter the following data:
  - Type: Post
  - Field: File
  - Unique Key: featured-image
  - Label: Featured Image
2. Click Save

#####Featured Image Credit (Post)
1. Click "Create a new field" and enter the following data:
  - Type: Post
  - Field: html
  - Unique Key: featured-image-credit
  - Label: Featured Image Credit
2. Click Save

#####Featured Image (Page)
1. Click "Create a new field" and enter the following data:
  - Type: Page
  - Field: File
  - Unique Key: featured-image
  - Label: Featured Image Page
2. Click Save

#####Featured Image Credit (Page)
1. Click "Create a new field" and enter the following data:
  - Type: Page
  - Field: html
  - Unique Key: featured-image-credit
  - Label: Featured Image Credit Page
2. Click Save

###Summary

I am by no means a web developer and this is clearly hacked together. There's skeletons of both themes (and some other stuff) all over the place and it could use some serious cleaning. Let me know if you run into any bugs or issues, though I think everything you need to run this theme should be here and working.

### License & Copyright
Free to use and modify under the MIT license.
http://www.opensource.org/licenses/mit-license.php
