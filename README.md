# Text to SHA256 Converter

## Description

The **Text to SHA256 Converter** is a WordPress plugin that converts text to SHA256 hash and provides an API endpoint for conversion.

## Features

- Registers a custom REST API route.
- Handles `POST` requests to convert text to its SHA256 hash.

## Installation

1. Download the plugin files.
2. Upload the entire plugin folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

1. Make a `POST` request to the custom REST API route `/wp-json/text-to-sha256/v1/convert/` with a JSON body containing the `text` parameter.
2. The plugin will return a JSON response with the SHA256 hash of the provided text.

## Example Request

```sh
curl -X POST https://yourwordpresssite.com/wp-json/text-to-sha256/v1/convert/ \
-H "Content-Type: application/json" \
-d '{"text": "your text here"}'
```
