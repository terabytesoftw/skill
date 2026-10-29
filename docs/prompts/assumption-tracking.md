# Assumption-tracking examples

## Resolve an ambiguous size unit

### Resolve an ambiguous size unit: Prompt

```text
Use `$assumption-tracking` for the synthetic request in `docs/fixtures/assumption-upload-size.md`.

Before editing, list every material assumption about unit, rounding, configuration precedence, transport limits, and
error behavior. Validate each assumption against source, tests, configuration, and deployment documentation. Mark each
as confirmed, rejected, or unverified. Do not implement while a unit or precedence assumption remains material and
unverified.
```

### Resolve an ambiguous size unit: Minimum context

- The fixture contains the request, parser contract, application default, gateway limit, and documentation gap.
- No deployed gateway or private configuration is in scope.

### Resolve an ambiguous size unit: Illustrative output

```text
A1: The application interprets the value as bytes.
Status: confirmed
Evidence: the parser returns an integer passed directly to the byte-length check.

A2: "20 MB" means 20 * 1024 * 1024 bytes.
Status: unverified
Evidence needed: product decision or an existing documented convention.

A3: The proxy limit is at least as large as the application limit.
Status: rejected
Evidence: the checked proxy configuration currently caps requests below the requested value.
```

### Resolve an ambiguous size unit: Verification

- Every status has repository evidence or a precise missing-evidence statement.
- The implementation plan changes when a rejected assumption affects the request path.
- No value conversion is selected merely from common usage of “MB.”

### Resolve an ambiguous size unit: Limits

Local files may not represent production proxy configuration. Report that gap instead of asserting deployment behavior.

## Determine configuration precedence

### Determine configuration precedence: Prompt

```text
Use `$assumption-tracking` with `docs/fixtures/assumption-endpoint-precedence.md` before changing endpoint
configuration.

The repository contains a committed default, optional `.env` loading, process environment variables, and a CLI
`--endpoint` option. List the assumptions needed to state which value wins. Validate them through the actual bootstrap,
parser, tests, and help text. Return a precedence result only for paths supported by evidence and mark any runtime-only
layer as unverified. Do not edit configuration or read secret values.
```

### Determine configuration precedence: Minimum context

- The fixture contains every allowed precedence fact.
- Secret values and real deployment configuration are absent and out of scope.

### Determine configuration precedence: Illustrative output

- Confirmed: the CLI option overrides the already-built configuration object.
- Confirmed or rejected: process environment overrides the committed default, based on bootstrap order.
- Unverified: production injects a separate runtime layer not represented in the checkout.
- Consequence: implement only against the confirmed layers and preserve an explicit note about the runtime gap.

### Determine configuration precedence: Verification

- Trace each layer from definition to the final consumer.
- Confirm that tests exercise the same construction path rather than a hand-built substitute.
- Keep secret contents absent from commands and output.

### Determine configuration precedence: Limits

This workflow establishes local precedence, not the state of a deployed environment.

[Back to usage examples](../examples.md)
