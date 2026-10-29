---
name: analyze-first
description: Analyze the problem and affected code before making changes, especially for ambiguous or non-trivial tasks.
---

# Analyze first

Use this skill when requirements are ambiguous, existing behavior is being modified, or shared contracts may be
affected.

## Workflow

- Inspect the current implementation before proposing code changes.
- Identify the goal, constraints, invariants, impacted components, risks, and edge cases.
- Validate assumptions against local code, tests, and documentation before implementation.

## Expected output

- Concise problem understanding
- Relevant constraints and invariants
- Edge cases and risks
- Explicit open questions when something cannot be verified locally

## Failure conditions

- Writing code before understanding the current implementation
- Ignoring constraints visible in code or tests
- Treating a non-trivial change as trivial without evidence
