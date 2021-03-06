## Synopsis
Provides a field to easily pick font-awesome icons

## Features
* Easily pick icons to be used anywhere in the frontend
* Can filter on icon name

## Screen shots


---------------------------------------
### Filter view
![Filter](https://raw.githubusercontent.com/seppzzz/silverstripe-font-awesome/master/screenshot1.png "Filter")

## Usage
A basic working example, and the following to any class you want the field on; 

```php
    private static $db = array(
        'Icon' => 'Varchar(255)',
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
           MyFontAwesomeField::create('Icon','Font Awesome icon')
        ));

        return $fields;
    }
```

Then simple include in the template where you want the icon placed
```html
    <i class="fa $Icon"></i>  
```

The controller extension should make sure you've got access to the icons so you don't need to double up the CSS file. 

## Want colours instead of icons? 
Got you covered, checkout [color-swabs](https://github.com/peavers/silverstripe-color-swabs)!

## Libraries used/modified
* Font Awesome 4.7
