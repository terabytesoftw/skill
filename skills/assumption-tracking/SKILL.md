---
name: assumption-tracking
description: Make assumptions explicit, validate them when possible, and avoid silent guesses.
---

# Assumption tracking

Use this skill when behavior depends on undocumented details, incomplete requirements, or inferred intent.

## Workflow

- List each material assumption explicitly.
- Validate assumptions against source code, tests, configuration, or documentation.
- Mark assumptions as confirmed, rejected, or unverified.
- Adjust the plan or implementation when validation contradicts an assumption.

## Expected output

- A short list of assumptions
- Validation status for each assumption
- Clear note about any remaining uncertainty

## Failure conditions

- Hidden assumptions
- Proceeding as if an unverified assumption were proven
- Keeping invalidated assumptions in the implementation
