# Provenance

This portable skill adapts the user's private `adversarial-review` workflow. The private installation required a fixed
reviewer pair; this distribution replaces that local profile with user-selected reviewer choices and capability checks.
No private paths, credentials, sessions, or client configuration are included.

The review method was previously inspired by material in
[`michael-denyer/pstack-claude`](https://github.com/michael-denyer/pstack-claude/tree/1dba27e50e8f18f146bb80f137f0690f8d773c2e),
pinned to commit `1dba27e50e8f18f146bb80f137f0690f8d773c2e`. That material in turn records review-specific origins in
[`cursor/plugins`](https://github.com/cursor/plugins/tree/118e73b0e196e4d49d5aade7ce6dd8985a621f68/thermos).

Retained ideas include reviewing raw evidence before prior conclusions, tracing cross-boundary effects, calibrated
findings, actionable evidence, and accepting no findings. This adaptation adds explicit false-positive refutation,
provider-neutral reviewer profiles, honest fallback modes, runtime and version distinctions, private reporting, safe
scratch verification, and bounded closure.

It does not adopt fixed file-size thresholds, aesthetic approval gates, mandatory model identifiers, broad restructuring
pressure, or claims that nothing can escape review. The complete applicable MIT terms are retained in
[`LICENSE-pstack`](../licenses/LICENSE-pstack) and [`LICENSE-thermos`](../licenses/LICENSE-thermos). Preserve those
files with redistributed copies of this skill.
