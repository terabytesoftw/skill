# Synthetic evaluation payload manifest

This manifest defines fourteen documentation cases: two for each of seven skills. Fixtures are synthetic and contain no
user repositories, private source, credentials, accounts, sessions, logs, personal paths, or prior evaluation artifacts.

For each case, send only the named skill files, the `Prompt` code block under the named heading, and the named fixture.
Do not send the surrounding expected output, verification guidance, repository history, or other workspace files.

## Adversarial review

Shared skill payload:

- `skills/adversarial-review/SKILL.md`
- `skills/adversarial-review/references/protocol.md`
- `skills/adversarial-review/references/reporting.md`

Cases:

1. `AR-1`: heading `Review seeded correctness defects` in `docs/prompts/adversarial-review.md`, with
   `docs/fixtures/adversarial-percentage.patch`.
2. `AR-2`: heading `Refute a plausible false positive` in `docs/prompts/adversarial-review.md`, with
   `docs/fixtures/adversarial-guard.patch`.

## Analyze first

Shared skill payload: `skills/analyze-first/SKILL.md`.

Cases:

1. `AF-1`: heading `Map a public API behavior change` in `docs/prompts/analyze-first.md`, with
   `docs/fixtures/analyze-cache-contract.md`.
2. `AF-2`: heading `Clarify an ambiguous configuration request` in `docs/prompts/analyze-first.md`, with
   `docs/fixtures/analyze-payment-timeout.md`.

## Assumption tracking

Shared skill payload: `skills/assumption-tracking/SKILL.md`.

Cases:

1. `AT-1`: heading `Resolve an ambiguous size unit` in `docs/prompts/assumption-tracking.md`, with
   `docs/fixtures/assumption-upload-size.md`.
2. `AT-2`: heading `Determine configuration precedence` in `docs/prompts/assumption-tracking.md`, with
   `docs/fixtures/assumption-endpoint-precedence.md`.

## Conventional commits

Shared skill payload: `skills/conventional-commits/SKILL.md`.

Cases:

1. `CC-1`: heading `Prepare an ordinary fix message` in `docs/prompts/conventional-commits.md`, with
   `docs/fixtures/commit-falsey-cache.md`.
2. `CC-2`: heading `Prepare a breaking-change message` in `docs/prompts/conventional-commits.md`, with
   `docs/fixtures/commit-breaking-client.md`.

## PHPDoc

Shared skill payload: `skills/phpdoc/SKILL.md`.

Cases:

1. `PD-1`: heading `Document a generic map` in `docs/prompts/phpdoc.md`, with `docs/fixtures/phpdoc-user-map.php`.
2. `PD-2`: heading `Document a structured dataset` in `docs/prompts/phpdoc.md`, with `docs/fixtures/phpdoc-dataset.php`.

## Plan then execute

Shared skill payload: `skills/plan-then-execute/SKILL.md`.

Cases:

1. `PE-1`: heading `Plan a compatible public rename` in `docs/prompts/plan-then-execute.md`, with
   `docs/fixtures/plan-client-rename.md`.
2. `PE-2`: heading `Plan a configuration-key migration` in `docs/prompts/plan-then-execute.md`, with
   `docs/fixtures/plan-timeout-key.md`.

## Research protocol

Shared skill payload: `skills/research-protocol/SKILL.md`.

Cases:

1. `RP-1`: heading `Stop at a lock-only Composer limit` in `docs/prompts/research-protocol.md`, with
   `docs/fixtures/research-llm-skills.md`.
2. `RP-2`: heading `Verify an installed synthetic SDK contract` in `docs/prompts/research-protocol.md`, with
   `docs/fixtures/research-installed-sdk.md`.

## Authorized client matrix

Each case may run once in a fresh session on each authorized client, for 42 total invocations:

- Claude Code with requested model `claude-sonnet-5-5` and `medium` effort.
- Codex with requested model `gpt-6-luna` and displayed effort `default`.
- GitHub Copilot with requested model `kimi-k3` and displayed effort `default`.

Use restricted read-only sessions, disable optional MCP and web tools, avoid persistent session or memory features, and
expose only the case payload directory. Record requested, accepted, and observed model or effort evidence separately.
The displayed `default` effort does not certify an internal reasoning level.

## Minimum local checks

- Run `git apply --check` for the two patch fixtures without applying them.
- Run `php -l` for the two PHP fixtures.
- Validate Markdown, links, spelling, formatting, and table width locally.
- No command is required for the remaining self-contained Markdown fixtures beyond content inspection.

[Back to usage examples](examples.md)
