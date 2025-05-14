# Amwal Checkout Implementation Example

This repository contains a complete demonstration of Amwal Checkout, a payment processing solution designed for businesses in the Middle East region, particularly Saudi Arabia and other GCC countries.

## Overview

This example showcases a fully functional implementation of Amwal Checkout integration for both product and service-based businesses. The single HTML file demonstrates the entire checkout process with a clean, responsive design and comprehensive functionality.

## Features

### Payment Options
- Credit/Debit card payments
- Installment/Split payments with bank integration
- Apple Pay support

### Product Checkout Demo
- Interactive product display with quantity adjustment
- Dynamic price calculation including tax and shipping
- Multiple shipping methods with region-based availability
- Complete address collection and validation

### Service Checkout Demo
- Package/tier selection (Basic, Standard, Premium)
- Price adjustment based on service level
- Simplified checkout flow for service-based businesses

### Developer Features
- Interactive tab navigation between product and service examples
- Comprehensive event handling for the entire checkout flow
- Built-in debugging console for monitoring checkout events
- Demo data pre-population for faster testing
- Complete error handling and user feedback

## Repository Structure

The repository consists of a single HTML file that includes:
- HTML markup for the checkout interface
- CSS styling (using Tailwind CSS)
- JavaScript for functionality and event handling
- Amwal Checkout Button integration

## Getting Started

To use this example:

1. Sign up for an Amwal merchant account at merchant.sa.amwal.tech
2. Obtain your unique merchant ID
3. Replace the demo merchant ID in the HTML file with your own
4. Open the file in a browser to test the implementation

No additional setup or dependencies are required as all resources are loaded from CDNs.

## Implementation Details

The example demonstrates several key implementation strategies:

- Pre-populating customer information for faster checkout
- Handling address validation and shipping options
- Processing successful and failed transactions
- Implementing multiple payment methods
- Adjusting checkout flow based on product vs. service needs
- Tracking and debugging the entire checkout process

## Debug Console

A built-in debug console is included to help monitor the checkout process. You can:
- Track all checkout events in real-time
- View detailed event data
- Export logs for troubleshooting
- Filter log levels (DEBUG, INFO, WARN, ERROR)

The console is accessible by clicking the "Debug" button at the bottom of the page.

## Documentation Resources

For more detailed documentation, visit:
- Amwal Developer Documentation: docs.amwal.tech
- Platform-specific plugins: WooCommerce, Magento, Shopify (links in the example)
