# Relative file path to theme assets

While the `|theme` filter returns an address relative to the active theme path of the website. The result is an absolute URL, including domain and protocol, to the asset specified in the filter parameter.

So `|themel` filter returns a **relative** file path without domain and protocol, to the asset specified in the filter parameter.

## Why

According to  [w3schools.com][1]:
> ### Best Practice
> It is best practice to use relative file paths (if possible).

>When using relative file paths, your web pages will not be bound to your current base URL. All links will work on your own computer (localhost) as well as on your current public domain and your future public domains.




## Example

`{{ 'assets/svg/image.svg'|theme }}` become:



    https://domain.tld/themes/your-theme/assets/svg/image.svg


------------

`{{ 'assets/svg/image.svg'|themel }}` become:



    /themes/your-theme/assets/svg/image.svg

## Where useful
For `img` tag:

```html
<img src="/themes/your-theme/assets/svg/image.png" alt="October">
```
or `link` tag for `<head>` section:
```html
<link rel="stylesheet" href="/themes/your-theme/assets/css/main.css" class="css">
```

[1]: https://www.w3schools.com/html/html_filepaths.asp "w3schools.com"