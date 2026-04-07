# Screenshots Directory

This directory contains screenshots of the Batticaloa Tourism Website for use in the main README.md documentation.

## How to Add Screenshots

### Step 1: Take Screenshots

1. Open your website in a browser: `http://localhost/batticaloa_tourism_tourism_website_project/`
2. Take high-quality screenshots of each page:
   - **01-homepage.png** - Homepage with hero section
   - **02-about.png** - About page with map and gallery
   - **03-attractions.png** - Attractions page with modal popup
   - **04-activities.png** - Activities page showcasing adventures

### Step 2: Optimize Screenshots

Before adding, optimize the image files:

- **Recommended size:** 1200px width (minimum)
- **Format:** PNG or JPG
- **File size:** < 500KB per image
- **Quality:** 1080p or higher

### Step 3: Add Screenshots to This Folder

Copy your screenshot files to this directory and name them:

```
screenshots/
├── 01-homepage.png
├── 02-about.png
├── 03-attractions.png
└── 04-activities.png
```

### Step 4: Commit and Push

```bash
cd c:\xampp\htdocs\batticaloa_tourism_tourism_website_project

# Add the screenshots
git add screenshots/

# Commit the changes
git commit -m "docs: Add project screenshots for README documentation"

# Push to GitHub
git push
```

## Tools for Taking Screenshots

### Windows

- **Built-in:** `Win + Shift + S` (Screenshot tool)
- **Recommended:** [ShareX](https://getsharex.com/) - Free, powerful screenshot tool
- **Alternative:** [Snagit](https://www.techsmith.com/capture-tool.html)

### Browser Extensions

- **Firefox:** Screenshot Tool (built-in)
- **Chrome:** Take Webpage Screenshots (Full Page)

## Screenshot Best Practices

✅ **DO:**

- Include full page view
- Show the navigation menu clearly
- Capture modal popups open (for attractions)
- Use consistent lighting and zoom level
- Include different sections/pages for variety

❌ **DON'T:**

- Include personal information or test data
- Take blurry or low-resolution screenshots
- Crop out important UI elements
- Use extremely zoomed in/out views

## File Naming Convention

Use this naming pattern: `NN-page-name.png`

- `01-homepage.png`
- `02-about.png`
- `03-attractions.png`
- `04-activities.png`
- `05-activities-alt.png` (if adding more views)

## After Adding Screenshots

Once you've added the screenshots and pushed to GitHub, they will automatically appear in your README.md file thanks to the GitHub raw content URLs.

**Note:** Screenshots typically appear within a few seconds after pushing, but may take 1-2 minutes for CDN caching to update if you replace existing files.

---

For questions about screenshots, refer to the [Screenshots Section](../README.md#-screenshots) in the main README.
