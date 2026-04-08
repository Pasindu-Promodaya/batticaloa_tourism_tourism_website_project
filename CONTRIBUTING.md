# Contributing to Batticaloa Tourism Website

Thank you for your interest in contributing to the Batticaloa Tourism Website project! This document provides guidelines and instructions for contributing.

## Code of Conduct

This project adheres to a [Code of Conduct](CODE_OF_CONDUCT.md). By participating, you are expected to uphold this code.

## How to Contribute

### Reporting Bugs

Before creating a bug report, please check the issue list as you might find out that you don't need to create one. When creating a bug report, please provide as much detail as possible:

- **Use a clear and descriptive title**
- **Describe the exact steps which reproduce the problem**
- **Provide specific examples to demonstrate the steps**
- **Describe the behavior you observed after following the steps**
- **Explain which behavior you expected to see instead and why**
- **Include screenshots and animated GIFs if possible**
- **Include your browser and OS details**

### Suggesting Enhancements

Enhancement suggestions are tracked as GitHub issues. When suggesting an enhancement:

- **Use a clear and descriptive title**
- **Provide a step-by-step description of the suggested enhancement**
- **Provide specific examples to demonstrate the steps**
- **Describe the current behavior and expected behavior**
- **Explain why this enhancement would be useful**

### Pull Requests

- Follow the PHP/HTML/CSS code style guidelines
- Update documentation when making changes
- Follow the [conventional commits](https://www.conventionalcommits.org/) format
- End all files with a newline
- Provide clear commit messages

## Development Setup

### Prerequisites

- XAMPP (Apache + PHP 8.0+)
- Git
- Text Editor or IDE (VS Code recommended)

### Setup Instructions

1. **Fork and Clone**

   ```bash
   git clone https://github.com/[YOUR-USERNAME]/batticaloa_tourism_tourism_website_project.git
   cd batticaloa_tourism_tourism_website_project
   ```

2. **Create a Feature Branch**

   ```bash
   git checkout -b feature/your-feature-name
   ```

3. **Make Changes**
   - Edit files in your preferred editor
   - Test locally on `http://localhost/batticaloa_tourism_tourism_website_project/`

4. **Commit Changes**

   ```bash
   git commit -m "feat: Add your feature description"
   ```

5. **Push to Your Fork**

   ```bash
   git push origin feature/your-feature-name
   ```

6. **Open a Pull Request**
   - Provide clear description of changes
   - Reference any related issues
   - Include before/after screenshots if applicable

## Code Style Guidelines

### PHP Files

- Use 2 spaces for indentation (not tabs)
- Follow PSR-12 coding standards where applicable
- Add comments for complex logic
- Use meaningful variable names

### CSS (style.css)

- Use 2 spaces for indentation
- Use BEM naming convention when possible
- Group related properties together
- Add comments for major sections

### JavaScript (popup.js)

- Use camelCase for variable/function names
- Use ES6+ features
- Keep functions focused and modular
- Add JSDoc comments for public functions

### Example Commit Messages

- `feat: Add new attraction listing page`
- `fix: Correct image path in about section`
- `docs: Update README with setup instructions`
- `style: Improve responsive design for mobile`
- `refactor: Reorganize CSS structure`

## Testing

Before submitting a PR, please test your changes:

- [ ] Test on desktop browsers (Chrome, Firefox, Safari, Edge)
- [ ] Test on mobile devices or responsive mode
- [ ] Test all navigation links
- [ ] Test modal popups (if applicable)
- [ ] Verify all images load correctly
- [ ] Check console for JavaScript errors

## Documentation

When adding new features or pages:

1. Update README.md with new feature/page description
2. Add inline code comments for complex logic
3. Update CHANGELOG.md with your changes
4. Update this CONTRIBUTING.md if needed

## Attribution

Contributors will be recognized in the project. Major contributors may be added to the main README's acknowledgments section.

## Questions?

Feel free to open an issue with the `question` label if you need clarification on anything.

---

**Thank you for contributing to make Batticaloa Tourism Website better! 🎉**
