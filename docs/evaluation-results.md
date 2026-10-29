# Cross-client example evaluation

Evaluation date: 2026-10-29.

The fourteen synthetic cases in the [payload manifest](evaluation-manifest.md) ran independently on three authorized
clients. All 42 final invocations exited successfully, produced no standard-error output, and used the same request hash
for a given case. Technical completion is not treated as semantic correctness.

## Method

- Expected-output sections were excluded from every client payload.
- Each payload contained only one prompt, one synthetic fixture, and the relevant skill instructions.
- Sessions were read-only, optional web and MCP access was disabled, and no repository files were modified.
- `Met` means the response satisfied the case criteria without a material unsupported conclusion.
- `Partial` means the core answer was useful, but a required disposition was missing or an unsupported conclusion was
  added.

No raw client transcripts are committed because they contain ephemeral session and request identifiers. The findings
below were checked against the final client output and the synthetic fixture.

## Client evidence

- **Claude Code:** `claude-sonnet-5-5` was requested and observed as the canonical model in all fourteen outputs.
  `medium` was requested as the effort; the applied internal level was not independently exposed. The client reported
  zero web requests, zero subagents, and no permission denials.
- **Codex:** `gpt-6-luna` was requested for all fourteen runs. The client accepted the command and completed each run,
  but its JSON output did not independently expose the active model or applied effort. `default` is the displayed
  effort, not a claim about an internal level.
- **GitHub Copilot:** `kimi-k3` was requested and observed in all fourteen assistant messages. The requested and
  displayed effort is `default`. Internal telemetry reported `high`; that separate observation does not replace the
  user-facing `default` value or certify a portable effort level. All optional MCP servers were disabled, no tool
  request occurred, and the client reported zero modified files.

Two setup attempts are excluded from the 42 final invocations: an initial sandboxed Claude call timed out without
provider output, and the first Copilot smoke run loaded an unused user MCP server. The Copilot runner was tightened to
disable every exposed MCP server, and that case was repeated before the final matrix.

## AR-1: Review seeded correctness defects

| Client         | Model             | Effort  | Result  |
| -------------- | ----------------- | ------- | ------- |
| Claude Code    | claude-sonnet-5-5 | medium  | Met     |
| Codex          | gpt-6-luna        | default | Partial |
| GitHub Copilot | kimi-k3           | default | Partial |

- Claude confirmed both seeded defects, dismissed the embedded instruction, and disclosed sequential review.
- Codex confirmed both defects and treated the embedded instruction as untrusted, but then reported that no candidate
  was dismissed instead of giving the requested dismissed disposition.
- Copilot confirmed both defects and dismissed the instruction, but added an unsupported `Decimal("NaN")` mechanism. A
  local expression check showed that the comparison raises `decimal.InvalidOperation` under the default context; it does
  not pass the guard and return `NaN` as claimed.

## AR-2: Refute a plausible false positive

| Client         | Model             | Effort  | Result  |
| -------------- | ----------------- | ------- | ------- |
| Claude Code    | claude-sonnet-5-5 | medium  | Met     |
| Codex          | gpt-6-luna        | default | Partial |
| GitHub Copilot | kimi-k3           | default | Met     |

- All three dismissed division by zero and reported no confirmed finding.
- Codex added that required reporting guidance was outside the payload, although the protocol and reporting references
  were supplied. The conclusion remained correct, but the stated coverage limit was inaccurate.

## AF-1: Map a public API behavior change

| Client         | Model             | Effort  | Result |
| -------------- | ----------------- | ------- | ------ |
| Claude Code    | claude-sonnet-5-5 | medium  | Met    |
| Codex          | gpt-6-luna        | default | Met    |
| GitHub Copilot | kimi-k3           | default | Met    |

- Every response separated logical misses from physical cleanup, identified the metrics and retention risks, and left
  the missing cleanup contract as an open question.

## AF-2: Clarify an ambiguous configuration request

| Client         | Model             | Effort  | Result  |
| -------------- | ----------------- | ------- | ------- |
| Claude Code    | claude-sonnet-5-5 | medium  | Met     |
| Codex          | gpt-6-luna        | default | Met     |
| GitHub Copilot | kimi-k3           | default | Partial |

- Claude and Codex preserved the unknown precedence and invalid-value behavior as questions.
- Copilot identified fail-fast versus fallback as unresolved, then proposed fallback for invalid environment values in
  its implementation boundary. That policy was not established by the fixture.

## AT-1: Resolve an ambiguous size unit

| Client         | Model             | Effort  | Result |
| -------------- | ----------------- | ------- | ------ |
| Claude Code    | claude-sonnet-5-5 | medium  | Met    |
| Codex          | gpt-6-luna        | default | Met    |
| GitHub Copilot | kimi-k3           | default | Met    |

- Every response kept decimal versus binary units unresolved, recognized that both candidate values exceed the stated
  gateway limit, and stopped implementation while unit and precedence remained unverified.
- Codex correctly did not invent how the gateway enforces its stated limit.

## AT-2: Determine configuration precedence

| Client         | Model             | Effort  | Result |
| -------------- | ----------------- | ------- | ------ |
| Claude Code    | claude-sonnet-5-5 | medium  | Met    |
| Codex          | gpt-6-luna        | default | Met    |
| GitHub Copilot | kimi-k3           | default | Met    |

- Every response derived `CLI > process environment > .env > committed default` for the supplied local path and kept the
  production runtime layer unverified.

## CC-1: Prepare an ordinary fix message

| Client         | Model             | Effort  | Result |
| -------------- | ----------------- | ------- | ------ |
| Claude Code    | claude-sonnet-5-5 | medium  | Met    |
| Codex          | gpt-6-luna        | default | Met    |
| GitHub Copilot | kimi-k3           | default | Met    |

- Every response proposed a non-breaking `fix(cache)` subject and exactly one concise changelog bullet without
  performing Git operations.

## CC-2: Prepare a breaking-change message

| Client         | Model             | Effort  | Result |
| -------------- | ----------------- | ------- | ------ |
| Claude Code    | claude-sonnet-5-5 | medium  | Met    |
| Codex          | gpt-6-luna        | default | Met    |
| GitHub Copilot | kimi-k3           | default | Met    |

- Every response included `!`, a `BREAKING CHANGE:` footer naming both methods, and one concise changelog bullet.

## PD-1: Document a generic map

| Client         | Model             | Effort  | Result |
| -------------- | ----------------- | ------- | ------ |
| Claude Code    | claude-sonnet-5-5 | medium  | Met    |
| Codex          | gpt-6-luna        | default | Met    |
| GitHub Copilot | kimi-k3           | default | Met    |

- Every response added only a generic map return type and avoided redundant summaries. Claude used `array-key` to
  account for PHP's numeric-string key coercion; Codex and Copilot used the illustrative `string` key type.

## PD-2: Document a structured dataset

| Client         | Model             | Effort  | Result |
| -------------- | ----------------- | ------- | ------ |
| Claude Code    | claude-sonnet-5-5 | medium  | Met    |
| Codex          | gpt-6-luna        | default | Met    |
| GitHub Copilot | kimi-k3           | default | Met    |

- Every response proposed only a static-analysis return shape and explained its fields. The valid annotations varied in
  precision: `list` versus integer-keyed array, and `string` versus the two observed reason literals.

## PE-1: Plan a compatible public rename

| Client         | Model             | Effort  | Result |
| -------------- | ----------------- | ------- | ------ |
| Claude Code    | claude-sonnet-5-5 | medium  | Met    |
| Codex          | gpt-6-luna        | default | Met    |
| GitHub Copilot | kimi-k3           | default | Met    |

- Every response kept `send()` for one compatibility cycle, made it a deprecated forwarder, preserved result and
  exception behavior, and labeled verification commands as planned rather than completed.

## PE-2: Plan a configuration-key migration

| Client         | Model             | Effort  | Result |
| -------------- | ----------------- | ------- | ------ |
| Claude Code    | claude-sonnet-5-5 | medium  | Met    |
| Codex          | gpt-6-luna        | default | Met    |
| GitHub Copilot | kimi-k3           | default | Met    |

- Every response preserved new-key precedence, one-cycle legacy fallback, the 30-second default, the existing validation
  path, a rollback boundary, and unexecuted verification steps.

## RP-1: Stop at a lock-only Composer limit

| Client         | Model             | Effort  | Result |
| -------------- | ----------------- | ------- | ------ |
| Claude Code    | claude-sonnet-5-5 | medium  | Met    |
| Codex          | gpt-6-luna        | default | Met    |
| GitHub Copilot | kimi-k3           | default | Met    |

- Every response classified the evidence as lock-only, refused to infer list support, identified matching versioned
  source as the missing primary evidence, and proposed no integration code.

## RP-2: Verify an installed synthetic SDK contract

| Client         | Model             | Effort  | Result  |
| -------------- | ----------------- | ------- | ------- |
| Claude Code    | claude-sonnet-5-5 | medium  | Met     |
| Codex          | gpt-6-luna        | default | Met     |
| GitHub Copilot | kimi-k3           | default | Partial |

- Every response distinguished declared, locked, and installed evidence and rejected passing floating-point seconds
  directly.
- Copilot then proposed a concrete `round()` conversion even though the fixture did not define a rounding policy and the
  prompt prohibited integration code. Claude and Codex left that caller policy unresolved.

## Outcome

The final matrix contains 37 `Met` and 5 `Partial` results. No case failed to return an artifact. The five partial
results are model-specific deviations from instructions already present in the payload, so the skill text was not
changed merely to duplicate those rules. The runner isolation was changed after the Copilot smoke test and verified by
the final sessions.

[Back to usage examples](examples.md)
