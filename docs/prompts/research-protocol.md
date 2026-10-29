# Research-protocol examples

These examples distinguish a lock-only state from installed source. They do not authorize network access or dependency
installation.

## Stop at a lock-only Composer limit

### Stop at a lock-only Composer limit: Prompt

```text
Use `$research-protocol` with `docs/fixtures/research-llm-skills.md` to answer whether the selected `llm/skills` version
accepts a list in `extra.skills.source`.

Use only the synthetic fixture. Do not access the network, install dependencies, or infer current API behavior from the
package name. Resolve the evidence layer, state what can and cannot be verified, identify the exact primary source still
needed, and do not propose integration code while the contract remains unresolved.
```

### Stop at a lock-only Composer limit: Minimum context

- The fixture records a declared and locked version but no installed source.
- Network access is explicitly absent.

### Stop at a lock-only Composer limit: Illustrative output

```text
Resolved state
- Declared: llm/skills 1.15.0
- Locked: 1.15.0
- Installed source: absent

Decision
- The list form is not verified from the supplied evidence.

Required evidence
- Installed 1.15.0 source or matching versioned primary documentation from the recorded upstream repository.
```

### Stop at a lock-only Composer limit: Verification

- The report calls this lock-only rather than installed behavior.
- It does not substitute latest upstream documentation or memory for the selected state.
- No URL is fetched and no API conclusion is invented.

### Stop at a lock-only Composer limit: Limits

The result is intentionally unresolved until matching primary evidence becomes available.

## Verify an installed synthetic SDK contract

### Verify an installed synthetic SDK contract: Prompt

```text
Use `$research-protocol` with `docs/fixtures/research-installed-sdk.md` before adapting timeout configuration.

Treat `example/http-sdk` as a synthetic package. Resolve declared, locked, installed, documentation, source, and
changelog evidence from the fixture only. Decide whether a floating-point number of seconds may be passed directly to
`withTimeout()`. Do not use the network or write integration code.
```

### Verify an installed synthetic SDK contract: Minimum context

- The fixture contains all permitted metadata, installed-source behavior, and bundled documentation evidence.
- The package name and reference are explicitly synthetic.

### Verify an installed synthetic SDK contract: Illustrative output

- The installed selection is synthetic version `2.4.3` at the recorded path and reference.
- Both bundled documentation and source require a positive integer number of milliseconds.
- A floating-point seconds value cannot be passed directly; conversion and validation must be designed by the caller.
- No conclusion is drawn for real packages or other versions.

### Verify an installed synthetic SDK contract: Verification

- The decision cites both the documented unit and the source validation.
- The report keeps root constraint, locked selection, and installed evidence distinct.
- No external source is cited for the synthetic package.

### Verify an installed synthetic SDK contract: Limits

This case demonstrates the method only. It is not documentation for an actual SDK.

[Back to usage examples](../examples.md)
