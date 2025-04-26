# VeltoPHP Framework

**velto** | VeltoPHP Framework | Fast & Minimalist RVC-Powered Web Development

Velto is a lightweight PHP framework built with the RVC (Route-View-Controller) pattern. Ideal for building fast, static, and simple web applications — no database required.

---

## Installation

```bash
# 1. Create a new project using Composer
composer create-project veltophp/velto my-project

# 2. Move into the project directory
cd my-project

# 3. Run update to get the latest patch updates
composer update

# 4. Start the development server
php velto start
```

🔗 Open your browser and visit:
```
http://localhost:8000
```

---

## Access from other devices

Want to access your Velto app from your phone or another device on the same network? Run:

```bash
php velto start local-ip
```

Velto will display a QR Code you can scan.

---

## Auto Reload on View Edits

For a smoother development experience, enable auto reload when editing `.vel.php` files:

```bash
php velto start watch
```

---

## 📁 Project Structure

```
velto/
├── app/
├── public/
├── routes/ 
├── storage/
├── vendor/
├── views/
└── velto
```

---

## What is Velto good for?

Velto, with its RVC (Route - View - Controller) architecture, is great for lightweight, fast-to-build projects that don’t need the complexity of full-stack frameworks.

### Perfect for:
1. **Landing Pages**  
   - Fast setup, focused on views.  
   - Great for product, app, or portfolio pages.  
   - _Examples: SaaS landing, personal portfolio, event promo page._

2. **Microsites / Mini Sites**  
   - One or a few simple pages with controller logic.  
   - _Examples: Seminar registration, basic survey site, company profile._

3. **Static Content Generator (without DB)**  
   - Store content in arrays or files.  
   - _Examples: File-based blog, documentation site, learning material site._

4. **Prototypes / MVPs**  
   - Rapid idea validation.  
   - _Examples: Simple order forms, basic reporting tools, form-based apps._

5. **Web Tools / Online Utilities**  
   - Calculators, generators, converters, etc.  
   - _Examples: QR code generator, markdown to HTML converter, developer tools._

6. **Frontend for External APIs**  
   - Use Velto as a frontend layer for API consumption.  
   - _Examples: API dashboards, weather apps, shipment tracking._

---

## ❤️ Credits

Developed by [veltophp](https://veltophp.com)  
Follow us on Instagram: [@veltophp](https://instagram.com/veltophp)  
Developer contact: `dev@veltophp.com`  
Source code: [github.com/veltophp](https://github.com/veltophp)