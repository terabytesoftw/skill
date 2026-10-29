---
name: research-protocol
description: Verify third-party library and API behavior from primary documentation before implementation.
---

# Research protocol

Use this skill when working with third-party libraries, frameworks, SDKs, external APIs, or behavior not defined by the
local codebase.

## Non-negotiable rule

- Do not write integration code from memory alone.

## Workflow

- Confirm the exact package, framework, or API identity.
- Resolve the state actually being inspected before choosing documentation. Installed files and live checkout HEAD or
  local changes take precedence over a lockfile or declared constraint; distinguish a lock-only resolution when files
  are absent.
- For Composer dependencies, resolve the real package path and configured vendor directory, then inspect
  `composer/installed.php` for `install_path`, `pretty_version`, and the selected `reference`. Verify its source
  provenance rather than preferring raw source over dist references. For a root package, inspect self metadata and the
  checkout itself. Equivalent Composer APIs or CLI output are valid when they establish the same installed paths,
  selected references, and local state.
- Retrieve primary documentation for that state. Resolve each dependency separately, report metadata mismatches, and do
  not infer a tag from a version alias or use the latest release by default.
- Read real usage examples from the official docs.
- Confirm version-specific constraints and supported API surface.
- Do not implement until uncertainty is reduced to an explicit, acceptable level.

## Source rules

- Prefer official documentation and primary sources.
- Treat blog posts and summaries as secondary material only.
- Quote sparingly and link sources when citing behavior.

## Unavailable documentation

When matching guides are unavailable, inspect local source, PHPDoc, and changelog for the actual contract and report the
missing documentation. Proceed only on behavior those sources establish; pause changes that still depend on unverified
behavior. Do not bypass access restrictions or claim verification from memory.

## Failure conditions

- Guessing external APIs from memory
- Using outdated or unofficial documentation as the main source
- Proceeding with unresolved uncertainty about versioned behavior
