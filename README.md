# Werules_MetaTags

A **Magento 2** module to manage meta tags dynamically through the Admin Panel. This module leverages Magento's dynamic rows functionality to allow you to create as many meta tags as you want for your store’s `<head>` section.

## Key Features

1. **Infinite Meta Tags**  
   Use the Magento admin configuration to add multiple `<meta>` name and content pairs.
2. **Enable/Disable**  
   Easily toggle the entire feature on or off in the configuration.
3. **Automatic Serialization**  
   Configuration data is stored with Magento’s serialized/config backend model, preventing array-to-string conversion errors.

## Installation

1. **Download/Clone** this repository and place it under `app/code/Werules/MetaTags/`.
2. Run the following commands from your Magento root directory:
   ```bash
   bin/magento setup:upgrade
   bin/magento cache:flush
   ```
3. Verify that the module is enabled:
   ```bash
   bin/magento module:status
   ```
   If disabled, enable it:
   ```bash
   bin/magento module:enable Werules_MetaTags
   bin/magento setup:upgrade
   bin/magento cache:flush
   ```

## Usage

1. In the Magento admin panel, go to **Stores** > **Configuration**.
2. Under the **Werules** tab, choose **Meta Tags Settings**.
3. Toggle **Enable Meta Tags** to **Yes**.
4. In **Meta Tags**, use the **Add Meta Tag** button to create an unlimited number of meta name/content pairs (e.g., `google-adsense-account` and `ca-pub-xxxx`).
5. Click **Save Config**.
6. Refresh your store’s frontend page and check the `<head>` to verify the tags.

## Directory Structure

```
app/code/Werules/MetaTags/
├── Block/
│   ├── Adminhtml/
│   │   └── System/
│   │       └── Config/
│   │           └── Field/
│   │               └── MetaTags.php
│   └── Meta.php
├── etc/
│   ├── adminhtml/
│   │   └── system.xml
│   ├── di.xml
│   ├── module.xml
├── view/
│   └── frontend/
│       └── layout/
│           └── default.xml
│       └── templates/
│           └── meta.phtml
├── composer.json
└── registration.php
```

## Contributing

Feel free to open **issues** or **pull requests**. Any contribution to improving this project is welcome!

## License

This project is released under the [MIT License](LICENSE).
