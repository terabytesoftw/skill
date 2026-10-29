# Synthetic timeout-key migration

Requested implementation:

- Introduce `PAYMENT_TIMEOUT_SECONDS`.
- Continue accepting `PAYMENT_TIMEOUT` for one compatibility cycle.
- Prefer the new key when both are present.
- Preserve the existing default of 30 seconds.
- Reject non-positive and malformed values through the existing validation path.
- Update focused configuration tests and documentation.
- Do not alter deployment files or install dependencies.

The synthetic project has a parser, immutable configuration object, client consumer, tests, and a configuration guide.
