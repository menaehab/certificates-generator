# Certificate Generator

## Overview

This project is a simple web application that generates personalized certificates. The front end is built using HTML and styled with Bootstrap, while the backend is handled with PHP for certificate creation.

## Project Structure

- **`index.html`**: Contains the form for inputting the student's name and sending it to the PHP script for processing.
- **`generator.php`**: PHP script that generates the certificate image based on the provided name.
- **`style/style.css`**: Custom CSS for responsive styling.
- **`empty_certificate.jpg`**: Template image for the certificate.
- **`Roboto-Medium.ttf`**: Font used for rendering text on the certificate.
- **`certificates/`**: Directory where generated certificates are saved.

## Usage

1. **Open `index.html` in your web browser.**
2. **Enter the student's name in the form and click "Generate".**
3. **The certificate will be generated and saved in the `certificates` directory.**

## Customization

- **Font:** Replace `Roboto-Medium.ttf` with your desired font file. Update the `$font` variable in `generator.php` if you use a different font.
- **Certificate Layout:** Modify `empty_certificate.jpg` to adjust the template.
- **Styling:** Edit `style/style.css` for any additional custom styles.

## Dependencies

- **Bootstrap 5:** For form styling and responsiveness.
- **PHP GD Library:** Required for image processing. Ensure it is enabled in your PHP configuration.
