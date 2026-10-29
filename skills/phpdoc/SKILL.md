---
name: phpdoc
description: Maintain concise, evidence-based PHPDoc and static-analysis type information in production and test PHP code. Use for documentation or missing type context, not for creating, migrating, or running tests.
---

# PHPDoc for PHP code

Use this skill for PHPDoc and static-analysis type work in production or test PHP code. Do not activate it merely
because a test is being created or changed.

This skill does not create, migrate, configure, or run tests. Follow the project's test framework and its canonical
skills for those workflows.

## Required rules

- Use English only.
- Keep documentation accurate, concise, and evidence-based.
- Prefer direct, active voice.
- Do not restate obvious code behavior line by line.
- Add usage examples for public API entry points when they clarify intended use.
- Keep examples self-contained by using FQCNs or explicit `use` statements.
- Preserve existing legal tags and copyright years.
- Wrap native PHP values such as `null`, `true`, `false`, `string`, and `int` in backticks in prose.

## Documentation threshold

Do not add a docblock when a class, method, parameter, provider, or test name already communicates the same information.
Native PHP types take precedence.

PHPDoc is useful when it preserves information PHP cannot express directly, including:

- generic collections such as `array<string, Example>`;
- array shapes and structured datasets;
- templates, covariance, and other static-analysis contracts; and
- necessary context for a non-obvious public API, fixture, or test contract.

Do not require summaries, `Test coverage` sections, provider prose, or `{@see ...}` tags merely for consistency.

## Repository style precedence

- Follow applicable repository PHPDoc conventions.
- Preserve useful existing examples; do not add or remove examples solely to normalize unrelated documentation.
- Link an existing dedicated example instead of duplicating it.
- Treat generic examples and wording templates as patterns, not as evidence of the documented API's behavior.

## Workflow

- Identify the artifact type and public API surface.
- Determine whether native types already express the contract. If they do, leave PHPDoc absent.
- Remove redundant introductory text and obvious boilerplate.
- Document semantic intent, not syntax trivia.
- Verify generics, array shapes, and static-analysis annotations against the values the code actually accepts and
  returns.
- Add links to external standards only when they materially improve clarity.
- Verify each statement against the current implementation.

## Failure conditions

- Inventing behavior not supported by code
- Verbose or redundant documentation
- Using PHPDoc where an equivalent native type is available
- Inventing a generic, array shape, template contract, author, or release
- Changing test behavior during a documentation-only task
- Missing usage examples where the public API would otherwise be unclear
