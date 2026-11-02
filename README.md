# SpikeZone Volleyball Club Website

**Project Group:** iibgroup1  
**Module:** DS1202 – AS03 Collaborative Team Website using Git & Laravel Herd  
**Academic Session:** 2026/2027

## 1. Project Overview

SpikeZone Volleyball Club is a multi-page website designed to introduce a volleyball club, showcase its teams and activities, and provide information for people interested in joining.

The website was developed using Laravel Blade, HTML, CSS, and JavaScript. Laravel Herd is used to serve the website locally over HTTPS.

The website aims to provide visitors with an accessible and user-friendly experience while demonstrating collaborative development using Git and GitHub.

## 2. Website Pages

The website consists of five main pages:

| Page | Description |
|---|---|
| Home | Introduces SpikeZone, highlights the club's activities, and provides links to other pages. |
| About | Explains the club's background, mission, vision, and core values. |
| Teams | Introduces the Development, Competitive, and Recreational squads. |
| Events | Displays sample training sessions, friendly matches, and tournaments. |
| Join Us | Provides membership information and a demonstration enquiry form. |

## 3. Team Members and Roles

| Team Member | Role and Contributions |
|---|---|
| [Your Name] | Homepage improvements, Teams page improvements, Git workflow and documentation. |
| [Teammate's Name] | Events page improvements, Join Us form improvements, Pull Request reviews and testing. |

All team members are expected to contribute to the website, create Pull Requests, review teammates' work, and participate in the final demonstration.

## 4. Technologies Used

- Laravel – Web application framework
- Laravel Blade – Server-side templating
- HTML – Website structure
- CSS – Website styling and responsive layout
- JavaScript – Interactive website features
- Git – Version control
- GitHub – Repository hosting and collaboration
- Laravel Herd – Local development environment and HTTPS serving

## 5. Running the Website Locally

### Prerequisites

The following software is required:

- Windows
- Laravel Herd
- Git
- PHP
- Composer
- Visual Studio Code

### Installation Instructions

1. Clone the repository:

   ```bash
   git clone [PUBLIC REPOSITORY URL]
   ```

2. Navigate into the project directory:

   ```bash
   cd iibgroup1-site
   ```

3. Install the required PHP dependencies:

   ```bash
   composer install
   ```

4. Create the environment configuration file:

   ```bash
   copy .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Add the project folder to Laravel Herd's parked directories or configure it as a Herd site.

7. Ensure Herd is running and the local domain is configured as:

   ```
   https://iibgroup1.test
   ```

8. Open the website in a browser:

   [https://iibgroup1.test](https://iibgroup1.test)

Laravel Herd provides local HTTPS support for the development environment.

## 6. Git Collaboration Workflow

The team uses a feature-branch workflow to ensure that changes are reviewed before being merged into the main branch.

The `main` branch is protected, and direct pushes are not permitted.

### Workflow

1. Update the local main branch.
2. Create a new feature branch.
3. Implement the required changes.
4. Commit the changes with a meaningful commit message.
5. Push the feature branch to GitHub.
6. Open a Pull Request targeting main.
7. Request a teammate's review.
8. Address any feedback.
9. Merge the Pull Request after approval.

### Example Commands

```bash
git checkout main
git pull origin main
git checkout -b feature/example-feature
```

After making changes:

```bash
git add .
git commit -m "Describe the implemented feature"
git push -u origin feature/example-feature
```

A Pull Request is then created on GitHub for review and approval.

## 7. Merge Conflict Resolution

A merge conflict occurs when Git cannot automatically combine changes made to the same section of a file.

As part of this assessment, the team is required to encounter and resolve at least one merge conflict.

**Conflict details:**

- File involved: [To be completed]
- Branches involved: [To be completed]
- Cause of conflict: [To be completed]
- Resolution: [To be completed]

The conflict was resolved by reviewing the competing changes, agreeing on the correct content, and ensuring that the website continued to function correctly.

Evidence of the conflict and its resolution will be included in the project demonstration.

## 8. Pull Request Contributions

All changes to the main branch are submitted through Pull Requests.

| Pull Request | Description | Status |
|---|---|---|
| PR #1 | Homepage improvements | [Pending review / Merged] |
| PR #2 | Teams page improvements | [Pending review / Merged] |
| PR #3 | Events page improvements | [To be completed] |
| PR #4 | Join Us form improvements | [To be completed] |

Links to the Pull Requests:

- [PR #1 – Homepage Improvements](PR_LINK_1)
- [PR #2 – Teams Page Improvements](PR_LINK_2)
- [PR #3 – Events Page Improvements](PR_LINK_3)
- [PR #4 – Join Us Form Improvements](PR_LINK_4)

## 9. Final Release

The final version of the website will be tagged as:

```bash
git tag -a v1.0 -m "Initial release"
git push origin v1.0
```

The `v1.0` tag identifies the final release submitted for assessment.

## 10. Group Customization

The project group name is:

**iibgroup1**

The group name is included in the GitHub repository name and the website footer to distinguish the implementation from other groups.

## 11. Conclusion

The SpikeZone Volleyball Club website demonstrates the use of Git and GitHub for collaborative web development.

Through feature branches, Pull Requests, code reviews, and merge conflict resolution, the team applies a professional version control workflow while developing a functional multi-page website served securely using Laravel Herd.