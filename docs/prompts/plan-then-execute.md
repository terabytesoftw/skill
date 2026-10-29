# Plan-then-execute examples

The synthetic fixtures describe affected files but do not provide writable application source. The illustrative output
therefore stops at a patch outline. In a real checkout, execute the approved steps and report actual checks.

## Plan a compatible public rename

### Plan a compatible public rename: Prompt

```text
Use `$plan-then-execute` with `docs/fixtures/plan-client-rename.md`.

Create an ordered, verifiable implementation plan before proposing any patch. For this synthetic documentation case,
produce a file-by-file patch outline and verification sequence instead of editing files. Preserve the compatibility
cycle, return values, and exceptions. Do not commit, push, publish, or invent test results.
```

### Plan a compatible public rename: Minimum context

- The fixture defines the requested compatibility behavior and affected synthetic paths.
- No real implementation or test harness is part of the payload.

### Plan a compatible public rename: Illustrative output

```text
Plan
1. Add dispatch() with the existing send() behavior in src/Client.php.
2. Make send() a deprecated forwarder and preserve its signature.
3. Move internal callers and README examples to dispatch().
4. Cover both entry points and update the single active changelog entry.
5. Run focused tests, static analysis, style, and diff checks available in the real checkout.

Patch outline
- src/Client.php: add dispatch(); keep send() as a forwarder.
- tests/ClientTest.php: assert identical value and exception behavior.
- README.md: use dispatch() in public examples.
- CHANGELOG.md: describe the compatible migration once.
```

### Plan a compatible public rename: Verification

- Every plan step names an artifact and a completion check.
- The outline does not remove `send()` during the compatibility cycle.
- No check is reported as passing because no real harness ran for this fixture.

### Plan a compatible public rename: Limits

Method visibility, inheritance, named arguments, and exact deprecation syntax require the real source contract.

## Plan a configuration-key migration

### Plan a configuration-key migration: Prompt

```text
Use `$plan-then-execute` with `docs/fixtures/plan-timeout-key.md`.

Plan the migration before implementation. For this synthetic case, return the ordered plan, precedence decision,
file-level patch outline, rollback point, and verification commands a real checkout would require. Do not edit files or
claim commands ran. Preserve the old key for one cycle and the 30-second default.
```

### Plan a configuration-key migration: Minimum context

- The fixture defines both keys, precedence, validation, compatibility period, and affected component kinds.
- No deployment files, secrets, or installed dependencies are supplied.

### Plan a configuration-key migration: Illustrative output

- Plan parser support for the new key before migrating consumers and documentation.
- Define new-key precedence while retaining the old-key fallback.
- Add focused cases for new only, old only, both, absent, malformed, and non-positive values.
- Keep a rollback point before removing the old-key path in a future release.
- List real-project commands as planned checks with no fabricated exit status.

### Plan a configuration-key migration: Verification

- The plan covers all precedence and validation cases in the fixture.
- The compatibility path and default remain explicit at each affected boundary.
- Progress is not marked complete until a real checkout supplies source and checks.

### Plan a configuration-key migration: Limits

Deployment rollout order and environment inventory remain outside this synthetic payload.

[Back to usage examples](../examples.md)
