# Conventional-commit examples

These prompts prepare text only. They do not authorize staging, commits, pushes, or changelog edits.

## Prepare an ordinary fix message

### Prepare an ordinary fix message: Prompt

```text
Use `$conventional-commits` to propose a commit message and one changelog entry from the verified synthetic summary in
`docs/fixtures/commit-falsey-cache.md`.

Return text only. Do not edit files, stage changes, create a commit, or push. Keep the changelog entry below 150
characters and match a flat-bullet changelog style.
```

### Prepare an ordinary fix message: Minimum context

- The fixture is the complete verified change summary for this synthetic case.
- The repository uses Conventional Commits and a flat active-development changelog section.

### Prepare an ordinary fix message: Illustrative output

```text
Commit message:
fix(cache): preserve falsey cached values

Changelog entry:
- fix(cache): preserve falsey cached values.
```

### Prepare an ordinary fix message: Verification

- The message follows `<type>(<scope>): <description>`.
- The description reflects the whole change without claiming a public API break.
- Exactly one proposed changelog bullet is present and remains below 150 characters.

### Prepare an ordinary fix message: Limits

The supplied summary must be checked against the actual diff before the text is used.

## Prepare a breaking-change message

### Prepare a breaking-change message: Prompt

```text
Use `$conventional-commits` to propose text for the verified synthetic API change in
`docs/fixtures/commit-breaking-client.md`.

Provide a Conventional Commit subject, a `BREAKING CHANGE:` footer, and one concise changelog bullet. Return text only;
do not edit the repository or create a commit.
```

### Prepare a breaking-change message: Minimum context

- The fixture is the complete verified contract summary for this synthetic case.

### Prepare a breaking-change message: Illustrative output

```text
Commit message:
feat(client)!: replace send with dispatch

BREAKING CHANGE: Client::send() was removed; use Client::dispatch().

Changelog entry:
- feat(client)!: replace Client::send() with Client::dispatch().
```

### Prepare a breaking-change message: Verification

- The `!` and footer both communicate the breaking contract.
- The footer names the removed and replacement methods exactly.
- The single changelog entry summarizes the PR and remains below 150 characters.

### Prepare a breaking-change message: Limits

Do not label a rename as breaking until supported callers and compatibility policy establish that consequence.

[Back to usage examples](../examples.md)
