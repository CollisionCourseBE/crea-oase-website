# Crea Oase WordPress Theme

## Overview
Crea Oase is a minimalist WordPress theme designed for a clean and professional online presence. Built with simplicity and elegance in mind, it offers a streamlined user experience without sacrificing functionality. The theme is built with a sample set and the Gutenberg elements manager.

## Features
- **Minimalist Design:** Clean and modern layout that puts your content front and center.
- **Responsive:** Ensures your website looks great on all devices, from desktops to smartphones.
- **SEO Optimized:** Built with best practices for SEO to help your site rank higher in search engines.
- **Gutenberg Compatible:** Fully supports the WordPress block editor for easy content creation.
- **Fast Loading:** Lightweight code ensures fast loading times, enhancing user experience and SEO rankings.
- **Translation Ready:** Supports translation into multiple languages.
- **Cross-Browser Compatible:** Works seamlessly across all major browsers.
- **Custom Post Types:** Includes two custom post types: "Portfolio" and "Calendar".
- **Full Working Blog:** Integrated blog feature with search functionality.
- **Essential Plugins:** Crucial plugins for the theme are ACF (Advanced Custom Fields) and CF7 (Contact Form 7).

## Installation
1. **Download:** Download the theme package from [GitHub/crea-oaseBE/crea-oase-website](https://github.com/crea-oaseBE/crea-oase-website).
2. **Upload:** Log in to your WordPress dashboard, go to **Appearance > Themes**, click on **Add New**, then **Upload Theme**.
3. **Activate:** Once uploaded, activate the crea-oase theme.
4. **Import theme data:** Import de ACF file to add the predefined CPT fields and groups.

## Image Upload Permissions
When uploading images to the local server, permissions need to be reset before committing them to Git.

### Windows
Use the following command to reset permissions:
```shell
icacls "\path\to\crea-oase\wp-content\uploads" /grant "Iedereen:(OI)(CI)F" /T
```

### MacOS
Use the following command to reset permissions:
```shell
chmod -R 777 /path/to/crea-oase/wp-content/uploads
```

## Export Files
Export files can be found in the theme root and `/exports` directory. These need to be implemented inside a new ACF installation and exported again on field changes.

## Changelog
- **Version 1.0.0** - Initial release (DEV)
- **Version 1.1.0** 
  - Added sample set for theme base and reorganized styles
  - Installed packages for build and dev
  - Compiled styles and scripts
  - Implemented theme components
  - Implemented CPT Calendar and Portfolio
  - Added WordPress admin functions for front-end management
- **Version 1.2.0** - Initial release (INT)

## Issues Folder Guide

### Overview
The Issues folder on our GitHub repository is a crucial tool for tracking bugs, enhancements, and other requests related to the crea-oase WordPress Theme. This guide will help you understand how to use the Issues folder effectively.

### Creating a New Issue
To report a bug or request a new feature, follow these steps:

1. **Navigate to the Issues Tab:** Go to the [Issues tab](https://github.com/CollisionCourseBE/crea-oase-website/issues) on our GitHub repository.
2. **Click on New Issue:** Click the green "New Issue" button to open a new issue template.
3. **Choose an Issue Template:** Select the appropriate template based on your issue type (bug report, feature request, etc.).
4. **Fill in the Details:** Provide a clear and detailed description of your issue. Include:
   - **Title:** A concise title that summarizes the issue.
   - **Description:** A detailed explanation of the issue, including steps to reproduce if it's a bug.
   - **Screenshots:** Include screenshots or code snippets if applicable.
   - **Labels:** Assign relevant labels to categorize the issue (e.g., bug, enhancement).
5. **Submit the Issue:** Click the "Submit new issue" button to create your issue.

### Managing Existing Issues

#### Viewing Issues
To view all existing issues, navigate to the [Issues tab](https://github.com/CollisionCourseBE/crea-oase-website/issues). Here you can filter and sort issues by:
- **Labels:** Filter issues based on labels such as bug, enhancement, question, etc.
- **Assignees:** View issues assigned to specific team members.
- **Milestones:** Track issues related to specific project milestones.

#### Commenting on Issues
You can contribute to the discussion by commenting on existing issues:
1. **Open an Issue:** Click on the issue you want to comment on.
2. **Add a Comment:** Scroll to the bottom of the issue and type your comment in the comment box.
3. **Submit the Comment:** Click the "Comment" button to post your comment.

#### Closing Issues
Issues can be closed by maintainers or users who reported them once they are resolved:
1. **Navigate to the Issue:** Open the issue you want to close.
2. **Close the Issue:** Click the "Close issue" button at the bottom of the issue page.

### Labels
Labels help categorize issues and make it easier to filter and manage them. Common labels include:
- **bug:** Indicates a reported bug or error.
- **enhancement:** Suggests a new feature or improvement.
- **question:** Used for questions or clarification requests.
- **documentation:** Relates to improvements or issues in documentation.

### Milestones
Milestones help track progress towards specific project goals. Issues can be assigned to milestones to group related tasks and features.

### Notifications
Stay updated on issues by managing your notification settings:
- **Watch:** Click the "Watch" button at the top of the repository to receive notifications for all discussions.
- **Unwatch:** Click "Unwatch" to stop receiving notifications.
- **Custom:** Choose custom notification settings based on your preferences.

### Best Practices
- **Be Descriptive:** Provide as much detail as possible when creating or commenting on issues.
- **Be Respectful:** Maintain a respectful and collaborative tone in all communications.
- **Stay Updated:** Regularly check the Issues tab for updates on the issues you are involved in.

## Support
For support and further information, please visit the [GitHub Issues page](https://github.com/CollisionCourseBE/crea-oase-website/issues).

## Credits
This theme is developed and maintained by [DWCj](https://github.com/DWCj) under [crea-oase](https://github.com/crea-oaseBE/crea-oase-website).