---
name: conventional-commits
description: Enforce Conventional Commits v1.0.0 and one concise CHANGELOG.md entry per PR.
---

# Conventional Commits and changelog discipline

Use this skill when suggesting commit messages, PR titles, or making user-visible repository changes.

## Authorization and read-only requests

- Applying this skill does not authorize file edits, staging, commits, pushes, or changes to the Git index.
- For audits, reviews, and message-only requests, propose the relevant text without creating or editing `CHANGELOG.md`.
- Create or update `CHANGELOG.md` when implementing an authorized user-visible repository change that requires an entry.
- Preserve existing staged content and unrelated user changes.

## Required rules

- Use English only.
- Use ASCII unless the target file already contains non-ASCII.
- Commit messages must follow Conventional Commits v1.0.0.
- Record authorized user-visible work in one global `CHANGELOG.md` entry per PR.
- Base the entry on the PR title and overall change. Limit the complete entry text, including its type or scope prefix,
  to 150 characters.
- Find the existing entry for the same PR before adding one. Integrate review corrections into that entry only if its
  global summary needs updating; do not add entries for those corrections.
- If an authorized change requires a missing `CHANGELOG.md`, inspect the target's conventions, designated template, and
  actual development version before creating it. Use flat bullets; do not invent a version or category structure.

## Commit format

```text
<type>[optional scope][!]: <description>

[optional body]

[optional footer(s)]
```

## Workflow

- Choose the correct commit `type` and optional `scope`.
- Mark breaking changes with `!` and/or a `BREAKING CHANGE:` footer.
- For an authorized repository change requiring an entry, add or update the PR's single global summary. For a
  proposal-only request, provide the proposed text without editing files.
- Use a flat bullet list under the active development version. Append each new PR entry at the end of that section,
  before the next version; update an existing entry in place. Do not introduce category headings.

## Failure conditions

- Non-conforming commit messages
- Missing required changelog entries
- Multiple entries for the same PR or an entry exceeding 150 characters
- Breaking changes documented incompletely
