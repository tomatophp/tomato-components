![Screenshot](https://github.com/tomatophp/tomato-components/blob/master/art/screenshot.png)

# Tomato Components

🍅 Tons of components for [splade](https://splade.dev/) and [TomatoPHP](https://docs.tomatophp.com/) 

## Installation

```bash
composer require tomatophp/tomato-components
```
after install use this command to install the package and publish assets

```bash
php artisan tomato-components:install
```

## Using

we are support now just 4 components

- Tomato Repeater

```html
<x-tomato-repeater :options="['label']" type="repeater" id="site_menu" name="site_menu" label="Site Menu" required>
    <x-splade-input class="my-2" v-model="repeater.main[key].label" type="text" placeholder="label"   required  />
</x-tomato-repeater>
```
- Tomato Color Selector
```html
<x-tomato-color id="theme_color" name="theme_color" label="Theme Color" required/>
```
- Tomato Phone Input
```html
<x-tomato-tel id="contact_phone" name="contact_phone" label="Contact Phone" required/>
```
- Tomato Rich Text Editor
```html
<x-tomato-rich id="description" name="description" label="Description" required/>
```

## Support

you can join our discord server to get support [TomatoPHP](https://discord.gg/Xqmt35Uh)

## Docs

you can check docs of this package on [Docs](https://docs.tomatophp.com/plugins/tomato-components)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Fady Mondy](https://github.com/3x1io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
