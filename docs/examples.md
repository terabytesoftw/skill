# Usage examples

These examples are copyable starting points, not recorded model runs. Every output is labeled illustrative or expected.
Replace placeholder paths and contracts with evidence from the target checkout, and report only checks that actually
ran.

## Choose a skill

- [`adversarial-review`](prompts/adversarial-review.md): review seeded defects and refute a plausible false positive.
- [`analyze-first`](prompts/analyze-first.md): map a public API change and clarify ambiguous configuration behavior.
- [`assumption-tracking`](prompts/assumption-tracking.md): validate units and configuration precedence.
- [`conventional-commits`](prompts/conventional-commits.md): prepare ordinary and breaking commit text without
  committing.
- [`phpdoc`](prompts/phpdoc.md): document a generic map and a structured dataset without redundant prose.
- [`plan-then-execute`](prompts/plan-then-execute.md): coordinate a public rename and a compatible configuration
  migration.
- [`research-protocol`](prompts/research-protocol.md): verify a Composer plugin contract and an installed SDK before
  implementation.

The [evaluation payload manifest](evaluation-manifest.md) defines the exact synthetic files for fourteen independent
cases. Expected-output sections are documentation only and are excluded from model payloads.

The [cross-client evaluation](evaluation-results.md) records the observed 42-run matrix separately from those expected
outputs, including partial results and client capability evidence.

## Invoke and verify

Run a prompt from the target project or package root and explicitly request the named skill. Ask the agent to identify
the skill file it loaded, the evidence it inspected, changes it made, checks it ran with real exit status, and remaining
limits.

Examples never authorize external model calls, network access, dependency installation, commits, pushes, or publication
unless their prompt says so. For adversarial review, an omitted or unexposed `Effort` value is displayed as `default`;
that label does not certify an internal reasoning level.

[Back to README](../README.md#usage-examples)
