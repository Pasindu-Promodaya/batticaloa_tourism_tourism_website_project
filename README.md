# Batticaloa Tourism Website 🏖️

> A modern, responsive web portal showcasing the cultural heritage, natural attractions, and adventure activities of Batticaloa, Sri Lanka.

![Batticaloa Tourism](https://img.shields.io/badge/Project-Tourism%20Website-blue?style=flat-square)
![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)
![Status](https://img.shields.io/badge/Status-Active-success?style=flat-square)

## 📋 Table of Contents

- [About The Project](#-about-the-project)
- [The Problem We Solve](#the-problem-we-solve)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Installation Guide](#-installation-guide)
- [Project Structure](#-project-structure)
- [Pages Overview](#-pages-overview)
- [Screenshots](#-screenshots)
- [Usage](#-usage)
- [Contributing](#-contributing)
- [License](#-license)

---

## 🎯 About The Project

The Batticaloa Tourism Website is a comprehensive digital platform dedicated to promoting tourism in Batticaloa, a culturally rich and historically significant city on Sri Lanka's east coast. The website showcases the region's unique attractions, vibrant culture, adventure activities, and culinary heritage to both local and international visitors.

### The Problem We Solve

**Challenge:** Batticaloa, despite its stunning natural beauty (pristine beaches, tranquil lagoons, ancient forts) and rich cultural heritage (Tamil traditions, colonial architecture, the famous "singing fish" phenomenon), lacks a centralized, professional digital platform to attract and inform tourists.

**Solution:** This website provides:

- 📍 **Centralized Information Hub** - All attractions, activities, culture & food in one place
- 🎨 **Professional Presentation** - Modern, responsive design that appeals to international audiences
- 📱 **Multi-Device Access** - Fully responsive for desktop, tablet, and mobile users
- 🗺️ **Interactive Experiences** - Modal popups with maps and detailed attractions
- 🌐 **Global Reach** - Easy sharing and discovery through a clean, SEO-friendly structure

This platform helps tourism boards, local businesses, and individual travelers discover Batticaloa's hidden gems and plan memorable experiences.

---

## ✨ Features

### Core Functionality

- ✅ **Home Page** - Engaging hero section with welcome message and city overview
- ✅ **About Section** - Detailed history, culture, and geography of Batticaloa
- ✅ **Tourist Attractions** - Interactive listing with modal popups, maps, and location details
  - Batticaloa Dutch Fort
  - Batticaloa Lagoon Park
  - Kallady Beach
  - Kallady Temple
- ✅ **Activities** - Adventure and leisure activities for all traveler types
  - Lagoon boat rides
  - Beach activities (swimming, snorkeling)
  - Cycling tours
  - Fishing experiences
- ✅ **Food & Culture** - Local cuisine, festivals, and cultural insights
- ✅ **Responsive Navigation** - Intuitive multi-page navigation
- ✅ **Image Gallery** - High-quality photography throughout

### Technical Features

- 🎨 Professional CSS styling with modern aesthetics
- 📱 Fully responsive design (mobile-first approach)
- ⚡ Lightweight and fast-loading pages
- 🖼️ Interactive modal system for attraction details
- 🔄 Clean code architecture with modular PHP includes

---

## 🛠 Tech Stack

| Technology               | Version | Purpose                                         |
| ------------------------ | ------- | ----------------------------------------------- |
| **PHP**                  | 8.0+    | Server-side rendering & dynamic page generation |
| **HTML5**                | -       | Semantic markup & structure                     |
| **CSS3**                 | -       | Styling, flexbox, responsive design             |
| **JavaScript (Vanilla)** | ES6+    | Interactive modals and user interactions        |
| **Apache/XAMPP**         | 8.1+    | Local development server                        |

### Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS Safari, Chrome Mobile)

---

## 📦 Installation Guide

### Prerequisites

- **XAMPP** (Apache + PHP) installed on your system
- **Git** for version control
- Basic knowledge of PHP and web development
- Text editor or IDE (VS Code recommended)

### Step-by-Step Setup

#### 1. **Clone the Repository**

```bash
# Navigate to XAMPP's htdocs directory
cd C:\xampp\htdocs

# Clone the repository
git clone https://github.com/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project.git

# Navigate into the project
cd batticaloa_tourism_tourism_website_project
```

#### 2. **Configure XAMPP**

```bash
# Start XAMPP Control Panel
# Ensure Apache is running

# Alternatively, start via command line
cd C:\xampp
apache_start.bat
```

#### 3. **Access the Website**

```
Open your browser and navigate to:
http://localhost/batticaloa_tourism_tourism_website_project/src/index.php
```

Alternatively, you can access individual pages directly:

- `http://localhost/batticaloa_tourism_tourism_website_project/src/about.php`
- `http://localhost/batticaloa_tourism_tourism_website_project/src/attractions.php`
- `http://localhost/batticaloa_tourism_tourism_website_project/src/activities.php`
- `http://localhost/batticaloa_tourism_tourism_website_project/src/food-culture.php`

#### 4. **Verify Installation**

- Homepage should load without errors
- Navigation links should work
- Modal popups should appear when clicking "View" buttons

### Troubleshooting

| Issue                  | Solution                                            |
| ---------------------- | --------------------------------------------------- |
| Port 80 already in use | Change Apache port in `httpd.conf`                  |
| PHP not recognized     | Verify PHP is installed and PATH configured         |
| Images not loading     | Check file paths and ensure `images/` folder exists |
| 404 errors             | Verify URL matches project folder name              |

---

## 📁 Project Structure

```
batticaloa_tourism_tourism_website_project/
│
├── src/                      # Application source code
│   ├── index.php             # Home page (landing page)
│   ├── about.php             # About Batticaloa page
│   ├── attractions.php       # Tourist attractions listing
│   ├── activities.php        # Activities & adventures page
│   ├── food-culture.php      # Food & cultural heritage page
│   └── nav.php               # Reusable navigation component
│
├── css/
│   └── style.css             # Main stylesheet (responsive design)
│
├── js/
│   └── popup.js              # Modal interaction handler
│
├── images/                   # Image assets (22+ high-quality photos)
│   ├── home-image.jpeg
│   ├── about-image-*.jpeg
│   ├── attractions-image-*.jpeg
│   ├── culture-image-*.jpeg
│   ├── food-image-*.jpeg
│   ├── activities-image-*.jpeg
│   ├── fort.jpeg
│   ├── lagoon.jpeg
│   ├── beach.jpeg
│   ├── temple.jpeg
│   └── [location maps]
│
├── screenshots/              # README documentation screenshots
│   ├── 01-homepage.png
│   ├── 02-about.png
│   ├── 03-attractions.png
│   ├── 04-activities.png
│   ├── 05-food_culture.png
│   └── README.md
│
├── .github/                  # GitHub templates & workflows
├── .editorconfig             # Code style consistency rules
├── .gitignore                # Git ignore rules
├── .htaccess                 # Apache configuration
├── LICENSE                   # MIT License
├── README.md                 # Project documentation
├── CONTRIBUTING.md           # Contribution guidelines
├── CODE_OF_CONDUCT.md        # Community standards
├── CHANGELOG.md              # Version history
└── [other config files]
```

### Key Components

**src/nav.php** - Shared navigation component included in all pages

```php
<?php include 'nav.php'; ?>  // Include within src/ pages
```

**src/** - All application PHP files:

- Routes from root entry points (index.php, about.php, etc.) to src/ files
- Cleaner code organization with source files in dedicated directory
- Asset paths updated to reference parent directory (../css, ../js, ../images)

**js/popup.js** - Modal system for attraction details

- Handles opening/closing modals
- Displays maps and detailed information
- Responsive overlay and animations

**style.css** - Comprehensive styling

- Mobile-responsive breakpoints
- CSS Flexbox layout
- Professional color scheme
- Smooth animations and transitions

---

## 📄 Pages Overview

### 🏠 Home (index.php)

- Hero section with welcome message
- Overview of Batticaloa highlights
- Call-to-action for exploration

### ℹ️ About (about.php)

- Detailed city information and location map
- Historical background and cultural context
- Gallery of key attractions

### 🏛️ Attractions (attractions.php)

- Four main attractions with full details:
  - **Batticaloa Dutch Fort** - Historic Portuguese/Dutch fort from 1628
  - **Batticaloa Lagoon Park** - Picturesque nature reserve
  - **Kallady Beach** - Famous for "singing fish" phenomenon
  - **Kallady Temple** - Hindu cultural landmark
- Interactive modals with maps and descriptions

### 🎯 Activities (activities.php)

- Four adventure experiences:
  - Lagoon boat rides through mangroves
  - Beach activities (swimming, snorkeling)
  - Guided cycling tours
  - Traditional fishing experiences
- High-quality activity photography

### 🍜 Food & Culture (food-culture.php)

- Local cuisine specialties
- Festival celebrations and traditions
- Cultural practices and heritage
- Traditional crafts and artistry

---

## 📸 Screenshots

### Homepage - Welcome Section

![Homepage Hero](https://cdn.jsdelivr.net/gh/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project@main/screenshots/01-homepage.png)
_Engaging hero section showcasing Batticaloa's natural beauty with welcome message and overview_

### About Page - Location & Overview

![About Batticaloa](https://cdn.jsdelivr.net/gh/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project@main/screenshots/02-about.png)
_Map location and comprehensive city information with cultural gallery and heritage details_

### Tourist Attractions - Interactive Modals

![Tourist Attractions](https://cdn.jsdelivr.net/gh/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project@main/screenshots/03-attractions.png)
_Detailed attraction cards with modal popups, maps, and comprehensive location information_

### Activities - Adventure Experiences

![Activities](https://cdn.jsdelivr.net/gh/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project@main/screenshots/04-activities.png)
_Visual showcase of lagoon rides, beach activities, cycling tours, and fishing experiences_

### Food & Culture - Local Heritage

![Food & Culture](https://cdn.jsdelivr.net/gh/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project@main/screenshots/05-food_culture.png)
_Exploration of local cuisine, festival celebrations, cultural traditions, and traditional crafts of Batticaloa_

---

## 🚀 Usage

### For End Users

1. Navigate to `http://localhost/batticaloa_tourism_tourism_website_project/src/index.php`
2. Explore different sections using the navigation menu
3. Click navigation links to visit other pages (About, Attractions, Activities, Food & Culture)
4. Click "View" buttons on attractions to see detailed information and maps
5. Browse activities and cultural information for travel planning

### For Developers

#### Running Locally

```bash
cd C:\xampp\htdocs\batticaloa_tourism_tourism_website_project
# Open http://localhost/batticaloa_tourism_tourism_website_project/
```

#### Adding New Attractions

1. Add image to `images/` folder
2. Edit `attractions.php` with new attraction card:

```php
<div class="attraction">
  <img src="images/your-image.jpg" alt="Attraction Name" />
  <div class="attraction-info">
    <h3>Attraction Name</h3>
    <p>Description here...</p>
    <button class="view-btn" onclick="showAttractionModalByIndex(4)">View</button>
  </div>
</div>
```

#### Customizing Styles

Edit `css/style.css` to modify:

- Colors and typography
- Responsive breakpoints
- Animation speeds
- Layout and spacing

#### Adding New Pages

1. Create new `.php` file (e.g., `gallary.php`)
2. Include header with `nav.php`:

```php
<?php include 'nav.php'; ?>
```

3. Add link to `nav.php` navigation

---

## 🤝 Contributing

Contributions are welcome! Here's how to help:

### Development Workflow

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/amazing-feature`
3. Make your changes
4. Test thoroughly on different devices
5. Commit with descriptive messages: `git commit -m 'Add amazing feature'`
6. Push to branch: `git push origin feature/amazing-feature`
7. Open a Pull Request

### Code Standards

- Use semantic HTML5
- Follow CSS naming conventions (BEM or similar)
- Use vanilla JavaScript (no heavy frameworks for simplicity)
- Add comments for complex logic
- Test on mobile and desktop browsers
- Optimize images before committing

### Reporting Issues

- Use GitHub Issues for bug reports
- Include screenshots and browser information
- Describe steps to reproduce

---

## 📝 License

This project is licensed under the MIT License - see below for details:

```
MIT License

Copyright (c) 2026 Batticaloa Tourism

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
```

---

## 📞 Contact & Support

- **Project Repository:** [GitHub](https://github.com/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project)
- **Issues:** [Report Bugs](https://github.com/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project/issues)
- **Discussions:** [Start Discussion](https://github.com/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project/discussions)

---

## 🌟 Acknowledgments

- Batticaloa Tourism Board for inspiration and information
- Local community for cultural insights
- All contributors and supporters

---

## 📊 Project Statistics

- **Pages:** 5 main pages + reusable components
- **Images:** 22+ high-quality photographs
- **File Size:** ~3.4 MB (optimized)
- **Load Time:** < 2 seconds (average desktop)
- **Browser Support:** 95%+ coverage
- **Mobile Responsive:** Yes (tested on common devices)

---

<div align="center">

### 🌏 Explore Batticaloa. Experience Culture. Create Memories.

[Star on GitHub](https://github.com/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project) |
[Report Issues](https://github.com/Pasindu-Promodaya/batticaloa_tourism_tourism_website_project/issues)

</div>

---

**Last Updated:** April 7, 2026  
**Version:** 1.0.0  
**Maintained By:** Development Team
