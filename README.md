# Processmaker My First Package
This package provides the necessary base code to start the developing a package in ProcessMaker 4.

## Development
If you need to create a new ProcessMaker package run the following commands:

```
git clone https://github.com/ProcessMaker/my-first-package.git
cd my-first-package
php rename-project.php my-first-package
composer install
npm install
npm run dev
```

## Installation
* Use `composer require processmaker/my-first-package` to install the package.
* Use `php artisan my-first-package:install` to install generate the dependencies.

## Navigation and testing
* Navigate to administration tab in your ProcessMaker 4
* Select `Skeleton Package` from the administrative sidebar

## Uninstall
* Use `php artisan my-first-package:uninstall` to uninstall the package
* Use `composer remove processmaker/my-first-package` to remove the package completely
