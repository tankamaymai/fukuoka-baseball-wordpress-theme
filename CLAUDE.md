# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview
This is a WordPress theme for the Fukuoka Baseball Club website (`fukuoka-baseball-wordpress-theme`). The theme follows WordPress conventions and includes modern frontend technologies.

## Architecture & Structure

### WordPress Theme Structure
- **Template Hierarchy**: Standard WordPress templates (`index.php`, `single.php`, `page.php`, `archive.php`, etc.)
- **Custom Post Types**: Uses `hoge` as a custom post type with dedicated templates (`single-hoge.php`, `archive-hoge.php`, `taxonomy-hoge.php`, `page-hoge.php`)
- **Functions**: Theme setup and asset loading handled in `functions.php:2-30`

### Frontend Architecture
- **CSS**: Uses Sass with modular structure in `/sass/`
  - `sass/style.scss` - Main entry point importing base and global modules
  - `sass/base/` - Component-specific styles (`_header.scss`, `_about.scss`, `_service.scss`, etc.)
  - `sass/global/` - Global variables (`_colors.scss`, `_font.scss`, `_responsive.scss`)
  - Compiled CSS output to `css/style.css`
- **JavaScript**: Custom scripts in `js/script.js`, loaded via WordPress enqueue system
- **External Libraries**: 
  - jQuery 3.7.1 (CDN)
  - Swiper.js 11 (CDN) 
  - GSAP with ScrollTrigger (CDN)

### Navigation Structure
The theme includes a responsive navigation system with:
- Main navigation: About us, Service, Works (category), News (category), Recruit
- Mobile hamburger menu with drawer functionality
- Category-based navigation for `works` and `news` content

## Development Workflow

### CSS Development
- **Source**: Edit Sass files in `/sass/` directory
- **Compilation**: No build process detected - CSS appears to be manually compiled
- **Output**: Compiled styles should go to `/css/style.css`

### Asset Management
All external dependencies are loaded via CDN through WordPress enqueue system in `functions.php:18-30`. No local package management or build tools detected.

## WordPress Specifics

### Theme Support
The theme enables:
- Post thumbnails (featured images)
- Automatic feed links
- Title tag generation
- HTML5 markup for forms and galleries

### Asset Loading
- jQuery is deregistered and replaced with CDN version
- All scripts and styles loaded through `wp_enqueue_*` functions
- Proper WordPress asset versioning implemented

### Security
- Uses `esc_url()` for all URL outputs
- Implements `wp_head()` and `wp_body_open()` hooks
- Follows WordPress escaping best practices

## SASS Code Rules

### 1) Module Structure
- **Use Dart Sass module system**: `@import` is prohibited
- **Global imports**: Each file must start with `@use "../global" as *;`
- **Main entry point**: In `style.scss`, load in page/component order, ending with `@use "./global" as *;`

```scss
// style.scss
@use "./base/reset";
@use "./base/header";
@use "./base/footer";
@use "./base/kyoutu";
@use "./global" as *;
```

- **Global index**: `global/_index.scss` uses `@forward` to expose font, color, and responsive settings

```scss
// global/_index.scss
@forward "font";
@forward "colors";
@forward "responsive";
```

### 2) Variable Rules
- **Mandatory variable usage**: Font families, weights, and colors must use variables (no direct values)

```scss
// Fonts
$base-font: "Noto Sans", sans-serif;
$second-font: "Zen Maru Gothic", sans-serif;
$third-font: "din-2014", sans-serif;

// Weights
$regular: 300;
$normal: 400;
$medium: 500;
$bold: 700;

// Colors
$text-black: #000;
$text-black2: #333333;
$text-gray: #56564E;
$gray: #A6A6A6;
$gray2: #D5D5D5;
$text-white: #fff;
$yellow: #F9DB54;
$yellow2: #FFE064;
$gray3: #D9D9D9;
```

### 3) Responsive Settings
- **Breakpoints**: Only use predefined keys: "sp", "md2", "md", "lg", "lg2", "lg3", "xl"
- **Media queries**: Use `mq()` mixin only

```scss
@include mq("md") {
  .title { font-size: 20px; }
}
```

### 4) Class Naming Rules
- **BEM + kebab-case**
- **Elements**: `.block__element`
- **States**: `.block.is-xxx`
- **Sub-elements**: `.block-element` (equivalent to `&-element`)

```scss
.header {}
.header__inner {}
.header__link-contact {}
.header.is-change-color {}
```

### 5) Nesting Rules
- **Principle**: No nesting allowed
- **Exceptions**: Only pseudo-elements (`::before`/`::after`) and pseudo-classes (`:hover`, etc.)

```scss
.button {
  position: relative;
  &:hover { opacity: 0.8; }
  &::before { content: ""; position: absolute; inset: 0; }
}
```

### 6) Image Description Method
- **Fixed format**: Always use the following pattern (replace ○ with actual dimensions)

```scss
.recruit-positions__company-logo {
  max-width: ○px;
  width: 100%;
  height: auto;
  aspect-ratio: ○ / ○;
  
  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
}
```

### 7) Utility Examples

```scss
.inner {
  max-width: 1080px;
  margin: 0 auto;
  padding: 0 25px;
}

@include mq("md") {
  .inner { padding: 0 15px; }
}

a[href^="tel:"] { pointer-events: none; }
@include mq("md") {
  a[href^="tel:"] { pointer-events: auto; }
}
```

### 8) Value Handling
- **Font sizes**: Use `px`
- **Letter spacing**: Use `em`
- **Layout**: Use `flex`/`grid` appropriately
- **Aspect ratios**: Utilize `aspect-ratio`
- **Z-index**: Minimize usage
- **Colors/fonts/weights**: Must reference variables

```scss
.title {
  font-family: $second-font;
  font-weight: $bold;
  letter-spacing: 0.05em;
  color: $text-black;
}
```

### 9) Comment Rules
- **Section headers**: Use single-line Japanese comments for major sections/blocks

```scss
// ヘッダー
// 共通パーツ
```

### 10) Prohibited Practices
- Using `@import`
- Direct color/font/weight values without variables
- Undefined breakpoints
- Unnecessary nesting or `!important` abuse

## File Organization
- Template files in root directory
- Sass partials organized by purpose (base components vs global styles)
- Static assets in dedicated `/css/`, `/js/`, and `/images/` directories