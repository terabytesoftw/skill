# Analyze-first examples

## Map a public API behavior change

### Map a public API behavior change: Prompt

```text
Use `$analyze-first` to inspect the synthetic snapshot in `docs/fixtures/analyze-cache-contract.md` before changing
cache expiration behavior.

The requested change is: "Make `Cache::get()` return `null` for expired entries instead of deleting them immediately."
Do not edit files yet. Inspect the public interface, implementation, callers, tests, documentation, and storage cleanup
path. Report the current contract, affected components, compatibility risks, edge cases, and the smallest open questions
that must be resolved before implementation.
```

### Map a public API behavior change: Minimum context

- The fixture contains the cache interface, implementation, known callers, and requested change.
- No wider repository or runtime is part of this synthetic case.

### Map a public API behavior change: Illustrative output

```text
Current contract
- Cache::get() returns a stored value or null; expiration side effects are not documented.

Affected components
- Public cache interface and implementation
- Callers that distinguish a miss from a stored null
- Cleanup metrics and expiration tests

Risks
- A lazy cleanup change can retain expired storage indefinitely.
- Existing callers may already treat null as a miss.

Open question
- Is physical deletion observable through the public contract or only through storage metrics?
```

### Map a public API behavior change: Verification

- Every affected component in the analysis points to repository evidence.
- No implementation starts before the null-value and cleanup contracts are resolved.
- The working tree remains unchanged.

### Map a public API behavior change: Limits

Static analysis cannot prove runtime storage behavior when the backing service or dependencies are unavailable.

## Clarify an ambiguous configuration request

### Clarify an ambiguous configuration request: Prompt

```text
Use `$analyze-first` with `docs/fixtures/analyze-payment-timeout.md` before implementing the request in that fixture.

Do not modify files. Locate every existing timeout source, configuration layer, environment parser, constructor default,
and call site. Determine the current unit, precedence, validation, and behavior for zero or negative values. Separate
facts from unresolved product choices and propose an implementation boundary only after the evidence is mapped.
```

### Clarify an ambiguous configuration request: Minimum context

- The fixture contains the current timeout sources and the ambiguous request.
- No installed dependency or deployment configuration is in scope.

### Clarify an ambiguous configuration request: Illustrative output

- Current source and unit, with file references.
- Precedence from committed configuration through environment override to constructor input.
- Impacted parser, configuration object, consumer, documentation, and focused tests.
- Open decisions for zero, negative, malformed, and absent values.
- A scoped implementation proposal that preserves the evidenced default.

### Clarify an ambiguous configuration request: Verification

- Search results account for every existing timeout constant and environment key.
- The reported default matches source and tests rather than the request wording alone.
- Unresolved product choices remain questions, not invented implementation rules.

### Clarify an ambiguous configuration request: Limits

The analysis does not authorize a configuration migration, deployment change, or secret access.

[Back to usage examples](../examples.md)
