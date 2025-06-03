# Contributing to kapersoft/awesome-rector-rules

Thank you for your interest in contributing! 🎉

We welcome contributions of all kinds, including bug reports, feature requests, code improvements, and documentation updates.

## How to Contribute

### 1. Reporting Issues

- Please check the [existing issues](https://github.com/kapersoft/awesome-rector-rules/issues) before opening a new one.
- When reporting a bug, include clear steps to reproduce, expected behavior, and relevant code snippets.
- For security issues, **do not open a public issue**. Please follow the instructions in [SECURITY.md](SECURITY.md).

### 2. Submitting Pull Requests

- Fork the repository and create your branch from `main`.
- Write clear, concise commit messages.
- Add tests for new features or bug fixes.
- Ensure your code passes all tests and follows the code style guidelines.
- Open a pull request with a clear description of your changes.

### 3. Code Style

- Follow the existing code style and structure.
- Rector rules should include a `getRuleDefinition()` method with before/after code samples.
- Use [Rector](https://github.com/rectorphp/rector), [PHPStan](https://phpstan.org/), [Laravel Pint](https://laravel.com/docs/10.x/pint) for static analysis and code formatting.

### 4. Running Tests

- Run tests with PHPUnit:

  ```bash
  vendor/bin/phpunit
  ```

- Make sure all tests pass before submitting your pull request.

## Questions?

If you have questions about contributing, feel free to open a discussion or contact the maintainer.

Thank you for helping make this project better! 🙏
